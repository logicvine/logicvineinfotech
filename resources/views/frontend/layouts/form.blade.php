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
                    <form action="{{ route('submit.contactus') }}" method="POST" class="mt-14">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                            <div>
                                <label for="" class="text-base font-medium text-theme1"> Your name </label>
                                <div class="mt-2.5 relative">
                                    <input type="text" name="name" id=""
                                        placeholder="Enter your full name"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                </div>
                                @error('name') <div  class="alert text-red-600">{{ $message }} </div>@enderror
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-theme1"> Email address </label>
                                <div class="mt-2.5 relative">
                                    <input type="email" name="email" id=""
                                        placeholder="Enter your full name"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                </div>
                                @error('email') <div  class="alert text-red-600">{{ $message }} </div>@enderror
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-theme1"> Phone number </label>
                                <div class="mt-2.5 relative">
                                    <input type="tel" name="phone" id=""
                                        placeholder="Enter your full name"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                </div>
                                @error('phone') <div  class="alert text-red-600">{{ $message }} </div>@enderror
                            </div>

                            <div>
                                <label for="" class="text-base font-medium text-theme1"> Company name </label>
                                <div class="mt-2.5 relative">
                                    <input type="text" name="cmpname" id=""
                                        placeholder="Enter your full name"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                </div>
                                @error('cmpname') <div  class="alert text-red-600">{{ $message }} </div>@enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="" class="text-base font-medium text-theme1"> Message </label>
                                <div class="mt-2.5 relative">
                                    <textarea name="message" id="" placeholder="Type your msg"
                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md resize-y focus:outline-none focus:border-theme1 caret-theme1"
                                        rows="4"></textarea>
                                </div>
                                @error('message') <div  class="alert text-red-600">{{ $message }} </div>@enderror
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
</section>