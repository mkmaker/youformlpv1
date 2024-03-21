@extends('_layouts.main')

@section('body')

<!-- header -->
<div> 
    <div>
        <!-- navbar   -->
        @include('partials.nav')

        <!-- herosection -->
        <div class="relative max-w-4xl mx-auto mt-20 pb-20">
            <div class="flex flex-col justify-center items-center px-10 md:px-20">
                <h1 class="text-4xl font-bold">Free Google Form QR Code Generator</h1>

                <div class="relative mx-auto mt-8 bg-white text-gray-800 pb-16 border-2 border-black p-10 rounded-xl mb-10">
                    <div 
                        x-data="{
                            url: '',
                            qrcodeLink: '',
                            generate() {
                                if(! this.url) return;

                                let qrcode = new QRCode(document.querySelector('.qr-code'), {
                                    text: this.url,
                                    width: 200,
                                    height: 200,
                                    colorDark : '#000000',
                                    colorLight : '#ffffff',
                                    correctLevel : QRCode.CorrectLevel.H
                                });

                                setTimeout(() => {
                                    this.qrcodeLink = this.$refs.qrContainer.querySelector('img').src;
                                }, 300);
                            },
                        }"
                        class="drop-shadow-none z-10 ">
                        <form action="#" @submit.prevent="generate" class="mt-10">
                            <div>
                                <label for="url" class="sr-only">Paste Your Google Form URL</label>
                                <input x-model="url" type="text" name="url" id="url" autofocus class="block mx-auto w-96 mt-2 rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 border-2 border-black placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6" placeholder="Paste Your Google Form URL">
                            </div>

                            <div class="flex items-center justify-center mt-4">
                                <button type="submit" class="inline-block mx-auto bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                                    Generate QR Code
                                </button>
                            </div>
                        </form>

                        <div class="mt-10 max-w-md mx-auto text-gray-700">
                            <div class="qr-code flex items-center justify-center" x-ref="qrContainer">

                            </div>

                            <div class="flex items-center justify-center mt-10">
                                <a x-cloak x-show="qrcodeLink" :href="qrcodeLink" download="google-form.png" class="bg-gray-300 transition-all hover:bg-gray-200 text-black px-4 py-2 text-sm rounded-md shadow-sm flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>                                  
                                    <span>Download</span>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="mt-10">
                                <h2 class="font-semibold text-lg">
                                    How to get QR code for Google form?
                                </h2>
                                <p>
                                    Simply copy your Google Form URL &amp; paste it above. We will generate it for you. Yes, it is that simple. You can download the QR code and take a print or use it in your website, email etc.
                                </p>
                            </div>

                            <div class="mt-10">
                                <h2 class="font-semibold text-lg">
                                    Need a better and free Google form alternative?
                                </h2>
                                <p>
                                    Youform is a free Google form alternative which not only supports QR code but lots of other features like custom domain, partial submissions, custom branding. It also provides unlimited submissions for free. Try it and you will love it, we promise. :)
                                </p>

                                <div class="mt-10 text-center">
                                    <a href="https://app.youform.io/register" class="block mx-auto text-2xl bg-pale-violet border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl  px-10 py-2 text-black rounded-md">
                                        Create free account
                                    </a>
                                    <a href="https://app.youform.io/forms/2byfpx1j" target="_blank" class="underline group transition-all hover:no-underline block mx-auto mt-4">
                                        or, check out a sample form <span class="hidden group-hover:inline">👀</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block absolute -top-10 -right-40 -z-10">
                        <img src="/assets/images/banner-blob.png" class="w-72" alt="">
                    </div>

                    <div class="hidden lg:block absolute top-60 -left-40 -z-10">
                        <img src="/assets/images/feature-blob.png" class="w-72" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   

@include('partials.footer')

@endsection
