@extends('frontend.layouts.master')
@section('content')

<!-- header end  -->

  <!-- hero -->
  <section>
    <div class="md:h-dvh relative h-auto bg-no-repeat bg-right max-md:!bg-none ">
      <div class="absolute size-full inset-0 -z-50">
        <img src="{{ asset('/assets/img/team2.jpg') }}" class="size-full object-cover" alt="">
      </div>
      <div class="container px-3 h-full mx-auto grid md:grid-cols-2 grid-cols-1">
        <div
          class="bg-theme1 order-2 md:order-1  flex-col flex h-full justify-center md:shadow-[-300px_0px_0px_0px_#120B37]">
          <div class="text-white px-2 text-lg font-semibold">
            Newest Blog
          </div>
          <div class="text-white px-2 capitalize xxl:text-7xl xl:text-6xl lg:text-3xl md:text-2xl sm:text-3xl text-3xl">
            Empowering Digital Transformation

          </div>
          <div class="text-slate-400 px-2 pe-5 pt-2 text-base">
            "Unlocking Creativity, Empowering Perspectives: Your Premier Source for Thoughtful Insights and
            Inspiration!"
          </div>
          <button
            class="rounded-lg px-3.5 mt-4 py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-white  w-max">
            <span
              class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-theme1 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
            <span
              class="relative text-base font-semibold text-white transition duration-300 group-hover:text-white ease">Let
              Coffee With Us</span>
          </button>
        </div>

      </div>
    </div>

  </section>
  <!-- hero -->

  <section class="py-10 bg-gray-100 sm:py-16 ">
    <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
      <div class="max-w-2xl mx-auto text-center">
       
        <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
          <span class="text-transparent bg-clip-text font-semibold bg-gradient-to-r to-theme1 from-yellow-400">Expertise & 
 
          </span>Success Stories</h1>
<p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>

      </div>

      <div class="grid grid-cols-1 gap-8 mt-10 text-center sm:gap-x-8 md:grid-cols-3">
        <div>
          <h3 class="font-bold text-7xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-blue-600"> 6+ </span>
          </h3>
          <p class="mt-4 text-xl font-medium text-gray-900">Years in business</p>
          <p class="text-base mt-0.5 text-gray-500">Creating the successful path</p>
        </div>

        <div>
          <h3 class="font-bold text-7xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-blue-600"> 4821 </span>
          </h3>
          <p class="mt-4 text-xl font-medium text-gray-900">Projects delivered</p>
          <p class="text-base mt-0.5 text-gray-500">In last 6 years</p>
        </div>

        <div>
          <h3 class="font-bold text-7xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-blue-600"> 37+ </span>
          </h3>
          <p class="mt-4 text-xl font-medium text-gray-900">Team members</p>
          <p class="text-base mt-0.5 text-gray-500">Working for your success</p>
        </div>
      </div>
    </div>
  </section>

  <!-- our value -->
  <div class="py-10 bg-theme1 sm:py-16">
    <h1 class="mb-4 text-3xl font-bold text-gray-100  md:text-5xl lg:text-6xl text-center">
      <span class="text-transparent bg-clip-text font-semibold bg-gradient-to-r to-gray-100 from-yellow-400">
        Integrity at 
      </span> Our Core.</h1>
    <div class="max-w-7xl grid grid-cols-3 gap-4 items-stretch *:h-full *:*:h-full">
      <div class="relative flex flex-col justify-center overflow-hidden py-4 ">
        <div
          class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
          <span
            class="absolute top-10 z-0 h-20 w-20 rounded-full bg-blue-800 transition-all duration-300 group-hover:scale-[10]"></span>
          <div class="relative z-10 mx-auto max-w-md">
            <span
              class="grid  *:size-10 *:text-white h-20 w-20 place-items-center rounded-full bg-blue-800 transition-all duration-300 group-hover:bg-theme1">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 352 512" height="200px"
                width="200px" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z">
                </path>
              </svg>
            </span>
            <div class="font-semibold text-xl text-theme1 space-y-6 pt-5 group-hover:text-white/90 ">
              Innovation
            </div>
            <div class=" text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
              <p>We embrace cutting-edge technology to create forward-thinking solutions that drive success.</p>
            </div>
            <div class="pt-5 text-base font-semibold leading-7">

            </div>
          </div>
        </div>
      </div>
      <div class="relative flex flex-col justify-center overflow-hidden py-4 ">
        <div
          class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
          <span
            class="absolute top-10 z-0 h-20 w-20 rounded-full bg-blue-800 transition-all duration-300 group-hover:scale-[10]"></span>
          <div class="relative z-10 mx-auto max-w-md">
            <span
              class="grid *:size-10 *:text-white  h-20 w-20 place-items-center rounded-full bg-blue-800 transition-all duration-300 group-hover:bg-theme1">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" height="200px"
                width="200px" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z">
                </path>
              </svg>
            </span>
            <div class="font-semibold text-xl text-theme1 space-y-6 pt-5 group-hover:text-white/90 ">
              Integrity
            </div>
            <div class=" text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
              <p>We prioritize honesty, transparency, and reliability in everything we do. </p>
            </div>
            <div class="pt-5 text-base font-semibold leading-7">

            </div>
          </div>
        </div>
      </div>
      <div class="relative flex flex-col justify-center overflow-hidden py-4 ">
        <div
          class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
          <span
            class="absolute top-10 z-0 h-20 w-20 rounded-full bg-blue-800 transition-all duration-300 group-hover:scale-[10]"></span>
          <div class="relative z-10 mx-auto max-w-md">
            <span
              class="grid *:size-10 *:text-white h-20 w-20 place-items-center rounded-full bg-blue-800 transition-all duration-300 group-hover:bg-theme1">
              <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 17.456C11.2389 17.8053 10.3922 18 9.5 18C6.18629 18 3.5 15.3137 3.5 12C3.5 8.68629 6.18629 6 9.5 6C10.3922 6 11.2389 6.19474 12 6.54404C12.7611 6.19474 13.6078 6 14.5 6C17.8137 6 20.5 8.68629 20.5 12C20.5 15.3137 17.8137 18 14.5 18C13.6078 18 12.7611 17.8053 12 17.456ZM10.0003 15.969C9.83637 15.9895 9.66942 16 9.5 16C7.29086 16 5.5 14.2091 5.5 12C5.5 9.79086 7.29086 8 9.5 8C9.66942 8 9.83637 8.01053 10.0003 8.03098C9.06656 9.08871 8.5 10.4782 8.5 12C8.5 13.5218 9.06656 14.9113 10.0003 15.969ZM13.9998 8.03098C14.1636 8.01054 14.3306 8 14.5 8C16.7091 8 18.5 9.79086 18.5 12C18.5 14.2091 16.7091 16 14.5 16C14.3306 16 14.1636 15.9895 13.9998 15.969C14.9334 14.9113 15.5 13.5218 15.5 12C15.5 10.4782 14.9334 9.08872 13.9998 8.03098ZM12 8.87732C12.9145 9.61038 13.5 10.7368 13.5 12C13.5 13.2632 12.9145 14.3896 12 15.1227C11.0855 14.3896 10.5 13.2632 10.5 12C10.5 10.7368 11.0855 9.61038 12 8.87732Z"
                  fill="currentColor"></path>
              </svg>
            </span>
            <div class="font-semibold text-xl text-theme1 space-y-6 pt-5 group-hover:text-white/90 ">
              Collaboration
            </div>
            <div class=" text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
              <p>Teamwork and open communication are at the heart of how we operate, ensuring effective solutions.
              </p>
            </div>
            <div class="pt-5 text-base font-semibold leading-7">

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- our value -->

  <!-- about section -->
  <section class="bg-gray-100 py-8 sm:py-14 lg:py-16">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
      <div class="grid items-center grid-cols-1 overflow-hidden gap-y-8 lg:grid-cols-2 gap-x-16 xl:gap-x-24">
        <div class="relative mb-12">
          <img class="w-full rounded-md z-10" src="{{ asset('assets/img/aboutimg.jpg') }}" alt=""  />
          <div class=" bg-gray-100 w-60 h-28 rounded-2xl absolute -top-32 left-0 rotate-45"></div>
          <div class=" bg-gray-100 w-60 h-28 rounded-2xl absolute -bottom-32 right-0 rotate-45"></div>
          <div class=" bg-gray-100 w-60 h-28 rounded-2xl absolute -bottom-32 right-0 rotate-45"></div>


        </div>

        <div>
          <div class="flex gap-4 items-center">
            <div class="flex items-center justify-center size-14 bg-yellow-500/50 rounded-full">
             <div class="size-10 rounded-full bg-yellow-500 flex justify-center items-center">
              <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
             </div>
            </div>
            <div class="font-semibold text-lg text-yellow-500">LogicVine Infotech</div>
          </div>
        
   <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
     <span class="text-transparent bg-clip-text font-semibold bg-gradient-to-r to-theme1 from-yellow-400">Leading the Way in 
        </span> Digital Solutions.</h1>
     <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>

          <p class="mt-6 text-lg leading-relaxed text-gray-600">At Logic Vine, we believe that technology is not just a
            tool but a catalyst for transformation. Founded on the principles of innovation, integrity, and excellence,
            we are dedicated to empowering businesses with tailored IT solutions that drive success and efficiency. .
          </p>
          <button
            class="rounded-lg px-3.5 mx-auto py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-yellow-500 mt-4  w-max">
            <span
              class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-yellow-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
            <span
              class="relative text-base font-semibold text-yellow-500 transition duration-300 group-hover:text-white ease">Let
              Coffee With Us</span>
          </button>
        </div>
      </div>
    </div>
  </section>

    <!-- cta -->
 
    <section class="relative z-10 overflow-hidden bg-theme1 py-8 sm:py-14 lg:py-16 px-8">
      <div class="max-w-7xl mx-auto lg:px-8 px-6">
        <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4 lg:w-1/2">
            <div class="text-center lg:text-left ">
              <div class="mb-10 lg:mb-0 ">
                <h1
                  class="mt-0 mb-3 text-3xl font-bold leading-tight sm:text-4xl sm:leading-tight md:text-[40px] md:leading-tight text-yellow-500 ">
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
                class="rounded-lg px-3.5 mx-auto py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-yellow-500  w-max">
                <span
                  class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-yellow-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
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
            <circle cx="40.9984" cy="1.49626" r="1.49626" transform="rotate(90 40.9984 1.49626)" fill="#e6b313"></circle>
            <circle cx="27.8304" cy="1.49626" r="1.49626" transform="rotate(90 27.8304 1.49626)" fill="#e6b313"></circle>
            <circle cx="14.6644" cy="1.49626" r="1.49626" transform="rotate(90 14.6644 1.49626)" fill="#e6b313"></circle>
            <circle cx="1.49642" cy="1.49626" r="1.49626" transform="rotate(90 1.49642 1.49626)" fill="#e6b313"></circle>
            <circle cx="40.9984" cy="14.6642" r="1.49626" transform="rotate(90 40.9984 14.6642)" fill="#e6b313"></circle>
            <circle cx="27.8304" cy="14.6642" r="1.49626" transform="rotate(90 27.8304 14.6642)" fill="#e6b313"></circle>
            <circle cx="14.6644" cy="14.6642" r="1.49626" transform="rotate(90 14.6644 14.6642)" fill="#e6b313"></circle>
            <circle cx="1.49642" cy="14.6642" r="1.49626" transform="rotate(90 1.49642 14.6642)" fill="#e6b313"></circle>
            <circle cx="40.9984" cy="27.8302" r="1.49626" transform="rotate(90 40.9984 27.8302)" fill="#e6b313"></circle>
            <circle cx="27.8304" cy="27.8302" r="1.49626" transform="rotate(90 27.8304 27.8302)" fill="#e6b313"></circle>
            <circle cx="14.6644" cy="27.8302" r="1.49626" transform="rotate(90 14.6644 27.8302)" fill="#e6b313"></circle>
            <circle cx="1.49642" cy="27.8302" r="1.49626" transform="rotate(90 1.49642 27.8302)" fill="#e6b313"></circle>
            <circle cx="40.9984" cy="40.9982" r="1.49626" transform="rotate(90 40.9984 40.9982)" fill="#e6b313"></circle>
            <circle cx="27.8304" cy="40.9963" r="1.49626" transform="rotate(90 27.8304 40.9963)" fill="#e6b313"></circle>
            <circle cx="14.6644" cy="40.9982" r="1.49626" transform="rotate(90 14.6644 40.9982)" fill="#e6b313"></circle>
            <circle cx="1.49642" cy="40.9963" r="1.49626" transform="rotate(90 1.49642 40.9963)" fill="#e6b313"></circle>
            <circle cx="40.9984" cy="54.1642" r="1.49626" transform="rotate(90 40.9984 54.1642)" fill="#e6b313"></circle>
            <circle cx="27.8304" cy="54.1642" r="1.49626" transform="rotate(90 27.8304 54.1642)" fill="#e6b313"></circle>
            <circle cx="14.6644" cy="54.1642" r="1.49626" transform="rotate(90 14.6644 54.1642)" fill="#e6b313"></circle>
            <circle cx="1.49642" cy="54.1642" r="1.49626" transform="rotate(90 1.49642 54.1642)" fill="#e6b313"></circle>
          </g>
        </svg>
      </span>
    </section>
    <!-- cta -->


  <!-- blog -->
  {{-- <section class="pt-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex items-end justify-between">
        <div class="flex-1 text-center mb-10">
          <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
            <span class="text-transparent bg-clip-text font-semibold bg-gradient-to-r to-theme1 from-yellow-400">
              Latest From 
            </span> Blog.</h1>
          <p class="md:text-xl text-base font-medium text-balance mt-5 text-slate-900">Welcome to the Logic Vine
            Infotech blog, your go-to resource for insights, trends, and tips in digital development. Explore articles
            on mobile app development, eCommerce strategies, innovative software solutions, and industry best practices.
            Stay updated with our expert analysis and thought leadership to help you navigate the digital landscape and
            empower your business.

          </p>
        </div>

        <div class="hidden">
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
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 hover:text-yellow-500 duration-500 transition-all duration-200 border-b-2 border-transparent hover:border-yellow-500 focus:border-yellow-500">
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
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 hover:text-yellow-500 duration-500 transition-all duration-200 border-b-2 border-transparent hover:border-yellow-500 focus:border-yellow-500">
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
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 hover:text-yellow-500 duration-500 transition-all duration-200 border-b-2 border-transparent hover:border-yellow-500 focus:border-yellow-500">
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
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 hover:text-yellow-500 duration-500 transition-all duration-200 border-b-2 border-transparent hover:border-yellow-500 focus:border-yellow-500">
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
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 hover:text-yellow-500 duration-500 transition-all border-b-2 border-transparent hover:border-yellow-500 focus:border-yellow-500">
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
                  class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 hover:text-yellow-500 duration-500 transition-all duration-200 border-b-2 border-transparent hover:border-yellow-500 focus:border-yellow-500">
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
  </section> --}}
    @include('frontend.layouts.form')
  @endsection