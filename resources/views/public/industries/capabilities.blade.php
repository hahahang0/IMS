<section class="relative overflow-hidden bg-primary-950 py-24 sm:py-32">

    @php
        $industryWorkflows = [
            [
                'name' => 'Wholesale & Distribution',
                'description' =>
                    'Manage bulk inventory, warehouses and orders with complete visibility across your operation.',
            ],
            [
                'name' => 'Retail',
                'description' =>
                    'Keep products available and inventory accurate across stores, warehouses and sales channels.',
            ],
            [
                'name' => 'Food & Beverage',
                'description' =>
                    'Track batches and expiry dates while keeping stock moving efficiently and reducing waste.',
            ],
            [
                'name' => 'Import & Export',
                'description' =>
                    'Stay on top of incoming shipments, suppliers and inventory movements from arrival to warehouse.',
            ],
            [
                'name' => '3PL & Warehousing',
                'description' =>
                    'Manage inventory across warehouses, clients and fulfilment operations from one central platform.',
            ],
        ];
    @endphp


    {{-- background --}}

    <div class="pointer-events-none absolute inset-0">

        {{-- Large ambient glows --}}
        <div class="absolute -left-40 top-20 h-[500px] w-[500px] rounded-full bg-primary-600/10 blur-[140px]"></div>

        <div class="absolute -right-40 bottom-0 h-[550px] w-[550px] rounded-full bg-indigo-600/10 blur-[140px]"></div>

        {{-- Grid --}}
        {{-- <div
            class="absolute inset-0 opacity-[0.035]"
            style="
                background-image:
                    linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
                background-size: 48px 48px;
            "
        ></div> --}}

    </div>


    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}

        <div class="mx-auto max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 text-xs font-semibold tracking-wide text-primary-300">
                <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-primary-400"></span>

                ONE PLATFORM · EVERY WORKFLOW
            </span>


            <h2 class="mt-6 text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Built around the way
                <br>

                <span
                    class="bg-gradient-to-r from-primary-400 via-indigo-400 to-violet-400 bg-clip-text text-transparent">
                    your business works.
                </span>
            </h2>


            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-slate-400 sm:text-lg">
                Every industry handles inventory differently.
                StockCore brings the right visibility, control and
                workflows together in one connected platform.
            </p>

        </div>

        {{-- Main experience --}}

        <div class="mt-20 grid items-center gap-14 lg:grid-cols-[0.75fr_1.25fr]">


            {{-- left industries navigation --}}

            {{-- left industries navigation --}}
            <div>
                <p class="mb-6 text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                    Choose your operation
                </p>

                <div class="space-y-1" id="industry-navigation">

                    @foreach ($industryWorkflows as $index => $industry)
                        <div class="industry-item group relative cursor-pointer border-b border-white/[0.07] py-5"
                            data-industry="{{ $index }}">

                            {{-- Active indicator --}}
                            <div
                                class="industry-indicator absolute -left-4 top-1/2 h-8 w-0.5 -translate-y-1/2 rounded-full bg-primary-400 shadow-[0_0_14px_rgba(96,165,250,.8)] transition-all duration-300 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}">
                            </div>

                            <div class="flex items-center justify-between gap-6">

                                <div class="flex items-center gap-5">

                                    <span
                                        class="industry-number font-mono text-xs text-slate-600 transition group-hover:text-primary-400">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>

                                    <h3
                                        class="industry-name text-base font-semibold transition duration-300 group-hover:translate-x-1 sm:text-lg {{ $index === 0 ? 'text-white' : 'text-slate-300' }}">
                                        {{ $industry['name'] }}
                                    </h3>

                                </div>

                                <svg class="industry-arrow h-4 w-4 shrink-0 transition duration-300 group-hover:translate-x-1 group-hover:text-primary-400 {{ $index === 0 ? 'text-primary-400' : 'text-slate-600' }}"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                                </svg>

                            </div>

                            {{-- Industry description --}}
                            <div
                                class="industry-description overflow-hidden transition-all duration-500 ease-out {{ $index === 0 ? 'mt-3 max-h-24 opacity-100' : 'mt-0 max-h-0 opacity-0' }}">
                                <p class="pl-9 pr-8 text-sm leading-6 text-slate-500">
                                    {{ $industry['description'] }}
                                </p>
                            </div>

                        </div>
                    @endforeach

                </div>

                {{-- Small supporting text --}}
                <div class="mt-8 flex items-center gap-3 text-xs text-slate-600">
                    <span class="h-px w-8 bg-slate-700"></span>

                    <span>
                        Designed to adapt as you grow
                    </span>
                </div>

            </div>


            {{-- right visuals  --}}

            <div class="relative min-h-[560px]">


                {{-- Floating background circles --}}
                <div class="absolute left-[8%] top-[5%] h-32 w-32 rounded-full border border-primary-400/10"></div>

                <div class="absolute right-[8%] top-[10%] h-20 w-20 rounded-full border border-indigo-400/10"></div>

                <div class="absolute bottom-[5%] right-[15%] h-40 w-40 rounded-full border border-violet-400/10"></div>


                {{-- Main visual --}}
                <div
                    class="absolute inset-8 overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.045] shadow-2xl shadow-primary-950/30 backdrop-blur-xl">

                    {{-- Inner glow --}}
                    <div
                        class="pointer-events-none absolute left-1/2 top-1/2 h-80 w-80 -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-500/10 blur-[100px]">
                    </div>


                    {{-- Top bar --}}
                    <div class="relative flex items-center justify-between border-b border-white/[0.07] px-6 py-5">

                        <div class="flex items-center gap-3">

                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary-500/10">
                                <svg class="h-4 w-4 text-primary-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h10" />
                                </svg>
                            </div>

                            <span class="text-sm font-medium text-slate-300">
                                Inventory workflow
                            </span>

                        </div>


                        <div class="flex items-center gap-2">

                            <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-emerald-400"></span>

                            <span class="text-xs text-slate-500">
                                Live
                            </span>

                        </div>

                    </div>



                    {{-- Workflow visual --}}
                    <div class="relative px-8 py-10">


                        {{-- Connecting line --}}
                        <div
                            class="absolute left-[59px] top-[76px] h-[330px] w-px bg-gradient-to-b from-primary-400/50 via-indigo-400/30 to-transparent">
                        </div>


                        <div class="space-y-8">


                            {{-- SUPPLIER --}}
                            <div class="relative flex items-center gap-5">

                                <div
                                    class="relative z-10 flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-primary-950 shadow-xl shadow-primary-950/30">

                                    <svg class="h-6 w-6 text-primary-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 7h18M5 7v10m14-10v10M8 17v3m8-3v3M4 7l2-4h12l2 4" />
                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm font-semibold text-white">
                                        Supplier
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Incoming inventory
                                    </p>

                                </div>


                                {{-- Floating quantity --}}
                                <div
                                    class="ml-auto hidden rounded-lg border border-white/[0.08] bg-white/[0.04] px-3 py-2 sm:block">
                                    <p class="text-[10px] text-slate-600">
                                        Incoming
                                    </p>

                                    <p class="text-xs font-semibold text-primary-300">
                                        +2,480
                                    </p>
                                </div>

                            </div>



                            {{-- RECEIVING --}}
                            <div class="relative flex items-center gap-5">

                                <div
                                    class="relative z-10 flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-primary-950 shadow-xl">

                                    <svg class="h-6 w-6 text-indigo-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 6h16v12H4zM8 10h8M8 14h5" />
                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm font-semibold text-white">
                                        Receiving
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Stock checked & recorded
                                    </p>

                                </div>

                            </div>



                            {{-- WAREHOUSE --}}
                            <div class="relative flex items-center gap-5">

                                <div
                                    class="relative z-10 flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-primary-950 shadow-xl">

                                    <svg class="h-6 w-6 text-primary-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 10l9-5 9 5v9H3v-9zM7 14h10M7 17h10" />
                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm font-semibold text-white">
                                        Warehouse
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Real-time stock visibility
                                    </p>

                                </div>


                                {{-- Floating status --}}
                                <div
                                    class="ml-auto hidden items-center gap-2 rounded-lg border border-emerald-400/10 bg-emerald-400/[0.05] px-3 py-2 sm:flex">

                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>

                                    <span class="text-xs font-medium text-emerald-300">
                                        98.6% accurate
                                    </span>

                                </div>

                            </div>



                            {{-- ORDERS --}}
                            <div class="relative flex items-center gap-5">

                                <div
                                    class="relative z-10 flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-primary-950 shadow-xl">

                                    <svg class="h-6 w-6 text-violet-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 7h12l1 12H5L6 7zm3 0a3 3 0 016 0" />
                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm font-semibold text-white">
                                        Orders
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Stock allocated automatically
                                    </p>

                                </div>

                            </div>



                            {{-- CUSTOMER --}}
                            {{-- <div class="relative flex items-center gap-5">

                                <div
                                    class="relative z-10 flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-primary-500/10 shadow-xl shadow-primary-500/10">

                                    <svg class="h-6 w-6 text-primary-300" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="1.7">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20 21a8 8 0 00-16 0M12 13a4 4 0 100-8 4 4 0 000 8z" />
                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm font-semibold text-white">
                                        Customer
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Order fulfilled
                                    </p>

                                </div>

                            </div> --}}

                        </div>

                    </div>

                </div>



                {{-- floating objects --}}

                {{-- Top right analytics --}}
                <div
                    class="absolute -right-2 top-12 hidden w-44 animate-[float_5s_ease-in-out_infinite] rounded-xl border border-white/10 bg-primary-950/90 p-4 shadow-2xl backdrop-blur-xl sm:block">

                    <div class="flex items-center justify-between">

                        <span class="text-[10px] uppercase tracking-wider text-slate-500">
                            Stock health
                        </span>

                        <span class="text-xs font-semibold text-emerald-400">
                            +12.4%
                        </span>

                    </div>

                    <div class="mt-3 flex items-end gap-1">

                        <span class="h-4 w-2 rounded-sm bg-primary-500/30"></span>
                        <span class="h-6 w-2 rounded-sm bg-primary-500/40"></span>
                        <span class="h-5 w-2 rounded-sm bg-primary-500/50"></span>
                        <span class="h-8 w-2 rounded-sm bg-primary-500/60"></span>
                        <span class="h-7 w-2 rounded-sm bg-primary-500/70"></span>
                        <span class="h-10 w-2 rounded-sm bg-primary-400"></span>
                        <span class="h-12 w-2 rounded-sm bg-indigo-400"></span>

                    </div>

                </div>



                {{-- Bottom left --}}
                <div
                    class="absolute -bottom-2 -left-4 hidden animate-[float_6s_ease-in-out_infinite] rounded-xl border border-white/10 bg-primary-950/90 px-5 py-4 shadow-2xl backdrop-blur-xl sm:block">

                    <p class="text-[10px] uppercase tracking-wider text-slate-500">
                        Orders synced
                    </p>

                    <div class="mt-1 flex items-baseline gap-2">

                        <span class="text-xl font-bold text-white">
                            12,480
                        </span>

                        {{-- <span class="text-xs text-primary-400">
                            today
                        </span> --}}


                    </div>



                    {{-- Floating small circle --}}
                    <div
                        class="absolute left-0 top-24 h-3 w-3 animate-[float_4s_ease-in-out_infinite] rounded-full bg-primary-400 shadow-[0_0_20px_rgba(96,165,250,.8)]">
                    </div>


                    {{-- Floating diamond --}}
                    <div
                        class="absolute bottom-24 right-0 h-5 w-5 rotate-45 animate-[spin_12s_linear_infinite] rounded-sm border border-indigo-400/40">
                    </div>


                    {{-- Orbit ring --}}
                    <div class="absolute -right-8 bottom-20 h-24 w-24 rounded-full border border-primary-400/10"></div>

                </div>

            </div>



            {{-- bottom statement --}}

            {{-- <div
                class="mt-4 flex flex-col items-center justify-between gap-6 border-t border-white/[0.08] pt-4 sm:flex-row">

                <p class="max-w-md text-sm leading-6 text-slate-500">
                    One connected system for inventory visibility,
                    stock control and smarter operations.
                </p>


                <div class="flex flex-wrap items-center justify-center gap-x-7 gap-y-3">

                    <span class="text-xs font-medium text-slate-500">
                        Real-time visibility
                    </span>

                    <span class="h-1 w-1 rounded-full bg-slate-700"></span>

                    <span class="text-xs font-medium text-slate-500">
                        Multi-location control
                    </span>

                    <span class="h-1 w-1 rounded-full bg-slate-700"></span>

                    <span class="text-xs font-medium text-slate-500">
                        Smarter workflows
                    </span>

                </div>

            </div> --}}

        </div>

        {{-- animation --}}

        <style>
            @keyframes float {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-10px);
                }
            }
        </style>

</section>

{{--  animation using script --}}
{{-- animation --}}

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const industryItems = document.querySelectorAll('.industry-item');

        industryItems.forEach(item => {

            item.addEventListener('click', function () {

                // Close / deactivate every industry
                industryItems.forEach(otherItem => {

                    const indicator = otherItem.querySelector('.industry-indicator');
                    const name = otherItem.querySelector('.industry-name');
                    const arrow = otherItem.querySelector('.industry-arrow');
                    const description = otherItem.querySelector('.industry-description');

                    indicator.classList.remove('opacity-100');
                    indicator.classList.add('opacity-0');

                    name.classList.remove('text-white');
                    name.classList.add('text-slate-300');

                    arrow.classList.remove('text-primary-400');
                    arrow.classList.add('text-slate-600');

                    description.classList.remove(
                        'mt-3',
                        'max-h-24',
                        'opacity-100'
                    );

                    description.classList.add(
                        'mt-0',
                        'max-h-0',
                        'opacity-0'
                    );
                });

                // Activate selected industry
                const indicator = this.querySelector('.industry-indicator');
                const name = this.querySelector('.industry-name');
                const arrow = this.querySelector('.industry-arrow');
                const description = this.querySelector('.industry-description');

                indicator.classList.remove('opacity-0');
                indicator.classList.add('opacity-100');

                name.classList.remove('text-slate-300');
                name.classList.add('text-white');

                arrow.classList.remove('text-slate-600');
                arrow.classList.add('text-primary-400');

                description.classList.remove(
                    'mt-0',
                    'max-h-0',
                    'opacity-0'
                );

                description.classList.add(
                    'mt-3',
                    'max-h-24',
                    'opacity-100'
                );
            });

        });

    });
</script>

