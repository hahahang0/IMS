{{-- terms of service main oontent --}}
@php

    /*
    |--------------------------------------------------------------------------
    | IMPORTANT
    |--------------------------------------------------------------------------
    |
    | Draft content only.
    | Final Terms must be reviewed by qualified legal counsel.
    |
    */

    $termsSections = [

        [
            'id' => 'acceptance',
            'number' => '1',
            'title' => 'Acceptance of Terms',

            'tags' => [
                'SAAS',
                'ACCEPTANCE',
            ],

            'paragraphs' => [
                'By creating an account, accessing, or utilizing the StockCore inventory management application, APIs, and associated web services (collectively referred to as the “Service”), you (“Customer”, “User”, or “Subscriber”) agree to be bound by these Terms of Service (“Terms”).',

                'If you are accepting these Terms on behalf of a corporate entity, company, or partnership, you warrant and represent that you possess full legal authority to bind such entity to these obligations. If you do not agree to all terms contained herein, you must immediately cease accessing and using the Service.',
            ],

            'plain_english' =>
                'By using StockCore, you agree to these legal rules. If you’re signing up for your company, make sure you have permission to do so.',
        ],


        [
            'id' => 'subscription-free-trial',
            'number' => '2',
            'title' => 'Subscription & Free Trial',

            'tags' => [
                'SUBSCRIPTION',
                'BILLING',
            ],

            'paragraphs' => [
                'StockCore provides access to the Service through subscription plans. The features, usage limits, pricing, and billing frequency applicable to your account depend on the subscription selected at registration or upgrade.',

                'Where a free trial is offered, access will continue for the stated trial period unless cancelled earlier. At the conclusion of the trial, access may transition to a paid subscription where billing details and authorization have been provided.',
            ],

            'plain_english' =>
                'Your plan determines what you can use and how you are billed. Review the applicable free-trial and renewal conditions before your trial ends.',
        ],


        [
            'id' => 'accounts-security',
            'number' => '3',
            'title' => 'User Accounts & Security',

            'tags' => [
                'ACCOUNTS',
                'SECURITY',
            ],

            'paragraphs' => [
                'You are responsible for maintaining accurate account information and keeping login credentials confidential. You remain responsible for activity performed through your account unless otherwise required by applicable law.',

                'You must promptly notify StockCore if you reasonably believe your account has been compromised, accessed without authorization, or used in a manner that may threaten the security of the Service.',
            ],

            'plain_english' =>
                'Keep your account credentials secure and tell us promptly if you believe someone has gained unauthorized access.',
        ],


        [
            'id' => 'data-privacy',
            'number' => '4',
            'title' => 'Data Ownership & Privacy',

            'tags' => [
                'DATA',
                'PRIVACY',
            ],

            'paragraphs' => [
                'As between you and StockCore, you retain ownership of the business information, inventory records, documents, and other content that you submit to the Service, subject to the licences reasonably required for StockCore to operate and support the Service.',

                'The collection, handling, use, storage, and disclosure of personal information is also governed by the StockCore Privacy Policy and applicable privacy obligations.',
            ],

            'plain_english' =>
                'Your business data remains yours. StockCore uses it only as necessary to provide and support the Service, subject to the Privacy Policy.',
        ],


        [
            'id' => 'billing-cancellations',
            'number' => '5',
            'title' => 'Billing & Cancellations',

            'tags' => [
                'BILLING',
                'CANCELLATION',
            ],

            'paragraphs' => [
                'Subscription fees are charged according to the billing cycle and pricing applicable to your selected plan. Unless otherwise stated, applicable fees, taxes, upgrades, renewals, and usage charges may be processed using the payment method associated with your account.',

                'Cancellation requests will be handled according to the cancellation terms applicable to your subscription. Any refund rights or credits remain subject to the applicable plan terms and requirements of law.',
            ],

            'plain_english' =>
                'Your subscription is billed according to your chosen plan. Cancellation and refund rules depend on your plan and applicable law.',
        ],


        [
            'id' => 'sla-uptime',
            'number' => '6',
            'title' => 'SLA & Uptime Guarantee',

            'tags' => [
                'SLA',
                'UPTIME',
            ],

            'paragraphs' => [
                'StockCore will use commercially reasonable efforts to maintain the availability, security, and performance of the Service. Availability may occasionally be affected by maintenance, infrastructure issues, third-party services, security events, or circumstances beyond our reasonable control.',

                'Where a specific Service Level Agreement applies to your subscription, availability commitments, exclusions, measurement procedures, and remedies will be governed by that agreement.',
            ],

            'plain_english' =>
                'We work to keep StockCore reliable, but scheduled maintenance and external events can occasionally affect availability.',

            'metrics' => [
                [
                    'value' => '99.9%',
                    'label' => 'Uptime Commitment',
                ],
                [
                    'value' => '< 15 min',
                    'label' => 'Critical Incident SLA',
                ],
                [
                    'value' => '10–30%',
                    'label' => 'Service Credit Tier',
                ],
            ],
        ],


        [
            'id' => 'intellectual-property',
            'number' => '7',
            'title' => 'Intellectual Property Rights',

            'tags' => [
                'IPRIGHTS',
                'LICENSING',
            ],

            'paragraphs' => [
                'All software code, database architecture, interfaces, branding, documentation, trade secrets, and proprietary technology comprising StockCore remain the intellectual property of StockCore or its licensors.',

                'Subscribers are granted a limited, non-exclusive, non-transferable right to access and use the Service during an active subscription, subject to these Terms.',
            ],

            'plain_english' =>
                'You may use StockCore while your subscription is active, but ownership of the software and technology remains with StockCore or its licensors.',
        ],


        [
            'id' => 'liability-warranties',
            'number' => '8',
            'title' => 'Liability & Warranties',

            'tags' => [
                'LIABILITY',
                'WARRANTIES',
            ],

            'paragraphs' => [
                'To the maximum extent permitted by applicable law, the Service is provided subject to the warranties, guarantees, exclusions, and limitations described in the final legally reviewed version of these Terms.',

                'Nothing in these Terms is intended to exclude rights or guarantees that cannot lawfully be excluded. Final liability caps, exclusions, statutory guarantees, and remedies must be reviewed by qualified legal counsel before publication.',
            ],

            'plain_english' =>
                'This section explains responsibility if something goes wrong. The final wording requires legal review before these Terms are published.',
        ],


        [
            'id' => 'termination',
            'number' => '9',
            'title' => 'Termination of Service',

            'tags' => [
                'TERMINATION',
                'ACCESS',
            ],

            'paragraphs' => [
                'You may discontinue use of the Service and cancel your subscription in accordance with the applicable cancellation process.',

                'StockCore may suspend or terminate access where permitted under these Terms, including for material breach, unlawful activity, security concerns, or non-payment. Data retention and export rights following termination will be handled according to applicable contractual and legal requirements.',
            ],

            'plain_english' =>
                'You can cancel according to your plan. StockCore may suspend or terminate access in certain situations, including serious breaches or non-payment.',
        ],


        [
            'id' => 'governing-law',
            'number' => '10',
            'title' => 'Governing Law',

            'tags' => [
                'LEGAL',
                'JURISDICTION',
            ],

            'paragraphs' => [
                'These Terms will be governed by the governing law and jurisdiction specified in the final legally reviewed version of this agreement, subject to any mandatory rights or laws applicable to the Customer.',

                'The final jurisdiction, dispute-resolution procedure, notice requirements, and applicable consumer-law provisions must be confirmed by qualified legal counsel before publication.',
            ],

            'plain_english' =>
                'The final Terms need to specify which laws and courts apply. Your legal advisor should confirm that wording.',
        ],


        [
            'id' => 'amendments-contact',
            'number' => '11',
            'title' => 'Amendments & Contact Information',

            'tags' => [
                'AMENDMENTS',
                'CONTACT',
            ],

            'paragraphs' => [
                'StockCore reserves the right to modify these Terms where permitted by law. Where appropriate, notice of material changes may be provided through email, account notification, dashboard alert, or another reasonable communication method.',

                'If you have any questions about these Terms, please contact our legal team using the details below.',
            ],

            'plain_english' => null,

            'contact' => [
                'name' => 'StockCore Legal Operations',
                'attention' => 'Attn: General Counsel & Legal Affairs',
                'email' => 'legal@stockcore.com.au',
            ],
        ],

    ];

@endphp



<section
    id="terms-content"
    class="relative
           bg-background-muted
           py-14
           sm:py-16
           lg:py-20"
>

    {{--
        =========================================================
        IMPORTANT

        DO NOT put overflow-hidden on #terms-content.

        Sticky elements stop behaving properly when an ancestor
        becomes an overflow container.

        We put overflow-hidden ONLY inside this decorative layer.
        =========================================================
    --}}

    <div
        class="pointer-events-none
               absolute inset-0
               overflow-hidden"
        aria-hidden="true"
    >

        {{-- RIGHT CURVE --}}
        <div
            class="absolute
                   -right-[400px] top-[15%]
                   h-[760px] w-[760px]
                   rounded-full
                   border-[105px]
                   border-primary-50/40"
        ></div>


        {{-- LEFT CURVE --}}
        <div
            class="absolute
                   -left-[420px] bottom-[6%]
                   h-[720px] w-[720px]
                   rounded-full
                   border-[100px]
                   border-primary-50/40"
        ></div>


        {{-- SOFT LIGHT --}}
        <div
            class="absolute
                   left-1/2 top-[35%]
                   h-[600px] w-[1100px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[130px]"
        ></div>

    </div>



    {{-- =========================================================
        MAIN TERMS GRID

        Sidebar and legal content MUST remain in this same parent.
        This parent determines when sticky stops.
    ========================================================== --}}
    <div
        id="terms-layout"
        class="relative z-10
               mx-auto
               grid max-w-7xl
               gap-6
               px-6
               sm:px-8
               lg:grid-cols-[280px_minmax(0,1fr)]
               lg:items-start
               lg:px-8"
    >

 {{-- left table of contents --}}
        <aside
            id="terms-sidebar"
            class="hidden
                   h-fit
                   lg:sticky
                   lg:top-[96px]
                   lg:block
                   lg:self-start"
        >

            <div
                class="flex
                       max-h-[calc(100vh-120px)]
                       flex-col
                       overflow-hidden
                       rounded-[18px]
                       border border-secondary-200
                       bg-white

                       shadow-[0_10px_30px_rgba(15,23,42,0.04)]"
            >

              {{-- sidebar header --}}
                <div
                    class="flex
                           shrink-0
                           items-center
                           justify-between
                           border-b
                           border-secondary-100
                           px-5 py-5"
                >

                    <h2
                        class="text-[11px]
                               font-bold uppercase
                               tracking-[0.08em]
                               text-secondary-500"
                    >
                        Table of Contents
                    </h2>


                    <span
                        class="rounded-full
                               bg-primary-50
                               px-3 py-1
                               text-[10px]
                               font-semibold
                               text-primary-600"
                    >
                        {{ count($termsSections) }} Sections
                    </span>

                </div>


{{-- scroable table of contents --}}
                <nav
                    id="terms-toc-scroll"
                    class="terms-sidebar-scroll
                           min-h-0
                           flex-1
                           overflow-y-auto
                           overscroll-contain
                           px-4 py-4"
                    aria-label="Terms of Service sections"
                >

                    <div class="space-y-1">

                        @foreach ($termsSections as $index => $section)

                            <a
                                href="#{{ $section['id'] }}"

                                data-terms-nav="{{ $section['id'] }}"

                                class="terms-nav-link
                                       flex
                                       rounded-[11px]
                                       px-3 py-2.5
                                       text-[12px]
                                       font-medium
                                       leading-5

                                       transition-all
                                       duration-200

                                       {{ $index === 0
                                            ? 'bg-primary-50 text-primary-600'
                                            : 'text-secondary-600 hover:bg-secondary-50 hover:text-secondary-950'
                                       }}"
                            >

                                <span class="mr-1 shrink-0">
                                    {{ $section['number'] }}.
                                </span>


                                <span>
                                    {{ $section['title'] }}
                                </span>

                            </a>

                        @endforeach

                    </div>

                </nav>

            </div>

        </aside>



     {{-- right legal content --}}
        <div
            id="terms-sections"
            class="min-w-0
                   space-y-5"
        >

            @foreach ($termsSections as $section)

                @php

                    $searchText = strtolower(

                        $section['title']
                        . ' '
                        . implode(' ', $section['tags'])
                        . ' '
                        . implode(' ', $section['paragraphs'])
                        . ' '
                        . ($section['plain_english'] ?? '')

                    );

                @endphp



                <article
                    id="{{ $section['id'] }}"

                    data-terms-section="{{ $section['id'] }}"

                    data-terms-search="{{ $searchText }}"

                    class="terms-section
                           scroll-mt-[120px]
                           overflow-hidden
                           rounded-[20px]
                           border border-secondary-200
                           bg-white

                           shadow-[0_10px_30px_rgba(15,23,42,0.035)]

                           transition-all
                           duration-300

                           hover:border-primary-100"
                >

               {{-- header  --}}
                    <div
                        class="terms-section-header
                               flex
                               cursor-pointer
                               items-start
                               justify-between
                               gap-6
                               px-6
                               pb-4
                               pt-6
                               sm:px-8"
                    >

                        <div class="min-w-0 flex-1">

                            {{-- TAGS --}}
                            <div
                                class="flex
                                       flex-wrap
                                       items-center
                                       gap-2"
                            >

                                @foreach ($section['tags'] as $tagIndex => $tag)

                                    <span
                                        class="rounded-[7px]
                                               px-3 py-1.5
                                               text-[10px]
                                               font-bold uppercase
                                               tracking-[0.04em]

                                               {{ $tagIndex === 0
                                                    ? 'bg-primary-50 text-primary-600'
                                                    : 'bg-secondary-50 text-secondary-600'
                                               }}"
                                    >
                                        #{{ $tag }}
                                    </span>

                                @endforeach

                            </div>



                            {{-- TITLE --}}
                            <h2
                                class="mt-5
                                       text-[25px]
                                       font-extrabold
                                       leading-[1.2]
                                       tracking-[-0.035em]
                                       text-secondary-950
                                       sm:text-[28px]"
                            >
                                {{ $section['number'] }}.
                                {{ $section['title'] }}
                            </h2>

                        </div>



                        {{-- COPY LINK --}}
                        <button
                            type="button"

                            data-copy-section="{{ $section['id'] }}"

                            class="copy-terms-link
                                   group
                                   mt-1
                                   inline-flex
                                   shrink-0
                                   items-center
                                   gap-1.5

                                   text-[12px]
                                   font-medium
                                   text-secondary-400

                                   transition-colors

                                   hover:text-primary-600"
                        >

                            <svg
                                class="h-4 w-4"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M10 13a5 5 0 0 0 7.07 0l2-2a5 5 0 0 0-7.07-7.07l-1 1"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14 11a5 5 0 0 0-7.07 0l-2 2A5 5 0 0 0 12 20.07l1-1"
                                />
                            </svg>


                            <span>
                                Link
                            </span>

                        </button>

                    </div>



                    {{-- =========================================
                        BODY

                        Keep sections open by default because this is
                        a legal document and scrollspy works better.
                    ========================================== --}}
                    <div
                        class="terms-section-body"
                    >

                        <div
                            class="px-6
                                   pb-7
                                   sm:px-8"
                        >

                            {{-- PARAGRAPHS --}}
                            <div
                                class="space-y-4
                                       text-[14px]
                                       leading-7
                                       text-secondary-600
                                       sm:text-[15px]"
                            >

                                @foreach ($section['paragraphs'] as $paragraph)

                                    <p>
                                        {{ $paragraph }}
                                    </p>

                                @endforeach

                            </div>



                            {{-- sla metrics --}}
                            @if (!empty($section['metrics']))

                                <div
                                    class="mt-6
                                           grid gap-3
                                           sm:grid-cols-3"
                                >

                                    @foreach ($section['metrics'] as $metric)

                                        <div
                                            class="rounded-[14px]
                                                   border border-secondary-200
                                                   bg-background-muted
                                                   px-5 py-5
                                                   text-center"
                                        >

                                            <p
                                                class="text-[25px]
                                                       font-extrabold
                                                       tracking-[-0.03em]
                                                       text-primary-600"
                                            >
                                                {{ $metric['value'] }}
                                            </p>


                                            <p
                                                class="mt-1
                                                       text-[10px]
                                                       font-bold uppercase
                                                       tracking-[0.06em]
                                                       text-secondary-500"
                                            >
                                                {{ $metric['label'] }}
                                            </p>

                                        </div>

                                    @endforeach

                                </div>

                            @endif



                           {{-- plain english --}}
                            @if (!empty($section['plain_english']))

                                <div
                                    class="mt-6
                                           rounded-[14px]
                                           border
                                           border-primary-100
                                           border-l-[3px]
                                           border-l-primary-600
                                           bg-primary-50/60
                                           px-5 py-4"
                                >

                                    <div
                                        class="flex
                                               items-start
                                               gap-3"
                                    >

                                        <span
                                            class="mt-0.5
                                                   flex h-7 w-7
                                                   shrink-0
                                                   items-center
                                                   justify-center
                                                   rounded-full
                                                   bg-primary-600
                                                   text-white"
                                        >

                                            <svg
                                                class="h-3.5 w-3.5"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    d="M12 11v5"
                                                />

                                                <circle
                                                    cx="12"
                                                    cy="7"
                                                    r="1"
                                                    fill="currentColor"
                                                    stroke="none"
                                                />
                                            </svg>

                                        </span>



                                        <div>

                                            <p
                                                class="text-[10px]
                                                       font-bold uppercase
                                                       tracking-[0.08em]
                                                       text-secondary-800"
                                            >
                                                In Plain English
                                            </p>


                                            <p
                                                class="mt-1
                                                       text-[13px]
                                                       leading-6
                                                       text-secondary-600"
                                            >
                                                {{ $section['plain_english'] }}
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            @endif


{{-- final content information --}}
                            @if (!empty($section['contact']))

                                <div
                                    class="mt-6
                                           rounded-[15px]
                                           border border-secondary-200
                                           bg-background-muted
                                           p-5"
                                >

                                    <div
                                        class="flex
                                               flex-col
                                               gap-5

                                               sm:flex-row
                                               sm:items-center
                                               sm:justify-between"
                                    >

                                        <div
                                            class="flex
                                                   items-start
                                                   gap-4"
                                        >

                                            <span
                                                class="flex
                                                       h-11 w-11
                                                       shrink-0
                                                       items-center
                                                       justify-center
                                                       rounded-full
                                                       bg-primary-50
                                                       text-primary-600"
                                            >

                                                <svg
                                                    class="h-5 w-5"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <rect
                                                        x="3"
                                                        y="5"
                                                        width="18"
                                                        height="14"
                                                        rx="2"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="m4 7 8 6 8-6"
                                                    />
                                                </svg>

                                            </span>



                                            <div>

                                                <p
                                                    class="text-[14px]
                                                           font-bold
                                                           text-secondary-950"
                                                >
                                                    {{ $section['contact']['name'] }}
                                                </p>


                                                <p
                                                    class="mt-0.5
                                                           text-[12px]
                                                           text-secondary-500"
                                                >
                                                    {{ $section['contact']['attention'] }}
                                                </p>


                                                <a
                                                    href="mailto:{{ $section['contact']['email'] }}"

                                                    class="mt-1
                                                           inline-flex
                                                           items-center
                                                           gap-2
                                                           text-[12px]
                                                           text-secondary-600

                                                           transition-colors

                                                           hover:text-primary-600"
                                                >

                                                    <svg
                                                        class="h-3.5 w-3.5
                                                               text-primary-600"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="1.8"
                                                    >
                                                        <rect
                                                            x="3"
                                                            y="5"
                                                            width="18"
                                                            height="14"
                                                            rx="2"
                                                        />

                                                        <path
                                                            d="m4 7 8 6 8-6"
                                                        />
                                                    </svg>


                                                    {{ $section['contact']['email'] }}

                                                </a>

                                            </div>

                                        </div>



                                        <a
                                            href="mailto:{{ $section['contact']['email'] }}"

                                            class="inline-flex
                                                   h-[44px]
                                                   shrink-0
                                                   items-center
                                                   justify-center
                                                   rounded-xl
                                                   bg-primary-600
                                                   px-5

                                                   text-[12px]
                                                   font-semibold
                                                   text-white

                                                   shadow-[0_8px_20px_rgba(37,99,235,0.20)]

                                                   transition-all
                                                   duration-300

                                                   hover:bg-primary-700
                                                   hover:shadow-[0_12px_25px_rgba(37,99,235,0.27)]"
                                        >
                                            Email Legal Counsel
                                        </a>

                                    </div>

                                </div>

                            @endif

                        </div>

                    </div>

                </article>

            @endforeach



            {{-- =================================================
                LEGAL REVIEW FOOTER

                IMPORTANT:
                This stays inside the right column.

                Therefore the sticky sidebar remains active until
                this final block has passed.
            ================================================== --}}
            <div
                id="terms-legal-review-footer"
                class="rounded-[18px]
                       border border-secondary-200
                       bg-background-muted/85
                       px-6 py-6
                       text-center"
            >

                <p
                    class="text-[13px]
                           font-bold
                           text-secondary-800"
                >
                    StockCore Platform Legal Review Version 2.4
                </p>


                <p
                    class="mx-auto mt-1
                           max-w-[800px]
                           text-[11px]
                           leading-5
                           text-secondary-500"
                >
                    This document is subject to ongoing legal review.
                    Ensure final wording is reviewed and approved by
                    qualified legal counsel prior to customer deployment.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- styles --}}


<style>

    /*
    |--------------------------------------------------------------------------
    | TABLE OF CONTENTS SCROLLBAR
    |--------------------------------------------------------------------------
    */

    .terms-sidebar-scroll {
        scrollbar-width: thin;
        scrollbar-color: #94a3b8 transparent;
        scrollbar-gutter: stable;
    }


    .terms-sidebar-scroll::-webkit-scrollbar {
        width: 5px;
    }


    .terms-sidebar-scroll::-webkit-scrollbar-track {
        background: transparent;
    }


    .terms-sidebar-scroll::-webkit-scrollbar-thumb {
        background: #94a3b8;
        border-radius: 999px;
    }


    .terms-sidebar-scroll::-webkit-scrollbar-thumb:hover {
        background: #64748b;
    }



    /*
    |--------------------------------------------------------------------------
    | SEARCH MATCH
    |--------------------------------------------------------------------------
    */

    .terms-search-match {
        border-color: rgb(96 165 250) !important;

        box-shadow:
            0 0 0 3px rgba(219, 234, 254, 0.75),
            0 12px 32px rgba(15, 23, 42, 0.05);
    }



    /*
    |--------------------------------------------------------------------------
    | PRINT
    |--------------------------------------------------------------------------
    */

    @media print {

        #terms-sidebar {
            display: none !important;
        }

        #terms-layout {
            display: block !important;
        }

        .terms-section {
            break-inside: avoid;
            box-shadow: none !important;
        }

        .copy-terms-link {
            display: none !important;
        }

    }

</style>





{{-- ============================================================
    JAVASCRIPT
============================================================ --}}


<script>
$(document).ready(function () {

    let allTermsExpanded = true;



    /*
    |--------------------------------------------------------------------------
    | HELPER:
    | ACTIVATE TABLE-OF-CONTENTS ITEM
    |--------------------------------------------------------------------------
    */

    function activateTermsNavigation(sectionId) {

        const $links =
            $('.terms-nav-link');


        /*
         * Reset
         */
        $links
            .removeClass(
                'bg-primary-50 text-primary-600'
            )
            .addClass(
                'text-secondary-600'
            );


        /*
         * Activate current
         */
        const $active =
            $('.terms-nav-link[data-terms-nav="' + sectionId + '"]');


        $active
            .removeClass(
                'text-secondary-600'
            )
            .addClass(
                'bg-primary-50 text-primary-600'
            );


        /*
         * =========================================================
         * IMPORTANT:
         *
         * If we are on section 8, 9, 10 or 11, automatically scroll
         * the sidebar itself so the highlighted TOC entry remains
         * visible.
         * =========================================================
         */

        const $scrollContainer =
            $('#terms-toc-scroll');


        if (
            !$active.length ||
            !$scrollContainer.length
        ) {
            return;
        }


        const containerTop =
            $scrollContainer.offset().top;


        const containerHeight =
            $scrollContainer.innerHeight();


        const containerBottom =
            containerTop + containerHeight;


        const activeTop =
            $active.offset().top;


        const activeHeight =
            $active.outerHeight();


        const activeBottom =
            activeTop + activeHeight;


        /*
         * Active item below visible area.
         */
        if (activeBottom > containerBottom - 15) {

            $scrollContainer.stop(true).animate(
                {
                    scrollTop:
                        $scrollContainer.scrollTop()
                        +
                        (
                            activeBottom
                            -
                            containerBottom
                        )
                        +
                        35
                },
                180
            );

        }


        /*
         * Active item above visible area.
         */
        else if (activeTop < containerTop + 15) {

            $scrollContainer.stop(true).animate(
                {
                    scrollTop:
                        $scrollContainer.scrollTop()
                        -
                        (
                            containerTop
                            -
                            activeTop
                        )
                        -
                        35
                },
                180
            );

        }

    }



    /*
    |--------------------------------------------------------------------------
    | SCROLLSPY
    |--------------------------------------------------------------------------
    */

    function updateTermsScrollSpy() {

        const scrollPosition =
            $(window).scrollTop();


        /*
         * This should be slightly below your navbar.
         *
         * Navbar ~ 64px
         * + spacing ~ 70px
         */
        const detectionPoint =
            scrollPosition + 155;


        let currentSectionId =
            $('.terms-section')
                .first()
                .attr('id');


        $('.terms-section').each(function () {

            const $section =
                $(this);


            const sectionTop =
                $section.offset().top;


            if (
                sectionTop <= detectionPoint
            ) {

                currentSectionId =
                    $section.attr('id');

            }

        });


        activateTermsNavigation(
            currentSectionId
        );

    }



    /*
    |--------------------------------------------------------------------------
    | OPTIMISED SCROLL HANDLER
    |--------------------------------------------------------------------------
    */

    let scrollTicking = false;


    $(window).on(
        'scroll.termsScrollSpy',
        function () {

            if (scrollTicking) {
                return;
            }


            scrollTicking = true;


            window.requestAnimationFrame(
                function () {

                    updateTermsScrollSpy();

                    scrollTicking = false;

                }
            );

        }
    );


    updateTermsScrollSpy();



    /*
    |--------------------------------------------------------------------------
    | TABLE OF CONTENTS CLICK
    |--------------------------------------------------------------------------
    */

    $('.terms-nav-link').on(
        'click',
        function (event) {

            event.preventDefault();


            const targetId =
                $(this)
                    .attr('href');


            const $target =
                $(targetId);


            if (!$target.length) {
                return;
            }


            /*
             * Make sure section is visible/open.
             */
            $target
                .find('.terms-section-body')
                .stop(true, true)
                .slideDown(180);


            /*
             * Scroll page to selected section.
             */
            $('html, body')
                .stop(true)
                .animate(
                    {
                        scrollTop:
                            $target.offset().top - 105
                    },
                    420
                );


            activateTermsNavigation(
                $target.attr('id')
            );

        }
    );



    /*
    |--------------------------------------------------------------------------
    | SECTION HEADER CLICK
    |--------------------------------------------------------------------------
    |
    | Optional accordion behaviour.
    |
    */

    $('.terms-section-header').on(
        'click',
        function (event) {

            /*
             * Clicking copy-link must NOT collapse.
             */
            if (
                $(event.target)
                    .closest('.copy-terms-link')
                    .length
            ) {
                return;
            }


            $(this)
                .siblings('.terms-section-body')
                .stop(true, true)
                .slideToggle(220);

        }
    );



    /*
    |--------------------------------------------------------------------------
    | EXPAND ALL
    |--------------------------------------------------------------------------
    |
    | Receives event from the hero button.
    |
    */

    $(document).on(
        'stockcore:terms-expand-all',
        function () {

            if (allTermsExpanded) {

                $('.terms-section-body')
                    .stop(true, true)
                    .slideUp(220);


                allTermsExpanded = false;


                /*
                 * Optional:
                 * change hero button text if this ID exists.
                 */
                $('#terms-expand-label')
                    .text('Expand All');

            } else {

                $('.terms-section-body')
                    .stop(true, true)
                    .slideDown(220);


                allTermsExpanded = true;


                $('#terms-expand-label')
                    .text('Collapse All');

            }

        }
    );



    /*
    |--------------------------------------------------------------------------
    | SEARCH
    |--------------------------------------------------------------------------
    |
    | Receives event from hero search field.
    |
    */

    $(document).on(
        'stockcore:terms-search',
        function (event, searchTerm) {

            const term =
                String(
                    searchTerm || ''
                )
                .trim()
                .toLowerCase();


            /*
             * Reset highlighting.
             */
            $('.terms-section')
                .removeClass(
                    'terms-search-match'
                );


            /*
             * Empty search.
             */
            if (term === '') {

                $('.terms-section')
                    .stop(true, true)
                    .fadeIn(120);


                return;

            }


            let $firstMatch =
                null;


            $('.terms-section').each(
                function () {

                    const $section =
                        $(this);


                    const searchable =
                        String(
                            $section
                                .data('terms-search')
                        )
                        .toLowerCase();


                    if (
                        searchable.includes(term)
                    ) {

                        $section
                            .stop(true, true)
                            .fadeIn(120)
                            .addClass(
                                'terms-search-match'
                            );


                        $section
                            .find('.terms-section-body')
                            .show();


                        if (!$firstMatch) {

                            $firstMatch =
                                $section;

                        }

                    } else {

                        $section
                            .stop(true, true)
                            .hide();

                    }

                }
            );


            /*
             * Scroll to first result.
             */
            if (
                $firstMatch &&
                $firstMatch.length
            ) {

                $('html, body')
                    .stop(true)
                    .animate(
                        {
                            scrollTop:
                                $firstMatch
                                    .offset()
                                    .top
                                - 105
                        },
                        350
                    );

            }

        }
    );



    /*
    |--------------------------------------------------------------------------
    | COPY SECTION LINK
    |--------------------------------------------------------------------------
    */

    $('.copy-terms-link').on(
        'click',
        function (event) {

            event.preventDefault();

            event.stopPropagation();


            const $button =
                $(this);


            const sectionId =
                $button
                    .data('copy-section');


            const link =
                window.location.origin
                +
                window.location.pathname
                +
                '#'
                +
                sectionId;


            /*
             * Modern clipboard API.
             */
            if (
                navigator.clipboard &&
                navigator.clipboard.writeText
            ) {

                navigator.clipboard
                    .writeText(link)
                    .then(
                        function () {

                            showCopiedState(
                                $button
                            );

                        }
                    );

            }

            /*
             * Fallback.
             */
            else {

                const temporaryInput =
                    $('<input>');


                $('body')
                    .append(
                        temporaryInput
                    );


                temporaryInput
                    .val(link)
                    .select();


                document.execCommand(
                    'copy'
                );


                temporaryInput.remove();


                showCopiedState(
                    $button
                );

            }

        }
    );



    /*
    |--------------------------------------------------------------------------
    | COPY STATE
    |--------------------------------------------------------------------------
    */

    function showCopiedState($button) {

        const $text =
            $button.find('span');


        const original =
            $text.text();


        $text.text(
            'Copied'
        );


        $button
            .addClass(
                'text-primary-600'
            );


        setTimeout(
            function () {

                $text.text(
                    original
                );


                $button
                    .removeClass(
                        'text-primary-600'
                    );

            },
            1300
        );

    }



    /*
    |--------------------------------------------------------------------------
    | HANDLE URL HASH
    |--------------------------------------------------------------------------
    |
    | Example:
    |
    | /terms#termination
    |
    */

    if (
        window.location.hash
    ) {

        const $hashTarget =
            $(
                window.location.hash
            );


        if (
            $hashTarget.length &&
            $hashTarget.hasClass(
                'terms-section'
            )
        ) {

            setTimeout(
                function () {

                    $hashTarget
                        .find(
                            '.terms-section-body'
                        )
                        .show();


                    $('html, body')
                        .scrollTop(
                            $hashTarget
                                .offset()
                                .top
                            - 105
                        );


                    activateTermsNavigation(
                        $hashTarget.attr(
                            'id'
                        )
                    );

                },
                120
            );

        }

    }   

});
</script>

