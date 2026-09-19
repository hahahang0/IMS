<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="bn3bRC2iFXlqy1QEMGGfaVPUeOKwluLTpjx0WwVvLTI" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="bn3bRC2iFXlqy1QEMGGfaVPUeOKwluLTpjx0WwVvLTI" />

    <link rel="icon"
        type="image/png"
        href="{{ asset('images/favicon/favicon_bg_removed.png') }}">

{{-- 
         <link rel="icon"
        type="image/png"
        href="{{ asset('images/favicon/favicon-icon-cropped.png') }}"> --}}
    <title>



        @yield('title', 'stockCore-Smarter Stock Control')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
</head>

    <body>

    @include('public.components.navbar')

    @yield('content')

    @include('public.components.scroll-to-top')

    @include('public.components.footer')

    @stack('scripts')

</body>
</html>
