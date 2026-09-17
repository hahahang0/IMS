{{-- full feature comparison --}}
@php

    $plans = [
        'starter' => [
            'name' => 'Starter',
            'description' => 'For small businesses',
            'cta' => 'Start Free Trial',
            'cta_url' => '#',
        ],

        'growth' => [
            'name' => 'Growth',
            'description' => 'For growing teams',
            'popular' => true,
            'cta' => 'Get a Demo',
            'cta_url' => '#',
        ],

        'business' => [
            'name' => 'Business',
            'description' => 'For established businesses',
            'cta' => 'Talk to a Specialist',
            'cta_url' => 'mailto:hello@stockcore.com.au',
        ],

        'enterprise' => [
            'name' => 'Enterprise',
            'description' => 'For complex operations',
            'cta' => 'Contact Sales',
            'cta_url' => 'mailto:hello@stockcore.com.au',
        ],
    ];
    $featureGroups = [
        /* key features*/

        [
            'id' => 'key-features',

            'title' => 'Key Features',

            'description' => 'Core limits and essential functionality',

            'icon' => 'star',

            'open' => true,

            'features' => [
                [
                    'name' => 'Users',

                    'info' => 'Maximum number of users included in the plan.',

                    'starter' => 'Up to 5',

                    'growth' => 'Up to 20',

                    'business' => 'Up to 25',

                    'enterprise' => 'Unlimited',
                ],

                [
                    'name' => 'Products / SKUs',

                    'info' => 'Maximum number of products or SKUs managed in the account.',

                    'starter' => 'Up to 1,000',

                    'growth' => 'Up to 10,000',

                    'business' => 'Up to 50,000',

                    'enterprise' => 'Unlimited',
                ],

                [
                    'name' => 'Warehouses / Locations',

                    'info' => 'Maximum number of inventory locations included.',

                    'starter' => '1 warehouse',

                    'growth' => '5 warehouses',

                    'business' => '25 warehouses',

                    'enterprise' => 'Unlimited',
                ],

                [
                    'name' => 'Core inventory management',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Mobile-friendly access',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],
            ],
        ],

        /*
 
        INVENTORY MANAGEMENT
    
        */

        [
            'id' => 'inventory-management',

            'title' => 'Inventory Management',

            'description' => 'Tools to track and manage your stock',

            'icon' => 'inventory',

            'open' => true,

            'features' => [
                [
                    'name' => 'Product management',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Real-time stock tracking',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Stock decrease tracking',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'FIFO costing',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Serial number tracking',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Expiry date tracking',

                    'starter' => false,

                    'growth' => 'Add-on',

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Inventory forecasting',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Multi-location inventory',

                    'starter' => '1 location',

                    'growth' => '5 locations',

                    'business' => '25 locations',

                    'enterprise' => 'Unlimited',
                ],
            ],
        ],

        /*
  
        WAREHOUSING
 
        */

        [
            'id' => 'warehousing',

            'title' => 'Warehousing',

            'description' => 'Warehouse, movement and fulfilment tools',

            'icon' => 'warehouse',

            'open' => false,

            'features' => [
                [
                    'name' => 'Warehouse management',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Barcode scanning',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Stock transfers',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Smart packeting',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Advanced warehouse workflows',

                    'starter' => false,

                    'growth' => false,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Multi-site stock allocation',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],
            ],
        ],

        /*
 
        PURCHASING
      
        */

        [
            'id' => 'purchasing',

            'title' => 'Purchasing',

            'description' => 'Streamline suppliers and purchasing',

            'icon' => 'cart',

            'open' => true,

            'features' => [
                [
                    'name' => 'Purchase orders',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Supplier management',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Landing cost calculator',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Document scanning & import',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Automated reorder points',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Purchase approval workflows',

                    'starter' => false,

                    'growth' => false,

                    'business' => true,

                    'enterprise' => true,
                ],
            ],
        ],

        /*
  
        REPORTING

        */

        [
            'id' => 'reporting',

            'title' => 'Reporting & Analytics',

            'description' => 'Insights to make better decisions',

            'icon' => 'chart',

            'open' => false,

            'features' => [
                [
                    'name' => 'Basic inventory reports',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Stock movement reports',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Advanced reporting',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Custom reports',

                    'starter' => false,

                    'growth' => false,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Advanced analytics',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],
            ],
        ],

        /*

        INTEGRATIONS
 
        */

        [
            'id' => 'integrations',

            'title' => 'Integrations',

            'description' => 'Connect StockCore with your existing tools',

            'icon' => 'integration',

            'open' => false,

            'features' => [
                [
                    'name' => 'Included integrations',

                    'starter' => '2 integrations',

                    'growth' => '5 integrations',

                    'business' => 'Unlimited',

                    'enterprise' => 'Unlimited',
                ],

                [
                    'name' => 'Xero',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Shopify',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Cin7',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'WooCommerce',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'API access',

                    'starter' => false,

                    'growth' => false,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Custom integrations',

                    'starter' => false,

                    'growth' => false,

                    'business' => false,

                    'enterprise' => true,
                ],
            ],
        ],

        /*

        SECURITY

        */

        [
            'id' => 'security',

            'title' => 'Security & Controls',

            'description' => 'Permissions, controls and administration',

            'icon' => 'shield',

            'open' => false,

            'features' => [
                [
                    'name' => 'Role-based permissions',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Audit history',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Advanced security controls',

                    'starter' => false,

                    'growth' => false,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'SSO / SAML',

                    'starter' => false,

                    'growth' => false,

                    'business' => false,

                    'enterprise' => true,
                ],
            ],
        ],

        /*
 
        SUPPORT

        */

        [
            'id' => 'support',

            'title' => 'Support',

            'description' => 'Get the help you need',

            'icon' => 'support',

            'open' => false,

            'features' => [
                [
                    'name' => 'Email support',

                    'starter' => true,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Priority support',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Onboarding assistance',

                    'starter' => false,

                    'growth' => true,

                    'business' => true,

                    'enterprise' => true,
                ],

                [
                    'name' => 'Dedicated account manager',

                    'starter' => false,

                    'growth' => false,

                    'business' => false,

                    'enterprise' => true,
                ],
            ],
        ],
    ];

    /*

     Feature Value Helper

    */

    $renderFeatureValue = function ($value) {
        if ($value === true) {
            return 'check';
        }

        if ($value === false) {
            return 'dash';
        }

        return 'text';
    };

@endphp



<section id="feature-comparison" class="relative bg-white py-24 sm:py-28 lg:py-32">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">


        {{-- section header --}}

        <div class="mx-auto max-w-3xl text-center">

            <p
                class="text-[11px] font-bold uppercase
                       tracking-[0.24em]
                       text-primary-600">
                Feature comparison
            </p>


            <h2
                class="mt-4
                       text-3xl font-extrabold
                       tracking-[-0.04em]
                       text-secondary-950
                       sm:text-4xl
                       lg:text-5xl">
                Compare every plan in detail
            </h2>


            <p
                class="mx-auto mt-5 max-w-2xl
                       text-base leading-7
                       text-secondary-600">
                From essential inventory tools to advanced automation,
                see exactly what’s included in every StockCore plan.
            </p>

        </div>


        {{-- table wrapper --}}

        <div
            class="mt-14 overflow-hidden
                   rounded-2xl
                   border border-secondary-200
                   bg-white
                   shadow-[0_12px_40px_rgba(15,23,42,0.05)]">

            <div class="overflow-x-auto">

                <table class="w-full min-w-[1100px]
                           border-collapse">

                    {{-- column widths --}}

                    <colgroup>

                        <col class="w-[32%]">

                        <col class="w-[17%]">

                        <col class="w-[17%]">

                        <col class="w-[17%]">

                        <col class="w-[17%]">

                    </colgroup>


                    {{-- plan headers --}}

                    <thead class="sticky top-0 z-30 bg-white">

                        <tr>

                            {{-- FEATURE COLUMN --}}
                            <th scope="col"
                                class="border-b border-r
                                       border-secondary-200
                                       bg-white
                                       px-6 py-7
                                       text-left
                                       align-top">

                                <span
                                    class="text-sm font-bold
                                           text-secondary-950">
                                    Features
                                </span>

                            </th>



                            {{-- PLAN COLUMNS --}}
                            @foreach ($plans as $planKey => $plan)
                                <th scope="col"
                                    class="relative
                                           border-b border-r
                                           border-secondary-200
                                           px-5 py-7
                                           text-center
                                           align-top
                                           last:border-r-0

                                           {{ $planKey === 'growth' ? 'bg-primary-50' : 'bg-white' }}">





                                    {{-- PLAN NAME --}}
                                    <p
                                        class="text-base font-bold
                                               text-secondary-950">
                                        {{ $plan['name'] }}
                                    </p>



                                    {{-- DESCRIPTION --}}
                                    <p
                                        class="mx-auto mt-1
                                               max-w-[160px]
                                               text-xs font-normal
                                               leading-5
                                               text-secondary-500">
                                        {{ $plan['description'] }}
                                    </p>



                                    {{-- CTA --}}
                                    <a href="{{ $plan['cta_url'] }}"
                                        class="group mt-4
                                               inline-flex items-center
                                               justify-center gap-1.5
                                               text-xs font-semibold
                                               text-primary-600
                                               transition duration-200
                                               hover:text-primary-700">

                                        {{ $plan['cta'] }}


                                        <svg class="h-3.5 w-3.5
                                                   transition duration-200
                                                   group-hover:translate-x-1"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 12h14m-5-5 5 5-5 5" />
                                        </svg>

                                    </a>

                                </th>
                            @endforeach

                        </tr>

                    </thead>


                    {{-- feature groups  --}}

                    @foreach ($featureGroups as $group)
                        <tbody class="comparison-group" data-group="{{ $group['id'] }}">

                            {{-- group headers --}}

                            <tr>

                                <th colspan="5"
                                    class="border-b
                                           border-secondary-200
                                           bg-background-muted
                                           px-6 py-3.5
                                           text-left">

                                    <button type="button"
                                        class="comparison-group-toggle
                                               flex w-full
                                               items-center gap-4
                                               text-left"
                                        data-group="{{ $group['id'] }}"
                                        aria-expanded="{{ $group['open'] ? 'true' : 'false' }}">

                                        {{-- ARROW --}}
                                        <span
                                            class="comparison-arrow
                                                   flex h-7 w-7 shrink-0
                                                   items-center justify-center
                                                   text-secondary-700
                                                   transition-transform duration-300
                                                   {{ $group['open'] ? 'rotate-180' : '' }}">

                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                                            </svg>

                                        </span>



                                        {{-- ICON --}}
                                        <span
                                            class="flex h-8 w-8 shrink-0
                                                   items-center justify-center
                                                   text-primary-600">

                                            @switch($group['icon'])
                                                @case('star')
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M12 2.7l2.8 5.7 6.3.9-4.6 4.4 1.1 6.3-5.6-3-5.6 3 1.1-6.3-4.6-4.4 6.3-.9L12 2.7z" />
                                                    </svg>
                                                @break

                                                @case('inventory')
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z" />

                                                        <path d="M4.5 7.5L12 12l7.5-4.5M12 12v9" />
                                                    </svg>
                                                @break

                                                @case('warehouse')
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 10l9-6 9 6v10H3V10z" />

                                                        <path d="M7 13h10M7 17h10" />
                                                    </svg>
                                                @break

                                                @case('cart')
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 4h2l2 11h10l3-8H6" />

                                                        <circle cx="9" cy="20" r="1" />

                                                        <circle cx="18" cy="20" r="1" />
                                                    </svg>
                                                @break

                                                @case('chart')
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                        <path stroke-linecap="round" d="M5 19V12M12 19V6M19 19V3" />
                                                    </svg>
                                                @break

                                                @case('integration')
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 3v6m8-6v6M6 9h12v3a6 6 0 01-6 6 6 6 0 01-6-6V9zM12 18v3" />
                                                    </svg>
                                                @break

                                                @case('shield')
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 3l7 3v5c0 5-3 8-7 10-4-2-7-5-7-10V6l7-3z" />

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12l2 2 4-4" />
                                                    </svg>
                                                @break

                                                @case('support')
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                        <circle cx="8" cy="8" r="3" />

                                                        <circle cx="16" cy="8" r="3" />

                                                        <path stroke-linecap="round"
                                                            d="M3 20a5 5 0 0110 0M11 20a5 5 0 0110 0" />
                                                    </svg>
                                                @break
                                            @endswitch

                                        </span>



                                        {{-- GROUP TITLE --}}
                                        <span>

                                            <span
                                                class="block text-sm font-bold
                                                       text-secondary-950">
                                                {{ $group['title'] }}
                                            </span>


                                            <span
                                                class="mt-0.5 block
                                                       text-xs font-normal
                                                       text-secondary-500">
                                                {{ $group['description'] }}
                                            </span>

                                        </span>

                                    </button>

                                </th>

                            </tr>



                            {{-- feature rows --}}

                            @foreach ($group['features'] as $feature)
                                <tr class="comparison-feature-row
                                           {{ !$group['open'] ? 'hidden' : '' }}"
                                    data-parent="{{ $group['id'] }}">

                                    {{-- FEATURE NAME --}}
                                    <th scope="row"
                                        class="border-b border-r
                                               border-secondary-200
                                               bg-white
                                               px-6 py-3
                                               text-left
                                               text-sm font-normal
                                               text-secondary-700">

                                        <div class="flex items-center gap-2">

                                            <span>
                                                {{ $feature['name'] }}
                                            </span>


                                            @if (!empty($feature['info']))
                                                <span
                                                    class="flex h-4 w-4
                                                           cursor-help
                                                           items-center justify-center
                                                           rounded-full
                                                           border border-secondary-400
                                                           text-[9px] font-bold
                                                           text-secondary-500"
                                                    title="{{ $feature['info'] }}">
                                                    i
                                                </span>
                                            @endif

                                        </div>

                                    </th>



                                    {{-- PLAN VALUES --}}
                                    @foreach ($plans as $planKey => $plan)
                                        @php

                                            $value = $feature[$planKey];

                                            $valueType = $renderFeatureValue($value);

                                        @endphp


                                        <td
                                            class="border-b border-r
                                                   border-secondary-200
                                                   px-5 py-3
                                                   text-center
                                                   text-sm
                                                   last:border-r-0

                                                   {{ $planKey === 'growth' ? 'bg-primary-50/80' : 'bg-white' }}">

                                            {{-- INCLUDED --}}
                                            @if ($valueType === 'check')
                                                <span
                                                    class="mx-auto flex h-5 w-5
                                                           items-center justify-center
                                                           rounded-full
                                                           border-2 border-primary-500
                                                           text-primary-600">

                                                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="3" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5 12l4 4L19 7" />
                                                    </svg>

                                                </span>


                                                {{-- NOT INCLUDED --}}
                                            @elseif ($valueType === 'dash')
                                                <span
                                                    class="font-medium
                                                           text-secondary-400">
                                                    —
                                                </span>


                                                {{-- CUSTOM TEXT --}}
                                            @else
                                                <span
                                                    class="font-medium
                                                           text-secondary-700">
                                                    {{ $value }}
                                                </span>
                                            @endif

                                        </td>
                                    @endforeach

                                </tr>
                            @endforeach

                        </tbody>
                    @endforeach

                </table>

            </div>

        </div>


        {{-- foot note --}}

        <div
            class="mt-6 flex flex-col gap-2
                   text-xs text-secondary-500
                   sm:flex-row
                   sm:items-center
                   sm:justify-between">

            <p>
                Feature availability and limits may vary by plan configuration.
            </p>


            <p>

                Need something specific?

                <a href="mailto:hello@stockcore.com.au"
                    class="font-semibold
                           text-primary-600
                           hover:text-primary-700">
                    Talk to us.
                </a>

            </p>

        </div>

    </div>


    {{-- jquery accordion --}}

    <script>
        $(document).ready(function() {

            $('#feature-comparison .comparison-group-toggle')
                .on('click', function() {

                    const $button = $(this);

                    const group = $button.data('group');

                    const $rows = $(
                        '#feature-comparison .comparison-feature-row[data-parent="' + group + '"]'
                    );

                    const $arrow =
                        $button.find('.comparison-arrow');

                    const isOpen =
                        $button.attr('aria-expanded') === 'true';

                    //  close

                    if (isOpen) {

                        $button.attr(
                            'aria-expanded',
                            'false'
                        );


                        $arrow.removeClass(
                            'rotate-180'
                        );


                        $rows
                            .stop(true, true)
                            .fadeOut(
                                120,
                                function() {

                                    $(this)
                                        .addClass('hidden');

                                }
                            );

                    }


                    //    open
                    else {

                        $button.attr(
                            'aria-expanded',
                            'true'
                        );


                        $arrow.addClass(
                            'rotate-180'
                        );


                        $rows
                            .removeClass('hidden')
                            .hide()
                            .stop(true, true)
                            .fadeIn(160);

                    }

                });

        });
    </script>

</section>
