{{-- ============================================================
    PRIVACY POLICY HERO
    resources/views/public/privacy/hero.blade.php
============================================================ --}}

@php

    /*
    |--------------------------------------------------------------------------
    | Privacy Policy Metadata
    |--------------------------------------------------------------------------
    |
    | Replace these values once the final policy has been legally reviewed.
    |
    */

    $privacyMeta = [
        'last_updated'   => 'September 18, 2026',
        'effective_date' => 'October 1, 2026',
        'version'        => 'v1.0 (Draft)',
    ];

@endphp


<section
    id="privacy-hero"
    class="relative overflow-hidden
           border-b border-secondary-200
           bg-background-muted"
>

    {{-- =========================================================
        BACKGROUND DECORATION
    ========================================================== --}}
    <div
        class="pointer-events-none absolute inset-0 overflow-hidden"
        aria-hidden="true"
    >

        {{-- LEFT CURVE --}}
        <div
            class="absolute
                   -left-[420px] -top-[390px]
                   h-[760px] w-[760px]
                   rounded-full
                   border-[105px]
                   border-primary-50/65"
        ></div>


        {{-- RIGHT LARGE CIRCLE --}}
        <div
            class="absolute
                   -right-[250px] -top-[300px]
                   h-[720px] w-[720px]
                   rounded-full
                   bg-primary-50/55"
        ></div>


        {{-- RIGHT INNER CIRCLE --}}
        <div
            class="absolute
                   right-[4%] top-[12%]
                   h-[420px] w-[420px]
                   rounded-full
                   border border-primary-100/70"
        ></div>


        {{-- CENTRE GLOW --}}
        <div
            class="absolute
                   left-1/2 top-[38%]
                   h-[400px] w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[110px]"
        ></div>

    </div>



    {{-- =========================================================
        HERO CONTENT
    ========================================================== --}}
    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               pb-16 pt-10
               sm:px-8
               sm:pb-20
               sm:pt-12
               lg:px-8"
    >

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
                class="h-3.5 w-3.5 text-secondary-300"
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
                class="h-3.5 w-3.5 text-secondary-300"
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
                Privacy Policy
            </span>

        </nav> --}}



        {{-- =====================================================
            MAIN HERO GRID
        ====================================================== --}}
        <div
            class="mt-10
                   grid gap-12
                   lg:grid-cols-[1.05fr_0.95fr]
                   lg:items-center"
        >

            {{-- =================================================
                LEFT CONTENT
            ================================================== --}}
            <div>

                {{-- EYEBROW --}}
                <div
                    class="inline-flex
                           items-center gap-2
                           rounded-full
                           border border-primary-100
                           bg-primary-50/80
                           px-4 py-2"
                >

                    <svg
                        class="h-4 w-4 text-primary-600"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3 5 6v5c0 4.8 2.8 8.4 7 10 4.2-1.6 7-5.2 7-10V6l-7-3Z"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9.5 12 1.7 1.7 3.7-3.7"
                        />
                    </svg>


                    <span
                        class="text-[11px]
                               font-bold uppercase
                               tracking-[0.09em]
                               text-primary-600"
                    >
                        Privacy
                    </span>

                </div>



                {{-- TITLE --}}
                <h1
                    class="mt-6
                           text-[46px]
                           font-extrabold
                           leading-[1.02]
                           tracking-[-0.05em]
                           text-secondary-950
                           sm:text-[56px]
                           lg:text-[64px]"
                >
                    Privacy Policy
                </h1>



                {{-- DESCRIPTION --}}
                <p
                    class="mt-5
                           max-w-[690px]
                           text-[16px]
                           leading-8
                           text-secondary-600
                           sm:text-[17px]"
                >
                    Your privacy matters. This policy explains how StockCore
                    collects, uses, discloses and protects personal and business
                    information when you use our website, platform and related
                    services.
                </p>



                {{-- =================================================
                    META INFORMATION
                ================================================== --}}
                <div
                    class="mt-8
                           flex flex-wrap
                           gap-x-7 gap-y-4"
                >

                    {{-- LAST UPDATED --}}
                    <div
                        class="flex items-center gap-3"
                    >

                        <span
                            class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600"
                        >
                            <svg
                                class="h-4.5 w-4.5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <rect
                                    x="4"
                                    y="5"
                                    width="16"
                                    height="15"
                                    rx="2"
                                />

                                <path
                                    stroke-linecap="round"
                                    d="M8 3v4M16 3v4M4 9h16"
                                />
                            </svg>
                        </span>


                        <div>

                            <p
                                class="text-[10px]
                                       font-bold uppercase
                                       tracking-[0.06em]
                                       text-secondary-400"
                            >
                                Last Updated
                            </p>

                            <p
                                class="mt-0.5
                                       text-[13px]
                                       font-semibold
                                       text-secondary-900"
                            >
                                {{ $privacyMeta['last_updated'] }}
                            </p>

                        </div>

                    </div>



                    {{-- DIVIDER --}}
                    <span
                        class="hidden h-10 w-px
                               bg-secondary-200
                               sm:block"
                    ></span>



                    {{-- EFFECTIVE DATE --}}
                    <div
                        class="flex items-center gap-3"
                    >

                        <span
                            class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600"
                        >
                            <svg
                                class="h-4.5 w-4.5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3 5 6v5c0 4.8 2.8 8.4 7 10 4.2-1.6 7-5.2 7-10V6l-7-3Z"
                                />
                            </svg>
                        </span>


                        <div>

                            <p
                                class="text-[10px]
                                       font-bold uppercase
                                       tracking-[0.06em]
                                       text-secondary-400"
                            >
                                Effective Date
                            </p>

                            <p
                                class="mt-0.5
                                       text-[13px]
                                       font-semibold
                                       text-secondary-900"
                            >
                                {{ $privacyMeta['effective_date'] }}
                            </p>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                    LEGAL REVIEW NOTICE
                ================================================== --}}
                <div
                    class="mt-8
                           inline-flex
                           max-w-[650px]
                           items-start gap-3
                           rounded-[14px]
                           border border-amber-200
                           bg-amber-50/80
                           px-4 py-3"
                >

                    <svg
                        class="mt-0.5
                               h-4 w-4
                               shrink-0
                               text-amber-600"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 3 2.8 19h18.4L12 3Z"
                        />

                        <path
                            stroke-linecap="round"
                            d="M12 9v4"
                        />

                        <circle
                            cx="12"
                            cy="16"
                            r=".7"
                            fill="currentColor"
                            stroke="none"
                        />
                    </svg>


                    <p
                        class="text-[11px]
                               leading-5
                               text-amber-800"
                    >
                        Draft privacy policy content — review with qualified
                        legal counsel before publishing to ensure compliance
                        with applicable Australian privacy laws.
                    </p>

                </div>

            </div>



            {{-- =================================================
                RIGHT VISUAL
            ================================================== --}}
            <div
                class="relative
                       hidden
                       min-h-[420px]
                       lg:block"
            >

                {{-- BACKGROUND CIRCLE --}}
                <div
                    class="absolute
                           left-1/2 top-1/2
                           h-[380px] w-[380px]
                           -translate-x-1/2
                           -translate-y-1/2
                           rounded-full
                           bg-primary-50/80"
                ></div>



                {{-- DOTTED RING --}}
                <div
                    class="absolute
                           left-1/2 top-1/2
                           h-[310px] w-[310px]
                           -translate-x-1/2
                           -translate-y-1/2
                           rounded-full
                           border border-dashed
                           border-primary-200"
                ></div>



                {{-- =================================================
                    MAIN SHIELD
                ================================================== --}}
                <div
                    class="absolute
                           left-1/2 top-1/2
                           flex h-[230px] w-[190px]
                           -translate-x-1/2
                           -translate-y-1/2
                           items-center justify-center

                           drop-shadow-[0_22px_35px_rgba(37,99,235,0.18)]"
                >

                    {{-- SHIELD BODY --}}
                    <svg
                        class="absolute inset-0 h-full w-full"
                        viewBox="0 0 190 230"
                        fill="none"
                    >

                        <defs>

                            <linearGradient
                                id="privacyShieldGradient"
                                x1="25"
                                y1="20"
                                x2="165"
                                y2="210"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop
                                    stop-color="#60A5FA"
                                />

                                <stop
                                    offset="1"
                                    stop-color="#2563EB"
                                />

                            </linearGradient>

                        </defs>


                        <path
                            d="M95 7
                               L170 36
                               V100
                               C170 159
                               141 199
                               95 222
                               C49 199
                               20 159
                               20 100
                               V36
                               L95 7Z"
                            fill="url(#privacyShieldGradient)"
                        />


                        <path
                            d="M95 22
                               L155 45
                               V101
                               C155 148
                               133 181
                               95 202
                               C57 181
                               35 148
                               35 101
                               V45
                               L95 22Z"
                            fill="white"
                            fill-opacity=".10"
                            stroke="white"
                            stroke-opacity=".22"
                        />

                    </svg>



                    {{-- LOCK --}}
                    <div
                        class="relative z-10
                               flex h-[88px] w-[88px]
                               items-center justify-center
                               rounded-[22px]
                               bg-white/20
                               text-white
                               backdrop-blur-md"
                    >

                        <svg
                            class="h-12 w-12"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <rect
                                x="5"
                                y="10"
                                width="14"
                                height="10"
                                rx="2"
                            />

                            <path
                                stroke-linecap="round"
                                d="M8 10V7a4 4 0 0 1 8 0v3"
                            />

                            <circle
                                cx="12"
                                cy="15"
                                r="1"
                                fill="currentColor"
                                stroke="none"
                            />
                        </svg>

                    </div>

                </div>



                {{-- =================================================
                    FLOATING CARD - PROTECTED
                ================================================== --}}
                <div
                    class="absolute
                           left-[3%] top-[21%]
                           flex items-center gap-3
                           rounded-[16px]
                           border border-secondary-100
                           bg-white/95
                           px-4 py-3
                           shadow-[0_14px_34px_rgba(15,23,42,0.10)]
                           backdrop-blur-md"
                >

                    <span
                        class="flex h-9 w-9
                               items-center justify-center
                               rounded-full
                               bg-primary-50
                               text-primary-600"
                    >
                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m9 12 2 2 4-4"
                            />

                            <circle
                                cx="12"
                                cy="12"
                                r="8"
                            />
                        </svg>
                    </span>


                    <div>

                        <p
                            class="text-[12px]
                                   font-semibold
                                   text-secondary-900"
                        >
                            Privacy first
                        </p>

                        <p
                            class="mt-0.5
                                   text-[10px]
                                   text-secondary-400"
                        >
                            Your data matters
                        </p>

                    </div>

                </div>



                {{-- =================================================
                    FLOATING CARD - DATA CONTROL
                ================================================== --}}
                <div
                    class="absolute
                           bottom-[17%] right-[1%]
                           flex items-center gap-3
                           rounded-[16px]
                           border border-secondary-100
                           bg-white/95
                           px-4 py-3
                           shadow-[0_14px_34px_rgba(15,23,42,0.10)]
                           backdrop-blur-md"
                >

                    <span
                        class="flex h-9 w-9
                               items-center justify-center
                               rounded-full
                               bg-emerald-50
                               text-emerald-600"
                    >

                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <ellipse
                                cx="12"
                                cy="6"
                                rx="7"
                                ry="3"
                            />

                            <path
                                d="M5 6v6c0 1.7 3.1 3 7 3s7-1.3 7-3V6"
                            />

                            <path
                                d="M5 12v6c0 1.7 3.1 3 7 3s7-1.3 7-3v-6"
                            />
                        </svg>

                    </span>


                    <div>

                        <p
                            class="text-[12px]
                                   font-semibold
                                   text-secondary-900"
                        >
                            Data transparency
                        </p>

                        <p
                            class="mt-0.5
                                   text-[10px]
                                   text-secondary-400"
                        >
                            Clear privacy practices
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>