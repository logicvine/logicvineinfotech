@extends('frontend.layouts.master')
@section('content')
{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="./src/output.css">
  <title>Document</title>
</head> --}}

  <!-- header start  -->

  {{-- <div class=>
    <header
      class="shadow-lg group-[]/nav:bg-white group-[]/nav:fixed group-[]/nav:animate-fixed-nav bg-transparent backdrop-blur-sm z-[999] overflowhidden fixed top-0 w-full">
      <div class="max-2xl:max-w-7xl 2xl:px-24 3xl:px-36  mx-auto lg:pb-3 group-[]/nav:py-3 py-3 px-6 lg:px-8 z-50">
        <div class="flex items-center justify-between relative">
          <a href="./../index.html">
            <img class="3xl:h-16 2xl:h-12 h-10 block group-[]/nav:hidden" src="./../assets/img/logo-white.png"
              alt="logo" />
            <img class="3xl:h-16 2xl:h-12 h-10 hidden group-[]/nav:block" src="./../assets/img/logo.png" alt="logo" />
          </a>

          <div class="flex items-center gap-5">
            <ul class="lg:flex gap-8 hidden">
              <li class="group">
                <a href="./../index.html"
                  class="flex itms-center text-sm 2xl:text-base 3xl:text-lg text-white group-[]/nav:text-black">
                  Home

                </a>

              </li>
              <li class="group relative">
                <a href="#services" id="#services"
                  class="flex items-center text-sm 2xl:text-base 3xl:text-lg text-white font-medium group-[]/nav:text-black">
                  Services

                </a>

              </li>
              <li class="group">
                <a href="./../about.html"
                  class="flex items-center text-sm 2xl:text-base 3xl:text-lg text-white font-medium group-[]/nav:text-black">
                  About Us
                </a>

              </li>
              <li class="group">
                <a href="./../blocklist.html"
                  class="flex items-center text-sm 2xl:text-base 3xl:text-lg text-white font-medium group-[]/nav:text-black">
                  Blog

                </a>

              </li>
              <li class="group">
                <a href="./../contact.html"
                  class="flex items-center text-sm 2xl:text-base 3xl:text-lg text-white font-medium group-[]/nav:text-black">
                  Contact Us

                </a>

              </li>
            </ul>
            <div class="flex items-center gap-4">





              <div class="flex lg:hidden flex-col gap-y-3 cursor-pointer">
                <label for="mmCompany" class="flex items-center gap-x-[2px] cursor-pointer">
                  <div class="flex items-center text-white group-[]/nav:text-black text-sm gap-1">
                    <span>
                      <svg class="size-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke-width="2"
                          d="M12,23 C18.0751322,23 23,18.0751322 23,12 C23,5.92486775 18.0751322,1 12,1 C5.92486775,1 1,5.92486775 1,12 C1,18.0751322 5.92486775,23 12,23 Z M12,23 C15,23 16,18 16,12 C16,6 15,1 12,1 C9,1 8,6 8,12 C8,18 9,23 12,23 Z M2,16 L22,16 M2,8 L22,8">
                        </path>
                      </svg>
                    </span>

                  </div>
                </label>
              </div>
              <div class="flex lg:hidden">
                <label for="sideToggle"
                  class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white group-[]/nav:text-black">
                  <span class="sr-only">Open menu</span>
                  <svg class="size-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                    </path>
                  </svg>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>


    <input type="checkbox" class="peer/sideToggle hidden " name="sideToggle" id="sideToggle" />
    <label for="sideToggle"
      class="fixed inset-0 -z-[1011] pointer-events-none backdrop-blur-xl bg-theme1 peer-checked/sideToggle:z-[1010] peer-checked/sideToggle:opacity-100 opacity-0 duration-100"></label>

    <div
      class="fixed flex flex-col h-screen inset-y-0 right-0 z-[1011] w-full overflow-y-auto bg-black/80 select-none text-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-theme1/10 peer-checked/sideToggle:translate-x-0 peer-checked/sideToggle:opacity-100 translate-x-full opacity-0 duration-300">
      <div class="flex items-center justify-between">
        <a href class="-ml-1.5">
          <span class="sr-only">hpit</span>
          <img class="h-7 w-auto" width="174" height="48" src="./../assets/img/logo-white.png" alt=" Logo" />
        </a>
        <label for="sideToggle" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </label>
      </div>
      <div class="mt-6 flow-root flex-fill -mr-4 pr-4">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div class="flex flex-col gap-5 items-center">
              <div class="flex flex-col w-full gap-y-5">
                <a href="javascript:;" class="text-sm font-bold text-gray-50">Home</a>
                <a href="javascript:;" class="text-sm font-bold text-gray-50">Services</a>
                <a href="javascript:;" class="text-sm font-bold text-gray-50">About Us</a>
                <a href="javascript:;" class="text-sm font-bold text-gray-50">Blog</a>
                <a href="javascript:;" class="text-sm font-bold text-gray-50">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="relative">
      <input type="checkbox" id="dropdown-toggle" class="hidden peer" />

      <div
        class="fixed top-14 inset-x-0 z-50 hidden mt-2 origin-top-left  divide-y divide-gray-100 rounded-md shadow-lg peer-checked:block">
        <div class="relative w-full">
          <input type="text"
            class="subscribe border border-gray-300 border-t-0 border-r-0 border-l-0 text-theme1 text-sm block w-full pb-1.5 p-2.5 focus:!outline-0 focus:!shadow-none focus:!ring-0 focus:border-gray-400"
            placeholder="Search for products, brands and more" required>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- header end  -->
  <!-- hero section  -->
  <section class="relative min-h-dvh flex justify-center items-center w-full z-50">
    <div
      class="absolute inset-0 !h-full size-full before:absolute before:inset-0 before:mix-blend-darken before:bg-gradient-to-br before:from-blue-800/90 before:via-blue-800/70 before:to-blue-800/80 before:backdrop-blur-sm">
      <img src="{{ asset('/assets/img/e-commerace.jpg') }}" alt="e-commerace" class="size-full object-cover ">
    </div>
    <div class=" h-full !z-20 relative">
      <div class=" h-full relative z-50">
        <div class=" !transition-all h-full relative z-50 pt-28 py-16 sm:py-20 ">
          <div
            class="mx-auto max-2xl:max-w-7xl 2xl:px-24 3xl:px-36  h-full px-6 lg:px-8 w-full relative z-10 text-white">
            <div class="size-full">
              <div class=" text-center items-center ">
                <div class="size-full max-w-5xl flex flex-col justify-center">
                  <div class="2xl:text-[75px] 3xl:text-[100px] lg:text-7xl md:text-6xl text-4xl font-bold ">
                    eCommerce Development
                    <span class="before:block  relative inline-block">
                      <span
                        class="relative text-white [-webkit-text-fill-color:transparent] lg:[-webkit-text-stroke-width:2px] [-webkit-text-stroke-width:1px] [-webkit-text-stroke-color:#eab308]">"Company"</span>
                    </span>
                  </div>
                  <div
                    class="md:text-base 2xl:text-2xl max-w-6xl my-4 text-center mx-auto text-sm text-white text-balance 2xl:mt-6 mt-4">
                    At Logic Vine Infotech, we offer tailored mobile app development services that create visually
                    stunning and intuitive apps. Our solutions ensure a seamless user experience, perfectly aligning
                    with your brand to drive business growth and engagement.
                  </div>
                  <!-- <button
                    class="rounded-lg px-3.5 mx-auto py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white  w-max">
                    <span
                      class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-theme1 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                    <span
                      class="relative text-base font-semibold text-white transition duration-300 group-hover:text-white ease">Let
                      Coffee With Us</span>
                  </button> -->
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
          <img class="w-full rounded-md" src="{{ asset('/assets/img/starting-small.jpg') }}" alt="" />


        </div>

        <div>
          <div class="flex gap-4 items-center">
            <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full">
              <svg class="w-8 h-8 text-theme1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <div class="font-semibold text-base text-theme1">Logic Vine Infotech</div>
          </div>
          <h2 class="mt-8 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">
            Creative and Intuitive eCommerce Development Company
          </h2>
          <p class="mt-6 text-lg leading-relaxed text-gray-600">At Logic Vine Infotech, we specialize in crafting
            innovative and intuitive eCommerce solutions tailored to your unique business needs. Our expert developers
            leverage cutting-edge technologies to build eCommerce platforms that offer seamless user experiences, secure
            transactions, and scalable features, driving both efficiency and business growth.
          </p>
          <a href="{{ route('web.contactus') }}"
                                    class="flex item-start w-full ">
                                    <div
                                        class="rounded-lg px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2  font-medium border-yellow-500 mt-4  w-max">
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
      <!-- <div class="lg:grid-cols-4 sm:grid-cols-2 grid gap-4">
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">B2B Ecommerce Solutions </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we provide tailored B2B eCommerce solutions designed to
            streamline your business operations and enhance customer relationships. Our scalable platforms offer
            seamless user experiences, secure transactions, and advanced features that align with your business goals,
            driving growth and efficiency.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">B2C Ecommerce Solutions

          </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we specialize in B2C eCommerce solutions that deliver
            engaging, user-friendly platforms tailored to your customers' needs. Our solutions offer seamless shopping
            experiences, secure transactions, and customizable features that help drive sales and grow your brand.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">D2C Ecommerce Solutions

          </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we provide D2C eCommerce solutions that empower brands to
            connect directly with consumers. Our platforms offer a seamless shopping experience, secure payment systems,
            and personalized features, helping you build strong customer relationships and drive brand growth.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Ecommerce Marketplace Solutions

          </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we offer comprehensive eCommerce marketplace solutions that
            enable businesses to create dynamic, multi-vendor platforms. Our solutions provide seamless user
            experiences, secure payment systems, and powerful management tools, helping you build, scale, and manage
            successful online marketplaces.

          </p>
        </div>
      </div> -->

      <div class="grid lg:grid-cols-3
      
       md:grid-cols-2 grid-cols-1 gap-6">
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor fea icon-md h-9 w-9"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">B2B Ecommerce Solutions</h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Logic Vine Infotech, we provide tailored B2B eCommerce solutions designed to streamline your business operations and enhance customer relationships. Our scalable platforms offer seamless user experiences, secure transactions, and advanced features that align with your business goals, driving growth and efficiency.</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather fea icon-md h-9 w-9"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">B2C Ecommerce Solutions
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Logic Vine Infotech, we specialize in B2C eCommerce solutions that deliver engaging, user-friendly platforms tailored to your customers' needs. Our solutions offer seamless shopping experiences, secure transactions, and customizable features that help drive sales and grow your brand.
                        .</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc fea icon-md h-9 w-9"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">D2C Ecommerce Solutions</h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Logic Vine Infotech, we provide D2C eCommerce solutions that empower brands to connect directly with consumers. Our platforms offer a seamless shopping experience, secure payment systems, and personalized features, helping you build strong customer relationships and drive brand growth.


                    </p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout fea icon-md h-9 w-9"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Ecommerce Marketplace Solutions
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Logic Vine Infotech, we offer comprehensive eCommerce marketplace solutions that enable businesses to create dynamic, multi-vendor platforms. Our solutions provide seamless user experiences, secure payment systems, and powerful management tools, helping you build, scale, and manage successful online marketplaces.</p>
                     
                 </div>
             </div>
     
             
            </div>



    </div>
  </div>

  @include('bloglistabouthome');
  <!-- cta -->
  {{-- <section class="relative z-10 overflow-hidden bg-theme1 mt-4 py-16 px-8">
    <div class="max-w-7xl mx-auto lg:px-8 px-6">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4 lg:w-1/2">
          <div class="text-center lg:text-left ">
            <div class="mb-10 lg:mb-0 ">
              <h1
                class="mt-0 mb-3 text-3xl font-bold leading-tight sm:text-4xl sm:leading-tight md:text-[40px] md:leading-tight text-white ">
                Contact Us for a Free Consultation
              </h1>
              <p class="w-full text-base font-medium leading-relaxed sm:text-lg sm:leading-relaxed text-white">
              </p>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <div class="text-center lg:text-right">

            <button
              class="rounded-lg px-3.5 mx-auto py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white  w-max">
              <span
                class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-theme1 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
              <span
                class="relative text-base font-semibold text-white transition duration-300 group-hover:text-white ease">Let
                Contact Us</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <span class="absolute top-0 right-0 -z-10">
      <svg width="388" height="250" viewBox="0 0 388 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z"
          fill="url(#paint0_linear_971_6910)"></path>
        <defs>
          <linearGradient id="paint0_linear_971_6910" x1="60.5" y1="111" x2="287" y2="111"
            gradientUnits="userSpaceOnUse">
            <stop offset="0.520507" stop-color="white"></stop>
            <stop offset="1" stop-color="white" stop-opacity="0"></stop>
          </linearGradient>
        </defs>
      </svg></span><span class="absolute top-0 right-0 -z-10"><svg width="324" height="250" viewBox="0 0 324 220"
        fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z"
          fill="url(#paint0_linear_971_6911)"></path>
        <defs>
          <linearGradient id="paint0_linear_971_6911" x1="60.5" y1="111" x2="287" y2="111"
            gradientUnits="userSpaceOnUse">
            <stop offset="0.520507" stop-color="white"></stop>
            <stop offset="1" stop-color="white" stop-opacity="0"></stop>
          </linearGradient>
        </defs>
      </svg></span><span class="absolute top-4 left-4 -z-10"><svg width="43" height="56" viewBox="0 0 43 56" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.5">
          <circle cx="40.9984" cy="1.49626" r="1.49626" transform="rotate(90 40.9984 1.49626)" fill="white"></circle>
          <circle cx="27.8304" cy="1.49626" r="1.49626" transform="rotate(90 27.8304 1.49626)" fill="white"></circle>
          <circle cx="14.6644" cy="1.49626" r="1.49626" transform="rotate(90 14.6644 1.49626)" fill="white"></circle>
          <circle cx="1.49642" cy="1.49626" r="1.49626" transform="rotate(90 1.49642 1.49626)" fill="white"></circle>
          <circle cx="40.9984" cy="14.6642" r="1.49626" transform="rotate(90 40.9984 14.6642)" fill="white"></circle>
          <circle cx="27.8304" cy="14.6642" r="1.49626" transform="rotate(90 27.8304 14.6642)" fill="white"></circle>
          <circle cx="14.6644" cy="14.6642" r="1.49626" transform="rotate(90 14.6644 14.6642)" fill="white"></circle>
          <circle cx="1.49642" cy="14.6642" r="1.49626" transform="rotate(90 1.49642 14.6642)" fill="white"></circle>
          <circle cx="40.9984" cy="27.8302" r="1.49626" transform="rotate(90 40.9984 27.8302)" fill="white"></circle>
          <circle cx="27.8304" cy="27.8302" r="1.49626" transform="rotate(90 27.8304 27.8302)" fill="white"></circle>
          <circle cx="14.6644" cy="27.8302" r="1.49626" transform="rotate(90 14.6644 27.8302)" fill="white"></circle>
          <circle cx="1.49642" cy="27.8302" r="1.49626" transform="rotate(90 1.49642 27.8302)" fill="white"></circle>
          <circle cx="40.9984" cy="40.9982" r="1.49626" transform="rotate(90 40.9984 40.9982)" fill="white"></circle>
          <circle cx="27.8304" cy="40.9963" r="1.49626" transform="rotate(90 27.8304 40.9963)" fill="white"></circle>
          <circle cx="14.6644" cy="40.9982" r="1.49626" transform="rotate(90 14.6644 40.9982)" fill="white"></circle>
          <circle cx="1.49642" cy="40.9963" r="1.49626" transform="rotate(90 1.49642 40.9963)" fill="white"></circle>
          <circle cx="40.9984" cy="54.1642" r="1.49626" transform="rotate(90 40.9984 54.1642)" fill="white"></circle>
          <circle cx="27.8304" cy="54.1642" r="1.49626" transform="rotate(90 27.8304 54.1642)" fill="white"></circle>
          <circle cx="14.6644" cy="54.1642" r="1.49626" transform="rotate(90 14.6644 54.1642)" fill="white"></circle>
          <circle cx="1.49642" cy="54.1642" r="1.49626" transform="rotate(90 1.49642 54.1642)" fill="white"></circle>
        </g>
      </svg>
    </span>
  </section> --}}
  <!-- cta -->
  {{-- <h2 class="mt-8 text-3xl text-center font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">
    Why Choose Custom eCommerce Development
  </h2> --}}

  {{-- <div class="container pt-5 md:p-5 sm:p-8 p-5 mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
    <div class="
        flex flex-col overflow-x-auto md:pt-8

        [&_table]:table-auto [&_table]:border-separate [&_table]:border-spacing-4

        [&_thead]:md:text-sm [&_thead]:text-xs [&_thead]:uppercase

        [&_thead>tr>th]:text-gray-700 [&_thead>tr>th]:md:px-5 [&_thead>tr>th]:px-3 [&_thead>tr>th]:md:font-bold [&_thead>tr>th]:font-normal [&_thead>tr>th]:text-left first:[&_thead>tr>th]:rounded-l-xl last:[&_thead>tr>th]:rounded-r-xl [&_thead>tr>th]:text-nowrap

        [&_tbody]:md:text-base [&_tbody]:text-sm

        [&_tbody>tr>td]:bg-gray-100 [&_tbody>tr>td]:cursor-default [&_tbody>tr>td]:border-2 [&_tbody>tr>td]:border-black/5 [&_tbody>tr>td]:text-black [&_tbody>tr>td]:md:p-5 [&_tbody>tr>td]:p-3 [&_tbody>tr>td]:text-left [&_tbody>tr>td]:rounded-xl
        ">
      <table>
        <thead>
          <tr>
            <th scope="col">Feature</th>
            <th scope="col">Custom Solution</th>
            <th scope="col">Ready-Made Solution</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Customization</td>
            <td>Highly customizable to meet specific business needs and requirements.</td>
            <td>Limited customization options, often adhering to pre-defined features and designs.</td>
          </tr>
          <tr>
            <td>Scalability</td>
            <td>Easily scalable to accommodate future growth and changes in business requirements.</td>
            <td>May have limitations on scalability and may require additional modules for expansion.</td>
          </tr>
          <tr>
            <td>Unique Features</td>
            <td>Can include unique features and functionalities tailored to the business model.</td>
            <td>Limited to pre-built features; difficult to incorporate unique or specialized features.</td>
          </tr>
          <tr>
            <td>Integration</td>
            <td>Seamless integration with existing systems, APIs, and third-party services.</td>
            <td>Limited integration options; may require additional development for specific integrations.</td>
          </tr>
          <tr>
            <td>Control Over Updates</td>
            <td>Complete control over updates and maintenance schedules.</td>
            <td>Dependent on the vendor for updates, which may not align with specific business timelines.</td>
          </tr>
          <tr>
            <td>Ownership and Control</td>
            <td>Full ownership and control over the source code and intellectual property.</td>
            <td>Limited ownership and control as the solution is provided by a third-party vendor.</td>
          </tr>
          <tr>
            <td>Cost Structure</td>
            <td>Upfront development costs but potential long-term cost savings due to tailored features.</td>
            <td>Lower upfront costs but may have hidden fees or ongoing subscription costs.</td>
          </tr>
          <tr>
            <td>Time-to-Market</td>
            <td>Longer development time but faster deployment of features that align with business needs.</td>
            <td>Quick deployment, but may require compromises on specific business requirements.</td>
          </tr>
          <tr>
            <td>Support and Maintenance</td>
            <td>Customized support and maintenance plans to address specific needs.</td>
            <td>Generalized support with limited flexibility to address specific concerns.</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div> --}}




  <!-- blog -->
  @include('frontend.layouts.form')



  <!-- blog -->
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
    window.addEventListener("scroll", function () {
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
