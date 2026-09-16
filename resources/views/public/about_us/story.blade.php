{{-- story page --}}

<section
    id="about-story"
    class="relative overflow-hidden bg-background-muted py-24 sm:py-28 lg:py-32"
>

    <div class="mx-auto max-w-6xl px-6 sm:px-8 lg:px-10">


        {{-- ================================================= --}}
        {{-- SECTION TITLE --}}
        {{-- ================================================= --}}

        <div class="text-center">

            <p
                class="text-3xl font-medium tracking-tight text-primary-600 sm:text-4xl"
            >
                Our story.
            </p>

        </div>



        {{-- ================================================= --}}
        {{-- STORY ROW 01 --}}
        {{-- IMAGE LEFT / TEXT RIGHT --}}
        {{-- ================================================= --}}

        <div
            class="mt-16 grid items-center gap-10 lg:grid-cols-2 lg:gap-16"
        >

            {{-- Image --}}
            <div class="relative">

                <div
                    class="relative mx-auto max-w-[520px] rotate-[-1deg] overflow-hidden border border-secondary-200 bg-white p-1.5 shadow-[0_18px_45px_rgba(15,23,42,0.14)]"
                >

                    <img
                        src="{{ asset('images/about/story-spreadsheet.webp') }}"
                        alt="A growing business managing inventory using spreadsheets"
                        class="aspect-[16/10] w-full object-cover"
                    >

                </div>

            </div>


            {{-- Copy --}}
            <div class="max-w-xl">

                <h2
                    class="text-2xl font-medium tracking-tight text-primary-600 sm:text-3xl"
                >
                    It started with spreadsheets.
                </h2>

                <p
                    class="mt-5 text-base leading-8 text-secondary-600 sm:text-lg"
                >
                    Like many growing businesses, inventory starts simple.
                    A spreadsheet can track products, quantities and orders
                    without much effort.
                </p>

                <p
                    class="mt-4 text-base leading-8 text-secondary-600 sm:text-lg"
                >
                    But as more products, suppliers, locations and people are
                    added, that simplicity starts to disappear. Files multiply,
                    updates become manual, and it becomes harder to know which
                    numbers can actually be trusted.
                </p>

            </div>

        </div>



        {{-- ================================================= --}}
        {{-- STORY ROW 02 --}}
        {{-- TEXT LEFT / STOCKCORE BRAND RIGHT --}}
        {{-- ================================================= --}}

        <div
            class="mt-20 grid items-center gap-10 lg:mt-24 lg:grid-cols-2 lg:gap-16"
        >

            {{-- Copy --}}
            <div class="order-2 max-w-xl lg:order-1">

                <h2
                    class="text-2xl font-medium tracking-tight text-primary-600 sm:text-3xl"
                >
                    Why StockCore?
                </h2>

                <p
                    class="mt-5 text-base leading-8 text-secondary-600 sm:text-lg"
                >
                    The other end of the market often meant moving into a large
                    ERP system — powerful, but expensive, complex and designed
                    around the needs of much larger organisations.
                </p>

                <p
                    class="mt-4 text-base leading-8 text-secondary-600 sm:text-lg"
                >
                    We saw businesses needing something in between: more
                    structure and control than a spreadsheet, without turning
                    inventory management into a major software implementation
                    project.
                </p>

            </div>


            {{-- StockCore brand visual --}}
            <div class="order-1 lg:order-2">

                <div
                    class="relative mx-auto flex min-h-[260px] max-w-[540px] items-center justify-center overflow-hidden bg-background px-8 py-10 sm:px-12"
                >

                    {{-- subtle border line --}}
                    <div
                        class="absolute inset-x-8 top-0 h-px bg-secondary-200"
                        aria-hidden="true"
                    ></div>

                    <div class="text-center">

                        {{-- Replace with your real StockCore logo --}}
                        <img
                            src="{{ asset('images/company_assets/logo.webp') }}"
                            alt="StockCore"
                            class="mx-auto max-h-24 w-auto max-w-[340px] object-contain sm:max-w-[420px]"
                        >

                        <p
                            class="mt-6 text-xs font-semibold uppercase tracking-[0.28em] text-secondary-500"
                        >
                            Inventory made practical.
                        </p>

                    </div>


                    {{-- Minimal decorative marks --}}
                    <span
                        class="absolute left-8 top-8 h-2 w-2 rounded-full bg-primary-200"
                        aria-hidden="true"
                    ></span>

                    <span
                        class="absolute bottom-8 right-10 h-1.5 w-1.5 rounded-full bg-primary-300"
                        aria-hidden="true"
                    ></span>

                </div>

            </div>

        </div>



        {{-- ================================================= --}}
        {{-- STORY ROW 03 --}}
        {{-- IMAGE LEFT / TEXT RIGHT --}}
        {{-- ================================================= --}}

        <div
            class="mt-20 grid items-center gap-10 lg:mt-24 lg:grid-cols-2 lg:gap-16"
        >

            {{-- Image --}}
            <div class="relative">

                <div
                    class="relative mx-auto max-w-[520px] rotate-[1deg] overflow-hidden border border-secondary-200 bg-white p-1.5 shadow-[0_18px_45px_rgba(15,23,42,0.14)]"
                >

                    <img
                        src="{{ asset('images/about/story-warehouse.webp') }}"
                        alt="StockCore being used in a warehouse inventory operation"
                        class="aspect-[16/10] w-full object-cover"
                    >

                </div>

            </div>


            {{-- Copy --}}
            <div class="max-w-xl">

                <h2
                    class="text-2xl font-medium tracking-tight text-primary-600 sm:text-3xl"
                >
                    A practical middle ground.
                </h2>

                <p
                    class="mt-5 text-base leading-8 text-secondary-600 sm:text-lg"
                >
                    That is why we built StockCore: a focused inventory platform
                    for growing businesses that need reliable stock control,
                    clearer visibility and better day-to-day processes.
                </p>

                <p
                    class="mt-4 text-base leading-8 text-secondary-600 sm:text-lg"
                >
                    The goal is simple — provide the inventory capabilities that
                    matter, keep the software approachable, and avoid adding
                    complexity just for the sake of having more features.
                </p>


                {{-- small final note --}}
                <div
                    class="mt-8 border-l-2 border-primary-500 pl-5"
                >

                    <p
                        class="text-sm font-medium leading-6 text-secondary-700"
                    >
                        Built for businesses that have outgrown spreadsheets,
                        without asking them to become ERP experts.
                    </p>

                </div>

            </div>

        </div>



        {{-- ================================================= --}}
        {{-- BOTTOM DIVIDER --}}
        {{-- ================================================= --}}

        <div class="mt-24 flex items-center gap-5">

            <div class="h-px flex-1 bg-secondary-200"></div>

            <span
                class="text-[10px] font-semibold uppercase tracking-[0.25em] text-secondary-400"
            >
                The StockCore story continues
            </span>

            <div class="h-px flex-1 bg-secondary-200"></div>

        </div>

    </div>

</section>