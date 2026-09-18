{{-- billing faq --}}
@php

    $faqCategories = [
        # plans and pricing

        'plans' => [
            'title' => 'Plans & Pricing',

            'subtitle' => 'Plan details and features',

            'icon' => 'layers',

            'questions' => [
                [
                    'question' => 'Which StockCore plan should I choose?',

                    'answer' =>
                        'The best plan depends on the size of your inventory operation, number of users, SKU volume, warehouse locations and the integrations you need. Starter is designed for smaller teams, while Growth and Business support more complex operations. Enterprise is available for larger or highly customised environments.',
                ],

                [
                    'question' => 'Can I change plans later?',

                    'answer' =>
                        'Yes. You can move to a different StockCore plan as your business changes. Upgrades can be made as you grow, and plan changes can be discussed with our team if your requirements become more complex.',
                ],

                [
                    'question' => 'What happens if I exceed my plan limits?',

                    'answer' =>
                        'If you approach the user, SKU, warehouse or integration limits included in your plan, we will help you move to a plan that better matches your operation rather than unexpectedly interrupting access.',
                ],

                [
                    'question' => 'Do you offer custom plans?',

                    'answer' =>
                        'Yes. Businesses with larger operations, unusual requirements or specific integration needs can speak with our team about an Enterprise configuration.',
                ],
            ],
        ],

        #billing

        'billing' => [
            'title' => 'Billing',

            'subtitle' => 'Payments, invoices and subscriptions',

            'icon' => 'card',

            'questions' => [
                [
                    'question' => 'What payment methods do you accept?',

                    'answer' =>
                        'We accept major credit and debit cards for StockCore subscriptions. Additional payment arrangements may also be available for larger Enterprise customers. Available payment methods will be confirmed during checkout or with our team.',
                ],

                [
                    'question' => 'Do you offer annual billing?',

                    'answer' =>
                        'Yes. StockCore can be billed monthly or annually. Where an annual discount is offered, the saving will be clearly shown before you confirm your subscription.',
                ],

                [
                    'question' => 'Can I change my plan at any time?',

                    'answer' =>
                        'Yes. You can upgrade your StockCore plan as your business grows. If you need to reduce or restructure your subscription, our team can help you understand how the change affects your billing and plan limits.',
                ],

                [
                    'question' => 'Will I be charged during the free trial?',

                    'answer' =>
                        'No. You can evaluate StockCore during the free trial without being charged. If no credit card is required for the trial, you will only enter payment details when you decide to continue with a paid subscription.',
                ],

                [
                    'question' => 'How can I update my payment details?',

                    'answer' =>
                        'Payment information can be managed from your StockCore billing settings once subscription billing is enabled. If you have any difficulty updating your payment method, our support team can help.',
                ],

                [
                    'question' => 'Do you offer refunds?',

                    'answer' =>
                        'Refund eligibility depends on the circumstances of the subscription and the applicable billing terms. If you believe a payment was made incorrectly, contact our team and we will review it with you.',
                ],

                [
                    'question' => 'How can I access my invoices?',

                    'answer' =>
                        'Invoices and billing records will be available from your StockCore account billing area. They can be used for your internal records and accounting requirements.',
                ],

                [
                    'question' => 'Are there additional charges for extra users or warehouses?',

                    'answer' =>
                        'Each StockCore plan includes specific limits for users, products and warehouse locations. If your operation grows beyond those limits, you may need to move to a higher plan or discuss additional capacity with our team.',
                ],
            ],
        ],

        # account management

        'account' => [
            'title' => 'Account Management',

            'subtitle' => 'Your account and settings',

            'icon' => 'user',

            'questions' => [
                [
                    'question' => 'Who can manage the StockCore subscription?',

                    'answer' =>
                        'Subscription and billing permissions can be restricted to authorised account administrators so that plan and payment changes are controlled by the appropriate people in your business.',
                ],

                [
                    'question' => 'Can I add or remove users?',

                    'answer' =>
                        'Yes. Account administrators can manage users according to the limits included in their StockCore plan.',
                ],

                [
                    'question' => 'Can different users have different permissions?',

                    'answer' =>
                        'Role and permission capabilities depend on the plan you choose. Higher plans include more advanced controls for businesses with larger teams and more complex access requirements.',
                ],
            ],
        ],

        #trials and upgrades

        'trials' => [
            'title' => 'Trials & Upgrades',

            'subtitle' => 'Get started and scale',

            'icon' => 'growth',

            'questions' => [
                [
                    'question' => 'How long is the StockCore free trial?',

                    'answer' =>
                        'StockCore offers a 14-day free trial so you can explore the platform and decide whether it suits your inventory operation before moving to a paid subscription.',
                ],

                [
                    'question' => 'Do I need a credit card to start the trial?',

                    'answer' =>
                        'No credit card is required to begin the free trial where the no-card trial option is available.',
                ],

                [
                    'question' => 'What happens when my trial ends?',

                    'answer' =>
                        'When the trial ends, you can choose the StockCore plan that best fits your business. You will not automatically be placed into a paid plan unless you intentionally start a subscription.',
                ],

                [
                    'question' => 'Can I upgrade later as my business grows?',

                    'answer' =>
                        'Yes. StockCore plans are designed so you can move to higher limits and more advanced functionality as your operation becomes larger or more complex.',
                ],
            ],
        ],

        #invoices

        'invoices' => [
            'title' => 'Invoices & Receipts',

            'subtitle' => 'View and manage invoices',

            'icon' => 'document',

            'questions' => [
                [
                    'question' => 'Where can I download my StockCore invoices?',

                    'answer' =>
                        'Once subscription billing is active, invoices will be available from the billing section of your StockCore account.',
                ],

                [
                    'question' => 'Will my business details appear on the invoice?',

                    'answer' =>
                        'Billing documents can include the business information associated with your StockCore subscription. Make sure your billing profile is kept up to date.',
                ],

                [
                    'question' => 'How is GST handled?',

                    'answer' =>
                        'Applicable Australian GST will be handled according to the billing arrangement and clearly shown on relevant invoices or checkout information.',
                ],

                [
                    'question' => 'Can I receive invoices by email?',

                    'answer' =>
                        'Billing notifications and invoice delivery options can be configured as StockCore subscription billing is rolled out.',
                ],
            ],
        ],
    ];

@endphp



<section id="pricing-faq" class="relative overflow-hidden bg-background-muted py-24 sm:py-28 lg:py-32">

    {{-- background --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        <div
            class="absolute left-1/2 top-0
                   h-[420px] w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/80
                   blur-[100px]">
        </div>

    </div>



    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- header --}}

        {{-- header --}}
        <div class="mx-auto max-w-3xl text-center">

            <p class="text-[11px] font-bold uppercase
               tracking-[0.25em]
               text-primary-600">
                Billing FAQ
            </p>

            <h2
                class="mt-4
               text-4xl font-extrabold
               tracking-[-0.045em]
               text-secondary-950
               sm:text-5xl">
                Frequently asked questions
            </h2>

            <p
                class="mx-auto mt-5 max-w-2xl
               text-base leading-7
               text-secondary-600
               sm:text-lg">
                Find answers about pricing, billing and managing
                your StockCore plan.
            </p>


            {{-- Full FAQ link --}}
            <div class="mt-6 flex justify-center">

                <a href="{{ url('/faq') }}"
                    class="group inline-flex items-center gap-2
                   text-sm font-semibold
                   text-primary-600
                   transition duration-200
                   hover:text-primary-700">

                    <span>
                        Looking for something else?
                    </span>

                    <span
                        class="inline-flex items-center gap-1
                       border-b border-primary-200
                       pb-0.5
                       transition duration-200
                       group-hover:border-primary-600">

                        Explore all FAQs

                        <svg class="h-4 w-4
                           transition-transform duration-200
                           group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />

                        </svg>

                    </span>

                </a>

            </div>

        </div>



        {{-- faq layout --}}

        <div
            class="mt-14 grid gap-8
                   lg:grid-cols-[280px_minmax(0,1fr)]
                   lg:items-start">

            {{-- left category navigation  --}}

            <aside
                class="rounded-2xl
                       border border-secondary-200
                       bg-white
                       p-3
                       shadow-[0_10px_35px_rgba(15,23,42,0.04)]">

                <nav aria-label="FAQ categories" class="space-y-1">

                    @foreach ($faqCategories as $categoryKey => $category)
                        <button type="button" data-faq-category="{{ $categoryKey }}"
                            class="faq-category group
                                   relative flex w-full
                                   items-center gap-4
                                   rounded-xl
                                   px-4 py-4
                                   text-left
                                   transition duration-200

                                   {{ $categoryKey === 'billing' ? 'is-active bg-primary-50' : 'hover:bg-secondary-50' }}">

                            {{-- Active bar --}}
                            <span
                                class="faq-category-bar
                                       absolute -left-3
                                       top-2 bottom-2
                                       w-[3px]
                                       rounded-full

                                       {{ $categoryKey === 'billing' ? 'bg-primary-600' : 'bg-transparent' }}"></span>



                            {{-- Icon --}}
                            <span
                                class="faq-category-icon
                                       flex h-10 w-10 shrink-0
                                       items-center justify-center
                                       rounded-lg

                                       {{ $categoryKey === 'billing' ? 'bg-primary-50 text-primary-600' : 'text-secondary-700' }}">

                                @switch($category['icon'])
                                    {{-- LAYERS --}}
                                    @case('layers')
                                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l9 5-9 5-9-5 9-5z" />

                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 12l9 5 9-5M3 16l9 5 9-5" />
                                        </svg>
                                    @break

                                    {{-- CARD --}}
                                    @case('card')
                                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <rect x="3" y="5" width="18" height="14" rx="2" />

                                            <path d="M3 10h18" />

                                            <path stroke-linecap="round" d="M7 15h4" />
                                        </svg>
                                    @break

                                    {{-- USER --}}
                                    @case('user')
                                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <circle cx="12" cy="7" r="4" />

                                            <path stroke-linecap="round" d="M4 21a8 8 0 0116 0" />
                                        </svg>
                                    @break

                                    {{-- GROWTH --}}
                                    @case('growth')
                                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 18l5-5 4 3 7-9" />

                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 7h5v5" />
                                        </svg>
                                    @break

                                    {{-- DOCUMENT --}}
                                    @case('document')
                                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.7" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h8l4 4v14H6V3z" />

                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 3v5h5M9 13h6M9 17h6" />
                                        </svg>
                                    @break
                                @endswitch

                            </span>



                            {{-- Text --}}
                            <span class="min-w-0 flex-1">

                                <span
                                    class="faq-category-title
                                           block text-sm font-bold

                                           {{ $categoryKey === 'billing' ? 'text-primary-600' : 'text-secondary-900' }}">
                                    {{ $category['title'] }}
                                </span>


                                <span
                                    class="mt-1 block
                                           text-xs leading-5
                                           text-secondary-500">
                                    {{ $category['subtitle'] }}
                                </span>

                            </span>



                            {{-- Arrow --}}
                            <svg class="h-4 w-4 shrink-0
                                       text-secondary-400
                                       transition
                                       group-hover:translate-x-0.5"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>

                        </button>
                    @endforeach

                </nav>

            </aside>


            {{-- faq content --}}
            <div class="min-w-0">

                @foreach ($faqCategories as $categoryKey => $category)
                    <div class="faq-category-panel
                               {{ $categoryKey !== 'billing' ? 'hidden' : '' }}"
                        data-faq-panel="{{ $categoryKey }}">

                        <div
                            class="overflow-hidden
                                   rounded-2xl
                                   border border-secondary-200
                                   bg-white">

                            @foreach ($category['questions'] as $index => $faq)
                                <article
                                    class="faq-item
                                           {{ !$loop->last ? 'border-b border-secondary-200' : '' }}">

                                    {{-- QUESTION --}}
                                    <button type="button"
                                        class="faq-question
                                               flex w-full
                                               items-center
                                               justify-between
                                               gap-6
                                               px-6 py-5
                                               text-left
                                               transition duration-200
                                               hover:bg-secondary-50

                                               {{ $index === 0 ? 'bg-primary-50/70' : 'bg-white' }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">

                                        <span
                                            class="text-base font-bold
                                                   leading-6
                                                   text-secondary-950">
                                            {{ $faq['question'] }}
                                        </span>


                                        <span
                                            class="faq-arrow
                                                   flex h-10 w-10
                                                   shrink-0
                                                   items-center justify-center
                                                   rounded-full
                                                   bg-primary-50
                                                   text-primary-700
                                                   transition-transform
                                                   duration-300

                                                   {{ $index === 0 ? 'rotate-180' : '' }}">

                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 9l6 6 6-6" />
                                            </svg>

                                        </span>

                                    </button>



                                    {{-- ANSWER --}}
                                    <div
                                        class="faq-answer
                                               {{ $index !== 0 ? 'hidden' : '' }}">

                                        <div
                                            class="px-6 pb-6
                                                   pr-20
                                                   text-sm leading-7
                                                   text-secondary-600
                                                   sm:text-base">
                                            {{ $faq['answer'] }}
                                        </div>

                                    </div>

                                </article>
                            @endforeach

                        </div>

                    </div>
                @endforeach

            </div>

        </div>



        {{-- contact support --}}
        <div
            class="mt-10
                   rounded-2xl
                   border border-primary-100
                   bg-primary-50
                   px-6 py-6
                   sm:px-8">

            <div
                class="flex flex-col gap-6
                       sm:flex-row
                       sm:items-center
                       sm:justify-between">

                <div class="flex items-center gap-5">

                    {{-- Support icon --}}
                    <div
                        class="flex h-16 w-16
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-white
                               text-primary-600">

                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 13v-1a8 8 0 0116 0v1" />

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 13a2 2 0 012-2h1v6H6a2 2 0 01-2-2v-2z" />

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20 13a2 2 0 00-2-2h-1v6h1a2 2 0 002-2v-2z" />

                            <path stroke-linecap="round" d="M17 18c-.8 1.3-2.6 2-5 2" />
                        </svg>

                    </div>


                    <div>

                        <h3
                            class="text-xl font-bold
                                   tracking-[-0.02em]
                                   text-secondary-950">
                            Still have questions?
                        </h3>


                        <p
                            class="mt-1
                                   text-sm leading-6
                                   text-secondary-600
                                   sm:text-base">
                            Our support team is here to help.
                            Get in touch and we’ll point you in the right direction.
                        </p>

                    </div>

                </div>



                {{-- Contact --}}
                <a href="mailto:hello@stockcore.com.au"
                    class="group inline-flex
                           min-h-[50px]
                           shrink-0
                           items-center justify-center
                           gap-3
                           rounded-lg
                           bg-primary-600
                           px-6 py-3
                           text-sm font-semibold
                           text-white
                           transition duration-200
                           hover:bg-primary-700">

                    Contact Support


                    <svg class="h-4 w-4
                               transition duration-200
                               group-hover:translate-x-1"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                    </svg>

                </a>

            </div>

        </div>

    </div>


    {{-- jquery --}}

    <script>
        $(document).ready(function() {


            /* accordion */

            $('#pricing-faq .faq-question')
                .on('click', function() {

                    const $question = $(this);

                    const $item = $question.closest('.faq-item');

                    const $answer = $item.find('.faq-answer');

                    const $arrow = $question.find('.faq-arrow');

                    const isOpen =
                        $question.attr('aria-expanded') === 'true';



                    /*
                     
                         Close other questions inside current category
                     
                        */

                    const $currentPanel =
                        $question.closest('.faq-category-panel');


                    $currentPanel
                        .find('.faq-question')
                        .not($question)
                        .attr('aria-expanded', 'false')
                        .removeClass('bg-primary-50/70')
                        .addClass('bg-white');


                    $currentPanel
                        .find('.faq-arrow')
                        .not($arrow)
                        .removeClass('rotate-180');


                    $currentPanel
                        .find('.faq-answer')
                        .not($answer)
                        .stop(true, true)
                        .slideUp(220);



                    /*
                       
                        Toggle selected question
                      
                        */

                    if (isOpen) {

                        $question
                            .attr('aria-expanded', 'false')
                            .removeClass('bg-primary-50/70')
                            .addClass('bg-white');


                        $arrow.removeClass('rotate-180');


                        $answer
                            .stop(true, true)
                            .slideUp(220);

                    } else {

                        $question
                            .attr('aria-expanded', 'true')
                            .removeClass('bg-white')
                            .addClass('bg-primary-50/70');


                        $arrow.addClass('rotate-180');


                        $answer
                            .stop(true, true)
                            .slideDown(240);

                    }

                });



            /*
                 FAQ CATEGORY SWITCHING
             
                    */

            $('#pricing-faq .faq-category')
                .on('click', function() {

                    const $selected =
                        $(this);

                    const category =
                        $selected.data('faq-category');



                    /*
                        
                             Sidebar Active State
                  
                            */

                    $('#pricing-faq .faq-category')
                        .removeClass('is-active bg-primary-50');


                    $('#pricing-faq .faq-category-bar')
                        .removeClass('bg-primary-600')
                        .addClass('bg-transparent');


                    $('#pricing-faq .faq-category-title')
                        .removeClass('text-primary-600')
                        .addClass('text-secondary-900');


                    $('#pricing-faq .faq-category-icon')
                        .removeClass(
                            'bg-primary-50 text-primary-600'
                        )
                        .addClass(
                            'text-secondary-700'
                        );



                    /*
                      
                         Activate Selected Category

                        */

                    $selected
                        .addClass(
                            'is-active bg-primary-50'
                        );


                    $selected
                        .find('.faq-category-bar')
                        .removeClass('bg-transparent')
                        .addClass('bg-primary-600');


                    $selected
                        .find('.faq-category-title')
                        .removeClass('text-secondary-900')
                        .addClass('text-primary-600');


                    $selected
                        .find('.faq-category-icon')
                        .removeClass('text-secondary-700')
                        .addClass(
                            'bg-primary-50 text-primary-600'
                        );



                    /*
                      
                         Change FAQ Content
                      
                        */

                    $('#pricing-faq .faq-category-panel')
                        .addClass('hidden');


                    const $panel = $(
                        '#pricing-faq .faq-category-panel[data-faq-panel="' +
                        category +
                        '"]'
                    );


                    $panel.removeClass('hidden');



                    /*
                      
                             Reset category accordion,First question opens automatically.
                            
                            */

                    $panel
                        .find('.faq-question')
                        .attr('aria-expanded', 'false')
                        .removeClass('bg-primary-50/70')
                        .addClass('bg-white');


                    $panel
                        .find('.faq-arrow')
                        .removeClass('rotate-180');


                    $panel
                        .find('.faq-answer')
                        .hide();


                    const $firstQuestion =
                        $panel
                        .find('.faq-question')
                        .first();


                    const $firstAnswer =
                        $panel
                        .find('.faq-answer')
                        .first();


                    $firstQuestion
                        .attr('aria-expanded', 'true')
                        .removeClass('bg-white')
                        .addClass('bg-primary-50/70');


                    $firstQuestion
                        .find('.faq-arrow')
                        .addClass('rotate-180');


                    $firstAnswer.show();

                });

        });
    </script>

</section>
