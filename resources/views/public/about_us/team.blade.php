{{-- TEAM section --}}
@php
    $leaders = [
        [
            'name' => 'Daniel Chen',
            'role' => 'CEO & Co-founder',
            'bio' =>
                'Daniel leads StockCore with a focus on building practical inventory software for growing businesses. He works closely with customers and the product team to keep StockCore focused on real operational problems.',
            'image' => 'images/about/person1.webp',
            'linkedin' => '#',
        ],
        [
            'name' => 'Sarah Mitchell',
            'role' => 'CTO & Co-founder',
            'bio' =>
                'Sarah leads engineering and technology at StockCore. Her focus is building a reliable, scalable platform that remains straightforward for customers as their operations become more complex.',
            'image' => 'images/about/person2.webp',
            'linkedin' => '#',
        ],
        [
            'name' => 'James Walker',
            'role' => 'Head of Product',
            'bio' =>
                'James works across product strategy and customer research, turning real inventory challenges into simple, useful workflows inside StockCore.',
            'image' => 'images/about/person3.webp',
            'linkedin' => '#',
        ],
        [
            'name' => 'Emily Tan',
            'role' => 'Head of Customer Success',
            'bio' =>
                'Emily works directly with StockCore customers to make onboarding, implementation and everyday use straightforward and productive.',
            'image' => 'images/about/person4.webp',
            'linkedin' => '#',
        ],
        [
            'name' => 'Michael Roberts',
            'role' => 'Operations Lead',
            'bio' =>
                'Michael helps connect StockCore’s product decisions with the realities of purchasing, warehousing and day-to-day inventory operations.',
            'image' => 'images/about/person5.webp',
            'linkedin' => '#',
        ],
    ];
@endphp


<section id="about-team" class="border-t border-secondary-100 bg-background-muted py-24 sm:py-28 lg:py-32">

    <div class="mx-auto max-w-6xl px-6 sm:px-8 lg:px-10">


        {{-- section heading --}}

        <div class="text-center">

            <p class="text-3xl font-medium tracking-tight text-primary-600 sm:text-4xl">
                Our leaders.
            </p>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-secondary-500">
                Meet the people responsible for building StockCore and
                supporting the businesses that rely on it.
            </p>

        </div>


        {{-- leaders grid --}}

        <div class="mt-16 grid gap-x-12 gap-y-16 md:grid-cols-2 xl:grid-cols-3">

            @foreach ($leaders as $leader)
                <article class="group min-w-0">

                    {{-- Photo --}}

                    <div class="overflow-hidden bg-secondary-100">

                        <img src="{{ asset($leader['image']) }}" alt="{{ $leader['name'] }}"
                            class="aspect-[4/2.7] w-full object-cover object-top
                                   transition duration-500
                                   group-hover:scale-[1.015]">

                    </div>


                    {{-- details --}}

                    <div class="pt-5">

                        {{-- Name --}}
                        <h3
                            class="text-sm font-bold uppercase
                                   tracking-[0.17em] text-primary-600">
                            {{ $leader['name'] }}
                        </h3>


                        {{-- Role --}}
                        <p class="mt-1 text-sm text-secondary-400">
                            {{ $leader['role'] }}
                        </p>


                        {{-- Bio --}}
                        <p class="mt-2 text-sm leading-6 text-secondary-600">
                            {{ $leader['bio'] }}
                        </p>


                        {{-- LinkedIn --}}
                        @if (!empty($leader['linkedin']))
                            <a href="{{ $leader['linkedin'] }}" target="_blank" rel="noopener noreferrer"
                                class="mt-4 inline-flex items-center gap-2
                                       text-xs font-semibold text-secondary-500
                                       transition hover:text-primary-600"
                                aria-label="View {{ $leader['name'] }} on LinkedIn">

                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M6.94 8.5H3.56V20h3.38V8.5ZM5.25 3A2.01 2.01 0 0 0 3.24 5a2.01 2.01 0 0 0 2.01 2 2.01 2.01 0 0 0 2-2 2.01 2.01 0 0 0-2-2ZM20.76 20h-3.37v-5.58c0-1.33-.03-3.03-1.85-3.03-1.86 0-2.14 1.45-2.14 2.94V20H10V8.5h3.24v1.57h.05c.45-.85 1.56-1.75 3.2-1.75 3.42 0 4.05 2.25 4.05 5.18V20Z" />
                                </svg>

                                LinkedIn

                            </a>
                        @endif

                    </div>

                </article>
            @endforeach

        </div>

    </div>

</section>
