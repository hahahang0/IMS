{{-- supported integrations grid --}}

@php

    $integrations = [
        [
            'name' => 'Xero',
            'slug' => 'xero',

            'logo' => 'images/integrations/xero.svg',

            'category' => 'accounting',
            'category_label' => 'Accounting',

            'subtitle' => 'Automated Financial & Stock Accounting',

            'description' => 'Sync invoices, bills, contacts, COGS and inventory valuations directly with Xero.',

            'tags' => ['Invoices & Bills', 'COGS', 'Stock Value'],

            'status' => '2-Way Live Sync',
        ],

        [
            'name' => 'Cin7',
            'slug' => 'cin7',

            'logo' => 'images/integrations/cin7.svg',

            'category' => 'erp',
            'category_label' => 'ERP & Inventory',

            'subtitle' => 'Multi-Channel Inventory Management',

            'description' =>
                'Sync sales orders, stock levels, products and purchase orders between StockCore and Cin7 in real time.',

            'tags' => ['Orders', 'Stock Levels', 'Products'],

            'status' => 'Direct API Bridge',
        ],

        [
            'name' => 'Shopify',
            'slug' => 'shopify',

            'logo' => 'images/integrations/shopify.svg',

            'category' => 'ecommerce',
            'category_label' => 'E-Commerce',

            'subtitle' => 'E-Commerce Inventory Sync',

            'description' =>
                'Sync orders, products and inventory in real time. Keep stock levels accurate across your online store.',

            'tags' => ['Orders', 'Products', 'Inventory'],

            'status' => 'Real-Time Sync',
        ],

        [
            'name' => 'WooCommerce',
            'slug' => 'woocommerce',

            'logo' => 'images/integrations/woocommerce.svg',

            'category' => 'ecommerce',
            'category_label' => 'E-Commerce',

            'subtitle' => 'WordPress E-Commerce Sync',

            'description' => 'Sync orders, customers and stock levels between WooCommerce and StockCore.',

            'tags' => ['Orders', 'Customers', 'Stock'],

            'status' => 'Real-Time Sync',
        ],

        [
            'name' => 'MYOB',
            'slug' => 'myob',

            'logo' => 'images/integrations/myob.svg',

            'category' => 'accounting',
            'category_label' => 'Accounting',

            'subtitle' => 'Australian Accounting Integration',

            'description' =>
                'Sync sales, purchases and inventory data with MYOB while keeping financial and stock information aligned.',

            'tags' => ['Sales', 'Purchases', 'Inventory'],

            'status' => '2-Way Sync',
        ],

        [
            'name' => 'Unleashed',
            'slug' => 'unleashed',

            'logo' => 'images/integrations/unleashed.svg',

            'category' => 'erp',
            'category_label' => 'ERP & Inventory',

            'subtitle' => 'Inventory & Purchasing',

            'description' => 'Sync stock, purchase orders and manufacturing information with Unleashed.',

            'tags' => ['Stock', 'Purchase Orders', 'BOM'],

            'status' => 'Direct API Bridge',
        ],

        [
            'name' => 'QuickBooks',
            'slug' => 'quickbooks',

            'logo' => 'images/integrations/quickbooks.svg',

            'category' => 'accounting',
            'category_label' => 'Accounting',

            'subtitle' => 'Global Accounting Integration',

            'description' => 'Sync invoices, expenses and inventory value with QuickBooks Online.',

            'tags' => ['Invoices', 'Expenses', 'Inventory'],

            'status' => '2-Way Sync',
        ],

        [
            'name' => 'Square',
            'slug' => 'square',

            'logo' => 'images/integrations/square.svg',

            'category' => 'pos',
            'category_label' => 'Point of Sale',

            'subtitle' => 'Retail & In-Store Sync',

            'description' => 'Sync sales, products and stock levels from your Square POS directly into StockCore.',

            'tags' => ['Sales', 'Products', 'Inventory'],

            'status' => 'Real-Time Sync',
        ],

        [
            'name' => 'Amazon',
            'slug' => 'amazon',

            'logo' => 'images/integrations/amazon.svg',

            'category' => 'ecommerce',
            'category_label' => 'Marketplace',

            'subtitle' => 'Marketplace & FBA Sync',

            'description' => 'Sync orders, products and inventory levels from Amazon, including FBA stock counts.',

            'tags' => ['Orders', 'Products', 'FBA Inventory'],

            'status' => 'Scheduled Sync',
        ],
    ];

@endphp



<section id="supported-integrations"
    class="relative overflow-hidden
           bg-background-muted
           py-20
           sm:py-24
           lg:py-28">

    {{-- background --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- top right circle --}}
        <div
            class="absolute
                   -right-[220px] -top-[260px]
                   h-[500px] w-[500px]
                   rounded-full
                   bg-primary-50/70">
        </div>


        {{-- bottom left curve --}}
        <div
            class="absolute
                   -bottom-[350px] -left-[280px]
                   h-[650px] w-[650px]
                   rounded-full
                   border-[90px]
                   border-primary-50/70">
        </div>


        {{-- center glow --}}
        <div
            class="absolute
                   left-1/2 top-[40%]
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

        {{-- section header --}}
        <div class="mx-auto
                   max-w-3xl
                   text-center">

            <div
                class="inline-flex items-center gap-2
                       rounded-full
                       bg-primary-50
                       px-4 py-2
                       text-[11px]
                       font-bold uppercase
                       tracking-[0.08em]
                       text-primary-600">

                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 13a5 5 0 0 0 7.07 0l2.12-2.12a5 5 0 0 0-7.07-7.07L11 4.93" />

                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14 11a5 5 0 0 0-7.07 0L4.8 13.12a5 5 0 0 0 7.07 7.07L13 19.07" />
                </svg>

                Supported Integrations

            </div>


            <h2
                class="mt-5
                       text-4xl
                       font-extrabold
                       tracking-[-0.045em]
                       text-secondary-950
                       sm:text-5xl">
                Integrations built for

                <span class="text-primary-600">
                    how you work.
                </span>
            </h2>


            <p
                class="mx-auto mt-5
                       max-w-2xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg">
                Connect StockCore with the platforms you already use
                and keep inventory, sales, accounting and operations
                in sync.
            </p>

        </div>



        {{-- result count --}}
        <div class="mt-12
                   flex items-center justify-between">

            <p class="text-sm
                       text-secondary-500">
                Showing

                <span id="integration-visible-count" class="font-semibold text-secondary-800">
                    {{ count($integrations) }}
                </span>

                of

                <span id="integration-total-count" class="font-semibold text-secondary-800">
                    {{ count($integrations) }}
                </span>

                integrations
            </p>


            <button id="integration-clear-filter" type="button"
                class="hidden
                       text-sm font-semibold
                       text-primary-600
                       transition
                       hover:text-primary-700">
                Clear filters
            </button>

        </div>



        {{-- integration grid --}}
        <div id="integration-grid"
            class="mt-6
                   grid gap-5
                   md:grid-cols-2
                   xl:grid-cols-3">

            @foreach ($integrations as $integration)
                @php

                    $searchText = strtolower(
                        $integration['name'] .
                            ' ' .
                            $integration['category_label'] .
                            ' ' .
                            $integration['subtitle'] .
                            ' ' .
                            $integration['description'] .
                            ' ' .
                            implode(' ', $integration['tags']),
                    );

                @endphp


                <article
                    class="integration-card
                           group
                           flex min-h-[330px]
                           flex-col
                           rounded-[20px]
                           border border-secondary-200
                           bg-white
                           p-6
                           shadow-[0_12px_35px_rgba(15,23,42,0.045)]
                           transition-all duration-300
                           hover:-translate-y-1
                           hover:border-primary-200
                           hover:shadow-[0_18px_45px_rgba(15,23,42,0.08)]"
                    data-category="{{ $integration['category'] }}" data-search="{{ $searchText }}">


                    {{-- top --}}
                    <div
                        class="flex
                               items-start justify-between
                               gap-4">

                        {{-- REAL LOGO --}}
                        <div
                            class="flex h-[62px]
                                   max-w-[165px]
                                   items-center">

                            <img src="{{ asset($integration['logo']) }}" alt="{{ $integration['name'] }} logo"
                                class="max-h-[52px]
                                       max-w-[155px]
                                       object-contain"
                                loading="lazy">

                        </div>



                        {{-- CATEGORY BADGE --}}
                        <span
                            class="shrink-0
                                   rounded-full
                                   px-3 py-1.5
                                   text-[11px]
                                   font-semibold

                                   {{ $integration['category'] === 'accounting' ? 'bg-blue-50 text-blue-600' : '' }}

                                   {{ $integration['category'] === 'erp' ? 'bg-violet-50 text-violet-600' : '' }}

                                   {{ $integration['category'] === 'ecommerce' ? 'bg-emerald-50 text-emerald-600' : '' }}

                                   {{ $integration['category'] === 'pos' ? 'bg-orange-50 text-orange-600' : '' }}

                                   {{ $integration['category'] === 'shipping' ? 'bg-rose-50 text-rose-600' : '' }}">

                            {{ $integration['category_label'] }}

                        </span>

                    </div>



                    {{-- title --}}
                    <h3
                        class="mt-5
                               text-xl font-bold
                               tracking-[-0.025em]
                               text-secondary-950">
                        {{ $integration['name'] }}
                    </h3>



                    {{-- SUBTITLE --}}
                    <p
                        class="mt-1
                               text-[13px]
                               font-medium
                               text-primary-600">
                        {{ $integration['subtitle'] }}
                    </p>



                    {{-- DESCRIPTION --}}
                    <p
                        class="mt-4
                               text-[14px]
                               leading-6
                               text-secondary-600">
                        {{ $integration['description'] }}
                    </p>



                    {{-- tags --}}
                    <div
                        class="mt-5
                               flex flex-wrap
                               gap-2">

                        @foreach ($integration['tags'] as $tag)
                            <span
                                class="rounded-lg
                                       bg-secondary-50
                                       px-3 py-1.5
                                       text-[11px]
                                       font-medium
                                       text-secondary-600">
                                {{ $tag }}
                            </span>
                        @endforeach

                    </div>



                    {{-- Spacer --}}
                    <div class="flex-1"></div>



                    {{-- bottom --}}
                    <div
                        class="mt-6
                               flex items-center justify-between
                               border-t border-secondary-100
                               pt-4">

                        {{-- Sync status --}}
                        <div
                            class="flex items-center gap-2
                                   text-[12px]
                                   font-semibold
                                   text-emerald-600">

                            <span
                                class="h-2 w-2
                                       rounded-full
                                       bg-emerald-500"></span>

                            {{ $integration['status'] }}

                        </div>


                        {{-- Details --}}
                        {{-- <a
                            href="{{ url('/integrations/' . $integration['slug']) }}"
                            class="group/link
                                   inline-flex items-center gap-1.5
                                   text-[13px]
                                   font-semibold
                                   text-primary-600
                                   transition
                                   hover:text-primary-700"
                        >

                            Details


                            <svg
                                class="h-4 w-4
                                       transition-transform
                                       duration-200
                                       group-hover/link:translate-x-1"
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

                        </a> --}}




                        @if (config('features.integration_details'))
                            <a href="{{ url('/integrations/' . $integration['slug']) }}" class="...">
                                Details
                            </a>
                        @else
                            <span
                                class="inline-flex items-center gap-2
               text-sm font-semibold
               text-secondary-400
               cursor-default">
                                Details
                            </span>
                        @endif

                    </div>

                </article>
            @endforeach

        </div>


        {{-- no results --}}
        <div id="integration-no-results"
            class="mt-8 hidden
                   rounded-2xl
                   border border-secondary-200
                   bg-white
                   px-6 py-14
                   text-center">

            <div
                class="mx-auto
                       flex h-14 w-14
                       items-center justify-center
                       rounded-full
                       bg-primary-50
                       text-primary-600">

                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">

                    <circle cx="11" cy="11" r="7" />

                    <path d="m20 20-3.5-3.5" />

                </svg>

            </div>


            <h3 class="mt-5
                       text-lg font-bold
                       text-secondary-950">
                No integrations found
            </h3>


            <p
                class="mx-auto mt-2
                       max-w-md
                       text-sm leading-6
                       text-secondary-500">
                Try another search term or select a different category.
            </p>

        </div>



        {{-- custom integration cta --}}
        <div
            class="relative mt-12
                   overflow-hidden
                   rounded-[26px]
                   border border-primary-100
                   bg-gradient-to-r
                   from-primary-50
                   via-white
                   to-primary-50
                   px-7 py-9
                   sm:px-10
                   lg:px-12">

            {{-- decorations --}}
            <div class="pointer-events-none absolute inset-0" aria-hidden="true">

                <div
                    class="absolute
                           -right-[150px] -top-[180px]
                           h-[400px] w-[400px]
                           rounded-full
                           bg-primary-100/40">
                </div>


                <div
                    class="absolute
                           bottom-8 right-[22%]
                           hidden grid-cols-5 gap-2
                           opacity-30
                           lg:grid">

                    @for ($i = 0; $i < 20; $i++)
                        <span
                            class="h-1.5 w-1.5
                                   rounded-full
                                   bg-primary-300"></span>
                    @endfor

                </div>

            </div>



            <div
                class="relative z-10
                       flex flex-col gap-8
                       lg:flex-row
                       lg:items-center
                       lg:justify-between">

                {{-- LEFT --}}
                <div class="max-w-2xl">

                    <div
                        class="inline-flex
                               items-center gap-2
                               rounded-full
                               bg-primary-100/70
                               px-3 py-1.5
                               text-[11px]
                               font-bold uppercase
                               tracking-[0.06em]
                               text-primary-600">

                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" d="M12 5v14M5 12h14" />
                        </svg>

                        Custom Integrations

                    </div>


                    <h3
                        class="mt-5
                               text-3xl font-extrabold
                               tracking-[-0.035em]
                               text-secondary-950
                               sm:text-4xl">
                        Don’t see

                        <span class="text-primary-600">
                            your platform?
                        </span>
                    </h3>


                    <p
                        class="mt-4
                               max-w-xl
                               text-sm leading-7
                               text-secondary-600
                               sm:text-base">
                        We’re always looking to add new integrations.
                        If you'd like to connect StockCore with a platform
                        that isn't listed, let us know.
                    </p>


                    <a href="{{ url('/contact') }}"
                        class="group mt-6
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

                        Request an integration

                        <svg class="h-4 w-4
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>

                    </a>

                </div>



                {{-- RIGHT DECORATIVE APP STACK --}}
                <div
                    class="relative hidden
                           h-[180px] w-[320px]
                           shrink-0
                           lg:block">

                    {{-- plus --}}
                    <div
                        class="absolute left-1/2 top-1/2
                               flex h-16 w-16
                               -translate-x-1/2
                               -translate-y-1/2
                               items-center justify-center
                               rounded-2xl
                               bg-primary-600
                               text-white
                               shadow-[0_14px_30px_rgba(37,99,235,0.25)]">
                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" d="M12 5v14M5 12h14" />
                        </svg>
                    </div>


                    {{-- floating card 1 --}}
                    <div
                        class="absolute left-7 top-3
                               flex h-14 w-14
                               rotate-[-8deg]
                               items-center justify-center
                               rounded-xl
                               border border-secondary-100
                               bg-white
                               shadow-md">
                        <span class="text-xl font-extrabold
                                   text-secondary-700">
                            API
                        </span>
                    </div>


                    {{-- floating card 2 --}}
                    <div
                        class="absolute right-8 top-5
                               flex h-14 w-14
                               rotate-[8deg]
                               items-center justify-center
                               rounded-xl
                               border border-secondary-100
                               bg-white
                               text-primary-600
                               shadow-md">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 13a5 5 0 0 0 7.07 0l2.12-2.12a5 5 0 0 0-7.07-7.07L11 4.93" />

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14 11a5 5 0 0 0-7.07 0L4.8 13.12a5 5 0 0 0 7.07 7.07L13 19.07" />
                        </svg>
                    </div>


                    {{-- floating card 3 --}}
                    <div
                        class="absolute bottom-3 left-[55px]
                               flex h-14 w-14
                               rotate-[7deg]
                               items-center justify-center
                               rounded-xl
                               border border-secondary-100
                               bg-white
                               text-emerald-600
                               shadow-md">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 12h16M12 4v16" />
                        </svg>
                    </div>


                    {{-- floating card 4 --}}
                    <div
                        class="absolute bottom-5 right-[45px]
                               flex h-14 w-14
                               rotate-[-6deg]
                               items-center justify-center
                               rounded-xl
                               border border-secondary-100
                               bg-white
                               text-violet-600
                               shadow-md">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="4" y="4" width="16" height="16" rx="4" />

                            <path d="M8 12h8" />
                        </svg>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- integration filterations --}}


<script>
    $(document).ready(function() {

        let integrationCategory = 'all';

        let integrationSearch = '';

        const $cards =
            $('.integration-card');


        /*
        |--------------------------------------------------------------------------
        | FILTER FUNCTION
        |--------------------------------------------------------------------------
        */

        function filterIntegrations() {

            let visibleCount = 0;


            $cards.each(function() {

                const $card = $(this);

                const category =
                    String(
                        $card.data('category')
                    );


                const searchableText =
                    String(
                        $card.data('search')
                    ).toLowerCase();


                const categoryMatches =
                    integrationCategory === 'all' ||
                    category === integrationCategory;


                const searchMatches =
                    integrationSearch === '' ||
                    searchableText.includes(
                        integrationSearch
                    );


                if (
                    categoryMatches &&
                    searchMatches
                ) {

                    $card.removeClass('hidden');

                    visibleCount++;

                } else {

                    $card.addClass('hidden');

                }

            });



            /*
            |--------------------------------------------------------------------------
            | COUNT
            |--------------------------------------------------------------------------
            */

            $('#integration-visible-count')
                .text(visibleCount);


            $('#integration-total-count')
                .text($cards.length);



            /*
            |--------------------------------------------------------------------------
            | NO RESULTS
            |--------------------------------------------------------------------------
            */

            if (visibleCount === 0) {

                $('#integration-no-results')
                    .removeClass('hidden');

            } else {

                $('#integration-no-results')
                    .addClass('hidden');

            }



            /*
            |--------------------------------------------------------------------------
            | CLEAR FILTER
            |--------------------------------------------------------------------------
            */

            if (
                integrationCategory !== 'all' ||
                integrationSearch !== ''
            ) {

                $('#integration-clear-filter')
                    .removeClass('hidden');

            } else {

                $('#integration-clear-filter')
                    .addClass('hidden');

            }

        }



        /*
        |--------------------------------------------------------------------------
        | CATEGORY EVENT FROM HERO
        |--------------------------------------------------------------------------
        */

        $(document).on(
            'stockcore:integration-category',
            function(event, category) {

                integrationCategory =
                    category;

                filterIntegrations();

            }
        );



        /*
        |--------------------------------------------------------------------------
        | SEARCH EVENT FROM HERO
        |--------------------------------------------------------------------------
        */

        $(document).on(
            'stockcore:integration-search',
            function(event, searchTerm) {

                integrationSearch =
                    searchTerm;

                filterIntegrations();

            }
        );



        /*
        |--------------------------------------------------------------------------
        | CLEAR FILTERS
        |--------------------------------------------------------------------------
        */

        $('#integration-clear-filter')
            .on('click', function() {

                integrationCategory = 'all';

                integrationSearch = '';


                /*
                 * Clear search field.
                 */
                $('#integration-search')
                    .val('');


                /*
                 * Reset category buttons.
                 */
                $('.integration-category')
                    .removeClass(
                        'is-active border-primary-600 bg-primary-600 text-white shadow-[0_8px_20px_rgba(37,99,235,0.20)]'
                    )
                    .addClass(
                        'border-secondary-200 bg-white text-secondary-700'
                    );


                /*
                 * Select All Platforms
                 */
                $('.integration-category[data-integration-category="all"]')
                    .removeClass(
                        'border-secondary-200 bg-white text-secondary-700'
                    )
                    .addClass(
                        'is-active border-primary-600 bg-primary-600 text-white shadow-[0_8px_20px_rgba(37,99,235,0.20)]'
                    );


                filterIntegrations();

            });



        /*
        |--------------------------------------------------------------------------
        | INITIAL COUNT
        |--------------------------------------------------------------------------
        */

        $('#integration-visible-count')
            .text($cards.length);

        $('#integration-total-count')
            .text($cards.length);

    });
</script>
