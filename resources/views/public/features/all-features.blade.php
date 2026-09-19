{{-- stockcore all features --}}

@php

    $features = [

    #landing cost

        [
            'id' => 'feature-landing-cost',
            'nav' => 'Landing Cost',
            'number' => '01',
            'theme' => 'light',

            'eyebrow' => 'Landing Cost',

            'title' => 'Understand the true cost behind every product.',

            'lead' =>
                'Purchase price is only the beginning. StockCore brings product cost, freight, customs duties, taxes, handling charges and other purchasing expenses together so you can understand what inventory really costs your business.',

            'support' =>
                'Instead of relying on incomplete purchase values, your team gets a clearer picture of inventory valuation, expected margins and the actual cost behind every batch.',

            'cards' => [

                [
                    'type' => 'table',

                    'title' => 'Calculate complete landed cost',

                    'description' =>
                        'Combine the expenses involved in acquiring inventory into one clear calculation. StockCore can account for product cost, freight, customs, taxes and additional charges when establishing the cost of stock.',

                    'secondary' =>
                        'That gives purchasing, finance and inventory teams a much more reliable foundation for valuation and pricing.',

                    'visual_title' => 'Landing cost breakdown',

                    'rows' => [
                        ['Product cost', '$105.00'],
                        ['Freight', '$6.20'],
                        ['Customs & duties', '$5.40'],
                        ['Handling & fees', '$4.00'],
                    ],

                    'total_label' => 'True landed cost',
                    'total' => '$120.60',

                    'points' => [
                        'Allocate additional purchasing expenses.',
                        'Understand cost at product and batch level.',
                        'Maintain more accurate inventory valuation.',
                    ],
                ],

                [
                    'type' => 'metrics',

                    'title' => 'Protect your margins',

                    'description' =>
                        'Compare the real cost of a product against its selling price before assuming the margin is healthy. Hidden freight and purchasing costs can significantly change profitability.',

                    'secondary' =>
                        'StockCore gives teams better information before pricing decisions are made.',

                    'visual_title' => 'Margin analysis',

                    'metrics' => [
                        ['label' => 'Landed cost', 'value' => '$23.80'],
                        ['label' => 'Selling price', 'value' => '$38.65'],
                        ['label' => 'Gross margin', 'value' => '38.4%'],
                    ],

                    'points' => [
                        'Compare actual cost and selling price.',
                        'Identify products with tightening margins.',
                        'Make pricing decisions with stronger data.',
                    ],
                ],

                [
                    'type' => 'checklist',
                    'wide' => true,

                    'title' => 'Keep purchasing and inventory working from the same numbers',

                    'description' =>
                        'Landed cost information should not live in a separate spreadsheet that only one person understands. StockCore keeps cost information attached to the inventory it belongs to.',

                    'secondary' =>
                        'Purchasing decisions, inventory reports and product profitability can all work from the same cost foundation.',

                    'visual_title' => 'Cost visibility',

                    'items' => [
                        'Purchase cost captured against inventory',
                        'Freight and additional charges included',
                        'Batch-level costing visibility',
                        'Consistent inventory valuation',
                        'Clearer profitability analysis',
                        'Less reliance on external spreadsheets',
                    ],
                ],

            ],
        ],


        #scan and import

        [
            'id' => 'feature-scan-import',
            'nav' => 'Scan & Import',
            'number' => '02',
            'theme' => 'dark',

            'eyebrow' => 'Scan & Import',

            'title' => 'Get inventory into StockCore without slowing down.',

            'lead' =>
                'Creating products one by one quickly becomes painful when a business manages hundreds or thousands of SKUs. StockCore gives your team faster ways to capture, import and maintain inventory information.',

            'support' =>
                'Use barcode scanning for day-to-day warehouse activity or bring large product catalogues into the platform through structured CSV and spreadsheet imports.',

            'cards' => [

                [
                    'type' => 'checklist',

                    'title' => 'Scan stock as it arrives',

                    'description' =>
                        'Use barcode scanning to identify products during receiving, stock counts and regular warehouse activity. Staff can spend less time searching manually through long product lists.',

                    'secondary' =>
                        'Scanning helps create a faster physical workflow between products in the warehouse and their records inside StockCore.',

                    'visual_title' => 'Barcode scan',

                    'items' => [
                        'Barcode detected',
                        'SKU matched automatically',
                        'Product record identified',
                        'Quantity ready to update',
                        'Warehouse location confirmed',
                    ],
                ],

                [
                    'type' => 'progress',

                    'title' => 'Import entire catalogues in bulk',

                    'description' =>
                        'Moving from spreadsheets or another inventory system should not require recreating every product manually. Import structured product information in one controlled workflow.',

                    'secondary' =>
                        'StockCore can help your team migrate large inventory datasets much faster during setup and ongoing catalogue maintenance.',

                    'visual_title' => 'inventory-products.csv',

                    'progress' => [
                        ['label' => 'Products detected', 'value' => '1,248', 'width' => 100],
                        ['label' => 'New products', 'value' => '742', 'width' => 72],
                        ['label' => 'Existing products updated', 'value' => '506', 'width' => 55],
                    ],
                ],

                [
                    'type' => 'table',
                    'wide' => true,

                    'title' => 'Reduce repetitive data entry',

                    'description' =>
                        'Manual entry is slow and creates opportunities for duplicate products, inconsistent SKUs and typing mistakes. A structured import process makes inventory setup more predictable.',

                    'secondary' =>
                        'Review incoming information before it becomes part of your live catalogue and maintain cleaner product records as the business grows.',

                    'visual_title' => 'Import validation',

                    'rows' => [
                        ['Valid records', '1,214'],
                        ['Potential duplicates', '18'],
                        ['Missing SKUs', '9'],
                        ['Needs review', '7'],
                    ],

                    'total_label' => 'Ready to import',
                    'total' => '1,214',

                    'points' => [
                        'Detect incomplete records before import.',
                        'Reduce duplicate product creation.',
                        'Maintain more consistent product data.',
                    ],
                ],

            ],
        ],


      #stock decrease tracking

        [
            'id' => 'feature-stock-decrease',
            'nav' => 'Stock Decrease Tracking',
            'number' => '03',
            'theme' => 'light',

            'eyebrow' => 'Stock Decrease Tracking',

            'title' => 'Understand exactly where your inventory is going.',

            'lead' =>
                'Inventory does not decrease only when a sale happens. Adjustments, transfers, damaged items, write-offs and other operational activities can all affect the quantity you have available.',

            'support' =>
                'StockCore records those decreases as movements so your team can understand what changed, why it changed and where the inventory went.',

            'cards' => [

                [
                    'type' => 'table',

                    'title' => 'Maintain a complete movement history',

                    'description' =>
                        'Every inventory decrease can become part of a traceable movement history rather than simply changing the final quantity.',

                    'secondary' =>
                        'That gives operations teams more context when investigating discrepancies or reviewing inventory activity.',

                    'visual_title' => 'Recent stock movements',

                    'rows' => [
                        ['Sale', '-5 units'],
                        ['Adjustment', '-3 units'],
                        ['Transfer out', '-10 units'],
                        ['Damaged stock', '-2 units'],
                    ],

                    'total_label' => 'Total decrease',
                    'total' => '-20 units',

                    'points' => [
                        'See why inventory changed.',
                        'Retain movement references.',
                        'Improve stock accountability.',
                    ],
                ],

                [
                    'type' => 'bars',

                    'title' => 'Spot unusual stock activity',

                    'description' =>
                        'Look beyond individual transactions and understand how inventory decreases behave over time. Unexpected movement patterns can reveal operational issues that need attention.',

                    'secondary' =>
                        'Repeated adjustments, unusual write-offs or sudden decreases become much easier to notice.',

                    'visual_title' => 'Decrease activity',

                    'bars' => [36, 54, 42, 68, 56, 78, 63, 88, 76, 94],

                    'metrics' => [
                        ['label' => 'Sales', 'value' => '-245'],
                        ['label' => 'Adjustments', 'value' => '-42'],
                        ['label' => 'Other', 'value' => '-33'],
                    ],
                ],

                [
                    'type' => 'timeline',
                    'wide' => true,

                    'title' => 'Create an audit trail your team can actually use',

                    'description' =>
                        'Knowing the current quantity is useful, but knowing how that quantity was reached is far more powerful. StockCore gives teams historical context around inventory movement.',

                    'secondary' =>
                        'Movement history can support internal review, reporting and investigation when physical inventory does not match expectations.',

                    'visual_title' => 'Movement trace',

                    'steps' => [
                        ['label' => 'Opening stock', 'value' => '320 units'],
                        ['label' => 'Sale posted', 'value' => '-12'],
                        ['label' => 'Transfer out', 'value' => '-20'],
                        ['label' => 'Adjustment', 'value' => '-3'],
                        ['label' => 'Current stock', 'value' => '285 units'],
                    ],
                ],

            ],
        ],


       #serial/real-time

        [
            'id' => 'feature-serial-expiry',
            'nav' => 'Serial / Expiry / Real-Time',
            'number' => '04',
            'theme' => 'dark',

            'eyebrow' => 'Serial / Expiry / Real-Time',

            'title' => 'Track inventory that needs more than a quantity.',

            'lead' =>
                'Some products need deeper traceability. StockCore helps you manage individual serial numbers, expiry-controlled stock and real-time availability across warehouses or business locations.',

            'support' =>
                'That makes the platform suitable for high-value inventory, date-sensitive products and businesses that require stronger product traceability.',

            'cards' => [

                [
                    'type' => 'table',

                    'title' => 'Trace individual serialised products',

                    'description' =>
                        'Store unique serial numbers against inventory so individual products can be followed through receiving, internal movement and eventual sale.',

                    'secondary' =>
                        'This can be especially useful for electronics, equipment, warranty-controlled products and regulated inventory.',

                    'visual_title' => 'Serial details',

                    'rows' => [
                        ['Serial number', 'SN-8847-2210'],
                        ['SKU', 'AHS-1000'],
                        ['Warehouse', 'Sydney'],
                        ['Status', 'In Stock'],
                    ],

                    'total_label' => 'Current quantity',
                    'total' => '1 unit',

                    'points' => [
                        'Unit-level identification.',
                        'Better warranty traceability.',
                        'Clear movement history.',
                    ],
                ],

                [
                    'type' => 'checklist',

                    'title' => 'Stay ahead of product expiry',

                    'description' =>
                        'Date-sensitive inventory needs proactive management. StockCore makes expiry information visible before stock becomes unusable or unsellable.',

                    'secondary' =>
                        'This helps businesses prioritise stock, reduce waste and plan action around products approaching expiry.',

                    'visual_title' => 'Expiry monitoring',

                    'items' => [
                        'Batch A12 — 30 days remaining',
                        'Batch A18 — 48 days remaining',
                        'Batch B01 — 65 days remaining',
                        'Batch B06 — 92 days remaining',
                    ],
                ],

                [
                    'type' => 'metrics',
                    'wide' => true,

                    'title' => 'See stock availability across locations',

                    'description' =>
                        'A single total quantity is not enough when inventory is spread across multiple warehouses or branches. StockCore gives teams a clearer view of where inventory is actually available.',

                    'secondary' =>
                        'Use location visibility to support transfers, purchasing decisions and customer fulfilment.',

                    'visual_title' => 'Live inventory',

                    'metrics' => [
                        ['label' => 'Sydney', 'value' => '120'],
                        ['label' => 'Melbourne', 'value' => '75'],
                        ['label' => 'Brisbane', 'value' => '50'],
                    ],

                    'points' => [
                        'View stock by location.',
                        'Support internal transfers.',
                        'Reduce unnecessary purchasing.',
                    ],
                ],

            ],
        ],


        #fifo

        [
            'id' => 'feature-fifo',
            'nav' => 'FIFO',
            'number' => '05',
            'theme' => 'light',

            'eyebrow' => 'FIFO Costing',

            'title' => 'Keep inventory valuation aligned with how stock moves.',

            'lead' =>
                'When the same product is purchased multiple times at different prices, inventory costing becomes more complex. StockCore uses First In, First Out to consume the oldest available inventory layers first.',

            'support' =>
                'FIFO helps maintain a clearer relationship between purchasing history, cost of goods sold and the value of stock that remains on hand.',

            'cards' => [

                [
                    'type' => 'table',

                    'title' => 'Consume older inventory layers first',

                    'description' =>
                        'StockCore works through older inventory batches before moving into newer purchases, following the FIFO costing method automatically.',

                    'secondary' =>
                        'Your team does not need to manually decide which purchase layer should be used when inventory leaves stock.',

                    'visual_title' => 'Inventory layers',

                    'rows' => [
                        ['01 Jan 2026 · 100 units', '$10.00'],
                        ['15 Jan 2026 · 200 units', '$12.00'],
                        ['20 Feb 2026 · 150 units', '$14.00'],
                    ],

                    'total_label' => 'Oldest open layer',
                    'total' => '$12.00',

                    'points' => [
                        'Automatic layer selection.',
                        'Consistent costing method.',
                        'Clear batch history.',
                    ],
                ],

                [
                    'type' => 'metrics',

                    'title' => 'Calculate COGS with greater consistency',

                    'description' =>
                        'As sales reduce inventory, FIFO determines which purchase cost should be associated with the units leaving stock.',

                    'secondary' =>
                        'That creates a more structured approach to calculating the cost of goods sold.',

                    'visual_title' => 'FIFO valuation',

                    'metrics' => [
                        ['label' => 'COGS', 'value' => '$1,560'],
                        ['label' => 'Stock value', 'value' => '$2,700'],
                        ['label' => 'Open layers', 'value' => '2'],
                    ],

                    'points' => [
                        'Cost outgoing stock consistently.',
                        'Retain purchase-layer visibility.',
                        'Understand remaining inventory value.',
                    ],
                ],

                [
                    'type' => 'timeline',
                    'wide' => true,

                    'title' => 'See how inventory value changes through time',

                    'description' =>
                        'FIFO is more useful when the underlying purchasing history remains visible. StockCore can preserve the relationship between received stock, consumed quantities and remaining layers.',

                    'secondary' =>
                        'This makes historical inventory costing easier to understand when reviewing reports or investigating older transactions.',

                    'visual_title' => 'FIFO flow',

                    'steps' => [
                        ['label' => 'Batch B001 received', 'value' => '100 × $10'],
                        ['label' => 'Batch B002 received', 'value' => '200 × $12'],
                        ['label' => '100 units sold', 'value' => 'B001 consumed'],
                        ['label' => '150 units sold', 'value' => 'B002 partially used'],
                        ['label' => 'Remaining B002', 'value' => '50 units'],
                    ],
                ],

            ],
        ],


        #packeting

        [
            'id' => 'feature-packeting',
            'nav' => 'Packeting',
            'number' => '06',
            'theme' => 'dark',

            'eyebrow' => 'Packeting',

            'title' => 'Turn individual products into flexible sellable bundles.',

            'lead' =>
                'StockCore lets you create packets, kits and bundles using products already managed in inventory. Sell several components together without treating the bundle as completely separate stock.',

            'support' =>
                'The availability of a packet remains connected to the quantities available for the products inside it.',

            'cards' => [

                [
                    'type' => 'bundle',

                    'title' => 'Build product kits from existing inventory',

                    'description' =>
                        'Combine multiple products into one sellable package while continuing to manage each component individually.',

                    'secondary' =>
                        'Create starter kits, promotional packs, installation kits or other grouped products without duplicating inventory records.',

                    'visual_title' => 'Office Starter Pack',

                    'bundle' => [
                        ['label' => 'Laptop Stand', 'qty' => '1 ×'],
                        ['label' => 'Wireless Mouse', 'qty' => '1 ×'],
                        ['label' => 'USB-C Cable', 'qty' => '1 ×'],
                    ],
                ],

                [
                    'type' => 'metrics',

                    'title' => 'Calculate packet availability automatically',

                    'description' =>
                        'A bundle can only be sold when the components required to build it are available. StockCore can use component stock to determine packet availability.',

                    'secondary' =>
                        'That helps prevent a bundle from appearing available when one of its required items has already run out.',

                    'visual_title' => 'Bundle availability',

                    'metrics' => [
                        ['label' => 'Laptop stands', 'value' => '240'],
                        ['label' => 'Wireless mice', 'value' => '184'],
                        ['label' => 'Available packs', 'value' => '184'],
                    ],

                    'points' => [
                        'Availability driven by components.',
                        'Avoid separate duplicate stock.',
                        'Support flexible product combinations.',
                    ],
                ],

                [
                    'type' => 'checklist',
                    'wide' => true,

                    'title' => 'Use bundles without losing component visibility',

                    'description' =>
                        'Selling products together should not hide what is actually happening to the underlying stock. Packet activity remains tied to the component products that make up the bundle.',

                    'secondary' =>
                        'Operations teams can continue to understand component availability while sales teams work with customer-friendly product bundles.',

                    'visual_title' => 'Bundle workflow',

                    'items' => [
                        'Create a packet from existing SKUs',
                        'Define component quantities',
                        'Calculate available packet quantity',
                        'Sell the packet as one product',
                        'Decrease component inventory',
                        'Maintain component-level reporting',
                    ],
                ],

            ],
        ],


      #integrations

        [
            'id' => 'feature-integrations',
            'nav' => 'Integrations',
            'number' => '07',
            'theme' => 'light',

            'eyebrow' => 'Integrations',

            'title' => 'Connect StockCore with the systems that run your business.',

            'lead' =>
                'Inventory rarely works in isolation. StockCore is designed to connect with accounting, eCommerce and operational platforms so teams do not need to maintain the same information in several disconnected systems.',

            'support' =>
                'Integrations help create a more connected workflow between inventory, sales channels, accounting and wider business operations.',

            'cards' => [

                [
                    'type' => 'network',

                    'title' => 'Connect accounting and inventory systems',

                    'description' =>
                        'Connect StockCore with systems such as Xero and Cin7 so inventory information can participate in wider accounting and operational workflows.',

                    'secondary' =>
                        'Reduce the need for repeated manual entry and keep important business information closer together.',

                    'visual_title' => 'Connected ecosystem',

                    'nodes' => [
                        'Xero',
                        'Cin7',
                        'StockCore',
                        'QuickBooks',
                    ],
                ],

                [
                    'type' => 'network',

                    'title' => 'Keep eCommerce channels connected',

                    'description' =>
                        'Online orders affect inventory immediately. Connect sales channels so inventory operations can stay closer to what is happening across eCommerce.',

                    'secondary' =>
                        'This creates a stronger foundation for reducing overselling and keeping product availability aligned.',

                    'visual_title' => 'Sales channels',

                    'nodes' => [
                        'Shopify',
                        'Woo',
                        'StockCore',
                        'BigCommerce',
                    ],
                ],

                [
                    'type' => 'checklist',
                    'wide' => true,

                    'title' => 'Build a more connected operational ecosystem',

                    'description' =>
                        'As StockCore grows, integrations can extend the platform into more parts of the business. Instead of making inventory another isolated system, it becomes part of a larger operational workflow.',

                    'secondary' =>
                        'Accounting, online sales, purchasing and stock management can work with information that stays more consistent across the organisation.',

                    'visual_title' => 'Integration benefits',

                    'items' => [
                        'Reduce duplicate data entry',
                        'Keep inventory closer to sales activity',
                        'Support accounting workflows',
                        'Connect eCommerce channels',
                        'Create more consistent business data',
                        'Extend StockCore through future integrations',
                    ],
                ],

            ],
        ],

    ];

@endphp



<section
    id="all-features"
    class="relative border-t border-secondary-200 bg-background"
>

    <div class="mx-auto max-w-[1440px]">

        <div class="lg:grid lg:grid-cols-[290px_minmax(0,1fr)]">


            {{-- {table of contents} --}}

            <aside
                class="hidden border-r border-secondary-200
                       bg-white lg:block"
            >

                <div
                    class="sticky top-16 h-[calc(100vh-4rem)]
                           overflow-y-auto px-7 py-10"
                >

                    <p
                        class="text-[11px] font-bold uppercase
                               tracking-[0.16em] text-primary-600"
                    >
                        StockCore
                    </p>

                    <h2
                        class="mt-1 text-xl font-bold
                               tracking-tight text-secondary-900"
                    >
                        All Features
                    </h2>

                    <p
                        class="mt-1 text-sm leading-6
                               text-secondary-500"
                    >
                        Explore every part of StockCore.
                    </p>


                    <nav class="mt-3 space-y-1.5">

                        @foreach ($features as $feature)

                            <a
                                href="#{{ $feature['id'] }}"
                                data-feature-link="{{ $feature['id'] }}"
                                class="feature-nav-link
                                       flex items-center gap-3
                                       rounded-xl px-4 py-3
                                       text-sm font-semibold
                                       text-secondary-600
                                       transition-all duration-200
                                       hover:bg-primary-50
                                       hover:text-primary-700"
                            >

                                <span
                                    class="flex h-7 w-7 shrink-0
                                           items-center justify-center
                                           rounded-lg
                                           border border-secondary-200
                                           text-[10px] font-bold"
                                >
                                    {{ $feature['number'] }}
                                </span>

                                <span>
                                    {{ $feature['nav'] }}
                                </span>

                            </a>

                        @endforeach

                    </nav>

                </div>

            </aside>



        {{-- mobile nav --}}

            <div
                class="sticky top-0 z-30
                       border-b border-secondary-200
                       bg-white/95 px-4 py-3
                       backdrop-blur lg:hidden"
            >

                <div
                    class="flex gap-2 overflow-x-auto
                           [scrollbar-width:none]
                           [&::-webkit-scrollbar]:hidden"
                >

                    @foreach ($features as $feature)

                        <a
                            href="#{{ $feature['id'] }}"
                            data-feature-link="{{ $feature['id'] }}"
                            class="feature-nav-link shrink-0
                                   rounded-full
                                   border border-secondary-200
                                   bg-white px-4 py-2
                                   text-xs font-semibold
                                   text-secondary-600"
                        >
                            {{ $feature['nav'] }}
                        </a>

                    @endforeach

                </div>

            </div>



          {{-- feature sections --}}

            <div class="min-w-0">

                @foreach ($features as $feature)

                    @php

                        $dark = $feature['theme'] === 'dark';

                    @endphp


                    <section
                        id="{{ $feature['id'] }}"
                        data-feature-section
                        class="scroll-mt-20
                               px-6 py-20
                               sm:px-10
                               lg:px-14 lg:py-24
                               xl:px-16 xl:py-28

                               {{ $dark
                                    ? 'bg-primary-950 text-white'
                                    : 'bg-background text-secondary-900' }}"
                    >


                    {{-- feature intro --}}

                        <div
                            class="grid gap-8
                                   lg:grid-cols-[0.9fr_1.1fr]
                                   lg:gap-14"
                        >

                            <div>

                                <div class="flex items-center gap-4">

                                    <span
                                        class="flex h-10 w-10
                                               items-center justify-center
                                               rounded-full
                                               text-xs font-bold

                                               {{ $dark
                                                    ? 'bg-primary-800 text-primary-200'
                                                    : 'bg-primary-100 text-primary-700' }}"
                                    >
                                        {{ $feature['number'] }}
                                    </span>


                                    <div
                                        class="h-px w-12
                                               {{ $dark
                                                    ? 'bg-primary-700'
                                                    : 'bg-primary-200' }}"
                                    ></div>


                                    <p
                                        class="text-xs font-bold uppercase
                                               tracking-[0.14em]

                                               {{ $dark
                                                    ? 'text-primary-300'
                                                    : 'text-primary-600' }}"
                                    >
                                        {{ $feature['eyebrow'] }}
                                    </p>

                                </div>


                                <h2
                                    class="mt-6 max-w-xl
                                           text-4xl font-bold
                                           leading-[1.08]
                                           tracking-[-0.035em]
                                           lg:text-5xl

                                           {{ $dark
                                                ? 'text-white'
                                                : 'text-secondary-900' }}"
                                >
                                    {{ $feature['title'] }}
                                </h2>

                            </div>


                            <div class="lg:pt-12">

                                <p
                                    class="text-lg leading-8

                                           {{ $dark
                                                ? 'text-secondary-200'
                                                : 'text-secondary-600' }}"
                                >
                                    {{ $feature['lead'] }}
                                </p>


                                <p
                                    class="mt-4 text-base leading-7

                                           {{ $dark
                                                ? 'text-secondary-400'
                                                : 'text-secondary-500' }}"
                                >
                                    {{ $feature['support'] }}
                                </p>

                            </div>

                        </div>


{{-- feature cards --}}

                        <div
                            class="mt-16 grid
                                   gap-x-7 gap-y-16
                                   xl:grid-cols-2"
                        >

                            @foreach ($feature['cards'] as $card)

                                <article
                                    class="{{ !empty($card['wide'])
                                            ? 'xl:col-span-2'
                                            : '' }}"
                                >

                                  {{-- visual area --}}

                                    <div
                                        class="rounded-[24px]
                                               border p-6
                                               sm:p-8

                                               {{ $dark
                                                    ? 'border-primary-800 bg-primary-900'
                                                    : 'border-primary-100 bg-background-muted' }}"
                                    >

                                        <div
                                            class="rounded-2xl
                                                   border border-secondary-200
                                                   bg-white p-5
                                                   text-secondary-900
                                                   shadow-sm
                                                   sm:p-6"
                                        >

                                            <div
                                                class="flex items-center
                                                       justify-between gap-4"
                                            >

                                                <div>

                                                    <p
                                                        class="text-[10px]
                                                               font-bold uppercase
                                                               tracking-[0.12em]
                                                               text-secondary-400"
                                                    >
                                                        StockCore
                                                    </p>

                                                    <h4
                                                        class="mt-1
                                                               font-bold
                                                               text-secondary-900"
                                                    >
                                                        {{ $card['visual_title'] }}
                                                    </h4>

                                                </div>


                                                <span
                                                    class="h-2.5 w-2.5
                                                           rounded-full
                                                           bg-emerald-500"
                                                ></span>

                                            </div>



                                            {{-- table visuals --}}

                                            @if ($card['type'] === 'table')

                                                <div
                                                    class="mt-5 overflow-hidden
                                                           rounded-xl
                                                           border border-secondary-100"
                                                >

                                                    @foreach ($card['rows'] as $row)

                                                        <div
                                                            class="flex items-center
                                                                   justify-between
                                                                   border-b
                                                                   border-secondary-100
                                                                   px-4 py-3.5
                                                                   last:border-0"
                                                        >

                                                            <span
                                                                class="text-xs
                                                                       text-secondary-500"
                                                            >
                                                                {{ $row[0] }}
                                                            </span>


                                                            <span
                                                                class="text-xs
                                                                       font-bold
                                                                       text-secondary-900"
                                                            >
                                                                {{ $row[1] }}
                                                            </span>

                                                        </div>

                                                    @endforeach

                                                </div>


                                                <div
                                                    class="mt-4 flex
                                                           items-center
                                                           justify-between
                                                           rounded-xl
                                                           bg-primary-50
                                                           px-4 py-4"
                                                >

                                                    <span
                                                        class="text-xs
                                                               font-semibold
                                                               text-primary-600"
                                                    >
                                                        {{ $card['total_label'] }}
                                                    </span>


                                                    <span
                                                        class="text-lg
                                                               font-bold
                                                               text-primary-700"
                                                    >
                                                        {{ $card['total'] }}
                                                    </span>

                                                </div>

                                            @endif


{{-- metrics visual --}}

                                            @if ($card['type'] === 'metrics')

                                                <div
                                                    class="mt-5 grid gap-3
                                                           sm:grid-cols-3"
                                                >

                                                    @foreach ($card['metrics'] as $metric)

                                                        <div
                                                            class="rounded-xl
                                                                   border border-secondary-100
                                                                   bg-secondary-50
                                                                   p-4"
                                                        >

                                                            <p
                                                                class="text-[10px]
                                                                       text-secondary-400"
                                                            >
                                                                {{ $metric['label'] }}
                                                            </p>

                                                            <p
                                                                class="mt-2
                                                                       text-xl font-bold
                                                                       text-secondary-900"
                                                            >
                                                                {{ $metric['value'] }}
                                                            </p>

                                                        </div>

                                                    @endforeach

                                                </div>


                                                <div
                                                    class="mt-5 h-2
                                                           overflow-hidden
                                                           rounded-full
                                                           bg-secondary-100"
                                                >
                                                    <div
                                                        class="h-full w-[72%]
                                                               rounded-full
                                                               bg-primary-600"
                                                    ></div>
                                                </div>

                                            @endif


{{-- checklist visual --}}

                                            @if ($card['type'] === 'checklist')

                                                <div
                                                    class="mt-5 grid gap-3
                                                           sm:grid-cols-2"
                                                >

                                                    @foreach ($card['items'] as $item)

                                                        <div
                                                            class="flex items-center
                                                                   gap-3 rounded-xl
                                                                   bg-secondary-50
                                                                   px-4 py-3"
                                                        >

                                                            <span
                                                                class="flex h-6 w-6
                                                                       shrink-0
                                                                       items-center
                                                                       justify-center
                                                                       rounded-full
                                                                       bg-emerald-100
                                                                       text-emerald-600"
                                                            >

                                                                <svg
                                                                    class="h-3 w-3"
                                                                    fill="none"
                                                                    viewBox="0 0 24 24"
                                                                    stroke="currentColor"
                                                                    stroke-width="3"
                                                                >
                                                                    <path
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="m5 12 4 4L19 6"
                                                                    />
                                                                </svg>

                                                            </span>

                                                            <span
                                                                class="text-xs
                                                                       font-medium
                                                                       text-secondary-700"
                                                            >
                                                                {{ $item }}
                                                            </span>

                                                        </div>

                                                    @endforeach

                                                </div>

                                            @endif


{{-- import progress --}}

                                            @if ($card['type'] === 'progress')

                                                <div class="mt-6 space-y-5">

                                                    @foreach ($card['progress'] as $progress)

                                                        <div>

                                                            <div
                                                                class="flex items-center
                                                                       justify-between"
                                                            >

                                                                <span
                                                                    class="text-xs
                                                                           text-secondary-500"
                                                                >
                                                                    {{ $progress['label'] }}
                                                                </span>

                                                                <span
                                                                    class="text-xs
                                                                           font-bold
                                                                           text-secondary-900"
                                                                >
                                                                    {{ $progress['value'] }}
                                                                </span>

                                                            </div>


                                                            <div
                                                                class="mt-2 h-2
                                                                       overflow-hidden
                                                                       rounded-full
                                                                       bg-secondary-100"
                                                            >

                                                                <div
                                                                    class="h-full
                                                                           rounded-full
                                                                           bg-primary-600"
                                                                    style="width: {{ $progress['width'] }}%;"
                                                                ></div>

                                                            </div>

                                                        </div>

                                                    @endforeach

                                                </div>

                                            @endif



                                          {{-- bar chart --}}

                                            @if ($card['type'] === 'bars')

                                                <div
                                                    class="mt-7 flex h-48
                                                           items-end gap-3
                                                           border-b border-l
                                                           border-secondary-200
                                                           px-5"
                                                >

                                                    @foreach ($card['bars'] as $bar)

                                                        <div
                                                            class="flex flex-1
                                                                   items-end"
                                                        >

                                                            <div
                                                                class="w-full
                                                                       rounded-t-md
                                                                       bg-primary-500"
                                                                style="height: {{ $bar }}%;"
                                                            ></div>

                                                        </div>

                                                    @endforeach

                                                </div>


                                                <div
                                                    class="mt-5 grid gap-3
                                                           sm:grid-cols-3"
                                                >

                                                    @foreach ($card['metrics'] as $metric)

                                                        <div
                                                            class="rounded-xl
                                                                   bg-secondary-50
                                                                   p-4"
                                                        >

                                                            <p
                                                                class="text-[10px]
                                                                       text-secondary-400"
                                                            >
                                                                {{ $metric['label'] }}
                                                            </p>

                                                            <p
                                                                class="mt-1
                                                                       font-bold
                                                                       text-secondary-900"
                                                            >
                                                                {{ $metric['value'] }}
                                                            </p>

                                                        </div>

                                                    @endforeach

                                                </div>

                                            @endif



                                           {{-- timeline --}}

                                            @if ($card['type'] === 'timeline')

                                                <div class="mt-6">

                                                    @foreach ($card['steps'] as $index => $step)

                                                        <div
                                                            class="relative flex gap-4
                                                                   pb-6 last:pb-0"
                                                        >

                                                            @if (!$loop->last)

                                                                <div
                                                                    class="absolute
                                                                           left-[11px]
                                                                           top-6
                                                                           h-full
                                                                           w-px
                                                                           bg-primary-200"
                                                                ></div>

                                                            @endif


                                                            <div
                                                                class="relative z-10
                                                                       mt-0.5 h-6 w-6
                                                                       shrink-0 rounded-full
                                                                       border-4
                                                                       border-primary-100
                                                                       bg-primary-600"
                                                            ></div>


                                                            <div
                                                                class="flex flex-1
                                                                       items-center
                                                                       justify-between
                                                                       gap-4"
                                                            >

                                                                <span
                                                                    class="text-xs
                                                                           font-medium
                                                                           text-secondary-600"
                                                                >
                                                                    {{ $step['label'] }}
                                                                </span>

                                                                <span
                                                                    class="text-xs
                                                                           font-bold
                                                                           text-secondary-900"
                                                                >
                                                                    {{ $step['value'] }}
                                                                </span>

                                                            </div>

                                                        </div>

                                                    @endforeach

                                                </div>

                                            @endif


{{-- bundle --}}

                                            @if ($card['type'] === 'bundle')

                                                <div
                                                    class="mt-6 grid gap-3
                                                           sm:grid-cols-3"
                                                >

                                                    @foreach ($card['bundle'] as $item)

                                                        <div
                                                            class="rounded-xl
                                                                   border border-secondary-100
                                                                   bg-secondary-50
                                                                   p-4 text-center"
                                                        >

                                                            <div
                                                                class="mx-auto flex
                                                                       h-12 w-12
                                                                       items-center
                                                                       justify-center
                                                                       rounded-xl
                                                                       bg-white
                                                                       text-primary-600
                                                                       shadow-sm"
                                                            >

                                                                <svg
                                                                    class="h-6 w-6"
                                                                    fill="none"
                                                                    viewBox="0 0 24 24"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.8"
                                                                >
                                                                    <path
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="m12 3 8 4-8 4-8-4 8-4Zm-8 4v10l8 4 8-4V7"
                                                                    />
                                                                </svg>

                                                            </div>


                                                            <p
                                                                class="mt-3
                                                                       text-xs font-bold
                                                                       text-secondary-800"
                                                            >
                                                                {{ $item['label'] }}
                                                            </p>

                                                            <p
                                                                class="mt-1
                                                                       text-[10px]
                                                                       text-secondary-400"
                                                            >
                                                                {{ $item['qty'] }}
                                                            </p>

                                                        </div>

                                                    @endforeach

                                                </div>


                                                <div
                                                    class="mt-5 flex
                                                           items-center
                                                           justify-between
                                                           rounded-xl
                                                           bg-primary-50
                                                           px-4 py-4"
                                                >

                                                    <span
                                                        class="text-xs
                                                               font-semibold
                                                               text-primary-600"
                                                    >
                                                        Complete packet
                                                    </span>

                                                    <span
                                                        class="text-sm
                                                               font-bold
                                                               text-primary-700"
                                                    >
                                                        Ready to sell
                                                    </span>

                                                </div>

                                            @endif


{{-- network --}}

                                            @if ($card['type'] === 'network')

                                                <div
                                                    class="mt-7 flex flex-wrap
                                                           items-center
                                                           justify-center gap-4"
                                                >

                                                    @foreach ($card['nodes'] as $node)

                                                        <div
                                                            class="flex h-20 w-20
                                                                   items-center
                                                                   justify-center
                                                                   rounded-2xl
                                                                   border
                                                                   border-secondary-100
                                                                   bg-secondary-50
                                                                   text-center
                                                                   shadow-sm"
                                                        >

                                                            <div>

                                                                <div
                                                                    class="mx-auto flex
                                                                           h-8 w-8
                                                                           items-center
                                                                           justify-center
                                                                           rounded-lg
                                                                           bg-primary-600
                                                                           text-[10px]
                                                                           font-bold
                                                                           text-white"
                                                                >
                                                                    {{ strtoupper(substr($node, 0, 2)) }}
                                                                </div>

                                                                <p
                                                                    class="mt-2
                                                                           text-[10px]
                                                                           font-bold
                                                                           text-secondary-600"
                                                                >
                                                                    {{ $node }}
                                                                </p>

                                                            </div>

                                                        </div>


                                                        @if (!$loop->last)

                                                            <span
                                                                class="text-primary-300"
                                                            >
                                                                ↔
                                                            </span>

                                                        @endif

                                                    @endforeach

                                                </div>

                                            @endif

                                        </div>

                                    </div>


{{-- card copy --}}

                                    <h3
                                        class="mt-7 text-2xl
                                               font-bold

                                               {{ $dark
                                                    ? 'text-white'
                                                    : 'text-secondary-900' }}"
                                    >
                                        {{ $card['title'] }}
                                    </h3>


                                    <p
                                        class="mt-3 text-base
                                               leading-7

                                               {{ $dark
                                                    ? 'text-secondary-300'
                                                    : 'text-secondary-600' }}"
                                    >
                                        {{ $card['description'] }}
                                    </p>


                                    <p
                                        class="mt-3 text-base
                                               leading-7

                                               {{ $dark
                                                    ? 'text-secondary-400'
                                                    : 'text-secondary-500' }}"
                                    >
                                        {{ $card['secondary'] }}
                                    </p>



                                    {{-- Supporting Points --}}
                                    @if (!empty($card['points']))

                                        <div
                                            class="mt-6 grid gap-3
                                                   sm:grid-cols-3"
                                        >

                                            @foreach ($card['points'] as $point)

                                                <div
                                                    class="flex items-start
                                                           gap-2"
                                                >

                                                    <span
                                                        class="mt-1.5
                                                               h-1.5 w-1.5
                                                               shrink-0
                                                               rounded-full
                                                               bg-primary-500"
                                                    ></span>


                                                    <span
                                                        class="text-xs
                                                               leading-5

                                                               {{ $dark
                                                                    ? 'text-secondary-400'
                                                                    : 'text-secondary-500' }}"
                                                    >
                                                        {{ $point }}
                                                    </span>

                                                </div>

                                            @endforeach

                                        </div>

                                    @endif


                                    <a
                                        href="#"
                                        class="group mt-6
                                               inline-flex items-center
                                               gap-2 text-sm font-bold

                                               {{ $dark
                                                    ? 'text-primary-300'
                                                    : 'text-primary-600' }}"
                                    >
                                        Learn more

                                        <span
                                            class="transition-transform
                                                   group-hover:translate-x-1"
                                        >
                                            →
                                        </span>

                                    </a>

                                </article>

                            @endforeach

                        </div>


                    </section>

                @endforeach

            </div>

        </div>

    </div>

</section>



{{-- feature nagivation --}}
<script>

document.addEventListener('DOMContentLoaded', function () {

    const sections =
        document.querySelectorAll(
            '[data-feature-section]'
        );

    const links =
        document.querySelectorAll(
            '[data-feature-link]'
        );


//  activate sidebar item

    function activateFeature(featureId) {

        links.forEach(function (link) {

            link.classList.remove(
                'bg-primary-600',
                'text-white',
                'shadow-md',
                'shadow-primary-600/20'
            );

            link.classList.add(
                'text-secondary-600'
            );


            if (
                link.dataset.featureLink === featureId
            ) {

                link.classList.remove(
                    'text-secondary-600'
                );

                link.classList.add(
                    'bg-primary-600',
                    'text-white',
                    'shadow-md',
                    'shadow-primary-600/20'
                );

            }

        });

    }


// obserave feature selections

    const observer =
        new IntersectionObserver(

            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        activateFeature(
                            entry.target.id
                        );

                    }

                });

            },

            {
                root: null,

                rootMargin:
                    '-20% 0px -70% 0px',

                threshold: 0
            }

        );


    sections.forEach(function (section) {

        observer.observe(section);

    });


// smooth scrools

    links.forEach(function (link) {

        link.addEventListener(
            'click',
            function (event) {

                const id =
                    this.dataset.featureLink;

                const target =
                    document.getElementById(id);


                if (!target) {
                    return;
                }


                event.preventDefault();


                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

            }
        );

    });



//   initial active features

    if (sections.length > 0) {

        activateFeature(
            sections[0].id
        );

    }

});

</script>