@php

    $integrations = [
        [
            'name' => 'Xero',
            'logo' => 'images/integrations/xero.svg',
        ],

        [
            'name' => 'Cin7',
            'logo' => 'images/integrations/cin7.svg',
        ],

        [
            'name' => 'Shopify',
            'logo' => 'images/integrations/shopify.svg',
        ],

        [
            'name' => 'WooCommerce',
            'logo' => 'images/integrations/woocommerce.svg',
        ],

        [
            'name' => 'MYOB',
            'logo' => 'images/integrations/stripe.svg',
        ],

        [
            'name' => 'Unleashed',
            'logo' => 'images/integrations/pinterest.svg',
        ],

        [
            'name' => 'QuickBooks',
            'logo' => 'images/integrations/quickbooks.svg',
        ],

        [
            'name' => 'Square',
            'logo' => 'images/integrations/zoho.svg',
        ],

        [
            'name' => 'BigCommerce',
            'logo' => 'images/integrations/bigcommerce.svg',
        ],

        [
            'name' => 'Amazon',
            'logo' => 'images/integrations/amazon.svg',
        ],
    ];

@endphp


<section class='border-y border-gray-100 bg-white'>
    <div class='max-w-7xl mx-auto px-6 py-12 lg:px-8'>
        <div class='text-center'>
            <p class="text-sm font-medium text-gray-500">
                Trusted by modern Australian Businesses.
                <span class="text-primary-600">
                    Seamlessly Integrated
                </span>
            </p>
        </div>

        {{-- LOGOS --}}
        {{-- <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-x-8 gap-y-10 mt-10">

    @foreach ($integrations as $integration)

        <div class="flex items-center justify-center">

            <div class="w-32 h-16 flex items-center justify-center">

                <img
                    src="{{ $integration['logo'] }}"
                    alt="{{ $integration['name'] }} logo"
                    class="max-w-full max-h-full object-contain"
                >

            </div>

        </div>

    @endforeach

</div> --}}

        <div id="integration-logos" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-x-8 gap-y-10 mt-10">

            @foreach ($integrations as $integration)
                <div
                    class="integration-logo
               opacity-0 scale-75
               transition-all duration-700 ease-out">

                    <div class="w-32 h-16 flex items-center justify-center mx-auto">

                        <img src="{{ $integration['logo'] }}" alt="{{ $integration['name'] }} logo" loading='lazy'
                            class="max-w-full max-h-full object-contain">

                    </div>

                </div>
            @endforeach

        </div>
    </div>
</section>

@push('scripts')
<script>

    $(document).ready(function () {

        const logoContainer = $('#integration-logos');
        const logos = $('.integration-logo');

        // Stop if the elements don't exist
        if (!logoContainer.length || !logos.length) {
            return;
        }


        const observer = new IntersectionObserver(function (entries, observer) {

            $.each(entries, function (index, entry) {

                if (entry.isIntersecting) {

                    logos.each(function (index) {

                        const logo = $(this);

                        setTimeout(function () {

                            logo
                                .removeClass('opacity-0 scale-75')
                                .addClass('opacity-100 scale-100');

                        }, index * 150);

                    });


                    // Stop observing after animation runs
                    observer.unobserve(entry.target);

                }

            });

        }, {
            threshold: 0.2
        });


        // Start observing the logo container
        observer.observe(logoContainer[0]);

    });

</script>

@endpush