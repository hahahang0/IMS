@extends('layouts.public') {{-- Or your main layout file --}}

@section('title', 'Real-Time Stock & Product Decrease Tracking')



@section('content')

    {{-- ============================================================
    SERIAL / EXPIRY TRACKING PAGE
    HERO SECTION
============================================================ --}}

    <style>
        /* =========================================================
                               SERIAL / EXPIRY HERO
                            ========================================================= */

        .serial-expiry-hero {
            position: relative;
            isolation: isolate;
        }


        /* Soft blue glow behind heading */
        .serial-expiry-hero::before {
            content: "";
            position: absolute;
            top: -240px;
            left: 50%;
            width: 900px;
            height: 650px;
            transform: translateX(-50%);
            border-radius: 9999px;

            background:
                radial-gradient(circle,
                    rgba(59, 130, 246, 0.13) 0%,
                    rgba(147, 197, 253, 0.08) 34%,
                    rgba(239, 246, 255, 0) 72%);

            pointer-events: none;
            z-index: -1;
        }


        /* Very subtle secondary glow */
        .serial-expiry-hero::after {
            content: "";
            position: absolute;
            bottom: -230px;
            left: 50%;
            width: 800px;
            height: 420px;
            transform: translateX(-50%);
            border-radius: 9999px;
            background: rgba(219, 234, 254, 0.55);
            filter: blur(120px);
            pointer-events: none;
            z-index: -1;
        }


        /* =========================================================
                               ROUTE BADGE
                            ========================================================= */

        @keyframes serialExpiryBadgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .serial-expiry-route-badge {
            animation: serialExpiryBadgeFloat 5s ease-in-out infinite;
        }


        /* =========================================================
                               BUTTONS
                            ========================================================= */

        .serial-expiry-hero-button {
            transition:
                transform 220ms ease,
                box-shadow 220ms ease,
                background-color 220ms ease,
                border-color 220ms ease;
        }

        .serial-expiry-hero-button:hover {
            transform: translateY(-2px);
        }


        /* =========================================================
                               TRUST ICON
                            ========================================================= */

        @keyframes serialTrustPulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .55;
                transform: scale(.88);
            }
        }

        .serial-expiry-trust-dot {
            animation: serialTrustPulse 2.4s ease-in-out infinite;
        }


        /* =========================================================
                               BOTTOM VISUAL PANEL
                               This is only the visible start of the next visual,
                               matching the screenshot.
                            ========================================================= */

        .serial-expiry-visual-shell {
            box-shadow:
                0 -10px 40px rgba(37, 99, 235, 0.03),
                0 25px 60px rgba(15, 23, 42, 0.05);
        }

        /* =========================================================
                               SERIAL UNIT CONTROL SECTION
                            ========================================================= */

        .serial-unit-ledger {
            transition:
                transform 280ms ease,
                box-shadow 280ms ease,
                border-color 280ms ease;
        }

        .serial-unit-ledger:hover {
            transform: translateY(-3px);
            border-color: rgba(59, 130, 246, 0.18);
            box-shadow: 0 22px 55px rgba(15, 23, 42, 0.07);
        }


        .serial-lifecycle-card {
            transition:
                transform 220ms ease,
                border-color 220ms ease,
                background-color 220ms ease;
        }

        .serial-lifecycle-card:hover {
            transform: translateY(-4px);
            border-color: rgba(59, 130, 246, 0.22);
            background-color: rgba(239, 246, 255, 0.75);
            cursor: pointer;
        }


        .serial-control-feature {
            transition:
                transform 240ms ease,
                box-shadow 240ms ease,
                border-color 240ms ease;
        }

        .serial-control-feature:hover {
            transform: translateY(-4px);
            border-color: rgba(59, 130, 246, 0.18);
            box-shadow: 0 16px 38px rgba(15, 23, 42, 0.06);
            cursor: pointer;
        }


        @keyframes serialVerifiedPulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .5;
                transform: scale(.8);
            }
        }

        .serial-verified-dot {
            animation: serialVerifiedPulse 1.8s ease-in-out infinite;
        }


        @keyframes serialStepFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .serial-step-active {
            animation: serialStepFloat 4.5s ease-in-out infinite;
        }

        /* =========================================================
                               TARGETED RECALL / EXACT UNIT LOOKUP
                            ========================================================= */

        .serial-recall-panel {
            transition:
                transform 260ms ease,
                box-shadow 260ms ease,
                border-color 260ms ease;
        }

        .serial-recall-panel:hover {
            transform: translateY(-3px);
            border-color: rgba(59, 130, 246, 0.18);
            box-shadow: 0 22px 55px rgba(15, 23, 42, 0.07);
        }


        .serial-recall-search-row {
            transition:
                background-color 220ms ease,
                border-color 220ms ease;
        }

        .serial-recall-search-row:hover {
            background-color: rgba(239, 246, 255, 0.85);
            border-color: rgba(59, 130, 246, 0.2);
        }


        @keyframes recallPulse {

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

        .recall-pulse-dot {
            animation: recallPulse 1.8s ease-in-out infinite;
        }


        @keyframes recallWarningGlow {

            0%,
            100% {
                box-shadow: 0 0 0 rgba(239, 68, 68, 0);
            }

            50% {
                box-shadow: 0 0 28px rgba(239, 68, 68, 0.08);
            }
        }

        .recall-warning-box {
            animation: recallWarningGlow 4s ease-in-out infinite;
        }


        @keyframes recallProgress {
            from {
                width: 0;
            }

            to {
                width: 27.8%;
            }
        }

        .recall-progress-bar {
            animation: recallProgress 1.4s ease-out forwards;
        }


        .recall-action-button {
            transition:
                transform 220ms ease,
                box-shadow 220ms ease,
                background-color 220ms ease;
        }

        .recall-action-button:hover {
            transform: translateY(-2px);
        }

        /* =========================================================
                               EXPIRY / FEFO TRACKING SECTION
                            ========================================================= */

        .expiry-tracking-shell {
            transition:
                transform 260ms ease,
                box-shadow 260ms ease,
                border-color 260ms ease;
        }

        .expiry-tracking-shell:hover {
            transform: translateY(-3px);
            border-color: rgba(59, 130, 246, 0.18);
            box-shadow: 0 22px 55px rgba(15, 23, 42, 0.07);
        }

        .expiry-table-row {
            transition:
                background-color 220ms ease,
                transform 220ms ease;
        }

        .expiry-table-row:hover {
            background-color: rgba(239, 246, 255, 0.75);
            cursor: pointer;
        }

        .expiry-benefit-item {
            transition: transform 220ms ease;
        }

        .expiry-benefit-item:hover {
            transform: translateY(-2px);
        }

        @keyframes expiryPulse {

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

        .expiry-live-dot {
            animation: expiryPulse 1.8s ease-in-out infinite;
        }

        @keyframes expiryBadgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .expiry-fefo-badge {
            animation: expiryBadgeFloat 4.5s ease-in-out infinite;
        }

        /* =========================================================
                               MULTI-LOCATION / MULTI-DEVICE VISIBILITY
                            ========================================================= */

        .stock-device-tab {
            transition:
                background-color 220ms ease,
                color 220ms ease,
                box-shadow 220ms ease,
                transform 220ms ease;
        }

        .stock-device-tab:hover {
            transform: translateY(-1px);
        }

        .stock-device-tab.is-active {
            background: #ffffff;
            color: #2563eb;

            box-shadow:
                0 1px 2px rgba(15, 23, 42, 0.04),
                0 5px 16px rgba(15, 23, 42, 0.07);
        }


        /* Main application window */
        .stock-device-window {
            transition:
                transform 300ms ease,
                box-shadow 300ms ease,
                border-color 300ms ease;
        }

        .stock-device-window:hover {
            transform: translateY(-3px);

            box-shadow:
                0 30px 70px rgba(15, 23, 42, 0.10);

            border-color: rgba(59, 130, 246, 0.35);
        }


        /* Location cards */
        .stock-device-location {
            transition:
                transform 220ms ease,
                border-color 220ms ease,
                box-shadow 220ms ease;
        }

        .stock-device-location:hover {
            transform: translateY(-3px);
            border-color: rgba(59, 130, 246, 0.25);

            box-shadow:
                0 12px 28px rgba(15, 23, 42, 0.055);
        }


        /* Live green status pulse */
        @keyframes stockDevicePulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .4;
                transform: scale(.75);
            }
        }

        .stock-device-pulse {
            animation: stockDevicePulse 1.8s ease-in-out infinite;
        }


        /* Top badge subtle floating movement */
        @keyframes stockDeviceBadgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .stock-device-badge {
            animation: stockDeviceBadgeFloat 4.5s ease-in-out infinite;
        }


        /* Content transition when device changes */
        @keyframes stockDeviceContentEnter {
            0% {
                opacity: 0;
                transform: translateY(8px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stock-device-content-enter {
            animation:
                stockDeviceContentEnter 380ms cubic-bezier(.22, 1, .36, 1);
        }


        /* Transfer button */
        .stock-device-transfer-btn {
            transition:
                transform 220ms ease,
                background-color 220ms ease,
                box-shadow 220ms ease;
        }

        .stock-device-transfer-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 26px rgba(37, 99, 235, 0.22);
        }

        /* =========================================================
                       SERIAL / EXPIRY BENEFITS
                    ========================================================= */

        .serial-benefit-card {
            transition:
                transform 280ms ease,
                box-shadow 280ms ease,
                border-color 280ms ease;
        }

        .serial-benefit-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.18);

            box-shadow:
                0 24px 55px rgba(15, 23, 42, 0.08);
            cursor: pointer;
        }


        .serial-benefit-icon {
            transition:
                transform 260ms ease,
                box-shadow 260ms ease;
        }

        .serial-benefit-card:hover .serial-benefit-icon {
            transform: scale(1.06) rotate(-2deg);
        }


        @keyframes serialBenefitPulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .55;
                transform: scale(.82);
            }
        }

        .serial-benefit-pulse {
            animation: serialBenefitPulse 2s ease-in-out infinite;
        }

        /* =========================================================
                   TRACEABILITY LOOKUP VISUALIZER
                ========================================================= */

        .traceability-lookup-shell {
            transition:
                transform 280ms ease,
                box-shadow 280ms ease,
                border-color 280ms ease;
        }

        .traceability-lookup-shell:hover {
            transform: translateY(-2px);
            border-color: rgba(59, 130, 246, 0.22);

            box-shadow:
                0 28px 65px rgba(15, 23, 42, 0.09);
        }


        /* Search input */

        .traceability-search-input {
            transition:
                border-color 220ms ease,
                box-shadow 220ms ease,
                background-color 220ms ease;
        }

        .traceability-search-input:focus {
            outline: none;
            border-color: #2563eb;

            box-shadow:
                0 0 0 3px rgba(37, 99, 235, 0.10);
        }


        /* Sample buttons */

        .traceability-sample-btn {
            transition:
                transform 200ms ease,
                box-shadow 200ms ease,
                opacity 200ms ease;
        }

        .traceability-sample-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.07);
        }


        /* Result entrance */

        @keyframes traceabilityResultEnter {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .traceability-result-enter {
            animation:
                traceabilityResultEnter 380ms cubic-bezier(.22, 1, .36, 1);
        }


        /* Badge pulse */

        @keyframes traceabilityPulse {

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

        .traceability-live-dot {
            animation: traceabilityPulse 1.8s ease-in-out infinite;
        }


        /* Header badge float */

        @keyframes traceabilityBadgeFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .traceability-demo-badge {
            animation: traceabilityBadgeFloat 4.5s ease-in-out infinite;
        }


        /* Record detail boxes */

        .traceability-detail-box {
            transition:
                transform 220ms ease,
                border-color 220ms ease,
                background-color 220ms ease;
        }

        .traceability-detail-box:hover {
            transform: translateY(-2px);
            border-color: rgba(59, 130, 246, 0.22);
            background-color: rgba(239, 246, 255, 0.55);
        }

        /* =========================================================
               COMPLEMENTARY CAPABILITIES
            ========================================================= */

        .serial-related-card {
            transition:
                transform 250ms ease,
                border-color 250ms ease,
                box-shadow 250ms ease;
        }

        .serial-related-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.2);

            box-shadow:
                0 20px 45px rgba(15, 23, 42, 0.07);
            cursor: pointer;
        }


        .serial-related-icon {
            transition:
                transform 220ms ease,
                background-color 220ms ease;
        }

        .serial-related-card:hover .serial-related-icon {
            transform: scale(1.06);
        }


        .serial-related-link svg,
        .serial-related-browse svg {
            transition: transform 220ms ease;
        }

        .serial-related-link:hover svg,
        .serial-related-browse:hover svg {
            transform: translateX(4px);
        }

        /* =========================================================
           SERIAL / EXPIRY FINAL CTA
        ========================================================= */

        .serial-expiry-final-cta {
            position: relative;
            isolation: isolate;
        }

        .serial-expiry-final-cta::before {
            content: "";
            position: absolute;
            top: -220px;
            left: 50%;
            width: 700px;
            height: 480px;
            transform: translateX(-50%);
            border-radius: 9999px;
            background: rgba(37, 99, 235, 0.16);
            filter: blur(120px);
            z-index: -1;
            pointer-events: none;
        }

        .serial-expiry-final-btn {
            transition:
                transform 220ms ease,
                box-shadow 220ms ease,
                background-color 220ms ease;
        }

        .serial-expiry-final-btn:hover {
            transform: translateY(-2px);
        }

        @keyframes serialExpiryCtaPulse {

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

        .serial-expiry-cta-dot {
            animation: serialExpiryCtaPulse 1.8s ease-in-out infinite;
        }

        @keyframes serialExpiryCtaFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .serial-expiry-cta-badge {
            animation: serialExpiryCtaFloat 4.5s ease-in-out infinite;
        }
    </style>



    <section id="serial-expiry-hero"
        class="serial-expiry-hero relative overflow-hidden
           bg-background-muted pt-16 sm:pt-20 lg:pt-24">

        {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

        {{-- Left blurred light --}}
        <div
            class="pointer-events-none absolute left-[-120px] top-[120px]
               h-[380px] w-[380px] rounded-full
               bg-primary-100/35 blur-[100px]">
        </div>


        {{-- Right blurred light --}}
        <div
            class="pointer-events-none absolute right-[-140px] top-[80px]
               h-[420px] w-[420px] rounded-full
               bg-primary-100/35 blur-[110px]">
        </div>



        {{-- ========================================================
        HERO CONTENT
    ========================================================= --}}

        <div class="relative mx-auto max-w-7xl px-6
               text-center lg:px-8">

            {{-- ====================================================
            ROUTE BADGE
        ===================================================== --}}

            <div class="flex justify-center">

                <div
                    class="serial-expiry-route-badge
                       inline-flex items-center gap-2.5
                       rounded-full
                       border border-primary-200
                       bg-primary-50/80
                       px-4 py-2
                       shadow-[0_4px_16px_rgba(37,99,235,0.06)]
                       backdrop-blur-md">

                    {{-- Shield icon --}}
                    <svg class="h-4 w-4 text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3l7 3v5c0 5-3.2 8.6-7 10-3.8-1.4-7-5-7-10V6l7-3z" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.5 12l1.7 1.7 3.6-4" />
                    </svg>


                    <span class="text-xs font-semibold
                           text-primary-700 sm:text-sm">
                        /features/serial-expiry-tracking
                    </span>

                </div>

            </div>



            {{-- ====================================================
            HEADING
        ===================================================== --}}

            <h1
                class="mx-auto mt-7 max-w-5xl
                   text-[42px] font-extrabold
                   leading-[1.02]
                   tracking-[-0.05em]
                   text-secondary-950
                   sm:text-5xl
                   md:text-6xl
                   lg:text-[70px]">
                Precision Serial & Expiry
                <span class="block">
                    Tracking with

                    <span class="text-primary-600">
                        Real-Time Stock
                    </span>
                </span>

                <span class="block text-primary-600">
                    Visibility
                </span>
            </h1>



            {{-- ====================================================
            DESCRIPTION
        ===================================================== --}}

            <p
                class="mx-auto mt-7 max-w-3xl
                   text-base leading-7
                   text-secondary-600
                   sm:text-lg sm:leading-8">
                Gain end-to-end per-unit traceability, automate FEFO expiry
                alerts, and sync stock live across every warehouse, branch,
                and mobile scanner device.
            </p>



            {{-- ====================================================
            CTA BUTTONS
        ===================================================== --}}

            <div
                class="mt-8 flex flex-col
                   items-center justify-center
                   gap-3 sm:flex-row">

                {{-- Primary CTA --}}
                <a href="{{ url('/signup') }}"
                    class="serial-expiry-hero-button
                       inline-flex min-h-12
                       min-w-[160px]
                       items-center justify-center
                       rounded-xl
                       bg-primary-600
                       px-6 text-sm font-semibold
                       text-white
                       shadow-[0_10px_30px_rgba(37,99,235,0.24)]
                       hover:bg-primary-700
                       hover:shadow-[0_16px_38px_rgba(37,99,235,0.30)]">
                    Start Free Trial
                </a>



                {{-- Secondary CTA --}}
                <a href="#serial-expiry-visualizer"
                    class="serial-expiry-hero-button
                       inline-flex min-h-12
                       items-center justify-center
                       gap-2.5 rounded-xl
                       border border-secondary-300
                       bg-white/80
                       px-6 text-sm font-semibold
                       text-secondary-800
                       shadow-[0_6px_18px_rgba(15,23,42,0.04)]
                       backdrop-blur-sm
                       hover:border-primary-300
                       hover:bg-white">

                    {{-- Play icon --}}
                    <span
                        class="flex h-5 w-5 items-center
                           justify-center rounded-full
                           border border-primary-500
                           text-primary-600">
                        <svg class="ml-[1px] h-2.5 w-2.5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </span>


                    Try Interactive Visualizer

                </a>

            </div>



            {{-- ====================================================
            TRUST ITEMS
        ===================================================== --}}

            <div
                class="mt-6 flex flex-wrap
                   items-center justify-center
                   gap-x-7 gap-y-3
                   text-sm text-secondary-500">

                {{-- 14 day --}}
                <div class="flex items-center gap-2">

                    <span
                        class="serial-expiry-trust-dot
                           flex h-4 w-4 items-center
                           justify-center rounded-full
                           border border-emerald-500
                           text-emerald-600">
                        <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>

                    <span>
                        14-day free trial
                    </span>

                </div>



                {{-- no card --}}
                <div class="flex items-center gap-2">

                    <span
                        class="serial-expiry-trust-dot
                           flex h-4 w-4 items-center
                           justify-center rounded-full
                           border border-emerald-500
                           text-emerald-600"
                        style="animation-delay: -.6s;">
                        <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>

                    <span>
                        No credit card required
                    </span>

                </div>



                {{-- Cancel --}}
                <div class="flex items-center gap-2">

                    <span
                        class="serial-expiry-trust-dot
                           flex h-4 w-4 items-center
                           justify-center rounded-full
                           border border-emerald-500
                           text-emerald-600"
                        style="animation-delay: -1.2s;">
                        <svg class="h-2.5 w-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>

                    <span>
                        Cancel anytime
                    </span>

                </div>

            </div>
        </div>

    </section>
    {{-- ============================================================
    INDIVIDUAL UNIT CONTROL
============================================================ --}}

    <section id="individual-unit-control" class="relative overflow-hidden bg-white py-20 sm:py-24 lg:py-28">

        {{-- Background glow --}}
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
                    Individual Unit Control
                </p>


                <h2
                    class="mt-3 text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-950
                       sm:text-4xl lg:text-[42px]">
                    Every serial number has an unbroken story.
                </h2>


                <p class="mt-3 max-w-3xl text-sm leading-6
                       text-secondary-500 sm:text-base">
                    Log serial identities at receipt, transfer, assembly, and
                    customer sale. Eliminate ambiguity when handling service calls,
                    RMA warranties, or precision compliance recalls.
                </p>

            </div>



            {{-- ====================================================
            LEDGER WRAPPER
        ===================================================== --}}

            <div
                class="serial-unit-ledger mt-10 rounded-[22px]
                   border border-primary-100
                   bg-primary-50/70 p-5
                   shadow-[0_16px_42px_rgba(37,99,235,0.04)]
                   sm:p-6 lg:p-7">

                {{-- =================================================
                LEDGER HEADER
            ================================================== --}}

                <div class="flex flex-col gap-4
                       sm:flex-row sm:items-center sm:justify-between">

                    <div class="flex items-center gap-3">

                        <span
                            class="serial-verified-dot
                               h-2 w-2 rounded-full
                               bg-emerald-500">
                        </span>


                        <div>

                            <p class="text-xs font-bold
                                   text-secondary-900">
                                Unit Lifecycle Ledger:
                                <span class="font-mono">
                                    SN#SN-9021-A8
                                </span>
                            </p>


                            <p class="mt-1 text-[9px]
                                   text-secondary-500">
                                Product: Surgical Laser Head Model-X ·
                                Category: Critical Medical
                            </p>

                        </div>

                    </div>


                    <div class="flex flex-wrap items-center gap-2">

                        <span
                            class="rounded-md border border-secondary-200
                               bg-white px-3 py-1.5
                               font-mono text-[8px]
                               font-semibold text-secondary-600">
                            Ledger Hash: 7B4D-1A5E
                        </span>


                        <span
                            class="inline-flex items-center gap-1.5
                               rounded-md bg-emerald-500
                               px-3 py-1.5
                               text-[8px] font-bold text-white">

                            <span
                                class="serial-verified-dot
                                   h-1.5 w-1.5 rounded-full
                                   bg-white">
                            </span>

                            Verified Complete

                        </span>

                    </div>

                </div>



                {{-- =================================================
                LIFECYCLE STEPS
            ================================================== --}}

                <div class="mt-6 grid gap-3
                       sm:grid-cols-2
                       lg:grid-cols-5">

                    {{-- STEP 01 --}}
                    <div
                        class="serial-lifecycle-card rounded-xl
                           border border-secondary-200
                           bg-white p-4">

                        <div class="flex items-start justify-between">

                            <span
                                class="text-[8px] font-bold uppercase
                                   tracking-[0.12em]
                                   text-primary-600">
                                01. Inbound Dock
                            </span>


                            <svg class="h-4 w-4 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <circle cx="12" cy="12" r="8" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                            </svg>

                        </div>


                        <h3 class="mt-3 text-xs font-bold
                               text-secondary-900">
                            Dock A Receipt
                        </h3>


                        <p class="mt-2 text-[9px] leading-4
                               text-secondary-500">
                            Manifest verified against Supplier ASN-491.
                        </p>


                        <div class="mt-5">

                            <p class="font-mono text-[8px]
                                   text-secondary-500">
                                12 May 09:14 AEST
                            </p>

                            <p
                                class="mt-1 text-[8px]
                                   font-semibold
                                   text-secondary-700">
                                OP: M. Henderson
                            </p>

                        </div>

                    </div>



                    {{-- STEP 02 --}}
                    <div
                        class="serial-lifecycle-card rounded-xl
                           border border-secondary-200
                           bg-white p-4">

                        <div class="flex items-start justify-between">

                            <span
                                class="text-[8px] font-bold uppercase
                                   tracking-[0.12em]
                                   text-primary-600">
                                02. Serial Logged
                            </span>


                            <svg class="h-4 w-4 text-emerald-500" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h10M4 17h7" />
                            </svg>

                        </div>


                        <h3 class="mt-3 text-xs font-bold
                               text-secondary-900">
                            Barcode Scanned
                        </h3>


                        <p class="mt-2 text-[9px] leading-4
                               text-secondary-500">
                            2D DataMatrix scanned & bound to unit profile.
                        </p>


                        <div class="mt-5">

                            <p class="font-mono text-[8px]
                                   text-secondary-500">
                                12 May 09:29 AEST
                            </p>

                            <p
                                class="mt-1 text-[8px]
                                   font-semibold
                                   text-secondary-700">
                                Scanner #04 (Dock-A)
                            </p>

                        </div>

                    </div>



                    {{-- STEP 03 --}}
                    <div
                        class="serial-lifecycle-card
                           serial-step-active rounded-xl
                           border border-primary-200
                           bg-primary-50 p-4">

                        <div class="flex items-start justify-between">

                            <span
                                class="text-[8px] font-bold uppercase
                                   tracking-[0.12em]
                                   text-primary-600">
                                03. QA & Put-Away
                            </span>


                            <svg class="h-4 w-4 text-primary-600" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h10v18H7z" />

                                <path stroke-linecap="round" d="M10 8h4M10 12h4" />
                            </svg>

                        </div>


                        <h3 class="mt-3 text-xs font-bold
                               text-secondary-900">
                            Bin Assigned
                        </h3>


                        <p class="mt-2 text-[9px] leading-4
                               text-secondary-500">
                            Passed optics calibration. Slotted to Bin B-12.
                        </p>


                        <div class="mt-5">

                            <p class="font-mono text-[8px]
                                   text-secondary-500">
                                12 May 11:42 AEST
                            </p>

                            <p
                                class="mt-1 text-[8px]
                                   font-semibold
                                   text-secondary-700">
                                QA Officer: Sarah K.
                            </p>

                        </div>

                    </div>



                    {{-- STEP 04 --}}
                    <div
                        class="serial-lifecycle-card rounded-xl
                           border border-secondary-200
                           bg-white p-4">

                        <div class="flex items-start justify-between">

                            <span
                                class="text-[8px] font-bold uppercase
                                   tracking-[0.12em]
                                   text-primary-600">
                                04. Dispatch
                            </span>


                            <svg class="h-4 w-4 text-emerald-500" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8h11v8H3zM14 10h4l3 3v3h-7z" />
                            </svg>

                        </div>


                        <h3 class="mt-3 text-xs font-bold
                               text-secondary-900">
                            St. Jude Medical
                        </h3>


                        <p class="mt-2 text-[9px] leading-4
                               text-secondary-500">
                            Picked via FEFO validation. Courier control generated.
                        </p>


                        <div class="mt-5">

                            <p class="font-mono text-[8px]
                                   text-secondary-500">
                                18 Jun 14:02 AEST
                            </p>

                            <p
                                class="mt-1 text-[8px]
                                   font-semibold
                                   text-secondary-700">
                                Waybill: #TBL-0921
                            </p>

                        </div>

                    </div>



                    {{-- STEP 05 --}}
                    <div
                        class="serial-lifecycle-card rounded-xl
                           border border-secondary-200
                           bg-white p-4">

                        <div class="flex items-start justify-between">

                            <span
                                class="text-[8px] font-bold uppercase
                                   tracking-[0.12em]
                                   text-primary-600">
                                05. Warranty
                            </span>


                            <svg class="h-4 w-4 text-emerald-500" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3l7 3v5c0 5-3.2 8.6-7 10-3.8-1.4-7-5-7-10V6l7-3z" />
                            </svg>

                        </div>


                        <h3 class="mt-3 text-xs font-bold
                               text-secondary-900">
                            Warranty Active
                        </h3>


                        <p class="mt-2 text-[9px] leading-4
                               text-secondary-500">
                            24-month comprehensive coverage registered automatically.
                        </p>


                        <div class="mt-5">

                            <p class="font-mono text-[8px]
                                   text-secondary-500">
                                Valid till Jun 2028
                            </p>

                            <p class="mt-1 text-[8px]
                                   font-semibold text-emerald-600">
                                Status: Registered
                            </p>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ====================================================
            FEATURE BENEFITS
        ===================================================== --}}

            <div class="mt-8 grid gap-5
                   md:grid-cols-3">

                {{-- FEATURE 1 --}}
                <article
                    class="serial-control-feature
                       rounded-[18px]
                       border border-primary-100
                       bg-primary-50/65 p-6">

                    <div
                        class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-primary-600 text-white">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 4v4M17 4v4M4 9h16M7 13h3M7 17h6" />
                        </svg>

                    </div>


                    <h3 class="mt-4 text-sm font-bold
                           text-secondary-950">
                        Per-Unit Identity & Logging
                    </h3>


                    <p class="mt-2 text-xs leading-5
                           text-secondary-500">
                        Capture serial numbers via high-speed camera,
                        ruggedized barcode scanners, or bulk RFID portals
                        at dock doors without manual entry lag.
                    </p>

                </article>



                {{-- FEATURE 2 --}}
                <article
                    class="serial-control-feature
                       rounded-[18px]
                       border border-primary-100
                       bg-primary-50/65 p-6">

                    <div
                        class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-primary-600 text-white">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <circle cx="12" cy="12" r="8" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                        </svg>

                    </div>


                    <h3 class="mt-4 text-sm font-bold
                           text-secondary-950">
                        Warranty & Service Ledger
                    </h3>


                    <p class="mt-2 text-xs leading-5
                           text-secondary-500">
                        Map customer records, installation sign-offs,
                        and RMA repairs directly to individual serialized
                        parts for dispute-free claims management.
                    </p>

                </article>



                {{-- FEATURE 3 --}}
                <article
                    class="serial-control-feature
                       rounded-[18px]
                       border border-red-100
                       bg-red-50/60 p-6">

                    <div
                        class="flex h-10 w-10 items-center
                           justify-center rounded-lg
                           bg-red-600 text-white">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4l9 16H3L12 4z" />

                            <path stroke-linecap="round" d="M12 10v4m0 3h.01" />
                        </svg>

                    </div>


                    <h3 class="mt-4 text-sm font-bold
                           text-secondary-950">
                        Surgical Recall Isolation
                    </h3>


                    <p class="mt-2 text-xs leading-5
                           text-secondary-500">
                        Lock down specific affected serial numbers instantly.
                        Quarantine exact bins and notify customers without
                        freezing untouched warehouse bays.
                    </p>

                </article>

            </div>

        </div>

    </section>
    {{-- ============================================================
    TARGETED RECALLS & RESOLUTION
============================================================ --}}

    <section id="targeted-recall-resolution" class="relative overflow-hidden bg-primary-50/60 py-20 sm:py-24 lg:py-28">

        {{-- Background glow --}}
        <div
            class="pointer-events-none absolute left-1/2 top-[-200px]
               h-[500px] w-[900px]
               -translate-x-1/2 rounded-full
               bg-primary-100/50 blur-[120px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="max-w-3xl">

                <p class="text-[11px] font-bold uppercase
                       tracking-[0.18em] text-primary-600">
                    Targeted Recalls & Resolution
                </p>


                <h2
                    class="mt-3 max-w-2xl text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-950
                       sm:text-4xl lg:text-[42px]">
                    Find the exact unit — not just the product.
                </h2>


                <p class="mt-4 max-w-2xl text-sm leading-6
                       text-secondary-500 sm:text-base">
                    When a warranty claim, service request or recall occurs,
                    StockCore lets your team identify the exact serial number,
                    customer, order and movement history instantly.
                </p>

            </div>



            {{-- ====================================================
            MAIN RECALL INTERFACE
        ===================================================== --}}

            <div class="mt-10 grid gap-5 lg:grid-cols-[0.82fr_1.18fr]">

                {{-- =================================================
                LEFT — SERIAL LOOKUP
            ================================================== --}}

                <div
                    class="serial-recall-panel rounded-[20px]
                       border border-secondary-200
                       bg-white p-5
                       shadow-[0_16px_40px_rgba(15,23,42,0.045)]
                       sm:p-6">

                    {{-- Search header --}}
                    <div class="flex items-center justify-between gap-4">

                        <p
                            class="text-[9px] font-bold uppercase
                               tracking-[0.14em]
                               text-secondary-500">
                            Search a Unit Resolution
                        </p>


                        <span
                            class="rounded-md bg-primary-50
                               px-2.5 py-1
                               text-[8px] font-bold
                               text-primary-600">
                            20 digits
                        </span>

                    </div>



                    {{-- Search --}}
                    <div
                        class="serial-recall-search-row mt-4 flex
                           items-center justify-between gap-3
                           rounded-lg border border-primary-100
                           bg-primary-50/70 px-3 py-2.5">

                        <span class="font-mono text-[10px]
                               font-semibold text-primary-700">
                            SN-X200-048293
                        </span>


                        <button type="button"
                            class="rounded-md bg-primary-600
                               px-3 py-1.5
                               text-[9px] font-semibold
                               text-white
                               transition hover:bg-primary-700">
                            Resolved
                        </button>

                    </div>



                    {{-- Unit details --}}
                    <div class="mt-5 space-y-3">

                        {{-- Product --}}
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-[9px] text-secondary-500">
                                Product
                            </span>

                            <span
                                class="text-right text-[9px]
                                   font-semibold text-secondary-900">
                                Wireless Scanner X200
                            </span>
                        </div>


                        {{-- Customer --}}
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-[9px] text-secondary-500">
                                Customer
                            </span>

                            <span
                                class="text-right text-[9px]
                                   font-semibold text-secondary-900">
                                Northside Retail
                            </span>
                        </div>


                        {{-- Invoice --}}
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-[9px] text-secondary-500">
                                Invoice
                            </span>

                            <span
                                class="font-mono text-[9px]
                                   font-semibold text-primary-600">
                                INV-1842
                            </span>
                        </div>


                        {{-- Purchased --}}
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-[9px] text-secondary-500">
                                Purchased
                            </span>

                            <span
                                class="text-right text-[9px]
                                   font-semibold text-secondary-900">
                                18 Apr 2026
                            </span>
                        </div>


                        {{-- Warranty --}}
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-[9px] text-secondary-500">
                                Warranty
                            </span>

                            <span
                                class="text-right text-[9px]
                                   font-semibold text-emerald-600">
                                Active (Valid)
                            </span>
                        </div>


                        {{-- Location --}}
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-[9px] text-secondary-500">
                                Current Location
                            </span>

                            <span
                                class="text-right text-[9px]
                                   font-semibold text-secondary-900">
                                Customer Site
                            </span>
                        </div>

                    </div>



                    {{-- Result status --}}
                    <div
                        class="mt-5 flex items-center
                           justify-between gap-4
                           rounded-xl border border-emerald-100
                           bg-emerald-50 px-3 py-3">

                        <div class="flex items-center gap-2">

                            <span
                                class="recall-pulse-dot h-1.5 w-1.5
                                   rounded-full bg-emerald-500">
                            </span>

                            <span class="text-[9px] font-semibold
                                   text-emerald-700">
                                Recall status: Clear
                            </span>

                        </div>


                        <span class="font-mono text-[8px]
                               font-bold text-emerald-600">
                            PASS 08-493
                        </span>

                    </div>

                </div>



                {{-- =================================================
                RIGHT — ACTIVE RECALL EVENT
            ================================================== --}}

                <div
                    class="serial-recall-panel rounded-[20px]
                       border border-secondary-200
                       bg-white p-5
                       shadow-[0_16px_40px_rgba(15,23,42,0.045)]
                       sm:p-6">

                    {{-- Warning --}}
                    <div
                        class="recall-warning-box rounded-xl
                           border border-red-100
                           bg-red-50 p-4">

                        <div class="flex items-start gap-3">

                            <div
                                class="flex h-8 w-8 shrink-0
                                   items-center justify-center
                                   rounded-lg bg-red-100
                                   text-red-600">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4l9 16H3L12 4z" />

                                    <path stroke-linecap="round" d="M12 10v4m0 3h.01" />
                                </svg>
                            </div>


                            <div>

                                <p class="text-[10px] font-bold
                                       text-red-700">
                                    CRITICAL RECALL TRIGGER:
                                    Component QA Notice #RC-2026-99
                                </p>


                                <p class="mt-1 text-[9px] leading-4
                                       text-red-500">
                                    Batch affected. Optic lens firmware calibration
                                    mismatch. Immediate quarantine recommended.
                                </p>

                            </div>

                        </div>

                    </div>



                    {{-- Serial range --}}
                    <div
                        class="mt-4 flex flex-col gap-3
                           rounded-lg bg-secondary-50
                           px-4 py-3 sm:flex-row
                           sm:items-center sm:justify-between">

                        <span
                            class="text-[8px] font-semibold uppercase
                               tracking-[0.12em]
                               text-secondary-500">
                            Affected Serial Sequence
                        </span>


                        <span class="font-mono text-[9px]
                               font-bold text-secondary-900">
                            SN-X200-048200 → SN-X200-048350
                        </span>

                    </div>



                    {{-- Recall stats --}}
                    <div class="mt-4 grid gap-3
                           sm:grid-cols-3">

                        {{-- units identified --}}
                        <div class="rounded-xl bg-primary-50
                               px-4 py-4 text-center">

                            <p class="text-2xl font-extrabold
                                   text-secondary-950">
                                151
                            </p>

                            <p
                                class="mt-1 text-[8px]
                                   font-semibold uppercase
                                   tracking-[0.08em]
                                   text-secondary-500">
                                Units Identified
                            </p>

                        </div>


                        {{-- customers --}}
                        <div class="rounded-xl bg-primary-50
                               px-4 py-4 text-center">

                            <p class="text-2xl font-extrabold
                                   text-secondary-950">
                                93
                            </p>

                            <p
                                class="mt-1 text-[8px]
                                   font-semibold uppercase
                                   tracking-[0.08em]
                                   text-secondary-500">
                                Customers Affected
                            </p>

                        </div>


                        {{-- returned --}}
                        <div class="rounded-xl bg-primary-50
                               px-4 py-4 text-center">

                            <p class="text-2xl font-extrabold
                                   text-primary-600">
                                42 / 151
                            </p>

                            <p
                                class="mt-1 text-[8px]
                                   font-semibold uppercase
                                   tracking-[0.08em]
                                   text-secondary-500">
                                Units Returned
                            </p>

                        </div>

                    </div>



                    {{-- Recall completion --}}
                    <div class="mt-5">

                        <div class="flex items-center justify-between
                               gap-4">

                            <span class="text-[8px] font-semibold
                                   text-secondary-600">
                                Recall Quarantine Completion
                            </span>


                            <span class="font-mono text-[8px]
                                   text-secondary-500">
                                27.8% Resolved
                            </span>

                        </div>


                        <div
                            class="mt-2 h-1.5 overflow-hidden
                               rounded-full bg-secondary-100">

                            <div
                                class="recall-progress-bar h-full
                                   rounded-full bg-primary-600">
                            </div>

                        </div>

                    </div>



                    {{-- Actions --}}
                    <div class="mt-6 flex flex-col gap-3
                           sm:flex-row">

                        <button type="button"
                            class="recall-action-button
                               inline-flex flex-1 items-center
                               justify-center gap-2
                               rounded-lg bg-primary-600
                               px-4 py-3
                               text-[9px] font-semibold
                               text-white
                               shadow-[0_8px_22px_rgba(37,99,235,.18)]
                               hover:bg-primary-700">

                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v12m0 0l-4-4m4 4l4-4M5 19h14" />
                            </svg>

                            Export Targeted Customer Manifest

                        </button>


                        <button type="button"
                            class="recall-action-button
                               inline-flex flex-1 items-center
                               justify-center gap-2
                               rounded-lg bg-red-600
                               px-4 py-3
                               text-[9px] font-semibold
                               text-white
                               shadow-[0_8px_22px_rgba(220,38,38,.18)]
                               hover:bg-red-700">

                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="5" y="10" width="14" height="10" rx="2" />
                                <path stroke-linecap="round" d="M8 10V7a4 4 0 018 0v3" />
                            </svg>

                            Lock Remaining Warehouse Units

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- ============================================================
    FEFO DISPATCH AUTOMATION
============================================================ --}}

    <section id="expiry-fefo-tracking" class="relative overflow-hidden bg-primary-50/60 py-20 sm:py-24 lg:py-28">

        {{-- ========================================================
        BACKGROUND
    ========================================================= --}}

        <div
            class="pointer-events-none absolute left-1/2 top-[-220px]
               h-[480px] w-[880px]
               -translate-x-1/2 rounded-full
               bg-primary-100/45 blur-[120px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="flex flex-col gap-6
                   lg:flex-row lg:items-end lg:justify-between">

                {{-- LEFT --}}
                <div class="max-w-3xl">

                    <p
                        class="text-[11px] font-bold uppercase
                           tracking-[0.18em] text-primary-600">
                        FEFO Dispatch Automation
                    </p>


                    <h2
                        class="mt-3 max-w-2xl text-3xl font-bold
                           tracking-[-0.035em]
                           text-secondary-950
                           sm:text-4xl lg:text-[42px]">
                        Know what expires before it
                        <span class="block">
                            becomes waste.
                        </span>
                    </h2>


                    <p class="mt-4 max-w-2xl text-sm leading-6
                           text-secondary-500 sm:text-base">
                        Track expiry dates by batch or lot and identify products
                        approaching expiry before they become unsellable.
                    </p>

                </div>



                {{-- RIGHT BADGE --}}
                <div
                    class="expiry-fefo-badge inline-flex w-fit
                       items-center gap-2 rounded-full
                       border border-amber-200
                       bg-white/90 px-3.5 py-2
                       shadow-[0_8px_20px_rgba(15,23,42,0.05)]
                       backdrop-blur">

                    <span class="expiry-live-dot h-1.5 w-1.5
                           rounded-full bg-amber-500">
                    </span>

                    <span class="text-[9px] font-semibold
                           text-secondary-700">
                        FEFO Dispatch Strategy Enforced
                    </span>

                </div>

            </div>



            {{-- ====================================================
            MAIN EXPIRY TABLE CARD
        ===================================================== --}}

            <div
                class="expiry-tracking-shell mt-10 overflow-hidden
                   rounded-[22px]
                   border border-secondary-200
                   bg-white
                   shadow-[0_18px_45px_rgba(15,23,42,0.05)]">

                {{-- =================================================
                PRODUCT HEADER
            ================================================== --}}

                <div
                    class="flex flex-col gap-5
                       border-b border-secondary-100
                       px-5 py-5
                       sm:px-6
                       lg:flex-row lg:items-center lg:justify-between">

                    {{-- product --}}
                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0
                               items-center justify-center
                               rounded-xl bg-emerald-50
                               text-emerald-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 2v4m0 12v4M7 6h10l2 5-7 9-7-9 2-5z" />
                            </svg>
                        </div>


                        <div>

                            <p class="text-sm font-bold
                                   text-secondary-950">
                                Organic Protein Drink 330ml
                            </p>

                            <p class="mt-1 text-[9px]
                                   text-secondary-500">
                                SKU: DRK-PRT-330 · Perishable Cold-Chain
                            </p>

                        </div>

                    </div>



                    {{-- active batches --}}
                    <div
                        class="flex items-center gap-2
                           text-[9px] font-semibold
                           text-secondary-600">

                        <span
                            class="expiry-live-dot h-1.5 w-1.5
                               rounded-full bg-primary-600">
                        </span>

                        3 Active Batches in Sydney DC

                    </div>

                </div>



                {{-- =================================================
                TABLE
            ================================================== --}}

                <div class="overflow-x-auto">

                    <div class="min-w-[1000px]">

                        {{-- HEADER --}}
                        <div
                            class="grid
                               grid-cols-[1.1fr_1fr_1fr_.85fr_.8fr_.8fr_.9fr_1.25fr]
                               items-center
                               bg-primary-50/80
                               px-5 py-3">

                            @foreach (['Batch / Lot', 'Received', 'Expiry Date', 'Available', 'Allocated', 'Remaining', 'Status', 'Picking Rule'] as $heading)
                                <div
                                    class="text-[8px] font-bold uppercase
                                       tracking-[0.1em]
                                       text-secondary-400">
                                    {{ $heading }}
                                </div>
                            @endforeach

                        </div>



                        {{-- =================================================
                        ROW 01
                    ================================================== --}}

                        <div
                            class="expiry-table-row
                               grid grid-cols-[1.1fr_1fr_1fr_.85fr_.8fr_.8fr_.9fr_1.25fr]
                               items-center
                               border-b border-secondary-100
                               px-5 py-4">

                            <div
                                class="font-mono text-[9px]
                                   font-semibold text-secondary-800">
                                LOT-24AUG-17
                            </div>


                            <div class="text-[9px]
                                   text-secondary-600">
                                18 Aug 2026
                            </div>


                            <div class="text-[9px]
                                   font-semibold text-secondary-800">
                                12 Oct 2026
                            </div>


                            <div class="text-[10px] font-bold
                                   text-secondary-950">
                                480 units
                            </div>


                            <div class="text-[9px]
                                   text-secondary-600">
                                120 units
                            </div>


                            <div class="text-[10px] font-bold
                                   text-amber-600">
                                23 days
                            </div>


                            <div>
                                <span
                                    class="inline-flex rounded-full
                                       bg-amber-50 px-2.5 py-1
                                       text-[8px] font-semibold
                                       text-amber-700">
                                    Near Expiry
                                </span>
                            </div>


                            <div
                                class="flex items-center gap-2
                                   text-[9px] font-semibold
                                   text-primary-600">
                                <span class="h-3 w-px bg-primary-300">
                                </span>

                                Priority Dispatch (FEFO)
                            </div>

                        </div>



                        {{-- =================================================
                        ROW 02
                    ================================================== --}}

                        <div
                            class="expiry-table-row
                               grid grid-cols-[1.1fr_1fr_1fr_.85fr_.8fr_.8fr_.9fr_1.25fr]
                               items-center
                               border-b border-secondary-100
                               px-5 py-4">

                            <div
                                class="font-mono text-[9px]
                                   font-semibold text-secondary-800">
                                LOT-02SEP-04
                            </div>


                            <div class="text-[9px]
                                   text-secondary-600">
                                02 Sep 2026
                            </div>


                            <div class="text-[9px]
                                   font-semibold text-secondary-800">
                                22 Nov 2026
                            </div>


                            <div class="text-[10px] font-bold
                                   text-secondary-950">
                                640 units
                            </div>


                            <div class="text-[9px]
                                   text-secondary-600">
                                0 units
                            </div>


                            <div class="text-[10px] font-bold
                                   text-secondary-700">
                                41 days
                            </div>


                            <div>
                                <span
                                    class="inline-flex rounded-full
                                       bg-emerald-50 px-2.5 py-1
                                       text-[8px] font-semibold
                                       text-emerald-700">
                                    Healthy
                                </span>
                            </div>


                            <div class="text-[9px]
                                   text-secondary-500">
                                Secondary Queue
                            </div>

                        </div>



                        {{-- =================================================
                        ROW 03
                    ================================================== --}}

                        <div
                            class="expiry-table-row
                               grid grid-cols-[1.1fr_1fr_1fr_.85fr_.8fr_.8fr_.9fr_1.25fr]
                               items-center
                               px-5 py-4">

                            <div
                                class="font-mono text-[9px]
                                   font-semibold text-secondary-800">
                                LOT-11SEP-19
                            </div>


                            <div class="text-[9px]
                                   text-secondary-600">
                                11 Sep 2026
                            </div>


                            <div class="text-[9px]
                                   font-semibold text-secondary-800">
                                15 Dec 2026
                            </div>


                            <div class="text-[10px] font-bold
                                   text-secondary-950">
                                920 units
                            </div>


                            <div class="text-[9px]
                                   text-secondary-600">
                                0 units
                            </div>


                            <div class="text-[10px] font-bold
                                   text-emerald-600">
                                62 days
                            </div>


                            <div>
                                <span
                                    class="inline-flex rounded-full
                                       bg-emerald-50 px-2.5 py-1
                                       text-[8px] font-semibold
                                       text-emerald-700">
                                    Healthy
                                </span>
                            </div>


                            <div class="text-[9px]
                                   text-secondary-500">
                                Holding Reserve
                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                BENEFIT STRIP
            ================================================== --}}

                <div
                    class="grid gap-5 border-t
                       border-secondary-100
                       bg-primary-50/70
                       px-5 py-5
                       sm:grid-cols-2
                       lg:grid-cols-3">

                    {{-- 1 --}}
                    <div class="expiry-benefit-item
                           flex items-start gap-3">

                        <div
                            class="flex h-8 w-8 shrink-0
                               items-center justify-center
                               rounded-lg bg-white
                               text-primary-600">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2" />

                                <circle cx="12" cy="12" r="8" />
                            </svg>
                        </div>


                        <div>

                            <p class="text-[9px] font-bold
                                   text-secondary-900">
                                Near-expiry batches automatically prioritised
                            </p>

                            <p class="mt-1 text-[8px] leading-4
                                   text-secondary-500">
                                With picking slips using LOT-24AUG-17 first.
                            </p>

                        </div>

                    </div>



                    {{-- 2 --}}
                    <div class="expiry-benefit-item
                           flex items-start gap-3">

                        <div
                            class="flex h-8 w-8 shrink-0
                               items-center justify-center
                               rounded-lg bg-white
                               text-primary-600">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3l7 3v5c0 5-3.2 8.6-7 10-3.8-1.4-7-5-7-10V6l7-3z" />
                            </svg>
                        </div>


                        <div>

                            <p class="text-[9px] font-bold
                                   text-secondary-900">
                                Team act weeks before stock degrades
                            </p>

                            <p class="mt-1 text-[8px] leading-4
                                   text-secondary-500">
                                Scheduled discounts or wholesale bundle options triggered.
                            </p>

                        </div>

                    </div>



                    {{-- 3 --}}
                    <div class="expiry-benefit-item
                           flex items-start gap-3">

                        <div
                            class="flex h-8 w-8 shrink-0
                               items-center justify-center
                               rounded-lg bg-white
                               text-emerald-600">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l4 4L19 7" />
                            </svg>
                        </div>


                        <div>

                            <p class="text-[9px] font-bold
                                   text-secondary-900">
                                Dramatically reduces inventory write-offs
                            </p>

                            <p class="mt-1 text-[8px] leading-4
                                   text-secondary-500">
                                Saves an average of 25% in preventable spoilage.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ============================================================
    REAL-TIME MULTI-LOCATION & MULTI-DEVICE VISIBILITY
============================================================ --}}

    <section id="multi-device-visibility" class="relative overflow-hidden bg-white py-24 sm:py-28 lg:py-32">

        {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

        <div
            class="pointer-events-none absolute left-1/2 top-[-260px]
               h-[620px] w-[1050px]
               -translate-x-1/2
               rounded-full
               bg-primary-50/90
               blur-[140px]">
        </div>


        <div
            class="pointer-events-none absolute bottom-[-220px] left-[10%]
               h-[420px] w-[520px]
               rounded-full
               bg-primary-100/25
               blur-[130px]">
        </div>



        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="mx-auto max-w-4xl text-center">

                {{-- Badge --}}
                <div
                    class="stock-device-badge inline-flex items-center gap-2.5
                       rounded-full
                       border border-primary-100
                       bg-primary-50
                       px-4 py-2
                       shadow-sm">

                    <svg class="h-4 w-4 text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7h-5V2M4 17h5v5" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.5 8.5A7 7 0 0117.8 5L20 7
                                                   M18.5 15.5A7 7 0 016.2 19L4 17" />
                    </svg>


                    <span class="text-xs font-semibold
                           text-primary-600">
                        Instant Cross-Device Synchronization
                    </span>

                </div>



                {{-- Heading --}}
                <h2
                    class="mx-auto mt-5 max-w-4xl
                       text-4xl font-bold
                       leading-[1.08]
                       tracking-[-0.04em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[50px]">
                    Real-Time Multi-Location & Multi-Device

                    <span class="block">
                        Visibility
                    </span>
                </h2>



                {{-- Description --}}
                <p
                    class="mx-auto mt-5 max-w-3xl
                       text-base leading-7
                       text-secondary-500
                       sm:text-[17px]">
                    Eliminate stock discrepancies between physical warehouse
                    counts, desktop management dashboards, and field team
                    handheld devices instantly.
                </p>

            </div>



            {{-- ====================================================
            DEVICE TABS
        ===================================================== --}}

            <div class="mt-12 flex justify-center">

                <div
                    class="inline-flex max-w-full gap-1.5
                       overflow-x-auto
                       rounded-xl
                       border border-secondary-200
                       bg-secondary-100/80
                       p-1.5">

                    {{-- DESKTOP --}}
                    <button type="button" data-stock-device="desktop"
                        class="stock-device-tab is-active
                           flex min-h-11 items-center gap-2.5
                           whitespace-nowrap
                           rounded-lg
                           px-5
                           text-sm font-semibold
                           text-secondary-700">

                        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="3" y="4" width="18" height="13" rx="2" />

                            <path stroke-linecap="round" d="M9 21h6M12 17v4" />
                        </svg>

                        Warehouse Desktop

                    </button>



                    {{-- TABLET --}}
                    <button type="button" data-stock-device="tablet"
                        class="stock-device-tab
                           flex min-h-11 items-center gap-2.5
                           whitespace-nowrap
                           rounded-lg
                           px-5
                           text-sm font-semibold
                           text-secondary-700">

                        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="5" y="2" width="14" height="20" rx="2" />

                            <path stroke-linecap="round" d="M11 18h2" />
                        </svg>

                        Manager Tablet

                    </button>



                    {{-- MOBILE --}}
                    <button type="button" data-stock-device="mobile"
                        class="stock-device-tab
                           flex min-h-11 items-center gap-2.5
                           whitespace-nowrap
                           rounded-lg
                           px-5
                           text-sm font-semibold
                           text-secondary-700">

                        <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="7" y="2" width="10" height="20" rx="2" />

                            <path stroke-linecap="round" d="M11 18h2" />
                        </svg>

                        Mobile Handheld

                    </button>

                </div>

            </div>



            {{-- ====================================================
            DEVICE WINDOW
        ===================================================== --}}

            <div id="stock-device-window"
                class="stock-device-window
                   mx-auto mt-9
                   max-w-5xl
                   rounded-[22px]
                   border border-primary-200
                   bg-primary-50/70
                   px-6 py-6
                   shadow-[0_22px_55px_rgba(15,23,42,0.075)]
                   sm:px-8 sm:py-7
                   lg:px-9 lg:py-8">

                {{-- =================================================
                WINDOW HEADER
            ================================================== --}}

                <div
                    class="flex flex-col gap-5
                       border-b border-primary-200
                       pb-6
                       sm:flex-row
                       sm:items-center
                       sm:justify-between">

                    {{-- LEFT --}}
                    <div class="flex items-center gap-5">

                        {{-- Browser indicators --}}
                        <div class="flex shrink-0 items-center gap-2.5">

                            <span class="h-3 w-3 rounded-full
                                   bg-red-400">
                            </span>

                            <span class="h-3 w-3 rounded-full
                                   bg-amber-400">
                            </span>

                            <span class="h-3 w-3 rounded-full
                                   bg-emerald-400">
                            </span>

                        </div>


                        <p id="stock-device-view"
                            class="font-mono
                               text-xs
                               text-secondary-500">
                            View: Central HQ Desktop Console
                        </p>

                    </div>



                    {{-- Socket connected --}}
                    <div
                        class="inline-flex w-fit
                           items-center gap-2.5
                           rounded-full
                           border border-emerald-200
                           bg-emerald-50
                           px-4 py-2">

                        <span
                            class="stock-device-pulse
                               h-2 w-2
                               rounded-full
                               bg-emerald-500">
                        </span>


                        <span class="text-xs font-semibold
                               text-emerald-700">
                            Socket Connected (0ms latency)
                        </span>

                    </div>

                </div>



                {{-- =================================================
                LOCATION CARDS
            ================================================== --}}

                <div id="stock-device-locations"
                    class="stock-device-content-enter
                       mt-7 grid gap-4
                       md:grid-cols-3">

                    {{-- HQ CENTRAL HUB --}}
                    <article
                        class="stock-device-location
                           rounded-xl
                           border border-secondary-200
                           bg-white
                           px-5 py-6
                           text-center">

                        <p class="text-sm font-semibold
                               text-secondary-500">
                            HQ Central Hub
                        </p>


                        <p
                            class="mt-2
                               font-mono
                               text-[24px] font-bold
                               tracking-[-0.025em]
                               text-secondary-950">
                            1,240 Units
                        </p>


                        <div
                            class="mt-2.5
                               flex items-center
                               justify-center gap-1.5">

                            <span
                                class="stock-device-pulse
                                   h-1.5 w-1.5
                                   rounded-full
                                   bg-emerald-500">
                            </span>


                            <span class="text-xs font-semibold
                                   text-emerald-600">
                                Synced 1 sec ago
                            </span>

                        </div>

                    </article>



                    {{-- EAST WAREHOUSE --}}
                    <article
                        class="stock-device-location
                           rounded-xl
                           border border-secondary-200
                           bg-white
                           px-5 py-6
                           text-center">

                        <p class="text-sm font-semibold
                               text-secondary-500">
                            East Branch Warehouse
                        </p>


                        <p
                            class="mt-2
                               font-mono
                               text-[24px] font-bold
                               tracking-[-0.025em]
                               text-secondary-950">
                            512 Units
                        </p>


                        <div
                            class="mt-2.5
                               flex items-center
                               justify-center gap-1.5">

                            <span
                                class="stock-device-pulse
                                   h-1.5 w-1.5
                                   rounded-full
                                   bg-emerald-500">
                            </span>


                            <span class="text-xs font-semibold
                                   text-emerald-600">
                                Synced 1 sec ago
                            </span>

                        </div>

                    </article>



                    {{-- MOBILE SCANNER --}}
                    <article
                        class="stock-device-location
                           rounded-xl
                           border border-secondary-200
                           bg-white
                           px-5 py-6
                           text-center">

                        <p class="text-sm font-semibold
                               text-secondary-500">
                            Mobile Scanner #04
                        </p>


                        <p
                            class="mt-2
                               font-mono
                               text-[24px] font-bold
                               tracking-[-0.025em]
                               text-secondary-950">
                            28 Units
                        </p>


                        <div
                            class="mt-2.5
                               flex items-center
                               justify-center gap-1.5">

                            <span
                                class="stock-device-pulse
                                   h-1.5 w-1.5
                                   rounded-full
                                   bg-emerald-500">
                            </span>


                            <span class="text-xs font-semibold
                                   text-emerald-600">
                                Synced 1 sec ago
                            </span>

                        </div>

                    </article>

                </div>



                {{-- =================================================
                WINDOW FOOTER
            ================================================== --}}

                <div
                    class="mt-7 flex flex-col gap-5
                       border-t border-primary-200
                       pt-6
                       md:flex-row
                       md:items-center
                       md:justify-between">

                    <div class="max-w-xl">

                        <p id="stock-device-description"
                            class="text-sm leading-6
                               text-secondary-500">
                            Desktop inventory changes are reflected immediately
                            across manager tablets and handheld scanners.
                        </p>

                    </div>



                    <button type="button" id="sample-stock-transfer"
                        class="stock-device-transfer-btn
                           inline-flex min-h-11
                           shrink-0
                           items-center justify-center
                           rounded-lg
                           bg-primary-600
                           px-5
                           text-sm font-semibold
                           text-white
                           shadow-[0_7px_18px_rgba(37,99,235,0.16)]
                           hover:bg-primary-700">
                        Perform Sample Stock Transfer
                    </button>

                </div>

            </div>

        </div>

    </section>
    {{-- ============================================================
    BUILT FOR COMPLIANCE, SPEED & ZERO SPOILAGE
============================================================ --}}

    <section id="serial-expiry-benefits" class="relative overflow-hidden bg-background-muted py-24 sm:py-28 lg:py-32">

        {{-- Background glow --}}
        <div
            class="pointer-events-none absolute left-1/2 top-[-260px]
               h-[600px] w-[1000px]
               -translate-x-1/2
               rounded-full
               bg-primary-100/35
               blur-[140px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="mx-auto max-w-4xl text-center">

                <h2
                    class="text-4xl font-bold
                       leading-[1.08]
                       tracking-[-0.04em]
                       text-secondary-950
                       sm:text-5xl lg:text-[50px]">
                    Built for Compliance, Speed, and Zero

                    <span class="block">
                        Spoilage
                    </span>
                </h2>


                <p
                    class="mx-auto mt-5 max-w-3xl
                       text-base leading-7
                       text-secondary-500
                       sm:text-[17px]">
                    Why modern inventory managers trust StockCore's
                    serialization and expiry capabilities.
                </p>

            </div>



            {{-- ====================================================
            BENEFIT GRID
        ===================================================== --}}

            <div class="mt-14 grid gap-6
                   lg:grid-cols-2">

                {{-- =================================================
                CARD 01
                COMPLIANCE
            ================================================== --}}

                <article
                    class="serial-benefit-card
                       flex min-h-[320px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.04)]
                       sm:p-8">

                    {{-- Icon --}}
                    <div
                        class="serial-benefit-icon
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-primary-100
                           text-primary-600">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 3h7l4 4v14H7z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 3v5h5" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2 2 4-4" />
                        </svg>

                    </div>



                    {{-- Category --}}
                    <p
                        class="mt-6 text-sm font-bold uppercase
                           tracking-[0.05em]
                           text-primary-600">
                        Enterprise Compliance
                    </p>



                    {{-- Title --}}
                    <h3
                        class="mt-2 text-2xl font-bold
                           tracking-[-0.025em]
                           text-secondary-950">
                        Audit-Ready Traceability
                    </h3>



                    {{-- Description --}}
                    <p
                        class="mt-3 max-w-xl
                           text-[15px] leading-7
                           text-secondary-500">
                        Easily satisfy strict regulatory mandates including FDA,
                        TGA, ISO 13485, and GMP guidelines with immutable digital
                        chain-of-custody logs per unit.
                    </p>



                    {{-- Footer stat --}}
                    <div
                        class="mt-auto flex items-center justify-between
                           gap-5 border-t border-secondary-100
                           pt-5">

                        <span class="text-sm font-semibold
                               text-secondary-500">
                            Compliance Guarantee
                        </span>


                        <span class="text-sm font-bold
                               text-emerald-600">
                            100% Digital Logged
                        </span>

                    </div>

                </article>



                {{-- =================================================
                CARD 02
                WASTE REDUCTION
            ================================================== --}}

                <article
                    class="serial-benefit-card
                       flex min-h-[320px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.04)]
                       sm:p-8">

                    {{-- Icon --}}
                    <div
                        class="serial-benefit-icon
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-emerald-50
                           text-emerald-600">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7l5 5 4-4 7 7" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 10v5h-5" />
                        </svg>

                    </div>



                    <p
                        class="mt-6 text-sm font-bold uppercase
                           tracking-[0.05em]
                           text-emerald-600">
                        Reduced Waste & Shrinkage
                    </p>



                    <h3
                        class="mt-2 text-2xl font-bold
                           tracking-[-0.025em]
                           text-secondary-950">
                        Zero Unnoticed Expirations
                    </h3>



                    <p
                        class="mt-3 max-w-xl
                           text-[15px] leading-7
                           text-secondary-500">
                        Slash perishable inventory spoilage by up to
                        <strong class="font-bold text-secondary-800">
                            35%
                        </strong>
                        using automated FEFO pick-list routing and automated
                        near-expiration clearance workflows.
                    </p>



                    <div
                        class="mt-auto flex items-center justify-between
                           gap-5 border-t border-secondary-100
                           pt-5">

                        <span class="text-sm font-semibold
                               text-secondary-500">
                            Spoilage Reduction
                        </span>


                        <span class="text-sm font-bold
                               text-emerald-600">
                            Up to 35% Cut
                        </span>

                    </div>

                </article>



                {{-- =================================================
                CARD 03
                FAST LOOKUPS
            ================================================== --}}

                <article
                    class="serial-benefit-card
                       flex min-h-[320px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.04)]
                       sm:p-8">

                    {{-- Icon --}}
                    <div
                        class="serial-benefit-icon
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-violet-100
                           text-violet-600">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <circle cx="11" cy="11" r="7" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 20l-3.7-3.7" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 11l1.8 1.8L14 9" />
                        </svg>

                    </div>



                    <p
                        class="mt-6 text-sm font-bold uppercase
                           tracking-[0.05em]
                           text-violet-600">
                        Lightning-Fast Lookups
                    </p>



                    <h3
                        class="mt-2 text-2xl font-bold
                           tracking-[-0.025em]
                           text-secondary-950">
                        Instant Search in Seconds
                    </h3>



                    <p
                        class="mt-3 max-w-xl
                           text-[15px] leading-7
                           text-secondary-500">
                        Enter any serial number, lot ID, or customer account to
                        instantly retrieve full lifecycle movement history,
                        current bay location, and warranty status.
                    </p>



                    <div
                        class="mt-auto flex items-center justify-between
                           gap-5 border-t border-secondary-100
                           pt-5">

                        <span class="text-sm font-semibold
                               text-secondary-500">
                            Search Latency
                        </span>


                        <span class="text-sm font-bold
                               text-violet-600">
                            &lt; 0.2 Seconds
                        </span>

                    </div>

                </article>



                {{-- =================================================
                CARD 04
                RECALL RESOLUTION
            ================================================== --}}

                <article
                    class="serial-benefit-card
                       flex min-h-[320px] flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-7
                       shadow-[0_14px_38px_rgba(15,23,42,0.04)]
                       sm:p-8">

                    {{-- Icon --}}
                    <div
                        class="serial-benefit-icon
                           flex h-12 w-12
                           items-center justify-center
                           rounded-xl
                           bg-amber-100
                           text-amber-600">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <circle cx="12" cy="12" r="8" />

                            <path stroke-linecap="round" d="M12 4v3M12 17v3M4 12h3M17 12h3" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2" />
                        </svg>

                    </div>



                    <p
                        class="mt-6 text-sm font-bold uppercase
                           tracking-[0.05em]
                           text-amber-600">
                        Faster Recall Resolution
                    </p>



                    <h3
                        class="mt-2 text-2xl font-bold
                           tracking-[-0.025em]
                           text-secondary-950">
                        Surgical Isolation
                    </h3>



                    <p
                        class="mt-3 max-w-xl
                           text-[15px] leading-7
                           text-secondary-500">
                        Identify and quarantine affected batch units in minutes
                        without interrupting active pickers or pausing unaffected
                        inventory operations.
                    </p>



                    <div
                        class="mt-auto flex items-center justify-between
                           gap-5 border-t border-secondary-100
                           pt-5">

                        <span class="text-sm font-semibold
                               text-secondary-500">
                            Recall Isolation
                        </span>


                        <span class="text-sm font-bold
                               text-amber-600">
                            In Minutes
                        </span>

                    </div>

                </article>

            </div>

        </div>

    </section>
    {{-- ============================================================
    TRACEABILITY LOOKUP VISUALIZER
============================================================ --}}

    <section id="traceability-lookup" class="relative overflow-hidden bg-white py-24 sm:py-28 lg:py-32">

        {{-- ========================================================
        BACKGROUND
    ========================================================= --}}

        <div
            class="pointer-events-none absolute left-1/2 top-[-260px]
               h-[620px] w-[1000px]
               -translate-x-1/2 rounded-full
               bg-primary-50/80 blur-[140px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            SECTION HEADER
        ===================================================== --}}

            <div class="mx-auto max-w-4xl text-center">

                {{-- Badge --}}
                <div
                    class="traceability-demo-badge
                       inline-flex items-center gap-2.5
                       rounded-full
                       bg-primary-50
                       px-4 py-2
                       text-primary-600">

                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v4M12 17v4M3 12h4M17 12h4" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l3 3M15 15l3 3M18 6l-3 3M9 15l-3 3" />
                    </svg>


                    <span class="text-xs font-semibold">
                        Live Traceability Demo
                    </span>

                </div>


                {{-- Heading --}}
                <h2
                    class="mt-4 text-4xl font-bold
                       tracking-[-0.04em]
                       text-secondary-950
                       sm:text-5xl lg:text-[48px]">
                    Traceability Lookup Visualizer
                </h2>


                {{-- Description --}}
                <p
                    class="mx-auto mt-4 max-w-3xl
                       text-base leading-7
                       text-secondary-500
                       sm:text-[17px]">
                    Try typing or clicking sample serial or batch codes below
                    to see real-time lifecycle details.
                </p>

            </div>



            {{-- ====================================================
            LOOKUP APPLICATION
        ===================================================== --}}

            <div
                class="traceability-lookup-shell
                   mx-auto mt-12 max-w-5xl
                   rounded-[22px]
                   border border-secondary-200
                   bg-white
                   p-6
                   shadow-[0_22px_55px_rgba(15,23,42,0.09)]
                   sm:p-8 lg:p-9">

                {{-- =================================================
                SEARCH INPUT
            ================================================== --}}

                <div class="relative">

                    <svg class="pointer-events-none absolute
                           left-4 top-1/2
                           h-5 w-5
                           -translate-y-1/2
                           text-secondary-400"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="11" cy="11" r="7" />

                        <path stroke-linecap="round" d="M20 20l-3.8-3.8" />
                    </svg>


                    <input id="traceability-search" type="text" value="SN-9021-A8" autocomplete="off"
                        spellcheck="false" placeholder="Search serial number or batch ID..."
                        class="traceability-search-input
                           h-14 w-full
                           rounded-xl
                           border border-secondary-300
                           bg-white
                           pl-12 pr-4
                           text-[15px] font-medium
                           text-secondary-800
                           placeholder:text-secondary-400">

                </div>



                {{-- =================================================
                QUICK SAMPLE BUTTONS
            ================================================== --}}

                <div class="mt-4 flex flex-wrap items-center gap-2">

                    <span class="mr-1 text-xs
                           font-medium text-secondary-500">
                        Quick Select Sample:
                    </span>


                    {{-- SERIAL 1 --}}
                    <button type="button" data-traceability-sample="SN-9021-A8"
                        class="traceability-sample-btn
                           rounded-lg
                           bg-primary-50
                           px-3 py-2
                           text-xs font-semibold
                           text-primary-600">
                        SN-9021-A8
                    </button>


                    {{-- BATCH 1 --}}
                    <button type="button" data-traceability-sample="Batch #B-402"
                        class="traceability-sample-btn
                           rounded-lg
                           bg-amber-50
                           px-3 py-2
                           text-xs font-semibold
                           text-amber-700">
                        Batch #B-402
                    </button>


                    {{-- SERIAL 2 --}}
                    <button type="button" data-traceability-sample="SN-3304-X1"
                        class="traceability-sample-btn
                           rounded-lg
                           bg-emerald-50
                           px-3 py-2
                           text-xs font-semibold
                           text-emerald-700">
                        SN-3304-X1
                    </button>


                    {{-- BATCH 2 --}}
                    <button type="button" data-traceability-sample="Batch #LOT-9901"
                        class="traceability-sample-btn
                           rounded-lg
                           bg-violet-50
                           px-3 py-2
                           text-xs font-semibold
                           text-violet-700">
                        Batch #LOT-9901
                    </button>

                </div>



                {{-- =================================================
                DYNAMIC RESULT
            ================================================== --}}

                <div id="traceability-result" class="traceability-result-enter mt-7">
                    {{-- populated by jQuery --}}
                </div>

            </div>

        </div>

    </section>
    {{-- ============================================================
    COMPLEMENTARY CAPABILITIES
============================================================ --}}

    <section id="serial-related-features" class="relative overflow-hidden bg-primary-50/65 py-20 sm:py-24 lg:py-28">

        {{-- subtle glow --}}
        <div
            class="pointer-events-none absolute left-1/2 top-[-220px]
               h-[500px] w-[900px]
               -translate-x-1/2
               rounded-full bg-primary-100/35
               blur-[130px]">
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

            {{-- ====================================================
            HEADER
        ===================================================== --}}

            <div class="flex flex-col gap-5
                   sm:flex-row sm:items-end sm:justify-between">

                <div>

                    <p
                        class="text-[11px] font-bold uppercase
                           tracking-[0.18em]
                           text-primary-600">
                        Complementary Capabilities
                    </p>


                    <h2
                        class="mt-3 text-3xl font-bold
                           tracking-[-0.035em]
                           text-secondary-950
                           sm:text-4xl">
                        Works together with.
                    </h2>

                </div>


                {{-- Browse all features --}}
                <a href="{{ url('/features') }}"
                    class="serial-related-browse
                       inline-flex items-center gap-2
                       text-sm font-semibold
                       text-primary-600
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
                    class="serial-related-card
                       flex min-h-[260px] flex-col
                       rounded-[20px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_10px_30px_rgba(15,23,42,0.035)]
                       sm:p-7">

                    {{-- icon --}}
                    <div
                        class="serial-related-icon
                           flex h-11 w-11
                           items-center justify-center
                           rounded-xl
                           bg-primary-50
                           text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 4v12m0 0l-3-3m3 3l3-3" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 20V8m0 0l-3 3m3-3l3 3" />
                        </svg>
                    </div>


                    <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                        FIFO Dispatch
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Automatically prioritise older or near-expiry stock
                        during fulfilment to prevent wastage.
                    </p>


                    <div class="mt-auto pt-6">

                        <a href="{{ url('/features/fifo') }}"
                            class="serial-related-link
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
                    class="serial-related-card
                       flex min-h-[260px] flex-col
                       rounded-[20px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_10px_30px_rgba(15,23,42,0.035)]
                       sm:p-7">

                    {{-- icon --}}
                    <div
                        class="serial-related-icon
                           flex h-11 w-11
                           items-center justify-center
                           rounded-xl
                           bg-primary-50
                           text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="5" y="3" width="14" height="18" rx="2" />

                            <path stroke-linecap="round" d="M8 7h8M8 11h8" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 16h6M12 13v6" />
                        </svg>
                    </div>


                    <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                        Stock Decrease Tracking
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Reduce available stock immediately as sales,
                        transfers or floor usage occur in real time.
                    </p>


                    <div class="mt-auto pt-6">

                        <a href="{{ url('/features/stock-tracking') }}"
                            class="serial-related-link
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
                SCAN & INGEST DOCUMENTS
            ================================================== --}}

                <article
                    class="serial-related-card
                       flex min-h-[260px] flex-col
                       rounded-[20px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_10px_30px_rgba(15,23,42,0.035)]
                       sm:p-7">

                    {{-- icon --}}
                    <div
                        class="serial-related-icon
                           flex h-11 w-11
                           items-center justify-center
                           rounded-xl
                           bg-primary-50
                           text-primary-600">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 3H5a2 2 0 00-2 2v2
                                       M17 3h2a2 2 0 012 2v2
                                       M7 21H5a2 2 0 01-2-2v-2
                                       M17 21h2a2 2 0 002-2v-2" />

                            <rect x="8" y="7" width="8" height="10" rx="1" />

                            <path stroke-linecap="round" d="M10 10h4M10 13h4" />
                        </svg>
                    </div>


                    <h3 class="mt-5 text-lg font-bold
                           text-secondary-950">
                        Scan & Ingest Documents
                    </h3>


                    <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                        Capture serials, batch numbers and expiry dates directly
                        from supplier packing manifests with AI OCR.
                    </p>


                    <div class="mt-auto pt-6">

                        <a href="{{ url('/features/scan-import') }}"
                            class="serial-related-link
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
    SERIAL / EXPIRY FINAL CTA
============================================================ --}}

    <section id="serial-expiry-final-cta" class="bg-background-muted px-6 py-12 sm:py-16 lg:px-8">

        <div class="mx-auto max-w-7xl">

            <div
                class="serial-expiry-final-cta
                   overflow-hidden
                   rounded-[22px]
                   bg-secondary-950
                   px-6 py-16
                   text-center
                   shadow-[0_24px_70px_rgba(15,23,42,0.16)]
                   sm:px-10 sm:py-20
                   lg:px-16 lg:py-24">

                {{-- subtle top glow line --}}
                <div
                    class="pointer-events-none absolute left-1/2 top-0
                       h-px w-[55%]
                       -translate-x-1/2
                       bg-gradient-to-r
                       from-transparent
                       via-primary-400/50
                       to-transparent">
                </div>


                {{-- =================================================
                BADGE
            ================================================== --}}

                <div
                    class="serial-expiry-cta-badge
                       inline-flex items-center gap-2
                       rounded-full
                       border border-primary-500/20
                       bg-primary-500/10
                       px-4 py-2">

                    <span
                        class="serial-expiry-cta-dot
                           h-1.5 w-1.5
                           rounded-full bg-primary-400">
                    </span>

                    <span
                        class="text-[11px] font-bold uppercase
                           tracking-[0.13em]
                           text-primary-300">
                        Real-Time Traceability for Modern Inventory
                    </span>

                </div>



                {{-- =================================================
                HEADING
            ================================================== --}}

                <h2
                    class="mx-auto mt-6 max-w-4xl
                       text-4xl font-bold
                       leading-[1.06]
                       tracking-[-0.04em]
                       text-white
                       sm:text-5xl
                       lg:text-[52px]">
                    Know every unit. Every batch. Every

                    <span class="block">
                        expiry.
                    </span>
                </h2>



                {{-- =================================================
                DESCRIPTION
            ================================================== --}}

                <p
                    class="mx-auto mt-5 max-w-2xl
                       text-base leading-7
                       text-secondary-300
                       sm:text-[17px]">
                    Start your free trial and give your team complete
                    visibility into serial numbers, expiry dates and live
                    inventory across every location.
                </p>



                {{-- =================================================
                CTA BUTTONS
            ================================================== --}}

                <div
                    class="mt-9 flex flex-col
                       items-center justify-center
                       gap-3 sm:flex-row">

                    {{-- Primary --}}
                    <a href="{{ url('/signup') }}"
                        class="serial-expiry-final-btn
                           inline-flex min-h-12
                           min-w-[150px]
                           items-center justify-center
                           rounded-lg
                           bg-primary-600
                           px-6
                           text-sm font-semibold
                           text-white
                           shadow-[0_10px_30px_rgba(37,99,235,0.28)]
                           hover:bg-primary-500
                           hover:shadow-[0_16px_38px_rgba(37,99,235,0.34)]">
                        Start Free Trial
                    </a>


                    {{-- Secondary --}}
                    <a href="#"
                        class="serial-expiry-final-btn
                           inline-flex min-h-12
                           min-w-[140px]
                           items-center justify-center
                           rounded-lg
                           bg-secondary-800
                           px-6
                           text-sm font-semibold
                           text-white
                           hover:bg-secondary-700">
                        Book a Demo
                    </a>

                </div>



                {{-- =================================================
                TRUST ITEMS
            ================================================== --}}

                <div
                    class="mt-8 flex flex-wrap
                       items-center justify-center
                       gap-x-5 gap-y-3
                       text-xs font-medium
                       text-secondary-400">

                    <div class="flex items-center gap-2">

                        <span
                            class="serial-expiry-cta-dot
                               h-1.5 w-1.5
                               rounded-full bg-primary-400">
                        </span>

                        14-day free trial
                    </div>


                    <span class="hidden h-1 w-1 rounded-full
                           bg-secondary-600 sm:block">
                    </span>


                    <div class="flex items-center gap-2">

                        <span
                            class="serial-expiry-cta-dot
                               h-1.5 w-1.5
                               rounded-full bg-primary-400"
                            style="animation-delay: -.6s;">
                        </span>

                        No credit card required
                    </div>


                    <span class="hidden h-1 w-1 rounded-full
                           bg-secondary-600 sm:block">
                    </span>


                    <div class="flex items-center gap-2">

                        <span
                            class="serial-expiry-cta-dot
                               h-1.5 w-1.5
                               rounded-full bg-primary-400"
                            style="animation-delay: -1.2s;">
                        </span>

                        Cancel anytime
                    </div>

                </div>

            </div>

        </div>

    </section>

    <script>
        $(function() {

            const $deviceTabs = $('[data-stock-device]');
            const $deviceView = $('#stock-device-view');


            /*
            |--------------------------------------------------------------------------
            | Text shown for each device
            |--------------------------------------------------------------------------
            */

            const deviceViews = {
                desktop: 'View: Central HQ Desktop Console',

                tablet: 'View: Floor Manager Tablet View',

                mobile: 'View: Handheld Barcode Scanner App'
            };


            /*
            |--------------------------------------------------------------------------
            | Device tab click
            |--------------------------------------------------------------------------
            */

            $deviceTabs.on('click', function() {

                const $this = $(this);

                const selectedDevice =
                    $this.attr('data-stock-device');


                /*
                |--------------------------------------------------------------------------
                | Reset active tab
                |--------------------------------------------------------------------------
                */

                $deviceTabs.removeClass('is-active');


                /*
                |--------------------------------------------------------------------------
                | Activate clicked tab
                |--------------------------------------------------------------------------
                */

                $this.addClass('is-active');


                /*
                |--------------------------------------------------------------------------
                | Change ONLY the "View:" text
                |--------------------------------------------------------------------------
                */

                if (deviceViews[selectedDevice]) {

                    $deviceView.text(
                        deviceViews[selectedDevice]
                    );

                }

            });

        });

        $(function() {

            const $search = $('#traceability-search');
            const $result = $('#traceability-result');
            const $sampleButtons = $('[data-traceability-sample]');


            /*
            |--------------------------------------------------------------------------
            | Lookup records
            |--------------------------------------------------------------------------
            */

            const traceabilityRecords = {

                /*
                |--------------------------------------------------------------------------
                | SERIAL — SN-9021-A8
                |--------------------------------------------------------------------------
                */

                'sn-9021-a8': {

                    typeLabel: 'Serial Unit',

                    name: 'Surgical Laser Component',

                    badge: 'Warranty Active',

                    badgeClass: 'border-emerald-200 bg-emerald-50 text-emerald-700',

                    details: [{
                            label: 'Tracking / Serial ID',
                            value: 'SN-9021-A8'
                        },

                        {
                            label: 'Master SKU',
                            value: 'SKU-8802'
                        },

                        {
                            label: 'Current Location',
                            value: 'Mercy Hospital (Bay 14-C)'
                        },

                        {
                            label: 'Expiry / Shelf Life',
                            value: 'N/A (Hardware Item)'
                        },

                        {
                            label: 'Assigned Customer',
                            value: 'Mercy Health Systems Inc.'
                        },

                        {
                            label: 'Warranty Status',
                            value: 'Active (Expires Nov 2027)'
                        }
                    ]
                },


                /*
                |--------------------------------------------------------------------------
                | BATCH — B-402
                |--------------------------------------------------------------------------
                */

                'batch #b-402': {

                    typeLabel: 'Batch / Lot',

                    name: 'Injectable Saline Solution (100ml)',

                    badge: 'Near-Expiry Priority',

                    badgeClass: 'border-amber-300 bg-amber-50 text-amber-700',

                    details: [{
                            label: 'Tracking / Serial ID',
                            value: 'Batch #B-402'
                        },

                        {
                            label: 'Master SKU',
                            value: 'MED-1049'
                        },

                        {
                            label: 'Current Location',
                            value: 'Warehouse A - Clearance Rack 02'
                        },

                        {
                            label: 'Expiry / Shelf Life',
                            value: '14 Days Remaining (Oct 03, 2026)'
                        },

                        {
                            label: 'Assigned Customer',
                            value: 'Unassigned (In Clearance Queue)'
                        },

                        {
                            label: 'Warranty Status',
                            value: 'FEFO Clearance Routing Triggered'
                        }
                    ]
                },


                /*
                |--------------------------------------------------------------------------
                | SERIAL — SN-3304-X1
                |--------------------------------------------------------------------------
                */

                'sn-3304-x1': {

                    typeLabel: 'Serial Unit',

                    name: 'Wireless Diagnostic Scanner X1',

                    badge: 'In Service',

                    badgeClass: 'border-primary-200 bg-primary-50 text-primary-700',

                    details: [{
                            label: 'Tracking / Serial ID',
                            value: 'SN-3304-X1'
                        },

                        {
                            label: 'Master SKU',
                            value: 'WDS-X1-3304'
                        },

                        {
                            label: 'Current Location',
                            value: 'Melbourne Service Centre'
                        },

                        {
                            label: 'Expiry / Shelf Life',
                            value: 'N/A (Serialized Hardware)'
                        },

                        {
                            label: 'Assigned Customer',
                            value: 'Northside Retail Group'
                        },

                        {
                            label: 'Warranty Status',
                            value: 'Service Coverage Active'
                        }
                    ]
                },


                /*
                |--------------------------------------------------------------------------
                | BATCH — LOT-9901
                |--------------------------------------------------------------------------
                */

                'batch #lot-9901': {

                    typeLabel: 'Batch / Lot',

                    name: 'Organic Nutrition Drink 330ml',

                    badge: 'Healthy Batch',

                    badgeClass: 'border-emerald-200 bg-emerald-50 text-emerald-700',

                    details: [{
                            label: 'Tracking / Serial ID',
                            value: 'Batch #LOT-9901'
                        },

                        {
                            label: 'Master SKU',
                            value: 'FNB-330-NUT'
                        },

                        {
                            label: 'Current Location',
                            value: 'Sydney Central DC - Cold Zone 04'
                        },

                        {
                            label: 'Expiry / Shelf Life',
                            value: '82 Days Remaining'
                        },

                        {
                            label: 'Assigned Customer',
                            value: 'Unallocated Stock'
                        },

                        {
                            label: 'Warranty Status',
                            value: 'FEFO Monitoring Active'
                        }
                    ]
                }

            };


            /*
            |--------------------------------------------------------------------------
            | Normalise search query
            |--------------------------------------------------------------------------
            */

            function normalizeQuery(value) {

                return value
                    .trim()
                    .replace(/\s+/g, ' ')
                    .toLowerCase();

            }


            /*
            |--------------------------------------------------------------------------
            | Build result HTML
            |--------------------------------------------------------------------------
            */

            function buildRecord(record) {

                let detailsHtml = '';


                record.details.forEach(function(detail) {

                    detailsHtml += `
                    <div
                        class="traceability-detail-box
                               rounded-xl
                               border border-secondary-200
                               bg-white
                               px-4 py-4"
                    >
                        <p
                            class="text-xs font-medium
                                   text-secondary-400"
                        >
                            ${detail.label}
                        </p>

                        <p
                            class="mt-1.5
                                   text-[13px] font-semibold
                                   leading-5
                                   text-secondary-800"
                        >
                            ${detail.value}
                        </p>
                    </div>
                `;

                });


                return `
                <div
                    class="rounded-[16px]
                           border border-secondary-200
                           bg-secondary-50/70
                           p-5
                           sm:p-6"
                >

                    <div
                        class="flex flex-col gap-4
                               border-b border-secondary-200
                               pb-5
                               sm:flex-row
                               sm:items-center
                               sm:justify-between"
                    >

                        <div>

                            <p
                                class="text-[11px] font-bold
                                       uppercase
                                       tracking-[0.12em]
                                       text-secondary-400"
                            >
                                ${record.typeLabel}
                            </p>

                            <h3
                                class="mt-2
                                       text-xl font-bold
                                       tracking-[-0.02em]
                                       text-secondary-950"
                            >
                                ${record.name}
                            </h3>

                        </div>


                        <span
                            class="inline-flex w-fit
                                   items-center
                                   rounded-full
                                   border
                                   px-3 py-1.5
                                   text-xs font-semibold
                                   ${record.badgeClass}"
                        >
                            ${record.badge}
                        </span>

                    </div>


                    <div
                        class="mt-5 grid gap-4
                               md:grid-cols-2
                               lg:grid-cols-3"
                    >
                        ${detailsHtml}
                    </div>

                </div>
            `;

            }


            /*
            |--------------------------------------------------------------------------
            | Empty state
            |--------------------------------------------------------------------------
            */

            function buildNoResult() {

                return `
                <div
                    class="flex min-h-[230px]
                           flex-col items-center
                           justify-center
                           rounded-[16px]
                           border border-secondary-200
                           bg-secondary-50/70
                           px-6 py-12
                           text-center"
                >

                    <div
                        class="flex h-12 w-12
                               items-center justify-center
                               rounded-full
                               bg-secondary-100
                               text-secondary-400"
                    >

                        <svg
                            class="h-6 w-6"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <circle
                                cx="10"
                                cy="10"
                                r="6"
                            />

                            <path
                                stroke-linecap="round"
                                d="M14.5 14.5L20 20"
                            />

                            <path
                                stroke-linecap="round"
                                d="M8 8l4 4M12 8l-4 4"
                            />
                        </svg>

                    </div>


                    <p
                        class="mt-4
                               text-sm font-semibold
                               text-secondary-500"
                    >
                        No record found matching query.
                    </p>


                    <p
                        class="mt-1
                               text-xs
                               text-secondary-400"
                    >
                        Try selecting one of the sample chips above.
                    </p>

                </div>
            `;

            }


            /*
            |--------------------------------------------------------------------------
            | Render query
            |--------------------------------------------------------------------------
            */

            function renderTraceabilityRecord(query) {

                const normalized =
                    normalizeQuery(query);

                const record =
                    traceabilityRecords[normalized];


                /*
                |--------------------------------------------------------------------------
                | Remove old animation
                |--------------------------------------------------------------------------
                */

                $result.removeClass(
                    'traceability-result-enter'
                );


                /*
                |--------------------------------------------------------------------------
                | Render record or empty state
                |--------------------------------------------------------------------------
                */

                if (record) {

                    $result.html(
                        buildRecord(record)
                    );

                } else {

                    $result.html(
                        buildNoResult()
                    );

                }


                /*
                |--------------------------------------------------------------------------
                | Restart entrance animation
                |--------------------------------------------------------------------------
                */

                void $result[0].offsetWidth;


                $result.addClass(
                    'traceability-result-enter'
                );

            }


            /*
            |--------------------------------------------------------------------------
            | Sample chip click
            |--------------------------------------------------------------------------
            */

            $sampleButtons.on('click', function() {

                const value =
                    $(this).attr(
                        'data-traceability-sample'
                    );


                /*
                |--------------------------------------------------------------------------
                | Put sample inside search box
                |--------------------------------------------------------------------------
                */

                $search.val(value);


                /*
                |--------------------------------------------------------------------------
                | Render matching record
                |--------------------------------------------------------------------------
                */

                renderTraceabilityRecord(value);

            });


            /*
            |--------------------------------------------------------------------------
            | Search while typing
            |--------------------------------------------------------------------------
            */

            $search.on('input', function() {

                const value =
                    $(this).val();


                /*
                |--------------------------------------------------------------------------
                | Empty search
                |--------------------------------------------------------------------------
                */

                if (!value.trim()) {

                    $result.empty();

                    return;
                }


                /*
                |--------------------------------------------------------------------------
                | Lookup
                |--------------------------------------------------------------------------
                */

                renderTraceabilityRecord(value);

            });


            /*
            |--------------------------------------------------------------------------
            | Default state
            |--------------------------------------------------------------------------
            */

            renderTraceabilityRecord(
                $search.val()
            );

        });
    </script>


@endsection
