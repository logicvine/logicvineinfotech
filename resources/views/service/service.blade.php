@extends('frontend.layouts.master')
@section('content')

  {{-- <!-- hero section  --> --}}
  <section class="relative min-h-dvh pt-14 flex justify-center items-center w-full z-50">
    <div
      class="absolute inset-0 !h-full size-full before:absolute before:inset-0 before:mix-blend-darken before:bg-gradient-to-br before:from-blue-600/50 before:via-theme1/50 before:to-theme1/80">
      <img src="{{ asset('assets/img/blog-4.jpg') }}" alt="" class="size-full">
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
                    Web Development
                    <span class="before:block  relative inline-block">
                      <span
                        class="relative text-white [-webkit-text-fill-color:transparent] lg:[-webkit-text-stroke-width:2px] [-webkit-text-stroke-width:1px] [-webkit-text-stroke-color:white]">"Company"</span>
                    </span>
                  </div>
                  <div
                    class="md:text-base 2xl:text-2xl max-w-6xl my-4 text-center mx-auto text-sm text-white text-balance 2xl:mt-6 mt-4">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s
                  </div>
                  <button
                    class="rounded-lg px-3.5 mx-auto py-2 m-1 overflow-hidden relative group cursor-pointer border-2 font-medium border-yellow-500  w-max">
                    <span
                      class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-yellow-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                    <span
                      class="relative text-base font-semibold text-yellow-500 transition duration-300 group-hover:text-white ease">Let
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
  {{-- <!-- hero section end  --> --}}

    {{-- <!-- about section --> --}}
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
    {{-- about end --}}

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

  {{-- cards --}}
  <div class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
      <div class="lg:grid-cols-3 sm:grid-cols-2 grid gap-4 ">
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <div>
            <div>
              
            </div>
          <p class="font-semibold text-theme1 text-xl ">Custom Website Development </p>
          </div>
          <p class="text-base mt-4">At Logic Vine Infotech, we create bespoke websites that reflect your brand and drive
            results, ensuring a seamless user experience and optimal performance.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Custom Web Development Consulting </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we offer personalized consulting services to help you
            navigate
            the complexities of web development, ensuring your project is strategically aligned with your business goals
            and industry best practices
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Custom Frontend Development </p>
          <p class="text-base mt-4">At Twin Power Software, we create tailor-made frontend solutions that deliver
            visually appealing and intuitive interfaces, enhancing user engagement and brand identity.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Custom Backend Development </p>
          <p class="text-base mt-4">At Logic Vine Infotech, we create bespoke websites that reflect your brand and drive
            results, ensuring a seamless user experience and optimal performance.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">UI/UX designing Services </p>
          <p class="text-base mt-4">Besides developing a custom website, focusing on the design details is a must to
            ensure project success. So, we have a team of creative heads who put their 100% effort into creating unique
            business applications and websites that are enough to steal your customers' hearts. Seek UX/UI designing
            services for your custom web development solutions.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Custom Web Support & Maintenance Services </p>
          <p class="text-base mt-4">Developing a fully customized website shouldn't be the sole aim of a business owner.
            Maintaining an application or website timely help to keep it running smoothly and allows businesses to
            withstand competition. With our custom web support and maintenance services, we can help your business
            website stay updated as per the ongoing market trends.

          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Hire Custom Web Developers </p>
          <p class="text-base mt-4">Want to hire custom web developers from one of the best web development firms? We
            can be your saviour. With a pool of dedicated web developers, we can offer you the best-ever assistance for
            custom web development. Do not look for customer web developers for hire anywhere else; instead, avail our
            services now.
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">Custom Web Migration & Upgradation </p>
          <p class="text-base mt-4">Business apps and websites need constant upgradation to reinvigorate digital
            experiences. With our custom web migration and upgradation services, you can make your existing business
            solutions result-driven and successful. Upgrade your business website to the newest industry standards and
            give your customers an amazing web experience
          </p>
        </div>
        <div
          class="bg-white shadow hover:shadow-2xl duration-300 hover:-translate-y-1 p-4 border relative before:absolute before:size-12 before:bg-sky-200/50 before:-inset-6 overflow-hidden before:hover:size-full before:hover:rounded-none before:hover:inset-0 before:duration-300 before:-z-10 before:rounded-full ">
          <p class="font-semibold text-theme1 text-xl ">API Development Services </p>
          <p class="text-base mt-4">At Dev Technosys, we'll work with you to integrate external systems with your web
            app. We use specially created APIs to increase the functionality and possibilities of a business website.
            Avail custom web development solutions from us and experience free-of-cost API development services as well.
          </p>
        </div>


      </div>



    </div>
  </div>
  {{-- cards --}}