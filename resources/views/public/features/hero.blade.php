{{-- hero section- feature page --}}

<section
    class="relative overflow-hidden bg-gradient-to-br
               from-white via-blue-50/70 to-slate-50
               px-4 py-20 sm:px-6 sm:py-24 lg:px-8 lg:py-28">

    {{-- Decorative Background Shapes --}}
    <div
        class="pointer-events-none absolute
                   -left-32 bottom-[-100px]
                   h-[420px] w-[420px]
                   rounded-full
                   bg-blue-100/40 blur-3xl">
    </div>

    <div
        class="pointer-events-none absolute
                   -right-32 top-10
                   h-[360px] w-[360px]
                   rounded-full
                   bg-blue-100/30 blur-3xl">
    </div>

    <div
        class="pointer-events-none absolute
                   bottom-[-140px] left-1/2
                   h-[380px] w-[700px]
                   -translate-x-1/2
                   rounded-[50%]
                   bg-blue-100/25 blur-2xl">
    </div>



    {{-- Decorative Dot Grid Left --}}
    <div
        class="pointer-events-none absolute
                   left-8 top-20
                   hidden grid-cols-5 gap-3
                   opacity-50 lg:grid">

        @for ($i = 0; $i < 20; $i++)
            <span class="h-2 w-2 rounded-full bg-blue-100"></span>
        @endfor

    </div>



    {{-- Decorative Dot Grid Right --}}
    <div
        class="pointer-events-none absolute
                   bottom-24 right-10
                   hidden grid-cols-5 gap-3
                   opacity-50 lg:grid">

        @for ($i = 0; $i < 20; $i++)
            <span class="h-2 w-2 rounded-full bg-blue-100"></span>
        @endfor

    </div>



    {{-- Main Content --}}
    <div class="relative z-10
                   mx-auto
                   max-w-6xl
                   text-center">


        {{-- eyebrow badge --}}

        <div
            class="mx-auto inline-flex
                       items-center gap-2
                       rounded-full
                       border border-blue-300
                       bg-white/80
                       px-4 py-2
                       text-xs font-semibold
                       text-blue-700
                       shadow-[0_8px_24px_rgba(37,99,235,0.10)]
                       backdrop-blur-sm">

            <span
                class="flex h-5 w-5
                           items-center justify-center
                           rounded-full
                           bg-blue-100
                           text-blue-600">

                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m4 7 8-4 8 4-8 4-8-4Zm0 5 8 4 8-4M4 17l8 4 8-4" />
                </svg>

            </span>

            Complete Inventory Control Platform

        </div>



        {{-- hero heading. --}}

        <h1
            class="mx-auto mt-8
                       max-w-5xl
                       text-4xl
                       font-extrabold
                       leading-[1.05]
                       tracking-[-0.04em]
                       text-slate-950
                       sm:text-5xl
                       lg:text-6xl">

            Smarter inventory management built

            <span class="block">
                for modern growth.
            </span>

        </h1>



        {{-- hero description --}}

        <p
            class="mx-auto mt-7
                       max-w-4xl
                       text-base
                       leading-8
                       text-slate-600
                       sm:text-lg
                       lg:text-xl">

            <span class="font-semibold text-slate-700">
                StockCore
            </span>

            is the end-to-end inventory operating system designed to give
            growing businesses complete real-time visibility, automated FIFO
            costing, seamless accounting sync, and zero-stockout confidence.

        </p>


        {{-- cta buttons --}}

        <div
            class="mt-10
                       flex flex-col
                       items-center
                       justify-center
                       gap-4
                       sm:flex-row">


            {{-- Primary Button --}}
            <a href="{{ url('/signup') }}"
                class="group inline-flex
                           min-w-[230px]
                           items-center
                           justify-center
                           gap-2
                           rounded-xl
                           bg-blue-600
                           px-6 py-4
                           text-sm
                           font-bold
                           text-white
                           shadow-[0_15px_35px_rgba(37,99,235,0.28)]
                           transition
                           duration-300
                           hover:-translate-y-1
                           hover:bg-blue-700
                           hover:shadow-[0_18px_40px_rgba(37,99,235,0.35)]">

                Start 14-Day Free Trial

                <svg class="h-4 w-4 transition-transform
                               duration-300
                               group-hover:translate-x-1"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                </svg>

            </a>



            {{-- Secondary Button --}}
            <a href="#demo"
                class="group inline-flex
                           min-w-[210px]
                           items-center
                           justify-center
                           gap-3
                           rounded-xl
                           border
                           border-slate-200
                           bg-white
                           px-6 py-4
                           text-sm
                           font-semibold
                           text-slate-700
                           shadow-sm
                           transition
                           duration-300
                           hover:-translate-y-1
                           hover:border-blue-200
                           hover:text-blue-600
                           hover:shadow-lg">

                <span
                    class="flex h-6 w-6
                               items-center
                               justify-center
                               rounded-full
                               bg-blue-600
                               text-white
                               transition
                               duration-300
                               group-hover:scale-110">

                    <svg class="ml-0.5 h-3 w-3" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z" />
                    </svg>

                </span>

                Watch 2-Min Demo

            </a>

        </div>


        {{-- truest points --}}

        <div
            class="mt-8
                       flex flex-wrap
                       items-center
                       justify-center
                       gap-x-6
                       gap-y-3">


            {{-- Trust Item --}}
            <div class="flex items-center gap-2">

                <span
                    class="flex h-5 w-5
                               items-center justify-center
                               rounded-full
                               bg-emerald-100
                               text-emerald-600">

                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                    </svg>

                </span>

                <span class="text-xs font-medium text-slate-500">
                    14-day free trial
                </span>

            </div>



            {{-- Trust Item --}}
            <div class="flex items-center gap-2">

                <span
                    class="flex h-5 w-5
                               items-center justify-center
                               rounded-full
                               bg-emerald-100
                               text-emerald-600">

                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                    </svg>

                </span>

                <span class="text-xs font-medium text-slate-500">
                    No credit card required
                </span>

            </div>



            {{-- Trust Item --}}
            <div class="flex items-center gap-2">

                <span
                    class="flex h-5 w-5
                               items-center justify-center
                               rounded-full
                               bg-emerald-100
                               text-emerald-600">

                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                    </svg>

                </span>

                <span class="text-xs font-medium text-slate-500">
                    Cancel anytime
                </span>

            </div>

        </div>

    </div>

</section>
