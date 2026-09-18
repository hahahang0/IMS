{{-- ============================================================
    PRIVACY POLICY - MAIN CONTENT
    resources/views/public/privacy/content.blade.php

    IMPORTANT:
    Draft/sample policy content for development and layout only.
    Final wording should be reviewed and approved by qualified
    legal counsel before publication.
============================================================ --}}

@php

    $privacySections = [

        [
            'id' => 'introduction',
            'number' => '1',
            'title' => 'Introduction',

            'tags' => [
                'OVERVIEW',
                'PRIVACY',
            ],

            'paragraphs' => [
                'StockCore is committed to respecting privacy and handling personal information in an open, transparent and responsible manner.',

                'This Privacy Policy explains how we may collect, use, disclose, store and protect personal and business information when you access our website, inventory management platform, integrations and related services.',
            ],

            'plain_english' =>
                'This policy explains what information StockCore may collect, why we use it, and how we work to protect it.',
        ],


        [
            'id' => 'information-we-collect',
            'number' => '2',
            'title' => 'Information We Collect',

            'tags' => [
                'DATA',
                'COLLECTION',
            ],

            'paragraphs' => [
                'We may collect information that you provide directly to us, information generated through your use of the Service, and information received from third-party services that you choose to connect with StockCore.',

                'Depending on how you use the Service, this may include your name, email address, phone number, organisation details, account information, billing information, inventory records, transaction data, uploaded documents, support communications and technical information associated with your use of the platform.',
            ],

            'plain_english' =>
                'We may collect the information you give us, information created when you use StockCore, and information from integrations you choose to connect.',
        ],


        [
            'id' => 'how-we-use-information',
            'number' => '3',
            'title' => 'How We Use Information',

            'tags' => [
                'USAGE',
                'PROCESSING',
            ],

            'paragraphs' => [
                'We may use information to provide, operate, maintain and improve StockCore, authenticate users, process transactions, provide customer support, communicate service information, improve security and administer customer accounts.',

                'We may also use aggregated or de-identified information for analytics, product improvement, reporting and research where permitted by applicable law.',
            ],

            'plain_english' =>
                'We mainly use information to run StockCore, support customers, improve the platform and keep the Service secure.',
        ],


        [
            'id' => 'disclosure-of-information',
            'number' => '4',
            'title' => 'Disclosure of Information',

            'tags' => [
                'DISCLOSURE',
                'SHARING',
            ],

            'paragraphs' => [
                'We may disclose information to service providers, professional advisers, technology partners and other organisations that assist us in providing and supporting the Service.',

                'Information may also be disclosed where required by law, to protect the rights or security of StockCore or others, in connection with corporate transactions, or where you have authorised the disclosure.',
            ],

            'plain_english' =>
                'We may share information with trusted providers that help us operate StockCore, or where disclosure is legally required.',
        ],


        [
            'id' => 'data-storage-security',
            'number' => '5',
            'title' => 'Data Storage & Security',

            'tags' => [
                'SECURITY',
                'STORAGE',
            ],

            'paragraphs' => [
                'StockCore takes reasonable administrative, technical and organisational measures designed to protect personal information against unauthorised access, loss, misuse, alteration or disclosure.',

                'No electronic transmission or storage system can be guaranteed to be completely secure. We therefore continually review security controls and operational practices as the platform evolves.',
            ],

            'plain_english' =>
                'We use security measures designed to protect your information, but no internet-based system can guarantee absolute security.',

            'features' => [
                [
                    'title' => 'Controlled Access',
                    'description' => 'Access is limited according to operational requirements.',
                ],
                [
                    'title' => 'Secure Infrastructure',
                    'description' => 'Infrastructure and operational controls are reviewed regularly.',
                ],
                [
                    'title' => 'Ongoing Monitoring',
                    'description' => 'Security practices evolve as the platform and threats change.',
                ],
            ],
        ],


        [
            'id' => 'international-transfers',
            'number' => '6',
            'title' => 'International Transfers',

            'tags' => [
                'GLOBAL',
                'TRANSFERS',
            ],

            'paragraphs' => [
                'Some service providers or infrastructure used to deliver StockCore may operate from locations outside Australia. Where information is processed or stored internationally, we will seek to use appropriate contractual, operational and security measures consistent with applicable privacy obligations.',

                'The countries in which information may be handled can depend on the infrastructure, integrations and third-party services used in providing the Service.',
            ],

            'plain_english' =>
                'Some technology providers may operate overseas. Where that happens, we seek to use appropriate safeguards for information handled outside Australia.',
        ],


        [
            'id' => 'rights-choices',
            'number' => '7',
            'title' => 'Your Rights & Choices',

            'tags' => [
                'RIGHTS',
                'CHOICES',
            ],

            'paragraphs' => [
                'Depending on applicable law and your relationship with StockCore, you may have rights regarding access to, correction of, or deletion of certain personal information held about you.',

                'You may also be able to update account information through StockCore, manage communication preferences, disconnect integrations, or contact us regarding privacy-related requests.',
            ],

            'plain_english' =>
                'You may be able to access, correct or request changes to personal information associated with your account.',
        ],


        [
            'id' => 'cookies-tracking',
            'number' => '8',
            'title' => 'Cookies & Tracking Technologies',

            'tags' => [
                'COOKIES',
                'ANALYTICS',
            ],

            'paragraphs' => [
                'Our website and Service may use cookies, local storage and similar technologies to maintain sessions, remember preferences, understand usage, improve performance and support security.',

                'Where required, users may be provided with controls or choices regarding optional analytics or similar technologies. Essential technologies may remain necessary for the operation and security of the Service.',
            ],

            'plain_english' =>
                'Cookies help the website remember settings, keep sessions working and understand how the Service is used.',
        ],


        [
            'id' => 'third-party-services',
            'number' => '9',
            'title' => 'Third-Party Services',

            'tags' => [
                'INTEGRATIONS',
                'THIRD-PARTY',
            ],

            'paragraphs' => [
                'StockCore may integrate with third-party services such as accounting systems, e-commerce platforms, payment providers, logistics tools and other business applications.',

                'When you connect a third-party service, that provider may separately collect or process information in accordance with its own privacy practices. StockCore is not responsible for the privacy practices of independent third parties.',
            ],

            'plain_english' =>
                'When you connect another platform to StockCore, that platform may also handle data under its own privacy policy.',
        ],


        [
            'id' => 'childrens-privacy',
            'number' => '10',
            'title' => 'Children’s Privacy',

            'tags' => [
                'MINORS',
                'PRIVACY',
            ],

            'paragraphs' => [
                'StockCore is designed for businesses and professional users and is not intended to be used by children as a consumer service.',

                'If we become aware that personal information relating to a child has been collected in circumstances where it should not have been collected, we will take reasonable steps appropriate to the circumstances.',
            ],

            'plain_english' =>
                'StockCore is a business platform and is not designed as a service for children.',
        ],


        [
            'id' => 'policy-changes',
            'number' => '11',
            'title' => 'Changes to This Policy',

            'tags' => [
                'UPDATES',
                'NOTICE',
            ],

            'paragraphs' => [
                'We may update this Privacy Policy from time to time to reflect changes to our services, technology, legal obligations or privacy practices.',

                'Where appropriate, we may notify users of material changes through the website, platform, email, account notification or another reasonable communication method. The latest version will display its effective or updated date.',
            ],

            'plain_english' =>
                'We may update this policy as StockCore changes. The current version and date will always be identified on this page.',
        ],


        [
            'id' => 'contact-us',
            'number' => '12',
            'title' => 'Contact Us',

            'tags' => [
                'CONTACT',
                'PRIVACY',
            ],

            'paragraphs' => [
                'If you have questions, concerns or requests relating to this Privacy Policy or the handling of personal information, please contact the StockCore privacy team using the details below.',

                'Privacy complaints and requests will be reviewed and handled in accordance with our internal procedures and applicable legal obligations.',
            ],

            'plain_english' => null,

            'contact' => [
                'name' => 'StockCore Privacy Team',
                'attention' => 'Privacy & Compliance',
                'email' => 'privacy@stockcore.com.au',
            ],
        ],

    ];

@endphp



<section
    id="privacy-content"
    class="relative
           bg-background
           py-14
           sm:py-16
           lg:py-20"
>

    {{-- =========================================================
        DECORATIVE BACKGROUND
    ========================================================== --}}
    <div
        class="pointer-events-none
               absolute inset-0
               overflow-hidden"
        aria-hidden="true"
    >

        <div
            class="absolute
                   -right-[380px] top-[18%]
                   h-[760px] w-[760px]
                   rounded-full
                   border-[105px]
                   border-primary-50/40"
        ></div>


        <div
            class="absolute
                   -left-[420px] bottom-[5%]
                   h-[720px] w-[720px]
                   rounded-full
                   border-[100px]
                   border-primary-50/40"
        ></div>


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
        MAIN LAYOUT
    ========================================================== --}}
    <div
        id="privacy-layout"
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

        {{-- =====================================================
            TABLE OF CONTENTS
        ====================================================== --}}
        <aside
            id="privacy-sidebar"
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

                {{-- HEADER --}}
                <div
                    class="flex shrink-0
                           items-center
                           justify-between
                           border-b border-secondary-100
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
                        {{ count($privacySections) }} Sections
                    </span>

                </div>



                {{-- LINKS --}}
                <nav
                    id="privacy-toc-scroll"
                    class="privacy-sidebar-scroll
                           min-h-0
                           flex-1
                           overflow-y-auto
                           overscroll-contain
                           px-4 py-4"
                    aria-label="Privacy Policy sections"
                >

                    <div class="space-y-1">

                        @foreach ($privacySections as $index => $section)

                            <a
                                href="#{{ $section['id'] }}"
                                data-privacy-nav="{{ $section['id'] }}"
                                class="privacy-nav-link
                                       flex
                                       rounded-[11px]
                                       px-3 py-2.5
                                       text-[12px]
                                       font-medium
                                       leading-5

                                       transition-all duration-200

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



        {{-- =====================================================
            POLICY CONTENT
        ====================================================== --}}
        <div
            id="privacy-sections"
            class="min-w-0 space-y-5"
        >

            @foreach ($privacySections as $section)

                <article
                    id="{{ $section['id'] }}"
                    data-privacy-section="{{ $section['id'] }}"
                    class="privacy-section
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

                    {{-- =========================================
                        SECTION TOP
                    ========================================== --}}
                    <div
                        class="flex
                               items-start
                               justify-between
                               gap-5
                               px-6
                               pt-6
                               sm:px-8"
                    >

                        <div
                            class="flex
                                   min-w-0
                                   items-start
                                   gap-4"
                        >

                            {{-- NUMBER --}}
                            <span
                                class="flex h-9 w-9
                                       shrink-0
                                       items-center
                                       justify-center
                                       rounded-full
                                       bg-primary-50

                                       text-[12px]
                                       font-bold
                                       text-primary-600"
                            >
                                {{ $section['number'] }}
                            </span>



                            {{-- TITLE --}}
                            <div>

                                <h2
                                    class="text-[22px]
                                           font-extrabold
                                           leading-[1.25]
                                           tracking-[-0.03em]
                                           text-secondary-950
                                           sm:text-[25px]"
                                >
                                    {{ $section['title'] }}
                                </h2>

                            </div>

                        </div>



                        {{-- TAG --}}
                        <div
                            class="hidden
                                   shrink-0
                                   flex-wrap
                                   justify-end
                                   gap-2
                                   sm:flex"
                        >

                            @foreach ($section['tags'] as $tagIndex => $tag)

                                <span
                                    class="rounded-full
                                           px-3 py-1.5
                                           text-[9px]
                                           font-bold uppercase
                                           tracking-[0.05em]

                                           {{ $tagIndex === 0
                                                ? 'bg-primary-50 text-primary-600'
                                                : 'bg-secondary-50 text-secondary-500'
                                           }}"
                                >
                                    #{{ $tag }}
                                </span>

                            @endforeach

                        </div>

                    </div>



                    {{-- =========================================
                        SECTION BODY
                    ========================================== --}}
                    <div
                        class="px-6
                               pb-7
                               pt-5
                               sm:px-8"
                    >

                        {{-- TEXT --}}
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



                        {{-- =====================================
                            SECURITY FEATURES
                        ====================================== --}}
                        @if (!empty($section['features']))

                            <div
                                class="mt-7
                                       grid gap-3
                                       sm:grid-cols-3"
                            >

                                @foreach ($section['features'] as $index => $feature)

                                    <div
                                        class="rounded-[14px]
                                               border border-secondary-200
                                               bg-background-muted
                                               p-5"
                                    >

                                        <span
                                            class="flex h-9 w-9
                                                   items-center
                                                   justify-center
                                                   rounded-full
                                                   bg-primary-50
                                                   text-primary-600"
                                        >

                                            @if ($index === 0)

                                                <svg
                                                    class="h-4 w-4"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <circle cx="8" cy="8" r="3" />
                                                    <circle cx="17" cy="9" r="2.5" />

                                                    <path
                                                        stroke-linecap="round"
                                                        d="M3 19a5 5 0 0 1 10 0"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        d="M14 14.5a5 5 0 0 1 7 4.5"
                                                    />
                                                </svg>

                                            @elseif ($index === 1)

                                                <svg
                                                    class="h-4 w-4"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M12 3 5 6v5c0 4.8 2.8 8.4 7 10 4.2-1.6 7-5.2 7-10V6l-7-3Z"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="m9 12 2 2 4-4"
                                                    />
                                                </svg>

                                            @else

                                                <svg
                                                    class="h-4 w-4"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M4 12a8 8 0 0 1 14-5"
                                                    />

                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M20 12a8 8 0 0 1-14 5"
                                                    />

                                                    <path d="m16 4 2 3 3-2" />

                                                    <path d="m8 20-2-3-3 2" />
                                                </svg>

                                            @endif

                                        </span>


                                        <h3
                                            class="mt-4
                                                   text-[13px]
                                                   font-bold
                                                   text-secondary-950"
                                        >
                                            {{ $feature['title'] }}
                                        </h3>


                                        <p
                                            class="mt-2
                                                   text-[12px]
                                                   leading-5
                                                   text-secondary-500"
                                        >
                                            {{ $feature['description'] }}
                                        </p>

                                    </div>

                                @endforeach

                            </div>

                        @endif



                        {{-- =====================================
                            PLAIN ENGLISH
                        ====================================== --}}
                        @if (!empty($section['plain_english']))

                            <div
                                class="mt-6
                                       rounded-[14px]
                                       border border-primary-100
                                       border-l-[3px]
                                       border-l-primary-600
                                       bg-primary-50/55
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



                        {{-- =====================================
                            PRIVACY CONTACT
                        ====================================== --}}
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
                                            class="flex h-11 w-11
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
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M12 3 5 6v5c0 4.8 2.8 8.4 7 10 4.2-1.6 7-5.2 7-10V6l-7-3Z"
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

                                               whitespace-nowrap

                                               rounded-xl
                                               bg-primary-600
                                               px-5

                                               text-[12px]
                                               font-semibold
                                               text-white

                                               shadow-[0_8px_20px_rgba(37,99,235,0.20)]

                                               transition-all
                                               duration-300

                                               hover:bg-primary-700"
                                    >
                                        Contact Privacy Team
                                    </a>

                                </div>

                            </div>

                        @endif

                    </div>

                </article>

            @endforeach



            {{-- =================================================
                LEGAL REVIEW NOTICE
            ================================================== --}}
            <div
                class="rounded-[18px]
                       border border-primary-100
                       bg-primary-50/50
                       px-6 py-5"
            >

                <div
                    class="flex
                           items-start
                           gap-4"
                >

                    <span
                        class="flex h-9 w-9
                               shrink-0
                               items-center
                               justify-center
                               rounded-full
                               bg-primary-600
                               text-white"
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
                            class="text-[12px]
                                   font-bold
                                   text-primary-700"
                        >
                            Important
                        </p>


                        <p
                            class="mt-1
                                   text-[12px]
                                   leading-6
                                   text-secondary-600"
                        >
                            This Privacy Policy is a draft and should be reviewed
                            and approved by qualified legal counsel before publication,
                            including consideration of the Australian Privacy Act and
                            any other laws that apply to StockCore’s operations.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- ============================================================
    PRIVACY SECTION STYLES
============================================================ --}}
@push('styles')

<style>

    .privacy-sidebar-scroll {
        scrollbar-width: thin;
        scrollbar-color: #94a3b8 transparent;
        scrollbar-gutter: stable;
    }


    .privacy-sidebar-scroll::-webkit-scrollbar {
        width: 5px;
    }


    .privacy-sidebar-scroll::-webkit-scrollbar-track {
        background: transparent;
    }


    .privacy-sidebar-scroll::-webkit-scrollbar-thumb {
        background: #94a3b8;
        border-radius: 999px;
    }


    .privacy-sidebar-scroll::-webkit-scrollbar-thumb:hover {
        background: #64748b;
    }

</style>

@endpush



{{-- ============================================================
    PRIVACY SCROLLSPY
============================================================ --}}
@push('scripts')

<script>
$(document).ready(function () {

    /*
    |--------------------------------------------------------------------------
    | ACTIVATE TABLE OF CONTENTS ITEM
    |--------------------------------------------------------------------------
    */

    function activatePrivacyNavigation(sectionId) {

        $('.privacy-nav-link')
            .removeClass(
                'bg-primary-50 text-primary-600'
            )
            .addClass(
                'text-secondary-600'
            );


        const $active =
            $('.privacy-nav-link[data-privacy-nav="' + sectionId + '"]');


        $active
            .removeClass(
                'text-secondary-600'
            )
            .addClass(
                'bg-primary-50 text-primary-600'
            );



        /*
         * Keep active TOC entry visible.
         */
        const $scrollContainer =
            $('#privacy-toc-scroll');


        if (
            !$active.length ||
            !$scrollContainer.length
        ) {
            return;
        }


        const containerTop =
            $scrollContainer.offset().top;


        const containerBottom =
            containerTop +
            $scrollContainer.innerHeight();


        const activeTop =
            $active.offset().top;


        const activeBottom =
            activeTop +
            $active.outerHeight();


        if (
            activeBottom >
            containerBottom - 15
        ) {

            $scrollContainer
                .stop(true)
                .animate(
                    {
                        scrollTop:
                            $scrollContainer.scrollTop()
                            +
                            activeBottom
                            -
                            containerBottom
                            +
                            30
                    },
                    160
                );

        }


        else if (
            activeTop <
            containerTop + 15
        ) {

            $scrollContainer
                .stop(true)
                .animate(
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
                            30
                    },
                    160
                );

        }

    }



    /*
    |--------------------------------------------------------------------------
    | SCROLL SPY
    |--------------------------------------------------------------------------
    */

    function updatePrivacyScrollSpy() {

        const detectionPoint =
            $(window).scrollTop() + 155;


        let activeId =
            $('.privacy-section')
                .first()
                .attr('id');


        $('.privacy-section').each(function () {

            const $section =
                $(this);


            if (
                $section.offset().top <=
                detectionPoint
            ) {

                activeId =
                    $section.attr('id');

            }

        });


        activatePrivacyNavigation(
            activeId
        );

    }



    let privacyTicking =
        false;


    $(window).on(
        'scroll.privacyScrollSpy',
        function () {

            if (privacyTicking) {
                return;
            }


            privacyTicking =
                true;


            window.requestAnimationFrame(
                function () {

                    updatePrivacyScrollSpy();

                    privacyTicking =
                        false;

                }
            );

        }
    );


    updatePrivacyScrollSpy();



    /*
    |--------------------------------------------------------------------------
    | TABLE OF CONTENTS CLICK
    |--------------------------------------------------------------------------
    */

    $('.privacy-nav-link').on(
        'click',
        function (event) {

            event.preventDefault();


            const target =
                $(this).attr('href');


            const $target =
                $(target);


            if (!$target.length) {
                return;
            }


            $('html, body')
                .stop(true)
                .animate(
                    {
                        scrollTop:
                            $target.offset().top
                            - 105
                    },
                    420
                );


            activatePrivacyNavigation(
                $target.attr('id')
            );

        }
    );



    /*
    |--------------------------------------------------------------------------
    | URL HASH SUPPORT
    |--------------------------------------------------------------------------
    */

    if (
        window.location.hash
    ) {

        const $target =
            $(window.location.hash);


        if (
            $target.length &&
            $target.hasClass(
                'privacy-section'
            )
        ) {

            setTimeout(
                function () {

                    $('html, body')
                        .scrollTop(
                            $target.offset().top
                            - 105
                        );


                    activatePrivacyNavigation(
                        $target.attr('id')
                    );

                },
                120
            );

        }

    }

});
</script>

@endpush