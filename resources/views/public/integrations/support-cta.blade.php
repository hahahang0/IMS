{{-- final cta section --}}

@php

    $supportSteps = [
        [
            'number' => 'Step 1',
            'icon' => 'setup',
            'title' => 'Guided setup',
            'description' => 'We’ll help you connect and configure your integrations so you’re up and running quickly.',
            'link_text' => 'Learn more',
            'link' => '#',
            'icon_class' => 'bg-primary-50 text-primary-600',
            'badge_class' => 'bg-primary-50 text-primary-600',
        ],

        [
            'number' => 'Step 2',
            'icon' => 'docs',
            'title' => 'Documentation',
            'description' =>
                'Step-by-step guides, videos and resources to help you get started and find answers when you need them.',
            'link_text' => 'Browse docs',
            'link' => '#',
            'icon_class' => 'bg-emerald-50 text-emerald-600',
            'badge_class' => 'bg-emerald-50 text-emerald-600',
        ],

        [
            'number' => 'Step 3',
            'icon' => 'support',
            'title' => 'Ongoing support',
            'description' =>
                'Get help from our local Australian team whenever you need it. We’re here to keep you moving forward.',
            'link_text' => 'Contact support',
            'link' => url('/contact'),
            'icon_class' => 'bg-violet-50 text-violet-600',
            'badge_class' => 'bg-violet-50 text-violet-600',
        ],
    ];

    $dashboardIntegrations = [
        [
            'name' => 'Xero',
            'logo' => 'images/integrations/xero.svg',
            'status' => 'Connected',
            'connected' => true,
        ],

        [
            'name' => 'Shopify',
            'logo' => 'images/integrations/shopify.svg',
            'status' => 'Connected',
            'connected' => true,
        ],

        [
            'name' => 'Cin7',
            'logo' => 'images/integrations/cin7.svg',
            'status' => 'Connected',
            'connected' => true,
        ],

        [
            'name' => 'MYOB',
            'logo' => 'images/integrations/myob.svg',
            'status' => 'Ready to connect',
            'connected' => false,
        ],

        [
            'name' => 'WooCommerce',
            'logo' => 'images/integrations/woocommerce.svg',
            'status' => 'Ready to connect',
            'connected' => false,
        ],

        [
            'name' => 'Amazon',
            'logo' => 'images/integrations/amazon.svg',
            'status' => 'Ready to connect',
            'connected' => false,
        ],
    ];

@endphp



<section id="integration-support" class="relative overflow-hidden bg-background py-20 sm:py-24">

    {{-- background --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Right soft circular background --}}
        <div
            class="absolute
                   -right-[260px] -top-[250px]
                   h-[720px] w-[720px]
                   rounded-full
                   bg-primary-50/70">
        </div>


        {{-- Lower left soft curve --}}
        <div
            class="absolute
                   -bottom-[360px] -left-[280px]
                   h-[650px] w-[650px]
                   rounded-full
                   border-[90px]
                   border-primary-50/70">
        </div>


        {{-- Right dotted pattern --}}
        <div
            class="absolute
                   right-[16%] top-[125px]
                   hidden grid-cols-5 gap-[10px]
                   opacity-25
                   lg:grid">
            @for ($i = 0; $i < 25; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor
        </div>

    </div>



    <div class="relative z-10
               mx-auto max-w-7xl
               px-6 sm:px-8 lg:px-8">

        {{-- support top area --}}
        <div class="grid gap-10
                   lg:grid-cols-[1.42fr_0.58fr]
                   lg:items-center">

            {{-- left content --}}
            <div>

                {{-- Eyebrow --}}
                <div
                    class="inline-flex items-center gap-2
                           rounded-full
                           bg-primary-50
                           px-3.5 py-1.5
                           text-[10px]
                           font-bold uppercase
                           tracking-[0.07em]
                           text-primary-600">

                    <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 13v-1a8 8 0 0 1 16 0v1" />

                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 13a2 2 0 0 1 2-2h1v6H6a2 2 0 0 1-2-2v-2Z" />

                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20 13a2 2 0 0 0-2-2h-1v6h1a2 2 0 0 0 2-2v-2Z" />
                    </svg>

                    Integration Support

                </div>


                {{-- Heading --}}
                <h2
                    class="mt-4
                           text-3xl
                           font-extrabold
                           tracking-[-0.045em]
                           text-secondary-950
                           sm:text-4xl
                           lg:text-[2.7rem]">
                    You’re in

                    <span class="text-primary-600">
                        good hands.
                    </span>
                </h2>


                {{-- Description --}}
                <p
                    class="mt-3
                           max-w-[620px]
                           text-[14px]
                           leading-6
                           text-secondary-600
                           sm:text-[15px]">
                    From setup to ongoing support, our Australian team is here
                    to help you get the most out of your integrations.
                </p>



                {{-- support cards --}}
                <div class="mt-8
                           grid gap-4
                           md:grid-cols-3">

                    @foreach ($supportSteps as $step)
                        <article
                            class="group
                                   flex min-h-[235px]
                                   flex-col
                                   rounded-[16px]
                                   border border-secondary-200
                                   bg-white
                                   p-5
                                   shadow-[0_10px_28px_rgba(15,23,42,0.035)]
                                   transition-all duration-300

                                   hover:-translate-y-1
                                   hover:border-primary-200
                                   hover:shadow-[0_15px_35px_rgba(15,23,42,0.07)]">

                            {{-- Top row --}}
                            <div class="flex items-start
                                       justify-between gap-3">

                                {{-- Icon --}}
                                <div
                                    class="flex h-10 w-10
                                           items-center justify-center
                                           rounded-xl
                                           {{ $step['icon_class'] }}">

                                    {{-- Setup --}}
                                    @if ($step['icon'] === 'setup')
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.8">
                                            <circle cx="12" cy="12" r="3" />

                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 12h2M18 12h2M12 4v2M12 18v2M6.3 6.3l1.4 1.4M16.3 16.3l1.4 1.4M17.7 6.3l-1.4 1.4M7.7 16.3l-1.4 1.4" />
                                        </svg>
                                    @endif


                                    {{-- Docs --}}
                                    @if ($step['icon'] === 'docs')
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 4h10a3 3 0 0 1 3 3v13H8a3 3 0 0 1-3-3V4Z" />

                                            <path stroke-linecap="round" d="M8 7h7M8 11h7M8 15h5" />
                                        </svg>
                                    @endif


                                    {{-- Support --}}
                                    @if ($step['icon'] === 'support')
                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 5h16v11H8l-4 4V5Z" />

                                            <path stroke-linecap="round" d="M8 10h.01M12 10h.01M16 10h.01" />
                                        </svg>
                                    @endif

                                </div>


                                {{-- Badge --}}
                                <span
                                    class="rounded-full
                                           px-2.5 py-1
                                           text-[9px]
                                           font-semibold
                                           {{ $step['badge_class'] }}">
                                    {{ $step['number'] }}
                                </span>

                            </div>



                            {{-- Title --}}
                            <h3
                                class="mt-5
                                       text-[16px]
                                       font-bold
                                       tracking-[-0.02em]
                                       text-secondary-950">
                                {{ $step['title'] }}
                            </h3>


                            {{-- Description --}}
                            <p
                                class="mt-2
                                       text-[12px]
                                       leading-5
                                       text-secondary-600">
                                {{ $step['description'] }}
                            </p>


                            <div class="flex-1"></div>


                            {{-- Link --}}
                            <a href="{{ $step['link'] }}"
                                class="group/link
                                       mt-5
                                       inline-flex items-center gap-2
                                       text-[12px]
                                       font-semibold
                                       text-primary-600">
                                {{ $step['link_text'] }}

                                <svg class="h-3.5 w-3.5
                                           transition-transform duration-200
                                           group-hover/link:translate-x-1"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                                </svg>

                            </a>

                        </article>
                    @endforeach

                </div>

            </div>


            {{-- right support visuals --}}
            <div
                class="relative
                       mx-auto
                       min-h-[310px]
                       w-full max-w-[340px]">

                {{-- Main card --}}
                <div
                    class="absolute
                           left-[25px] top-[15px]
                           w-[245px]
                           rotate-[-6deg]
                           rounded-[20px]
                           border border-secondary-200
                           bg-white
                           p-5
                           shadow-[0_22px_50px_rgba(15,23,42,0.12)]">

                    <div class="flex items-start gap-3">

                        <div
                            class="flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 13v-1a8 8 0 0 1 16 0v1" />
                            </svg>
                        </div>


                        <div>

                            <p
                                class="text-[13px]
                                       font-bold
                                       leading-4
                                       text-secondary-950">
                                Local support.<br>
                                Real people.
                            </p>


                            <div class="mt-2
                                       flex items-center gap-2">
                                <span
                                    class="h-2 w-2
                                           rounded-full
                                           bg-emerald-500"></span>

                                <span class="text-[10px]
                                           text-secondary-500">
                                    Online now
                                </span>
                            </div>

                        </div>

                    </div>



                    <div class="mt-5 space-y-3">

                        @foreach (['Fast response times', 'Australian based team', 'Integration specialists'] as $benefit)
                            <div class="flex items-center gap-2.5">

                                <span
                                    class="flex h-5 w-5
                                           shrink-0
                                           items-center justify-center
                                           rounded-full
                                           bg-emerald-500
                                           text-white">
                                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2.4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 7" />
                                    </svg>
                                </span>

                                <span class="text-[11px]
                                           text-secondary-700">
                                    {{ $benefit }}
                                </span>

                            </div>
                        @endforeach

                    </div>

                </div>



                {{-- Handwriting --}}
                <div
                    class="absolute
                           right-0 top-[45px]
                           hidden rotate-[4deg]
                           lg:block">
                    <p
                        class="text-right
                               text-[16px]
                               font-semibold italic
                               leading-5
                               text-primary-600">
                        We’re here<br>
                        to help!
                    </p>


                    <svg class="ml-auto mt-2
                               h-10 w-14
                               text-primary-500"
                        viewBox="0 0 64 48" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" d="M55 5C50 23 37 32 13 35" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="m20 28-9 7 10 4" />
                    </svg>

                </div>



                {{-- Avatar row --}}
                <div
                    class="absolute
                           bottom-[48px] left-[40px]
                           flex items-center">

                    @foreach ([['JT', 'bg-primary-100 text-primary-700'], ['SK', 'bg-emerald-100 text-emerald-700'], ['ML', 'bg-violet-100 text-violet-700']] as [$initials, $classes])
                        <div
                            class="-ml-2 first:ml-0
                                   flex h-10 w-10
                                   items-center justify-center
                                   rounded-full
                                   border-[3px] border-white
                                   {{ $classes }}
                                   text-[11px]
                                   font-bold
                                   shadow-sm">
                            {{ $initials }}
                        </div>
                    @endforeach


                    <div
                        class="-ml-2
                               flex h-10 w-10
                               items-center justify-center
                               rounded-full
                               border-[3px] border-white
                               bg-secondary-950
                               text-sm
                               shadow-sm">
                        🇦🇺
                    </div>

                </div>



                {{-- Team chip --}}
                <div
                    class="absolute
                           bottom-[5px] right-[5px]
                           inline-flex
                           items-center gap-2
                           rounded-full
                           border border-secondary-200
                           bg-white
                           px-3.5 py-2
                           text-[10px]
                           font-semibold
                           text-secondary-700
                           shadow-lg">

                    <span
                        class="h-2 w-2
                               rounded-full
                               bg-emerald-500"></span>

                    Local Australian team

                </div>

            </div>

        </div>



        {{-- final cta --}}
        <div
            class="group relative mt-12
           rounded-[22px]
           bg-[#071a3a]
           px-7 py-9
           shadow-[0_25px_65px_rgba(15,23,42,0.18)]
           sm:px-9
           lg:px-10 lg:py-10">

            {{-- Background shapes layer --}}
            <div class="pointer-events-none absolute inset-0 overflow-hidden rounded-[22px]" aria-hidden="true">

                {{-- big center-bottom glow/curve --}}
                <div
                    class="absolute
                   left-[38%] -bottom-[270px]
                   h-[620px] w-[620px]
                   rounded-full
                   bg-primary-600/12">
                </div>

                {{-- top-right glow --}}
                <div
                    class="absolute
                   -right-[130px] -top-[180px]
                   h-[420px] w-[420px]
                   rounded-full
                   bg-primary-600/12">
                </div>

                {{-- soft radial spotlight --}}
                <div
                    class="absolute
                   inset-y-0 right-[14%]
                   hidden w-[420px]
                   rounded-full
                   bg-primary-500/8
                   blur-3xl
                   lg:block">
                </div>

            </div>



            <div
                class="relative z-10
               grid gap-8
               lg:grid-cols-[0.9fr_1.1fr]
               lg:items-center">
                {{-- left cta content --}}
                <div class="pb-2 lg:py-6">

                    {{-- Eyebrow --}}
                    <div
                        class="inline-flex
                       rounded-full
                       bg-white/10
                       px-3.5 py-1.5
                       text-[10px]
                       font-bold uppercase
                       tracking-[0.07em]
                       text-primary-200">
                        Ready to get started?
                    </div>


                    {{-- Heading --}}
                    <h2
                        class="mt-5
                       max-w-[500px]
                       text-[32px]
                       font-extrabold
                       leading-[1.08]
                       tracking-[-0.04em]
                       text-white
                       sm:text-[38px]
                       lg:text-[42px]">
                        Connect your tools and

                        <span class="text-primary-400">
                            take control
                        </span>

                        of your inventory.
                    </h2>


                    {{-- Description --}}
                    <p
                        class="mt-4
                       max-w-[500px]
                       text-[13px]
                       leading-6
                       text-slate-300">
                        Start your free trial today or book a demo with our team
                        to see how StockCore integrates with your tech stack.
                    </p>



                    {{-- Buttons --}}
                    <div class="mt-6
                       flex flex-col gap-3
                       sm:flex-row">

                        <a href="#"
                            class="group/button
                           inline-flex
                           min-h-[46px]
                           items-center justify-center
                           gap-2
                           rounded-lg
                           bg-primary-600
                           px-6
                           text-[13px]
                           font-semibold
                           text-white
                           transition
                           hover:bg-primary-500">
                            Start Free Trial

                            <svg class="h-3.5 w-3.5
                               transition-transform
                               duration-300
                               group-hover/button:translate-x-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </a>


                        <a href="{{ url('/demo') }}"
                            class="inline-flex
                           min-h-[46px]
                           items-center justify-center
                           rounded-lg
                           bg-white
                           px-6
                           text-[13px]
                           font-semibold
                           text-secondary-950
                           transition
                           hover:bg-primary-50">
                            Book a Demo
                        </a>

                    </div>



                    {{-- Trust row --}}
                    <div class="mt-5
                       flex flex-wrap
                       gap-x-5 gap-y-3">

                        @foreach (['No credit card required', '14-day free trial', 'Australian support'] as $trust)
                            <div class="flex items-center gap-2">

                                <span
                                    class="flex h-5 w-5
                                   items-center justify-center
                                   rounded-full
                                   bg-white
                                   text-primary-600">
                                    <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 7" />
                                    </svg>
                                </span>

                                <span
                                    class="text-[10px]
                                   font-medium
                                   text-slate-300">
                                    {{ $trust }}
                                </span>

                            </div>
                        @endforeach

                    </div>

                </div>



                {{-- right laptop visuals --}}
                <div
                    class="relative
           mx-auto
           w-full
           max-w-[650px]
           lg:min-h-[360px]">

                    {{-- laptop image --}}
                    <img src="{{ asset('images/company_assets/laptop.png') }}" alt="StockCore dashboard on laptop"
                        class="relative z-10
               mx-auto
               w-full
               max-w-[600px]
               drop-shadow-[0_30px_55px_rgba(0,0,0,0.34)]
               transition-all
               duration-500
               ease-out

               group-hover:-translate-y-2

               lg:absolute
               lg:-bottom-[75px]
               lg:right-[-15px]
               lg:w-[600px]
               lg:max-w-none
               lg:group-hover:-translate-y-3">



                    {{-- success clip --}}
                    <div
                        class="absolute
               right-[15px]
               top-[25px]
               z-20
               hidden
               rounded-2xl
               bg-white
               px-4 py-3
               shadow-[0_16px_35px_rgba(0,0,0,0.16)]
               sm:flex">

                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-8 w-8
                       items-center justify-center
                       rounded-full
                       bg-emerald-500
                       text-white">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 7" />
                                </svg>
                            </span>


                            <div>

                                <p
                                    class="text-[10px]
                           font-bold
                           text-secondary-950">
                                    Integration connected!
                                </p>

                                <p class="text-[9px]
                           text-secondary-500">
                                    Your data is now in sync.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- handwwritten note --}}
                    <div
                        class="absolute
               bottom-[20px]
               right-[-5px]
               z-20
               hidden
               rotate-[-6deg]
               text-right
               lg:block">

                        <p
                            class="text-[13px]
                   font-semibold
                   italic
                   leading-4
                   text-white">
                            Join hundreds<br>
                            of Australian<br>
                            businesses
                        </p>


                        <svg class="ml-auto mt-1
                   h-7 w-10
                   text-white"
                            viewBox="0 0 50 30" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" d="M45 4C36 16 27 20 8 21" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="m14 16-7 5 7 5" />
                        </svg>

                    </div>

                </div>
            </div>

        </div>

    </div>

</section>
