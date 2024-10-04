@extends('frontend.layouts.master')
@section('content')
  <!-- header -->
  <div class="relative">
    <div
      class="h-96 relative  overflow-hidden *:object-cover after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/20 via-slate-900/30 to-slate-900">
      <img src="./assets/img/blog.jpg" alt="">
    </div>
    <div
      class="absolute top-1/2 -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
      <div class="w-full">
        <div class="text-6xl md:text-[100px] font-bold !leading-[130%] text-center uppercase">
          Blog Detail</div>

      </div>
    </div>
  </div>

  <section class="py-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
      <div class="grid grid-cols-12">
        <div class="col-span-12 lg:col-span-8">
          <div class="size-full rounded-md">
            <div class="pb-14">
              <div class="size-full rounded-md">
                <img src="./assets/img/blog-1.jpg" alt="">
              </div>
              <div class="flex items-center gap-3 py-4 border-b flex-wrap ">
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                      width="100%" xmlns="http://www.w3.org/2000/svg">
                      <g id="User">
                        <g>
                          <path
                            d="M17.438,21.937H6.562a2.5,2.5,0,0,1-2.5-2.5V18.61c0-3.969,3.561-7.2,7.938-7.2s7.938,3.229,7.938,7.2v.827A2.5,2.5,0,0,1,17.438,21.937ZM12,12.412c-3.826,0-6.938,2.78-6.938,6.2v.827a1.5,1.5,0,0,0,1.5,1.5H17.438a1.5,1.5,0,0,0,1.5-1.5V18.61C18.938,15.192,15.826,12.412,12,12.412Z">
                          </path>
                          <path
                            d="M12,9.911a3.924,3.924,0,1,1,3.923-3.924A3.927,3.927,0,0,1,12,9.911Zm0-6.847a2.924,2.924,0,1,0,2.923,2.923A2.926,2.926,0,0,0,12,3.064Z">
                          </path>
                        </g>
                      </g>
                    </svg></span><span class="text-sm text-slate-600 font-bold">BY :</span><a href=""
                    class="inline-block text-sm font-semibold text-slate-500">ADMIN</a></div>
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 9h8"></path>
                      <path d="M8 13h6"></path>
                      <path
                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                      </path>
                    </svg></span><a href="" class="inline-block text-sm font-semibold text-slate-500">COMMENTS (0)</a>
                </div>
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                      width="100%" xmlns="http://www.w3.org/2000/svg">
                      <g id="Calendar_Date">
                        <path
                          d="M18.435,4.955h-1.94v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-7v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-1.93c-1.38,0-2.5,1.12-2.5,2.5v11c0,1.38,1.12,2.5,2.5,2.5h12.87c1.38,0,2.5-1.12,2.5-2.5v-11C20.935,6.075,19.815,4.955,18.435,4.955z M19.935,18.455c0,0.83-0.67,1.5-1.5,1.5H5.565c-0.83,0-1.5-0.67-1.5-1.5v-8.42h15.87V18.455z M19.935,9.035H4.065v-1.58c0-0.83,0.67-1.5,1.5-1.5h1.93v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59h7v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59 h1.94c0.83,0,1.5,0.67,1.5,1.5V9.035z">
                        </path>
                        <path
                          d="M11.492,17.173v-3.46c0-0.059-0.064-0.095-0.114-0.064l-0.638,0.392 c-0.1,0.061-0.228-0.01-0.228-0.128v-0.651c0-0.105,0.055-0.203,0.146-0.257l0.764-0.457c0.047-0.028,0.1-0.043,0.154-0.043h0.626 c0.166,0,0.3,0.134,0.3,0.3v4.367c0,0.166-0.134,0.3-0.3,0.3h-0.409C11.626,17.473,11.492,17.339,11.492,17.173z">
                        </path>
                      </g>
                    </svg></span><a href="" class="inline-block text-sm font-semibold text-slate-500">OCTOBER 9, 2023
                  </a></div>
              </div>
              <div class="pt-9 pb-4"><a href="" class=" sm:text-4xl text-3xl font-semibold">
                  Make sure your software solution is the best one.</a></div>
              <div class="pb-6 sm:text-lg text-sm text-slate-500">
                Your product launch is a symbol of your innovation and a powerful asset that can enhance your business.
                Choosing the right development approach can be just as important as selecting the right features.
                Whether you're aiming for a traditional, user-friendly interface or a cutting-edge, modern design, there
                are countless ways to craft your software solution to perfectly suit your business needs. From seamless
                functionality to visually appealing designs, the approach you choose should reflect your brand's vision
                and the goals of your project. Whether you're prioritizing intuitive user experiences or robust,
                scalable architecture, your solution will stand as a lasting testament to your company's success.
              </div>
              <div class=""><button
                  class="flex justify-between text-slate-950 uppercase items-center overflow-hidden group/btn gap-4 z-20 relative sm:text-base text-sm "><span
                    class="group-hover/btn:-translate-x-7  duration-300 w-7 h-[2px] bg-slate-950"></span> <span
                    class="group-hover/btn:-translate-x-7 duration-300"> read more</span></button></div>
            </div>
            <div class="pb-14">
              <div class="size-full rounded-md *:aspect-[1/.5] *:size-full *:object-cover">
                <img src="./assets/img/blog-2.webp" alt="">
              </div>
              <div class="flex items-center gap-3 py-4 border-b flex-wrap ">
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                      width="100%" xmlns="http://www.w3.org/2000/svg">
                      <g id="User">
                        <g>
                          <path
                            d="M17.438,21.937H6.562a2.5,2.5,0,0,1-2.5-2.5V18.61c0-3.969,3.561-7.2,7.938-7.2s7.938,3.229,7.938,7.2v.827A2.5,2.5,0,0,1,17.438,21.937ZM12,12.412c-3.826,0-6.938,2.78-6.938,6.2v.827a1.5,1.5,0,0,0,1.5,1.5H17.438a1.5,1.5,0,0,0,1.5-1.5V18.61C18.938,15.192,15.826,12.412,12,12.412Z">
                          </path>
                          <path
                            d="M12,9.911a3.924,3.924,0,1,1,3.923-3.924A3.927,3.927,0,0,1,12,9.911Zm0-6.847a2.924,2.924,0,1,0,2.923,2.923A2.926,2.926,0,0,0,12,3.064Z">
                          </path>
                        </g>
                      </g>
                    </svg></span><span class="text-sm text-slate-600 font-bold">BY :</span><a href=""
                    class="inline-block text-sm font-semibold text-slate-500">ADMIN</a></div>
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 9h8"></path>
                      <path d="M8 13h6"></path>
                      <path
                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                      </path>
                    </svg></span><a href="" class="inline-block text-sm font-semibold text-slate-500">COMMENTS (0)</a>
                </div>
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                      width="100%" xmlns="http://www.w3.org/2000/svg">
                      <g id="Calendar_Date">
                        <path
                          d="M18.435,4.955h-1.94v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-7v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-1.93c-1.38,0-2.5,1.12-2.5,2.5v11c0,1.38,1.12,2.5,2.5,2.5h12.87c1.38,0,2.5-1.12,2.5-2.5v-11C20.935,6.075,19.815,4.955,18.435,4.955z M19.935,18.455c0,0.83-0.67,1.5-1.5,1.5H5.565c-0.83,0-1.5-0.67-1.5-1.5v-8.42h15.87V18.455z M19.935,9.035H4.065v-1.58c0-0.83,0.67-1.5,1.5-1.5h1.93v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59h7v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59 h1.94c0.83,0,1.5,0.67,1.5,1.5V9.035z">
                        </path>
                        <path
                          d="M11.492,17.173v-3.46c0-0.059-0.064-0.095-0.114-0.064l-0.638,0.392 c-0.1,0.061-0.228-0.01-0.228-0.128v-0.651c0-0.105,0.055-0.203,0.146-0.257l0.764-0.457c0.047-0.028,0.1-0.043,0.154-0.043h0.626 c0.166,0,0.3,0.134,0.3,0.3v4.367c0,0.166-0.134,0.3-0.3,0.3h-0.409C11.626,17.473,11.492,17.339,11.492,17.173z">
                        </path>
                      </g>
                    </svg></span><a href="" class="inline-block text-sm font-semibold text-slate-500">OCTOBER 9, 2023
                  </a></div>
              </div>
              <div class="pt-9 pb-4"><a href="" class=" sm:text-4xl text-3xl font-semibold">
                  You must need a great developer. </a></div>
              <div class="pb-6 sm:text-lg text-sm text-slate-500">
                Your software solution is a powerful representation of your innovation and a key element that can
                enhance your business's growth. Selecting the right development process is just as crucial as choosing
                the right features. Whether you're aiming for a traditional, user-friendly design or a sleek, modern
                interface, there are countless ways to develop your solution to fit your business objectives. From
                intuitive functionality to cutting-edge features, the development approach should align with your
                company's goals and vision. Whether focusing on seamless performance or innovative technology, your
                software will be the cornerstone of your success.

              </div>
              <div class=""><button
                  class="flex justify-between text-slate-950 uppercase items-center overflow-hidden group/btn gap-4 z-20 relative sm:text-base text-sm "><span
                    class="group-hover/btn:-translate-x-7  duration-300 w-7 h-[2px] bg-slate-950"></span> <span
                    class="group-hover/btn:-translate-x-7 duration-300"> read more</span></button></div>
            </div>
            <div class="pb-14">
              <div class="size-full rounded-md aspect-[1/.5] *:size-full *:object-cover">
                <img src="./assets/img/blog-3.jpg" alt="">
              </div>
              <div class="flex items-center gap-3 py-4 border-b flex-wrap ">
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                      width="100%" xmlns="http://www.w3.org/2000/svg">
                      <g id="User">
                        <g>
                          <path
                            d="M17.438,21.937H6.562a2.5,2.5,0,0,1-2.5-2.5V18.61c0-3.969,3.561-7.2,7.938-7.2s7.938,3.229,7.938,7.2v.827A2.5,2.5,0,0,1,17.438,21.937ZM12,12.412c-3.826,0-6.938,2.78-6.938,6.2v.827a1.5,1.5,0,0,0,1.5,1.5H17.438a1.5,1.5,0,0,0,1.5-1.5V18.61C18.938,15.192,15.826,12.412,12,12.412Z">
                          </path>
                          <path
                            d="M12,9.911a3.924,3.924,0,1,1,3.923-3.924A3.927,3.927,0,0,1,12,9.911Zm0-6.847a2.924,2.924,0,1,0,2.923,2.923A2.926,2.926,0,0,0,12,3.064Z">
                          </path>
                        </g>
                      </g>
                    </svg></span><span class="text-sm text-slate-600 font-bold">BY :</span><a href=""
                    class="inline-block text-sm font-semibold text-slate-500">ADMIN</a></div>
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round"
                      stroke-linejoin="round" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 9h8"></path>
                      <path d="M8 13h6"></path>
                      <path
                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                      </path>
                    </svg></span><a href="" class="inline-block text-sm font-semibold text-slate-500">COMMENTS (0)</a>
                </div>
                <div class="flex items-center gap-1 shrink-0"><span class="inline-block size-5 text-slate-700"><svg
                      stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="100%"
                      width="100%" xmlns="http://www.w3.org/2000/svg">
                      <g id="Calendar_Date">
                        <path
                          d="M18.435,4.955h-1.94v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-7v-1.41c0-0.26-0.23-0.51-0.5-0.5c-0.27,0.01-0.5,0.22-0.5,0.5v1.41h-1.93c-1.38,0-2.5,1.12-2.5,2.5v11c0,1.38,1.12,2.5,2.5,2.5h12.87c1.38,0,2.5-1.12,2.5-2.5v-11C20.935,6.075,19.815,4.955,18.435,4.955z M19.935,18.455c0,0.83-0.67,1.5-1.5,1.5H5.565c-0.83,0-1.5-0.67-1.5-1.5v-8.42h15.87V18.455z M19.935,9.035H4.065v-1.58c0-0.83,0.67-1.5,1.5-1.5h1.93v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59h7v0.59c0,0.26,0.23,0.51,0.5,0.5c0.27-0.01,0.5-0.22,0.5-0.5v-0.59 h1.94c0.83,0,1.5,0.67,1.5,1.5V9.035z">
                        </path>
                        <path
                          d="M11.492,17.173v-3.46c0-0.059-0.064-0.095-0.114-0.064l-0.638,0.392 c-0.1,0.061-0.228-0.01-0.228-0.128v-0.651c0-0.105,0.055-0.203,0.146-0.257l0.764-0.457c0.047-0.028,0.1-0.043,0.154-0.043h0.626 c0.166,0,0.3,0.134,0.3,0.3v4.367c0,0.166-0.134,0.3-0.3,0.3h-0.409C11.626,17.473,11.492,17.339,11.492,17.173z">
                        </path>
                      </g>
                    </svg></span><a href="" class="inline-block text-sm font-semibold text-slate-500">OCTOBER 9, 2023
                  </a></div>
              </div>
              <div class="pt-9 pb-4"><a href="" class=" sm:text-4xl text-3xl font-semibold">Top 10 Software Development
                  Approaches
                </a></div>
              <div class="pb-6 sm:text-lg text-sm text-slate-500">Your software solution is a powerful reflection of
                your business’s innovation and success. Just like choosing the right features, selecting the best
                development approach is crucial. Whether your goal is traditional, user-friendly, or cutting-edge, here
                are ten key approaches to help you create the perfect software solution:


              </div>
              <div class=""><button
                  class="flex justify-between text-slate-950 uppercase items-center overflow-hidden group/btn gap-4 z-20 relative sm:text-base text-sm "><span
                    class="group-hover/btn:-translate-x-7  duration-300 w-7 h-[2px] bg-slate-950"></span> <span
                    class="group-hover/btn:-translate-x-7 duration-300"> read more</span></button></div>
            </div>
          </div>
        </div>
        <div class="col-span-12 sm:col-span-6 md:col-span-5 lg:col-span-4">
          <div class="size-full lg:ps-20">
            <div class="">
              <div class="text-2xl pb-5  font-semibold">Search</div>
              <div class="flex items-center gap-4 w-full pb-4">
                <div class="py-[1.5px] rounded-lg bg-slate-600 w-14 "></div>
                <div class="py-[1.5px] rounded-lg bg-slate-100 w-full"></div>
              </div>
              <div class="pt-5">
                <div class="flex items-center bg-slate-100 px-4"><input class="h-[70px] bg-transparent w-full "
                    placeholder="Search..." type="text"><button
                    class="h-12 w-14 *:size-6 bg-slate-800 text-white flex items-center justify-center "><svg
                      stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="100%"
                      width="100%" xmlns="http://www.w3.org/2000/svg">
                      <path fill="none" stroke-miterlimit="10" stroke-width="32"
                        d="M221.09 64a157.09 157.09 0 1 0 157.09 157.09A157.1 157.1 0 0 0 221.09 64z"></path>
                      <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
                        d="M338.29 338.29 448 448"></path>
                    </svg></button></div>
              </div>
            </div>
            <div class="pt-16">
              <div class="text-2xl pb-5 font-semibold">Categories</div>
              <div class="flex items-center gap-4 w-full pb-4">
                <div class="py-[1.5px] rounded-lg bg-slate-600 w-14 "></div>
                <div class="py-[1.5px] rounded-lg bg-slate-100 w-full"></div>
              </div>
              <div class="pt-5">
                <ul>
                  <li><a href="#" class="font-semibold text-[15px] py-1">App Development</a></li>
                  <li class="pt-5"><a href="#" class="font-semibold text-[15px] py-1">Taxi App</a></li>
                  <li class="pt-5"><a href="#" class="font-semibold text-[15px] py-1">School Software</a></li>
                  <li class="pt-5"><a href="#" class="font-semibold text-[15px] py-1">web Development</a></li>
                  <li class="pt-5"><a href="#" class="font-semibold text-[15px] py-1">Treandimg eCommerce Solution</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="pt-16">
              <div class="text-2xl pb-5 font-semibold">Recent Posts</div>
              <div class="flex items-center gap-4 w-full pb-4">
                <div class="py-[1.5px] rounded-lg bg-slate-600 w-14 "></div>
                <div class="py-[1.5px] rounded-lg bg-slate-100 w-full"></div>
              </div>
              <div class="flex  flex-nowrap gap-5 pt-4">
                <div class="w-1/3 !shrink-0"><a href="#" class="inline-block aspect-[1/.6] *:object-cover *:size-full">
                    <img src="./assets/img/recentblog-1.jpg" alt="">
                  </a></div>
                <div class="w-9/12">
                  <div class=""><a class="text-lg font-medium leading-[100%]" href="">How to create a taxi rid App like
                      Ola and Uber</a></div>
                  <div class="flex items-center gap-3 pt-2"><span class="inline-block size-4 text-slate-500"><svg
                        stroke="currentColor" fill="currentColor" stroke-width="1" viewBox="0 0 24 24" height="100%"
                        width="100%" xmlns="http://www.w3.org/2000/svg">
                        <g id="Stopwatch">
                          <path
                            d="M17.925,7.828c1.226,1.391 1.97,3.217 1.97,5.215c0,4.358 -3.537,7.895 -7.895,7.895c-4.358,0 -7.896,-3.537 -7.896,-7.895c0,-4.189 3.271,-7.621 7.396,-7.879l0,-1.103l-1.587,0c-0.645,0 -0.643,-1 -0,-1l4.174,0c0.645,0 0.644,1 -0,1l-1.587,0l0,1.103c1.803,0.113 3.443,0.832 4.718,1.956c0.378,-0.378 0.756,-0.756 1.135,-1.134c0.197,-0.198 0.507,-0.183 0.707,-0c0.199,0.183 0.185,0.522 -0,0.707l-1.135,1.135Zm0.97,5.215c0,-3.805 -3.089,-6.895 -6.895,-6.895c-3.806,0.001 -6.896,3.09 -6.896,6.895c0,3.806 3.09,6.895 6.896,6.895c3.806,0 6.895,-3.089 6.895,-6.895Zm-6.395,0.001c0,0.645 -1,0.643 -1,-0l0,-4.704c0,-0.644 1,-0.643 1,-0l0,4.704Z">
                          </path>
                        </g>
                      </svg></span><span class="inline-block text-[13px] font-semibold text-slate-500">09 Oct
                      2023</span></div>
                </div>
              </div>
              <div class="flex  flex-nowrap gap-5 pt-4">
                <div class="w-1/3 !shrink-0"><a href="#" class="inline-block aspect-[1/.6] *:object-cover *:size-full">
                    <img src="./assets/img/u4b-square.png" alt="">
                  </a></div>
                <div class="w-9/12">
                  <div class=""><a class="text-lg font-medium leading-[100%]" href="">10 Best Taxi App in India You
                      Should Know Before 2025</a></div>
                  <div class="flex items-center gap-3 pt-2"><span class="inline-block size-4 text-slate-500"><svg
                        stroke="currentColor" fill="currentColor" stroke-width="1" viewBox="0 0 24 24" height="100%"
                        width="100%" xmlns="http://www.w3.org/2000/svg">
                        <g id="Stopwatch">
                          <path
                            d="M17.925,7.828c1.226,1.391 1.97,3.217 1.97,5.215c0,4.358 -3.537,7.895 -7.895,7.895c-4.358,0 -7.896,-3.537 -7.896,-7.895c0,-4.189 3.271,-7.621 7.396,-7.879l0,-1.103l-1.587,0c-0.645,0 -0.643,-1 -0,-1l4.174,0c0.645,0 0.644,1 -0,1l-1.587,0l0,1.103c1.803,0.113 3.443,0.832 4.718,1.956c0.378,-0.378 0.756,-0.756 1.135,-1.134c0.197,-0.198 0.507,-0.183 0.707,-0c0.199,0.183 0.185,0.522 -0,0.707l-1.135,1.135Zm0.97,5.215c0,-3.805 -3.089,-6.895 -6.895,-6.895c-3.806,0.001 -6.896,3.09 -6.896,6.895c0,3.806 3.09,6.895 6.896,6.895c3.806,0 6.895,-3.089 6.895,-6.895Zm-6.395,0.001c0,0.645 -1,0.643 -1,-0l0,-4.704c0,-0.644 1,-0.643 1,-0l0,4.704Z">
                          </path>
                        </g>
                      </svg></span><span class="inline-block text-[13px] font-semibold text-slate-500">09 Oct
                      2023</span></div>
                </div>
              </div>
              <div class="flex  flex-nowrap gap-5 pt-4">
                <div class="w-1/3 !shrink-0"><a href="#" class="inline-block aspect-[1/.6] *:object-cover *:size-full">
                    <img src="./assets/img/ecommerce.jpg" alt="">
                  </a></div>
                <div class="w-9/12">
                  <div class=""><a class="text-lg font-medium leading-[100%]" href="">Top 30 Features of eCommerce
                      App</a></div>
                  <div class="flex items-center gap-3 pt-2"><span class="inline-block size-4 text-slate-500"><svg
                        stroke="currentColor" fill="currentColor" stroke-width="1" viewBox="0 0 24 24" height="100%"
                        width="100%" xmlns="http://www.w3.org/2000/svg">
                        <g id="Stopwatch">
                          <path
                            d="M17.925,7.828c1.226,1.391 1.97,3.217 1.97,5.215c0,4.358 -3.537,7.895 -7.895,7.895c-4.358,0 -7.896,-3.537 -7.896,-7.895c0,-4.189 3.271,-7.621 7.396,-7.879l0,-1.103l-1.587,0c-0.645,0 -0.643,-1 -0,-1l4.174,0c0.645,0 0.644,1 -0,1l-1.587,0l0,1.103c1.803,0.113 3.443,0.832 4.718,1.956c0.378,-0.378 0.756,-0.756 1.135,-1.134c0.197,-0.198 0.507,-0.183 0.707,-0c0.199,0.183 0.185,0.522 -0,0.707l-1.135,1.135Zm0.97,5.215c0,-3.805 -3.089,-6.895 -6.895,-6.895c-3.806,0.001 -6.896,3.09 -6.896,6.895c0,3.806 3.09,6.895 6.896,6.895c3.806,0 6.895,-3.089 6.895,-6.895Zm-6.395,0.001c0,0.645 -1,0.643 -1,-0l0,-4.704c0,-0.644 1,-0.643 1,-0l0,4.704Z">
                          </path>
                        </g>
                      </svg></span><span class="inline-block text-[13px] font-semibold text-slate-500">09 Oct
                      2023</span></div>
                </div>
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
  <footer class=" bg-theme1 mt-4 w-full">
    <div class="mt-auto max-w-7xl px-6 lg:px-8 w-full py-6 lg:pt-20 mx-auto">
      <div class="grid grid-cols-3 sm:grid-cols-6 md:grid-cols-12 gap-6">
        <div class="col-span-3">
          <a class="flex-none inline-block max-w-40 text-xl font-semibold text-white focus:outline-none focus:opacity-80"
            href="javascript:;" aria-label="Brand">
            <img src="./assets/img/logo-white.png" alt="logo" class="w-full">
          </a>
          <p class="text-gray-400 text-base py-5">
            Top IT Consulting Company Delivering Custom Innovative Solutions
          </p>
        </div>

        <div class="col-span-3 md:mx-auto">
          <h4 class="font-semibold text-gray-100">Top Links</h4>

          <div class="mt-3 grid space-y-3">
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">About Logic Vine</a>
            </p>
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">Home</a>
            </p>
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">Services</a>

            </p>
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">Blog</a>
            </p>
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">Contact Us</a>
            </p>
          </div>
        </div>
        <div class="col-span-3 md:mx-auto">
          <h4 class="font-semibold text-gray-100">Services</h4>

          <div class="mt-3 grid space-y-3">
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">Web Development</a>
            </p>
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">Mobile App Development</a>
            </p>
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">Software Development</a>

            </p>
            <p>
              <a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200"
                href="javascript:;">eCommerce Development</a>
            </p>

          </div>
        </div>


        <div class="col-span-3">
          <h4 class="font-semibold text-gray-100">Social Media</h4>
          <p class="text-gray-400 text-base py-5">
            Don't Miss To Follow Us On Our Social Networks Accounts.
          </p>
          <div class="w-full flex flex-wrap items-center gap-2 pt-3">
            <a target="_blank" href="javascript:;"
              class="inline-flex group/social justify-center items-center bg-white mx-[5px] text-center relative overflow-hidden rounded-lg shadow-xl shadow-white/20 border-[3px] border-white duration-300 w-10 md:w-12 h-10 md:h-12 text-base before:bg-sky-700 before:w-[136%] before:h-[133%] before:absolute before:[transform:rotate(45deg)] before:top-[90%] before:-left-[110%] before:duration-300 text-sky-700 p-2 lg:p-3 hover:before:-top-[16%] hover:before:-left-[16%] before:ease-[cubic-bezier(0.31,-0.105,0.43,1.59)]">
              <svg class="size-full group-hover/social:text-white group-hover/social:scale-100 scale-95 duration-300"
                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z">
                </path>
              </svg>
            </a>
            <a target="_blank" href="javascript:;"
              class="inline-flex group/social justify-center items-center bg-white mx-[5px] text-center relative overflow-hidden rounded-lg shadow-xl shadow-white/20 border-[3px] border-white duration-300 w-10 md:w-12 h-10 md:h-12 text-base before:bg-blue-900 before:w-[136%] before:h-[133%] before:absolute before:[transform:rotate(45deg)] before:top-[90%] before:-left-[110%] before:duration-300 text-blue-900 p-2 lg:p-3 hover:before:-top-[16%] hover:before:-left-[16%] before:ease-[cubic-bezier(0.31,-0.105,0.43,1.59)]">
              <svg class="size-full group-hover/social:text-white group-hover/social:scale-100 scale-95 duration-300"
                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                </path>
              </svg>
            </a>
            <a target="_blank" href="javascript:;"
              class="inline-flex group/social justify-center items-center bg-white mx-[5px] text-center relative overflow-hidden rounded-lg shadow-xl shadow-white/20 border-[3px] border-white duration-300 w-10 md:w-12 h-10 md:h-12 text-base before:bg-black before:w-[136%] before:h-[133%] before:absolute before:[transform:rotate(45deg)] before:top-[90%] before:-left-[110%] before:duration-300 text-black p-2 lg:p-3 hover:before:-top-[16%] hover:before:-left-[16%] before:ease-[cubic-bezier(0.31,-0.105,0.43,1.59)]">
              <svg class="size-full group-hover/social:text-white group-hover/social:scale-150 scale-150 duration-300"
                stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.527 17.921v-2.066c-.669.448-1.32.67-1.952.67-.298 0-.631-.094-1.004-.277-.223-.151-.354-.317-.393-.503-.11-.224-.178-.708-.178-1.454v-3.291h3v-2h-3v-3.356h-1.772c-.149.782-.298 1.338-.448 1.673-.184.41-.482.782-.891 1.116-.411.337-.837.577-1.285.725v1.842h1.396v4.521c0 .52.073.964.223 1.337.111.298.334.595.671.893.259.262.631.484 1.115.67.595.15 1.114.223 1.562.223.52 0 1.004-.056 1.45-.167.521-.112 1.023-.298 1.506-.556">
                </path>
              </svg>
            </a>
            <a target="_blank" href="javascript:;"
              class="inline-flex group/social justify-center items-center bg-white mx-[5px] text-center relative overflow-hidden rounded-lg shadow-xl shadow-white/20 border-[3px] border-white duration-300 w-10 md:w-12 h-10 md:h-12 text-base before:bg-red-700 before:w-[136%] before:h-[133%] before:absolute before:[transform:rotate(45deg)] before:top-[90%] before:-left-[110%] before:duration-300 text-red-700 p-2 lg:p-3 hover:before:-top-[16%] hover:before:-left-[16%] before:ease-[cubic-bezier(0.31,-0.105,0.43,1.59)]">
              <svg class="size-full group-hover/social:text-white group-hover/social:scale-100 scale-95 duration-300"
                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                </path>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="mt-6 sm:mt-12 flex justify-center items-center border-t border-gray-600">
        <p class="text-sm pt-6 text-gray-200">
          ©2024 Logic Vine Infotech
        </p>
      </div>
    </div>
  </footer>



@endsection
