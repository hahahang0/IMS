{{-- ============================================================
    SUPPORT - CORE FEATURE MODULES
    resources/views/public/support/feature-modules.blade.php
============================================================ --}}

@php

    $featureModules = [

        [
            'number' => '01',
            'key' => 'inventory-stock-control',
            'title' => 'Inventory & Stock Control',
            'description' =>
                'FIFO valuation, stock adjustments, batch/lot tracking & reorder points.',
            'articles' => 14,
            'icon' => 'inventory',
            'url' => '#',
        ],

        [
            'number' => '02',
            'key' => 'order-fulfillment',
            'title' => 'Order Fulfillment',
            'description' =>
                'Pick, pack, ship workflows, barcode scanning, and shipping label generation.',
            'articles' => 10,
            'icon' => 'orders',
            'url' => '#',
        ],

        [
            'number' => '03',
            'key' => 'sales-purchasing',
            'title' => 'Sales & Purchasing',
            'description' =>
                'Purchase orders, supplier management, backorders & quote conversions.',
            'articles' => 12,
            'icon' => 'sales',
            'url' => '#',
        ],

        [
            'number' => '04',
            'key' => 'multi-warehouse',
            'title' => 'Multi-Warehouse',
            'description' =>
                'Inter-warehouse transfers, bin location mapping & stock visibility.',
            'articles' => 8,
            'icon' => 'warehouse',
            'url' => '#',
        ],

        [
            'number' => '05',
            'key' => 'accounting-integrations',
            'title' => 'Accounting Integrations',
            'description' =>
                'Xero, QuickBooks, and MYOB automated ledger mapping & COGS sync.',
            'articles' => 16,
            'icon' => 'sync',
            'url' => '#',
        ],

        [
            'number' => '06',
            'key' => 'multi-channel-sync',
            'title' => 'Multi-Channel Sync',
            'description' =>
                'Shopify, WooCommerce, Amazon & eBay real-time stock level synchronization.',
            'articles' => 11,
            'icon' => 'store',
            'url' => '#',
        ],

        [
            'number' => '07',
            'key' => 'b2b-ecommerce',
            'title' => 'B2B eCommerce Portal',
            'description' =>
                'Wholesale customer portal setup, custom price tiering & online order submission.',
            'articles' => 9,
            'icon' => 'globe',
            'url' => '#',
            'wide' => true,
        ],

    ];

@endphp



<section
    id="support-feature-modules"
    class="relative overflow-hidden
           bg-background-muted
           py-20
           sm:py-24
           lg:py-28"
>

    {{-- =========================================================
        BACKGROUND DECORATION
    ========================================================== --}}
    <div
        class="pointer-events-none absolute inset-0 overflow-hidden"
        aria-hidden="true"
    >

        {{-- top left curve --}}
        <div
            class="absolute
                   -left-[330px] -top-[430px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[95px]
                   border-primary-50/60"
        ></div>


        {{-- bottom right circle --}}
        <div
            class="absolute
                   -right-[360px] -bottom-[350px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[100px]
                   border-primary-50/60"
        ></div>


        {{-- top right dots --}}
        <div
            class="absolute
                   right-[5%] top-[45px]
                   hidden grid-cols-5 gap-3
                   opacity-25
                   lg:grid"
        >

            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"
                ></span>
            @endfor

        </div>


        {{-- bottom left dots --}}
        <div
            class="absolute
                   bottom-[45px] left-[2%]
                   hidden grid-cols-4 gap-3
                   opacity-25
                   lg:grid"
        >

            @for ($i = 0; $i < 16; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"
                ></span>
            @endfor

        </div>

    </div>



    {{-- =========================================================
        CONTENT
    ========================================================== --}}
    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               sm:px-8
               lg:px-8"
    >

        {{-- =====================================================
            HEADER
        ====================================================== --}}
        <div
            class="flex flex-col gap-5
                   lg:flex-row
                   lg:items-end
                   lg:justify-between"
        >

            {{-- LEFT --}}
            <div>

                <p
                    class="text-[11px]
                           font-bold uppercase
                           tracking-[0.12em]
                           text-primary-600"
                >
                    Documentation Categories
                </p>


                <h2
                    class="mt-3
                           text-3xl
                           font-extrabold
                           tracking-[-0.04em]
                           text-secondary-950
                           sm:text-4xl
                           lg:text-[44px]"
                >
                    7 Core Feature Modules
                </h2>

            </div>


            {{-- RIGHT --}}
            <p
                class="max-w-md
                       text-[14px]
                       leading-6
                       text-secondary-500
                       lg:text-right"
            >
                Select a category to view step-by-step guides
            </p>

        </div>



        {{-- =====================================================
            FEATURE GRID
        ====================================================== --}}
        <div
            class="mt-10
                   grid gap-5
                   md:grid-cols-2
                   xl:grid-cols-4"
        >

            @foreach ($featureModules as $feature)

                <article
                    class="group
                           relative
                           flex min-h-[305px]
                           flex-col
                           overflow-hidden
                           rounded-[18px]
                           border border-secondary-200
                           bg-white
                           p-6

                           shadow-[0_8px_25px_rgba(15,23,42,0.035)]

                           transition-all
                           duration-300

                           hover:-translate-y-1
                           hover:border-primary-500
                           hover:shadow-[0_18px_40px_rgba(37,99,235,0.10)]

                           {{ !empty($feature['wide'])
                                ? 'md:col-span-2 xl:col-span-2'
                                : ''
                           }}
                           hover:cursor-pointer"
                >

                    {{-- =================================================
                        ICON
                    ================================================== --}}
                    <div
                        class="flex h-12 w-12
                               items-center justify-center
                               rounded-xl
                               bg-primary-50
                               text-primary-600

                               transition-all
                               duration-300

                               group-hover:bg-primary-600
                               group-hover:text-white
                               group-hover:shadow-[0_10px_25px_rgba(37,99,235,0.22)]"
                    >

                        {{-- INVENTORY --}}
                        @if ($feature['icon'] === 'inventory')

                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m12 3 4 2.4v4.8L12 12.6 8 10.2V5.4L12 3Z"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m6 11 4 2.4v4.8L6 20.6 2 18.2v-4.8L6 11Z"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m18 11 4 2.4v4.8l-4 2.4-4-2.4v-4.8l4-2.4Z"
                                />
                            </svg>

                        @endif



                        {{-- ORDERS --}}
                        @if ($feature['icon'] === 'orders')

                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 4h2l2.3 10h9.9l2-7H7"
                                />

                                <circle cx="9" cy="19" r="1.4" />
                                <circle cx="17" cy="19" r="1.4" />
                            </svg>

                        @endif



                        {{-- SALES --}}
                        @if ($feature['icon'] === 'sales')

                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 3h9l4 4v14H6V3Z"
                                />

                                <path
                                    d="M15 3v5h4"
                                />

                                <path
                                    stroke-linecap="round"
                                    d="M9 12h6M9 16h6"
                                />
                            </svg>

                        @endif



                        {{-- WAREHOUSE --}}
                        @if ($feature['icon'] === 'warehouse')

                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linejoin="round"
                                    d="M3 10 12 4l9 6v10H3V10Z"
                                />

                                <path d="M7 12h10v8H7z" />

                                <path d="M10 12v8M14 12v8" />
                            </svg>

                        @endif



                        {{-- ACCOUNTING SYNC --}}
                        @if ($feature['icon'] === 'sync')

                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M20 7a8 8 0 0 0-14-2L4 7"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 3v4h4"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 17a8 8 0 0 0 14 2l2-2"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M20 21v-4h-4"
                                />
                            </svg>

                        @endif



                        {{-- STORE --}}
                        @if ($feature['icon'] === 'store')

                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 9 6 4h12l2 5"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 9a2 2 0 0 0 4 0 2 2 0 0 0 4 0 2 2 0 0 0 4 0 2 2 0 0 0 4 0"
                                />

                                <path
                                    d="M5 11v9h14v-9"
                                />

                                <path d="M9 20v-5h6v5" />
                            </svg>

                        @endif



                        {{-- GLOBE --}}
                        @if ($feature['icon'] === 'globe')

                            <svg
                                class="h-6 w-6"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <circle
                                    cx="12"
                                    cy="12"
                                    r="9"
                                />

                                <path
                                    d="M3 12h18M12 3c2.4 2.6 3.7 5.6 3.7 9S14.4 18.4 12 21M12 3C9.6 5.6 8.3 8.6 8.3 12S9.6 18.4 12 21"
                                />
                            </svg>

                        @endif

                    </div>



                    {{-- =================================================
                        FEATURE NUMBER
                    ================================================== --}}
                    <p
                        class="mt-6
                               text-[11px]
                               font-bold uppercase
                               tracking-[0.08em]
                               text-primary-600"
                    >
                        Feature {{ $feature['number'] }}
                    </p>



                    {{-- =================================================
                        TITLE
                    ================================================== --}}
                    <h3
                        class="mt-2
                               text-[19px]
                               font-bold
                               leading-[1.35]
                               tracking-[-0.025em]
                               text-secondary-950

                               transition-colors duration-300

                               group-hover:text-primary-600"
                    >
                        {{ (int) $feature['number'] }}.
                        {{ $feature['title'] }}
                    </h3>



                    {{-- =================================================
                        DESCRIPTION
                    ================================================== --}}
                    <p
                        class="mt-3
                               max-w-xl
                               text-[14px]
                               leading-6
                               text-secondary-600"
                    >
                        {{ $feature['description'] }}
                    </p>



                    {{-- Push footer to bottom --}}
                    <div class="flex-1"></div>



                    {{-- =================================================
                        FOOTER
                    ================================================== --}}
                    <div
                        class="mt-6
                               border-t border-secondary-100
                               pt-4"
                    >

                        <a
                            href="{{ $feature['url'] }}"
                            class="group/link
                                   flex items-center
                                   justify-between
                                   gap-4"
                        >

                            {{-- Article count --}}
                            <span
                                class="text-[12px]
                                       font-semibold
                                       text-primary-600"
                            >
                                {{ $feature['articles'] }} Articles
                            </span>



                            {{-- Arrow --}}
                            <span
                                class="text-primary-600
                                       transition-transform
                                       duration-300
                                       group-hover/link:translate-x-1"
                            >

                                <svg
                                    class="h-4 w-4"
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

                            </span>

                        </a>

                    </div>



                    {{-- =================================================
                        HOVER ACCENT
                    ================================================== --}}
                    <div
                        class="pointer-events-none
                               absolute
                               bottom-0 left-0
                               h-[2px] w-0
                               bg-primary-600

                               transition-all
                               duration-500

                               group-hover:w-full"
                    ></div>

                </article>

            @endforeach

        </div>

    </div>

</section>