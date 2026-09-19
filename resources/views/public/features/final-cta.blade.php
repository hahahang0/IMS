{{-- ====================================================================== --}}
{{-- FEATURES PAGE — FINAL CTA --}}
{{-- ====================================================================== --}}

<section
    class="bg-background px-4 py-16 sm:px-6 lg:px-8 lg:py-20"
>

    <div
        class="relative mx-auto max-w-7xl overflow-hidden
               rounded-[30px]
               border border-primary-800/40
               bg-gradient-to-r
               from-primary-950
               via-primary-900
               to-primary-800
               px-6 py-14
               text-white
               shadow-[0_30px_80px_rgba(15,23,42,0.28)]
               sm:px-10 sm:py-16
               lg:px-14 lg:py-20"
    >


        {{-- ============================================================= --}}
        {{-- DECORATIVE BACKGROUND --}}
        {{-- ============================================================= --}}

        <div class="pointer-events-none absolute inset-0 overflow-hidden">

            {{-- Left glow --}}
            <div
                class="absolute -left-24 top-12
                       h-72 w-72
                       rounded-full
                       bg-primary-500/10
                       blur-[90px]"
            ></div>


            {{-- Right glow --}}
            <div
                class="absolute -right-20 top-0
                       h-80 w-80
                       rounded-full
                       bg-primary-500/15
                       blur-[100px]"
            ></div>


            {{-- Center glow --}}
            <div
                class="absolute bottom-[-120px] left-1/2
                       h-72 w-[600px]
                       -translate-x-1/2
                       rounded-full
                       bg-primary-600/10
                       blur-[100px]"
            ></div>


            {{-- Left outer circle --}}
            <div
                class="absolute -left-44 top-6
                       h-[420px] w-[420px]
                       rounded-full
                       border border-primary-400/15"
            ></div>


            {{-- Left dotted circle --}}
            <div
                class="absolute -left-40 bottom-[-90px]
                       h-[320px] w-[320px]
                       rounded-full
                       border border-dashed
                       border-primary-400/20"
            ></div>


            {{-- Right outer circle --}}
            <div
                class="absolute -right-36 bottom-[-90px]
                       h-[420px] w-[420px]
                       rounded-full
                       border border-primary-400/20"
            ></div>


            {{-- Right dotted circle --}}
            <div
                class="absolute -right-20 top-20
                       h-[300px] w-[300px]
                       rounded-full
                       border border-dashed
                       border-primary-300/15"
            ></div>

        </div>



        {{-- ============================================================= --}}
        {{-- CONTENT --}}
        {{-- ============================================================= --}}

        <div
            class="relative z-10
                   mx-auto
                   max-w-5xl
                   text-center"
        >


            {{-- Eyebrow --}}
            <div
                class="inline-flex items-center gap-2
                       rounded-full
                       border border-primary-500/50
                       bg-primary-600/10
                       px-4 py-2
                       text-xs font-bold uppercase
                       tracking-[0.14em]
                       text-primary-200"
            >

                {{-- Lightning icon --}}
                <svg
                    class="h-4 w-4 text-primary-300"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        d="M13 2 5 14h6l-1 8 8-12h-6l1-8Z"
                    />
                </svg>

                Get started in 60 seconds

            </div>



            {{-- Heading --}}
            <h2
                class="mx-auto mt-6
                       max-w-4xl
                       text-4xl font-extrabold
                       leading-[1.05]
                       tracking-[-0.04em]
                       text-white
                       sm:text-5xl
                       lg:text-6xl"
            >

                Ready to master

                <span
                    class="block text-primary-400"
                >
                    your inventory?
                </span>

            </h2>



            {{-- Description --}}
            <p
                class="mx-auto mt-6
                       max-w-3xl
                       text-base leading-7
                       text-secondary-200
                       sm:text-lg sm:leading-8"
            >
                Join growing retailers, wholesalers and eCommerce businesses
                using StockCore to simplify stock control, improve visibility
                and make smarter decisions — all in one place.
            </p>



            {{-- ========================================================= --}}
            {{-- CTA BUTTONS --}}
            {{-- ========================================================= --}}

            <div
                class="mt-10 flex flex-col
                       items-center justify-center
                       gap-4
                       sm:flex-row"
            >


                {{-- Primary CTA --}}
                <a
                    href="{{ url('/signup') }}"
                    class="group inline-flex
                           min-w-[250px]
                           items-center justify-center
                           gap-3
                           rounded-2xl
                           bg-primary-600
                           px-7 py-4
                           text-base font-bold
                           text-white
                           shadow-[0_18px_40px_rgba(37,99,235,0.35)]
                           transition duration-300
                           hover:-translate-y-1
                           hover:bg-primary-500
                           hover:shadow-[0_22px_50px_rgba(37,99,235,0.42)]"
                >

                    Start 14-Day Free Trial

                    <svg
                        class="h-4 w-4
                               transition-transform
                               duration-300
                               group-hover:translate-x-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2.2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-5-5 5 5-5 5"
                        />
                    </svg>

                </a>



                {{-- Secondary CTA --}}
                <a
                    href="{{ url('/contact') }}"
                    class="inline-flex
                           min-w-[250px]
                           items-center justify-center
                           rounded-2xl
                           border border-white/20
                           bg-white/5
                           px-7 py-4
                           text-base font-bold
                           text-white
                           backdrop-blur-sm
                           transition duration-300
                           hover:-translate-y-1
                           hover:border-primary-300/40
                           hover:bg-white/10"
                >
                    Talk to Product Specialist
                </a>

            </div>



            {{-- ========================================================= --}}
            {{-- TRUST POINTS --}}
            {{-- ========================================================= --}}

            <div
                class="mt-12
                       grid grid-cols-1
                       gap-3
                       sm:grid-cols-2
                       lg:grid-cols-4"
            >


                {{-- No Credit Card --}}
                <div
                    class="flex items-center justify-center
                           gap-3
                           rounded-xl
                           border border-white/10
                           bg-white/[0.04]
                           px-4 py-3
                           backdrop-blur-sm"
                >

                    <span
                        class="flex h-8 w-8 shrink-0
                               items-center justify-center
                               rounded-full
                               bg-primary-600
                               text-white"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span
                        class="text-sm font-medium
                               text-secondary-100"
                    >
                        No credit card required
                    </span>

                </div>



                {{-- Setup --}}
                <div
                    class="flex items-center justify-center
                           gap-3
                           rounded-xl
                           border border-white/10
                           bg-white/[0.04]
                           px-4 py-3
                           backdrop-blur-sm"
                >

                    <span
                        class="flex h-8 w-8 shrink-0
                               items-center justify-center
                               rounded-full
                               bg-primary-600
                               text-white"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span
                        class="text-sm font-medium
                               text-secondary-100"
                    >
                        Set up in minutes
                    </span>

                </div>



                {{-- All features --}}
                <div
                    class="flex items-center justify-center
                           gap-3
                           rounded-xl
                           border border-white/10
                           bg-white/[0.04]
                           px-4 py-3
                           backdrop-blur-sm"
                >

                    <span
                        class="flex h-8 w-8 shrink-0
                               items-center justify-center
                               rounded-full
                               bg-primary-600
                               text-white"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span
                        class="text-sm font-medium
                               text-secondary-100"
                    >
                        All features included
                    </span>

                </div>



                {{-- Cancel --}}
                <div
                    class="flex items-center justify-center
                           gap-3
                           rounded-xl
                           border border-white/10
                           bg-white/[0.04]
                           px-4 py-3
                           backdrop-blur-sm"
                >

                    <span
                        class="flex h-8 w-8 shrink-0
                               items-center justify-center
                               rounded-full
                               bg-primary-600
                               text-white"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span
                        class="text-sm font-medium
                               text-secondary-100"
                    >
                        Cancel anytime
                    </span>

                </div>

            </div>



            {{-- ========================================================= --}}
            {{-- SMALL SUPPORTING LINE --}}
            {{-- ========================================================= --}}

            <p
                class="mx-auto mt-8
                       max-w-2xl
                       text-xs leading-5
                       text-secondary-400"
            >
                Start exploring StockCore today and see how simpler,
                more connected inventory management can help your
                business operate with greater confidence.
            </p>

        </div>

    </div>

</section>