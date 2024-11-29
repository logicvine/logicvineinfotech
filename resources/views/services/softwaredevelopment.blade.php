@extends('frontend.layouts.master')
@section('content')
<!-- header end  -->
<!-- hero section  -->
<section class="relative min-h-dvh flex justify-center items-center w-full z-50">
    <div
        class="absolute inset-0 !h-full size-full before:absolute before:inset-0 before:mix-blend-darken before:bg-gradient-to-br before:from-blue-600/30 before:via-theme1/30 before:to-theme1/60 before:backdrop-blur-sm">
        <img src="{{ asset('/assets/img/software-development.jpeg') }}" alt="software-development" class="size-full object-cover">
    </div>
    <div class=" h-full !z-20 relative">
        <div class=" h-full relative z-50">
            <div class=" !transition-all h-full relative z-50 pt-28 py-16 sm:py-20 ">
                <div
                    class="mx-auto max-2xl:max-w-7xl 2xl:px-24 3xl:px-36  h-full px-6 lg:px-8 w-full relative z-10 text-white">
                    <div class="size-full">
                        <div class=" text-center items-center ">
                            <div class="size-full max-w-5xl flex flex-col justify-center">
                                <div
                                    class="2xl:text-[75px] 3xl:text-[100px] lg:text-7xl md:text-6xl text-4xl font-bold ">
                                    Software Development
                                    <span class="before:block  relative inline-block">
                                        <span
                                            class="relative text-white [-webkit-text-fill-color:transparent] lg:[-webkit-text-stroke-width:2px] [-webkit-text-stroke-width:1px] [-webkit-text-stroke-color:#eab308]">"Company"</span>
                                    </span>
                                </div>
                                <div
                                    class="md:text-base 2xl:text-2xl max-w-6xl my-4 text-center mx-auto text-sm text-white text-balance 2xl:mt-6 mt-4">
                                    At Logic Vine Infotech, we provide tailored frontend development services that
                                    create visually
                                    stunning and intuitive interfaces, ensuring an exceptional user experience that
                                    aligns perfectly
                                    with your brand.
                                </div>
                                <a href="{{ route('web.contactus') }}"
                                    class="flex item-start justify-center w-full ms-auto">
                                    <div
                                        class="rounded-lg mx-auto px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2  font-medium border-yellow-500 mt-4  w-max">
                                        <span
                                            class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-yellow-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                        <span
                                            class="relative text-base font-semibold text-yellow-500 transition duration-300 group-hover:text-white ease">Let
                                            Coffee With Us</span>
                                </a>

                            </div>
                        </div>
                        <div class="lg:col-span-6 col-span-12 lg:block hidden">
                            <div class="size-full"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- hero section end  -->

<!-- about section -->
<section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid items-center grid-cols-1 gap-y-8 lg:grid-cols-2 gap-x-16 xl:gap-x-24">
            <div class="relative mb-12">
                <img class="w-full rounded-md" src="{{ asset('/assets/img/software-code.jpg') }}" alt="" />


            </div>

            <div>
                <div class="flex gap-4 items-center">
                    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full">
                        <svg class="w-8 h-8 text-theme1" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="font-semibold text-base text-theme1">Logic Vine Infotech</div>
                </div>
                <h2 class="mt-8 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">
                    Creative and Intuitive Software Development
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-gray-600">At Logic Vine Infotech, we specialize in crafting
                    innovative and intuitive software solutions tailored to your unique business needs. Our team of
                    skilled
                    developers leverages cutting-edge technologies to build software that not only performs flawlessly
                    but also
                    drives efficiency and business growth.







                </p>
                <a href="{{ route('web.contactus') }}"
                                    class="flex item-start justify-center w-full ms-auto">
                                    <div
                                        class="rounded-lg  px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2  font-medium border-yellow-500 mt-4  w-max">
                                        <span
                                            class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-yellow-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                        <span
                                            class="relative text-base font-semibold text-yellow-500 transition duration-300 group-hover:text-white ease">Let
                                            Coffee With Us</span>
                                </a>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->
<div class="bg-theme1">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">




        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor fea icon-md h-9 w-9"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Tailored Solutions</h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Tailored software development guarantees solutions that are specifically tailored to your own business requirements, increasing productivity and efficiency</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather fea icon-md h-9 w-9"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Scalability
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Custom software can be built to evolve with your company, easily meeting changing needs as it develops.
                        .</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc fea icon-md h-9 w-9"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Enhanced Security</h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">You have more control over security protocols with bespoke software, which lowers vulnerabilities and protects important data


                    </p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout fea icon-md h-9 w-9"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Increased Integration
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Bespoke software can be easily integrated with current workflows and systems, improving overall functionality and optimizing processes.</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch fea icon-md h-9 w-9"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Long-term Cost-effectiveness
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Bespoke software frequently turns out to be more cost-effective over time because of lower maintenance and license costs, even though the original expenditure may be more.
                    </p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target fea icon-md h-9 w-9"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1"> Competitive Advantage
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Our on-demand software solutions can help you thrive in this highly competitive market. So, be ready to set your company apart with our exclusive bespoke software services.</p>
                     
                 </div>
             </div>


            </div>
    </div>
</div>

<!-- cta -->

<!-- cta -->


<!-- blog -->
@include('bloglistabouthome')
{{-- <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex items-end justify-between">
            <div class="flex-1 text-center mb-10">
                <h2 class="lg:text-6xl !leading-[150%] md:text-6xl text-4xl font-bold text-slate-900">Latest from blog
                </h2>
                <p class="md:text-xl text-base font-medium text-balance mt-5 text-slate-900">Welcome to the Logic Vine
                    Infotech blog, your go-to resource for insights, trends, and tips in digital development. Explore
                    articles
                    on mobile app development, eCommerce strategies, innovative software solutions, and industry best
                    practices.
                    Stay updated with our expert analysis and thought leadership to help you navigate the digital
                    landscape and
                    empower your business.

                </p>
            </div>

            <div class="flex">
                <button type="button"
                    class="flex items-center top-0 swiper-button-next relative z-40 justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-theme1 hover:text-white focus:bg-theme1 focus:text-white after:opacity-0 after:absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button type="button"
                    class="flex items-center  swiper-button-prev relative z-40  justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-theme1 hover:text-white focus:bg-theme1 focus:text-white after:opacity-0 after:absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="max-w-7xl mx-auto newsSwiper swiper mt-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-1.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                                        Lifestyle </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
                                March 21, 2020
                            </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> How to build coffee inside your
                                    home in 5 minutes. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do
                                amet
                                sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-2.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                                        Marketing </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
                                April 04, 2020
                            </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> Ho7 Tips to run your remote team
                                    faster and better. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do
                                amet
                                sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-3.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                                        Productivity </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> May
                                12, 2020
                            </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> 5 Productivity tips to write
                                    faster at morning. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do
                                amet
                                sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-1.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                                        Lifestyle </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
                                March 21, 2020
                            </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> How to build coffee inside your
                                    home in 5 minutes. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do
                                amet
                                sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-2.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                                        Marketing </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
                                April 04, 2020
                            </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> Ho7 Tips to run your remote team
                                    faster and better. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do
                                amet
                                sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-3.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                                        Productivity </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> May
                                12, 2020
                            </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> 5 Productivity tips to write
                                    faster at morning. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua dolor do
                                amet
                                sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</section>

<section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-theme1 sm:text-4xl lg:text-5xl">Contact us</h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-500">Amet minim mollit non deserunt
                ullamco
                est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
        </div>

        <div class="max-w-5xl mx-auto mt-12 sm:mt-16">
            <div class="grid grid-cols-1 gap-6 px-8 text-center md:px-0 md:grid-cols-3">
                <div class="overflow-hidden bg-white rounded-xl">
                    <div class="p-6">
                        <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <p class="mt-6 text-lg font-medium text-theme1">+1-316-555-0116</p>
                        <p class="mt-1 text-lg font-medium text-theme1">+1-446-526-0117</p>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded-xl">
                    <div class="p-6">
                        <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <p class="mt-6 text-lg font-medium text-theme1">contact@example.com</p>
                        <p class="mt-1 text-lg font-medium text-theme1">hr@example.com</p>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded-xl">
                    <div class="p-6">
                        <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="mt-6 text-lg font-medium leading-relaxed text-theme1">8502 Preston Rd. Ingle, Maine
                            98380, USA
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-6 overflow-hidden bg-white rounded-xl">
                <div class="px-6 py-12 sm:p-12">
                    <h3 class="text-3xl font-semibold text-center text-theme1">Send us a message</h3>

                    <form action="#" method="POST" class="mt-14">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                            <div>
                                <label for="" class="text-base font-medium text-theme1"> Your name </label>
                                <div class="mt-2.5 relative">
                                    <input type="text" name="" id=""
                                        placeholder="Enter your full name"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                </div>
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-theme1"> Email address
                                </label>
                                <div class="mt-2.5 relative">
                                    <input type="email" name="" id=""
                                        placeholder="Enter your full name"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                </div>
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-theme1"> Phone number </label>
                                <div class="mt-2.5 relative">
                                    <input type="tel" name="" id=""
                                        placeholder="Enter your full name"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                </div>
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-theme1"> Company name </label>
                                <div class="mt-2.5 relative">
                                    <input type="text" name="" id=""
                                        placeholder="Enter your full name"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="" class="text-base font-medium text-theme1"> Message </label>
                                <div class="mt-2.5 relative">
                                    <textarea name="" id="" placeholder=""
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md resize-y focus:outline-none focus:border-theme1 caret-theme1"
                                        rows="4"></textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 py-4 mt-2 text-base font-semibold text-white transition-all duration-200 bg-theme1 border border-transparent rounded-md focus:outline-none hover:bg-theme1/80 focus:bg-theme1/80">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}



<!-- blog -->

@include('frontend.layouts.form')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".newsSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>
<script>
    window.addEventListener("scroll", function() {
        var scroll = window.scrollY;
        var navbar = document.querySelector("body");
        if (scroll <= 120) {
            navbar.classList.remove("group/nav");
        } else {
            navbar.classList.add("group/nav");
        }
    });
</script>

@endsection