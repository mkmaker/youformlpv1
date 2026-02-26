<div class="bg-gray-50 py-20"
     x-data="{
        pos: 2,
        noTransition: false,
        windowWidth: window.innerWidth,
        autoplayTimer: null,
        testimonials: [
            {
                name: 'Anna',
                role: 'Founder and CEO',
                industry: 'Media Production',
                image: '/assets/images/testimonial-anna.jpeg',
                title: 'Collect data, save money, and grow your business.',
                body: 'From start to now 10/10 experience. It\'s easy to use. The free plan is comprehensive. When I finally got ready to use the paid plan, I was so invested, I did not even think twice about the cost.',
            },
            {
                name: 'Kieran',
                role: 'Founder',
                industry: 'Marketing & Advertising',
                image: '/assets/images/testimonial-kieran.jpeg',
                title: 'By far my favorite form builder',
                body: 'Youform is by far my favorite form builder. It\'s one of those rare products that just works exactly how you want it to. Customer support is incredibly responsive. They\'ve resolved every issue I\'ve ever had. Top notch product and top notch team.',
            },
            {
                name: 'John',
                role: 'Owner',
                industry: 'Marketing & Advertising',
                image: '/assets/images/testimonial-john.jpeg',
                title: 'Switched From Typeform, Never Going Back',
                body: 'Moved over from Typeform and saved $24,000/year WITHOUT dropping performance. Team was amazing at adding features quickly and helping us scale up our efforts. Cannot recommend highly enough.',
            },
            {
                name: 'Yimin',
                role: 'CFO',
                industry: 'Consumer Services',
                image: null,
                title: 'Best-in-class support and lightning-fast responses!',
                body: 'My experience has been 10/10. It\'s a powerful, clean, and reliable tool, but the real standout is the people behind it. If you value a tool that comes with a team that actually listens and acts fast, Youform is the way to go.',
            },
            {
                name: 'Jen',
                role: 'Curriculum Committee Chair',
                industry: 'Professional Training & Coaching',
                image: null,
                title: 'EXCELLENT Product & Customer Service!!',
                body: 'They have hands-down given the best customer service I have experienced in years. They instituted changes quickly and followed up to make sure it worked the way I needed. I am a customer for LIFE.',
            },
            {
                name: 'Anuram',
                role: 'Founder',
                industry: 'Accounting Software',
                image: '/assets/images/testimonial-anuram.jpeg',
                title: 'Must have!',
                body: 'It is a great product compared to Google Forms and Microsoft. At a great price point as well. Price and the constant improvement of the product, with great support from the founder directly.',
            },
            {
                name: 'Charlie',
                role: 'Co-founder',
                industry: 'Construction Software',
                image: null,
                title: 'High quality support & good value',
                body: 'The support team is very responsive to any requests I bring to them, often responding and fixing any problems the same day. Regarding features, it\'s everything Typeform has at a fraction of the cost.',
            }
        ],

        get total() { return this.testimonials.length; },
        get isLg() { return this.windowWidth >= 1024; },

        get extended() {
            const t = this.testimonials;
            const n = t.length;
            return [t[n-2], t[n-1], ...t, t[0], t[1]];
        },

        get currentCard() {
            return ((this.pos - 2) % this.total + this.total) % this.total;
        },

        get offset() {
            if (this.isLg) {
                return (this.pos - 1) * (100 / 3);
            }
            return this.pos * 100;
        },

        next() {
            this.noTransition = false;
            this.pos++;
            if (this.pos >= this.total + 2) {
                setTimeout(() => {
                    this.noTransition = true;
                    this.pos = 2;
                }, 500);
            }
        },

        prev() {
            this.noTransition = false;
            this.pos--;
            if (this.pos < 2) {
                setTimeout(() => {
                    this.noTransition = true;
                    this.pos = this.total + 2 - 1;
                }, 500);
            }
        },

        goTo(cardIndex) {
            this.noTransition = false;
            this.pos = cardIndex + 2;
        },

        init() {
            this.autoplayTimer = setInterval(() => this.next(), 6000);
        }
    }"
    @resize.window.debounce.150="windowWidth = window.innerWidth">

    <div class="max-w-7xl mx-auto px-10 md:px-20">
        <div class="text-center mb-12">
            <p class="text-xs font-semibold px-4 py-1.5 rounded-full mb-3 bg-vivid-yellow border border-black inline-block">Loved by 70,000+ users</p>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">What our users say</h2>
        </div>

        <!-- Sliding carousel -->
        <div class="overflow-hidden pb-2">
            <div class="flex"
                 :class="noTransition ? '' : 'transition-transform duration-500 ease-in-out'"
                 :style="'transform: translateX(-' + offset + '%)'">
                <template x-for="(t, i) in extended" :key="'t'+i">
                    <div class="w-full lg:w-1/3 flex-shrink-0 px-3">
                        <div class="h-full flex flex-col rounded-xl p-6 sm:p-8 transition-all duration-500"
                             :class="i === pos
                                 ? 'bg-white border-2 border-black'
                                 : 'bg-white border border-gray-200 opacity-50'"
                             :style="i === pos ? 'box-shadow: 3px 3px 0px rgba(0,0,0,1)' : ''"
                            <!-- Stars -->
                            <div class="flex items-center space-x-0.5 mb-3">
                                <template x-for="s in 5" :key="'s'+i+'-'+s">
                                    <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                                    </svg>
                                </template>
                            </div>

                            <!-- Title -->
                            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3"
                                x-html="'&ldquo;' + t.title + '&rdquo;'"></h3>

                            <!-- Body -->
                            <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-6 flex-grow"
                               x-text="t.body"></p>

                            <!-- Author -->
                            <div class="flex items-center space-x-3 mt-auto">
                                <template x-if="t.image">
                                    <img :src="t.image" :alt="t.name" class="w-9 h-9 rounded-full object-cover" loading="lazy">
                                </template>
                                <template x-if="!t.image">
                                    <div class="w-9 h-9 rounded-full bg-coral/20 flex items-center justify-center border border-coral/30">
                                        <span class="text-xs font-bold text-coral" x-text="t.name.charAt(0)"></span>
                                    </div>
                                </template>
                                <div>
                                    <p class="font-semibold text-gray-900 text-sm" x-text="t.name"></p>
                                    <p class="text-gray-500 text-xs" x-text="t.role + ' · ' + t.industry"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Navigation: arrows + dots -->
        <div class="flex items-center justify-center space-x-6 mt-8">
            <button @click="prev()" class="text-gray-400 hover:text-black transition-colors p-1">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                </svg>
            </button>
            <div class="flex items-center space-x-2">
                <template x-for="(t, i) in testimonials" :key="'d'+i">
                    <button @click="goTo(i)"
                            class="rounded-full transition-all duration-300"
                            :class="currentCard === i ? 'bg-black w-6 h-2' : 'bg-gray-300 hover:bg-gray-400 w-2 h-2'">
                    </button>
                </template>
            </div>
            <button @click="next()" class="text-gray-400 hover:text-black transition-colors p-1">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
</div>
