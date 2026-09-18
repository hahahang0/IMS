{{-- process section --}}
@php

    $steps = [
        [
            'number' => '01',
            'icon' => 'review',
            'title' => 'We review your request',
            'description' =>
                'We’ll take a look at your business details, industry, stock size, and any specific areas you’d like to discuss.',
        ],

        [
            'number' => '02',
            'icon' => 'calendar',
            'title' => 'We confirm your time',
            'description' =>
                'If you selected a date and time, we’ll confirm it via email. If not, we’ll get in touch within 1 business day to find a time that works for you.',
        ],

        [
            'number' => '03',
            'icon' => 'demo',
            'title' => 'You get a guided walkthrough',
            'description' =>
                'Meet with a StockCore inventory specialist for a 15–30 minute demo, tailored to your business, workflows and questions.',
        ],
    ];

@endphp


<section id="demo-process"
    class="relative overflow-hidden
           border-t border-secondary-100
           bg-background
           py-20 sm:py-24 lg:py-28">

    {{-- background decorations --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Top-left soft curve --}}
        <div
            class="absolute -left-[260px] -top-[330px]
                   h-[620px] w-[620px]
                   rounded-full
                   border-[90px] border-primary-50/80">
        </div>


        {{-- Bottom-right soft curve --}}
        <div
            class="absolute -right-[320px] -bottom-[360px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[100px] border-primary-50/80">
        </div>


        {{-- Left dotted pattern --}}
        <div
            class="absolute left-6 top-[210px]
                   hidden grid-cols-5 gap-3
                   opacity-40 lg:grid">
            @for ($i = 0; $i < 25; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor
        </div>


        {{-- Right dotted pattern --}}
        <div
            class="absolute right-6 top-[260px]
                   hidden grid-cols-4 gap-3
                   opacity-35 lg:grid">
            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor
        </div>


        {{-- Center glow --}}
        <div
            class="absolute left-1/2 top-[35%]
                   h-[400px] w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-primary-50/30
                   blur-[120px]">
        </div>

    </div>



    {{-- content --}}
    <div class="relative z-10
               mx-auto max-w-7xl
               px-6 sm:px-8 lg:px-8">

        {{-- header --}}
        <div class="mx-auto max-w-4xl text-center">

            {{-- Eyebrow --}}
            <div
                class="inline-flex items-center gap-2
                       rounded-full
                       bg-primary-50
                       px-4 py-2
                       text-[12px]
                       font-bold uppercase
                       tracking-[0.08em]
                       text-primary-600">
                Simple next steps
            </div>


            {{-- Heading --}}
            <h2
                class="mt-5
                       text-4xl font-extrabold
                       tracking-[-0.045em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[3.5rem]">
                What happens after
                <span class="text-primary-600">
                    you submit?
                </span>
            </h2>


            {{-- Description --}}
            <p
                class="mx-auto mt-5
                       max-w-3xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg">
                Here’s what to expect once you’ve booked your demo
                or submitted the form. It’s quick, simple, and we’ll
                guide you every step of the way.
            </p>

        </div>



        {{-- process flow --}}
        <div
            class="relative mt-16
                   grid gap-12
                   lg:grid-cols-3
                   lg:gap-10">

            {{-- Desktop connector line --}}
            <div class="pointer-events-none
                       absolute left-[16%] right-[16%] top-[70px]
                       hidden lg:block"
                aria-hidden="true">

                <div
                    class="relative h-px
                           border-t-2 border-dashed
                           border-primary-200">

                    {{-- Arrow 1 --}}
                    <div
                        class="absolute left-[31%] top-1/2
                               flex h-10 w-10
                               -translate-x-1/2
                               -translate-y-1/2
                               items-center justify-center
                               rounded-full
                               border border-primary-200
                               bg-white
                               text-primary-600
                               shadow-sm">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>
                    </div>


                    {{-- Arrow 2 --}}
                    <div
                        class="absolute left-[69%] top-1/2
                               flex h-10 w-10
                               -translate-x-1/2
                               -translate-y-1/2
                               items-center justify-center
                               rounded-full
                               border border-primary-200
                               bg-white
                               text-primary-600
                               shadow-sm">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>
                    </div>

                </div>

            </div>



            @foreach ($steps as $step)
                <article class="relative text-center">

                    {{-- step visuals --}}
                    <div
                        class="relative mx-auto
                               flex h-[145px] w-[145px]
                               items-center justify-center">

                        {{-- Outer circle --}}
                        <div
                            class="absolute inset-0
                                   rounded-full
                                   border border-primary-100
                                   bg-white
                                   shadow-[0_15px_45px_rgba(37,99,235,0.08)]">
                        </div>


                        {{-- Inner circle --}}
                        <div
                            class="relative z-10
                                   flex h-[105px] w-[105px]
                                   items-center justify-center
                                   rounded-full
                                   bg-gradient-to-br
                                   from-primary-50
                                   to-white
                                   text-primary-600">

                            {{-- REVIEW ICON --}}
                            @if ($step['icon'] === 'review')
                                <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.6" aria-hidden="true">
                                    <rect x="5" y="3" width="12" height="16" rx="2" />

                                    <path stroke-linecap="round" d="M8 8h6M8 11h5" />

                                    <circle cx="17" cy="17" r="4" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m15.5 17 1 1 2-2" />
                                </svg>
                            @endif



                            {{-- CALENDAR ICON --}}
                            @if ($step['icon'] === 'calendar')
                                <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.6" aria-hidden="true">
                                    <rect x="4" y="5" width="16" height="14" rx="2" />

                                    <path d="M8 3v4M16 3v4M4 10h16" />

                                    <circle cx="17" cy="17" r="4" />

                                    <path stroke-linecap="round" d="M17 15v2l1.5 1" />
                                </svg>
                            @endif



                            {{-- DEMO ICON --}}
                            @if ($step['icon'] === 'demo')
                                <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.6" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="13" rx="2" />

                                    <circle cx="10" cy="10" r="2" />

                                    <path stroke-linecap="round" d="M7 15c.7-1.8 2-2.8 3-2.8s2.3 1 3 2.8" />

                                    <path stroke-linecap="round" d="M8 21h8" />

                                    <path stroke-linecap="round" d="M12 18v3" />
                                </svg>
                            @endif

                        </div>


                        {{-- Step number --}}
                        <span
                            class="absolute left-1 top-0 z-20
                                   flex h-11 w-11
                                   items-center justify-center
                                   rounded-full
                                   border-4 border-white
                                   bg-primary-500
                                   text-sm font-bold
                                   text-white
                                   shadow-md">
                            {{ $step['number'] }}
                        </span>

                    </div>


                    {{-- step text --}}
                    <div class="mx-auto mt-6 max-w-sm">

                        <h3
                            class="text-xl font-bold
                                   tracking-[-0.025em]
                                   text-secondary-950
                                   sm:text-[22px]">
                            {{ $step['title'] }}
                        </h3>


                        <p
                            class="mt-3
                                   text-[15px] leading-7
                                   text-secondary-600
                                   sm:text-base">
                            {{ $step['description'] }}
                        </p>

                    </div>

                </article>
            @endforeach

        </div>



        {{-- ressaurance baner --}}
        <div
            class="relative mt-16
                   overflow-hidden
                   rounded-[24px]
                   border border-primary-100
                   bg-primary-50/60
                   px-6 py-7
                   sm:px-8
                   lg:px-10">

            {{-- subtle background --}}
            <div class="pointer-events-none absolute
                       -right-[120px] -top-[120px]
                       h-[300px] w-[300px]
                       rounded-full
                       bg-primary-100/40"
                aria-hidden="true"></div>


            <div
                class="relative z-10
                       flex flex-col gap-6
                       lg:flex-row
                       lg:items-center
                       lg:justify-between">

                {{-- Left --}}
                <div class="flex items-start gap-5">

                    {{-- Shield --}}
                    <div
                        class="flex h-16 w-16 shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-white
                               text-primary-600
                               shadow-sm">

                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3 5 6v5c0 4.8 2.8 8.4 7 10 4.2-1.6 7-5.2 7-10V6l-7-3Z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4" />
                        </svg>

                    </div>


                    <div>

                        <h3
                            class="text-lg font-bold
                                   tracking-[-0.02em]
                                   text-secondary-950
                                   sm:text-xl">
                            No pressure. Just a helpful conversation.
                        </h3>


                        <p
                            class="mt-2 max-w-3xl
                                   text-sm leading-6
                                   text-secondary-600
                                   sm:text-base">
                            Our goal is to help you understand how StockCore
                            can work for your business — whether you’re ready
                            to get started now or just exploring your options.
                        </p>

                    </div>

                </div>



                {{-- Right handwritten-style note --}}
                <div class="hidden shrink-0
                           text-right
                           lg:block">

                    <p
                        class="rotate-[-4deg]
                               text-[19px]
                               font-semibold italic
                               leading-7
                               text-primary-600">
                        Real people.<br>
                        Local support.
                    </p>

                    <svg class="ml-auto mt-1 h-8 w-20
                               text-primary-500"
                        viewBox="0 0 80 30" fill="none" stroke="currentColor" stroke-width="2"
                        aria-hidden="true">
                        <path stroke-linecap="round" d="M75 5C60 20 42 24 15 20" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 14-8 6 8 5" />
                    </svg>

                </div>

            </div>

        </div>

    </div>

</section>
