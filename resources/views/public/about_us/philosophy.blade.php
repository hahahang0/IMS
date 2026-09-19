{{-- philosophy section --}}

@php
    $principles = [
        [
            'number' => '01',
            'title' => 'Built for small teams',
            'description' => 'Easy to adopt, simple to use, and flexible as your business grows.',
            'icon' => 'team',
        ],
        [
            'number' => '02',
            'title' => 'Guided by real feedback',
            'description' => 'We listen to customers and build what actually matters.',
            'icon' => 'feedback',
        ],
        [
            'number' => '03',
            'title' => 'Focused, not bloated',
            'description' => 'The features you need, without unnecessary complexity.',
            'icon' => 'focus',
        ],
        [
            'number' => '04',
            'title' => 'Reliable by default',
            'description' => 'Your data is secure, stable and always accessible.',
            'icon' => 'reliable',
        ],
    ];
@endphp


<section id="product-philosophy" class="relative overflow-hidden bg-white py-24 sm:py-28 lg:py-32">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-16 lg:grid-cols-[1.08fr_.92fr] lg:items-stretch lg:gap-10">

            {{-- left side --}}

            <div class="relative lg:pr-10">


                {{-- Eyebrow --}}
                <div class="flex items-center gap-4">

                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-secondary-600">
                        Our product philosophy
                    </p>

                    <span class="h-px w-12 bg-secondary-300" aria-hidden="true"></span>

                </div>



                {{-- Heading --}}
                <h2
                    class="mt-7 max-w-[720px]
                           text-4xl font-extrabold
                           leading-[1.08] tracking-[-0.04em]
                           text-secondary-950
                           sm:text-5xl
                           lg:text-[3.6rem]">
                    Built for

                    <span class="text-primary-600">
                        growing businesses.
                    </span>

                    <span class="block">
                        Designed with focus.
                    </span>
                </h2>



                {{-- Supporting copy --}}
                <p
                    class="mt-7 max-w-2xl
                           text-base leading-8 text-secondary-600
                           sm:text-lg">
                    We build inventory software that's practical, intuitive
                    and human. Less complexity. More progress for the
                    businesses we support.
                </p>


                {{-- principles --}}

                <div class="mt-14 grid border-y border-secondary-200
                           sm:grid-cols-2">

                    @foreach ($principles as $index => $principle)
                        <article
                            class="relative flex gap-5 px-2 py-8
                            {{ $index % 2 === 1 ? 'sm:border-l sm:border-secondary-200 sm:pl-10' : 'sm:pr-10' }}
                            {{ $index >= 2 ? 'border-t border-secondary-200' : '' }}">

                            {{-- Number --}}
                            <span class="absolute left-0 top-6 text-xs font-bold text-secondary-500">
                                {{ $principle['number'] }}
                            </span>


                            {{-- Icon --}}
                            <div
                                class="mt-2 flex h-16 w-16 shrink-0 items-center justify-center
                                       rounded-full bg-primary-50 text-primary-600">

                                @switch($principle['icon'])
                                    @case('team')
                                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <circle cx="9" cy="8" r="3" />
                                            <circle cx="17" cy="9" r="2.5" />

                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 20v-2a6 6 0 0112 0v2" />

                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 15a5 5 0 016 5" />
                                        </svg>
                                    @break

                                    @case('feedback')
                                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 12a8 8 0 01-8 8 8.6 8.6 0 01-4-.9L3 21l1.9-5A8 8 0 1112 4h1a8 8 0 018 8z" />
                                        </svg>
                                    @break

                                    @case('focus')
                                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <circle cx="12" cy="12" r="8" />
                                            <circle cx="12" cy="12" r="4" />

                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4V2M12 22v-2M4 12H2M22 12h-2" />
                                        </svg>
                                    @break

                                    @case('reliable')
                                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 3l7 3v5c0 5-3 8-7 10-4-2-7-5-7-10V6l7-3z" />

                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                                        </svg>
                                    @break
                                @endswitch

                            </div>



                            {{-- Copy --}}
                            <div class="pt-2">

                                <h3 class="text-lg font-bold leading-6 text-secondary-950">
                                    {{ $principle['title'] }}
                                </h3>

                                <p
                                    class="mt-2 max-w-[280px]
                                           text-sm leading-6 text-secondary-500">
                                    {{ $principle['description'] }}
                                </p>

                            </div>

                        </article>
                    @endforeach

                </div>



                {{-- commitment --}}

                <div class="mt-14 flex items-start gap-5">

                    <span class="mt-1 h-14 w-0.5 shrink-0 bg-primary-500"></span>

                    <div>

                        <p
                            class="text-[10px] font-bold uppercase
                                   tracking-[0.24em] text-secondary-500">
                            Our commitment
                        </p>

                        <p class="mt-2 max-w-2xl text-lg leading-7 text-secondary-600 sm:text-xl">
                            A simpler, smarter way to manage what drives your
                            business forward.
                        </p>

                    </div>

                </div>

            </div>


            {{-- right side visuals --}}

            <div class="relative min-h-[720px] lg:-mr-12">


                {{-- top visuals --}}

                <div class="absolute left-[8%] right-0 top-0 h-[310px]
                           overflow-hidden">

                    <div class="grid h-full grid-cols-[1fr_.72fr]">

                        {{-- Mountain image --}}
                        <div class="relative overflow-hidden">

                            <img src="{{ asset('images/about/philosophy_mountain.webp') }}"
                                alt="Mountain landscape representing long-term progress"
                                class="h-full w-full object-cover">

                            <div class="absolute inset-0 bg-secondary-950/10"></div>

                        </div>



                        {{-- Mission text --}}
                        <div class="flex flex-col justify-center bg-white px-8">

                            <p
                                class="text-[10px] font-bold uppercase
                                       tracking-[0.26em] text-secondary-900">
                                More than
                                <br>
                                inventory software.
                            </p>


                            <span class="mt-5 h-px w-8 bg-secondary-900"></span>


                            <p class="mt-6 text-base leading-7 text-secondary-600">
                                We're here to help ambitious businesses build a
                                more efficient, more sustainable future.
                            </p>

                        </div>

                    </div>

                </div>



                {{-- handwritten note --}}

                <div class="pointer-events-none absolute left-[-4%] top-10 hidden lg:block" aria-hidden="true">

                    <p
                        class="rotate-[-6deg] text-center text-lg font-semibold italic
                               leading-6 text-primary-400">
                        Better
                        <br>
                        businesses
                        <br>
                        tomorrow.
                    </p>

                    <svg class="ml-auto mt-2 h-16 w-16 text-primary-400" viewBox="0 0 64 64" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M18 6C39 14 45 29 38 46" stroke-linecap="round" />

                        <path d="M30 41L38 49L45 38" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>


                {{-- dashboard image --}}

                <div
                    class="absolute left-0 right-0 top-[280px]
                           h-[390px] overflow-hidden bg-secondary-100 mt-15">

                    <img src="{{ asset('images/about/stockcore-inventory-dashboard.webp') }}" alt="StockCore inventory dashboard"
                        class="h-full w-full object-cover">

                </div>


                {{-- dark quote panel --}}

                <div
                    class="absolute bottom-0 left-0 right-0
                           min-h-[250px] overflow-hidden bg-secondary-900
                           px-10 py-10 text-white">

                    {{-- Decorative circles --}}
                    <div
                        class="pointer-events-none absolute -right-20 -bottom-24
                               h-64 w-64 rounded-full border border-secondary-600">
                    </div>

                    <div
                        class="pointer-events-none absolute -right-12 -bottom-16
                               h-52 w-52 rounded-full border border-secondary-700">
                    </div>


                    <div class="relative max-w-[430px]">

                        {{-- quote --}}
                        <div class="flex items-center gap-4">

                            <span class="text-4xl font-bold leading-none text-secondary-400">
                                “
                            </span>

                            <span class="h-px w-12 bg-secondary-500"></span>

                        </div>


                        <blockquote class="mt-5 text-base leading-7 text-white">
                            We build StockCore the same way we help our customers
                            run their businesses — with focus, discipline and a
                            long-term mindset.
                        </blockquote>


                        <div class="mt-7 flex items-center gap-4">

                            <span class="h-px w-8 bg-secondary-500"></span>

                            <p
                                class="text-[9px] font-semibold uppercase
                                       tracking-[0.26em] text-secondary-400">
                                The StockCore team
                            </p>

                        </div>

                    </div>


                    <p
                        class="absolute bottom-10 right-10
                               text-[9px] font-medium uppercase
                               tracking-[0.3em] leading-7
                               text-secondary-500">
                        Real
                        <br>
                        businesses
                        <br>
                        brighter
                        <br>
                        tomorrows
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
