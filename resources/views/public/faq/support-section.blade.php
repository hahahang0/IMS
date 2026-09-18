{{-- cta section --}}
<section id="faq-support" class="relative overflow-hidden bg-background px-6 pb-20 pt-6 sm:px-8 lg:px-8 lg:pb-24">

    <div class="mx-auto max-w-7xl">

        {{-- main support card --}}
        <div
            class="relative overflow-hidden
                   rounded-[30px]
                   border border-primary-200
                   bg-gradient-to-br
                   from-primary-50/80
                   via-white
                   to-primary-50/60
                   shadow-[0_24px_70px_rgba(15,23,42,0.06)]">
            {{-- background decorations --}}
            <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

                {{-- Left soft circle --}}
                <div
                    class="absolute
                           -left-[180px] -top-[180px]
                           h-[420px] w-[420px]
                           rounded-full
                           bg-primary-100/40">
                </div>

                {{-- Middle glow --}}
                <div
                    class="absolute
                           left-[40%] top-1/2
                           h-[320px] w-[520px]
                           -translate-y-1/2
                           rounded-full
                           bg-white/70
                           blur-[90px]">
                </div>

                {{-- Bottom decorative shape --}}
                <div
                    class="absolute
                           -bottom-[240px] left-[15%]
                           h-[430px] w-[430px]
                           rounded-full
                           border-[70px]
                           border-primary-50/80">
                </div>

            </div>


            {{-- two column layout --}}
            <div
                class="relative z-10
                       grid min-h-[470px]
                       grid-cols-1
                       lg:grid-cols-[1.08fr_0.92fr]">

                {{-- left content --}}
                <div
                    class="flex items-center
                           px-7 py-12
                           sm:px-10
                           lg:px-12
                           xl:px-14">

                    <div class="max-w-[660px]">


                        {{-- response badge --}}
                        <div
                            class="inline-flex items-center gap-2
                                   rounded-full
                                   border border-secondary-200
                                   bg-white/90
                                   px-4 py-2
                                   text-[12px]
                                   font-semibold
                                   text-primary-600
                                   shadow-sm
                                   backdrop-blur-sm">

                            <span
                                class="flex h-5 w-5
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-50
                                       text-primary-600">

                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M13.2 2 5 13h6l-.8 9L19 10h-6l.2-8Z" />
                                </svg>

                            </span>

                            Avg. response: &lt; 15 mins

                        </div>


                        {{-- heading --}}
                        <h2
                            class="mt-5
                                   text-[38px]
                                   font-extrabold
                                   leading-[1.03]
                                   tracking-[-0.045em]
                                   text-secondary-950
                                   sm:text-[44px]
                                   lg:text-[48px]">

                            Still have questions?

                            <span class="block text-primary-600">
                                We're here to help.
                            </span>

                        </h2>


                        {{-- description --}}
                        <p
                            class="mt-6
                                   max-w-[610px]
                                   text-[16px]
                                   leading-7
                                   text-secondary-600
                                   sm:text-[17px]">
                            Skip the wait. Speak directly with an Australian
                            inventory specialist to see how StockCore integrates
                            with your business.
                        </p>






                        {{-- action buttons --}}
                        <div
                            class="mt-9
                                   flex flex-col gap-3
                                   sm:flex-row sm:items-center">

                            {{-- PRIMARY CTA --}}
                            <a href="#"
                                class="group
                                       inline-flex
                                       min-h-[52px]
                                       items-center justify-center
                                       gap-3
                                       rounded-xl
                                       bg-primary-600
                                       px-6
                                       text-[15px]
                                       font-semibold
                                       text-white
                                       shadow-[0_10px_25px_rgba(37,99,235,0.28)]
                                       transition-all duration-300
                                       hover:-translate-y-0.5
                                       hover:bg-primary-700
                                       hover:shadow-[0_15px_35px_rgba(37,99,235,0.32)]">

                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 18 4 21v-5a8 8 0 1 1 4 2Z" />
                                </svg>

                                Talk to Support

                                <svg class="h-4 w-4
                                           transition-transform duration-300
                                           group-hover:translate-x-1"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                                </svg>

                            </a>


                            {{-- SECONDARY CTA --}}
                            <a href="#"
                                class="group
                                       inline-flex
                                       min-h-[52px]
                                       items-center justify-center
                                       gap-3
                                       rounded-xl
                                       border border-secondary-200
                                       bg-white
                                       px-6
                                       text-[15px]
                                       font-semibold
                                       text-secondary-950
                                       shadow-sm
                                       transition-all duration-300
                                       hover:-translate-y-0.5
                                       hover:border-primary-300
                                       hover:bg-primary-50">

                                <svg class="h-5 w-5 text-primary-600" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <rect x="4" y="5" width="16" height="15" rx="2" />

                                    <path d="M8 3v4M16 3v4M4 10h16" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 15 2 2 4-4" />
                                </svg>

                                Schedule 1-on-1 Demo

                                <svg class="h-4 w-4
                                           text-primary-600
                                           transition-transform duration-300
                                           group-hover:translate-x-1"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                                </svg>

                            </a>

                        </div>

                    </div>

                </div>

                {{-- right image --}}
                <div
                    class="relative
                           min-h-[360px]
                           overflow-hidden
                           border-t border-primary-100
                           lg:min-h-full
                           lg:border-l
                           lg:border-t-0">

                    {{-- IMAGE --}}
                    <img src="{{ asset('images/faq/person1.webp') }}" alt="StockCore Australian support specialist"
                        class="absolute inset-0
                               h-full w-full
                               object-cover
                               object-center"
                        loading="lazy">


                    {{-- Left blend into content --}}
                    <div
                        class="pointer-events-none
                               absolute inset-y-0 left-0
                               hidden w-[120px]
                               bg-gradient-to-r
                               from-white/85
                               via-white/30
                               to-transparent
                               lg:block">
                    </div>


                    {{-- Bottom gradient --}}
                    <div
                        class="pointer-events-none
                               absolute inset-x-0 bottom-0
                               h-[120px]
                               bg-gradient-to-t
                               from-secondary-950/15
                               to-transparent">
                    </div>


                    {{-- floating chat card --}}
                    <div
                        class="absolute
                               left-6 top-8
                               max-w-[220px]
                               rounded-2xl
                               border border-white/60
                               bg-white/90
                               px-4 py-3.5
                               shadow-[0_18px_40px_rgba(15,23,42,0.12)]
                               backdrop-blur-md
                               sm:left-8
                               lg:left-7">

                        <div class="flex items-start gap-3">

                            <div
                                class="flex h-9 w-9
                                       shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-600
                                       text-white">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 18 4 21v-5a8 8 0 1 1 4 2Z" />
                                </svg>
                            </div>

                            <div>
                                <p
                                    class="text-[13px]
                                           font-semibold
                                           leading-5
                                           text-secondary-950">
                                    Hi there! 👋
                                </p>

                                <p
                                    class="mt-0.5
                                           text-[12px]
                                           leading-5
                                           text-secondary-600">
                                    How can we help you today?
                                </p>
                            </div>

                        </div>

                    </div>

                    {{-- melbourne support card --}}
                    <div
                        class="absolute
                               right-5 top-8
                               hidden
                               w-[175px]
                               rounded-2xl
                               border border-white/60
                               bg-white/90
                               p-4
                               shadow-[0_18px_40px_rgba(15,23,42,0.12)]
                               backdrop-blur-md
                               xl:block">

                        {{-- Map visual --}}
                        <div
                            class="flex h-14
                                   items-center justify-center
                                   rounded-xl
                                   bg-primary-50
                                   text-primary-600">

                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21s6-4.35 6-11a6 6 0 1 0-12 0c0 6.65 6 11 6 11Z" />

                                <circle cx="12" cy="10" r="2" />
                            </svg>

                        </div>

                        <p
                            class="mt-3
                                   text-[13px]
                                   font-bold
                                   leading-5
                                   text-secondary-950">
                            Melbourne Based
                        </p>

                        <p class="text-[12px]
                                   text-secondary-600">
                            Local Support
                        </p>


                        <div class="mt-3
                                   flex items-center gap-2">

                            <span
                                class="h-2 w-2
                                       rounded-full
                                       bg-emerald-500"></span>

                            <span
                                class="text-[11px]
                                       font-medium
                                       text-secondary-600">
                                Real people, real help
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
