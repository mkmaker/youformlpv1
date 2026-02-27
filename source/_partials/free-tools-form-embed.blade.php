{{-- Free Tools - Form Embed CTA --}}
{{-- Usage: @include('_partials.free-tools-form-embed', ['headline' => 'Custom headline']) --}}

<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            
            {{-- Left: Copy --}}
            <div class="text-center lg:text-left mb-10 lg:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    {{ $headline ?? 'Now collect the actual data' }}
                </h2>
                <p class="text-xl text-gray-600 mb-6">
                    {{ $subheadline ?? 'Youform makes it dead simple to create surveys that people actually complete.' }}
                </p>
                
                <ul class="space-y-3 text-left inline-block">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span><strong>40% higher</strong> completion rates than regular forms</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span><strong>Unlimited</strong> forms & responses — free forever</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span><strong>No credit card</strong> required</span>
                    </li>
                </ul>

                <div class="mt-8">
                    <a href="https://app.youform.com/register" 
                       class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-semibold px-8 py-4 rounded-lg text-lg transition-colors">
                        Create your first form — free →
                    </a>
                </div>
            </div>

            {{-- Right: Embedded Form --}}
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-purple-100 to-pink-100 rounded-2xl -z-10 opacity-60"></div>
                <div class="bg-white rounded-xl shadow-2xl border border-gray-200 overflow-hidden">
                    <div class="bg-gray-100 px-4 py-2 border-b border-gray-200 flex items-center space-x-2">
                        <div class="w-3 h-3 rounded-full bg-red-400"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        <span class="text-xs text-gray-500 ml-2">Try it yourself 👇</span>
                    </div>
                    <iframe 
                        src="https://app.youform.com/forms/xrjcjyti" 
                        loading="lazy" 
                        width="100%" 
                        height="600" 
                        frameborder="0"
                        class="w-full"
                    ></iframe>
                </div>
            </div>

        </div>
    </div>
</section>
