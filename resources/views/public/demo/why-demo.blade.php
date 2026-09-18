{{-- why book a demo section  --}}

@php

    $demoReasons = [
        [
            'icon' => 'sliders',
            'title' => 'Tailored to your business',
            'description' =>
                'We’ll show you the workflows, warehouses and stock processes that are relevant to your operation.',
        ],

        [
            'icon' => 'document',
            'title' => 'No commitment required',
            'description' => 'Just a helpful, no-pressure walkthrough so you can decide if StockCore is the right fit.',
        ],

        [
            'icon' => 'support',
            'title' => 'Australian support team',
            'description' =>
                'Speak with real local specialists who understand Australian businesses and your industry.',
        ],
    ];

@endphp


<section id="why-book-demo"
    class="relative overflow-hidden
           bg-background
           py-20
           sm:py-24
           lg:py-28">
    {{-- background decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Top-right soft circle --}}
        <div
            class="absolute
                   -right-[260px] -top-[300px]
                   h-[620px] w-[620px]
                   rounded-full
                   bg-primary-50/80">
        </div>


        {{-- Bottom-left soft circle --}}
        <div
            class="absolute
                   -bottom-[300px] -left-[250px]
                   h-[560px] w-[560px]
                   rounded-full
                   bg-primary-50/80">
        </div>


        {{-- Subtle center glow --}}
        <div
            class="absolute
                   left-1/2 top-[38%]
                   h-[420px] w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[110px]">
        </div>

    </div>



    {{-- content --}}
    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               sm:px-8
               lg:px-8">

        {{-- headre --}}
        <div class="mx-auto max-w-4xl text-center">

            {{-- Eyebrow --}}
            <div
                class="inline-flex items-center gap-2
                       rounded-full
                       bg-primary-50
                       px-4 py-2
                       text-[12px]
                       font-semibold
                       text-primary-600">
                Why book a demo
            </div>


            {{-- Heading --}}
            <h2
                class="mt-6
                       text-4xl font-extrabold
                       leading-[1.08]
                       tracking-[-0.045em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[3.4rem]">
                A simple, no-pressure way
                <span class="block">
                    to see if
                    <span class="text-primary-600">
                        StockCore fits.
                    </span>
                </span>
            </h2>


            {{-- Description --}}
            <p
                class="mx-auto mt-6
                       max-w-2xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg">
                Get a personalised look at how StockCore can work for your business,
                with no obligation and no hard sell.
            </p>

        </div>


        {{-- three reason cards --}}
        <div class="mt-14
                   grid gap-6
                   md:grid-cols-3">

            @foreach ($demoReasons as $reason)
                <article
                    class="group
                           rounded-[22px]
                           border border-secondary-200
                           bg-white
                           p-7
                           shadow-[0_12px_35px_rgba(15,23,42,0.045)]
                           transition-all duration-300
                           hover:-translate-y-1
                           hover:border-primary-200
                           hover:shadow-[0_18px_45px_rgba(15,23,42,0.08)]">

                    {{-- Icon --}}
                    <div
                        class="flex h-14 w-14
                               items-center justify-center
                               rounded-full
                               bg-primary-50
                               text-primary-600">

                        {{-- Sliders --}}
                        @if ($reason['icon'] === 'sliders')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" d="M4 7h10M18 7h2" />
                                <circle cx="16" cy="7" r="2" />

                                <path stroke-linecap="round" d="M4 12h3M11 12h9" />
                                <circle cx="9" cy="12" r="2" />

                                <path stroke-linecap="round" d="M4 17h9M17 17h3" />
                                <circle cx="15" cy="17" r="2" />
                            </svg>
                        @endif


                        {{-- Document --}}
                        @if ($reason['icon'] === 'document')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h8l4 4v14H6V3Z" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 3v5h5" />
                            </svg>
                        @endif


                        {{-- Support --}}
                        @if ($reason['icon'] === 'support')
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 13v-1a8 8 0 0 1 16 0v1" />

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 13a2 2 0 0 1 2-2h1v6H6a2 2 0 0 1-2-2v-2Z" />

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20 13a2 2 0 0 0-2-2h-1v6h1a2 2 0 0 0 2-2v-2Z" />
                            </svg>
                        @endif

                    </div>


                    {{-- Title --}}
                    <h3
                        class="mt-6
                               text-xl font-bold
                               tracking-[-0.025em]
                               text-secondary-950">
                        {{ $reason['title'] }}
                    </h3>


                    {{-- Description --}}
                    <p
                        class="mt-3
                               text-[15px]
                               leading-7
                               text-secondary-600">
                        {{ $reason['description'] }}
                    </p>

                </article>
            @endforeach

        </div>



        {{-- button free trail link --}}
        <div
            class="mt-12
                   flex flex-col
                   items-center justify-center
                   gap-4
                   sm:flex-row">

            <p class="text-sm
                       text-secondary-500
                       sm:text-base">
                Prefer to explore on your own?
            </p>


            <a href="#"
                class="group
                       inline-flex
                       min-h-[48px]
                       items-center justify-center
                       gap-3
                       rounded-xl
                       border border-primary-400
                       bg-white
                       px-6
                       text-sm font-semibold
                       text-primary-600
                       transition-all duration-300
                       hover:-translate-y-0.5
                       hover:bg-primary-600
                       hover:text-white
                       hover:shadow-[0_10px_24px_rgba(37,99,235,0.18)]">
                Start Free Trial

                <svg class="h-4 w-4
                           transition-transform duration-300
                           group-hover:translate-x-1"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                </svg>

            </a>

        </div>

    </div>

</section>
