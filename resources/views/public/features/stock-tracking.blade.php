@extends('layouts.public') {{-- Or your main layout file --}}

@section('title', 'Real-Time Stock & Product Decrease Tracking')



@section('content')

    {{-- =========================================================
    STOCK / PRODUCT DECREASE TRACKING HERO
========================================================= --}}

    <style>
        /* =========================================================
                                                    FLOATING ANIMATIONS
                                                ========================================================= */

        @keyframes stockFloatOne {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        @keyframes stockFloatTwo {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(10px);
            }
        }

        @keyframes stockFloatThree {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .stock-float-one {
            animation: stockFloatOne 5s ease-in-out infinite;
        }

        .stock-float-two {
            animation: stockFloatTwo 6s ease-in-out infinite;
            animation-delay: -1.5s;
        }

        .stock-float-three {
            animation: stockFloatThree 5.5s ease-in-out infinite;
            animation-delay: -2.5s;
        }

        /* Main visual slightly floats too */
        @keyframes stockMainFloat {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        .stock-main-visual {
            animation: stockMainFloat 7s ease-in-out infinite;
        }

        @keyframes stockScenarioEnter {
            0% {
                opacity: 0;
                transform: translateY(12px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stock-scenario-enter {
            animation: stockScenarioEnter 420ms cubic-bezier(.22, 1, .36, 1);
        }

        .stock-scenario-tab {
            transition:
                background-color 250ms ease,
                color 250ms ease,
                box-shadow 250ms ease,
                transform 250ms ease;
        }

        .stock-scenario-tab:hover {
            transform: translateY(-1px);
        }

        .precision-feature-card {
            transition:
                transform 300ms ease,
                box-shadow 300ms ease,
                border-color 300ms ease;
        }

        .precision-feature-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.22);
            box-shadow: 0 24px 55px rgba(15, 23, 42, 0.08);
        }

        @keyframes stockPulse {

            0%,
            100% {
                opacity: 0.55;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.15);
            }
        }

        .stock-pulse {
            animation: stockPulse 2.3s ease-in-out infinite;
        }


        .precision-feature-card {
            transition:
                transform 300ms ease,
                box-shadow 300ms ease,
                border-color 300ms ease;
        }

        .precision-feature-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.22);
            box-shadow: 0 24px 55px rgba(15, 23, 42, 0.08);
        }

        @keyframes stockPulse {

            0%,
            100% {
                opacity: 0.55;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.15);
            }
        }

        .stock-pulse {
            animation: stockPulse 2.3s ease-in-out infinite;
        }

        /* =========================================================
                                STEP CARD ANIMATION
                            ========================================================= */

        .stock-process-card {
            transition:
                transform 250ms ease,
                background-color 250ms ease,
                color 250ms ease,
                border-color 250ms ease,
                box-shadow 250ms ease;
        }

        .stock-process-card:hover {
            transform: translateY(-3px);
        }

        .stock-process-card.is-active {
            background: #2563eb;
            border-color: #2563eb;
            color: white;
            box-shadow: 0 18px 40px rgba(37, 99, 235, 0.22);
            transform: translateY(-4px);
        }

        .stock-process-card.is-active .step-label,
        .stock-process-card.is-active .step-description,
        .stock-process-card.is-active .step-meta {
            color: rgba(255, 255, 255, 0.75);
        }

        .stock-process-card.is-active .step-title {
            color: white;
        }

        .stock-process-card.is-active .step-icon {
            background: rgba(255, 255, 255, 0.14);
            color: white;
        }

        .stock-process-card.is-active .step-footer {
            background: rgba(255, 255, 255, 0.12);
            color: white;
        }


        /* =========================================================
                                BOTTOM PANEL ANIMATION
                            ========================================================= */

        @keyframes processContentEnter {
            0% {
                opacity: 0;
                transform: translateY(7px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .process-content-enter {
            animation: processContentEnter 350ms cubic-bezier(.22, 1, .36, 1);
        }

        /* =========================================================
                           INVENTORY AVAILABILITY SECTION
                        ========================================================= */

        @keyframes inventorySyncRotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .inventory-sync-icon {
            animation: inventorySyncRotate 2.8s linear infinite;
            transform-origin: center;
        }


        /* Table row interaction */
        .inventory-availability-row {
            transition:
                background-color 220ms ease,
                transform 220ms ease;
        }

        .inventory-availability-row:hover {
            background-color: rgba(239, 246, 255, 0.65);
        }


        /* Live sync pulse */
        @keyframes inventoryLivePulse {

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

        .inventory-live-dot {
            animation: inventoryLivePulse 1.8s ease-in-out infinite;
        }


        /* Slowly floating sync badge */
        @keyframes syncBadgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        .inventory-sync-badge {
            animation: syncBadgeFloat 4s ease-in-out infinite;
        }

        /* =========================================================
                   MOVEMENT ENGINE SECTION
                ========================================================= */

        @keyframes enginePulse {

            0%,
            100% {
                opacity: .35;
                transform: scale(.85);
            }

            50% {
                opacity: 1;
                transform: scale(1.15);
            }
        }

        .engine-pulse-dot {
            animation: enginePulse 1.8s ease-in-out infinite;
        }


        @keyframes flowDot {
            0% {
                left: 0%;
                opacity: 0;
            }

            15% {
                opacity: 1;
            }

            85% {
                opacity: 1;
            }

            100% {
                left: calc(100% - 8px);
                opacity: 0;
            }
        }

        .engine-flow-dot {
            position: absolute;
            top: 50%;
            width: 7px;
            height: 7px;
            border-radius: 9999px;
            transform: translateY(-50%);
            animation: flowDot 2.2s linear infinite;
        }

        .engine-flow-dot.delay-one {
            animation-delay: .7s;
        }

        .engine-flow-dot.delay-two {
            animation-delay: 1.4s;
        }


        @keyframes engineFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .engine-card-float {
            animation: engineFloat 5s ease-in-out infinite;
        }


        .movement-trigger-card,
        .movement-ledger-row {
            transition:
                background-color 220ms ease,
                border-color 220ms ease,
                transform 220ms ease;
        }

        .movement-trigger-card:hover {
            transform: translateX(4px);
            border-color: rgba(96, 165, 250, .35);
            background: rgba(51, 65, 85, .82);
            cursor: pointer;
        }

        .movement-ledger-row:hover {
            background: rgba(59, 130, 246, .08);
            cursor: pointer;
        }


        @keyframes liveBlink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .3;
            }
        }

        .ledger-live-dot {
            animation: liveBlink 1.6s ease-in-out infinite;
        }

        /* =========================================================
                   AUTOMATIC TRACKING BENEFITS
                ========================================================= */

        .tracking-benefit-row {
            transition:
                transform 280ms ease,
                box-shadow 280ms ease,
                border-color 280ms ease;
        }

        .tracking-benefit-row:hover {
            transform: translateY(-4px);
            border-color: rgba(59, 130, 246, 0.18);
            box-shadow: 0 22px 50px rgba(15, 23, 42, 0.07);
            cursor: pointer;
        }


        /* Metric glow */
        @keyframes metricGlow {

            0%,
            100% {
                box-shadow: 0 0 0 rgba(37, 99, 235, 0);
            }

            50% {
                box-shadow: 0 0 26px rgba(37, 99, 235, 0.10);
            }
        }

        .tracking-metric {
            animation: metricGlow 4s ease-in-out infinite;
        }


        /* Green live status dot */
        @keyframes benefitPulse {

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

        .benefit-live-dot {
            animation: benefitPulse 1.8s ease-in-out infinite;
        }


        /* Slight float for oversell widget */
        @keyframes benefitFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        .benefit-float {
            animation: benefitFloat 5s ease-in-out infinite;
        }

        /* =========================================================
               CONNECTED ECOSYSTEM SECTION
            ========================================================= */

        @keyframes integrationFlow {
            0% {
                left: 0;
                opacity: 0;
            }

            15% {
                opacity: 1;
            }

            85% {
                opacity: 1;
            }

            100% {
                left: calc(100% - 7px);
                opacity: 0;
            }
        }

        .integration-flow-dot {
            position: absolute;
            top: 50%;
            width: 7px;
            height: 7px;
            border-radius: 9999px;
            transform: translateY(-50%);
            animation: integrationFlow 2.2s linear infinite;
        }

        .integration-flow-dot.delay-1 {
            animation-delay: .7s;
        }

        .integration-flow-dot.delay-2 {
            animation-delay: 1.4s;
        }


        @keyframes integrationPulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(.75);
                opacity: .45;
            }
        }

        .integration-pulse {
            animation: integrationPulse 1.8s ease-in-out infinite;
        }


        @keyframes integrationFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        .integration-engine-float {
            animation: integrationFloat 5s ease-in-out infinite;
        }


        .integration-platform-card {
            transition:
                transform 220ms ease,
                box-shadow 220ms ease,
                border-color 220ms ease;
        }

        .integration-platform-card:hover {
            transform: translateX(4px);
            border-color: rgba(59, 130, 246, .25);
            box-shadow: 0 8px 24px rgba(15, 23, 42, .06);
            cursor: pointer;
        }


        @keyframes payloadGlow {

            0%,
            100% {
                box-shadow: 0 0 0 rgba(37, 99, 235, 0);
            }

            50% {
                box-shadow: 0 0 28px rgba(37, 99, 235, .08);
            }
        }

        .integration-payload {
            animation: payloadGlow 4s ease-in-out infinite;
        }

        .works-feature-card {
            transition:
                transform 250ms ease,
                box-shadow 250ms ease,
                border-color 250ms ease;
        }

        .works-feature-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, .2);
            box-shadow: 0 18px 40px rgba(15, 23, 42, .07);
        }

        .works-feature-link svg {
            transition: transform 220ms ease;
        }

        .works-feature-link:hover svg {
            transform: translateX(4px);
        }

        /* =========================================================
           FINAL CTA
        ========================================================= */

        .stock-final-cta {
            position: relative;
            isolation: isolate;
        }

        .stock-final-cta::before {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            top: -280px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 9999px;
            background: rgba(59, 130, 246, 0.16);
            filter: blur(110px);
            pointer-events: none;
            z-index: -1;
        }


        .stock-cta-button {
            transition:
                transform 220ms ease,
                box-shadow 220ms ease,
                background-color 220ms ease;
        }

        .stock-cta-button:hover {
            transform: translateY(-2px);
        }


        @keyframes ctaStatusPulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .45;
                transform: scale(.75);
            }
        }

        .cta-status-dot {
            animation: ctaStatusPulse 1.8s ease-in-out infinite;
        }


        @keyframes ctaBadgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .cta-badge {
            animation: ctaBadgeFloat 4.5s ease-in-out infinite;
        }
    </style>



    <section class="relative isolate overflow-hidden bg-background py-16 sm:py-20 lg:min-h-[720px] lg:py-24">

        {{-- =====================================================
        BACKGROUND DECORATION
    ====================================================== --}}

        {{-- large right glow --}}
        <div
            class="pointer-events-none absolute right-[-180px] top-[-100px]
               h-[650px] w-[650px] rounded-full
               bg-primary-100/60 blur-[100px]">
        </div>

        {{-- centre glow --}}
        <div
            class="pointer-events-none absolute left-[45%] top-[10%]
               h-[450px] w-[450px] rounded-full
               bg-primary-50 blur-[90px]">
        </div>

        {{-- subtle bottom glow --}}
        <div
            class="pointer-events-none absolute bottom-[-200px] left-[20%]
               h-[450px] w-[650px] rounded-full
               bg-primary-100/30 blur-[120px]">
        </div>


        {{-- dotted pattern --}}
        <div class="pointer-events-none absolute right-[6%] top-10 hidden h-24 w-32
               opacity-60 lg:block"
            style="
            background-image:
                radial-gradient(circle, rgba(59,130,246,.35) 2px, transparent 2px);
            background-size: 18px 18px;
        ">
        </div>


        {{-- =====================================================
        MAIN CONTENT
    ====================================================== --}}
        <div
            class="relative mx-auto grid max-w-7xl items-center gap-16 px-6
               lg:grid-cols-[0.92fr_1.08fr] lg:px-8">

            {{-- =================================================
            LEFT CONTENT
        ================================================== --}}
            <div class="relative z-20">

                {{-- Eyebrow --}}
                <div
                    class="mb-6 text-xs font-semibold uppercase tracking-[0.15em]
                       text-primary-600 sm:text-sm">
                    Stock / Product Decrease Tracking
                </div>


                {{-- Heading --}}
                <h1
                    class="max-w-2xl text-[44px] font-extrabold leading-[1.04]
                       tracking-[-0.045em] text-secondary-950
                       sm:text-5xl lg:text-[66px]">

                    Track Every Stock
                    <br>

                    Decrease in

                    <span class="block text-primary-600">
                        Real Time
                    </span>
                </h1>


                {{-- Description --}}
                <p class="mt-7 max-w-xl text-base leading-8 text-secondary-500
                       sm:text-lg">
                    StockCore automatically reduces stock as sales, dispatches,
                    transfers and usage happen, keeping your inventory accurate
                    and up to date.
                </p>


                {{-- Buttons --}}
                <div class="mt-9 flex flex-col gap-4 sm:flex-row">

                    {{-- Primary --}}
                    <a href="{{ url('/signup') }}"
                        class="group inline-flex min-h-14 items-center justify-center
                           gap-3 rounded-xl bg-primary-600 px-7 text-sm
                           font-semibold text-white
                           shadow-[0_10px_30px_rgba(37,99,235,.22)]
                           transition duration-300
                           hover:-translate-y-0.5 hover:bg-primary-700
                           hover:shadow-[0_14px_40px_rgba(37,99,235,.28)]">

                        Start Free Trial

                        <svg class="h-5 w-5 transition-transform duration-300
                               group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>

                    </a>


                    {{-- Secondary --}}
                    <a href="#"
                        class="inline-flex min-h-14 items-center justify-center
                           rounded-xl border border-secondary-200
                           bg-white px-7 text-sm font-semibold text-primary-700
                           shadow-sm transition duration-300
                           hover:-translate-y-0.5 hover:border-primary-200
                           hover:bg-primary-50">

                        Book a Demo
                    </a>

                </div>


                {{-- Benefits --}}
                <div class="mt-8 flex flex-wrap gap-x-7 gap-y-4 text-sm
                       text-secondary-500">

                    {{-- item --}}
                    <div class="flex items-center gap-2.5">

                        <span
                            class="flex h-6 w-6 items-center justify-center
                               rounded-full bg-primary-100 text-primary-600">

                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.3">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>

                        </span>

                        Real-time stock updates
                    </div>


                    {{-- item --}}
                    <div class="flex items-center gap-2.5">

                        <span
                            class="flex h-6 w-6 items-center justify-center
                               rounded-full bg-primary-100 text-primary-600">

                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.3">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>

                        </span>

                        No manual adjustments
                    </div>


                    {{-- item --}}
                    <div class="flex items-center gap-2.5">

                        <span
                            class="flex h-6 w-6 items-center justify-center
                               rounded-full bg-primary-100 text-primary-600">

                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.3">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>

                        </span>

                        Audit trail of movements
                    </div>

                </div>

            </div>



            {{-- =================================================
            RIGHT VISUAL AREA
        ================================================== --}}
            <div class="relative mx-auto min-h-[520px] w-full max-w-[690px]
                   lg:min-h-[570px]">

                {{-- Background circle --}}
                <div
                    class="pointer-events-none absolute left-1/2 top-1/2
                       h-[440px] w-[440px]
                       -translate-x-1/2 -translate-y-1/2
                       rounded-full
                       bg-gradient-to-br
                       from-primary-100/70
                       via-primary-50/70
                       to-transparent
                       blur-[2px]
                       sm:h-[520px] sm:w-[520px]">
                </div>


                {{-- =================================================
                MAIN IMAGE AREA

                ADD YOUR IMAGE HERE LATER
            ================================================== --}}
                <div
                    class="stock-main-visual absolute left-1/2 top-1/2
                       z-10 h-[380px] w-[78%]
                       -translate-x-1/2 -translate-y-1/2
                       sm:h-[430px] lg:h-[470px]">




                    <img src="{{ asset('images/features/stock-tracking.png') }}" alt="StockCore stock decrease tracking"
                        class="h-full w-full object-contain">


                </div>



                {{-- =================================================
                FLOATING CARD 1
                SALE RECORDED
            ================================================== --}}
                <div
                    class="stock-float-one absolute left-[3%] top-[5%]
                       z-30 hidden min-w-[250px]
                       rounded-2xl border border-white/80
                       bg-white/55 p-4
                       shadow-[0_18px_50px_rgba(15,23,42,.10)]
                       backdrop-blur-xl
                       transition duration-300
                       hover:scale-[1.03]
                       hover:bg-white/70
                       sm:block">

                    <div class="flex items-center gap-4">

                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center
                               rounded-full bg-red-50 text-red-500">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 4h2l2.4 10.4a2 2 0 002 1.6h7.8a2 2 0 001.9-1.4L21 7H6" />

                                <circle cx="10" cy="20" r="1" />
                                <circle cx="18" cy="20" r="1" />
                            </svg>

                        </div>

                        <div class="min-w-0 flex-1">

                            <p class="text-sm font-semibold text-secondary-800">
                                Sale Recorded
                            </p>

                            <p class="mt-0.5 text-lg font-bold text-secondary-950">
                                -5 units
                            </p>

                        </div>

                        <span class="text-xs text-secondary-400">
                            2 mins ago
                        </span>

                    </div>

                </div>



                {{-- =================================================
                FLOATING CARD 2
                LOW STOCK
            ================================================== --}}
                <div
                    class="stock-float-two absolute right-[0%] top-[10%]
                       z-30 hidden min-w-[245px]
                       rounded-2xl border border-white/80
                       bg-white/55 p-4
                       shadow-[0_18px_50px_rgba(15,23,42,.10)]
                       backdrop-blur-xl
                       transition duration-300
                       hover:scale-[1.03]
                       hover:bg-white/70
                       md:block">

                    <div class="flex items-center gap-4">

                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center
                               rounded-full bg-amber-50 text-amber-500">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v4m0 4h.01M10.3 3.7L2.8 17a2 2 0 001.7 3h15a2 2 0 001.7-3L13.7 3.7a2 2 0 00-3.4 0z" />
                            </svg>

                        </div>

                        <div>
                            <p class="text-sm font-semibold text-secondary-800">
                                Low Stock
                            </p>

                            <p class="mt-1 text-xs text-secondary-500">
                                32 items need attention
                            </p>
                        </div>

                    </div>

                </div>



                {{-- =================================================
                FLOATING CARD 3
                TRANSFER
            ================================================== --}}
                <div
                    class="stock-float-three absolute bottom-[7%] right-[1%]
                       z-30 hidden min-w-[270px]
                       rounded-2xl border border-white/80
                       bg-white/55 p-4
                       shadow-[0_18px_50px_rgba(15,23,42,.10)]
                       backdrop-blur-xl
                       transition duration-300
                       hover:scale-[1.03]
                       hover:bg-white/70
                       sm:block">

                    <div class="flex items-center gap-4">

                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center
                               rounded-full bg-primary-50 text-primary-600">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 7h11m0 0l-3-3m3 3l-3 3M17 17H6m0 0l3 3m-3-3l3-3" />
                            </svg>

                        </div>

                        <div class="flex-1">

                            <p class="text-sm font-semibold text-secondary-800">
                                Transfer Sent
                            </p>

                            <p class="mt-0.5 text-lg font-bold text-secondary-950">
                                -12 units
                            </p>

                            <p class="mt-0.5 text-xs text-secondary-500">
                                To Melbourne DC
                            </p>

                        </div>

                        <span class="self-start text-xs text-secondary-400">
                            1 hour
                        </span>

                    </div>

                </div>


            </div>

        </div>

    </section>

    {{-- ============================================================
    HOW STOCK IS AUTOMATICALLY DECREMENTED
============================================================ --}}



    <section id="automatic-stock-deduction" class="relative overflow-hidden bg-white py-20 sm:py-24 lg:py-28">

        {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

        <div
            class="pointer-events-none absolute left-1/2 top-0
               h-[380px] w-[700px]
               -translate-x-1/2
               rounded-full bg-primary-50/60 blur-[110px]">
        </div>


        <div class="relative mx-auto max-w-5xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-[11px] font-bold uppercase
                       tracking-[0.18em] text-primary-600">
                    Automated Triggers
                </p>


                <h2
                    class="mt-3 text-3xl font-bold tracking-[-0.035em]
                       text-secondary-950 sm:text-4xl">
                    How Stock is Automatically Decremented
                </h2>


                <p class="mx-auto mt-4 max-w-xl text-sm leading-6
                       text-secondary-500 sm:text-base">
                    Choose a trigger scenario below to see how StockCore handles
                    multi-channel inventory reduction instantly without human error.
                </p>

            </div>



            {{-- ====================================================
            TABS
        ===================================================== --}}

            <div class="mt-9 flex justify-center">

                <div
                    class="inline-flex max-w-full gap-1 overflow-x-auto
                       rounded-xl border border-secondary-200
                       bg-secondary-50 p-1.5 shadow-sm">

                    {{-- SALES --}}
                    <button type="button" data-stock-tab="sales"
                        class="stock-scenario-tab whitespace-nowrap rounded-lg
                           bg-white px-4 py-2.5 text-xs font-semibold
                           text-primary-600
                           shadow-sm sm:px-5
                           hover:cursor-pointer">
                        Sales & Orders
                    </button>


                    {{-- TRANSFERS --}}
                    <button type="button" data-stock-tab="transfers"
                        class="stock-scenario-tab whitespace-nowrap rounded-lg
                           px-4 py-2.5 text-xs font-semibold
                           text-secondary-600
                           sm:px-5
                           hover:cursor-pointer">
                        Inter-Warehouse Transfers
                    </button>


                    {{-- USAGE --}}
                    <button type="button" data-stock-tab="usage"
                        class="stock-scenario-tab whitespace-nowrap rounded-lg
                           px-4 py-2.5 text-xs font-semibold
                           text-secondary-600
                           sm:px-5
                           hover:cursor-pointer">
                        Internal Usage & Wastage
                    </button>

                </div>

            </div>



            {{-- ====================================================
            SCENARIO WRAPPER
        ===================================================== --}}

            <div class="mt-9">



                {{-- =================================================
                SCENARIO 1
                SALES & ORDERS
            ================================================== --}}

                <div data-stock-panel="sales" class="stock-scenario-panel stock-scenario-enter">

                    <div
                        class="grid items-center gap-10 rounded-[22px]
                           border border-secondary-200 bg-white
                           px-6 py-8
                           shadow-[0_20px_50px_rgba(15,23,42,0.06)]
                           sm:px-8
                           lg:grid-cols-[1.04fr_0.96fr]
                           lg:px-10 lg:py-10">

                        {{-- LEFT --}}
                        <div>

                            {{-- Icon --}}
                            <div
                                class="mb-5 flex h-11 w-11 items-center
                                   justify-center rounded-xl
                                   bg-primary-50 text-primary-600">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 4h2l2.4 10.4a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 1.9-1.4L21 7H6" />

                                    <circle cx="10" cy="20" r="1" />
                                    <circle cx="18" cy="20" r="1" />
                                </svg>

                            </div>


                            <h3
                                class="max-w-md text-xl font-bold
                                   leading-tight text-secondary-900">
                                POS & E-Commerce Order
                                <br class="hidden sm:block">
                                Fulfillment
                            </h3>


                            <p
                                class="mt-4 max-w-md text-sm leading-6
                                   text-secondary-500">
                                When an order is created on Shopify, Amazon, or a POS
                                register, StockCore calculates bundled items and
                                deducts raw stock instantly across connected sales
                                channels.
                            </p>


                            {{-- Benefits --}}
                            <div class="mt-5 space-y-2.5">

                                <div
                                    class="flex items-center gap-2.5 text-xs
                                       font-medium text-secondary-600">

                                    <span
                                        class="flex h-4 w-4 items-center justify-center
                                           rounded-full border border-emerald-400
                                           text-emerald-500">

                                        <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>

                                    </span>

                                    Instant checkout quantity deduction
                                </div>


                                <div
                                    class="flex items-center gap-2.5 text-xs
                                       font-medium text-secondary-600">

                                    <span
                                        class="flex h-4 w-4 items-center justify-center
                                           rounded-full border border-emerald-400
                                           text-emerald-500">

                                        <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>

                                    </span>

                                    Auto-bundle / kit component decrease
                                </div>


                                <div
                                    class="flex items-center gap-2.5 text-xs
                                       font-medium text-secondary-600">

                                    <span
                                        class="flex h-4 w-4 items-center justify-center
                                           rounded-full border border-emerald-400
                                           text-emerald-500">

                                        <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>

                                    </span>

                                    Prevents double-selling during rush hours
                                </div>

                            </div>

                        </div>



                        {{-- RIGHT --}}
                        <div
                            class="rounded-2xl border border-secondary-200
                               bg-secondary-50/70 p-5">

                            <div class="flex items-center justify-between">

                                <span
                                    class="text-[10px] font-semibold uppercase
                                       tracking-[0.12em] text-secondary-400">
                                    Trigger Event
                                </span>

                                <span
                                    class="flex items-center gap-1.5 text-[10px]
                                       font-bold text-emerald-500">

                                    <span
                                        class="h-1.5 w-1.5 rounded-full
                                           bg-emerald-500">
                                    </span>

                                    Active
                                </span>

                            </div>


                            {{-- Event --}}
                            <div
                                class="mt-4 rounded-xl border border-secondary-200
                                   bg-white p-4">

                                <p
                                    class="text-[10px] font-semibold uppercase
                                       tracking-wide text-secondary-400">
                                    Customer Checkout
                                </p>

                                <div
                                    class="mt-2 flex items-center justify-between
                                       gap-4">

                                    <p
                                        class="text-xs font-semibold
                                           text-secondary-800">
                                        2x Mechanical Keyboards
                                    </p>

                                    <span
                                        class="whitespace-nowrap text-xs font-bold
                                           text-red-500">
                                        -2 Qty
                                    </span>

                                </div>

                            </div>


                            {{-- Result --}}
                            <div
                                class="mt-3 rounded-xl border border-primary-200
                                   bg-primary-50 px-4 py-3">

                                <div class="flex gap-2">

                                    <svg class="mt-0.5 h-4 w-4 shrink-0
                                           text-primary-600"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>

                                    <p
                                        class="text-[11px] leading-5
                                           text-primary-700">
                                        StockCore automatically sends the stock
                                        reduction signal to Amazon & WooCommerce
                                        in 120ms.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                SCENARIO 2
                WAREHOUSE TRANSFER
            ================================================== --}}

                <div data-stock-panel="transfers" class="stock-scenario-panel hidden">

                    <div
                        class="grid items-center gap-10 rounded-[22px]
                           border border-secondary-200 bg-white
                           px-6 py-8
                           shadow-[0_20px_50px_rgba(15,23,42,0.06)]
                           sm:px-8
                           lg:grid-cols-[1.04fr_0.96fr]
                           lg:px-10 lg:py-10">

                        {{-- LEFT --}}
                        <div>

                            <div
                                class="mb-5 flex h-11 w-11 items-center
                                   justify-center rounded-xl
                                   bg-cyan-50 text-cyan-600">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 7h11m0 0l-3-3m3 3l-3 3M17 17H6m0 0l3 3m-3-3l3-3" />
                                </svg>

                            </div>


                            <h3
                                class="max-w-md text-xl font-bold
                                   leading-tight text-secondary-900">
                                Multi-Location Inventory
                                <br class="hidden sm:block">
                                Rebalancing
                            </h3>


                            <p
                                class="mt-4 max-w-md text-sm leading-6
                                   text-secondary-500">
                                Moving stock from Central Warehouse to Retail Shop #2?
                                StockCore decrements origin stock immediately upon
                                dispatch scan, holding items in transit.
                            </p>


                            <div class="mt-5 space-y-2.5">

                                @foreach (['Real-time Origin Stock Reduction', 'In-transit ledger tracking', 'Automated receiving confirmation'] as $item)
                                    <div
                                        class="flex items-center gap-2.5 text-xs
                                           font-medium text-secondary-600">

                                        <span
                                            class="flex h-4 w-4 items-center
                                               justify-center rounded-full
                                               border border-emerald-400
                                               text-emerald-500">

                                            <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>

                                        </span>

                                        {{ $item }}

                                    </div>
                                @endforeach

                            </div>

                        </div>



                        {{-- RIGHT --}}
                        <div
                            class="rounded-2xl border border-secondary-200
                               bg-secondary-50/70 p-5">

                            <div class="flex items-center justify-between">

                                <span
                                    class="text-[10px] font-semibold uppercase
                                       tracking-[0.12em] text-secondary-400">
                                    Transfer Route
                                </span>

                                <span class="text-[10px] font-bold text-primary-600">
                                    Dispatched
                                </span>

                            </div>


                            <div
                                class="mt-4 rounded-xl border border-secondary-200
                                   bg-white p-4">

                                <p
                                    class="text-[10px] font-semibold uppercase
                                       tracking-wide text-secondary-400">
                                    Origin · Sydney Hub
                                </p>

                                <div
                                    class="mt-2 flex items-center justify-between
                                       gap-4">

                                    <p
                                        class="text-xs font-semibold
                                           text-secondary-800">
                                        50x USB-C Cables
                                    </p>

                                    <span class="text-xs font-bold text-red-500">
                                        -50 Qty
                                    </span>

                                </div>

                            </div>


                            <div
                                class="mt-3 rounded-xl border border-emerald-200
                                   bg-emerald-50 px-4 py-3">

                                <div class="flex gap-2">

                                    <svg class="mt-0.5 h-4 w-4 shrink-0
                                           text-emerald-600"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>

                                    <p
                                        class="text-[11px] leading-5
                                           text-emerald-700">
                                        Status: In Transit to Melbourne Retail Store.
                                        Available balance adjusted.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                SCENARIO 3
                INTERNAL USAGE / WASTAGE
            ================================================== --}}

                <div data-stock-panel="usage" class="stock-scenario-panel hidden">

                    <div
                        class="grid items-center gap-10 rounded-[22px]
                           border border-secondary-200 bg-white
                           px-6 py-8
                           shadow-[0_20px_50px_rgba(15,23,42,0.06)]
                           sm:px-8
                           lg:grid-cols-[1.04fr_0.96fr]
                           lg:px-10 lg:py-10">

                        {{-- LEFT --}}
                        <div>

                            <div
                                class="mb-5 flex h-11 w-11 items-center
                                   justify-center rounded-xl
                                   bg-amber-50 text-amber-600">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 7h16M10 11v5m4-5v5M6 7l1 13h10l1-13M9 7V4h6v3" />
                                </svg>

                            </div>


                            <h3
                                class="max-w-md text-xl font-bold
                                   leading-tight text-secondary-900">
                                Damaged Goods, Sampling &
                                <br class="hidden sm:block">
                                Shrinkage
                            </h3>


                            <p
                                class="mt-4 max-w-md text-sm leading-6
                                   text-secondary-500">
                                Log damaged stock, promotional giveaways, or expired
                                units instantly via mobile barcode scan. StockCore
                                categorizes the decrement reason automatically.
                            </p>


                            <div class="mt-5 space-y-2.5">

                                @foreach (['Mobile Barcode Quick-Deduct', 'Audit-ready reason tagging', 'COGS & Accounting sync'] as $item)
                                    <div
                                        class="flex items-center gap-2.5 text-xs
                                           font-medium text-secondary-600">

                                        <span
                                            class="flex h-4 w-4 items-center
                                               justify-center rounded-full
                                               border border-emerald-400
                                               text-emerald-500">

                                            <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>

                                        </span>

                                        {{ $item }}

                                    </div>
                                @endforeach

                            </div>

                        </div>



                        {{-- RIGHT --}}
                        <div
                            class="rounded-2xl border border-secondary-200
                               bg-secondary-50/70 p-5">

                            <div class="flex items-center justify-between">

                                <span
                                    class="text-[10px] font-semibold uppercase
                                       tracking-[0.12em] text-secondary-400">
                                    Adjust Reason
                                </span>

                                <span class="text-[10px] font-bold text-red-500">
                                    Damaged
                                </span>

                            </div>


                            <div
                                class="mt-4 rounded-xl border border-secondary-200
                                   bg-white p-4">

                                <p
                                    class="text-[10px] font-semibold uppercase
                                       tracking-wide text-secondary-400">
                                    SKU #9011 · Liquid Damage
                                </p>

                                <div
                                    class="mt-2 flex items-center justify-between
                                       gap-4">

                                    <p
                                        class="text-xs font-semibold
                                           text-secondary-800">
                                        1x Smart Speaker
                                    </p>

                                    <span class="text-xs font-bold text-red-500">
                                        -1 Qty
                                    </span>

                                </div>

                            </div>


                            <div
                                class="mt-3 rounded-xl border border-amber-200
                                   bg-amber-50 px-4 py-3">

                                <div class="flex gap-2">

                                    <svg class="mt-0.5 h-4 w-4 shrink-0
                                           text-amber-600"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                                    </svg>

                                    <p
                                        class="text-[11px] leading-5
                                           text-amber-700">
                                        Stock decremented. Loss account updated in
                                        connected accounting software.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- ============================================================
    CORE FEATURES / PRECISION INVENTORY TRACKING
============================================================ --}}




    <section id="precision-inventory-features"
        class="relative overflow-hidden bg-background-muted py-20 sm:py-24 lg:py-28">

        {{-- Background decorative glow --}}
        <div
            class="pointer-events-none absolute left-1/2 top-[-180px]
               h-[500px] w-[850px]
               -translate-x-1/2 rounded-full
               bg-primary-100/50 blur-[120px]">
        </div>


        <div class="relative mx-auto max-w-6xl px-6 lg:px-8">

            {{-- ====================================================
            SECTION HEADER
        ===================================================== --}}

            <div class="mx-auto max-w-3xl text-center">

                <p class="text-[11px] font-bold uppercase
                       tracking-[0.18em] text-primary-600">
                    Core Features
                </p>

                <h2
                    class="mt-3 text-3xl font-bold tracking-[-0.035em]
                       text-secondary-950 sm:text-4xl">
                    Engineered for Precision Inventory Tracking
                </h2>

            </div>


            {{-- ====================================================
            FEATURE GRID
        ===================================================== --}}

            <div class="mt-12 grid gap-5 lg:grid-cols-12">

                {{-- =================================================
                CARD 1
                REAL-TIME MULTI CHANNEL
            ================================================== --}}

                <article
                    class="precision-feature-card rounded-[22px]
                       border border-secondary-200 bg-white
                       p-6 shadow-[0_14px_35px_rgba(15,23,42,0.045)]
                       sm:p-7 lg:col-span-8
                       hover:cursor-pointer">

                    {{-- Top --}}
                    <div class="flex items-start justify-between gap-5">

                        <div
                            class="flex h-11 w-11 items-center justify-center
                               rounded-xl border border-primary-100
                               bg-primary-50 text-primary-600">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 7h11m0 0l-3-3m3 3l-3 3M20 17H9m0 0l3 3m-3-3l3-3" />
                            </svg>

                        </div>


                        <span
                            class="rounded-full border border-primary-200
                               bg-primary-50 px-3 py-1
                               text-[10px] font-semibold text-primary-600">
                            Zero Lag Sync
                        </span>

                    </div>


                    <h3 class="mt-5 text-lg font-bold text-secondary-900">
                        Real-Time Multi-Channel Availability
                    </h3>


                    <p class="mt-2 max-w-2xl text-sm leading-6 text-secondary-500">
                        When an item decreases in your physical store, its online stock
                        drops immediately across all connected platforms within
                        milliseconds.
                    </p>


                    {{-- Channel inventory --}}
                    <div
                        class="mt-6 grid gap-2 rounded-xl border
                           border-secondary-200 bg-secondary-50/70
                           p-2 sm:grid-cols-3">

                        {{-- Shopify --}}
                        <div class="rounded-lg bg-white px-4 py-3 text-center">

                            <p
                                class="text-[10px] font-medium uppercase
                                   tracking-wide text-secondary-400">
                                Shopify
                            </p>

                            <p class="mt-1 text-sm font-bold text-secondary-900">
                                42 pcs
                            </p>

                        </div>


                        {{-- Amazon --}}
                        <div class="rounded-lg bg-white px-4 py-3 text-center">

                            <p
                                class="text-[10px] font-medium uppercase
                                   tracking-wide text-secondary-400">
                                Amazon
                            </p>

                            <p class="mt-1 text-sm font-bold text-secondary-900">
                                42 pcs
                            </p>

                        </div>


                        {{-- Retail --}}
                        <div
                            class="rounded-lg border border-primary-200
                               bg-primary-50 px-4 py-3 text-center">

                            <p
                                class="text-[10px] font-medium uppercase
                                   tracking-wide text-primary-500">
                                Retail Store
                            </p>

                            <p class="mt-1 text-sm font-bold text-primary-700">
                                42 pcs
                            </p>

                        </div>

                    </div>

                </article>



                {{-- =================================================
                CARD 2
                PREVENT OVERSELLING
            ================================================== --}}

                <article
                    class="precision-feature-card relative overflow-hidden
                       rounded-[22px] border border-secondary-200
                       bg-white p-6
                       shadow-[0_14px_35px_rgba(15,23,42,0.045)]
                       sm:p-7 lg:col-span-4
                       hover:cursor-pointer">

                    <div
                        class="flex h-11 w-11 items-center justify-center
                           rounded-xl border border-red-100
                           bg-red-50 text-red-500">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3l7 3v5c0 5-3.2 8.6-7 10-3.8-1.4-7-5-7-10V6l7-3z" />

                            <path stroke-linecap="round" d="M12 8v4m0 4h.01" />
                        </svg>

                    </div>


                    <h3 class="mt-5 text-lg font-bold text-secondary-900">
                        Prevent Overselling
                    </h3>


                    <p class="mt-2 text-sm leading-6 text-secondary-500">
                        Buffer controls lock stock at critical thresholds to prevent
                        backorder headaches during high-traffic flash sales.
                    </p>


                    {{-- Bottom mini indicator --}}
                    <div class="mt-10 border-t border-secondary-100 pt-4">

                        <div class="flex items-center justify-between gap-5">

                            <div>
                                <p class="text-[10px] font-medium text-red-500">
                                    Safety Stock Threshold
                                </p>
                            </div>

                            <div
                                class="rounded-full bg-red-50 px-3 py-1
                                   text-[10px] font-semibold text-red-500">
                                5 Units Held
                            </div>

                        </div>


                        <div class="mt-3 h-1.5 overflow-hidden
                               rounded-full bg-red-100">

                            <div class="h-full w-[72%] rounded-full bg-red-400">
                            </div>

                        </div>

                    </div>

                </article>



                {{-- =================================================
                CARD 3
                AUDIT TRAIL
            ================================================== --}}

                <article
                    class="precision-feature-card rounded-[22px]
                       border border-secondary-200 bg-white
                       p-6 shadow-[0_14px_35px_rgba(15,23,42,0.045)]
                       sm:p-7 lg:col-span-4
                       hover:cursor-pointer">

                    <div
                        class="flex h-11 w-11 items-center justify-center
                           rounded-xl border border-emerald-100
                           bg-emerald-50 text-emerald-500">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2" />

                            <circle cx="12" cy="12" r="8" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.9 5.5L3 8h3" />
                        </svg>

                    </div>


                    <h3 class="mt-5 text-lg font-bold text-secondary-900">
                        Full Movement Audit Trail
                    </h3>


                    <p class="mt-2 text-sm leading-6 text-secondary-500">
                        Every single stock deduction is timestamped with user ID,
                        channel origin, and reference order number.
                    </p>


                    {{-- Terminal style event --}}
                    <div
                        class="mt-6 rounded-lg border border-secondary-200
                           bg-secondary-50 px-4 py-3">

                        <div
                            class="flex flex-wrap items-center gap-2
                               font-mono text-[10px] text-secondary-500">

                            <span>14:32:11</span>

                            <span class="text-secondary-300">|</span>

                            <span>OUT</span>

                            <span class="text-secondary-300">→</span>

                            <span>-2</span>

                            <span class="text-secondary-300">|</span>

                            <span>USER: BOT_API</span>

                        </div>

                    </div>

                </article>



                {{-- =================================================
                CARD 4
                LOW STOCK RESTOCK TRIGGERS
            ================================================== --}}

                <article
                    class="precision-feature-card rounded-[22px]
                       border border-secondary-200 bg-white
                       p-6 shadow-[0_14px_35px_rgba(15,23,42,0.045)]
                       sm:p-7 lg:col-span-8
                       hover:cursor-pointer">

                    <div class="flex items-start justify-between gap-5">

                        <div
                            class="flex h-11 w-11 items-center justify-center
                               rounded-xl border border-amber-100
                               bg-amber-50 text-amber-500">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 8A6 6 0 006 8c0 7-3 7-3 9h18c0-2-3-2-3-9" />

                                <path stroke-linecap="round" d="M10 21h4" />
                            </svg>

                        </div>


                        <span
                            class="rounded-full border border-amber-200
                               bg-amber-50 px-3 py-1
                               text-[10px] font-semibold text-amber-600">
                            Smart Reordering
                        </span>

                    </div>


                    <h3 class="mt-5 text-lg font-bold text-secondary-900">
                        Automated Low Stock Restock Triggers
                    </h3>


                    <p class="mt-2 max-w-2xl text-sm leading-6
                           text-secondary-500">
                        As inventory decrements reach your dynamic reorder point,
                        StockCore automatically drafts purchase orders to suppliers.
                    </p>


                    {{-- Generated PO UI --}}
                    <div
                        class="mt-6 flex flex-col gap-4 rounded-xl
                           border border-amber-200 bg-amber-50/60
                           p-4 sm:flex-row sm:items-center">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center
                               justify-center rounded-lg
                               bg-amber-500 text-xs font-bold text-white">
                            PO
                        </div>


                        <div class="min-w-0 flex-1">

                            <p class="text-xs font-semibold text-secondary-800">
                                Auto-Generated Draft PO #9921
                            </p>

                            <p class="mt-1 text-[10px] text-secondary-500">
                                Supplier: TechImports Ltd · Reordering 100 units
                            </p>

                        </div>


                        <div
                            class="flex items-center gap-2 text-[10px]
                               font-semibold text-emerald-600">

                            <span
                                class="stock-pulse h-2 w-2 rounded-full
                                   bg-emerald-500">
                            </span>

                            Draft Ready

                        </div>

                    </div>

                </article>

            </div>

        </div>

    </section>



    {{-- ============================================================
    STOCK MOVEMENT PROCESS
============================================================ --}}



    <section id="stock-movement-process" class="relative overflow-hidden bg-background-muted py-20 sm:py-24 lg:py-28">

        {{-- Soft background glow --}}
        <div
            class="pointer-events-none absolute left-1/2 top-[-180px]
               h-[500px] w-[850px]
               -translate-x-1/2
               rounded-full bg-primary-100/50 blur-[120px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- =====================================================
            HEADER
        ====================================================== --}}

            <div class="mx-auto max-w-3xl text-center">

                <p class="text-[11px] font-bold uppercase
                       tracking-[0.18em] text-primary-600">
                    Instant Ledger Orchestration
                </p>

                <h2
                    class="mt-3 text-3xl font-bold tracking-[-0.035em]
                       text-secondary-950 sm:text-4xl lg:text-[42px]">
                    Stock updates the moment your
                    <span class="block">
                        business moves.
                    </span>
                </h2>

                <p class="mx-auto mt-4 max-w-2xl text-sm leading-6
                       text-secondary-500 sm:text-base">
                    Every sale, shipment, transfer or usage event automatically
                    updates your available inventory — without spreadsheets or
                    manual corrections.
                </p>

            </div>



            {{-- =====================================================
            PROCESS CARDS
        ====================================================== --}}

            <div class="mt-12 grid gap-3
                   md:grid-cols-2
                   xl:grid-cols-5">

                {{-- =================================================
                STEP 01
            ================================================== --}}
                <button type="button" data-process-step="sale"
                    class="stock-process-card group rounded-2xl
                       border border-secondary-200 bg-white
                       p-5 text-left
                       shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                       hover:cursor-pointer">

                    <div class="flex items-start justify-between gap-3">

                        <span
                            class="step-label text-[10px] font-bold uppercase
                               tracking-[0.12em] text-secondary-400">
                            Step 01
                        </span>

                        <span
                            class="step-icon flex h-8 w-8 items-center justify-center
                               rounded-lg bg-primary-50 text-primary-600">

                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 4h2l2.4 10.4a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 1.9-1.4L21 7H6" />

                                <circle cx="10" cy="20" r="1" />
                                <circle cx="18" cy="20" r="1" />
                            </svg>

                        </span>

                    </div>


                    <h3 class="step-title mt-7 text-sm font-bold
                           text-secondary-900">
                        Sale Created
                    </h3>

                    <p
                        class="step-description mt-2 min-h-[54px]
                           text-xs leading-5 text-secondary-500">
                        B2B portal, POS scan, or Shopify store webhook fires.
                    </p>


                    <div
                        class="step-footer mt-4 rounded-lg
                           bg-secondary-50 px-3 py-2
                           text-[10px] font-medium text-secondary-500">
                        Payload: order_created
                    </div>

                </button>



                {{-- =================================================
                STEP 02
            ================================================== --}}
                <button type="button" data-process-step="confirmed"
                    class="stock-process-card group rounded-2xl
                       border border-secondary-200 bg-white
                       p-5 text-left
                       shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                       hover:cursor-pointer">

                    <div class="flex items-start justify-between gap-3">

                        <span
                            class="step-label text-[10px] font-bold uppercase
                               tracking-[0.12em] text-secondary-400">
                            Step 02
                        </span>

                        <span
                            class="step-icon flex h-8 w-8 items-center justify-center
                               rounded-lg bg-primary-50 text-primary-600">

                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <circle cx="12" cy="12" r="8" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 12l2.3 2.3L15.5 9" />
                            </svg>

                        </span>

                    </div>


                    <h3 class="step-title mt-7 text-sm font-bold
                           text-secondary-900">
                        Order Confirmed
                    </h3>

                    <p
                        class="step-description mt-2 min-h-[54px]
                           text-xs leading-5 text-secondary-500">
                        Validation rules match stock allocations to physical sales.
                    </p>


                    <div
                        class="step-footer mt-4 rounded-lg
                           bg-secondary-50 px-3 py-2
                           text-[10px] font-medium text-secondary-500">
                        Status: Confirmed
                    </div>

                </button>



                {{-- =================================================
                STEP 03
            ================================================== --}}
                <button type="button" data-process-step="deducted"
                    class="stock-process-card is-active group rounded-2xl
                       border border-primary-600
                       p-5 text-left
                       hover:cursor-pointer">

                    <div class="flex items-start justify-between gap-3">

                        <span
                            class="step-label text-[10px] font-bold uppercase
                               tracking-[0.12em]">
                            Step 03
                        </span>

                        <span
                            class="step-icon flex h-8 w-8 items-center justify-center
                               rounded-lg">

                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 8l8 4 8-4M4 8l8-4 8 4v8l-8 4-8-4V8z" />
                            </svg>

                        </span>

                    </div>


                    <h3 class="step-title mt-7 text-sm font-bold">
                        Stock Deducted
                    </h3>

                    <p class="step-description mt-2 min-h-[54px]
                           text-xs leading-5">
                        Available balance decreases automatically in real time.
                    </p>


                    <div
                        class="step-footer mt-4 rounded-lg
                           px-3 py-2
                           text-[10px] font-medium">
                        Net Change: -8 units
                    </div>

                </button>



                {{-- =================================================
                STEP 04
            ================================================== --}}
                <button type="button" data-process-step="updated"
                    class="stock-process-card group rounded-2xl
                       border border-secondary-200 bg-white
                       p-5 text-left
                       shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                       hover:cursor-pointer">

                    <div class="flex items-start justify-between gap-3">

                        <span
                            class="step-label text-[10px] font-bold uppercase
                               tracking-[0.12em] text-secondary-400">
                            Step 04
                        </span>

                        <span
                            class="step-icon flex h-8 w-8 items-center justify-center
                               rounded-lg bg-primary-50 text-primary-600">

                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="3" y="5" width="18" height="14" rx="2" />

                                <path stroke-linecap="round" d="M7 15h3l2-4 2 3h3" />
                            </svg>

                        </span>

                    </div>


                    <h3 class="step-title mt-7 text-sm font-bold
                           text-secondary-900">
                        Inventory Updated
                    </h3>

                    <p
                        class="step-description mt-2 min-h-[54px]
                           text-xs leading-5 text-secondary-500">
                        Synced across ERP, accounting, warehouse and sales channels.
                    </p>


                    <div
                        class="step-footer mt-4 rounded-lg
                           bg-secondary-50 px-3 py-2
                           text-[10px] font-medium text-secondary-500">
                        Channels: 100% Synced
                    </div>

                </button>



                {{-- =================================================
                STEP 05
            ================================================== --}}
                <button type="button" data-process-step="logged"
                    class="stock-process-card group rounded-2xl
                       border border-secondary-200 bg-white
                       p-5 text-left
                       shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                       hover:cursor-pointer">

                    <div class="flex items-start justify-between gap-3">

                        <span
                            class="step-label text-[10px] font-bold uppercase
                               tracking-[0.12em] text-secondary-400">
                            Step 05
                        </span>

                        <span
                            class="step-icon flex h-8 w-8 items-center justify-center
                               rounded-lg bg-primary-50 text-primary-600">

                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h10v18H7z" />

                                <path stroke-linecap="round" d="M10 8h4M10 12h4M10 16h3" />
                            </svg>

                        </span>

                    </div>


                    <h3 class="step-title mt-7 text-sm font-bold
                           text-secondary-900">
                        Movement Logged
                    </h3>

                    <p
                        class="step-description mt-2 min-h-[54px]
                           text-xs leading-5 text-secondary-500">
                        Immutable audit ledger captures user, timestamp and reason.
                    </p>


                    <div
                        class="step-footer mt-4 rounded-lg
                           bg-secondary-50 px-3 py-2
                           text-[10px] font-medium text-secondary-500">
                        Hash: f10-f81129c
                    </div>

                </button>

            </div>



            {{-- =====================================================
            DYNAMIC BOTTOM PANEL
        ====================================================== --}}

            <div
                class="mt-4 rounded-2xl border border-secondary-200
                   bg-white p-4
                   shadow-[0_10px_30px_rgba(15,23,42,0.04)]
                   sm:p-5">

                <div id="stock-process-dynamic"
                    class="process-content-enter flex flex-col gap-5
                       lg:flex-row lg:items-center
                       lg:justify-between">

                    {{-- LEFT --}}
                    <div class="flex items-center gap-4">

                        <div id="process-dynamic-icon"
                            class="flex h-11 w-11 shrink-0
                               items-center justify-center
                               rounded-xl bg-primary-50 text-primary-600">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v4m0 10v4M3 12h4m10 0h4M5.6 5.6l2.8 2.8m7.2 7.2l2.8 2.8M18.4 5.6l-2.8 2.8m-7.2 7.2l-2.8 2.8" />
                            </svg>

                        </div>


                        <div>

                            <p id="process-dynamic-title" class="text-xs font-bold text-secondary-800">
                                Automatic Event Ingestion
                            </p>

                            <p id="process-dynamic-description"
                                class="mt-1 text-[11px] leading-5
                                   text-secondary-500">
                                4 simultaneous triggers: Sales, Shipments,
                                Transfers & Internal Consumption.
                            </p>

                        </div>

                    </div>



                    {{-- RIGHT DATA FLOW --}}
                    <div id="process-dynamic-stats"
                        class="flex flex-wrap items-center gap-3
                           rounded-xl bg-secondary-50
                           px-4 py-3 text-[11px]">

                        <span class="text-secondary-500">
                            Before:
                        </span>

                        <span class="font-bold text-secondary-900">
                            120 units
                        </span>


                        <span class="text-secondary-300">
                            →
                        </span>


                        <span class="font-semibold text-red-500">
                            Sale -8 units
                        </span>


                        <span class="text-secondary-300">
                            →
                        </span>


                        <span class="text-secondary-500">
                            After:
                        </span>

                        <span class="font-bold text-emerald-600">
                            112 units
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ============================================================
    REAL AVAILABLE INVENTORY
============================================================ --}}

    <section id="real-available-stock" class="relative overflow-hidden bg-background-muted py-20 sm:py-24 lg:py-28">

        {{-- ========================================================
        BACKGROUND EFFECTS
    ========================================================= --}}

        <div
            class="pointer-events-none absolute left-1/2 top-[-220px]
               h-[500px] w-[900px]
               -translate-x-1/2 rounded-full
               bg-primary-100/40 blur-[130px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="flex flex-col gap-7 lg:flex-row
                   lg:items-end lg:justify-between">

                {{-- LEFT --}}
                <div class="max-w-3xl">

                    <p
                        class="text-[11px] font-bold uppercase
                           tracking-[0.18em] text-primary-600">
                        Precision Accuracy
                    </p>


                    <h2
                        class="mt-3 text-3xl font-bold
                           tracking-[-0.035em]
                           text-secondary-950
                           sm:text-4xl lg:text-[42px]">
                        Know what you actually have available.
                    </h2>


                    <p class="mt-4 max-w-2xl text-sm leading-6
                           text-secondary-500 sm:text-base">
                        StockCore keeps available inventory accurate by automatically
                        accounting for outgoing stock as transactions happen. Your team
                        sees the same reliable stock quantity across sales, purchasing
                        and warehouse operations.
                    </p>

                </div>



                {{-- =================================================
                SYNC BADGE
            ================================================== --}}

                <div
                    class="inventory-sync-badge inline-flex
                       w-fit items-center gap-2.5
                       rounded-xl border border-primary-100
                       bg-white/80 px-4 py-2.5
                       shadow-[0_8px_25px_rgba(37,99,235,0.07)]
                       backdrop-blur-md">

                    {{-- Rotating Sync Icon --}}
                    <svg class="inventory-sync-icon h-4 w-4 text-primary-600" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7h-5V2" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 17h5v5" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.5 8.5A7 7 0 0117.8 5L20 7" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.5 15.5A7 7 0 016.2 19L4 17" />
                    </svg>


                    <span class="text-[11px] font-semibold
                           text-secondary-700">
                        Sub-second socket sync active
                    </span>


                    <span class="inventory-live-dot h-1.5 w-1.5
                           rounded-full bg-emerald-500">
                    </span>

                </div>

            </div>



            {{-- ====================================================
            INVENTORY TABLE
        ===================================================== --}}

            <div
                class="mt-10 overflow-hidden rounded-[18px]
                   border border-secondary-200
                   bg-white
                   shadow-[0_18px_45px_rgba(15,23,42,0.055)]">

                {{-- Mobile horizontal scroll --}}
                <div class="overflow-x-auto">

                    <div class="min-w-[950px]">

                        {{-- =================================================
                        TABLE HEADER
                    ================================================== --}}

                        <div
                            class="grid grid-cols-[2.2fr_.75fr_.75fr_.75fr_1.35fr_.7fr]
                               items-center
                               border-b border-secondary-200
                               bg-secondary-50/80
                               px-5 py-3">

                            <div
                                class="text-[9px] font-bold uppercase
                                   tracking-[0.09em]
                                   text-secondary-400">
                                Product Details
                            </div>

                            <div
                                class="text-[9px] font-bold uppercase
                                   tracking-[0.09em]
                                   text-secondary-400">
                                Available
                            </div>

                            <div
                                class="text-[9px] font-bold uppercase
                                   tracking-[0.09em]
                                   text-secondary-400">
                                Allocated
                            </div>

                            <div
                                class="text-[9px] font-bold uppercase
                                   tracking-[0.09em]
                                   text-secondary-400">
                                Incoming
                            </div>

                            <div
                                class="text-[9px] font-bold uppercase
                                   tracking-[0.09em]
                                   text-secondary-400">
                                Warehouse Facility
                            </div>

                            <div
                                class="text-right text-[9px] font-bold
                                   uppercase tracking-[0.09em]
                                   text-secondary-400">
                                Status
                            </div>

                        </div>



                        {{-- =================================================
                        ROW 01
                    ================================================== --}}

                        <div
                            class="inventory-availability-row
                               grid grid-cols-[2.2fr_.75fr_.75fr_.75fr_1.35fr_.7fr]
                               items-center
                               border-b border-secondary-100
                               px-5 py-4
                               hover:cursor-pointer">

                            {{-- Product --}}
                            <div>

                                <p class="text-xs font-bold
                                       text-secondary-900">
                                    Wireless Scanner X200
                                </p>

                                <p class="mt-1 text-[9px]
                                       text-secondary-400">
                                    SKU: WLS-SCN-200 · Barcode Scanner
                                </p>

                            </div>


                            {{-- Available --}}
                            <div class="text-sm font-bold
                                   text-primary-600">
                                248
                            </div>


                            {{-- Allocated --}}
                            <div class="text-[11px] font-medium
                                   text-secondary-600">
                                12 units
                            </div>


                            {{-- Incoming --}}
                            <div class="text-[11px] font-semibold
                                   text-emerald-600">
                                +40 units
                            </div>


                            {{-- Warehouse --}}
                            <div
                                class="flex items-center gap-2
                                   text-[10px] font-medium
                                   text-secondary-700">

                                <svg class="h-3.5 w-3.5
                                       text-secondary-400"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21V8l9-5 9 5v13" />

                                    <path stroke-linecap="round" d="M8 21v-6h8v6" />
                                </svg>

                                Sydney Central DC

                            </div>


                            {{-- Status --}}
                            <div class="text-right">

                                <span
                                    class="inline-flex items-center gap-1.5
                                       rounded-full
                                       bg-emerald-50
                                       px-2.5 py-1
                                       text-[9px] font-semibold
                                       text-emerald-700">

                                    <span
                                        class="inventory-live-dot h-1.5 w-1.5
                                           rounded-full bg-emerald-500">
                                    </span>

                                    Live Sync

                                </span>

                            </div>

                        </div>



                        {{-- =================================================
                        ROW 02
                    ================================================== --}}

                        <div
                            class="inventory-availability-row
                               grid grid-cols-[2.2fr_.75fr_.75fr_.75fr_1.35fr_.7fr]
                               items-center
                               border-b border-secondary-100
                               px-5 py-4
                               hover:cursor-pointer">

                            <div>

                                <p class="text-xs font-bold
                                       text-secondary-900">
                                    Industrial Barcode Printer Pro
                                </p>

                                <p class="mt-1 text-[9px]
                                       text-secondary-400">
                                    SKU: PRN-IND-400 · Thermal Transfer
                                </p>

                            </div>


                            <div class="text-sm font-bold
                                   text-primary-600">
                                86
                            </div>


                            <div class="text-[11px] font-medium
                                   text-secondary-600">
                                8 units
                            </div>


                            <div class="text-[11px] font-semibold
                                   text-emerald-600">
                                +25 units
                            </div>


                            <div
                                class="flex items-center gap-2
                                   text-[10px] font-medium
                                   text-secondary-700">

                                <svg class="h-3.5 w-3.5 text-secondary-400" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21V8l9-5 9 5v13" />

                                    <path stroke-linecap="round" d="M8 21v-6h8v6" />
                                </svg>

                                Melbourne DC

                            </div>


                            <div class="text-right">

                                <span
                                    class="inline-flex items-center gap-1.5
                                       rounded-full
                                       bg-emerald-50
                                       px-2.5 py-1
                                       text-[9px] font-semibold
                                       text-emerald-700">

                                    <span
                                        class="inventory-live-dot h-1.5 w-1.5
                                           rounded-full bg-emerald-500">
                                    </span>

                                    Live Sync

                                </span>

                            </div>

                        </div>



                        {{-- =================================================
                        ROW 03
                    ================================================== --}}

                        <div
                            class="inventory-availability-row
                               grid grid-cols-[2.2fr_.75fr_.75fr_.75fr_1.35fr_.7fr]
                               items-center
                               border-b border-secondary-100
                               px-5 py-4
                               hover:cursor-pointer">

                            <div>

                                <p class="text-xs font-bold
                                       text-secondary-900">
                                    Direct Thermal Packing Labels (Roll 1000)
                                </p>

                                <p class="mt-1 text-[9px]
                                       text-secondary-400">
                                    SKU: LBL-THM-100 · Consumables
                                </p>

                            </div>


                            <div class="text-sm font-bold
                                   text-primary-600">
                                1,280
                            </div>


                            <div class="text-[11px] font-medium
                                   text-secondary-600">
                                150 units
                            </div>


                            <div class="text-[11px] font-semibold
                                   text-emerald-600">
                                +500 units
                            </div>


                            <div
                                class="flex items-center gap-2
                                   text-[10px] font-medium
                                   text-secondary-700">

                                <svg class="h-3.5 w-3.5 text-secondary-400" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21V8l9-5 9 5v13" />

                                    <path stroke-linecap="round" d="M8 21v-6h8v6" />
                                </svg>

                                Brisbane DC

                            </div>


                            <div class="text-right">

                                <span
                                    class="inline-flex items-center gap-1.5
                                       rounded-full
                                       bg-emerald-50
                                       px-2.5 py-1
                                       text-[9px] font-semibold
                                       text-emerald-700">

                                    <span
                                        class="inventory-live-dot h-1.5 w-1.5
                                           rounded-full bg-emerald-500">
                                    </span>

                                    Live Sync

                                </span>

                            </div>

                        </div>



                        {{-- =================================================
                        ROW 04
                    ================================================== --}}

                        <div
                            class="inventory-availability-row
                               grid grid-cols-[2.2fr_.75fr_.75fr_.75fr_1.35fr_.7fr]
                               items-center
                               px-5 py-4
                               hover:cursor-pointer">

                            <div>

                                <p class="text-xs font-bold
                                       text-secondary-900">
                                    Heavy-Duty Scanner Holster Belt
                                </p>

                                <p class="mt-1 text-[9px]
                                       text-secondary-400">
                                    SKU: ACC-HST-109 · Accessories
                                </p>

                            </div>


                            <div class="text-sm font-bold
                                   text-primary-600">
                                412
                            </div>


                            <div class="text-[11px] font-medium
                                   text-secondary-600">
                                35 units
                            </div>


                            <div class="text-[11px] font-semibold
                                   text-emerald-600">
                                +100 units
                            </div>


                            <div
                                class="flex items-center gap-2
                                   text-[10px] font-medium
                                   text-secondary-700">

                                <svg class="h-3.5 w-3.5 text-secondary-400" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21V8l9-5 9 5v13" />

                                    <path stroke-linecap="round" d="M8 21v-6h8v6" />
                                </svg>

                                Perth Hub

                            </div>


                            <div class="text-right">

                                <span
                                    class="inline-flex items-center gap-1.5
                                       rounded-full
                                       bg-emerald-50
                                       px-2.5 py-1
                                       text-[9px] font-semibold
                                       text-emerald-700">

                                    <span
                                        class="inventory-live-dot h-1.5 w-1.5
                                           rounded-full bg-emerald-500">
                                    </span>

                                    Live Sync

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ============================================================
    EVERY MOVEMENT, TRACKED AUTOMATICALLY
============================================================ --}}

    <section id="movement-engine" class="relative overflow-hidden bg-secondary-800 py-20 text-white sm:py-24 lg:py-28">

        {{-- ========================================================
        BACKGROUND
    ========================================================= --}}

        <div class="pointer-events-none absolute inset-0 opacity-[0.08]"
            style="
            background-image:
                radial-gradient(circle, rgba(255,255,255,.7) 1px, transparent 1px);
            background-size: 20px 20px;
        ">
        </div>

        <div
            class="pointer-events-none absolute left-[15%] top-[-180px]
               h-[500px] w-[600px] rounded-full
               bg-primary-500/10 blur-[140px]">
        </div>

        <div
            class="pointer-events-none absolute right-[-200px] bottom-[-180px]
               h-[500px] w-[650px] rounded-full
               bg-cyan-400/5 blur-[160px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="max-w-3xl">

                <div
                    class="inline-flex items-center gap-2 text-[10px]
                       font-bold uppercase tracking-[0.18em]
                       text-emerald-400">
                    <span class="engine-pulse-dot h-1.5 w-1.5
                           rounded-full bg-emerald-400">
                    </span>

                    Automated Ledger Orchestration
                </div>


                <h2
                    class="mt-4 max-w-2xl text-3xl font-bold
                       tracking-[-0.035em] text-white
                       sm:text-4xl lg:text-[42px] lg:leading-[1.08]">
                    Every movement, tracked
                    <span class="block">
                        automatically.
                    </span>
                </h2>


                <p class="mt-4 max-w-2xl text-sm leading-6
                       text-secondary-300 sm:text-base">
                    Three trigger sources continuously feed into StockCore’s core
                    engine, instantly calculating available stock and committing
                    immutable ledger entries in real time.
                </p>

            </div>



            {{-- ====================================================
            MAIN ENGINE FLOW
        ===================================================== --}}

            <div class="mt-12 grid items-center gap-8
                   xl:grid-cols-[1fr_120px_1.2fr_120px_.75fr]">

                {{-- =================================================
                LEFT TRIGGERS
            ================================================== --}}

                <div class="space-y-3">

                    {{-- Trigger 01 --}}
                    <div
                        class="movement-trigger-card rounded-xl
                           border border-secondary-700
                           bg-secondary-700/70 p-5">

                        <div class="flex items-start justify-between">

                            <div>

                                <p
                                    class="text-[9px] font-bold uppercase
                                       tracking-[0.15em]
                                       text-primary-300">
                                    Trigger 01
                                </p>

                                <h3 class="mt-2 text-sm font-bold text-white">
                                    Sale Execution
                                </h3>

                            </div>


                            <svg class="h-4 w-4 text-primary-300" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 4h2l2.4 10.4a2 2 0 002 1.6h7.8a2 2 0 001.9-1.4L21 7H6" />
                            </svg>

                        </div>


                        <p class="mt-2 text-[11px] leading-5
                               text-secondary-300">
                            B2B online wholesale checkout, Shopify counter scan,
                            or approved purchase invoice.
                        </p>

                    </div>



                    {{-- Trigger 02 --}}
                    <div
                        class="movement-trigger-card rounded-xl
                           border border-secondary-700
                           bg-secondary-700/70 p-5">

                        <div class="flex items-start justify-between">

                            <div>

                                <p
                                    class="text-[9px] font-bold uppercase
                                       tracking-[0.15em]
                                       text-emerald-300">
                                    Trigger 02
                                </p>

                                <h3 class="mt-2 text-sm font-bold text-white">
                                    Dock Dispatch
                                </h3>

                            </div>


                            <svg class="h-4 w-4 text-emerald-300" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h11v9H3zM14 10h4l3 3v3h-7z" />

                                <circle cx="7" cy="18" r="1.5" />
                                <circle cx="18" cy="18" r="1.5" />
                            </svg>

                        </div>


                        <p class="mt-2 text-[11px] leading-5
                               text-secondary-300">
                            Handheld laser barcode confirmation, 3PL manifest
                            release, or courier dock handover.
                        </p>

                    </div>



                    {{-- Trigger 03 --}}
                    <div
                        class="movement-trigger-card rounded-xl
                           border border-secondary-700
                           bg-secondary-700/70 p-5">

                        <div class="flex items-start justify-between">

                            <div>

                                <p
                                    class="text-[9px] font-bold uppercase
                                       tracking-[0.15em]
                                       text-primary-300">
                                    Trigger 03
                                </p>

                                <h3 class="mt-2 text-sm font-bold text-white">
                                    Inter-Hub Transfer
                                </h3>

                            </div>


                            <svg class="h-4 w-4 text-primary-300" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 7h11m0 0l-3-3m3 3l-3 3M17 17H6m0 0l3 3m-3-3l3-3" />
                            </svg>

                        </div>


                        <p class="mt-2 text-[11px] leading-5
                               text-secondary-300">
                            Warehouse team relocation between Sydney Central,
                            Melbourne, and Brisbane nodes.
                        </p>

                    </div>

                </div>



                {{-- =================================================
                LEFT CONNECTION
            ================================================== --}}

                <div class="relative hidden h-[150px]
                       items-center justify-center xl:flex">

                    <div class="relative h-full w-full">

                        {{-- top line --}}
                        <div
                            class="absolute left-0 top-[20%]
                               h-px w-[70%]
                               border-t border-dashed
                               border-primary-400/50">
                        </div>

                        {{-- middle line --}}
                        <div
                            class="absolute left-0 top-1/2
                               h-px w-full
                               -translate-y-1/2
                               border-t border-dashed
                               border-primary-400/60">
                        </div>

                        {{-- bottom --}}
                        <div
                            class="absolute bottom-[20%] left-0
                               h-px w-[70%]
                               border-t border-dashed
                               border-primary-400/50">
                        </div>


                        <div
                            class="engine-flow-dot bg-primary-400
                               shadow-[0_0_12px_rgba(96,165,250,.8)]">
                        </div>

                        <div class="engine-flow-dot delay-one
                               bg-primary-400">
                        </div>

                        <div class="engine-flow-dot delay-two
                               bg-primary-400">
                        </div>

                    </div>

                </div>



                {{-- =================================================
                SYNC ENGINE
            ================================================== --}}

                <div
                    class="engine-card-float rounded-2xl
                       border border-primary-500/20
                       bg-primary-900/50 p-6
                       shadow-[0_25px_60px_rgba(2,6,23,.25)]
                       backdrop-blur">

                    <div class="flex items-center gap-2">

                        <span
                            class="flex h-6 w-6 items-center justify-center
                               rounded-md bg-primary-500/20
                               text-primary-300">
                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <circle cx="12" cy="12" r="8" />

                                <path stroke-linecap="round" d="M12 8v4l3 2" />
                            </svg>
                        </span>

                        <p
                            class="text-[9px] font-bold uppercase
                               tracking-[0.14em]
                               text-secondary-300">
                            Core Computation Kernel
                        </p>

                    </div>


                    <h3 class="mt-4 text-xl font-bold text-white">
                        StockCore Sync Engine
                    </h3>


                    <p class="mt-2 text-[11px] leading-5
                           text-secondary-300">
                        Processes raw delta payloads, evaluates safety stock
                        buffers, validates batch logic (FIFO), and locks the
                        record.
                    </p>



                    <div class="mt-5 space-y-2">

                        <div
                            class="flex items-center justify-between
                               rounded-lg bg-secondary-950/30
                               px-3 py-2">
                            <span class="text-[9px] text-secondary-400">
                                FIFO Allocation
                            </span>

                            <span
                                class="font-mono text-[9px]
                                   font-semibold text-emerald-300">
                                BATCH: STK-2848-06
                            </span>
                        </div>


                        <div
                            class="flex items-center justify-between
                               rounded-lg bg-secondary-950/30
                               px-3 py-2">
                            <span class="text-[9px] text-secondary-400">
                                Latency Target
                            </span>

                            <span class="font-mono text-[9px]
                                   font-semibold text-white">
                                16.2 ms avg
                            </span>
                        </div>


                        <div
                            class="flex items-center justify-between
                               rounded-lg bg-secondary-950/30
                               px-3 py-2">
                            <span class="text-[9px] text-secondary-400">
                                Multi-Channel Push
                            </span>

                            <span class="font-mono text-[9px]
                                   font-semibold text-white">
                                4 endpoints synced
                            </span>
                        </div>

                    </div>

                </div>



                {{-- =================================================
                RIGHT CONNECTION
            ================================================== --}}

                <div class="relative hidden h-[2px]
                       xl:block">

                    <div
                        class="absolute inset-0
                           border-t border-dashed
                           border-emerald-400/60">
                    </div>


                    <div
                        class="engine-flow-dot bg-emerald-400
                           shadow-[0_0_12px_rgba(52,211,153,.8)]">
                    </div>

                    <div class="engine-flow-dot delay-one
                           bg-emerald-400">
                    </div>

                </div>



                {{-- =================================================
                OUTPUT SUMMARY
            ================================================== --}}

                <div class="space-y-3">

                    <div class="rounded-xl border border-secondary-700
                           bg-secondary-700/70 p-4">

                        <p
                            class="text-[8px] font-bold uppercase
                               tracking-[0.14em]
                               text-secondary-400">
                            Ledger Commit
                        </p>

                        <p class="mt-2 font-mono text-xs
                               font-bold text-emerald-300">
                            LGR-89421
                        </p>

                    </div>


                    <div class="rounded-xl border border-secondary-700
                           bg-secondary-700/70 p-4">

                        <p
                            class="text-[8px] font-bold uppercase
                               tracking-[0.14em]
                               text-secondary-400">
                            New Balance
                        </p>

                        <p class="mt-2 text-sm font-bold text-white">
                            248 Units
                        </p>

                    </div>


                    <div class="rounded-xl border border-secondary-700
                           bg-secondary-700/70 p-4">

                        <p
                            class="text-[8px] font-bold uppercase
                               tracking-[0.14em]
                               text-secondary-400">
                            Audit Hash
                        </p>

                        <p class="mt-2 font-mono text-xs
                               font-bold text-white">
                            VERIFIED ✓
                        </p>

                    </div>

                </div>

            </div>



            {{-- ====================================================
            LIVE MOVEMENT LEDGER
        ===================================================== --}}

            <div class="mt-12">

                <div
                    class="flex flex-col gap-4
                       sm:flex-row sm:items-center
                       sm:justify-between">

                    <div class="flex items-center gap-3">

                        <span class="ledger-live-dot h-2 w-2
                               rounded-full bg-emerald-400">
                        </span>

                        <p
                            class="text-[9px] font-bold uppercase
                               tracking-[0.16em]
                               text-emerald-300">
                            Live Movement Ledger
                        </p>

                        <span class="hidden text-[9px]
                               text-secondary-400 sm:inline">
                            AU-SYD-1 Primary Ledger
                        </span>

                    </div>


                    <div class="font-mono text-[9px]
                           text-secondary-400">
                        <span class="text-white">
                            612ms
                        </span>

                        · All movements

                        <span class="ml-1 text-emerald-300">
                            ▲ 241 ops today
                        </span>
                    </div>

                </div>



                {{-- Table --}}
                <div
                    class="mt-3 overflow-hidden rounded-xl
                       border border-secondary-700
                       bg-secondary-900/50">

                    <div class="overflow-x-auto">

                        <div class="min-w-[1000px]">

                            {{-- HEADER --}}
                            <div
                                class="grid
                                   grid-cols-[1fr_2fr_1fr_1fr_1fr_1.35fr_1.2fr]
                                   bg-secondary-700/80
                                   px-4 py-3">

                                @foreach (['Timestamp', 'Item & SKU', 'Movement', 'Qty Delta', 'Reference', 'Location', 'Verified By'] as $heading)
                                    <div
                                        class="text-[8px] font-bold
                                           uppercase tracking-[0.14em]
                                           text-secondary-300">
                                        {{ $heading }}
                                    </div>
                                @endforeach

                            </div>



                            {{-- ROW 1 --}}
                            <div
                                class="movement-ledger-row grid
                                   grid-cols-[1fr_2fr_1fr_1fr_1fr_1.35fr_1.2fr]
                                   items-center
                                   border-b border-secondary-700
                                   px-4 py-4">

                                <div class="font-mono text-[9px]
                                       text-primary-300">
                                    10:42:18
                                </div>


                                <div>

                                    <p
                                        class="text-[10px]
                                           font-semibold text-white">
                                        Mechanical Keyboard 200
                                    </p>

                                    <p
                                        class="mt-1 text-[8px]
                                           text-secondary-400">
                                        SKU: KB-SCN-200
                                    </p>

                                </div>


                                <div>

                                    <span
                                        class="rounded-md bg-red-500/10
                                           px-2 py-1
                                           text-[8px] font-semibold
                                           text-red-300">
                                        OUT [Sale]
                                    </span>

                                </div>


                                <div
                                    class="font-mono text-[10px]
                                       font-semibold text-white">
                                    -5 units
                                </div>


                                <div class="font-mono text-[9px]
                                       text-primary-300">
                                    #SO-1842
                                </div>


                                <div class="text-[9px]
                                       text-secondary-300">
                                    Sydney DC · Bay 01
                                </div>


                                <div
                                    class="text-[9px]
                                       font-semibold text-emerald-300">
                                    System Webhook
                                </div>

                            </div>



                            {{-- ROW 2 --}}
                            <div
                                class="movement-ledger-row grid
                                   grid-cols-[1fr_2fr_1fr_1fr_1fr_1.35fr_1.2fr]
                                   items-center
                                   border-b border-secondary-700
                                   px-4 py-4">

                                <div class="font-mono text-[9px]
                                       text-primary-300">
                                    10:41:46
                                </div>


                                <div>

                                    <p
                                        class="text-[10px]
                                           font-semibold text-white">
                                        Thermal Shipping Labels 1000x
                                    </p>

                                    <p
                                        class="mt-1 text-[8px]
                                           text-secondary-400">
                                        SKU: THM-LB-100
                                    </p>

                                </div>


                                <div>

                                    <span
                                        class="rounded-md bg-red-500/10
                                           px-2 py-1
                                           text-[8px] font-semibold
                                           text-red-300">
                                        OUT [Dispatch]
                                    </span>

                                </div>


                                <div
                                    class="font-mono text-[10px]
                                       font-semibold text-white">
                                    -120 units
                                </div>


                                <div class="font-mono text-[9px]
                                       text-primary-300">
                                    DSP-894
                                </div>


                                <div class="text-[9px]
                                       text-secondary-300">
                                    Melbourne DC · Row 12
                                </div>


                                <div
                                    class="text-[9px]
                                       font-semibold text-emerald-300">
                                    Dock Scanner
                                </div>

                            </div>



                            {{-- ROW 3 --}}
                            <div
                                class="movement-ledger-row grid
                                   grid-cols-[1fr_2fr_1fr_1fr_1fr_1.35fr_1.2fr]
                                   items-center
                                   border-b border-secondary-700
                                   px-4 py-4">

                                <div class="font-mono text-[9px]
                                       text-primary-300">
                                    10:41:12
                                </div>


                                <div>

                                    <p
                                        class="text-[10px]
                                           font-semibold text-white">
                                        Barcode Printer Pro Enterprise
                                    </p>

                                    <p
                                        class="mt-1 text-[8px]
                                           text-secondary-400">
                                        SKU: PRN-ENT-40
                                    </p>

                                </div>


                                <div>

                                    <span
                                        class="rounded-md bg-primary-500/10
                                           px-2 py-1
                                           text-[8px] font-semibold
                                           text-primary-300">
                                        OUT [Transfer]
                                    </span>

                                </div>


                                <div
                                    class="font-mono text-[10px]
                                       font-semibold text-white">
                                    -25 units
                                </div>


                                <div class="font-mono text-[9px]
                                       text-primary-300">
                                    TR-218
                                </div>


                                <div class="text-[9px]
                                       text-secondary-300">
                                    Brisbane DC · Wharf
                                </div>


                                <div
                                    class="text-[9px]
                                       font-semibold text-emerald-300">
                                    Auto-Sync Gateway
                                </div>

                            </div>



                            {{-- ROW 4 --}}
                            <div
                                class="movement-ledger-row grid
                                   grid-cols-[1fr_2fr_1fr_1fr_1fr_1.35fr_1.2fr]
                                   items-center px-4 py-4">

                                <div class="font-mono text-[9px]
                                       text-primary-300">
                                    10:40:55
                                </div>


                                <div>

                                    <p
                                        class="text-[10px]
                                           font-semibold text-white">
                                        Impact Gaskets Pack (18x)
                                    </p>

                                    <p
                                        class="mt-1 text-[8px]
                                           text-secondary-400">
                                        SKU: PK-GSK-18
                                    </p>

                                </div>


                                <div>

                                    <span
                                        class="rounded-md bg-amber-500/10
                                           px-2 py-1
                                           text-[8px] font-semibold
                                           text-amber-300">
                                        OUT [Damage]
                                    </span>

                                </div>


                                <div
                                    class="font-mono text-[10px]
                                       font-semibold text-white">
                                    -2 units
                                </div>


                                <div class="font-mono text-[9px]
                                       text-primary-300">
                                    ADJ-081
                                </div>


                                <div class="text-[9px]
                                       text-secondary-300">
                                    Sydney DC · Quarantine
                                </div>


                                <div
                                    class="text-[9px]
                                       font-semibold text-emerald-300">
                                    QC Operator
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- ============================================================
    WHAT AUTOMATIC TRACKING GETS YOU
============================================================ --}}

    <section id="automatic-tracking-benefits"
        class="relative overflow-hidden bg-background-muted py-20 sm:py-24 lg:py-28">

        {{-- ========================================================
        BACKGROUND
    ========================================================= --}}

        <div
            class="pointer-events-none absolute left-1/2 top-[-250px]
               h-[500px] w-[900px]
               -translate-x-1/2 rounded-full
               bg-primary-100/40 blur-[130px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="max-w-3xl">

                <p class="text-[11px] font-bold uppercase
                       tracking-[0.18em] text-primary-600">
                    Operational Assurance
                </p>


                <h2
                    class="mt-3 text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-950
                       sm:text-4xl lg:text-[42px]">
                    What automatic tracking gets you.
                </h2>

            </div>



            {{-- ====================================================
            BENEFITS
        ===================================================== --}}

            <div class="mt-10 space-y-5">

                {{-- =================================================
                BENEFIT 01
                REAL AVAILABLE STOCK
            ================================================== --}}

                <article
                    class="tracking-benefit-row
                       grid gap-8 rounded-[20px]
                       border border-secondary-200
                       bg-white px-6 py-7
                       shadow-[0_12px_35px_rgba(15,23,42,0.035)]
                       sm:px-8 lg:grid-cols-[280px_1fr]
                       lg:items-center lg:px-10 lg:py-8">

                    {{-- LEFT METRIC --}}
                    <div>

                        <div
                            class="inline-flex items-center gap-2
                               text-[9px] font-bold uppercase
                               tracking-[0.16em]
                               text-emerald-600">
                            <span
                                class="benefit-live-dot h-1.5 w-1.5
                                   rounded-full bg-emerald-500">
                            </span>

                            Always Available
                        </div>


                        <div class="mt-3">

                            <span
                                class="tracking-metric block
                                   text-5xl font-extrabold
                                   tracking-[-0.05em]
                                   text-primary-600">
                                100%
                            </span>

                            <p
                                class="mt-2 text-[9px]
                                   font-semibold uppercase
                                   tracking-[0.14em]
                                   text-secondary-500">
                                Physical to Digital Parity
                            </p>

                        </div>

                    </div>


                    {{-- RIGHT CONTENT --}}
                    <div>

                        <h3 class="text-lg font-bold
                               text-secondary-950 sm:text-xl">
                            Always know real available stock.
                        </h3>


                        <p class="mt-2 max-w-3xl text-sm leading-6
                               text-secondary-500">
                            What's on screen matches what is actually on the shelf,
                            every second. Sales reps in Brisbane, warehouse pickers
                            in Melbourne, and procurement leads in Sydney inspect the
                            exact same reliable source of truth without manual
                            spreadsheet cross-checks or phone confirmations.
                        </p>

                    </div>

                </article>



                {{-- =================================================
                BENEFIT 02
                PREVENT OVERSELLING
            ================================================== --}}

                <article
                    class="tracking-benefit-row
                       grid gap-8 rounded-[20px]
                       border border-primary-100
                       bg-primary-50/55
                       px-6 py-7
                       shadow-[0_12px_35px_rgba(37,99,235,0.035)]
                       sm:px-8
                       lg:grid-cols-[1fr_320px]
                       lg:items-center
                       lg:px-10 lg:py-8">

                    {{-- LEFT CONTENT --}}
                    <div>

                        <h3 class="text-lg font-bold
                               text-secondary-950 sm:text-xl">
                            Avoid overselling across all sales channels.
                        </h3>


                        <p class="mt-2 max-w-3xl text-sm leading-6
                               text-secondary-500">
                            Stock updates the instant a sale is confirmed, not at
                            the end of the shift. Lock in physical available units
                            across e-commerce storefronts, wholesale EDI orders,
                            and phone quotes before items physically leave the dock
                            bays.
                        </p>

                    </div>



                    {{-- RIGHT MINI VISUAL --}}
                    <div
                        class="benefit-float rounded-xl
                           border border-secondary-200
                           bg-white p-4
                           shadow-[0_10px_30px_rgba(15,23,42,0.05)]">

                        <div class="flex items-center justify-between
                               gap-5">

                            <div>

                                <p
                                    class="text-[8px] font-bold uppercase
                                       tracking-[0.14em]
                                       text-secondary-400">
                                    Average Oversell Rate
                                </p>

                            </div>


                            <p
                                class="text-3xl font-extrabold
                                   tracking-[-0.04em]
                                   text-emerald-600">
                                0.02%
                            </p>

                        </div>


                        <div
                            class="mt-4 flex items-center justify-between
                               rounded-lg bg-secondary-50
                               px-3 py-2">

                            <span
                                class="text-[9px] font-semibold
                                   uppercase tracking-[0.11em]
                                   text-secondary-400">
                                Safety
                            </span>


                            <span
                                class="inline-flex items-center gap-1.5
                                   rounded-full bg-emerald-50
                                   px-2.5 py-1
                                   text-[8px] font-bold
                                   uppercase tracking-[0.08em]
                                   text-emerald-700">

                                <span
                                    class="benefit-live-dot
                                       h-1.5 w-1.5
                                       rounded-full bg-emerald-500">
                                </span>

                                Zero Stockout Penalties

                            </span>

                        </div>

                    </div>

                </article>



                {{-- =================================================
                BENEFIT 03
                AUDIT TRAIL
            ================================================== --}}

                <article
                    class="tracking-benefit-row
                       grid gap-8 rounded-[20px]
                       border border-secondary-200
                       bg-white px-6 py-7
                       shadow-[0_12px_35px_rgba(15,23,42,0.035)]
                       sm:px-8
                       lg:grid-cols-[340px_1fr]
                       lg:items-center
                       lg:px-10 lg:py-8">

                    {{-- LEFT LEDGER CARD --}}
                    <div
                        class="overflow-hidden rounded-xl
                           border border-primary-100
                           bg-primary-50/70">

                        <div class="border-b border-primary-100
                               px-4 py-3">

                            <p
                                class="text-[8px] font-bold uppercase
                                   tracking-[0.15em]
                                   text-primary-500">
                                Ledger Commit Hash
                            </p>

                        </div>


                        <div class="px-4 py-4">

                            <div
                                class="flex flex-wrap items-center gap-2
                                   font-mono text-[9px]">

                                <span class="font-semibold
                                       text-primary-700">
                                    SHA-256:
                                </span>

                                <span class="text-secondary-500">
                                    8F17C2A4...F614
                                </span>

                            </div>


                            <div class="mt-4 flex items-center
                                   justify-between gap-3">

                                <span
                                    class="font-mono text-[8px]
                                       text-secondary-400">
                                    AUDIT LOG GENERATED
                                </span>


                                <span
                                    class="inline-flex items-center gap-1.5
                                       text-[8px] font-bold
                                       uppercase text-emerald-600">

                                    <span
                                        class="benefit-live-dot
                                           h-1.5 w-1.5
                                           rounded-full bg-emerald-500">
                                    </span>

                                    Immutable Block

                                </span>

                            </div>

                        </div>

                    </div>



                    {{-- RIGHT CONTENT --}}
                    <div>

                        <h3 class="text-lg font-bold
                               text-secondary-950 sm:text-xl">
                            Full audit trail of every single movement.
                        </h3>


                        <p class="mt-2 max-w-3xl text-sm leading-6
                               text-secondary-500">
                            Every increase and decrease is logged with transaction
                            reference, operator timestamp, and reason code. Satisfy
                            Australian tax office (ATO) audit trails, corporate
                            governance, and insurance verifications with a single
                            exportable ledger click.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>

    {{-- ============================================================
    CONNECTED ECOSYSTEM / INTEGRATIONS
============================================================ --}}

    <section id="connected-ecosystem" class="relative overflow-hidden bg-white py-20 sm:py-24 lg:py-28">

        {{-- ========================================================
        BACKGROUND EFFECT
    ========================================================= --}}

        <div
            class="pointer-events-none absolute left-1/2 top-[-220px]
               h-[480px] w-[850px]
               -translate-x-1/2 rounded-full
               bg-primary-50 blur-[120px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="max-w-3xl">

                <p class="text-[11px] font-bold uppercase
                       tracking-[0.18em] text-primary-600">
                    Connected Ecosystem
                </p>


                <h2
                    class="mt-3 max-w-2xl text-3xl font-bold
                       tracking-[-0.035em] text-secondary-950
                       sm:text-4xl lg:text-[42px] lg:leading-[1.08]">
                    Synced with the platforms you already
                    <span class="block">
                        sell on.
                    </span>
                </h2>


                <p class="mt-4 max-w-2xl text-sm leading-6
                       text-secondary-500 sm:text-base">
                    Stock decreases automatically even when a sale executes
                    through an external channel — keeping your financial ledgers
                    and physical bay shelves in perpetual, non-drifting
                    synchronization.
                </p>

            </div>



            {{-- ====================================================
            INTEGRATION ORCHESTRATION
        ===================================================== --}}

            <div
                class="mt-12 rounded-[22px]
                   border border-primary-100
                   bg-primary-50/70
                   p-6 sm:p-8 lg:p-10">

                <div class="grid items-center gap-10
                       lg:grid-cols-[1fr_140px_.65fr_140px_1.25fr]">

                    {{-- =================================================
                    LEFT — CONNECTED PLATFORMS
                ================================================== --}}

                    <div class="space-y-3">

                        {{-- XERO --}}
                        <div
                            class="integration-platform-card
                               flex items-center justify-between
                               rounded-xl border border-secondary-200
                               bg-white px-4 py-3">

                            <div class="flex items-center gap-3">

                                <div
                                    class="flex h-9 w-9 shrink-0
                                       items-center justify-center
                                       rounded-lg bg-primary-50
                                       text-[11px] font-bold
                                       text-primary-600">
                                    X
                                </div>


                                <div>

                                    <p
                                        class="text-xs font-bold
                                           text-secondary-900">
                                        Xero Cloud Accounting
                                    </p>

                                    <div class="mt-1 flex items-center gap-1.5">

                                        <span
                                            class="integration-pulse
                                               h-1.5 w-1.5
                                               rounded-full bg-emerald-500">
                                        </span>

                                        <span
                                            class="text-[9px]
                                               font-medium
                                               text-emerald-600">
                                            Active Webhook
                                        </span>

                                    </div>

                                </div>

                            </div>


                            <svg class="h-4 w-4 text-secondary-400" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 8h8v8M16 8l-9 9" />
                            </svg>

                        </div>



                        {{-- CIN7 --}}
                        <div
                            class="integration-platform-card
                               flex items-center justify-between
                               rounded-xl border border-secondary-200
                               bg-white px-4 py-3">

                            <div class="flex items-center gap-3">

                                <div
                                    class="flex h-9 w-9 shrink-0
                                       items-center justify-center
                                       rounded-lg bg-primary-50
                                       text-[10px] font-bold
                                       text-primary-600">
                                    C7
                                </div>


                                <div>

                                    <p
                                        class="text-xs font-bold
                                           text-secondary-900">
                                        Cin7 Core / Omni
                                    </p>

                                    <div class="mt-1 flex items-center gap-1.5">

                                        <span
                                            class="integration-pulse
                                               h-1.5 w-1.5
                                               rounded-full bg-emerald-500">
                                        </span>

                                        <span
                                            class="text-[9px]
                                               font-medium
                                               text-emerald-600">
                                            Bi-directional sync
                                        </span>

                                    </div>

                                </div>

                            </div>


                            <svg class="h-4 w-4 text-secondary-400" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 8h8v8M16 8l-9 9" />
                            </svg>

                        </div>



                        {{-- SHOPIFY --}}
                        <div
                            class="integration-platform-card
                               flex items-center justify-between
                               rounded-xl border border-secondary-200
                               bg-white px-4 py-3">

                            <div class="flex items-center gap-3">

                                <div
                                    class="flex h-9 w-9 shrink-0
                                       items-center justify-center
                                       rounded-lg bg-primary-50
                                       text-[9px] font-bold
                                       text-primary-600">
                                    SF
                                </div>


                                <div>

                                    <p
                                        class="text-xs font-bold
                                           text-secondary-900">
                                        Shopify Plus Storefront
                                    </p>

                                    <div class="mt-1 flex items-center gap-1.5">

                                        <span
                                            class="integration-pulse
                                               h-1.5 w-1.5
                                               rounded-full bg-emerald-500">
                                        </span>

                                        <span
                                            class="text-[9px]
                                               font-medium
                                               text-emerald-600">
                                            Event stream
                                        </span>

                                    </div>

                                </div>

                            </div>


                            <svg class="h-4 w-4 text-secondary-400" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 8h8v8M16 8l-9 9" />
                            </svg>

                        </div>

                    </div>



                    {{-- =================================================
                    LEFT FLOW
                ================================================== --}}

                    <div class="relative hidden lg:block">

                        <div
                            class="relative h-px w-full
                               border-t border-dashed
                               border-primary-300">

                            <span
                                class="integration-flow-dot
                                   bg-primary-500
                                   shadow-[0_0_10px_rgba(59,130,246,.5)]">
                            </span>

                            <span class="integration-flow-dot delay-1
                                   bg-primary-500">
                            </span>

                        </div>

                    </div>



                    {{-- =================================================
                    MIDDLE — AUTOMATIC DEDUCTION
                ================================================== --}}

                    <div class="text-center">

                        <p
                            class="text-[9px] font-bold uppercase
                               tracking-[0.16em]
                               text-primary-600">
                            Automatic Deduction
                        </p>


                        <div
                            class="integration-engine-float
                               mx-auto mt-4 flex h-12 w-12
                               items-center justify-center
                               rounded-full bg-primary-600
                               text-white
                               shadow-[0_10px_28px_rgba(37,99,235,.24)]">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18M7 8l5-5 5 5" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l5 5 5-5" />
                            </svg>

                        </div>


                        <p class="mt-4 text-[10px]
                               text-secondary-500">
                            Payload committed in &lt;20ms
                        </p>

                    </div>



                    {{-- =================================================
                    RIGHT FLOW
                ================================================== --}}

                    <div class="relative hidden lg:block">

                        <div
                            class="relative h-px w-full
                               border-t border-dashed
                               border-emerald-300">

                            <span
                                class="integration-flow-dot
                                   bg-emerald-500
                                   shadow-[0_0_10px_rgba(16,185,129,.5)]">
                            </span>

                            <span class="integration-flow-dot delay-2
                                   bg-emerald-500">
                            </span>

                        </div>

                    </div>



                    {{-- =================================================
                    RIGHT — PAYLOAD
                ================================================== --}}

                    <div
                        class="integration-payload overflow-hidden
                           rounded-xl border border-secondary-200
                           bg-white">

                        {{-- Payload header --}}
                        <div
                            class="flex items-center justify-between
                               border-b border-secondary-100
                               px-4 py-3">

                            <p
                                class="font-mono text-[8px]
                                   font-bold uppercase
                                   tracking-[0.12em]
                                   text-secondary-400">
                                Incoming Payload: INV-18492
                            </p>


                            <span
                                class="inline-flex items-center gap-1.5
                                   text-[8px] font-bold
                                   text-emerald-600">

                                <span
                                    class="integration-pulse
                                       h-1.5 w-1.5
                                       rounded-full bg-emerald-500">
                                </span>

                                200 OK

                            </span>

                        </div>



                        {{-- Code --}}
                        <div class="bg-secondary-50/80
                               px-4 py-4">

                            <pre
                                class="overflow-x-auto whitespace-pre-wrap
                                   font-mono text-[9px]
                                   leading-5 text-secondary-600"><code>{
    "event": "sales_invoice.created",
    "invoice_id": "INV-1842",
    "channel": "xero",
    "item_code": "SKU-SCNX100",
    "quantity_deducted": 4,
    "sync_execution_ms": 42
}</code></pre>

                        </div>



                        {{-- Result --}}
                        <div
                            class="flex flex-col gap-2
                               border-t border-secondary-100
                               px-4 py-3
                               sm:flex-row
                               sm:items-center
                               sm:justify-between">

                            <span class="text-[9px] font-medium
                                   text-secondary-500">
                                Shelf deduction confirmed
                            </span>


                            <span
                                class="font-mono text-[9px]
                                   font-bold text-primary-600">
                                Balance: 112 → 108 units
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ====================================================
            SMALL FOOTNOTE / NEXT SECTION LABEL
        ===================================================== --}}

            <div class="mt-10">

                <p
                    class="text-[9px] font-bold uppercase
                       tracking-[0.16em]
                       text-primary-600">
                    Orchestration Suite
                </p>

            </div>

        </div>

    </section>
    {{-- ============================================================
    WORKS TOGETHER WITH
============================================================ --}}

    <section id="works-together" class="relative overflow-hidden bg-background-muted py-16 sm:py-20">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="flex flex-col gap-5
                   sm:flex-row sm:items-end sm:justify-between">

                <div>

                    <p
                        class="text-[10px] font-bold uppercase
                           tracking-[0.18em] text-primary-600">
                        Orchestration Suite
                    </p>


                    <h2
                        class="mt-2 text-3xl font-bold
                           tracking-[-0.035em]
                           text-secondary-950
                           sm:text-4xl">
                        Works together with.
                    </h2>

                </div>


                {{-- Browse all --}}
                <a href="#"
                    class="works-feature-link inline-flex items-center gap-2
                       text-sm font-semibold text-primary-600
                       transition hover:text-primary-700">
                    Browse all features

                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                    </svg>

                </a>

            </div>



            {{-- ====================================================
            FEATURE CARDS
        ===================================================== --}}

            <div class="mt-10 grid gap-5
                   md:grid-cols-2
                   lg:grid-cols-3">

                {{-- =================================================
                FIFO DISPATCH
            ================================================== --}}

                <article
                    class="works-feature-card
                       rounded-[18px]
                       border border-secondary-200
                       bg-white p-6
                       shadow-[0_10px_28px_rgba(15,23,42,0.035)]">

                    <div
                        class="flex h-10 w-10 items-center
                           justify-center rounded-xl
                           bg-primary-50 text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 7h14M5 12h9M5 17h5" />
                        </svg>
                    </div>


                    <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                        FIFO Dispatch
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Deduct and cost physical products strictly according
                        to oldest batch received, preventing inventory spoilage
                        and margin drift.
                    </p>


                    <a href="#"
                        class="works-feature-link mt-5 inline-flex
                           items-center gap-2 text-xs
                           font-semibold text-primary-600
                           hover:text-primary-700">
                        Learn more

                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>

                    </a>

                </article>



                {{-- =================================================
                LANDING COST TRACKING
            ================================================== --}}

                <article
                    class="works-feature-card
                       rounded-[18px]
                       border border-secondary-200
                       bg-white p-6
                       shadow-[0_10px_28px_rgba(15,23,42,0.035)]">

                    <div
                        class="flex h-10 w-10 items-center
                           justify-center rounded-xl
                           bg-primary-50 text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <circle cx="12" cy="12" r="8" />

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.5 9.5c-.5-.5-1.2-.8-2-.8-1.3 0-2.3.7-2.3 1.7 0 2.6 4.8 1.2 4.8 3.8 0 1-1 1.8-2.5 1.8-.9 0-1.7-.3-2.3-.9M12 7v10" />
                        </svg>
                    </div>


                    <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                        Landing Cost Tracking
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Factor ocean freight, Sydney port customs, and local
                        handling into the true landed value of every unit
                        leaving the warehouse.
                    </p>


                    <a href="#"
                        class="works-feature-link mt-5 inline-flex
                           items-center gap-2 text-xs
                           font-semibold text-primary-600
                           hover:text-primary-700">
                        Learn more

                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>

                    </a>

                </article>



                {{-- =================================================
                SCAN & INGEST DOCUMENTS
            ================================================== --}}

                <article
                    class="works-feature-card
                       rounded-[18px]
                       border border-secondary-200
                       bg-white p-6
                       shadow-[0_10px_28px_rgba(15,23,42,0.035)]">

                    <div
                        class="flex h-10 w-10 items-center
                           justify-center rounded-xl
                           bg-primary-50 text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 3H5a2 2 0 00-2 2v2M17 3h2a2 2 0 012 2v2M7 21H5a2 2 0 01-2-2v-2M17 21h2a2 2 0 002-2v-2" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 8h8v8H8z" />
                        </svg>
                    </div>


                    <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                        Scan & Ingest Documents
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Ingest supplier manifests, paper delivery dockets,
                        and PDF invoices directly into live inventory using
                        optical AI extraction.
                    </p>


                    <a href="#"
                        class="works-feature-link mt-5 inline-flex
                           items-center gap-2 text-xs
                           font-semibold text-primary-600
                           hover:text-primary-700">
                        Learn more

                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>

                    </a>

                </article>

            </div>

        </div>

    </section>
    {{-- ============================================================
    FINAL CTA
============================================================ --}}

    <section id="stock-tracking-cta" class="bg-background-muted px-4 py-8 sm:px-6 sm:py-12 lg:px-8">

        <div class="mx-auto max-w-7xl">

            <div
                class="stock-final-cta overflow-hidden rounded-[22px]
                   border border-secondary-700
                   bg-secondary-800 px-6 py-14
                   text-center
                   shadow-[0_24px_60px_rgba(15,23,42,0.12)]
                   sm:px-10 sm:py-16
                   lg:px-16 lg:py-20">

                {{-- subtle top line --}}
                <div
                    class="pointer-events-none absolute left-1/2 top-0
                       h-px w-[55%] -translate-x-1/2
                       bg-gradient-to-r
                       from-transparent via-primary-400/40 to-transparent">
                </div>


                {{-- subtle dotted decoration --}}
                <div class="pointer-events-none absolute right-12 top-10
                       hidden h-24 w-24 opacity-[0.08] lg:block"
                    style="
                    background-image:
                        radial-gradient(circle, white 1px, transparent 1px);
                    background-size: 12px 12px;
                ">
                </div>


                {{-- =================================================
                BADGE
            ================================================== --}}

                <div
                    class="cta-badge inline-flex items-center gap-2
                       rounded-full border border-secondary-600
                       bg-secondary-700/80
                       px-3.5 py-1.5">

                    <span class="cta-status-dot h-1.5 w-1.5
                           rounded-full bg-primary-400">
                    </span>


                    <span
                        class="text-[9px] font-bold uppercase
                           tracking-[0.14em]
                           text-secondary-300">
                        Real-Time Telemetry for Modern Supply Chains
                    </span>

                </div>



                {{-- =================================================
                HEADING
            ================================================== --}}

                <h2
                    class="mx-auto mt-5 max-w-3xl
                       text-3xl font-bold
                       tracking-[-0.04em]
                       text-white
                       sm:text-4xl
                       lg:text-[42px]">
                    Stop trusting stale numbers.
                </h2>



                {{-- =================================================
                DESCRIPTION
            ================================================== --}}

                <p
                    class="mx-auto mt-4 max-w-2xl
                       text-sm leading-6
                       text-secondary-300
                       sm:text-base">
                    Start your free trial today and watch your inventory count
                    adjust itself the instant a sale, dock dispatch, or warehouse
                    transfer occurs.
                </p>



                {{-- =================================================
                CTA BUTTONS
            ================================================== --}}

                <div
                    class="mt-8 flex flex-col items-center
                       justify-center gap-3
                       sm:flex-row">

                    {{-- Primary --}}
                    <a href="{{ url('/signup') }}"
                        class="stock-cta-button inline-flex min-h-12
                           items-center justify-center
                           rounded-lg bg-primary-600
                           px-6 text-sm font-semibold
                           text-white
                           shadow-[0_10px_30px_rgba(37,99,235,0.28)]
                           hover:bg-primary-500
                           hover:shadow-[0_15px_35px_rgba(37,99,235,0.34)]">
                        Start Free Trial
                    </a>


                    {{-- Secondary --}}
                    <a href="#"
                        class="stock-cta-button inline-flex min-h-12
                           items-center justify-center
                           rounded-lg
                           px-6 text-sm font-semibold
                           text-white
                           hover:bg-white/5">
                        Book a 1-on-1 Demo
                    </a>

                </div>



                {{-- =================================================
                TRUST DETAILS
            ================================================== --}}

                <div
                    class="mt-8 flex flex-wrap items-center
                       justify-center gap-x-4 gap-y-3
                       text-[10px] font-medium
                       text-secondary-400">

                    {{-- trial --}}
                    <span>
                        14-day free trial
                    </span>


                    <span class="h-1 w-1 rounded-full
                           bg-secondary-600">
                    </span>


                    {{-- credit card --}}
                    <span>
                        No credit card required
                    </span>


                    <span class="h-1 w-1 rounded-full
                           bg-secondary-600">
                    </span>


                    {{-- cancellation --}}
                    <span>
                        Cancel anytime
                    </span>


                    <span class="h-1 w-1 rounded-full
                           bg-secondary-600">
                    </span>


                    {{-- hosted --}}
                    <span
                        class="inline-flex items-center gap-1.5
                           font-semibold text-emerald-400">

                        <span
                            class="cta-status-dot h-1.5 w-1.5
                               rounded-full bg-emerald-400">
                        </span>

                        Hosted in Sydney, Australia

                    </span>

                </div>

            </div>

        </div>

    </section>


    {{-- ============================================================
    PROCESS INTERACTION
============================================================ --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const processCards = document.querySelectorAll(
                '[data-process-step]'
            );

            const dynamicPanel = document.getElementById(
                'stock-process-dynamic'
            );

            const dynamicTitle = document.getElementById(
                'process-dynamic-title'
            );

            const dynamicDescription = document.getElementById(
                'process-dynamic-description'
            );

            const dynamicStats = document.getElementById(
                'process-dynamic-stats'
            );


            /*
            |--------------------------------------------------------------------------
            | Content for each step
            |--------------------------------------------------------------------------
            */

            const processContent = {

                sale: {
                    title: 'New Sale Event Detected',

                    description: 'StockCore receives an order event from POS, Shopify, WooCommerce or another connected sales channel.',

                    stats: `
                    <span class="text-secondary-500">
                        Order:
                    </span>

                    <span class="font-bold text-secondary-900">
                        #SO-1824
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-primary-600">
                        8 units requested
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-emerald-600">
                        Event received
                    </span>
                `
                },


                confirmed: {
                    title: 'Inventory Validation Completed',

                    description: 'The requested quantity is checked against physical stock, allocations, warehouse availability and order rules.',

                    stats: `
                    <span class="text-secondary-500">
                        Requested:
                    </span>

                    <span class="font-bold text-secondary-900">
                        8 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="text-secondary-500">
                        Available:
                    </span>

                    <span class="font-bold text-secondary-900">
                        120 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-emerald-600">
                        Approved
                    </span>
                `
                },


                deducted: {
                    title: 'Automatic Event Ingestion',

                    description: '4 simultaneous triggers: Sales, Shipments, Transfers & Internal Consumption.',

                    stats: `
                    <span class="text-secondary-500">
                        Before:
                    </span>

                    <span class="font-bold text-secondary-900">
                        120 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-red-500">
                        Sale -8 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="text-secondary-500">
                        After:
                    </span>

                    <span class="font-bold text-emerald-600">
                        112 units
                    </span>
                `
                },


                updated: {
                    title: 'Inventory Synced Everywhere',

                    description: 'The new available quantity is propagated across connected ERP, warehouse, sales and accounting systems.',

                    stats: `
                    <span class="text-secondary-500">
                        StockCore:
                    </span>

                    <span class="font-bold text-secondary-900">
                        112
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-primary-600">
                        Xero
                    </span>

                    <span class="text-secondary-300">
                        +
                    </span>

                    <span class="font-semibold text-primary-600">
                        Cin7
                    </span>

                    <span class="text-secondary-300">
                        +
                    </span>

                    <span class="font-semibold text-primary-600">
                        Shopify
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-emerald-600">
                        Synced
                    </span>
                `
                },


                logged: {
                    title: 'Movement Added to Audit Ledger',

                    description: 'Every decrease is recorded with its quantity, event type, reference, location, user and timestamp.',

                    stats: `
                    <span class="text-secondary-500">
                        Movement:
                    </span>

                    <span class="font-bold text-secondary-900">
                        -8 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-primary-600">
                        SO-1824
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-secondary-700">
                        Sydney DC
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-emerald-600">
                        Logged
                    </span>
                `
                }

            };


            /*
            |--------------------------------------------------------------------------
            | Card click
            |--------------------------------------------------------------------------
            */

            processCards.forEach(card => {

                card.addEventListener('click', function() {

                    const selectedStep =
                        this.dataset.processStep;


                    /*
                    |--------------------------------------------------------------------------
                    | Remove active state
                    |--------------------------------------------------------------------------
                    */

                    processCards.forEach(item => {

                        item.classList.remove('is-active');

                        item.classList.add(
                            'bg-white',
                            'border-secondary-200'
                        );

                    });


                    /*
                    |--------------------------------------------------------------------------
                    | Activate clicked card
                    |--------------------------------------------------------------------------
                    */

                    this.classList.remove(
                        'bg-white',
                        'border-secondary-200'
                    );

                    this.classList.add('is-active');


                    /*
                    |--------------------------------------------------------------------------
                    | Get matching content
                    |--------------------------------------------------------------------------
                    */

                    const content =
                        processContent[selectedStep];

                    if (!content) {
                        return;
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | Update dynamic area
                    |--------------------------------------------------------------------------
                    */

                    dynamicTitle.textContent =
                        content.title;

                    dynamicDescription.textContent =
                        content.description;

                    dynamicStats.innerHTML =
                        content.stats;


                    /*
                    |--------------------------------------------------------------------------
                    | Restart animation
                    |--------------------------------------------------------------------------
                    */

                    dynamicPanel.classList.remove(
                        'process-content-enter'
                    );

                    void dynamicPanel.offsetWidth;

                    dynamicPanel.classList.add(
                        'process-content-enter'
                    );

                });

            });

        });
    </script>




    {{-- ============================================================
    TAB INTERACTION
============================================================ --}}

    <script>
        $(function() {

            const $tabs = $('[data-stock-tab]');
            const $panels = $('[data-stock-panel]');

            $tabs.on('click', function() {

                const $this = $(this);
                const selectedTab = $this.attr('data-stock-tab');


                /*
                |--------------------------------------------------------------------------
                | Reset all tabs
                |--------------------------------------------------------------------------
                */

                $tabs
                    .removeClass(
                        'bg-white text-primary-600 shadow-sm'
                    )
                    .addClass(
                        'text-secondary-600'
                    );


                /*
                |--------------------------------------------------------------------------
                | Activate selected tab
                |--------------------------------------------------------------------------
                */

                $this
                    .removeClass('text-secondary-600')
                    .addClass(
                        'bg-white text-primary-600 shadow-sm'
                    );


                /*
                |--------------------------------------------------------------------------
                | Hide all panels
                |--------------------------------------------------------------------------
                */

                $panels
                    .addClass('hidden')
                    .removeClass('stock-scenario-enter');


                /*
                |--------------------------------------------------------------------------
                | Show selected panel
                |--------------------------------------------------------------------------
                */

                const $selectedPanel = $(
                    `[data-stock-panel="${selectedTab}"]`
                );


                if ($selectedPanel.length) {

                    $selectedPanel.removeClass('hidden');


                    /*
                    |--------------------------------------------------------------------------
                    | Force repaint
                    |--------------------------------------------------------------------------
                    |
                    | This allows the CSS animation to run again every time
                    | the user switches tabs.
                    |
                    */

                    void $selectedPanel[0].offsetWidth;


                    /*
                    |--------------------------------------------------------------------------
                    | Run entrance animation
                    |--------------------------------------------------------------------------
                    */

                    $selectedPanel.addClass(
                        'stock-scenario-enter'
                    );

                }

            });

        });

        $(function() {

            const $processCards = $('[data-process-step]');

            const $dynamicPanel = $('#stock-process-dynamic');
            const $dynamicTitle = $('#process-dynamic-title');
            const $dynamicDescription = $('#process-dynamic-description');
            const $dynamicStats = $('#process-dynamic-stats');


            /*
            |--------------------------------------------------------------------------
            | Content for each step
            |--------------------------------------------------------------------------
            */

            const processContent = {

                sale: {
                    title: 'New Sale Event Detected',

                    description: 'StockCore receives an order event from POS, Shopify, WooCommerce or another connected sales channel.',

                    stats: `
                    <span class="text-secondary-500">
                        Order:
                    </span>

                    <span class="font-bold text-secondary-900">
                        #SO-1824
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-primary-600">
                        8 units requested
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-emerald-600">
                        Event received
                    </span>
                `
                },


                confirmed: {
                    title: 'Inventory Validation Completed',

                    description: 'The requested quantity is checked against physical stock, allocations, warehouse availability and order rules.',

                    stats: `
                    <span class="text-secondary-500">
                        Requested:
                    </span>

                    <span class="font-bold text-secondary-900">
                        8 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="text-secondary-500">
                        Available:
                    </span>

                    <span class="font-bold text-secondary-900">
                        120 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-emerald-600">
                        Approved
                    </span>
                `
                },


                deducted: {
                    title: 'Automatic Event Ingestion',

                    description: '4 simultaneous triggers: Sales, Shipments, Transfers & Internal Consumption.',

                    stats: `
                    <span class="text-secondary-500">
                        Before:
                    </span>

                    <span class="font-bold text-secondary-900">
                        120 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-red-500">
                        Sale -8 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="text-secondary-500">
                        After:
                    </span>

                    <span class="font-bold text-emerald-600">
                        112 units
                    </span>
                `
                },


                updated: {
                    title: 'Inventory Synced Everywhere',

                    description: 'The new available quantity is propagated across connected ERP, warehouse, sales and accounting systems.',

                    stats: `
                    <span class="text-secondary-500">
                        StockCore:
                    </span>

                    <span class="font-bold text-secondary-900">
                        112
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-primary-600">
                        Xero
                    </span>

                    <span class="text-secondary-300">
                        +
                    </span>

                    <span class="font-semibold text-primary-600">
                        Cin7
                    </span>

                    <span class="text-secondary-300">
                        +
                    </span>

                    <span class="font-semibold text-primary-600">
                        Shopify
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-emerald-600">
                        Synced
                    </span>
                `
                },


                logged: {
                    title: 'Movement Added to Audit Ledger',

                    description: 'Every decrease is recorded with its quantity, event type, reference, location, user and timestamp.',

                    stats: `
                    <span class="text-secondary-500">
                        Movement:
                    </span>

                    <span class="font-bold text-secondary-900">
                        -8 units
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-primary-600">
                        SO-1824
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-secondary-700">
                        Sydney DC
                    </span>

                    <span class="text-secondary-300">
                        →
                    </span>

                    <span class="font-semibold text-emerald-600">
                        Logged
                    </span>
                `
                }

            };


            /*
            |--------------------------------------------------------------------------
            | Process card click
            |--------------------------------------------------------------------------
            */

            $processCards.on('click', function() {

                const $this = $(this);

                const selectedStep = $this.attr('data-process-step');

                const content = processContent[selectedStep];

                if (!content) {
                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | Reset all cards
                |--------------------------------------------------------------------------
                */

                $processCards
                    .removeClass('is-active')
                    .addClass('bg-white border-secondary-200');


                /*
                |--------------------------------------------------------------------------
                | Activate selected card
                |--------------------------------------------------------------------------
                */

                $this
                    .removeClass('bg-white border-secondary-200')
                    .addClass('is-active');


                /*
                |--------------------------------------------------------------------------
                | Update dynamic content
                |--------------------------------------------------------------------------
                */

                $dynamicTitle.text(content.title);

                $dynamicDescription.text(content.description);

                $dynamicStats.html(content.stats);


                /*
                |--------------------------------------------------------------------------
                | Restart animation
                |--------------------------------------------------------------------------
                */

                $dynamicPanel.removeClass('process-content-enter');

                /*
                 * Force repaint so animation runs again.
                 */
                void $dynamicPanel[0].offsetWidth;

                $dynamicPanel.addClass('process-content-enter');

            });

        });
    </script>

@endsection
