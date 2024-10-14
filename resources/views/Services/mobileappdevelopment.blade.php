@extends('frontend.layouts.master')
@section('content')
  <!-- header start  -->
{{-- 
  <div class=>
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
      class="absolute inset-0 !h-full size-full before:absolute before:inset-0 before:mix-blend-darken before:bg-gradient-to-br before:from-blue-600/50 before:via-theme1/50 before:to-theme1/80 before:backdrop-blur-sm">
      <img src="./../assets/img/web-development-company-1519w.webp" alt="">
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
                    Mobile App Development
                    <span class="before:block  relative inline-block">
                      <span
                        class="relative text-white [-webkit-text-fill-color:transparent] lg:[-webkit-text-stroke-width:2px] [-webkit-text-stroke-width:1px] [-webkit-text-stroke-color:white]">"
                        Company"</span>
                    </span>
                  </div>
                  <div
                    class="md:text-base 2xl:text-2xl max-w-6xl my-4 text-center mx-auto text-sm text-white text-balance 2xl:mt-6 mt-4">
                    At Logic Vine Infotech, we provide tailored mobile app development services that deliver visually
                    appealing and intuitive apps, ensuring a seamless user experience that aligns perfectly with your
                    brand and drives business growth.
                  </div>
                  <button
                    class="rounded-lg px-3.5 mx-auto py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white  w-max">
                    <span
                      class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-theme1 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                    <span
                      class="relative text-base font-semibold text-white transition duration-300 group-hover:text-white ease">Let
                      Coffee With Us</span>
                  </button>

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
          <img class="w-full rounded-md" src="./../assets/img/Mobile-Developer-1.png" alt="" />


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
            Creative and Intuitive Software Development
          </h2>
          <p class="mt-6 text-lg leading-relaxed text-gray-600">At Logic Vine Infotech, we specialize in crafting
            innovative and intuitive software solutions tailored to your unique business needs. Our team of skilled
            developers leverages cutting-edge technologies to build software that not only performs flawlessly but also
            drives efficiency and business growth.







          </p>
          <button
            class="rounded-lg px-3.5 mx-auto py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-theme1 mt-4  w-max">
            <span
              class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-theme1 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
            <span
              class="relative text-base font-semibold text-theme1 transition duration-300 group-hover:text-white ease">Let
              Coffee With Us</span>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- about section end -->
  <div class="bg-theme1">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
      <div class="lg:grid-cols-3 sm:grid-cols-2 grid gap-4">
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">
            Native App Development </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we specialize in React Native app development, creating
            high-performance, cross-platform mobile apps with a seamless user experience. Our solutions are designed to
            align with your brand and deliver efficient, scalable results for both iOS and Android platforms.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Cross-Platform App Development
          </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we specialize in cross-platform app development, delivering
            high-quality mobile applications that work seamlessly across both iOS and Android. Our solutions ensure a
            consistent user experience, helping you reach a wider audience with a single codebase.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Mobile App Desgin Services
          </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we offer mobile app design services that focus on creating
            visually appealing, user-friendly interfaces. Our designs ensure a seamless and engaging user experience,
            perfectly aligning with your brand and optimizing app functionality across all devices.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Wearable App Development
          </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we specialize in wearable app development, creating
            innovative and intuitive apps designed for smartwatches and other wearable devices. Our solutions deliver
            seamless integration, user-friendly interfaces, and real-time functionality to enhance the user experience
            on the go.

          </p>
        </div>
      </div>



    </div>
  </div>

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




  <!-- blog -->

  @include('bloglistabout&home');

  {{-- <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex items-end justify-between">
        <div class="flex-1 text-center mb-10">
          <h2 class="lg:text-6xl !leading-[150%] md:text-6xl text-4xl font-bold text-slate-900">Latest from blog
          </h2>
          <p class="md:text-xl text-base font-medium text-balance mt-5 text-slate-900">Welcome to the Logic Vine
            Infotech blog, your go-to resource for insights, trends, and tips in digital development. Explore articles
            on mobile app development, eCommerce strategies, innovative software solutions, and industry best practices.
            Stay updated with our expert analysis and thought leadership to help you navigate the digital landscape and
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
                      src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-1.jpg" alt="" />
                  </a>

                  <div class="absolute top-4 left-4">
                    <span
                      class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                      Lifestyle </span>
                  </div>
                </div>
                <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> March 21, 2020
                </span>
                <p class="mt-5 text-2xl font-semibold">
                  <a href="#" title="" class="text-black"> How to build coffee inside your home in 5 minutes. </a>
                </p>
                <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                  amet
                  sint. Velit officia consequat duis enim velit mollit.</p>
                <a href="#" title=""
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                  Continue Reading
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
                      src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-2.jpg" alt="" />
                  </a>

                  <div class="absolute top-4 left-4">
                    <span
                      class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                      Marketing </span>
                  </div>
                </div>
                <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> April 04, 2020
                </span>
                <p class="mt-5 text-2xl font-semibold">
                  <a href="#" title="" class="text-black"> Ho7 Tips to run your remote team faster and better. </a>
                </p>
                <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                  amet
                  sint. Velit officia consequat duis enim velit mollit.</p>
                <a href="#" title=""
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                  Continue Reading
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
                      src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-3.jpg" alt="" />
                  </a>

                  <div class="absolute top-4 left-4">
                    <span
                      class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                      Productivity </span>
                  </div>
                </div>
                <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> May 12, 2020
                </span>
                <p class="mt-5 text-2xl font-semibold">
                  <a href="#" title="" class="text-black"> 5 Productivity tips to write faster at morning. </a>
                </p>
                <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                  amet
                  sint. Velit officia consequat duis enim velit mollit.</p>
                <a href="#" title=""
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                  Continue Reading
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
                      src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-1.jpg" alt="" />
                  </a>

                  <div class="absolute top-4 left-4">
                    <span
                      class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                      Lifestyle </span>
                  </div>
                </div>
                <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> March 21, 2020
                </span>
                <p class="mt-5 text-2xl font-semibold">
                  <a href="#" title="" class="text-black"> How to build coffee inside your home in 5 minutes. </a>
                </p>
                <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                  amet
                  sint. Velit officia consequat duis enim velit mollit.</p>
                <a href="#" title=""
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                  Continue Reading
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
                      src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-2.jpg" alt="" />
                  </a>

                  <div class="absolute top-4 left-4">
                    <span
                      class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                      Marketing </span>
                  </div>
                </div>
                <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> April 04, 2020
                </span>
                <p class="mt-5 text-2xl font-semibold">
                  <a href="#" title="" class="text-black"> Ho7 Tips to run your remote team faster and better. </a>
                </p>
                <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                  amet
                  sint. Velit officia consequat duis enim velit mollit.</p>
                <a href="#" title=""
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                  Continue Reading
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
                      src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-3.jpg" alt="" />
                  </a>

                  <div class="absolute top-4 left-4">
                    <span
                      class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                      Productivity </span>
                  </div>
                </div>
                <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> May 12, 2020
                </span>
                <p class="mt-5 text-2xl font-semibold">
                  <a href="#" title="" class="text-black"> 5 Productivity tips to write faster at morning. </a>
                </p>
                <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                  amet
                  sint. Velit officia consequat duis enim velit mollit.</p>
                <a href="#" title=""
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-200 border-b-2 border-transparent hover:border-theme1 focus:border-theme1">
                  Continue Reading
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
        <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-500">Amet minim mollit non deserunt ullamco
          est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
      </div>

      <div class="max-w-5xl mx-auto mt-12 sm:mt-16">
        <div class="grid grid-cols-1 gap-6 px-8 text-center md:px-0 md:grid-cols-3">
          <div class="overflow-hidden bg-white rounded-xl">
            <div class="p-6">
              <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <p class="mt-6 text-lg font-medium text-theme1">+1-316-555-0116</p>
              <p class="mt-1 text-lg font-medium text-theme1">+1-446-526-0117</p>
            </div>
          </div>

          <div class="overflow-hidden bg-white rounded-xl">
            <div class="p-6">
              <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <p class="mt-6 text-lg font-medium text-theme1">contact@example.com</p>
              <p class="mt-1 text-lg font-medium text-theme1">hr@example.com</p>
            </div>
          </div>

          <div class="overflow-hidden bg-white rounded-xl">
            <div class="p-6">
              <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <p class="mt-6 text-lg font-medium leading-relaxed text-theme1">8502 Preston Rd. Ingle, Maine 98380, USA
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
                    <input type="text" name="" id="" placeholder="Enter your full name"
                      class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                  </div>
                </div>

                <div>
                  <label for="" class="text-base font-medium text-theme1"> Email address </label>
                  <div class="mt-2.5 relative">
                    <input type="email" name="" id="" placeholder="Enter your full name"
                      class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                  </div>
                </div>

                <div>
                  <label for="" class="text-base font-medium text-theme1"> Phone number </label>
                  <div class="mt-2.5 relative">
                    <input type="tel" name="" id="" placeholder="Enter your full name"
                      class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                  </div>
                </div>

                <div>
                  <label for="" class="text-base font-medium text-theme1"> Company name </label>
                  <div class="mt-2.5 relative">
                    <input type="text" name="" id="" placeholder="Enter your full name"
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