{{-- faq questions section --}}

@php

    $categories = [
        ['key' => 'all', 'label' => 'All'],
        ['key' => 'general', 'label' => 'General'],
        ['key' => 'pricing', 'label' => 'Pricing & Billing'],
        ['key' => 'features', 'label' => 'Features'],
        ['key' => 'integrations', 'label' => 'Integrations'],
        ['key' => 'security', 'label' => 'Security & Data'],
    ];

    $faqs = [
        [
            'category' => 'general',
            'category_label' => 'General',

            'tags' => ['14-Day Free Trial', 'Instant Access'],

            'question' => 'Is there a free trial available?',

            'answer' =>
                'Yes! StockCore provides a 14-day full-feature free trial on all subscription plans. No credit card is required to sign up. You get immediate access to core inventory tools, including stock tracking, automated reorder notifications, and integrations with Xero and Cin7.',
        ],

        [
            'category' => 'pricing',
            'category_label' => 'Pricing & Billing',

            'tags' => ['Subscription', 'Cancel Anytime'],

            'question' => 'Can I cancel my plan anytime?',

            'answer' =>
                'Yes. StockCore plans can be cancelled at any time. There are no long-term lock-in contracts. Your subscription will remain active until the end of your current billing period.',
        ],

        [
            'category' => 'integrations',
            'category_label' => 'Integrations',

            'tags' => ['Xero Accounting', 'Cin7 Core'],

            'question' => 'Does StockCore work with Xero and Cin7?',

            'answer' =>
                'Yes. StockCore is designed to connect with platforms such as Xero and Cin7 so inventory, accounting and operational information can move between the systems more efficiently.',
        ],

        [
            'category' => 'security',
            'category_label' => 'Security & Data',

            'tags' => ['Secure Data', 'Encryption'],

            'question' => 'Is my business and stock data secure?',

            'answer' =>
                'StockCore uses modern security practices to protect account and inventory information. Access controls, encrypted connections and secure infrastructure are used to help keep business data protected.',
        ],

        [
            'category' => 'pricing',
            'category_label' => 'Pricing & Billing',

            'tags' => ['Data Retention', 'Account Plan'],

            'question' => 'What happens to my data if I downgrade or cancel?',

            'answer' =>
                'If you downgrade, access to some plan-specific features may change while your core account information remains available according to your plan. If you cancel, your data is handled according to StockCore\'s data-retention policy.',
        ],

        [
            'category' => 'features',
            'category_label' => 'Features',

            'tags' => ['Inventory Tracking', 'Automation'],

            'question' => 'What inventory features are included in StockCore?',

            'answer' =>
                'StockCore includes inventory tracking, stock movement history, batch and expiry tracking, FIFO costing, document processing, reporting, integrations and other tools designed to help businesses manage inventory more efficiently.',
        ],

        [
            'category' => 'general',
            'category_label' => 'General',

            'tags' => ['Australian Support', 'Business Hours'],

            'question' => 'Where is StockCore support based and what are the operating hours?',

            'answer' =>
                'StockCore is focused on supporting Australian businesses. Support availability and operating hours can be confirmed with the StockCore team when you contact support or book a demonstration.',
        ],
    ];

@endphp



<section id="faq-questions" class="relative overflow-hidden bg-background-muted py-20 sm:py-24">

    {{-- background decor --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        <div
            class="absolute -left-[320px] top-[180px]
                   h-[650px] w-[650px]
                   rounded-full
                   border-[90px] border-primary-50/70">
        </div>

        <div
            class="absolute -right-[340px] -top-[300px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[100px] border-primary-50/60">
        </div>

    </div>



    {{-- section content --}}
    <div class="relative z-10 mx-auto
               max-w-5xl
               px-6 sm:px-8 lg:px-8">


        {{-- category tabs --}}
        <div id="faq-tabs"
            class="rounded-2xl
                   border border-secondary-200
                   bg-white
                   p-1.5
                   shadow-[0_8px_30px_rgba(15,23,42,0.05)]">

            <div
                class="flex items-center gap-1
                       overflow-x-auto
                       scrollbar-hide">

                @foreach ($categories as $index => $category)
                    <button type="button" data-category="{{ $category['key'] }}"
                        class="faq-category-tab
                               shrink-0
                               rounded-xl
                               px-5 py-3
                               text-sm font-semibold
                               transition-all duration-300

                               {{ $index === 0
                                   ? 'bg-primary-600 text-white shadow-[0_7px_18px_rgba(37,99,235,0.22)]'
                                   : 'bg-transparent text-secondary-700 hover:bg-secondary-50 hover:text-secondary-950' }}">

                        {{ $category['label'] }}

                    </button>
                @endforeach

            </div>

        </div>


        {{-- faq cards --}}
        <div id="faq-list"
            class="mt-7
                   overflow-hidden
                   rounded-[24px]
                   border border-secondary-200
                   bg-white
                   shadow-[0_20px_60px_rgba(15,23,42,0.06)]">

            @foreach ($faqs as $index => $faq)
                <article
                    class="faq-item
                           border-b border-secondary-200
                           last:border-b-0"
                    data-category="{{ $faq['category'] }}"
                    data-search="{{ strtolower(
                        $faq['question'] . ' ' . $faq['answer'] . ' ' . implode(' ', $faq['tags']) . ' ' . $faq['category_label'],
                    ) }}">

                    {{-- accordion buttons --}}
                    <button type="button"
                        class="faq-toggle
                               flex w-full
                               items-start justify-between
                               gap-6
                               px-6 py-7
                               text-left
                               transition
                               hover:bg-secondary-50/50
                               sm:px-8"
                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">

                        <div class="min-w-0 flex-1">


                            {{-- CATEGORY + TAGS --}}
                            <div class="flex flex-wrap
                                       items-center gap-2">

                                <span
                                    class="text-[11px]
                                           font-bold uppercase
                                           tracking-[0.14em]
                                           text-secondary-700">
                                    {{ $faq['category_label'] }}
                                </span>


                                @foreach ($faq['tags'] as $tag)
                                    <span
                                        class="rounded-full
                                               bg-primary-50
                                               px-3 py-1
                                               text-[11px]
                                               font-medium
                                               leading-none
                                               text-primary-600">
                                        {{ $tag }}
                                    </span>
                                @endforeach

                            </div>



                            {{-- QUESTION --}}
                            <h3
                                class="mt-3
                                       text-[18px]
                                       font-bold
                                       leading-snug
                                       tracking-[-0.02em]
                                       text-secondary-950
                                       sm:text-[20px]">
                                {{ $faq['question'] }}
                            </h3>

                        </div>



                        {{-- ARROW --}}
                        <span
                            class="faq-arrow
                                   flex h-11 w-11 shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600
                                   transition-transform duration-300

                                   {{ $index === 0 ? 'rotate-180' : '' }}">

                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
                            </svg>

                        </span>

                    </button>

                    {{-- accordion contents --}}
                    <div class="faq-answer
                               {{ $index === 0 ? '' : 'hidden' }}">

                        <div class="px-6 pb-7
                                   sm:px-8">

                            {{-- ANSWER --}}
                            <p
                                class="max-w-4xl
                                       text-[15px]
                                       leading-7
                                       text-secondary-600
                                       sm:text-base">
                                {{ $faq['answer'] }}
                            </p>



                            {{-- HELPFUL AREA --}}
                            <div
                                class="mt-6
                                       flex flex-col gap-4
                                       border-t border-secondary-200
                                       pt-5
                                       sm:flex-row
                                       sm:items-center
                                       sm:justify-between">

                                <p class="text-sm
                                           text-secondary-600">
                                    Was this answer helpful?
                                </p>



                                <div
                                    class="inline-flex w-fit
                                           overflow-hidden
                                           rounded-xl
                                           border border-secondary-200
                                           bg-white">

                                    {{-- YES --}}
                                    <button type="button"
                                        class="faq-helpful
                                               flex items-center gap-2
                                               border-r border-secondary-200
                                               px-4 py-2.5
                                               text-sm font-medium
                                               text-secondary-700
                                               transition
                                               hover:bg-primary-50
                                               hover:text-primary-600"
                                        data-answer="yes">

                                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.8" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 10v10H4V10h3Zm3 10h7.4a2 2 0 0 0 1.95-1.55l1.3-6A2 2 0 0 0 18.7 10H15l.6-3.2A2.4 2.4 0 0 0 13.25 4L10 10v10Z" />
                                        </svg>

                                        Yes

                                    </button>



                                    {{-- NO --}}
                                    <button type="button"
                                        class="faq-helpful
                                               flex items-center gap-2
                                               px-4 py-2.5
                                               text-sm font-medium
                                               text-secondary-700
                                               transition
                                               hover:bg-primary-50
                                               hover:text-primary-600"
                                        data-answer="no">

                                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.8" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 14V4H4v10h3Zm3-10h7.4a2 2 0 0 1 1.95 1.55l1.3 6A2 2 0 0 1 18.7 14H15l.6 3.2A2.4 2.4 0 0 1 13.25 20L10 14V4Z" />
                                        </svg>

                                        No

                                    </button>

                                </div>

                            </div>



                            {{-- FEEDBACK MESSAGE --}}
                            <p
                                class="faq-feedback
                                       mt-3 hidden
                                       text-sm font-medium
                                       text-primary-600">
                                Thanks for your feedback.
                            </p>

                        </div>

                    </div>

                </article>
            @endforeach



            {{-- no results --}}
            <div id="faq-no-results" class="hidden px-8 py-16 text-center">

                <div
                    class="mx-auto flex
                           h-14 w-14
                           items-center justify-center
                           rounded-full
                           bg-primary-50
                           text-primary-600">

                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="11" cy="11" r="7"></circle>
                        <path stroke-linecap="round" d="m20 20-3.5-3.5"></path>
                    </svg>

                </div>

                <h3
                    class="mt-5
                           text-lg font-bold
                           text-secondary-950">
                    No questions found
                </h3>

                <p
                    class="mx-auto mt-2
                           max-w-md
                           text-sm leading-6
                           text-secondary-500">
                    Try another search term or choose a different
                    FAQ category.
                </p>

            </div>

        </div>



        {{-- asking general button --}}
        <div class="mt-7 flex justify-center">

            <button id="ask-general" type="button"
                class="group
                       inline-flex items-center gap-3
                       rounded-full
                       bg-secondary-950
                       px-6 py-3.5
                       text-sm font-semibold
                       text-white
                       shadow-[0_12px_30px_rgba(15,23,42,0.22)]
                       transition-all duration-300
                       hover:-translate-y-0.5
                       hover:bg-secondary-900
                       hover:shadow-[0_16px_35px_rgba(15,23,42,0.28)]">

                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 18 4 21v-5a8 8 0 1 1 4 2Z" />
                </svg>

                Ask General

            </button>

        </div>

    </div>

</section>


{{-- faq interactions --}}
@push('scripts')
    <script>
        $(document).ready(function() {

            let activeCategory = 'all';

            const $faqItems = $('.faq-item');
            const $searchInput = $('#faq-search');


            /* Accordion */

            $('.faq-toggle').on('click', function() {

                const $currentItem = $(this).closest('.faq-item');

                const $currentAnswer = $currentItem.find('.faq-answer');

                const $currentArrow = $currentItem.find('.faq-arrow');

                const isOpen = !$currentAnswer.hasClass('hidden');


                /*
                 * Close every accordion first
                 */
                $('.faq-answer').addClass('hidden');

                $('.faq-arrow').removeClass('rotate-180');

                $('.faq-toggle').attr('aria-expanded', 'false');


                /*
                 * If it was closed before click,
                 * open the selected accordion.
                 */
                if (!isOpen) {

                    $currentAnswer.removeClass('hidden');

                    $currentArrow.addClass('rotate-180');

                    $(this).attr('aria-expanded', 'true');

                }

            });



            //    category tabs

            $('.faq-category-tab').on('click', function() {

                activeCategory = $(this).data('category');


                /*
                 * Remove active appearance
                 */
                $('.faq-category-tab')
                    .removeClass(
                        'bg-primary-600 text-white shadow-[0_7px_18px_rgba(37,99,235,0.22)]'
                    )
                    .addClass(
                        'bg-transparent text-secondary-700'
                    );


                /*
                 * Add active appearance
                 */
                $(this)
                    .removeClass(
                        'bg-transparent text-secondary-700'
                    )
                    .addClass(
                        'bg-primary-600 text-white shadow-[0_7px_18px_rgba(37,99,235,0.22)]'
                    );


                filterFaqs();

            });





            $searchInput.on('input', function() {

                filterFaqs();

            });




            function filterFaqs() {

                const searchTerm = (
                        $searchInput.val() || ''
                    )
                    .toLowerCase()
                    .trim();


                let visibleCount = 0;


                $faqItems.each(function() {

                    const $item = $(this);

                    const category = $item.data('category');

                    const searchableText = String(
                        $item.data('search')
                    ).toLowerCase();


                    const matchesCategory =
                        activeCategory === 'all' ||
                        category === activeCategory;


                    const matchesSearch =
                        searchTerm === '' ||
                        searchableText.includes(searchTerm);


                    if (matchesCategory && matchesSearch) {

                        $item.removeClass('hidden');

                        visibleCount++;

                    } else {

                        $item.addClass('hidden');

                    }

                });



                /*
                 * No results message
                 */
                if (visibleCount === 0) {

                    $('#faq-no-results').removeClass('hidden');

                } else {

                    $('#faq-no-results').addClass('hidden');

                }



                /*
                 * Update hero count
                 */
                $('#visible-question-count').text(visibleCount);

                $('#total-question-count').text($faqItems.length);

            }




            $('.faq-helpful').on('click', function() {

                const $answerArea = $(this)
                    .closest('.faq-answer');


                /*
                 * Reset buttons inside this answer
                 */
                $answerArea
                    .find('.faq-helpful')
                    .removeClass(
                        'bg-primary-50 text-primary-600'
                    );


                /*
                 * Highlight selected option
                 */
                $(this).addClass(
                    'bg-primary-50 text-primary-600'
                );


                /*
                 * Show thank-you message
                 */
                $answerArea
                    .find('.faq-feedback')
                    .removeClass('hidden');

            });


            // ask general button

            $('#ask-general').on('click', function() {

                const $generalTab =
                    $('.faq-category-tab[data-category="general"]');


                $generalTab.trigger('click');


                $('html, body').animate({
                        scrollTop: $('#faq-tabs').offset().top - 120
                    },
                    450
                );

            });



            //   initials totals

            $('#total-question-count').text($faqItems.length);

            $('#visible-question-count').text($faqItems.length);

        });
    </script>
@endpush
