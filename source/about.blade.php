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
                <h1 class="text-4xl font-bold">About Us</h1>

                <div class="max-w-3xl relative mx-auto mt-8 bg-white text-gray-800 pb-16 border-2 border-black p-10 rounded-xl mb-10">
                    <div class="drop-shadow-none z-10 ">
                        <p class="mt-2">
                            Hey, this is Davis Baer writing this, the co-founder of Youform. I’m going to write this in the first person because I think it’s weird when people write their About page in third person.
                        </p>

                        <p class="mt-2">
                            We created Youform in 2023 with the intention of giving people a Typeform alternative that was fairly priced - but still had a great UI and UX.
                        </p>

                        <p class="mt-2">
                            I lead Youform along with my co-founder Abhishek Chakravarty.
                        </p>

                        <p class="mt-2">
                            I live in the USA (in Pennsylvania), while Abhishek lives in India (in Bangalore).
                        </p>

                        <p class="mt-2">
                            Both Abhishek and I have started successful software companies in the past:
                        </p>

                        <p class="mt-2">
                            I co-founded and grew <a href="https://www.oneupapp.io/" class="text-blue-700">OneUp</a> (a social media scheduling tool) to millions of dollars in revenue.
                        </p>

                        <p class="mt-2">
                            Abhishek has built and sold Botflow, a chatbot builder, amongst a handful of other successful products he’s created.
                        </p>

                        <p class="mt-2">
                            All form data is securely stored with AWS servers in the USA. The official company name is “Youform”, and the business is registered in India.
                        </p>

                        <p class="mt-2">
                            Financially, we are 100% bootstrapped and PROFITABLE, with many paying customers that easily cover our expenses. And we also have nearly infinite runway from the success of our past companies.
                        </p>

                        <p class="mt-2">
                            I’m not saying this to brag, but rather to give you the confidence that Youform WILL be around for years and years to come.
                        </p>

                        <p class="mt-2">
                            If there’s a feature you’re looking for that we don’t have yet, let us know. We are constantly <a href="https://youform.canny.io/" class="text-blue-700" target="_blank">adding features</a> to make it the best form builder available.
                        </p>

                        <p class="mt-2">
                            If you have any questions, you can reach out to me directly at davis@youform.com 🙂
                        </p>

                        <div class="mt-10 flex items-center justify-between space-x-4">
                            <div class="text-center">
                                <img src="/assets/images/davis.jpg" alt="" class="w-56 rounded-full shadow-md">
                                <p class="mt-2 font-semibold">
                                    Davis
                                </p>
                            </div>
                            <p class="text-3xl md:text-5xl lg:text-7xl">
                                🤝
                            </p>
                            <div class="text-center">
                                <img src="/assets/images/abhishek.jpg" alt="" class="w-56 rounded-full shadow-md">
                                <p class="mt-2 font-semibold">
                                    Abhishek
                                </p>
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
