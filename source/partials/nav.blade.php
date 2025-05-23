<div class="max-w-7xl mx-auto">
    <div x-data="{ open: false }" class="relative overflow-hidden">
        <div class="flex justify-between items-center px-10 py-4 md:py-8 md:px-20">
            <div>
                <a href="/">
                    <img src="/assets/images/logo.png" width="170px" alt="">
                </a>
            </div>
            <div class="hidden lg:block capitalize space-x-6">
                <a class="{{ $page->current('') }} text-black font-semibold hover:underline underline-offset-2 p-2 rounded-md" href="/">Home</a>
                <a class="{{ $page->current('templates') }} text-black font-semibold hover:underline underline-offset-2 p-2 rounded-md" href="/templates">Templates</a>
                <a class="{{ $page->current('pricing') }} text-black font-semibold hover:underline underline-offset-2 p-2 rounded-md" href="/pricing">Pricing</a>
            </div>
            <div class="flex space-x-4">
                <a href="https://app.youform.com/login" class="hidden lg:block bg-vivid-yellow border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-6 py-2 text-black rounded-md">
                    Log In
                </a>
                <a href="https://app.youform.com/register" class="hidden lg:block bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-6 py-2 text-black rounded-md">
                    Sign Up
                </a>
            </div>
            <a href="#" class="inline-block lg:hidden" @click.prevent="open = !open">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 block text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-cloak x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 block text-black" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>                  
            </a>
        </div>
        <div x-show="open" x-cloak x-transition class="lg:hidden bg-coral border-y-2 border-black px-10 py-4">
            <div class="flex items-center justify-around">
                <div>
                    <a class="{{ $page->current('templates') }} text-black font-semibold hover:underline underline-offset-2 p-2 rounded-md" href="/templates">Templates</a>
                    <a class="{{ $page->current('pricing') }} text-black font-semibold hover:underline underline-offset-2 p-2 rounded-md" href="/pricing">Pricing</a>
                </div>

                <div class="flex items-center">
                    <a href="https://app.youform.com/login" class="block lg:hidden bg-lavender-rose border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-6 py-2 text-black rounded-md">
                        Log In
                    </a>
                    <a href="https://app.youform.com/register" class="hidden sm:block ml-4 lg:hidden bg-aquamarine border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-6 py-2 text-black rounded-md">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>  
    </div>
</div>