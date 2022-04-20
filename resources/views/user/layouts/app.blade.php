<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('user.layouts.header')
        @yield('required-css')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <div class="preloader flex-column justify-content-center align-items-center">
                <img src="{{ asset('assets/dist/img/w.png') }}" class="img-circle elevation-2" alt="" height="60" width="60">
            </div>

            @include('user.layouts.navbar')

            @include('user.layouts.sidebar')

            <div class="content-wrapper">
                @include('user.layouts.flash-message')
                @yield('content')
                @yield('lead-content')
            </div>
            @include('user.layouts.footer')
            
        </div>
    </body>
</html>