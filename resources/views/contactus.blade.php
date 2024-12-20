@extends('frontend.layouts.master')
@section('content')

<div class="relative">
    <div
        class="md:h-96 h-72 *:size-full relative  overflow-hidden *:object-cover *:object-bottom after:absolute after:top-0 after:left-0 after:h-full after:w-full after:bg-gradient-to-b from-slate-900/20 via-slate-900/30 to-slate-900">
        <img  src="{{ asset('assets/img/contactus.jpg') }}" alt="">
    </div>
    <div
        class="absolute top-1/2 -translate-y-1/2 flex items-center px-8 sm:px-12 md:px-16 h-full text-white mx-auto w-full">
        <div class="w-full">
            <div class="text-6xl md:text-[100px] font-bold !leading-[130%] text-center uppercase">
                How Can We Help?</div>

        </div>
    </div>
</div>
    <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-900 from-yellow-400">Contact  
                    </span> Us</h1>
                <!-- <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-500">Amet minim mollit non deserunt
                    ullamco
                    est sit aliqua dolor do amet sint. Velit officia consequat duis.</p> -->
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
                            <p class="mt-6 text-lg font-medium text-theme1">+91-8050500796</p>
                            <p class="mt-1 text-lg font-medium text-theme1">+91-8874067025</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <p class="mt-6 text-lg font-medium text-theme1">info@logicvineinfotech.com</p>
                            <!-- <p class="mt-1 text-lg font-medium text-theme1">hr@example.com</p> -->
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
                            <p class="mt-6 text-lg font-medium leading-relaxed text-theme1">215-216, Manglam Metropolis Tower, Purani Chungi, Panchsheel Colony, Jaipur, Rajasthan 302019
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 overflow-hidden bg-white rounded-xl">
                    <div class="px-6 py-12 sm:p-12">
                        <h3 class="text-3xl font-semibold text-center text-theme1">Send us a message</h3>
                        <div id="successMessage" class="alert alert-success hidden text-green-600"></div>  
                        <form id="contactForm" action="{{ route('submit.contactus') }}" method="POST" class="mt-14">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                                <div>
                                    <label for="name" class="text-base font-medium text-theme1">Your name</label>
                                    <div class="mt-2.5 relative">
                                        <input type="text" name="name" id="name" placeholder="Enter your full name"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                    </div>
                                    <div id="nameError" class="alert text-red-600"></div>
                                </div>
                
                                <div>
                                    <label for="email" class="text-base font-medium text-theme1">Email address</label>
                                    <div class="mt-2.5 relative">
                                        <input type="email" name="email" id="email" placeholder="Enter your email"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                    </div>
                                    <div id="emailError" class="alert text-red-600"></div>
                                </div>
                
                                <div>
                                    <label for="phone" class="text-base font-medium text-theme1">Phone number</label>
                                    <div class="mt-2.5 relative">
                                        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                    </div>
                                    <div id="phoneError" class="alert text-red-600"></div>
                                </div>
                
                                <div>
                                    <label for="cmpname" class="text-base font-medium text-theme1">Company name</label>
                                    <div class="mt-2.5 relative">
                                        <input type="text" name="cmpname" id="cmpname" placeholder="Enter your company name"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md focus:outline-none focus:border-theme1 caret-theme1" />
                                    </div>
                                    <div id="cmpnameError" class="alert text-red-600"></div>
                                </div>
                
                                <div class="sm:col-span-2">
                                    <label for="message" class="text-base font-medium text-theme1">Message</label>
                                    <div class="mt-2.5 relative">
                                        <textarea name="message" id="message" placeholder="Type your message"
                                            class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border-[2px] border-gray-200 rounded-md resize-y focus:outline-none focus:border-theme1 caret-theme1"
                                            rows="4"></textarea>
                                    </div>
                                    <div id="messageError" class="alert text-red-600"></div>
                                </div>
                
                                <div class="sm:col-span-2">
                                    <button type="submit" id="submitForm"
                                        class="inline-flex items-center justify-center w-full px-4 py-4 mt-2 text-base font-semibold text-white transition-all duration-200 bg-yellow-500 border border-transparent rounded-md focus:outline-none hover:bg-yellow-500/80 focus:bg-yellow-500/80">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#contactForm').on('submit', function(e) {
                            e.preventDefault();
                            $('#nameError').text('');
                            $('#emailError').text('');
                            $('#phoneError').text('');
                            $('#cmpnameError').text('');
                            $('#messageError').text('');
                            $('#successMessage').addClass('hidden').text('');
                            $('#submitForm').text('Loading...').prop('disabled', true);
                            var formData = {
                                name: $('#name').val(),
                                email: $('#email').val(),
                                phone: $('#phone').val(),
                                cmpname: $('#cmpname').val(),
                                message: $('#message').val(),
                                _token: $('input[name="_token"]').val()
                            };
                            $('#loader').removeClass('hidden');
                            $.ajax({
                                url: "{{ route('submit.contactus') }}",
                                method: 'POST',
                                data: formData,
                                success: function(response) {
                                    $('#loader').addClass('hidden');
                                    if(response.success) {
                                        $('#contactForm')[0].reset();
                                        $('#successMessage').removeClass('hidden').text(response.message);
                                    }
                                },
                                error: function(response) {
                                    $('#submitForm').text('Send').prop('disabled', false);
                                    var errors = response.responseJSON.errors;
                                    
                                    if (errors.name) {
                                        $('#nameError').text(errors.name[0]);
                                    }
                                    if (errors.email) {
                                        $('#emailError').text(errors.email[0]);
                                    }
                                    if (errors.phone) {
                                        $('#phoneError').text(errors.phone[0]);
                                    }
                                    if (errors.cmpname) {
                                        $('#cmpnameError').text(errors.cmpname[0]);
                                    }
                                    if (errors.message) {
                                        $('#messageError').text(errors.message[0]);
                                    }
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </section>
@endsection
