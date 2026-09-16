
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Admin Dashboard') — StockCore
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Smooth scrollbar for admin navigation */
        .admin-scrollbar::-webkit-scrollbar {
            width: 5px;
        }

        .admin-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .admin-scrollbar::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 999px;
        }

        /* Hide scrollbar on mobile menu button area */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-admin-background text-admin-text antialiased">

    <div class="min-h-screen">

        {{-- =========================================================
             MOBILE OVERLAY
        ========================================================== --}}
        <div id="admin-overlay"
            class="fixed inset-0 z-40 hidden bg-slate-950/50 backdrop-blur-sm lg:hidden">
        </div>


        


        {{-- =========================================================
             MAIN AREA
        ========================================================== --}}
        <div class="min-h-screen lg:pl-64">
               @include('admin.components.sidebar')

            {{-- =====================================================
                 TOPBAR
            ====================================================== --}}
            <header class="sticky top-0 z-30 flex h-[72px] items-center justify-between border-b border-admin-border bg-white/95 px-4 backdrop-blur sm:px-6">

                {{-- Left --}}
                <div class="flex items-center gap-3">

                    {{-- Mobile Menu --}}
                    <button id="admin-menu-button"
                        type="button"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-admin-border text-slate-600 transition hover:bg-slate-50 lg:hidden">

                        <svg class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                    </button>


                    {{-- Page Heading --}}
                    <div>

                        <h1 class="text-base font-semibold text-slate-900 sm:text-lg">
                            @yield('page-heading', 'Dashboard')
                        </h1>

                        <p class="hidden text-xs text-slate-500 sm:block">
                            @yield('page-description', 'Manage your StockCore website')
                        </p>

                    </div>

                </div>


                {{-- Right --}}
                <div class="flex items-center gap-2 sm:gap-4">

                    {{-- Visit Website --}}
                    <a href="#"
                        target="_blank"
                        class="hidden items-center gap-2 rounded-lg border border-admin-border px-3 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-slate-900 md:flex">

                        <svg class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 3h6v6M10 14L21 3M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                        </svg>

                        Visit website

                    </a>


                    {{-- Notification --}}
                    <button type="button"
                        class="relative flex h-10 w-10 items-center justify-center rounded-lg text-slate-500 transition hover:bg-slate-50 hover:text-slate-900">

                        <svg class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M18 8a6 6 0 00-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4" />
                        </svg>

                        <span class="absolute right-2.5 top-2.5 h-1.5 w-1.5 rounded-full bg-primary-600"></span>

                    </button>


                    {{-- User --}}
                    <div class="hidden items-center gap-3 border-l border-admin-border pl-4 sm:flex">

                        <div class="text-right">

                            <p class="text-sm font-semibold text-slate-900">
                                {{ auth()->user()->name ?? 'Administrator' }}
                            </p>

                            <p class="text-xs text-slate-500">
                                Administrator
                            </p>

                        </div>

                        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-600 text-xs font-bold text-white">
                            {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                        </div>

                    </div>

                </div>

            </header>


            {{-- =====================================================
                 PAGE CONTENT
            ====================================================== --}}
            <main class="min-h-[calc(100vh-72px)] p-4 sm:p-6 lg:p-8">

                {{-- Success Message --}}
                @if (session('success'))

                    <div class="mb-6 flex items-start gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">

                        <svg class="mt-0.5 h-5 w-5 shrink-0"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 13l4 4L19 7" />
                        </svg>

                        <span>{{ session('success') }}</span>

                    </div>

                @endif


                {{-- Error Message --}}
                @if (session('error'))

                    <div class="mb-6 flex items-start gap-3 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">

                        <svg class="mt-0.5 h-5 w-5 shrink-0"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>

                        <span>{{ session('error') }}</span>

                    </div>

                @endif


                @yield('admin-content')

            </main>

        </div>

    </div>


    {{-- =============================================================
         MOBILE SIDEBAR SCRIPT
    ========================================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const sidebar = document.getElementById('admin-sidebar');
            const overlay = document.getElementById('admin-overlay');
            const menuButton = document.getElementById('admin-menu-button');

            function openSidebar() {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeSidebar() {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            if (menuButton) {
                menuButton.addEventListener('click', openSidebar);
            }

            if (overlay) {
                overlay.addEventListener('click', closeSidebar);
            }

            window.addEventListener('resize', function () {
                if (window.innerWidth >= 1024) {
                    closeSidebar();
                }
            });

        });
    </script>

</body>

</html>

