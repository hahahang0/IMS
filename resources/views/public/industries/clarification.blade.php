<style>

    @keyframes complexityFloat {
        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    .complexity-item {
        animation: complexityFloat 6s ease-in-out infinite;
    }

    .complexity-item:nth-child(2) {
        animation-delay: -1.5s;
    }

    .complexity-item:nth-child(3) {
        animation-delay: -3s;
    }

    .complexity-item:nth-child(4) {
        animation-delay: -4.5s;
    }


    /* Right-side operation cards */

    @keyframes operationFloat {
        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-4px);
        }
    }

    .operation-source {
        animation: operationFloat 6s ease-in-out infinite;
    }

    .operation-source:nth-child(2) {
        animation-delay: -2s;
    }

    .operation-source:nth-child(3) {
        animation-delay: -4s;
    }

</style>

{{-- clarification section --}}
<section class="relative overflow-hidden bg-white py-24 sm:py-32">

    {{-- Background --}}
    <div class="pointer-events-none absolute inset-0">

        {{-- Soft blue glow --}}
        <div
            class="absolute -left-40 top-20 h-[420px] w-[420px] rounded-full bg-primary-100/60 blur-[120px]"
        ></div>

        <div
            class="absolute -right-40 bottom-0 h-[500px] w-[500px] rounded-full bg-indigo-100/50 blur-[130px]"
        ></div>

        {{-- Decorative grid --}}
        <div
            class="absolute inset-0 opacity-[0.035]"
            style="
                background-image:
                    linear-gradient(rgba(15,23,42,.5) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(15,23,42,.5) 1px, transparent 1px);
                background-size: 48px 48px;
            "
        ></div>

    </div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">


     {{-- header section --}}

        <div class="mx-auto max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-primary-100 bg-primary-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-primary-600"
            >
                <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>

                From complexity to clarity
            </span>


            <h2
                class="mt-6 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl"
            >
                Your operation is complex.

                <span
                    class="bg-gradient-to-r from-primary-600 via-indigo-600 to-violet-600 bg-clip-text text-transparent"
                >
                    Your inventory shouldn't be.
                </span>
            </h2>


            <p
                class="mx-auto mt-6 max-w-2xl text-base leading-7 text-slate-500 sm:text-lg"
            >
                Replace disconnected systems, manual updates and scattered
                information with one connected platform built around the way
                your business actually operates.
            </p>

        </div>


{{-- main transformation --}}

        <div class="relative mt-20">


            {{-- Decorative orbital lines --}}
            <div
                class="pointer-events-none absolute left-1/2 top-1/2 hidden h-[620px] w-[620px] -translate-x-1/2 -translate-y-1/2 rounded-full border border-primary-100 lg:block"
            ></div>

            <div
                class="pointer-events-none absolute left-1/2 top-1/2 hidden h-[460px] w-[460px] -translate-x-1/2 -translate-y-1/2 rounded-full border border-indigo-100 lg:block"
            ></div>


            <div class="grid items-center gap-12 lg:grid-cols-[0.85fr_1.3fr]">


              {{-- left complexity --}}

                <div class="relative">

                    <div class="mb-7">

                        <p
                            class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400"
                        >
                            Before StockCore
                        </p>

                        <h3
                            class="mt-3 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl"
                        >
                            Too many moving parts.
                        </h3>

                    </div>


                    <div class="relative space-y-4">


                        {{-- Spreadsheet --}}
                        <div
                            class="complexity-item group relative flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        >

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600"
                            >
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M4 5h16v14H4zM8 9h2m-2 3h2m4-3h2m-2 3h2M8 16h8"
                                    />
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-slate-800">
                                    Spreadsheets
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Manual stock updates & reporting
                                </p>
                            </div>

                            <span
                                class="ml-auto text-xs font-medium text-slate-300"
                            >
                                Manual
                            </span>

                        </div>


                        {{-- Warehouses --}}
                        <div
                            class="complexity-item group relative flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        >

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600"
                            >
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 10l9-6 9 6v10H3V10zM7 14h10M7 17h10"
                                    />
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-slate-800">
                                    Multiple locations
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Inventory scattered across warehouses
                                </p>
                            </div>

                            <span
                                class="ml-auto text-xs font-medium text-slate-300"
                            >
                                Scattered
                            </span>

                        </div>


                        {{-- Sales --}}
                        <div
                            class="complexity-item group relative flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        >

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-violet-50 text-violet-600"
                            >
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 7h12l1 12H5L6 7zm3 0a3 3 0 016 0"
                                    />
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-slate-800">
                                    Sales channels
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Orders coming from different systems
                                </p>
                            </div>

                            <span
                                class="ml-auto text-xs font-medium text-slate-300"
                            >
                                Disconnected
                            </span>

                        </div>


                        {{-- Suppliers --}}
                        <div
                            class="complexity-item group relative flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        >

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-rose-50 text-rose-600"
                            >
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 7h18M5 7v10m14-10v10M8 17v3m8-3v3M4 7l2-4h12l2 4"
                                    />
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-slate-800">
                                    Suppliers
                                </p>

                                <p class="mt-1 text-xs text-slate-500">
                                    Orders and incoming stock tracked separately
                                </p>
                            </div>

                            <span
                                class="ml-auto text-xs font-medium text-slate-300"
                            >
                                Separate
                            </span>

                        </div>

                    </div>

                </div>



             {{-- right : stock system --}}

                {{-- ================================================= --}}
{{-- RIGHT: STOCKCORE CONNECTED OPERATIONS --}}
{{-- ================================================= --}}

<div class="relative lg:pl-4">

    {{-- Ambient background decorations --}}
    <div
        class="pointer-events-none absolute -right-10 -top-10 h-52 w-52 rounded-full bg-primary-200/40 blur-[90px]"
    ></div>

    <div
        class="pointer-events-none absolute -bottom-10 left-20 h-56 w-56 rounded-full bg-indigo-200/30 blur-[100px]"
    ></div>


    {{-- Main system window --}}
    <div
        class="relative overflow-hidden rounded-[2rem] border border-slate-200/80 bg-slate-950 shadow-[0_30px_80px_-25px_rgba(15,23,42,.35)]"
    >

        {{-- Background atmosphere --}}
        <div class="pointer-events-none absolute inset-0">

            <div
                class="absolute left-[35%] top-[20%] h-72 w-72 rounded-full bg-primary-500/10 blur-[100px]"
            ></div>

            <div
                class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-violet-500/10 blur-[100px]"
            ></div>

            {{-- grid --}}
            <div
                class="absolute inset-0 opacity-[0.035]"
                style="
                    background-image:
                        linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
                    background-size: 36px 36px;
                "
            ></div>

        </div>


        {{-- ================================================= --}}
        {{-- TOP BAR --}}
        {{-- ================================================= --}}

        <div
            class="relative flex items-center justify-between border-b border-white/[0.07] px-6 py-5"
        >

            <div class="flex items-center gap-3">

                <div
                    class="flex h-9 w-9 items-center justify-center rounded-xl border border-primary-400/10 bg-primary-500/10"
                >
                    <svg
                        class="h-4 w-4 text-primary-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h10"
                        />
                    </svg>
                </div>

                <div>
                    <p class="text-sm font-semibold text-white">
                        Connected operations
                    </p>

                    <p class="mt-0.5 text-[10px] text-slate-500">
                        Everything flowing through StockCore
                    </p>
                </div>

            </div>


            <div
                class="flex items-center gap-2 rounded-full border border-emerald-400/10 bg-emerald-400/[0.05] px-3 py-1.5"
            >
                <span
                    class="h-1.5 w-1.5 animate-pulse rounded-full bg-emerald-400"
                ></span>

                <span class="text-[10px] font-semibold text-emerald-300">
                    LIVE
                </span>
            </div>

        </div>



        {{-- ================================================= --}}
        {{-- MAIN OPERATION MAP --}}
        {{-- ================================================= --}}

        <div class="relative min-h-[420px] px-5 py-8 sm:px-7">


            {{-- ============================= --}}
            {{-- CONNECTION LINES --}}
            {{-- ============================= --}}

            <svg
                class="pointer-events-none absolute inset-0 hidden h-full w-full sm:block"
                viewBox="0 0 700 420"
                preserveAspectRatio="none"
            >

                <defs>

                    <linearGradient id="lineGradientLeft" x1="0%" x2="100%">
                        <stop offset="0%" stop-color="#64748b" stop-opacity=".15" />
                        <stop offset="100%" stop-color="#60a5fa" stop-opacity=".65" />
                    </linearGradient>

                    <linearGradient id="lineGradientRight" x1="0%" x2="100%">
                        <stop offset="0%" stop-color="#60a5fa" stop-opacity=".65" />
                        <stop offset="100%" stop-color="#818cf8" stop-opacity=".2" />
                    </linearGradient>

                </defs>


                {{-- Left inputs --}}
                <path
                    d="M120 85 C220 85 220 150 320 190"
                    stroke="url(#lineGradientLeft)"
                    stroke-width="1.5"
                    fill="none"
                />

                <path
                    d="M120 205 C220 205 230 205 320 205"
                    stroke="url(#lineGradientLeft)"
                    stroke-width="1.5"
                    fill="none"
                />

                <path
                    d="M120 325 C220 325 220 260 320 220"
                    stroke="url(#lineGradientLeft)"
                    stroke-width="1.5"
                    fill="none"
                />


                {{-- Right outputs --}}
                <path
                    d="M380 195 C480 150 500 90 590 90"
                    stroke="url(#lineGradientRight)"
                    stroke-width="1.5"
                    fill="none"
                />

                <path
                    d="M380 205 C480 205 500 205 590 205"
                    stroke="url(#lineGradientRight)"
                    stroke-width="1.5"
                    fill="none"
                />

                <path
                    d="M380 215 C480 270 500 320 590 320"
                    stroke="url(#lineGradientRight)"
                    stroke-width="1.5"
                    fill="none"
                />

            </svg>



            {{-- ================================================= --}}
            {{-- LEFT INPUTS --}}
            {{-- ================================================= --}}

            <div
                class="relative z-10 flex min-h-[350px] flex-col justify-between sm:absolute sm:left-7 sm:top-9 sm:w-[170px]"
            >


                {{-- Suppliers --}}
                <div
                    class="operation-source rounded-2xl border border-white/[0.08] bg-white/[0.035] p-4 backdrop-blur-sm"
                >

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-400/10"
                        >
                            <svg
                                class="h-4 w-4 text-emerald-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.7"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 7h18M5 7v10m14-10v10M4 7l2-4h12l2 4"
                                />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-semibold text-slate-200">
                                Suppliers
                            </p>

                            <p class="mt-0.5 text-[10px] text-slate-600">
                                Purchase orders
                            </p>
                        </div>

                    </div>

                    <div class="mt-3 flex items-center justify-between">

                        <span class="text-[10px] text-slate-600">
                            Incoming
                        </span>

                        <span class="text-xs font-semibold text-emerald-400">
                            +2,480
                        </span>

                    </div>

                </div>



                {{-- Warehouses --}}
                <div
                    class="operation-source rounded-2xl border border-white/[0.08] bg-white/[0.035] p-4 backdrop-blur-sm"
                >

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-primary-400/10"
                        >
                            <svg
                                class="h-4 w-4 text-primary-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.7"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 10l9-5 9 5v9H3v-9zM7 14h10M7 17h10"
                                />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-semibold text-slate-200">
                                Warehouses
                            </p>

                            <p class="mt-0.5 text-[10px] text-slate-600">
                                8 locations
                            </p>
                        </div>

                    </div>

                    <div class="mt-3 h-1 overflow-hidden rounded-full bg-white/[0.06]">

                        <div
                            class="h-full w-[78%] rounded-full bg-gradient-to-r from-primary-500 to-cyan-400"
                        ></div>

                    </div>

                </div>



                {{-- Sales channels --}}
                <div
                    class="operation-source rounded-2xl border border-white/[0.08] bg-white/[0.035] p-4 backdrop-blur-sm"
                >

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-violet-400/10"
                        >
                            <svg
                                class="h-4 w-4 text-violet-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.7"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 7h12l1 12H5L6 7zm3 0a3 3 0 016 0"
                                />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-semibold text-slate-200">
                                Sales channels
                            </p>

                            <p class="mt-0.5 text-[10px] text-slate-600">
                                Orders syncing
                            </p>
                        </div>

                    </div>

                    <div class="mt-3 flex items-center gap-1.5">

                        <span
                            class="h-1.5 w-1.5 rounded-full bg-emerald-400"
                        ></span>

                        <span class="text-[10px] text-emerald-300">
                            Connected
                        </span>

                    </div>

                </div>

            </div>



            {{-- ================================================= --}}
            {{-- CENTRAL STOCKCORE HUB --}}
            {{-- ================================================= --}}

            <div
                class="relative z-20 mx-auto mt-8 flex h-48 w-48 items-center justify-center sm:absolute sm:left-1/2 sm:top-1/2 sm:mt-0 sm:-translate-x-1/2 sm:-translate-y-1/2"
            >


                {{-- Outer orbit --}}
                <div
                    class="absolute inset-0 animate-[spin_25s_linear_infinite] rounded-full border border-primary-400/10"
                >

                    <span
                        class="absolute left-1/2 top-[-4px] h-2 w-2 -translate-x-1/2 rounded-full bg-primary-400 shadow-[0_0_14px_rgba(96,165,250,.9)]"
                    ></span>

                </div>


                {{-- Second orbit --}}
                <div
                    class="absolute inset-5 animate-[spin_18s_linear_infinite_reverse] rounded-full border border-indigo-400/10"
                >

                    <span
                        class="absolute bottom-[12px] right-[4px] h-2 w-2 rounded-full bg-violet-400 shadow-[0_0_14px_rgba(167,139,250,.8)]"
                    ></span>

                </div>


                {{-- Glow --}}
                <div
                    class="absolute h-32 w-32 rounded-full bg-primary-500/20 blur-[45px]"
                ></div>


                {{-- Main hub --}}
                <div
                    class="relative flex h-28 w-28 flex-col items-center justify-center rounded-[2rem] border border-primary-400/30 bg-gradient-to-br from-primary-500/20 via-primary-500/10 to-indigo-500/10 shadow-[0_0_70px_rgba(59,130,246,.18)] backdrop-blur-xl"
                >

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-2xl border border-primary-400/20 bg-primary-400/10"
                    >

                        <svg
                            class="h-5 w-5 text-primary-300"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 7h16M4 12h16M4 17h16"
                            />
                        </svg>

                    </div>

                    <p class="mt-2 text-xs font-bold text-white">
                        StockCore
                    </p>

                    <p class="text-[9px] text-primary-300">
                        Syncing everything
                    </p>

                </div>


                {{-- Pulse rings --}}
                <div
                    class="pointer-events-none absolute h-36 w-36 animate-ping rounded-full border border-primary-400/10"
                    style="animation-duration: 3s;"
                ></div>

            </div>



            {{-- ================================================= --}}
            {{-- RIGHT OUTPUTS --}}
            {{-- ================================================= --}}

            <div
                class="relative z-10 mt-8 flex flex-col gap-4 sm:absolute sm:right-7 sm:top-9 sm:mt-0 sm:w-[170px]"
            >


                {{-- Inventory accuracy --}}
                <div
                    class="rounded-2xl border border-emerald-400/10 bg-emerald-400/[0.045] p-4 backdrop-blur-sm"
                >

                    <div class="flex items-center justify-between">

                        <span class="text-[10px] text-slate-500">
                            STOCK ACCURACY
                        </span>

                        <span
                            class="h-1.5 w-1.5 rounded-full bg-emerald-400"
                        ></span>

                    </div>

                    <p class="mt-2 text-xl font-bold text-white">
                        98.6%
                    </p>

                    <p class="mt-1 text-[10px] text-emerald-300">
                        ↑ 4.2% this month
                    </p>

                </div>



                {{-- Orders --}}
                <div
                    class="rounded-2xl border border-primary-400/10 bg-primary-400/[0.045] p-4 backdrop-blur-sm"
                >

                    <div class="flex items-center justify-between">

                        <span class="text-[10px] text-slate-500">
                            ORDERS TODAY
                        </span>

                        <svg
                            class="h-4 w-4 text-primary-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-5-5 5 5-5 5"
                            />
                        </svg>

                    </div>

                    <div class="mt-2 flex items-end justify-between">

                        <p class="text-xl font-bold text-white">
                            1,248
                        </p>

                        <span class="text-[10px] text-primary-300">
                            +12%
                        </span>

                    </div>


                    {{-- mini chart --}}
                    <div class="mt-4 flex h-8 items-end gap-1">

                        <span class="h-2 w-full rounded-sm bg-primary-500/20"></span>
                        <span class="h-4 w-full rounded-sm bg-primary-500/30"></span>
                        <span class="h-3 w-full rounded-sm bg-primary-500/40"></span>
                        <span class="h-6 w-full rounded-sm bg-primary-500/50"></span>
                        <span class="h-5 w-full rounded-sm bg-primary-500/60"></span>
                        <span class="h-8 w-full rounded-sm bg-primary-400"></span>

                    </div>

                </div>



                {{-- Alerts --}}
                <div
                    class="rounded-2xl border border-violet-400/10 bg-violet-400/[0.04] p-4 backdrop-blur-sm"
                >

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-lg bg-violet-400/10"
                        >
                            <svg
                                class="h-4 w-4 text-violet-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.7"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 8v4m0 4h.01M10.3 3.7L2.7 17a2 2 0 001.7 3h15.2a2 2 0 001.7-3L13.7 3.7a2 2 0 00-3.4 0z"
                                />
                            </svg>
                        </div>

                        <div>

                            <p class="text-xs font-semibold text-white">
                                3 alerts
                            </p>

                            <p class="text-[10px] text-slate-500">
                                Need attention
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        {{-- ================================================= --}}
        {{-- BOTTOM LIVE FEED --}}
        {{-- ================================================= --}}

        <div
            class="relative border-t border-white/[0.07] bg-white/[0.015] px-6 py-5"
        >

            <div
                class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between"
            >

                <div>

                    <p
                        class="text-[10px] font-medium uppercase tracking-[0.18em] text-slate-600"
                    >
                        Live activity
                    </p>

                    <div class="mt-2 flex items-center gap-3">

                        <span
                            class="relative flex h-2 w-2"
                        >
                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-60"
                            ></span>

                            <span
                                class="relative inline-flex h-2 w-2 rounded-full bg-emerald-400"
                            ></span>
                        </span>

                        <p class="text-xs text-slate-400">
                            Sydney warehouse received
                            <span class="font-semibold text-white">
                                240 units
                            </span>
                        </p>

                    </div>

                </div>


                <div class="flex items-center gap-5">

                    <div>
                        <p class="text-[9px] uppercase tracking-wider text-slate-600">
                            Products
                        </p>

                        <p class="mt-1 text-sm font-bold text-white">
                            8,429
                        </p>
                    </div>

                    <span class="h-8 w-px bg-white/[0.08]"></span>

                    <div>
                        <p class="text-[9px] uppercase tracking-wider text-slate-600">
                            Locations
                        </p>

                        <p class="mt-1 text-sm font-bold text-white">
                            08
                        </p>
                    </div>

                    <span class="h-8 w-px bg-white/[0.08]"></span>

                    <div>
                        <p class="text-[9px] uppercase tracking-wider text-slate-600">
                            Sync
                        </p>

                        <p class="mt-1 text-sm font-bold text-emerald-400">
                            Live
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>



    {{-- Floating badge --}}
    <div
        class="absolute -right-4 top-24 hidden rounded-xl border border-slate-200 bg-white px-4 py-3 shadow-xl lg:block"
    >

        <div class="flex items-center gap-3">

            <div
                class="flex h-8 w-8 items-center justify-center rounded-full bg-emerald-50"
            >
                <svg
                    class="h-4 w-4 text-emerald-600"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 13l4 4L19 7"
                    />
                </svg>
            </div>

            <div>

                <p class="text-[10px] text-slate-400">
                    Systems synced
                </p>

                <p class="text-xs font-bold text-slate-800">
                    All operational
                </p>

            </div>

        </div>

    </div>

</div>

            </div>


           {{-- bottom section --}}
            <div
                class="mt-14 grid border-y border-slate-200 sm:grid-cols-3"
            >

                <div class="flex items-center gap-4 px-5 py-6 sm:border-r sm:border-slate-200">
                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-primary-50 text-primary-600"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-5-5 5 5-5 5"
                            />
                        </svg>
                    </span>

                    <div>
                        <p class="text-sm font-semibold text-slate-800">
                            Manual work
                        </p>

                        <p class="text-xs text-slate-500">
                            → Automated workflows
                        </p>
                    </div>
                </div>


                <div class="flex items-center gap-4 px-5 py-6 sm:border-r sm:border-slate-200">
                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-indigo-50 text-indigo-600"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-5-5 5 5-5 5"
                            />
                        </svg>
                    </span>

                    <div>
                        <p class="text-sm font-semibold text-slate-800">
                            Disconnected data
                        </p>

                        <p class="text-xs text-slate-500">
                            → Real-time visibility
                        </p>
                    </div>
                </div>


                <div class="flex items-center gap-4 px-5 py-6">
                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-violet-50 text-violet-600"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-5-5 5 5-5 5"
                            />
                        </svg>
                    </span>

                    <div>
                        <p class="text-sm font-semibold text-slate-800">
                            Multiple systems
                        </p>

                        <p class="text-xs text-slate-500">
                            → One connected platform
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>

{{-- animation --}}
    <style>
        @keyframes complexityFloat {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .complexity-item {
            animation: complexityFloat 6s ease-in-out infinite;
        }

        .complexity-item:nth-child(2) {
            animation-delay: -1.5s;
        }

        .complexity-item:nth-child(3) {
            animation-delay: -3s;
        }

        .complexity-item:nth-child(4) {
            animation-delay: -4.5s;
        }
    </style>

</section>