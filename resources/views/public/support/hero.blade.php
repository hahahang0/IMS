{{-- support hero section --}}

@php

    $supportCategories = [

        [
            'key' => 'all',
            'label' => 'All Categories',
        ],

        [
            'key' => 'inventory-control',
            'label' => 'Inventory Control',
        ],

        [
            'key' => 'order-fulfillment',
            'label' => 'Order Fulfillment',
        ],

        [
            'key' => 'integrations-api',
            'label' => 'Integrations & API',
        ],

        [
            'key' => 'b2b-sales',
            'label' => 'B2B & Sales',
        ],

    ];


    $popularTopics = [

        [
            'label' => '#LandedCost',
            'search' => 'Landed Cost',
        ],

        [
            'label' => '#FIFOCosting',
            'search' => 'FIFO Costing',
        ],

        [
            'label' => '#XeroSync',
            'search' => 'Xero Sync',
        ],

        [
            'label' => '#MultiWarehouse',
            'search' => 'Multi Warehouse',
        ],

    ];

@endphp



<section
    id="support-hero"
    class="relative overflow-hidden
           border-b border-secondary-200
           bg-background-muted"
>

 {{-- background decoration --}}
    <div
        class="pointer-events-none absolute inset-0 overflow-hidden"
        aria-hidden="true"
    >

        {{-- Top left large curve --}}
        <div
            class="absolute
                   -left-[420px] -top-[350px]
                   h-[820px] w-[820px]
                   rounded-full
                   border-[110px]
                   border-primary-50/70"
        ></div>


        {{-- Bottom right curve --}}
        <div
            class="absolute
                   -right-[370px] bottom-[-480px]
                   h-[820px] w-[820px]
                   rounded-full
                   border-[110px]
                   border-primary-50/80"
        ></div>


        {{-- Right soft glow --}}
        <div
            class="absolute
                   right-[5%] top-[18%]
                   h-[300px] w-[300px]
                   rounded-full
                   bg-primary-50/60
                   blur-[80px]"
        ></div>



        {{-- LEFT DOT PATTERN --}}
        <div
            class="absolute
                   left-[4%] top-[58%]
                   hidden grid-cols-4 gap-[10px]
                   opacity-35
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



        {{-- RIGHT DOT PATTERN --}}
        <div
            class="absolute
                   right-[5%] top-[28%]
                   hidden grid-cols-5 gap-[10px]
                   opacity-30
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

    </div>


{{-- hero body --}}
    <div
        class="relative z-10
               mx-auto
               max-w-7xl
               px-6
               pt-12
               sm:px-8
               sm:pt-14
               lg:px-8
               lg:pt-16"
    >

        <div
            class="mx-auto
                   max-w-[920px]
                   text-center"
        >
{{-- braed crumb --}}
            <nav
                class="flex
                       items-center
                       justify-center
                       gap-2
                       text-[11px]
                       font-semibold uppercase
                       tracking-[0.06em]"
                aria-label="Breadcrumb"
            >

                <a
                    href="{{ url('/') }}"
                    class="text-secondary-400
                           transition
                           hover:text-primary-600"
                >
                    Home
                </a>


                <span class="text-secondary-300">
                    /
                </span>


                <span class="text-primary-600">
                    Support & Help Centre
                </span>

            </nav>



        {{-- heading --}}
            <h1
                class="mt-7
                       text-[44px]
                       font-extrabold
                       leading-[1.02]
                       tracking-[-0.05em]
                       text-primary-600

                       sm:text-[54px]
                       lg:text-[64px]"
            >
                smarter support hub.
            </h1>



     {{-- description --}}
            <p
                class="mx-auto mt-5
                       max-w-[700px]
                       text-[16px]
                       leading-7
                       text-secondary-600
                       sm:text-[17px]
                       sm:leading-8"
            >
                Tips, guides, and technical insights to help you streamline
                inventory operations, reduce costs, and resolve issues fast.
            </p>


{{-- search --}}
            <div
                class="mx-auto mt-9
                       max-w-[760px]"
            >

                <form
                    id="support-search-form"
                    action="#"
                    method="GET"
                >

                    <div
                        class="flex
                               min-h-[64px]
                               items-center
                               rounded-[16px]
                               border border-secondary-200
                               bg-white
                               p-1.5

                               shadow-[0_12px_35px_rgba(15,23,42,0.06)]

                               transition-all duration-300

                               focus-within:border-primary-300
                               focus-within:ring-4
                               focus-within:ring-primary-50"
                    >

                        {{-- Search icon --}}
                        <span
                            class="ml-3
                                   flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   text-secondary-400"
                        >

                            <svg
                                class="h-5 w-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                aria-hidden="true"
                            >
                                <circle
                                    cx="11"
                                    cy="11"
                                    r="7"
                                />

                                <path
                                    stroke-linecap="round"
                                    d="m20 20-3.5-3.5"
                                />
                            </svg>

                        </span>



                        {{-- Search input --}}
                        <input
                            id="support-search"
                            name="search"
                            type="search"
                            autocomplete="off"
                            placeholder="Search articles (e.g. FIFO, Landed Cost, Xero, Warehouse)..."
                            class="h-12
                                   min-w-0
                                   flex-1
                                   border-0
                                   bg-transparent
                                   px-2
                                   text-[14px]
                                   text-secondary-900
                                   outline-none

                                   placeholder:text-secondary-400

                                   focus:border-0
                                   focus:outline-none
                                   focus:ring-0

                                   sm:px-3
                                   sm:text-[15px]"
                        >



                        {{-- Search button --}}
                        <button
                            type="submit"
                            class="group
                                   inline-flex
                                   h-[52px]
                                   shrink-0
                                   items-center justify-center
                                   gap-2
                                   rounded-[13px]
                                   bg-primary-600
                                   px-5
                                   text-[13px]
                                   font-semibold
                                   text-white

                                   shadow-[0_9px_22px_rgba(37,99,235,0.25)]

                                   transition-all duration-300

                                   hover:bg-primary-700
                                   hover:shadow-[0_12px_28px_rgba(37,99,235,0.30)]

                                   sm:px-7
                                   sm:text-[14px]
                                   hover:cursor-pointer"
                        >

                            <span class="hidden sm:inline">
                                Search
                            </span>


                            <svg
                                class="h-4 w-4
                                       transition-transform
                                       duration-300
                                       group-hover:translate-x-1"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 12h14m-5-5 5 5-5 5"
                                />
                            </svg>

                        </button>

                    </div>

                </form>



               {{-- popular topics --}}
                <div
                    class="mt-4
                           flex flex-wrap
                           items-center
                           justify-center
                           gap-2"
                >

                    <span
                        class="mr-1
                               text-[11px]
                               font-medium
                               text-secondary-400"
                    >
                        Popular Topics:
                    </span>


                    @foreach ($popularTopics as $topic)

                        <button
                            type="button"
                            data-support-topic="{{ $topic['search'] }}"
                            class="support-topic
                                   rounded-[6px]
                                   border border-secondary-200
                                   bg-white/80
                                   px-3 py-1.5
                                   text-[11px]
                                   font-medium
                                   leading-none
                                   text-secondary-600

                                   transition-all duration-200

                                   hover:border-primary-200
                                   hover:bg-primary-50
                                   hover:text-primary-700
                                   hover:cursor-pointer"
                        >
                            {{ $topic['label'] }}
                        </button>

                    @endforeach

                </div>

            </div>

        </div>



  {{-- space above category bar --}}
        <div
            class="h-16
                   sm:h-20
                   lg:h-24"
        ></div>

    </div>



{{-- category navigation --}}
    <div
        class="relative z-20
               border-t border-secondary-100
               bg-white/80
               backdrop-blur-md"
    >

        <div
            class="mx-auto
                   max-w-7xl
                   px-6
                   sm:px-8
                   lg:px-8"
        >

            <div
                id="support-category-navigation"
                class="flex
                       items-end
                       justify-start
                       gap-8
                       overflow-x-auto
                       whitespace-nowrap

                       [scrollbar-width:none]
                       [&::-webkit-scrollbar]:hidden

                       sm:justify-center
                       sm:gap-10
                       lg:gap-14"
            >

                @foreach ($supportCategories as $index => $category)

                    <button
                        type="button"
                        data-support-category="{{ $category['key'] }}"
                        class="support-category-filter
                               relative
                               shrink-0
                               px-1
                               pb-4
                               pt-4
                               text-[13px]
                               font-semibold

                               transition-colors duration-300

                               {{ $index === 0
                                    ? 'is-active text-primary-600'
                                    : 'text-secondary-600 hover:text-primary-600'
                               }}
                               
                               hover:cursor-pointer"
                    >

                        {{ $category['label'] }}


                        {{-- ACTIVE UNDERLINE --}}
                        <span
                            class="support-category-line
                                   absolute
                                   bottom-0 left-0
                                   h-[2px]
                                   w-full
                                   origin-center
                                   bg-primary-600

                                   transition-all duration-300

                                   {{ $index === 0
                                        ? 'scale-x-100 opacity-100'
                                        : 'scale-x-0 opacity-0'
                                   }}"
                        ></span>

                    </button>

                @endforeach

            </div>

        </div>

    </div>



{{-- floating contact support button --}}
    {{-- <a
        href="#contact-support"
        class="group
               fixed
               bottom-6 right-6
               z-50

               inline-flex
               min-h-[48px]
               items-center justify-center
               gap-2.5

               rounded-full
               bg-primary-600
               px-5

               text-[13px]
               font-semibold
               text-white

               shadow-[0_14px_32px_rgba(37,99,235,0.28)]

               transition-all duration-300

               hover:-translate-y-1
               hover:bg-primary-700
               hover:shadow-[0_18px_38px_rgba(37,99,235,0.34)]

               sm:px-6
               hover:cursor-pointer "
    >

        <svg
            class="h-5 w-5"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            aria-hidden="true"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M5 4h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H9l-5 4V6a2 2 0 0 1 2-2Z"
            />
        </svg>


        <span class="hidden sm:inline">
            Contact Support
        </span>

    </a> --}}

</section>


{{-- hero interactions --}}


<script>
$(document).ready(function () {

    let currentSupportCategory = 'all';

    let currentSupportSearch = '';


    /*
    |--------------------------------------------------------------------------
    | CATEGORY NAVIGATION
    |--------------------------------------------------------------------------
    */

    $('.support-category-filter').on('click', function () {

        const category =
            $(this).data('support-category');


        currentSupportCategory =
            category;


        /*
         * Reset buttons.
         */
        $('.support-category-filter')
            .removeClass(
                'is-active text-primary-600'
            )
            .addClass(
                'text-secondary-600'
            );


        /*
         * Reset underline.
         */
        $('.support-category-line')
            .removeClass(
                'scale-x-100 opacity-100'
            )
            .addClass(
                'scale-x-0 opacity-0'
            );


        /*
         * Active button.
         */
        $(this)
            .removeClass(
                'text-secondary-600'
            )
            .addClass(
                'is-active text-primary-600'
            );


        /*
         * Active underline.
         */
        $(this)
            .find('.support-category-line')
            .removeClass(
                'scale-x-0 opacity-0'
            )
            .addClass(
                'scale-x-100 opacity-100'
            );


        /*
         * Trigger event for future help article section.
         */
        $(document).trigger(
            'stockcore:support-category',
            [category]
        );

    });



    /*
    |--------------------------------------------------------------------------
    | LIVE SEARCH
    |--------------------------------------------------------------------------
    */

    $('#support-search').on('input', function () {

        currentSupportSearch =
            $(this)
                .val()
                .trim()
                .toLowerCase();


        $(document).trigger(
            'stockcore:support-search',
            [currentSupportSearch]
        );

    });



    /*
    |--------------------------------------------------------------------------
    | SEARCH FORM
    |--------------------------------------------------------------------------
    */

    $('#support-search-form').on('submit', function (event) {

        event.preventDefault();


        currentSupportSearch =
            $('#support-search')
                .val()
                .trim()
                .toLowerCase();


        $(document).trigger(
            'stockcore:support-search',
            [currentSupportSearch]
        );


        /*
         * Scroll to help categories once we build them.
         */
        if ($('#support-help-content').length) {

            $('html, body').animate(
                {
                    scrollTop:
                        $('#support-help-content')
                            .offset()
                            .top - 90
                },
                450
            );

        }

    });



    /*
    |--------------------------------------------------------------------------
    | POPULAR TOPICS
    |--------------------------------------------------------------------------
    */

    $('.support-topic').on('click', function () {

        const topic =
            $(this)
                .data('support-topic');


        /*
         * Fill search input.
         */
        $('#support-search')
            .val(topic);


        currentSupportSearch =
            String(topic)
                .trim()
                .toLowerCase();


        /*
         * Trigger search.
         */
        $(document).trigger(
            'stockcore:support-search',
            [currentSupportSearch]
        );


        /*
         * Visual selected state.
         */
        $('.support-topic')
            .removeClass(
                'border-primary-300 bg-primary-50 text-primary-700'
            );


        $(this)
            .addClass(
                'border-primary-300 bg-primary-50 text-primary-700'
            );


        /*
         * Scroll to results.
         */
        if ($('#support-help-content').length) {

            $('html, body').animate(
                {
                    scrollTop:
                        $('#support-help-content')
                            .offset()
                            .top - 90
                },
                450
            );

        }

    });

});
</script>

