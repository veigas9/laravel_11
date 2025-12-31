
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('title') Laravel 11</title>

       <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header></header>
        @yield('content')
        <footer> </footer>

    </body>
</html>

