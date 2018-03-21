<!doctype html>
<html lang="en">

    <head>

        @include('partials._head') <!-- include is for static (The same for all pages everywhere) -->

    </head>

    <body>

        @include('partials._nav')

        <!-- Default Bootstrap Navbar -->

        <div class="container">
            
            @yield('content') <!-- yield is for dynamic (changes based on the page we're on) -->

            @include('partials._footer')

        </div>

        @include('partials._javascripts')

    </body>
</html>