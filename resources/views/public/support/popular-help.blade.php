{{-- ============================================================
    POPULAR HELP ARTICLES
    resources/views/public/support/popular-help.blade.php
============================================================ --}}

@php

    $helpCategories = [
        'all' => 'All',
        'inventory' => 'Inventory',
        'order-fulfillment' => 'Order Fulfillment',
        'sales-purchasing' => 'Sales & Purchasing',
        'multi-warehouse' => 'Multi-Warehouse',
        'integrations' => 'Integrations',
        'b2b-portal' => 'B2B Portal',
    ];


    $popularArticles = [

        [
            'category' => 'Inventory',
            'category_key' => 'inventory',
            'title' => 'How to set up your first product',
            'description' =>
                'Learn how to create products, set stock levels and manage locations.',
            'read_time' => '5 min read',
            'icon' => 'inventory',
            'icon_class' => 'bg-primary-50 text-primary-600',
            'url' => '#',
        ],

        [
            'category' => 'Integrations',
            'category_key' => 'integrations',
            'title' => 'Connect StockCore with Xero',
            'description' =>
                'Step-by-step guide to link your Xero account and sync your data.',
            'read_time' => '7 min read',
            'icon' => 'link',
            'icon_class' => 'bg-cyan-50 text-cyan-600',
            'url' => '#',
        ],

        [
            'category' => 'Order Fulfillment',
            'category_key' => 'order-fulfillment',
            'title' => 'How to pick, pack and ship orders',
            'description' =>
                'Learn the complete order fulfillment workflow from start to finish.',
            'read_time' => '6 min read',
            'icon' => 'truck',
            'icon_class' => 'bg-violet-50 text-violet-600',
            'url' => '#',
        ],

        [
            'category' => 'Inventory',
            'category_key' => 'inventory',
            'title' => 'Understanding FIFO costing',
            'description' =>
                'Learn how FIFO works and how it impacts your inventory valuation.',
            'read_time' => '8 min read',
            'icon' => 'coins',
            'icon_class' => 'bg-amber-50 text-amber-600',
            'url' => '#',
        ],

        [
            'category' => 'Multi-Warehouse',
            'category_key' => 'multi-warehouse',
            'title' => 'Set up multiple warehouse locations',
            'description' =>
                'Manage multiple locations and transfer stock between warehouses.',
            'read_time' => '6 min read',
            'icon' => 'warehouse',
            'icon_class' => 'bg-rose-50 text-rose-600',
            'url' => '#',
        ],

        [
            'category' => 'B2B Portal',
            'category_key' => 'b2b-portal',
            'title' => 'Configure your B2B customer portal',
            'description' =>
                'Set up wholesale customers, price tiers and ordering permissions.',
            'read_time' => '5 min read',
            'icon' => 'users',
            'icon_class' => 'bg-violet-50 text-violet-600',
            'url' => '#',
        ],

    ];

@endphp



<section
    id="popular-help"
    class="relative overflow-hidden
           bg-background
           py-20
           sm:py-24
           lg:py-28"
>

    {{-- =========================================================
        BACKGROUND
    ========================================================== --}}
    <div
        class="pointer-events-none absolute inset-0 overflow-hidden"
        aria-hidden="true"
    >

        <div
            class="absolute
                   -right-[340px] -top-[300px]
                   h-[680px] w-[680px]
                   rounded-full
                   bg-primary-50/50"
        ></div>

        <div
            class="absolute
                   -left-[350px] -bottom-[420px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[100px]
                   border-primary-50/50"
        ></div>

    </div>



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

            <div>

                <div class="flex items-center gap-3">

                    <span
                        class="h-[2px] w-10
                               rounded-full
                               bg-primary-600"
                    ></span>

                    <span
                        class="text-[11px]
                               font-bold uppercase
                               tracking-[0.10em]
                               text-secondary-500"
                    >
                        Popular Articles
                    </span>

                </div>


                <h2
                    class="mt-5
                           text-4xl
                           font-extrabold
                           tracking-[-0.045em]
                           text-secondary-950
                           sm:text-5xl"
                >
                    Popular

                    <span class="text-primary-600">
                        help articles
                    </span>
                </h2>


                <p
                    class="mt-3
                           text-[15px]
                           text-secondary-600
                           sm:text-[16px]"
                >
                    Get quick answers to the most common questions from our customers.
                </p>

            </div>


            <a
                href="#"
                class="group
                       inline-flex items-center gap-2
                       rounded-xl
                       border border-primary-200
                       bg-white
                       px-5 py-3
                       text-[13px]
                       font-semibold
                       text-primary-600
                       transition-all duration-300
                       hover:border-primary-300
                       hover:bg-primary-50"
            >
                View all articles

                <svg
                    class="h-4 w-4
                           transition-transform duration-300
                           group-hover:translate-x-1"
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
            </a>

        </div>



        {{-- =====================================================
            CATEGORY FILTERS
        ====================================================== --}}
        <div
            class="mt-8
                   flex flex-wrap
                   gap-2"
        >

            @foreach ($helpCategories as $key => $label)

                <button
                    type="button"
                    data-help-filter="{{ $key }}"
                    class="help-filter
                           rounded-lg
                           px-5 py-2.5
                           text-[12px]
                           font-semibold
                           transition-all duration-300

                           {{ $loop->first
                                ? 'bg-primary-600 text-white shadow-[0_8px_20px_rgba(37,99,235,0.20)]'
                                : 'bg-secondary-50 text-secondary-600 hover:bg-primary-50 hover:text-primary-600'
                           }}"
                >
                    {{ $label }}
                </button>

            @endforeach

        </div>



        {{-- =====================================================
            MAIN CONTENT
        ====================================================== --}}
        <div
            class="mt-6
                   grid gap-6
                   lg:grid-cols-[1.45fr_0.8fr]"
        >

            {{-- =================================================
                LEFT ARTICLES
            ================================================== --}}
            <div
                id="help-article-grid"
                class="grid gap-4
                       md:grid-cols-2"
            >

                @foreach ($popularArticles as $article)

                    <article
                        class="help-article-card
                               group
                               rounded-[18px]
                               border border-secondary-200
                               bg-white
                               p-6
                               shadow-[0_8px_24px_rgba(15,23,42,0.035)]
                               transition-all duration-300
                               hover:-translate-y-1
                               hover:border-primary-200
                               hover:shadow-[0_16px_34px_rgba(15,23,42,0.07)]"
                        data-category="{{ $article['category_key'] }}"
                    >

                        <div
                            class="flex gap-5"
                        >

                            {{-- ICON --}}
                            <div
                                class="flex h-14 w-14
                                       shrink-0
                                       items-center justify-center
                                       rounded-2xl
                                       {{ $article['icon_class'] }}"
                            >

                                @if ($article['icon'] === 'inventory')
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linejoin="round" d="m12 3 8 4-8 4-8-4 8-4Z"/>
                                        <path stroke-linejoin="round" d="m4 7 8 4 8-4v10l-8 4-8-4V7Z"/>
                                    </svg>
                                @endif


                                @if ($article['icon'] === 'link')
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 13a5 5 0 0 0 7.07 0l2-2a5 5 0 0 0-7.07-7.07l-1 1"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 11a5 5 0 0 0-7.07 0l-2 2A5 5 0 0 0 12 20.07l1-1"/>
                                    </svg>
                                @endif


                                @if ($article['icon'] === 'truck')
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M3 6h11v10H3z"/>
                                        <path d="M14 10h4l3 3v3h-7z"/>
                                        <circle cx="7" cy="18" r="2"/>
                                        <circle cx="18" cy="18" r="2"/>
                                    </svg>
                                @endif


                                @if ($article['icon'] === 'coins')
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <ellipse cx="12" cy="6" rx="7" ry="3"/>
                                        <path d="M5 6v4c0 1.7 3.1 3 7 3s7-1.3 7-3V6"/>
                                        <path d="M5 10v4c0 1.7 3.1 3 7 3s7-1.3 7-3v-4"/>
                                        <path d="M5 14v4c0 1.7 3.1 3 7 3s7-1.3 7-3v-4"/>
                                    </svg>
                                @endif


                                @if ($article['icon'] === 'warehouse')
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linejoin="round" d="M3 10 12 4l9 6v10H3V10Z"/>
                                        <path d="M7 13h10v7H7z"/>
                                    </svg>
                                @endif


                                @if ($article['icon'] === 'users')
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <circle cx="9" cy="8" r="3"/>
                                        <circle cx="17" cy="9" r="2.5"/>
                                        <path stroke-linecap="round" d="M3 19a6 6 0 0 1 12 0M14 14.5a5 5 0 0 1 7 4.5"/>
                                    </svg>
                                @endif

                            </div>



                            {{-- CONTENT --}}
                            <div class="min-w-0 flex-1">

                                <p
                                    class="text-[10px]
                                           font-bold uppercase
                                           tracking-[0.06em]
                                           text-primary-600"
                                >
                                    {{ $article['category'] }}
                                </p>


                                <h3
                                    class="mt-2
                                           text-[18px]
                                           font-bold
                                           leading-[1.3]
                                           tracking-[-0.025em]
                                           text-secondary-950
                                           transition-colors duration-300
                                           group-hover:text-primary-600"
                                >
                                    {{ $article['title'] }}
                                </h3>


                                <p
                                    class="mt-2
                                           text-[14px]
                                           leading-6
                                           text-secondary-600"
                                >
                                    {{ $article['description'] }}
                                </p>


                                <div
                                    class="mt-5
                                           flex items-center
                                           justify-between"
                                >

                                    <span
                                        class="flex items-center gap-2
                                               text-[12px]
                                               text-secondary-500"
                                    >
                                        <svg
                                            class="h-4 w-4"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        >
                                            <path d="M4 5h6a3 3 0 0 1 3 3v11a3 3 0 0 0-3-3H4V5Z"/>
                                            <path d="M20 5h-6a3 3 0 0 0-3 3v11a3 3 0 0 1 3-3h6V5Z"/>
                                        </svg>

                                        {{ $article['read_time'] }}
                                    </span>


                                    <a
                                        href="{{ $article['url'] }}"
                                        class="text-primary-600
                                               transition-transform duration-300
                                               group-hover:translate-x-1"
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
                                    </a>

                                </div>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>



            {{-- =================================================
                RIGHT COLUMN
            ================================================== --}}
            <div class="space-y-5">

                {{-- =============================================
                    FEATURED ARTICLE
                ============================================== --}}
                <article
                    class="relative overflow-hidden
                           rounded-[22px]
                           bg-[#0b2554]
                           p-8
                           text-white
                           shadow-[0_20px_45px_rgba(15,23,42,0.15)]"
                >

                    {{-- background --}}
                    <div
                        class="pointer-events-none
                               absolute inset-0 overflow-hidden"
                    >

                        <div
                            class="absolute
                                   -right-[90px] -bottom-[130px]
                                   h-[300px] w-[300px]
                                   rounded-full
                                   bg-primary-500/15"
                        ></div>

                        <div
                            class="absolute
                                   -right-[30px] top-[20px]
                                   h-[170px] w-[170px]
                                   rotate-[8deg]
                                   rounded-[18px]
                                   bg-white/10"
                        ></div>

                    </div>


                    <div class="relative z-10">

                        <p
                            class="text-[10px]
                                   font-bold uppercase
                                   tracking-[0.10em]
                                   text-primary-200"
                        >
                            Featured Article
                        </p>


                        <h3
                            class="mt-4
                                   max-w-[320px]
                                   text-[30px]
                                   font-extrabold
                                   leading-[1.08]
                                   tracking-[-0.04em]"
                        >
                            Getting started
                            with StockCore
                        </h3>


                        <p
                            class="mt-4
                                   max-w-[330px]
                                   text-[14px]
                                   leading-6
                                   text-slate-300"
                        >
                            A complete guide to setting up your account,
                            adding products, and managing your first stock.
                        </p>


                        <a
                            href="#"
                            class="group mt-6
                                   inline-flex
                                   items-center gap-2
                                   rounded-xl
                                   bg-white
                                   px-5 py-3
                                   text-[13px]
                                   font-semibold
                                   text-primary-600
                                   transition hover:bg-primary-50"
                        >
                            Read the guide

                            <svg
                                class="h-4 w-4
                                       transition-transform
                                       group-hover:translate-x-1"
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
                        </a>

                    </div>

                </article>



                {{-- =============================================
                    SUPPORT PANEL
                ============================================== --}}
                <div
                    id="contact-support"
                    class="rounded-[22px]
                           border border-secondary-200
                           bg-white
                           p-7
                           shadow-[0_10px_30px_rgba(15,23,42,0.04)]"
                >

                    <div class="flex items-start gap-4">

                        <div
                            class="flex h-14 w-14
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600"
                        >
                            <svg
                                class="h-7 w-7"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path d="M4 13v-1a8 8 0 0 1 16 0v1"/>
                                <path d="M4 13a2 2 0 0 1 2-2h1v6H6a2 2 0 0 1-2-2v-2Z"/>
                                <path d="M20 13a2 2 0 0 0-2-2h-1v6h1a2 2 0 0 0 2-2v-2Z"/>
                            </svg>
                        </div>


                        <div>

                            <h3
                                class="text-[22px]
                                       font-bold
                                       tracking-[-0.03em]
                                       text-secondary-950"
                            >
                                Still need help?
                            </h3>

                            <p
                                class="mt-2
                                       text-[14px]
                                       leading-6
                                       text-secondary-600"
                            >
                                Our support team is here to help you get
                                the most out of StockCore.
                            </p>

                        </div>

                    </div>



                    <a
                        href="{{ url('/contact') }}"
                        class="group
                               mt-6
                               flex h-12
                               items-center justify-center
                               gap-3
                               rounded-xl
                               bg-primary-600
                               text-[13px]
                               font-semibold
                               text-white
                               transition
                               hover:bg-primary-700"
                    >
                        Contact Support

                        <svg
                            class="h-4 w-4
                                   transition-transform
                                   group-hover:translate-x-1"
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
                    </a>



                    <div
                        class="mt-6
                               grid grid-cols-2
                               divide-x divide-secondary-100"
                    >

                        <div class="pr-5">

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex h-9 w-9
                                           items-center justify-center
                                           rounded-full
                                           bg-primary-50
                                           text-primary-600"
                                >
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M4 5h16v11H8l-4 4V5Z"/>
                                    </svg>
                                </span>


                                <div>

                                    <p
                                        class="text-[13px]
                                               font-semibold
                                               text-secondary-950"
                                    >
                                        Live Chat
                                    </p>

                                    <p
                                        class="mt-1
                                               flex items-center gap-1.5
                                               text-[11px]
                                               text-secondary-500"
                                    >
                                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                        Online now
                                    </p>

                                </div>

                            </div>

                        </div>


                        <div class="pl-5">

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex h-9 w-9
                                           items-center justify-center
                                           rounded-full
                                           bg-primary-50
                                           text-primary-600"
                                >
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <rect x="3" y="5" width="18" height="14" rx="2"/>
                                        <path d="m4 7 8 6 8-6"/>
                                    </svg>
                                </span>


                                <div>

                                    <p
                                        class="text-[13px]
                                               font-semibold
                                               text-secondary-950"
                                    >
                                        Email Us
                                    </p>

                                    <p
                                        class="mt-1
                                               text-[11px]
                                               leading-4
                                               text-secondary-500"
                                    >
                                        Usually replies<br>
                                        within 1 business day
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        {{-- =====================================================
            TIP OF THE DAY
        ====================================================== --}}
        <div
            class="relative mt-8
                   overflow-hidden
                   rounded-[20px]
                   bg-primary-50/70
                   px-6 py-6
                   sm:px-8"
        >

            <div
                class="flex flex-col gap-5
                       sm:flex-row
                       sm:items-center
                       sm:justify-between"
            >

                <div class="flex items-center gap-5">

                    <div
                        class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-white
                               text-primary-600"
                    >
                        <svg
                            class="h-7 w-7"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path d="M8.5 14.5A7 7 0 1 1 15.5 14.5C14.6 15.2 14 16 14 17h-4c0-1-.6-1.8-1.5-2.5Z"/>
                            <path d="M9 18h6M10 21h4"/>
                        </svg>
                    </div>


                    <div>

                        <p
                            class="text-[10px]
                                   font-bold uppercase
                                   tracking-[0.10em]
                                   text-secondary-500"
                        >
                            Tip of the day
                        </p>

                        <h3
                            class="mt-1
                                   text-[22px]
                                   font-bold
                                   text-secondary-950"
                        >
                            Did you know?
                        </h3>

                        <p
                            class="mt-1
                                   text-[14px]
                                   text-secondary-600"
                        >
                            You can import your products in bulk using a CSV file to save time.
                        </p>

                    </div>

                </div>


                <a
                    href="#"
                    class="group
                           inline-flex items-center gap-2
                           text-[13px]
                           font-semibold
                           text-primary-600"
                >
                    Learn how

                    <svg
                        class="h-4 w-4
                               transition-transform
                               group-hover:translate-x-1"
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
                </a>

            </div>

        </div>

    </div>

</section>



{{-- ============================================================
    FILTER INTERACTION
============================================================ --}}
@push('scripts')

<script>
$(document).ready(function () {

    $('.help-filter').on('click', function () {

        const selected =
            $(this).data('help-filter');


        /*
         * Reset all buttons.
         */
        $('.help-filter')
            .removeClass(
                'bg-primary-600 text-white shadow-[0_8px_20px_rgba(37,99,235,0.20)]'
            )
            .addClass(
                'bg-secondary-50 text-secondary-600'
            );


        /*
         * Active button.
         */
        $(this)
            .removeClass(
                'bg-secondary-50 text-secondary-600'
            )
            .addClass(
                'bg-primary-600 text-white shadow-[0_8px_20px_rgba(37,99,235,0.20)]'
            );


        /*
         * Filter cards.
         */
        $('.help-article-card').each(function () {

            const category =
                $(this).data('category');


            if (
                selected === 'all' ||
                category === selected
            ) {

                $(this)
                    .stop(true, true)
                    .fadeIn(180);

            } else {

                $(this)
                    .stop(true, true)
                    .fadeOut(180);

            }

        });

    });

});
</script>

@endpush