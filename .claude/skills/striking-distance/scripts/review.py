#!/usr/bin/env python3
"""Control-adjusted verdict for a matured striking-distance experiment.

The point of the control set is to NOT take credit for Google's weather. If the
target page improved but the untouched control pages improved just as much, a
site-wide tide (a core update, seasonality) lifted everything and the edit gets
no credit. We only call a win when the target beat the controls.

Lower position = better, so a positive "delta" means improvement.

Input JSON (see references/measurement.md for the full schema):
{
  "page": "...",
  "shipped_date": "2026-06-05",
  "today": "2026-07-10",                # optional, defaults to system date
  "maturation_days": 28,               # optional, else default
  "min_impressions": 100,              # optional, else default
  "target": {
    "keyword": "rsvp form",
    "before": {"position": 14.8, "clicks": 12, "impressions": 1500},
    "after":  {"position":  6.1, "clicks": 140, "impressions": 9000}
  },
  "controls": [
    {"page": "...", "before_position": 24.4, "after_position": 23.9},
    {"page": "...", "before_position": 34.3, "after_position": 31.0}
  ]
}
"""
import argparse, json, statistics, sys
from datetime import date, datetime

DEFAULT_MATURATION = 28
DEFAULT_MIN_IMPR = 100
WIN_MARGIN = 3.0   # target must beat control median by >= this many positions
LOSS_MARGIN = -2.0


def _days(shipped, today):
    try:
        a = datetime.fromisoformat(shipped).date()
        b = datetime.fromisoformat(today).date() if today else date.today()
        return (b - a).days
    except Exception:
        return 9999


def evaluate(r):
    mat = r.get("maturation_days", DEFAULT_MATURATION)
    min_impr = r.get("min_impressions", DEFAULT_MIN_IMPR)
    days = _days(r["shipped_date"], r.get("today"))

    t = r["target"]
    before, after = t["before"], t["after"]
    target_delta = round(before["position"] - after["position"], 2)  # + = improved
    clicks_before, clicks_after = before.get("clicks", 0), after.get("clicks", 0)
    clicks_change = clicks_after - clicks_before

    ctrl_deltas = [c["before_position"] - c["after_position"] for c in r.get("controls", [])]
    ctrl_median = round(statistics.median(ctrl_deltas), 2) if ctrl_deltas else 0.0
    adjusted = round(target_delta - ctrl_median, 2)

    if days < mat:
        verdict = "not_ripe"
    elif after.get("impressions", 0) < min_impr:
        verdict = "inconclusive_low_volume"
    elif adjusted >= WIN_MARGIN and after["position"] < before["position"]:
        verdict = "won"
    elif target_delta <= 0 or adjusted <= LOSS_MARGIN:
        verdict = "lost"
    else:
        verdict = "inconclusive"

    return {
        "page": r["page"],
        "keyword": t.get("keyword"),
        "days_elapsed": days,
        "position_before": before["position"],
        "position_after": after["position"],
        "target_position_delta": target_delta,
        "control_median_delta": ctrl_median,
        "control_adjusted_delta": adjusted,
        "clicks_before": clicks_before,
        "clicks_after": clicks_after,
        "clicks_change": clicks_change,
        "verdict": verdict,
        "reviewed_date": (r.get("today") or date.today().isoformat()),
    }


def fmt_row(o):
    return (f"| {o['page']} | {o['keyword']} | {o['days_elapsed']}d | "
            f"{o['position_before']} -> {o['position_after']} | "
            f"{o['clicks_before']} -> {o['clicks_after']} | "
            f"{o['control_adjusted_delta']:+} | **{o['verdict']}** |")


def main():
    ap = argparse.ArgumentParser(description=__doc__,
                                 formatter_class=argparse.RawDescriptionHelpFormatter)
    ap.add_argument("--file", required=True, help="review input JSON")
    ap.add_argument("--row", action="store_true", help="also print a markdown table row")
    args = ap.parse_args()
    r = json.load(open(args.file))
    out = evaluate(r)
    json.dump(out, sys.stdout, indent=2)
    print()
    if args.row:
        print("\n| page | keyword | elapsed | position | clicks | ctrl-adj | verdict |")
        print("|---|---|---|---|---|---|---|")
        print(fmt_row(out))
    # write the enriched object back so ledger.py record-review can ingest it
    json.dump(out, open(args.file, "w"), indent=2)


if __name__ == "__main__":
    main()
