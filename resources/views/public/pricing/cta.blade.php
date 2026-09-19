{{-- cta --}}

<section id="pricing-cta" class="bg-white px-6 py-16 sm:py-20 lg:px-8 lg:py-24">
    <div class="mx-auto max-w-7xl">

        <div
            class="relative overflow-hidden rounded-[2rem]
                   bg-primary-950
                   px-7 py-12
                   sm:px-10
                   lg:min-h-[430px]
                   lg:px-16 lg:py-14">

            {{-- background details --}}
            <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

                {{-- subtle right-side glow --}}
                <div
                    class="absolute -right-20 top-1/2
                           h-[420px] w-[520px]
                           -translate-y-1/2
                           rounded-full
                           bg-primary-800/50
                           blur-[90px]">
                </div>


                {{-- subtle left glow --}}
                <div
                    class="absolute -bottom-56 -left-32
                           h-[360px] w-[360px]
                           rounded-full
                           bg-primary-700/20
                           blur-[80px]">
                </div>

            </div>


            {{-- content grid --}}
            <div
                class="relative z-10 grid gap-12
                       lg:grid-cols-[1.05fr_.95fr]
                       lg:items-center">

                {{-- left content --}}

                <div class="relative z-20">

                    {{-- Eyebrow --}}
                    <p
                        class="text-xs font-bold uppercase
                               tracking-[0.2em]
                               text-primary-300">
                        Ready to get started?
                    </p>



                    {{-- Heading --}}
                    <h2
                        class="mt-6 max-w-[680px]
                               text-4xl font-extrabold
                               leading-[1.05]
                               tracking-[-0.045em]
                               text-white
                               sm:text-5xl
                               lg:text-[3.5rem]">
                        Simplify your inventory

                        <span class="block">
                            today with StockCore
                        </span>
                    </h2>



                    {{-- Description --}}
                    <p
                        class="mt-6 max-w-[650px]
                               text-base leading-8
                               text-primary-100/85
                               sm:text-lg">
                        Get the right plan for your business and start managing
                        your inventory with confidence. Our team is here to help
                        if you have any questions.
                    </p>



                    {{-- buttons --}}

                    <div class="mt-8 flex flex-col gap-4
                               sm:flex-row">

                        {{-- Get demo --}}
                        <a href="{{ route('public.auth.signup') }}"
                            class="group inline-flex min-h-[54px]
                                   items-center justify-center
                                   gap-3
                                   rounded-full
                                   bg-primary-600
                                   px-8 py-3.5
                                   text-sm font-semibold
                                   text-white
                                   shadow-[0_12px_30px_rgba(37,99,235,0.25)]
                                   transition duration-300
                                   hover:-translate-y-0.5
                                   hover:bg-primary-500">
                            Get a Demo

                            <svg class="h-4 w-4
                                       transition duration-300
                                       group-hover:translate-x-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </a>



                        {{-- Free trial --}}
                        <a href="{{ route('public.auth.signup') }}"
                            class="group inline-flex min-h-[54px]
                                   items-center justify-center
                                   gap-3
                                   rounded-full
                                   border border-primary-300
                                   bg-transparent
                                   px-8 py-3.5
                                   text-sm font-semibold
                                   text-white
                                   transition duration-300
                                   hover:-translate-y-0.5
                                   hover:bg-white/10">
                            Start a Free Trial

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

                {{-- right visual --}}

                <div class="relative
           min-h-[380px]
           sm:min-h-[420px]
           lg:min-h-[430px]">

                    {{-- purple back shape --}}

                    <div class="absolute left-1/2 top-1/2
                               h-[290px] w-[310px]
                               -translate-x-1/2
                               -translate-y-1/2
                               rotate-[10deg]
                               rounded-[4rem]
                               bg-primary-400/80
                               sm:h-[330px] sm:w-[360px]
                               lg:h-[360px] lg:w-[390px]"
                        aria-hidden="true"></div>


                    {{-- second overlapping shape --}}
                    <div class="absolute left-[53%] top-[49%]
                               h-[260px] w-[290px]
                               -translate-x-1/2
                               -translate-y-1/2
                               rotate-[-9deg]
                               rounded-[4.5rem]
                               bg-primary-300/65
                               sm:h-[300px] sm:w-[330px]
                               lg:h-[325px] lg:w-[350px]"
                        aria-hidden="true"></div>


                    {{-- person image --}}
                    <img src="{{ asset('images/pricing/cta-person.webp') }}" alt="Business owner managing inventory"
                        class="absolute bottom-0 left-1/2 z-20
           h-[95%] w-auto
           max-w-[95%]
           -translate-x-1/2
           object-contain object-bottom">

                    {{-- floating card --}}

                    <div
                        class="absolute right-1 top-10
                               z-30
                               hidden items-center gap-3
                               rounded-xl
                               bg-white
                               px-4 py-3
                               shadow-[0_15px_35px_rgba(15,23,42,0.18)]
                               sm:flex">

                        <div
                            class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-lg
                                   bg-primary-50
                                   text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z" />

                                <path d="M4.5 7.5L12 12l7.5-4.5M12 12v9" />
                            </svg>
                        </div>


                        <div>

                            <div
                                class="h-2.5 w-20 rounded-full
                                       bg-secondary-200">
                            </div>

                            <div
                                class="mt-2 h-2 w-14 rounded-full
                                       bg-secondary-100">
                            </div>

                        </div>

                    </div>


                    {{-- dashed path --}}
                    <svg class="absolute bottom-10 right-0
                               z-10 hidden h-32 w-24
                               text-primary-300 sm:block"
                        viewBox="0 0 100 140" fill="none" stroke="currentColor" stroke-width="3"
                        stroke-dasharray="8 8" aria-hidden="true">
                        <path d="M20 5
                               C85 28 90 65 56 82
                               C25 98 28 123 70 132" stroke-linecap="round" />
                    </svg>


                    {{-- small accent lines --}}

                    <div class="absolute left-[10%] top-[20%]
                               z-30 hidden sm:block"
                        aria-hidden="true">
                        <span
                            class="absolute h-1 w-6
                                   rotate-[42deg]
                                   rounded-full
                                   bg-primary-300"></span>

                        <span
                            class="absolute left-5 -top-4
                                   h-1 w-5
                                   rotate-[70deg]
                                   rounded-full
                                   bg-primary-300"></span>

                        <span
                            class="absolute left-[-8px] top-5
                                   h-1 w-5
                                   rotate-[18deg]
                                   rounded-full
                                   bg-primary-300"></span>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
