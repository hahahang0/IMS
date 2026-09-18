{{-- customer success / case studies --}}

@php

    $successStats = [
        [
            'icon' => 'clock',
            'value' => '80%',
            'label' => 'Less manual data entry',
            'class' => 'bg-primary-50 text-primary-600',
        ],

        [
            'icon' => 'chart',
            'value' => '2x',
            'label' => 'Faster order processing',
            'class' => 'bg-emerald-50 text-emerald-600',
        ],

        [
            'icon' => 'business',
            'value' => '100+',
            'label' => 'Australian businesses',
            'class' => 'bg-violet-50 text-violet-600',
        ],
    ];

    $testimonials = [
        [
            'quote' =>
                'The Xero and Cin7 integration with StockCore has been a game changer. Our stock, sales and financials are always in sync, and we’ve saved hours of manual work each week.',

            'name' => 'Sarah T.',
            'role' => 'Operations Manager',

            'logos' => ['images/integrations/xero.svg', 'images/integrations/cin7.svg'],

            'benefits' => ['Real-time stock sync', 'Eliminated manual entry', 'Accurate financial reporting'],
        ],

        [
            'quote' =>
                'Connecting Shopify and Xero through StockCore gave us one clear view of stock and sales. Our team spends far less time fixing discrepancies and updating systems manually.',

            'name' => 'James R.',
            'role' => 'Retail Operations Lead',

            'logos' => ['images/integrations/shopify.svg', 'images/integrations/xero.svg'],

            'benefits' => ['Fewer stock discrepancies', 'Faster sales reconciliation', 'Better inventory visibility'],
        ],

        [
            'quote' =>
                'StockCore helped us connect WooCommerce and MYOB without changing the way our team works. Orders move faster and our inventory data stays consistent across the business.',

            'name' => 'Michelle K.',
            'role' => 'Business Manager',

            'logos' => ['images/integrations/woocommerce.svg', 'images/integrations/myob.svg'],

            'benefits' => ['Connected order workflow', 'Less duplicate work', 'Reliable inventory data'],
        ],
    ];

    $caseStudies = [
        [
            'company' => 'THE BEAUTY CO.',
            'title' => 'From manual processes to real-time inventory',

            'image' => 'images/company_assets/case-studies/beauty.webp',

            'integrations' => [
                [
                    'name' => 'Shopify',
                    'logo' => 'images/integrations/shopify.svg',
                ],
                [
                    'name' => 'Xero',
                    'logo' => 'images/integrations/xero.svg',
                ],
            ],

            'url' => '#',
        ],

        [
            'company' => 'AUSSIE OUTDOORS',
            'title' => 'Scaling across multiple channels with confidence',

            'image' => 'images/company_assets/case-studies/outdoors.webp',

            'integrations' => [
                [
                    'name' => 'Amazon',
                    'logo' => 'images/integrations/amazon.svg',
                ],
                [
                    'name' => 'Cin7',
                    'logo' => 'images/integrations/cin7.svg',
                ],
            ],

            'url' => '#',
        ],

        [
            'company' => 'URBAN SUPPLY',
            'title' => 'Streamlined operations and happier customers',

            'image' => 'images/company_assets/case-studies/warehouse.webp',

            'integrations' => [
                [
                    'name' => 'WooCommerce',
                    'logo' => 'images/integrations/woocommerce.svg',
                ],
                [
                    'name' => 'MYOB',
                    'logo' => 'images/integrations/myob.svg',
                ],
            ],

            'url' => '#',
        ],
    ];

@endphp



<section id="integration-customer-success"
    class="relative overflow-hidden
           bg-background-muted
           py-20
           sm:py-24
           lg:py-28">

    {{-- background decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Left large shape --}}
        <div
            class="absolute
                   -left-[300px] -bottom-[360px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[100px]
                   border-primary-50/70">
        </div>


        {{-- Top right circle --}}
        <div
            class="absolute
                   right-[12%] -top-[55px]
                   h-20 w-20
                   rounded-full
                   bg-primary-50/90">
        </div>


        {{-- Right dots --}}
        <div
            class="absolute
                   right-[4%] top-[65px]
                   hidden grid-cols-5 gap-3
                   opacity-30
                   lg:grid">

            @for ($i = 0; $i < 25; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor

        </div>


        {{-- Centre glow --}}
        <div
            class="absolute
                   left-1/2 top-[38%]
                   h-[500px] w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[120px]">
        </div>

    </div>



    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               sm:px-8
               lg:px-8">

        {{-- top area --}}
        <div class="grid gap-12
                   lg:grid-cols-[0.78fr_1.22fr]
                   lg:items-center">


            {{-- left content --}}
            <div>

                {{-- Eyebrow --}}
                <div
                    class="inline-flex items-center gap-2.5
                           rounded-full
                           bg-primary-50
                           px-4 py-2
                           text-[12px]
                           font-bold uppercase
                           tracking-[0.07em]
                           text-primary-600">

                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 20V10M10 20V5M15 20v-8M20 20V8" />
                    </svg>

                    Customer Success

                </div>



                {{-- Heading --}}
                <h2
                    class="mt-6
                           text-4xl
                           font-extrabold
                           leading-[1.05]
                           tracking-[-0.045em]
                           text-secondary-950
                           sm:text-5xl
                           lg:text-[3.5rem]">

                    Real businesses.

                    <span class="block text-primary-600">
                        Real results.
                    </span>

                </h2>



                {{-- Description --}}
                <p
                    class="mt-6
                           max-w-xl
                           text-base
                           leading-7
                           text-secondary-600
                           sm:text-lg">
                    See how Australian businesses are using StockCore integrations
                    to streamline their operations, reduce manual work and grow
                    with confidence.
                </p>



                {{-- stats --}}
                <div
                    class="mt-9
                           grid grid-cols-1
                           gap-5
                           sm:grid-cols-3
                           lg:grid-cols-3">

                    @foreach ($successStats as $stat)
                        <div class="flex items-start gap-3">

                            {{-- icon --}}
                            <div
                                class="flex h-11 w-11
                                       shrink-0
                                       items-center justify-center
                                       rounded-full
                                       {{ $stat['class'] }}">

                                {{-- CLOCK --}}
                                @if ($stat['icon'] === 'clock')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8">
                                        <circle cx="12" cy="12" r="8" />

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2" />
                                    </svg>
                                @endif


                                {{-- CHART --}}
                                @if ($stat['icon'] === 'chart')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 20v-6M10 20V9M15 20V5M20 20V11" />
                                    </svg>
                                @endif


                                {{-- BUSINESS --}}
                                @if ($stat['icon'] === 'business')
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8">
                                        <circle cx="9" cy="8" r="3" />

                                        <circle cx="17" cy="9" r="2.5" />

                                        <path stroke-linecap="round" d="M3 19a6 6 0 0 1 12 0M14 14.5a5 5 0 0 1 7 4.5" />
                                    </svg>
                                @endif

                            </div>


                            <div>

                                <p
                                    class="text-[25px]
                                           font-extrabold
                                           leading-none
                                           tracking-[-0.03em]
                                           text-secondary-950">
                                    {{ $stat['value'] }}
                                </p>

                                <p
                                    class="mt-2
                                           text-[13px]
                                           leading-5
                                           text-secondary-500">
                                    {{ $stat['label'] }}
                                </p>

                            </div>

                        </div>
                    @endforeach

                </div>



                {{-- Case studies button --}}
                <a href="#integration-case-studies"
                    class="group mt-10
                           inline-flex
                           min-h-[48px]
                           items-center justify-center
                           gap-3
                           rounded-xl
                           border border-primary-400
                           bg-white
                           px-6
                           text-sm font-semibold
                           text-primary-600
                           transition-all duration-300
                           hover:-translate-y-0.5
                           hover:bg-primary-600
                           hover:text-white">

                    View all case studies

                    <svg class="h-4 w-4
                               transition-transform duration-300
                               group-hover:translate-x-1"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                    </svg>

                </a>

            </div>



            {{-- right testimonial slider --}}
            <div>

                <div id="integration-testimonial-slider"
                    class="relative
                           min-h-[410px]
                           overflow-hidden
                           rounded-[26px]
                           border border-secondary-200
                           bg-white
                           shadow-[0_18px_55px_rgba(15,23,42,0.06)]">

                    @foreach ($testimonials as $index => $testimonial)
                        <article
                            class="integration-testimonial-slide
                                   {{ $index !== 0 ? 'hidden' : '' }}
                                   p-7
                                   sm:p-9
                                   lg:p-10"
                            data-slide="{{ $index }}">

                            <div class="grid gap-8
                                       lg:grid-cols-[1fr_0.72fr]">

                                {{-- quote side --}}
                                <div>

                                    {{-- quote icon --}}
                                    <div
                                        class="text-[70px]
                                               font-black
                                               leading-[0.6]
                                               text-primary-600">
                                        “
                                    </div>


                                    <blockquote
                                        class="mt-4
                                               text-[17px]
                                               leading-8
                                               text-secondary-700
                                               sm:text-[18px]">
                                        {{ $testimonial['quote'] }}
                                    </blockquote>


                                    {{-- person --}}
                                    <div class="mt-7">

                                        <p
                                            class="text-[16px]
                                                   font-bold
                                                   text-secondary-950">
                                            {{ $testimonial['name'] }}
                                        </p>

                                        <p
                                            class="mt-0.5
                                                   text-sm
                                                   text-secondary-500">
                                            {{ $testimonial['role'] }}
                                        </p>

                                    </div>


                                    {{-- stars --}}
                                    <div
                                        class="mt-3
                                               flex items-center gap-1
                                               text-amber-400">

                                        @for ($star = 0; $star < 5; $star++)
                                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="m12 2.8 2.8 5.7 6.3.9-4.55 4.45 1.07 6.28L12 17.18l-5.62 2.95 1.07-6.28L2.9 9.4l6.3-.9L12 2.8Z" />
                                            </svg>
                                        @endfor

                                    </div>

                                </div>



                                {{-- integration side --}}
                                <div>

                                    {{-- logos --}}
                                    <div
                                        class="flex items-center
                                               justify-center gap-5">

                                        @foreach ($testimonial['logos'] as $logoIndex => $logo)
                                            <div
                                                class="flex h-[72px] w-[100px]
                                                       items-center justify-center">

                                                <img src="{{ asset($logo) }}" alt="Integration"
                                                    class="max-h-[58px]
                                                           max-w-[95px]
                                                           object-contain">

                                            </div>


                                            @if (!$loop->last)
                                                <span
                                                    class="text-xl
                                                           font-light
                                                           text-secondary-300">
                                                    ×
                                                </span>
                                            @endif
                                        @endforeach

                                    </div>



                                    {{-- Benefits --}}
                                    <div
                                        class="mt-7
                                               rounded-2xl
                                               bg-primary-50/70
                                               p-5">

                                        <div class="space-y-4">

                                            @foreach ($testimonial['benefits'] as $benefit)
                                                <div class="flex items-center gap-3">

                                                    <span
                                                        class="flex h-7 w-7
                                                               shrink-0
                                                               items-center justify-center
                                                               rounded-full
                                                               bg-emerald-500
                                                               text-white">
                                                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2.5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m5 12 4 4L19 7" />
                                                        </svg>
                                                    </span>


                                                    <span
                                                        class="text-sm
                                                               font-medium
                                                               text-secondary-700">
                                                        {{ $benefit }}
                                                    </span>

                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </article>
                    @endforeach



                    {{-- navigation --}}
                    <div
                        class="absolute
                               bottom-7 right-7
                               flex items-center gap-3">

                        {{-- Prev --}}
                        <button id="testimonial-prev" type="button"
                            class="flex h-11 w-11
                                   items-center justify-center
                                   rounded-full
                                   border border-secondary-200
                                   bg-white
                                   text-primary-600
                                   shadow-sm
                                   transition
                                   hover:border-primary-300
                                   hover:bg-primary-50
                                   hover:cursor-pointer"
                            aria-label="Previous testimonial">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6" />
                            </svg>
                        </button>


                        {{-- Next --}}
                        <button id="testimonial-next" type="button"
                            class="flex h-11 w-11
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-white
                                   shadow-[0_8px_22px_rgba(37,99,235,0.25)]
                                   transition
                                   hover:bg-primary-700
                                   hover:cursor-pointer"
                            aria-label="Next testimonial">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                            </svg>
                        </button>

                    </div>

                </div>



                {{-- Pagination dots --}}
                <div id="testimonial-dots"
                    class="mt-5
                           flex items-center justify-center
                           gap-2">

                    @foreach ($testimonials as $index => $testimonial)
                        <button type="button" data-testimonial-dot="{{ $index }}"
                            class="testimonial-dot
                                   h-2.5 rounded-full
                                   transition-all duration-300

                                   {{ $index === 0 ? 'w-7 bg-primary-600' : 'w-2.5 bg-primary-200' }}"
                            aria-label="Go to testimonial {{ $index + 1 }}"></button>
                    @endforeach

                </div>

            </div>

        </div>


        {{-- case studies --}}
        <div id="integration-case-studies"
            class="mt-16
                   grid gap-6
                   md:grid-cols-2
                   lg:grid-cols-3">

            @foreach ($caseStudies as $caseStudy)
                <article
                    class="group
                           relative
                           min-h-[330px]
                           overflow-hidden
                           rounded-[24px]
                           bg-secondary-900">

                    {{-- Background image --}}
                    <img src="{{ asset($caseStudy['image']) }}" alt="{{ $caseStudy['company'] }}"
                        class="absolute inset-0
                               h-full w-full
                               object-cover
                               transition-transform duration-700
                               group-hover:scale-105"
                        loading="lazy">


                    {{-- Dark overlay --}}
                    <div
                        class="absolute inset-0
                               bg-gradient-to-t
                               from-secondary-950
                               via-secondary-950/55
                               to-secondary-950/10">
                    </div>



                    {{-- Content --}}
                    <div
                        class="relative z-10
                               flex min-h-[330px]
                               flex-col justify-between
                               p-7">

                        {{-- Company --}}
                        <p
                            class="max-w-[170px]
                                   text-[13px]
                                   font-bold uppercase
                                   tracking-[0.22em]
                                   text-white/90">
                            {{ $caseStudy['company'] }}
                        </p>



                        <div>

                            {{-- title --}}
                            <h3
                                class="max-w-sm
                                       text-[22px]
                                       font-bold
                                       leading-[1.25]
                                       tracking-[-0.025em]
                                       text-white">
                                {{ $caseStudy['title'] }}
                            </h3>



                            {{-- bottom row --}}
                            <div
                                class="mt-6
                                       flex items-end justify-between
                                       gap-4">

                                {{-- Integration tags --}}
                                <div class="flex flex-wrap gap-2">

                                    @foreach ($caseStudy['integrations'] as $integration)
                                        <div
                                            class="flex h-11
                                                   items-center gap-2
                                                   rounded-xl
                                                   bg-white/95
                                                   px-3
                                                   shadow-sm
                                                   backdrop-blur-sm">

                                            <img src="{{ asset($integration['logo']) }}"
                                                alt="{{ $integration['name'] }}"
                                                class="h-6 w-8
                                                       object-contain">

                                            <span
                                                class="text-[12px]
                                                       font-semibold
                                                       text-secondary-800">
                                                {{ $integration['name'] }}
                                            </span>

                                        </div>
                                    @endforeach

                                </div>



                                {{-- Arrow --}}
                                <a href="{{ $caseStudy['url'] }}"
                                    class="flex h-12 w-12
                                           shrink-0
                                           items-center justify-center
                                           rounded-full
                                           bg-white
                                           text-primary-600
                                           shadow-md
                                           transition-all duration-300
                                           hover:bg-primary-600
                                           hover:text-white"
                                    aria-label="View case study">
                                    <svg class="h-5 w-5
                                               transition-transform duration-300
                                               group-hover:translate-x-0.5"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h14m-5-5 5 5-5 5" />
                                    </svg>
                                </a>

                            </div>

                        </div>

                    </div>

                </article>
            @endforeach

        </div>

    </div>

</section>


{{-- testimonial slider --}}
@push('scripts')
    <script>
        $(document).ready(function() {

            const $slides =
                $('.integration-testimonial-slide');

            const $dots =
                $('.testimonial-dot');

            let currentSlide = 0;


            // show testimonial

            function showTestimonial(index) {

                /*
                 * Loop around.
                 */
                if (index < 0) {
                    index = $slides.length - 1;
                }

                if (index >= $slides.length) {
                    index = 0;
                }


                currentSlide = index;


                /*
                 * Hide all slides.
                 */
                $slides.addClass('hidden');


                /*
                 * Show selected slide.
                 */
                $slides
                    .eq(currentSlide)
                    .removeClass('hidden');


                /*
                 * Reset dots.
                 */
                $dots
                    .removeClass(
                        'w-7 bg-primary-600'
                    )
                    .addClass(
                        'w-2.5 bg-primary-200'
                    );


                /*
                 * Active dot.
                 */
                $dots
                    .eq(currentSlide)
                    .removeClass(
                        'w-2.5 bg-primary-200'
                    )
                    .addClass(
                        'w-7 bg-primary-600'
                    );

            }



            //  previous

            $('#testimonial-prev').on(
                'click',
                function() {

                    showTestimonial(
                        currentSlide - 1
                    );

                }
            );



            //   next

            $('#testimonial-next').on(
                'click',
                function() {

                    showTestimonial(
                        currentSlide + 1
                    );

                }
            );


            // dot navigation
            $dots.on(
                'click',
                function() {

                    const index =
                        Number(
                            $(this)
                            .data('testimonial-dot')
                        );


                    showTestimonial(index);

                }
            );

        });
    </script>
@endpush
