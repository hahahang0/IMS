<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Admin Authentication')
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body class="min-h-screen bg-gray-100">

    <main class="min-h-screen flex items-center justify-center px-4">

        <div class="w-full max-w-md">

            {{-- Logo / Branding --}}
            <div class="text-center mb-8">

                <a href="{{ url('/') }}">

                    <img
                        src="{{ asset('images/logo.webp') }}"
                        alt="StockCore"
                        class="h-12 mx-auto"
                    >

                </a>

                <h1 class="mt-5 text-2xl font-bold text-gray-900">
                    @yield('heading')
                </h1>

                <p class="mt-2 text-sm text-gray-600">
                    @yield('description')
                </p>

            </div>


            {{-- Authentication Card --}}
            <div class="bg-white rounded-2xl shadow-lg p-8">

                {{-- Validation Errors --}}
                @if ($errors->any())

                    <div class="mb-6 rounded-lg bg-red-50 border border-red-200 p-4">

                        <ul class="text-sm text-red-600 space-y-1">

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                {{-- Success Message --}}
                @if (session('success'))

                    <div class="mb-6 rounded-lg bg-green-50 border border-green-200 p-4">

                        <p class="text-sm text-green-600">
                            {{ session('success') }}
                        </p>

                    </div>

                @endif


                {{-- Page-Specific Authentication Content --}}
                @yield('auth-content')

            </div>


            {{-- Footer --}}
            <p class="mt-6 text-center text-xs text-gray-500">

                © {{ date('Y') }} StockCore.
                All rights reserved.

            </p>

        </div>

    </main>

</body>

</html>