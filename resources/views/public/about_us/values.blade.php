{{-- VALUES========= --}}

@php
    $values = [
        [
            'id' => 'customer-first',
            'nav' => 'Customer first',
            'heading' => 'Customer first,',
            'highlight' => 'always.',
            'paragraphs' => [
                'Everything we do starts with our customers. We listen, we learn and we build with the real challenges of Australian businesses in mind.',
                'Our customers aren’t just users — they’re partners. Their feedback shapes our product, our roadmap and the way we work.',
                'By staying close to the businesses that rely on StockCore, we can continually improve and make inventory management simpler, smarter and more valuable.',
            ],
            'image' => 'images/about/value-customer.webp',
            'alt' => 'StockCore working closely with customers',
        ],

        [
            'id' => 'simplicity',
            'nav' => 'Simplicity in everything',
            'heading' => 'Powerful software.',
            'highlight' => 'Without the clutter.',
            'paragraphs' => [
                'Inventory management already has enough moving parts. The software used to manage it should not add unnecessary complexity.',
                'We focus on clear workflows, practical interfaces and features that solve real operational problems without overwhelming the people using them.',
                'Powerful software does not have to feel difficult. Simplicity is something we design deliberately.',
            ],
            'image' => 'images/about/value-simplicity.webp',
            'alt' => 'Simple and focused StockCore inventory workflow',
        ],

        [
            'id' => 'australian-businesses',
            'nav' => 'Built for Australian businesses',
            'heading' => 'Built here.',
            'highlight' => 'Built for how you work.',
            'paragraphs' => [
                'StockCore is being built around the day-to-day realities of Australian small and mid-sized businesses.',
                'That means understanding local operations, purchasing workflows, integrations and the practical challenges growing businesses face.',
                'We also believe businesses should be able to reach the people behind their software when they need help.',
            ],
            'image' => 'images/about/value-australia.webp',
            'alt' => 'Australian business using StockCore inventory software',
        ],

        [
            'id' => 'long-term-thinking',
            'nav' => 'Long-term thinking',
            'heading' => 'Useful today.',
            'highlight' => 'Built for tomorrow.',
            'paragraphs' => [
                'We are not building StockCore around short-lived trends or adding features simply to make the product look bigger.',
                'We make decisions with reliability, maintainability and long-term customer value in mind.',
                'The goal is to build software businesses can continue relying on as their inventory, teams and operations grow.',
            ],
            'image' => 'images/about/value-long-term.webp',
            'alt' => 'Growing business supported by StockCore',
        ],

        [
            'id' => 'supportive-culture',
            'nav' => 'A positive and supportive culture',
            'heading' => 'Good work starts with',
            'highlight' => 'good people.',
            'paragraphs' => [
                'We want StockCore to be a place where people can do thoughtful work, challenge assumptions and contribute ideas openly.',
                'That same mindset shapes how we work with customers: communicate clearly, be useful and treat people with respect.',
                'Building a strong company and building a strong product are part of the same job.',
            ],
            'image' => 'images/about/value-culture.webp',
            'alt' => 'StockCore team working together',
        ],
    ];
@endphp


<section
    id="about-values"
    class="border-t border-secondary-200 bg-background"
>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

    {{-- main values layouts  --}}
        <div
            class="grid gap-12 py-20
                   lg:grid-cols-[280px_minmax(0,1fr)]
                   lg:gap-20
                   lg:py-28"
        >


             {{-- left sticky navigation --}}

            <aside class="relative">

                <div
                    class="lg:sticky lg:top-28"
                >

                    {{-- Only ONE section label --}}
                    <p
                        class="mb-8 text-xs font-bold uppercase
                               tracking-[0.22em] text-secondary-600"
                    >
                        Our values
                    </p>


                    {{-- Desktop navigation --}}
                    <nav
                        class="hidden border-l border-secondary-300 lg:block"
                        aria-label="StockCore values"
                    >

                        @foreach ($values as $index => $value)

                            <a
                                href="#value-{{ $value['id'] }}"
                                class="value-nav relative block
                                       px-7 py-3.5
                                       text-base leading-6
                                       text-secondary-600
                                       transition duration-200
                                       hover:text-secondary-950
                                       {{ $index === 0 ? 'is-active' : '' }}"
                                data-target="value-{{ $value['id'] }}"
                            >
                                {{ $value['nav'] }}
                            </a>

                        @endforeach

                    </nav>



                    {{-- Mobile navigation --}}
                    <div
                        class="flex gap-2 overflow-x-auto pb-3 lg:hidden"
                    >

                        @foreach ($values as $index => $value)

                            <a
                                href="#value-{{ $value['id'] }}"
                                class="value-nav-mobile shrink-0
                                       rounded-full
                                       border border-secondary-200
                                       px-4 py-2
                                       text-sm font-medium
                                       text-secondary-600
                                       transition
                                       {{ $index === 0 ? 'is-active' : '' }}"
                                data-target="value-{{ $value['id'] }}"
                            >
                                {{ $value['nav'] }}
                            </a>

                        @endforeach

                    </div>

                </div>

            </aside>



           {{-- right scrolling stories --}}

            <div class="min-w-0">

                @foreach ($values as $index => $value)

                    <article
                        id="value-{{ $value['id'] }}"
                        class="value-section scroll-mt-32
                               {{ $index > 0
                                   ? 'border-t border-secondary-200 pt-20 lg:pt-28'
                                   : '' }}
                               {{ !$loop->last
                                   ? 'pb-20 lg:pb-28'
                                   : 'pb-4' }}"
                        data-value-index="{{ $index }}"
                    >
                        {{-- first section wider intros  --}}

                        @if ($index === 0)

                            <div
                                class="grid items-start gap-10
                                       xl:grid-cols-[0.95fr_1.05fr]
                                       xl:gap-14"
                            >

                                {{-- Text --}}
                                <div>

                                    <h2
                                        class="max-w-[570px]
                                               text-4xl font-medium
                                               leading-[1.1]
                                               tracking-[-0.04em]
                                               text-secondary-950
                                               sm:text-5xl
                                               lg:text-[3.55rem]"
                                    >
                                        {{ $value['heading'] }}

                                        <span class="block text-primary-600">
                                            {{ $value['highlight'] }}
                                        </span>
                                    </h2>


                                    <div
                                        class="mt-8 max-w-[600px]
                                               space-y-6
                                               text-base leading-8
                                               text-secondary-700
                                               sm:text-lg"
                                    >

                                        @foreach ($value['paragraphs'] as $paragraph)

                                            <p>
                                                {{ $paragraph }}
                                            </p>

                                        @endforeach

                                    </div>

                                </div>


                                {{-- Image --}}
                                <div>

                                    <img
                                        src="{{ asset($value['image']) }}"
                                        alt="{{ $value['alt'] }}"
                                        class="aspect-[1.2/1] w-full object-cover"
                                    >

                                </div>

                            </div>



                        @else

                           {{-- visual stories  --}}

                            <div
                                class="grid items-start gap-10
                                       xl:grid-cols-2
                                       xl:gap-14"
                            >

                                {{-- Text --}}
                                <div
                                    class="{{ $index % 2 === 0 ? 'xl:order-2' : '' }}"
                                >

                                    <h2
                                        class="max-w-[560px]
                                               text-4xl font-medium
                                               leading-[1.1]
                                               tracking-[-0.04em]
                                               text-secondary-950
                                               sm:text-5xl"
                                    >
                                        {{ $value['heading'] }}

                                        <span class="block text-primary-600">
                                            {{ $value['highlight'] }}
                                        </span>
                                    </h2>


                                    <div
                                        class="mt-8 max-w-[590px]
                                               space-y-6
                                               text-base leading-8
                                               text-secondary-700"
                                    >

                                        @foreach ($value['paragraphs'] as $paragraph)

                                            <p>
                                                {{ $paragraph }}
                                            </p>

                                        @endforeach

                                    </div>

                                </div>


                                {{-- Image --}}
                                <div
                                    class="{{ $index % 2 === 0 ? 'xl:order-1' : '' }}"
                                >

                                    <img
                                        src="{{ asset($value['image']) }}"
                                        alt="{{ $value['alt'] }}"
                                        class="aspect-[1.15/1] w-full object-cover"
                                    >

                                </div>

                            </div>

                        @endif

                    </article>

                @endforeach

            </div>

        </div>



     {{-- our purpose --}}

        <div
            class="mb-24 overflow-hidden
                   rounded-[1.75rem]
                   bg-primary-50
                   px-8 py-10
                   sm:px-10
                   lg:mb-28
                   lg:px-14 lg:py-14"
        >

            <div
                class="grid gap-10
                       lg:grid-cols-[1.05fr_.95fr]
                       lg:items-center"
            >

                {{-- Left --}}
                <div>

                    <div class="flex items-center gap-4">

                        <span
                            class="text-xs font-bold uppercase
                                   tracking-[0.22em]
                                   text-secondary-600"
                        >
                            Our purpose
                        </span>

                        <span
                            class="h-px w-14 bg-secondary-400"
                            aria-hidden="true"
                        ></span>

                    </div>


                    <h3
                        class="mt-7 max-w-[650px]
                               text-4xl font-extrabold
                               leading-[1.06]
                               tracking-[-0.045em]
                               text-secondary-950
                               sm:text-5xl"
                    >
                        Helping Australian
                        <br>

                        businesses

                        <span class="text-primary-600">
                            thrive.
                        </span>
                    </h3>

                </div>


                {{-- Right --}}
                <div>

                    <p
                        class="max-w-[520px]
                               text-base leading-8
                               text-secondary-600
                               sm:text-lg"
                    >
                        We exist to give growing businesses the tools,
                        clarity and confidence to manage inventory better,
                        so they can focus on what they do best.
                    </p>


                    <a
                        href="#about-story"
                        class="group mt-7 inline-flex
                               items-center gap-3
                               rounded-full
                               bg-primary-600
                               px-7 py-3.5
                               text-sm font-semibold text-white
                               transition
                               hover:bg-primary-700"
                    >
                        Our story

                        <svg
                            class="h-4 w-4 transition
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

                </div>

            </div>

        </div>

    </div>



  {{-- active navigation style --}}

    <style>

       /* desktop */

        #about-values .value-nav {
            font-weight: 500;
        }

        #about-values .value-nav::before {
            content: "";
            position: absolute;

            left: -1px;
            top: 0;

            width: 2px;
            height: 100%;

            background: transparent;

            transition:
                background-color 220ms ease;
        }

        #about-values .value-nav.is-active {
            color: var(--color-primary-600);
            font-weight: 600;
        }

        #about-values .value-nav.is-active::before {
            background: var(--color-primary-600);
        }


        /* mobile */

        #about-values .value-nav-mobile.is-active {
            border-color: var(--color-primary-600);
            background: var(--color-primary-50);
            color: var(--color-primary-700);
        }

    </style>


{{-- jquery --}}

    <script>
        $(document).ready(function () {

            const $window = $(window);

            const $sections = $('#about-values .value-section');

            const $desktopNav = $('#about-values .value-nav');

            const $mobileNav = $('#about-values .value-nav-mobile');



        //    activate navigation items

            function activateValue(index) {

                /*
                | Desktop
                */

                $desktopNav.removeClass('is-active');

                $desktopNav
                    .eq(index)
                    .addClass('is-active');


                /*
                | Mobile
                */

                $mobileNav.removeClass('is-active');

                const $activeMobile = $mobileNav
                    .eq(index)
                    .addClass('is-active');


                /*
                | Keep mobile active tab visible
                */

                if ($activeMobile.length && window.innerWidth < 1024) {

                    const navContainer = $activeMobile.parent()[0];

                    const activeElement = $activeMobile[0];

                    if (navContainer && activeElement) {

                        navContainer.scrollTo({
                            left:
                                activeElement.offsetLeft -
                                navContainer.clientWidth / 2 +
                                activeElement.clientWidth / 2,

                            behavior: 'smooth'
                        });

                    }

                }

            }

    /* Click navigation */

            $('#about-values .value-nav, #about-values .value-nav-mobile')
                .on('click', function (event) {

                    event.preventDefault();

                    const targetId = $(this).data('target');

                    const $target = $('#' + targetId);

                    if (!$target.length) {
                        return;
                    }


                    const headerOffset = 110;

                    const targetPosition =
                        $target.offset().top - headerOffset;


                    $('html, body').stop().animate(
                        {
                            scrollTop: targetPosition
                        },
                        650
                    );

                });




            function updateFromScroll() {

                const scrollPosition =
                    $window.scrollTop() +
                    Math.min(
                        window.innerHeight * 0.32,
                        260
                    );


                let activeIndex = 0;


                $sections.each(function (index) {

                    const sectionTop =
                        $(this).offset().top;


                    if (scrollPosition >= sectionTop) {
                        activeIndex = index;
                    }

                });


                activateValue(activeIndex);

            }


    // scroll listener
            let ticking = false;


            $window.on('scroll resize', function () {

                if (ticking) {
                    return;
                }


                window.requestAnimationFrame(function () {

                    updateFromScroll();

                    ticking = false;

                });


                ticking = true;

            });



    //   initiAL STATE
            updateFromScroll();

        });
    </script>

</section>