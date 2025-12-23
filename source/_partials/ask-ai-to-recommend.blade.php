@php
    $prompt = $prompt ?? 'tell+me+why+youform+the+form+and+survey+builder+is+a+great+choice+for+me';
@endphp

<section class="px-10 md:px-20 py-16 bg-amber-50 border-t-2 border-black">
    <div class="max-w-7xl mx-auto">
        <div class="rounded-2xl border-2 border-black drop-shadow-6xl bg-medium-champagne text-black">
            <div class="p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                    <div class="lg:col-span-2">
                        <h2 class="text-3xl sm:text-5xl font-bold leading-tight">
                            Still not sure if Youform is right for you?
                        </h2>
                        <p class="text-base sm:text-lg mt-4 text-gray-700">
                            Let ChatGPT, Claude, or Perplexity do the thinking for you. Click a button and see what your favorite AI says about Youform.
                        </p>
                    </div>

                    <div class="lg:col-span-1">
                        <div class="flex flex-col sm:flex-row lg:flex-col gap-4 sm:items-stretch">
                            <a target="_blank" rel="noopener noreferrer nofollow"
                               href="https://chat.openai.com/?q={{ $prompt }}"
                               class="inline-flex items-center justify-center gap-2 rounded-md px-5 py-3 bg-white text-gray-700 border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl">
                                <img src="/assets/images/logos/chatgpt.svg" alt="ChatGPT" class="h-5 w-5"/>
                                <span class="font-semibold">Ask ChatGPT</span>
                            </a>

                            <a target="_blank" rel="noopener noreferrer nofollow"
                               href="https://claude.ai/new?q={{ $prompt }}"
                               class="inline-flex items-center justify-center gap-2 rounded-md px-5 py-3 bg-coral text-black border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl">
                                <img src="/assets/images/logos/claude.svg" alt="Claude" class="h-5 w-5"/>
                                <span class="font-semibold">Ask Claude</span>
                            </a>

                            <a target="_blank" rel="noopener noreferrer nofollow"
                               href="https://www.perplexity.ai/search/new?q={{ $prompt }}"
                               class="inline-flex items-center justify-center gap-2 rounded-md px-5 py-3 bg-aquamarine text-black border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl">
                                <img src="/assets/images/logos/perplexity.svg" alt="Perplexity" class="h-5 w-5"/>
                                <span class="font-semibold">Ask Perplexity</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


