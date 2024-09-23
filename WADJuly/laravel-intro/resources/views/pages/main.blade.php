<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @stack('style')
</head>

<body>
    <a href="{{ url('/home') }}">Hompe Page</a>
    <a href="{{ url('/about') }}">About Page</a>
    <a href="{{ url('/contact') }}">Contact Page</a>
    <div>
        @yield('content')
    </div>
    @stack('script')
</body>

</html>
