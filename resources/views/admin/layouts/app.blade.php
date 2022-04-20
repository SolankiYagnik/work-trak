<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('admin.layouts.header')
        @yield('css')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <div class="preloader flex-column justify-content-center align-items-center">
                <img src="{{ asset('assets/dist/img/w.png') }}" class="img-circle elevation-2" alt="" height="60" width="60">
            </div>

            @include('admin.layouts.navbar')

            @include('admin.layouts.sidebar')

            <div class="content-wrapper">
                @include('admin.layouts.flash-message')

                @yield('content')
            </div>

            @include('admin.layouts.footer')
            
        </div>
    </body>

</html>