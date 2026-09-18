{{-- ============================================================
    TERMS OF SERVICE HERO
    resources/views/public/terms/hero.blade.php
============================================================ --}}

@php

    /*
    |--------------------------------------------------------------------------
    | Temporary Terms Metadata
    |--------------------------------------------------------------------------
    |
    | Replace these values with the final legally-reviewed information
    | before publishing the Terms of Service.
    |
    */

    $termsMeta = [
        'last_updated' => 'September 18, 2026',
        'effective_date' => 'October 1, 2026',
        'version' => 'v2.4 (Draft)',
    ];

@endphp


<section id="terms-hero"
    class="relative overflow-hidden
           border-b border-secondary-200
           bg-background-muted">

    {{-- =========================================================
        BACKGROUND DECORATION
    ========================================================== --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- TOP LEFT CURVE --}}
        <div
            class="absolute
                   -left-[400px] -top-[420px]
                   h-[760px] w-[760px]
                   rounded-full
                   border-[105px]
                   border-primary-50/70">
        </div>


        {{-- TOP RIGHT SOFT SHAPE --}}
        <div
            class="absolute
                   -right-[300px] -top-[300px]
                   h-[700px] w-[700px]
                   rounded-full
                   bg-primary-50/50
                   blur-[20px]">
        </div>


        {{-- BOTTOM RIGHT CURVE --}}
        <div
            class="absolute
                   -right-[430px] -bottom-[500px]
                   h-[820px] w-[820px]
                   rounded-full
                   border-[110px]
                   border-primary-50/50">
        </div>


        {{-- SOFT CENTRE GLOW --}}
        <div
            class="absolute
                   left-1/2 top-[35%]
                   h-[460px] w-[950px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[120px]">
        </div>

    </div>



    {{-- =========================================================
        CONTENT
    ========================================================== --}}
    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               pb-14 pt-10
               sm:px-8
               sm:pb-16
               sm:pt-12
               lg:px-8
               lg:pb-20">

        {{-- =====================================================
            BREADCRUMB
        ====================================================== --}}
        {{-- <nav
            aria-label="Breadcrumb"
            class="flex flex-wrap
                   items-center gap-2
                   text-[12px]
                   font-medium"
        >

            <a
                href="{{ url('/') }}"
                class="text-secondary-500
                       transition-colors
                       hover:text-primary-600"
            >
                Home
            </a>


            <svg
                class="h-3.5 w-3.5
                       text-secondary-300"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m9 18 6-6-6-6"
                />
            </svg>


            <span class="text-secondary-500">
                Legal
            </span>


            <svg
                class="h-3.5 w-3.5
                       text-secondary-300"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m9 18 6-6-6-6"
                />
            </svg>


            <span
                class="font-semibold
                       text-primary-600"
            >
                Terms of Service
            </span>

        </nav> --}}



        {{-- =====================================================
            DRAFT / LEGAL REVIEW BADGE
        ====================================================== --}}
        <div
            class="mt-3
                   inline-flex
                   max-w-full
                   items-center gap-2
                   rounded-full
                   border border-amber-300
                   bg-amber-50/80
                   px-4 py-2">

            <svg class="h-4 w-4
                       shrink-0
                       text-amber-600"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 2.8 19h18.4L12 3Z" />

                <path stroke-linecap="round" d="M12 9v4" />

                <circle cx="12" cy="16" r=".7" fill="currentColor" stroke="none" />
            </svg>


            <span
                class="text-[11px]
                       font-semibold
                       leading-5
                       text-amber-800
                       sm:text-[12px]">
                Standard SaaS ToS Content — Draft Version for Legal Advisor Review Prior to Publishing
            </span>

        </div>



        {{-- =====================================================
            TITLE + METADATA
        ====================================================== --}}
        <div
            class="mt-6
                   grid gap-8
                   lg:grid-cols-[1fr_auto]
                   lg:items-end">

            {{-- LEFT --}}
            <div>

                <h1
                    class="text-[44px]
                           font-extrabold
                           leading-[1.02]
                           tracking-[-0.05em]
                           text-secondary-950
                           sm:text-[54px]
                           lg:text-[64px]">
                    Terms of Service
                </h1>


                <p
                    class="mt-4
                           max-w-[720px]
                           text-[16px]
                           leading-7
                           text-secondary-600
                           sm:text-[17px]">
                    Please review these terms carefully before accessing
                    or using the StockCore inventory management platform.
                </p>

            </div>



            {{-- =================================================
                METADATA PANEL
            ================================================== --}}
            <div
                class="rounded-[18px]
                       border border-secondary-200
                       bg-white/85
                       p-3
                       shadow-[0_10px_28px_rgba(15,23,42,0.05)]
                       backdrop-blur-md">

                <div class="grid gap-2
                           sm:grid-cols-3">

                    {{-- LAST UPDATED --}}
                    <div
                        class="min-w-[150px]
                               rounded-xl
                               border border-secondary-100
                               bg-background-muted
                               px-4 py-3">

                        <p
                            class="text-[10px]
                                   font-bold uppercase
                                   tracking-[0.06em]
                                   text-secondary-400">
                            Last Updated
                        </p>


                        <p
                            class="mt-1
                                   text-[13px]
                                   font-semibold
                                   text-secondary-900">
                            {{ $termsMeta['last_updated'] }}
                        </p>

                    </div>



                    {{-- EFFECTIVE DATE --}}
                    <div
                        class="min-w-[150px]
                               rounded-xl
                               border border-secondary-100
                               bg-background-muted
                               px-4 py-3">

                        <p
                            class="text-[10px]
                                   font-bold uppercase
                                   tracking-[0.06em]
                                   text-secondary-400">
                            Effective Date
                        </p>


                        <p
                            class="mt-1
                                   text-[13px]
                                   font-semibold
                                   text-secondary-900">
                            {{ $termsMeta['effective_date'] }}
                        </p>

                    </div>



                    {{-- VERSION --}}
                    <div
                        class="min-w-[135px]
                               rounded-xl
                               border border-primary-100
                               bg-primary-50/60
                               px-4 py-3">

                        <p
                            class="text-[10px]
                                   font-bold uppercase
                                   tracking-[0.06em]
                                   text-secondary-400">
                            Version
                        </p>


                        <p
                            class="mt-1
                                   text-[13px]
                                   font-bold
                                   text-primary-600">
                            {{ $termsMeta['version'] }}
                        </p>

                    </div>

                </div>

            </div>

        </div>



        {{-- =====================================================
            DIVIDER
        ====================================================== --}}
        <div class="mt-10
                   h-px w-full
                   bg-secondary-200"></div>



        {{-- =====================================================
            SEARCH + ACTIONS
        ====================================================== --}}
        <div
            class="mt-8
                   flex flex-col gap-5
                   lg:flex-row
                   lg:items-center
                   lg:justify-between">

            {{-- =================================================
                SEARCH
            ================================================== --}}
            <div class="w-full
                       lg:max-w-[650px]">

                <div
                    class="flex h-[58px]
                           items-center
                           rounded-[14px]
                           border border-secondary-200
                           bg-white
                           px-4

                           shadow-[0_6px_20px_rgba(15,23,42,0.035)]

                           transition-all duration-300

                           focus-within:border-primary-300
                           focus-within:ring-4
                           focus-within:ring-primary-50">

                    <svg class="h-5 w-5
                               shrink-0
                               text-secondary-400"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="11" cy="11" r="7" />

                        <path stroke-linecap="round" d="m20 20-3.5-3.5" />
                    </svg>


                    <input id="terms-search" type="search" autocomplete="off"
                        placeholder="Search terms (e.g., 'SLA', 'Cancellation', 'Liability')..."
                        class="ml-3
                               h-full
                               min-w-0 flex-1
                               border-0
                               bg-transparent
                               p-0
                               text-[14px]
                               text-secondary-900
                               outline-none

                               placeholder:text-secondary-400

                               focus:border-0
                               focus:outline-none
                               focus:ring-0">

                </div>

            </div>



            {{-- =================================================
                ACTION BUTTONS
            ================================================== --}}
            <div class="flex flex-wrap
                       items-center gap-3">

                {{-- EXPAND ALL --}}
                <button id="terms-expand-all" type="button"
                    class="group 
           inline-flex h-[50px] 
           items-center justify-center 
           gap-2.5 
           rounded-xl 
           border border-secondary-200 
           bg-white 
           px-5 

           text-[13px] 
           font-semibold 
           text-secondary-700 

           transition-all duration-300 

           hover:border-primary-200 
           hover:bg-primary-50 
           hover:text-primary-700">

                    {{-- Icon wrapper --}}
                    <span
                        class="flex h-5 w-5
               shrink-0
               items-center justify-center
               text-primary-600">
                        <svg class="block h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 6l5 5 5-5" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l5 5 5-5" />
                        </svg>
                    </span>

                    <span>
                        Expand All
                    </span>

                </button>



                {{-- PRINT --}}
                <button id="terms-print" type="button"
                    class="inline-flex h-[50px]
                           items-center justify-center
                           gap-2
                           rounded-xl
                           border border-secondary-200
                           bg-white
                           px-5

                           text-[13px]
                           font-semibold
                           text-secondary-700

                           transition-all duration-300

                           hover:border-primary-200
                           hover:bg-primary-50
                           hover:text-primary-700">

                    <svg class="h-4 w-4
                               text-primary-600" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M7 8V4h10v4" />

                        <rect x="5" y="13" width="14" height="7" rx="1" />

                        <path d="M5 15H3v-5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v5h-2" />
                    </svg>

                    Print Document

                </button>



                {{-- DOWNLOAD PDF --}}
                <a href="#"
                    class="group
                           inline-flex h-[50px]
                           items-center justify-center
                           gap-2
                           rounded-xl
                           border border-primary-200
                           bg-primary-50/60
                           px-5

                           text-[13px]
                           font-semibold
                           text-primary-600

                           transition-all duration-300

                           hover:border-primary-300
                           hover:bg-primary-100">

                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h8l4 4v14H6V3Z" />

                        <path d="M14 3v5h4" />

                        <path stroke-linecap="round" d="M9 14h6M9 17h4" />
                    </svg>

                    Download PDF

                </a>

            </div>

        </div>



        {{-- =====================================================
            LEGAL REVIEW NOTICE
        ====================================================== --}}
        <div
            class="mt-9
                   rounded-[18px]
                   border border-primary-200
                   bg-white/65
                   px-5 py-5
                   backdrop-blur-sm
                   sm:px-6">

            <div class="flex items-start gap-4">

                <span
                    class="flex h-11 w-11
                           shrink-0
                           items-center justify-center
                           rounded-xl
                           bg-primary-50
                           text-primary-600">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h8l4 4v14H6V3Z" />

                        <path d="M14 3v5h4" />

                        <path stroke-linecap="round" d="M9 12h6M9 15h5" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.5 18.5 4-4" />
                    </svg>

                </span>



                <div>

                    <h2
                        class="text-[14px]
                               font-bold
                               text-secondary-950">
                        Notice to Legal Reviewers & Stakeholders
                    </h2>


                    <p
                        class="mt-1
                               max-w-[1050px]
                               text-[13px]
                               leading-6
                               text-secondary-600">
                        This document represents a working preliminary draft of the
                        StockCore Software-as-a-Service (SaaS) Agreement. It is formatted
                        for structural layout evaluation and internal legal review with
                        qualified counsel before final publishing and customer use.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- ============================================================
    HERO INTERACTIONS
============================================================ --}}
@push('scripts')
    <script>
        $(document).ready(function() {

            /*
            |--------------------------------------------------------------------------
            | TERMS SEARCH
            |--------------------------------------------------------------------------
            |
            | The main terms section can listen for this event later.
            |
            */

            $('#terms-search').on('input', function() {

                const searchTerm =
                    $(this)
                    .val()
                    .trim()
                    .toLowerCase();


                $(document).trigger(
                    'stockcore:terms-search',
                    [searchTerm]
                );

            });



            /*
            |--------------------------------------------------------------------------
            | EXPAND ALL
            |--------------------------------------------------------------------------
            */

            $('#terms-expand-all').on('click', function() {

                $(document).trigger(
                    'stockcore:terms-expand-all'
                );

            });



            /*
            |--------------------------------------------------------------------------
            | PRINT
            |--------------------------------------------------------------------------
            */

            $('#terms-print').on('click', function() {

                window.print();

            });

        });
    </script>
@endpush
