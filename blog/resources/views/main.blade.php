<!doctype html>
<html lang="en">

    <head>

        @include('partials._head') <!-- include is for static (The same for all pages everywhere) -->

    </head>

    <body>

      
        <!-- Default Bootstrap Navbar -->
        @include('partials._nav')
        <div class="container">
           

     
            
            @yield('content') <!-- yield is for dynamic (changes based on the page we're on) -->

           

        </div>
        @include('partials._footer')

        @include('partials._javascripts')

    </body>
</html>