@php
    $industries = [
        [
            'name' => 'Wholesale & Distribution',
            'slug' => 'wholesale-distribution',
            'image' => 'images/industries/wholesale-distribution.jpg',
            'description' =>
                'Manage bulk inventory, warehouses and orders with greater visibility across your entire operation.',
        ],

        [
            'name' => 'Import & Export',
            'slug' => 'import-export',
            'image' => 'images/industries/import-export.jpg',
            'description' =>
                'Keep incoming stock, suppliers and inventory movements organised from shipment through to warehouse.',
        ],

        [
            'name' => 'Food & Beverage',
            'slug' => 'food-beverage',
            'image' => 'images/industries/food-beverage.jpg',
            'description' =>
                'Track expiry dates, batches and stock movement to reduce waste and keep products moving efficiently.',
        ],

        [
            'name' => 'Retail',
            'slug' => 'retail',
            'image' => 'images/industries/retail.jpg',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra felis velit, sit amet finibus turpis maximus sed. Fusce et vehicula risus. In sit amet metus sit amet lacus faucibus imperdiet. Maecenas bibendum cursus leo sit amet dictum. Maecenas aliquet vulputate sollicitudin. Proin ligula dui, commodo et enim sed, viverra ornare felis. Maecenas quis finibus leo. Phasellus mauris diam, ornare eu tellus ut, rutrum volutpat arcu. Vivamus ullamcorper aliquet risus, at iaculis neque consectetur id. Duis metus nulla, elementum nec leo lobortis, feugiat pretium eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ac.',
        ],

        [
            'name' => '3PL & Warehousing',
            'slug' => '3pl-warehousing',
            'image' => 'images/industries/3pl-warehousing.jpg',
            'description' =>
                'Manage inventory across clients, warehouses and fulfilment operations from one central system.',
        ],

        [
            'name' => 'Manufacturing',
            'slug' => 'manufacturing',
            'image' => 'images/industries/manufacturing.jpg',
            'description' => 'Track raw materials, components and finished goods throughout your production process.',
        ],
    ];
@endphp
<section id="industries" class="relative overflow-hidden bg-white py-24 sm:py-28 lg:py-32">

    {{-- Soft background decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden">

        <div
            class="absolute left-[-180px] top-[180px]
                   h-[420px] w-[420px] rounded-full
                   bg-blue-50 blur-3xl">
        </div>

        <div
            class="absolute right-[-180px] bottom-[100px]
                   h-[420px] w-[420px] rounded-full
                   bg-primary-50 blur-3xl">
        </div>

    </div>


    <div class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-12">

{{-- section header --}}
        <div class="mx-auto max-w-2xl text-center">

            {{-- Small label --}}
            <div
                class="mb-5 inline-flex items-center gap-2
                       rounded-full border border-primary-100
                       bg-primary-50 px-3.5 py-1.5">

                <span class="h-1.5 w-1.5 rounded-full
                           bg-primary-500">
                </span>

                <span class="text-sm font-semibold
                           text-primary-600">

                    Built for every operation

                </span>

            </div>


            {{-- Heading --}}
            <h2
                class="text-3xl font-extrabold tracking-tight
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">

                One platform.
                <span
                    class="bg-gradient-to-r from-blue-600
                           to-primary-600 bg-clip-text
                           text-transparent">

                    Every industry.

                </span>

            </h2>


            {{-- Description --}}
            <p class="mx-auto mt-5 max-w-xl text-base
                       leading-7 text-secondary-500 sm:text-lg">

                Whether you're selling products, managing
                warehouses, or manufacturing goods, StockCore
                adapts to the way your business works.

            </p>

        </div>

        {{-- CARD SECTION. --}}

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-12 hover:cursor-pointer">
            @foreach ($industries as $industry)
                <article
                    class="group overflow-hidden rounded-2xl border border-secondary-200 bg-white transition duration-300 hover:-transecondary-y-1 hover:shadow-xl hover:shadow-secondary-200/50">

                    {{-- Image --}}
                    <div class="overflow-hidden rounded-2xl bg-white p-2">

                        <div
                            class="flex h-56 items-center justify-center overflow-hidden rounded-t-xl bg-gradient-to-br bg-primary-200 p-5">
                            <img src="{{ asset($industry['image']) }}" alt="{{ $industry['name'] }}"
                                class="h-full w-full rounded-lg object-cover transition duration-500 group-hover:scale-105">
                        </div>

                    </div>
                    {{-- Content --}}
                    <div class="p-6">
                        <h3 class="text-xl font-semibold tracking-tight text-primary-600">
                            {{ $industry['name'] }} 
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-secondary-600">
                            {{ $industry['description'] }}
                        </p>
                    </div>

                </article>
            @endforeach
        </div>

        {{-- bottom statement --}}

        <div class="mx-auto mt-12 max-w-2xl text-center">

            <p class="text-sm text-secondary-400">

                Whatever you're building, selling or moving,
                <span class="font-semibold text-primary-600">
                    StockCore keeps your inventory in sync.
                </span>

            </p>

        </div>

    </div>

</section>
