{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>StockCore Test</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="min-h-screen bg-slate-100">

    <div class="flex min-h-screen items-center justify-center">

        <div class="w-full max-w-md rounded-2xl bg-white p-10 text-center shadow-xl">

            <h1 class="text-3xl font-bold text-slate-900">
                StockCore
            </h1>

            <p class="mt-2 text-slate-500">
                Laravel + Tailwind + jQuery
            </p>

            <div
                id="test"
                class="mt-8 rounded-lg bg-blue-50 p-4 text-2xl font-bold text-blue-600"
            >
                Loading...
            </div>

            <button
                id="test-button"
                type="button"
                class="mt-6 rounded-lg bg-blue-600 px-6 py-3 font-semibold text-white transition hover:bg-blue-700"
            >
                Test jQuery
            </button>

        </div>

    </div>

    <script type="module">
        $(document).ready(function () {

            console.log('Blade jQuery code is working');

            $('#test').text(
                'jQuery + Tailwind working!'
            );

            $('#test-button').on('click', function () {

                $('#test').text(
                    'Button clicked!'s
                );

            });

        });
    </script>

</body>
</html> --}}