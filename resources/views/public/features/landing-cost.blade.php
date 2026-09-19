@extends('layouts.public')

@section('title', 'Landing Cost | StockCore')

@section('content')

    <main class="overflow-hidden">

        {{-- ====================================================================== --}}
        {{-- LANDING COST — HERO SECTION --}}
        {{-- ====================================================================== --}}

        <section
            class="relative overflow-hidden
               bg-gradient-to-b
               from-primary-50/80
               via-background
               to-white">

            {{-- ================================================================ --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================ --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">


                {{-- Left large soft circle --}}
                <div
                    class="absolute
                       -left-[180px]
                       top-[60px]
                       h-[430px]
                       w-[430px]
                       rounded-full
                       bg-primary-100/30">
                </div>


                {{-- Left lower circle --}}
                <div
                    class="absolute
                       -left-[100px]
                       bottom-[-170px]
                       h-[350px]
                       w-[350px]
                       rounded-full
                       bg-primary-50/70">
                </div>


                {{-- Left dotted arc --}}
                <div
                    class="absolute
                       -left-[165px]
                       top-[-175px]
                       h-[500px]
                       w-[500px]
                       rounded-full
                       border
                       border-dashed
                       border-primary-300/60">
                </div>


                {{-- Left floating dot --}}
                <div
                    class="absolute
                       left-[16%]
                       top-[135px]
                       hidden
                       h-3
                       w-3
                       rounded-full
                       bg-primary-400/70
                       lg:block">
                </div>



                {{-- Right large soft circle --}}
                <div
                    class="absolute
                       -right-[190px]
                       top-[100px]
                       h-[470px]
                       w-[470px]
                       rounded-full
                       bg-primary-100/25">
                </div>


                {{-- Right lower circle --}}
                <div
                    class="absolute
                       -right-[80px]
                       bottom-[-200px]
                       h-[380px]
                       w-[380px]
                       rounded-full
                       bg-primary-50/70">
                </div>


                {{-- Right dotted arc --}}
                <div
                    class="absolute
                       -right-[160px]
                       top-[-230px]
                       h-[560px]
                       w-[560px]
                       rounded-full
                       border
                       border-dashed
                       border-primary-300/60">
                </div>


                {{-- Right floating dot --}}
                <div
                    class="absolute
                       right-[14%]
                       top-[260px]
                       hidden
                       h-3
                       w-3
                       rounded-full
                       bg-primary-400/70
                       lg:block">
                </div>



                {{-- Center glow --}}
                <div
                    class="absolute
                       left-1/2
                       top-[180px]
                       h-[350px]
                       w-[700px]
                       -translate-x-1/2
                       rounded-full
                       bg-primary-100/25
                       blur-[120px]">
                </div>

            </div>



            {{-- ================================================================ --}}
            {{-- HERO CONTENT --}}
            {{-- ================================================================ --}}

            <div
                class="relative z-10
                   mx-auto
                   max-w-7xl
                   px-6
                   pb-20
                   pt-10
                   sm:px-8
                   sm:pb-24
                   lg:px-10
                   lg:pb-28
                   lg:pt-12">

                <div class="mx-auto
                       max-w-5xl
                       text-center">


                    {{-- ======================================================== --}}
                    {{-- BREADCRUMB --}}
                    {{-- ======================================================== --}}

                    <nav aria-label="Breadcrumb"
                        class="flex flex-wrap
                           items-center
                           justify-center
                           gap-2
                           text-xs
                           font-medium
                           text-secondary-500
                           sm:text-sm">

                        <a href="{{ url('/') }}"
                            class="transition
                               hover:text-primary-600">
                            Home
                        </a>


                        <svg class="h-4 w-4
                               text-secondary-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 5 7 7-7 7" />
                        </svg>


                        <a href="{{ url('/features') }}"
                            class="transition
                               hover:text-primary-600">
                            Features
                        </a>


                        <svg class="h-4 w-4
                               text-secondary-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 5 7 7-7 7" />
                        </svg>


                        <span class="font-semibold
                               text-secondary-700">
                            Landing Cost
                        </span>

                    </nav>



                    {{-- ======================================================== --}}
                    {{-- FEATURE BADGE --}}
                    {{-- ======================================================== --}}

                    <div
                        class="mt-8
                           inline-flex
                           items-center
                           gap-2.5
                           rounded-full
                           border
                           border-primary-100
                           bg-primary-100/70
                           px-4
                           py-2.5
                           text-xs
                           font-bold
                           uppercase
                           tracking-[0.06em]
                           text-primary-700
                           shadow-sm
                           backdrop-blur-sm">

                        {{-- Database / layers icon --}}
                        <span
                            class="flex
                               h-7
                               w-7
                               items-center
                               justify-center
                               rounded-full
                               bg-primary-600
                               text-white">

                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <ellipse cx="12" cy="5" rx="7" ry="3" />

                                <path stroke-linecap="round" d="M5 5v5c0 1.7 3.1 3 7 3s7-1.3 7-3V5" />

                                <path stroke-linecap="round" d="M5 10v5c0 1.7 3.1 3 7 3s7-1.3 7-3v-5" />
                            </svg>

                        </span>

                        Landing Cost

                    </div>



                    {{-- ======================================================== --}}
                    {{-- MAIN HEADING --}}
                    {{-- ======================================================== --}}

                    <h1
                        class="mx-auto
                           mt-8
                           max-w-[1050px]
                           text-4xl
                           font-extrabold
                           leading-[1.05]
                           tracking-[-0.045em]
                           text-secondary-900
                           sm:text-5xl
                           lg:text-[64px]
                           lg:leading-[1.04]">

                        Calculate True Product Cost with

                        <span class="mt-1 block
                               text-primary-600">
                            Automated Landed Cost Tracking
                        </span>

                    </h1>



                    {{-- ======================================================== --}}
                    {{-- DESCRIPTION --}}
                    {{-- ======================================================== --}}

                    <p
                        class="mx-auto
                           mt-7
                           max-w-3xl
                           text-base
                           leading-7
                           text-secondary-600
                           sm:text-lg
                           sm:leading-8">
                        Go beyond the supplier invoice. StockCore helps you calculate
                        your real product cost by including freight, customs duties,
                        taxes, insurance and other charges — so you always know what
                        your inventory truly costs.
                    </p>



                    {{-- ======================================================== --}}
                    {{-- CTA BUTTONS --}}
                    {{-- ======================================================== --}}

                    <div
                        class="mt-9
                           flex
                           flex-col
                           items-center
                           justify-center
                           gap-4
                           sm:flex-row">


                        {{-- Primary CTA --}}
                        <a href="{{ url('/signup') }}"
                            class="group
                               inline-flex
                               w-full
                               items-center
                               justify-center
                               gap-3
                               rounded-xl
                               bg-primary-600
                               px-7
                               py-4
                               text-sm
                               font-bold
                               text-white
                               shadow-[0_14px_35px_rgba(37,99,235,0.24)]
                               transition
                               duration-300
                               hover:-translate-y-0.5
                               hover:bg-primary-700
                               hover:shadow-[0_18px_42px_rgba(37,99,235,0.32)]
                               sm:w-auto
                               sm:min-w-[245px]">

                            Start 14-Day Free Trial


                            <svg class="h-4
                                   w-4
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>



                        {{-- Calculator CTA --}}
                        <a href="#landing-cost-calculator"
                            class="group
                               inline-flex
                               w-full
                               items-center
                               justify-center
                               gap-3
                               rounded-xl
                               border
                               border-secondary-200
                               bg-white
                               px-7
                               py-3.5
                               text-sm
                               font-bold
                               text-secondary-900
                               shadow-sm
                               transition
                               duration-300
                               hover:-translate-y-0.5
                               hover:border-primary-200
                               hover:shadow-md
                               sm:w-auto
                               sm:min-w-[245px]">

                            {{-- Play / calculator icon --}}
                            <span
                                class="flex
                                   h-9
                                   w-9
                                   items-center
                                   justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-white
                                   transition
                                   duration-300
                                   group-hover:bg-primary-700">

                                <svg class="ml-0.5
                                       h-3.5
                                       w-3.5"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>

                            </span>

                            Try Interactive Calculator

                        </a>

                    </div>



                    {{-- ======================================================== --}}
                    {{-- TRUST ITEMS --}}
                    {{-- ======================================================== --}}

                    <div
                        class="mt-10
                           flex
                           flex-col
                           items-center
                           justify-center
                           gap-4
                           sm:flex-row
                           sm:flex-wrap
                           sm:gap-0">


                        {{-- Item 1 --}}
                        <div
                            class="flex
                               items-center
                               gap-2.5
                               px-5">

                            <span
                                class="flex
                                   h-7
                                   w-7
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-white">

                                <svg class="h-3.5
                                       w-3.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            <span
                                class="text-sm
                                   font-medium
                                   text-secondary-600">
                                No credit card required
                            </span>

                        </div>



                        {{-- Divider --}}
                        <div
                            class="hidden
                               h-7
                               w-px
                               bg-secondary-200
                               sm:block">
                        </div>



                        {{-- Item 2 --}}
                        <div
                            class="flex
                               items-center
                               gap-2.5
                               px-5">

                            <span
                                class="flex
                                   h-7
                                   w-7
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-white">

                                <svg class="h-3.5
                                       w-3.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            <span
                                class="text-sm
                                   font-medium
                                   text-secondary-600">
                                Set up in minutes
                            </span>

                        </div>



                        {{-- Divider --}}
                        <div
                            class="hidden
                               h-7
                               w-px
                               bg-secondary-200
                               sm:block">
                        </div>



                        {{-- Item 3 --}}
                        <div
                            class="flex
                               items-center
                               gap-2.5
                               px-5">

                            <span
                                class="flex
                                   h-7
                                   w-7
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-full
                                   bg-primary-600
                                   text-white">

                                <svg class="h-3.5
                                       w-3.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            <span
                                class="text-sm
                                   font-medium
                                   text-secondary-600">
                                Cancel anytime
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            {{-- ================================================================ --}}
            {{-- BOTTOM FADE --}}
            {{-- Gives smoother transition into next section --}}
            {{-- ================================================================ --}}

            <div
                class="pointer-events-none
                   absolute
                   inset-x-0
                   bottom-0
                   h-24
                   bg-gradient-to-b
                   from-transparent
                   to-white/70">
            </div>

        </section>


        {{-- ====================================================================== --}}
        {{-- INTERACTIVE LANDED COST CALCULATOR --}}
        {{-- ====================================================================== --}}

        <section id="landing-cost-calculator"
            class="relative overflow-hidden bg-background px-4 py-20 sm:px-6 lg:px-8 lg:py-24">

            {{-- ================================================================ --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================ --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Left glow --}}
                <div
                    class="absolute -left-40 top-20
                   h-[420px] w-[420px]
                   rounded-full
                   bg-primary-100/50
                   blur-[80px]">
                </div>

                {{-- Right glow --}}
                <div
                    class="absolute -right-40 top-12
                   h-[420px] w-[420px]
                   rounded-full
                   bg-primary-100/40
                   blur-[90px]">
                </div>

                {{-- Left arc --}}
                <div
                    class="absolute -left-[220px] -top-[250px]
                   h-[520px] w-[520px]
                   rounded-full
                   border border-dashed border-primary-200">
                </div>

                {{-- Right arc --}}
                <div
                    class="absolute -right-[220px] -top-[260px]
                   h-[540px] w-[540px]
                   rounded-full
                   border border-dashed border-primary-200">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================ --}}
                {{-- SECTION HEADING --}}
                {{-- ================================================================ --}}

                <div class="mx-auto max-w-3xl text-center">

                    <p class="text-xs font-bold uppercase
                       tracking-[0.18em] text-primary-600">
                        Precision Modeling
                    </p>

                    <h2
                        class="mt-3 text-3xl font-bold
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        Interactive Landed Cost Calculator
                    </h2>

                    <p
                        class="mx-auto mt-4 max-w-2xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg">
                        See how item costs, freight and duty allocations affect your
                        product's real cost. Adjust the numbers and instantly see your
                        landed cost, margin impact and total purchase value.
                    </p>

                </div>



                {{-- ================================================================ --}}
                {{-- CALCULATOR SHELL --}}
                {{-- ================================================================ --}}

                <div
                    class="mt-12 overflow-hidden
                   rounded-[28px]
                   border border-primary-100
                   bg-white
                   shadow-[0_25px_80px_rgba(37,99,235,0.10)]
                   lg:grid lg:grid-cols-[1fr_1.05fr]">


                    {{-- ============================================================ --}}
                    {{-- LEFT SIDE — INPUTS --}}
                    {{-- ============================================================ --}}

                    <div
                        class="border-b border-primary-100
                       p-6
                       sm:p-8
                       lg:border-b-0
                       lg:border-r
                       lg:p-10">


                        {{-- Header --}}
                        <div
                            class="flex flex-col gap-4
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <div class="flex items-center gap-4">

                                {{-- Icon --}}
                                <div
                                    class="flex h-14 w-14
                                   shrink-0 items-center justify-center
                                   rounded-2xl
                                   bg-primary-50
                                   text-primary-600">

                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m12 3 8 4-8 4-8-4 8-4Zm-8 4v10l8 4 8-4V7" />
                                    </svg>

                                </div>


                                <div>

                                    <h3
                                        class="text-xl font-bold
                                       text-secondary-900">
                                        Batch Parameters
                                    </h3>

                                    <p class="mt-1 text-sm
                                       text-secondary-500">
                                        Enter your purchase details to calculate landed cost.
                                    </p>

                                </div>

                            </div>



                            {{-- Currency --}}
                            <div>

                                <select id="landing-currency"
                                    class="rounded-xl
                                   border border-primary-100
                                   bg-background-muted
                                   px-4 py-2.5
                                   text-sm font-semibold
                                   text-primary-700
                                   outline-none
                                   focus:border-primary-400
                                   focus:ring-4
                                   focus:ring-primary-100">
                                    <option value="AUD">AUD (A$)</option>
                                </select>

                            </div>

                        </div>



                        {{-- ======================================================== --}}
                        {{-- INPUT GRID --}}
                        {{-- ======================================================== --}}

                        <div class="mt-8 grid gap-5
                           sm:grid-cols-2">


                            {{-- Item Price --}}
                            <div>

                                <label for="landing-item-price"
                                    class="mb-2 block
                                   text-sm font-semibold
                                   text-secondary-800">
                                    Item Purchase Price (FOB)
                                </label>


                                <div class="relative">

                                    <span
                                        class="absolute left-4 top-1/2
                                       -translate-y-1/2
                                       text-sm font-semibold
                                       text-secondary-400">
                                        $
                                    </span>


                                    <input id="landing-item-price" type="number" value="15" min="0"
                                        step="0.01"
                                        class="w-full rounded-xl
                                       border border-secondary-200
                                       bg-white
                                       py-3.5 pl-10 pr-4
                                       text-sm font-semibold
                                       text-secondary-900
                                       outline-none
                                       transition
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">

                                </div>

                            </div>



                            {{-- Quantity --}}
                            <div>

                                <label for="landing-quantity"
                                    class="mb-2 block
                                   text-sm font-semibold
                                   text-secondary-800">
                                    Purchase Quantity
                                </label>


                                <div class="relative">

                                    <input id="landing-quantity" type="number" value="1000" min="1"
                                        step="1"
                                        class="w-full rounded-xl
                                       border border-secondary-200
                                       bg-white
                                       py-3.5 pl-4 pr-16
                                       text-sm font-semibold
                                       text-secondary-900
                                       outline-none
                                       transition
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">

                                    <span
                                        class="absolute right-4 top-1/2
                                       -translate-y-1/2
                                       text-xs font-medium
                                       text-secondary-400">
                                        Units
                                    </span>

                                </div>

                            </div>



                            {{-- Freight --}}
                            <div>

                                <label for="landing-freight"
                                    class="mb-2 block
                                   text-sm font-semibold
                                   text-secondary-800">
                                    Freight / Ocean Cost
                                </label>


                                <div class="relative">

                                    <span
                                        class="absolute left-4 top-1/2
                                       -translate-y-1/2
                                       text-sm font-semibold
                                       text-secondary-400">
                                        $
                                    </span>

                                    <input id="landing-freight" type="number" value="2500" min="0"
                                        step="0.01"
                                        class="w-full rounded-xl
                                       border border-secondary-200
                                       py-3.5 pl-10 pr-4
                                       text-sm font-semibold
                                       text-secondary-900
                                       outline-none
                                       transition
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">

                                </div>

                            </div>



                            {{-- Duty --}}
                            <div>

                                <label for="landing-duty"
                                    class="mb-2 block
                                   text-sm font-semibold
                                   text-secondary-800">
                                    Customs Duty
                                </label>


                                <div class="relative">

                                    <span
                                        class="absolute left-4 top-1/2
                                       -translate-y-1/2
                                       text-sm font-semibold
                                       text-secondary-400">
                                        $
                                    </span>

                                    <input id="landing-duty" type="number" value="1200" min="0"
                                        step="0.01"
                                        class="w-full rounded-xl
                                       border border-secondary-200
                                       py-3.5 pl-10 pr-4
                                       text-sm font-semibold
                                       text-secondary-900
                                       outline-none
                                       transition
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">

                                </div>

                            </div>



                            {{-- Insurance --}}
                            <div>

                                <label for="landing-insurance"
                                    class="mb-2 block
                                   text-sm font-semibold
                                   text-secondary-800">
                                    Insurance
                                </label>


                                <div class="relative">

                                    <span
                                        class="absolute left-4 top-1/2
                                       -translate-y-1/2
                                       text-sm font-semibold
                                       text-secondary-400">
                                        $
                                    </span>

                                    <input id="landing-insurance" type="number" value="800" min="0"
                                        step="0.01"
                                        class="w-full rounded-xl
                                       border border-secondary-200
                                       py-3.5 pl-10 pr-4
                                       text-sm font-semibold
                                       text-secondary-900
                                       outline-none
                                       transition
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">

                                </div>

                            </div>



                            {{-- Other --}}
                            <div>

                                <label for="landing-other"
                                    class="mb-2 block
                                   text-sm font-semibold
                                   text-secondary-800">
                                    Other Charges
                                </label>


                                <div class="relative">

                                    <span
                                        class="absolute left-4 top-1/2
                                       -translate-y-1/2
                                       text-sm font-semibold
                                       text-secondary-400">
                                        $
                                    </span>

                                    <input id="landing-other" type="number" value="500" min="0"
                                        step="0.01"
                                        class="w-full rounded-xl
                                       border border-secondary-200
                                       py-3.5 pl-10 pr-4
                                       text-sm font-semibold
                                       text-secondary-900
                                       outline-none
                                       transition
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">

                                </div>

                            </div>

                        </div>



                        {{-- ======================================================== --}}
                        {{-- ALLOCATION METHOD --}}
                        {{-- ======================================================== --}}

                        <div class="mt-7">

                            <p class="text-sm font-semibold
                               text-secondary-800">
                                Allocation Method
                            </p>


                            <div class="mt-3 grid grid-cols-2 gap-2
                               sm:grid-cols-4">

                                <button type="button" data-allocation="value"
                                    class="allocation-method
                                   rounded-xl
                                   border border-primary-500
                                   bg-primary-50
                                   px-3 py-3
                                   text-xs font-semibold
                                   text-primary-700
                                   transition">
                                    By Value
                                </button>


                                <button type="button" data-allocation="weight"
                                    class="allocation-method
                                   rounded-xl
                                   border border-transparent
                                   bg-secondary-50
                                   px-3 py-3
                                   text-xs font-semibold
                                   text-secondary-500
                                   transition
                                   hover:bg-primary-50">
                                    By Weight
                                </button>


                                <button type="button" data-allocation="volume"
                                    class="allocation-method
                                   rounded-xl
                                   border border-transparent
                                   bg-secondary-50
                                   px-3 py-3
                                   text-xs font-semibold
                                   text-secondary-500
                                   transition
                                   hover:bg-primary-50">
                                    By Volume
                                </button>


                                <button type="button" data-allocation="equal"
                                    class="allocation-method
                                   rounded-xl
                                   border border-transparent
                                   bg-secondary-50
                                   px-3 py-3
                                   text-xs font-semibold
                                   text-secondary-500
                                   transition
                                   hover:bg-primary-50">
                                    Equal Split
                                </button>

                            </div>

                        </div>



                        {{-- ======================================================== --}}
                        {{-- BASE PURCHASE COST --}}
                        {{-- ======================================================== --}}

                        <div
                            class="mt-8 flex flex-col gap-4
                           rounded-2xl
                           bg-background-muted
                           p-5
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex h-10 w-10
                                   items-center justify-center
                                   rounded-xl
                                   bg-primary-100
                                   text-primary-600">

                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <rect x="5" y="3" width="14" height="18" rx="2" />

                                        <path stroke-linecap="round" d="M8 7h8M8 11h2m3 0h3M8 15h2m3 0h3" />
                                    </svg>

                                </span>


                                <div>

                                    <p
                                        class="text-sm font-semibold
                                       text-secondary-800">
                                        Total Purchase Order Cost
                                    </p>

                                    <p class="mt-1 text-xs
                                       text-secondary-500">
                                        Base item cost before landed charges
                                    </p>

                                </div>

                            </div>


                            <p id="landing-base-total"
                                class="text-xl font-bold
                               text-secondary-900">
                                $15,000.00 AUD
                            </p>

                        </div>

                    </div>



                    {{-- ============================================================ --}}
                    {{-- RIGHT SIDE — RESULTS --}}
                    {{-- ============================================================ --}}

                    <div
                        class="bg-gradient-to-br
                       from-primary-50/60
                       via-white
                       to-background-muted
                       p-6
                       sm:p-8
                       lg:p-10">


                        {{-- ======================================================== --}}
                        {{-- TOP RESULT CARDS --}}
                        {{-- ======================================================== --}}

                        <div class="grid gap-4
                           sm:grid-cols-2">


                            {{-- Per Unit --}}
                            <div
                                class="rounded-2xl
                               border border-primary-100
                               bg-white
                               p-5
                               shadow-sm">

                                <div class="flex items-start gap-3">

                                    <span
                                        class="flex h-11 w-11
                                       items-center justify-center
                                       rounded-xl
                                       bg-emerald-50
                                       text-emerald-600">

                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m12 3 8 4-8 4-8-4 8-4Zm-8 4v10l8 4 8-4V7" />
                                        </svg>

                                    </span>


                                    <div>

                                        <p
                                            class="text-sm font-semibold
                                           text-secondary-800">
                                            Landed Cost (per unit)
                                        </p>


                                        <div class="mt-3 flex
                                           items-end gap-2">

                                            <span id="landing-per-unit"
                                                class="text-3xl font-bold
                                               tracking-tight
                                               text-secondary-900">
                                                $20.00
                                            </span>

                                            <span
                                                class="mb-1 text-xs font-semibold
                                               text-secondary-500">
                                                AUD
                                            </span>

                                        </div>


                                        <span
                                            class="mt-3 inline-flex
                                           rounded-lg
                                           bg-primary-50
                                           px-3 py-1.5
                                           text-[10px]
                                           font-semibold
                                           text-primary-600">
                                            Includes all costs
                                        </span>

                                    </div>

                                </div>

                            </div>



                            {{-- Total --}}
                            <div
                                class="rounded-2xl
                               border border-primary-100
                               bg-white
                               p-5
                               shadow-sm">

                                <div class="flex items-start gap-3">

                                    <span
                                        class="flex h-11 w-11
                                       items-center justify-center
                                       rounded-xl
                                       bg-violet-50
                                       text-violet-600">

                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 19V9m5 10V5m5 14v-7m5 7V3" />
                                        </svg>

                                    </span>


                                    <div>

                                        <p
                                            class="text-sm font-semibold
                                           text-secondary-800">
                                            Total Landed Cost
                                        </p>


                                        <div class="mt-3 flex
                                           items-end gap-2">

                                            <span id="landing-total"
                                                class="text-3xl font-bold
                                               tracking-tight
                                               text-primary-600">
                                                $20,000.00
                                            </span>

                                            <span
                                                class="mb-1 text-xs font-semibold
                                               text-secondary-500">
                                                AUD
                                            </span>

                                        </div>


                                        <span id="landing-total-units"
                                            class="mt-3 inline-flex
                                           rounded-lg
                                           bg-primary-50
                                           px-3 py-1.5
                                           text-[10px]
                                           font-semibold
                                           text-primary-600">
                                            For 1,000 units
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>



                        {{-- ======================================================== --}}
                        {{-- COST BREAKDOWN --}}
                        {{-- ======================================================== --}}

                        <div
                            class="mt-5 rounded-2xl
                           border border-primary-100
                           bg-white
                           p-6
                           shadow-sm">

                            <div
                                class="flex flex-col gap-4
                               sm:flex-row
                               sm:items-start
                               sm:justify-between">

                                <div>

                                    <h4
                                        class="text-lg font-bold
                                       text-secondary-900">
                                        Total Cost Breakdown
                                    </h4>

                                    <p class="mt-1 text-sm
                                       text-secondary-500">
                                        Per-unit allocation based on your inputs.
                                    </p>

                                </div>


                                <div class="sm:text-right">

                                    <p id="landing-breakdown-total"
                                        class="text-xl font-bold
                                       text-secondary-900">
                                        $20.00 AUD
                                    </p>

                                    <p class="mt-1 text-xs
                                       text-secondary-500">
                                        Total landed cost per unit
                                    </p>

                                </div>

                            </div>



                            <div class="my-5 h-px
                               bg-secondary-100"></div>



                            <div class="flex items-center
                               justify-between">

                                <p class="text-sm font-semibold
                                   text-secondary-800">
                                    Cost Composition (per unit)
                                </p>


                                <button type="button"
                                    class="text-xs font-semibold
                                   text-primary-600
                                   hover:text-primary-700">
                                    View Details →
                                </button>

                            </div>



                            {{-- Composition bar --}}
                            <div
                                class="mt-4 flex h-6
                               overflow-hidden
                               rounded-lg
                               bg-secondary-100">

                                <div id="landing-bar-item" class="h-full bg-primary-600" style="width: 75%;"></div>

                                <div id="landing-bar-freight" class="h-full bg-primary-400" style="width: 12.5%;"></div>

                                <div id="landing-bar-duty" class="h-full bg-emerald-500" style="width: 6%;"></div>

                                <div id="landing-bar-insurance" class="h-full bg-indigo-500" style="width: 4%;"></div>

                                <div id="landing-bar-other" class="h-full bg-secondary-700" style="width: 2.5%;"></div>

                            </div>



                            {{-- Legend --}}
                            <div
                                class="mt-5 grid gap-4
                               sm:grid-cols-2
                               xl:grid-cols-5">


                                {{-- Item --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <span
                                            class="h-2.5 w-2.5
                                           rounded-full
                                           bg-primary-600"></span>

                                        <span
                                            class="text-xs font-semibold
                                           text-secondary-700">
                                            Item Cost
                                        </span>

                                    </div>

                                    <p id="landing-legend-item"
                                        class="mt-1 pl-[18px]
                                       text-xs text-secondary-500">
                                        $15.00 (75.0%)
                                    </p>

                                </div>



                                {{-- Freight --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <span
                                            class="h-2.5 w-2.5
                                           rounded-full
                                           bg-primary-400"></span>

                                        <span
                                            class="text-xs font-semibold
                                           text-secondary-700">
                                            Freight
                                        </span>

                                    </div>

                                    <p id="landing-legend-freight"
                                        class="mt-1 pl-[18px]
                                       text-xs text-secondary-500">
                                        $2.50 (12.5%)
                                    </p>

                                </div>



                                {{-- Duty --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <span
                                            class="h-2.5 w-2.5
                                           rounded-full
                                           bg-emerald-500"></span>

                                        <span
                                            class="text-xs font-semibold
                                           text-secondary-700">
                                            Duty
                                        </span>

                                    </div>

                                    <p id="landing-legend-duty"
                                        class="mt-1 pl-[18px]
                                       text-xs text-secondary-500">
                                        $1.20 (6.0%)
                                    </p>

                                </div>



                                {{-- Insurance --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <span
                                            class="h-2.5 w-2.5
                                           rounded-full
                                           bg-indigo-500"></span>

                                        <span
                                            class="text-xs font-semibold
                                           text-secondary-700">
                                            Insurance
                                        </span>

                                    </div>

                                    <p id="landing-legend-insurance"
                                        class="mt-1 pl-[18px]
                                       text-xs text-secondary-500">
                                        $0.80 (4.0%)
                                    </p>

                                </div>



                                {{-- Other --}}
                                <div>

                                    <div class="flex items-center gap-2">

                                        <span
                                            class="h-2.5 w-2.5
                                           rounded-full
                                           bg-secondary-700"></span>

                                        <span
                                            class="text-xs font-semibold
                                           text-secondary-700">
                                            Other
                                        </span>

                                    </div>

                                    <p id="landing-legend-other"
                                        class="mt-1 pl-[18px]
                                       text-xs text-secondary-500">
                                        $0.50 (2.5%)
                                    </p>

                                </div>

                            </div>



                            {{-- ==================================================== --}}
                            {{-- MARGIN INSIGHT --}}
                            {{-- ==================================================== --}}

                            <div
                                class="mt-6 flex gap-4
                               rounded-2xl
                               border border-emerald-100
                               bg-emerald-50/80
                               p-5">

                                <span
                                    class="flex h-11 w-11
                                   shrink-0
                                   items-center justify-center
                                   rounded-xl
                                   bg-emerald-100
                                   text-emerald-600">

                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4 16 5-5 4 4 7-8" />

                                        <path stroke-linecap="round" d="M15 7h5v5" />
                                    </svg>

                                </span>


                                <div>

                                    <p class="text-sm font-bold
                                       text-emerald-800">
                                        Better Margin Visibility
                                    </p>

                                    <p id="landing-margin-message"
                                        class="mt-1 text-sm leading-6
                                       text-secondary-700">
                                        Your landed cost is 33.3% higher than the supplier
                                        price ($15.00 → $20.00). Use landed cost when setting
                                        selling prices to protect your margins.
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- ======================================================== --}}
                        {{-- BOTTOM ACTIONS --}}
                        {{-- ======================================================== --}}

                        <div
                            class="mt-5 flex flex-col gap-4
                           sm:flex-row
                           sm:items-center
                           sm:justify-between">

                            <div class="flex items-center gap-2
                               text-xs text-secondary-500">

                                <span
                                    class="flex h-6 w-6
                                   items-center justify-center
                                   rounded-full
                                   border border-primary-300
                                   text-primary-600">
                                    i
                                </span>

                                All calculations update automatically as you change the values.

                            </div>


                            <button id="landing-reset" type="button"
                                class="inline-flex items-center
                               justify-center gap-2
                               rounded-xl
                               border border-primary-200
                               bg-white
                               px-4 py-2.5
                               text-xs font-semibold
                               text-primary-600
                               transition
                               hover:bg-primary-50">

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v6h6M20 20v-6h-6" />

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20 9A8 8 0 0 0 6 5.3L4 10m16 4-2 4.7A8 8 0 0 1 4 15" />
                                </svg>

                                Reset Calculator

                            </button>

                        </div>

                    </div>

                </div>



                {{-- ================================================================ --}}
                {{-- BOTTOM BENEFITS --}}
                {{-- ================================================================ --}}

                <div class="mt-10 grid gap-5
                   sm:grid-cols-3">


                    {{-- Benefit --}}
                    <div class="flex items-center
                       justify-center gap-3">

                        <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m13 2-7 11h6l-1 9 7-12h-6l1-8Z" />
                        </svg>

                        <span class="text-sm font-medium
                           text-secondary-700">
                            Real-time calculations
                        </span>

                    </div>



                    {{-- Benefit --}}
                    <div class="flex items-center
                       justify-center gap-3">

                        <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3 4.5 6v5.25c0 4.55 3.08 8.78 7.5 9.75 4.42-.97 7.5-5.2 7.5-9.75V6L12 3Z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-5" />
                        </svg>

                        <span class="text-sm font-medium
                           text-secondary-700">
                            Accurate margin insights
                        </span>

                    </div>



                    {{-- Benefit --}}
                    <div class="flex items-center
                       justify-center gap-3">

                        <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <rect x="5" y="3" width="14" height="18" rx="2" />

                            <path stroke-linecap="round" d="M8 7h8M8 11h2m3 0h3M8 15h2m3 0h3" />
                        </svg>

                        <span class="text-sm font-medium
                           text-secondary-700">
                            Plan smarter purchases
                        </span>

                    </div>

                </div>

            </div>

        </section>

        {{-- ====================================================================== --}}
        {{-- LANDING COST — COMMON CHALLENGES / HIDDEN COST TRAP --}}
        {{-- ====================================================================== --}}

        <section id="landing-cost-challenges"
            class="relative overflow-hidden bg-background px-4 py-20 sm:px-6 lg:px-8 lg:py-24">

            {{-- ================================================================ --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================ --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Left soft glow --}}
                <div
                    class="absolute -left-36 top-20
                   h-[360px] w-[360px]
                   rounded-full
                   bg-primary-100/40
                   blur-[80px]">
                </div>

                {{-- Right soft glow --}}
                <div
                    class="absolute -right-32 -top-20
                   h-[400px] w-[400px]
                   rounded-full
                   bg-primary-100/30
                   blur-[90px]">
                </div>

                {{-- Left arc --}}
                <div
                    class="absolute -left-[220px] top-[20px]
                   h-[460px] w-[460px]
                   rounded-full
                   border border-primary-100/80">
                </div>

                {{-- Right arc --}}
                <div
                    class="absolute -right-[180px] -top-[220px]
                   h-[500px] w-[500px]
                   rounded-full
                   border border-primary-100/70">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================ --}}
                {{-- SECTION INTRO --}}
                {{-- ================================================================ --}}

                <div class="max-w-3xl">

                    <p
                        class="text-xs font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Common Challenges
                    </p>


                    <h2
                        class="mt-3
                       text-3xl font-bold
                       leading-tight
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        The Hidden Cost Trap in Global Sourcing
                    </h2>


                    <p
                        class="mt-5
                       max-w-3xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        It is easy to focus only on the supplier invoice, but
                        international procurement comes with many additional costs
                        that can quietly reduce your margins. These are some of the
                        most common challenges importers and wholesalers face.
                    </p>

                </div>



                {{-- ================================================================ --}}
                {{-- CHALLENGE CARDS --}}
                {{-- ================================================================ --}}

                <div
                    class="mt-12
                   grid gap-5
                   md:grid-cols-2
                   xl:grid-cols-4">


                    {{-- ============================================================ --}}
                    {{-- CARD 1 — HIDDEN COSTS --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group flex min-h-[390px]
                       flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-red-200
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.08)]
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-14 w-14
                           items-center justify-center
                           rounded-2xl
                           bg-red-50
                           text-red-500">

                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.6 10.6A2 2 0 0 0 13.4 13.4" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.9 5.1A10.6 10.6 0 0 1 12 5
                                       c5.5 0 9 7 9 7
                                       a15.5 15.5 0 0 1-2.1 3.1" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.6 6.6C4 8.4 3 12 3 12
                                       s3.5 7 9 7
                                       a9 9 0 0 0 3.4-.7" />
                            </svg>

                        </div>



                        {{-- Label --}}
                        <div
                            class="mt-4 inline-flex self-start
                           rounded-full
                           bg-red-50
                           px-3 py-1.5
                           text-[10px] font-bold uppercase
                           tracking-[0.08em]
                           text-red-600">
                            Hidden Costs
                        </div>



                        {{-- Heading --}}
                        <h3
                            class="mt-4
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            More Than Just Invoice
                        </h3>



                        {{-- Description --}}
                        <p
                            class="mt-4
                           text-sm leading-6
                           text-secondary-600">
                            Supplier price is only part of the story. Freight,
                            duties, taxes, insurance and other purchasing charges
                            can significantly increase your true product cost.
                        </p>


                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-500">
                            Without those expenses included, product margins may
                            look healthier than they actually are.
                        </p>



                        {{-- Bottom Link --}}
                        <a href="#landing-cost-calculator"
                            class="mt-auto
                           flex items-center gap-2
                           pt-7
                           text-sm font-bold
                           text-red-600
                           transition
                           group-hover:gap-3">
                            See real cost examples

                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 2 — CURRENCY --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group flex min-h-[390px]
                       flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.08)]
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-14 w-14
                           items-center justify-center
                           rounded-2xl
                           bg-primary-50
                           text-primary-600">

                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3a9 9 0 1 0 9 9" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 9.5c.8-1 2-1.5 3.5-1.5
                                       2 0 3.5 1 3.5 2.5
                                       0 1.3-.9 2.1-2.8 2.5
                                       l-1.4.3c-1.6.3-2.3 1-2.3 2
                                       0 1.3 1.2 2.2 3 2.2
                                       1.4 0 2.6-.5 3.5-1.5" />

                                <path stroke-linecap="round" d="M12 6v12" />
                            </svg>

                        </div>



                        {{-- Label --}}
                        <div
                            class="mt-4 inline-flex self-start
                           rounded-full
                           bg-primary-50
                           px-3 py-1.5
                           text-[10px] font-bold uppercase
                           tracking-[0.08em]
                           text-primary-600">
                            Complexity
                        </div>



                        <h3
                            class="mt-4
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Multi-Currency Invoices
                        </h3>


                        <p
                            class="mt-4
                           text-sm leading-6
                           text-secondary-600">
                            International purchases may involve USD, EUR, CNY,
                            AUD and other currencies across supplier invoices,
                            freight bills and customs documentation.
                        </p>


                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-500">
                            Exchange-rate changes can make comparing suppliers
                            and calculating real unit cost much harder.
                        </p>



                        <a href="#landing-cost-calculator"
                            class="mt-auto
                           flex items-center gap-2
                           pt-7
                           text-sm font-bold
                           text-primary-600
                           transition
                           group-hover:gap-3">
                            Learn how to simplify

                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 3 — DUTIES / COMPLIANCE --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group flex min-h-[390px]
                       flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-emerald-200
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.08)]
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-14 w-14
                           items-center justify-center
                           rounded-2xl
                           bg-emerald-50
                           text-emerald-600">

                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h18M5 10v8m4-8v8m6-8v8m4-8v8M3 18h18" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m12 3 9 5H3l9-5Z" />
                            </svg>

                        </div>



                        {{-- Label --}}
                        <div
                            class="mt-4 inline-flex self-start
                           rounded-full
                           bg-emerald-50
                           px-3 py-1.5
                           text-[10px] font-bold uppercase
                           tracking-[0.08em]
                           text-emerald-600">
                            Regulatory Fees
                        </div>



                        <h3
                            class="mt-4
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Taxes, Duties & Compliance
                        </h3>


                        <p
                            class="mt-4
                           text-sm leading-6
                           text-secondary-600">
                            Import duty, customs charges, VAT or GST and other
                            regulatory expenses can vary by country, product
                            category and shipment.
                        </p>


                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-500">
                            Missing these charges can produce unexpected costs,
                            delayed shipments and inaccurate inventory valuation.
                        </p>



                        <a href="#landing-cost-calculator"
                            class="mt-auto
                           flex items-center gap-2
                           pt-7
                           text-sm font-bold
                           text-emerald-600
                           transition
                           group-hover:gap-3">
                            Understand key charges

                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 4 — MARGIN PRESSURE --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group flex min-h-[390px]
                       flex-col
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-violet-200
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.08)]
                       hover:cursor-pointer">

                        {{-- Icon --}}
                        <div
                            class="flex h-14 w-14
                           items-center justify-center
                           rounded-2xl
                           bg-violet-50
                           text-violet-600">

                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.9">
                                <path stroke-linecap="round" d="M4 19V9m5 10V5m5 14v-7m5 7V3" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18" />
                            </svg>

                        </div>



                        {{-- Label --}}
                        <div
                            class="mt-4 inline-flex self-start
                           rounded-full
                           bg-violet-50
                           px-3 py-1.5
                           text-[10px] font-bold uppercase
                           tracking-[0.08em]
                           text-violet-600">
                            Margin Pressure
                        </div>



                        <h3
                            class="mt-4
                           text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Impact on Pricing & Profit
                        </h3>


                        <p
                            class="mt-4
                           text-sm leading-6
                           text-secondary-600">
                            Unaccounted costs reduce margins and can lead to
                            underpriced products, inaccurate profitability reports
                            and poor purchasing decisions.
                        </p>


                        <p
                            class="mt-3
                           text-sm leading-6
                           text-secondary-500">
                            Knowing true landed cost gives your team a stronger
                            basis for pricing products and protecting profitability.
                        </p>



                        <a href="#landing-cost-calculator"
                            class="mt-auto
                           flex items-center gap-2
                           pt-7
                           text-sm font-bold
                           text-violet-600
                           transition
                           group-hover:gap-3">
                            See the bigger picture

                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>

                    </article>

                </div>



                {{-- ================================================================ --}}
                {{-- SUPPORTING STRIP --}}
                {{-- ================================================================ --}}

                <div
                    class="mt-10
                   grid gap-4
                   rounded-2xl
                   border border-primary-100
                   bg-primary-50/60
                   p-5
                   sm:grid-cols-3
                   sm:p-6">

                    <div class="flex items-center gap-3">

                        <span
                            class="flex h-9 w-9
                           shrink-0 items-center justify-center
                           rounded-xl
                           bg-white text-primary-600
                           shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m14 7 5 5-5 5" />
                            </svg>
                        </span>

                        <div>
                            <p class="text-xs font-bold
                               text-secondary-900">
                                More accurate costing
                            </p>

                            <p class="mt-1 text-xs
                               text-secondary-500">
                                Include costs beyond supplier price.
                            </p>
                        </div>

                    </div>



                    <div class="flex items-center gap-3">

                        <span
                            class="flex h-9 w-9
                           shrink-0 items-center justify-center
                           rounded-xl
                           bg-white text-primary-600
                           shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4 17 5-5 4 4 7-9" />
                            </svg>
                        </span>

                        <div>
                            <p class="text-xs font-bold
                               text-secondary-900">
                                Better pricing decisions
                            </p>

                            <p class="mt-1 text-xs
                               text-secondary-500">
                                Protect margins using real product cost.
                            </p>
                        </div>

                    </div>



                    <div class="flex items-center gap-3">

                        <span
                            class="flex h-9 w-9
                           shrink-0 items-center justify-center
                           rounded-xl
                           bg-white text-primary-600
                           shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 4.5 6v5.25c0 4.55 3.08 8.78 7.5 9.75
                                       4.42-.97 7.5-5.2 7.5-9.75V6L12 3Z" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-5" />
                            </svg>
                        </span>

                        <div>
                            <p class="text-xs font-bold
                               text-secondary-900">
                                Stronger inventory valuation
                            </p>

                            <p class="mt-1 text-xs
                               text-secondary-500">
                                Base stock value on more complete costs.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- ====================================================================== --}}
        {{-- LANDED COST — OPERATIONAL WORKFLOW --}}
        {{-- ====================================================================== --}}

        <section id="landing-cost-workflow"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-white
           via-background
           to-background-muted
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATIONS --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                <div
                    class="absolute -left-32 top-10
                   h-[360px] w-[360px]
                   rounded-full
                   bg-primary-100/30
                   blur-[90px]">
                </div>

                <div
                    class="absolute -right-32 top-16
                   h-[400px] w-[400px]
                   rounded-full
                   bg-primary-100/30
                   blur-[100px]">
                </div>

                <div
                    class="absolute -left-[220px] -top-[250px]
                   h-[500px] w-[500px]
                   rounded-full
                   border border-primary-100">
                </div>

                <div
                    class="absolute -right-[240px] -top-[230px]
                   h-[520px] w-[520px]
                   rounded-full
                   border border-primary-100">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADING --}}
                {{-- ================================================================== --}}

                <div class="mx-auto max-w-4xl text-center">

                    <p
                        class="text-xs font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Operational Workflow
                    </p>


                    <h2
                        class="mt-4
                       text-3xl font-bold
                       leading-tight
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        How StockCore Distributes Landed Costs

                        <span class="block">
                            Across Hundreds of SKUs
                        </span>
                    </h2>


                    <p
                        class="mx-auto mt-5 max-w-3xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        Connect supplier and logistics costs, choose the right
                        allocation method, and let StockCore calculate accurate
                        landed costs across your inventory automatically.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- FOUR STEP WORKFLOW --}}
                {{-- ================================================================== --}}

                <div class="mt-14 grid gap-5
                   md:grid-cols-2
                   xl:grid-cols-4">


                    {{-- STEP 1 --}}
                    <article
                        class="group rounded-[22px]
                       border border-primary-100
                       bg-primary-50/70
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:bg-white
                       hover:shadow-[0_18px_45px_rgba(37,99,235,0.08)]
                       hover:cursor-pointer">

                        <span
                            class="flex h-10 w-10
                           items-center justify-center
                           rounded-full
                           bg-primary-600
                           text-sm font-bold
                           text-white
                           shadow-md
                           shadow-primary-600/20">
                            1
                        </span>


                        <h3
                            class="mt-5 text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            PO & Supplier Bill
                        </h3>


                        <p class="mt-3 text-sm leading-6
                           text-secondary-600">
                            Record supplier purchase orders and establish the
                            base inventory cost before freight and other landed
                            charges are applied.
                        </p>

                    </article>



                    {{-- STEP 2 --}}
                    <article
                        class="group rounded-[22px]
                       border border-primary-100
                       bg-primary-50/70
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:bg-white
                       hover:shadow-[0_18px_45px_rgba(37,99,235,0.08)]
                       hover:cursor-pointer">

                        <span
                            class="flex h-10 w-10
                           items-center justify-center
                           rounded-full
                           bg-primary-600
                           text-sm font-bold
                           text-white
                           shadow-md
                           shadow-primary-600/20">
                            2
                        </span>


                        <h3
                            class="mt-5 text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Attach Logistics Costs
                        </h3>


                        <p class="mt-3 text-sm leading-6
                           text-secondary-600">
                            Add freight, customs duties, insurance, terminal
                            charges and other costs associated with bringing
                            inventory into your warehouse.
                        </p>

                    </article>



                    {{-- STEP 3 --}}
                    <article
                        class="group rounded-[22px]
                       border border-primary-100
                       bg-primary-50/70
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:bg-white
                       hover:shadow-[0_18px_45px_rgba(37,99,235,0.08)]
                       hover:cursor-pointer">

                        <span
                            class="flex h-10 w-10
                           items-center justify-center
                           rounded-full
                           bg-primary-600
                           text-sm font-bold
                           text-white
                           shadow-md
                           shadow-primary-600/20">
                            3
                        </span>


                        <h3
                            class="mt-5 text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            Select Allocation Mode
                        </h3>


                        <p class="mt-3 text-sm leading-6
                           text-secondary-600">
                            Allocate charges based on value, weight, volume,
                            quantity or another suitable allocation method for
                            the purchase.
                        </p>

                    </article>



                    {{-- STEP 4 --}}
                    <article
                        class="group rounded-[22px]
                       border border-primary-100
                       bg-primary-50/70
                       p-6
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:bg-white
                       hover:shadow-[0_18px_45px_rgba(37,99,235,0.08)]
                       hover:cursor-pointer">

                        <span
                            class="flex h-10 w-10
                           items-center justify-center
                           rounded-full
                           bg-primary-600
                           text-sm font-bold
                           text-white
                           shadow-md
                           shadow-primary-600/20">
                            4
                        </span>


                        <h3
                            class="mt-5 text-xl font-bold
                           tracking-tight
                           text-secondary-900">
                            FIFO & Ledger Sync
                        </h3>


                        <p class="mt-3 text-sm leading-6
                           text-secondary-600">
                            Apply reconciled landed costs to inventory valuation
                            and keep FIFO costing and accounting information
                            aligned.
                        </p>

                    </article>

                </div>



                {{-- ================================================================== --}}
                {{-- PRODUCT SCREENSHOT --}}
                {{-- ================================================================== --}}

                <div class="mt-12">


                    {{-- Screenshot frame --}}
                    <div
                        class="relative overflow-hidden
                       rounded-[26px]
                       border border-primary-100
                       bg-white
                       p-2
                       shadow-[0_30px_80px_rgba(15,23,42,0.12)]
                       sm:p-3">

                        {{-- Browser / dashboard top glow --}}
                        <div
                            class="pointer-events-none
                           absolute inset-x-0 top-0
                           h-24
                           bg-gradient-to-b
                           from-primary-50/50
                           to-transparent">
                        </div>


                        <img src="{{ asset('images/features/landing-cost-allocation-workspace.webp') }}"
                            alt="StockCore landed cost allocation workspace showing allocated freight, customs charges and final landed unit cost across multiple SKUs"
                            loading="lazy"
                            class="relative z-10
                           block h-auto
                           w-full
                           rounded-[20px]
                           object-contain">

                    </div>



                    {{-- Screenshot description --}}
                    <div
                        class="mx-auto mt-6
                       flex max-w-4xl
                       flex-col items-center
                       justify-center gap-3
                       text-center
                       sm:flex-row
                       sm:gap-6">

                        <div class="flex items-center gap-2
                           text-sm text-secondary-600">

                            <span
                                class="flex h-6 w-6
                               items-center justify-center
                               rounded-full
                               bg-emerald-100
                               text-emerald-600">

                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            Allocate freight across multiple SKUs
                        </div>



                        <div
                            class="hidden h-5 w-px
                           bg-secondary-200
                           sm:block">
                        </div>



                        <div class="flex items-center gap-2
                           text-sm text-secondary-600">

                            <span
                                class="flex h-6 w-6
                               items-center justify-center
                               rounded-full
                               bg-emerald-100
                               text-emerald-600">

                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            Calculate final landed unit cost
                        </div>



                        <div
                            class="hidden h-5 w-px
                           bg-secondary-200
                           sm:block">
                        </div>



                        <div class="flex items-center gap-2
                           text-sm text-secondary-600">

                            <span
                                class="flex h-6 w-6
                               items-center justify-center
                               rounded-full
                               bg-emerald-100
                               text-emerald-600">

                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                </svg>

                            </span>

                            Keep FIFO valuation aligned
                        </div>

                    </div>

                </div>



                {{-- ================================================================== --}}
                {{-- SUPPORTING CONTENT --}}
                {{-- ================================================================== --}}

                <div class="mt-12 grid gap-5
                   md:grid-cols-3 hover:cursor-pointer">


                    <div
                        class="rounded-2xl
                       border border-primary-100
                       bg-white/80
                       p-6">

                        <div
                            class="flex h-10 w-10
                           items-center justify-center
                           rounded-xl
                           bg-primary-50
                           text-primary-600">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </div>


                        <h3 class="mt-4 text-base font-bold
                           text-secondary-900">
                            Allocate at scale
                        </h3>


                        <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                            Apply shared logistics expenses across hundreds of
                            products without manually recalculating every SKU.
                        </p>

                    </div>



                    <div
                        class="rounded-2xl
                       border border-primary-100
                       bg-white/80
                       p-6">

                        <div
                            class="flex h-10 w-10
                           items-center justify-center
                           rounded-xl
                           bg-primary-50
                           text-primary-600">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4 7 8-4 8 4-8 4-8-4Zm0 5 8 4 8-4M4 17l8 4 8-4" />
                            </svg>

                        </div>


                        <h3 class="mt-4 text-base font-bold
                           text-secondary-900">
                            Accurate FIFO layers
                        </h3>


                        <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                            Keep FIFO valuation based on the complete cost of
                            inventory rather than the supplier invoice alone.
                        </p>

                    </div>



                    <div
                        class="rounded-2xl
                       border border-primary-100
                       bg-white/80
                       p-6">

                        <div
                            class="flex h-10 w-10
                           items-center justify-center
                           rounded-xl
                           bg-primary-50
                           text-primary-600">

                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3 4.5 6v5.25c0 4.55 3.08 8.78 7.5 9.75 4.42-.97 7.5-5.2 7.5-9.75V6L12 3Z" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-5" />
                            </svg>

                        </div>


                        <h3 class="mt-4 text-base font-bold
                           text-secondary-900">
                            Reconcile with confidence
                        </h3>


                        <p class="mt-2 text-sm leading-6
                           text-secondary-500">
                            Keep purchase costs, logistics expenses and final
                            inventory valuation connected in one workflow.
                        </p>

                    </div>

                </div>

            </div>

        </section>
        {{-- ====================================================================== --}}
        {{-- LANDING COST — ENTERPRISE OPERATIONAL EDGE --}}
        {{-- ====================================================================== --}}

        <section id="landing-cost-enterprise-edge"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-background
           via-background
           to-background-muted
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATION --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Top right soft arc --}}
                <div
                    class="absolute -right-[220px] -top-[260px]
                   h-[620px] w-[620px]
                   rounded-full
                   bg-primary-100/30">
                </div>

                {{-- Bottom left soft shape --}}
                <div
                    class="absolute -left-[180px] bottom-[-260px]
                   h-[520px] w-[520px]
                   rounded-full
                   bg-primary-100/25">
                </div>

                {{-- Center glow --}}
                <div
                    class="absolute left-1/2 top-1/2
                   h-[350px] w-[720px]
                   -translate-x-1/2
                   -translate-y-1/2
                   rounded-full
                   bg-primary-50/40
                   blur-[100px]">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION HEADING --}}
                {{-- ================================================================== --}}

                <div class="max-w-5xl">

                    <p
                        class="text-xs font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Enterprise Operational Edge
                    </p>


                    <h2
                        class="mt-4
                       text-3xl font-bold
                       leading-tight
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        Engineered for Complex Australian Supply Chains
                    </h2>


                    <p
                        class="mt-5
                       max-w-4xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        Maintain precise inventory value across multiple warehouses,
                        third-party logistics (3PL) depots, bonded storage facilities,
                        and complex importing operations with greater confidence.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- BENEFIT GRID --}}
                {{-- ================================================================== --}}

                <div class="mt-14 grid gap-5
                   lg:grid-cols-2">


                    {{-- ============================================================ --}}
                    {{-- CARD 1 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_10px_35px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.08)]
                       sm:p-8
                       hover:cursor-pointer">

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 19V12m5 7V9m5 10v-5m5 5V5" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4 10 5-4 4 2 6-5" />
                                </svg>

                            </div>


                            <div>

                                <h3
                                    class="text-xl font-bold
                                   tracking-tight
                                   text-secondary-900">
                                    Accurate Margins & Defensible Pricing
                                </h3>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-600">
                                    Protect your commercial margins against freight
                                    charges, port-related costs, customs duties,
                                    insurance and other purchasing expenses that can
                                    materially affect profitability.
                                </p>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-500">
                                    By including true landed cost in product valuation,
                                    your team can make pricing decisions from the actual
                                    break-even point rather than supplier price alone.
                                </p>

                            </div>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 2 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_10px_35px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-emerald-200
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.08)]
                       sm:p-8
                       hover:cursor-pointer">

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-emerald-50
                               text-emerald-600">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4 7 8-4 8 4-8 4-8-4Zm0 5 8 4 8-4M4 17l8 4 8-4" />
                                </svg>

                            </div>


                            <div>

                                <h3
                                    class="text-xl font-bold
                                   tracking-tight
                                   text-secondary-900">
                                    Flawless FIFO Cost Layers
                                </h3>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-600">
                                    Ensure landed cost allocations flow into FIFO
                                    inventory layers so remaining stock and cost of
                                    goods sold are based on more complete inventory
                                    costs.
                                </p>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-500">
                                    Preserve clearer purchasing history, batch costing
                                    and valuation records across complex warehouse and
                                    importing workflows.
                                </p>

                            </div>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 3 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_10px_35px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-violet-200
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.08)]
                       sm:p-8 hover:cursor-pointer">

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-violet-50
                               text-violet-600">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <circle cx="12" cy="12" r="9" />

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 12h18M12 3c2.5 2.6 3.8 5.6 3.8 9S14.5 18.4 12 21M12 3C9.5 5.6 8.2 8.6 8.2 12S9.5 18.4 12 21" />
                                </svg>

                            </div>


                            <div>

                                <h3
                                    class="text-xl font-bold
                                   tracking-tight
                                   text-secondary-900">
                                    Real-Time Multi-Currency Handling
                                </h3>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-600">
                                    Handle supplier purchases across currencies such
                                    as USD, EUR, GBP, CNY and AUD while maintaining a
                                    consistent landed cost calculation.
                                </p>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-500">
                                    Keep foreign purchase costs, freight invoices and
                                    related charges easier to compare across suppliers
                                    and international shipments.
                                </p>

                            </div>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 4 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[22px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_10px_35px_rgba(15,23,42,0.04)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:shadow-[0_20px_50px_rgba(15,23,42,0.08)]
                       sm:p-8 hover:cursor-pointer">

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h10M7 17h10" />

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14 4 3 3-3 3M10 14l-3 3 3 3" />
                                </svg>

                            </div>


                            <div>

                                <h3
                                    class="text-xl font-bold
                                   tracking-tight
                                   text-secondary-900">
                                    Automated Accounting Reconciliations
                                </h3>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-600">
                                    Keep purchasing, freight and inventory costs closer
                                    to your accounting workflow instead of manually
                                    reconciling disconnected spreadsheets and records.
                                </p>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-500">
                                    Reduce repeated data entry and create a cleaner
                                    connection between inventory valuation and financial
                                    reporting.
                                </p>

                            </div>

                        </div>

                    </article>

                </div>



                {{-- ================================================================== --}}
                {{-- BOTTOM SUPPORTING STRIP --}}
                {{-- ================================================================== --}}

                <div
                    class="mt-10
                   grid gap-4
                   rounded-[22px]
                   border border-primary-100
                   bg-primary-50/60
                   p-5
                   sm:grid-cols-2
                   lg:grid-cols-4
                   sm:p-6">


                    <div class="flex items-center gap-3">

                        <span
                            class="flex h-9 w-9
                           shrink-0
                           items-center justify-center
                           rounded-xl
                           bg-white
                           text-primary-600
                           shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4 17 5-5 4 4 7-9" />
                            </svg>
                        </span>

                        <div>
                            <p class="text-xs font-bold
                               text-secondary-900">
                                Better margin visibility
                            </p>

                            <p class="mt-1 text-[11px]
                               text-secondary-500">
                                Price using real cost.
                            </p>
                        </div>

                    </div>



                    <div class="flex items-center gap-3">

                        <span
                            class="flex h-9 w-9
                           shrink-0
                           items-center justify-center
                           rounded-xl
                           bg-white
                           text-primary-600
                           shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4 7 8-4 8 4-8 4-8-4Zm0 5 8 4 8-4M4 17l8 4 8-4" />
                            </svg>
                        </span>

                        <div>
                            <p class="text-xs font-bold
                               text-secondary-900">
                                Accurate FIFO valuation
                            </p>

                            <p class="mt-1 text-[11px]
                               text-secondary-500">
                                Keep cost layers aligned.
                            </p>
                        </div>

                    </div>



                    <div class="flex items-center gap-3">

                        <span
                            class="flex h-9 w-9
                           shrink-0
                           items-center justify-center
                           rounded-xl
                           bg-white
                           text-primary-600
                           shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="9" />

                                <path stroke-linecap="round" d="M8 12h8M12 8v8" />
                            </svg>
                        </span>

                        <div>
                            <p class="text-xs font-bold
                               text-secondary-900">
                                Multi-currency ready
                            </p>

                            <p class="mt-1 text-[11px]
                               text-secondary-500">
                                Support global purchasing.
                            </p>
                        </div>

                    </div>



                    <div class="flex items-center gap-3">

                        <span
                            class="flex h-9 w-9
                           shrink-0
                           items-center justify-center
                           rounded-xl
                           bg-white
                           text-primary-600
                           shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3 4.5 6v5.25c0 4.55 3.08 8.78 7.5 9.75 4.42-.97 7.5-5.2 7.5-9.75V6L12 3Z" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-5" />
                            </svg>
                        </span>

                        <div>
                            <p class="text-xs font-bold
                               text-secondary-900">
                                Cleaner reconciliation
                            </p>

                            <p class="mt-1 text-[11px]
                               text-secondary-500">
                                Reduce manual accounting work.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- ====================================================================== --}}
        {{-- LANDING COST — STANDARD SOFTWARE VS STOCKCORE --}}
        {{-- ====================================================================== --}}

        <section id="landing-cost-comparison"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-white
           via-background
           to-white
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATION --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Top left shape --}}
                <div
                    class="absolute -left-[170px] -top-[220px]
                   h-[430px] w-[430px]
                   rounded-full
                   bg-primary-100/30">
                </div>

                {{-- Top right shape --}}
                <div
                    class="absolute -right-[220px] -top-[190px]
                   h-[500px] w-[500px]
                   rounded-full
                   bg-primary-50/60">
                </div>

                {{-- Bottom subtle glow --}}
                <div
                    class="absolute bottom-[-180px] left-1/2
                   h-[320px] w-[750px]
                   -translate-x-1/2
                   rounded-full
                   bg-primary-100/25
                   blur-[100px]">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION INTRO --}}
                {{-- ================================================================== --}}

                <div
                    class="grid gap-8
                   lg:grid-cols-[1.15fr_0.85fr]
                   lg:items-end
                   lg:gap-16">

                    <div>

                        <p
                            class="text-xs font-bold uppercase
                           tracking-[0.18em]
                           text-red-600">
                            The Hidden Financial Gap
                        </p>


                        <h2
                            class="mt-4
                           max-w-4xl
                           text-3xl font-bold
                           leading-[1.12]
                           tracking-[-0.035em]
                           text-secondary-900
                           sm:text-4xl
                           lg:text-5xl">
                            Why Standard Inventory Software Leaves
                            Australian Importers Selling at a Loss
                        </h2>

                    </div>


                    <div>

                        <p
                            class="text-base leading-7
                           text-secondary-600
                           sm:text-lg sm:leading-8">
                            Purchasing inventory at FOB pricing is only part of the
                            equation. Without proper landed cost allocation, freight,
                            duties and other importing costs can quietly reduce your
                            margin without you realising it.
                        </p>

                    </div>

                </div>



                {{-- ================================================================== --}}
                {{-- COMPARISON CARDS --}}
                {{-- ================================================================== --}}

                <div class="mt-14 grid gap-6
                   xl:grid-cols-2">


                    {{-- ============================================================ --}}
                    {{-- LEFT — STANDARD INVENTORY / SPREADSHEET TRAP --}}
                    {{-- ============================================================ --}}

                    <article
                        class="overflow-hidden
                       rounded-[26px]
                       border border-red-100
                       bg-gradient-to-br
                       from-red-50/70
                       via-white
                       to-red-50/40
                       shadow-[0_18px_50px_rgba(220,38,38,0.06)]">

                        {{-- Header --}}
                        <div
                            class="flex flex-col gap-5
                           border-b border-red-100
                           p-6
                           sm:flex-row
                           sm:items-start
                           sm:justify-between
                           sm:p-8">

                            <div class="flex items-start gap-4">

                                {{-- Icon --}}
                                <div
                                    class="flex h-14 w-14
                                   shrink-0
                                   items-center justify-center
                                   rounded-2xl
                                   bg-red-100
                                   text-red-600">

                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.9">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 2.5 20h19L12 3Z" />

                                        <path stroke-linecap="round" d="M12 9v4" />

                                        <circle cx="12" cy="16" r=".75" fill="currentColor"
                                            stroke="none" />
                                    </svg>

                                </div>


                                <div>

                                    <h3
                                        class="text-2xl font-bold
                                       tracking-tight
                                       text-secondary-900">
                                        The Spreadsheet Trap
                                    </h3>

                                    <p class="mt-2 text-sm
                                       text-secondary-500">
                                        Common gaps that quietly cost you margin.
                                    </p>

                                </div>

                            </div>


                            <span
                                class="inline-flex self-start
                               rounded-full
                               bg-red-100
                               px-4 py-2
                               text-[10px] font-bold uppercase
                               tracking-[0.08em]
                               text-red-700">
                                Hidden Margin Loss
                            </span>

                        </div>



                        {{-- Problems --}}
                        <div class="divide-y divide-red-100">


                            {{-- Problem 1 --}}
                            <div class="flex gap-4 p-6 sm:p-8">

                                <span
                                    class="flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-red-100
                                   text-red-600">

                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.4">
                                        <path stroke-linecap="round" d="m7 7 10 10M17 7 7 17" />
                                    </svg>

                                </span>


                                <div>

                                    <h4
                                        class="text-base font-bold
                                       text-secondary-900">
                                        Understated Shipping Expenses
                                    </h4>

                                    <p
                                        class="mt-2
                                       text-sm leading-6
                                       text-secondary-600">
                                        Freight, insurance and other logistics costs
                                        are often tracked outside the inventory system,
                                        so they never become part of the actual inventory
                                        cost.
                                    </p>

                                </div>

                            </div>



                            {{-- Problem 2 --}}
                            <div class="flex gap-4 p-6 sm:p-8">

                                <span
                                    class="flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-red-100
                                   text-red-600">

                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.4">
                                        <path stroke-linecap="round" d="m7 7 10 10M17 7 7 17" />
                                    </svg>

                                </span>


                                <div>

                                    <h4
                                        class="text-base font-bold
                                       text-secondary-900">
                                        FX & Duty Costs Not Included
                                    </h4>

                                    <p
                                        class="mt-2
                                       text-sm leading-6
                                       text-secondary-600">
                                        Currency conversion, import duty, customs,
                                        GST and related charges can materially change
                                        the final landed cost of each unit.
                                    </p>

                                </div>

                            </div>



                            {{-- Problem 3 --}}
                            <div class="flex gap-4 p-6 sm:p-8">

                                <span
                                    class="flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-red-100
                                   text-red-600">

                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.4">
                                        <path stroke-linecap="round" d="m7 7 10 10M17 7 7 17" />
                                    </svg>

                                </span>


                                <div>

                                    <h4
                                        class="text-base font-bold
                                       text-secondary-900">
                                        Incorrect FIFO Valuation
                                    </h4>

                                    <p
                                        class="mt-2
                                       text-sm leading-6
                                       text-secondary-600">
                                        If landed charges are not included in inventory
                                        cost, FIFO layers can be based on incomplete
                                        values — affecting COGS, valuation and margins.
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- Bottom Metric --}}
                        <div
                            class="border-t border-red-100
                           bg-white/70
                           p-6
                           sm:p-8">

                            <div
                                class="flex flex-col gap-3
                               sm:flex-row
                               sm:items-center
                               sm:justify-between">

                                <p class="text-sm font-bold
                                   text-red-700">
                                    Typical Margin Erosion
                                </p>

                                <p class="text-lg font-bold
                                   text-red-700">
                                    −5–15%
                                    <span class="text-sm font-semibold">
                                        on every import
                                    </span>
                                </p>

                            </div>


                            <div
                                class="mt-4 h-3
                               overflow-hidden
                               rounded-full
                               bg-red-100">
                                <div
                                    class="h-full w-[72%]
                                   rounded-full
                                   bg-red-600">
                                </div>
                            </div>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- RIGHT — STOCKCORE --}}
                    {{-- ============================================================ --}}

                    <article
                        class="overflow-hidden
                       rounded-[26px]
                       border border-emerald-100
                       bg-gradient-to-br
                       from-emerald-50/70
                       via-white
                       to-primary-50/30
                       shadow-[0_18px_50px_rgba(5,150,105,0.07)]">

                        {{-- Header --}}
                        <div
                            class="flex flex-col gap-5
                           border-b border-emerald-100
                           p-6
                           sm:flex-row
                           sm:items-start
                           sm:justify-between
                           sm:p-8">

                            <div class="flex items-start gap-4">

                                {{-- Icon --}}
                                <div
                                    class="flex h-14 w-14
                                   shrink-0
                                   items-center justify-center
                                   rounded-2xl
                                   bg-emerald-100
                                   text-emerald-600">

                                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.9">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m13 2-7 11h6l-1 9 7-12h-6l1-8Z" />
                                    </svg>

                                </div>


                                <div>

                                    <h3
                                        class="text-2xl font-bold
                                       tracking-tight
                                       text-secondary-900">
                                        The StockCore Standard
                                    </h3>

                                    <p class="mt-2 text-sm
                                       text-secondary-500">
                                        A complete, real-world landed cost.
                                    </p>

                                </div>

                            </div>


                            <span
                                class="inline-flex self-start
                               rounded-full
                               bg-emerald-100
                               px-4 py-2
                               text-[10px] font-bold uppercase
                               tracking-[0.08em]
                               text-emerald-700">
                                Protects Your Margins
                            </span>

                        </div>



                        {{-- Benefits --}}
                        <div class="divide-y divide-emerald-100">


                            {{-- Benefit 1 --}}
                            <div class="flex gap-4 p-6 sm:p-8">

                                <span
                                    class="flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-emerald-100
                                   text-emerald-600">

                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                    </svg>

                                </span>


                                <div>

                                    <h4
                                        class="text-base font-bold
                                       text-secondary-900">
                                        All Import Costs in One Place
                                    </h4>

                                    <p
                                        class="mt-2
                                       text-sm leading-6
                                       text-secondary-600">
                                        Bring supplier cost, freight, customs, duties,
                                        insurance, handling and related charges together
                                        into one accurate landed cost.
                                    </p>

                                </div>

                            </div>



                            {{-- Benefit 2 --}}
                            <div class="flex gap-4 p-6 sm:p-8">

                                <span
                                    class="flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-emerald-100
                                   text-emerald-600">

                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                    </svg>

                                </span>


                                <div>

                                    <h4
                                        class="text-base font-bold
                                       text-secondary-900">
                                        FX, Duty, GST & All Charges Included
                                    </h4>

                                    <p
                                        class="mt-2
                                       text-sm leading-6
                                       text-secondary-600">
                                        Apply currency conversion, freight, import
                                        duties and other charges so your per-unit cost
                                        reflects what it actually took to get stock on hand.
                                    </p>

                                </div>

                            </div>



                            {{-- Benefit 3 --}}
                            <div class="flex gap-4 p-6 sm:p-8">

                                <span
                                    class="flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-emerald-100
                                   text-emerald-600">

                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2.4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                    </svg>

                                </span>


                                <div>

                                    <h4
                                        class="text-base font-bold
                                       text-secondary-900">
                                        Accurate FIFO & Stronger Margins
                                    </h4>

                                    <p
                                        class="mt-2
                                       text-sm leading-6
                                       text-secondary-600">
                                        Push the final landed cost into inventory layers
                                        so COGS, stock valuation and gross margin are
                                        based on a more complete product cost.
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- Bottom Metric --}}
                        <div
                            class="border-t border-emerald-100
                           bg-white/70
                           p-6
                           sm:p-8">

                            <div
                                class="flex flex-col gap-3
                               sm:flex-row
                               sm:items-center
                               sm:justify-between">

                                <p class="text-sm font-bold
                                   text-emerald-700">
                                    Protected Gross Margin
                                </p>

                                <p class="text-lg font-bold
                                   text-emerald-700">
                                    +5–15%
                                    <span class="text-sm font-semibold">
                                        stronger cost visibility
                                    </span>
                                </p>

                            </div>


                            <div
                                class="mt-4 h-3
                               overflow-hidden
                               rounded-full
                               bg-emerald-100">
                                <div
                                    class="h-full w-[92%]
                                   rounded-full
                                   bg-emerald-600">
                                </div>
                            </div>

                        </div>

                    </article>

                </div>



                {{-- ================================================================== --}}
                {{-- BOTTOM EXPLANATION --}}
                {{-- ================================================================== --}}

                <div
                    class="mt-10
                   rounded-[22px]
                   border border-primary-100
                   bg-primary-50/50
                   px-6 py-6
                   sm:px-8">

                    <div
                        class="grid gap-5
                       md:grid-cols-[auto_1fr]
                       md:items-center">

                        <div
                            class="flex h-12 w-12
                           items-center justify-center
                           rounded-2xl
                           bg-white
                           text-primary-600
                           shadow-sm">

                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4 17 5-5 4 4 7-9" />

                                <path stroke-linecap="round" d="M15 7h5v5" />
                            </svg>

                        </div>


                        <div>

                            <h3 class="text-base font-bold
                               text-secondary-900">
                                The difference is not just better reporting — it is better commercial decision-making.
                            </h3>

                            <p
                                class="mt-2
                               text-sm leading-6
                               text-secondary-600">
                                When your inventory value reflects freight, duties,
                                insurance and other real costs, your team can price
                                products more confidently, understand actual margins
                                and maintain more accurate FIFO valuation.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- ====================================================================== --}}
        {{-- LANDED COST — PROFITABILITY ADVANTAGE --}}
        {{-- ====================================================================== --}}

        <section id="landing-cost-profitability"
            class="relative overflow-hidden
           bg-gradient-to-b
           from-background
           via-white
           to-background-muted
           px-4 py-20
           sm:px-6
           lg:px-8 lg:py-24">

            {{-- ================================================================== --}}
            {{-- BACKGROUND DECORATION --}}
            {{-- ================================================================== --}}

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                {{-- Top left soft shape --}}
                <div
                    class="absolute -left-[180px] -top-[220px]
                   h-[430px] w-[430px]
                   rounded-full
                   bg-primary-100/30">
                </div>

                {{-- Top right soft shape --}}
                <div
                    class="absolute -right-[200px] -top-[180px]
                   h-[480px] w-[480px]
                   rounded-full
                   bg-primary-50/60">
                </div>

                {{-- Middle glow --}}
                <div
                    class="absolute left-1/2 top-1/2
                   h-[340px] w-[760px]
                   -translate-x-1/2
                   -translate-y-1/2
                   rounded-full
                   bg-primary-100/20
                   blur-[110px]">
                </div>

            </div>



            <div class="relative z-10 mx-auto max-w-7xl">


                {{-- ================================================================== --}}
                {{-- SECTION INTRO --}}
                {{-- ================================================================== --}}

                <div class="max-w-5xl">

                    <p
                        class="text-xs font-bold uppercase
                       tracking-[0.18em]
                       text-primary-600">
                        Profitability Advantage
                    </p>


                    <h2
                        class="mt-4
                       max-w-5xl
                       text-3xl font-bold
                       leading-[1.12]
                       tracking-[-0.035em]
                       text-secondary-900
                       sm:text-4xl
                       lg:text-5xl">
                        Why Automated Landed Cost Tracking
                        <span class="block">
                            Transforms Profitability
                        </span>
                    </h2>


                    <p
                        class="mt-5 max-w-4xl
                       text-base leading-7
                       text-secondary-600
                       sm:text-lg sm:leading-8">
                        From the warehouse floor to the boardroom, landed cost
                        visibility gives your team the confidence to price smarter,
                        buy better and make stronger commercial decisions.
                    </p>

                </div>



                {{-- ================================================================== --}}
                {{-- BENEFIT GRID --}}
                {{-- ================================================================== --}}

                <div class="mt-14 grid gap-6
                   lg:grid-cols-2">


                    {{-- ============================================================ --}}
                    {{-- CARD 1 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[24px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.05)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:shadow-[0_20px_55px_rgba(15,23,42,0.08)]
                       sm:p-8
                       hover:cursor-pointer">

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 19V13m5 6V9m5 10v-7m5 7V5" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4 10 5-4 4 2 6-5" />
                                </svg>

                            </div>


                            <div class="min-w-0">

                                <h3
                                    class="text-xl font-bold
                                   tracking-tight
                                   text-secondary-900">
                                    Total Accurate Costs in Real Time
                                </h3>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-600">
                                    Eliminate manual tracking and see the complete
                                    landed cost per unit — including supplier price,
                                    freight, duties, insurance, customs and handling.
                                </p>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-500">
                                    As charges are added or updated, your cost picture
                                    stays much closer to the real amount invested in
                                    each product.
                                </p>


                                {{-- Supporting point --}}
                                <div class="mt-5 flex items-start gap-3">

                                    <span
                                        class="flex h-6 w-6
                                       shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-600
                                       text-white">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                        </svg>
                                    </span>


                                    <span
                                        class="text-sm font-semibold
                                       text-primary-600">
                                        Real-time landed cost visibility across every SKU
                                    </span>

                                </div>

                            </div>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 2 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[24px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.05)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-emerald-200
                       hover:shadow-[0_20px_55px_rgba(15,23,42,0.08)]
                       sm:p-8
                       hover:cursor-pointer">

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-emerald-50
                               text-emerald-600">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <circle cx="12" cy="12" r="7" />

                                    <circle cx="12" cy="12" r="2.5" />

                                    <path stroke-linecap="round" d="M12 3v2M12 19v2M3 12h2M19 12h2" />
                                </svg>

                            </div>


                            <div class="min-w-0">

                                <h3
                                    class="text-xl font-bold
                                   tracking-tight
                                   text-secondary-900">
                                    Smarter Pricing with True Cost Data
                                </h3>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-600">
                                    Make pricing and discount decisions using true
                                    landed cost rather than supplier price alone.
                                </p>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-500">
                                    Better cost visibility helps prevent underpricing,
                                    protect commercial margins and improve confidence
                                    when negotiating with customers.
                                </p>


                                <div class="mt-5 flex items-start gap-3">

                                    <span
                                        class="flex h-6 w-6
                                       shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-600
                                       text-white">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                        </svg>
                                    </span>


                                    <span
                                        class="text-sm font-semibold
                                       text-primary-600">
                                        Price with confidence, not assumptions
                                    </span>

                                </div>

                            </div>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 3 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[24px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.05)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-violet-200
                       hover:shadow-[0_20px_55px_rgba(15,23,42,0.08)]
                       sm:p-8
                       hover:cursor-pointer">

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-violet-50
                               text-violet-600">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7V4h6l10 10-6 6L4 10V7Z" />

                                    <circle cx="8" cy="8" r="1" fill="currentColor" stroke="none" />
                                </svg>

                            </div>


                            <div class="min-w-0">

                                <h3
                                    class="text-xl font-bold
                                   tracking-tight
                                   text-secondary-900">
                                    End-to-End Workflow Integration
                                </h3>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-600">
                                    Connect purchase orders, supplier invoices,
                                    logistics charges and inventory valuation in one
                                    continuous landed-cost workflow.
                                </p>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-500">
                                    Reduce spreadsheet dependency, minimise duplicate
                                    entry and maintain more consistent cost information
                                    between purchasing, inventory and finance.
                                </p>


                                <div class="mt-5 flex items-start gap-3">

                                    <span
                                        class="flex h-6 w-6
                                       shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-600
                                       text-white">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                        </svg>
                                    </span>


                                    <span
                                        class="text-sm font-semibold
                                       text-primary-600">
                                        Seamless workflow across purchasing, logistics and finance
                                    </span>

                                </div>

                            </div>

                        </div>

                    </article>



                    {{-- ============================================================ --}}
                    {{-- CARD 4 --}}
                    {{-- ============================================================ --}}

                    <article
                        class="group
                       rounded-[24px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_12px_40px_rgba(15,23,42,0.05)]
                       transition duration-300
                       hover:-translate-y-1
                       hover:border-primary-200
                       hover:shadow-[0_20px_55px_rgba(15,23,42,0.08)]
                       sm:p-8 hover:cursor-pointer">

                        <div class="flex items-start gap-5">

                            {{-- Icon --}}
                            <div
                                class="flex h-14 w-14
                               shrink-0
                               items-center justify-center
                               rounded-2xl
                               bg-primary-50
                               text-primary-600">

                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.9">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4 7 8-4 8 4-8 4-8-4Zm0 5 8 4 8-4M4 17l8 4 8-4" />
                                </svg>

                            </div>


                            <div class="min-w-0">

                                <h3
                                    class="text-xl font-bold
                                   tracking-tight
                                   text-secondary-900">
                                    Multi-Currency & Multi-Location Ready
                                </h3>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-600">
                                    Support international purchasing in USD, EUR, GBP,
                                    CNY, AUD and more while maintaining landed costs
                                    across warehouses, 3PL depots and other locations.
                                </p>


                                <p
                                    class="mt-3
                                   text-sm leading-6
                                   text-secondary-500">
                                    Keep imported inventory costs consistent across
                                    different currencies, shipments and storage
                                    locations.
                                </p>


                                <div class="mt-5 flex items-start gap-3">

                                    <span
                                        class="flex h-6 w-6
                                       shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-600
                                       text-white">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                                        </svg>
                                    </span>


                                    <span
                                        class="text-sm font-semibold
                                       text-primary-600">
                                        Purpose-built for complex Australian supply chains
                                    </span>

                                </div>

                            </div>

                        </div>

                    </article>

                </div>



                {{-- ================================================================== --}}
                {{-- BOTTOM VALUE STRIP --}}
                {{-- ================================================================== --}}

                <div
                    class="mt-10
                   rounded-[24px]
                   border border-primary-100
                   bg-primary-50/60
                   p-5
                   sm:p-6">

                    <div class="grid gap-5
                       sm:grid-cols-2
                       lg:grid-cols-4">


                        {{-- Item 1 --}}
                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-10 w-10
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-white
                               text-primary-600
                               shadow-sm">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4 17 5-5 4 4 7-9" />
                                </svg>
                            </span>

                            <div>

                                <p class="text-xs font-bold
                                   text-secondary-900">
                                    Stronger margins
                                </p>

                                <p class="mt-1 text-[11px]
                                   text-secondary-500">
                                    Price using true costs.
                                </p>

                            </div>

                        </div>



                        {{-- Item 2 --}}
                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-10 w-10
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-white
                               text-primary-600
                               shadow-sm">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4 7 8-4 8 4-8 4-8-4Zm0 5 8 4 8-4M4 17l8 4 8-4" />
                                </svg>
                            </span>

                            <div>

                                <p class="text-xs font-bold
                                   text-secondary-900">
                                    Accurate valuation
                                </p>

                                <p class="mt-1 text-[11px]
                                   text-secondary-500">
                                    Keep inventory cost aligned.
                                </p>

                            </div>

                        </div>



                        {{-- Item 3 --}}
                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-10 w-10
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-white
                               text-primary-600
                               shadow-sm">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                                </svg>
                            </span>

                            <div>

                                <p class="text-xs font-bold
                                   text-secondary-900">
                                    Less manual work
                                </p>

                                <p class="mt-1 text-[11px]
                                   text-secondary-500">
                                    Reduce spreadsheet handling.
                                </p>

                            </div>

                        </div>



                        {{-- Item 4 --}}
                        <div class="flex items-center gap-3">

                            <span
                                class="flex h-10 w-10
                               shrink-0
                               items-center justify-center
                               rounded-xl
                               bg-white
                               text-primary-600
                               shadow-sm">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3 4.5 6v5.25c0 4.55 3.08 8.78 7.5 9.75 4.42-.97 7.5-5.2 7.5-9.75V6L12 3Z" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-5" />
                                </svg>
                            </span>

                            <div>

                                <p class="text-xs font-bold
                                   text-secondary-900">
                                    Better decisions
                                </p>

                                <p class="mt-1 text-[11px]
                                   text-secondary-500">
                                    Work from complete cost data.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        {{-- ====================================================================== --}}
{{-- LANDING COST — FINAL CTA --}}
{{-- ====================================================================== --}}

<section
    id="landing-cost-final-cta"
    class="bg-background px-4 py-16 sm:px-6 lg:px-8 lg:py-20"
>

    <div
        class="relative mx-auto max-w-7xl overflow-hidden
               rounded-[30px]
               border border-primary-900/40
               bg-gradient-to-r
               from-secondary-900
               via-primary-950
               to-primary-900
               px-6 py-14
               text-white
               shadow-[0_30px_80px_rgba(15,23,42,0.28)]
               sm:px-10 sm:py-16
               lg:px-16 lg:py-20"
    >

        {{-- ============================================================= --}}
        {{-- DECORATIVE BACKGROUND --}}
        {{-- ============================================================= --}}

        <div class="pointer-events-none absolute inset-0 overflow-hidden">

            {{-- Left glow --}}
            <div
                class="absolute -left-24 top-16
                       h-72 w-72
                       rounded-full
                       bg-primary-500/10
                       blur-[90px]"
            ></div>


            {{-- Right glow --}}
            <div
                class="absolute -right-20 top-0
                       h-80 w-80
                       rounded-full
                       bg-primary-500/15
                       blur-[100px]"
            ></div>


            {{-- Bottom glow --}}
            <div
                class="absolute bottom-[-140px] left-1/2
                       h-80 w-[650px]
                       -translate-x-1/2
                       rounded-full
                       bg-primary-600/10
                       blur-[110px]"
            ></div>


            {{-- Left arc --}}
            <div
                class="absolute -left-[200px] top-16
                       h-[440px] w-[440px]
                       rounded-full
                       border border-primary-400/15"
            ></div>


            {{-- Right arc --}}
            <div
                class="absolute -right-[180px] bottom-[-120px]
                       h-[430px] w-[430px]
                       rounded-full
                       border border-primary-400/15"
            ></div>

        </div>



        {{-- ============================================================= --}}
        {{-- MAIN CONTENT --}}
        {{-- ============================================================= --}}

        <div class="relative z-10 mx-auto max-w-5xl text-center">


            {{-- Eyebrow --}}
            <div
                class="inline-flex items-center gap-2
                       rounded-full
                       border border-emerald-400/20
                       bg-emerald-400/10
                       px-4 py-2
                       text-xs font-bold uppercase
                       tracking-[0.14em]
                       text-emerald-300"
            >

                <span
                    class="h-2.5 w-2.5
                           rounded-full
                           bg-emerald-400
                           shadow-[0_0_16px_rgba(52,211,153,0.8)]"
                ></span>

                Turn Import Costs Into Profit

            </div>



            {{-- Heading --}}
            <h2
                class="mx-auto mt-6 max-w-4xl
                       text-4xl font-extrabold
                       leading-[1.05]
                       tracking-[-0.04em]
                       text-white
                       sm:text-5xl
                       lg:text-6xl"
            >
                Ready to eliminate margin leakage and

                <span class="block">
                    calculate exact landed costs?
                </span>
            </h2>



            {{-- Description --}}
            <p
                class="mx-auto mt-6 max-w-3xl
                       text-base leading-7
                       text-secondary-300
                       sm:text-lg sm:leading-8"
            >
                Join Australian importers and distributors using StockCore
                to capture, allocate and track every cost — so they can price
                with confidence and grow more profitably.
            </p>



            {{-- ========================================================= --}}
            {{-- CTA BUTTONS --}}
            {{-- ========================================================= --}}

            <div
                class="mt-10 flex flex-col
                       items-center justify-center
                       gap-4
                       sm:flex-row"
            >


                {{-- Primary CTA --}}
                <a
                    href="{{ url('/signup') }}"
                    class="group inline-flex
                           w-full
                           items-center justify-center
                           gap-3
                           rounded-2xl
                           bg-primary-600
                           px-8 py-4
                           text-base font-bold
                           text-white
                           shadow-[0_18px_40px_rgba(37,99,235,0.35)]
                           transition duration-300
                           hover:-translate-y-1
                           hover:bg-primary-500
                           hover:shadow-[0_22px_50px_rgba(37,99,235,0.42)]
                           sm:w-auto
                           sm:min-w-[260px]"
                >

                    Start Your Free Trial

                    <svg
                        class="h-4 w-4
                               transition-transform
                               duration-300
                               group-hover:translate-x-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2.2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-5-5 5 5-5 5"
                        />
                    </svg>

                </a>



                {{-- Secondary CTA --}}
                <a
                    href="{{ url('/contact') }}"
                    class="group inline-flex
                           w-full
                           items-center justify-center
                           gap-3
                           rounded-2xl
                           border border-white/20
                           bg-white/5
                           px-8 py-4
                           text-base font-bold
                           text-white
                           backdrop-blur-sm
                           transition duration-300
                           hover:-translate-y-1
                           hover:border-primary-300/40
                           hover:bg-white/10
                           sm:w-auto
                           sm:min-w-[280px]"
                >

                    <svg
                        class="h-5 w-5
                               text-secondary-200"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <rect
                            x="4"
                            y="5"
                            width="16"
                            height="15"
                            rx="2"
                        />

                        <path
                            stroke-linecap="round"
                            d="M8 3v4M16 3v4M4 10h16"
                        />
                    </svg>

                    Book a Personalised Demo

                </a>

            </div>



            {{-- ========================================================= --}}
            {{-- TRUST ITEMS --}}
            {{-- ========================================================= --}}

            <div
                class="mt-12
                       grid grid-cols-1
                       gap-y-4
                       sm:grid-cols-2
                       lg:grid-cols-4
                       lg:gap-y-0"
            >


                {{-- Item 1 --}}
                <div
                    class="flex items-center justify-center
                           gap-3
                           lg:border-r lg:border-white/10
                           lg:px-4"
                >

                    <span
                        class="flex h-7 w-7 shrink-0
                               items-center justify-center
                               rounded-full
                               border border-emerald-400/50
                               bg-emerald-400/10
                               text-emerald-300"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span
                        class="text-sm font-medium
                               text-secondary-200"
                    >
                        No credit card required
                    </span>

                </div>



                {{-- Item 2 --}}
                <div
                    class="flex items-center justify-center
                           gap-3
                           lg:border-r lg:border-white/10
                           lg:px-4"
                >

                    <span
                        class="flex h-7 w-7 shrink-0
                               items-center justify-center
                               rounded-full
                               border border-emerald-400/50
                               bg-emerald-400/10
                               text-emerald-300"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span
                        class="text-sm font-medium
                               text-secondary-200"
                    >
                        14-day full access
                    </span>

                </div>



                {{-- Item 3 --}}
                <div
                    class="flex items-center justify-center
                           gap-3
                           lg:border-r lg:border-white/10
                           lg:px-4"
                >

                    <span
                        class="flex h-7 w-7 shrink-0
                               items-center justify-center
                               rounded-full
                               border border-emerald-400/50
                               bg-emerald-400/10
                               text-emerald-300"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span
                        class="text-sm font-medium
                               text-secondary-200"
                    >
                        Guided setup support
                    </span>

                </div>



                {{-- Item 4 --}}
                <div
                    class="flex items-center justify-center
                           gap-3
                           lg:px-4"
                >

                    <span
                        class="flex h-7 w-7 shrink-0
                               items-center justify-center
                               rounded-full
                               border border-emerald-400/50
                               bg-emerald-400/10
                               text-emerald-300"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span
                        class="text-sm font-medium
                               text-secondary-200"
                    >
                        Built for Australian importers
                    </span>

                </div>

            </div>



            {{-- ========================================================= --}}
            {{-- SMALL SUPPORTING NOTE --}}
            {{-- ========================================================= --}}

            <p
                class="mx-auto mt-8 max-w-2xl
                       text-xs leading-5
                       text-secondary-400"
            >
                Start with your real purchasing and logistics costs and see
                how StockCore helps turn them into clearer pricing, stronger
                margins and more accurate inventory valuation.
            </p>

        </div>

    </div>

</section>



        <script>
            $(function() {

                /*
                |--------------------------------------------------------------------------
                | Elements
                |--------------------------------------------------------------------------
                */

                const $itemPrice =
                    $('#landing-item-price');

                const $quantity =
                    $('#landing-quantity');

                const $freight =
                    $('#landing-freight');

                const $duty =
                    $('#landing-duty');

                const $insurance =
                    $('#landing-insurance');

                const $other =
                    $('#landing-other');


                const $baseTotal =
                    $('#landing-base-total');

                const $landedPerUnit =
                    $('#landing-per-unit');

                const $landedTotal =
                    $('#landing-total');

                const $totalUnits =
                    $('#landing-total-units');

                const $breakdownTotal =
                    $('#landing-breakdown-total');

                const $marginMessage =
                    $('#landing-margin-message');



                /*
                |--------------------------------------------------------------------------
                | Composition Bars
                |--------------------------------------------------------------------------
                */

                const $itemBar =
                    $('#landing-bar-item');

                const $freightBar =
                    $('#landing-bar-freight');

                const $dutyBar =
                    $('#landing-bar-duty');

                const $insuranceBar =
                    $('#landing-bar-insurance');

                const $otherBar =
                    $('#landing-bar-other');



                /*
                |--------------------------------------------------------------------------
                | Legend
                |--------------------------------------------------------------------------
                */

                const $itemLegend =
                    $('#landing-legend-item');

                const $freightLegend =
                    $('#landing-legend-freight');

                const $dutyLegend =
                    $('#landing-legend-duty');

                const $insuranceLegend =
                    $('#landing-legend-insurance');

                const $otherLegend =
                    $('#landing-legend-other');



                /*
                |--------------------------------------------------------------------------
                | Allocation Buttons
                |--------------------------------------------------------------------------
                */

                const $allocationButtons =
                    $('.allocation-method');



                /*
                |--------------------------------------------------------------------------
                | Helper Functions
                |--------------------------------------------------------------------------
                */

                function numberValue($element) {

                    const value =
                        parseFloat($element.val());

                    return isNaN(value) ?
                        0 :
                        Math.max(value, 0);

                }



                function money(value) {

                    return new Intl.NumberFormat(
                        'en-AU', {
                            style: 'currency',
                            currency: 'AUD',
                            minimumFractionDigits: 2
                        }
                    ).format(value);

                }



                function normalNumber(value) {

                    return new Intl.NumberFormat(
                        'en-AU'
                    ).format(value);

                }



                function percentage(value) {

                    if (!isFinite(value)) {
                        return '0.0';
                    }

                    return value.toFixed(1);

                }



                /*
                |--------------------------------------------------------------------------
                | Calculate Landed Cost
                |--------------------------------------------------------------------------
                */

                function calculateLandedCost() {

                    /*
                    |--------------------------------------------------------------------------
                    | Read Inputs
                    |--------------------------------------------------------------------------
                    */

                    const price =
                        numberValue($itemPrice);

                    const qty =
                        Math.max(
                            numberValue($quantity),
                            1
                        );

                    const freightCost =
                        numberValue($freight);

                    const dutyCost =
                        numberValue($duty);

                    const insuranceCost =
                        numberValue($insurance);

                    const otherCost =
                        numberValue($other);



                    /*
                    |--------------------------------------------------------------------------
                    | Base Purchase Cost
                    |--------------------------------------------------------------------------
                    */

                    const purchaseBase =
                        price * qty;



                    /*
                    |--------------------------------------------------------------------------
                    | Additional Costs
                    |--------------------------------------------------------------------------
                    */

                    const additionalCosts =
                        freightCost +
                        dutyCost +
                        insuranceCost +
                        otherCost;



                    /*
                    |--------------------------------------------------------------------------
                    | Total Landed Cost
                    |--------------------------------------------------------------------------
                    */

                    const total =
                        purchaseBase +
                        additionalCosts;



                    /*
                    |--------------------------------------------------------------------------
                    | Landed Cost Per Unit
                    |--------------------------------------------------------------------------
                    */

                    const perUnit =
                        total / qty;



                    /*
                    |--------------------------------------------------------------------------
                    | Per Unit Breakdown
                    |--------------------------------------------------------------------------
                    */

                    const itemUnit =
                        price;

                    const freightUnit =
                        freightCost / qty;

                    const dutyUnit =
                        dutyCost / qty;

                    const insuranceUnit =
                        insuranceCost / qty;

                    const otherUnit =
                        otherCost / qty;



                    /*
                    |--------------------------------------------------------------------------
                    | Percentages
                    |--------------------------------------------------------------------------
                    */

                    const safeTotal =
                        perUnit > 0 ?
                        perUnit :
                        1;


                    const itemPercent =
                        (itemUnit / safeTotal) * 100;

                    const freightPercent =
                        (freightUnit / safeTotal) * 100;

                    const dutyPercent =
                        (dutyUnit / safeTotal) * 100;

                    const insurancePercent =
                        (insuranceUnit / safeTotal) * 100;

                    const otherPercent =
                        (otherUnit / safeTotal) * 100;



                    /*
                    |--------------------------------------------------------------------------
                    | Update Result Cards
                    |--------------------------------------------------------------------------
                    */

                    $baseTotal.text(
                        money(purchaseBase) + ' AUD'
                    );


                    $landedPerUnit.text(
                        money(perUnit)
                    );


                    $landedTotal.text(
                        money(total)
                    );


                    $breakdownTotal.text(
                        money(perUnit) + ' AUD'
                    );


                    $totalUnits.text(
                        'For ' +
                        normalNumber(qty) +
                        ' units'
                    );



                    /*
                    |--------------------------------------------------------------------------
                    | Update Composition Bar
                    |--------------------------------------------------------------------------
                    */

                    $itemBar.css(
                        'width',
                        itemPercent + '%'
                    );


                    $freightBar.css(
                        'width',
                        freightPercent + '%'
                    );


                    $dutyBar.css(
                        'width',
                        dutyPercent + '%'
                    );


                    $insuranceBar.css(
                        'width',
                        insurancePercent + '%'
                    );


                    $otherBar.css(
                        'width',
                        otherPercent + '%'
                    );



                    /*
                    |--------------------------------------------------------------------------
                    | Update Legend
                    |--------------------------------------------------------------------------
                    */

                    $itemLegend.text(
                        money(itemUnit) +
                        ' (' +
                        percentage(itemPercent) +
                        '%)'
                    );


                    $freightLegend.text(
                        money(freightUnit) +
                        ' (' +
                        percentage(freightPercent) +
                        '%)'
                    );


                    $dutyLegend.text(
                        money(dutyUnit) +
                        ' (' +
                        percentage(dutyPercent) +
                        '%)'
                    );


                    $insuranceLegend.text(
                        money(insuranceUnit) +
                        ' (' +
                        percentage(insurancePercent) +
                        '%)'
                    );


                    $otherLegend.text(
                        money(otherUnit) +
                        ' (' +
                        percentage(otherPercent) +
                        '%)'
                    );



                    /*
                    |--------------------------------------------------------------------------
                    | Margin Insight
                    |--------------------------------------------------------------------------
                    */

                    let increasePercent =
                        0;


                    if (price > 0) {

                        increasePercent =
                            (
                                (perUnit - price) /
                                price
                            ) * 100;

                    }


                    $marginMessage.html(

                        'Your landed cost is <strong>' +

                        percentage(increasePercent) +

                        '% higher</strong> than the supplier price (' +

                        '<strong>' +

                        money(price) +

                        '</strong> → ' +

                        '<strong>' +

                        money(perUnit) +

                        '</strong>). ' +

                        'Use landed cost when setting selling prices to protect your margins.'

                    );

                }



                /*
                |--------------------------------------------------------------------------
                | Recalculate Whenever Input Changes
                |--------------------------------------------------------------------------
                */

                $(
                    '#landing-item-price,' +
                    '#landing-quantity,' +
                    '#landing-freight,' +
                    '#landing-duty,' +
                    '#landing-insurance,' +
                    '#landing-other'
                ).on(
                    'input',
                    calculateLandedCost
                );



                /*
                |--------------------------------------------------------------------------
                | Allocation Method Selector
                |--------------------------------------------------------------------------
                |
                | Currently this changes UI state only.
                |
                | Once the calculator supports multiple products inside the same
                | purchase order, these allocation methods can perform actual
                | value / weight / volume calculations.
                |
                */

                $allocationButtons.on(
                    'click',
                    function() {

                        /*
                        | Reset all buttons
                        */

                        $allocationButtons
                            .removeClass(
                                'border-primary-500 ' +
                                'bg-primary-50 ' +
                                'text-primary-700'
                            )
                            .addClass(
                                'border-transparent ' +
                                'bg-secondary-50 ' +
                                'text-secondary-500'
                            );


                        /*
                        | Activate clicked button
                        */

                        $(this)
                            .removeClass(
                                'border-transparent ' +
                                'bg-secondary-50 ' +
                                'text-secondary-500'
                            )
                            .addClass(
                                'border-primary-500 ' +
                                'bg-primary-50 ' +
                                'text-primary-700'
                            );

                    }
                );



                /*
                |--------------------------------------------------------------------------
                | Reset Calculator
                |--------------------------------------------------------------------------
                */

                $('#landing-reset').on(
                    'click',
                    function() {

                        /*
                        | Reset values
                        */

                        $itemPrice.val(15);

                        $quantity.val(1000);

                        $freight.val(2500);

                        $duty.val(1200);

                        $insurance.val(800);

                        $other.val(500);



                        /*
                        | Reset all allocation buttons
                        */

                        $allocationButtons
                            .removeClass(
                                'border-primary-500 ' +
                                'bg-primary-50 ' +
                                'text-primary-700'
                            )
                            .addClass(
                                'border-transparent ' +
                                'bg-secondary-50 ' +
                                'text-secondary-500'
                            );



                        /*
                        | Activate "By Value"
                        */

                        $('[data-allocation="value"]')
                            .removeClass(
                                'border-transparent ' +
                                'bg-secondary-50 ' +
                                'text-secondary-500'
                            )
                            .addClass(
                                'border-primary-500 ' +
                                'bg-primary-50 ' +
                                'text-primary-700'
                            );



                        /*
                        | Recalculate
                        */

                        calculateLandedCost();

                    }
                );



                /*
                |--------------------------------------------------------------------------
                | Initial Calculation
                |--------------------------------------------------------------------------
                */

                calculateLandedCost();

            });
        </script>



    </main>

@endsection
