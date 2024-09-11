<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Progetto | @yield('name')</title>
</head>
<body>

    @include('partial.header')

        @yield('content')

    @include('partial.footer')

</body>
</html>
