<section class="relative overflow-hidden bg-primary-950 py-24">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">


        {{--  SECTION HEADER --}}
        <div class="mb-12 max-w-3xl">

            <div class="mb-5 flex items-center gap-3">

                <span class="h-px w-8 bg-primary-400"></span>

                <span class="text-sm font-semibold uppercase tracking-[0.18em] text-primary-400">
                    Use Cases
                </span>

            </div>

            <h2 class="text-4xl font-bold leading-[1.08] tracking-tight text-white sm:text-5xl">

                StockCore adapts

                <span class="block bg-gradient-to-r from-primary-400 to-slate-400 bg-clip-text text-transparent">
                    to the way you work
                </span>

            </h2>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-secondary-400">

                Powerful inventory control for every type of business.
                Choose your industry to see how it fits.

            </p>

        </div>


        {{--  USE CASE TABS --}}

        <div id="use-case-tabs"
            class="relative mb-6 grid grid-cols-2 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-[0_10px_40px_rgba(15,23,42,0.06)] sm:grid-cols-4">

            {{-- ACTIVE INDICATOR --}}

            <div id="use-case-indicator"
                class="pointer-events-none absolute bottom-0 left-0 z-10 h-[3px] rounded-full bg-primary-600 transition-all duration-300"
                style="width: 25%;">
            </div>


            {{-- TAB 1 --}}

            <button type="button" data-use-case="multi-channel" data-index="0"
                class="use-case-tab group relative flex min-h-[130px] flex-col items-center justify-center gap-3 border-b border-r border-slate-200 px-4 py-6 transition-all duration-300 sm:border-b-0">

                <span
                    class="tab-icon flex h-11 w-11 items-center justify-center rounded-xl transition-all duration-300">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="M3 4h18l-2 9H5L3 4Z" />
                        <path d="M5 13v2a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2" />
                        <circle cx="8" cy="20" r="1" />
                        <circle cx="17" cy="20" r="1" />
                    </svg>

                </span>

                <span class="tab-title text-center text-sm font-semibold leading-5">
                    Multi-channel<br>
                    brands
                </span>

            </button>


            {{-- TAB 2 --}}

            <button type="button" data-use-case="manufacturers" data-index="1"
                class="use-case-tab group relative flex min-h-[130px] flex-col items-center justify-center gap-3 border-b border-r border-slate-200 px-4 py-6 transition-all duration-300 sm:border-b-0">

                <span
                    class="tab-icon flex h-11 w-11 items-center justify-center rounded-xl transition-all duration-300">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="M3 21V8l7-4v17" />
                        <path d="M10 21V12l5-3v12" />
                        <path d="M15 21V5l6 3v13" />
                        <path d="M6 11h1M6 15h1M12 14h1M12 18h1M18 11h1M18 15h1" />
                    </svg>

                </span>

                <span class="tab-title text-center text-sm font-semibold leading-5">
                    Manufacturers
                </span>

            </button>


            {{-- TAB 3 --}}

            <button type="button" data-use-case="hybrid" data-index="2"
                class="use-case-tab group relative flex min-h-[130px] flex-col items-center justify-center gap-3 border-b border-r border-slate-200 px-4 py-6 transition-all duration-300 sm:border-b-0">

                <span
                    class="tab-icon flex h-11 w-11 items-center justify-center rounded-xl transition-all duration-300">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="m12 3 9 5-9 5-9-5 9-5Z" />
                        <path d="m3 12 9 5 9-5" />
                        <path d="m3 16 9 5 9-5" />
                    </svg>

                </span>

                <span class="tab-title text-center text-sm font-semibold leading-5">
                    Hybrid product<br>
                    businesses
                </span>

            </button>


            {{-- TAB 4 --}}

            <button type="button" data-use-case="regulated" data-index="3"
                class="use-case-tab group relative flex min-h-[130px] flex-col items-center justify-center gap-3 px-4 py-6 transition-all duration-300">

                <span
                    class="tab-icon flex h-11 w-11 items-center justify-center rounded-xl transition-all duration-300">

                    <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path d="M12 3 20 6v5c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-3Z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>

                </span>

                <span class="tab-title text-center text-sm font-semibold leading-5">
                    Regulated product<br>
                    industries
                </span>

            </button>

        </div>


        {{-- MAIN USE CASE PANEL --}}
        <div
            class="relative min-h-[620px] overflow-hidden rounded-[30px] border border-slate-200 bg-slate-50 shadow-[0_20px_70px_rgba(15,23,42,0.08)]">

            {{-- BACKGROUND IMAGE --}}

            <div class="absolute inset-y-0 right-0 hidden w-[48%] lg:block">

                <img id="use-case-image" src="{{ asset('images/use-cases/multi-channel.jpg') }}"
                    alt="Multi-channel inventory management"
                    class="h-full w-full object-cover object-center transition-opacity duration-300">

            </div>


            {{-- LEFT CONTENT --}}

            <div class="relative z-20 flex min-h-[560px] w-full items-center px-8 py-14 sm:px-12 lg:w-[50%] lg:px-10">

                <div>

                    {{-- Small icon --}}

                    <div
                        class="mb-7 flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-primary-600 shadow-sm">

                        <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path d="M4 7h16M6 7l1 12h10l1-12" />
                            <path d="M9 7V5a3 3 0 0 1 6 0v2" />
                        </svg>

                    </div>


                    {{-- TITLE --}}

                    <h3 id="use-case-title"
                        class="max-w-xl text-3xl font-bold leading-tight tracking-tight text-slate-950 sm:text-4xl">
                        Get full control over
                        <span class="block">
                            all your sales channels
                        </span>
                    </h3>


                    {{-- DESCRIPTION --}}

                    <p id="use-case-description" class="mt-6 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">
                        Sell across Shopify, Amazon, wholesale, and retail
                        without losing track of stock. StockCore keeps every
                        channel in sync with real-time inventory and order updates.
                    </p>


                    {{-- BULLETS --}}

                    <ul id="use-case-bullets" class="mt-7 space-y-4">

                        <li class="flex items-center gap-3 text-sm text-slate-700">

                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-primary-600">

                                <svg class="h-3 w-3 text-white" fill="none" stroke="currentColor" stroke-width="3"
                                    viewBox="0 0 24 24">
                                    <path d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            Real-time inventory sync across every channel

                        </li>


                        <li class="flex items-center gap-3 text-sm text-slate-700">

                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-primary-600">

                                <svg class="h-3 w-3 text-white" fill="none" stroke="currentColor" stroke-width="3"
                                    viewBox="0 0 24 24">
                                    <path d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            Centralized orders and stock visibility

                        </li>


                        <li class="flex items-center gap-3 text-sm text-slate-700">

                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-primary-600">

                                <svg class="h-3 w-3 text-white" fill="none" stroke="currentColor" stroke-width="3"
                                    viewBox="0 0 24 24">
                                    <path d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            Reduce stockouts and increase sales

                        </li>

                    </ul>


                    {{-- BUTTONS --}}

                    <div class="mt-9 flex flex-wrap items-center gap-6">

                        <a href="#"
                            class="inline-flex items-center gap-3 rounded-xl bg-primary-600 px-5 py-3.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700 hover:shadow-xl">
                            Explore this use case

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M5 12h14" />
                                <path d="m13 6 6 6-6 6" />
                            </svg>

                        </a>


                        <a href="#"
                            class="inline-flex items-center gap-2 text-sm font-semibold text-primary-600 transition hover:gap-3">
                            View all industries

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M5 12h14" />
                                <path d="m13 6 6 6-6 6" />
                            </svg>

                        </a>

                    </div>

                </div>

            </div>


                {{-- glasses shards --}}

            <div id="stat-cards" class="pointer-events-none absolute inset-0 z-30 hidden lg:block">

                {{-- CARD 1 --}}

                <div id="stat-card-one"
                    class="stat-card absolute w-[210px] rounded-[24px] border border-white/70 bg-white/30 p-6 shadow-[0_20px_60px_rgba(15,23,42,0.12)] backdrop-blur-xl transition-all duration-500">

                    <div class="flex items-start justify-between">

                        <div>

                            <p id="stat-one-value" class="text-3xl font-bold tracking-tight text-primary-600">
                                +15%
                            </p>

                            <p id="stat-one-text" class="mt-2 text-sm font-medium leading-5 text-slate-700">
                                increase in<br>
                                sales orders
                            </p>

                        </div>

                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/50 text-primary-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path d="m4 16 5-5 4 3 7-8" />
                                <path d="M14 6h6v6" />
                            </svg>

                        </div>

                    </div>


                    {{-- Mini graph --}}

                    {{-- <div class="mt-5 h-10">

                        <svg class="h-full w-full" viewBox="0 0 180 40" preserveAspectRatio="none">

                            <defs>

                                <linearGradient id="greenGradient" x1="0" x2="0" y1="0"
                                    y2="1">

                                    <stop offset="0%" stop-color="#22c55e" stop-opacity=".25" />

                                    <stop offset="100%" stop-color="#22c55e" stop-opacity="0" />

                                </linearGradient>

                            </defs>

                            <path
                                d="M0 32 L20 26 L35 30 L55 20 L72 23 L90 12 L110 18 L125 8 L145 13 L165 3 L180 8 L180 40 L0 40 Z"
                                fill="url(#greenGradient)" />

                            <path d="M0 32 L20 26 L35 30 L55 20 L72 23 L90 12 L110 18 L125 8 L145 13 L165 3 L180 8"
                                fill="none" stroke="#22c55e" stroke-width="2" />

                        </svg>

                    </div> --}}

                </div>


                {{-- CARD 2 --}}

                <div id="stat-card-two"
                    class="stat-card absolute w-[210px] rounded-[24px] border border-white/70 bg-white/30 p-6 shadow-[0_20px_60px_rgba(15,23,42,0.12)] backdrop-blur-xl transition-all duration-500">

                    <div class="flex items-start justify-between">

                        <div>

                            <p id="stat-two-value" class="text-3xl font-bold tracking-tight text-primary-600">
                                -30%
                            </p>

                            <p id="stat-two-text" class="mt-2 text-sm font-medium leading-5 text-slate-700">
                                stockouts<br>
                                reduced
                            </p>

                        </div>

                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/50 text-primary-600">

                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path d="m4 8 5 5 4-3 7 8" />
                                <path d="M14 18h6v-6" />
                            </svg>

                        </div>

                    </div>


                    {{-- <div class="mt-5 h-10">

                        <svg class="h-full w-full" viewBox="0 0 180 40" preserveAspectRatio="none">

                            <path d="M0 8 L20 15 L35 10 L55 22 L72 18 L90 28 L110 24 L125 34 L145 27 L165 36 L180 32"
                                fill="none" stroke="#3b82f6" stroke-width="2" />

                        </svg>

                    </div> --}}

                </div>

            </div>

        </div>


        {{-- ============================================================
            BOTTOM BENEFITS
        ============================================================= --}}

        <div
            class="mt-5 grid overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-[0_10px_40px_rgba(15,23,42,0.05)] sm:grid-cols-2 lg:grid-cols-4">

            <div class="flex items-center gap-4 border-b border-slate-200 p-6 lg:border-b-0 lg:border-r">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-50 text-primary-600">

                    <span class="text-xl">↻</span>

                </div>

                <div>

                    <h4 class="font-semibold text-slate-900">
                        Unified data
                    </h4>

                    <p class="mt-1 text-sm text-slate-500">
                        One source of truth across your business
                    </p>

                </div>

            </div>


            <div class="flex items-center gap-4 border-b border-slate-200 p-6 lg:border-b-0 lg:border-r">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-50 text-primary-600">

                    <span class="text-xl">ϟ</span>

                </div>

                <div>

                    <h4 class="font-semibold text-slate-900">
                        Work smarter
                    </h4>

                    <p class="mt-1 text-sm text-slate-500">
                        Automate workflows and save valuable time
                    </p>

                </div>

            </div>


            <div class="flex items-center gap-4 border-b border-slate-200 p-6 lg:border-b-0 lg:border-r">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-50 text-primary-600">

                    <span class="text-xl">▥</span>

                </div>

                <div>

                    <h4 class="font-semibold text-slate-900">
                        Make better decisions
                    </h4>

                    <p class="mt-1 text-sm text-slate-500">
                        Real-time insights to grow your business
                    </p>

                </div>

            </div>


            <div class="flex items-center gap-4 p-6">

                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-blue-50 text-primary-600">

                    <span class="text-xl">✓</span>

                </div>

                <div>

                    <h4 class="font-semibold text-slate-900">
                        Stay compliant
                    </h4>

                    <p class="mt-1 text-sm text-slate-500">
                        Built-in controls for accuracy and accountability
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


@push('scripts')
    <script>
        $(document).ready(function() {

            /*
            |--------------------------------------------------------------------------
            | USE CASE DATA
            |--------------------------------------------------------------------------
            */

            const useCases = {

                'multi-channel': {

                    title: `
                    Get full control over
                    <span class="block">
                        all your sales channels
                    </span>
                `,

                    description: `
                    Sell across Shopify, Amazon, wholesale, and retail
                    without losing track of stock. StockCore keeps every
                    channel in sync with real-time inventory and order updates.
                `,

                    bullets: [
                        'Real-time inventory sync across every channel',
                        'Centralized orders and stock visibility',
                        'Reduce stockouts and increase sales'
                    ],

                    statOne: {
                        value: '+15%',
                        text: 'increase in<br>sales orders'
                    },

                    statTwo: {
                        value: '-30%',
                        text: 'stockouts<br>reduced'
                    },
                    image: '/images/use-cases/multi_channel.png',

                },


                'manufacturers': {

                    title: `
                    Take control of your
                    <span class="block">
                        manufacturing inventory
                    </span>
                `,

                    description: `
                    Track raw materials, production stock, finished goods,
                    and warehouse movements from one centralized system.
                `,

                    bullets: [
                        'Track raw materials and finished goods',
                        'Monitor stock throughout production',
                        'Improve warehouse visibility'
                    ],

                    statOne: {
                        value: '+28%',
                        text: 'faster inventory<br>turnover'
                    },

                    statTwo: {
                        value: '-24%',
                        text: 'waste and<br>overstock'
                    },
                    image: '/images/use-cases/manufactures.png',

                },


                'hybrid': {

                    title: `
                    Manage every type of
                    <span class="block">
                        product in one place
                    </span>
                `,

                    description: `
                    Manage physical products, bundles, kits, and different
                    product models from one unified inventory platform.
                `,

                    bullets: [
                        'Manage multiple product types',
                        'Track bundles and product relationships',
                        'Centralize inventory operations'
                    ],

                    statOne: {
                        value: '+22%',
                        text: 'faster order<br>processing'
                    },

                    statTwo: {
                        value: '-35%',
                        text: 'inventory<br>errors'
                    },
                    image: '/images/use-cases/hybrid_product.png',

                },


                'regulated': {

                    title: `
                    Keep regulated products
                    <span class="block">
                        under complete control
                    </span>
                `,

                    description: `
                    Maintain accurate records for products that require
                    serial numbers, expiry dates, traceability, and controls.
                `,

                    bullets: [
                        'Serial and batch-level tracking',
                        'Expiry and compliance controls',
                        'Complete inventory traceability'
                    ],

                    statOne: {
                        value: '+40%',
                        text: 'better inventory<br>traceability'
                    },

                    statTwo: {
                        value: '-45%',
                        text: 'compliance<br>errors'
                    },

                    image: '/images/use-cases/quality_control.png',
                },

            };


            /*  
            |--------------------------------------------------------------------------
            | CARD POSITIONS
            |--------------------------------------------------------------------------
            |
            | Each tab gets a completely different arrangement.
            |
            */

            const cardPositions = {

                'multi-channel': {

                    one: {
                        top: '12%',
                        left: '52%'
                    },

                    two: {
                        top: '48%',
                        left: '52%'
                    }

                },


                'manufacturers': {

                    one: {
                        top: '18%',
                        left: '64%'
                    },

                    two: {
                        top: '55%',
                        left: '58%'
                    }

                },


                'hybrid': {

                    one: {
                        top: '10%',
                        left: '57%'
                    },

                    two: {
                        top: '53%',
                        left: '70%'
                    }

                },


                'regulated': {

                    one: {
                        top: '22%',
                        left: '68%'
                    },

                    two: {
                        top: '58%',
                        left: '60%'
                    }

                }

            };


            /*
            |--------------------------------------------------------------------------
            | INITIAL TAB
            |--------------------------------------------------------------------------
            */

            setActiveTab('multi-channel');


            /*
            |--------------------------------------------------------------------------
            | TAB CLICK
            |--------------------------------------------------------------------------
            */

            $('.use-case-tab').on('click', function() {

                const selectedCase = $(this).data('use-case');

                setActiveTab(selectedCase);

            });


            /*
            |--------------------------------------------------------------------------
            | MAIN FUNCTION
            |--------------------------------------------------------------------------
            */

            function setActiveTab(caseName) {

                const data = useCases[caseName];

                const positions = cardPositions[caseName];

                if (!data) {
                    return;
                }


                /*
            |--------------------------------------------------------------------------
            | ACTIVE TAB
            |--------------------------------------------------------------------------
            */

                $('.use-case-tab')
                    .removeClass('text-blue-600')
                    .addClass('text-slate-500');

                $('.use-case-tab .tab-icon')
                    .removeClass('bg-blue-50 text-blue-600')
                    .addClass('text-slate-500');


                const activeTab = $('.use-case-tab[data-use-case="' + caseName + '"]');


                activeTab
                    .removeClass('text-slate-500')
                    .addClass('text-blue-600');


                activeTab
                    .find('.tab-icon')
                    .removeClass('text-slate-500')
                    .addClass('bg-blue-50 text-blue-600');


                /*
                |--------------------------------------------------------------------------
                | MOVE BLUE INDICATOR
                |--------------------------------------------------------------------------
                */

                const index = parseInt(activeTab.attr('data-index'), 10);
                console.log("index", index)


                $('#use-case-indicator').css({
                    left: `${index * 25}%`
                });

                // IMAGE SECTION 
                $('#use-case-image')
                    .css('opacity', '0');

                setTimeout(function() {

                    $('#use-case-image')
                        .attr('src', data.image)
                        .attr('alt', data.title)
                        .css('opacity', '1');

                }, 200);

                /*
                |--------------------------------------------------------------------------
                | FADE CONTENT
                |--------------------------------------------------------------------------
                */

                $('#use-case-title, #use-case-description, #use-case-bullets')
                    .stop(true, true)
                    .animate({
                        opacity: 0
                    }, 150);


                /*
                |--------------------------------------------------------------------------
                | MOVE GLASS CARDS
                |--------------------------------------------------------------------------
                */

                $('#stat-card-one, #stat-card-two')
                    .css('opacity', '0.2');


                setTimeout(function() {

                    /*
                    | Update text
                    */

                    $('#use-case-title').html(data.title);

                    $('#use-case-description').html(data.description);


                    /*
                    | Update bullets
                    */

                    let bullets = '';

                    $.each(data.bullets, function(index, bullet) {

                        bullets += `

                        <li class="flex items-center gap-3 text-sm text-slate-700">

                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-blue-600">

                                <svg
                                    class="h-3 w-3 text-white"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="3"
                                    viewBox="0 0 24 24"
                                >

                                    <path d="m5 12 4 4L19 6"/>

                                </svg>

                            </span>

                            ${bullet}

                        </li>

                    `;

                    });


                    $('#use-case-bullets').html(bullets);


                    /*
                    | Update cards
                    */

                    $('#stat-one-value').html(data.statOne.value);

                    $('#stat-one-text').html(data.statOne.text);


                    $('#stat-two-value').html(data.statTwo.value);

                    $('#stat-two-text').html(data.statTwo.text);


                    /*
                    |--------------------------------------------------------------------------
                    | MOVE CARD ONE
                    |--------------------------------------------------------------------------
                    */

                    $('#stat-card-one').css({

                        top: positions.one.top,

                        left: positions.one.left

                    });


                    /*
                    |--------------------------------------------------------------------------
                    | MOVE CARD TWO
                    |--------------------------------------------------------------------------
                    */

                    $('#stat-card-two').css({

                        top: positions.two.top,

                        left: positions.two.left

                    });


                    /*
                    |--------------------------------------------------------------------------
                    | SHOW CONTENT
                    |--------------------------------------------------------------------------
                    */

                    $('#use-case-title, #use-case-description, #use-case-bullets')
                        .animate({
                            opacity: 1
                        }, 250);


                    $('#stat-card-one, #stat-card-two')
                        .animate({
                            opacity: 1
                        }, 300);

                }, 160);

            }

        });
    </script>
@endpush
