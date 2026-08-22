{{-- ============================================================
    STOCKCORE — FINAL CTA SECTION
============================================================ --}}
<section id="cta"
    class="relative
           overflow-x-clip
           overflow-y-visible
           bg-background-muted
           bg-gradient-to-b
           from-white
           via-blue-50/40
           to-blue-100/30
           py-24
           sm:py-28
           lg:py-32">

    {{-- ========================================================
        BACKGROUND GLOW
    ========================================================= --}}

    <div
        class="pointer-events-none absolute left-1/2 top-1/2
               h-[600px] w-[900px]
               -translate-x-1/2 -translate-y-1/2
               rounded-full
               bg-blue-100/60
               blur-3xl">
    </div>


    {{-- ========================================================
        CTA CONTAINER
    ========================================================= --}}
    <div
        class="relative
           min-h-[560px]
           w-[calc(100%-64px)]
           mx-auto
           overflow-visible
           rounded-[28px]
           border border-white
           bg-gradient-to-r
           from-primary-950
           to-primary-400
           shadow-[0_30px_80px_-30px_rgba(30,64,175,0.45)]">

        {{-- =================================================
                DECORATIVE BACKGROUND GLOWS
            ================================================== --}}

        {{-- <div
                class="pointer-events-none absolute
                       -left-32 -top-32
                       h-[400px] w-[400px]
                       rounded-full
                       bg-blue-400/30
                       blur-3xl"
            ></div>


            <div
                class="pointer-events-none absolute
                       right-[-150px] top-[-100px]
                       h-[500px] w-[500px]
                       rounded-full
                       bg-indigo-500/30
                       blur-3xl"
            ></div>


            <div
                class="pointer-events-none absolute
                       bottom-[-180px] left-1/3
                       h-[450px] w-[450px]
                       rounded-full
                       bg-cyan-400/10
                       blur-3xl"
            ></div> --}}

        {{-- =========================================================
    PREMIUM BACKGROUND LIGHTING
========================================================= --}}

        {{-- Top-left blue light --}}

        <div
            class="pointer-events-none absolute
           -left-32 -top-40
           h-[520px] w-[520px]
           rounded-full
           bg-blue-300/20
           blur-[110px]">
        </div>


        {{-- Center glow --}}

        <div
            class="pointer-events-none absolute
           left-[35%] top-[15%]
           h-[380px] w-[380px]
           rounded-full
           bg-cyan-300/10
           blur-[100px]">
        </div>


        {{-- Right side purple/blue light --}}

        <div
            class="pointer-events-none absolute
           -right-32 -top-20
           h-[520px] w-[520px]
           rounded-full
           bg-indigo-400/20
           blur-[120px]">
        </div>


        {{-- Bottom blue glow --}}

        <div
            class="pointer-events-none absolute
           bottom-[-250px]
           left-1/2
           h-[500px] w-[700px]
           -translate-x-1/2
           rounded-full
           bg-blue-400/10
           blur-[120px]">
        </div>


        {{-- =================================================
                SUBTLE GRID
            ================================================== --}}

        {{-- <div class="pointer-events-none absolute inset-0
                        opacity-[0.08]"
                    style="
                        background-image:
                            linear-gradient(
                                rgba(255,255,255,0.5) 1px,
                                transparent 1px
                            ),
                            linear-gradient(
                                90deg,
                                rgba(255,255,255,0.5) 1px,
                                transparent 1px
                            );
                        background-size: 48px 48px;
                    ">
                </div> --}}



        {{-- =================================================
                CONTENT WRAPPER
            ================================================== --}}

        <div
            class="relative z-10
                       flex min-h-[400px]
                       flex-col

                       lg:flex-row">


            {{-- =================================================
                    LEFT CONTENT
                ================================================== --}}

            <div
                class="flex w-full
                           flex-col justify-center

                           px-7 py-16

                           sm:px-12
                           lg:w-[48%]
                           lg:px-14
                           xl:px-16">


                {{-- =================================================
                        SMALL LABEL
                    ================================================== --}}

                <div
                    class="mb-7 inline-flex w-fit
                               items-center gap-2
                               rounded-full

                               border border-blue-300/30
                               bg-blue-300/20

                               px-3.5 py-2

                               text-xs font-medium
                               text-blue-100">

                    {{-- Lightning icon --}}

                    <span
                        class="flex h-5 w-5
                                   items-center justify-center
                                   rounded-full
                                   bg-blue-600
                                   text-white">

                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M13 2 3 14h7l-1 8
                                       10-12h-7l1-8Z" />
                        </svg>

                    </span>


                    <span>
                        READY TO GET STARTED?
                    </span>

                </div>



                {{-- =================================================
                        HEADING
                    ================================================== --}}

                <h2
                    class="max-w-xl
           text-4xl
           font-bold
           leading-[1.08]
           tracking-tight
           text-white
           sm:text-5xl
           lg:text-[42px]
           xl:text-[48px]">

                    Take control of your inventory operations

                    <span class="relative inline-block text-primary-600">
                        today.

                        <svg class="absolute left-1/2 top-full mt-1 h-3 w-[110%] -translate-x-1/2 overflow-visible"
                            viewBox="0 0 100 12" fill="none" preserveAspectRatio="none">

                            <path d="M2 4 C25 12, 75 12, 98 4" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </span>

                </h2>



                {{-- =================================================
                        DESCRIPTION
                    ================================================== --}}

                <p
                    class="mt-6 max-w-lg
                               text-base
                               leading-7
                               text-blue-100/80

                               sm:text-lg
                               sm:leading-8">
                    Join thousands of businesses that streamline
                    inventory, reduce stockouts, and grow with
                    confidence.
                </p>



                {{-- =================================================
                        BUTTONS
                    ================================================== --}}

                <div
                    class="mt-9
                               flex flex-col gap-3

                               sm:flex-row">


                    {{-- START FREE --}}

                    <a href="#"
                        class="group inline-flex
                                   items-center justify-center
                                   gap-2

                                   rounded-xl

                                   bg-blue-400
                                   px-5 py-3.5

                                   text-sm
                                   font-semibold
                                   text-white

                                   shadow-lg
                                   shadow-blue-950/30

                                   transition-all
                                   duration-300

                                   hover:-translate-y-0.5
                                   hover:bg-blue-600
                                   hover:shadow-xl
                                   hover:shadow-blue-950/40

                                   focus:outline-none
                                   focus:ring-4
                                   focus:ring-blue-300/30">

                        Start your free trial

                        <svg class="h-4 w-4
                                       transition-transform
                                       duration-300
                                       group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14" stroke-linecap="round" />

                            <path d="m13 6 6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </a>



                    {{-- WATCH DEMO --}}

                    <a href="#"
                        class="group inline-flex
                                   items-center justify-center
                                   gap-2

                                   rounded-xl

                                   border
                                   border-white/20

                                   bg-white/5

                                   px-5 py-3.5

                                   text-sm
                                   font-semibold
                                   text-white

                                   backdrop-blur-sm

                                   transition-all
                                   duration-300

                                   hover:-translate-y-0.5
                                   hover:border-white/30
                                   hover:bg-white/10

                                   focus:outline-none
                                   focus:ring-4
                                   focus:ring-white/10">

                        {{-- Play icon --}}

                        <span
                            class="flex h-5 w-5
                                       items-center justify-center
                                       rounded-full
                                       bg-white/10
                                       transition
                                       duration-300
                                       group-hover:bg-white/20">

                            <svg class="ml-0.5 h-3 w-3" viewBox="0 0 24 24" fill="currentColor">
                                <path d="m8 5 11 7-11 7V5Z" />
                            </svg>

                        </span>

                        Watch demo

                    </a>

                </div>



                {{-- =================================================
                        SMALL TRUST TEXT
                    ================================================== --}}

                {{-- <div
                        class="mt-7
                               flex flex-wrap
                               items-center gap-x-5 gap-y-2
                               text-xs
                               text-blue-200/70"
                    >

                        <span class="flex items-center gap-1.5">

                            <svg
                                class="h-3.5 w-3.5 text-blue-300"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    d="m5 12 4 4L19 6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>

                            No credit card required

                        </span>


                        <span class="hidden sm:block">
                            •
                        </span>


                        <span class="flex items-center gap-1.5">

                            <svg
                                class="h-3.5 w-3.5 text-blue-300"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    d="m5 12 4 4L19 6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>

                            Set up in minutes

                        </span>

                    </div> --}}

            </div>



            {{-- =================================================
                    RIGHT SIDE — PRODUCT VISUAL
                ================================================== --}}

            {{-- <div
                    class="relative
                           flex w-full
                           items-end justify-center

                           lg:w-[52%]">


                    <div
                        class="pointer-events-none absolute
                               bottom-10 right-10
                               h-[300px] w-[500px]
                               rounded-full
                               bg-blue-400/25
                               blur-3xl">
                    </div>


                

                <img src="{{ asset('images/company_assets/laptop.png') }}" alt="StockCore inventory dashboard"
                    class="absolute
                            z-20

                            w-[720px]
                            max-w-none

                            right-[-150px]
                            bottom-[-35px]

                            object-contain

                            drop-shadow-[0_30px_40px_rgba(0,0,0,0.35)]

                            transition-transform
                            duration-700
                            ease-out

                            hover:translate-y-[-6px]">

            </div> --}}
            {{-- =================================================
     RIGHT SIDE — PRODUCT VISUAL
================================================= --}}
            <div
                class="relative
           flex w-full
           h-[560px]
           items-end
           justify-center
           overflow-visible
           lg:w-[52%]">

                {{-- GLOW BEHIND LAPTOP --}}
                <div
                    class="pointer-events-none absolute
               right-[-180px]
               bottom-[-20px]
               h-[500px]
               w-[750px]
               rounded-full
               bg-blue-400/20
               blur-[120px]">
                </div>

                {{-- =================================================
         LAPTOP IMAGE
    ================================================= --}}
                <img src="{{ asset('images/company_assets/laptop.png') }}" alt="StockCore inventory dashboard"
                    class="absolute
           z-50
           w-[900px]
           max-w-none
           right-[-100px]
           bottom-[-120px]
           translate-x-[-65px]
           object-contain
           drop-shadow-[0_40px_60px_rgba(0,0,0,0.45)]
           transition-transform
           duration-700
           ease-out
           hover:-translate-y-1" />

            </div>
        </div>

    </div>

    </div>

</section>
