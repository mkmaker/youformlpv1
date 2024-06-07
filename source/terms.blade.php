@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div class="bg-amber-50">
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-7xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <h1 class="text-4xl font-bold">Terms of Service</h1>

                <div class="max-w-4xl mx-auto mt-8 text-gray-700 pb-16 border-2 border-black p-10 rounded-xl mb-10">
                    <div>
                        <p class="mt-2">1. Terms</p>
                        <p class="mt-2">
                            By accessing the website at https://youform.com, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. 
                            <br>
                            If you do not agree with any of these terms, you are prohibited from using or accessing this site. 
                            <br>
                            The materials contained in this website are protected by applicable copyright and trademark law.
                        </p>

                        <p class="mt-4">
                            2. Use License
                        </p>
                        <p class="mt-2">
                            Permission is granted to temporarily download one copy of the materials (information or software) on Youform's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                            <br>
                            modify or copy the materials;
                            <br>
                            use the materials for any commercial purpose, or for any public display (commercial or non-commercial);
                            <br>
                            attempt to decompile or reverse engineer any software contained on Youform's website;
                            <br>
                            remove any copyright or other proprietary notations from the materials; or
                            <br>
                            transfer the materials to another person or "mirror" the materials on any other server.
                            <br>
                            This license shall automatically terminate if you violate any of these restrictions and may be terminated by Youform at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
                            <br>
                            Youform may display your logo on it's website, app, or any other marketing materials.

                        </p>
                        
                        <p class="mt-4">3. Disclaimer</p>
                        <p class="mt-2">
                            The materials on Youform's website are provided on an 'as is' basis. Youform makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
                            Further, Youform does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.
                            You need to visit the privacy policy in tandem to the terms.
                        </p>
                        
                        <p class="mt-4">
                            4. Limitations
                        </p>
                        <p class="mt-2">
                            In no event shall Youform or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Youform's website, even if Youform or a Youform authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
                        </p>

                        <p class="mt-4">
                            5. Accuracy of materials
                        </p>
                        
                        <p class="mt-2">
                            The materials appearing on Youform's website could include technical, typographical, or photographic errors. Youform does not warrant that any of the materials on its website are accurate, complete or current. Youform may make changes to the materials contained on its website at any time without notice. However Youform does not make any commitment to update the materials.
                        </p>

                        <p class="mt-4">
                            6. Links
                        </p>
                        
                        <p class="mt-2">
                            Youform has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Youform of the site. Use of any such linked website is at the user's own risk.
                        </p>

                        <p class="mt-4">
                            7. Cancellation & Refunds
                        </p>
                        
                        <p class="mt-2">
                            You can cancel your subscription anytime.
                            <br>
                            In case of yearly plan, you will get a refund on pro-rata basis excluding the month of cancellation and payment gateway charges.
                            <br>
                            In the case of monthly plans, you won't get any refund.
                        </p>

                        <p class="mt-4">
                            8. Fair Usage Policy
                        </p>
                        <p class="mt-2">
                            You may use Youform for personal and commercial purposes fairly. You shall not abuse the platform under any circumstance.
                            <br>
                            You may use Youform with unlimited forms under fair usage policy. The limits are too high to reach by anyone with a genuine use case. In the case of constant overage you will be asked to upgrade to a higher plan.
                        </p>

                        <p class="mt-4">
                            9. Modifications
                        </p>
                        <p class="mt-2">
                            Youform may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.
                        </p>

                        <p class="mt-4">
                            10. Governing Law
                        </p>
                        <p class="mt-2">
                            These terms and conditions are governed by and construed in accordance with the laws of India and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.
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
