<div 
    x-data="{ 
        submissions: 5000, 
        needPro: false, 
        typeformCost: 99, 
        youformCost: 0,
        savings: 99,
        typeformPricing: {
            10: 0,
            100: 29,
            1000: 59,
            10000: 99,
            15000: 149,
            25000: 249,
            50000: 499
        },
        getTypeformPricing(value) {
            value = parseInt(value);
            for (let key in this.typeformPricing) {
                if(value <= 10 && this.needPro) return 29;

                if (value <= key) return this.typeformPricing[key];
            }
            return this.typeformPricing[50000];
        },
        init() {
            this.$watch('submissions', value => {   
                this.typeformCost = this.getTypeformPricing(value);
                this.youformCost = this.needPro ? 29 : 0;

                this.savings = this.typeformCost - this.youformCost;
            });

            this.$watch('needPro', needPro => {
                this.youformCost = needPro ? 29 : 0;

                this.typeformCost = this.getTypeformPricing(this.submissions);

                this.savings = this.typeformCost - this.youformCost;
            });
        }
    }" 
    class="my-16">
    <h4 class="text-xl sm:text-3xl xl:text-4xl font-extrabold pt-10">
        Youform vs Typeform pricing
    </h4>
    <div>
        <div class="mt-10">
            <h4 class="block text-lg font-medium text-gray-700">
                Your expected number of submissions per month?
            </h4>
            <input type="range" x-model="submissions" :min="0" :max="50000" :step="100" class="z-10 mb-1 mt-4 h-2 w-full appearance-none bg-slate-100 focus:outline-blue-700 dark:bg-slate-800 dark:focus:outline-blue-600 [&::-moz-range-thumb]:size-4 [&::-moz-range-thumb]:appearance-none [&::-moz-range-thumb]:border-none [&::-moz-range-thumb]:bg-blue-700 active:[&::-moz-range-thumb]:scale-110 [&::-moz-range-thumb]:dark:bg-blue-600 [&::-webkit-slider-thumb]:size-4 [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:border-none [&::-webkit-slider-thumb]:bg-blue-700 [&::-webkit-slider-thumb]:active:scale-110 [&::-webkit-slider-thumb]:dark:bg-blue-600 [&::-moz-range-thumb]:rounded-full [&::-webkit-slider-thumb]:rounded-full rounded-full max-w-xl mx-auto" />
            <div class="mt-2 text-lg text-gray-900">
                <span x-text="submissions.toLocaleString()"></span> submissions per month
            </div>
        </div>
        <div class="mt-4">
            <label for="needPro" class="inline-flex items-center">
                <input type="checkbox" id="needPro" x-model="needPro" class="form-checkbox h-5 w-5 text-blue-600">
                <span class="ml-2 text-lg text-gray-700">I need Youform PRO</span>
            </label>
        </div>
    </div>

    <div class="flex justify-around mt-10 max-w-md mx-auto">
        <div class="text-center">
            <h3 class="text-3xl font-bold">Youform</h3>
            <div class="mt-4 flex items-center text-4xl space-x-3 justify-center">
                <div>
                    $<span x-cloak x-text="youformCost"></span>
                </div>
                <div>
                    <span x-cloak x-show="submissions <= 10">😊</span>
                    <span x-cloak x-show="submissions > 10 && submissions <= 100">😃</span>
                    <span x-cloak x-show="submissions > 100 && submissions <= 1000">😄</span>
                    <span x-cloak x-show="submissions > 1000 && submissions <= 10000">😁</span>
                    <span x-cloak x-show="submissions > 10000 && submissions <= 15000">😂</span>
                    <span x-cloak x-show="submissions > 15000 && submissions <= 25000">🤣</span>
                    <span x-cloak x-show="submissions > 25000 && submissions <= 50000">🥳</span>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h3 class="text-3xl font-bold">Typeform</h3>
            <div class="mt-4 flex items-center text-4xl space-x-3 justify-center">
                <div class="">
                    $<span x-cloak x-text="typeformCost"></span>
                </div>
                <div class="">
                    <span x-cloak x-show="submissions <= 10">😊</span>
                    <span x-cloak x-show="submissions > 10 && submissions <= 100">🙂</span>
                    <span x-cloak x-show="submissions > 100 && submissions <= 1000">😐</span>
                    <span x-cloak x-show="submissions > 1000 && submissions <= 10000">😟</span>
                    <span x-cloak x-show="submissions > 10000 && submissions <= 15000">😰</span>
                    <span x-cloak x-show="submissions > 15000 && submissions <= 25000">😩</span>
                    <span x-cloak x-show="submissions > 25000 && submissions <= 50000">😭</span>
                </div>
            </div>
        </div>
    </div>

    <p class="mt-10 font-semibold" x-show="savings > 0">
        You save <span class="text-red-700">$</span><span x-text="typeformCost - youformCost" class="text-red-700"></span> per month ✌️
    </p>

</div>