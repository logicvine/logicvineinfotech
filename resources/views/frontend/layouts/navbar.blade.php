<header
class="shadow-lg group-[]/nav:bg-white group-[]/nav:fixed group-[]/nav:animate-fixed-nav bg-transparent backdrop-blur-sm z-[999] overflowhidden fixed top-0 w-full">
<div class="max-2xl:max-w-7xl 2xl:px-24 3xl:px-36  mx-auto lg:pb-3 group-[]/nav:py-3 py-3 px-6 lg:px-8 z-50">
  <div class="flex items-center justify-between relative">
    <a href="./index.html">
      <img class="3xl:h-16 2xl:h-12 h-10 block group-[]/nav:hidden" src="./assets/img/logo-white.png"
        alt="logo" />
      <img class="3xl:h-16 2xl:h-12 h-10 hidden group-[]/nav:block" src="./assets/img/logo.png" alt="logo" />
    </a>

    <div class="flex items-center gap-5">
      <ul class="lg:flex gap-8 hidden">
        <li class="group">
          <a href="{{ route('web.about') }}"
            class="flex itms-center text-sm 2xl:text-base 3xl:text-lg text-white group-[]/nav:text-black">
            Home

          </a>

        </li>
        <li class="group relative">
          <a href="" id="#services"
            class="flex items-center text-sm 2xl:text-base 3xl:text-lg text-white font-medium group-[]/nav:text-black">
            Services

          </a>

        </li>
        <li class="group">
          <a href="{{ route('web.about') }}"
            class="flex items-center text-sm 2xl:text-base 3xl:text-lg text-white font-medium group-[]/nav:text-black">
            About Us
          </a>

        </li>
        <li class="group">
          <a href="{{ route('web.bloglist') }}"
            class="flex items-center text-sm 2xl:text-base 3xl:text-lg text-white font-medium group-[]/nav:text-black">
            Blog

          </a>

        </li>
        <li class="group">
          <a href="{{ route('web.contactus') }}"
            class="flex items-center text-sm 2xl:text-base 3xl:text-lg text-white font-medium group-[]/nav:text-black">
            Contact Us
          </a>

        </li>
      </ul>
      <div class="flex items-center gap-4">





        <div class="flex lg:hidden flex-col gap-y-3 cursor-pointer">
          <label for="mmCompany" class="flex items-center gap-x-[2px] cursor-pointer">
            <div class="flex items-center text-white group-[]/nav:text-black text-sm gap-1">
              <span>
                <svg class="size-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                  height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path fill="none" stroke-width="2"
                    d="M12,23 C18.0751322,23 23,18.0751322 23,12 C23,5.92486775 18.0751322,1 12,1 C5.92486775,1 1,5.92486775 1,12 C1,18.0751322 5.92486775,23 12,23 Z M12,23 C15,23 16,18 16,12 C16,6 15,1 12,1 C9,1 8,6 8,12 C8,18 9,23 12,23 Z M2,16 L22,16 M2,8 L22,8">
                  </path>
                </svg>
              </span>

            </div>
          </label>
        </div>
        <div class="flex lg:hidden">
          <label for="sideToggle"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white group-[]/nav:text-black">
            <span class="sr-only">Open menu</span>
            <svg class="size-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
              </path>
            </svg>
          </label>
        </div>
      </div>
    </div>
  </div>
</div>

</header>


<input type="checkbox" class="peer/sideToggle hidden " name="sideToggle" id="sideToggle" />
<label for="sideToggle"
class="fixed inset-0 -z-[1011] pointer-events-none backdrop-blur-xl bg-theme1 peer-checked/sideToggle:z-[1010] peer-checked/sideToggle:opacity-100 opacity-0 duration-100"></label>

<div
class="fixed flex flex-col h-screen inset-y-0 right-0 z-[1011] w-full overflow-y-auto bg-black/80 select-none text-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-theme1/10 peer-checked/sideToggle:translate-x-0 peer-checked/sideToggle:opacity-100 translate-x-full opacity-0 duration-300">
<div class="flex items-center justify-between">
  <a href class="-ml-1.5">
    <span class="sr-only">hpit</span>
    <img class="h-7 w-auto" width="174" height="48" src="./assets/img/logo-white.png" alt=" Logo" />
  </a>
  <label for="sideToggle" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-200">
    <span class="sr-only">Close menu</span>
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
  </label>
</div>
<div class="mt-6 flow-root flex-fill -mr-4 pr-4">
  <div class="-my-6 divide-y divide-gray-500/10">
    <div class="space-y-2 py-6">
      <div class="flex flex-col gap-5 items-center">
        <div class="flex flex-col w-full gap-y-5">
          <a href="javascript:;" class="text-sm font-bold text-gray-50">Home</a>
          <a href="javascript:;" class="text-sm font-bold text-gray-50">Services</a>
          <a href="javascript:;" class="text-sm font-bold text-gray-50">About Us</a>
          <a href="javascript:;" class="text-sm font-bold text-gray-50">Blog</a>
          <a href="javascript:;" class="text-sm font-bold text-gray-50">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="relative">
<input type="checkbox" id="dropdown-toggle" class="hidden peer" />

<div
  class="fixed top-14 inset-x-0 z-50 hidden mt-2 origin-top-left  divide-y divide-gray-100 rounded-md shadow-lg peer-checked:block">
  <div class="relative w-full">
    <input type="text"
      class="subscribe border border-gray-300 border-t-0 border-r-0 border-l-0 text-theme1 text-sm block w-full pb-1.5 p-2.5 focus:!outline-0 focus:!shadow-none focus:!ring-0 focus:border-gray-400"
      placeholder="Search for products, brands and more" required>
  </div>
</div>
</div>
</div> 