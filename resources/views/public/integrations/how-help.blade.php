{{-- how integration help <section></section> --}}

@php

    $integrationBenefits = [
        [
            'number' => '01',
            'icon' => 'time',
            'title' => 'Save time',
            'description' => 'Eliminate manual data entry and reduce double handling across systems.',
            'icon_class' => 'bg-primary-50 text-primary-600',
        ],

        [
            'number' => '02',
            'icon' => 'accuracy',
            'title' => 'Improve accuracy',
            'description' => 'Keep your inventory, financial and order data in sync and up to date.',
            'icon_class' => 'bg-emerald-50 text-emerald-600',
        ],

        [
            'number' => '03',
            'icon' => 'visibility',
            'title' => 'Gain real-time visibility',
            'description' => 'See accurate stock, sales and financial data across your business.',
            'icon_class' => 'bg-violet-50 text-violet-600',
        ],

        [
            'number' => '04',
            'icon' => 'smart',
            'title' => 'Work smarter',
            'description' => 'Connect your tools and focus on growing your business instead of repetitive admin.',
            'icon_class' => 'bg-primary-50 text-primary-600',
        ],
    ];

@endphp



<section id="integration-benefits"
    class="relative overflow-hidden
           bg-background
           py-20
           sm:py-24
           lg:py-28">

    {{-- background decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Top-left large soft circle --}}
        <div
            class="absolute
                   -left-[260px] -top-[260px]
                   h-[600px] w-[600px]
                   rounded-full
                   bg-primary-50/70">
        </div>


        {{-- Top-right large soft circle --}}
        <div
            class="absolute
                   -right-[320px] -top-[330px]
                   h-[700px] w-[700px]
                   rounded-full
                   bg-primary-50/70">
        </div>


        {{-- Bottom-left arc --}}
        <div
            class="absolute
                   -bottom-[430px] -left-[300px]
                   h-[740px] w-[740px]
                   rounded-full
                   border-[105px]
                   border-primary-50/60">
        </div>


        {{-- Small floating circle --}}
        <div
            class="absolute
                   left-[20%] top-[65px]
                   h-16 w-16
                   rounded-full
                   bg-primary-50/90">
        </div>


        {{-- Small right circle --}}
        <div
            class="absolute
                   right-[8%] top-[300px]
                   h-14 w-14
                   rounded-full
                   bg-primary-50/80">
        </div>


        {{-- Center glow --}}
        <div
            class="absolute
                   left-1/2 top-[42%]
                   h-[440px] w-[950px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[120px]">
        </div>

    </div>



    {{-- content --}}
    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               sm:px-8
               lg:px-8">

        {{-- header --}}
        <div class="mx-auto max-w-4xl text-center">

            {{-- Eyebrow --}}
            <div
                class="inline-flex
                       items-center gap-2
                       rounded-full
                       border border-primary-100
                       bg-primary-50
                       px-4 py-2
                       text-[12px]
                       font-semibold uppercase
                       tracking-[0.07em]
                       text-primary-600">

                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 13a5 5 0 0 0 7.07 0l2.12-2.12a5 5 0 0 0-7.07-7.07L11 4.93" />

                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14 11a5 5 0 0 0-7.07 0L4.8 13.12a5 5 0 0 0 7.07 7.07L13 19.07" />
                </svg>

                How integrations help

            </div>



            {{-- Heading --}}
            <h2
                class="mt-6
                       text-4xl
                       font-extrabold
                       leading-[1.06]
                       tracking-[-0.045em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[3.5rem]">
                Get more from your

                <span class="text-primary-600">
                    existing tools.
                </span>
            </h2>



            {{-- Description --}}
            <p
                class="mx-auto mt-6
                       max-w-3xl
                       text-base
                       leading-7
                       text-secondary-600
                       sm:text-lg">
                StockCore connects your systems so data flows automatically,
                saving time, reducing manual work and creating a single source
                of truth across your business.
            </p>

        </div>



        {{-- benefit card --}}
        <div
            class="mt-14
                   grid gap-5
                   sm:grid-cols-2
                   lg:grid-cols-4">

            @foreach ($integrationBenefits as $benefit)
                <article
                    class="group
                           relative
                           min-h-[300px]
                           overflow-hidden
                           rounded-[22px]
                           border border-secondary-200
                           bg-white
                           p-7
                           shadow-[0_12px_35px_rgba(15,23,42,0.045)]

                           transition-all
                           duration-300

                           hover:-translate-y-1.5
                           hover:border-primary-300
                           hover:bg-primary-50
                           hover:shadow-[0_20px_50px_rgba(37,99,235,0.12)]
                           hover:cursor-pointer">

                    {{-- hover decoration --}}
                    <div
                        class="pointer-events-none
                               absolute
                               -right-[80px] -top-[80px]
                               h-[190px] w-[190px]
                               rounded-full
                               bg-primary-100/0
                               transition-all duration-500

                               group-hover:bg-primary-100/60">
                    </div>


                    <div
                        class="pointer-events-none
                               absolute
                               -bottom-[90px] -left-[90px]
                               h-[190px] w-[190px]
                               rounded-full
                               border-[32px]
                               border-primary-100/0
                               transition-all duration-500

                               group-hover:border-primary-100/50">
                    </div>



                    {{-- card content --}}
                    <div class="relative z-10">


                        {{-- icon --}}
                        <div
                            class="flex h-14 w-14
                                   items-center justify-center
                                   rounded-2xl
                                   {{ $benefit['icon_class'] }}

                                   transition-all
                                   duration-300

                                   group-hover:scale-105
                                   group-hover:bg-primary-600
                                   group-hover:text-white
                                   group-hover:shadow-[0_10px_25px_rgba(37,99,235,0.20)]">

                            {{-- SAVE TIME --}}
                            @if ($benefit['icon'] === 'time')
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <circle cx="12" cy="12" r="8" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2" />
                                </svg>
                            @endif



                            {{-- IMPROVE ACCURACY --}}
                            @if ($benefit['icon'] === 'accuracy')
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3 5 6v5c0 4.8 2.8 8.4 7 10 4.2-1.6 7-5.2 7-10V6l-7-3Z" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4" />
                                </svg>
                            @endif



                            {{-- REAL-TIME VISIBILITY --}}
                            @if ($benefit['icon'] === 'visibility')
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 20v-6M10 20V9M15 20V5M20 20V11" />
                                </svg>
                            @endif



                            {{-- WORK SMARTER --}}
                            @if ($benefit['icon'] === 'smart')
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 18h6M10 22h4" />

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.5 14.5A7 7 0 1 1 15.5 14.5C14.6 15.2 14 16 14 17h-4c0-1-.6-1.8-1.5-2.5Z" />
                                </svg>
                            @endif

                        </div>


                        {{-- number + title --}}
                        <div
                            class="mt-7
                                   flex items-start
                                   gap-3">

                            {{-- NUMBER --}}
                            <span
                                class="shrink-0
                                       text-[22px]
                                       font-extrabold
                                       leading-none
                                       tracking-[-0.03em]
                                       text-primary-600

                                       transition-all
                                       duration-300

                                       group-hover:text-primary-700">
                                {{ $benefit['number'] }}
                            </span>


                            {{-- TITLE --}}
                            <h3
                                class="text-[19px]
                                       font-bold
                                       leading-[1.25]
                                       tracking-[-0.025em]
                                       text-secondary-950

                                       transition-colors
                                       duration-300

                                       group-hover:text-primary-700">
                                {{ $benefit['title'] }}
                            </h3>

                        </div>



                        {{-- description --}}
                        <p
                            class="mt-4
                                   pl-[44px]
                                   text-[15px]
                                   leading-7
                                   text-secondary-600

                                   transition-colors
                                   duration-300

                                   group-hover:text-secondary-700">
                            {{ $benefit['description'] }}
                        </p>

                    </div>



                    {{-- bottom hover line --}}
                    <div
                        class="absolute
                               bottom-0 left-0
                               h-[3px] w-0
                               bg-primary-600
                               transition-all
                               duration-500
                               group-hover:w-full">
                    </div>

                </article>
            @endforeach

        </div>

    </div>

</section>
