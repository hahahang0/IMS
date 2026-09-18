{{-- blog resources hero section --}}

@php

    #blog categories

    $blogCategories = [
        [
            'key' => 'all',
            'label' => 'All Articles',
        ],

        [
            'key' => 'inventory-tips',
            'label' => 'Inventory Tips',
        ],

        [
            'key' => 'guides-tutorials',
            'label' => 'Guides & Tutorials',
        ],

        [
            'key' => 'product-updates',
            'label' => 'Product Updates',
        ],

        [
            'key' => 'accounting-tax',
            'label' => 'Accounting & Tax',
        ],
    ];

    #popular topics

    $popularTopics = [
        [
            'label' => '#LandedCost',
            'search' => 'Landed Cost',
        ],

        [
            'label' => '#FIFO Costing',
            'search' => 'FIFO Costing',
        ],

        [
            'label' => '#Xero Sync',
            'search' => 'Xero Sync',
        ],

        [
            'label' => '#MultiWarehouse',
            'search' => 'Multi Warehouse',
        ],
    ];

@endphp



<section id="blog-hero"
    class="relative overflow-hidden
           border-b border-secondary-200
           bg-background">

    {{-- background decorations --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- top-left curve --}}
        <div
            class="absolute
                   -left-[340px] -top-[430px]
                   h-[760px] w-[760px]
                   rounded-full
                   border-[105px]
                   border-primary-50/75">
        </div>


        {{-- left lower curve --}}
        <div
            class="absolute
                   -left-[430px] top-[260px]
                   h-[720px] w-[720px]
                   rounded-full
                   border-[100px]
                   border-primary-50/55">
        </div>


        {{-- top-right curve --}}
        <div
            class="absolute
                   -right-[340px] -top-[400px]
                   h-[800px] w-[800px]
                   rounded-full
                   border-[115px]
                   border-primary-50/70">
        </div>


        {{-- right soft shape --}}
        <div
            class="absolute
                   -right-[420px] top-[260px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[100px]
                   border-primary-50/45">
        </div>


        {{-- central soft glow --}}
        <div
            class="absolute
                   left-1/2 top-[34%]
                   h-[430px] w-[950px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[110px]">
        </div>

    </div>


    {{-- hero content --}}
    <div
        class="relative z-10
               mx-auto
               max-w-7xl
               px-6
               pt-16
               sm:px-8
               sm:pt-20
               lg:px-8
               lg:pt-20">

        {{-- introduction --}}
        <div class="mx-auto
                   max-w-[920px]
                   text-center">

            {{-- Eyebrow --}}
            <div
                class="inline-flex
                       items-center gap-2.5
                       rounded-full
                       border border-primary-100
                       bg-primary-50/80
                       px-4 py-2
                       shadow-sm">

                <svg class="h-4 w-4
                           text-primary-600" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 4.5h5.5A3.5 3.5 0 0 1 14 8v12a3.5 3.5 0 0 0-3.5-3.5H5V4.5Z" />

                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 4.5h-5.5A3.5 3.5 0 0 0 10 8v12a3.5 3.5 0 0 1 3.5-3.5H19V4.5Z" />
                </svg>


                <span
                    class="text-[11px]
                           font-bold uppercase
                           tracking-[0.09em]
                           text-primary-600
                           sm:text-[12px]">
                    Blog & Resources
                </span>

            </div>



            {{-- Heading --}}
            <h1
                class="mx-auto mt-6
                       max-w-[900px]
                       text-[40px]
                       font-extrabold
                       leading-[1.03]
                       tracking-[-0.05em]
                       text-secondary-950

                       sm:text-[52px]
                       lg:text-[62px]">
                Practical insights for

                <span class="block text-primary-600">
                    smarter inventory management.
                </span>
            </h1>



            {{-- Description --}}
            <p
                class="mx-auto mt-5
                       max-w-[720px]
                       text-[16px]
                       leading-7
                       text-secondary-600
                       sm:text-[17px]">
                Tips, guides and industry insights to help you streamline
                operations, reduce costs and grow your business.
            </p>

        </div>



        {{-- search area --}}
        <div class="mx-auto mt-9
                   max-w-[760px]">

            {{-- Search Form --}}
            <form id="blog-search-form" action="#" method="GET">

                <div
                    class="flex
                           min-h-[58px]
                           items-center
                           rounded-[15px]
                           border border-secondary-200
                           bg-white
                           p-1.5
                           shadow-[0_8px_24px_rgba(15,23,42,0.05)]

                           transition-all duration-300

                           focus-within:border-primary-300
                           focus-within:ring-4
                           focus-within:ring-primary-50">

                    {{-- Search Icon --}}
                    <span
                        class="ml-3
                               flex h-9 w-9
                               shrink-0
                               items-center justify-center
                               text-secondary-400">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />

                            <path stroke-linecap="round" d="m20 20-3.5-3.5" />
                        </svg>

                    </span>



                    {{-- Search Input --}}
                    <input id="blog-search" name="search" type="search" autocomplete="off"
                        placeholder="Search articles (e.g. FIFO, Landed Cost, Xero, Warehouse)..."
                        class="h-11
                               min-w-0 flex-1
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
                               sm:text-[15px]">



                    {{-- Search Button --}}
                    <button type="submit"
                        class="group
                               inline-flex
                               h-[48px]
                               shrink-0
                               items-center justify-center
                               gap-2
                               rounded-[12px]
                               bg-primary-600
                               px-5
                               text-[13px]
                               font-semibold
                               text-white

                               shadow-[0_6px_18px_rgba(37,99,235,0.20)]

                               transition-all duration-300

                               hover:bg-primary-700

                               sm:px-7
                               sm:text-[14px]
                               hover:cursor-pointer">

                        Search

                        <svg class="hidden h-3.5 w-3.5
                                   transition-transform duration-300
                                   group-hover:translate-x-0.5
                                   sm:block"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>

                    </button>

                </div>

            </form>



            {{-- popular topics --}}
            <div
                class="mt-3
                       flex flex-wrap
                       items-center
                       justify-center
                       gap-2">

                <span
                    class="mr-1
                           text-[11px]
                           font-medium
                           text-secondary-500">
                    Popular Topics:
                </span>


                @foreach ($popularTopics as $topic)
                    <button type="button" data-blog-topic="{{ $topic['search'] }}"
                        class="blog-topic
                               rounded-[5px]
                               border border-secondary-200
                               bg-white
                               px-2.5 py-1
                               text-[11px]
                               font-medium
                               leading-none
                               text-secondary-600

                               transition-all duration-200

                               hover:border-primary-200
                               hover:bg-primary-50
                               hover:text-primary-700
                               hover:cursor-pointer">
                        {{ $topic['label'] }}
                    </button>
                @endforeach

            </div>

        </div>




        <div class="h-14 sm:h-16"></div>
        {{-- category navigation --}}
        <div class="relative">

            {{-- mobile horizontal scrolling --}}
            <div id="blog-category-navigation"
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
                       lg:gap-14">

                @foreach ($blogCategories as $index => $category)
                    <button type="button" data-blog-category="{{ $category['key'] }}"
                        class="blog-category-filter
                               relative
                               shrink-0
                               px-1
                               pb-4
                               text-[13px]
                               font-medium

                               transition-colors duration-250

                               {{ $index === 0 ? 'is-active text-primary-600' : 'text-secondary-700 hover:text-primary-600' }}
                                hover:cursor-pointer">

                        {{ $category['label'] }}


                        {{-- Active underline --}}
                        <span
                            class="blog-category-line
                                   absolute
                                   bottom-0 left-0
                                   h-[2px]
                                   w-full
                                   bg-primary-600

                                   transition-all duration-300

                                   {{ $index === 0 ? 'scale-x-100 opacity-100' : 'scale-x-0 opacity-0' }}"></span>

                    </button>
                @endforeach

            </div>

        </div>

    </div>

</section>






<script>
    $(document).ready(function() {

        //    current state

        let activeBlogCategory = 'all';

        let blogSearchTerm = '';



        // category filter

        $('.blog-category-filter').on('click', function() {

            const selectedCategory =
                $(this).data('blog-category');


            activeBlogCategory =
                selectedCategory;


            /*
             * Reset all category buttons.
             */
            $('.blog-category-filter')
                .removeClass(
                    'is-active text-primary-600'
                )
                .addClass(
                    'text-secondary-700'
                );


            /*
             * Hide all underlines.
             */
            $('.blog-category-line')
                .removeClass(
                    'scale-x-100 opacity-100'
                )
                .addClass(
                    'scale-x-0 opacity-0'
                );


            /*
             * Activate selected button.
             */
            $(this)
                .removeClass(
                    'text-secondary-700'
                )
                .addClass(
                    'is-active text-primary-600'
                );


            /*
             * Show underline.
             */
            $(this)
                .find('.blog-category-line')
                .removeClass(
                    'scale-x-0 opacity-0'
                )
                .addClass(
                    'scale-x-100 opacity-100'
                );


            /*
             * Store state.
             */
            $('#blog-hero')
                .attr(
                    'data-active-category',
                    selectedCategory
                );


            /*
             * Notify the article section.
             */
            $(document).trigger(
                'stockcore:blog-category',
                [selectedCategory]
            );

        });



        //    live search

        $('#blog-search').on('input', function() {

            blogSearchTerm =
                $(this)
                .val()
                .trim()
                .toLowerCase();


            $('#blog-hero')
                .attr(
                    'data-search',
                    blogSearchTerm
                );


            $(document).trigger(
                'stockcore:blog-search',
                [blogSearchTerm]
            );

        });



        //  search submit

        $('#blog-search-form').on('submit', function(event) {

            event.preventDefault();


            blogSearchTerm =
                $('#blog-search')
                .val()
                .trim()
                .toLowerCase();


            $(document).trigger(
                'stockcore:blog-search',
                [blogSearchTerm]
            );


            /*
             * Move to article results.
             */
            if ($('#blog-articles').length) {

                $('html, body').animate({
                        scrollTop: $('#blog-articles')
                            .offset()
                            .top - 90
                    },
                    450
                );

            }

        });


        // popular topic buttons

        $('.blog-topic').on('click', function() {

            const topic =
                $(this)
                .data('blog-topic');


            /*
             * Put selected topic into search input.
             */
            $('#blog-search')
                .val(topic);


            blogSearchTerm =
                String(topic)
                .trim()
                .toLowerCase();


            /*
             * Trigger article search.
             */
            $(document).trigger(
                'stockcore:blog-search',
                [blogSearchTerm]
            );


            /*
             * Optional scroll to results.
             */
            if ($('#blog-articles').length) {

                $('html, body').animate({
                        scrollTop: $('#blog-articles')
                            .offset()
                            .top - 90
                    },
                    450
                );

            }

        });

    });
</script>


