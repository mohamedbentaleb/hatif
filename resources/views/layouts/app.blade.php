<!DOCTYPE html>
<html lang="en">


        @include('layouts.header')

    <body class="body-wrapper">


        @include('layouts.navigation')

        {{ $slot }}

        @include('layouts.footer')

    </body>

</html>