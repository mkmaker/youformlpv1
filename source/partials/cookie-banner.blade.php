<!-- Cookie Banner -->
<div 
  x-data="cookieConsent()" 
  x-init="init()" 
  x-show="showBanner" 
  x-transition 
  class="fixed bg-amber-50 bottom-4 left-1/2 transform -translate-x-1/2 w-full max-w-md shadow-xl rounded-2xl p-4 flex flex-col gap-4 text-center z-50 border-2 border-black drop-shadow-3xl"
>
  <div class="text-sm text-gray-800">
    We use cookies to improve your experience. By using our site, you agree to cookies.
  </div>
  <div class="flex justify-center gap-3">
    <button 
      @click="acceptCookies" 
      class="bg-coral text-black text-sm font-semibold border-2 border-black drop-shadow-3xl py-2 px-4 rounded-xl focus:outline-none"
    >
      Accept
    </button>
    <button 
      @click="rejectCookies" 
      class="bg-gray-200 text-gray-800 text-sm font-semibold border-2 border-black drop-shadow-3xl py-2 px-4 rounded-xl focus:outline-none"
    >
      Reject
    </button>
  </div>
  <div class="text-xs text-gray-400 mt-1">
    <a href="/privacy-policy" class="underline hover:text-gray-600">Learn more</a>
  </div>
</div>

<script>
function cookieConsent() {
  return {
    showBanner: false,
    init() {
      const consent = localStorage.getItem('cookie_consent');
      if (!consent) {
        this.showBanner = true;
      } else if (consent === 'accepted') {
        this.loadAnalytics();
      }
    },
    acceptCookies() {
      localStorage.setItem('cookie_consent', 'accepted');
      this.showBanner = false;
      this.loadAnalytics();
    },
    rejectCookies() {
      localStorage.setItem('cookie_consent', 'rejected');
      this.showBanner = false;
    },
    loadAnalytics() {
      return;
      // Dynamically inject Google Analytics script
      const script = document.createElement('script');
      script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX'; // <-- Replace with your GA ID
      script.async = true;
      document.head.appendChild(script);

      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX'); // <-- Replace with your GA ID
    }
  }
}
</script>
