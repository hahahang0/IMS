{{-- hero section of demo page --}}
@php

    $demoBenefits = [
        [
            'icon' => 'clock',
            'title' => '15-Min Walkthrough',
            'description' => 'Concise overview tailored strictly around your SKU count and sales channels.',
            'icon_class' => 'bg-primary-50 text-primary-600',
        ],

        [
            'icon' => 'settings',
            'title' => 'Custom Setup',
            'description' => 'Our AU specialists build a custom demo environment using your workflow parameters.',
            'icon_class' => 'bg-emerald-50 text-emerald-600',
        ],

        [
            'icon' => 'sparkles',
            'title' => 'Instant Trial Access',
            'description' => 'Get 14 days of unrestricted sandbox access immediately after the demo call.',
            'icon_class' => 'bg-primary-50 text-primary-600',
        ],
    ];

@endphp


<section id="demo-hero" class="relative overflow-hidden border-b border-secondary-100 bg-background">
    {{-- background decorations --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Large top-right circle --}}
        <div
            class="absolute -right-[260px] -top-[300px]
                   h-[650px] w-[650px]
                   rounded-full
                   bg-primary-50/80">
        </div>


        {{-- Bottom-left large curve --}}
        <div
            class="absolute -bottom-[390px] -left-[220px]
                   h-[720px] w-[720px]
                   rounded-full
                   border-[100px] border-primary-50/80">
        </div>


        {{-- Right soft curve --}}
        <div
            class="absolute -right-[360px] top-[210px]
                   h-[720px] w-[720px]
                   rounded-full
                   border-[110px] border-primary-50/70">
        </div>


        {{-- Dot pattern --}}
        <div
            class="absolute right-[8%] top-[85px]
                   grid grid-cols-5 gap-[11px]
                   opacity-40">

            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor

        </div>


        {{-- Centre glow --}}
        <div
            class="absolute left-1/2 top-[38%]
                   h-[400px] w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[110px]">
        </div>

    </div>


    {{-- hero content --}}
    <div
        class="relative z-10 mx-auto
               max-w-7xl
               px-6 pb-20 pt-20
               sm:px-8 sm:pb-24 sm:pt-24
               lg:px-8 lg:pb-28 lg:pt-28">

        {{-- eyebrow --}}
        <div
            class="inline-flex items-center gap-2.5
                   rounded-full
                   border border-primary-200
                   bg-primary-50/80
                   px-4 py-2
                   shadow-sm
                   backdrop-blur-sm">

            <span class="h-2 w-2
                       rounded-full
                       bg-primary-400"></span>

            <span
                class="text-[12px]
                       font-bold uppercase
                       tracking-[0.08em]
                       text-primary-600">
                Book a Guided Demo
            </span>

        </div>



        {{-- heading --}}
        <h1
            class="mt-7
                   max-w-[960px]
                   text-[46px]
                   font-extrabold
                   leading-[1.02]
                   tracking-[-0.05em]
                   text-secondary-950
                   sm:text-[56px]
                   lg:text-[70px]">

            Take Control of your

            <span class="block text-primary-600">
                Inventory
            </span>

        </h1>


        {{-- description --}}
        <p
            class="mt-6
                   max-w-[900px]
                   text-[17px]
                   leading-8
                   text-secondary-600
                   sm:text-[19px]
                   lg:text-[20px]">
            StockCore helps Australian businesses track inventory in real time,
            automate reordering, and sync effectively across multi-warehouse
            locations.
        </p>



        {{-- benefits card --}}
        <div class="mt-12
                   grid gap-5
                   md:grid-cols-3">

            @foreach ($demoBenefits as $benefit)
                <article
                    class="group
                           relative overflow-hidden
                           rounded-[22px]
                           border border-secondary-200
                           bg-white
                           px-6 py-7
                           shadow-[0_14px_40px_rgba(15,23,42,0.055)]
                           transition-all duration-300
                           hover:-translate-y-1
                           hover:border-primary-200
                           hover:shadow-[0_20px_50px_rgba(15,23,42,0.09)]">

                    {{-- Subtle hover background --}}
                    <div
                        class="pointer-events-none absolute inset-0
                               bg-gradient-to-br
                               from-primary-50/0
                               to-primary-50/0
                               transition duration-300
                               group-hover:from-primary-50/30
                               group-hover:to-transparent">
                    </div>


                    <div class="relative z-10">
                        {{-- icon --}}
                        <div
                            class="flex h-12 w-12
                                   items-center justify-center
                                   rounded-xl
                                   {{ $benefit['icon_class'] }}">

                            @switch($benefit['icon'])
                                {{-- CLOCK --}}
                                @case('clock')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8" aria-hidden="true">
                                        <circle cx="12" cy="12" r="8" />

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2" />
                                    </svg>
                                @break

                                {{-- SETTINGS --}}
                                @case('settings')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8" aria-hidden="true">

                                        <path stroke-linecap="round" d="M4 7h10M18 7h2" />

                                        <circle cx="16" cy="7" r="2" />

                                        <path stroke-linecap="round" d="M4 12h3M11 12h9" />

                                        <circle cx="9" cy="12" r="2" />

                                        <path stroke-linecap="round" d="M4 17h9M17 17h3" />

                                        <circle cx="15" cy="17" r="2" />

                                    </svg>
                                @break

                                {{-- SPARKLES --}}
                                @case('sparkles')
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8" aria-hidden="true">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 3 13.7 7.3 18 9l-4.3 1.7L12 15l-1.7-4.3L6 9l4.3-1.7L12 3Z" />

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m18.5 14 .8 2.2 2.2.8-2.2.8-.8 2.2-.8-2.2-2.2-.8 2.2-.8.8-2.2Z" />

                                    </svg>
                                @break
                            @endswitch

                        </div>



                        {{-- title --}}
                        <h2
                            class="mt-5
                                   text-[18px]
                                   font-bold
                                   tracking-[-0.02em]
                                   text-secondary-950">
                            {{ $benefit['title'] }}
                        </h2>



                        {{-- description --}}
                        <p
                            class="mt-3
                                   text-[14px]
                                   leading-6
                                   text-secondary-600
                                   sm:text-[15px]">
                            {{ $benefit['description'] }}
                        </p>

                    </div>

                </article>
            @endforeach

        </div>

    </div>

</section>
