{{-- hero section - integration page --}}
@php

    $integrationCategories = [
        [
            'key' => 'all',
            'label' => 'All Platforms',
        ],
        [
            'key' => 'accounting',
            'label' => 'Accounting',
        ],
        [
            'key' => 'erp',
            'label' => 'ERP & Inventory',
        ],
        [
            'key' => 'ecommerce',
            'label' => 'E-Commerce',
        ],
        [
            'key' => 'shipping',
            'label' => 'Shipping & Logistics',
        ],
        [
            'key' => 'pos',
            'label' => 'Point of Sale',
        ],
    ];

@endphp


<section id="integrations-hero"
    class="relative overflow-hidden
           border-b border-secondary-100
           bg-background">
    {{-- background decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Large top-left soft circle --}}
        <div
            class="absolute
                   -left-[250px] -top-[330px]
                   h-[700px] w-[700px]
                   rounded-full
                   bg-primary-50/80">
        </div>


        {{-- Left middle soft curve --}}
        <div
            class="absolute
                   -left-[310px] top-[140px]
                   h-[650px] w-[650px]
                   rounded-full
                   border-[100px]
                   border-primary-50/70">
        </div>


        {{-- Bottom-right huge curve --}}
        <div
            class="absolute
                   -right-[390px] -bottom-[430px]
                   h-[900px] w-[900px]
                   rounded-full
                   border-[120px]
                   border-primary-50/80">
        </div>


        {{-- Top-right small circle --}}
        <div
            class="absolute
                   right-[15%] top-[40px]
                   h-[72px] w-[72px]
                   rounded-full
                   bg-primary-50/80">
        </div>


        {{-- Right dotted pattern --}}
        <div
            class="absolute
                   right-[5%] top-[145px]
                   hidden grid-cols-5 gap-[12px]
                   opacity-35
                   lg:grid">

            @for ($i = 0; $i < 25; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor

        </div>


        {{-- Bottom-left dotted pattern --}}
        <div
            class="absolute
                   bottom-[90px] left-[4%]
                   hidden grid-cols-5 gap-[12px]
                   opacity-25
                   lg:grid">

            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor

        </div>


        {{-- Soft center glow --}}
        <div
            class="absolute
                   left-1/2 top-[38%]
                   h-[460px] w-[960px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[120px]">
        </div>

    </div>


    {{-- hero content --}}
    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               pb-20 pt-20
               sm:px-8
               sm:pb-24 sm:pt-24
               lg:px-8
               lg:pb-28 lg:pt-28">

        <div class="mx-auto
                   max-w-[980px]
                   text-center">


            {{-- eyebrow --}}
            <div
                class="inline-flex
                       items-center gap-2.5
                       rounded-full
                       border border-primary-200
                       bg-primary-50/80
                       px-4 py-2
                       shadow-sm
                       backdrop-blur-sm">

                {{-- Link icon --}}
                <svg class="h-4 w-4
                           text-primary-600" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.9" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 13a5 5 0 0 0 7.07 0l2.12-2.12a5 5 0 0 0-7.07-7.07L11 4.93" />

                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14 11a5 5 0 0 0-7.07 0L4.8 13.12a5 5 0 0 0 7.07 7.07L13 19.07" />
                </svg>


                <span
                    class="text-[12px]
                           font-bold uppercase
                           tracking-[0.08em]
                           text-primary-600">
                    Powerful Ecosystem • Integrations
                </span>

            </div>



            {{-- heading --}}
            <h1
                class="mx-auto mt-7
                       max-w-[950px]
                       text-[42px]
                       font-extrabold
                       leading-[1.03]
                       tracking-[-0.05em]
                       text-secondary-950
                       sm:text-[54px]
                       lg:text-[68px]">

                Connect StockCore with

                <span class="block">

                    your

                    <span class="text-primary-600">
                        entire tech stack
                    </span>

                </span>

            </h1>



            {{-- descriiption --}}
            <p
                class="mx-auto mt-6
                       max-w-[760px]
                       text-[16px]
                       leading-7
                       text-secondary-600
                       sm:text-[18px]
                       sm:leading-8">
                Seamlessly sync inventory, purchase orders, COGS, and financial
                data with Australia’s top accounting, ERP, and e-commerce platforms.
            </p>



            {{-- search --}}
            <div class="mx-auto mt-10
                       w-full max-w-[760px]">

                <div
                    class="flex h-[60px] w-full
                           items-center
                           rounded-2xl
                           border border-secondary-200
                           bg-white
                           px-5
                           shadow-[0_10px_30px_rgba(15,23,42,0.06)]
                           transition-all duration-300

                           focus-within:border-primary-300
                           focus-within:ring-4
                           focus-within:ring-primary-50">

                    {{-- Search icon --}}
                    <span
                        class="flex h-5 w-5
                               shrink-0
                               items-center justify-center
                               text-secondary-400">

                        <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />

                            <path d="m20 20-3.5-3.5" />
                        </svg>

                    </span>


                    {{-- Search input --}}
                    <input id="integration-search" type="search" autocomplete="off"
                        placeholder="Search integrations (e.g. Xero, Shopify, Cin7, MYOB)..."
                        class="ml-3
                               h-full min-w-0 flex-1
                               border-0
                               bg-transparent
                               p-0
                               text-[14px]
                               text-secondary-800
                               outline-none
                               placeholder:text-secondary-400

                               focus:border-0
                               focus:outline-none
                               focus:ring-0

                               sm:text-[15px]">

                </div>

            </div>



            {{-- category filters --}}
            <div
                class="mx-auto mt-7
                       flex max-w-[820px]
                       flex-wrap
                       items-center justify-center
                       gap-2.5">

                @foreach ($integrationCategories as $index => $category)
                    <button type="button" data-integration-category="{{ $category['key'] }}"
                        class="integration-category
                               shrink-0
                               rounded-full
                               border
                               px-5 py-2.5
                               text-[13px]
                               font-semibold
                               transition-all duration-250

                               {{ $index === 0
                                   ? 'is-active border-primary-600 bg-primary-600 text-white shadow-[0_8px_20px_rgba(37,99,235,0.20)]'
                                   : 'border-secondary-200 bg-white text-secondary-700 hover:border-primary-200 hover:bg-primary-50 hover:text-primary-700' }}">

                        {{ $category['label'] }}

                    </button>
                @endforeach

            </div>

        </div>

    </div>

</section>


{{-- hero integrations --}}
@push('scripts')
    <script>
        $(document).ready(function() {

            //    category selection

            $('.integration-category').on('click', function() {

                const selectedCategory =
                    $(this).data('integration-category');


                /*
                 * Reset every category
                 */
                $('.integration-category')
                    .removeClass(
                        'is-active border-primary-600 bg-primary-600 text-white shadow-[0_8px_20px_rgba(37,99,235,0.20)]'
                    )
                    .addClass(
                        'border-secondary-200 bg-white text-secondary-700'
                    );


                /*
                 * Activate clicked category
                 */
                $(this)
                    .removeClass(
                        'border-secondary-200 bg-white text-secondary-700'
                    )
                    .addClass(
                        'is-active border-primary-600 bg-primary-600 text-white shadow-[0_8px_20px_rgba(37,99,235,0.20)]'
                    );


                /*
                 * Save selected category on hero.
                 *
                 * The integration grid we build next can read this.
                 */
                $('#integrations-hero')
                    .attr(
                        'data-active-category',
                        selectedCategory
                    );


                /*
                 * Trigger custom event.
                 *
                 * The next integration-grid section can listen
                 * to this event and filter its cards.
                 */
                $(document).trigger(
                    'stockcore:integration-category',
                    [selectedCategory]
                );

            });



            //   search

            $('#integration-search').on('input', function() {

                const searchTerm =
                    $(this)
                    .val()
                    .trim()
                    .toLowerCase();


                /*
                 * Save current search query.
                 */
                $('#integrations-hero')
                    .attr(
                        'data-search',
                        searchTerm
                    );


                /*
                 * Trigger custom event for integration cards.
                 */
                $(document).trigger(
                    'stockcore:integration-search',
                    [searchTerm]
                );

            });

        });
    </script>
@endpush
