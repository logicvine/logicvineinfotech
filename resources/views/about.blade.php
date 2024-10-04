@extends('frontend.layouts.master')
@section('content')

<!-- header end  -->

  <!-- hero -->
  <section>
    <div class="md:h-dvh relative h-auto bg-no-repeat bg-right max-md:!bg-none ">
      <div class="absolute size-full inset-0 -z-50">
        <img src="./assets/img/team2.jpg" class="size-full object-cover" alt="">
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
        <div class="lg:text-6xl !leading-[150%] md:text-6xl text-4xl font-bold text-black">
          Number Tell Our Story
        </div>
        <p class="mt-3 text-xl leading-relaxed text-gray-600 md:mt-8">Amet minim mollit non deserunt ullamco est sit
          aliqua dolor do amet sint. Velit officia consequat duis.</p>
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
    <div class="lg:text-6xl !leading-[150%] md:text-6xl text-4xl font-bold text-center text-white pb-4">Our Value</div>
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

  <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
      <div class="grid items-center grid-cols-1 gap-y-8 lg:grid-cols-2 gap-x-16 xl:gap-x-24">
        <div class="relative mb-12">
          <img class="w-full rounded-md" src="./assets/img/what-we-do.png" alt="" />


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
            Discover Logic Vine Infotech
          </h2>
          <p class="mt-6 text-lg leading-relaxed text-gray-600">At Logic Vine, we believe that technology is not just a
            tool but a catalyst for transformation. Founded on the principles of innovation, integrity, and excellence,
            we are dedicated to empowering businesses with tailored IT solutions that drive success and efficiency. .
          </p>
          <button
            class="rounded-lg px-3.5 mx-auto py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-theme1 mt-4  w-max">
            <span
              class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-theme1 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
            <span
              class="relative text-base font-semibold text-theme1 transition duration-300 group-hover:text-white ease">Contact
              Us</span>
          </button>
        </div>
      </div>
    </div>
  </section>


  <!-- blog -->
  <section class="pt-10 bg-gray-100 sm:py-16 lg:py-24">
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

  {{-- <section class="pb-10 bg-gray-100 sm:py-16 lg:py-24">
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

            <form action="{{ route('submit.contactus') }}" method="POST" class="mt-14">
              @csrf
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                <div>
                  <label for="" class="text-base font-medium text-theme1"> Your name </label>
                  <div class="mt-2.5 relative">
                    <input type="text" name="name" id="" placeholder="Enter your full name"
                      class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                  </div>
                </div>

                <div>
                  <label for="" class="text-base font-medium text-theme1"> Email address </label>
                  <div class="mt-2.5 relative">
                    <input type="email" name="email" id="" placeholder="Enter your full name"
                      class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                  </div>
                </div>

                <div>
                  <label for="" class="text-base font-medium text-theme1"> Phone number </label>
                  <div class="mt-2.5 relative">
                    <input type="tel" name="phone" id="" placeholder="Enter your full name"
                      class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                  </div>
                </div>

                <div>
                  <label for="" class="text-base font-medium text-theme1"> Company name </label>
                  <div class="mt-2.5 relative">
                    <input type="text" name="cmpname" id="" placeholder="Enter your full name"
                      class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                  </div>
                </div>

                <div class="sm:col-span-2">
                  <label for="" class="text-base font-medium text-theme1"> Message </label>
                  <div class="mt-2.5 relative">
                    <textarea name="message" id="" placeholder=""
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
  @endsection