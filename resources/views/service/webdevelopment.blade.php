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

 

  {{-- cards-2 --}}
  <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-12 text-center sm:grid-cols-2 md:grid-cols-3 lg:gap-y-16">
            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-blue-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                    </svg>
                    <svg class="absolute text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                        />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Custom Website Development

                </h3>
                <p class="mt-4 text-base text-gray-600">
                  At LogicVine Infotech, we create bespoke websites that reflect your brand and drive results, ensuring a seamless user experience and optimal performance.

</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-orange-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z" />
                    </svg>
                    <svg class="absolute text-orange-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Custom Web Development Consulting

                </h3>
                <p class="mt-4 text-base text-gray-600">
                  At Logic Vine Infotech, we offer personalized consulting services to help you navigate the complexities of web development, ensuring your project is strategically aligned with your business goals and industry best practices</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-green-100" width="66" height="68" viewBox="0 0 66 68" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                    </svg>
                    <svg class="absolute text-green-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Custom Frontend Development
                </h3>
                <p class="mt-4 text-base text-gray-600">At Twin Power Software, we create tailor-made frontend solutions that deliver visually appealing and intuitive interfaces, enhancing user engagement and brand identity.

                </p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-purple-100" width="66" height="68" viewBox="0 0 66 68" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                    </svg>
                    <svg class="absolute text-purple-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Custom Backend Development  </h3>
                <p class="mt-4 text-base text-gray-600">
                  At Logic Vine Infotech, we create bespoke websites that reflect your brand and drive results, ensuring a seamless user experience and optimal performance.

</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-gray-100" width="65" height="70" viewBox="0 0 65 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M64.5 26C64.5 46.4345 56.4345 70 36 70C15.5655 70 0 53.9345 0 33.5C0 13.0655 13.0655 0 33.5 0C53.9345 0 64.5 5.56546 64.5 26Z" />
                    </svg>
                    <svg class="absolute text-gray-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">UI/UX designing Services

                </h3>
                <p class="mt-4 text-base text-gray-600">
                  Besides developing a custom website, focusing on the design details is a must to ensure project success. So, we have a team of creative heads who put their 100% effort into creating unique business applications and websites that are enough to steal your customers' hearts. Seek UX/UI designing services for your custom web development solutions.


                </p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-yellow-100" width="78" height="78" viewBox="0 0 78 78" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.49996 28.0002C4.09993 47.9554 14.1313 66.7885 35.5 71.5002C56.8688 76.2119 68.0999 58.4553 72.5 38.5001C76.9 18.5449 68.3688 12.711 47 7.99931C25.6312 3.28759 12.9 8.04499 8.49996 28.0002Z" />
                    </svg>
                    <svg class="absolute text-yellow-500 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                        />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Custom Web Support

                </h3>
                <p class="mt-4 text-base text-gray-600">
                  Developing a fully customized website shouldn't be the sole aim of a business owner. Maintaining an application or website timely help to keep it running smoothly and allows businesses to withstand competition. With our custom web support and maintenance services, we can help your business website stay updated as per the ongoing market trends.


                </p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-gray-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z"></path>
                    </svg>
                    <svg class="absolute text-gray-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Hire Custom Web Developers

                </h3>
                <p class="mt-4 text-base text-gray-600">
                  Want to hire custom web developers from one of the best web development firms? We can be your saviour. With a pool of dedicated web developers, we can offer you the best-ever assistance for custom web development. Do not look for customer web developers for hire anywhere else; instead, avail our services now.

                </p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-rose-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                    </svg>
                    <svg class="absolute text-rose-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                        />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Custom Web Migration & Upgradation

                </h3>
                <p class="mt-4 text-base text-gray-600">
                  Business apps and websites need constant upgradation to reinvigorate digital experiences. With our custom web migration and upgradation services, you can make your existing business solutions result-driven and successful. Upgrade your business website to the newest industry standards and give your customers an amazing web experience


                </p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-lime-100" width="62" height="65" viewBox="0 0 62 65" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 13.0264C0 33.4609 8.06546 64.0264 28.5 64.0264C48.9345 64.0264 62 50.4604 62 30.0259C62 9.59135 59.4345 4.0256 39 4.0256C18.5655 4.0256 0 -7.40819 0 13.0264Z" />
                    </svg>

                    <svg class="absolute text-lime-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">API Development Services</h3>
                <p class="mt-4 text-base text-gray-600">
                  At Dev Technosys, we'll work with you to integrate external systems with your web app. We use specially created APIs to increase the functionality and possibilities of a business website. Avail custom web development solutions from us and experience free-of-cost API development services as well.
                </p>
            </div>
        </div>
    </div>
</section>

  {{-- cards-2 --}}
  @include('frontend.layouts.form')
