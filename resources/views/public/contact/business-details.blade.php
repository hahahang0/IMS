{{-- business details age --}}
@php
    # temp details

    $business = [
        'name' => 'StockCore Pty Ltd',
        'country' => 'Australia',

        'abn' => '12 345 678 901',

        'office' => 'Melbourne, VIC',

        'email' => 'hello@stockcore.com.au',

        'phone' => '+61 3 9000 0000',

        'hours' => 'Mon–Fri, 9am–5pm AEST',
    ];
@endphp


<section id="business-details"
    class="relative overflow-hidden
           border-y border-primary-100
           bg-primary-50
           py-20 sm:py-24 lg:py-28">

    {{--  background decorations --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Top-left circle --}}
        <div
            class="absolute -left-[220px] -top-[230px]
                   h-[500px] w-[500px]
                   rounded-full
                   bg-primary-100">
        </div>


        {{-- Secondary left circle --}}
        <div
            class="absolute -left-[280px] top-[80px]
                   h-[460px] w-[460px]
                   rounded-full
                   bg-primary-200/60">
        </div>


        {{-- Top-right --}}
        <div
            class="absolute -right-[240px] -top-[250px]
                   h-[520px] w-[520px]
                   rounded-full
                   bg-primary-100">
        </div>


        {{-- Right middle shape --}}
        <div
            class="absolute -right-[300px] top-[260px]
                   h-[650px] w-[650px]
                   rounded-full
                   bg-primary-200/70">
        </div>


        {{-- Bottom-right overlay --}}
        <div
            class="absolute -bottom-[360px] -right-[170px]
                   h-[650px] w-[650px]
                   rounded-full
                   bg-primary-300/40">
        </div>


        {{-- Bottom-left --}}
        <div
            class="absolute -bottom-[260px] -left-[210px]
                   h-[460px] w-[460px]
                   rounded-full
                   bg-primary-100">
        </div>


        {{-- top right dots --}}

        <div
            class="absolute right-[6%] top-[8%]
                   hidden grid-cols-5 gap-3
                   md:grid">
            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor
        </div>


        {{-- bottom left dots --}}

        <div
            class="absolute bottom-[6%] left-[4%]
                   hidden grid-cols-5 gap-3
                   md:grid">
            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor
        </div>

    </div>


    {{-- content --}}

    <div class="relative z-10
               mx-auto max-w-7xl
               px-6 sm:px-8 lg:px-8">
        {{-- section header --}}
        <div class="mx-auto max-w-4xl text-center">

            {{-- Eyebrow --}}
            <div class="flex items-center
                       justify-center gap-4">

                <span
                    class="text-[11px] font-bold
                           uppercase
                           tracking-[0.28em]
                           text-primary-700">
                    Australian business
                </span>


                <span class="h-px w-14 bg-primary-500" aria-hidden="true"></span>

            </div>



            {{-- Heading --}}
            <h2
                class="mt-7
                       text-4xl font-extrabold
                       leading-[1.04]
                       tracking-[-0.05em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[4rem]">
                Built in Australia.

                <span class="mt-1 block">
                    <span class="text-primary-600">
                        Here when you
                    </span>

                    need us.
                </span>
            </h2>



            {{-- Description --}}
            <p
                class="mx-auto mt-6
                       max-w-3xl
                       text-base leading-8
                       text-secondary-700
                       sm:text-lg">
                StockCore is an Australian-based inventory platform,
                helping growing businesses with practical, reliable
                software.
            </p>

        </div>


        {{-- business information card --}}

        <div
            class="mt-14 overflow-hidden
                   rounded-[2rem]
                   border border-primary-200
                   bg-white/90
                   shadow-[0_24px_70px_rgba(30,64,175,0.12)]
                   backdrop-blur-sm">

            {{-- Main content --}}
            <div class="grid grid-cols-1
                       md:grid-cols-3">

                {{-- company --}}
                <div
                    class="relative
                           px-7 py-9
                           sm:px-9
                           lg:px-12 lg:py-11">

                    {{-- Icon --}}
                    <div
                        class="flex h-14 w-14
                               items-center justify-center
                               rounded-full
                               bg-primary-100
                               text-primary-600">

                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 21V7l7-4 7 4v14" />

                            <path stroke-linecap="round" d="M8 10h2M14 10h2M8 14h2M14 14h2" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 21v-4h4v4" />
                        </svg>

                    </div>



                    {{-- Label --}}
                    <p
                        class="mt-6
                               text-[11px] font-bold
                               uppercase
                               tracking-[0.25em]
                               text-secondary-600">
                        Company
                    </p>



                    {{-- Company name --}}
                    <h3
                        class="mt-3
                               text-xl font-extrabold
                               tracking-[-0.025em]
                               text-secondary-950">
                        {{ $business['name'] }}
                    </h3>


                    <p
                        class="mt-2
                               text-base
                               text-secondary-600">
                        {{ $business['country'] }}
                    </p>



                    {{-- divider desktop --}}
                    <span
                        class="absolute right-0 top-10 bottom-10
                               hidden w-px
                               bg-primary-200
                               md:block"></span>

                </div>


                {{-- business details --}}
                <div
                    class="relative
                           border-t border-primary-100
                           px-7 py-9
                           sm:px-9
                           md:border-t-0
                           lg:px-12 lg:py-11">

                    {{-- Icon --}}
                    <div
                        class="flex h-14 w-14
                               items-center justify-center
                               rounded-full
                               bg-primary-100
                               text-primary-600">

                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h9l3 3v15H6V3z" />

                            <path stroke-linecap="round" d="M9 10h6M9 14h6M9 18h4" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 3v4h4" />
                        </svg>

                    </div>



                    <p
                        class="mt-6
                               text-[11px] font-bold
                               uppercase
                               tracking-[0.25em]
                               text-secondary-600">
                        Business details
                    </p>



                    {{-- ABN --}}
                    <div class="mt-3">

                        <p class="text-base font-bold
                                   text-secondary-950">
                            ABN
                        </p>

                        <p
                            class="mt-1
                                   text-base
                                   text-secondary-600">
                            {{ $business['abn'] }}
                        </p>

                    </div>



                    {{-- Office --}}
                    <div class="mt-4">

                        <p class="text-base font-bold
                                   text-secondary-950">
                            Registered office
                        </p>

                        <p
                            class="mt-1
                                   text-base
                                   text-secondary-600">
                            {{ $business['office'] }}
                        </p>

                    </div>



                    {{-- divider --}}
                    <span
                        class="absolute right-0 top-10 bottom-10
                               hidden w-px
                               bg-primary-200
                               md:block"></span>

                </div>


                {{-- contact --}}
                <div
                    class="border-t border-primary-100
                           px-7 py-9
                           sm:px-9
                           md:border-t-0
                           lg:px-12 lg:py-11">

                    {{-- Icon --}}
                    <div
                        class="flex h-14 w-14
                               items-center justify-center
                               rounded-full
                               bg-primary-100
                               text-primary-600">

                        <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5 4h4l2 5-3 2a15 15 0 006 6l2-3 5 2v4c0 1-1 2-2 2C10 22 2 14 2 5c0-1 1-1 3-1z" />
                        </svg>

                    </div>



                    <p
                        class="mt-6
                               text-[11px] font-bold
                               uppercase
                               tracking-[0.25em]
                               text-secondary-600">
                        Contact
                    </p>



                    {{-- Email --}}
                    <a href="mailto:{{ $business['email'] }}"
                        class="group mt-4
                               flex items-center gap-3
                               text-secondary-700
                               transition
                               hover:text-primary-700">

                        <svg class="h-5 w-5 shrink-0
                                   text-primary-600"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            aria-hidden="true">
                            <rect x="3" y="5" width="18" height="14" rx="2" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7l9 6 9-6" />
                        </svg>


                        <span class="text-sm
                                   sm:text-base">
                            {{ $business['email'] }}
                        </span>

                    </a>



                    {{-- Phone --}}
                    <a href="tel:{{ preg_replace('/\s+/', '', $business['phone']) }}"
                        class="group mt-4
                               flex items-center gap-3
                               text-secondary-700
                               transition
                               hover:text-primary-700">

                        <svg class="h-5 w-5 shrink-0
                                   text-primary-600"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5 4h4l2 5-3 2a15 15 0 006 6l2-3 5 2v4c0 1-1 2-2 2C10 22 2 14 2 5c0-1 1-1 3-1z" />
                        </svg>


                        <span class="text-sm
                                   sm:text-base">
                            {{ $business['phone'] }}
                        </span>

                    </a>



                    {{-- Hours --}}
                    <div
                        class="mt-4
                               flex items-center gap-3
                               text-secondary-700">

                        <svg class="h-5 w-5 shrink-0
                                   text-primary-600"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            aria-hidden="true">
                            <circle cx="12" cy="12" r="9" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2" />
                        </svg>


                        <span class="text-sm
                                   sm:text-base">
                            {{ $business['hours'] }}
                        </span>

                    </div>

                </div>

            </div>


            {{-- business footer --}}
            <div
                class="mx-7
                       border-t border-primary-200
                       py-6
                       sm:mx-9
                       lg:mx-12">

                <div class="flex items-center
                           justify-center gap-4">

                    <div
                        class="flex h-10 w-10
                               shrink-0
                               items-center justify-center
                               rounded-full
                               bg-primary-100
                               text-primary-600">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l4 4L19 7" />
                        </svg>

                    </div>


                    <p
                        class="text-sm font-medium
                               text-secondary-700
                               sm:text-base">
                        Australian owned and operated
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
