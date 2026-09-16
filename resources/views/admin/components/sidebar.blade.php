{{-- =========================================================
             SIDEBAR
        ========================================================== --}}
<aside id="admin-sidebar"
    class="fixed inset-y-0 left-0 z-50 flex w-64 -translate-x-full flex-col border-r border-admin-sidebar-border bg-admin-sidebar transition-transform duration-300 lg:translate-x-0">

    {{-- Sidebar Header --}}
    <div class="flex h-[72px] shrink-0 items-center border-b border-admin-sidebar-border px-5">

        <a href="#" class="flex items-center gap-3">

            <div class="flex h-9 w-9 items-center justify-center overflow-hidden rounded-lg bg-white">
                <img src="{{ asset('images/logo.webp') }}" alt="StockCore" class="h-7 w-auto object-contain">
            </div>

            <div class="leading-none">
                <div class="text-[17px] font-bold tracking-tight text-white">
                    stockCore
                </div>

                <div class="mt-1 text-[9px] font-bold uppercase tracking-[0.18em] text-slate-500">
                    Admin Panel
                </div>
            </div>

        </a>

    </div>


    {{-- Sidebar Navigation --}}
    <nav class="admin-scrollbar flex-1 overflow-y-auto px-3 py-5">

        {{-- Overview --}}
        <div class="mb-7">

            <p class="mb-2 px-3 text-[10px] font-bold uppercase tracking-[0.16em] text-slate-500">
                Overview
            </p>

            <a href="#"
                class="group flex items-center gap-3 rounded-lg bg-primary-600 px-3 py-2.5 text-sm font-medium text-white shadow-sm">

                {{-- Dashboard Icon --}}
                <svg class="h-[18px] w-[18px] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12l9-9 9 9M5 10v9a2 2 0 002 2h10a2 2 0 002-2v-9M9 21v-6h6v6" />
                </svg>

                <span>Dashboard</span>

            </a>

        </div>


        {{-- Website --}}
        <div class="mb-7">

            <p class="mb-2 px-3 text-[10px] font-bold uppercase tracking-[0.16em] text-slate-500">
                Website
            </p>


            {{-- Pages --}}
            {{-- <a href="#"
                        class="group mb-1 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                        <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 5a2 2 0 012-2h9l5 5v13a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" />
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14 3v6h6M8 13h8M8 17h6" />
                        </svg>

                        <span>Pages</span>

                    </a> --}}

            <details class="group" {{ request()->routeIs('admin.home*') ? 'open' : '' }}>

                <summary
                    class="flex cursor-pointer list-none items-center justify-between rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                    <div class="flex items-center gap-3">

                        {{-- Pages Icon --}}
                        <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 5a2 2 0 012-2h9l5 5v13a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 3v6h6M8 13h8M8 17h6" />

                        </svg>

                        <span>Pages</span>

                    </div>


                    {{-- Dropdown Arrow --}}
                    <svg class="h-4 w-4 text-slate-500 transition-transform duration-200 group-open:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />

                    </svg>

                </summary>


                {{-- Page List --}}
                <div class="mt-1 space-y-1 pl-4">


                    {{-- Home Page --}}
                    <details class="group" {{ request()->routeIs('admin.home*') ? 'open' : '' }}>

                        <summary
                            class="flex cursor-pointer list-none items-center justify-between rounded-lg px-3 py-2 text-sm transition
                {{ request()->routeIs('admin.home*')
                    ? 'text-white'
                    : 'text-slate-400 hover:bg-admin-sidebar-hover hover:text-white' }}">

                            <a href="{{ route('admin.home') }}" class="flex flex-1 items-center gap-3"
                                onclick="event.stopPropagation();">

                                {{-- Home Icon --}}
                                <svg class="h-4 w-4 shrink-0 {{ request()->routeIs('admin.home*') ? 'text-primary-400' : 'text-slate-500' }}"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 11.5L12 4l9 7.5" />

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 10v9a1 1 0 001 1h12a1 1 0 001-1v-9" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 20v-5h6v5" />

                                </svg>

                                <span>Home</span>

                            </a>


                            {{-- Home Sections Arrow --}}
                            <svg class="h-3.5 w-3.5 text-slate-500 transition-transform duration-200 group-open:rotate-180"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />

                            </svg>

                        </summary>


                        {{-- Home Sections --}}
                        <div class="mt-1 space-y-0.5 border-l border-slate-700/60 ml-2 pl-3">


                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                Hero
                            </a>


                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                Features
                            </a>


                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                How It Works
                            </a>


                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                Use Cases
                            </a>


                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                Trust
                            </a>

                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                CTA
                            </a>


                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                Testimonials
                            </a>


                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                Pricing
                            </a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                Problem & Solution
                            </a>


                            {{-- <a href="#"
                                class="block rounded-md px-3 py-2 text-xs text-slate-500 transition hover:bg-admin-sidebar-hover hover:text-slate-200">
                                FAQ
                            </a> --}}


                        </div>

                    </details>


                    {{-- Features Page --}}
                    <a href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-slate-400 transition hover:bg-admin-sidebar-hover hover:text-white">

                        <svg class="h-4 w-4 shrink-0 text-slate-500" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5 4h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5a1 1 0 011-1z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 8h8M8 12h8M8 16h5" />

                        </svg>

                        <span>Features</span>

                    </a>


                    {{-- Contact Page --}}
                    <a href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm text-slate-400 transition hover:bg-admin-sidebar-hover hover:text-white">

                        <svg class="h-4 w-4 shrink-0 text-slate-500" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 5a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 8h8M8 12h6M8 16h4" />

                        </svg>

                        <span>Contact</span>

                    </a>


                </div>

            </details>


            {{-- Media --}}
            <a href="#"
                class="group mb-1 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="4" width="18" height="16" rx="2" />
                    <circle cx="8.5" cy="9" r="1.5" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 15l-5-5L6 20" />
                </svg>

                <span>Media Library</span>

            </a>
            <a href="{{ route('admin.footer.edit') }}"
                class="group flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="4" width="18" height="16" rx="2" />
                    <path stroke-linecap="round" d="M3 15h18" />
                    <path stroke-linecap="round" d="M7 18h4M14 18h3" />
                </svg>

                <span>Footer</span>
            </a>
       

        </div>

s
        {{-- Content --}}
        <div class="mb-7">

            <p class="mb-2 px-3 text-[10px] font-bold uppercase tracking-[0.16em] text-slate-500">
                Content
            </p>


            {{-- Features --}}
            <a href="#"
                class="group mb-1 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3l2.6 5.3L20 9.1l-4 3.9.9 5.5-4.9-2.6-4.9 2.6.9-5.5-4-3.9 5.4-.8L12 3z" />
                </svg>

                <span>Features</span>

            </a>


            {{-- Use Cases --}}
            <a href="#"
                class="group mb-1 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="4" width="18" height="16" rx="2" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8M8 13h5" />
                </svg>

                <span>Use Cases</span>

            </a>


            {{-- Integrations --}}
            <a href="#"
                class="group mb-1 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2M8 17v2a2 2 0 002 2h4a2 2 0 002-2v-2M7 8h10a2 2 0 012 2v4a2 2 0 01-2 2H7a2 2 0 01-2-2v-4a2 2 0 012-2z" />
                </svg>

                <span>Integrations</span>

            </a>


            {{-- Testimonials --}}
            <a href="#"
                class="group flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7 8h10M7 12h6M5 4h14a2 2 0 012 2v9a2 2 0 01-2 2h-6l-5 4v-4H5a2 2 0 01-2-2V6a2 2 0 012-2z" />
                </svg>

                <span>Testimonials</span>

            </a>

        </div>


        {{-- System --}}
        <div>

            <p class="mb-2 px-3 text-[10px] font-bold uppercase tracking-[0.16em] text-slate-500">
                System
            </p>


            {{-- Settings --}}
            <a href="#"
                class="group mb-1 flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="3" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.4 15a1.7 1.7 0 00.3 1.9l.1.1-1.7 1.7-.1-.1a1.7 1.7 0 00-1.9-.3 1.7 1.7 0 00-1 1.5v.2h-2.4v-.2a1.7 1.7 0 00-1-1.5 1.7 1.7 0 00-1.9.3l-.1.1-1.7-1.7.1-.1a1.7 1.7 0 00.3-1.9 1.7 1.7 0 00-1.5-1H6.8v-2.4H7a1.7 1.7 0 001.5-1 1.7 1.7 0 00-.3-1.9l-.1-.1 1.7-1.7.1.1a1.7 1.7 0 001.9.3 1.7 1.7 0 001-1.5V5h2.4v.2a1.7 1.7 0 001 1.5 1.7 1.7 0 001.9-.3l.1-.1 1.7 1.7-.1.1a1.7 1.7 0 00-.3 1.9 1.7 1.7 0 001.5 1h.2v2.4h-.2a1.7 1.7 0 00-1.5 1z" />
                </svg>

                <span>Settings</span>

            </a>


            {{-- Users --}}
            <a href="#"
                class="group flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 transition hover:bg-admin-sidebar-hover hover:text-white">

                <svg class="h-[18px] w-[18px] shrink-0 text-slate-500 transition group-hover:text-slate-300"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <circle cx="9" cy="8" r="3" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 20a6 6 0 0112 0M16 11a3 3 0 100-6M18 14a5 5 0 013 6" />
                </svg>

                <span>Users</span>

            </a>

        </div>

    </nav>


    {{-- Sidebar Footer --}}
    <div class="shrink-0 border-t border-admin-sidebar-border p-3">

        <div class="mb-2 flex items-center gap-3 rounded-lg px-3 py-2.5">

            <div
                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-primary-600 text-xs font-bold text-white">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>

            <div class="min-w-0 flex-1">

                <p class="truncate text-sm font-semibold text-white">
                    {{ auth()->user()->name ?? 'Administrator' }}
                </p>

                <p class="truncate text-xs text-slate-500">
                    Administrator
                </p>

            </div>

        </div>


        <form method="POST" action="#">
            @csrf

            <button type="submit"
                class="group flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-400 transition hover:bg-red-500/10 hover:text-red-400">

                <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 17l5-5-5-5M15 12H3M21 19V5a2 2 0 00-2-2h-4" />
                </svg>

                <span>Sign out</span>

            </button>

        </form>

    </div>

</aside>
