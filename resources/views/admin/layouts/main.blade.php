<!DOCTYPE html>
<html lang="en">



<body>
    <div class="flex h-screen overflow-hidden">
        <!-- ===== header ===== -->
        @include('admin.layouts.header')
        <!-- ===== aside ===== -->
        @include('admin.layouts.aside')
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <!-- ===== navbar ===== -->
            @include('admin.layouts.navbar')
            <!-- ===== content ===== -->
            @yield('content')
        </div>
    </div>
    @include('admin.layouts.footer')
    </div>
</body>

</html>
