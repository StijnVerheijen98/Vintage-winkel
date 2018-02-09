<html>
<head>
    @section('head')
        <title>@yield('title') || Vintage API</title>
    @show
</head>
<body>
<header>
    @yield('header')
</header>
<main>
    @yield('main')
</main>
<footer>
    @yield('footer')
</footer>
</body>
</html>