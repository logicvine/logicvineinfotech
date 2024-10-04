@extends('frontend.layouts.master')
@section('content')

  <!-- header end  -->
  <div class="relative">
    <div
      class="h-96 relative  overflow-hidden *:object-cover after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/20 via-slate-900/30 to-slate-900">
      <img src="./assets/img/blog.jpg" alt="">
    </div>
    <div
      class="absolute top-1/2 -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
      <div class="w-full">
        <div class="text-6xl md:text-[100px] font-bold !leading-[130%] text-center uppercase">
          Blog</div>


        <form class="max-w-md mx-auto">
          <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input type="search" id="default-search"
              class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-theme1 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Search Blogs..." required />
            <button type="submit"
              class="text-white absolute end-2.5 bottom-2.5 bg-theme1 hover:bg-theme1/80 focus:ring-4 focus:outline-none focus:ring-theme1 font-medium rounded-lg text-sm px-4 py-2 dark:bg-theme1 dark:hover:bg-theme1 dark:focus:ring-theme1/80">Search</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
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

      </div>

      <div class="max-w-7xl mx-auto  mt-4">
        <div class="grid grid-cols-3 gap-4">
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
  <!-- cta -->
  <section class="relative z-10 overflow-hidden bg-theme1 py-16 px-8">
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
  </section>
  <!-- cta -->