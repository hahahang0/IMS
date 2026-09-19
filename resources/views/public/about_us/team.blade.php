{{-- ============================================================
    TEAM SECTION
============================================================ --}}

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



<section
    id="about-team"
    class="relative overflow-hidden
           border-t border-secondary-100
           bg-background-muted
           py-24 sm:py-28 lg:py-32"
>

    {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

    <div class="pointer-events-none absolute inset-0 overflow-hidden">

        {{-- left curve --}}
        <div
            class="absolute -left-[220px] top-[100px]
                   h-[430px] w-[430px]
                   rounded-full
                   border-[65px]
                   border-primary-100/25">
        </div>


        {{-- right curve --}}
        <div
            class="absolute -right-[260px] bottom-[-180px]
                   h-[520px] w-[520px]
                   rounded-full
                   border-[80px]
                   border-primary-100/20">
        </div>


        {{-- subtle dots --}}
        <div
            class="absolute bottom-[180px] left-[5%]
                   h-20 w-20 opacity-35"
            style="
                background-image:
                    radial-gradient(
                        circle,
                        rgba(59, 130, 246, .35) 2px,
                        transparent 2px
                    );
                background-size: 16px 16px;
            ">
        </div>

    </div>



    <div
        class="relative mx-auto max-w-6xl
               px-6 sm:px-8 lg:px-10"
    >

        {{-- ====================================================
            SECTION HEADER
        ===================================================== --}}

        <div class="mx-auto max-w-2xl text-center">

            <div
                class="inline-flex items-center gap-2
                       rounded-full
                       border border-primary-100
                       bg-white/70
                       px-3.5 py-1.5
                       backdrop-blur-sm"
            >

                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-500">
                </span>

                <span
                    class="text-sm font-semibold
                           text-primary-600">
                    The people behind StockCore
                </span>

            </div>



            <h2
                class="mt-5
                       text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-950
                       sm:text-4xl"
            >
                Our leaders.
            </h2>



            <p
                class="mx-auto mt-4
                       max-w-xl
                       text-base leading-7
                       text-secondary-500"
            >
                Meet the people responsible for building StockCore
                and supporting the businesses that rely on it.
            </p>

        </div>



        {{-- ====================================================
            LEADERS GRID
        ===================================================== --}}

        <div
            class="mt-14 grid
                   gap-6
                   md:grid-cols-2
                   xl:grid-cols-3"
        >

            @foreach ($leaders as $leader)

                <article
                    class="group flex h-full
                           min-w-0 flex-col
                           rounded-[18px]
                           border border-primary-100/80
                           bg-white/80
                           p-3
                           shadow-[0_8px_24px_rgba(15,23,42,0.025)]
                           backdrop-blur-sm
                           transition-all duration-300
                           hover:-translate-y-1
                           hover:border-primary-200
                           hover:bg-white
                           hover:shadow-[0_16px_38px_rgba(15,23,42,0.055)] 
                           hover:cursor-pointer"
                >

                    {{-- =========================================
                        PHOTO
                    ========================================== --}}

                    <div
                        class="overflow-hidden
                               rounded-[13px]
                               bg-secondary-100"
                    >

                        <img
                            src="{{ asset($leader['image']) }}"
                            alt="{{ $leader['name'] }}"
                            class="h-[270px] w-full
                                   object-cover
                                   object-[center_25%]
                                   transition-transform
                                   duration-500
                                   ease-out
                                   group-hover:scale-[1.018]
                                   sm:h-[285px]
                                   lg:h-[300px]"
                        >

                    </div>



                    {{-- =========================================
                        DETAILS
                    ========================================== --}}

                    <div
                        class="flex flex-1 flex-col
                               px-1 pb-1 pt-4"
                    >

                        {{-- Name --}}
                        <h3
                            class="text-[13px] font-bold
                                   uppercase
                                   tracking-[0.15em]
                                   text-primary-600"
                        >
                            {{ $leader['name'] }}
                        </h3>



                        {{-- Role --}}
                        <p
                            class="mt-1
                                   text-sm
                                   text-secondary-400"
                        >
                            {{ $leader['role'] }}
                        </p>



                        {{-- Bio --}}
                        <p
                            class="mt-3
                                   text-sm leading-6
                                   text-secondary-600"
                        >
                            {{ $leader['bio'] }}
                        </p>



                        {{-- =====================================
                            LINKEDIN
                        ====================================== --}}

                        @if (!empty($leader['linkedin']))

                            <div class="mt-auto pt-5">

                                <a
                                    href="{{ $leader['linkedin'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="View {{ $leader['name'] }} on LinkedIn"

                                    class="group/link
                                           inline-flex items-center
                                           gap-2.5
                                           text-xs font-semibold
                                           text-secondary-500
                                           transition-colors duration-200
                                           hover:text-primary-600"
                                >

                                    {{-- LinkedIn icon --}}
                                    <svg
                                        class="h-4 w-4"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            d="M6.94 8.5H3.56V20h3.38V8.5ZM5.25 3A2.01 2.01 0 0 0 3.24 5a2.01 2.01 0 0 0 2.01 2 2.01 2.01 0 0 0 2-2 2.01 2.01 0 0 0-2-2ZM20.76 20h-3.37v-5.58c0-1.33-.03-3.03-1.85-3.03-1.86 0-2.14 1.45-2.14 2.94V20H10V8.5h3.24v1.57h.05c.45-.85 1.56-1.75 3.2-1.75 3.42 0 4.05 2.25 4.05 5.18V20Z"
                                        />
                                    </svg>


                                    <span>
                                        LinkedIn
                                    </span>


                                    {{-- arrow --}}
                                    <svg
                                        class="h-3.5 w-3.5
                                               transition-transform
                                               duration-200
                                               group-hover/link:translate-x-1"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 12h14M13 6l6 6-6 6"
                                        />
                                    </svg>

                                </a>

                            </div>

                        @endif

                    </div>

                </article>

            @endforeach

        </div>



        {{-- ====================================================
            SMALL BOTTOM STATEMENT
        ===================================================== --}}

        <div
            class="mx-auto mt-14
                   max-w-xl text-center"
        >

            <p
                class="text-sm
                       text-secondary-400"
            >
                Different backgrounds. One focus:

                <span
                    class="font-semibold
                           text-primary-600"
                >
                    building inventory software businesses can rely on.
                </span>
            </p>

        </div>

    </div>

</section>