@extends('admin.layouts.main')
@section('content')
    @if (session('success'))
        <div id="successMessage"
            class="mb-4 p-4 text-green-800 bg-green-100 rounded-lg dark:bg-green-900 dark:text-green-200">
            {{ session('success') }}
        </div>
    @endif

    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
            <h3 class="font-medium text-black dark:text-white">
                Contact Form
            </h3>
        </div>

        <form method="POST" action="{{ route('admin.blog.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="p-6.5">
                <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                    <div class="w-full xl:w-1/2">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Category
                        </label>
                        <input name="cataegory" type="text" value="{{ $data->cataegory }}" placeholder="Enter Blog Type"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                    </div>
                    <div class="w-full xl:w-1/2">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Image
                        </label>
                        <input name="image" type="file"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                    </div>

                    <div class="w-full xl:w-1/2">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Heading
                        </label>
                        <input type="text" name="heading" value="{{ $data->heading }}" placeholder="Enter Your Heading"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                    </div>
                </div>

                <div class="mb-6">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Description
                    </label>
                    <textarea rows="6" name="description"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition">
                        </textarea>
                </div>
                <button class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
