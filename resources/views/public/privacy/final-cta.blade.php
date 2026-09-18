{{-- ============================================================
    PRIVACY POLICY - FINAL CTA
============================================================ --}}

<section
    id="privacy-legal-cta"
    class="relative
           bg-background
           pt-16
           pb-0
           sm:pt-20"
>

    {{-- FULL WIDTH CTA --}}
    <div
        class="relative
               w-full
               overflow-hidden

               bg-gradient-to-r
               from-[#0b2554]
               via-[#123b7a]
               to-primary-600"
    >

        {{-- =====================================================
            BACKGROUND DECORATION
        ====================================================== --}}
        <div
            class="pointer-events-none
                   absolute inset-0
                   overflow-hidden"
            aria-hidden="true"
        >

            {{-- Large circle --}}
            <div
                class="absolute
                       right-[18%]
                       top-[-190px]
                       h-[440px] w-[440px]
                       rounded-full
                       border border-white/10"
            ></div>


            {{-- Right circle --}}
            <div
                class="absolute
                       -right-[130px]
                       -bottom-[210px]
                       h-[460px] w-[460px]
                       rounded-full
                       bg-white/[0.05]"
            ></div>


            {{-- Glow --}}
            <div
                class="absolute
                       right-[5%]
                       top-1/2
                       h-[300px] w-[560px]
                       -translate-y-1/2
                       rounded-full
                       bg-primary-400/10
                       blur-[90px]"
            ></div>

        </div>



        {{-- =====================================================
            INNER CONTENT
        ====================================================== --}}
        <div
            class="relative z-10
                   mx-auto
                   max-w-7xl
                   px-6 py-14
                   sm:px-8
                   lg:px-8
                   lg:py-16"
        >

            <div
                class="flex flex-col
                       gap-8

                       xl:flex-row
                       xl:items-center
                       xl:justify-between"
            >

                {{-- =================================================
                    LEFT
                ================================================== --}}
                <div
                    class="max-w-[650px]
                           shrink-0"
                >

                    <h2
                        class="text-[30px]
                               font-bold
                               leading-[1.2]
                               tracking-[-0.035em]
                               text-white

                               sm:text-[34px]
                               lg:text-[36px]"
                    >
                        Have questions about our Privacy Policy?
                    </h2>


                    <p
                        class="mt-4
                               max-w-[600px]
                               text-[14px]
                               leading-7
                               text-blue-100/80
                               sm:text-[15px]"
                    >
                        Our privacy and compliance team is here to help with
                        questions about your data, privacy rights, information
                        handling, or StockCore policies.
                    </p>

                </div>



                {{-- =================================================
                    BUTTONS
                ================================================== --}}
                <div
                    class="flex
                           shrink-0
                           flex-wrap
                           items-center
                           gap-3

                           sm:flex-nowrap

                           xl:justify-end"
                >

                    {{-- CONTACT PRIVACY --}}
                    <a
                        href="mailto:privacy@stockcore.com.au"
                        class="group
                               inline-flex
                               h-[54px]
                               min-w-[195px]
                               shrink-0
                               items-center
                               justify-center
                               gap-3

                               whitespace-nowrap

                               rounded-[12px]
                               bg-white
                               px-6

                               text-[13px]
                               font-semibold
                               text-[#123b7a]

                               shadow-[0_10px_28px_rgba(0,0,0,0.14)]

                               transition-all
                               duration-300

                               hover:-translate-y-0.5
                               hover:bg-blue-50"
                    >

                        Contact Privacy Team

                        <svg
                            class="h-4 w-4
                                   shrink-0
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-5-5 5 5-5 5"
                            />
                        </svg>

                    </a>



                    {{-- TERMS --}}
                    <a
                        href="{{ url('/terms') }}"
                        class="inline-flex
                               h-[54px]
                               min-w-[155px]
                               shrink-0
                               items-center
                               justify-center

                               whitespace-nowrap

                               rounded-[12px]
                               border border-white/30
                               bg-white/[0.04]
                               px-6

                               text-[13px]
                               font-semibold
                               text-white

                               backdrop-blur-sm

                               transition-all
                               duration-300

                               hover:-translate-y-0.5
                               hover:border-white/50
                               hover:bg-white/10"
                    >
                        Terms of Service
                    </a>



                    {{-- HELP --}}
                    <a
                        href="{{ url('/support') }}"
                        class="inline-flex
                               h-[54px]
                               min-w-[140px]
                               shrink-0
                               items-center
                               justify-center

                               whitespace-nowrap

                               rounded-[12px]
                               border border-white/30
                               bg-white/[0.04]
                               px-6

                               text-[13px]
                               font-semibold
                               text-white

                               backdrop-blur-sm

                               transition-all
                               duration-300

                               hover:-translate-y-0.5
                               hover:border-white/50
                               hover:bg-white/10"
                    >
                        Help Centre
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>