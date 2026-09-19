{{-- ====================================================================== --}}
{{-- SCAN & IMPORT DOCUMENTS — HERO --}}
{{-- ====================================================================== --}}
@extends('layouts.public')

@section('title', 'Landing Cost | StockCore')

@section('content')
    <main>
        <style>
            /* =========================================================
                                               FIFO HERO
                                            ========================================================= */

            .fifo-hero {
                position: relative;
                isolation: isolate;
            }

            .fifo-hero::before {
                content: "";
                position: absolute;
                left: 50%;
                top: -280px;
                width: 950px;
                height: 650px;
                transform: translateX(-50%);
                border-radius: 9999px;
                background:
                    radial-gradient(circle,
                        rgba(59, 130, 246, 0.13) 0%,
                        rgba(219, 234, 254, 0.10) 42%,
                        rgba(248, 250, 252, 0) 72%);
                pointer-events: none;
                z-index: -1;
            }


            /* Badge */
            @keyframes fifoHeroBadgeFloat {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-3px);
                }
            }

            .fifo-hero-badge {
                animation: fifoHeroBadgeFloat 4.5s ease-in-out infinite;
            }


            /* Buttons */
            .fifo-hero-button {
                transition:
                    transform 220ms ease,
                    box-shadow 220ms ease,
                    background-color 220ms ease,
                    border-color 220ms ease;
            }

            .fifo-hero-button:hover {
                transform: translateY(-2px);
            }


            /* Trust item icon */
            @keyframes fifoHeroPulse {

                0%,
                100% {
                    opacity: 1;
                    transform: scale(1);
                }

                50% {
                    opacity: .55;
                    transform: scale(.85);
                }
            }

            .fifo-hero-pulse {
                animation: fifoHeroPulse 2.2s ease-in-out infinite;
            }

            /* =========================================================
                                               FIFO INTERACTIVE BATCH SIMULATOR
                                            ========================================================= */

            .fifo-simulator-shell {
                transition:
                    transform 280ms ease,
                    box-shadow 280ms ease,
                    border-color 280ms ease;
            }

            .fifo-simulator-shell:hover {
                transform: translateY(-2px);
                border-color: rgba(59, 130, 246, 0.2);

                box-shadow:
                    0 28px 65px rgba(15, 23, 42, 0.09);
            }


            /* ---------------------------------------------------------
                                               Batch rows
                                            --------------------------------------------------------- */

            .fifo-batch-row {
                transition:
                    opacity 350ms ease,
                    border-color 350ms ease,
                    background-color 350ms ease,
                    transform 350ms ease;
            }

            .fifo-batch-row:hover {
                transform: translateY(-2px);
            }

            .fifo-batch-row.is-current {
                border-color: rgba(59, 130, 246, 0.4);
                background: rgba(239, 246, 255, 0.65);
            }

            .fifo-batch-row.is-consumed {
                opacity: 0.42;
            }


            /* ---------------------------------------------------------
                                               Inventory progress bars
                                            --------------------------------------------------------- */

            .fifo-batch-progress {
                transition:
                    width 750ms cubic-bezier(.22, 1, .36, 1),
                    background-color 350ms ease;
            }


            /* ---------------------------------------------------------
                                               Buttons
                                            --------------------------------------------------------- */

            .fifo-sale-button {
                transition:
                    transform 200ms ease,
                    background-color 200ms ease,
                    box-shadow 200ms ease;
            }

            .fifo-sale-button:hover {
                transform: translateY(-2px);

                box-shadow:
                    0 8px 20px rgba(37, 99, 235, 0.22);
            }

            .fifo-sale-button:active {
                transform: translateY(0) scale(.97);
            }


            .fifo-reset-button {
                transition:
                    transform 220ms ease,
                    background-color 220ms ease;
            }

            .fifo-reset-button:hover {
                transform: rotate(-15deg);
                background: rgba(255, 255, 255, 0.12);
            }


            /* ---------------------------------------------------------
                                               Status pulse
                                            --------------------------------------------------------- */

            @keyframes fifoAllocationPulse {

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

            .fifo-allocation-dot {
                animation: fifoAllocationPulse 1.8s ease-in-out infinite;
            }


            /* ---------------------------------------------------------
                                               Results animation
                                            --------------------------------------------------------- */

            @keyframes fifoValueUpdate {
                0% {
                    opacity: .35;
                    transform: translateY(5px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .fifo-value-updated {
                animation: fifoValueUpdate 350ms ease-out;
            }


            /* ---------------------------------------------------------
                                               Badge float
                                            --------------------------------------------------------- */

            @keyframes fifoAllocationFloat {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-3px);
                }
            }

            .fifo-allocation-badge {
                animation: fifoAllocationFloat 4s ease-in-out infinite;
            }

            /* =========================================================
                                       FIFO PLAIN ENGLISH COMPARISON
                                    ========================================================= */

            .fifo-plain-shell {
                transition:
                    transform 280ms ease,
                    border-color 280ms ease,
                    box-shadow 280ms ease;
            }

            .fifo-plain-shell:hover {
                transform: translateY(-2px);
                border-color: rgba(59, 130, 246, 0.20);

                box-shadow:
                    0 28px 65px rgba(15, 23, 42, 0.08);
            }


            /* =========================================================
                                       CALCULATION CARDS
                                    ========================================================= */

            .fifo-method-card {
                transition:
                    transform 250ms ease,
                    border-color 250ms ease,
                    box-shadow 250ms ease;
            }

            .fifo-method-card:hover {
                transform: translateY(-3px);
            }

            .fifo-method-card.is-primary {
                border-color: #2563eb;

                box-shadow:
                    0 14px 34px rgba(37, 99, 235, 0.10);
            }


            /* =========================================================
                                       SLIDER
                                    ========================================================= */

            .fifo-units-range {
                --range-progress: 68.84%;

                width: 100%;
                height: 6px;
                appearance: none;
                -webkit-appearance: none;

                border-radius: 9999px;

                background:
                    linear-gradient(to right,
                        #2563eb 0%,
                        #2563eb var(--range-progress),
                        #e2e8f0 var(--range-progress),
                        #e2e8f0 100%);

                outline: none;
                cursor: pointer;
            }


            .fifo-units-range::-webkit-slider-thumb {
                width: 18px;
                height: 18px;

                appearance: none;
                -webkit-appearance: none;

                border: 4px solid #ffffff;
                border-radius: 9999px;

                background: #2563eb;

                box-shadow:
                    0 0 0 1px rgba(37, 99, 235, .15),
                    0 4px 10px rgba(37, 99, 235, .22);

                cursor: grab;
            }


            .fifo-units-range::-webkit-slider-thumb:active {
                cursor: grabbing;
            }


            .fifo-units-range::-moz-range-thumb {
                width: 12px;
                height: 12px;

                border: 4px solid #ffffff;
                border-radius: 9999px;

                background: #2563eb;

                box-shadow:
                    0 0 0 1px rgba(37, 99, 235, .15),
                    0 4px 10px rgba(37, 99, 235, .22);

                cursor: grab;
            }


            /* =========================================================
                                       VALUE UPDATE ANIMATION
                                    ========================================================= */

            @keyframes fifoPlainValueEnter {
                0% {
                    opacity: .35;
                    transform: translateY(4px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .fifo-plain-value-update {
                animation:
                    fifoPlainValueEnter 280ms ease-out;
            }


            /* =========================================================
                                       BADGE
                                    ========================================================= */

            @keyframes fifoPlainBadgeFloat {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-3px);
                }
            }

            .fifo-plain-badge {
                animation:
                    fifoPlainBadgeFloat 4.5s ease-in-out infinite;
            }


            /* =========================================================
                                       ALERT
                                    ========================================================= */

            .fifo-comparison-alert {
                transition:
                    border-color 220ms ease,
                    background-color 220ms ease;
            }

            /* =========================================================
                               FIFO OPERATIONAL EXCELLENCE
                            ========================================================= */

            .fifo-value-card {
                transition:
                    transform 260ms ease,
                    border-color 260ms ease,
                    box-shadow 260ms ease;
            }

            .fifo-value-card:hover {
                transform: translateY(-5px);
                border-color: rgba(59, 130, 246, 0.20);

                box-shadow:
                    0 24px 55px rgba(15, 23, 42, 0.075);
                cursor: pointer;
            }


            .fifo-value-icon {
                transition:
                    transform 240ms ease,
                    box-shadow 240ms ease;
            }

            .fifo-value-card:hover .fifo-value-icon {
                transform: translateY(-2px) scale(1.05);
            }


            .fifo-value-impact {
                transition:
                    background-color 220ms ease,
                    transform 220ms ease;
            }

            .fifo-value-card:hover .fifo-value-impact {
                transform: translateY(-2px);
                background-color: rgba(239, 246, 255, 0.9);
            }

            /* =========================================================
                           FIFO ACCOUNTING INTEGRATION
                        ========================================================= */

            .fifo-accounting-visual {
                transition:
                    transform 350ms ease,
                    filter 350ms ease;
            }

            .fifo-accounting-visual:hover {
                transform: translateY(-5px);
                filter: drop-shadow(0 28px 45px rgba(15, 23, 42, 0.12));
            }


            @keyframes fifoAccountingFloat {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-6px);
                }
            }

            .fifo-accounting-image-float {
                animation: fifoAccountingFloat 6s ease-in-out infinite;
            }


            @keyframes fifoAccountingPulse {

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

            .fifo-accounting-pulse {
                animation: fifoAccountingPulse 1.8s ease-in-out infinite;
            }

            /* =========================================================
                       FIFO RELATED FEATURES
                    ========================================================= */

            .fifo-related-card {
                transition:
                    transform 250ms ease,
                    border-color 250ms ease,
                    box-shadow 250ms ease,
                    background-color 250ms ease;
            }

            .fifo-related-card:hover {
                transform: translateY(-5px);
                border-color: rgba(59, 130, 246, 0.20);
                background-color: #ffffff;

                box-shadow:
                    0 20px 45px rgba(15, 23, 42, 0.07);
                cursor: pointer;
            }


            .fifo-related-icon {
                transition:
                    transform 220ms ease,
                    background-color 220ms ease;
            }

            .fifo-related-card:hover .fifo-related-icon {
                transform: scale(1.06);
                background-color: #dbeafe;
            }


            .fifo-related-link svg {
                transition: transform 220ms ease;
            }

            .fifo-related-link:hover svg {
                transform: translateX(4px);
            }

            /* =========================================================
               FIFO FINAL FULL-WIDTH CTA
            ========================================================= */

            .fifo-final-cta {
                position: relative;
                isolation: isolate;
            }


            /* soft blue glow behind content */
            .fifo-final-cta::before {
                content: "";
                position: absolute;
                left: 50%;
                top: -220px;
                width: 760px;
                height: 500px;
                transform: translateX(-50%);
                border-radius: 9999px;

                background: rgba(59, 130, 246, 0.12);

                filter: blur(130px);

                pointer-events: none;
                z-index: -1;
            }


            /* buttons */
            .fifo-final-cta-btn {
                transition:
                    transform 220ms ease,
                    background-color 220ms ease,
                    box-shadow 220ms ease,
                    border-color 220ms ease;
            }

            .fifo-final-cta-btn:hover {
                transform: translateY(-2px);
            }


            /* trust icon pulse */
            @keyframes fifoFinalPulse {

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

            .fifo-final-pulse {
                animation: fifoFinalPulse 1.9s ease-in-out infinite;
            }
        </style>

        {{-- ============================================================
    FIFO HERO SECTION
============================================================ --}}

        <section id="fifo-hero"
            class="fifo-hero relative overflow-hidden
           bg-background-muted
           pt-20 pb-14
           sm:pt-24 sm:pb-16
           lg:pt-28 lg:pb-20">

            {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

            <div
                class="pointer-events-none absolute
               left-[-120px] top-[100px]
               h-[380px] w-[380px]
               rounded-full
               bg-primary-100/30
               blur-[110px]">
            </div>


            <div
                class="pointer-events-none absolute
               right-[-120px] top-[60px]
               h-[420px] w-[420px]
               rounded-full
               bg-primary-100/35
               blur-[120px]">
            </div>



            <div class="relative mx-auto max-w-7xl
               px-6 text-center lg:px-8">

                {{-- ====================================================
            BADGE
        ===================================================== --}}

                <div class="flex justify-center">

                    <div
                        class="fifo-hero-badge
                       inline-flex items-center gap-2.5
                       rounded-full
                       border border-secondary-200
                       bg-white/85
                       px-4 py-2
                       shadow-[0_5px_18px_rgba(15,23,42,0.05)]
                       backdrop-blur-md">

                        <span
                            class="fifo-hero-pulse
                           h-2 w-2 rounded-full
                           bg-emerald-500">
                        </span>


                        <span
                            class="text-[11px] font-bold uppercase
                           tracking-[0.13em]
                           text-secondary-600">
                            FIFO Costing & Inventory Valuation · Core Engine
                        </span>

                    </div>

                </div>



                {{-- ====================================================
            HEADING
        ===================================================== --}}

                <h1
                    class="mx-auto mt-6 max-w-5xl
                   text-[42px] font-extrabold
                   leading-[1.02]
                   tracking-[-0.05em]
                   text-secondary-950
                   sm:text-5xl
                   md:text-6xl
                   lg:text-[64px]">
                    Accurate FIFO Inventory Valuation

                    <span class="block">
                        & Exact COGS
                    </span>
                </h1>



                {{-- ====================================================
            DESCRIPTION
        ===================================================== --}}

                <p
                    class="mx-auto mt-6 max-w-3xl
                   text-base leading-7
                   text-secondary-600
                   sm:text-lg sm:leading-8">
                    Automatically match your oldest stock costs against your latest
                    sales for bulletproof margins, precise audit-ready financial
                    reporting, and instant Xero synchronization.
                </p>



                {{-- ====================================================
            CTA BUTTONS
        ===================================================== --}}

                <div
                    class="mt-8 flex flex-col
                   items-center justify-center
                   gap-3 sm:flex-row">

                    {{-- Primary --}}
                    <a href="{{ url('/signup') }}"
                        class="fifo-hero-button
                       group inline-flex min-h-12
                       items-center justify-center gap-2.5
                       rounded-xl
                       bg-primary-600
                       px-6
                       text-sm font-semibold
                       text-white
                       shadow-[0_10px_30px_rgba(37,99,235,0.24)]
                       hover:bg-primary-700
                       hover:shadow-[0_16px_38px_rgba(37,99,235,0.30)]">
                        Start Free Trial

                        <svg class="h-4 w-4
                           transition-transform duration-200
                           group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>

                    </a>



                    {{-- Secondary --}}
                    <a href="#book-demo"
                        class="fifo-hero-button
                       inline-flex min-h-12
                       items-center justify-center gap-2.5
                       rounded-xl
                       border border-secondary-200
                       bg-white
                       px-6
                       text-sm font-semibold
                       text-secondary-800
                       shadow-[0_5px_18px_rgba(15,23,42,0.04)]
                       hover:border-primary-200
                       hover:bg-primary-50">

                        <svg class="h-4 w-4 text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="4" y="5" width="16" height="15" rx="2" />

                            <path stroke-linecap="round" d="M8 3v4M16 3v4M4 10h16" />
                        </svg>

                        Book a Demo

                    </a>

                </div>



                {{-- ====================================================
            TRUST ITEMS
        ===================================================== --}}

                <div
                    class="mt-6 flex flex-wrap
                   items-center justify-center
                   gap-x-6 gap-y-3
                   text-sm text-secondary-500">

                    {{-- item --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="fifo-hero-pulse
                           flex h-4 w-4
                           items-center justify-center
                           rounded-full
                           border border-emerald-500
                           text-emerald-600">
                            <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>

                        14-day free trial
                    </div>


                    {{-- item --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="fifo-hero-pulse
                           flex h-4 w-4
                           items-center justify-center
                           rounded-full
                           border border-emerald-500
                           text-emerald-600"
                            style="animation-delay: -.7s;">
                            <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>

                        No credit card required
                    </div>


                    {{-- item --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="fifo-hero-pulse
                           flex h-4 w-4
                           items-center justify-center
                           rounded-full
                           border border-emerald-500
                           text-emerald-600"
                            style="animation-delay: -1.4s;">
                            <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>

                        Cancel anytime
                    </div>

                </div>



            </div>

        </section>
        {{-- ============================================================
    LIVE FIFO BATCH QUEUE ENGINE
============================================================ --}}

        <section id="fifo-live-simulator" class="relative overflow-hidden bg-background py-24 sm:py-28 lg:py-32">

            {{-- Background glow --}}
            <div
                class="pointer-events-none absolute left-1/2 top-[-250px]
               h-[600px] w-[1000px]
               -translate-x-1/2 rounded-full
               bg-primary-100/35 blur-[140px]">
            </div>


            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

                {{-- ====================================================
            MAIN SIMULATOR
        ===================================================== --}}

                <div
                    class="fifo-simulator-shell
                   mx-auto max-w-5xl
                   rounded-[24px]
                   border border-secondary-200
                   bg-white
                   p-6
                   shadow-[0_22px_60px_rgba(15,23,42,0.08)]
                   sm:p-8 lg:p-10">

                    {{-- =================================================
                TOP HEADER
            ================================================== --}}

                    <div
                        class="flex flex-col gap-5
                       border-b border-secondary-200
                       pb-6
                       sm:flex-row sm:items-center
                       sm:justify-between">

                        <div>

                            <p
                                class="text-[11px] font-bold uppercase
                               tracking-[0.16em]
                               text-primary-600">
                                Interactive Simulator
                            </p>


                            <h2
                                class="mt-2 text-xl font-bold
                               tracking-[-0.02em]
                               text-secondary-950
                               sm:text-2xl">
                                Live FIFO Batch Queue Engine
                            </h2>

                        </div>



                        {{-- Real-time allocation badge --}}
                        <div
                            class="fifo-allocation-badge
                           inline-flex w-fit items-center gap-2
                           rounded-lg
                           border border-emerald-300
                           bg-emerald-50
                           px-4 py-2">

                            <span
                                class="fifo-allocation-dot
                               h-2 w-2 rounded-full
                               bg-emerald-500">
                            </span>

                            <span class="text-xs font-semibold
                               text-emerald-700">
                                Real-time Allocation
                            </span>

                        </div>

                    </div>



                    {{-- =================================================
                QUEUE HEADER
            ================================================== --}}

                    <div
                        class="mt-7 flex flex-col gap-2
                       sm:flex-row sm:items-center
                       sm:justify-between">

                        <p
                            class="text-xs font-bold uppercase
                           tracking-[0.10em]
                           text-secondary-500">
                            Batch Received Queue (Oldest First)
                        </p>


                        <p
                            class="text-xs font-bold uppercase
                           tracking-[0.08em]
                           text-secondary-500">
                            Total Inventory:

                            <span id="fifo-total-inventory" class="ml-1 text-secondary-950">
                                300 Units
                            </span>
                        </p>

                    </div>



                    {{-- =================================================
                BATCH QUEUE
            ================================================== --}}

                    <div class="mt-5 space-y-4">

                        {{-- =================================================
                    BATCH #1
                ================================================== --}}

                        <div id="fifo-batch-1"
                            class="fifo-batch-row is-current
                           rounded-xl
                           border border-primary-300
                           bg-primary-50/50
                           p-4">

                            <div class="flex flex-wrap items-center
                               justify-between gap-3">

                                <div class="flex flex-wrap items-center gap-2.5">

                                    <span
                                        class="rounded-md
                                       bg-primary-600
                                       px-2.5 py-1
                                       text-[10px] font-bold
                                       text-white">
                                        BATCH #1
                                    </span>


                                    <span
                                        class="font-mono text-xs
                                       text-secondary-500">
                                        Rec: Jan 10
                                    </span>


                                    <span
                                        class="rounded-md
                                       bg-emerald-50
                                       px-2 py-1
                                       text-[10px] font-semibold
                                       text-emerald-600">
                                        Oldest / First Out
                                    </span>

                                </div>


                                <span class="text-xs font-bold
                                   text-secondary-700">
                                    $10.00 / unit
                                </span>

                            </div>



                            {{-- Progress --}}
                            <div
                                class="mt-4 h-2 overflow-hidden
                               rounded-full bg-secondary-200">

                                <div id="fifo-progress-1"
                                    class="fifo-batch-progress
                                   h-full w-full
                                   rounded-full bg-primary-600">
                                </div>

                            </div>



                            {{-- Qty / asset --}}
                            <div class="mt-3 flex items-center
                               justify-between gap-4">

                                <span id="fifo-qty-1"
                                    class="font-mono text-xs
                                   font-semibold
                                   text-secondary-800">
                                    100 / 100 units
                                </span>


                                <span id="fifo-asset-1"
                                    class="font-mono text-xs
                                   text-secondary-500">
                                    $1000.00 Asset
                                </span>

                            </div>

                        </div>



                        {{-- =================================================
                    BATCH #2
                ================================================== --}}

                        <div id="fifo-batch-2"
                            class="fifo-batch-row
                           rounded-xl
                           border border-secondary-200
                           bg-secondary-50/60
                           p-4">

                            <div class="flex flex-wrap items-center
                               justify-between gap-3">

                                <div class="flex flex-wrap items-center gap-2.5">

                                    <span
                                        class="rounded-md
                                       bg-secondary-600
                                       px-2.5 py-1
                                       text-[10px] font-bold
                                       text-white">
                                        BATCH #2
                                    </span>


                                    <span
                                        class="font-mono text-xs
                                       text-secondary-500">
                                        Rec: Feb 14
                                    </span>

                                </div>


                                <span class="text-xs font-bold
                                   text-secondary-700">
                                    $12.00 / unit
                                </span>

                            </div>



                            <div
                                class="mt-4 h-2 overflow-hidden
                               rounded-full bg-secondary-200">

                                <div id="fifo-progress-2"
                                    class="fifo-batch-progress
                                   h-full w-full
                                   rounded-full bg-secondary-600">
                                </div>

                            </div>



                            <div class="mt-3 flex items-center
                               justify-between gap-4">

                                <span id="fifo-qty-2"
                                    class="font-mono text-xs
                                   font-semibold
                                   text-secondary-800">
                                    100 / 100 units
                                </span>


                                <span id="fifo-asset-2"
                                    class="font-mono text-xs
                                   text-secondary-500">
                                    $1200.00 Asset
                                </span>

                            </div>

                        </div>



                        {{-- =================================================
                    BATCH #3
                ================================================== --}}

                        <div id="fifo-batch-3"
                            class="fifo-batch-row
                           rounded-xl
                           border border-secondary-200
                           bg-secondary-50/60
                           p-4">

                            <div class="flex flex-wrap items-center
                               justify-between gap-3">

                                <div class="flex flex-wrap items-center gap-2.5">

                                    <span
                                        class="rounded-md
                                       bg-secondary-800
                                       px-2.5 py-1
                                       text-[10px] font-bold
                                       text-white">
                                        BATCH #3
                                    </span>


                                    <span
                                        class="font-mono text-xs
                                       text-secondary-500">
                                        Rec: Mar 02
                                    </span>

                                </div>


                                <span class="text-xs font-bold
                                   text-secondary-700">
                                    $15.00 / unit
                                </span>

                            </div>



                            <div
                                class="mt-4 h-2 overflow-hidden
                               rounded-full bg-secondary-200">

                                <div id="fifo-progress-3"
                                    class="fifo-batch-progress
                                   h-full w-full
                                   rounded-full bg-secondary-700">
                                </div>

                            </div>



                            <div class="mt-3 flex items-center
                               justify-between gap-4">

                                <span id="fifo-qty-3"
                                    class="font-mono text-xs
                                   font-semibold
                                   text-secondary-800">
                                    100 / 100 units
                                </span>


                                <span id="fifo-asset-3"
                                    class="font-mono text-xs
                                   text-secondary-500">
                                    $1500.00 Asset
                                </span>

                            </div>

                        </div>

                    </div>



                    {{-- =================================================
                SIMULATION CONTROL PANEL
            ================================================== --}}

                    <div
                        class="mt-7 rounded-[16px]
                       bg-secondary-950
                       p-5 text-white
                       sm:p-6">

                        {{-- controls --}}
                        <div
                            class="flex flex-col gap-4
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <p class="text-xs font-semibold
                               text-secondary-300">
                                Simulate Customer Order:
                            </p>



                            <div class="flex flex-wrap items-center gap-2">

                                <button type="button" data-fifo-sale="50"
                                    class="fifo-sale-button
                                   rounded-lg
                                   bg-primary-600
                                   px-4 py-2.5
                                   text-xs font-semibold
                                   text-white
                                   hover:bg-primary-500">
                                    Sell 50
                                </button>


                                <button type="button" data-fifo-sale="120"
                                    class="fifo-sale-button
                                   rounded-lg
                                   bg-primary-600
                                   px-4 py-2.5
                                   text-xs font-semibold
                                   text-white
                                   hover:bg-primary-500">
                                    Sell 120
                                </button>


                                <button type="button" data-fifo-sale="230"
                                    class="fifo-sale-button
                                   rounded-lg
                                   bg-primary-600
                                   px-4 py-2.5
                                   text-xs font-semibold
                                   text-white
                                   hover:bg-primary-500">
                                    Sell 230
                                </button>



                                {{-- RESET --}}
                                <button type="button" id="fifo-reset" aria-label="Reset FIFO simulator"
                                    class="fifo-reset-button
                                   flex h-9 w-9
                                   items-center justify-center
                                   rounded-lg
                                   bg-secondary-800
                                   text-secondary-300">

                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v5h5" />

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.5 9A7 7 0 1 1 6 16" />
                                    </svg>

                                </button>

                            </div>

                        </div>



                        {{-- divider --}}
                        <div class="my-5 h-px bg-secondary-800">
                        </div>



                        {{-- RESULTS --}}
                        <div id="fifo-order-results"
                            class="grid gap-5 text-center
                           sm:grid-cols-3">

                            {{-- SOLD --}}
                            <div>

                                <p class="text-[11px]
                                   text-secondary-400">
                                    Order Sold
                                </p>

                                <p id="fifo-order-sold"
                                    class="mt-1.5
                                   font-mono text-base
                                   font-bold text-white">
                                    0 units
                                </p>

                            </div>



                            {{-- COGS --}}
                            <div>

                                <p class="text-[11px]
                                   text-secondary-400">
                                    Exact COGS
                                </p>

                                <p id="fifo-cogs"
                                    class="mt-1.5
                                   font-mono text-base
                                   font-bold text-amber-400">
                                    $0.00
                                </p>

                            </div>



                            {{-- REMAINING --}}
                            <div>

                                <p class="text-[11px]
                                   text-secondary-400">
                                    Remaining Asset
                                </p>

                                <p id="fifo-remaining-asset"
                                    class="mt-1.5
                                   font-mono text-base
                                   font-bold text-emerald-400">
                                    $3700.00
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- ============================================================
    HOW FIFO WORKS IN PLAIN ENGLISH
============================================================ --}}

        <section id="fifo-plain-english" class="relative overflow-hidden bg-white py-24 sm:py-28 lg:py-32">

            {{-- background glow --}}
            <div
                class="pointer-events-none absolute left-1/2 top-[-260px]
               h-[620px] w-[1050px]
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

                    <p
                        class="text-[11px] font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Valuation Principles
                    </p>


                    <h2
                        class="mt-3 text-4xl font-bold
                       tracking-[-0.04em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[50px]">
                        How FIFO Works in Plain English
                    </h2>


                    <p
                        class="mx-auto mt-5 max-w-3xl
                       text-base leading-7
                       text-secondary-500
                       sm:text-[17px]">
                        Under
                        <strong class="font-bold text-secondary-800">
                            First-In, First-Out (FIFO),
                        </strong>
                        inventory sold is accounted for at the exact unit cost of
                        your oldest available stock batch. When supplier prices rise
                        over time, FIFO ensures your historical costs match your
                        revenues cleanly—preventing profit distortion and
                        over-valuing remaining assets on your balance sheet.
                    </p>

                </div>



                {{-- ====================================================
            INTERACTIVE COMPARISON
        ===================================================== --}}

                <div
                    class="fifo-plain-shell
                   mx-auto mt-14
                   max-w-6xl
                   rounded-[24px]
                   border border-secondary-200
                   bg-secondary-50/70
                   p-6
                   shadow-[0_20px_55px_rgba(15,23,42,0.06)]
                   sm:p-8 lg:p-10">

                    <div class="grid gap-6
                       lg:grid-cols-[1.1fr_.95fr_.95fr]">

                        {{-- =================================================
                    LEFT COLUMN
                ================================================== --}}

                        <div class="space-y-5">

                            {{-- INVENTORY POOL --}}
                            <div
                                class="rounded-[18px]
                               border border-secondary-200
                               bg-white
                               p-5
                               shadow-[0_8px_24px_rgba(15,23,42,0.035)]">

                                <div class="flex items-center gap-2.5">

                                    <svg class="h-5 w-5 text-primary-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 4-7 4-7-4 7-4z" />

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 11l7 4 7-4M5 15l7 4 7-4" />
                                    </svg>

                                    <h3
                                        class="text-sm font-bold
                                       text-secondary-950">
                                        Pre-Configured Inventory Pool
                                    </h3>

                                </div>


                                {{-- Batch 1 --}}
                                <div
                                    class="mt-5 flex items-center
                                   justify-between gap-4
                                   rounded-lg
                                   bg-secondary-50
                                   px-4 py-3">

                                    <span
                                        class="font-mono text-xs
                                       text-secondary-600">
                                        Batch 1:
                                        <strong class="text-secondary-900">
                                            100 units @ $10/unit
                                        </strong>
                                    </span>


                                    <span
                                        class="font-mono text-xs
                                       font-bold text-secondary-900">
                                        $1,000
                                    </span>

                                </div>


                                {{-- Batch 2 --}}
                                <div
                                    class="mt-2 flex items-center
                                   justify-between gap-4
                                   rounded-lg
                                   bg-secondary-50
                                   px-4 py-3">

                                    <span
                                        class="font-mono text-xs
                                       text-secondary-600">
                                        Batch 2:
                                        <strong class="text-secondary-900">
                                            100 units @ $12/unit
                                        </strong>
                                    </span>


                                    <span
                                        class="font-mono text-xs
                                       font-bold text-secondary-900">
                                        $1,200
                                    </span>

                                </div>


                                <div
                                    class="mt-3 flex items-center
                                   justify-between gap-4
                                   border-t border-secondary-100
                                   pt-3">

                                    <span
                                        class="font-mono text-xs
                                       font-semibold text-secondary-800">
                                        Total Available:
                                        200 units
                                    </span>


                                    <span
                                        class="font-mono text-xs
                                       font-semibold text-secondary-800">
                                        $2,200 Valuation
                                    </span>

                                </div>

                            </div>



                            {{-- SLIDER --}}
                            <div
                                class="rounded-[18px]
                               border border-secondary-200
                               bg-white
                               p-5
                               shadow-[0_8px_24px_rgba(15,23,42,0.035)]">

                                <div class="flex items-center
                                   justify-between gap-4">

                                    <label for="fifo-units-slider"
                                        class="text-sm font-bold
                                       text-secondary-950">
                                        Units Sold in Order:
                                    </label>


                                    <span id="fifo-slider-value"
                                        class="rounded-lg
                                       border border-primary-200
                                       bg-primary-50
                                       px-3 py-1.5
                                       font-mono text-lg
                                       font-bold text-primary-600">
                                        138 units
                                    </span>

                                </div>


                                <div class="mt-6">

                                    <input id="fifo-units-slider" class="fifo-units-range" type="range" min="1"
                                        max="200" value="138" step="1">

                                </div>


                                <div
                                    class="mt-4 flex items-center
                                   justify-between
                                   font-mono text-[11px]
                                   text-secondary-400">
                                    <span>1 unit</span>

                                    <span>100 units</span>

                                    <span>200 units</span>
                                </div>

                            </div>



                            {{-- ALERT --}}
                            <div id="fifo-comparison-alert"
                                class="fifo-comparison-alert
                               rounded-[16px]
                               border border-amber-300
                               bg-amber-50
                               p-4">

                                <div class="flex items-start gap-3">

                                    <svg class="mt-0.5 h-5 w-5
                                       shrink-0 text-amber-600"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <circle cx="12" cy="12" r="9" />

                                        <path stroke-linecap="round" d="M12 8v5m0 3h.01" />
                                    </svg>


                                    <p id="fifo-alert-text"
                                        class="text-xs leading-5
                                       text-amber-800">
                                        Inflation Alert: Weighted Average Cost smooths
                                        the $10 and $12 cost layers together, while
                                        FIFO preserves the actual historical batch costs.
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- =================================================
                    FIFO METHOD
                ================================================== --}}

                        <div
                            class="fifo-method-card is-primary
                           rounded-[18px]
                           border-2 border-primary-600
                           bg-white
                           p-5">

                            <div
                                class="fifo-plain-badge
                               inline-flex rounded-full
                               bg-primary-600
                               px-3 py-1
                               text-[10px] font-bold
                               uppercase tracking-[0.1em]
                               text-white">
                                StockCore FIFO Method
                            </div>


                            <p class="mt-5 text-xs
                               text-secondary-500">
                                Calculated COGS
                            </p>


                            <p id="fifo-method-cogs"
                                class="mt-1
                               font-mono
                               text-3xl font-bold
                               tracking-[-0.04em]
                               text-secondary-950">
                                $1456.00
                            </p>



                            {{-- FIFO breakdown --}}
                            <div
                                class="mt-5 rounded-xl
                               bg-secondary-50
                               p-4">

                                <p
                                    class="text-[10px] font-bold
                                   uppercase
                                   tracking-[0.10em]
                                   text-secondary-600">
                                    Step-by-Step Ledger
                                </p>


                                <div id="fifo-ledger-breakdown" class="mt-3 space-y-3">

                                    {{-- jQuery updates this --}}

                                </div>

                            </div>



                            <div
                                class="mt-5 flex items-center
                               justify-between gap-4
                               border-t border-secondary-100
                               pt-4">

                                <span class="text-xs
                                   text-secondary-500">
                                    Remaining Balance Value:
                                </span>


                                <span id="fifo-method-remaining"
                                    class="font-mono text-sm
                                   font-bold text-emerald-600">
                                    $744.00
                                </span>

                            </div>

                        </div>



                        {{-- =================================================
                    WEIGHTED AVERAGE
                ================================================== --}}

                        <div
                            class="fifo-method-card
                           rounded-[18px]
                           border border-secondary-200
                           bg-white
                           p-5">

                            <div
                                class="inline-flex rounded-full
                               bg-secondary-600
                               px-3 py-1
                               text-[10px] font-bold
                               uppercase tracking-[0.1em]
                               text-white">
                                Weighted Average Method
                            </div>


                            <p class="mt-5 text-xs
                               text-secondary-500">
                                Calculated COGS (Avg $11/unit)
                            </p>


                            <p id="average-method-cogs"
                                class="mt-1
                               font-mono
                               text-3xl font-bold
                               tracking-[-0.04em]
                               text-secondary-950">
                                $1518.00
                            </p>



                            <div
                                class="mt-5 rounded-xl
                               bg-secondary-50
                               p-4">

                                <p
                                    class="text-[10px] font-bold
                                   uppercase
                                   tracking-[0.10em]
                                   text-secondary-600">
                                    Averaged Single Calculation
                                </p>


                                <div
                                    class="mt-3 flex items-center
                                   justify-between gap-3">

                                    <span id="average-calculation"
                                        class="font-mono text-xs
                                       text-secondary-600">
                                        138 @ $11.00
                                    </span>


                                    <span id="average-calculation-total"
                                        class="font-mono text-xs
                                       font-semibold
                                       text-secondary-900">
                                        $1518.00
                                    </span>

                                </div>


                                <p class="mt-3 text-[10px]
                                   italic text-secondary-400">
                                    Blends all cost layers together
                                </p>

                            </div>



                            <div
                                class="mt-5 flex items-center
                               justify-between gap-4
                               border-t border-secondary-100
                               pt-4">

                                <span class="text-xs
                                   text-secondary-500">
                                    Remaining Balance Value:
                                </span>


                                <span id="average-method-remaining"
                                    class="font-mono text-sm
                                   font-bold text-secondary-700">
                                    $682.00
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ============================================================
    WHY PRECISION FIFO VALUATION MATTERS
============================================================ --}}

        <section id="fifo-operational-excellence"
            class="relative overflow-hidden bg-background-muted py-24 sm:py-28 lg:py-32">

            {{-- Background glow --}}
            <div
                class="pointer-events-none absolute left-1/2 top-[-260px]
               h-[600px] w-[1000px]
               -translate-x-1/2 rounded-full
               bg-primary-100/35 blur-[140px]">
            </div>


            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

                {{-- ====================================================
            HEADER
        ===================================================== --}}

                <div class="mx-auto max-w-4xl text-center">

                    <p
                        class="text-[11px] font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Operational Excellence
                    </p>


                    <h2
                        class="mt-3 text-4xl font-bold
                       tracking-[-0.04em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[50px]">
                        Why precision FIFO valuation matters
                    </h2>


                    <p
                        class="mx-auto mt-4 max-w-3xl
                       text-base leading-7
                       text-secondary-500
                       sm:text-[17px]">
                        Three structural advantages of automated chronological
                        batch costing over estimates.
                    </p>

                </div>



                {{-- ====================================================
            FEATURE GRID
        ===================================================== --}}

                <div class="mt-14 grid gap-6
                   md:grid-cols-2
                   lg:grid-cols-3">

                    {{-- =================================================
                CARD 01
                COGS / MARGINS
            ================================================== --}}

                    <article
                        class="fifo-value-card
                       flex min-h-[430px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.04)]
                       sm:p-8">

                        {{-- Icon --}}
                        <div
                            class="fifo-value-icon
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-emerald-50
                           text-emerald-600">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 16l4-4 3 3 7-8" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 7h4v4" />
                            </svg>
                        </div>



                        {{-- Badge --}}
                        <div class="mt-5">

                            <span
                                class="inline-flex items-center gap-2
                               rounded-md
                               bg-emerald-50
                               px-2.5 py-1
                               text-[10px] font-semibold
                               text-emerald-700">
                                <span class="h-1.5 w-1.5
                                   rounded-full bg-emerald-500">
                                </span>

                                0% Margin Distortion
                            </span>

                        </div>



                        {{-- Heading --}}
                        <h3
                            class="mt-4 text-2xl font-bold
                           tracking-[-0.025em]
                           text-secondary-950">
                            Accurate COGS & Margins
                        </h3>


                        <p
                            class="mt-2 text-xs font-bold uppercase
                           tracking-[0.06em]
                           text-primary-600">
                            True Profit Transparency
                        </p>



                        {{-- Description --}}
                        <p class="mt-4 text-[15px] leading-7
                           text-secondary-500">
                            Eliminate profit distortion during periods of volatile
                            supplier pricing or inflation. Know the exact gross
                            margin realised on every single SKU dispatch rather than
                            relying on blended averages.
                        </p>



                        {{-- Impact --}}
                        <div
                            class="fifo-value-impact
                           mt-auto rounded-xl
                           bg-primary-50/70
                           px-4 py-4">

                            <p class="text-xs font-medium
                               text-secondary-500">
                                Impact:
                            </p>

                            <p
                                class="mt-1.5 text-sm font-semibold
                               leading-6 text-secondary-800">
                                Protect wholesale agreements against unexpected
                                cost runups.
                            </p>

                        </div>

                    </article>



                    {{-- =================================================
                CARD 02
                LANDED COST
            ================================================== --}}

                    <article
                        class="fifo-value-card
                       flex min-h-[430px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.04)]
                       sm:p-8">

                        {{-- Icon --}}
                        <div
                            class="fifo-value-icon
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-primary-50
                           text-primary-600">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v15" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h8" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 10c0 5 2.5 8 7 8s7-3 7-8" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10" />
                            </svg>
                        </div>



                        {{-- Badge --}}
                        <div class="mt-5">

                            <span
                                class="inline-flex items-center gap-2
                               rounded-md
                               bg-primary-50
                               px-2.5 py-1
                               text-[10px] font-semibold
                               text-primary-700">
                                <span class="h-1.5 w-1.5
                                   rounded-full bg-primary-500">
                                </span>

                                100% Landed Cost Accuracy
                            </span>

                        </div>



                        <h3
                            class="mt-4 text-2xl font-bold
                           tracking-[-0.025em]
                           text-secondary-950">
                            Landed Cost Integration
                        </h3>


                        <p
                            class="mt-2 text-xs font-bold uppercase
                           tracking-[0.06em]
                           text-primary-600">
                            Complete True Cost
                        </p>



                        <p class="mt-4 text-[15px] leading-7
                           text-secondary-500">
                            Freight, customs duties, quarantine, port charges, and
                            handling fees are automatically apportioned into each
                            batch's unit cost before FIFO deduction begins.
                        </p>



                        <div
                            class="fifo-value-impact
                           mt-auto rounded-xl
                           bg-primary-50/70
                           px-4 py-4">

                            <p class="text-xs font-medium
                               text-secondary-500">
                                Impact:
                            </p>

                            <p
                                class="mt-1.5 text-sm font-semibold
                               leading-6 text-secondary-800">
                                Capture actual container import expenses without
                                manual spreadsheeting.
                            </p>

                        </div>

                    </article>



                    {{-- =================================================
                CARD 03
                AUDIT READY
            ================================================== --}}

                    <article
                        class="fifo-value-card
                       flex min-h-[430px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.04)]
                       sm:p-8">

                        {{-- Icon --}}
                        <div
                            class="fifo-value-icon
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-primary-100
                           text-primary-600">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3l7 3v5c0 5-3.2 8.6-7 10-3.8-1.4-7-5-7-10V6l7-3z" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                            </svg>
                        </div>



                        {{-- Badge --}}
                        <div class="mt-5">

                            <span
                                class="inline-flex items-center gap-2
                               rounded-md
                               bg-primary-50
                               px-2.5 py-1
                               text-[10px] font-semibold
                               text-primary-700">
                                <span class="h-1.5 w-1.5
                                   rounded-full bg-primary-500">
                                </span>

                                ATO & AASB102 Compliant
                            </span>

                        </div>



                        <h3
                            class="mt-4 text-2xl font-bold
                           tracking-[-0.025em]
                           text-secondary-950">
                            Audit-Ready Asset Valuation
                        </h3>


                        <p
                            class="mt-2 text-xs font-bold uppercase
                           tracking-[0.06em]
                           text-primary-600">
                            Tax & Financial Compliance
                        </p>



                        <p class="mt-4 text-[15px] leading-7
                           text-secondary-500">
                            Maintain strict compliance with Australian taxation
                            requirements and financial reporting standards without
                            spreadsheet formula errors or fragmented costing records.
                        </p>



                        <div
                            class="fifo-value-impact
                           mt-auto rounded-xl
                           bg-primary-50/70
                           px-4 py-4">

                            <p class="text-xs font-medium
                               text-secondary-500">
                                Impact:
                            </p>

                            <p
                                class="mt-1.5 text-sm font-semibold
                               leading-6 text-secondary-800">
                                Support external audits with detailed batch-level
                                transaction and valuation history.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </section>
        {{-- ============================================================
    FIFO → ACCOUNTING / XERO INTEGRATION
============================================================ --}}

        <section id="fifo-accounting-integration" class="relative overflow-hidden bg-background py-24 sm:py-28 lg:py-32">

            {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

            <div
                class="pointer-events-none absolute left-[-180px] top-[20%]
               h-[420px] w-[420px]
               rounded-full
               bg-primary-100/45
               blur-[130px]">
            </div>

            <div
                class="pointer-events-none absolute right-[-160px] top-[5%]
               h-[500px] w-[500px]
               rounded-full
               bg-primary-100/35
               blur-[140px]">
            </div>



            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

                <div
                    class="grid items-center gap-14
                   lg:grid-cols-[0.82fr_1.18fr]
                   lg:gap-16 xl:gap-20">

                    {{-- =================================================
                LEFT CONTENT
            ================================================== --}}

                    <div class="max-w-xl">

                        {{-- Eyebrow --}}
                        <div
                            class="inline-flex items-center gap-2
                           rounded-md
                           bg-primary-100/70
                           px-3 py-1.5">

                            <svg class="h-4 w-4 text-primary-600" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <rect x="4" y="5" width="16" height="14" rx="2" />

                                <path stroke-linecap="round" d="M8 3v4M16 3v4M4 10h16" />
                            </svg>


                            <span
                                class="text-[11px] font-bold uppercase
                               tracking-[0.14em]
                               text-primary-700">
                                Certified Ecosystem
                            </span>

                        </div>



                        {{-- Heading --}}
                        <h2
                            class="mt-5
                           text-4xl font-bold
                           leading-[1.08]
                           tracking-[-0.04em]
                           text-secondary-950
                           sm:text-5xl
                           lg:text-[48px]">
                            Feeds directly into your

                            <span class="block">
                                accounting
                            </span>
                        </h2>



                        {{-- Description --}}
                        <p
                            class="mt-5 max-w-lg
                           text-base leading-7
                           text-secondary-500
                           sm:text-[17px]">
                            FIFO-costed cost of goods sold and stock valuation sync
                            automatically into Xero, so financial reports and the
                            balance sheet inventory value always match what's actually
                            happening in stock — no manual journal entries or
                            reconciliation.
                        </p>



                        {{-- Trust / audit indicator --}}
                        <div class="mt-6 flex items-center gap-2.5">

                            <span
                                class="fifo-accounting-pulse
                               flex h-5 w-5
                               items-center justify-center
                               rounded-full
                               border border-emerald-500
                               text-emerald-600">
                                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>


                            <span class="text-sm font-semibold
                               text-secondary-700">
                                100% Tax & ATO compliant ledger audit trail
                            </span>

                        </div>

                    </div>



                    {{-- =================================================
                RIGHT IMAGE
            ================================================== --}}

                    <div class="relative mx-auto w-full
                       max-w-[760px]">

                        {{-- soft image glow --}}
                        <div
                            class="pointer-events-none absolute
                           left-1/2 top-1/2
                           h-[85%] w-[85%]
                           -translate-x-1/2 -translate-y-1/2
                           rounded-full
                           bg-primary-200/25
                           blur-[70px]">
                        </div>


                        <div class="fifo-accounting-image-float
                           relative z-10">

                            <img src="{{ asset('images/features/fifo-xero-sync.webp') }}"
                                alt="StockCore FIFO costing automatically syncing cost of goods sold and inventory valuation into Xero"
                                class="fifo-accounting-visual
                               h-auto w-full
                               object-contain
                               drop-shadow-[0_20px_35px_rgba(15,23,42,0.08)]">

                        </div>

                    </div>

                </div>

            </div>

        </section>
        {{-- ============================================================
    FIFO RELATED FEATURES
============================================================ --}}

        <section id="fifo-related-features" class="relative overflow-hidden bg-primary-50/60 py-20 sm:py-24 lg:py-28">

            {{-- Soft background glow --}}
            <div
                class="pointer-events-none absolute left-1/2 top-[-220px]
               h-[500px] w-[900px]
               -translate-x-1/2
               rounded-full
               bg-primary-100/35
               blur-[130px]">
            </div>


            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

                {{-- ====================================================
            HEADER
        ===================================================== --}}

                <div class="max-w-3xl">

                    <p
                        class="text-[11px] font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Unified Architecture
                    </p>


                    <h2
                        class="mt-3 text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-950
                       sm:text-4xl">
                        Works together with
                    </h2>

                </div>



                {{-- ====================================================
            CARDS
        ===================================================== --}}

                <div class="mt-10 grid gap-5
                   md:grid-cols-2
                   lg:grid-cols-3">

                    {{-- =================================================
                LANDING COST
            ================================================== --}}

                    <article
                        class="fifo-related-card
                       flex min-h-[260px] flex-col
                       rounded-[20px]
                       border border-primary-100
                       bg-primary-50/70
                       p-6
                       sm:p-7">

                        <div
                            class="fifo-related-icon
                           flex h-11 w-11
                           items-center justify-center
                           rounded-xl
                           bg-primary-100
                           text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 4h12v16H6z" />

                                <path stroke-linecap="round" d="M9 8h6M9 12h6M9 16h3" />
                            </svg>
                        </div>


                        <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                            Landing Cost
                        </h3>


                        <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                            Calculate true per-unit cost by factoring ocean freight,
                            customs, and drayage into every FIFO layer.
                        </p>


                        <div class="mt-auto pt-6">

                            <a href="{{ url('/features/landing-cost') }}"
                                class="fifo-related-link
                               inline-flex items-center gap-2
                               text-xs font-semibold
                               text-primary-600
                               hover:text-primary-700">
                                Learn more

                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                                </svg>
                            </a>

                        </div>

                    </article>



                    {{-- =================================================
                STOCK DECREASE TRACKING
            ================================================== --}}

                    <article
                        class="fifo-related-card
                       flex min-h-[260px] flex-col
                       rounded-[20px]
                       border border-primary-100
                       bg-primary-50/70
                       p-6
                       sm:p-7">

                        <div
                            class="fifo-related-icon
                           flex h-11 w-11
                           items-center justify-center
                           rounded-xl
                           bg-primary-100
                           text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="5" y="3" width="14" height="18" rx="2" />

                                <path stroke-linecap="round" d="M8 7h8M8 11h8M8 15h5" />
                            </svg>
                        </div>


                        <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                            Stock / Product Decrease Tracking
                        </h3>


                        <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                            Decrement available stock balances and deplete FIFO layers
                            the exact second an order dispatches.
                        </p>


                        <div class="mt-auto pt-6">

                            <a href="{{ url('/features/stock-tracking') }}"
                                class="fifo-related-link
                               inline-flex items-center gap-2
                               text-xs font-semibold
                               text-primary-600
                               hover:text-primary-700">
                                Learn more

                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                                </svg>
                            </a>

                        </div>

                    </article>



                    {{-- =================================================
                SERIAL / EXPIRY TRACKING
            ================================================== --}}

                    <article
                        class="fifo-related-card
                       flex min-h-[260px] flex-col
                       rounded-[20px]
                       border border-primary-100
                       bg-primary-50/70
                       p-6
                       sm:p-7">

                        <div
                            class="fifo-related-icon
                           flex h-11 w-11
                           items-center justify-center
                           rounded-xl
                           bg-primary-100
                           text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 4h14v16H5z" />

                                <path stroke-linecap="round" d="M8 8h8M8 12h8" />

                                <circle cx="9" cy="16" r="1.5" />
                                <circle cx="15" cy="16" r="1.5" />
                            </svg>
                        </div>


                        <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                            Serial / Expiry Tracking
                        </h3>


                        <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                            Trace specific unit serials and batch expiry dates directly
                            mapped to individual FIFO cost layers.
                        </p>


                        <div class="mt-auto pt-6">

                            <a href="{{ url('/features/serial-expiry-tracking') }}"
                                class="fifo-related-link
                               inline-flex items-center gap-2
                               text-xs font-semibold
                               text-primary-600
                               hover:text-primary-700">
                                Learn more

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
    FIFO FINAL CTA
============================================================ --}}

        <section id="fifo-final-cta"
            class="fifo-final-cta relative w-full
           overflow-hidden
           bg-secondary-800
           text-white">

            {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

            <div
                class="pointer-events-none absolute
               left-[-180px] top-[-120px]
               h-[420px] w-[420px]
               rounded-full
               bg-primary-500/10
               blur-[120px]">
            </div>


            <div
                class="pointer-events-none absolute
               right-[-160px] bottom-[-180px]
               h-[460px] w-[460px]
               rounded-full
               bg-primary-400/5
               blur-[130px]">
            </div>



            {{-- ========================================================
        CONTENT
    ========================================================= --}}

            <div
                class="relative mx-auto max-w-7xl
               px-6 py-20
               sm:py-24
               lg:px-8 lg:py-28">

                <div class="mx-auto max-w-3xl text-center">

                    {{-- Heading --}}
                    <h2
                        class="text-4xl font-bold
                       tracking-[-0.04em]
                       text-white
                       sm:text-5xl
                       lg:text-[50px]">
                        Get financial reports you can trust
                    </h2>



                    {{-- Description --}}
                    <p
                        class="mx-auto mt-5 max-w-2xl
                       text-base leading-7
                       text-secondary-300
                       sm:text-[17px]">
                        Start your free trial and see accurate FIFO-based cost of
                        goods sold from your very first sale.
                    </p>



                    {{-- =================================================
                CTA BUTTONS
            ================================================== --}}

                    <div
                        class="mt-8 flex flex-col
                       items-center justify-center
                       gap-3 sm:flex-row">

                        {{-- Primary --}}
                        <a href="{{ url('/signup') }}"
                            class="fifo-final-cta-btn
                           inline-flex min-h-12
                           min-w-[150px]
                           items-center justify-center
                           rounded-lg
                           bg-primary-600
                           px-6
                           text-sm font-semibold
                           text-white
                           shadow-[0_10px_26px_rgba(37,99,235,0.24)]
                           hover:bg-primary-500
                           hover:shadow-[0_14px_32px_rgba(37,99,235,0.30)]">
                            Start Free Trial
                        </a>



                        {{-- Secondary --}}
                        <a href="#"
                            class="fifo-final-cta-btn
                           inline-flex min-h-12
                           min-w-[140px]
                           items-center justify-center
                           rounded-lg
                           border border-white/15
                           bg-white
                           px-6
                           text-sm font-semibold
                           text-secondary-900
                           shadow-[0_8px_20px_rgba(2,6,23,0.14)]
                           hover:bg-secondary-100">
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
                       text-secondary-300">

                        {{-- Trial --}}
                        <div class="flex items-center gap-2">

                            <span
                                class="fifo-final-pulse
                               flex h-4 w-4
                               items-center justify-center
                               rounded-full
                               border border-emerald-400
                               text-emerald-400">
                                <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>

                            <span>
                                14-day free trial
                            </span>

                        </div>



                        {{-- separator --}}
                        <span
                            class="hidden h-1 w-1
                           rounded-full
                           bg-secondary-500
                           sm:block">
                        </span>



                        {{-- Card --}}
                        <div class="flex items-center gap-2">

                            <span
                                class="fifo-final-pulse
                               flex h-4 w-4
                               items-center justify-center
                               rounded-full
                               border border-emerald-400
                               text-emerald-400"
                                style="animation-delay: -.7s;">
                                <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>

                            <span>
                                No credit card required
                            </span>

                        </div>



                        {{-- separator --}}
                        <span
                            class="hidden h-1 w-1
                           rounded-full
                           bg-secondary-500
                           sm:block">
                        </span>



                        {{-- Australian data sovereignty --}}
                        <div class="flex items-center gap-2">

                            <span
                                class="flex h-4 w-4
                               items-center justify-center
                               rounded-full
                               border border-primary-300
                               text-primary-300">
                                <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3l7 3v5c0 5-3.2 8.6-7 10-3.8-1.4-7-5-7-10V6l7-3z" />
                                </svg>
                            </span>

                            <span>
                                Australian data sovereignty
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ========================================================
        WHITE BOTTOM DIVIDER
        Prevents dark CTA + dark footer from visually merging
    ========================================================= --}}

            <div class="absolute bottom-0 left-0
               h-px w-full
               bg-white/70">
            </div>

        </section>



    </main>


    <script>
        $(function() {

            /*
            |--------------------------------------------------------------------------
            | FIFO Batch Configuration
            |--------------------------------------------------------------------------
            |
            | Each click simulates a NEW order against the original stock state.
            | This matches the Stitch interaction:
            |
            | Sell 50  -> starts from 300
            | Sell 120 -> starts from 300
            | Sell 230 -> starts from 300
            |
            */

            const fifoBatches = [{
                    id: 1,
                    quantity: 100,
                    cost: 10
                },
                {
                    id: 2,
                    quantity: 100,
                    cost: 12
                },
                {
                    id: 3,
                    quantity: 100,
                    cost: 15
                }
            ];


            /*
            |--------------------------------------------------------------------------
            | Calculate FIFO
            |--------------------------------------------------------------------------
            */

            function calculateFIFO(saleQuantity) {

                let quantityToAllocate = saleQuantity;
                let cogs = 0;

                const result = fifoBatches.map(function(batch) {

                    const originalQuantity = batch.quantity;

                    let consumed = 0;


                    /*
                    |--------------------------------------------------------------------------
                    | Consume oldest batch first
                    |--------------------------------------------------------------------------
                    */

                    if (quantityToAllocate > 0) {

                        consumed = Math.min(
                            originalQuantity,
                            quantityToAllocate
                        );

                        quantityToAllocate -= consumed;
                    }


                    const remaining =
                        originalQuantity - consumed;


                    const remainingAsset =
                        remaining * batch.cost;


                    cogs +=
                        consumed * batch.cost;


                    return {
                        id: batch.id,
                        originalQuantity: originalQuantity,
                        consumed: consumed,
                        remaining: remaining,
                        cost: batch.cost,
                        remainingAsset: remainingAsset
                    };

                });


                /*
                |--------------------------------------------------------------------------
                | Remaining asset value
                |--------------------------------------------------------------------------
                */

                const remainingAsset = result.reduce(
                    function(total, batch) {
                        return total + batch.remainingAsset;
                    },
                    0
                );


                /*
                |--------------------------------------------------------------------------
                | Remaining total quantity
                |--------------------------------------------------------------------------
                */

                const totalInventory = result.reduce(
                    function(total, batch) {
                        return total + batch.remaining;
                    },
                    0
                );


                return {
                    batches: result,
                    sold: saleQuantity,
                    cogs: cogs,
                    remainingAsset: remainingAsset,
                    totalInventory: totalInventory
                };

            }


            /*
            |--------------------------------------------------------------------------
            | Render Simulator State
            |--------------------------------------------------------------------------
            */

            function renderFIFO(result) {

                /*
                |--------------------------------------------------------------------------
                | Find oldest batch that still contains stock
                |--------------------------------------------------------------------------
                */

                let currentBatchFound = false;


                result.batches.forEach(function(batch) {

                    const batchId = batch.id;

                    const $row =
                        $('#fifo-batch-' + batchId);

                    const $progress =
                        $('#fifo-progress-' + batchId);

                    const $quantity =
                        $('#fifo-qty-' + batchId);

                    const $asset =
                        $('#fifo-asset-' + batchId);


                    /*
                    |--------------------------------------------------------------------------
                    | Remaining percentage
                    |--------------------------------------------------------------------------
                    */

                    const percentage =
                        (batch.remaining / batch.originalQuantity) * 100;


                    $progress.css(
                        'width',
                        percentage + '%'
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | Quantity
                    |--------------------------------------------------------------------------
                    */

                    $quantity.text(
                        batch.remaining +
                        ' / ' +
                        batch.originalQuantity +
                        ' units'
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | Asset value
                    |--------------------------------------------------------------------------
                    */

                    $asset.text(
                        '$' +
                        batch.remainingAsset.toFixed(2) +
                        ' Asset'
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | Row appearance
                    |--------------------------------------------------------------------------
                    */

                    $row.removeClass(
                        'is-current is-consumed'
                    );


                    if (batch.remaining === 0) {

                        $row.addClass(
                            'is-consumed'
                        );

                    } else if (!currentBatchFound) {

                        /*
                        |--------------------------------------------------------------------------
                        | This is now the oldest available FIFO layer
                        |--------------------------------------------------------------------------
                        */

                        $row.addClass(
                            'is-current'
                        );

                        currentBatchFound = true;

                    }

                });


                /*
                |--------------------------------------------------------------------------
                | Totals
                |--------------------------------------------------------------------------
                */

                $('#fifo-total-inventory').text(
                    result.totalInventory + ' Units'
                );


                $('#fifo-order-sold').text(
                    result.sold + ' units'
                );


                $('#fifo-cogs').text(
                    '$' + result.cogs.toFixed(2)
                );


                $('#fifo-remaining-asset').text(
                    '$' + result.remainingAsset.toFixed(2)
                );


                /*
                |--------------------------------------------------------------------------
                | Animate totals
                |--------------------------------------------------------------------------
                */

                const $results =
                    $('#fifo-order-results');


                $results.removeClass(
                    'fifo-value-updated'
                );


                void $results[0].offsetWidth;


                $results.addClass(
                    'fifo-value-updated'
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Sale Button
            |--------------------------------------------------------------------------
            */

            $('[data-fifo-sale]').on('click', function() {

                const saleQuantity =
                    parseInt(
                        $(this).attr('data-fifo-sale'),
                        10
                    );


                const result =
                    calculateFIFO(saleQuantity);


                renderFIFO(result);

            });


            /*
            |--------------------------------------------------------------------------
            | Reset
            |--------------------------------------------------------------------------
            */

            $('#fifo-reset').on('click', function() {

                const resetResult =
                    calculateFIFO(0);


                renderFIFO(resetResult);

            });


            /*
            |--------------------------------------------------------------------------
            | Initial State
            |--------------------------------------------------------------------------
            */

            renderFIFO(
                calculateFIFO(0)
            );

        });
        $(function() {

            /*
            |--------------------------------------------------------------------------
            | FIFO Plain-English Comparison
            |--------------------------------------------------------------------------
            */

            const $slider =
                $('#fifo-units-slider');

            const $sliderValue =
                $('#fifo-slider-value');

            const $fifoCogs =
                $('#fifo-method-cogs');

            const $fifoRemaining =
                $('#fifo-method-remaining');

            const $fifoLedger =
                $('#fifo-ledger-breakdown');

            const $averageCogs =
                $('#average-method-cogs');

            const $averageRemaining =
                $('#average-method-remaining');

            const $averageCalculation =
                $('#average-calculation');

            const $averageCalculationTotal =
                $('#average-calculation-total');

            const $alertText =
                $('#fifo-alert-text');


            /*
            |--------------------------------------------------------------------------
            | Inventory Configuration
            |--------------------------------------------------------------------------
            */

            const batch1Quantity = 100;
            const batch1Cost = 10;

            const batch2Quantity = 100;
            const batch2Cost = 12;

            const totalQuantity =
                batch1Quantity + batch2Quantity;

            const totalValue =
                (batch1Quantity * batch1Cost) +
                (batch2Quantity * batch2Cost);

            const weightedAverageCost =
                totalValue / totalQuantity;


            /*
            |--------------------------------------------------------------------------
            | Currency Helper
            |--------------------------------------------------------------------------
            */

            function money(value) {

                return '$' +
                    Number(value).toFixed(2);

            }


            /*
            |--------------------------------------------------------------------------
            | Calculate FIFO
            |--------------------------------------------------------------------------
            */

            function calculateFIFO(unitsSold) {

                let remainingToAllocate =
                    unitsSold;

                const batch1Used =
                    Math.min(
                        remainingToAllocate,
                        batch1Quantity
                    );

                remainingToAllocate -=
                    batch1Used;


                const batch2Used =
                    Math.min(
                        remainingToAllocate,
                        batch2Quantity
                    );


                const batch1COGS =
                    batch1Used * batch1Cost;

                const batch2COGS =
                    batch2Used * batch2Cost;


                const fifoCOGS =
                    batch1COGS + batch2COGS;


                const batch1Remaining =
                    batch1Quantity - batch1Used;

                const batch2Remaining =
                    batch2Quantity - batch2Used;


                const fifoRemainingValue =
                    (batch1Remaining * batch1Cost) +
                    (batch2Remaining * batch2Cost);


                return {
                    batch1Used: batch1Used,
                    batch2Used: batch2Used,

                    batch1COGS: batch1COGS,
                    batch2COGS: batch2COGS,

                    fifoCOGS: fifoCOGS,
                    fifoRemainingValue: fifoRemainingValue
                };

            }


            /*
            |--------------------------------------------------------------------------
            | Render FIFO Ledger
            |--------------------------------------------------------------------------
            */

            function renderFIFOLedger(result) {

                let html = '';


                /*
                |--------------------------------------------------------------------------
                | Batch 1 Allocation
                |--------------------------------------------------------------------------
                */

                if (result.batch1Used > 0) {

                    html += `
                    <div
                        class="flex items-center
                               justify-between gap-3"
                    >
                        <span
                            class="font-mono text-xs
                                   text-secondary-600"
                        >
                            ${result.batch1Used}
                            @ $10.00
                        </span>

                        <span
                            class="font-mono text-xs
                                   font-semibold
                                   text-secondary-800"
                        >
                            ${money(result.batch1COGS)}
                        </span>
                    </div>
                `;

                }


                /*
                |--------------------------------------------------------------------------
                | Batch 2 Allocation
                |--------------------------------------------------------------------------
                */

                if (result.batch2Used > 0) {

                    html += `
                    <div
                        class="flex items-center
                               justify-between gap-3"
                    >
                        <span
                            class="font-mono text-xs
                                   text-secondary-600"
                        >
                            ${result.batch2Used}
                            @ $12.00
                        </span>

                        <span
                            class="font-mono text-xs
                                   font-semibold
                                   text-secondary-800"
                        >
                            ${money(result.batch2COGS)}
                        </span>
                    </div>
                `;

                }


                $fifoLedger.html(html);

            }


            /*
            |--------------------------------------------------------------------------
            | Animate changed values
            |--------------------------------------------------------------------------
            */

            function animateValues() {

                const $values = $(
                    '#fifo-method-cogs,' +
                    '#fifo-method-remaining,' +
                    '#average-method-cogs,' +
                    '#average-method-remaining,' +
                    '#fifo-slider-value'
                );


                $values.removeClass(
                    'fifo-plain-value-update'
                );


                void $values[0].offsetWidth;


                $values.addClass(
                    'fifo-plain-value-update'
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Update Simulator
            |--------------------------------------------------------------------------
            */

            function updateComparison() {

                const unitsSold =
                    parseInt(
                        $slider.val(),
                        10
                    );


                /*
                |--------------------------------------------------------------------------
                | Slider visual progress
                |--------------------------------------------------------------------------
                */

                const min =
                    parseInt(
                        $slider.attr('min'),
                        10
                    );

                const max =
                    parseInt(
                        $slider.attr('max'),
                        10
                    );

                const progress =
                    ((unitsSold - min) /
                        (max - min)) * 100;


                $slider.css(
                    '--range-progress',
                    progress + '%'
                );


                /*
                |--------------------------------------------------------------------------
                | Slider label
                |--------------------------------------------------------------------------
                */

                $sliderValue.text(
                    unitsSold + ' units'
                );


                /*
                |--------------------------------------------------------------------------
                | FIFO Calculation
                |--------------------------------------------------------------------------
                */

                const fifo =
                    calculateFIFO(unitsSold);


                $fifoCogs.text(
                    money(fifo.fifoCOGS)
                );


                $fifoRemaining.text(
                    money(
                        fifo.fifoRemainingValue
                    )
                );


                renderFIFOLedger(fifo);


                /*
                |--------------------------------------------------------------------------
                | Weighted Average Calculation
                |--------------------------------------------------------------------------
                */

                const averageCOGS =
                    unitsSold *
                    weightedAverageCost;


                const remainingUnits =
                    totalQuantity -
                    unitsSold;


                const averageRemaining =
                    remainingUnits *
                    weightedAverageCost;


                $averageCogs.text(
                    money(averageCOGS)
                );


                $averageRemaining.text(
                    money(averageRemaining)
                );


                $averageCalculation.text(
                    unitsSold +
                    ' @ ' +
                    money(weightedAverageCost)
                );


                $averageCalculationTotal.text(
                    money(averageCOGS)
                );


                /*
                |--------------------------------------------------------------------------
                | Dynamic comparison message
                |--------------------------------------------------------------------------
                */

                const difference =
                    averageCOGS -
                    fifo.fifoCOGS;


                if (difference > 0.01) {

                    $alertText.html(
                        'Inflation Alert: Weighted Average Cost reports ' +
                        '<strong>' +
                        money(difference) +
                        '</strong> more COGS for this sale because it blends ' +
                        'the newer $12 cost layer into the calculation. ' +
                        'FIFO preserves the actual oldest-stock cost sequence.'
                    );

                } else if (difference < -0.01) {

                    $alertText.html(
                        'Costing Difference: FIFO currently reports ' +
                        '<strong>' +
                        money(Math.abs(difference)) +
                        '</strong> more COGS because the sale has progressed ' +
                        'further into the newer cost layer.'
                    );

                } else {

                    $alertText.text(
                        'At this quantity both methods currently produce the same total COGS.'
                    );

                }


                animateValues();

            }


            /*
            |--------------------------------------------------------------------------
            | Slider Interaction
            |--------------------------------------------------------------------------
            */

            $slider.on(
                'input change',
                function() {

                    updateComparison();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Initial State
            |--------------------------------------------------------------------------
            */

            updateComparison();

        });
    </script>
@endsection
