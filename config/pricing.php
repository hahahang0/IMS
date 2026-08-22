<?php

return [

    'plans' => [

        // starter

        [
            'name' => 'Starter',

            'description' => 'Perfect for small businesses getting started.',

            'popular' => false,

            'prices' => [
                'monthly' => 19,
                'yearly'  => 15,
            ],

            'annual_price' => 228,

            'stats' => [
                [
                    'icon' => 'users',
                    'value' => '5',
                    'label' => 'Users',
                ],
                [
                    'icon' => 'database',
                    'value' => '1,000',
                    'label' => 'SKUs',
                ],
                [
                    'icon' => 'warehouse',
                    'value' => '1',
                    'label' => 'Warehouse',
                ],
            ],

            'feature_heading' => 'Everything in Starter, plus',

            'features' => [
                'Inventory tracking',
                'Stock alerts',
                'Purchase orders',
                'Basic reporting',
                '2 integrations',
            ],

            'button' => 'Start Free Trial',
        ],


        //   growth

        [
            'name' => 'Growth',

            'description' => 'For growing businesses with inventory.',

            'popular' => true,

            'prices' => [
                'monthly' => 39,
                'yearly'  => 31,
            ],

            'annual_price' => 468,

            'stats' => [
                [
                    'icon' => 'users',
                    'value' => '20',
                    'label' => 'Users',
                ],
                [
                    'icon' => 'database',
                    'value' => '10,000',
                    'label' => 'SKUs',
                ],
                [
                    'icon' => 'warehouse',
                    'value' => '5',
                    'label' => 'Warehouses',
                ],
            ],

            'feature_heading' => 'Everything in Starter, plus',

            'features' => [
                'Multi-site stock tracking',
                'Advanced stock alerts',
                'Reconcile & SKU management',
                'Inventory forecasting',
                'Advanced analytics',
                'API integrations',
            ],

            'button' => 'Start Free Trial',
        ],


        //    business

        [
            'name' => 'Business',

            'description' => 'For established businesses with complex operations.',

            'popular' => false,

            'prices' => [
                'monthly' => 79,
                'yearly'  => 63,
            ],

            'annual_price' => 948,

            'stats' => [
                [
                    'icon' => 'users',
                    'value' => '25',
                    'label' => 'Users',
                ],
                [
                    'icon' => 'database',
                    'value' => '50,000',
                    'label' => 'SKUs',
                ],
                [
                    'icon' => 'warehouse',
                    'value' => '25',
                    'label' => 'Warehouses',
                ],
            ],

            'feature_heading' => 'Everything in Growth, plus',

            'features' => [
                'Advanced forecasting',
                'Real-time stock tracking',
                'Custom reports',
                'Role-based permissions',
                'API access',
                'Unlimited integrations',
            ],

            'button' => 'Start Free Trial',
        ],


        // Enterprise

        [
            'name' => 'Enterprise',

            'description' => 'For large organizations with advanced requirements.',

            'popular' => false,

            'custom_price' => false,

            'prices' => [
                'monthly' => 140,
                'yearly'  => 100,
            ],

            'annual_price' => 100,

            'stats' => [
                [
                    'icon' => 'users',
                    'value' => 'Unlimited',
                    'label' => 'Users',
                ],
                [
                    'icon' => 'database',
                    'value' => 'Unlimited',
                    'label' => 'SKUs',
                ],
                [
                    'icon' => 'warehouse',
                    'value' => 'Unlimited',
                    'label' => 'Warehouses',
                ],
            ],

            'feature_heading' => 'Everything in Business, plus',

            'features' => [
                'Dedicated support',
                'Custom workflows',
                'Advanced security',
                'SSO & SAML',
                'Custom API limits',
                'Dedicated account manager',
            ],

            'button' => 'Start Free Trail',
        ],

    ],

];
