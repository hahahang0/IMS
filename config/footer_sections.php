<?php

return [

    'title' => 'Footer',

    'description' => 'Manage the footer content displayed on your website.',

    'view' => 'admin.components.footer',

    'default_content' => [

        /*
        |--------------------------------------------------------------------------
        | Brand
        |--------------------------------------------------------------------------
        */

        'brand' => [
            'logo' => 'images/company_assets/cropped_logo.webp',
            'description' => 'Smart inventory software built for growing businesses.',
        ],


        /*
        |--------------------------------------------------------------------------
        | Navigation Columns
        |--------------------------------------------------------------------------
        */

        'navigation' => [

            [
                'title' => 'Product',
                'links' => [
                    ['label' => 'Pricing', 'url' => '#'],
                    ['label' => 'Inventory management', 'url' => '#'],
                    ['label' => 'Production management', 'url' => '#'],
                    ['label' => 'Built-in purchasing', 'url' => '#'],
                    ['label' => 'Financial visibility', 'url' => '#'],
                    ['label' => 'Sales order management', 'url' => '#'],
                    ['label' => 'Warehouse management', 'url' => '#'],
                    ['label' => 'Planning and Forecasting', 'url' => '#'],
                    ['label' => 'Product updates', 'url' => '#'],
                    ['label' => 'See all features', 'url' => '#'],
                ],
            ],

            [
                'title' => 'Industries',
                'links' => [
                    ['label' => 'Apparel and footwear', 'url' => '#'],
                    ['label' => 'Coffee roasting', 'url' => '#'],
                    ['label' => 'Food and beverage', 'url' => '#'],
                    ['label' => 'Furniture', 'url' => '#'],
                    ['label' => 'Electronics', 'url' => '#'],
                    ['label' => 'Jewelry', 'url' => '#'],
                    ['label' => 'Pharmaceutical', 'url' => '#'],
                    ['label' => 'See all industries', 'url' => '#'],
                ],
            ],

            [
                'title' => 'Solutions',
                'links' => [
                    ['label' => 'Traceability and compliance', 'url' => '#'],
                    ['label' => 'Full manufacturing control', 'url' => '#'],
                    ['label' => 'Omnichannel sales and operations', 'url' => '#'],
                    ['label' => 'Smart inventory', 'url' => '#'],
                    ['label' => 'Integrations & API-first workflows', 'url' => '#'],
                    ['label' => 'Tariff management', 'url' => '#'],
                    ['label' => 'Contract manufacturing and outsourced workflows', 'url' => '#'],
                    ['label' => 'From spreadsheets to stockcore', 'url' => '#'],
                ],
            ],

            [
                'title' => 'Integrations',
                'links' => [
                    ['label' => 'Shopify', 'url' => '#'],
                    ['label' => 'BigCommerce', 'url' => '#'],
                    ['label' => 'WooCommerce', 'url' => '#'],
                    ['label' => 'QuickBooks Online', 'url' => '#'],
                    ['label' => 'Xero', 'url' => '#'],
                    ['label' => 'See all integrations', 'url' => '#'],
                ],
            ],

            [
                'title' => 'Support',
                'links' => [
                    ['label' => 'stockcore academy', 'url' => '#'],
                    ['label' => 'Getting started', 'url' => '#'],
                    ['label' => 'Knowledge base', 'url' => '#'],
                    ['label' => 'Video library', 'url' => '#'],
                    ['label' => 'Onboarding services', 'url' => '#'],
                    ['label' => 'Partner directory', 'url' => '#'],
                    ['label' => 'Contact us', 'url' => '#'],
                ],
            ],

            [
                'title' => 'Company',
                'links' => [
                    ['label' => 'About us', 'url' => '#'],
                    ['label' => 'Data security and protection', 'url' => '#'],
                    ['label' => 'Company news', 'url' => '#'],
                    ['label' => 'Newsroom', 'url' => '#'],
                    ['label' => 'Contact us', 'url' => '#'],
                    ['label' => 'Careers', 'url' => '#'],
                ],
            ],

            [
                'title' => 'Resources',
                'links' => [
                    ['label' => 'Case studies', 'url' => '#'],
                    ['label' => 'Business tips', 'url' => '#'],
                    ['label' => 'Inventory management guide', 'url' => '#'],
                    ['label' => 'Blog', 'url' => '#'],
                ],
            ],

            [
                'title' => 'Developers',
                'links' => [
                    ['label' => 'Developer portal', 'url' => '#'],
                    ['label' => 'API documentation', 'url' => '#'],
                ],
            ],

            [
                'title' => 'Partners',
                'links' => [
                    ['label' => 'Partner with us', 'url' => '#'],
                    ['label' => 'Technology Partner program', 'url' => '#'],
                    ['label' => 'Partner directory', 'url' => '#'],
                ],
            ],

        ],


        /*
        |--------------------------------------------------------------------------
        | Footer CTA
        |--------------------------------------------------------------------------
        */

        'cta' => [
            'heading' => 'Start your free 14-day trial',
            'description' => 'No credit card required. Sign up now!',
            'button_text' => 'Get started',
            'button_url' => '#',
        ],


        /*
        |--------------------------------------------------------------------------
        | Legal Links
        |--------------------------------------------------------------------------
        */

        'legal' => [
            [
                'label' => 'Sitemap',
                'url' => '#',
            ],
            [
                'label' => 'Privacy',
                'url' => '#',
            ],
            [
                'label' => 'Cookie preferences',
                'url' => '#',
            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | Social Links
        |--------------------------------------------------------------------------
        */

        'social' => [
            'x' => [
                'enabled' => true,
                'url' => '#',
            ],

            'youtube' => [
                'enabled' => true,
                'url' => '#',
            ],

            'facebook' => [
                'enabled' => true,
                'url' => '#',
            ],

            'linkedin' => [
                'enabled' => true,
                'url' => '#',
            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | Copyright
        |--------------------------------------------------------------------------
        */

        'copyright' => 'StockCore Manufacturing Software. All rights reserved.',
    ],
];