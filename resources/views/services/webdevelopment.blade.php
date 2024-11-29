@extends('frontend.layouts.master')
@section('content')
  <!-- hero section  -->
  <section class="relative min-h-dvh flex justify-center items-center w-full z-50">
    <div
      class="absolute inset-0 !h-full size-full before:absolute before:inset-0 before:mix-blend-darken before:bg-gradient-to-br before:from-blue-600/40 before:via-theme1/40 before:to-theme1/50 before:backdrop-blur-sm">
      <img src="{{ asset('/assets/img/webdevelopment.png') }}" alt="web development" class="size-full">
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
                        class="relative text-white [-webkit-text-fill-color:transparent] lg:[-webkit-text-stroke-width:2px] [-webkit-text-stroke-width:1px] [-webkit-text-stroke-color:#eab308]">"Company"</span>
                    </span>
                  </div>
                  <div
                    class="md:text-base 2xl:text-2xl max-w-6xl my-4 text-center mx-auto text-sm text-white text-balance 2xl:mt-6 mt-4">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s
                  </div>
                  <a href="{{ route('web.contactus') }}"
                                    class="flex item-start justify-center w-full ms-auto">
                                    <div
                                        class="rounded-lg mx-auto px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2  font-medium border-yellow-500 mt-4  w-max">
                                        <span
                                            class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-yellow-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                        <span
                                            class="relative text-base font-semibold text-yellow-500 transition duration-300 group-hover:text-white ease">Let
                                            Coffee With Us</span>
                                </a>

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
          <img class="w-full rounded-md " src="{{ asset('/assets/img/web-development.webp') }}" alt="" />


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
            Creative and Intuitive Web Development
          </h2>
          <p class="mt-6 text-lg leading-relaxed text-gray-600">At Logic Vine Infotech, we specialize in crafting
            creative and intuitive web solutions tailored to your unique business needs. Our team of skilled developers
            and designers harnesses the latest technologies to build websites that not only look stunning but also drive
            engagement and conversions
          </p>
          <a href="{{ route('web.contactus') }}"
                                    class="flex item-start justify-center w-full ms-auto">
                                    <div
                                        class="rounded-lg  px-3.5 py-2 m-1 overflow-hidden relative group cursor-pointer border-2  font-medium border-yellow-500 mt-4  w-max">
                                        <span
                                            class="absolute w-64 h-0 transition-all duration-300 origin-center rotate-45 -translate-x-20 bg-yellow-500 top-1/2 group-hover:h-64 group-hover:-translate-y-32 ease"></span>
                                        <span
                                            class="relative text-base font-semibold text-yellow-500 transition duration-300 group-hover:text-white ease">Let
                                            Coffee With Us</span>
                                </a>
        </div>
      </div>
    </div>
  </section>
  <!-- about section end -->
  <div class="bg-theme1">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
 

      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor fea icon-md h-9 w-9"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Custom Website Development</h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Logic Vine Infotech, we create bespoke websites that reflect your brand and drive results, ensuring a seamless user experience and optimal performance.</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather fea icon-md h-9 w-9"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Custom Web Development Consulting
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Logic Vine Infotech, we offer personalized consulting services to help you navigate the complexities of web development, ensuring your project is strategically aligned with your business goals and industry best practices
                        .</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc fea icon-md h-9 w-9"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Custom Frontend Development</h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Twin Power Software, we create tailor-made frontend solutions that deliver visually appealing and intuitive interfaces, enhancing user engagement and brand identity.


                    </p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout fea icon-md h-9 w-9"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Custom Backend Development
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Logic Vine Infotech, we create bespoke websites that reflect your brand and drive results, ensuring a seamless user experience and optimal performance.</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch fea icon-md h-9 w-9"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">UI/UX designing Services
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Besides developing a custom website, focusing on the design details is a must to ensure project success. So, we have a team of creative heads who put their 100% effort into creating unique business applications and websites that are enough to steal your customers' hearts. Seek UX/UI designing services for your custom web development solutions.
                    </p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target fea icon-md h-9 w-9"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1"> Custom Web Support & Maintenance Services
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Developing a fully customized website shouldn't be the sole aim of a business owner. Maintaining an application or website timely help to keep it running smoothly and allows businesses to withstand competition. With our custom web support and maintenance services, we can help your business website stay updated as per the ongoing market trends..</p>
                     
                 </div>
             </div>


             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor fea icon-md h-9 w-9"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Hire Custom Web Developers</h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Want to hire custom web developers from one of the best web development firms? We can be your saviour. With a pool of dedicated web developers, we can offer you the best-ever assistance for custom web development. Do not look for customer web developers for hire anywhere else; instead, avail our services now.</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather fea icon-md h-9 w-9"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path><line x1="16" y1="8" x2="2" y2="22"></line><line x1="17.5" y1="15" x2="9" y2="15"></line></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">Custom Web Migration & Upgradation
                    </h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">Business apps and websites need constant upgradation to reinvigorate digital experiences. With our custom web migration and upgradation services, you can make your existing business solutions result-driven and successful. Upgrade your business website to the newest industry standards and give your customers an amazing web experience
                        .</p>
                     
                 </div>
             </div>
     
             <div class="text-left rounded-xl bg-white py-8 px-11 transition-all duration-300 custom-cubic-bezier shadow-2xl">
                 <div class="text-rose-700 mb-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc fea icon-md h-9 w-9"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>
                 </div>
                 <div class="services-texts">
                     <h3 class="mb-4 text-xl font-semibold text-ellipsis line-clamp-1">API Development Services</h3>
                     <p class="text-light-muted mb-6 text-base text-ellipsis line-clamp-4">At Dev Technosys, we'll work with you to integrate external systems with your web app. We use specially created APIs to increase the functionality and possibilities of a business website. Avail custom web development solutions from us and experience free-of-cost API development services as well.


                    </p>
                     
                 </div>
             </div>
            </div>


    </div>
  </div>

 
@include('bloglistabouthome')
 {{-- contact us  --}}
  @include('frontend.layouts.form')

  <!-- blog -->
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