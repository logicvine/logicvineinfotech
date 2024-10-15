<!-- header end  -->
<section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex items-end justify-between">
            <div class="flex-1 text-center mb-10">
                <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                    <span
                        class="text-transparent bg-clip-text font-semibold bg-gradient-to-r to-theme1 from-yellow-400">Latest
                        From
                    </span> Blog
                </h1>
                <p class="md:text-xl text-base font-medium text-balance mt-5 text-slate-900">Welcome to the Logic Vine
                    Infotech blog, your go-to resource for insights, trends, and tips in digital development. Explore
                    articles
                    on mobile app development, eCommerce strategies, innovative software solutions, and industry best
                    practices.
                    empower your business.
                </p>
            </div>
        </div>
        <div class="flex items-center justify-end">
                <button type="button"
                    class="flex items-center top-0 swiper-button-next relative z-40 justify-center text-yellow-500 transition-all duration-200 bg-transparent border border-yellow-500 rounded w-9 h-9 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500 focus:text-white after:opacity-0 after:absolute" id="nextButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button type="button"
                    class="flex items-center  swiper-button-prev relative z-40  justify-center text-yellow-500 transition-all duration-200 bg-transparent border border-yellow-500 rounded w-9 h-9 hover:bg-yellow-500 hover:text-white focus:bg-yellow-500 focus:text-white after:opacity-0 after:absolute" id="prevButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        <div class="max-w-7xl mx-auto  mt-4">
            <div class="swiper-container testimonialSwiper swiper">
                <div class="swiper-wrapper flex items-stretch">
                    @forelse ($data as $item)
                        <div class="swiper-slide !h-auto">
                            <div class="overflow-hidden bg-white rounded shadow h-full">
                                <div class="p-5">
                                    <div class="relative">
                                        <a href="#" title="" class="inline-block h-[250px] w-full">
                                            <img class="object-cover w-full h-full"
                                                src="{{ asset('gallery') . '/' . $item->image }}" alt="" />
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
                                        <a href="#" title="" class="text-black">{{ $item->heading ?? ' Ho7 Tips to run your remote team
                                                          faster and better.' }}</a>
                                    </p>
                                    <p class="mt-4 text-base text-gray-600 line-clamp-3">{{$item->description ?? 'Amet minim mollit non deserunt ullamco est sit
                                                      aliqua dolor do
                                                      amet
                                                      sint. Velit officia consequat duis enim velit mollit.'}}</p>
                                    <a href="{{  route('blog.detail', ['id' => $item->id]) }}" title=""
                                        class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-theme1 transition-all duration-500 border-b-2 border-transparent hover:border-yellow-500 focus:border-border-yellow-500 hover:text-yellow-500">
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
    </div>
</section>