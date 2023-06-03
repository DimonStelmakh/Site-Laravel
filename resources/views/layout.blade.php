<!DOCTYPE html>
<html lang="en">
    @include('head')
    <body>
        @include('header')
            @yield('banner')
            @yield('content')
        @include('footer')
    </body>
</html>
