<!DOCTYPE html>
<html lang="en">


        @include('layouts.header')

    <body class="body-wrapper">


        @include('layouts.navigation')

        {{ $slot }}
       <!--@yield('content')--->

        @include('layouts.footer')

    </body>

</html>/posts/{post}/comments/{comment}