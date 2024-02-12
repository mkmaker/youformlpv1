@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div>
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-7xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <h1 class="text-4xl font-bold">Support</h1>

                <div class="max-w-lg mx-auto mt-8 text-gray-700 pb-16 border-2 border-black p-10 rounded-xl mb-10">
                    <div class="drop-shadow-none">
                        <p class="mt-2">Hello there,</p>

                        <p class="mt-2">
                            Looking for something that you haven't found yet on our website? A feature request? A bug? Want to give some feedback or simply want to say hi?
                        </p>

                        <p class="mt-2">
                            Feel free to contact us at <a href="mailto:abhi@youform.io" class="text-blue-700">abhi@youform.io</a>
                        </p>

                        <p class="mt-2">
                            Our registered office address: <br>
                            A004, BPTP The Resort,
                            Faridabad, Haryana, 121004.
                            India
                            +91-8447999488, +91-7980321617
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   

<!-- Faq -->
{{-- <div class="-mt-10 sm:-mt-16">
    <div class="pt-28 lg:pt-48 pb-20 bg-amber-50">
        <div class="relative max-w-7xl mx-auto -mt-16 pb-20">
            <div class="flex flex-col justify-center">
                <div class="">
                    <p class="text-center text-3xl sm:text-5xl xl:text-6xl font-bold mb-6 pt-10">
                        Frequently Asked Question
                    </p>
                </div>
                <div class="mt-10">
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                            <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                                <div  class="flex justify-between  px-4 py-10 text-3xl">
                                    <p class="text-black font-medium">Is Youform free?</p>
                                    <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                
                                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                      </svg>
                                </div>
                                <div x-show="open">
                                    <p class=" px-4 py-10 text-xl text-black">
                                        Youform is the best FREE alternative to Typeform in the market. While Typeform provides ONLY 10 responses in free account, Youform provides unlimited responses and forms in free account. 
                                    </p>
                                </div>   
                            </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 text-3xl">
                                <p class="text-black font-medium">What is Youform PRO?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 text-xl text-black">
                                    Youform PRO provides you some advanced features like ability to invite team members, manage forms in workspaces, add your custom domain and remove Youform's branding from your forms.
                                </p>
                            </div>   
                        </div>      
                    </div>
                    <div x-data="{ open: false }" class="border-y-2 border-black ">
                        <div class="w-4/5 mx-auto cursor-pointer" @click="open = !open">
                            <div  class="flex justify-between  px-4 py-10 text-3xl">
                                <p class="text-black font-medium">Can I request some features?</p>
                                <svg x-show="!open"  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                  </svg>
                            </div>
                            <div x-show="open">
                                <p class=" px-4 py-10 text-xl text-black">
                                    Sure, tweet or send us a DM <a href="https://twitter.com/youformio">@youformio</a> on tweeter and we would be happy to help!
                                </p>
                            </div>   
                        </div>      
                    </div>
                    
                </div>    
            </div>
                
            </div>
        </div>
    </div>
</div> --}}

@include('partials.footer')

@endsection