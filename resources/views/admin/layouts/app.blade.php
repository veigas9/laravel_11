
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('title') Laravel 11</title>

       <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 text-gray-800">        
        @include('layouts.navigation')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             @yield('content')
        </div>       
        {{-- <footer> </footer> --}}

    </body>
</html>

