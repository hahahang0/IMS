<?php

return [

    'hero' => [

        'title' => 'Hero',

        'description' => 'Main homepage hero section',

        'view' => 'admin.home.sections.hero',

        'default_content' => [

            'eyebrow' => 'Inventory Management Made Simple',

            'heading' => [
                'before' => 'Take Control of your',
                'highlight' => 'Inventory',
            ],

            'description' =>
            'Stockcore helps Australian businesses track inventory in real time and sync effectively.',

            'buttons' => [

                'primary' => [
                    'text' => 'Start Free Trial',
                    'url' => '',
                ],

                'secondary' => [
                    'text' => 'Book a Demo',
                    'url' => '',
                ],

            ],

            'trust_items' => [

                [
                    'text' => '14-day free trial',
                ],

                [
                    'text' => 'No credit card required',
                ],

                [
                    'text' => 'Cancel anytime',
                ],

            ],

            'image' => [
                'media_id' => null,
                'alt' => 'StockCore inventory dashboard',
            ],

            'floating_cards' => [

                [
                    'icon' => 'package',
                    'value' => '1,284',
                    'label' => 'Total Products',
                ],

                [
                    'icon' => 'check',
                    'title' => 'Stock Updated',
                    'description' => 'New quantity:',
                    'value' => '120 pcs',
                ],

                [
                    'icon' => 'warning',
                    'title' => 'Low Stock',
                    'description' => '32 items need attention',
                    'value' => '',
                ],

                [
                    'icon' => 'currency',
                    'title' => 'Inventory Value',
                    'description' => '',
                    'value' => '$145,230',
                ],

            ],

        ],

    ],
    'features' => [
        'title' => 'Features',
        'description' => 'Manage the features displayed on the homepage.',
        'view' => 'admin.home.sections.features',

        'default_content' => [
            'heading' => [
                'before' => 'Everything you need to',
                'highlight' => 'stay in control.',
            ],

            'description' =>
            'Powerful tools to help you track, manage, and optimize your inventory — all from one simple platform.',

            'items' => [
                [
                    'title' => 'Landing Cost Calculator',
                    'description' =>
                    'Calculate the true cost of your products, including shipping, duties, taxes, and other expenses.',
                    'link_text' => 'Explore feature',
                    'link_url' => '#',
                    'media_id' => null,
                    'primary' => false,
                ],

                [
                    'title' => 'Scan & Import Documents',
                    'description' =>
                    'Quickly scan and import invoices, receipts, and documents to eliminate repetitive manual data entry.',
                    'link_text' => 'Explore feature',
                    'link_url' => '#',
                    'media_id' => null,
                    'primary' => false,
                ],

                [
                    'title' => 'Stock Decrease Tracking',
                    'description' =>
                    'Keep track of every stock movement and understand exactly where your inventory is going.',
                    'link_text' => 'Explore feature',
                    'link_url' => '#',
                    'media_id' => null,
                    'primary' => false,
                ],

                [
                    'title' => 'Serial No. & Expiry Tracking',
                    'description' =>
                    'Track serial numbers, expiry dates, batches, and real-time stock levels with confidence.',
                    'link_text' => 'Explore feature',
                    'link_url' => '#',
                    'media_id' => null,
                    'primary' => false,
                ],

                [
                    'title' => 'FIFO Costing System',
                    'description' =>
                    'Accurately calculate inventory costs using a first-in, first-out costing method.',
                    'link_text' => 'Explore feature',
                    'link_url' => '#',
                    'media_id' => null,
                    'primary' => false,
                ],

                [
                    'title' => 'Smart Packeting',
                    'description' =>
                    'Manage inventory across cartons, boxes, packages, and individual pieces with ease.',
                    'link_text' => 'Explore feature',
                    'link_url' => '#',
                    'media_id' => null,
                    'primary' => false,
                ],

                [
                    'title' => 'Powerful Integrations',
                    'description' =>
                    'Connect StockCore with Xero, Cin7, and the tools your business already uses.',
                    'link_text' => 'Explore integrations',
                    'link_url' => '#',
                    'media_id' => null,
                    'primary' => true,
                ],
            ],
        ],
    ],
    'trust' => [

        'title' => 'Trust & Integrations',

        'description' =>
        'Manage the trust statement and integration logos displayed on the homepage.',

        'view' => 'admin.home.sections.trust',

        'default_content' => [

            'heading' => [
                'before' => 'Trusted by modern Australian Businesses.',
                'highlight' => 'Seamlessly Integrated',
            ],

            'items' => [

                [
                    'name' => 'Xero',
                    'logo' => 'images/integrations/xero.svg',
                    'media_id' => null,
                    'alt' => 'Xero logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'Cin7',
                    'logo' => 'images/integrations/cin7.svg',
                    'media_id' => null,
                    'alt' => 'Cin7 logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'Shopify',
                    'logo' => 'images/integrations/shopify.svg',
                    'media_id' => null,
                    'alt' => 'Shopify logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'WooCommerce',
                    'logo' => 'images/integrations/woocommerce.svg',
                    'media_id' => null,
                    'alt' => 'WooCommerce logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'MYOB',
                    'logo' => 'images/integrations/stripe.svg',
                    'media_id' => null,
                    'alt' => 'MYOB logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'Unleashed',
                    'logo' => 'images/integrations/pinterest.svg',
                    'media_id' => null,
                    'alt' => 'Unleashed logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'QuickBooks',
                    'logo' => 'images/integrations/quickbooks.svg',
                    'media_id' => null,
                    'alt' => 'QuickBooks logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'Square',
                    'logo' => 'images/integrations/zoho.svg',
                    'media_id' => null,
                    'alt' => 'Square logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'BigCommerce',
                    'logo' => 'images/integrations/bigcommerce.svg',
                    'media_id' => null,
                    'alt' => 'BigCommerce logo',
                    'is_active' => true,
                ],

                [
                    'name' => 'Amazon',
                    'logo' => 'images/integrations/amazon.svg',
                    'media_id' => null,
                    'alt' => 'Amazon logo',
                    'is_active' => true,
                ],

            ],

            'animation' => [
                'enabled' => true,
                'delay' => 150,
                'duration' => 700,
            ],

        ],

    ],

    'how-it-works' => [

        'title' => 'How It Works',

        'description' =>
        'Manage the How It Works section displayed on the homepage.',

        'view' => 'admin.home.sections.how-it-works',

        'default_content' => [

            'badge' => 'HOW IT WORKS',

            'heading' => [
                'before' => 'From stock to insights,',
                'highlight' => 'without the busywork.',
            ],

            'description' =>
            'Import your inventory, track every movement, keep your systems synchronized, and get the reports you need — all from one place.',

            'benefit_text' =>
            'Simple workflow. Powerful results.',

            'dashboard' => [
                'image' => 'images/company_assets/stockcore_dashboard.webp',
                'alt' => 'StockCore inventory management dashboard',
                'media_id' => null,
            ],

            'steps' => [

                [
                    'number' => '01',
                    'title' => 'Import your stock',
                    'description' =>
                    'Quickly import your products, inventory, invoices, and other stock documents into StockCore.',
                    'icon' => 'upload',
                ],

                [
                    'number' => '02',
                    'title' => 'Track in real time',
                    'description' =>
                    'Keep track of stock movements, quantities, serial numbers, expiry dates, and product changes as they happen.',
                    'icon' => 'chart',
                ],

                [
                    'number' => '03',
                    'title' => 'Sync with Xero & Cin7',
                    'description' =>
                    'Keep your accounting and inventory systems synchronized with the tools your business already uses.',
                    'icon' => 'link',
                ],

                [
                    'number' => '04',
                    'title' => 'Report & analyze',
                    'description' =>
                    'Turn your inventory data into clear reports and actionable insights for better decisions.',
                    'icon' => 'bars',
                ],

            ],

            'callout' => [
                'title' => 'Everything in one place',
                'description' =>
                'No more spreadsheets. No more manual updates. Just accurate data and real insights.',
            ],

        ],

    ],

    'use-cases' => [

        'title' => 'Use Cases',

        'description' =>
        'Manage the Use Cases section displayed on the homepage.',

        'view' => 'admin.home.sections.use-cases',

        'default_content' => [

        // SECTION HEADER

            'badge' => 'USE CASES',

            'heading' => [
                'before' => 'StockCore adapts',
                'highlight' => 'to the way you work',
            ],

            'description' =>
            'Powerful inventory control for every type of business. Choose your industry to see how it fits.',


    //    USE CASES

            'items' => [

                [
                    'key' => 'multi-channel',

                    'tab_title' => 'Multi-channel brands',

                    'icon' => 'store',

                    'title' => [
                        'before' => 'Get full control over',
                        'highlight' => 'all your sales channels',
                    ],

                    'description' =>
                    'Sell across Shopify, Amazon, wholesale, and retail without losing track of stock. StockCore keeps every channel in sync with real-time inventory and order updates.',

                    'bullets' => [
                        'Real-time inventory sync across every channel',
                        'Centralized orders and stock visibility',
                        'Reduce stockouts and increase sales',
                    ],

                    'stat_one' => [
                        'value' => '+15%',
                        'text' => 'increase in sales orders',
                    ],

                    'stat_two' => [
                        'value' => '-30%',
                        'text' => 'stockouts reduced',
                    ],

                    'image' => 'images/use-cases/multi_channel.webp',

                    'image_alt' => 'Multi-channel inventory management',

                    'media_id' => null,
                ],


                [
                    'key' => 'manufacturers',

                    'tab_title' => 'Manufacturers',

                    'icon' => 'factory',

                    'title' => [
                        'before' => 'Take control of your',
                        'highlight' => 'manufacturing inventory',
                    ],

                    'description' =>
                    'Track raw materials, production stock, finished goods, and warehouse movements from one centralized system.',

                    'bullets' => [
                        'Track raw materials and finished goods',
                        'Monitor stock throughout production',
                        'Improve warehouse visibility',
                    ],

                    'stat_one' => [
                        'value' => '+28%',
                        'text' => 'faster inventory turnover',
                    ],

                    'stat_two' => [
                        'value' => '-24%',
                        'text' => 'waste and overstock',
                    ],

                    'image' => 'images/use-cases/manufactures.webp',

                    'image_alt' => 'Manufacturing inventory management',

                    'media_id' => null,
                ],


                [
                    'key' => 'hybrid',

                    'tab_title' => 'Hybrid product businesses',

                    'icon' => 'layers',

                    'title' => [
                        'before' => 'Manage every type of',
                        'highlight' => 'product in one place',
                    ],

                    'description' =>
                    'Manage physical products, bundles, kits, and different product models from one unified inventory platform.',

                    'bullets' => [
                        'Manage multiple product types',
                        'Track bundles and product relationships',
                        'Centralize inventory operations',
                    ],

                    'stat_one' => [
                        'value' => '+22%',
                        'text' => 'faster order processing',
                    ],

                    'stat_two' => [
                        'value' => '-35%',
                        'text' => 'inventory errors',
                    ],

                    'image' => 'images/use-cases/hybrid_product.webp',

                    'image_alt' => 'Hybrid product inventory management',

                    'media_id' => null,
                ],


                [
                    'key' => 'regulated',

                    'tab_title' => 'Regulated product industries',

                    'icon' => 'shield',

                    'title' => [
                        'before' => 'Keep regulated products',
                        'highlight' => 'under complete control',
                    ],

                    'description' =>
                    'Maintain accurate records for products that require serial numbers, expiry dates, traceability, and controls.',

                    'bullets' => [
                        'Serial and batch-level tracking',
                        'Expiry and compliance controls',
                        'Complete inventory traceability',
                    ],

                    'stat_one' => [
                        'value' => '+40%',
                        'text' => 'better inventory traceability',
                    ],

                    'stat_two' => [
                        'value' => '-45%',
                        'text' => 'compliance errors',
                    ],

                    'image' => 'images/use-cases/quality_control.webp',

                    'image_alt' => 'Regulated product inventory management',

                    'media_id' => null,
                ],

            ],


        //  Bottom Benefits

            'benefits' => [

                [
                    'icon' => 'refresh',
                    'title' => 'Unified data',
                    'description' =>
                    'One source of truth across your business',
                ],

                [
                    'icon' => 'bolt',
                    'title' => 'Work smarter',
                    'description' =>
                    'Automate workflows and save valuable time',
                ],

                [
                    'icon' => 'chart',
                    'title' => 'Make better decisions',
                    'description' =>
                    'Real-time insights to grow your business',
                ],

                [
                    'icon' => 'check',
                    'title' => 'Stay compliant',
                    'description' =>
                    'Built-in controls for accuracy and accountability',
                ],

            ],


        // Buttons

            'primary_button' => [
                'text' => 'Explore this use case',
                'url' => '#',
            ],

            'secondary_button' => [
                'text' => 'View all industries',
                'url' => '#',
            ],

        ]
    ],

    'pricing' => [

        'title' => 'Pricing',

        'description' =>
        'Manage the pricing section, plans, billing options, statistics, and features displayed on the homepage.',

        'view' => 'admin.home.sections.pricing',

        'default_content' => [

// section header
            'badge' => 'Simple & transparent pricing',

            'heading' => [

                'before' => 'Everything you need to',

                'highlight' => 'manage inventory smarter',

            ],

            'description' =>
            'Choose the plan that fits your business and get the tools you need to stay in control of your stock.',

//billing

            'billing' => [

                'monthly_label' => 'Monthly',

                'yearly_label' => 'Yearly',

                'save_badge' => 'Save 20%',

                'save_text' => 'Save 20% with yearly billing',

            ],


    //   pricing plans
            'plans' => [

        //    starter

                [

                    'name' => 'Starter',

                    'description' =>
                    'Perfect for small businesses getting started.',

                    'popular' => false,

                    'custom_price' => false,

                    'prices' => [

                        'monthly' => 19,

                        'yearly' => 15,

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

                    'feature_heading' =>
                    'Everything in Starter, plus',

                    'features' => [

                        'Inventory tracking',

                        'Stock alerts',

                        'Purchase orders',

                        'Basic reporting',

                        '2 integrations',

                    ],

                    'button' => 'Start Free Trial',

                ],


            // GROWTH

                [

                    'name' => 'Growth',

                    'description' =>
                    'For growing businesses with inventory.',

                    'popular' => true,

                    'custom_price' => false,

                    'prices' => [

                        'monthly' => 39,

                        'yearly' => 31,

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

                    'feature_heading' =>
                    'Everything in Starter, plus',

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


        //    Business

                [

                    'name' => 'Business',

                    'description' =>
                    'For established businesses with complex operations.',

                    'popular' => false,

                    'custom_price' => false,

                    'prices' => [

                        'monthly' => 79,

                        'yearly' => 63,

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

                    'feature_heading' =>
                    'Everything in Growth, plus',

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

//  enterprise

                [

                    'name' => 'Enterprise',

                    'description' =>
                    'For large organizations with advanced requirements.',

                    'popular' => false,

                    'custom_price' => false,

                    'prices' => [

                        'monthly' => 140,

                        'yearly' => 100,

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

                    'feature_heading' =>
                    'Everything in Business, plus',

                    'features' => [

                        'Dedicated support',

                        'Custom workflows',

                        'Advanced security',

                        'SSO & SAML',

                        'Custom API limits',

                        'Dedicated account manager',

                    ],

                    'button' => 'Start Free Trial',

                ],

            ],

        ],

    ],

    'testimonials' => [

        'title' => 'Testimonials',

        'description' =>
        'Manage the testimonials, customer information, quotes, and images displayed on the homepage.',

        'view' => 'admin.home.sections.testimonials',

        /*
    |--------------------------------------------------------------------------
    | Default Content
    |--------------------------------------------------------------------------
    |
    | These values are used until the Testimonials section is saved
    | through the admin CMS.
    |
    */

        'default_content' => [

            /*
        |--------------------------------------------------------------------------
        | Section Header
        |--------------------------------------------------------------------------
        */

            'badge' => 'Testimonials',

            'heading' => [

                'before' => 'Real stories,',

                'highlight' => 'Real results.',

            ],

            'description' =>
            'See how growing businesses use StockCore to simplify inventory management, reduce manual work, and stay in control.',


            /*
        |--------------------------------------------------------------------------
        | Testimonials
        |--------------------------------------------------------------------------
        */

            'items' => [

                [
                    'name' => 'James Thore',

                    'role' => 'Small Business Owner',

                    'image' => 'images/testimonials/image1.webp',

                    'media_id' => null,

                    'quote' =>
                    'When our team rolled StockCore out across support and finance, manual follow-ups dropped in days. It finally felt like our operations stack was working for us.',
                ],

                [
                    'name' => 'Sarah Mitchell',

                    'role' => 'Product Manager',

                    'image' => 'images/testimonials/image2.webp',

                    'media_id' => null,

                    'quote' =>
                    'StockCore gives our team a clear view of inventory across the business. We spend less time searching for information and more time getting work done.',
                ],

                [
                    'name' => 'David Chen',

                    'role' => 'Marketing Manager',

                    'image' => 'images/testimonials/image3.webp',

                    'media_id' => null,

                    'quote' =>
                    'Everything feels much more organized now. StockCore has helped our team stay on top of products and make better decisions every day.',
                ],

                [
                    'name' => 'Marcus Johnson',

                    'role' => 'COO',

                    'image' => 'images/testimonials/image4.webp',

                    'media_id' => null,

                    'quote' =>
                    'We used to rely on spreadsheets and manual updates. StockCore gave our team a much simpler way to keep inventory accurate.',
                ],

                [
                    'name' => 'Priya Sharma',

                    'role' => 'Inventory Head',

                    'image' => 'images/testimonials/image5.webp',

                    'media_id' => null,

                    'quote' =>
                    'The biggest difference is visibility. Everyone on our team knows what is available, what is moving, and what needs attention.',
                ],

                [
                    'name' => 'Alex Carter',

                    'role' => 'Operations Manager',

                    'image' => 'images/testimonials/image6.webp',

                    'media_id' => null,

                    'quote' =>
                    'StockCore removed so much unnecessary manual work from our daily process. Our inventory team can finally focus on the work that matters.',
                ],

                [
                    'name' => 'Emma Wilson',

                    'role' => 'Retail Manager',

                    'image' => 'images/testimonials/image7.webp',

                    'media_id' => null,

                    'quote' =>
                    'Managing products across different categories became much easier. StockCore is simple enough for everyone on our team to use.',
                ],

                [
                    'name' => 'Daniel Kim',

                    'role' => 'Business Owner',

                    'image' => 'images/testimonials/image8.webp',

                    'media_id' => null,

                    'quote' =>
                    'StockCore gives us confidence that our inventory numbers are accurate. It has become an important part of how we run the business.',
                ],

            ],

        ],

    ],
    'cta' => [

        'title' => 'CTA',

        'description' =>
        'Manage the final call-to-action section displayed at the bottom of the homepage.',

        'view' => 'admin.home.sections.cta',

        'default_content' => [

            /*
        |--------------------------------------------------------------------------
        | CTA Label
        |--------------------------------------------------------------------------
        */

            'eyebrow' => 'READY TO GET STARTED?',


            /*
        |--------------------------------------------------------------------------
        | Heading
        |--------------------------------------------------------------------------
        */

            'heading' => [

                'before' => 'Take control of your inventory operations',

                'highlight' => 'today.',

            ],


            /*
        |--------------------------------------------------------------------------
        | Description
        |--------------------------------------------------------------------------
        */

            'description' =>
            'Join thousands of businesses that streamline inventory, reduce stockouts, and grow with confidence.',


            /*
        |--------------------------------------------------------------------------
        | Buttons
        |--------------------------------------------------------------------------
        */

            'buttons' => [

                'primary' => [

                    'text' => 'Start your free trial',

                    'url' => '#',

                ],

                'secondary' => [

                    'text' => 'Watch demo',

                    'url' => '#',

                ],

            ],


            /*
        |--------------------------------------------------------------------------
        | Image
        |--------------------------------------------------------------------------
        */

            'image' => [

                'path' => 'images/company_assets/laptop.png',

                'media_id' => null,

                'alt' => 'StockCore inventory dashboard',

            ],

        ],

    ],

    



        




];
