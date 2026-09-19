@extends('layouts.public')
@section('title', 'Feature Packeting')
@section('content')
    <style>
        /* =========================================================
                   PACKETING HERO
                ========================================================= */

        .packeting-hero {
            position: relative;
            isolation: isolate;
        }

        /* Main centre glow */
        .packeting-hero::before {
            content: "";
            position: absolute;
            top: -320px;
            left: 50%;
            width: 1000px;
            height: 760px;
            transform: translateX(-50%);
            border-radius: 9999px;

            background:
                radial-gradient(circle,
                    rgba(59, 130, 246, 0.13) 0%,
                    rgba(147, 197, 253, 0.07) 35%,
                    rgba(248, 251, 255, 0) 72%);

            pointer-events: none;
            z-index: -1;
        }


        /* =========================================================
                   FLOATING BADGE
                ========================================================= */

        @keyframes packetingBadgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .packeting-hero-badge {
            animation: packetingBadgeFloat 4.8s ease-in-out infinite;
        }


        /* =========================================================
                   BUTTONS
                ========================================================= */

        .packeting-hero-btn {
            transition:
                transform 220ms ease,
                box-shadow 220ms ease,
                background-color 220ms ease,
                border-color 220ms ease;
        }

        .packeting-hero-btn:hover {
            transform: translateY(-2px);
        }


        /* =========================================================
                   TRUST ITEM ICONS
                ========================================================= */

        @keyframes packetingCheckPulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .6;
                transform: scale(.88);
            }
        }

        .packeting-check {
            animation: packetingCheckPulse 2.4s ease-in-out infinite;
        }


        /* =========================================================
                   FLOATING BACKGROUND SHAPES
                ========================================================= */

        @keyframes packetingShapeFloatOne {

            0%,
            100% {
                transform: translate3d(0, 0, 0) rotate(0deg);
            }

            50% {
                transform: translate3d(0, -12px, 0) rotate(3deg);
            }
        }

        @keyframes packetingShapeFloatTwo {

            0%,
            100% {
                transform: translate3d(0, 0, 0) rotate(0deg);
            }

            50% {
                transform: translate3d(10px, 8px, 0) rotate(-3deg);
            }
        }

        .packeting-shape-one {
            animation: packetingShapeFloatOne 7s ease-in-out infinite;
        }

        .packeting-shape-two {
            animation: packetingShapeFloatTwo 8s ease-in-out infinite;
        }

        /* =========================================================
               PACKETING EXPLAINED
            ========================================================= */

        .packeting-level-card {
            transition:
                transform 240ms ease,
                border-color 240ms ease,
                box-shadow 240ms ease;
        }

        .packeting-level-card:hover {
            transform: translateY(-4px);
            border-color: rgba(59, 130, 246, 0.20);

            box-shadow:
                0 18px 40px rgba(15, 23, 42, 0.06);
        }

        .packeting-level-icon {
            transition:
                transform 240ms ease,
                background-color 240ms ease;
        }

        .packeting-level-card:hover .packeting-level-icon {
            transform: scale(1.06);
        }


        @keyframes packetingCalculationEnter {
            0% {
                opacity: .4;
                transform: translateY(5px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .packeting-calculation {
            animation:
                packetingCalculationEnter 600ms cubic-bezier(.22, 1, .36, 1);
        }

        /* =========================================================
               PACKETING CORE CAPABILITY
            ========================================================= */

        .packeting-capability-card {
            position: relative;
            overflow: hidden;

            transition:
                transform 260ms ease,
                border-color 260ms ease,
                box-shadow 260ms ease;
        }

        .packeting-capability-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.18);

            box-shadow:
                0 24px 55px rgba(15, 23, 42, 0.075);
            cursor: pointer;
        }


        .packeting-capability-icon {
            transition:
                transform 240ms ease,
                box-shadow 240ms ease;
        }

        .packeting-capability-card:hover .packeting-capability-icon {
            transform: translateY(-2px) scale(1.05);
        }


        .packeting-capability-link svg {
            transition: transform 220ms ease;
        }

        .packeting-capability-link:hover svg {
            transform: translateX(4px);
        }


        /* =========================================================
               DECORATIVE CIRCLE
            ========================================================= */

        .packeting-capability-orb {
            transition:
                transform 500ms cubic-bezier(.22, 1, .36, 1),
                opacity 300ms ease;
        }

        .packeting-capability-card:hover .packeting-capability-orb {
            transform: scale(1.15) translate(-4px, -4px);
            opacity: .85;
        }

        /* =========================================================
               PACKETING CONFIGURATION SIMULATOR
            ========================================================= */

        .packet-config-window {
            transition:
                transform 280ms ease,
                border-color 280ms ease,
                box-shadow 280ms ease;
        }

        .packet-config-window:hover {
            transform: translateY(-2px);
            border-color: rgba(59, 130, 246, .20);

            box-shadow:
                0 28px 65px rgba(15, 23, 42, .09);
        }


        /* ---------------------------------------------------------
               Inputs
            --------------------------------------------------------- */

        .packet-config-input,
        .packet-config-select {
            transition:
                border-color 200ms ease,
                box-shadow 200ms ease,
                background-color 200ms ease;
        }

        .packet-config-input:focus,
        .packet-config-select:focus {
            outline: none;
            border-color: #3b82f6;

            box-shadow:
                0 0 0 3px rgba(59, 130, 246, .10);
        }

        .packet-config-select:hover {
            outline: none;
            border-color: #3b82f6;

            box-shadow:
                0 0 0 3px rgba(59, 130, 246, .10);
            cursor: pointer;
        }


        /* ---------------------------------------------------------
               Slider
            --------------------------------------------------------- */

        .packet-carton-slider {
            --packet-progress: 40%;

            width: 100%;
            height: 7px;

            appearance: none;
            -webkit-appearance: none;

            border-radius: 9999px;

            background:
                linear-gradient(to right,
                    #2563eb 0%,
                    #2563eb var(--packet-progress),
                    #e2e8f0 var(--packet-progress),
                    #e2e8f0 100%);

            cursor: pointer;
        }

        .packet-carton-slider:focus {
            outline: none;
        }

        .packet-carton-slider::-webkit-slider-thumb {
            appearance: none;
            -webkit-appearance: none;

            width: 19px;
            height: 19px;

            border: 4px solid #ffffff;
            border-radius: 9999px;

            background: #2563eb;

            box-shadow:
                0 0 0 1px rgba(37, 99, 235, .14),
                0 4px 12px rgba(37, 99, 235, .22);

            cursor: grab;
        }

        .packet-carton-slider::-webkit-slider-thumb:active {
            cursor: grabbing;
        }

        .packet-carton-slider::-moz-range-thumb {
            width: 12px;
            height: 12px;

            border: 4px solid #ffffff;
            border-radius: 9999px;

            background: #2563eb;

            cursor: grab;
        }


        /* ---------------------------------------------------------
               Dynamic value animation
            --------------------------------------------------------- */

        @keyframes packetValueUpdate {
            0% {
                opacity: .35;
                transform: translateY(5px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .packet-value-updated {
            animation: packetValueUpdate 280ms ease-out;
        }


        /* ---------------------------------------------------------
               Live badge
            --------------------------------------------------------- */

        @keyframes packetLivePulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .45;
                transform: scale(.78);
            }
        }

        .packet-live-dot {
            animation: packetLivePulse 1.8s ease-in-out infinite;
        }


        /* ---------------------------------------------------------
               Right balance panel
            --------------------------------------------------------- */

        .packet-balance-panel {
            transition:
                transform 280ms ease,
                box-shadow 280ms ease;
        }

        .packet-balance-panel:hover {
            transform: translateY(-3px);

            box-shadow:
                0 26px 50px rgba(15, 23, 42, .18);
        }

        /* =========================================================
           PACKETING INDUSTRY FIT
        ========================================================= */

        .packeting-industry-card {
            transition:
                transform 240ms ease,
                border-color 240ms ease,
                box-shadow 240ms ease,
                background-color 240ms ease;
        }

        .packeting-industry-card:hover {
            transform: translateY(-4px);
            border-color: rgba(59, 130, 246, 0.18);
            background-color: #ffffff;

            box-shadow:
                0 20px 45px rgba(15, 23, 42, 0.06);
        }


        .packeting-industry-icon {
            transition:
                transform 220ms ease,
                background-color 220ms ease;
        }

        .packeting-industry-card:hover .packeting-industry-icon {
            transform: scale(1.06);
        }

        /* =========================================================
           PACKETING FINAL CTA
        ========================================================= */

        .packeting-final-cta {
            position: relative;
            isolation: isolate;
        }

        .packeting-final-cta::before {
            content: "";
            position: absolute;
            left: 50%;
            top: -220px;

            width: 760px;
            height: 480px;

            transform: translateX(-50%);
            border-radius: 9999px;

            background: rgba(37, 99, 235, 0.12);
            filter: blur(130px);

            pointer-events: none;
            z-index: -1;
        }


        .packeting-final-btn {
            transition:
                transform 220ms ease,
                background-color 220ms ease,
                box-shadow 220ms ease,
                border-color 220ms ease;
        }

        .packeting-final-btn:hover {
            transform: translateY(-2px);
        }


        @keyframes packetingFinalPulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .45;
                transform: scale(.8);
            }
        }

        .packeting-final-pulse {
            animation: packetingFinalPulse 1.9s ease-in-out infinite;
        }


        @keyframes packetingFinalBadgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .packeting-final-badge {
            animation: packetingFinalBadgeFloat 4.5s ease-in-out infinite;
        }
    </style>

    {{-- ============================================================
    PACKETING HERO
============================================================ --}}

    <section id="packeting-hero"
        class="packeting-hero relative
           flex min-h-[calc(100vh-80px)]
           items-center overflow-hidden
           bg-background
           py-10
           sm:py-12
           lg:py-10">

        {{-- ========================================================
        BACKGROUND DECORATIONS
    ========================================================= --}}

        {{-- Top-left ring --}}
        <div
            class="pointer-events-none absolute
               left-[-180px] top-[-200px]
               h-[470px] w-[470px]
               rounded-full
               border-[58px]
               border-primary-100/60">
        </div>


        {{-- Inner left ring --}}
        <div
            class="pointer-events-none absolute
               left-[-110px] top-[-140px]
               h-[330px] w-[330px]
               rounded-full
               border border-primary-200/40">
        </div>


        {{-- Bottom-left ring --}}
        <div
            class="pointer-events-none absolute
               bottom-[-280px] left-[-120px]
               h-[470px] w-[470px]
               rounded-full
               border-[55px]
               border-primary-100/60">
        </div>


        {{-- Bottom-right ring --}}
        <div
            class="pointer-events-none absolute
               bottom-[-285px] right-[-130px]
               h-[480px] w-[480px]
               rounded-full
               border-[55px]
               border-primary-100/55">
        </div>


        {{-- Right curved line --}}
        <div
            class="pointer-events-none absolute
               right-[-160px] top-[-100px]
               hidden h-[700px] w-[430px]
               rounded-[50%]
               border-l border-primary-200/50
               lg:block">
        </div>


        {{-- Left dots --}}
        <div class="pointer-events-none absolute
               left-7 top-[180px]
               hidden h-[110px] w-[110px]
               opacity-45 sm:block"
            style="
            background-image:
                radial-gradient(circle, #93c5fd 1.4px, transparent 1.4px);
            background-size: 17px 17px;
        ">
        </div>


        {{-- Right dots --}}
        <div class="pointer-events-none absolute
               right-14 top-[200px]
               hidden h-[120px] w-[120px]
               opacity-45 lg:block"
            style="
            background-image:
                radial-gradient(circle, #60a5fa 1.4px, transparent 1.4px);
            background-size: 17px 17px;
        ">
        </div>


        {{-- Floating shape left --}}
        <div
            class="packeting-shape-one
               pointer-events-none absolute
               left-[8%] top-[51%]
               hidden h-10 w-10
               rotate-12 rounded-xl
               bg-primary-100/60
               blur-[1px]
               lg:block">
        </div>


        {{-- Floating shape right --}}
        <div
            class="packeting-shape-two
               pointer-events-none absolute
               right-[9%] top-[60%]
               hidden h-12 w-12
               -rotate-12 rounded-2xl
               bg-primary-100/55
               blur-[1px]
               lg:block">
        </div>



        {{-- ========================================================
        CONTENT
    ========================================================= --}}

        <div class="relative z-10
               mx-auto w-full max-w-7xl
               px-6 lg:px-8">

            <div class="mx-auto max-w-4xl
                   text-center">

                {{-- =================================================
                BADGE
            ================================================== --}}

                <div class="flex justify-center">

                    <div
                        class="packeting-hero-badge
                           inline-flex items-center gap-2.5
                           rounded-full
                           border border-primary-100
                           bg-primary-50/90
                           px-4 py-2
                           shadow-[0_6px_20px_rgba(37,99,235,0.06)]
                           backdrop-blur-md">

                        <span
                            class="h-2 w-2 rounded-full
                               bg-primary-500
                               shadow-[0_0_0_5px_rgba(59,130,246,0.08)]">
                        </span>


                        <span
                            class="text-[10px] font-bold
                               uppercase tracking-[0.15em]
                               text-primary-600">
                            Packeting & Unit Conversion
                        </span>

                    </div>

                </div>



                {{-- =================================================
                HEADING
            ================================================== --}}

                <h1
                    class="mx-auto mt-6
                       max-w-4xl
                       text-[42px] font-extrabold
                       leading-[0.98]
                       tracking-[-0.05em]
                       text-secondary-950
                       sm:text-[50px]
                       md:text-[56px]
                       lg:text-[60px]">
                    Buy in cartons.

                    <span class="mt-1 block text-primary-600">
                        Sell in pieces.
                    </span>
                </h1>



                {{-- =================================================
                DESCRIPTION
            ================================================== --}}

                <p
                    class="mx-auto mt-7
                       max-w-3xl
                       text-base leading-7
                       text-secondary-600
                       lg:text-[17px]">
                    StockCore automatically converts inventory between cartons,
                    boxes, and individual pieces so your available quantities stay
                    accurate whether you buy in bulk, transfer by box, or sell by piece.
                </p>



                {{-- =================================================
                CTA BUTTONS
            ================================================== --}}

                <div
                    class="mt-8 flex flex-col
                       items-center justify-center
                       gap-3 sm:flex-row">

                    <a href="{{ url('/signup') }}"
                        class="packeting-hero-btn
                           group inline-flex min-h-12
                           items-center justify-center
                           gap-2.5 rounded-xl
                           bg-primary-600
                           px-7
                           text-sm font-semibold
                           text-white
                           shadow-[0_10px_26px_rgba(37,99,235,0.22)]
                           hover:bg-primary-700">
                        Start Free Trial

                        <svg class="h-4 w-4
                               transition-transform duration-200
                               group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>


                    <a href="#book-demo"
                        class="packeting-hero-btn
                           inline-flex min-h-12
                           items-center justify-center
                           rounded-xl
                           border border-secondary-200
                           bg-white/90
                           px-7
                           text-sm font-semibold
                           text-secondary-900
                           shadow-[0_8px_20px_rgba(15,23,42,0.04)]
                           hover:border-primary-200
                           hover:bg-white">
                        Book a Demo
                    </a>

                </div>



                {{-- =================================================
                TRUST ITEMS
            ================================================== --}}

                <div
                    class="mt-8 flex flex-col
                       items-center justify-center
                       gap-4
                       sm:flex-row
                       sm:flex-wrap
                       sm:gap-x-7">

                    {{-- Item 1 --}}
                    <div
                        class="flex items-center gap-2
                           text-sm font-medium
                           text-secondary-600">
                        <span
                            class="packeting-check
                               flex h-6 w-6
                               items-center justify-center
                               rounded-full
                               bg-emerald-50
                               text-emerald-600">
                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>

                        Automatic unit conversion
                    </div>


                    <span
                        class="hidden h-7 w-px
                           bg-secondary-200
                           sm:block">
                    </span>


                    {{-- Item 2 --}}
                    <div
                        class="flex items-center gap-2
                           text-sm font-medium
                           text-secondary-600">
                        <span
                            class="packeting-check
                               flex h-6 w-6
                               items-center justify-center
                               rounded-full
                               bg-emerald-50
                               text-emerald-600"
                            style="animation-delay: -.7s;">
                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>

                        Real-time stock accuracy
                    </div>


                    <span
                        class="hidden h-7 w-px
                           bg-secondary-200
                           sm:block">
                    </span>


                    {{-- Item 3 --}}
                    <div
                        class="flex items-center gap-2
                           text-sm font-medium
                           text-secondary-600">
                        <span
                            class="packeting-check
                               flex h-6 w-6
                               items-center justify-center
                               rounded-full
                               bg-emerald-50
                               text-emerald-600"
                            style="animation-delay: -1.4s;">
                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>

                        No manual calculations
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ============================================================
    PACKETING EXPLAINED SIMPLY
============================================================ --}}

    <section id="packeting-explained" class="relative overflow-hidden bg-background-muted py-20 sm:py-24 lg:py-28">

        {{-- Background glow --}}
        <div
            class="pointer-events-none absolute
               left-1/2 top-[-240px]
               h-[520px] w-[900px]
               -translate-x-1/2
               rounded-full
               bg-primary-50/80
               blur-[130px]">
        </div>


        <div class="relative mx-auto max-w-7xl
               px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="mx-auto max-w-3xl
                   text-center">

                <div
                    class="inline-flex items-center
                       rounded-full
                       bg-primary-50
                       px-3 py-1.5">
                    <span
                        class="text-[10px] font-bold
                           uppercase tracking-[0.16em]
                           text-primary-600">
                        Foundational Concept
                    </span>
                </div>


                <h2
                    class="mt-4
                       text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-950
                       sm:text-4xl
                       lg:text-[42px]">
                    Packeting, explained simply.
                </h2>


                <p
                    class="mx-auto mt-4
                       max-w-2xl
                       text-base leading-7
                       text-secondary-500">
                    Packeting lets StockCore understand that one product can exist
                    in multiple units of measure — such as cartons, boxes, and pieces —
                    while still representing the exact same physical stock.
                </p>

            </div>



            {{-- ====================================================
            PACKETING LEVELS
        ===================================================== --}}

            <div class="mx-auto mt-12 grid
                   max-w-5xl gap-5
                   md:grid-cols-3">

                {{-- =================================================
                LEVEL 1 — CARTON
            ================================================== --}}

                <article
                    class="packeting-level-card
                       rounded-[18px]
                       border border-secondary-100
                       bg-secondary-50/70
                       px-6 py-7
                       text-center">

                    <div
                        class="packeting-level-icon
                           mx-auto flex h-12 w-12
                           items-center justify-center
                           rounded-full
                           bg-primary-100
                           text-primary-600">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 4-7 4-7-4 7-4z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 7v10l7 4 7-4V7" />

                            <path stroke-linecap="round" d="M12 11v10" />
                        </svg>
                    </div>


                    <p
                        class="mt-5 text-[10px]
                           font-semibold uppercase
                           tracking-[0.12em]
                           text-secondary-500">
                        Level 1: Carton
                    </p>


                    <h3 class="mt-2 text-xl font-bold
                           text-secondary-950">
                        1 Carton
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Contains 8 standard packaging boxes
                    </p>


                    <span
                        class="mt-4 inline-flex
                           rounded-full
                           bg-primary-50
                           px-3 py-1.5
                           text-[10px] font-semibold
                           text-primary-700">
                        Wholesale purchase unit
                    </span>

                </article>



                {{-- =================================================
                LEVEL 2 — BOX
            ================================================== --}}

                <article
                    class="packeting-level-card
                       rounded-[18px]
                       border border-secondary-100
                       bg-secondary-50/70
                       px-6 py-7
                       text-center">

                    <div
                        class="packeting-level-icon
                           mx-auto flex h-12 w-12
                           items-center justify-center
                           rounded-full
                           bg-primary-100
                           text-primary-600">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="4" y="4" width="6" height="6" rx="1" />

                            <rect x="14" y="4" width="6" height="6" rx="1" />

                            <rect x="4" y="14" width="6" height="6" rx="1" />

                            <rect x="14" y="14" width="6" height="6" rx="1" />
                        </svg>
                    </div>


                    <p
                        class="mt-5 text-[10px]
                           font-semibold uppercase
                           tracking-[0.12em]
                           text-secondary-500">
                        Level 2: Box
                    </p>


                    <h3 class="mt-2 text-xl font-bold
                           text-secondary-950">
                        8 Boxes
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Contains 6 retail packaged pieces each
                    </p>


                    <span
                        class="mt-4 inline-flex
                           rounded-full
                           bg-primary-50
                           px-3 py-1.5
                           text-[10px] font-semibold
                           text-primary-700">
                        Distribution transfer unit
                    </span>

                </article>



                {{-- =================================================
                LEVEL 3 — PIECE
            ================================================== --}}

                <article
                    class="packeting-level-card
                       rounded-[18px]
                       border border-secondary-100
                       bg-secondary-50/70
                       px-6 py-7
                       text-center">

                    <div
                        class="packeting-level-icon
                           mx-auto flex h-12 w-12
                           items-center justify-center
                           rounded-full
                           bg-emerald-50
                           text-emerald-600">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h10l1 13H6L7 7z" />

                            <path stroke-linecap="round" d="M9 7a3 3 0 016 0" />
                        </svg>
                    </div>


                    <p
                        class="mt-5 text-[10px]
                           font-semibold uppercase
                           tracking-[0.12em]
                           text-secondary-500">
                        Level 3: Piece
                    </p>


                    <h3 class="mt-2 text-xl font-bold
                           text-secondary-950">
                        48 Pieces
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Individual item sold in retail or online
                    </p>


                    <span
                        class="mt-4 inline-flex
                           rounded-full
                           bg-emerald-100
                           px-3 py-1.5
                           text-[10px] font-semibold
                           text-emerald-700">
                        End-customer unit
                    </span>

                </article>

            </div>



            {{-- ====================================================
            LIVE CALCULATION EXAMPLE
        ===================================================== --}}

            <div
                class="packeting-calculation
                   mx-auto mt-6 flex
                   max-w-5xl
                   flex-col gap-5
                   rounded-[18px]
                   border border-primary-100
                   bg-primary-50/70
                   px-5 py-5
                   sm:flex-row
                   sm:items-center
                   sm:justify-between
                   sm:px-6">

                {{-- Left description --}}
                <div class="flex items-center gap-3">

                    <div
                        class="flex h-9 w-9 shrink-0
                           items-center justify-center
                           rounded-lg
                           bg-white
                           text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="4" y="4" width="6" height="6" />

                            <rect x="14" y="14" width="6" height="6" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 7h4M17 10v4" />
                        </svg>
                    </div>


                    <div>

                        <p class="text-sm font-semibold
                               text-secondary-900">
                            Live Calculation Example: 5 Cartons in Stock
                        </p>

                        <p class="mt-1 text-xs
                               text-secondary-500">
                            StockCore registers precisely:
                        </p>

                    </div>

                </div>



                {{-- Calculation --}}
                <div
                    class="flex flex-wrap
                       items-center gap-2
                       sm:justify-end">

                    <span
                        class="rounded-lg
                           border border-secondary-200
                           bg-white
                           px-4 py-2
                           text-sm font-semibold
                           text-secondary-900">
                        5 Cartons
                    </span>


                    <span class="text-sm font-medium
                           text-secondary-400">
                        =
                    </span>


                    <span
                        class="rounded-lg
                           border border-secondary-200
                           bg-white
                           px-4 py-2
                           text-sm font-semibold
                           text-secondary-900">
                        40 Boxes
                    </span>


                    <span class="text-sm font-medium
                           text-secondary-400">
                        =
                    </span>


                    <span
                        class="rounded-lg
                           bg-primary-600
                           px-4 py-2
                           text-sm font-semibold
                           text-white
                           shadow-[0_8px_18px_rgba(37,99,235,0.18)]">
                        240 Pieces
                    </span>

                </div>

            </div>

        </div>

    </section>

    {{-- ============================================================
    WHY MULTI-UOM PACKETING MATTERS
============================================================ --}}

    <section id="packeting-capabilities"
        class="relative overflow-hidden
           bg-background-muted

           py-20 sm:py-24 lg:py-28">

        {{-- Background glow --}}
        <div
            class="pointer-events-none absolute
               left-1/2 top-[-250px]
               h-[580px] w-[980px]
               -translate-x-1/2
               rounded-full
               bg-primary-100/35
               blur-[140px]">
        </div>


        <div class="relative mx-auto max-w-7xl
               px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="mx-auto max-w-3xl text-center">

                <p
                    class="text-[11px] font-bold
                       uppercase tracking-[0.18em]
                       text-primary-600">
                    Core Capability
                </p>


                <h2
                    class="mt-3
                       text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-950
                       sm:text-4xl
                       lg:text-[42px]">
                    Why Multi-UOM Packeting Matters
                </h2>


                <p
                    class="mx-auto mt-4 max-w-2xl
                       text-base leading-7
                       text-secondary-500">
                    Streamline operations from warehouse receiving bays
                    to e-commerce storefront checkout.
                </p>

            </div>



            {{-- ====================================================
            CAPABILITY CARDS
        ===================================================== --}}

            <div class="mt-12 grid gap-6
                   md:grid-cols-2
                   lg:grid-cols-3">

                {{-- =================================================
                BUY IN BULK
            ================================================== --}}

                <article
                    class="packeting-capability-card
                       flex min-h-[330px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.035)]
                       sm:p-8">

                    {{-- Decorative orb --}}
                    <div
                        class="packeting-capability-orb
                           pointer-events-none absolute
                           bottom-[-45px] right-[-42px]
                           h-28 w-28
                           rounded-full
                           bg-primary-50">
                    </div>


                    {{-- Icon --}}
                    <div
                        class="packeting-capability-icon
                           relative z-10
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-primary-600
                           text-white
                           shadow-[0_10px_20px_rgba(37,99,235,0.20)]">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10l2 4v7H5v-7l2-4z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 8V5h8v3" />

                            <path stroke-linecap="round" d="M5 12h14" />
                        </svg>
                    </div>



                    <h3
                        class="relative z-10
                           mt-6 text-xl font-bold
                           text-secondary-950">
                        Buy in Bulk Units
                    </h3>


                    <p
                        class="relative z-10
                           mt-3 text-sm leading-6
                           text-secondary-500">
                        Streamline purchasing by ordering from suppliers
                        in master cartons or pallets. Match Purchase Orders
                        (POs) to supplier terms seamlessly without manual
                        recalculations.
                    </p>



                    {{-- Footer --}}
                    <div class="relative z-10
                           mt-auto pt-6">

                        <div class="mb-4 h-px w-full
                               bg-secondary-100">
                        </div>


                        <a href="#"
                            class="packeting-capability-link
                               inline-flex items-center gap-2
                               text-xs font-semibold
                               text-primary-600
                               hover:text-primary-700">
                            PO & Intake Automated

                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>

                    </div>

                </article>



                {{-- =================================================
                SELL IN RETAIL UNITS
            ================================================== --}}

                <article
                    class="packeting-capability-card
                       flex min-h-[330px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.035)]
                       sm:p-8">

                    <div
                        class="packeting-capability-orb
                           pointer-events-none absolute
                           bottom-[-45px] right-[-42px]
                           h-28 w-28
                           rounded-full
                           bg-violet-50">
                    </div>


                    {{-- Icon --}}
                    <div
                        class="packeting-capability-icon
                           relative z-10
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-violet-600
                           text-white
                           shadow-[0_10px_20px_rgba(124,58,237,0.18)]">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v4" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v4" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.9 4.9l2.8 2.8" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.3 16.3l2.8 2.8" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M2 12h4" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12h4" />

                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>



                    <h3
                        class="relative z-10
                           mt-6 text-xl font-bold
                           text-secondary-950">
                        Sell in Retail Units
                    </h3>


                    <p
                        class="relative z-10
                           mt-3 text-sm leading-6
                           text-secondary-500">
                        Automatically break down bulk stock upon receipt.
                        Sell to customers in inner boxes or individual pieces
                        instantly while live omnichannel stock balances stay accurate.
                    </p>



                    <div class="relative z-10
                           mt-auto pt-6">

                        <div class="mb-4 h-px w-full
                               bg-secondary-100">
                        </div>


                        <a href="#"
                            class="packeting-capability-link
                               inline-flex items-center gap-2
                               text-xs font-semibold
                               text-violet-600
                               hover:text-violet-700">
                            Instant Bulk Breakdown

                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>

                    </div>

                </article>



                {{-- =================================================
                ELIMINATE CONVERSION ERRORS
            ================================================== --}}

                <article
                    class="packeting-capability-card
                       flex min-h-[330px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.035)]
                       sm:p-8">

                    <div
                        class="packeting-capability-orb
                           pointer-events-none absolute
                           bottom-[-45px] right-[-42px]
                           h-28 w-28
                           rounded-full
                           bg-emerald-50">
                    </div>


                    {{-- Icon --}}
                    <div
                        class="packeting-capability-icon
                           relative z-10
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-emerald-600
                           text-white
                           shadow-[0_10px_20px_rgba(5,150,105,0.18)]">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <circle cx="12" cy="12" r="8" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />

                            <path stroke-linecap="round" d="M12 4v2M12 18v2" />
                        </svg>
                    </div>



                    <h3
                        class="relative z-10
                           mt-6 text-xl font-bold
                           text-secondary-950">
                        Eliminate Conversion Errors
                    </h3>


                    <p
                        class="relative z-10
                           mt-3 text-sm leading-6
                           text-secondary-500">
                        No more manual math or spreadsheet formulas.
                        Eliminate costly stock discrepancies caused by human
                        error during unit conversion processes.
                    </p>



                    <div class="relative z-10
                           mt-auto pt-6">

                        <div class="mb-4 h-px w-full
                               bg-secondary-100">
                        </div>


                        <a href="#"
                            class="packeting-capability-link
                               inline-flex items-center gap-2
                               text-xs font-semibold
                               text-emerald-600
                               hover:text-emerald-700">
                            100% Math Verification

                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- ============================================================
    PACKETING INTERACTIVE CONFIGURATION
============================================================ --}}

    <section id="packeting-configurator" class="relative overflow-hidden bg-background py-20 sm:py-24 lg:py-28">

        {{-- Background glow --}}
        <div
            class="pointer-events-none absolute
               left-1/2 top-[-240px]
               h-[560px] w-[960px]
               -translate-x-1/2
               rounded-full
               bg-primary-50/80
               blur-[140px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="mx-auto max-w-4xl text-center">

                <div
                    class="inline-flex items-center
                       rounded-full
                       border border-primary-200
                       bg-primary-50
                       px-4 py-1.5">
                    <span
                        class="text-[11px] font-bold
                           uppercase tracking-[0.14em]
                           text-primary-600">
                        Interactive Dashboard Preview
                    </span>
                </div>


                <h2
                    class="mt-4
                       text-4xl font-bold
                       tracking-[-0.04em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[46px]">
                    Define Custom Conversion Rules in Seconds.
                </h2>


                <p
                    class="mx-auto mt-4
                       max-w-3xl
                       text-base leading-7
                       text-secondary-500
                       sm:text-[17px]">
                    Configure standard buying, stocking, and selling units.
                    Test the rule interactive controls below to preview
                    real-time calculations.
                </p>

            </div>



            {{-- ====================================================
            APPLICATION WINDOW
        ===================================================== --}}

            <div
                class="packet-config-window
                   mx-auto mt-12
                   max-w-6xl
                   rounded-[24px]
                   border border-secondary-200
                   bg-white
                   p-6
                   shadow-[0_24px_60px_rgba(15,23,42,0.08)]
                   sm:p-8 lg:p-9">

                {{-- =================================================
                WINDOW TOP BAR
            ================================================== --}}

                <div
                    class="flex flex-col gap-4
                       border-b border-secondary-200
                       pb-6
                       sm:flex-row
                       sm:items-center
                       sm:justify-between">

                    <div class="flex items-center gap-4">

                        <div class="flex items-center gap-2.5">

                            <span class="h-3 w-3 rounded-full bg-red-400"></span>
                            <span class="h-3 w-3 rounded-full bg-amber-400"></span>
                            <span class="h-3 w-3 rounded-full bg-emerald-400"></span>

                        </div>


                        <span class="font-mono text-xs
                               text-secondary-400">
                            stockcore.app/inventory/uom-settings
                        </span>

                    </div>



                    <div
                        class="inline-flex w-fit items-center gap-2
                           rounded-full
                           border border-primary-200
                           bg-primary-50
                           px-3 py-1.5">
                        <span class="h-1.5 w-1.5
                               rounded-full bg-primary-600">
                        </span>

                        <span class="text-xs font-semibold
                               text-primary-700">
                            Product ID: SKU-1049-M
                        </span>
                    </div>

                </div>



                {{-- =================================================
                MAIN GRID
            ================================================== --}}

                <div class="mt-7 grid gap-8
                       lg:grid-cols-[1.3fr_.9fr]">

                    {{-- =================================================
                    LEFT CONFIGURATION PANEL
                ================================================== --}}

                    <div>

                        <div class="border-b border-secondary-200
                               pb-4">
                            <h3
                                class="text-2xl font-bold
                                   tracking-[-0.025em]
                                   text-secondary-950">
                                Units of Measure Configuration
                            </h3>

                            <p class="mt-1 text-sm
                                   text-secondary-500">
                                Configure buying, stocking, and breakdown parameters.
                            </p>
                        </div>



                        {{-- =============================================
                        UNIT SELECTS
                    ============================================== --}}

                        <div class="mt-6 grid gap-5
                               sm:grid-cols-2">

                            {{-- Base unit --}}
                            <div>

                                <label for="packet-base-unit"
                                    class="text-xs font-bold uppercase
                                       tracking-[0.08em]
                                       text-secondary-600">
                                    Stocking / Base Unit
                                </label>


                                <select id="packet-base-unit"
                                    class="packet-config-select
                                       mt-2 h-12 w-full
                                       rounded-xl
                                       border border-secondary-300
                                       bg-secondary-50
                                       px-4
                                       text-sm font-semibold
                                       text-secondary-800">
                                    <option value="Piece">Piece (pc)</option>
                                    <option value="Box">Box (box)</option>
                                    <option value="Unit">Unit</option>
                                </select>

                            </div>



                            {{-- Buying unit --}}
                            <div>

                                <label for="packet-buying-unit"
                                    class="text-xs font-bold uppercase
                                       tracking-[0.08em]
                                       text-secondary-600">
                                    Buying Unit (Bulk)
                                </label>


                                <select id="packet-buying-unit"
                                    class="packet-config-select
                                       mt-2 h-12 w-full
                                       rounded-xl
                                       border border-secondary-300
                                       bg-secondary-50
                                       px-4
                                       text-sm font-semibold
                                       text-secondary-800">
                                    <option value="Carton">Carton (ctn)</option>
                                    <option value="Case">Case</option>
                                    <option value="Pallet">Pallet</option>
                                </select>

                            </div>

                        </div>



                        {{-- =============================================
                        CONVERSION MULTIPLIERS
                    ============================================== --}}

                        <div
                            class="mt-6 rounded-[18px]
                               border border-primary-200
                               bg-primary-50/60
                               p-5
                               sm:p-6">

                            <div
                                class="flex flex-col gap-3
                                   sm:flex-row
                                   sm:items-center
                                   sm:justify-between">

                                <h4
                                    class="text-sm font-bold
                                       uppercase tracking-[0.08em]
                                       text-primary-800">
                                    Conversion Multipliers
                                </h4>


                                <span
                                    class="inline-flex w-fit
                                       rounded-md
                                       border border-primary-200
                                       bg-white
                                       px-2.5 py-1
                                       text-xs font-semibold
                                       text-primary-600">
                                    Live Calculated
                                </span>

                            </div>



                            <div class="mt-5 grid gap-4
                                   sm:grid-cols-2">

                                {{-- Boxes per carton --}}
                                <div>

                                    <label for="packet-boxes-per-carton"
                                        class="text-sm font-medium
                                           text-secondary-600">
                                        Boxes per Carton:
                                    </label>


                                    <input id="packet-boxes-per-carton" type="number" min="1" max="500"
                                        value="110"
                                        class="packet-config-input
                                           mt-2 h-11 w-full
                                           rounded-xl
                                           border border-primary-400
                                           bg-white
                                           px-4
                                           text-sm font-bold
                                           text-secondary-900">

                                </div>



                                {{-- Pieces per box --}}
                                <div>

                                    <label for="packet-pieces-per-box"
                                        class="text-sm font-medium
                                           text-secondary-600">
                                        Pieces per Box:
                                    </label>


                                    <input id="packet-pieces-per-box" type="number" min="1" max="500"
                                        value="12"
                                        class="packet-config-input
                                           mt-2 h-11 w-full
                                           rounded-xl
                                           border border-secondary-300
                                           bg-white
                                           px-4
                                           text-sm font-bold
                                           text-secondary-900">

                                </div>

                            </div>



                            {{-- Active formula --}}
                            <div
                                class="mt-5 flex flex-col gap-2
                                   rounded-xl
                                   border border-secondary-200
                                   bg-white
                                   px-4 py-3
                                   sm:flex-row
                                   sm:items-center
                                   sm:justify-between">

                                <span
                                    class="text-sm font-semibold
                                       text-secondary-500">
                                    Active Formula:
                                </span>


                                <div id="packet-active-formula"
                                    class="text-sm font-bold
                                       text-secondary-900">
                                    1
                                    <span class="text-primary-600">Carton</span>

                                    = 110 Boxes =

                                    <span class="text-emerald-600">
                                        1320 Pieces
                                    </span>
                                </div>

                            </div>

                        </div>



                        {{-- =============================================
                        CARTON RECEIPT SIMULATOR
                    ============================================== --}}

                        <div
                            class="mt-6 rounded-[18px]
                               border border-secondary-200
                               bg-secondary-50/70
                               p-5">

                            <div class="flex items-center justify-between
                                   gap-4">

                                <label for="packet-carton-slider"
                                    class="text-sm font-bold
                                       uppercase tracking-[0.06em]
                                       text-secondary-700">
                                    Simulate Received Bulk Cartons:
                                </label>


                                <span id="packet-carton-count"
                                    class="rounded-lg
                                       border border-primary-200
                                       bg-white
                                       px-4 py-2
                                       font-mono
                                       text-lg font-bold
                                       text-primary-600">
                                    21
                                </span>

                            </div>



                            <div class="mt-5">

                                <input id="packet-carton-slider" class="packet-carton-slider" type="range"
                                    min="1" max="50" step="1" value="21">

                            </div>

                        </div>

                    </div>



                    {{-- =================================================
                    RIGHT INVENTORY PANEL
                ================================================== --}}

                    <aside
                        class="packet-balance-panel
                           rounded-[20px]
                           bg-secondary-950
                           p-6 text-white
                           shadow-[0_22px_48px_rgba(15,23,42,.18)]
                           sm:p-7">

                        <div class="flex items-center
                               justify-between gap-4">

                            <p
                                class="text-xs font-bold uppercase
                                   tracking-[0.12em]
                                   text-secondary-400">
                                Inventory Balance
                            </p>


                            <span
                                class="inline-flex items-center gap-2
                                   rounded-full
                                   border border-emerald-400/30
                                   bg-emerald-400/10
                                   px-3 py-1.5
                                   text-xs font-semibold
                                   text-emerald-300">
                                <span
                                    class="packet-live-dot
                                       h-1.5 w-1.5
                                       rounded-full
                                       bg-emerald-400">
                                </span>

                                Real-Time Sync
                            </span>

                        </div>



                        {{-- Total pieces --}}
                        <div class="mt-7">

                            <p class="text-sm
                                   text-secondary-400">
                                Available Base Stock Count
                            </p>


                            <div class="mt-1 flex items-end
                                   gap-2">

                                <span id="packet-total-pieces"
                                    class="font-mono
                                       text-5xl font-bold
                                       tracking-[-0.05em]
                                       text-white">
                                    27,720
                                </span>


                                <span id="packet-base-unit-label"
                                    class="mb-1.5
                                       text-sm text-secondary-400">
                                    Pieces
                                </span>

                            </div>

                        </div>



                        <div class="my-6 h-px
                               bg-secondary-800">
                        </div>



                        {{-- Stats --}}
                        <div class="space-y-5">

                            <div class="flex items-center
                                   justify-between gap-5">
                                <span class="text-sm
                                       text-secondary-400">
                                    Buying Unit Equivalent:
                                </span>

                                <span id="packet-buying-equivalent"
                                    class="font-semibold
                                       text-primary-400">
                                    21 Carton
                                </span>
                            </div>



                            <div class="flex items-center
                                   justify-between gap-5">
                                <span class="text-sm
                                       text-secondary-400">
                                    Intermediate Boxes:
                                </span>

                                <span id="packet-box-equivalent"
                                    class="font-semibold
                                       text-indigo-400">
                                    2,310 Inner Boxes
                                </span>
                            </div>



                            <div class="flex items-center
                                   justify-between gap-5">
                                <span class="text-sm
                                       text-secondary-400">
                                    Unit Cost Allocation:
                                </span>

                                <span id="packet-unit-cost"
                                    class="font-semibold
                                       text-emerald-400">
                                    $1.25 / Piece
                                </span>
                            </div>

                        </div>



                        {{-- information --}}
                        <div
                            class="mt-8 flex items-start gap-3
                               rounded-xl
                               bg-secondary-900
                               p-4">

                            <svg class="mt-0.5 h-5 w-5
                                   shrink-0
                                   text-emerald-400"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="9" />

                                <path stroke-linecap="round" d="M12 11v5m0-8h.01" />
                            </svg>


                            <p class="text-sm leading-6
                                   text-secondary-300">
                                POS channels automatically deduct single units
                                from this total without breaking physical stock
                                manually ahead of time.
                            </p>

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </section>


    {{-- ============================================================
    BUILT FOR WHOLESALERS & DISTRIBUTORS
============================================================ --}}

    <section id="packeting-industry-fit"
        class="relative overflow-hidden
           bg-background-muted
           py-20 sm:py-24 lg:py-28">

        {{-- subtle background glow --}}
        <div
            class="pointer-events-none absolute
               left-1/2 top-[-230px]
               h-[520px] w-[900px]
               -translate-x-1/2
               rounded-full
               bg-primary-100/35
               blur-[130px]">
        </div>


        <div class="relative mx-auto max-w-7xl
               px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="max-w-3xl">

                <p
                    class="text-[11px] font-bold
                       uppercase tracking-[0.17em]
                       text-primary-600">
                    Industry Fit
                </p>


                <h2
                    class="mt-3
                       text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-950
                       sm:text-4xl
                       lg:text-[42px]">
                    Built for wholesalers and distributors
                </h2>


                <p
                    class="mt-4 max-w-2xl
                       text-base leading-7
                       text-secondary-500">
                    This feature is especially relevant for businesses that buy
                    in bulk from manufacturers or importers and resell in smaller
                    quantities to retailers or end customers — where mismatched
                    unit conversions are a common source of stock discrepancies.
                </p>

            </div>



            {{-- ====================================================
            INDUSTRY CARDS
        ===================================================== --}}

            <div class="mt-10 grid gap-5
                   md:grid-cols-2
                   lg:grid-cols-3">

                {{-- =================================================
                FOOD & BEVERAGE
            ================================================== --}}

                <article
                    class="packeting-industry-card
                       rounded-[18px]
                       border border-secondary-200
                       bg-white/85
                       p-6
                       shadow-[0_10px_28px_rgba(15,23,42,0.03)]
                       backdrop-blur-sm">

                    <div
                        class="packeting-industry-icon
                           inline-flex h-10 w-10
                           items-center justify-center
                           rounded-lg
                           bg-primary-50
                           text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 3v7M9 3v7M6 7h3M7.5 10v11" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 3v18M16 3c3 2 3 6 0 8" />
                        </svg>
                    </div>


                    <p
                        class="mt-4
                           text-[10px] font-bold
                           uppercase tracking-[0.08em]
                           text-primary-600">
                        FMCG & Hospitality
                    </p>


                    <h3 class="mt-2 text-lg font-bold
                           text-secondary-950">
                        Food & Beverage Distributors
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Master pallets → cases → 6-packs → individual cans or
                        bottles. Perfect for cold storage and shelf-stable
                        beverage wholesalers.
                    </p>

                </article>



                {{-- =================================================
                HARDWARE / INDUSTRIAL
            ================================================== --}}

                <article
                    class="packeting-industry-card
                       rounded-[18px]
                       border border-secondary-200
                       bg-white/85
                       p-6
                       shadow-[0_10px_28px_rgba(15,23,42,0.03)]
                       backdrop-blur-sm">

                    <div
                        class="packeting-industry-icon
                           inline-flex h-10 w-10
                           items-center justify-center
                           rounded-lg
                           bg-primary-50
                           text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 4h10M9 4v5M15 4v5" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 9h10v11H7z" />
                        </svg>
                    </div>


                    <p
                        class="mt-4
                           text-[10px] font-bold
                           uppercase tracking-[0.08em]
                           text-primary-600">
                        Trade & Industrial
                    </p>


                    <h3 class="mt-2 text-lg font-bold
                           text-secondary-950">
                        Hardware & Industrial Supplies
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Master wooden crates → inner boxes of 50 → single
                        fasteners or fittings. Built for complex trade merchant
                        catalogue structures.
                    </p>

                </article>



                {{-- =================================================
                COSMETICS / RETAIL
            ================================================== --}}

                <article
                    class="packeting-industry-card
                       rounded-[18px]
                       border border-secondary-200
                       bg-white/85
                       p-6
                       shadow-[0_10px_28px_rgba(15,23,42,0.03)]
                       backdrop-blur-sm">

                    <div
                        class="packeting-industry-icon
                           inline-flex h-10 w-10
                           items-center justify-center
                           rounded-lg
                           bg-emerald-50
                           text-emerald-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3c2 3 5 4 5 8a5 5 0 11-10 0c0-4 3-5 5-8z" />

                            <path stroke-linecap="round" d="M9 12c1.5 1 4.5 1 6 0" />
                        </svg>
                    </div>


                    <p
                        class="mt-4
                           text-[10px] font-bold
                           uppercase tracking-[0.08em]
                           text-emerald-600">
                        Omnichannel Retail
                    </p>


                    <h3 class="mt-2 text-lg font-bold
                           text-secondary-950">
                        Cosmetics & Retail Importers
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Outer shipping shippers → counter display units (CDUs) →
                        individual retail units. Ensure shelf allocations mirror
                        warehouse bins.
                    </p>

                </article>

            </div>

        </div>

    </section>

    {{-- ============================================================
    PACKETING FINAL CTA
============================================================ --}}

<section
    id="packeting-final-cta"
    class="packeting-final-cta
           relative w-full overflow-hidden
           bg-secondary-800
           text-white"
>

    {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

    <div
        class="pointer-events-none absolute
               left-[-180px] top-[-120px]
               h-[430px] w-[430px]
               rounded-full
               bg-primary-500/10
               blur-[120px]">
    </div>


    <div
        class="pointer-events-none absolute
               bottom-[-170px] right-[-160px]
               h-[440px] w-[440px]
               rounded-full
               bg-primary-400/5
               blur-[130px]">
    </div>


    {{-- subtle top line --}}
    <div
        class="pointer-events-none absolute
               left-0 top-0
               h-px w-full
               bg-white/10">
    </div>



    {{-- ========================================================
        INNER CONTENT
        Only this part is constrained
    ========================================================= --}}

    <div
        class="relative mx-auto max-w-7xl
               px-6 py-20
               sm:py-24
               lg:px-8 lg:py-28"
    >

        <div
            class="mx-auto max-w-3xl text-center"
        >

            {{-- =================================================
                BADGE
            ================================================== --}}

            <div
                class="packeting-final-badge
                       inline-flex items-center gap-2
                       rounded-full
                       border border-emerald-400/20
                       bg-emerald-400/10
                       px-4 py-2"
            >

                <span
                    class="packeting-final-pulse
                           h-1.5 w-1.5
                           rounded-full
                           bg-emerald-400">
                </span>


                <span
                    class="text-[10px] font-bold
                           uppercase tracking-[0.14em]
                           text-emerald-300"
                >
                    Smart Packaging for Modern Distribution
                </span>

            </div>



            {{-- =================================================
                HEADING
            ================================================== --}}

            <h2
                class="mx-auto mt-6
                       max-w-3xl
                       text-4xl font-bold
                       leading-[1.08]
                       tracking-[-0.04em]
                       text-white
                       sm:text-5xl
                       lg:text-[50px]"
            >
                Buy in bulk. Sell however

                <span class="block">
                    your customers need.
                </span>
            </h2>



            {{-- =================================================
                DESCRIPTION
            ================================================== --}}

            <p
                class="mx-auto mt-5
                       max-w-2xl
                       text-base leading-7
                       text-secondary-300
                       sm:text-[17px]"
            >
                Let StockCore handle every carton, box, and piece conversion
                automatically while your team works from one accurate stock balance.
            </p>



            {{-- =================================================
                CTA BUTTONS
            ================================================== --}}

            <div
                class="mt-8 flex flex-col
                       items-center justify-center
                       gap-3
                       sm:flex-row"
            >

                {{-- Start Free Trial --}}
                <a
                    href="{{ url('/signup') }}"
                    class="packeting-final-btn
                           inline-flex min-h-12
                           min-w-[150px]
                           items-center justify-center
                           rounded-lg
                           bg-primary-600
                           px-6
                           text-sm font-semibold
                           text-white
                           shadow-[0_10px_28px_rgba(37,99,235,0.25)]
                           hover:bg-primary-500
                           hover:shadow-[0_14px_34px_rgba(37,99,235,0.30)]"
                >
                    Start Free Trial
                </a>



                {{-- Book Demo --}}
                <a
                    href="#book-demo"
                    class="packeting-final-btn
                           inline-flex min-h-12
                           min-w-[140px]
                           items-center justify-center
                           rounded-lg
                           border border-white/10
                           bg-secondary-700
                           px-6
                           text-sm font-semibold
                           text-white
                           hover:bg-secondary-600"
                >
                    Book a Demo
                </a>

            </div>



            {{-- =================================================
                TRUST ITEMS
            ================================================== --}}

            <div
                class="mt-7 flex flex-wrap
                       items-center justify-center
                       gap-x-5 gap-y-3
                       text-xs font-medium
                       text-secondary-300"
            >

                {{-- Trial --}}
                <div class="flex items-center gap-2">

                    <span
                        class="packeting-final-pulse
                               flex h-4 w-4
                               items-center justify-center
                               rounded-full
                               border border-emerald-400
                               text-emerald-400"
                    >
                        <svg
                            class="h-2.5 w-2.5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 13l4 4L19 7"
                            />
                        </svg>
                    </span>

                    <span>
                        14-day free trial
                    </span>

                </div>


                <span
                    class="hidden h-1 w-1
                           rounded-full
                           bg-secondary-500
                           sm:block">
                </span>



                {{-- Card --}}
                <div class="flex items-center gap-2">

                    <span
                        class="packeting-final-pulse
                               flex h-4 w-4
                               items-center justify-center
                               rounded-full
                               border border-emerald-400
                               text-emerald-400"
                        style="animation-delay: -.7s;"
                    >
                        <svg
                            class="h-2.5 w-2.5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 13l4 4L19 7"
                            />
                        </svg>
                    </span>

                    <span>
                        No credit card required
                    </span>

                </div>


                <span
                    class="hidden h-1 w-1
                           rounded-full
                           bg-secondary-500
                           sm:block">
                </span>



                {{-- Cancel --}}
                <div class="flex items-center gap-2">

                    <span
                        class="packeting-final-pulse
                               flex h-4 w-4
                               items-center justify-center
                               rounded-full
                               border border-emerald-400
                               text-emerald-400"
                        style="animation-delay: -1.4s;"
                    >
                        <svg
                            class="h-2.5 w-2.5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 13l4 4L19 7"
                            />
                        </svg>
                    </span>

                    <span>
                        Cancel anytime
                    </span>

                </div>

            </div>

        </div>

    </div>



    {{-- ========================================================
        BOTTOM DIVIDER
        Useful if footer is also dark
    ========================================================= --}}

    <div
        class="absolute bottom-0 left-0
               h-px w-full
               bg-white/50">
    </div>

</section>


    <script>
        $(function() {

            const $boxesPerCarton =
                $('#packet-boxes-per-carton');

            const $piecesPerBox =
                $('#packet-pieces-per-box');

            const $cartonSlider =
                $('#packet-carton-slider');

            const $cartonCount =
                $('#packet-carton-count');

            const $formula =
                $('#packet-active-formula');

            const $totalPieces =
                $('#packet-total-pieces');

            const $buyingEquivalent =
                $('#packet-buying-equivalent');

            const $boxEquivalent =
                $('#packet-box-equivalent');

            const $baseUnit =
                $('#packet-base-unit');

            const $buyingUnit =
                $('#packet-buying-unit');

            const $baseUnitLabel =
                $('#packet-base-unit-label');

            const $unitCost =
                $('#packet-unit-cost');


            /*
            |--------------------------------------------------------------------------
            | Fixed example base-unit cost
            |--------------------------------------------------------------------------
            */

            const baseUnitCost = 1.25;


            /*
            |--------------------------------------------------------------------------
            | Number formatting
            |--------------------------------------------------------------------------
            */

            function formatNumber(value) {

                return new Intl.NumberFormat(
                    'en-AU'
                ).format(value);

            }


            /*
            |--------------------------------------------------------------------------
            | Update Simulator
            |--------------------------------------------------------------------------
            */

            function updatePacketingSimulator() {

                /*
                |--------------------------------------------------------------------------
                | Read inputs
                |--------------------------------------------------------------------------
                */

                let boxes =
                    parseInt(
                        $boxesPerCarton.val(),
                        10
                    );

                let pieces =
                    parseInt(
                        $piecesPerBox.val(),
                        10
                    );

                let cartons =
                    parseInt(
                        $cartonSlider.val(),
                        10
                    );


                /*
                |--------------------------------------------------------------------------
                | Prevent invalid values
                |--------------------------------------------------------------------------
                */

                if (!boxes || boxes < 1) {
                    boxes = 1;
                }

                if (!pieces || pieces < 1) {
                    pieces = 1;
                }

                if (!cartons || cartons < 1) {
                    cartons = 1;
                }


                /*
                |--------------------------------------------------------------------------
                | Units
                |--------------------------------------------------------------------------
                */

                const baseUnit =
                    $baseUnit.val();

                const buyingUnit =
                    $buyingUnit.val();


                /*
                |--------------------------------------------------------------------------
                | Conversion
                |--------------------------------------------------------------------------
                */

                const piecesPerCarton =
                    boxes * pieces;

                const totalBoxes =
                    cartons * boxes;

                const totalPieces =
                    totalBoxes * pieces;


                /*
                |--------------------------------------------------------------------------
                | Formula
                |--------------------------------------------------------------------------
                */

                $formula.html(`
                1
                <span class="text-primary-600">
                    ${buyingUnit}
                </span>

                = ${formatNumber(boxes)} Boxes =

                <span class="text-emerald-600">
                    ${formatNumber(piecesPerCarton)}
                    ${baseUnit}${piecesPerCarton === 1 ? '' : 's'}
                </span>
            `);


                /*
                |--------------------------------------------------------------------------
                | Slider count
                |--------------------------------------------------------------------------
                */

                $cartonCount.text(
                    cartons
                );


                /*
                |--------------------------------------------------------------------------
                | Right-side values
                |--------------------------------------------------------------------------
                */

                $totalPieces.text(
                    formatNumber(totalPieces)
                );


                $baseUnitLabel.text(
                    baseUnit +
                    (totalPieces === 1 ? '' : 's')
                );


                $buyingEquivalent.text(
                    formatNumber(cartons) +
                    ' ' +
                    buyingUnit
                );


                $boxEquivalent.text(
                    formatNumber(totalBoxes) +
                    ' Inner Boxes'
                );


                $unitCost.text(
                    '$' +
                    baseUnitCost.toFixed(2) +
                    ' / ' +
                    baseUnit
                );


                /*
                |--------------------------------------------------------------------------
                | Slider progress
                |--------------------------------------------------------------------------
                */

                const min =
                    parseInt(
                        $cartonSlider.attr('min'),
                        10
                    );

                const max =
                    parseInt(
                        $cartonSlider.attr('max'),
                        10
                    );

                const progress =
                    ((cartons - min) /
                        (max - min)) * 100;


                $cartonSlider.css(
                    '--packet-progress',
                    progress + '%'
                );


                /*
                |--------------------------------------------------------------------------
                | Animate ONLY calculated values
                |--------------------------------------------------------------------------
                */

                const $dynamicValues = $(
                    '#packet-carton-count,' +
                    '#packet-total-pieces,' +
                    '#packet-buying-equivalent,' +
                    '#packet-box-equivalent,' +
                    '#packet-unit-cost'
                );


                $dynamicValues.removeClass(
                    'packet-value-updated'
                );


                void $dynamicValues[0].offsetWidth;


                $dynamicValues.addClass(
                    'packet-value-updated'
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Multiplier inputs
            |--------------------------------------------------------------------------
            */

            $boxesPerCarton
                .add($piecesPerBox)
                .on('input change', function() {

                    updatePacketingSimulator();

                });


            /*
            |--------------------------------------------------------------------------
            | Carton slider
            |--------------------------------------------------------------------------
            */

            $cartonSlider.on(
                'input change',
                function() {

                    updatePacketingSimulator();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Unit dropdowns
            |--------------------------------------------------------------------------
            */

            $baseUnit
                .add($buyingUnit)
                .on('change', function() {

                    updatePacketingSimulator();

                });


            /*
            |--------------------------------------------------------------------------
            | Initial State
            |--------------------------------------------------------------------------
            */

            updatePacketingSimulator();

        });
    </script>



@endsection
