<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'stockCore-Smarter Stock Control')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
</head>

<body>
    @include('public.components.navbar')
    @yield('content')
    @stack('scripts')
    @include('public.components.footer')
</body>

</html>
