@extends('admin.layouts.main')
@section('content')
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!-- Breadcrumb Start -->
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Tables
                </h2>
            </div>
            <!-- Breadcrumb End -->

            <!-- ====== Table Section Start -->
                <!-- ====== Table One Start -->
                <div
                    class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                    <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
                        Top Channels
                    </h4>

                    <div class="flex flex-col">
                        <div class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-5">
                            <div class="p-2.5 xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Category</h5>
                            </div>
                            <div class="p-2.5 text-center xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">image</h5>
                            </div>
                            <div class="p-2.5 text-center xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">heading</h5>
                            </div>
                            <div class="hidden p-2.5 text-center sm:block xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">description</h5>
                            </div>
                            <div class="hidden p-2.5 text-center sm:block xl:p-5">
                                <h5 class="text-sm font-medium uppercase xsm:text-base">Action</h5>
                            </div>
                        </div>
                        @forelse ($data as $item)
                        <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5">
                            <div class="flex items-center gap-3 p-2.5 xl:p-5">
                                <div class="flex-shrink-0 h-20 w-20">
                                    <img src="{{ asset('gallery').'/'.$item->image }}" alt="Brand" />
                                </div>
                                <p class="hidden font-medium text-black dark:text-white sm:block">
                                  
                                </p>
                            </div>

                            <div class="flex items-center justify-center p-2.5 xl:p-5">
                                <p class="font-medium text-black dark:text-white">
                                    {{ $item->cataegory }}
                                </p>
                            </div>
                            
                            <div class="flex items-center justify-center p-2.5 xl:p-5">
                                <p class="font-medium text-meta-3">

                                    {{ $item->heading }}
                                </p>
                            </div>
                            
                            <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                                <p class="font-medium text-black dark:text-white line-clamp-3"> {{ $item->description }}</p>
                            </div>
                            <div class="flex items-center justify-center p-2.5 xl:p-5">
                                <a href="{{ route('admin.blog.edit', $item->id) }}" class="px-4 py-2 text-white bg-blue-500 rounded">Edit</a>
                                <form action="{{ route('admin.blog.delete', $item->id) }}" method="POST" class="ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 text-black bg-red-500 rounded"
                                        onclick="return confirm('Are you sure you want to delete this blog?');">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p>No blogs found</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection