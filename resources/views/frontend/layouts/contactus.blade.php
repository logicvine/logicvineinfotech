@section('content')
<div class="mt-6 overflow-hidden bg-white rounded-xl">

    <div class="px-6 py-12 sm:p-12">
      <h3 class="text-3xl font-semibold text-center text-theme1">Send us a message</h3>

      <form  method="POST" class="mt-14">
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
              <textarea name="message" id="" placeholder="Type your msg"
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
  @endsection