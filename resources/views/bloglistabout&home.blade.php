    <!-- header end  -->
    <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">    
            <div class="max-w-7xl mx-auto newsSwiper swiper mt-4">
                <div class="grid grid-cols-3 gap-4">
                    @forelse ($data as $item)
                    <div class="swiper-slide">
                      <div class="overflow-hidden bg-white rounded shadow">
                          <div class="p-5">
                              <div class="relative">
                                  <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                      <img class="object-cover w-full h-full"
                                          src="{{ asset('gallery').'/'.$item->image }}"
                                          alt="" />
                                  </a>

                                  <div class="absolute top-4 left-4">
                                      <span
                                          class="px-4 py-2 text-xs font-semibold tracking-widest text-theme1 uppercase bg-white rounded-full">
                                          {{ $item->cataegory }} </span>
                                  </div>
                              </div>
                              <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
                                  April 04, 2020
                              </span>
                              <p class="mt-5 text-2xl font-semibold">
                                  <a href="#" title="" class="text-black">{{ $item->heading ??' Ho7 Tips to run your remote team
                                      faster and better.' }}</a>
                              </p>
                              <p class="mt-4 text-base text-gray-600 line-clamp-3">{{$item->description ?? 'Amet minim mollit non deserunt ullamco est sit
                                  aliqua dolor do
                                  amet
                                  sint. Velit officia consequat duis enim velit mollit.'}}</p>
                              <a href="{{  route('blog.detail', ['id' => $item->id]) }}" title=""
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
                    @empty
                    @endforelse
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
                            <p
                                class="w-full text-base font-medium leading-relaxed sm:text-lg sm:leading-relaxed text-white">
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
                            <a href="{{ route('web.contactus') }}">
                                <span
                                    class="relative text-base font-semibold text-white transition duration-300 group-hover:text-white ease">Let
                                    Contact Us</span>
                            </a>
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
            </svg></span><span class="absolute top-0 right-0 -z-10"><svg width="324" height="250"
                viewBox="0 0 324 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z"
                    fill="url(#paint0_linear_971_6911)"></path>
                <defs>
                    <linearGradient id="paint0_linear_971_6911" x1="60.5" y1="111" x2="287"
                        y2="111" gradientUnits="userSpaceOnUse">
                        <stop offset="0.520507" stop-color="white"></stop>
                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg></span><span class="absolute top-4 left-4 -z-10"><svg width="43" height="56"
                viewBox="0 0 43 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5">
                    <circle cx="40.9984" cy="1.49626" r="1.49626" transform="rotate(90 40.9984 1.49626)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="1.49626" r="1.49626" transform="rotate(90 27.8304 1.49626)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="1.49626" r="1.49626" transform="rotate(90 14.6644 1.49626)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="1.49626" r="1.49626" transform="rotate(90 1.49642 1.49626)"
                        fill="white"></circle>
                    <circle cx="40.9984" cy="14.6642" r="1.49626" transform="rotate(90 40.9984 14.6642)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="14.6642" r="1.49626" transform="rotate(90 27.8304 14.6642)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="14.6642" r="1.49626" transform="rotate(90 14.6644 14.6642)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="14.6642" r="1.49626" transform="rotate(90 1.49642 14.6642)"
                        fill="white"></circle>
                    <circle cx="40.9984" cy="27.8302" r="1.49626" transform="rotate(90 40.9984 27.8302)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="27.8302" r="1.49626" transform="rotate(90 27.8304 27.8302)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="27.8302" r="1.49626" transform="rotate(90 14.6644 27.8302)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="27.8302" r="1.49626" transform="rotate(90 1.49642 27.8302)"
                        fill="white"></circle>
                    <circle cx="40.9984" cy="40.9982" r="1.49626" transform="rotate(90 40.9984 40.9982)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="40.9963" r="1.49626" transform="rotate(90 27.8304 40.9963)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="40.9982" r="1.49626" transform="rotate(90 14.6644 40.9982)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="40.9963" r="1.49626" transform="rotate(90 1.49642 40.9963)"
                        fill="white"></circle>
                    <circle cx="40.9984" cy="54.1642" r="1.49626" transform="rotate(90 40.9984 54.1642)"
                        fill="white"></circle>
                    <circle cx="27.8304" cy="54.1642" r="1.49626" transform="rotate(90 27.8304 54.1642)"
                        fill="white"></circle>
                    <circle cx="14.6644" cy="54.1642" r="1.49626" transform="rotate(90 14.6644 54.1642)"
                        fill="white"></circle>
                    <circle cx="1.49642" cy="54.1642" r="1.49626" transform="rotate(90 1.49642 54.1642)"
                        fill="white"></circle>
                </g>
            </svg>
        </span>
    </section>
    <!-- cta -->
