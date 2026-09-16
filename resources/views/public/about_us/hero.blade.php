{{-- ========================================================= --}}
{{-- ABOUT PAGE HERO --}}
{{-- resources/views/public/about/hero.blade.php --}}
{{-- ========================================================= --}}

<section id="about-hero" class="relative overflow-hidden border-t border-secondary-200 bg-white">

    {{-- ===================================================== --}}
    {{-- BACKGROUND --}}
    {{-- ===================================================== --}}

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Large soft circle behind right visual --}}
        <div
            class="absolute -right-[22rem] -top-[25rem]
                   h-[70rem] w-[70rem]
                   rounded-full bg-primary-50">
        </div>


        {{-- Small plus --}}
        <svg class="absolute right-[43%] top-[18%] hidden h-6 w-6 text-primary-100 lg:block" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 5v14M5 12h14" />
        </svg>


        {{-- Dot pattern --}}
        <div class="absolute right-[8%] top-[8%] hidden grid-cols-5 gap-3 xl:grid">
            @for ($i = 0; $i < 25; $i++)
                <span class="h-1 w-1 rounded-full bg-primary-100"></span>
            @endfor
        </div>

    </div>



    {{-- ===================================================== --}}
    {{-- HERO CONTENT --}}
    {{-- ===================================================== --}}

    <div
        class="relative mx-auto grid min-h-[700px] max-w-7xl
               gap-16 px-6 py-20
               sm:px-8
               lg:grid-cols-[0.88fr_1.12fr]
               lg:items-center
               lg:gap-12
               lg:px-8
               lg:py-24">

        {{-- ================================================= --}}
        {{-- LEFT CONTENT --}}
        {{-- ================================================= --}}

        <div class="relative z-10">


            {{-- Eyebrow --}}
            <div class="flex items-center gap-4">

                <p class="text-xs font-bold uppercase tracking-[0.22em] text-primary-600">
                    About StockCore
                </p>

                <span class="h-px w-16 bg-primary-200" aria-hidden="true"></span>

            </div>



            {{-- Heading --}}
            <h1
                class="mt-8 max-w-[610px]
                       text-[2.75rem] font-extrabold
                       leading-[1.06] tracking-[-0.045em]
                       text-secondary-950
                       sm:text-[3.5rem]
                       lg:text-[4rem]">

                Built for the gap
                <br>

                between
                <br>

                spreadsheets

                <span class="block text-primary-600">
                    and ERP.
                </span>

            </h1>



            {{-- Description --}}
            <p
                class="mt-7 max-w-[590px]
                       text-base leading-8 text-secondary-600
                       sm:text-lg">
                Growing businesses often outgrow spreadsheets long before
                they need a full ERP. StockCore was built to give them a
                focused, practical way to manage inventory in that middle
                ground.
            </p>



            {{-- ================================================= --}}
            {{-- TRUST POINTS --}}
            {{-- ================================================= --}}

            <div class="mt-12 grid max-w-[650px]
                       gap-6
                       sm:grid-cols-3">

                {{-- Built for real businesses --}}
                <div class="flex items-start gap-3">

                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center
                               rounded-xl bg-primary-50 text-primary-600">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2" />

                            <circle cx="9" cy="7" r="4" />

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                        </svg>

                    </div>


                    <div>

                        <p class="text-sm font-bold leading-5 text-secondary-900">
                            Built for
                            <br>
                            real businesses
                        </p>

                        <p class="mt-1 text-[11px] leading-5 text-secondary-500">
                            Practical, not theoretical.
                        </p>

                    </div>

                </div>



                {{-- Focused on inventory --}}
                <div class="flex items-start gap-3">

                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center
                               rounded-xl bg-primary-50 text-primary-600">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 7.5L12 12l7.5-4.5M12 12v9" />
                        </svg>

                    </div>


                    <div>

                        <p class="text-sm font-bold leading-5 text-secondary-900">
                            Focused on
                            <br>
                            inventory
                        </p>

                        <p class="mt-1 text-[11px] leading-5 text-secondary-500">
                            No unnecessary complexity.
                        </p>

                    </div>

                </div>



                {{-- Real team --}}
                <div class="flex items-start gap-3">

                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center
                               rounded-xl bg-primary-50 text-primary-600">

                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 2L4 14h7l-1 8 9-12h-7l1-8z" />
                        </svg>

                    </div>


                    <div>

                        <p class="text-sm font-bold leading-5 text-secondary-900">
                            Backed by
                            <br>
                            real people
                        </p>

                        <p class="mt-1 text-[11px] leading-5 text-secondary-500">
                            An Australian team you can reach.
                        </p>

                    </div>

                </div>

            </div>

        </div>



        {{-- ================================================= --}}
        {{-- RIGHT SIDE --}}
        {{-- ================================================= --}}

        <div class="relative z-10">


            {{-- ================================================= --}}
            {{-- THREE CARD VISUAL --}}
            {{-- ================================================= --}}

            <div class="relative mx-auto max-w-[720px] pt-24 sm:pt-28">


                {{-- ================================================= --}}
                {{-- CONNECTION LINE --}}
                {{-- Desktop only --}}
                {{-- ================================================= --}}

                <div class="pointer-events-none absolute
                           left-[14%] right-[14%]
                           top-[calc(50%+16px)]
                           z-0 hidden
                           -translate-y-1/2
                           sm:block"
                    aria-hidden="true">

                    {{-- Line --}}
                    <div
                        class="absolute left-0 right-0 top-1/2
                               h-px -translate-y-1/2 bg-primary-200">
                    </div>


                    {{-- Dot between Spreadsheet and StockCore --}}
                    <span
                        class="absolute left-[33.333%] top-1/2
                               h-3 w-3
                               -translate-x-1/2 -translate-y-1/2
                               rounded-full
                               bg-primary-400
                               ring-4 ring-primary-50"></span>


                    {{-- Dot between StockCore and ERP --}}
                    <span
                        class="absolute left-[66.666%] top-1/2
                               h-3 w-3
                               -translate-x-1/2 -translate-y-1/2
                               rounded-full
                               bg-primary-400
                               ring-4 ring-primary-50"></span>

                </div>



                {{-- ================================================= --}}
                {{-- CARDS --}}
                {{-- ================================================= --}}

                <div
                    class="relative z-10 grid gap-5
                           sm:grid-cols-3
                           sm:items-center">


                    {{-- ============================================= --}}
                    {{-- SPREADSHEETS --}}
                    {{-- ============================================= --}}

                    <article
                        class="relative flex min-h-[280px] flex-col
                               rounded-2xl
                               border border-secondary-200
                               bg-white
                               px-5 py-7
                               shadow-lg">

                        {{-- icon --}}
                        <div class="text-center">

                            <div
                                class="mx-auto flex h-12 w-12 items-center justify-center
                                       text-secondary-400">

                                <svg class="h-9 w-9" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.6" aria-hidden="true">
                                    <rect x="4" y="3" width="16" height="18" rx="2" />

                                    <path d="M4 8h16M4 13h16M9 3v18M15 3v18" />
                                </svg>

                            </div>


                            <h2 class="mt-4 text-base font-bold text-secondary-950">
                                Spreadsheets
                            </h2>

                        </div>



                        {{-- divider --}}
                        <div class="mt-6 border-t border-secondary-200 pt-5">

                            <ul class="space-y-3">


                                <li
                                    class="flex items-center gap-2.5
                                           text-[11px] text-secondary-600">

                                    <span
                                        class="flex h-5 w-5 shrink-0 items-center justify-center
                                               rounded-full
                                               bg-secondary-100
                                               text-secondary-400">
                                        ×
                                    </span>

                                    Manual updates

                                </li>



                                <li
                                    class="flex items-center gap-2.5
                                           text-[11px] text-secondary-600">

                                    <span
                                        class="flex h-5 w-5 shrink-0 items-center justify-center
                                               rounded-full
                                               bg-secondary-100
                                               text-secondary-400">
                                        ×
                                    </span>

                                    Prone to errors

                                </li>



                                <li
                                    class="flex items-center gap-2.5
                                           text-[11px] text-secondary-600">

                                    <span
                                        class="flex h-5 w-5 shrink-0 items-center justify-center
                                               rounded-full
                                               bg-secondary-100
                                               text-secondary-400">
                                        ×
                                    </span>

                                    Harder to scale

                                </li>

                            </ul>

                        </div>

                    </article>



                    {{-- ============================================= --}}
                    {{-- STOCKCORE --}}
                    {{-- ============================================= --}}

                    <div class="relative">


                        {{-- ================================================= --}}
                        {{-- ANNOTATION --}}
                        {{-- Attached directly to StockCore column --}}
                        {{-- ================================================= --}}

                        <div class="pointer-events-none absolute
           left-1/2 top-[-8.5rem]
           hidden
           -translate-x-1/2
           lg:block"
                            aria-hidden="true">
                            <div class="flex flex-col items-center">

                                <p
                                    class="rotate-[-4deg]
                   whitespace-nowrap
                   text-center
                   text-base font-semibold italic
                   leading-5
                   text-primary-600">
                                    The practical
                                    <br>
                                    middle ground.
                                </p>

                                <svg class="mt-1 h-[78px] w-[90px] text-primary-600" viewBox="0 0 90 78" fill="none"
                                    stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M28 6
                   C58 14, 64 36, 54 58" stroke-linecap="round" />

                                    <path d="M46 52
                   L54 60
                   L61 49" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>



                        <article
                            class="relative flex min-h-[330px] flex-col
                                   rounded-2xl
                                   border border-primary-200
                                   bg-primary-50
                                   px-6 py-7
                                   shadow-xl">

                            {{-- inner outline --}}
                            <div class="pointer-events-none absolute inset-2
                                       rounded-xl
                                       border border-primary-100"
                                aria-hidden="true"></div>


                            <div class="relative text-center">

                                {{-- logo mark --}}
                                <div
                                    class="mx-auto flex h-12 w-12 items-center justify-center
                                           rounded-xl
                                           bg-primary-600
                                           text-white
                                           shadow-lg">

                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.7" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z" />

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 7.5L12 12l7.5-4.5M12 12v9" />
                                    </svg>

                                </div>


                                <h2 class="mt-4 text-xl font-extrabold text-secondary-950">
                                    StockCore
                                </h2>

                            </div>



                            <div
                                class="relative mt-6
                                       border-t border-primary-200
                                       pt-5">

                                <ul class="space-y-4">


                                    <li
                                        class="flex items-start gap-3
                                               text-xs font-medium
                                               leading-5 text-secondary-700">

                                        <span
                                            class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center
                                                   rounded-full
                                                   bg-primary-600
                                                   text-white">

                                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 12l4 4L19 7" />
                                            </svg>

                                        </span>

                                        Focused on inventory

                                    </li>



                                    <li
                                        class="flex items-start gap-3
                                               text-xs font-medium
                                               leading-5 text-secondary-700">

                                        <span
                                            class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center
                                                   rounded-full
                                                   bg-primary-600
                                                   text-white">

                                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 12l4 4L19 7" />
                                            </svg>

                                        </span>

                                        Simple to use

                                    </li>



                                    <li
                                        class="flex items-start gap-3
                                               text-xs font-medium
                                               leading-5 text-secondary-700">

                                        <span
                                            class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center
                                                   rounded-full
                                                   bg-primary-600
                                                   text-white">

                                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 12l4 4L19 7" />
                                            </svg>

                                        </span>

                                        Built for growing businesses

                                    </li>

                                </ul>

                            </div>

                        </article>

                    </div>



                    {{-- ============================================= --}}
                    {{-- ERP SYSTEM --}}
                    {{-- ============================================= --}}

                    <article
                        class="relative flex min-h-[280px] flex-col
                               rounded-2xl
                               border border-secondary-200
                               bg-white
                               px-5 py-7
                               shadow-lg">

                        <div class="text-center">

                            <div
                                class="mx-auto flex h-12 w-12 items-center justify-center
                                       text-secondary-600">

                                <svg class="h-9 w-9" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.6" aria-hidden="true">
                                    <rect x="10" y="3" width="4" height="4" rx="1" />

                                    <rect x="3" y="17" width="4" height="4" rx="1" />

                                    <rect x="10" y="17" width="4" height="4" rx="1" />

                                    <rect x="17" y="17" width="4" height="4" rx="1" />

                                    <path d="M12 7v5M5 17v-3h14v3M12 12v5" />
                                </svg>

                            </div>


                            <h2 class="mt-4 text-base font-bold text-secondary-950">
                                ERP Systems
                            </h2>

                        </div>



                        <div class="mt-6 border-t border-secondary-200 pt-5">

                            <ul class="space-y-3">


                                <li
                                    class="flex items-center gap-2.5
                                           text-[11px] text-secondary-600">

                                    <span
                                        class="flex h-5 w-5 shrink-0 items-center justify-center
                                               rounded-full
                                               bg-secondary-100
                                               text-secondary-400">
                                        ×
                                    </span>

                                    Complex to implement

                                </li>



                                <li
                                    class="flex items-center gap-2.5
                                           text-[11px] text-secondary-600">

                                    <span
                                        class="flex h-5 w-5 shrink-0 items-center justify-center
                                               rounded-full
                                               bg-secondary-100
                                               text-secondary-400">
                                        ×
                                    </span>

                                    Expensive

                                </li>



                                <li
                                    class="flex items-center gap-2.5
                                           text-[11px] text-secondary-600">

                                    <span
                                        class="flex h-5 w-5 shrink-0 items-center justify-center
                                               rounded-full
                                               bg-secondary-100
                                               text-secondary-400">
                                        ×
                                    </span>

                                    More than you need

                                </li>

                            </ul>

                        </div>

                    </article>

                </div>



                {{-- ================================================= --}}
                {{-- POSITIONING SCALE --}}
                {{-- ================================================= --}}

                <div class="relative mt-12 hidden sm:block">

                    {{-- Line exactly between first + third centres --}}
                    <div class="absolute left-[16.666%] right-[16.666%]
                               top-[6px]
                               h-px
                               bg-secondary-200"
                        aria-hidden="true"></div>


                    <div class="relative grid grid-cols-3 text-center">

                        {{-- Too manual --}}
                        <div>

                            <span
                                class="mx-auto block
                                       h-3 w-3
                                       rounded-full
                                       bg-secondary-300
                                       ring-4 ring-white"></span>

                            <p
                                class="mt-5
                                       text-[9px] font-bold
                                       uppercase tracking-[0.18em]
                                       text-secondary-500">
                                Too manual
                            </p>

                            <p class="mt-1 text-[10px] text-secondary-400">
                                Great for simple needs
                            </p>

                        </div>



                        {{-- Just right --}}
                        <div>

                            <span
                                class="mx-auto block
                                       h-3 w-3
                                       rounded-full
                                       bg-primary-600
                                       ring-4 ring-primary-50"></span>

                            <p
                                class="mt-5
                                       text-[9px] font-bold
                                       uppercase tracking-[0.18em]
                                       text-secondary-900">
                                Just right
                            </p>

                            <p class="mt-1 text-[10px] text-secondary-500">
                                Inventory, without the bloat
                            </p>

                        </div>



                        {{-- Too complex --}}
                        <div>

                            <span
                                class="mx-auto block
                                       h-3 w-3
                                       rounded-full
                                       bg-secondary-300
                                       ring-4 ring-white"></span>

                            <p
                                class="mt-5
                                       text-[9px] font-bold
                                       uppercase tracking-[0.18em]
                                       text-secondary-500">
                                Too complex
                            </p>

                            <p class="mt-1 text-[10px] text-secondary-400">
                                Built for large enterprises
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        {{-- ================================================= --}}
        {{-- OUR STORY INDICATOR --}}
        {{-- ================================================= --}}

        <a href="#about-story"
            class="group absolute bottom-6 left-1/2
                   hidden -translate-x-1/2
                   flex-col items-center
                   text-secondary-400
                   transition
                   hover:text-primary-600
                   lg:flex"
            aria-label="Continue to our story">

            {{-- mouse --}}
            <span
                class="relative flex h-8 w-5 justify-center
                       rounded-full border border-secondary-300">

                <span
                    class="mt-1.5 h-1.5 w-0.5
                           rounded-full
                           bg-secondary-400
                           transition
                           group-hover:bg-primary-500"></span>

            </span>


            <span class="mt-2 h-3 w-px bg-secondary-300" aria-hidden="true"></span>


            <span
                class="mt-1
                       text-[9px] font-semibold
                       uppercase tracking-[0.22em]">
                Our story
            </span>


            <svg class="mt-1 h-4 w-4
                       transition
                       group-hover:translate-y-1"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
            </svg>

        </a>

    </div>

</section>
