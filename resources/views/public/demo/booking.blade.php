{{-- demo booking section --}}

@php

    $industries = [
        'Wholesale & Distribution',
        'Retail',
        'Food & Beverage',
        'Import / Export',
        'Manufacturing',
        '3PL / Warehousing',
        'E-commerce',
        'Automotive',
        'Healthcare',
        'Pharmaceutical',
        'Construction',
        'Electronics',
        'Fashion & Apparel',
        'Hospitality',
        'Agriculture',
        'Other',
    ];

    $stockSizes = [
        '1 – 100 items',
        '101 – 500 items',
        '501 – 1,000 items',
        '1,001 – 5,000 items',
        '5,001 – 10,000 items',
        '10,000+ items',
    ];

    #times

    $demoTimes = [
        '9:00 AM',
        '9:30 AM',
        '10:00 AM',
        '10:30 AM',
        '11:00 AM',
        '11:30 AM',
        '12:00 PM',
        '12:30 PM',
        '1:00 PM',
        '1:30 PM',
        '2:00 PM',
        '2:30 PM',
        '3:00 PM',
        '3:30 PM',
        '4:00 PM',
        '4:30 PM',
        '5:00 PM',
    ];

@endphp


<section id="demo-booking" class="relative overflow-hidden bg-background-muted py-20 sm:py-24 lg:py-28">

    {{-- background decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Left dots --}}
        <div
            class="absolute left-6 top-[180px]
                   hidden grid-cols-5 gap-3
                   opacity-40 lg:grid">

            @for ($i = 0; $i < 25; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-300"></span>
            @endfor

        </div>


        {{-- Left large curve --}}
        <div
            class="absolute
                   -bottom-[380px] -left-[300px]
                   h-[680px] w-[680px]
                   rounded-full
                   border-[90px]
                   border-primary-50">
        </div>


        {{-- Right large curve --}}
        <div
            class="absolute
                   -right-[370px] top-[160px]
                   h-[760px] w-[760px]
                   rounded-full
                   border-[110px]
                   border-primary-50">
        </div>


        {{-- Center glow --}}
        <div
            class="absolute
                   left-1/2 top-[30%]
                   h-[500px] w-[950px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/80
                   blur-[120px]">
        </div>

    </div>



    <div class="relative z-10
               mx-auto max-w-7xl
               px-6 sm:px-8 lg:px-8">


        {{-- section header --}}
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
                Schedule your demo
            </div>


            {{-- Heading --}}
            <h2
                class="mt-5
                       text-4xl font-extrabold
                       tracking-[-0.045em]
                       text-secondary-950
                       sm:text-5xl
                       lg:text-[3.5rem]">
                Let’s find a time that works for

                <span class="text-primary-600">
                    you
                </span>
            </h2>


            {{-- Description --}}
            <p
                class="mx-auto mt-5
                       max-w-3xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg">
                Fill in a few details and book a time with our team,
                or submit the form and we’ll be in touch to schedule
                your demo.
            </p>

        </div>



        {{-- form + calendar --}}
        <div
            class="mt-14
                   grid gap-6
                   lg:grid-cols-2
                   lg:items-stretch">


            {{-- left side form --}}
            <div
                class="rounded-[24px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_18px_55px_rgba(15,23,42,0.06)]
                       sm:p-8">


                {{-- Heading --}}
                <div class="flex items-start gap-4">

                    <div
                        class="flex h-14 w-14 shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            aria-hidden="true">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 20h4l11-11a2.8 2.8 0 0 0-4-4L4 16v4Z" />

                            <path stroke-linecap="round" d="m13.5 6.5 4 4" />

                        </svg>

                    </div>


                    <div>

                        <h3
                            class="text-xl font-bold
                                   tracking-[-0.025em]
                                   text-secondary-950
                                   sm:text-2xl">
                            Tell us about your business
                        </h3>

                        <p
                            class="mt-1
                                   text-sm leading-6
                                   text-secondary-500">
                            A few details so we can tailor the demo to your needs.
                        </p>

                    </div>

                </div>



                {{-- form --}}
                <form id="demo-booking-form" action="#" method="POST" class="mt-8">

                    @csrf


                    {{-- Selected date --}}
                    <input type="hidden" id="selected-demo-date" name="demo_date">


                    {{-- Selected time --}}
                    <input type="hidden" id="selected-demo-time" name="demo_time">



                    <div class="grid gap-5 sm:grid-cols-2">


                        {{-- FULL NAME --}}
                        <div>

                            <label for="demo-name"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                Full name

                                <span class="text-red-500">*</span>
                            </label>


                            <input id="demo-name" name="name" type="text" required placeholder="John Smith"
                                class="h-12 w-full
                                       rounded-lg
                                       border border-secondary-200
                                       bg-white
                                       px-4
                                       text-sm text-secondary-900
                                       outline-none
                                       transition
                                       placeholder:text-secondary-400
                                       focus:border-primary-400
                                       focus:ring-4
                                       focus:ring-primary-50">

                        </div>



                        {{-- BUSINESS NAME --}}
                        <div>

                            <label for="demo-business"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                Business name

                                <span class="text-red-500">*</span>
                            </label>


                            <input id="demo-business" name="business_name" type="text" required
                                placeholder="Acme Pty Ltd"
                                class="h-12 w-full
                                       rounded-lg
                                       border border-secondary-200
                                       bg-white
                                       px-4
                                       text-sm text-secondary-900
                                       outline-none
                                       transition
                                       placeholder:text-secondary-400
                                       focus:border-primary-400
                                       focus:ring-4
                                       focus:ring-primary-50">

                        </div>



                        {{-- EMAIL --}}
                        <div>

                            <label for="demo-email"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                Email address

                                <span class="text-red-500">*</span>
                            </label>


                            <input id="demo-email" name="email" type="email" required placeholder="you@company.com"
                                class="h-12 w-full
                                       rounded-lg
                                       border border-secondary-200
                                       bg-white
                                       px-4
                                       text-sm text-secondary-900
                                       outline-none
                                       transition
                                       placeholder:text-secondary-400
                                       focus:border-primary-400
                                       focus:ring-4
                                       focus:ring-primary-50">

                        </div>



                        {{-- PHONE --}}
                        <div>

                            <label for="demo-phone"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                Phone number

                                <span class="text-red-500">*</span>
                            </label>


                            <div class="flex">

                                <div
                                    class="flex h-12
                                           items-center
                                           rounded-l-lg
                                           border border-r-0
                                           border-secondary-200
                                           bg-secondary-50
                                           px-3
                                           text-sm font-medium
                                           text-secondary-700">
                                    🇦🇺

                                    <span class="ml-2">
                                        +61
                                    </span>
                                </div>


                                <input id="demo-phone" name="phone" type="tel" required placeholder="412 345 678"
                                    class="h-12 min-w-0 flex-1
                                           rounded-r-lg
                                           border border-secondary-200
                                           bg-white
                                           px-4
                                           text-sm text-secondary-900
                                           outline-none
                                           transition
                                           placeholder:text-secondary-400
                                           focus:border-primary-400
                                           focus:ring-4
                                           focus:ring-primary-50">

                            </div>

                        </div>


                        {{-- industry custom dropdown --}}
                        <div class="relative">

                            <label class="mb-2 block text-sm font-semibold text-secondary-950">
                                Industry
                                <span class="text-red-500">*</span>
                            </label>


                            {{-- Actual value submitted to Laravel --}}
                            <input type="hidden" name="industry" id="demo-industry" required>


                            {{-- Dropdown trigger --}}
                            <button type="button" id="industry-dropdown-button"
                                class="flex h-12 w-full
               items-center justify-between
               rounded-lg
               border border-secondary-200
               bg-white
               px-4
               text-left
               text-sm
               text-secondary-500
               outline-none
               transition
               hover:border-secondary-300
               focus:border-primary-400
               focus:ring-4
               focus:ring-primary-50">

                                <span id="industry-selected-label">
                                    Select your industry
                                </span>


                                <svg id="industry-dropdown-arrow"
                                    class="h-4 w-4 shrink-0
                   text-secondary-500
                   transition-transform duration-200"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
                                </svg>

                            </button>


                            {{-- Dropdown menu --}}
                            <div id="industry-dropdown"
                                class="absolute left-0 right-0 top-[76px]
               z-40 hidden
               overflow-hidden
               rounded-xl
               border border-secondary-200
               bg-white
               shadow-[0_16px_45px_rgba(15,23,42,0.12)]">

                                {{-- Scrollable list --}}
                                <div class="max-h-[260px]
                   overflow-y-auto
                   py-2">

                                    @foreach ($industries as $industry)
                                        <button type="button" data-industry="{{ $industry }}"
                                            class="industry-option
                           flex w-full
                           items-center justify-between
                           px-4 py-3
                           text-left
                           text-sm
                           text-secondary-700
                           transition
                           hover:bg-primary-50
                           hover:text-primary-700">

                                            <span>
                                                {{ $industry }}
                                            </span>


                                            <svg class="industry-check
                               hidden h-4 w-4
                               text-primary-600"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m5 12 4 4L19 7" />
                                            </svg>

                                        </button>
                                    @endforeach

                                </div>

                            </div>

                        </div>



                        {{-- other industry field --}}
                        <div id="other-industry-wrapper" class="hidden">

                            <label for="other-industry"
                                class="mb-2 block
               text-sm font-semibold
               text-secondary-950">
                                Industry name

                                <span class="text-red-500">*</span>
                            </label>


                            <input id="other-industry" name="other_industry" type="text"
                                placeholder="Enter your industry"
                                class="h-12 w-full
               rounded-lg
               border border-secondary-200
               bg-white
               px-4
               text-sm
               text-secondary-900
               outline-none
               transition
               placeholder:text-secondary-400
               focus:border-primary-400
               focus:ring-4
               focus:ring-primary-50">

                        </div>



                        {{-- STOCK SIZE --}}
                        <div>

                            <label for="demo-stock-size"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                Current stock size

                                <span
                                    class="font-normal
                                           text-secondary-500">
                                    (optional)
                                </span>
                            </label>


                            <select id="demo-stock-size" name="stock_size"
                                class="h-12 w-full
                                       rounded-lg
                                       border border-secondary-200
                                       bg-white
                                       px-4
                                       text-sm text-secondary-700
                                       outline-none
                                       transition
                                       focus:border-primary-400
                                       focus:ring-4
                                       focus:ring-primary-50">

                                <option value="">
                                    Select range
                                </option>


                                @foreach ($stockSizes as $stockSize)
                                    <option value="{{ $stockSize }}">
                                        {{ $stockSize }}
                                    </option>
                                @endforeach

                            </select>

                        </div>

                    </div>


                    {{-- optional message --}}
                    <div class="mt-5">

                        <label for="demo-message"
                            class="mb-2 block
                                   text-sm font-semibold
                                   text-secondary-950">
                            Anything specific you’d like to discuss?

                            <span class="font-normal
                                       text-secondary-500">
                                (optional)
                            </span>
                        </label>


                        <div class="relative">

                            <textarea id="demo-message" name="message" rows="4" maxlength="500"
                                placeholder="E.g. integrations, multi-warehouse setup, or specific challenges..."
                                class="w-full resize-none
                                       rounded-lg
                                       border border-secondary-200
                                       bg-white
                                       px-4 py-3 pb-8
                                       text-sm leading-6
                                       text-secondary-900
                                       outline-none
                                       transition
                                       placeholder:text-secondary-400
                                       focus:border-primary-400
                                       focus:ring-4
                                       focus:ring-primary-50"></textarea>


                            <span id="demo-message-count"
                                class="absolute
                                       bottom-3 right-3
                                       text-xs
                                       text-secondary-500">
                                0/500
                            </span>

                        </div>

                    </div>



                    {{-- submit button --}}
                    <button type="submit"
                        class="group mt-6
                               flex min-h-[54px] w-full
                               items-center justify-center
                               gap-3
                               rounded-xl
                               bg-primary-600
                               px-6
                               text-[15px]
                               font-semibold
                               text-white
                               shadow-[0_12px_30px_rgba(37,99,235,0.24)]
                               transition duration-300
                               hover:-translate-y-0.5
                               hover:bg-primary-700
                               hover:shadow-[0_16px_35px_rgba(37,99,235,0.30)]
                               hover:cursor-pointer">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" aria-hidden="true">
                            <rect x="4" y="5" width="16" height="15" rx="2" />

                            <path d="M8 3v4M16 3v4M4 10h16" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 15 2 2 4-4" />
                        </svg>

                        Book My Demo


                        <svg class="h-4 w-4
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>

                    </button>



                    {{-- SECURITY --}}
                    <div
                        class="mt-4
                               flex items-center justify-center
                               gap-2
                               text-center
                               text-xs
                               text-secondary-500">

                        <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="6" y="10" width="12" height="10" rx="2" />

                            <path stroke-linecap="round" d="M9 10V7a3 3 0 0 1 6 0v3" />
                        </svg>

                        Your information is secure and will only
                        be used to schedule your demo.

                    </div>

                </form>

            </div>


            {{-- right side calendar --}}
            <div
                class="rounded-[24px]
                       border border-primary-100
                       bg-primary-50/40
                       p-6
                       shadow-[0_18px_55px_rgba(15,23,42,0.05)]
                       sm:p-8">


                {{-- Heading --}}
                <div class="flex items-start gap-4">

                    <div
                        class="flex h-14 w-14 shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-primary-100
                               text-primary-600">

                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="4" y="5" width="16" height="15" rx="2" />

                            <path d="M8 3v4M16 3v4M4 10h16" />
                        </svg>

                    </div>


                    <div>

                        <h3
                            class="text-xl font-bold
                                   tracking-[-0.025em]
                                   text-secondary-950
                                   sm:text-2xl">
                            Choose a time
                        </h3>


                        <p
                            class="mt-1
                                   text-sm leading-6
                                   text-secondary-500">
                            Choose an available date and time.
                            The demo usually takes 15–30 minutes.
                        </p>

                    </div>

                </div>



                {{-- calendar container --}}
                <div
                    class="mt-8
                           overflow-hidden
                           rounded-2xl
                           border border-secondary-200
                           bg-white">

                    <div class="grid
                               lg:grid-cols-[minmax(0,1fr)_205px]">


                        {{-- calendar side --}}
                        <div class="p-5 sm:p-6">


                            {{-- MONTH NAVIGATION --}}
                            <div class="flex
                                       items-center justify-between">

                                {{-- PREVIOUS --}}
                                <button id="calendar-prev" type="button"
                                    class="flex h-10 w-10
                                           items-center justify-center
                                           rounded-lg
                                           text-primary-600
                                           transition
                                           hover:bg-primary-50
                                           disabled:cursor-not-allowed
                                           disabled:opacity-30"
                                    aria-label="Previous month">

                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6" />
                                    </svg>

                                </button>



                                {{-- CURRENT MONTH --}}
                                <div class="text-center">

                                    <p id="calendar-month-label"
                                        class="text-[15px]
                                               font-bold
                                               text-secondary-950">
                                    </p>

                                    <p
                                        class="mt-0.5
                                               text-[11px]
                                               text-secondary-400">
                                        Select an available date
                                    </p>

                                </div>



                                {{-- NEXT --}}
                                <button id="calendar-next" type="button"
                                    class="flex h-10 w-10
                                           items-center justify-center
                                           rounded-lg
                                           text-primary-600
                                           transition
                                           hover:bg-primary-50
                                           disabled:cursor-not-allowed
                                           disabled:opacity-30"
                                    aria-label="Next month">

                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                                    </svg>

                                </button>

                            </div>



                            {{-- WEEKDAY LABELS --}}
                            <div class="mt-5
                                       grid grid-cols-7">

                                @foreach (['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
                                    <div
                                        class="py-2 text-center
                                               text-[11px]
                                               font-semibold
                                               text-secondary-400">
                                        {{ $day }}
                                    </div>
                                @endforeach

                            </div>



                            {{-- dynamic calendar days --}}
                            <div id="calendar-days"
                                class="grid
                                       grid-cols-7
                                       gap-y-1.5">
                                {{-- JS renders dates here --}}
                            </div>

                        </div>


                        {{-- time side --}}
                        <div
                            class="border-t
                                   border-secondary-200
                                   bg-secondary-50/30
                                   p-5
                                   lg:border-l
                                   lg:border-t-0">

                            {{-- Selected date --}}
                            <div>

                                <p
                                    class="text-[10px]
                                           font-bold uppercase
                                           tracking-[0.12em]
                                           text-secondary-400">
                                    Available times
                                </p>

                                <p id="selected-demo-date-label"
                                    class="mt-1
                                           text-sm font-bold
                                           text-secondary-950">
                                    Select a date
                                </p>

                            </div>


                            {{-- scrollable time list --}}
                            <div id="demo-time-options"
                                class="mt-4
                                       max-h-[330px]
                                       space-y-2
                                       overflow-y-auto
                                       pr-1">

                                @foreach ($demoTimes as $time)
                                    <button type="button" data-demo-time="{{ $time }}"
                                        class="demo-time-slot
                                               flex h-11 w-full
                                               shrink-0
                                               items-center justify-center
                                               rounded-lg
                                               border
                                               border-primary-200
                                               bg-white
                                               px-3
                                               text-sm font-semibold
                                               text-primary-600
                                               transition-all duration-200

                                               hover:border-primary-600
                                               hover:bg-primary-600
                                               hover:text-white

                                               focus:outline-none
                                               focus:ring-4
                                               focus:ring-primary-100
                                               hover:cursor-pointer">
                                        {{ $time }}
                                    </button>
                                @endforeach

                            </div>



                            {{-- Time information --}}
                            <div
                                class="mt-4
                                       border-t
                                       border-secondary-200
                                       pt-4">

                                <div
                                    class="flex
                                           items-center gap-2
                                           text-xs
                                           text-secondary-500">

                                    <svg class="h-4 w-4
                                               text-primary-500"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <circle cx="12" cy="12" r="8" />

                                        <path stroke-linecap="round" d="M12 7v5l3 2" />
                                    </svg>

                                    15–30 minute session

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- contact fallback --}}
                <div
                    class="mt-6
                           flex items-start gap-4
                           rounded-2xl
                           bg-primary-50
                           p-5">

                    <div
                        class="flex h-11 w-11
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-primary-100
                               text-primary-600">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 8a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8Z" />

                            <path stroke-linecap="round" d="m16 10 4-2v8l-4-2" />
                        </svg>

                    </div>


                    <div>

                        <p class="text-sm font-bold
                                   text-secondary-950">
                            Prefer to let us contact you?
                        </p>


                        <p
                            class="mt-1
                                   text-sm leading-6
                                   text-secondary-600">
                            Submit your details and our team can get
                            in touch within 1 business day to arrange
                            a suitable time.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- ressaurance strip --}}
        <div
            class="mx-auto mt-10
                   grid max-w-5xl
                   gap-6
                   md:grid-cols-3">


            {{-- ITEM 1 --}}
            <div
                class="flex items-center gap-4
                       md:border-r
                       md:border-secondary-200
                       md:pr-6">

                <div
                    class="flex h-12 w-12
                           shrink-0
                           items-center justify-center
                           rounded-full
                           bg-primary-50
                           text-primary-600">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3 5 6v5c0 4.8 2.8 8.4 7 10 4.2-1.6 7-5.2 7-10V6l-7-3Z" />

                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4" />
                    </svg>

                </div>


                <div>

                    <p class="text-sm font-bold
                               text-secondary-950">
                        No obligation
                    </p>

                    <p
                        class="mt-1
                               text-sm
                               text-secondary-500">
                        Just a friendly conversation.
                    </p>

                </div>

            </div>



            {{-- ITEM 2 --}}
            <div
                class="flex items-center gap-4
                       md:border-r
                       md:border-secondary-200
                       md:pr-6">

                <div
                    class="flex h-12 w-12
                           shrink-0
                           items-center justify-center
                           rounded-full
                           bg-primary-50
                           text-primary-600">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <circle cx="9" cy="8" r="3" />

                        <circle cx="17" cy="9" r="2.5" />

                        <path stroke-linecap="round" d="M3 19a6 6 0 0 1 12 0M14 14.5a5 5 0 0 1 7 4.5" />
                    </svg>

                </div>


                <div>

                    <p class="text-sm font-bold
                               text-secondary-950">
                        Australian based team
                    </p>

                    <p
                        class="mt-1
                               text-sm
                               text-secondary-500">
                        Real people, local support.
                    </p>

                </div>

            </div>



            {{-- ITEM 3 --}}
            <div class="flex items-center gap-4">

                <div
                    class="flex h-12 w-12
                           shrink-0
                           items-center justify-center
                           rounded-full
                           bg-primary-50
                           text-primary-600">

                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13 2 4.5 13H11l-1 9 8.5-11H12l1-9Z" />
                    </svg>

                </div>


                <div>

                    <p class="text-sm font-bold
                               text-secondary-950">
                        Fast response
                    </p>

                    <p
                        class="mt-1
                               text-sm
                               text-secondary-500">
                        We’ll reply within 1 business day.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- demo booking jquery code --}}
@push('scripts')
    <script>
        $(document).ready(function() {
            //   industry dropdown

            const $industryButton = $('#industry-dropdown-button');
            const $industryDropdown = $('#industry-dropdown');
            const $industryInput = $('#demo-industry');
            const $industryLabel = $('#industry-selected-label');
            const $industryArrow = $('#industry-dropdown-arrow');

            const $otherWrapper = $('#other-industry-wrapper');
            const $otherInput = $('#other-industry');


            //    open close drowndown

            $industryButton.on('click', function(event) {

                event.stopPropagation();

                $industryDropdown.toggleClass('hidden');

                $industryArrow.toggleClass('rotate-180');

            });


            // select industry

            $('.industry-option').on('click', function() {

                const selectedIndustry =
                    $(this).data('industry');


                //   set value 
                $industryInput.val(selectedIndustry);


                //    update visible layer
                $industryLabel
                    .text(selectedIndustry)
                    .removeClass('text-secondary-500')
                    .addClass('text-secondary-900');


                $('.industry-check')
                    .addClass('hidden');


                $(this)
                    .find('.industry-check')
                    .removeClass('hidden');


                //    close dropdown
                $industryDropdown.addClass('hidden');

                $industryArrow.removeClass('rotate-180');


                //   other industries
                if (selectedIndustry === 'Other') {

                    $otherWrapper.removeClass('hidden');

                    $otherInput
                        .prop('required', true)
                        .focus();

                } else {

                    $otherWrapper.addClass('hidden');

                    $otherInput
                        .prop('required', false)
                        .val('');

                }

            });


            //    close dropdown when clicking outside. 

            $(document).on('click', function(event) {

                if (
                    !$(event.target).closest(
                        '#industry-dropdown-button, #industry-dropdown'
                    ).length
                ) {

                    $industryDropdown.addClass('hidden');

                    $industryArrow.removeClass('rotate-180');

                }

            });

            //    calendar configuration
            const today = new Date();

            today.setHours(0, 0, 0, 0);


            //    currenlty displayed month
            let currentMonth = new Date(
                today.getFullYear(),
                today.getMonth(),
                1
            );


            // user now allowed before this month
            const minimumMonth = new Date(
                today.getFullYear(),
                today.getMonth(),
                1
            );

            // booking up to 12 months ahead
            const maximumMonth = new Date(
                today.getFullYear(),
                today.getMonth() + 12,
                1
            );

            // currently selected booking date
            let selectedDate = null;


            // month names

            const monthNames = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December'
            ];

            // formatting date

            function formatDateForInput(date) {

                const year =
                    date.getFullYear();

                const month =
                    String(date.getMonth() + 1)
                    .padStart(2, '0');

                const day =
                    String(date.getDate())
                    .padStart(2, '0');


                return `${year}-${month}-${day}`;
            }



            //   human readable date

            function formatDateLabel(date) {

                return date.toLocaleDateString(
                    'en-AU', {
                        weekday: 'long',
                        day: 'numeric',
                        month: 'short'
                    }
                );

            }



            //    check if same day

            function isSameDate(dateA, dateB) {

                if (!dateA || !dateB) {
                    return false;
                }

                return (
                    dateA.getFullYear() === dateB.getFullYear() &&
                    dateA.getMonth() === dateB.getMonth() &&
                    dateA.getDate() === dateB.getDate()
                );

            }



            //   calendar renderer

            function renderCalendar() {

                const year =
                    currentMonth.getFullYear();

                const month =
                    currentMonth.getMonth();



                $('#calendar-month-label').text(
                    `${monthNames[month]} ${year}`
                );


                const daysInMonth =
                    new Date(
                        year,
                        month + 1,
                        0
                    ).getDate();



                const firstDay =
                    new Date(
                        year,
                        month,
                        1
                    ).getDay();


                const $calendar =
                    $('#calendar-days');


                $calendar.empty();



                //    empty ceels before month begins

                for (
                    let blank = 0; blank < firstDay; blank++
                ) {

                    $calendar.append(`
                <span class="h-10 w-10"></span>
            `);

                }


                // create actual dates

                for (
                    let day = 1; day <= daysInMonth; day++
                ) {

                    const date =
                        new Date(
                            year,
                            month,
                            day
                        );


                    date.setHours(
                        0,
                        0,
                        0,
                        0
                    );


                    const dayOfWeek =
                        date.getDay();


                    const isWeekend =
                        dayOfWeek === 0 ||
                        dayOfWeek === 6;


                    const isPast =
                        date < today;


                    const disabled =
                        isWeekend ||
                        isPast;


                    const selected =
                        isSameDate(
                            date,
                            selectedDate
                        );


                    let buttonClasses = `
                demo-calendar-day
                mx-auto
                flex h-10 w-10
                items-center justify-center
                rounded-full
                text-sm
                transition-all duration-200
            `;


                    if (disabled) {

                        buttonClasses += `
                    cursor-not-allowed
                    text-secondary-300
                `;

                    } else if (selected) {

                        buttonClasses += `
                    bg-primary-600
                    font-semibold
                    text-white
                    shadow-[0_7px_16px_rgba(37,99,235,0.25)]
                `;

                    } else {

                        buttonClasses += `
                    text-secondary-800
                    hover:bg-primary-50
                    hover:text-primary-700
                `;

                    }


                    const disabledAttribute =
                        disabled ?
                        'disabled' :
                        '';


                    const dateValue =
                        formatDateForInput(date);


                    $calendar.append(`
                <button
                    type="button"
                    data-date="${dateValue}"
                    class="${buttonClasses}
                    hover:cursor-pointer"
                    ${disabledAttribute}
                     
                >
                    ${day}
                </button>
            `);

                }



                //  prev button state
                const atMinimumMonth =
                    currentMonth.getFullYear() ===
                    minimumMonth.getFullYear() &&
                    currentMonth.getMonth() ===
                    minimumMonth.getMonth();


                $('#calendar-prev')
                    .prop(
                        'disabled',
                        atMinimumMonth
                    );



                //   nxt button state

                const atMaximumMonth =
                    currentMonth.getFullYear() ===
                    maximumMonth.getFullYear() &&
                    currentMonth.getMonth() ===
                    maximumMonth.getMonth();


                $('#calendar-next')
                    .prop(
                        'disabled',
                        atMaximumMonth
                    );

            }



            //    prev month

            $('#calendar-prev').on(
                'click',
                function() {

                    const previousMonth =
                        new Date(
                            currentMonth.getFullYear(),
                            currentMonth.getMonth() - 1,
                            1
                        );


                    if (
                        previousMonth >= minimumMonth
                    ) {

                        currentMonth =
                            previousMonth;

                        renderCalendar();

                    }

                }
            );



            //    nxt month

            $('#calendar-next').on(
                'click',
                function() {

                    const nextMonth =
                        new Date(
                            currentMonth.getFullYear(),
                            currentMonth.getMonth() + 1,
                            1
                        );


                    if (
                        nextMonth <= maximumMonth
                    ) {

                        currentMonth =
                            nextMonth;

                        renderCalendar();

                    }

                }
            );



            /*
            |--------------------------------------------------------------------------
            | Select Calendar Date
            |--------------------------------------------------------------------------
            |
            | Calendar dates are generated dynamically,
            | therefore event delegation is used.
            |
            */

            $('#calendar-days').on(
                'click',
                '.demo-calendar-day:not(:disabled)',
                function() {

                    const dateValue =
                        $(this).data('date');


                    const dateParts =
                        dateValue
                        .split('-')
                        .map(Number);


                    selectedDate =
                        new Date(
                            dateParts[0],
                            dateParts[1] - 1,
                            dateParts[2]
                        );


                    /*
                     * Save selected date.
                     */
                    $('#selected-demo-date')
                        .val(dateValue);


                    /*
                     * Update label.
                     */
                    $('#selected-demo-date-label')
                        .text(
                            formatDateLabel(
                                selectedDate
                            )
                        );


                    /*
                     * Reset currently selected time
                     * whenever date changes.
                     */
                    $('#selected-demo-time')
                        .val('');


                    $('.demo-time-slot')
                        .removeClass(
                            'border-primary-600 bg-primary-600 text-white'
                        )
                        .addClass(
                            'border-primary-200 bg-white text-primary-600'
                        );


                    /*
                     * Re-render calendar so the
                     * selected date receives active styling.
                     */
                    renderCalendar();

                }
            );



            //  select time

            $('.demo-time-slot').on(
                'click',
                function() {

                    /*
                     * Require date first.
                     */
                    if (!selectedDate) {

                        $('#selected-demo-date-label')
                            .text(
                                'Please select a date first'
                            )
                            .addClass(
                                'text-red-500'
                            );


                        setTimeout(
                            function() {

                                $('#selected-demo-date-label')
                                    .removeClass(
                                        'text-red-500'
                                    )
                                    .text(
                                        'Select a date'
                                    );

                            },
                            1800
                        );


                        return;
                    }


                    const time =
                        $(this)
                        .data('demo-time');

                    // reset all time buttons
                    $('.demo-time-slot')
                        .removeClass(
                            'border-primary-600 bg-primary-600 text-white'
                        )
                        .addClass(
                            'border-primary-200 bg-white text-primary-600'
                        );

                    // activate selected time
                    $(this)
                        .removeClass(
                            'border-primary-200 bg-white text-primary-600'
                        )
                        .addClass(
                            'border-primary-600 bg-primary-600 text-white'
                        );

                    // save selected time
                    $('#selected-demo-time')
                        .val(time);

                }
            );


            // text are counter 

            $('#demo-message').on(
                'input',
                function() {

                    const length =
                        $(this)
                        .val()
                        .length;


                    $('#demo-message-count')
                        .text(
                            `${length}/500`
                        );

                }
            );



            /*
            |--------------------------------------------------------------------------
            | Temporary Form Submission
            |--------------------------------------------------------------------------
            |
            | Remove event.preventDefault() once your
            | Laravel POST route/controller is ready.
            |
            */

            $('#demo-booking-form').on(
                'submit',
                function(event) {

                    event.preventDefault();


                    const selectedDemoDate =
                        $('#selected-demo-date')
                        .val();


                    const selectedDemoTime =
                        $('#selected-demo-time')
                        .val();


                    /*
                     * Date/time are optional according
                     * to your requirement because users
                     * may let StockCore contact them.
                     */

                    console.log({
                        name: $('#demo-name').val(),

                        business: $('#demo-business').val(),

                        email: $('#demo-email').val(),

                        phone: $('#demo-phone').val(),

                        industry: $('#demo-industry').val(),

                        stockSize: $('#demo-stock-size').val(),

                        demoDate: selectedDemoDate,

                        demoTime: selectedDemoTime,

                        message: $('#demo-message').val()
                    });

                }
            );


            // initial calendar rendererr


            renderCalendar();

        });
    </script>
@endpush
