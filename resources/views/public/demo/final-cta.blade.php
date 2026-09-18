{{-- ============================================================
    FINAL DEMO CTA
    resources/views/public/demo/final-cta.blade.php
============================================================ --}}

<section id="demo-final-cta" class="relative overflow-hidden bg-background px-6 py-20 sm:px-8 lg:px-8 lg:py-24">

    <div class="mx-auto max-w-7xl">

        <div
            class="relative overflow-hidden
                   rounded-[30px]
                   border border-primary-200
                   bg-gradient-to-br
                   from-primary-50/90
                   via-white
                   to-primary-50/70
                   px-6 py-14
                   shadow-[0_22px_70px_rgba(15,23,42,0.06)]
                   sm:px-10
                   lg:px-16 lg:py-16">

            {{-- =====================================================
                BACKGROUND DECORATION
            ====================================================== --}}
            <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

                {{-- Top-left soft circle --}}
                <div
                    class="absolute
                           -left-[180px] -top-[200px]
                           h-[420px] w-[420px]
                           rounded-full
                           bg-primary-100/60">
                </div>

                {{-- Bottom-left circle --}}
                <div
                    class="absolute
                           -bottom-[120px] left-[40px]
                           h-[180px] w-[180px]
                           rounded-full
                           bg-primary-100/40">
                </div>

                {{-- Right large curve --}}
                <div
                    class="absolute
                           -right-[220px] -bottom-[260px]
                           h-[520px] w-[520px]
                           rounded-full
                           border-[75px]
                           border-primary-100/60">
                </div>

                {{-- Right small outlined circle --}}
                <div
                    class="absolute
                           right-[9%] top-[10%]
                           h-[110px] w-[110px]
                           rounded-full
                           border-2 border-dashed
                           border-primary-200/70">
                </div>

                {{-- Small right dot --}}
                <div
                    class="absolute
                           right-[7%] top-[42%]
                           h-9 w-9
                           rounded-full
                           bg-primary-100/70">
                </div>

                {{-- Centre glow --}}
                <div
                    class="absolute
                           left-1/2 top-1/2
                           h-[320px] w-[700px]
                           -translate-x-1/2 -translate-y-1/2
                           rounded-full
                           bg-white/80
                           blur-[100px]">
                </div>

            </div>


            {{-- =====================================================
                CONTENT
            ====================================================== --}}
            <div class="relative z-10
                       mx-auto max-w-4xl
                       text-center">

                {{-- Eyebrow --}}
                <div
                    class="inline-flex items-center gap-2.5
                           rounded-full
                           border border-primary-100
                           bg-white/80
                           px-4 py-2
                           text-sm font-medium
                           text-primary-600
                           shadow-sm
                           backdrop-blur-sm">

                    <span
                        class="h-2 w-2
                               rounded-full
                               bg-primary-500"></span>

                    Ready when you are

                </div>


                {{-- Heading --}}
                <h2
                    class="mx-auto mt-6
                           max-w-[850px]
                           text-4xl
                           font-extrabold
                           leading-[1.05]
                           tracking-[-0.045em]
                           text-secondary-950
                           sm:text-5xl
                           lg:text-[3.6rem]">
                    Ready to see StockCore
                    <span class="block">
                        in action?
                    </span>
                </h2>


                {{-- Description --}}
                <p
                    class="mx-auto mt-6
                           max-w-2xl
                           text-base
                           leading-7
                           text-secondary-600
                           sm:text-lg">
                    Book a personalised walkthrough with our team,
                    or explore the tools built to simplify your inventory operations.
                </p>


                {{-- =================================================
                    CTA BUTTONS
                ================================================== --}}
                <div
                    class="mt-9
                           flex flex-col
                           items-center justify-center
                           gap-3
                           sm:flex-row">

                    {{-- BOOK A DEMO --}}
                    <a href="#demo-booking"
                        class="group
                               inline-flex
                               min-h-[54px]
                               min-w-[220px]
                               items-center justify-center
                               gap-3
                               rounded-xl
                               bg-primary-600
                               px-7
                               text-[15px]
                               font-semibold
                               text-white
                               shadow-[0_12px_30px_rgba(37,99,235,0.24)]
                               transition-all duration-300
                               hover:-translate-y-0.5
                               hover:bg-primary-700
                               hover:shadow-[0_16px_36px_rgba(37,99,235,0.30)]">

                        Book a Demo

                        <svg class="h-4 w-4
                                   transition-transform duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>

                    </a>


                    {{-- EXPLORE FEATURES --}}
                    <a href="{{ url('/features') }}"
                        class="group
                               inline-flex
                               min-h-[54px]
                               min-w-[220px]
                               items-center justify-center
                               gap-3
                               rounded-xl
                               border border-primary-300
                               bg-white
                               px-7
                               text-[15px]
                               font-semibold
                               text-secondary-950
                               shadow-sm
                               transition-all duration-300
                               hover:-translate-y-0.5
                               hover:border-primary-500
                               hover:bg-primary-50
                               hover:text-primary-700">

                        Explore Features

                        <svg class="h-4 w-4
                                   text-primary-600
                                   transition-transform duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>

                    </a>

                </div>


                {{-- =================================================
                    REASSURANCE
                ================================================== --}}
                <div
                    class="mt-9
                           flex flex-wrap
                           items-center justify-center
                           gap-x-7 gap-y-4">

                    {{-- Demo length --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="flex h-7 w-7
           items-center justify-center
           rounded-full
           border border-primary-500
           bg-primary-50
           text-primary-600">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 7" />
                            </svg>
                        </span>

                        <span class="text-sm font-medium
                                   text-secondary-600">
                            15–30 min demo
                        </span>

                    </div>


                    {{-- Divider --}}
                    <span
                        class="hidden h-6 w-px
                               bg-secondary-200
                               sm:block"></span>


                    {{-- No obligation --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="flex h-7 w-7
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   border border-primary-500
                                   text-primary-600">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 7" />
                            </svg>
                        </span>

                        <span class="text-sm font-medium
                                   text-secondary-600">
                            No obligation
                        </span>

                    </div>


                    {{-- Divider --}}
                    <span
                        class="hidden h-6 w-px
                               bg-secondary-200
                               sm:block"></span>


                    {{-- Australian support --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="flex h-7 w-7
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                    border border-primary-500
                                   text-primary-600">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 7" />
                            </svg>
                        </span>

                        <span class="text-sm font-medium
                                   text-secondary-600">
                            Australian support
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>v
