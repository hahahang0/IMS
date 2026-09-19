{{-- support helpful resources --}}
@php

    $resources = [
        [
            'title' => 'Quick Start Guide',
            'description' => 'Get up and running with StockCore in minutes.',
            'link_text' => 'Get started',
            'url' => '#',
            'icon' => 'guide',
            'icon_class' => 'bg-primary-50 text-primary-600',
            'link_class' => 'text-primary-600 hover:text-primary-700',
        ],

        [
            'title' => 'Video Tutorials',
            'description' => 'Watch step-by-step video guides.',
            'link_text' => 'Watch videos',
            'url' => '#',
            'icon' => 'video',
            'icon_class' => 'bg-violet-50 text-violet-600',
            'link_class' => 'text-violet-600 hover:text-violet-700',
        ],

        [
            'title' => 'Help Documentation',
            'description' => 'Browse detailed guides and find answers.',
            'link_text' => 'Browse docs',
            'url' => '#',
            'icon' => 'docs',
            'icon_class' => 'bg-emerald-50 text-emerald-600',
            'link_class' => 'text-emerald-600 hover:text-emerald-700',
        ],
    ];

@endphp



<section id="helpful-resources"
    class="relative overflow-hidden
           bg-background
           py-20
           sm:py-24
           lg:py-28">
    {{-- bakcgound decorations --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Top right curve --}}
        <div
            class="absolute
                   -right-[300px] -top-[430px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[95px]
                   border-primary-50/65">
        </div>


        {{-- Bottom left curve --}}
        <div
            class="absolute
                   -left-[340px] -bottom-[450px]
                   h-[700px] w-[700px]
                   rounded-full
                   border-[100px]
                   border-primary-50/60">
        </div>



        {{-- LEFT DOTS --}}
        <div
            class="absolute
                   left-[2%] top-[42%]
                   hidden grid-cols-4 gap-3
                   opacity-25
                   lg:grid">

            @for ($i = 0; $i < 16; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor

        </div>



        {{-- RIGHT DOTS --}}
        <div
            class="absolute
                   right-[4%] top-[18%]
                   hidden grid-cols-5 gap-3
                   opacity-25
                   lg:grid">

            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor

        </div>



        {{-- Soft center glow --}}
        <div
            class="absolute
                   left-1/2 top-[45%]
                   h-[420px] w-[900px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/80
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
        <div class="relative
                   max-w-[1000px]">

            {{-- Eyebrow --}}
            <div class="flex items-center gap-4">

                <span
                    class="h-[2px] w-12
                           rounded-full
                           bg-primary-600"></span>


                <span
                    class="text-[11px]
                           font-bold uppercase
                           tracking-[0.13em]
                           text-secondary-500">
                    Helpful Resources
                </span>

            </div>



            {{-- Heading --}}
            <h2
                class="mt-6
                       max-w-[950px]
                       text-[42px]
                       font-extrabold
                       leading-[1.05]
                       tracking-[-0.05em]
                       text-secondary-950
                       sm:text-[52px]
                       lg:text-[62px]">

                Prefer to

                <span class="text-primary-600">
                    explore on your own?
                </span>

            </h2>



            {{-- Description --}}
            <p
                class="mt-5
                       max-w-[780px]
                       text-[16px]
                       leading-8
                       text-secondary-600
                       sm:text-[17px]">
                Explore setup guides, tutorials and documentation designed
                to help you get more from StockCore. Learn at your own pace,
                anytime.
            </p>



            {{-- Handwritten note --}}
            <div
                class="absolute
                       right-[-150px] top-[35px]
                       hidden
                       rotate-[-6deg]
                       lg:block">

                <p
                    class="text-[20px]
                           font-medium italic
                           leading-7
                           text-primary-500">
                    Learn.<br>
                    Solve.<br>
                    Grow.
                </p>


                <svg class="mt-2
                           h-12 w-20
                           text-primary-400"
                    viewBox="0 0 80 48" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" d="M5 7c16 20 28 26 57 27" />

                    <path stroke-linecap="round" stroke-linejoin="round" d="m54 26 10 8-11 6" />
                </svg>

            </div>

        </div>



        {{-- resources strip --}}
        <div class="mt-12
                   grid gap-8
                   lg:grid-cols-3
                   lg:gap-0">

            @foreach ($resources as $index => $resource)
                <div
                    class="group
                           relative
                           flex gap-5

                           {{ !$loop->first ? 'lg:border-l lg:border-secondary-200 lg:pl-10' : '' }}

                           {{ !$loop->last ? 'lg:pr-10' : '' }}">

                    {{-- ICON --}}
                    <div
                        class="flex h-16 w-16
                               shrink-0
                               items-center justify-center
                               rounded-[18px]
                               {{ $resource['icon_class'] }}

                               transition-all duration-300
                               group-hover:-translate-y-1">

                        {{-- QUICK START --}}
                        @if ($resource['icon'] === 'guide')
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 5h6a3 3 0 0 1 3 3v11a3 3 0 0 0-3-3H4V5Z" />

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20 5h-6a3 3 0 0 0-3 3v11a3 3 0 0 1 3-3h6V5Z" />
                            </svg>
                        @endif



                        {{-- VIDEO --}}
                        @if ($resource['icon'] === 'video')
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="3" y="4" width="18" height="16" rx="3" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m10 8 6 4-6 4V8Z" />
                            </svg>
                        @endif



                        {{-- DOCS --}}
                        @if ($resource['icon'] === 'docs')
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h8l4 4v14H6V3Z" />

                                <path d="M14 3v5h4" />

                                <path stroke-linecap="round" d="M9 12h6M9 16h6" />
                            </svg>
                        @endif

                    </div>



                    {{-- TEXT --}}
                    <div>

                        <h3
                            class="text-[20px]
                                   font-bold
                                   tracking-[-0.025em]
                                   text-secondary-950">
                            {{ $resource['title'] }}
                        </h3>


                        <p
                            class="mt-2
                                   max-w-[260px]
                                   text-[15px]
                                   leading-7
                                   text-secondary-600">
                            {{ $resource['description'] }}
                        </p>



                        <a href="{{ $resource['url'] }}"
                            class="group/link
                                   mt-5
                                   inline-flex
                                   items-center gap-3
                                   text-[14px]
                                   font-semibold
                                   {{ $resource['link_class'] }}
                                   transition-colors">
                            {{ $resource['link_text'] }}


                            <svg class="h-4 w-4
                                       transition-transform
                                       duration-300
                                       group-hover/link:translate-x-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>

                    </div>

                </div>
            @endforeach

        </div>


        {{-- view all resources button --}}
        <div class="mt-12
                   flex justify-center">

            <a href="#"
                class="group
                       inline-flex
                       min-h-[58px]
                       min-w-[310px]
                       items-center justify-center
                       gap-3
                       rounded-xl
                       bg-primary-600
                       px-8
                       text-[15px]
                       font-semibold
                       text-white

                       shadow-[0_12px_28px_rgba(37,99,235,0.22)]

                       transition-all duration-300

                       hover:-translate-y-0.5
                       hover:bg-primary-700
                       hover:shadow-[0_16px_34px_rgba(37,99,235,0.30)]">

                View all resources


                <svg class="h-4 w-4
                           transition-transform
                           duration-300
                           group-hover:translate-x-1"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                </svg>

            </a>

        </div>



        {{-- new user strip --}}
        <div
            class="mt-14
                   rounded-[20px]
                   border border-primary-100
                   bg-primary-50/60
                   px-6 py-6
                   sm:px-8">

            <div
                class="flex flex-col gap-5
                       lg:flex-row
                       lg:items-center
                       lg:justify-between">

                {{-- LEFT --}}
                <div class="flex items-center gap-5">

                    <span
                        class="flex h-12 w-12
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-white
                               text-primary-600
                               shadow-sm">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linejoin="round" d="m3 8 9-5 9 5-9 5-9-5Z" />

                            <path stroke-linecap="round" d="M6 11v5c2 2 4 3 6 3s4-1 6-3v-5" />
                        </svg>

                    </span>


                    <div
                        class="flex flex-col
                               gap-2
                               lg:flex-row
                               lg:items-center
                               lg:gap-8">

                        <h3
                            class="text-[17px]
                                   font-bold
                                   text-secondary-950">
                            New to StockCore?
                        </h3>


                        <span
                            class="hidden
                                   h-8 w-px
                                   bg-secondary-200
                                   lg:block"></span>


                        <p class="text-[14px]
                                   text-secondary-600">
                            Check out our Quick Start Guide for a smooth setup experience.
                        </p>

                    </div>

                </div>



                {{-- RIGHT --}}
                <a href="{{route('public.auth.signup')}}"
                    class="group
                           inline-flex
                           items-center gap-2
                           text-[14px]
                           font-semibold
                           text-primary-600
                           transition
                           hover:text-primary-700">

                    Get started now


                    <svg class="h-4 w-4
                               transition-transform
                               duration-300
                               group-hover:translate-x-1"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                    </svg>

                </a>

            </div>

        </div>

    </div>

</section>
