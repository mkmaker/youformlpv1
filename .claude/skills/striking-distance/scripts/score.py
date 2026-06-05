#!/usr/bin/env python3
"""Difficulty-aware win score for striking-distance candidates.

win_score = intent_weight * position_proximity * log10(volume) * (15 / (15 + KD))

Rewards pages that (a) match buyer intent, (b) already sit close to page 1,
(c) have real search volume, and (d) are easy to rank (low KD). A high-volume
page you cannot realistically rank (KD 88) scores below an easy one you can win.
"""
import argparse, json, math, sys

INTENT_WEIGHT = {"A": 3.0, "B": 1.5, "C": 1.0, "D": 0.5}


def position_proximity(pos):
    if pos is None:
        return 0.5
    if pos <= 15:
        return 4.0
    if pos <= 20:
        return 3.0
    if pos <= 30:
        return 2.0
    if pos <= 50:
        return 1.0
    return 0.5


def win_score(intent, position, kd, volume_us):
    iw = INTENT_WEIGHT.get((intent or "C").upper(), 1.0)
    kd = 5 if kd is None else float(kd)
    vol = volume_us if (volume_us is not None and volume_us >= 10) else 10
    return round(iw * position_proximity(position) * math.log10(vol + 1) * (15.0 / (15.0 + kd)), 2)


def score_candidate(c):
    return win_score(c.get("intent"), c.get("position"), c.get("kd"), c.get("volume_us"))


def main():
    ap = argparse.ArgumentParser(description="Score and rank candidates from a JSON list.")
    ap.add_argument("--file", required=True, help="JSON list of candidate dicts")
    args = ap.parse_args()
    cands = json.load(open(args.file))
    for c in cands:
        c["win_score"] = score_candidate(c)
    cands.sort(key=lambda c: c["win_score"], reverse=True)
    json.dump(cands, sys.stdout, indent=2)


if __name__ == "__main__":
    main()
