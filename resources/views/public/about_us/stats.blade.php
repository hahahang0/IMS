{{-- stats page --}}
@php
    /*
    |--------------------------------------------------------------------------
    | IMPORTANT
    |--------------------------------------------------------------------------
    | These values are placeholders based on the approved mockup.
    | Replace them with verified StockCore figures before production.
    */

    $topStats = [
        [
            'value' => '2026',
            'label' => 'Founded',
        ],
        [
            'value' => '25+',
            'label' => 'Team members',
        ],
        [
            'value' => '500+',
            'label' => 'Businesses trust us',
        ],
        [
            'value' => '250,000+',
            'label' => 'SKUs managed',
        ],
    ];

    $mainStats = [
        [
            'value' => '1,200+',
            'label' => 'BUSINESSES',
            'description' => 'Trusted by growing Australian businesses.',
            'icon' => 'businesses',
        ],
        [
            'value' => '3',
            'label' => 'COUNTRIES',
            'description' => 'Currently active in Australia, New Zealand and Singapore.',
            'icon' => 'countries',
        ],
        [
            'value' => '1.8M+',
            'label' => 'ITEMS TRACKED',
            'description' => 'From raw materials to finished goods.',
            'icon' => 'items',
        ],
        [
            'value' => '99.9%',
            'label' => 'UPTIME',
            'description' => 'Reliable and secure, so you can keep moving.',
            'icon' => 'uptime',
        ],
    ];
@endphp


<section id="about-numbers" class="relative overflow-hidden bg-white py-20 sm:py-24 lg:py-28">

    {{-- background decoration --}}

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Soft left glow --}}
        <div
            class="absolute -left-40 top-[42%] h-[420px] w-[420px]
                   rounded-full bg-primary-50 blur-[100px]">
        </div>

        {{-- Soft right glow --}}
        <div
            class="absolute -right-40 top-[45%] h-[420px] w-[420px]
                   rounded-full bg-primary-50 blur-[100px]">
        </div>

        {{-- Bottom soft wash --}}
        <div
            class="absolute bottom-[-220px] left-1/2 h-[400px] w-[1100px]
                   -translate-x-1/2 rounded-[50%]
                   bg-primary-50/70 blur-[80px]">
        </div>

    </div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">


        {{-- top status bar --}}

        <div class="overflow-hidden rounded-xl border border-secondary-200 bg-white">

            <div class="grid sm:grid-cols-2 lg:grid-cols-4">

                @foreach ($topStats as $index => $stat)
                    <div
                        class="relative flex min-h-[120px] flex-col
                               items-center justify-center px-6 py-6 text-center
                               {{ $index > 0 ? 'border-t border-secondary-200 sm:border-t-0' : '' }}
                               {{ $index % 2 === 1 ? 'sm:border-l sm:border-secondary-200' : '' }}
                               {{ $index > 0 ? 'lg:border-l lg:border-secondary-200' : '' }}">

                        <p
                            class="text-3xl font-extrabold tracking-tight
                                   text-secondary-950 sm:text-4xl">
                            {{ $stat['value'] }}
                        </p>

                        <p class="mt-1 text-sm font-medium text-secondary-500">
                            {{ $stat['label'] }}
                        </p>

                    </div>
                @endforeach

            </div>

        </div>



        {{-- section header --}}

        <div class="mx-auto mt-20 max-w-4xl text-center">

            <p class="text-xs font-bold uppercase tracking-[0.24em]
                       text-primary-600">
                By the numbers
            </p>


            <h2
                class="mt-5 text-4xl font-extrabold tracking-tight
                       text-secondary-950 sm:text-5xl lg:text-6xl">
                Real impact for

                <span class="text-primary-600">
                    real businesses.
                </span>
            </h2>


            <p class="mx-auto mt-6 max-w-3xl text-base leading-7
                       text-secondary-500 sm:text-lg">
                From local retailers to national distributors, StockCore helps
                businesses simplify inventory and scale with confidence.
            </p>

        </div>



        {{-- main metrics visual --}}

        <div class="relative mt-16 lg:mt-20">


            {{-- connector line --}}

            <svg class="pointer-events-none absolute left-[7%] top-[105px]
                       hidden h-[170px] w-[86%] lg:block"
                viewBox="0 0 1000 170" fill="none" preserveAspectRatio="none" aria-hidden="true">

                <path d="M0 85
                       C120 30 210 35 290 70
                       C385 112 440 123 510 100
                       C600 70 690 30 790 76
                       C865 110 920 102 1000 68" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 6"
                    class="text-primary-200" />

                <circle cx="0" cy="85" r="4" fill="currentColor" class="text-primary-300" />

                <circle cx="333" cy="87" r="4" fill="currentColor" class="text-primary-300" />

                <circle cx="666" cy="83" r="4" fill="currentColor" class="text-primary-300" />

                <circle cx="1000" cy="68" r="4" fill="currentColor" class="text-primary-300" />

            </svg>



            {{-- faint australian motif --}}

            <div class="pointer-events-none absolute left-1/2 top-[60px]
                       hidden -translate-x-1/2 opacity-30 lg:block"
                aria-hidden="true">

                <svg class="h-[210px] w-[300px] text-primary-100" viewBox="0 0 300 210" fill="currentColor">
                    <path d="M54 71
                           L82 55
                           L110 62
                           L132 47
                           L161 57
                           L182 44
                           L209 64
                           L236 72
                           L245 91
                           L266 107
                           L251 125
                           L241 149
                           L211 156
                           L188 172
                           L161 167
                           L145 183
                           L122 170
                           L95 172
                           L80 151
                           L56 144
                           L47 124
                           L29 106
                           L41 88
                           Z" />

                    <circle cx="230" cy="184" r="7" />
                </svg>

            </div>



            {{-- metric columns --}}

            <div
                class="relative z-10 grid gap-14
                       sm:grid-cols-2
                       lg:grid-cols-4
                       lg:gap-8">

                @foreach ($mainStats as $stat)
                    <article class="text-center">

                        {{-- icon --}}

                        <div
                            class="mx-auto flex h-36 w-36 items-center
                                   justify-center rounded-full bg-primary-50">

                            @switch($stat['icon'])
                                {{-- BUSINESSES --}}
                                @case('businesses')
                                    <svg class="h-24 w-24 text-primary-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.25" aria-hidden="true">

                                        <circle cx="12" cy="8" r="3.5" />

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 20v-2a7 7 0 0114 0v2" />

                                        <circle cx="4.5" cy="10" r="2" />

                                        <circle cx="19.5" cy="10" r="2" />

                                        <path stroke-linecap="round" d="M1.5 19v-1a4 4 0 014-4" />

                                        <path stroke-linecap="round" d="M22.5 19v-1a4 4 0 00-4-4" />

                                    </svg>
                                @break

                                {{-- COUNTRIES --}}
                                @case('countries')
                                    <svg class="h-24 w-24 text-primary-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.25" aria-hidden="true">

                                        <circle cx="12" cy="12" r="9" />

                                        <path d="M3 12h18" stroke-linecap="round" />

                                        <path d="M12 3c2.3 2.5 3.5 5.5 3.5 9
                                                               S14.3 18.5 12 21" stroke-linecap="round" />

                                        <path d="M12 3C9.7 5.5 8.5 8.5 8.5 12
                                                               S9.7 18.5 12 21" stroke-linecap="round" />

                                        <path d="M5 7.5c2 .9 4.4 1.3 7 1.3
                                                               2.6 0 5-.4 7-1.3" />

                                        <path d="M5 16.5c2-.9 4.4-1.3 7-1.3
                                                               2.6 0 5 .4 7 1.3" />

                                    </svg>
                                @break

                                {{-- ITEMS --}}
                                @case('items')
                                    <svg class="h-24 w-24 text-primary-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.25" aria-hidden="true">

                                        <rect x="4" y="11" width="7" height="7" rx="1" />

                                        <rect x="13" y="11" width="7" height="7" rx="1" />

                                        <rect x="8.5" y="4" width="7" height="7" rx="1" />

                                        <path d="M4 14h7M13 14h7M8.5 7h7" />

                                    </svg>
                                @break

                                {{-- UPTIME --}}
                                @case('uptime')
                                    <svg class="h-24 w-24 text-primary-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.25" aria-hidden="true">

                                        <rect x="3" y="4" width="18" height="16" rx="2" />

                                        <path d="M3 8h18" />

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 17l4-4 3 2 5-6" />

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3v3" />

                                    </svg>
                                @break
                            @endswitch

                        </div>

                        {{-- number --}}
                        <p
                            class="mt-7 text-4xl font-extrabold tracking-tight
                                   text-secondary-950 sm:text-5xl">
                            {{ $stat['value'] }}
                        </p>


                        {{-- label --}}

                        <p
                            class="mt-2 text-xs font-bold uppercase
                                   tracking-[0.22em] text-secondary-900">
                            {{ $stat['label'] }}
                        </p>


                        {{-- description --}}

                        <p
                            class="mx-auto mt-4 max-w-[240px]
                                   text-sm leading-6 text-secondary-500">
                            {{ $stat['description'] }}
                        </p>

                    </article>
                @endforeach

            </div>


            {{-- handwritten notes --}}

            <div class="pointer-events-none absolute right-0 top-[-110px]
                       hidden lg:block"
                aria-hidden="true">

                <div class="rotate-[-4deg]">

                    <p
                        class="text-center text-base font-semibold italic
                               leading-5 text-primary-700">
                        Built for
                        <br>
                        a bigger tomorrow.
                    </p>


                    <svg class="ml-auto mt-2 h-20 w-20 text-primary-600" viewBox="0 0 80 80" fill="none"
                        stroke="currentColor" stroke-width="2.4" aria-hidden="true">
                        {{-- Main curved arrow --}}
                        <path d="M18 8
           C46 14, 58 30, 52 52" stroke-linecap="round" stroke-linejoin="round" />

                        {{-- Clear arrow head --}}
                        <path d="M43 47
           L52 56
           L60 44" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

            </div>

        </div>

    </div>

</section>
