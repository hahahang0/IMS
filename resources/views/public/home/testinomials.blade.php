<style>
    #testimonial-track {
        transition:
            transform 650ms cubic-bezier(.22, 1, .36, 1);
    }

    .testimonial-card {
        transition:
            width 500ms cubic-bezier(.22, 1, .36, 1),
            opacity 500ms ease,
            box-shadow 500ms ease;
    }

    .testimonial-card {
        width: 120px;
    }

    .testimonial-card.active {
        width: 320px;
    }

    @media (min-width: 640px) {

        .testimonial-card {
            width: 140px;
        }

        .testimonial-card.active {
            width: 520px;
        }

    }

    @media (min-width: 1024px) {

        .testimonial-card {
            width: 155px;
        }

        .testimonial-card.active {
            width: 700px;
        }

    }
</style>
{{-- Testinomials section --}}
@php

    $testimonials = [
        [
            'name' => 'James Thore',
            'role' => 'Small Business Owner',
            'image' => 'images/testimonials/image1.webp',
            'quote' =>
                'When our team rolled StockCore out across support and finance, manual follow-ups dropped in days. It finally felt like our operations stack was working for us.',
        ],

        [
            'name' => 'Sarah Mitchell',
            'role' => 'Product Manager',
            'image' => 'images/testimonials/image2.webp',
            'quote' =>
                'StockCore gives our team a clear view of inventory across the business. We spend less time searching for information and more time getting work done.',
        ],

        [
            'name' => 'David Chen',
            'role' => 'Marketing Manager',
            'image' => 'images/testimonials/image3.webp',
            'quote' =>
                'Everything feels much more organized now. StockCore has helped our team stay on top of products and make better decisions every day.',
        ],

        [
            'name' => 'Marcus Johnson',
            'role' => 'COO',
            'image' => 'images/testimonials/image4.webp',
            'quote' =>
                'We used to rely on spreadsheets and manual updates. StockCore gave our team a much simpler way to keep inventory accurate.',
        ],

        [
            'name' => 'Priya Sharma',
            'role' => 'Inventory Head',
            'image' => 'images/testimonials/image5.webp',
            'quote' =>
                'The biggest difference is visibility. Everyone on our team knows what is available, what is moving, and what needs attention.',
        ],

        [
            'name' => 'Alex Carter',
            'role' => 'Operations Manager',
            'image' => 'images/testimonials/image6.webp',
            'quote' =>
                'StockCore removed so much unnecessary manual work from our daily process. Our inventory team can finally focus on the work that matters.',
        ],

        [
            'name' => 'Emma Wilson',
            'role' => 'Retail Manager',
            'image' => 'images/testimonials/image7.webp',
            'quote' =>
                'Managing products across different categories became much easier. StockCore is simple enough for everyone on our team to use.',
        ],

        [
            'name' => 'Daniel Kim',
            'role' => 'Business Owner',
            'image' => 'images/testimonials/image8.webp',
            'quote' =>
                'StockCore gives us confidence that our inventory numbers are accurate. It has become an important part of how we run the business.',
        ],
    ];

@endphp


<section id="testimonials" class="relative overflow-hidden bg-background-muted py-24 sm:py-28 lg:py-32">


    {{-- Overall subtle blue tint --}}
    <div
        class="absolute inset-0
           bg-gradient-to-br
           from-blue-500/10
           via-transparent
           to-indigo-900/30">
    </div>


    {{-- Bottom dark gradient for readability --}}
    <div
        class="absolute inset-x-0 bottom-0 h-2/3
           bg-gradient-to-t
           from-blue-950/95
           via-blue-900/45
           to-transparent">
    </div>


    {{-- Soft blue glow --}}
    <div
        class="absolute -bottom-20 -left-20
           h-64 w-64
           rounded-full
           bg-blue-500/30
           blur-3xl">
    </div>


    {{-- Soft indigo glow --}}
    <div
        class="absolute -right-20 top-10
           h-56 w-56
           rounded-full
           bg-indigo-500/20
           blur-3xl">
    </div>


    {{-- Bottom dark gradient for readability --}}
    <div
        class="absolute inset-x-0 bottom-0 h-2/3
           bg-gradient-to-t
           from-blue-950/95
           via-blue-900/45
           to-transparent">
    </div>


    {{-- Soft blue glow --}}
    <div
        class="absolute -bottom-20 -left-20
           h-64 w-64
           rounded-full
           bg-blue-500/30
           blur-3xl">
    </div>


    {{-- Soft indigo glow --}}
    <div
        class="absolute -right-20 top-10
           h-56 w-56
           rounded-full
           bg-indigo-500/20
           blur-3xl">
    </div>

    {{-- Bottom dark gradient for readability --}}
    <div
        class="absolute inset-x-0 bottom-0 h-2/3
           bg-gradient-to-t
           from-primary-950/95
           via-primary-900/45
           to-transparent">
    </div>


    {{-- Soft blue glow --}}
    <div
        class="absolute -bottom-20 -left-20
           h-64 w-64
           rounded-full
           bg-blue-500/30
           blur-3xl">
    </div>


    {{-- Soft indigo glow --}}
    <div
        class="absolute -right-20 top-10
           h-56 w-56
           rounded-full
           bg-indigo-500/20
           blur-3xl">
    </div>


    {{-- section header --}}
    <div class="relative mx-auto max-w-4xl px-6 text-center">

        {{-- Label --}}

        <div
            class="mb-6 inline-flex items-center gap-2
                   rounded-full border border-blue-100
                   bg-blue-50 px-4 py-2
                   text-sm font-semibold text-blue-600">

            {{-- Comment / quote icon --}}

            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 11.5a8.38 8.38 0 0 1-9 8.3
                       8.5 8.5 0 0 1-4-.9L3 20l1.2-4.5
                       a8.3 8.3 0 0 1-.9-4
                       C3.3 6.8 7 3.2 12 3.2
                       a8.4 8.4 0 0 1 9 8.3Z" />
            </svg>

            <span>
                Testimonials
            </span>

        </div>


        {{-- Heading --}}

        <h2
            class="text-4xl font-bold tracking-tight
                   text-slate-950
                   sm:text-5xl
                   lg:text-6xl">

            Real stories,

            <span class="text-primary-600">
                Real results.
            </span>

        </h2>


        {{-- Description --}}

        <p
            class="mx-auto mt-6 max-w-2xl
                   text-base leading-7 text-slate-500
                   sm:text-lg sm:leading-8">
            See how growing businesses use StockCore to simplify
            inventory management, reduce manual work, and stay in control.
        </p>

    </div>


    {{-- carousal --}}

    <div id="testimonial-carousel" class="relative mx-auto mt-16 max-w-[1400px] px-5 sm:px-8">


        {{-- left arrow --}}

        <button type="button" id="testimonial-prev" aria-label="Previous testimonial"
            class="absolute left-2 top-1/2 z-30
                   flex h-12 w-12 -translate-y-1/2
                   items-center justify-center
                   rounded-full border border-slate-200
                   bg-white text-slate-700
                   shadow-lg shadow-slate-200/50
                   transition-all duration-300

                   hover:border-blue-200
                   hover:bg-blue-600
                   hover:text-white
                   hover:shadow-blue-200

                   focus:outline-none
                   focus:ring-4
                   focus:ring-blue-100

                   sm:left-4">

            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

        </button>



        {{-- viewport --}}

        <div id="testimonial-viewport" class="overflow-hidden">

            {{-- track --}}

            <div id="testimonial-track" class="flex items-stretch gap-4
                       will-change-transform">


                {{-- looping through testinomials --}}
                @for ($copy = 0; $copy < 3; $copy++)

                    @foreach ($testimonials as $index => $testimonial)
                        <article
                            class="testimonial-card group relative
                   flex h-[500px] shrink-0
                   cursor-pointer overflow-hidden
                   rounded-2xl
                   w-[120px]
                   border border-slate-200
                   bg-slate-100
                   opacity-60
                   shadow-sm
                   transition-all
                   duration-500
                   ease-[cubic-bezier(.22,1,.36,1)]

                   sm:w-[140px]
                   lg:w-[155px]"
                            data-index="{{ $index }}" data-copy="{{ $copy }}">

                            {{-- IMAGE --}}

                            <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}"
                                class="absolute inset-0
           h-full w-full
           object-cover
           transition-transform
           duration-700
           ease-out
           group-hover:scale-105">


                            {{-- image overlay --}}
                            {{-- Overall subtle blue tint --}}
                            <div
                                class="absolute inset-0
           bg-gradient-to-br
           from-blue-500/10
           via-transparent
           to-indigo-900/30">
                            </div>


                            {{-- Bottom dark gradient for readability --}}
                            <div
                                class="absolute inset-x-0 bottom-0 h-2/3
           bg-gradient-to-t
           from-blue-950/95
           via-blue-900/45
           to-transparent">
                            </div>


                            {{-- Soft blue glow --}}
                            <div
                                class="absolute -bottom-20 -left-20
           h-64 w-64
           rounded-full
           bg-blue-500/30
           blur-3xl">
                            </div>


                            {{-- Soft indigo glow --}}
                            <div
                                class="absolute -right-20 top-10
           h-56 w-56
           rounded-full
           bg-indigo-500/20
           blur-3xl">
                            </div>


                            {{-- PERSON INFORMATION --}}

                            <div class="absolute inset-x-0 bottom-0
                       p-5">

                                <h3 class="text-base font-bold text-white
                           lg:text-lg">
                                    {{ $testimonial['name'] }}
                                </h3>

                                <p class="mt-1 text-xs text-white/70
                           lg:text-sm">
                                    {{ $testimonial['role'] }}
                                </p>

                            </div>



                            <div
                                class="testimonial-quote-panel
           absolute inset-y-0 right-0
           hidden w-[52%]
           flex-col justify-between
           overflow-hidden

           bg-gradient-to-br
           from-primary-600
           via-primary-700
           to-indigo-950

           p-7 text-white

           lg:p-9">
                                {{-- Decorative gradient glow --}}

                                <div
                                    class="pointer-events-none absolute
           -right-20 -top-20
           h-64 w-64
           rounded-full
           bg-blue-400/30
           blur-3xl">
                                </div>


                                <div
                                    class="pointer-events-none absolute
           -bottom-24 -left-20
           h-72 w-72
           rounded-full
           bg-indigo-500/30
           blur-3xl">
                                </div>

                                <div>

                                    <svg class="mb-7 h-10 w-10 text-blue-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M7.2 6C4.9 6 3 7.9 3 10.2v1.1
                               c0 2.3 1.9 4.2 4.2 4.2h1.1
                               v-4.2H6.2c-.6 0-1.1-.5-1.1-1.1
                               v-.1c0-1.2 1-2.2 2.2-2.2h1V6H7.2Zm9.6 0
                               c-2.3 0-4.2 1.9-4.2 4.2v1.1
                               c0 2.3 1.9 4.2 4.2 4.2h1.1
                               v-4.2h-2.1c-.6 0-1.1-.5-1.1-1.1
                               v-.1c0-1.2 1-2.2 2.2-2.2h1V6h-1.1Z" />
                                    </svg>


                                    <blockquote
                                        class="text-lg font-semibold
                               leading-relaxed
                               lg:text-xl">
                                        “{{ $testimonial['quote'] }}”
                                    </blockquote>

                                </div>


                                <div>

                                    <h3 class="text-base font-bold lg:text-lg">
                                        {{ $testimonial['name'] }}
                                    </h3>

                                    <p class="mt-1 text-sm text-blue-200">
                                        {{ $testimonial['role'] }}
                                    </p>

                                </div>

                            </div>

                        </article>
                    @endforeach

                @endfor
            </div>

        </div>

        {{-- right arrow  --}}

        <button type="button" id="testimonial-next" aria-label="Next testimonial"
            class="absolute right-2 top-1/2 z-30
                   flex h-12 w-12 -translate-y-1/2
                   items-center justify-center
                   rounded-full border border-slate-200
                   bg-white text-slate-700
                   shadow-lg shadow-slate-200/50
                   transition-all duration-300

                   hover:border-blue-200
                   hover:bg-blue-600
                   hover:text-white
                   hover:shadow-blue-200

                   focus:outline-none
                   focus:ring-4
                   focus:ring-blue-100

                   sm:right-4">

            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18l6-6-6-6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

        </button>

    </div>


    {{-- dots --}}

    <div id="testimonial-dots" class="relative mt-8 flex
               justify-center gap-2">

        @foreach ($testimonials as $index => $testimonial)
            <button type="button" data-index="{{ $index }}" aria-label="Go to testimonial {{ $index + 1 }}"
                class="testimonial-dot
                       h-2 w-2 rounded-full
                       bg-blue-100
                       transition-all duration-300

                       hover:bg-blue-300"></button>
        @endforeach

    </div>

</section>

@push('scripts')
    <script>
        $(document).ready(function() {

            const $carousel = $('#testimonial-carousel');

            if (!$carousel.length) {
                return;
            }


            const $viewport = $('#testimonial-viewport');

            const $track = $('#testimonial-track');

            const $cards = $('.testimonial-card');

            const $dots = $('.testimonial-dot');


            /*
            |--------------------------------------------------------------------------
            | Number of real testimonials
            |--------------------------------------------------------------------------
            */

            const testimonialCount = 8;


            /*
            |--------------------------------------------------------------------------
            | We rendered the testimonials 3 times.
            |
            | Copy 0 = indexes 0 - 7
            | Copy 1 = indexes 8 - 15
            | Copy 2 = indexes 16 - 23
            |
            | We START at copy 1.
            |--------------------------------------------------------------------------
            */

            let currentIndex = testimonialCount;


            /*
            |--------------------------------------------------------------------------
            | Animation lock
            |--------------------------------------------------------------------------
            */

            let isAnimating = false;



            /*
            |--------------------------------------------------------------------------
            | Calculate where the active card should sit
            |--------------------------------------------------------------------------
            */

            function calculateTranslate() {

                const $activeCard =
                    $cards.eq(currentIndex);


                if (!$activeCard.length) {
                    return 0;
                }


                const viewportWidth =
                    $viewport.outerWidth();


                const cardLeft =
                    $activeCard[0].offsetLeft;


                const cardWidth =
                    $activeCard.outerWidth();


                const cardCenter =
                    cardLeft + (cardWidth / 2);


                const viewportCenter =
                    viewportWidth / 2;


                return viewportCenter - cardCenter;

            }



            /*
            |--------------------------------------------------------------------------
            | Update active card
            |--------------------------------------------------------------------------
            */

            function updateActiveCard() {

                $cards.removeClass('active');


                /*
                |--------------------------------------------------------------------------
                | Only the physical active card gets "active"
                |--------------------------------------------------------------------------
                */

                const $activeCard =
                    $cards.eq(currentIndex);


                $activeCard.addClass('active');


                /*
                |--------------------------------------------------------------------------
                | Update every card
                |--------------------------------------------------------------------------
                */

                $cards.each(function() {

                    const $card = $(this);

                    const $quotePanel =
                        $card.find('.testimonial-quote-panel');


                    if ($card.hasClass('active')) {

                        /*
                        | Active card
                        */

                        $card
                            .removeClass('opacity-60')
                            .addClass('opacity-100')
                            .removeClass('shadow-sm')
                            .addClass(
                                'shadow-xl shadow-blue-200/30'
                            );


                        /*
                        | Show quote
                        */

                        $quotePanel
                            .removeClass('hidden')
                            .addClass('flex');


                        /*
                        | Image occupies left side
                        */

                        $card
                            .find('img')
                            .removeClass('w-full')
                            .addClass('w-[48%]');

                    } else {

                        /*
                        | Inactive card
                        */

                        $card
                            .removeClass('opacity-100')
                            .addClass('opacity-60')
                            .removeClass(
                                'shadow-xl shadow-blue-200/30'
                            )
                            .addClass('shadow-sm');


                        /*
                        | Hide quote
                        */

                        $quotePanel
                            .removeClass('flex')
                            .addClass('hidden');


                        /*
                        | Full image
                        */

                        $card
                            .find('img')
                            .removeClass('w-[48%]')
                            .addClass('w-full');

                    }

                });


                /*
                |--------------------------------------------------------------------------
                | Update dots
                |--------------------------------------------------------------------------
                |
                | Physical index:
                |
                | 8  = testimonial 1
                | 9  = testimonial 2
                | ...
                | 15 = testimonial 8
                | 16 = testimonial 1
                |
                |--------------------------------------------------------------------------
                */

                const logicalIndex =
                    currentIndex % testimonialCount;


                $dots
                    .removeClass(
                        'bg-blue-600 w-6'
                    )
                    .addClass(
                        'bg-blue-100 w-2'
                    );


                $dots
                    .eq(logicalIndex)
                    .removeClass(
                        'bg-blue-100 w-2'
                    )
                    .addClass(
                        'bg-blue-600 w-6'
                    );

            }



            /*
            |--------------------------------------------------------------------------
            | Move carousel
            |--------------------------------------------------------------------------
            */

            function moveTo(index, animate = true) {

                if (isAnimating) {
                    return;
                }


                currentIndex = index;


                /*
                |--------------------------------------------------------------------------
                | Update active card
                |--------------------------------------------------------------------------
                */

                updateActiveCard();


                /*
                |--------------------------------------------------------------------------
                | Give the browser a moment to calculate
                | the new active card width.
                |--------------------------------------------------------------------------
                */

                setTimeout(function() {

                    const translate =
                        calculateTranslate();


                    if (animate) {

                        $track.css(
                            'transition',
                            'transform 650ms cubic-bezier(.22,1,.36,1)'
                        );


                        isAnimating = true;

                    } else {

                        $track.css(
                            'transition',
                            'none'
                        );

                    }


                    $track.css(
                        'transform',
                        `translate3d(${translate}px, 0, 0)`
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | After animation
                    |--------------------------------------------------------------------------
                    */

                    if (animate) {

                        setTimeout(function() {

                            isAnimating = false;


                            /*
                            |--------------------------------------------------------------------------
                            | INFINITE LOOP RESET
                            |--------------------------------------------------------------------------
                            |
                            | If we've reached the third copy,
                            | silently move back to the middle copy.
                            |--------------------------------------------------------------------------
                            */

                            if (
                                currentIndex >=
                                testimonialCount * 2
                            ) {

                                currentIndex -=
                                    testimonialCount;


                                jumpWithoutAnimation();

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Same thing when moving backwards.
                            |--------------------------------------------------------------------------
                            */
                            else if (
                                currentIndex < testimonialCount
                            ) {

                                currentIndex +=
                                    testimonialCount;


                                jumpWithoutAnimation();

                            }

                        }, 400);

                    }

                }, animate ? 20 : 0);

            }



            /*
            |--------------------------------------------------------------------------
            | Jump to the equivalent card without animation
            |--------------------------------------------------------------------------
            |
            | IMPORTANT:
            |
            | The user never sees this reset.
            |
            | Example:
            |
            | 8 → 9 → ... → 15 → 16
            |
            | 16 is "testimonial 1" in copy 3.
            |
            | We silently turn 16 into 8.
            |
            | Visually:
            |
            | 8 → 9 → ... → 15 → 16
            |
            | becomes:
            |
            | 8 → 9 → ... → 15 → 8
            |
            | But because both cards are identical,
            | the user sees:
            |
            | 1 → 2 → ... → 8 → 1
            |
            |--------------------------------------------------------------------------
            */

            function jumpWithoutAnimation() {

                updateActiveCard();


                const translate =
                    calculateTranslate();


                $track.css(
                    'transition',
                    'none'
                );


                $track.css(
                    'transform',
                    `translate3d(${translate}px, 0, 0)`
                );

            }



            /*
            |--------------------------------------------------------------------------
            | NEXT
            |--------------------------------------------------------------------------
            */

            $('#testimonial-next').on(
                'click',
                function() {

                    moveTo(
                        currentIndex + 1
                    );

                }
            );



            /*
            |--------------------------------------------------------------------------
            | PREVIOUS
            |--------------------------------------------------------------------------
            */

            $('#testimonial-prev').on(
                'click',
                function() {

                    moveTo(
                        currentIndex - 1
                    );

                }
            );



            /*
            |--------------------------------------------------------------------------
            | CLICK TESTIMONIAL
            |--------------------------------------------------------------------------
            */

            $cards.on(
                'click',
                function() {

                    const clickedIndex =
                        parseInt(
                            $(this).attr('data-index'),
                            10
                        );


                    /*
                    |--------------------------------------------------------------------------
                    | Find the physical card closest to the
                    | current active position.
                    |--------------------------------------------------------------------------
                    */

                    let targetIndex =
                        currentIndex;


                    let smallestDistance =
                        Infinity;


                    $cards.each(function(index) {

                        const logicalIndex =
                            parseInt(
                                $(this).attr('data-index'),
                                10
                            );


                        if (
                            logicalIndex !==
                            clickedIndex
                        ) {
                            return;
                        }


                        const distance =
                            Math.abs(
                                index - currentIndex
                            );


                        if (
                            distance <
                            smallestDistance
                        ) {

                            smallestDistance =
                                distance;

                            targetIndex =
                                index;

                        }

                    });


                    moveTo(targetIndex);

                }
            );



            /*
            |--------------------------------------------------------------------------
            | DOTS
            |--------------------------------------------------------------------------
            */

            $dots.on(
                'click',
                function() {

                    const logicalIndex =
                        parseInt(
                            $(this).attr('data-index'),
                            10
                        );


                    /*
                    |--------------------------------------------------------------------------
                    | Find the same testimonial in the
                    | current copy.
                    |--------------------------------------------------------------------------
                    */

                    const currentCopy =
                        Math.floor(
                            currentIndex /
                            testimonialCount
                        );


                    const targetIndex =
                        (
                            currentCopy *
                            testimonialCount
                        ) + logicalIndex;


                    moveTo(targetIndex);

                }
            );



            /*
            |--------------------------------------------------------------------------
            | KEYBOARD
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'keydown',
                function(event) {

                    if (
                        event.key === 'ArrowRight'
                    ) {

                        moveTo(
                            currentIndex + 1
                        );

                    }


                    if (
                        event.key === 'ArrowLeft'
                    ) {

                        moveTo(
                            currentIndex - 1
                        );

                    }

                }
            );



            /*
            |--------------------------------------------------------------------------
            | WINDOW RESIZE
            |--------------------------------------------------------------------------
            */

            let resizeTimer;


            $(window).on(
                'resize',
                function() {

                    clearTimeout(resizeTimer);


                    resizeTimer =
                        setTimeout(
                            function() {

                                jumpWithoutAnimation();

                            },
                            150
                        );

                }
            );



            /*
            |--------------------------------------------------------------------------
            | INITIALIZE
            |--------------------------------------------------------------------------
            */

            moveTo(
                testimonialCount,
                false
            );

        });
    </script>
@endpush
