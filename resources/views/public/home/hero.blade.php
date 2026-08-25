<style>
    .hero-floating-card {
        animation: heroFloat 5s ease-in-out infinite;
    }

    .hero-floating-card:nth-child(2) {
        animation-delay: -1s;
    }

    .hero-floating-card:nth-child(3) {
        animation-delay: -2s;
    }

    .hero-floating-card:nth-child(4) {
        animation-delay: -3s;
    }

    .hero-floating-card:nth-child(5) {
        animation-delay: -4s;
    }

    @keyframes heroFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

    }

    #hero-laptop {
        animation: laptopFloat 6s ease-in-out infinite;
    }

    @keyframes laptopFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }

    }
</style>

<section
    class="relative min-h-[calc(100vh-80px)]
           overflow-hidden
           bg-background-muted
           flex items-center">

    {{-- Background decorative glow --}}
    <div
        class="absolute
               top-1/2 right-[15%]
               -translate-y-1/2
               w-[500px] h-[500px]
               rounded-full
               bg-primary-100/60
               blur-3xl
               pointer-events-none">
    </div>


    <div
        class="relative z-10
               w-full max-w-7xl
               mx-auto
               px-6 lg:px-8
               py-16 lg:py-20">

        <div
            class="grid
                   grid-cols-1
                   lg:grid-cols-[0.9fr_1.1fr]
                   gap-12
                   lg:gap-4
                   items-center">

            {{--   LEFT SIDE --}}

            <div class="relative z-20 text-center lg:text-left">

                
                <p
                    class="mb-5
                           text-sm
                           font-medium
                           tracking-wide
                           uppercase
                           text-primary-600">
                    Inventory Management Made Simple
                </p>


                {{-- Main heading --}}
                <h1
                    class="text-5xl
                           md:text-6xl
                           lg:text-7xl
                           font-bold
                           tracking-tight
                           leading-[1.05]
                           text-gray-900">

                    Take Control of your

                    <span class="block text-primary-600">
                        Inventory
                    </span>

                </h1>


                {{-- Description --}}
                <p
                    class="max-w-xl
                           mx-auto lg:mx-0
                           mt-6
                           text-lg md:text-xl
                           leading-8
                           text-gray-600">
                    Stockcore helps Australian businesses track
                    inventory in real time and sync effectively.
                </p>


                {{-- Buttons --}}
                <div
                    class="flex
                           flex-col
                           sm:flex-row
                           items-center
                           justify-center
                           lg:justify-start
                           gap-4
                           mt-8">

                    <a href=""
                        class="w-full sm:w-auto
                               px-7 py-3.5
                               rounded-lg
                               bg-primary-600
                               text-white
                               font-semibold
                               shadow-md
                               shadow-primary-600/20
                               hover:bg-primary-700
                               hover:-translate-y-0.5
                               transition-all duration-200
                               text-center">
                        Start Free Trial
                    </a>


                    <a href=""
                        class="w-full sm:w-auto
                               px-7 py-3.5
                               rounded-lg
                               border border-gray-300
                               bg-white
                               text-primary-700
                               font-semibold
                               shadow-sm
                               hover:bg-gray-50
                               hover:-translate-y-0.5
                               transition-all duration-200
                               text-center">
                        Book a Demo
                    </a>

                </div>


                {{-- Trust indicators --}}
                <div
                    class="flex
                           flex-col
                           sm:flex-row
                           items-center
                           justify-center
                           lg:justify-start
                           gap-4
                           sm:gap-7
                           mt-7
                           text-sm
                           text-gray-500">

                    {{-- Trial --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="flex
                                   items-center
                                   justify-center
                                   w-5 h-5
                                   rounded-full
                                   text-primary-600">
                            ✓
                        </span>

                        <span>
                            14-day free trial
                        </span>

                    </div>


                    {{-- No card --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="flex
                                   items-center
                                   justify-center
                                   w-5 h-5
                                   rounded-full
                                   text-primary-600">
                            ✓
                        </span>

                        <span>
                            No credit card required
                        </span>

                    </div>


                    {{-- Cancel --}}
                    <div class="flex items-center gap-2">

                        <span
                            class="flex
                                   items-center
                                   justify-center
                                   w-5 h-5
                                   rounded-full
                                   text-primary-600">
                            ✓
                        </span>

                        <span>
                            Cancel anytime
                        </span>

                    </div>

                </div>

            </div>



            {{-- RIGHT SIDE --}}

            <div id="hero-product-area"
                class="relative
                       min-h-[450px]
                       lg:min-h-[600px]
                       flex
                       items-center
                       justify-center">


                {{-- Decorative circle --}}
                <div
                    class="absolute
                           w-[420px]
                           h-[420px]
                           lg:w-[560px]
                           lg:h-[560px]
                           rounded-full
                           bg-primary-100/70
                           blur-2xl">
                </div>


                {{-- Decorative dotted pattern --}}
                <div
                    class="absolute
                           top-4
                           right-4
                           lg:right-10
                           grid
                           grid-cols-6
                           gap-3
                           opacity-50">

                    @for ($i = 0; $i < 24; $i++)
                        <span
                            class="w-1.5 h-1.5
                                   rounded-full
                                   bg-primary-300"></span>
                    @endfor

                </div>


               {{-- LAPTOP --}}

                <div id="hero-laptop"
                    class="relative
                           z-10
                           w-[95%]
                           sm:w-[90%]
                           lg:w-[100%]
                           max-w-[700px]">

                    <img src="{{ asset('images/company_assets/hero-image.webp') }}" alt="StockCore inventory dashboard"
                        class="w-full
                               h-auto
                               object-contain
                               drop-shadow-[0_30px_50px_rgba(15,23,42,0.18)]">

                </div>



                {{-- TOTAL PRODUCTS --}}

                <div
                    class="hero-floating-card
                           absolute
                           z-20
                           top-30
                           left-0
                           lg:left-40
                           flex
                           items-center
                           gap-3
                           px-4 py-3
                           rounded-2xl
                           bg-white/95
                           backdrop-blur-md
                           border border-white
                           shadow-[0_15px_40px_rgba(15,23,42,0.12)]">

                    <div
                        class="flex
                               items-center
                               justify-center
                               w-11 h-11
                               rounded-xl
                               bg-primary-50
                               text-primary-600">
                        📦
                    </div>

                    <div>

                        <p
                            class="text-lg
                                   font-bold
                                   text-gray-900">
                            1,284
                        </p>

                        <p class="text-xs
                                   text-gray-500">
                            Total Products
                        </p>

                    </div>

                </div>



               {{-- FLOATING CARD -> STOCK UPDATED --}}

                <div
                    class="hero-floating-card
                           absolute
                           z-20
                           left-2
                           lg:left-8
                           bottom-24
                           flex
                           items-center
                           gap-3
                           px-4 py-3
                           rounded-2xl
                           bg-white/95
                           backdrop-blur-md
                           border border-white
                           shadow-[0_15px_40px_rgba(15,23,42,0.12)]">

                    <div
                        class="flex
                               items-center
                               justify-center
                               w-10 h-10
                               rounded-full
                               bg-emerald-50
                               text-emerald-500">
                        ✓
                    </div>

                    <div>

                        <p
                            class="text-sm
                                   font-semibold
                                   text-gray-900">
                            Stock Updated
                        </p>

                        <p class="text-xs
                                   text-gray-500">
                            New quantity:
                            <span class="font-semibold text-emerald-500">
                                120 pcs
                            </span>
                        </p>

                    </div>

                </div>



              {{-- FLOATING CARD -> LOW STOCK --}}

                <div
                    class="hero-floating-card
                           absolute
                           z-20
                           top-24
                           right-0
                           lg:right-0
                           flex
                           items-center
                           gap-3
                           px-4 py-3
                           rounded-2xl
                           bg-white/95
                           backdrop-blur-md
                           border border-white
                           shadow-[0_15px_40px_rgba(15,23,42,0.12)]">

                    <div
                        class="flex
                               items-center
                               justify-center
                               w-10 h-10
                               rounded-full
                               bg-amber-50
                               text-amber-500">
                        !
                    </div>

                    <div>

                        <p
                            class="text-sm
                                   font-semibold
                                   text-gray-900">
                            Low Stock
                        </p>

                        <p class="text-xs
                                   text-gray-500">
                            32 items need attention
                        </p>

                    </div>

                </div>



                {{-- FLOATING CARD -> INVENTORY VALUE --}}

                <div
                    class="hero-floating-card
                           absolute
                           z-20
                           right-0
                           bottom-16
                           lg:right-2
                           flex
                           items-center
                           gap-3
                           px-4 py-3
                           rounded-2xl
                           bg-white/95
                           backdrop-blur-md
                           border border-white
                           shadow-[0_15px_40px_rgba(15,23,42,0.12)]">

                    <div
                        class="flex
                               items-center
                               justify-center
                               w-10 h-10
                               rounded-full
                               bg-primary-50
                               text-primary-600
                               text-lg">
                        $
                    </div>

                    <div>

                        <p
                            class="text-sm
                                   font-semibold
                                   text-gray-900">
                            Inventory Value
                        </p>

                        <p
                            class="text-lg
                                   font-bold
                                   text-gray-900">
                            $145,230
                        </p>

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>

@push('scripts')

<script>

    $(document).ready(function () {

        const hero = $('#hero-product-area');
        const laptop = $('#hero-laptop');
        const cards = $('.hero-floating-card');


        hero.on('mousemove', function (e) {

            const rect = this.getBoundingClientRect();

            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const moveX = (x - centerX) / centerX;
            const moveY = (y - centerY) / centerY;


            // Laptop movement
            laptop.css(
                'transform',
                `translate(${moveX * 5}px, ${moveY * 5}px)`
            );


            // Floating cards movement
            cards.each(function (index) {

                const intensity = (index + 1) * 2;

                $(this).css(
                    'transform',
                    `translate(${moveX * intensity}px, ${moveY * intensity}px)`
                );

            });

        });


        // Reset when mouse leaves
        hero.on('mouseleave', function () {

            laptop.css(
                'transform',
                'translate(0, 0)'
            );

            cards.css(
                'transform',
                'translate(0, 0)'
            );

        });

    });

</script>

@endpush