<!DOCTYPE html>
<html lang="en">


        @include('layouts.header')

    <body class="body-wrapper">


        @include('layouts.navigation')

        <div class="container">
             @yield('content')
        </div>
        
        @include('layouts.footer')

    </body>

</html>