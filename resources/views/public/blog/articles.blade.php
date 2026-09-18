{{-- blog articles section --}}

@php

    //   filtered articles by category

    $featuredArticles = [
        'all' => [
            'category' => 'Guides & Tutorials',
            'category_key' => 'guides-tutorials',
            'read_time' => '8 min read',

            'title' => 'How to Calculate Landed Cost Accurately for Australian Businesses',

            'description' =>
                'Stop eroding profit margins with hidden freight, tariffs and customs fees. Learn step-by-step formulas to accurately calculate your true landed inventory costs.',

            'author' => 'Emma Marshall',
            'role' => 'Lead Inventory Strategist',
            'initials' => 'EM',

            'image' => 'images/blog/featured-landed-cost.webp',

            'url' => '#',
        ],

        'inventory-tips' => [
            'category' => 'Inventory Tips',
            'category_key' => 'inventory-tips',
            'read_time' => '6 min read',

            'title' => 'What is FIFO Costing? A Complete Guide for Australian Businesses',

            'description' =>
                'Understand how FIFO costing works, why it matters for inventory valuation and how it can help improve stock accuracy and profitability.',

            'author' => 'Liam Hughes',
            'role' => 'Inventory Specialist',
            'initials' => 'LH',

            'image' => 'images/blog/featured-fifo.webp',

            'url' => '#',
        ],

        'guides-tutorials' => [
            'category' => 'Guides & Tutorials',
            'category_key' => 'guides-tutorials',
            'read_time' => '8 min read',

            'title' => 'How to Calculate Landed Cost Accurately for Australian Businesses',

            'description' =>
                'Learn how to calculate freight, duties, taxes and other costs so you can understand the true cost of every product you import.',

            'author' => 'Emma Marshall',
            'role' => 'Lead Inventory Strategist',
            'initials' => 'EM',

            'image' => 'images/blog/featured-landed-cost.webp',

            'url' => '#',
        ],

        'product-updates' => [
            'category' => 'Product Updates',
            'category_key' => 'product-updates',
            'read_time' => '5 min read',

            'title' => 'Introducing Smarter Reporting and Inventory Insights in StockCore',

            'description' =>
                'Explore the latest StockCore reporting improvements designed to give growing businesses clearer inventory insights and faster decision-making.',

            'author' => 'Sarah Chen',
            'role' => 'Product Manager',
            'initials' => 'SC',

            'image' => 'images/blog/featured-product-update.webp',

            'url' => '#',
        ],

        'accounting-tax' => [
            'category' => 'Accounting & Tax',
            'category_key' => 'accounting-tax',
            'read_time' => '7 min read',

            'title' => 'Inventory Accounting Explained for Australian Businesses',

            'description' =>
                'Understand inventory valuation, COGS and stock adjustments so your inventory and financial records stay accurate and aligned.',

            'author' => 'Daniel Roberts',
            'role' => 'Inventory Accountant',
            'initials' => 'DR',

            'image' => 'images/blog/featured-accounting.webp',

            'url' => '#',
        ],
    ];

    //   latest articles

    $articles = [
        [
            'category' => 'Inventory Tips',
            'category_key' => 'inventory-tips',

            'date' => 'May 14, 2026',
            'read_time' => '5 min read',

            'title' => 'What is FIFO Costing? Complete Guide to First-In, First-Out Stock Valuation',

            'description' =>
                'Discover how FIFO costing can improve inventory valuation and help businesses maintain clearer cost records.',

            'author' => 'Liam Hughes',
            'initials' => 'LH',

            'image' => 'images/blog/fifo-costing.webp',

            'url' => '#',
        ],

        [
            'category' => 'Product Updates',
            'category_key' => 'product-updates',

            'date' => 'May 10, 2026',
            'read_time' => '4 min read',

            'title' => 'New StockCore Reporting Tools for Smarter Inventory Decisions',

            'description' =>
                'Get a first look at the latest inventory dashboards and reporting improvements available in StockCore.',

            'author' => 'Sarah Chen',
            'initials' => 'SC',

            'image' => 'images/blog/reporting-tools.webp',

            'url' => '#',
        ],

        [
            'category' => 'Accounting & Tax',
            'category_key' => 'accounting-tax',

            'date' => 'May 6, 2026',
            'read_time' => '6 min read',

            'title' => 'A Complete Guide to Inventory Accounting for Australian SMEs',

            'description' =>
                'Learn how inventory, COGS and stock valuation connect to your financial reporting and accounting processes.',

            'author' => 'Daniel Roberts',
            'initials' => 'DR',

            'image' => 'images/blog/inventory-accounting.webp',

            'url' => '#',
        ],

        [
            'category' => 'Guides & Tutorials',
            'category_key' => 'guides-tutorials',

            'date' => 'April 29, 2026',
            'read_time' => '7 min read',

            'title' => 'How to Calculate Landed Cost Step by Step',

            'description' =>
                'A practical guide for importers who want more accurate product costing and clearer profit margins.',

            'author' => 'Olivia Grant',
            'initials' => 'OG',

            'image' => 'images/blog/landed-cost-guide.webp',

            'url' => '#',
        ],

        [
            'category' => 'Inventory Tips',
            'category_key' => 'inventory-tips',

            'date' => 'April 22, 2026',
            'read_time' => '5 min read',

            'title' => 'How to Avoid Stockouts Without Overstocking',

            'description' =>
                'Simple inventory control methods to keep products available without holding unnecessary stock.',

            'author' => 'Noah Parker',
            'initials' => 'NP',

            'image' => 'images/blog/stock-control.webp',

            'url' => '#',
        ],

        [
            'category' => 'Guides & Tutorials',
            'category_key' => 'guides-tutorials',

            'date' => 'April 18, 2026',
            'read_time' => '8 min read',

            'title' => 'Choosing the Right Inventory Software for a Growing Business',

            'description' =>
                'Learn what to look for when comparing inventory systems for wholesale, retail and multi-channel businesses.',

            'author' => 'Mia Foster',
            'initials' => 'MF',

            'image' => 'images/blog/inventory-software.webp',

            'url' => '#',
        ],

        [
            'category' => 'Inventory Tips',
            'category_key' => 'inventory-tips',

            'date' => 'April 12, 2026',
            'read_time' => '5 min read',

            'title' => '7 Ways to Improve Stock Accuracy Across Multiple Warehouses',

            'description' =>
                'Improve stock visibility across locations and reduce discrepancies between physical and recorded inventory.',

            'author' => 'Chris Morgan',
            'initials' => 'CM',

            'image' => 'images/blog/multi-warehouse.webp',

            'url' => '#',
        ],

        [
            'category' => 'Product Updates',
            'category_key' => 'product-updates',

            'date' => 'April 5, 2026',
            'read_time' => '4 min read',

            'title' => 'Barcode Scanning Is Now Faster in StockCore',

            'description' =>
                'See how the latest scanning improvements make receiving, picking and stocktakes quicker and easier.',

            'author' => 'Rachel Park',
            'initials' => 'RP',

            'image' => 'images/blog/barcode-scanning.webp',

            'url' => '#',
        ],

        [
            'category' => 'Accounting & Tax',
            'category_key' => 'accounting-tax',

            'date' => 'March 28, 2026',
            'read_time' => '6 min read',

            'title' => 'Understanding Cost of Goods Sold for Inventory Businesses',

            'description' =>
                'Learn how COGS works and why accurate inventory costing is essential for understanding your real margins.',

            'author' => 'Daniel Roberts',
            'initials' => 'DR',

            'image' => 'images/blog/cogs-guide.webp',

            'url' => '#',
        ],
    ];
    $previewArticles = array_slice($articles, 0, 12);

@endphp



<section id="blog-articles"
    class="relative overflow-hidden
           bg-background-muted
           py-16
           sm:py-20
           lg:py-24">

    {{-- background --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        <div
            class="absolute
                   -left-[320px] top-[80px]
                   h-[650px] w-[650px]
                   rounded-full
                   border-[95px]
                   border-primary-50/45">
        </div>


        <div
            class="absolute
                   -right-[340px] bottom-[100px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[100px]
                   border-primary-50/50">
        </div>

    </div>



    <div
        class="relative z-10
               mx-auto
               max-w-7xl
               px-6
               sm:px-8
               lg:px-8">

        {{-- featured article area --}}
        <div id="featured-article-container">

            @foreach ($featuredArticles as $key => $featured)
                <article data-featured-category="{{ $key }}"
                    data-featured-search="{{ strtolower($featured['title'] . ' ' . $featured['description'] . ' ' . $featured['category']) }}"
                    class="featured-blog-article
                           group
                           {{ $key !== 'all' ? 'hidden' : '' }}
                           overflow-hidden
                           rounded-[24px]
                           border border-primary-100
                           bg-white
                           shadow-[0_16px_45px_rgba(15,23,42,0.05)]">

                    <div class="grid
                               lg:grid-cols-[1.18fr_0.82fr]">

                        {{-- featured image --}}
                        <a href="{{ $featured['url'] }}"
                            class="relative
                                   block
                                   min-h-[320px]
                                   overflow-hidden
                                   lg:min-h-[410px]">

                            <img src="{{ asset($featured['image']) }}" alt="{{ $featured['title'] }}"
                                class="absolute inset-0
                                       h-full w-full
                                       object-cover

                                       transition-transform
                                       duration-700
                                       ease-out

                                       group-hover:scale-[1.04]">


                            {{-- Featured badge --}}
                            <span
                                class="absolute
                                       left-5 top-5
                                       inline-flex
                                       items-center gap-2
                                       rounded-full
                                       bg-primary-600
                                       px-4 py-2
                                       text-[11px]
                                       font-semibold
                                       text-white
                                       shadow-[0_8px_20px_rgba(37,99,235,0.25)]">

                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="m12 2 2.7 5.46 6.03.88-4.36 4.24 1.03 5.98L12 15.7l-5.4 2.86 1.03-5.98L3.27 8.34l6.03-.88L12 2Z" />
                                </svg>

                                Featured Guide

                            </span>

                        </a>


                        {{-- featured content --}}
                        <div
                            class="flex flex-col
                                   p-7
                                   sm:p-9
                                   lg:p-10">

                            {{-- Meta --}}
                            <div
                                class="flex
                                       flex-wrap
                                       items-center gap-3">

                                <span
                                    class="rounded-full
                                           bg-primary-50
                                           px-3 py-1.5
                                           text-[11px]
                                           font-semibold
                                           text-primary-700">
                                    {{ $featured['category'] }}
                                </span>


                                <span
                                    class="flex
                                           items-center gap-1.5
                                           text-[12px]
                                           text-secondary-400">

                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8">
                                        <circle cx="12" cy="12" r="8" />

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2" />
                                    </svg>

                                    {{ $featured['read_time'] }}

                                </span>

                            </div>



                            {{-- Title --}}
                            <h2
                                class="mt-5
                                       text-[30px]
                                       font-extrabold
                                       leading-[1.12]
                                       tracking-[-0.035em]
                                       text-secondary-950

                                       transition-colors
                                       duration-300

                                       group-hover:text-primary-600

                                       sm:text-[34px]
                                       lg:text-[38px]">

                                <a href="{{ $featured['url'] }}">
                                    {{ $featured['title'] }}
                                </a>

                            </h2>



                            {{-- Description --}}
                            <p
                                class="mt-5
                                       text-[15px]
                                       leading-7
                                       text-secondary-600
                                       sm:text-[16px]">
                                {{ $featured['description'] }}
                            </p>



                            {{-- Push author to bottom --}}
                            <div class="flex-1"></div>



                            {{-- Bottom --}}
                            <div
                                class="mt-8
                                       border-t
                                       border-secondary-100
                                       pt-6">

                                <div
                                    class="flex flex-col
                                           gap-5
                                           sm:flex-row
                                           sm:items-center
                                           sm:justify-between">

                                    {{-- Author --}}
                                    <div class="flex items-center gap-3">

                                        <span
                                            class="flex h-11 w-11
                                                   items-center justify-center
                                                   rounded-full
                                                   bg-primary-50
                                                   text-[12px]
                                                   font-bold
                                                   text-primary-700">
                                            {{ $featured['initials'] }}
                                        </span>


                                        <div>

                                            <p
                                                class="text-[14px]
                                                       font-semibold
                                                       text-secondary-950">
                                                {{ $featured['author'] }}
                                            </p>

                                            <p
                                                class="mt-0.5
                                                       text-[12px]
                                                       text-secondary-500">
                                                {{ $featured['role'] }}
                                            </p>

                                        </div>

                                    </div>



                                    {{-- Read Article --}}
                                    <a href="{{ $featured['url'] }}"
                                        class="group/read
                                               inline-flex
                                               items-center
                                               justify-center
                                               gap-2
                                               rounded-xl
                                               bg-primary-50
                                               px-5 py-3
                                               text-[13px]
                                               font-semibold
                                               text-primary-700

                                               transition-all
                                               duration-300

                                               hover:bg-primary-600
                                               hover:text-white">
                                        Read Article

                                        <svg class="h-4 w-4
                                                   transition-transform
                                                   duration-300
                                                   group-hover/read:translate-x-1"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 12h14m-5-5 5 5-5 5" />
                                        </svg>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </article>
            @endforeach

        </div>



        {{-- latest articles header --}}

        <div
            class="mt-14
           flex flex-col gap-5
           sm:flex-row
           sm:items-end
           sm:justify-between">

            {{-- LEFT --}}
            <div>

                <h2
                    class="text-3xl
                   font-extrabold
                   tracking-[-0.035em]
                   text-secondary-950
                   sm:text-4xl">
                    Latest Articles
                </h2>


                <p
                    class="mt-2
                   text-[14px]
                   text-secondary-500
                   sm:text-[15px]">
                    Actionable insights to scale your stock control.
                </p>

            </div>



            {{-- RIGHT --}}
            <div class="flex
               items-center
               gap-5">

                {{-- Article count --}}
                <p
                    class="hidden
                   text-[12px]
                   text-secondary-400
                   sm:block">
                    Showing

                    <span id="visible-blog-count" class="font-semibold
                       text-secondary-700">
                        {{ count($previewArticles) }}
                    </span>

                    articles
                </p>


                {{-- VIEW ALL ARTICLES --}}
                <a href="{{ url('/blog/articles') }}"
                    class="group
                   inline-flex
                   items-center
                   gap-2
                   text-[13px]
                   font-semibold
                   text-primary-600

                   transition-colors
                   duration-200

                   hover:text-primary-700">

                    View all articles

                    <svg class="h-4 w-4
                       transition-transform
                       duration-300
                       group-hover:translate-x-1"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                    </svg>

                </a>

            </div>

        </div>



        {{-- article grid --}}
        <div id="latest-articles-grid"
            class="mt-8
                   grid gap-6
                   md:grid-cols-2
                   xl:grid-cols-3">

            @foreach ($previewArticles as $article)
                @php

                    $searchText = strtolower(
                        $article['title'] .
                            ' ' .
                            $article['description'] .
                            ' ' .
                            $article['category'] .
                            ' ' .
                            $article['author'],
                    );

                @endphp


                <article
                    class="blog-article-card
                           group
                           flex flex-col
                           overflow-hidden
                           rounded-[20px]
                           border border-secondary-200
                           bg-white
                           shadow-[0_10px_30px_rgba(15,23,42,0.035)]

                           transition-all
                           duration-300

                           hover:-translate-y-1
                           hover:border-primary-200
                           hover:shadow-[0_16px_38px_rgba(15,23,42,0.07)]"
                    data-category="{{ $article['category_key'] }}" data-search="{{ $searchText }}">

                    {{-- card image --}}
                    <a href="{{ $article['url'] }}"
                        class="relative
                               block
                               overflow-hidden">

                        <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}"
                            class="h-[210px]
                                   w-full
                                   object-cover

                                   transition-transform
                                   duration-700
                                   ease-out

                                   group-hover:scale-[1.05]"
                            loading="lazy">


                        {{-- Category badge --}}
                        <span
                            class="absolute
                                   left-4 top-4
                                   rounded-full
                                   border border-white/70
                                   bg-white/95
                                   px-3 py-1.5
                                   text-[10px]
                                   font-semibold
                                   text-primary-700
                                   shadow-sm
                                   backdrop-blur-sm">
                            {{ $article['category'] }}
                        </span>

                    </a>



                    {{-- content --}}
                    <div class="flex flex-1
                               flex-col
                               p-6">

                        {{-- Meta --}}
                        <div
                            class="flex
                                   flex-wrap
                                   items-center gap-2
                                   text-[11px]
                                   text-secondary-400">

                            {{-- Date --}}
                            <span class="flex items-center gap-1.5">

                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <rect x="5" y="5" width="14" height="14" rx="2" />

                                    <path d="M8 3v4M16 3v4M5 9h14" />
                                </svg>

                                {{ $article['date'] }}

                            </span>


                            <span>•</span>


                            {{-- Read time --}}
                            <span class="flex items-center gap-1.5">

                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <circle cx="12" cy="12" r="8" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2" />
                                </svg>

                                {{ $article['read_time'] }}

                            </span>

                        </div>



                        {{-- Title --}}
                        <h3
                            class="mt-4
                                   text-[19px]
                                   font-bold
                                   leading-[1.3]
                                   tracking-[-0.025em]
                                   text-secondary-950

                                   transition-colors
                                   duration-300

                                   group-hover:text-primary-600">

                            <a href="{{ $article['url'] }}">
                                {{ $article['title'] }}
                            </a>

                        </h3>



                        {{-- Description --}}
                        <p
                            class="mt-3
                                   text-[14px]
                                   leading-6
                                   text-secondary-600">
                            {{ $article['description'] }}
                        </p>



                        {{-- Push footer down --}}
                        <div class="flex-1"></div>



                        {{-- Footer --}}
                        <div
                            class="mt-6
                                   border-t
                                   border-secondary-100
                                   pt-4">

                            <div
                                class="flex
                                       items-center
                                       justify-between
                                       gap-4">

                                {{-- Author --}}
                                <div class="flex
                                           items-center gap-3">

                                    <span
                                        class="flex h-9 w-9
                                               shrink-0
                                               items-center justify-center
                                               rounded-full
                                               bg-secondary-50
                                               text-[11px]
                                               font-bold
                                               text-secondary-700">
                                        {{ $article['initials'] }}
                                    </span>


                                    <span
                                        class="text-[12px]
                                               font-medium
                                               text-secondary-700">
                                        {{ $article['author'] }}
                                    </span>

                                </div>



                                {{-- Read --}}
                                <a href="{{ $article['url'] }}"
                                    class="group/read
                                           inline-flex
                                           items-center gap-1
                                           text-[12px]
                                           font-semibold
                                           text-primary-600

                                           transition-colors
                                           duration-200

                                           hover:text-primary-700">

                                    Read

                                    <svg class="h-3.5 w-3.5
                                               transition-transform
                                               duration-300
                                               group-hover/read:translate-x-1"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h14m-5-5 5 5-5 5" />
                                    </svg>

                                </a>

                            </div>

                        </div>

                    </div>

                </article>
            @endforeach

        </div>


        {{-- no results --}}
        <div id="blog-no-results"
            class="mt-8 hidden
                   rounded-[20px]
                   border border-secondary-200
                   bg-white
                   px-6 py-14
                   text-center">

            <div
                class="mx-auto
                       flex h-12 w-12
                       items-center justify-center
                       rounded-full
                       bg-primary-50
                       text-primary-600">

                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">

                    <circle cx="11" cy="11" r="7" />

                    <path stroke-linecap="round" d="m20 20-3.5-3.5" />

                </svg>

            </div>


            <h3
                class="mt-4
                       text-lg
                       font-bold
                       text-secondary-950">
                No articles found
            </h3>


            <p class="mt-2
                       text-sm
                       text-secondary-500">
                Try another search term or select a different category.
            </p>

        </div>

    </div>

</section>



{{-- article filtering --}}

<script>
    $(document).ready(function() {

        // current filter state

        let currentBlogCategory = 'all';

        let currentBlogSearch = '';


        // filter latest article
        function filterBlogArticles() {

            let visibleCount = 0;


            $('.blog-article-card').each(function() {

                const $card =
                    $(this);


                const category =
                    String(
                        $card.data('category')
                    );


                const searchText =
                    String(
                        $card.data('search')
                    ).toLowerCase();


                const categoryMatch =
                    currentBlogCategory === 'all' ||
                    category === currentBlogCategory;


                const searchMatch =
                    currentBlogSearch === '' ||
                    searchText.includes(
                        currentBlogSearch
                    );


                if (
                    categoryMatch &&
                    searchMatch
                ) {

                    $card.removeClass('hidden');

                    visibleCount++;

                } else {

                    $card.addClass('hidden');

                }

            });


            /*
             * Count
             */
            $('#visible-blog-count')
                .text(visibleCount);


            /*
             * Empty state
             */
            if (visibleCount === 0) {

                $('#blog-no-results')
                    .removeClass('hidden');

            } else {

                $('#blog-no-results')
                    .addClass('hidden');

            }

        }



        //   switch filtered article

        function updateFeaturedArticle(category) {

            $('.featured-blog-article')
                .addClass('hidden');


            /*
             * Use category-specific featured article.
             * Fall back to All Articles if none exists.
             */

            let $featured =
                $('.featured-blog-article[data-featured-category="' + category + '"]');


            if (!$featured.length) {

                $featured =
                    $('.featured-blog-article[data-featured-category="all"]');

            }


            $featured
                .removeClass('hidden');

        }


        // hero category event

        $(document).on(
            'stockcore:blog-category',
            function(event, category) {

                currentBlogCategory =
                    category;


                /*
                 * Reset search when changing category?
                 *
                 * We deliberately DON'T clear it here,
                 * so category + search can work together.
                 */

                updateFeaturedArticle(
                    category
                );


                filterBlogArticles();

            }
        );



        //    hero search event

        $(document).on(
            'stockcore:blog-search',
            function(event, searchTerm) {

                currentBlogSearch =
                    String(
                        searchTerm || ''
                    )
                    .trim()
                    .toLowerCase();


                filterBlogArticles();

            }
        );



        //  initial
        updateFeaturedArticle('all');

        filterBlogArticles();

    });
</script>
