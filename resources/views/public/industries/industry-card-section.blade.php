@php

    $industries = [

        [
            'name' => 'Wholesale & Distribution',
            'slug' => 'wholesale-distribution',
            'image' => 'images/industries/wholesale-and-distribution.webp',

            'description' =>
                'Manage bulk inventory, warehouses and orders with greater visibility across your entire operation.',

            'features' => [
                [
                    'name' => 'Multi-location',
                    'type' => 'location',
                    'color' => 'blue',
                ],
                [
                    'name' => 'Bulk inventory',
                    'type' => 'box',
                    'color' => 'green',
                ],
                [
                    'name' => 'Orders',
                    'type' => 'truck',
                    'color' => 'orange',
                ],
            ],
        ],


        [
            'name' => 'Import & Export',
            'slug' => 'import-export',
            'image' => 'images/industries/import-and-export.webp',

            'description' =>
                'Keep incoming stock, suppliers and inventory movements organised from shipment through to warehouse.',

            'features' => [
                [
                    'name' => 'Shipments',
                    'type' => 'truck',
                    'color' => 'blue',
                ],
                [
                    'name' => 'Suppliers',
                    'type' => 'location',
                    'color' => 'violet',
                ],
                [
                    'name' => 'Stock flow',
                    'type' => 'box',
                    'color' => 'green',
                ],
            ],
        ],


        [
            'name' => 'Food & Beverage',
            'slug' => 'food-beverage',
            'image' => 'images/industries/food-and-beverages.webp',

            'description' =>
                'Track expiry dates, batches and stock movement to reduce waste and keep products moving efficiently.',

            'features' => [
                [
                    'name' => 'Expiry tracking',
                    'type' => 'calendar',
                    'color' => 'orange',
                ],
                [
                    'name' => 'Batch control',
                    'type' => 'box',
                    'color' => 'green',
                ],
                [
                    'name' => 'FIFO',
                    'type' => 'rotate',
                    'color' => 'blue',
                ],
            ],
        ],


        [
            'name' => 'Retail',
            'slug' => 'retail',
            'image' => 'images/industries/retail.webp',

            'description' =>
                'Keep store, warehouse and online inventory connected so your team always knows what is available to sell.',

            'features' => [
                [
                    'name' => 'Store stock',
                    'type' => 'store',
                    'color' => 'blue',
                ],
                [
                    'name' => 'Omnichannel',
                    'type' => 'rotate',
                    'color' => 'violet',
                ],
                [
                    'name' => 'Fast orders',
                    'type' => 'truck',
                    'color' => 'orange',
                ],
            ],
        ],


        [
            'name' => '3PL & Warehousing',
            'slug' => '3pl-warehousing',
            'image' => 'images/industries/3pl-and-warehousing.webp',

            'description' =>
                'Manage inventory across clients, warehouses and fulfilment operations from one central system.',

            'features' => [
                [
                    'name' => 'Warehouses',
                    'type' => 'location',
                    'color' => 'blue',
                ],
                [
                    'name' => 'Client stock',
                    'type' => 'box',
                    'color' => 'green',
                ],
                [
                    'name' => 'Fulfilment',
                    'type' => 'truck',
                    'color' => 'orange',
                ],
            ],
        ],


        [
            'name' => 'Manufacturing',
            'slug' => 'manufacturing',
            'image' => 'images/industries/manufacturing-image.webp',

            'description' =>
                'Track raw materials, components and finished goods throughout your entire production process.',

            'features' => [
                [
                    'name' => 'Materials',
                    'type' => 'box',
                    'color' => 'blue',
                ],
                [
                    'name' => 'Production',
                    'type' => 'settings',
                    'color' => 'violet',
                ],
                [
                    'name' => 'Finished goods',
                    'type' => 'store',
                    'color' => 'green',
                ],
            ],
        ],

    ];

@endphp



<section
    id="industries"
    class="relative overflow-hidden bg-white py-24 sm:py-28 lg:py-32"
>

    {{-- ========================================================
        BACKGROUND DECORATION
    ========================================================= --}}

    <div class="pointer-events-none absolute inset-0 overflow-hidden">

        <div
            class="absolute left-[-180px] top-[180px]
                   h-[420px] w-[420px]
                   rounded-full
                   bg-blue-50
                   blur-3xl">
        </div>


        <div
            class="absolute bottom-[100px] right-[-180px]
                   h-[420px] w-[420px]
                   rounded-full
                   bg-primary-50
                   blur-3xl">
        </div>

    </div>



    <div
        class="relative mx-auto max-w-7xl
               px-6 sm:px-8 lg:px-12"
    >

        {{-- ====================================================
            SECTION HEADER
        ===================================================== --}}

        <div class="mx-auto max-w-2xl text-center">

            {{-- Small label --}}
            <div
                class="mb-5 inline-flex items-center gap-2
                       rounded-full
                       border border-primary-100
                       bg-primary-50
                       px-3.5 py-1.5"
            >

                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-500">
                </span>


                <span
                    class="text-sm font-semibold
                           text-primary-600">
                    Built for every operation
                </span>

            </div>



            {{-- Heading --}}
            <h2
                class="text-3xl font-extrabold
                       tracking-tight
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl"
            >
                One platform.

                <span
                    class="bg-gradient-to-r
                           from-blue-600
                           to-primary-600
                           bg-clip-text
                           text-transparent"
                >
                    Every industry.
                </span>

            </h2>



            {{-- Description --}}
            <p
                class="mx-auto mt-5 max-w-xl
                       text-base leading-7
                       text-secondary-500
                       sm:text-lg"
            >
                Whether you're selling products, managing warehouses,
                or manufacturing goods, StockCore adapts to the way
                your business works.
            </p>

        </div>



        {{-- ====================================================
            INDUSTRY CARDS
        ===================================================== --}}

        <div
            class="mt-14 grid gap-7
                   md:grid-cols-2
                   lg:grid-cols-3"
        >

            @foreach ($industries as $industry)

                <article
                    class="group flex h-full flex-col
                           overflow-hidden
                           rounded-[24px]
                           border border-secondary-200/80
                           bg-white
                           shadow-[0_14px_40px_rgba(15,23,42,0.055)]
                           transition-all duration-300
                           hover:-translate-y-1.5
                           hover:border-primary-200
                           hover:shadow-[0_26px_65px_rgba(15,23,42,0.10)]
                           hover:cursor-pointer"
                >

                    {{-- =========================================
                        IMAGE
                    ========================================== --}}

                    <div
                        class="relative h-[240px]
                               overflow-hidden"
                    >

                        <img
                            src="{{ asset($industry['image']) }}"
                            alt="{{ $industry['name'] }}"
                            class="h-full w-full
                                   object-cover
                                   transition-transform
                                   duration-700
                                   ease-out
                                   group-hover:scale-[1.05]"
                        >


                        {{-- image overlay --}}
                        <div
                            class="pointer-events-none
                                   absolute inset-0
                                   bg-gradient-to-t
                                   from-secondary-950/20
                                   via-transparent
                                   to-transparent">
                        </div>



                        {{-- Industry badge --}}
                        <div
                            class="absolute left-5 top-5
                                   inline-flex items-center gap-2.5
                                   rounded-full
                                   border border-white/70
                                   bg-white/90
                                   px-3.5 py-2
                                   shadow-[0_6px_18px_rgba(15,23,42,0.10)]
                                   backdrop-blur-md"
                        >

                            {{-- Cube --}}
                            <svg
                                class="h-4 w-4
                                       text-secondary-700"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4.5 7.5L12 12l7.5-4.5M12 12v9"
                                />
                            </svg>


                            <span
                                class="text-[11px] font-bold
                                       uppercase
                                       tracking-[0.10em]
                                       text-secondary-600"
                            >
                                Industry
                            </span>

                        </div>

                    </div>



                    {{-- =========================================
                        CONTENT
                    ========================================== --}}

                    <div
                        class="flex flex-1 flex-col
                               p-6 sm:p-7"
                    >

                        {{-- title + arrow --}}
                        <div
                            class="flex items-start
                                   justify-between
                                   gap-5"
                        >

                            <h3
                                class="text-xl font-bold
                                       tracking-[-0.025em]
                                       text-secondary-950
                                       transition-colors
                                       duration-200
                                       group-hover:text-primary-600
                                       sm:text-[22px]"
                            >
                                {{ $industry['name'] }}
                            </h3>



                            {{-- Arrow --}}
                            <div
                                class="flex h-11 w-11
                                       shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-50
                                       text-primary-600
                                       transition-all duration-300
                                       group-hover:bg-primary-600
                                       group-hover:text-white"
                            >

                                <svg
                                    class="h-5 w-5
                                           transition-transform
                                           duration-300
                                           group-hover:translate-x-0.5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 12h14M13 6l6 6-6 6"
                                    />
                                </svg>

                            </div>

                        </div>



                        {{-- Description --}}
                        <p
                            class="mt-3
                                   min-h-[72px]
                                   text-sm leading-6
                                   text-secondary-500"
                        >
                            {{ $industry['description'] }}
                        </p>



                        {{-- =====================================
                            FOOTER CAPABILITIES
                        ====================================== --}}

                        <div class="mt-auto pt-6">

                            <div
                                class="mb-5 h-px w-full
                                       bg-secondary-100">
                            </div>


                            <div
                                class="grid grid-cols-3 gap-3"
                            >

                                @foreach ($industry['features'] as $feature)

                                    @php

                                        $featureClasses = match ($feature['color']) {

                                            'green' =>
                                                'bg-emerald-50 text-emerald-600',

                                            'orange' =>
                                                'bg-orange-50 text-orange-600',

                                            'violet' =>
                                                'bg-violet-50 text-violet-600',

                                            default =>
                                                'bg-primary-50 text-primary-600',

                                        };

                                    @endphp


                                    <div class="min-w-0">

                                        <div
                                            class="flex h-9 w-9
                                                   items-center justify-center
                                                   rounded-lg
                                                   {{ $featureClasses }}"
                                        >

                                            {{-- =================
                                                LOCATION
                                            ================== --}}
                                            @if ($feature['type'] === 'location')

                                                <svg
                                                    class="h-[18px] w-[18px]"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M5 21V7l7-4 7 4v14"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        d="M9 21v-5h6v5M9 9h.01M15 9h.01M9 12h.01M15 12h.01"
                                                    />
                                                </svg>


                                            {{-- =================
                                                BOX
                                            ================== --}}
                                            @elseif ($feature['type'] === 'box')

                                                <svg
                                                    class="h-[18px] w-[18px]"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M4 7.5l8 4.5 8-4.5M12 12v9"
                                                    />
                                                </svg>


                                            {{-- =================
                                                TRUCK
                                            ================== --}}
                                            @elseif ($feature['type'] === 'truck')

                                                <svg
                                                    class="h-[18px] w-[18px]"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M3 6h11v10H3zM14 10h4l3 3v3h-7z"
                                                    />

                                                    <circle cx="7" cy="18" r="2" />
                                                    <circle cx="17" cy="18" r="2" />
                                                </svg>


                                            {{-- =================
                                                CALENDAR
                                            ================== --}}
                                            @elseif ($feature['type'] === 'calendar')

                                                <svg
                                                    class="h-[18px] w-[18px]"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <rect
                                                        x="4"
                                                        y="5"
                                                        width="16"
                                                        height="15"
                                                        rx="2"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        d="M8 3v4M16 3v4M4 10h16"
                                                    />
                                                </svg>


                                            {{-- =================
                                                ROTATE
                                            ================== --}}
                                            @elseif ($feature['type'] === 'rotate')

                                                <svg
                                                    class="h-[18px] w-[18px]"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M20 11a8 8 0 10-2.3 5.7"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M20 5v6h-6"
                                                    />
                                                </svg>


                                            {{-- =================
                                                STORE
                                            ================== --}}
                                            @elseif ($feature['type'] === 'store')

                                                <svg
                                                    class="h-[18px] w-[18px]"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M4 10h16M5 10v10h14V10M4 10l2-6h12l2 6"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        d="M9 20v-6h6v6"
                                                    />
                                                </svg>


                                            {{-- =================
                                                SETTINGS
                                            ================== --}}
                                            @elseif ($feature['type'] === 'settings')

                                                <svg
                                                    class="h-[18px] w-[18px]"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <circle cx="12" cy="12" r="3" />

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M19.4 15a1.7 1.7 0 00.3 1.9l.1.1-2.8 2.8-.1-.1a1.7 1.7 0 00-1.9-.3 1.7 1.7 0 00-1 1.6v.2h-4V21a1.7 1.7 0 00-1-1.6 1.7 1.7 0 00-1.9.3l-.1.1L4.2 17l.1-.1A1.7 1.7 0 004.6 15 1.7 1.7 0 003 14H2.8v-4H3a1.7 1.7 0 001.6-1 1.7 1.7 0 00-.3-1.9L4.2 7 7 4.2l.1.1A1.7 1.7 0 009 4.6 1.7 1.7 0 0010 3V2.8h4V3a1.7 1.7 0 001 1.6 1.7 1.7 0 001.9-.3l.1-.1L19.8 7l-.1.1a1.7 1.7 0 00-.3 1.9 1.7 1.7 0 001.6 1h.2v4H21a1.7 1.7 0 00-1.6 1z"
                                                    />
                                                </svg>

                                            @endif

                                        </div>


                                        <p
                                            class="mt-2
                                                   truncate
                                                   text-[11px]
                                                   font-semibold
                                                   text-secondary-700"
                                        >
                                            {{ $feature['name'] }}
                                        </p>

                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>



        {{-- ====================================================
            BOTTOM STATEMENT
        ===================================================== --}}

        <div
            class="mx-auto mt-14
                   max-w-2xl text-center"
        >

            <p
                class="text-sm
                       text-secondary-400"
            >
                Whatever you're building, selling or moving,

                <span
                    class="font-semibold
                           text-primary-600"
                >
                    StockCore keeps your inventory in sync.
                </span>

            </p>

        </div>

    </div>

</section>