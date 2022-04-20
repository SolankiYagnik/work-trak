<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user.layouts.header')
        @yield('css')
    </head>
    <body class="hold-transition login-page"> 
        <div class="wrapper">    
            @yield('contents')
        </div>
    </body>
</html>