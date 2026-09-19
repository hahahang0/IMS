{{-- soft cta --}}

<section id="about-cta" class="relative bg-secondary-200 px-6 py-16 sm:py-20 lg:px-8 lg:py-24">

    <div class="mx-auto max-w-6xl">
        {{-- cta banner --}}

        <div
            class="relative overflow-hidden
                   bg-gradient-to-r
                   from-primary-700
                   via-primary-600
                   to-primary-500
                   px-7 py-14
                   sm:px-10 sm:py-16
                   lg:px-16 lg:py-20
                   rounded-md">
            {{-- decorative lines --}}
            <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

                {{-- Top-left curves --}}
                <svg class="absolute -left-6 -top-8 h-52 w-52 text-primary-200/45" viewBox="0 0 220 220" fill="none">
                    <path d="M15 185C70 150 105 95 118 20" stroke="currentColor" stroke-width="1.2" />

                    <path d="M5 195C68 158 112 103 129 18" stroke="currentColor" stroke-width="1.2" />

                    <path d="M-5 205C65 165 120 110 141 15" stroke="currentColor" stroke-width="1.2" />

                    <path d="M-15 215C60 172 126 117 154 12" stroke="currentColor" stroke-width="1.2" />
                </svg>


                {{-- Bottom-right curves --}}
                <svg class="absolute -bottom-10 -right-8 h-56 w-56 rotate-180 text-primary-200/40" viewBox="0 0 220 220"
                    fill="none">
                    <path d="M15 185C70 150 105 95 118 20" stroke="currentColor" stroke-width="1.2" />

                    <path d="M5 195C68 158 112 103 129 18" stroke="currentColor" stroke-width="1.2" />

                    <path d="M-5 205C65 165 120 110 141 15" stroke="currentColor" stroke-width="1.2" />

                    <path d="M-15 215C60 172 126 117 154 12" stroke="currentColor" stroke-width="1.2" />
                </svg>


                {{-- Very subtle centre lighting --}}
                <div
                    class="absolute left-1/2 top-1/2
                           h-40 w-[520px]
                           -translate-x-1/2 -translate-y-1/2
                           rounded-full
                           bg-primary-300/15
                           blur-[70px]">
                </div>

            </div>



            {{-- cta content --}}

            <div class="relative z-10 mx-auto max-w-3xl text-center">

                {{-- Heading --}}
                <h2
                    class="text-3xl font-medium
                           leading-[1.12]
                           tracking-[-0.035em]
                           text-white
                           sm:text-4xl
                           lg:text-[2.8rem]">
                    Ready to see StockCore in action?
                </h2>


                {{-- Description --}}
                <p
                    class="mx-auto mt-4 max-w-2xl
                           text-sm leading-6
                           text-primary-100
                           sm:text-base">
                    Try it free or talk with our team.
                    No pressure — just practical answers about whether
                    StockCore fits your business.
                </p>



                {{-- buttons --}}

                <div
                    class="mt-7 flex flex-col items-center justify-center
                           gap-3 sm:flex-row">

                    {{-- Primary --}}
                    <a href="{{route('public.auth.signup')}}"
                        class="group inline-flex min-h-[46px]
                               items-center justify-center gap-3
                               rounded-full
                               bg-white
                               px-6 py-3
                               text-sm font-semibold
                               text-primary-700
                               shadow-[0_8px_22px_rgba(15,23,42,0.14)]
                               transition duration-300
                               hover:-translate-y-0.5
                               hover:bg-primary-50">
                        Try StockCore free

                        <svg class="h-4 w-4
                                   transition duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>
                    </a>


                    {{-- Secondary --}}
                    <a href="{{route('public.support')}}"
                        class="group inline-flex min-h-[46px]
                               items-center justify-center gap-3
                               rounded-full
                               border border-primary-200/70
                               bg-transparent
                               px-6 py-3
                               text-sm font-semibold
                               text-white
                               transition duration-300
                               hover:-translate-y-0.5
                               hover:border-white
                               hover:bg-white/10">
                        Talk to us

                        <svg class="h-4 w-4
                                   transition duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
