{{-- ========================================================= --}}
{{-- FINAL CTA SECTION --}}
{{-- ========================================================= --}}

<section class="relative overflow-hidden bg-white py-24 sm:py-32">

    {{-- Background shapes --}}
    {{-- <div class="pointer-events-none absolute inset-0">

            <div
                class="absolute -right-48 -top-24 h-[520px] w-[520px] rounded-full bg-primary-100/70 blur-[120px]"
            ></div>

            <div
                class="absolute -left-32 bottom-0 h-[380px] w-[380px] rounded-full bg-indigo-100/60 blur-[120px]"
            ></div>

            <div
                class="absolute right-0 top-0 h-full w-[42%] bg-gradient-to-br from-primary-50 via-indigo-50 to-violet-100"
            ></div>

        </div> --}}

    {{-- ========================================================= --}}
    {{-- BACKGROUND --}}
    {{-- ========================================================= --}}

    <div class="pointer-events-none absolute inset-0 overflow-hidden">

        {{-- Main white background --}}
        <div class="absolute inset-0 bg-white"></div>


        {{-- Very soft left glow --}}
        <div class="absolute -left-40 top-10 h-[520px] w-[520px] rounded-full bg-primary-50/70 blur-[120px]"></div>


        {{-- Large pale curved shape behind dashboard --}}
        <div
            class="absolute -right-[180px] -top-[260px] h-[850px] w-[850px] rounded-full bg-gradient-to-br from-primary-50 via-indigo-100/80 to-violet-100/70">
        </div>


        {{-- Main strong blue circle --}}
        <div
            class="absolute -right-[70px] top-[45px] h-[500px] w-[500px] rounded-full bg-gradient-to-br from-primary-500 via-indigo-500 to-violet-500 opacity-95">
        </div>


        {{-- Secondary lighter blue arc --}}
        <div
            class="absolute right-[260px] -top-[330px] h-[760px] w-[760px] rounded-full border-[120px] border-primary-100/60">
        </div>


        {{-- Soft glow underneath dashboard --}}
        <div class="absolute right-[80px] top-[180px] h-[480px] w-[580px] rounded-full bg-primary-300/20 blur-[100px]">
        </div>


        {{-- Small dotted decoration --}}
        <div class="absolute right-[38%] top-[10%] hidden grid-cols-5 gap-3 opacity-40 lg:grid">
            @for ($i = 0; $i < 25; $i++)
                <span class="h-1 w-1 rounded-full bg-primary-300"></span>
            @endfor
        </div>

    </div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-center gap-14 lg:grid-cols-[0.95fr_1.05fr]">

            {{-- ================================================= --}}
            {{-- LEFT CONTENT --}}
            {{-- ================================================= --}}

            <div class="relative z-10">

                {{-- Badge --}}
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-primary-100 bg-primary-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.18em] text-primary-600">
                    <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>

                    Get started today
                </span>


                {{-- Heading --}}
                <h2 class="mt-7 max-w-2xl text-2xl font-bold tracking-tight text-slate-950 sm:text-2xl lg:text-4xl">
                    Turn inventory chaos into

                    <span class="bg-gradient-to-r text-primary-600 bg-clip-text ">
                        confident growth.
                    </span>
                </h2>


                {{-- Description --}}
                <p class="mt-6 max-w-xl text-base leading-7 text-slate-500 sm:text-lg">
                    Join businesses using StockCore to simplify inventory,
                    save time and make smarter decisions across every part of
                    their operation.
                </p>


                {{-- CTA buttons --}}
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                    <a href="{{ route('public.auth.signup') }}"
                        class="group inline-flex items-center justify-center gap-3 rounded-xl bg-gradient-to-r from-primary-600 to-indigo-600 px-7 py-4 text-sm font-semibold text-white shadow-lg shadow-primary-600/20 transition duration-300 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-primary-600/25">
                        Start free trial

                        <svg class="h-4 w-4 transition duration-300 group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>
                    </a>


                    <a href="{{ route('public.contact') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-7 py-4 text-sm font-semibold text-slate-800 transition duration-300 hover:-translate-y-0.5 hover:border-slate-400 hover:bg-slate-50">
                        Talk to our team
                    </a>

                </div>


                {{-- Reassurance line --}}
                <div class="mt-5 flex flex-wrap items-center gap-x-3 gap-y-2 text-xs text-slate-500">
                    <span>No credit card required</span>

                    <span class="h-1 w-1 rounded-full bg-slate-300"></span>

                    <span>Set up in minutes</span>

                    <span class="h-1 w-1 rounded-full bg-slate-300"></span>

                    <span>Cancel anytime</span>
                </div>


                {{-- Benefits --}}
                <div class="mt-10 grid gap-4 sm:grid-cols-2">

                    {{-- Quick setup --}}
                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 2L4 14h7l-1 8 9-12h-7l1-8z" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-slate-900">
                                Quick setup
                            </p>

                            <p class="text-xs text-slate-500">
                                Get started in minutes
                            </p>
                        </div>

                    </div>


                    {{-- Full access --}}
                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H2v-2a4 4 0 014-4h3m8-4a4 4 0 10-8 0 4 4 0 008 0z" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-slate-900">
                                Full feature access
                            </p>

                            <p class="text-xs text-slate-500">
                                Explore everything StockCore offers
                            </p>
                        </div>

                    </div>


                    {{-- Secure --}}
                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 11c1.657 0 3-1.343 3-3V6a3 3 0 10-6 0v2c0 1.657 1.343 3 3 3zm-6 0h12v10H6V11z" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-slate-900">
                                No lock-in
                            </p>

                            <p class="text-xs text-slate-500">
                                Start risk free
                            </p>
                        </div>

                    </div>


                    {{-- Flexible --}}
                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-cyan-50 text-cyan-600">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3a9 9 0 109 9" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v5h5" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-slate-900">
                                Flexible setup
                            </p>

                            <p class="text-xs text-slate-500">
                                Adapt as your business grows
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            {{-- ================================================= --}}
            {{-- RIGHT DASHBOARD VISUAL --}}
            {{-- ================================================= --}}

            <div class="relative lg:-mr-12">

                <div class="relative z-10 ml-auto w-full max-w-[680px]">

                    <img src="{{ asset('images/industries/stockcore-dashboard-image.webp') }}" alt="StockCore dashboard preview"
                        class="w-full rounded-[1.6rem] object-cover drop-shadow-[0_35px_90px_rgba(37,99,235,.28)]">

                </div>


                {{-- Floating callout 1 --}}
                <div
                    class="cta-float absolute -left-5 top-16 z-20 hidden rounded-2xl border border-white/60 bg-white/90 px-4 py-3 shadow-xl backdrop-blur-xl lg:block">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
                                <circle cx="12" cy="12" r="9" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-semibold text-slate-900">
                                Less manual work.
                            </p>
                            <p class="text-[10px] text-slate-500">
                                More time for what matters.
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Floating callout 2 --}}
                <div
                    class="cta-float-alt absolute -right-4 -top-8 z-20 hidden rounded-2xl border border-white/60 bg-white/90 px-4 py-3 shadow-xl backdrop-blur-xl lg:block">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-9 w-9 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h4l2-5 4 10 2-5h2" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-semibold text-slate-900">        
                                More control.
                            </p>
                            <p class="text-[10px] text-slate-500">
                                More opportunities.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    {{-- ========================================================= --}}
    {{-- SIMPLE FLOATING ANIMATION --}}
    {{-- ========================================================= --}}

    <style>
        @keyframes ctaFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .cta-float {
            animation: ctaFloat 5s ease-in-out infinite;
        }

        .cta-float-alt {
            animation: ctaFloat 6s ease-in-out infinite;
            animation-delay: -2s;
        }
    </style>

</section>
