<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title', "Login Page!!")</title>
        @include('admin.layouts.header')
        @yield('css')
    </head>
    <body class="hold-transition login-page">
        <main class="py-4">
            @yield('contents')
        </main>
    {{-- <body class="hold-transition login-page"> 
        <div class="wrapper">    
            @yield('contents')
        </div> --}}
    </body>
</html>