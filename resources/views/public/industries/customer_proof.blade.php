<section class="relative bg-white py-24 sm:py-32">

    @php
        $customerProof = [
            [
                'company' => 'Summit Goods',
                'logo' => 'SG',
                'quote' => 'StockCore gave us one clear view of inventory across warehouses, purchasing, and sales channels. It simplified our operations and helped us move faster with confidence.',
                'name' => 'Emily Carter',
                'role' => 'Operations Manager at Summit Goods',
                'avatar' => 'images/industries/testimonials/emily-carter.webp',
                'image' => 'images/industries/summit-goods.webp',
                'result' => 'Better inventory visibility',
                'case_study' => '#',
            ],
            [
                'company' => 'Northline Retail',
                'logo' => 'NR',
                'quote' => 'We can finally see what is in stock across every location without jumping between spreadsheets and different systems.',
                'name' => 'Daniel Brooks',
                'role' => 'Retail Operations Lead at Northline Retail',
                'avatar' => 'images/industries/testimonials/daniel-brooks.webp',
                'image' => 'images/industries/northline-retail.webp',
                'result' => 'Connected multi-store inventory',
                'case_study' => '#',
            ],
            [
                'company' => 'Harvest Foods',
                'logo' => 'HF',
                'quote' => 'StockCore made our day-to-day inventory control much easier. Our team can track stock movements and act on issues much faster.',
                'name' => 'Sophie Martin',
                'role' => 'Supply Chain Manager at Harvest Foods',
                'avatar' => 'images/industries/testimonials/sophie-martin.webp',
                'image' => 'images/industries/harvest-foods.webp',
                'result' => 'Faster stock control',
                'case_study' => '#',
            ],
            [
                'company' => 'Atlas Distribution',
                'logo' => 'AD',
                'quote' => 'Managing stock across multiple warehouses is much simpler now. Our teams work from the same information and mistakes have dropped significantly.',
                'name' => 'Michael Turner',
                'role' => 'Warehouse Director at Atlas Distribution',
                'avatar' => 'images/industries/testimonials/michael-turner.webp',
                'image' => 'images/industries/atlas-distribution.webp',
                'result' => 'Improved warehouse accuracy',
                'case_study' => '#',
            ],
            [
                'company' => 'Coastal Imports',
                'logo' => 'CI',
                'quote' => 'StockCore gives us better control over incoming shipments, supplier orders and available inventory without relying on manual tracking.',
                'name' => 'Rachel Evans',
                'role' => 'Import Operations Manager at Coastal Imports',
                'avatar' => 'images/industries/testimonials/rachel-evans.webp',
                'image' => 'images/industries/coastal-imports.webp',
                'result' => 'Clearer incoming stock control',
                'case_study' => '#',
            ],
        ];
    @endphp


    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- ========================================================= --}}
        {{-- HEADER --}}
        {{-- ========================================================= --}}

        <div class="mx-auto mb-14 max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full bg-primary-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.18em] text-primary-600"
            >
                <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>

                Customer stories
            </span>

            <h2 class="mt-5 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">

                Trusted by teams that

                <span
                    class="bg-gradient-to-r from-primary-600 to-indigo-600 bg-clip-text text-transparent"
                >
                    rely on inventory every day.
                </span>

            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-slate-500">

                See how businesses use StockCore to simplify inventory,
                improve visibility and run their operations with more confidence.

            </p>

        </div>



        {{-- ========================================================= --}}
        {{-- CAROUSEL --}}
        {{-- ========================================================= --}}

        <div
            id="customer-proof-slider"
            class="relative overflow-hidden rounded-[2rem]"
            
        >

            <div
                id="customer-proof-track"
                class="flex"
            >

                @foreach ($customerProof as $index => $story)

                    <div
                        class="customer-proof-slide w-full shrink-0 hover:cursor-pointer"
                        data-slide="{{ $index }}"
                        
                    >

                        <div
                            class="grid min-h-[440px] overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-[0_30px_80px_-30px_rgba(15,23,42,.22)] lg:grid-cols-2"
                        >

                            {{-- ================================================= --}}
                            {{-- LEFT SIDE --}}
                            {{-- ================================================= --}}

                            <div
                                class="relative flex min-h-[440px] flex-col justify-between overflow-hidden bg-gradient-to-br bg-primary-200 p-8 sm:p-10 lg:p-14 "
                            >

                                {{-- ambient decoration --}}
                                <div
                                    class="pointer-events-none absolute -left-20 -top-20 h-64 w-64 rounded-full bg-primary-200 blur-[90px]"
                                ></div>

                                <div
                                    class="pointer-events-none absolute -bottom-20 right-0 h-64 w-64 rounded-full bg-violet-200 blur-[100px]"
                                ></div>


                                <div class="relative">

                                    {{-- Company --}}
                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-600 text-sm font-bold text-white shadow-lg shadow-primary-600/20"
                                        >
                                            {{ $story['logo'] }}
                                        </div>

                                        <div>

                                            <p class="text-lg font-bold leading-tight text-slate-900">
                                                {{ $story['company'] }}
                                            </p>

                                            <p class="text-xs text-slate-500">
                                                StockCore customer
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Quote mark --}}
                                    <div
                                        class="mt-7 text-4xl font-bold leading-none text-primary-300"
                                    >
                                        “
                                    </div>


                                    {{-- Quote --}}
                                    <blockquote
                                        class="-mt-2 min-h-[140px] max-w-xl text-2xl font-semibold leading-[1.45] tracking-tight text-slate-900 sm:text-3xl"
                                    >
                                        {{ $story['quote'] }}
                                    </blockquote>


                                    {{-- Person --}}
                                    <div class="mt-6 flex items-center gap-4">

                                        <img
                                            src="{{ asset($story['avatar']) }}"
                                            alt="{{ $story['name'] }}"
                                            class="h-12 w-12 rounded-full object-cover ring-2 ring-white shadow-sm"
                                        >

                                        <div>

                                            <p class="text-sm font-semibold text-slate-900">
                                                {{ $story['name'] }}
                                            </p>

                                            <p class="mt-0.5 text-xs text-slate-500">
                                                {{ $story['role'] }}
                                            </p>

                                        </div>

                                    </div>

                                </div>


                                {{-- Case Study --}}
                                <div class="relative mt-6">

                                    <a
                                        href="{{ $story['case_study'] }}"
                                        class="group inline-flex items-center gap-2 text-sm font-semibold text-primary-600 transition hover:text-primary-700"
                                    >

                                        View case study

                                        <svg
                                            class="h-4 w-4 transition duration-300 group-hover:translate-x-1"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="1.8"
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



                            {{-- ================================================= --}}
                            {{-- RIGHT IMAGE --}}
                            {{-- ================================================= --}}

                            <div class="relative min-h-[440px]">

                                <img
                                    src="{{ asset($story['image']) }}"
                                    alt="{{ $story['company'] }}"
                                    class="absolute inset-0 h-full w-full object-cover"
                                >


                                {{-- image gradient --}}
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-slate-950/30 via-transparent to-transparent"
                                ></div>


                                {{-- Result --}}
                                <div
                                    class="absolute bottom-6 left-6 right-6 rounded-2xl border border-white/20 bg-white/90 p-4 shadow-xl backdrop-blur-xl sm:left-auto sm:right-6 sm:w-64"
                                >

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-50"
                                        >

                                            <svg
                                                class="h-4 w-4 text-emerald-600"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M5 13l4 4L19 7"
                                                />
                                            </svg>

                                        </div>

                                        <div>

                                            <p
                                                class="text-[10px] uppercase tracking-wider text-slate-400"
                                            >
                                                Result
                                            </p>

                                            <p class="text-sm font-semibold text-slate-900">
                                                {{ $story['result'] }}
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>



        {{-- ========================================================= --}}
        {{-- CONTROLS --}}
        {{-- ========================================================= --}}

        <div class="mt-8 flex items-center justify-center gap-5">

            {{-- Previous --}}
            <button
                id="customer-proof-prev"
                type="button"
                class="group flex h-12 w-12 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-500 shadow-sm transition duration-300 hover:border-primary-400 hover:bg-primary-200 hover:text-primary-600 hover:shadow-md hover:cursor-pointer"
                aria-label="Previous customer story"
            >

                <svg
                    class="h-5 w-5 transition duration-300 group-hover:-translate-x-0.5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 19l-7-7 7-7"
                    />
                </svg>

            </button>



            {{-- Indicators --}}
            <div class="flex items-center gap-2">

                @foreach ($customerProof as $index => $story)

                    <span
                        class="customer-proof-indicator h-1.5 rounded-full transition-all duration-300
                        {{ $index === 0
                            ? 'w-8 bg-primary-500'
                            : 'w-1.5 bg-slate-200' }}"
                    ></span>

                @endforeach

            </div>



            {{-- Next --}}
            <button
                id="customer-proof-next"
                type="button"
                class="group flex h-12 w-12 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-500 shadow-sm transition duration-300 hover:border-primary-400 hover:bg-primary-200 hover:text-primary-600 hover:shadow-md hover:cursor-pointer"
                aria-label="Next customer story"
            >

                <svg
                    class="h-5 w-5 transition duration-300 group-hover:translate-x-0.5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 5l7 7-7 7"
                    />
                </svg>

            </button>

        </div>

    </div>



    {{-- ========================================================= --}}
    {{-- CAROUSEL CSS --}}
    {{-- ========================================================= --}}

    <style>

        #customer-proof-track {
            transform: translateX(0);
            transition:
                transform 700ms cubic-bezier(.22, 1, .36, 1);
            will-change: transform;
        }

        .customer-proof-slide {
            flex: 0 0 100%;
            width: 100%;
        }

    </style>



    {{-- ========================================================= --}}
    {{-- JQUERY --}}
    {{-- ========================================================= --}}

    <script>
        $(document).ready(function () {

            const $track = $('#customer-proof-track');
            const $slides = $('.customer-proof-slide');
            const $indicators = $('.customer-proof-indicator');

            const totalSlides = $slides.length;

            let currentSlide = 0;
            let isSliding = false;


            function updateIndicators() {

                $indicators
                    .removeClass('w-8 bg-primary-500')
                    .addClass('w-1.5 bg-slate-200');


                $indicators
                    .eq(currentSlide)
                    .removeClass('w-1.5 bg-slate-200')
                    .addClass('w-8 bg-primary-500');

            }


            function goToSlide(index) {

                if (isSliding) {
                    return;
                }

                isSliding = true;

                currentSlide = index;

                const position = -(currentSlide * 100);

                $track.css(
                    'transform',
                    'translateX(' + position + '%)'
                );

                updateIndicators();


                setTimeout(function () {

                    isSliding = false;

                }, 400);

            }



            {{-- NEXT --}}
            $('#customer-proof-next').on('click', function (e) {

                e.preventDefault();

                let nextSlide = currentSlide + 1;

                if (nextSlide >= totalSlides) {
                    nextSlide = 0;
                }

                goToSlide(nextSlide);

            });



            {{-- PREVIOUS --}}
            $('#customer-proof-prev').on('click', function (e) {

                e.preventDefault();

                let previousSlide = currentSlide - 1;

                if (previousSlide < 0) {
                    previousSlide = totalSlides - 1;
                }

                goToSlide(previousSlide);

            });

        });
    </script>

</section>