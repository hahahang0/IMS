<section class="min-h-screen bg-background py-16">

    <div class="mx-auto max-w-7xl px-6">


        {{-- Header --}}

        <div class="mx-auto max-w-3xl text-center">

            <div
                class="mb-4 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-blue-50 px-3.5 py-1.5">

                <span class="relative flex h-2 w-2">

                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-60"></span>

                    <span class="relative inline-flex h-2 w-2 rounded-full bg-blue-600"></span>

                </span>

                <span class="text-[10px] font-bold uppercase tracking-[0.16em] text-blue-600">
                    Simple & transparent pricing
                </span>

            </div>


            {{-- Heading --}}
            <h1 class="text-4xl font-extrabold leading-[1.08] tracking-[-0.035em] text-slate-900 sm:text-5xl">

                Everything you need to

                <span class="relative whitespace-nowrap text-blue-600">

                    manage inventory smarter



                </span>

            </h1>


            {{-- Subtitle --}}
            <p class="mx-auto mt-6 max-w-2xl text-sm leading-6 text-slate-500 sm:text-[15px]">

                Choose the plan that fits your business and get the tools you need
                to stay in control of your stock.

            </p>

        </div>


        {{-- Billing Toggle --}}

        <div class="mt-8 flex flex-col items-center">

            <div class="flex items-center justify-center gap-2.5">


                {{-- Toggle --}}
                <div id="billingToggle"
                    class="relative flex h-9 w-[175px] cursor-pointer items-center rounded-full border border-slate-200 bg-white p-1 shadow-sm">

                    {{-- Slider --}}
                    <div id="billingSlider"
                        class="absolute left-1 top-1 h-7 w-[84px] rounded-full bg-blue-600 shadow-sm transition-all duration-300 ease-in-out">
                    </div>


                    {{-- Monthly --}}
                    <button type="button" data-billing="monthly"
                        class="billing-option relative z-10 h-7 w-1/2 rounded-full text-[11px] font-semibold text-white">
                        Monthly
                    </button>


                    {{-- Yearly --}}
                    <button type="button" data-billing="yearly"
                        class="billing-option relative z-10 h-7 w-1/2 rounded-full text-[11px] font-semibold text-slate-500">
                        Yearly
                    </button>

                </div>


                {{-- Save badge --}}
                <span
                    class="inline-flex h-7 items-center rounded-full bg-emerald-50 px-3 text-[10px] font-bold text-emerald-600">
                    Save 20%
                </span>

            </div>


            {{-- Billing information --}}
            <div class="relative mt-2 w-[175px]">

                <div class="absolute left-[-20px] flex items-center gap-1 whitespace-nowrap text-[10px] text-slate-400">

                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round">

                        <path d="M20 12v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7" />

                        <path d="M16 6l-4-4-4 4" />

                        <path d="M12 2v14" />

                    </svg>

                    <span>
                        Save 20% with yearly billing
                    </span>

                </div>

            </div>

        </div>



        {{-- Pricing cards --}}

        <div class="mt-10 grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">

            @foreach (config('pricing.plans') as $plan)
                <div
                    class="
                        pricing-card
                        relative
                        flex
                        flex-col
                        overflow-hidden
                        rounded-xl
                        bg-white

                        {{ $plan['popular']
                            ? 'border-2 border-blue-500 shadow-[0_8px_30px_rgba(37,99,235,0.12)]'
                            : 'border border-slate-200' }}
                    ">

                    {{-- Most Poopular --}}

                    @if ($plan['popular'])
                        <div class="flex h-7 items-center justify-center bg-blue-600">

                            <div class="flex items-center justify-center gap-1.5">

                                {{-- Star --}}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="h-3.5 w-3.5 text-amber-300 drop-shadow-[0_0_3px_rgba(253,224,71,0.7)]"
                                    fill="currentColor">

                                    <path
                                        d="M12 2.5l2.85 5.77 6.37.93-4.61 4.49 1.09 6.34L12 17.03l-5.7 3 1.09-6.34-4.61-4.49 6.37-.93L12 2.5z" />

                                </svg>


                                <span class="text-[10px] font-bold uppercase tracking-[0.04em] text-white">
                                    Most Popular
                                </span>

                            </div>

                        </div>
                    @endif



                    {{-- Card Content --}}
                    <div
                        class="
                            flex
                            flex-1
                            flex-col
                            p-6

                            {{ $plan['popular'] ? 'pt-4' : '' }}
                        ">


                        {{-- Plan name --}}
                        <div class="text-center">

                            <h2
                                class="
                                    text-[20px]
                                    font-bold

                                    {{ $plan['popular'] ? 'text-blue-600' : 'text-slate-700' }}
                                ">
                                {{ $plan['name'] }}
                            </h2>


                            <p class="mx-auto mt-1.5 min-h-[34px] max-w-[205px] text-[11px] leading-4 text-slate-400">
                                {{ $plan['description'] }}
                            </p>

                        </div>


                        {{-- PRICE --}}

                        <div class="mt-5 text-center">


                            @if ($plan['custom_price'] ?? false)
                                <div class="text-[30px] font-extrabold tracking-tight text-slate-800">
                                    Custom
                                </div>

                                <p class="mt-1 text-[11px] text-slate-400">
                                    Tailored to your business
                                </p>
                            @else
                                <div class="flex items-baseline justify-center gap-1">

                                    {{-- Monthly --}}
                                    <span data-price="monthly"
                                        class="
                                            price-monthly
                                            text-[34px]
                                            font-extrabold
                                            tracking-tight

                                            {{ $plan['popular'] ? 'text-blue-600' : 'text-slate-800' }}
                                        ">
                                        ${{ $plan['prices']['monthly'] }}
                                    </span>


                                    {{-- Yearly --}}
                                    <span data-price="yearly"
                                        class="
                                            price-yearly
                                            hidden
                                            text-[34px]
                                            font-extrabold
                                            tracking-tight

                                            {{ $plan['popular'] ? 'text-blue-600' : 'text-slate-800' }}
                                        ">
                                        ${{ $plan['prices']['yearly'] }}
                                    </span>


                                    <span class="text-[11px] font-medium text-slate-400">
                                        /month
                                    </span>

                                </div>


                                <p class="mt-0.5 text-[11px] text-slate-400">

                                    Billed
                                    <span class="billing-text">
                                        monthly
                                    </span>

                                </p>

                                {{-- 
                                    <p class="mt-0.5 text-[10px] text-slate-400">

                                        ${{ $plan['annual_price'] }} annually

                                    </p> --}}
                            @endif

                        </div>

                        {{-- Button --}}

                        <button type="button"
                            class="
                                mt-4
                                h-11
                                w-full
                                rounded-lg
                                text-xs
                                font-bold
                                transition

                                {{ $plan['popular']
                                    ? 'bg-blue-600 text-white shadow-sm hover:bg-blue-700'
                                    : 'border border-blue-200 bg-white text-blue-600 hover:bg-blue-50' }}
                            hover:cursor-pointer">

                            {{ $plan['button'] }}

                        </button>


                        {{-- stats --}}

                        <div class="mt-6 grid grid-cols-3 border-b border-slate-100 pb-5">

                            @foreach ($plan['stats'] as $stat)
                                <div class="text-center">

                                    {{-- Icons --}}
                                    @if ($stat['icon'] === 'users')
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.8"
                                            class="mx-auto h-4 w-4 text-blue-600">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    @elseif($stat['icon'] === 'database')
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.8"
                                            class="mx-auto h-4 w-4 text-blue-600">
                                            <ellipse cx="12" cy="5" rx="8" ry="3" />
                                            <path d="M4 5v14c0 1.66 3.58 3 8 3s8-1.34 8-3V5" />
                                            <path d="M4 12c0 1.66 3.58 3 8 3s8-1.34 8-3" />
                                        </svg>
                                    @elseif($stat['icon'] === 'warehouse')
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.8"
                                            class="mx-auto h-4 w-4 text-blue-600">
                                            <path d="M3 21V8l9-5 9 5v13" />
                                            <path d="M3 10h18" />
                                            <path d="M7 21v-7h10v7" />
                                        </svg>
                                    @endif


                                    <p class="mt-1.5 text-xs font-bold text-slate-700">
                                        {{ $stat['value'] }}
                                    </p>

                                    <p class="text-[10px] text-slate-400">
                                        {{ $stat['label'] }}
                                    </p>

                                </div>
                            @endforeach

                        </div>


                        {{-- features --}}

                        <div class="mt-5">

                            <p class="text-[11px] font-bold text-slate-700">
                                {{ $plan['feature_heading'] }}
                            </p>


                            <ul class="mt-3 space-y-2.5">

                                @foreach ($plan['features'] as $feature)
                                    <li class="flex items-center gap-2 text-[11px] text-slate-500">

                                        {{-- Check --}}
                                        <span
                                            class="flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-emerald-50">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2.5"
                                                class="h-2.5 w-2.5 text-emerald-500">

                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 12.5l4 4L19 7.5" />

                                            </svg>

                                        </span>


                                        <span>
                                            {{ $feature }}
                                        </span>

                                    </li>
                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>

</section>



{{-- BIlling toggle scripts --}}

<script>
    $(document).ready(function() {

        let currentBilling = 'monthly';


        function updateBillingToggle(billing) {

            currentBilling = billing;


            if (billing === 'yearly') {

                // Move slider
                $('#billingSlider').css(
                    'transform',
                    'translateX(84px)'
                );


                // Text
                $('.billing-option[data-billing="monthly"]')
                    .removeClass('text-white')
                    .addClass('text-slate-500');


                $('.billing-option[data-billing="yearly"]')
                    .removeClass('text-slate-500')
                    .addClass('text-white');


                // Prices
                $('.price-monthly').addClass('hidden');

                $('.price-yearly').removeClass('hidden');


                // Billing text
                $('.billing-text').text('yearly');

            } else {

                // Move slider
                $('#billingSlider').css(
                    'transform',
                    'translateX(0)'
                );


                // Text
                $('.billing-option[data-billing="yearly"]')
                    .removeClass('text-white')
                    .addClass('text-slate-500');


                $('.billing-option[data-billing="monthly"]')
                    .removeClass('text-slate-500')
                    .addClass('text-white');


                // Prices
                $('.price-yearly').addClass('hidden');

                $('.price-monthly').removeClass('hidden');


                // Billing text
                $('.billing-text').text('monthly');

            }

        }


        // Button click
        $('.billing-option').on('click', function(e) {

            e.stopPropagation();

            const billing = $(this).data('billing');

            updateBillingToggle(billing);

        });


        // Click anywhere on toggle
        $('#billingToggle').on('click', function(e) {

            if ($(e.target).closest('.billing-option').length) {
                return;
            }


            const nextBilling =
                currentBilling === 'monthly' ?
                'yearly' :
                'monthly';


            updateBillingToggle(nextBilling);

        });

    });
</script>
