{{-- ====================================================================== --}}
{{-- SCAN & IMPORT DOCUMENTS — HERO --}}
{{-- ====================================================================== --}}
@extends('layouts.public')

@section('title', 'Landing Cost | StockCore')

@section('content')

    <main class="overflow-hidden">

        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT DOCUMENTS — HERO --}}
        {{-- ====================================================================== --}}

        <style>
            /*
                                        |--------------------------------------------------------------------------
                                        | Floating Animations
                                        |--------------------------------------------------------------------------
                                        */

            .scan-dashboard-float {
                animation: scanDashboardFloat 7s ease-in-out infinite;
            }

            .scan-float-1 {
                animation: scanFloatOne 5.5s ease-in-out infinite;
            }

            .scan-float-2 {
                animation: scanFloatTwo 6.2s ease-in-out infinite;
                animation-delay: -1.4s;
            }

            .scan-float-3 {
                animation: scanFloatThree 5.8s ease-in-out infinite;
                animation-delay: -2.3s;
            }

            .scan-float-4 {
                animation: scanFloatFour 6.5s ease-in-out infinite;
                animation-delay: -3.2s;
            }


            @keyframes scanDashboardFloat {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-6px);
                }
            }


            @keyframes scanFloatOne {

                0%,
                100% {
                    transform: translateY(0) rotate(-1deg);
                }

                50% {
                    transform: translateY(-8px) rotate(-1deg);
                }
            }


            @keyframes scanFloatTwo {

                0%,
                100% {
                    transform: translateY(0) rotate(1deg);
                }

                50% {
                    transform: translateY(-10px) rotate(1deg);
                }
            }


            @keyframes scanFloatThree {

                0%,
                100% {
                    transform: translateY(0) rotate(0.5deg);
                }

                50% {
                    transform: translateY(-8px) rotate(0.5deg);
                }
            }


            @keyframes scanFloatFour {

                0%,
                100% {
                    transform: translateY(0) rotate(-0.5deg);
                }

                50% {
                    transform: translateY(-10px) rotate(-0.5deg);
                }
            }


            /*
                                        |--------------------------------------------------------------------------
                                        | Respect Reduced Motion
                                        |--------------------------------------------------------------------------
                                        */

            @media (prefers-reduced-motion: reduce) {

                .scan-dashboard-float,
                .scan-float-1,
                .scan-float-2,
                .scan-float-3,
                .scan-float-4 {
                    animation: none;
                }

            }
        </style>



        <section
            class="relative overflow-hidden
           bg-gradient-to-br
           from-white
           via-background
           to-primary-50/70">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Right main glow --}}
                <div
                    class="absolute
                   -right-40
                   top-[-100px]
                   h-[700px]
                   w-[700px]
                   rounded-full
                   bg-primary-100/45
                   blur-[100px]">
                </div>


                {{-- Bottom center glow --}}
                <div
                    class="absolute
                   bottom-[-250px]
                   left-[45%]
                   h-[550px]
                   w-[800px]
                   rounded-full
                   bg-primary-100/30
                   blur-[120px]">
                </div>


                {{-- Right dashed circle --}}
                <div
                    class="absolute
                   -right-[180px]
                   top-[60px]
                   hidden
                   h-[560px]
                   w-[560px]
                   rounded-full
                   border
                   border-dashed
                   border-primary-300/40
                   lg:block">
                </div>


                {{-- Dotted pattern --}}
                <div class="absolute
                   right-12
                   top-12
                   hidden
                   h-36
                   w-36
                   opacity-30
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

            </div>



            {{-- ================================================================== --}}
            {{-- MAIN GRID --}}
            {{-- ================================================================== --}}

            <div
                class="relative z-10
               mx-auto
               grid
               max-w-7xl
               items-center
               gap-14
               px-6
               py-16
               sm:px-8
               lg:min-h-[780px]
               lg:grid-cols-[0.88fr_1.12fr]
               lg:px-10
               lg:py-20
               xl:gap-20">


                {{-- ================================================================== --}}
                {{-- LEFT SIDE --}}
                {{-- ================================================================== --}}

                <div>


                    {{-- Breadcrumb --}}
                    <nav aria-label="Breadcrumb"
                        class="flex flex-wrap
                       items-center gap-2
                       text-xs font-medium
                       text-secondary-500
                       sm:text-sm">

                        <a href="{{ url('/') }}" class="transition hover:text-primary-600">
                            Home
                        </a>


                        <svg class="h-4 w-4 text-secondary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 5 7 7-7 7" />
                        </svg>


                        <a href="{{ url('/features') }}" class="transition hover:text-primary-600">
                            Features
                        </a>


                        <svg class="h-4 w-4 text-secondary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 5 7 7-7 7" />
                        </svg>


                        <span class="font-semibold text-secondary-700">
                            Scan & Import Documents
                        </span>

                    </nav>



                    {{-- Badge --}}
                    <div
                        class="mt-7
                       inline-flex
                       items-center
                       gap-2
                       rounded-full
                       border
                       border-primary-100
                       bg-primary-50
                       px-4
                       py-2
                       text-xs
                       font-bold
                       uppercase
                       tracking-[0.08em]
                       text-primary-700">

                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />

                            <path stroke-linecap="round" d="M14 3v5h5M10 12h5M10 16h5" />
                        </svg>

                        Scan & Import Documents

                    </div>



                    {{-- Heading --}}
                    <h1
                        class="mt-7
                       max-w-2xl
                       text-5xl
                       font-extrabold
                       leading-[1.02]
                       tracking-[-0.045em]
                       text-secondary-900
                       sm:text-6xl
                       lg:text-[62px]">

                        Automate

                        <span class="block">
                            Document

                            <span class="text-primary-600">
                                Capture
                            </span>

                        </span>

                    </h1>



                    {{-- Supporting heading --}}
                    <p
                        class="mt-5
                       text-xl
                       font-medium
                       text-secondary-500
                       sm:text-2xl">
                        From supplier documents to inventory, faster.
                    </p>



                    {{-- Description --}}
                    <p
                        class="mt-6
                       max-w-xl
                       text-base
                       leading-7
                       text-secondary-600
                       sm:text-lg
                       sm:leading-8">
                        Upload or scan supplier invoices and inventory documents,
                        let StockCore extract the important information, review the
                        results, and confirm them directly into stock — without
                        repetitive manual entry.
                    </p>



                    {{-- ========================================================= --}}
                    {{-- CTA BUTTONS --}}
                    {{-- ========================================================= --}}

                    <div
                        class="mt-9
                       flex
                       flex-col
                       gap-4
                       sm:flex-row">

                        {{-- Primary --}}
                        <a href="{{ url('/signup') }}"
                            class="group
                           inline-flex
                           items-center
                           justify-center
                           gap-3
                           rounded-xl
                           bg-primary-600
                           px-7
                           py-4
                           text-sm
                           font-bold
                           text-white
                           shadow-[0_15px_35px_rgba(37,99,235,0.25)]
                           transition
                           duration-300
                           hover:-translate-y-0.5
                           hover:bg-primary-700
                           hover:shadow-[0_20px_45px_rgba(37,99,235,0.32)]">

                            Start 14-Day Free Trial

                            <svg class="h-4 w-4
                               transition-transform
                               duration-300
                               group-hover:translate-x-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>



                        {{-- Secondary --}}
                        <a href="#scan-import-workflow"
                            class="group
                           inline-flex
                           items-center
                           justify-center
                           gap-3
                           rounded-xl
                           border
                           border-secondary-200
                           bg-white
                           px-7
                           py-4
                           text-sm
                           font-bold
                           text-secondary-900
                           shadow-sm
                           transition
                           duration-300
                           hover:-translate-y-0.5
                           hover:border-primary-200
                           hover:shadow-md">

                            <span
                                class="flex
                               h-8
                               w-8
                               items-center
                               justify-center
                               rounded-full
                               bg-primary-600
                               text-white">

                                <svg class="ml-0.5 h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>

                            </span>

                            See How It Works

                        </a>

                    </div>



                    {{-- ========================================================= --}}
                    {{-- TRUST POINTS --}}
                    {{-- ========================================================= --}}

                    <div
                        class="mt-9
                       grid
                       gap-x-8
                       gap-y-4
                       sm:grid-cols-2">

                        @foreach (['No credit card required', 'Reduce manual entry', 'Faster stock receiving', 'Review before confirming'] as $item)
                            <div class="flex items-center gap-3">

                                <span
                                    class="flex
                                   h-6
                                   w-6
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-full
                                   border
                                   border-emerald-500
                                   bg-emerald-50
                                   text-emerald-600">

                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                    </svg>

                                </span>


                                <span
                                    class="text-sm
                                   font-medium
                                   text-secondary-600">
                                    {{ $item }}
                                </span>

                            </div>
                        @endforeach

                    </div>



                    {{-- Small line --}}
                    <div
                        class="mt-14
                       flex
                       items-center
                       gap-4">

                        <div class="h-px
                           w-10
                           bg-secondary-300"></div>


                        <p
                            class="text-[10px]
                           font-semibold
                           uppercase
                           tracking-[0.22em]
                           text-secondary-400">
                            Less manual work. More inventory control.
                        </p>

                    </div>

                </div>



                {{-- ================================================================== --}}
                {{-- RIGHT SIDE --}}
                {{-- ================================================================== --}}

                <div class="relative
                   mx-auto
                   w-full
                   max-w-[780px]">


                    {{-- Background glow --}}
                    <div
                        class="pointer-events-none
                       absolute
                       left-1/2
                       top-1/2
                       h-[520px]
                       w-[620px]
                       -translate-x-1/2
                       -translate-y-1/2
                       rounded-full
                       bg-primary-100/45
                       blur-[90px]">
                    </div>



                    {{-- ========================================================= --}}
                    {{-- TOP GLASS CARDS --}}
                    {{-- ========================================================= --}}

                    <div
                        class="relative z-30
                       mb-5
                       grid
                       gap-4
                       sm:grid-cols-2
                       lg:px-5">


                        {{-- Upload card --}}
                        <div
                            class="scan-float-1
                           rounded-2xl
                           border
                           border-white/70
                           bg-white/60
                           px-5
                           py-4
                           shadow-[0_18px_50px_rgba(37,99,235,0.12)]
                           backdrop-blur-xl">

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex
                                   h-11
                                   w-11
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-primary-50/90
                                   text-primary-600">

                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />

                                        <path stroke-linecap="round" d="M14 3v5h5" />
                                    </svg>

                                </span>


                                <div class="min-w-0">

                                    <p
                                        class="truncate
                                       text-sm
                                       font-bold
                                       text-secondary-900">
                                        PDF, Images, Scans
                                    </p>

                                    <p
                                        class="mt-1
                                       text-xs
                                       text-secondary-500">
                                        Drag & drop or upload
                                    </p>

                                </div>


                                <span
                                    class="ml-auto
                                   flex
                                   h-9
                                   w-9
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-white">

                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16V4m0 0L7 9m5-5 5 5" />

                                        <path stroke-linecap="round" d="M5 15v4h14v-4" />
                                    </svg>

                                </span>

                            </div>

                        </div>



                        {{-- Auto extracted --}}
                        <div
                            class="scan-float-2
                           rounded-2xl
                           border
                           border-white/70
                           bg-white/60
                           px-5
                           py-4
                           shadow-[0_18px_50px_rgba(16,185,129,0.12)]
                           backdrop-blur-xl">

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex
                                   h-11
                                   w-11
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-emerald-100/80
                                   text-emerald-600">

                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.1">
                                        <circle cx="12" cy="12" r="9" />

                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8 12 2.5 2.5L16 9" />
                                    </svg>

                                </span>


                                <div>

                                    <p
                                        class="text-sm
                                       font-bold
                                       text-secondary-900">
                                        Auto-extracted
                                    </p>

                                    <p
                                        class="mt-1
                                       text-xs
                                       font-medium
                                       text-secondary-500">
                                        98% confidence
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>



                    {{-- ========================================================= --}}
                    {{-- DASHBOARD IMAGE --}}
                    {{-- ========================================================= --}}

                    <div class="scan-dashboard-float
                       relative z-20">

                        <div
                            class="overflow-hidden
                           rounded-[28px]
                           border
                           border-white/70
                           bg-white/50
                           p-2
                           shadow-[0_30px_80px_rgba(37,99,235,0.16)]
                           backdrop-blur-xl
                           sm:p-3">

                            <img src="{{ asset('images/features/scan-import-dashboard.webp') }}"
                                alt="StockCore scan and import document extraction dashboard" loading="eager"
                                class="block
                               h-auto
                               w-full
                               rounded-[22px]
                               object-contain">

                        </div>

                    </div>



                    {{-- ========================================================= --}}
                    {{-- BOTTOM GLASS CARDS --}}
                    {{-- ========================================================= --}}

                    <div
                        class="relative z-30
                       mt-5
                       grid
                       gap-4
                       sm:grid-cols-2
                       lg:px-5">


                        {{-- Detected line items --}}
                        <div
                            class="scan-float-3
                           rounded-2xl
                           border
                           border-white/70
                           bg-white/60
                           px-5
                           py-4
                           shadow-[0_18px_50px_rgba(37,99,235,0.12)]
                           backdrop-blur-xl">

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex
                                   h-11
                                   w-11
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-primary-50/90
                                   text-primary-600">

                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" d="M9 7h10M9 12h10M9 17h10" />

                                        <circle cx="5" cy="7" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                        <circle cx="5" cy="17" r="1" />
                                    </svg>

                                </span>


                                <div>

                                    <p
                                        class="text-sm
                                       font-bold
                                       text-secondary-900">
                                        12 line items detected
                                    </p>

                                    <p
                                        class="mt-1
                                       text-xs
                                       text-secondary-500">
                                        Ready for your review
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- Ready for inventory --}}
                        <div
                            class="scan-float-4
                           rounded-2xl
                           border
                           border-white/70
                           bg-white/60
                           px-5
                           py-4
                           shadow-[0_18px_50px_rgba(37,99,235,0.12)]
                           backdrop-blur-xl">

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex
                                   h-11
                                   w-11
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-primary-50/90
                                   text-primary-600">

                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <ellipse cx="12" cy="5" rx="7" ry="3" />

                                        <path d="M5 5v5c0 1.7 3.1 3 7 3s7-1.3 7-3V5" />

                                        <path d="M5 10v5c0 1.7 3.1 3 7 3s7-1.3 7-3v-5" />
                                    </svg>

                                </span>


                                <div>

                                    <p
                                        class="text-sm
                                       font-bold
                                       text-secondary-900">
                                        Ready for Inventory
                                    </p>

                                    <p
                                        class="mt-1
                                       text-xs
                                       text-secondary-500">
                                        Add to stock with one click
                                    </p>

                                </div>


                                <span
                                    class="ml-auto
                                   flex
                                   h-9
                                   w-9
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600">

                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                                    </svg>

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — MANUAL ENTRY PROBLEM --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-problem"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-white
           via-background
           to-background-muted
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Top right dotted pattern --}}
                <div class="absolute right-16 top-12
                   hidden h-36 w-36
                   opacity-30
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

                {{-- Right soft circle --}}
                <div
                    class="absolute -right-[170px] top-[110px]
                   h-[430px] w-[430px]
                   rounded-full
                   bg-primary-100/30">
                </div>

                {{-- Left subtle glow --}}
                <div
                    class="absolute -left-24 bottom-[-120px]
                   h-[340px] w-[340px]
                   rounded-full
                   bg-primary-100/25
                   blur-[80px]">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION INTRO --}}
                {{-- ================================================================== --}}

                <div class="max-w-4xl">

                    {{-- Eyebrow --}}
                    <div class="flex items-center gap-3">

                        <span class="h-px w-10
                           bg-primary-500"></span>

                        <p
                            class="text-xs font-bold uppercase
                           tracking-[0.18em]
                           text-secondary-400">
                            The Manual Entry Problem
                        </p>

                    </div>



                    {{-- Heading --}}
                    <h2
                        class="mt-5
                       max-w-4xl
                       text-3xl font-bold
                       leading-[1.12]
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        Supplier documents should not become hours of data entry.
                    </h2>



                    {{-- Description --}}
                    <p
                        class="mt-5
                       max-w-4xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        Purchase orders, supplier invoices, packing slips and other
                        inventory documents often arrive in different formats.
                        Manually re-entering the same information is slow, repetitive
                        and more likely to introduce errors into your inventory records.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- PROBLEM CARDS --}}
                {{-- ================================================================== --}}

                <div
                    class="mt-12
                   grid gap-5
                   sm:grid-cols-2
                   xl:grid-cols-4">


                    {{-- ============================================================ --}}
                    {{-- CARD 1 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[24px]
                       border border-primary-100
                       bg-primary-50/55
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-red-200
                       hover:bg-white
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.07)]
                        hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-14 w-14
                           items-center justify-center
                           rounded-2xl
                           bg-red-100
                           text-red-500">

                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <circle cx="12" cy="12" r="8" />

                                <path stroke-linecap="round" d="M12 7v5l3 2" />
                            </svg>

                        </div>



                        {{-- Heading --}}
                        <h3
                            class="mt-5
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Time-Consuming
                        </h3>



                        {{-- Description --}}
                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Manually typing invoice and packing-slip data takes time
                            that warehouse and purchasing teams could spend on
                            receiving, checking and moving inventory.
                        </p>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 2 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[24px]
                       border border-primary-100
                       bg-primary-50/55
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-red-200
                       hover:bg-white
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.07)]
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-14 w-14
                           items-center justify-center
                           rounded-2xl
                           bg-red-100
                           text-red-500">

                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.1">
                                <path stroke-linecap="round" d="m7 7 10 10M17 7 7 17" />
                            </svg>

                        </div>



                        <h3
                            class="mt-5
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Human Errors
                        </h3>



                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Typos, missed line items and incorrect quantities can lead
                            to inaccurate stock levels, pricing issues and avoidable
                            reconciliation work later.
                        </p>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 3 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[24px]
                       border border-primary-100
                       bg-primary-50/55
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-red-200
                       hover:bg-white
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.07)]
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-14 w-14
                           items-center justify-center
                           rounded-2xl
                           bg-red-100
                           text-red-500">

                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <rect x="8" y="4" width="9" height="12" rx="2" />

                                <path stroke-linecap="round" d="M6 8H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-1" />
                            </svg>

                        </div>



                        <h3
                            class="mt-5
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Duplicate Work
                        </h3>



                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            The same supplier and product information is often entered
                            more than once across receiving logs, spreadsheets,
                            purchasing records and inventory systems.
                        </p>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 4 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[24px]
                       border border-primary-100
                       bg-primary-50/55
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-red-200
                       hover:bg-white
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.07)]
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-14 w-14
                           items-center justify-center
                           rounded-2xl
                           bg-red-100
                           text-red-500">

                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.6 10.6A2 2 0 0 0 13.4 13.4" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.9 5.1A10.6 10.6 0 0 1 12 5
                                                                   c5.5 0 9 7 9 7
                                                                   a15.5 15.5 0 0 1-2.1 3.1" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.6 6.6C4 8.4 3 12 3 12
                                                                   s3.5 7 9 7
                                                                   a9 9 0 0 0 3.4-.7" />
                            </svg>

                        </div>



                        <h3
                            class="mt-5
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Delayed Visibility
                        </h3>



                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Physical stock may already be sitting in the warehouse
                            while the system still shows outdated quantities because
                            receiving data has not yet been entered.
                        </p>

                    </article>

                </div>



                {{-- ================================================================== --}}
                {{-- SUPPORTING STRIP --}}
                {{-- ================================================================== --}}

                <div
                    class="mt-10
                   rounded-[22px]
                   border border-primary-100
                   bg-white/70
                   p-5
                   shadow-[0_10px_35px_rgba(15,23,42,0.04)]
                   backdrop-blur-sm
                   sm:p-6">

                    <div class="grid gap-5
                       sm:grid-cols-2
                       lg:grid-cols-4">


                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-9 w-9
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-primary-50
                               text-primary-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />

                                    <circle cx="12" cy="12" r="9" />
                                </svg>
                            </span>

                            <div>
                                <p class="text-xs font-bold
                                   text-secondary-900">
                                    Slower receiving
                                </p>

                                <p class="mt-1 text-[11px]
                                   text-secondary-500">
                                    Manual entry delays stock updates.
                                </p>
                            </div>

                        </div>



                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-9 w-9
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-primary-50
                               text-primary-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" d="m7 7 10 10M17 7 7 17" />
                                </svg>
                            </span>

                            <div>
                                <p class="text-xs font-bold
                                   text-secondary-900">
                                    More corrections
                                </p>

                                <p class="mt-1 text-[11px]
                                   text-secondary-500">
                                    Re-keying increases error risk.
                                </p>
                            </div>

                        </div>



                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-9 w-9
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-primary-50
                               text-primary-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <rect x="8" y="4" width="9" height="12" rx="2" />

                                    <path stroke-linecap="round" d="M6 8H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h7" />
                                </svg>
                            </span>

                            <div>
                                <p class="text-xs font-bold
                                   text-secondary-900">
                                    Repeated admin work
                                </p>

                                <p class="mt-1 text-[11px]
                                   text-secondary-500">
                                    The same data gets entered twice.
                                </p>
                            </div>

                        </div>



                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-9 w-9
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-primary-50
                               text-primary-600">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4 17 5-5 4 4 7-9" />
                                </svg>
                            </span>

                            <div>
                                <p class="text-xs font-bold
                                   text-secondary-900">
                                    Less real-time visibility
                                </p>

                                <p class="mt-1 text-[11px]
                                   text-secondary-500">
                                    Inventory data falls behind reality.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — HOW IT WORKS --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-workflow"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-background-muted
           via-background
           to-white
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Left soft shape --}}
                <div
                    class="absolute -left-[220px] -top-[150px]
                   h-[520px] w-[520px]
                   rounded-full
                   bg-primary-100/30">
                </div>

                {{-- Right soft shape --}}
                <div
                    class="absolute -right-[240px] top-[80px]
                   h-[520px] w-[520px]
                   rounded-full
                   bg-primary-100/25">
                </div>

                {{-- Top right dotted pattern --}}
                <div class="absolute right-16 top-10
                   hidden h-36 w-36
                   opacity-25
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

                {{-- Bottom left dotted pattern --}}
                <div class="absolute bottom-8 left-12
                   hidden h-28 w-28
                   opacity-20
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADING --}}
                {{-- ================================================================== --}}

                <div class="mx-auto max-w-4xl text-center">

                    {{-- Eyebrow --}}
                    <div class="flex items-center justify-center gap-3">

                        <span class="h-px w-12
                           bg-primary-500"></span>

                        <p
                            class="text-xs font-bold uppercase
                           tracking-[0.18em]
                           text-primary-600">
                            How It Works
                        </p>

                        <span class="h-px w-12
                           bg-primary-500"></span>

                    </div>



                    {{-- Heading --}}
                    <h2
                        class="mt-5
                       text-3xl font-bold
                       leading-[1.1]
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        From supplier document to live inventory

                        <span class="text-primary-600">
                            in four steps.
                        </span>
                    </h2>



                    {{-- Description --}}
                    <p
                        class="mx-auto mt-5 max-w-2xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        A simple review-first workflow designed to reduce repetitive
                        entry while keeping your team in control before anything is
                        confirmed into stock.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- WORKFLOW CARDS --}}
                {{-- ================================================================== --}}

                <div
                    class="relative mt-14
                   grid gap-6
                   md:grid-cols-2
                   xl:grid-cols-4">


                    {{-- ============================================================ --}}
                    {{-- DESKTOP CONNECTOR LINE --}}
                    {{-- ============================================================ --}}

                    <div
                        class="pointer-events-none
                       absolute left-[10%] right-[10%]
                       top-[138px]
                       hidden
                       border-t-2
                       border-dashed
                       border-primary-200
                       xl:block">
                    </div>



                    {{-- ============================================================ --}}
                    {{-- STEP 01 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group relative z-10
                       flex min-h-[390px]
                       flex-col
                       rounded-[24px]
                       border border-primary-100
                       bg-white
                       p-6
                       shadow-[0_14px_45px_rgba(15,23,42,0.05)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:shadow-[0_22px_55px_rgba(15,23,42,0.08)]
                       hover:cursor-pointer">

                        {{-- Step header --}}
                        <div class="flex items-start justify-between gap-4">

                            <span
                                class="text-5xl font-extrabold
                               tracking-[-0.04em]
                               text-primary-600">
                                01
                            </span>


                            <span
                                class="flex h-12 w-12
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />

                                    <path stroke-linecap="round" d="M14 3v5h5M12 17V10m0 0-3 3m3-3 3 3" />
                                </svg>

                            </span>

                        </div>



                        {{-- Heading --}}
                        <h3
                            class="mt-6
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Upload or Scan
                        </h3>



                        {{-- Description --}}
                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Upload supplier invoices, packing slips or other inventory
                            documents from your device, or capture a document using a
                            supported scanning workflow.
                        </p>



                        {{-- Bottom Status --}}
                        <div class="mt-auto pt-7">

                            <div
                                class="flex items-center gap-3
                               rounded-xl
                               bg-primary-50
                               px-4 py-3">

                                <span
                                    class="flex h-8 w-8
                                   shrink-0
                                   items-center justify-center
                                   rounded-lg
                                   bg-white
                                   text-primary-600
                                   shadow-sm">

                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />
                                    </svg>

                                </span>


                                <div>

                                    <p class="text-xs font-bold
                                       text-secondary-800">
                                        Documents ready
                                    </p>

                                    <p
                                        class="mt-0.5 text-[10px]
                                       text-secondary-500">
                                        Upload or capture
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- Connector Dot --}}
                        <div
                            class="absolute
                           right-[-15px] top-[124px]
                           hidden
                           h-8 w-8
                           items-center justify-center
                           rounded-full
                           border-4 border-background
                           bg-primary-100
                           shadow-sm
                           xl:flex">
                            <span
                                class="h-3 w-3
                               rounded-full
                               bg-primary-600"></span>
                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- STEP 02 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group relative z-10
                       flex min-h-[390px]
                       flex-col
                       rounded-[24px]
                       border border-primary-100
                       bg-white
                       p-6
                       shadow-[0_14px_45px_rgba(15,23,42,0.05)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:shadow-[0_22px_55px_rgba(15,23,42,0.08)]
                       hover:cursor-pointer">

                        <div class="flex items-start justify-between gap-4">

                            <span
                                class="text-5xl font-extrabold
                               tracking-[-0.04em]
                               text-primary-600">
                                02
                            </span>


                            <span
                                class="flex h-12 w-12
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3a4 4 0 0 1 4 4v1h1a4 4 0 0 1 4 4 4 4 0 0 1-4 4h-1v1a4 4 0 0 1-8 0v-1H7a4 4 0 0 1-4-4 4 4 0 0 1 4-4h1V7a4 4 0 0 1 4-4Z" />

                                    <circle cx="12" cy="12" r="2" />
                                </svg>

                            </span>

                        </div>



                        <h3
                            class="mt-6
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Auto-Extract Data
                        </h3>



                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            StockCore identifies relevant information such as supplier
                            details, SKUs, line items, quantities and costs and turns
                            the document into structured inventory data.
                        </p>



                        <div class="mt-auto pt-7">

                            <div
                                class="flex items-center gap-3
                               rounded-xl
                               bg-primary-50
                               px-4 py-3">

                                <span
                                    class="flex h-8 w-8
                                   shrink-0
                                   items-center justify-center
                                   rounded-lg
                                   bg-white
                                   text-primary-600
                                   shadow-sm">

                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h10" />
                                    </svg>

                                </span>


                                <div>

                                    <p class="text-xs font-bold
                                       text-secondary-800">
                                        Structured data
                                    </p>

                                    <p
                                        class="mt-0.5 text-[10px]
                                       text-secondary-500">
                                        Ready for review
                                    </p>

                                </div>

                            </div>

                        </div>



                        <div
                            class="absolute
                           right-[-15px] top-[124px]
                           hidden
                           h-8 w-8
                           items-center justify-center
                           rounded-full
                           border-4 border-background
                           bg-primary-100
                           shadow-sm
                           xl:flex">
                            <span
                                class="h-3 w-3
                               rounded-full
                               bg-primary-600"></span>
                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- STEP 03 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group relative z-10
                       flex min-h-[390px]
                       flex-col
                       rounded-[24px]
                       border border-primary-100
                       bg-white
                       p-6
                       shadow-[0_14px_45px_rgba(15,23,42,0.05)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:shadow-[0_22px_55px_rgba(15,23,42,0.08)]
                       hover:cursor-pointer">

                        <div class="flex items-start justify-between gap-4">

                            <span
                                class="text-5xl font-extrabold
                               tracking-[-0.04em]
                               text-primary-600">
                                03
                            </span>


                            <span
                                class="flex h-12 w-12
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.8">
                                    <circle cx="11" cy="11" r="6" />

                                    <path stroke-linecap="round" d="m16 16 4 4" />
                                </svg>

                            </span>

                        </div>



                        <h3
                            class="mt-6
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Review & Correct
                        </h3>



                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Compare the extracted information with the original
                            document, edit anything that needs attention and approve
                            the final data before inventory is changed.
                        </p>



                        <div class="mt-auto pt-7">

                            <div
                                class="flex items-center gap-3
                               rounded-xl
                               bg-primary-50
                               px-4 py-3">

                                <span
                                    class="flex h-8 w-8
                                   shrink-0
                                   items-center justify-center
                                   rounded-lg
                                   bg-white
                                   text-primary-600
                                   shadow-sm">

                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" d="M9 7h10M9 12h10M9 17h10" />

                                        <circle cx="5" cy="7" r="1" />
                                        <circle cx="5" cy="12" r="1" />
                                        <circle cx="5" cy="17" r="1" />
                                    </svg>

                                </span>


                                <div>

                                    <p class="text-xs font-bold
                                       text-secondary-800">
                                        Human review
                                    </p>

                                    <p
                                        class="mt-0.5 text-[10px]
                                       text-secondary-500">
                                        Edit before confirming
                                    </p>

                                </div>

                            </div>

                        </div>



                        <div
                            class="absolute
                           right-[-15px] top-[124px]
                           hidden
                           h-8 w-8
                           items-center justify-center
                           rounded-full
                           border-4 border-background
                           bg-primary-100
                           shadow-sm
                           xl:flex">
                            <span
                                class="h-3 w-3
                               rounded-full
                               bg-primary-600"></span>
                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- STEP 04 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group relative z-10
                       flex min-h-[390px]
                       flex-col
                       rounded-[24px]
                       border border-primary-100
                       bg-white
                       p-6
                       shadow-[0_14px_45px_rgba(15,23,42,0.05)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-emerald-200
                       hover:shadow-[0_22px_55px_rgba(15,23,42,0.08)]
                       hover:cursor-pointer">

                        <div class="flex items-start justify-between gap-4">

                            <span
                                class="text-5xl font-extrabold
                               tracking-[-0.04em]
                               text-primary-600">
                                04
                            </span>


                            <span
                                class="flex h-12 w-12
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m12 3 8 4-8 4-8-4 8-4Zm-8 4v10l8 4 8-4V7" />
                                </svg>

                            </span>

                        </div>



                        <h3
                            class="mt-6
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Confirm into Stock
                        </h3>



                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Once everything looks right, confirm the document and use
                            the reviewed information to create or update the relevant
                            inventory records.
                        </p>



                        <div class="mt-auto pt-7">

                            <div
                                class="flex items-center gap-3
                               rounded-xl
                               border border-emerald-100
                               bg-emerald-50
                               px-4 py-3">

                                <span
                                    class="flex h-8 w-8
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-emerald-500
                                   text-white">

                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                    </svg>

                                </span>


                                <div>

                                    <p class="text-xs font-bold
                                       text-emerald-700">
                                        Add to inventory
                                    </p>

                                    <p class="mt-0.5 text-[10px]
                                       text-emerald-600">
                                        Reviewed and ready
                                    </p>

                                </div>

                            </div>

                        </div>

                    </article>

                </div>

            </div>

        </section>

        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — INTERACTIVE WORKFLOW PIPELINE --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-pipeline"
            class="relative overflow-hidden
           bg-white
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATION --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                <div
                    class="absolute left-1/2 top-[-240px]
                   h-[520px] w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-primary-50/60
                   blur-[90px]">
                </div>

                <div class="absolute right-12 top-12
                   hidden h-28 w-28
                   opacity-20
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-6xl">


                {{-- ================================================================== --}}
                {{-- HEADER --}}
                {{-- ================================================================== --}}

                <div class="mx-auto max-w-3xl text-center">

                    <span
                        class="inline-flex
                       rounded-full
                       border border-primary-100
                       bg-primary-50
                       px-3 py-1.5
                       text-[10px] font-bold uppercase
                       tracking-[0.12em]
                       text-primary-600">
                        Workflow Pipeline
                    </span>


                    <h2
                        class="mt-4
                       text-3xl font-bold
                       leading-[1.08]
                       tracking-[-0.04em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        From Paper Slip to Stock On Hand

                        <span class="block">
                            in 4 Steps
                        </span>
                    </h2>


                    <p
                        class="mx-auto mt-5 max-w-2xl
                       text-sm leading-6
                       text-secondary-600
                       sm:text-base">
                        A streamlined receiving workflow that moves supplier documents
                        from intake to reviewed inventory data. Select a step below to
                        explore the process.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- STEP NAVIGATION --}}
                {{-- ================================================================== --}}

                <div
                    class="mt-12
                   grid gap-3
                   md:grid-cols-2
                   xl:grid-cols-4">


                    {{-- STEP 1 --}}
                    <button type="button" data-pipeline-step="1"
                        class="pipeline-step
                       pipeline-step-active
                       group
                       rounded-xl
                       border border-primary-600
                       bg-primary-50/70
                       p-5
                       text-left
                       transition duration-300
                       hover:-translate-y-0.5
                       hover:cursor-pointer">

                        <div class="flex items-center justify-between">

                            <span
                                class="pipeline-number
                               flex h-7 w-7
                               items-center justify-center
                               rounded-full
                               bg-primary-600
                               text-xs font-bold
                               text-white">
                                1
                            </span>


                            <svg class="h-4 w-4 text-primary-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />

                                <path stroke-linecap="round" d="M14 3v5h5" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-bold
                           text-secondary-900">
                            1. Upload or Scan
                        </h3>


                        <p
                            class="mt-2
                           text-[11px] leading-5
                           text-secondary-500">
                            Upload supplier documents from desktop, mobile or another
                            supported intake source.
                        </p>

                    </button>



                    {{-- STEP 2 --}}
                    <button type="button" data-pipeline-step="2"
                        class="pipeline-step
                       group
                       rounded-xl
                       border border-secondary-200
                       bg-white
                       p-5
                       text-left
                       transition duration-300
                       hover:-translate-y-0.5
                       hover:border-primary-300
                       hover:cursor-pointer">

                        <div class="flex items-center justify-between">

                            <span
                                class="pipeline-number
                               flex h-7 w-7
                               items-center justify-center
                               rounded-full
                               bg-secondary-100
                               text-xs font-bold
                               text-secondary-500">
                                2
                            </span>


                            <svg class="h-4 w-4 text-secondary-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <rect x="5" y="5" width="14" height="14" rx="2" />

                                <path stroke-linecap="round" d="M9 9h6M9 12h6M9 15h4" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-bold
                           text-secondary-900">
                            2. Intelligent Extraction
                        </h3>


                        <p
                            class="mt-2
                           text-[11px] leading-5
                           text-secondary-500">
                            Convert supplier and line-item information into structured
                            inventory fields ready for review.
                        </p>

                    </button>



                    {{-- STEP 3 --}}
                    <button type="button" data-pipeline-step="3"
                        class="pipeline-step
                       group
                       rounded-xl
                       border border-secondary-200
                       bg-white
                       p-5
                       text-left
                       transition duration-300
                       hover:-translate-y-0.5
                       hover:border-primary-300
                       hover:cursor-pointer">

                        <div class="flex items-center justify-between">

                            <span
                                class="pipeline-number
                               flex h-7 w-7
                               items-center justify-center
                               rounded-full
                               bg-secondary-100
                               text-xs font-bold
                               text-secondary-500">
                                3
                            </span>


                            <svg class="h-4 w-4 text-secondary-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5h14v14H5z" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m8 12 2 2 5-5" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-bold
                           text-secondary-900">
                            3. Line Review
                        </h3>


                        <p
                            class="mt-2
                           text-[11px] leading-5
                           text-secondary-500">
                            Review extracted values side-by-side and resolve anything
                            that needs attention.
                        </p>

                    </button>



                    {{-- STEP 4 --}}
                    <button type="button" data-pipeline-step="4"
                        class="pipeline-step
                       group
                       rounded-xl
                       border border-secondary-200
                       bg-white
                       p-5
                       text-left
                       transition duration-300
                       hover:-translate-y-0.5
                       hover:border-primary-300
                       hover:cursor-pointer">

                        <div class="flex items-center justify-between">

                            <span
                                class="pipeline-number
                               flex h-7 w-7
                               items-center justify-center
                               rounded-full
                               bg-secondary-100
                               text-xs font-bold
                               text-secondary-500">
                                4
                            </span>


                            <svg class="h-4 w-4 text-secondary-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20 11a8.1 8.1 0 0 0-15.5-2M4 4v5h5" />

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 13a8.1 8.1 0 0 0 15.5 2M20 20v-5h-5" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-bold
                           text-secondary-900">
                            4. One-Click Sync
                        </h3>


                        <p
                            class="mt-2
                           text-[11px] leading-5
                           text-secondary-500">
                            Confirm reviewed information and move it into the relevant
                            inventory workflow.
                        </p>

                    </button>

                </div>



                {{-- ================================================================== --}}
                {{-- INTERACTIVE CONTENT PANELS --}}
                {{-- ================================================================== --}}

                <div class="mt-6">


                    {{-- ============================================================ --}}
                    {{-- PANEL 1 --}}
                    {{-- ============================================================ --}}

                    <div data-pipeline-panel="1" class="pipeline-panel">

                        <div
                            class="grid gap-8
                           rounded-[20px]
                           bg-secondary-900
                           p-6
                           text-white
                           shadow-[0_18px_45px_rgba(15,23,42,0.20)]
                           lg:grid-cols-[1fr_0.9fr]
                           lg:items-center
                           lg:p-8">


                            {{-- Left --}}
                            <div>

                                <span
                                    class="inline-flex
                                   rounded-md
                                   bg-primary-900
                                   px-3 py-1.5
                                   text-[9px] font-bold uppercase
                                   tracking-[0.08em]
                                   text-primary-200">
                                    Step 1 of 4 • Ingestion
                                </span>


                                <h3
                                    class="mt-4
                                   text-2xl font-bold
                                   tracking-tight
                                   text-white">
                                    Multi-Channel Instant Document Ingestion
                                </h3>


                                <p
                                    class="mt-4
                                   max-w-xl
                                   text-sm leading-6
                                   text-secondary-300">
                                    Bring supplier documents into StockCore without
                                    retyping them manually. Upload files from the
                                    warehouse, desktop or another supported intake
                                    source and prepare them for extraction.
                                </p>


                                <div
                                    class="mt-6
                                   flex flex-wrap
                                   gap-x-5 gap-y-3">

                                    @foreach (['Batch document uploads', 'Mobile capture workflow', 'Centralised intake'] as $item)
                                        <div class="flex items-center gap-2">

                                            <svg class="h-3.5 w-3.5
                                               text-emerald-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2.4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                            </svg>

                                            <span
                                                class="text-[11px]
                                               text-secondary-300">
                                                {{ $item }}
                                            </span>

                                        </div>
                                    @endforeach

                                </div>

                            </div>



                            {{-- Right visual --}}
                            <div
                                class="rounded-xl
                               border border-white/10
                               bg-secondary-800
                               p-6">

                                <div
                                    class="mx-auto
                                   max-w-sm
                                   rounded-xl
                                   border border-secondary-700
                                   bg-secondary-900
                                   p-4">

                                    <div
                                        class="flex items-center
                                       justify-between
                                       gap-4">

                                        <div class="flex items-center gap-3">

                                            <span
                                                class="flex h-9 w-9
                                               items-center justify-center
                                               rounded-lg
                                               bg-primary-900
                                               text-primary-300">
                                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" stroke-width="1.8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M7 3h7l4 4v14H7z" />

                                                    <path stroke-linecap="round" d="M14 3v5h5" />
                                                </svg>
                                            </span>


                                            <div>

                                                <p
                                                    class="text-xs font-bold
                                                   text-white">
                                                    Invoice_Apex_3802.pdf
                                                </p>

                                                <p
                                                    class="mt-1
                                                   text-[10px]
                                                   text-secondary-400">
                                                    2.4 MB • Supplier document
                                                </p>

                                            </div>

                                        </div>


                                        <span
                                            class="rounded-full
                                           bg-emerald-500/15
                                           px-2.5 py-1
                                           text-[9px] font-bold
                                           text-emerald-400">
                                            Uploaded
                                        </span>

                                    </div>

                                </div>


                                <div
                                    class="mt-5
                                   flex items-center
                                   justify-center
                                   gap-2
                                   text-[10px]
                                   text-secondary-500">

                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M3 12h18" />
                                    </svg>

                                    Queued for document extraction

                                </div>

                            </div>

                        </div>

                    </div>



                    {{-- ============================================================ --}}
                    {{-- PANEL 2 --}}
                    {{-- ============================================================ --}}

                    <div data-pipeline-panel="2" class="pipeline-panel hidden">

                        <div
                            class="grid gap-8
                           rounded-[20px]
                           bg-secondary-900
                           p-6
                           text-white
                           shadow-[0_18px_45px_rgba(15,23,42,0.20)]
                           lg:grid-cols-[1fr_0.9fr]
                           lg:items-center
                           lg:p-8">

                            {{-- Left --}}
                            <div>

                                <span
                                    class="inline-flex
                                   rounded-md
                                   bg-primary-900
                                   px-3 py-1.5
                                   text-[9px] font-bold uppercase
                                   tracking-[0.08em]
                                   text-primary-200">
                                    Step 2 of 4 • Extraction
                                </span>


                                <h3
                                    class="mt-4
                                   text-2xl font-bold
                                   tracking-tight
                                   text-white">
                                    High-Precision Line Item Extraction
                                </h3>


                                <p
                                    class="mt-4
                                   max-w-xl
                                   text-sm leading-6
                                   text-secondary-300">
                                    Convert supplier documents into structured fields
                                    such as SKUs, descriptions, quantities, pricing and
                                    purchase-order references so the receiving team can
                                    review them in one place.
                                </p>


                                <div
                                    class="mt-6
                                   flex flex-wrap
                                   gap-x-5 gap-y-3">

                                    @foreach (['Structured line-item capture', 'SKU matching workflow', 'Supplier reference extraction'] as $item)
                                        <div class="flex items-center gap-2">

                                            <svg class="h-3.5 w-3.5
                                               text-emerald-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2.4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                            </svg>

                                            <span
                                                class="text-[11px]
                                               text-secondary-300">
                                                {{ $item }}
                                            </span>

                                        </div>
                                    @endforeach

                                </div>

                            </div>



                            {{-- Right visual --}}
                            <div
                                class="space-y-3
                               rounded-xl
                               border border-white/10
                               bg-secondary-800
                               p-5">


                                <div
                                    class="rounded-lg
                                   border border-primary-600/60
                                   bg-secondary-900
                                   px-4 py-3">

                                    <div
                                        class="flex
                                       items-center
                                       justify-between
                                       gap-4">

                                        <span
                                            class="text-[10px]
                                           text-secondary-400">
                                            SKU
                                        </span>

                                        <span
                                            class="text-[10px]
                                           font-semibold
                                           text-emerald-400">
                                            Matched
                                        </span>

                                    </div>

                                    <p
                                        class="mt-2
                                       text-xs font-bold
                                       text-white">
                                        SKU-9021-PALLET
                                    </p>

                                </div>



                                <div
                                    class="rounded-lg
                                   border border-primary-600/60
                                   bg-secondary-900
                                   px-4 py-3">

                                    <div
                                        class="flex
                                       items-center
                                       justify-between
                                       gap-4">

                                        <span
                                            class="text-[10px]
                                           text-secondary-400">
                                            Quantity
                                        </span>

                                        <span
                                            class="text-[10px]
                                           font-semibold
                                           text-emerald-400">
                                            Captured
                                        </span>

                                    </div>

                                    <p
                                        class="mt-2
                                       text-xs font-bold
                                       text-white">
                                        120 units
                                    </p>

                                </div>



                                <div
                                    class="rounded-lg
                                   border border-primary-600/60
                                   bg-secondary-900
                                   px-4 py-3">

                                    <div
                                        class="flex
                                       items-center
                                       justify-between
                                       gap-4">

                                        <span
                                            class="text-[10px]
                                           text-secondary-400">
                                            PO Reference
                                        </span>

                                        <span
                                            class="text-[10px]
                                           font-semibold
                                           text-emerald-400">
                                            Matched
                                        </span>

                                    </div>

                                    <p
                                        class="mt-2
                                       text-xs font-bold
                                       text-white">
                                        PO #1084
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>



                    {{-- ============================================================ --}}
                    {{-- PANEL 3 --}}
                    {{-- ============================================================ --}}

                    <div data-pipeline-panel="3" class="pipeline-panel hidden">

                        <div
                            class="grid gap-8
                           rounded-[20px]
                           bg-secondary-900
                           p-6
                           text-white
                           shadow-[0_18px_45px_rgba(15,23,42,0.20)]
                           lg:grid-cols-[1fr_0.9fr]
                           lg:items-center
                           lg:p-8">

                            {{-- Left --}}
                            <div>

                                <span
                                    class="inline-flex
                                   rounded-md
                                   bg-primary-900
                                   px-3 py-1.5
                                   text-[9px] font-bold uppercase
                                   tracking-[0.08em]
                                   text-primary-200">
                                    Step 3 of 4 • Visual Review
                                </span>


                                <h3
                                    class="mt-4
                                   text-2xl font-bold
                                   tracking-tight
                                   text-white">
                                    Smart Discrepancy & Variance Review
                                </h3>


                                <p
                                    class="mt-4
                                   max-w-xl
                                   text-sm leading-6
                                   text-secondary-300">
                                    Compare extracted information with the original
                                    document and highlight mismatches before anything
                                    is committed into stock.
                                </p>


                                <div
                                    class="mt-6
                                   flex flex-wrap
                                   gap-x-5 gap-y-3">

                                    @foreach (['Quantity checks', 'Cost variance review', 'Duplicate detection'] as $item)
                                        <div class="flex items-center gap-2">

                                            <svg class="h-3.5 w-3.5
                                               text-emerald-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2.4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                            </svg>

                                            <span
                                                class="text-[11px]
                                               text-secondary-300">
                                                {{ $item }}
                                            </span>

                                        </div>
                                    @endforeach

                                </div>

                            </div>



                            {{-- Right visual --}}
                            <div
                                class="rounded-xl
                               border border-white/10
                               bg-secondary-800
                               p-5">

                                <div
                                    class="rounded-xl
                                   border border-amber-500/60
                                   bg-amber-950/40
                                   p-5">

                                    <div class="flex items-center gap-2">

                                        <svg class="h-4 w-4
                                           text-amber-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 3 2.5 20h19L12 3Z" />
                                        </svg>

                                        <p
                                            class="text-xs font-bold
                                           text-amber-300">
                                            Variance Flagged
                                        </p>

                                    </div>


                                    <p
                                        class="mt-3
                                       text-xs leading-5
                                       text-secondary-200">
                                        Line item quantity does not match the referenced
                                        purchase-order quantity.
                                    </p>


                                    <div class="mt-4
                                       flex flex-wrap gap-2">

                                        <button type="button"
                                            class="rounded-md
                                           bg-amber-500
                                           px-3 py-1.5
                                           text-[10px] font-bold
                                           text-secondary-950">
                                            Accept Exception
                                        </button>


                                        <button type="button"
                                            class="rounded-md
                                           border border-white/10
                                           px-3 py-1.5
                                           text-[10px] font-bold
                                           text-secondary-300">
                                            Reject Line
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    {{-- ============================================================ --}}
                    {{-- PANEL 4 --}}
                    {{-- ============================================================ --}}

                    <div data-pipeline-panel="4" class="pipeline-panel hidden">

                        <div
                            class="grid gap-8
                           rounded-[20px]
                           bg-secondary-900
                           p-6
                           text-white
                           shadow-[0_18px_45px_rgba(15,23,42,0.20)]
                           lg:grid-cols-[1fr_0.9fr]
                           lg:items-center
                           lg:p-8">

                            {{-- Left --}}
                            <div>

                                <span
                                    class="inline-flex
                                   rounded-md
                                   bg-primary-900
                                   px-3 py-1.5
                                   text-[9px] font-bold uppercase
                                   tracking-[0.08em]
                                   text-primary-200">
                                    Step 4 of 4 • Inventory Sync
                                </span>


                                <h3
                                    class="mt-4
                                   text-2xl font-bold
                                   tracking-tight
                                   text-white">
                                    One-Click Stock Receiving & Sync
                                </h3>


                                <p
                                    class="mt-4
                                   max-w-xl
                                   text-sm leading-6
                                   text-secondary-300">
                                    Once the receiving data is reviewed, confirm it and
                                    push the final information into the relevant stock
                                    records and connected downstream workflows.
                                </p>


                                <div
                                    class="mt-6
                                   flex flex-wrap
                                   gap-x-5 gap-y-3">

                                    @foreach (['Inventory record update', 'Receiving history', 'Audit trail'] as $item)
                                        <div class="flex items-center gap-2">

                                            <svg class="h-3.5 w-3.5
                                               text-emerald-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2.4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                            </svg>

                                            <span
                                                class="text-[11px]
                                               text-secondary-300">
                                                {{ $item }}
                                            </span>

                                        </div>
                                    @endforeach

                                </div>

                            </div>



                            {{-- Right visual --}}
                            <div
                                class="flex min-h-[180px]
                               items-center justify-center
                               rounded-xl
                               border border-white/10
                               bg-secondary-800
                               p-6
                               text-center">

                                <div>

                                    <span
                                        class="mx-auto
                                       flex h-12 w-12
                                       items-center justify-center
                                       rounded-full
                                       border border-emerald-500
                                       bg-emerald-500/10
                                       text-emerald-400">

                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2.3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                        </svg>

                                    </span>


                                    <p
                                        class="mt-4
                                       text-sm font-bold
                                       text-white">
                                        Stock Receipt Successfully Logged
                                    </p>


                                    <p
                                        class="mt-2
                                       text-[10px]
                                       text-secondary-400">
                                        Reviewed inventory information has been
                                        committed to stock.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>





        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — SUPPORTED INPUTS --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-supported-inputs"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-white
           via-background
           to-background-muted
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Top right soft circle --}}
                <div
                    class="absolute -right-[220px] -top-[180px]
                   h-[520px] w-[520px]
                   rounded-full
                   bg-primary-100/25">
                </div>

                {{-- Bottom left soft glow --}}
                <div
                    class="absolute -left-[140px] bottom-[-160px]
                   h-[360px] w-[360px]
                   rounded-full
                   bg-primary-100/25
                   blur-[80px]">
                </div>

                {{-- Top right dotted pattern --}}
                <div class="absolute right-12 top-10
                   hidden h-32 w-32
                   opacity-25
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

                {{-- Bottom left dotted pattern --}}
                <div class="absolute bottom-8 left-8
                   hidden h-24 w-24
                   opacity-20
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADER --}}
                {{-- ================================================================== --}}

                <div
                    class="grid gap-8
                   lg:grid-cols-[1.15fr_0.85fr]
                   lg:items-end
                   lg:gap-12">

                    <div>

                        <p
                            class="text-xs font-bold uppercase
                           tracking-[0.18em]
                           text-primary-600">
                            Supported Inputs
                        </p>


                        <h2
                            class="mt-4
                           max-w-3xl
                           text-3xl font-bold
                           leading-[1.12]
                           tracking-[-0.035em]
                           text-secondary-900
                           sm:text-4xl
                           lg:text-5xl">
                            Bring in the documents your suppliers already send you.
                        </h2>

                    </div>



                    {{-- Info note --}}
                    <div
                        class="rounded-2xl
                       border border-primary-100
                       bg-primary-50/80
                       px-5 py-4">

                        <div class="flex items-start gap-3">

                            <span
                                class="flex h-8 w-8
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-white
                               text-primary-600
                               shadow-sm">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <circle cx="12" cy="12" r="9" />

                                    <path stroke-linecap="round" d="M12 10v6" />

                                    <circle cx="12" cy="7" r=".8" fill="currentColor" stroke="none" />
                                </svg>
                            </span>


                            <p class="text-sm leading-6
                               text-secondary-600">
                                Example supported inputs — confirm final operational file
                                specifications with the development team before launch.
                            </p>

                        </div>

                    </div>

                </div>



                {{-- ================================================================== --}}
                {{-- INPUT CARDS --}}
                {{-- ================================================================== --}}

                <div
                    class="mt-12
                   grid gap-4
                   md:grid-cols-2
                   xl:grid-cols-3">


                    {{-- ============================================================ --}}
                    {{-- CARD 1 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-xl
                       bg-primary-50/80
                       p-5
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-100/70
                       hover:cursor-pointer">

                        <div
                            class="flex h-9 w-9
                           items-center justify-center
                           rounded-md
                           bg-white
                           text-primary-600
                           shadow-sm">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />

                                <path stroke-linecap="round" d="M14 3v5h5M10 12h5M10 16h5" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-semibold
                           text-secondary-900">
                            PDF Supplier Invoices
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Import digital supplier invoices and related documents
                            directly into the scan/import workflow.
                        </p>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 2 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-xl
                       bg-primary-50/80
                       p-5
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-100/70
                       hover:cursor-pointer">

                        <div
                            class="flex h-9 w-9
                           items-center justify-center
                           rounded-md
                           bg-white
                           text-primary-600
                           shadow-sm">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 8V5a1 1 0 0 1 1-1h3M16 4h3a1 1 0 0 1 1 1v3M20 16v3a1 1 0 0 1-1 1h-3M8 20H5a1 1 0 0 1-1-1v-3" />

                                <rect x="8" y="8" width="8" height="8" rx="1.5" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-semibold
                           text-secondary-900">
                            Scanned Invoice Images
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Bring in invoice scans captured from office scanners or
                            other image-based document sources.
                        </p>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 3 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-xl
                       bg-primary-50/80
                       p-5
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-100/70
                       hover:cursor-pointer">

                        <div
                            class="flex h-9 w-9
                           items-center justify-center
                           rounded-md
                           bg-white
                           text-primary-600
                           shadow-sm">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <rect x="4" y="5" width="16" height="14" rx="2" />

                                <circle cx="9" cy="10" r="1.5" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m6 17 4-4 3 3 2-2 3 3" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-semibold
                           text-secondary-900">
                            JPG / PNG Documents
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Upload document photos and image files from desktop,
                            tablet or other supported devices.
                        </p>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 4 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-xl
                       bg-primary-50/80
                       p-5
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-100/70 
                       hover:cursor-pointer">

                        <div
                            class="flex h-9 w-9
                           items-center justify-center
                           rounded-md
                           bg-white
                           text-primary-600
                           shadow-sm">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7 9.5 4h5L16 7" />

                                <rect x="4" y="7" width="16" height="12" rx="2" />

                                <circle cx="12" cy="13" r="3" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-semibold
                           text-secondary-900">
                            Phone Camera Scans
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Capture supplier paperwork using a phone camera as part of
                            the receiving or document intake process.
                        </p>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 5 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-xl
                       bg-primary-50/80
                       p-5
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-100/70
                       hover:cursor-pointer">

                        <div
                            class="flex h-9 w-9
                           items-center justify-center
                           rounded-md
                           bg-white
                           text-primary-600
                           shadow-sm">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <rect x="3" y="5" width="18" height="14" rx="2" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-semibold
                           text-secondary-900">
                            Direct Email Forwarding
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Route supplier documents into the intake workflow from
                            email when supported by the final implementation.
                        </p>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 6 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-xl
                       bg-primary-50/80
                       p-5
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-100/70
                       hover:cursor-pointer">

                        <div
                            class="flex h-9 w-9
                           items-center justify-center
                           rounded-md
                           bg-white
                           text-primary-600
                           shadow-sm">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 4h14v4H5zM6 8h12v12H6z" />

                                <path stroke-linecap="round" d="M10 12h4" />
                            </svg>

                        </div>


                        <h3
                            class="mt-4
                           text-sm font-semibold
                           text-secondary-900">
                            Packing Slips & Delivery Notes
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Use receiving paperwork to help capture product references,
                            quantities and other shipment details.
                        </p>

                    </article>

                </div>

            </div>

        </section>

        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — INTERACTIVE WORKSPACE --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-workspace"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-background-muted
           via-background
           to-white
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Left soft shape --}}
                <div
                    class="absolute
                   -left-[220px]
                   top-[80px]
                   h-[520px]
                   w-[520px]
                   rounded-full
                   bg-primary-100/25">
                </div>

                {{-- Right soft shape --}}
                <div
                    class="absolute
                   -right-[240px]
                   -top-[160px]
                   h-[540px]
                   w-[540px]
                   rounded-full
                   bg-primary-100/25">
                </div>

                {{-- Left dotted decoration --}}
                <div class="absolute
                   left-10
                   top-[280px]
                   hidden
                   h-28
                   w-28
                   opacity-25
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

                {{-- Right dotted decoration --}}
                <div class="absolute
                   right-12
                   top-16
                   hidden
                   h-32
                   w-32
                   opacity-25
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

                {{-- Center glow behind screenshot --}}
                <div
                    class="absolute
                   bottom-[-80px]
                   left-1/2
                   h-[360px]
                   w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-primary-100/30
                   blur-[110px]">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADER --}}
                {{-- ================================================================== --}}

                <div class="mx-auto max-w-4xl text-center">

                    {{-- Eyebrow --}}
                    <div class="flex items-center
                       justify-center
                       gap-3">

                        <span class="h-px w-12
                           bg-primary-500"></span>

                        <p
                            class="text-xs
                           font-bold
                           uppercase
                           tracking-[0.18em]
                           text-primary-600">
                            Interactive Workspace
                        </p>

                        <span class="h-px w-12
                           bg-primary-500"></span>

                    </div>



                    {{-- Heading --}}
                    <h2
                        class="mt-5
                       text-3xl
                       font-bold
                       leading-[1.1]
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        High-precision extraction workspace

                        <span class="block">
                            built for dock speed.
                        </span>
                    </h2>



                    {{-- Description --}}
                    <p
                        class="mx-auto
                       mt-5
                       max-w-3xl
                       text-base
                       leading-7
                       text-secondary-600
                       sm:text-lg
                       sm:leading-8">
                        Review source documents side-by-side with extracted inventory
                        data, verify line items, make corrections where needed, and
                        confirm the final information before it enters stock.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- WORKSPACE IMAGE --}}
                {{-- ================================================================== --}}

                <div class="mt-14">

                    {{-- Outer screenshot frame --}}
                    <div
                        class="relative
                       mx-auto
                       overflow-hidden
                       rounded-[28px]
                       border
                       border-primary-100
                       bg-white
                       p-2
                       shadow-[0_30px_90px_rgba(15,23,42,0.14)]
                       sm:p-3">

                        {{-- Tiny top glow --}}
                        <div
                            class="pointer-events-none
                           absolute
                           inset-x-0
                           top-0
                           h-28
                           bg-gradient-to-b
                           from-primary-50/70
                           to-transparent">
                        </div>


                        {{-- Image --}}
                        <img src="{{ asset('images/features/extraction-workspace.webp') }}"
                            alt="StockCore scan and import workspace showing a supplier invoice beside extracted inventory line items"
                            loading="lazy"
                            class="relative
                           z-10
                           block
                           h-auto
                           w-full
                           rounded-[22px]
                           object-contain">

                    </div>



                    {{-- ================================================================== --}}
                    {{-- SMALL SUPPORTING POINTS BELOW IMAGE --}}
                    {{-- ================================================================== --}}

                    <div
                        class="mx-auto
                       mt-7
                       grid
                       max-w-5xl
                       gap-4
                       sm:grid-cols-3">


                        {{-- Item 1 --}}
                        <div
                            class="flex
                           items-center
                           justify-center
                           gap-3">

                            <span
                                class="flex
                               h-7
                               w-7
                               shrink-0
                               items-center
                               justify-center
                               rounded-full
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />

                                    <path stroke-linecap="round" d="M14 3v5h5" />
                                </svg>

                            </span>

                            <span
                                class="text-sm
                               font-medium
                               text-secondary-600">
                                Source document always visible
                            </span>

                        </div>



                        {{-- Item 2 --}}
                        <div
                            class="flex
                           items-center
                           justify-center
                           gap-3">

                            <span
                                class="flex
                               h-7
                               w-7
                               shrink-0
                               items-center
                               justify-center
                               rounded-full
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" d="M9 7h10M9 12h10M9 17h10" />

                                    <circle cx="5" cy="7" r="1" />
                                    <circle cx="5" cy="12" r="1" />
                                    <circle cx="5" cy="17" r="1" />
                                </svg>

                            </span>

                            <span
                                class="text-sm
                               font-medium
                               text-secondary-600">
                                Extracted line items side-by-side
                            </span>

                        </div>



                        {{-- Item 3 --}}
                        <div
                            class="flex
                           items-center
                           justify-center
                           gap-3">

                            <span
                                class="flex
                               h-7
                               w-7
                               shrink-0
                               items-center
                               justify-center
                               rounded-full
                               bg-emerald-50
                               text-emerald-600">

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            <span
                                class="text-sm
                               font-medium
                               text-secondary-600">
                                Review before stock changes
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — WHY TEAMS USE IT --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-benefits"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-white
           via-background
           to-background-muted
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Left soft glow --}}
                <div
                    class="absolute
                   -left-[200px]
                   top-[80px]
                   h-[480px]
                   w-[480px]
                   rounded-full
                   bg-primary-100/25
                   blur-[80px]">
                </div>

                {{-- Right soft glow --}}
                <div
                    class="absolute
                   -right-[220px]
                   bottom-[-140px]
                   h-[520px]
                   w-[520px]
                   rounded-full
                   bg-primary-100/25
                   blur-[90px]">
                </div>

                {{-- Subtle dotted pattern --}}
                <div class="absolute
                   right-12
                   top-10
                   hidden
                   h-28
                   w-28
                   opacity-20
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADER --}}
                {{-- ================================================================== --}}

                <div class="mx-auto max-w-4xl text-center">

                    {{-- Eyebrow --}}
                    <p
                        class="text-xs font-bold uppercase
                       tracking-[0.18em]
                       text-secondary-500">
                        Why Teams Use It
                    </p>


                    {{-- Heading --}}
                    <h2
                        class="mt-4
                       text-3xl font-bold
                       leading-[1.08]
                       tracking-[-0.04em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        Less typing. Faster receiving.
                        <span class="block">
                            Cleaner inventory data.
                        </span>
                    </h2>


                    {{-- Description --}}
                    <p
                        class="mx-auto mt-5
                       max-w-3xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        Reduce repetitive receiving admin so warehouse and inventory
                        teams can move goods through the business with more speed,
                        accuracy and control.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- BENEFIT CARDS --}}
                {{-- ================================================================== --}}

                <div class="mt-14
                   grid gap-5
                   lg:grid-cols-2">


                    {{-- ============================================================ --}}
                    {{-- CARD 1 — FASTER DATA ENTRY --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       flex min-h-[285px]
                       flex-col
                       rounded-[18px]
                       bg-primary-50/70
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-50
                       sm:p-8
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-primary-100/70
                           text-primary-600">

                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />

                                <path stroke-linecap="round" d="M14 3v5h5M10 12h5M10 16h5" />
                            </svg>

                        </div>


                        <h3
                            class="mt-5
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Faster Data Entry
                        </h3>


                        <p
                            class="mt-3
                           max-w-xl
                           text-sm leading-6
                           text-secondary-600">
                            Turn supplier invoices and inventory documents into
                            structured stock records without retyping every SKU,
                            quantity and cost line by line.
                        </p>


                        {{-- Bottom proof line --}}
                        <div
                            class="mt-auto
                           flex items-start gap-3
                           pt-6">

                            <span
                                class="flex h-6 w-6
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-emerald-500
                               text-white">

                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>


                            <p
                                class="text-xs font-semibold
                               leading-5
                               text-emerald-700">
                                Reduce admin-heavy receiving work.
                            </p>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 2 — FEWER MANUAL ERRORS --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       flex min-h-[285px]
                       flex-col
                       rounded-[18px]
                       bg-primary-50/70
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-50
                       sm:p-8
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-primary-100/70
                           text-primary-600">

                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 18 9 6m0 12 4-12m0 12 6-12" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 17 2 2 4-5" />
                            </svg>

                        </div>


                        <h3
                            class="mt-5
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Fewer Manual Errors
                        </h3>


                        <p
                            class="mt-3
                           max-w-xl
                           text-sm leading-6
                           text-secondary-600">
                            Reduce mistakes in SKUs, quantities, supplier references
                            and unit costs by reviewing extracted information before
                            it becomes part of your inventory records.
                        </p>


                        <div
                            class="mt-auto
                           flex items-start gap-3
                           pt-6">

                            <span
                                class="flex h-6 w-6
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-emerald-500
                               text-white">

                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>


                            <p
                                class="text-xs font-semibold
                               leading-5
                               text-emerald-700">
                                Cleaner stock data with fewer corrections.
                            </p>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 3 — FASTER RECEIVING --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       flex min-h-[285px]
                       flex-col
                       rounded-[18px]
                       bg-primary-50/70
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-50
                       sm:p-8
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-primary-100/70
                           text-primary-600">

                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 7h11v10H3zM14 10h4l3 3v4h-7z" />

                                <circle cx="7" cy="18" r="2" />

                                <circle cx="17" cy="18" r="2" />
                            </svg>

                        </div>


                        <h3
                            class="mt-5
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Faster Receiving
                        </h3>


                        <p
                            class="mt-3
                           max-w-xl
                           text-sm leading-6
                           text-secondary-600">
                            Move from delivery paperwork to updated inventory sooner,
                            helping receiving teams make newly arrived stock visible
                            without waiting on lengthy re-entry.
                        </p>


                        <div
                            class="mt-auto
                           flex items-start gap-3
                           pt-6">

                            <span
                                class="flex h-6 w-6
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-emerald-500
                               text-white">

                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>


                            <p
                                class="text-xs font-semibold
                               leading-5
                               text-emerald-700">
                                Move received stock into the system sooner.
                            </p>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 4 — REVIEW BEFORE COMMIT --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       flex min-h-[285px]
                       flex-col
                       rounded-[18px]
                       bg-primary-50/70
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:bg-primary-50
                       sm:p-8
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-primary-100/70
                           text-primary-600">

                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 4.5 6v5.25c0 4.55 3.08 8.78 7.5 9.75
                                                       4.42-.97 7.5-5.2 7.5-9.75V6L12 3Z" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-5" />
                            </svg>

                        </div>


                        <h3
                            class="mt-5
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Review Before Commit
                        </h3>


                        <p
                            class="mt-3
                           max-w-xl
                           text-sm leading-6
                           text-secondary-600">
                            Keep human control by reviewing extracted document data
                            and making any necessary corrections before information
                            is written into stock.
                        </p>


                        <div
                            class="mt-auto
                           flex items-start gap-3
                           pt-6">

                            <span
                                class="flex h-6 w-6
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-emerald-500
                               text-white">

                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>


                            <p
                                class="text-xs font-semibold
                               leading-5
                               text-emerald-700">
                                Nothing is committed until it is reviewed.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </section>
        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — BEFORE / AFTER WORKFLOW COMPARISON --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-workflow-comparison"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-background
           via-background
           to-white
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Left soft glow --}}
                <div
                    class="absolute
                   -left-[180px]
                   top-[60px]
                   h-[420px]
                   w-[420px]
                   rounded-full
                   bg-primary-100/25
                   blur-[90px]">
                </div>

                {{-- Right soft glow --}}
                <div
                    class="absolute
                   -right-[180px]
                   bottom-[-120px]
                   h-[460px]
                   w-[460px]
                   rounded-full
                   bg-primary-100/25
                   blur-[90px]">
                </div>

                {{-- Top dotted detail --}}
                <div class="absolute
                   right-14
                   top-12
                   hidden
                   h-28
                   w-28
                   opacity-20
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADING --}}
                {{-- ================================================================== --}}

                <div class="mx-auto max-w-4xl text-center">

                    <p
                        class="text-xs font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Workflow Comparison
                    </p>


                    <h2
                        class="mt-4
                       text-3xl font-bold
                       leading-[1.1]
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        What used to take 15 minutes can

                        <span class="block">
                            become a quick review.
                        </span>
                    </h2>


                    <p
                        class="mx-auto mt-4
                       max-w-2xl
                       text-sm leading-6
                       text-secondary-500
                       sm:text-base">
                        Illustrative workflow example — actual processing time depends
                        on document complexity, number of line items and receiving workflow.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- COMPARISON GRID --}}
                {{-- ================================================================== --}}

                <div class="mt-14
                   grid gap-6
                   lg:grid-cols-2">


                    {{-- ============================================================ --}}
                    {{-- LEFT — TRADITIONAL MANUAL RECEIVING --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-[20px]
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.05)]
                       sm:p-8">

                        {{-- Header --}}
                        <div
                            class="flex flex-col gap-4
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <h3 class="text-base font-bold
                               text-secondary-900">
                                Traditional Manual Receiving
                            </h3>


                            <span
                                class="inline-flex self-start
                               rounded-full
                               bg-red-100
                               px-3 py-1.5
                               text-[10px] font-bold
                               text-red-600">
                                15–20 minutes per invoice
                            </span>

                        </div>



                        {{-- Steps --}}
                        <div class="mt-7 space-y-5">


                            {{-- Step 1 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-secondary-100
                                   text-xs font-bold
                                   text-secondary-500">
                                    1
                                </span>

                                <p class="text-sm leading-6
                                   text-secondary-600">
                                    Unpack supplier documents from cartons, emails or
                                    incoming PDF attachments.
                                </p>

                            </div>



                            {{-- Step 2 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-secondary-100
                                   text-xs font-bold
                                   text-secondary-500">
                                    2
                                </span>

                                <p class="text-sm leading-6
                                   text-secondary-600">
                                    Search for each SKU or product inside the inventory
                                    system and confirm the correct matching item.
                                </p>

                            </div>



                            {{-- Step 3 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-secondary-100
                                   text-xs font-bold
                                   text-secondary-500">
                                    3
                                </span>

                                <p class="text-sm leading-6
                                   text-secondary-600">
                                    Re-enter quantities, supplier references, unit
                                    costs and product details line by line.
                                </p>

                            </div>



                            {{-- Step 4 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-secondary-100
                                   text-xs font-bold
                                   text-secondary-500">
                                    4
                                </span>

                                <p class="text-sm leading-6
                                   text-secondary-600">
                                    Manually verify quantities and individual unit
                                    prices against the supplier paperwork.
                                </p>

                            </div>



                            {{-- Step 5 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-secondary-100
                                   text-xs font-bold
                                   text-secondary-500">
                                    5
                                </span>

                                <p class="text-sm leading-6
                                   text-secondary-600">
                                    Recalculate totals and check that the invoice
                                    matches the values entered into the system.
                                </p>

                            </div>



                            {{-- Step 6 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-secondary-100
                                   text-xs font-bold
                                   text-secondary-500">
                                    6
                                </span>

                                <p class="text-sm leading-6
                                   text-secondary-600">
                                    Save the received stock and repeat any required
                                    information in other operational records.
                                </p>

                            </div>

                        </div>



                        {{-- Bottom warning --}}
                        <div
                            class="mt-7
                           flex items-start gap-3
                           rounded-xl
                           bg-red-50
                           px-4 py-3">

                            <span
                                class="flex h-7 w-7
                               shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-red-100
                               text-red-600">

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 2.5 20h19L12 3Z" />

                                    <path stroke-linecap="round" d="M12 9v4" />

                                    <circle cx="12" cy="16" r=".7" fill="currentColor" stroke="none" />
                                </svg>

                            </span>


                            <p class="text-xs leading-5
                               text-red-700">
                                More repetitive typing creates more opportunities for
                                transcription mistakes and slower stock visibility.
                            </p>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- RIGHT — STOCKCORE SCAN & IMPORT --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-[20px]
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.06)]
                       sm:p-8">

                        {{-- Header --}}
                        <div
                            class="flex flex-col gap-4
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <h3 class="text-base font-bold
                               text-primary-600">
                                StockCore Scan & Import
                            </h3>


                            <span
                                class="inline-flex self-start
                               rounded-full
                               bg-emerald-100
                               px-3 py-1.5
                               text-[10px] font-bold
                               text-emerald-700">
                                2–3 minutes total
                            </span>

                        </div>



                        {{-- Steps --}}
                        <div class="mt-7 space-y-6">


                            {{-- Step 1 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-xs font-bold
                                   text-white">
                                    1
                                </span>


                                <div>

                                    <h4
                                        class="text-sm font-bold
                                       text-secondary-900">
                                        Upload or Scan
                                    </h4>

                                    <p
                                        class="mt-1
                                       text-sm leading-6
                                       text-secondary-600">
                                        Upload the supplier document or capture it
                                        directly as part of the receiving process.
                                    </p>

                                </div>

                            </div>



                            {{-- Step 2 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-xs font-bold
                                   text-white">
                                    2
                                </span>


                                <div>

                                    <h4
                                        class="text-sm font-bold
                                       text-secondary-900">
                                        Auto-Extract
                                    </h4>

                                    <p
                                        class="mt-1
                                       text-sm leading-6
                                       text-secondary-600">
                                        StockCore converts supplier and line-item
                                        information into structured fields ready for review.
                                    </p>

                                </div>

                            </div>



                            {{-- Step 3 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-xs font-bold
                                   text-white">
                                    3
                                </span>


                                <div>

                                    <h4
                                        class="text-sm font-bold
                                       text-secondary-900">
                                        Fast Review
                                    </h4>

                                    <p
                                        class="mt-1
                                       text-sm leading-6
                                       text-secondary-600">
                                        Review extracted values side-by-side with the
                                        original document and correct anything that needs attention.
                                    </p>

                                </div>

                            </div>



                            {{-- Step 4 --}}
                            <div class="flex gap-4">

                                <span
                                    class="flex h-7 w-7
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-xs font-bold
                                   text-white">
                                    4
                                </span>


                                <div>

                                    <h4
                                        class="text-sm font-bold
                                       text-secondary-900">
                                        Confirm into Stock
                                    </h4>

                                    <p
                                        class="mt-1
                                       text-sm leading-6
                                       text-secondary-600">
                                        Confirm the reviewed information and use it to
                                        create or update the appropriate inventory records.
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- Bottom benefit --}}
                        <div
                            class="mt-7
                           flex items-start gap-3
                           rounded-xl
                           bg-emerald-50
                           px-4 py-3">

                            <span
                                class="flex h-7 w-7
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-emerald-500
                               text-white">

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>


                            <p
                                class="text-xs font-semibold
                               leading-5
                               text-emerald-700">
                                Less repetitive entry while keeping human review
                                before inventory is updated.
                            </p>

                        </div>

                    </article>

                </div>



                {{-- ================================================================== --}}
                {{-- ILLUSTRATIVE NOTE --}}
                {{-- ================================================================== --}}

                <div
                    class="mx-auto mt-8
                   flex max-w-3xl
                   items-start justify-center
                   gap-3
                   text-center">

                    <svg class="mt-0.5 h-4 w-4
                       shrink-0
                       text-secondary-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="9" />

                        <path stroke-linecap="round" d="M12 10v6" />

                        <circle cx="12" cy="7" r=".7" fill="currentColor" stroke="none" />
                    </svg>


                    <p class="text-xs leading-5
                       text-secondary-500">
                        Times shown above are illustrative examples only. Actual
                        processing time will vary depending on document quality,
                        number of items and receiving complexity.
                    </p>

                </div>

            </div>

        </section>


        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — OPERATIONAL IMPACT --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-operational-impact"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-primary-50/60
           via-background
           to-white
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATION --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Left glow --}}
                <div
                    class="absolute -left-[180px] top-20
                   h-[420px] w-[420px]
                   rounded-full
                   bg-primary-100/25
                   blur-[90px]">
                </div>

                {{-- Right glow --}}
                <div
                    class="absolute -right-[200px] bottom-[-120px]
                   h-[480px] w-[480px]
                   rounded-full
                   bg-primary-100/25
                   blur-[100px]">
                </div>

                {{-- Top dotted pattern --}}
                <div class="absolute right-12 top-10
                   hidden h-28 w-28
                   opacity-20
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADER --}}
                {{-- ================================================================== --}}

                <div class="mx-auto max-w-4xl text-center">

                    <p
                        class="text-xs font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Measurable Operational Impact
                    </p>


                    <h2
                        class="mt-4
                       text-3xl font-bold
                       leading-[1.08]
                       tracking-[-0.04em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        Why High-Velocity Warehouses Scan

                        <span class="block">
                            Instead of Type
                        </span>
                    </h2>


                    <p
                        class="mx-auto mt-5
                       max-w-3xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        Reduce receiving bottlenecks, minimise repetitive data entry
                        and keep inventory information moving through the warehouse
                        with greater speed and consistency.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- IMPACT GRID --}}
                {{-- ================================================================== --}}

                <div class="mt-14
                   grid gap-5
                   lg:grid-cols-2">


                    {{-- ============================================================ --}}
                    {{-- CARD 1 — FASTER RECEIVING --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-[18px]
                       border border-primary-100
                       bg-white
                       p-6
                       shadow-[0_12px_35px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:shadow-[0_20px_45px_rgba(15,23,42,0.07)]
                       sm:p-7
                       hover:cursor-pointer">

                        {{-- Top row --}}
                        <div
                            class="flex items-start
                           justify-between
                           gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-11 w-11
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-emerald-50
                               text-emerald-600">

                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m13 2-7 11h6l-1 9 7-12h-6l1-8Z" />
                                </svg>

                            </div>


                            {{-- Metric --}}
                            <p
                                class="text-lg font-bold
                               tracking-tight
                               text-emerald-600">
                                Faster
                            </p>

                        </div>



                        <h3
                            class="mt-5
                           text-xl font-bold
                           text-secondary-900">
                            Faster Receiving
                        </h3>


                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Move from supplier paperwork to reviewed inventory data
                            with fewer manual steps, helping receiving teams process
                            arriving goods sooner.
                        </p>



                        {{-- Bottom technical strip --}}
                        <div
                            class="mt-6
                           flex flex-col gap-3
                           rounded-xl
                           bg-primary-50/70
                           px-4 py-3
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <span class="text-[10px] font-medium
                               text-secondary-500">
                                Receiving Workflow
                            </span>


                            <span class="text-[10px] font-semibold
                               text-secondary-700">
                                Scan → Review → Confirm
                            </span>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 2 — FEWER DATA ERRORS --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-[18px]
                       border border-primary-100
                       bg-white
                       p-6
                       shadow-[0_12px_35px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:shadow-[0_20px_45px_rgba(15,23,42,0.07)]
                       sm:p-7
                       hover:cursor-pointer">

                        <div
                            class="flex items-start
                           justify-between
                           gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-11 w-11
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 18 9 6m0 12 4-12" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14 16 2 2 4-5" />
                                </svg>

                            </div>


                            <p
                                class="text-lg font-bold
                               tracking-tight
                               text-primary-600">
                                Reduced Errors
                            </p>

                        </div>



                        <h3
                            class="mt-5
                           text-xl font-bold
                           text-secondary-900">
                            Fewer Manual Data Errors
                        </h3>


                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Reduce transposed part numbers, missed line items and
                            incorrect quantities by validating extracted data against
                            the original supplier document before confirmation.
                        </p>



                        <div
                            class="mt-6
                           flex flex-col gap-3
                           rounded-xl
                           bg-primary-50/70
                           px-4 py-3
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <span class="text-[10px] font-medium
                               text-secondary-500">
                                Review Control
                            </span>


                            <span class="text-[10px] font-semibold
                               text-secondary-700">
                                Human validation before commit
                            </span>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 3 — PO MATCHING --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-[18px]
                       border border-primary-100
                       bg-white
                       p-6
                       shadow-[0_12px_35px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:shadow-[0_20px_45px_rgba(15,23,42,0.07)]
                       sm:p-7
                       hover:cursor-pointer">

                        <div
                            class="flex items-start
                           justify-between
                           gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-11 w-11
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-emerald-50
                               text-emerald-600">

                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" d="M4 12h16" />

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8 8-4 4 4 4M16 8l4 4-4 4" />
                                </svg>

                            </div>


                            <p
                                class="text-lg font-bold
                               tracking-tight
                               text-emerald-600">
                                Connected
                            </p>

                        </div>



                        <h3
                            class="mt-5
                           text-xl font-bold
                           text-secondary-900">
                            Purchase Order Matching
                        </h3>


                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Compare supplier documents with existing purchase records
                            so receiving teams can identify expected items, quantities
                            and references more easily.
                        </p>



                        <div
                            class="mt-6
                           flex flex-col gap-3
                           rounded-xl
                           bg-primary-50/70
                           px-4 py-3
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <span class="text-[10px] font-medium
                               text-secondary-500">
                                Matching Workflow
                            </span>


                            <span class="text-[10px] font-semibold
                               text-secondary-700">
                                Supplier document ↔ PO
                            </span>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 4 — AUDIT READY --}}
                    {{-- ============================================================ --}}

                    <article
                        class="rounded-[18px]
                       border border-primary-100
                       bg-white
                       p-6
                       shadow-[0_12px_35px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:shadow-[0_20px_45px_rgba(15,23,42,0.07)]
                       sm:p-7
                       hover:cursor-pointer">

                        <div
                            class="flex items-start
                           justify-between
                           gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-11 w-11
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 4.5 6v5.25c0 4.55
                                               3.08 8.78 7.5 9.75
                                               4.42-.97 7.5-5.2
                                               7.5-9.75V6L12 3Z" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-5" />
                                </svg>

                            </div>


                            <p
                                class="text-lg font-bold
                               tracking-tight
                               text-primary-600">
                                Audit-Ready
                            </p>

                        </div>



                        <h3
                            class="mt-5
                           text-xl font-bold
                           text-secondary-900">
                            Document History & Traceability
                        </h3>


                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-600">
                            Keep the original supplier document alongside reviewed
                            inventory information so teams can trace where received
                            data came from and review changes later.
                        </p>



                        <div
                            class="mt-6
                           flex flex-col gap-3
                           rounded-xl
                           bg-primary-50/70
                           px-4 py-3
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <span class="text-[10px] font-medium
                               text-secondary-500">
                                Traceability
                            </span>


                            <span class="text-[10px] font-semibold
                               text-secondary-700">
                                Source document retained
                            </span>

                        </div>

                    </article>

                </div>



                {{-- ================================================================== --}}
                {{-- OPTIONAL PRODUCT CLAIM NOTE --}}
                {{-- ================================================================== --}}

                <div
                    class="mx-auto mt-8
                   flex max-w-3xl
                   items-start justify-center
                   gap-3
                   text-center">

                    <svg class="mt-0.5 h-4 w-4
                       shrink-0
                       text-secondary-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="9" />

                        <path stroke-linecap="round" d="M12 10v6" />

                        <circle cx="12" cy="7" r=".7" fill="currentColor" stroke="none" />
                    </svg>


                    <p class="text-xs leading-5
                       text-secondary-500">
                        Specific processing-time, accuracy and document-retention
                        figures can be added once the final StockCore implementation
                        and compliance requirements are confirmed.
                    </p>

                </div>

            </div>

        </section>


        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — INTEGRATED STOCKCORE PLATFORM --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-related-features"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-white
           via-background
           to-background-muted
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Left soft glow --}}
                <div
                    class="absolute -left-[180px] top-[40px]
                   h-[380px] w-[380px]
                   rounded-full
                   bg-primary-100/20
                   blur-[90px]">
                </div>

                {{-- Right soft glow --}}
                <div
                    class="absolute -right-[180px] bottom-[-100px]
                   h-[420px] w-[420px]
                   rounded-full
                   bg-primary-100/20
                   blur-[90px]">
                </div>

                {{-- Right dotted pattern --}}
                <div class="absolute right-10 top-10
                   hidden h-28 w-28
                   opacity-20
                   lg:block"
                    style="
                background-image:
                    radial-gradient(circle, #2563eb 1.2px, transparent 1.2px);
                background-size: 14px 14px;
            ">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADING --}}
                {{-- ================================================================== --}}

                <div class="mx-auto max-w-4xl text-center">

                    <p
                        class="text-xs font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Integrated Platform
                    </p>


                    <h2
                        class="mt-4
                       text-3xl font-bold
                       leading-[1.1]
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        Works Seamlessly with StockCore Core

                        <span class="block">
                            Modules
                        </span>
                    </h2>


                    <p
                        class="mx-auto mt-5
                       max-w-3xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        Document scanning powers accurate, structured inventory data
                        across the wider StockCore platform — helping purchasing,
                        costing, traceability and accounting workflows stay connected.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- FEATURE CARDS --}}
                {{-- ================================================================== --}}

                <div
                    class="mt-12
                   grid gap-4
                   sm:grid-cols-2
                   xl:grid-cols-4">


                    {{-- ============================================================ --}}
                    {{-- CARD 1 — LANDED COST --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-xl
                       bg-white
                       p-5
                       shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:shadow-[0_16px_35px_rgba(15,23,42,0.07)]">

                        {{-- Category --}}
                        <span
                            class="inline-flex
                           rounded-full
                           bg-primary-50
                           px-2.5 py-1
                           text-[9px] font-bold uppercase
                           tracking-[0.06em]
                           text-primary-600">
                            Cost Allocation
                        </span>


                        {{-- Heading --}}
                        <h3
                            class="mt-4
                           text-base font-bold
                           text-secondary-900">
                            Landed Cost Calculator
                        </h3>


                        {{-- Description --}}
                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Automatically distribute inbound ocean freight, customs,
                            duties, insurance and other landed costs across imported
                            inventory.
                        </p>


                        {{-- Link --}}
                        <a href="{{ url('/features/landing-cost') }}"
                            class="mt-5
                           inline-flex items-center gap-2
                           text-xs font-bold
                           text-primary-600
                           transition
                           group-hover:gap-3">
                            Learn more

                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </a>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 2 — STOCK DECREASE --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-xl
                       bg-white
                       p-5
                       shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:shadow-[0_16px_35px_rgba(15,23,42,0.07)]">

                        <span
                            class="inline-flex
                           rounded-full
                           bg-primary-50
                           px-2.5 py-1
                           text-[9px] font-bold uppercase
                           tracking-[0.06em]
                           text-primary-600">
                            Stock Control
                        </span>


                        <h3
                            class="mt-4
                           text-base font-bold
                           text-secondary-900">
                            Stock Decrease Tracking
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Keep real-time visibility of outbound shipments,
                            adjustments and warehouse stock movements after inventory
                            has been received.
                        </p>


                        <a href="{{ url('/features/stock-tracking') }}"
                            class="mt-5
                           inline-flex items-center gap-2
                           text-xs font-bold
                           text-primary-600
                           transition
                           group-hover:gap-3">
                            Learn more

                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </a>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 3 — TRACEABILITY --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-xl
                       bg-white
                       p-5
                       shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:shadow-[0_16px_35px_rgba(15,23,42,0.07)]">

                        <span
                            class="inline-flex
                           rounded-full
                           bg-primary-50
                           px-2.5 py-1
                           text-[9px] font-bold uppercase
                           tracking-[0.06em]
                           text-primary-600">
                            Traceability
                        </span>


                        <h3
                            class="mt-4
                           text-base font-bold
                           text-secondary-900">
                            Serial, Expiry & Lot Tracking
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Capture serial numbers, expiry dates and lot references
                            alongside incoming stock for better traceability across
                            inventory operations.
                        </p>


                        <a href="{{ url('/features/serial-expiry-tracking') }}"
                            class="mt-5
                           inline-flex items-center gap-2
                           text-xs font-bold
                           text-primary-600
                           transition
                           group-hover:gap-3">
                            Learn more

                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </a>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 4 — ACCOUNTING SYNC --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-xl
                       bg-white
                       p-5
                       shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:shadow-[0_16px_35px_rgba(15,23,42,0.07)]">

                        <span
                            class="inline-flex
                           rounded-full
                           bg-primary-50
                           px-2.5 py-1
                           text-[9px] font-bold uppercase
                           tracking-[0.06em]
                           text-primary-600">
                            Accounting Sync
                        </span>


                        <h3
                            class="mt-4
                           text-base font-bold
                           text-secondary-900">
                            Xero, MYOB & Cin7 Sync
                        </h3>


                        <p
                            class="mt-2
                           text-xs leading-5
                           text-secondary-600">
                            Keep inventory and accounting information connected by
                            syncing purchase, stock and inventory valuation data with
                            supported financial systems.
                        </p>


                        <a href="{{ url('/integrations') }}"
                            class="mt-5
                           inline-flex items-center gap-2
                           text-xs font-bold
                           text-primary-600
                           transition
                           group-hover:gap-3">
                            Learn more

                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </a>

                    </article>

                </div>



                {{-- ================================================================== --}}
                {{-- BOTTOM CONNECTION LINE --}}
                {{-- ================================================================== --}}

                <div
                    class="mx-auto mt-10
                   flex max-w-3xl
                   items-center justify-center
                   gap-3
                   text-center">

                    <span class="h-px w-10
                       bg-primary-200"></span>


                    <p class="text-xs font-medium
                       text-secondary-500">
                        One document intake workflow. Connected inventory operations.
                    </p>


                    <span class="h-px w-10
                       bg-primary-200"></span>

                </div>

            </div>

        </section>
        {{-- ====================================================================== --}}
        {{-- SCAN & IMPORT — FINAL CTA --}}
        {{-- ====================================================================== --}}

        <section id="scan-import-final-cta" class="bg-background px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

            <div
                class="relative mx-auto max-w-7xl overflow-hidden
               rounded-[18px]
               bg-gradient-to-r
               from-secondary-900
               via-primary-950
               to-primary-900
               px-6 py-10
               text-white
               shadow-[0_20px_55px_rgba(15,23,42,0.22)]
               sm:px-8 sm:py-12
               lg:px-10 lg:py-14">

                {{-- ============================================================= --}}
                {{-- BACKGROUND DECORATION --}}
                {{-- ============================================================= --}}

                <div class="pointer-events-none absolute inset-0 overflow-hidden">

                    {{-- Left glow --}}
                    <div
                        class="absolute -left-24 top-0
                       h-64 w-64
                       rounded-full
                       bg-primary-500/10
                       blur-[90px]">
                    </div>

                    {{-- Right glow --}}
                    <div
                        class="absolute -right-20 top-[-40px]
                       h-72 w-72
                       rounded-full
                       bg-primary-500/10
                       blur-[100px]">
                    </div>

                    {{-- Bottom soft glow --}}
                    <div
                        class="absolute bottom-[-180px] left-1/2
                       h-72 w-[600px]
                       -translate-x-1/2
                       rounded-full
                       bg-primary-600/10
                       blur-[100px]">
                    </div>

                </div>



                {{-- ============================================================= --}}
                {{-- CONTENT --}}
                {{-- ============================================================= --}}

                <div class="relative z-10 max-w-4xl">


                    {{-- Badge --}}
                    <div
                        class="inline-flex items-center gap-2
                       rounded-full
                       border border-white/15
                       bg-white/5
                       px-3 py-1.5
                       text-[10px] font-bold uppercase
                       tracking-[0.12em]
                       text-secondary-200">

                        <span
                            class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-400"></span>

                        Reclaim Warehouse Time

                    </div>



                    {{-- Heading --}}
                    <h2
                        class="mt-5
                       max-w-3xl
                       text-3xl font-bold
                       leading-[1.08]
                       tracking-[-0.035em]
                       text-white
                       sm:text-4xl
                       lg:text-5xl">
                        Stop typing supplier invoices by hand.

                        <span class="block">
                            Automate your receiving today.
                        </span>
                    </h2>



                    {{-- Description --}}
                    <p
                        class="mt-4
                       max-w-2xl
                       text-sm leading-6
                       text-secondary-300
                       sm:text-base sm:leading-7">
                        Join warehouse, wholesale and distribution teams using
                        StockCore to turn supplier documents into cleaner inventory
                        data with less repetitive manual entry.
                    </p>



                    {{-- ========================================================= --}}
                    {{-- CTA BUTTONS --}}
                    {{-- ========================================================= --}}

                    <div class="mt-7
                       flex flex-col gap-3
                       sm:flex-row">

                        {{-- Primary CTA --}}
                        <a href="{{ url('/signup') }}"
                            class="group inline-flex
                           items-center justify-center
                           gap-2
                           rounded-lg
                           bg-primary-600
                           px-6 py-3
                           text-sm font-bold
                           text-white
                           shadow-[0_12px_30px_rgba(37,99,235,0.28)]
                           transition duration-300
                           hover:-translate-y-0.5
                           hover:bg-primary-500">
                            Start Free Trial

                            <svg class="h-4 w-4
                               transition-transform duration-300
                               group-hover:translate-x-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </a>



                        {{-- Secondary CTA --}}
                        <a href="{{ url('/contact') }}"
                            class="inline-flex
                           items-center justify-center
                           rounded-lg
                           border border-white/15
                           bg-white/10
                           px-6 py-3
                           text-sm font-bold
                           text-white
                           transition duration-300
                           hover:-translate-y-0.5
                           hover:bg-white/15">
                            Book a Demo
                        </a>

                    </div>



                    {{-- ========================================================= --}}
                    {{-- TOP TRUST ITEMS --}}
                    {{-- ========================================================= --}}

                    <div
                        class="mt-7
                       flex flex-wrap
                       items-center
                       gap-x-4 gap-y-2">

                        @foreach (['14-day free trial', 'No credit card required', 'Fast onboarding', 'Australian hosted'] as $item)
                            <div class="flex items-center gap-2">

                                <svg class="h-3.5 w-3.5
                                   text-emerald-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>


                                <span
                                    class="text-[11px]
                                   font-medium
                                   text-secondary-300">
                                    {{ $item }}
                                </span>

                            </div>
                        @endforeach

                    </div>



                    {{-- Divider --}}
                    <div class="my-8 h-px
                       w-full
                       bg-white/10"></div>



                    {{-- ========================================================= --}}
                    {{-- BOTTOM TRUST / SECURITY ROW --}}
                    {{-- ========================================================= --}}

                    <div
                        class="flex flex-wrap
                       items-center
                       gap-x-6 gap-y-3">


                        {{-- Item 1 --}}
                        <div class="flex items-center gap-2">

                            <svg class="h-4 w-4
                               text-primary-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 4.5 6v5.25c0 4.55
                                   3.08 8.78 7.5 9.75
                                   4.42-.97 7.5-5.2
                                   7.5-9.75V6L12 3Z" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-5" />
                            </svg>


                            <span
                                class="text-[11px]
                               font-medium
                               text-secondary-300">
                                Secure document workflow
                            </span>

                        </div>



                        {{-- Item 2 --}}
                        <div class="flex items-center gap-2">

                            <svg class="h-4 w-4
                               text-primary-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <rect x="5" y="10" width="14" height="10" rx="2" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10V7a4 4 0 0 1 8 0v3" />
                            </svg>


                            <span
                                class="text-[11px]
                               font-medium
                               text-secondary-300">
                                Encrypted data handling
                            </span>

                        </div>



                        {{-- Item 3 --}}
                        <div class="flex items-center gap-2">

                            <svg class="h-4 w-4
                               text-primary-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M12 3a9 9 0 1 0 0 18
                                   9 9 0 0 0 0-18Z" />

                                <path stroke-linecap="round" d="M12 3c2.3 2.5 3.5 5.5 3.5 9S14.3 18.5 12 21" />
                            </svg>


                            <span
                                class="text-[11px]
                               font-medium
                               text-secondary-300">
                                Australian-focused platform
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    </main>
    <script>
        $(function() {

            $('.pipeline-step').on('click', function() {

                const step = $(this).data('pipeline-step');

                /*
                |--------------------------------------------------------------------------
                | Reset all step cards
                |--------------------------------------------------------------------------
                */

                $('.pipeline-step')
                    .removeClass(
                        'pipeline-step-active ' +
                        'border-primary-600 ' +
                        'bg-primary-50/70'
                    )
                    .addClass(
                        'border-secondary-200 ' +
                        'bg-white'
                    );


                $('.pipeline-step .pipeline-number')
                    .removeClass(
                        'bg-primary-600 ' +
                        'text-white'
                    )
                    .addClass(
                        'bg-secondary-100 ' +
                        'text-secondary-500'
                    );


                /*
                |--------------------------------------------------------------------------
                | Activate clicked step
                |--------------------------------------------------------------------------
                */

                $(this)
                    .removeClass(
                        'border-secondary-200 ' +
                        'bg-white'
                    )
                    .addClass(
                        'pipeline-step-active ' +
                        'border-primary-600 ' +
                        'bg-primary-50/70'
                    );


                $(this)
                    .find('.pipeline-number')
                    .removeClass(
                        'bg-secondary-100 ' +
                        'text-secondary-500'
                    )
                    .addClass(
                        'bg-primary-600 ' +
                        'text-white'
                    );


                /*
                |--------------------------------------------------------------------------
                | Change panel
                |--------------------------------------------------------------------------
                */

                $('.pipeline-panel')
                    .stop(true, true)
                    .hide();


                $('[data-pipeline-panel="' + step + '"]')
                    .stop(true, true)
                    .fadeIn(220);

            });

        });
    </script>

@endsection
