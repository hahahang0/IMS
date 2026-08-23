<section class="relative overflow-hidden bg-background py-20 sm:py-24 lg:py-32">

    {{-- Decorative background --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute left-[-120px] top-[420px] h-80 w-80 rounded-full bg-blue-100/40 blur-3xl"></div>
        <div class="absolute right-[-160px] top-[180px] h-96 w-96 rounded-full bg-blue-50 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid items-start gap-16 lg:grid-cols-12 lg:gap-20">

            <div class="lg:col-span-5">

                <div
                    class="mb-7 inline-flex items-center gap-2 rounded-full
                            border border-blue-100 bg-blue-50 px-4 py-2
                            text-lg font-semibold text-primary-600">

                    <span class="flex h-5 w-5 items-center justify-center rounded-full bg-primary-600 text-white">
                        <svg class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 2a8 8 0 1 0 8 8 8 8 0 0 0-8-8Zm1 11H9V9h2v4Zm0-6H9V5h2v2Z" />
                        </svg>
                    </span>

                    HOW IT WORKS
                </div>



                <h2 class="max-w-xl text-5xl font-black  text-slate-950 sm:text-6xl">

                    From stock to
                    <br>

                    insights,

                    <span class="text-primary-600">
                        without the busywork.
                    </span>

                </h2>



                <p class="mt-7 max-w-lg text-lg leading-8 text-slate-500">

                    Import your inventory, track every movement,
                    keep your systems synchronized, and get the
                    reports you need — all from one place.

                </p>



                <div class="mt-8 flex items-center gap-3 text-sm font-medium text-slate-600">

                    <span
                        class="flex h-6 w-6 items-center justify-center rounded-full
                                 border-2 border-primary-500 text-primary-500">

                        <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.25 7.25a1 1 0 0 1-1.414 0l-3.75-3.75a1 1 0 1 1 1.414-1.414l3.043 3.043 6.543-6.543a1 1 0 0 1 1.408 0Z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>

                    Simple workflow. Powerful results.

                </div>


                {{-- Dashboard preview --}}
                {{-- <div class="group relative mt-12">

                    <div class="absolute -inset-4 rounded-3xl bg-blue-100/50
                                opacity-0 blur-2xl transition duration-500
                                group-hover:opacity-100">
                    </div>


                    <div class="relative overflow-hidden rounded-2xl border
                                border-slate-200 bg-white shadow-[0_25px_70px_-30px_rgba(15,23,42,0.35)]">

                        {{-- Dashboard top bar --}}
                {{-- <div class="flex h-12 items-center justify-between
                                    border-b border-slate-100 px-4">

                            <div class="flex items-center gap-2">

                                <div class="flex h-6 w-6 items-center justify-center rounded-md bg-blue-600">
                                    <svg class="h-3.5 w-3.5 text-white"
                                         viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor"
                                         stroke-width="2">
                                        <path d="M4 4h16v16H4z"/>
                                        <path d="M8 8h8M8 12h5M8 16h3"/>
                                    </svg>
                                </div>

                                <span class="text-xs font-bold text-slate-800">
                                    StockCore
                                </span>

                            </div>

                            <div class="h-2 w-16 rounded-full bg-slate-100"></div>

                        </div> --}}


                {{-- <div class="flex">

                            <div class="hidden w-32 border-r border-slate-100 p-3 sm:block">

                                <div class="mb-3 rounded-lg bg-blue-50 px-3 py-2 text-[10px]
                                            font-semibold text-blue-600">
                                    Dashboard
                                </div>

                                <div class="space-y-3 px-3 text-[10px] text-slate-400">
                                    <div>Inventory</div>
                                    <div>Movements</div>
                                    <div>Reports</div>
                                    <div>Integrations</div>
                                    <div>Settings</div>
                                </div>

                            </div>


                            <div class="flex-1 bg-slate-50/60 p-4">

                               
                                <div class="grid grid-cols-2 gap-2 sm:grid-cols-4">

                                    @foreach ([['Total Items', '2,450'], ['In Stock', '1,890'], ['Low Stock', '128'], ['Out of Stock', '32']] as $stat)

                                        <div class="rounded-lg border border-slate-100
                                                    bg-white p-2.5">

                                            <p class="text-[8px] text-slate-400">
                                                {{ $stat[0] }}
                                            </p>

                                            <p class="mt-1 text-sm font-bold text-slate-900">
                                                {{ $stat[1] }}
                                            </p>

                                        </div>

                                    @endforeach

                                </div>


                           
                                <div class="mt-3 grid gap-3 sm:grid-cols-5">

                                    <div class="rounded-lg border border-slate-100
                                                bg-white p-3 sm:col-span-3">

                                        <p class="text-[9px] font-semibold text-slate-700">
                                            Stock Movements
                                        </p>

                                        <svg class="mt-3 h-28 w-full"
                                             viewBox="0 0 300 100"
                                             preserveAspectRatio="none">

                                            <path
                                                d="M0 82
                                                   C20 75, 20 65, 40 70
                                                   S60 55, 80 64
                                                   S100 45, 120 50
                                                   S140 25, 160 38
                                                   S180 55, 200 43
                                                   S220 30, 240 34
                                                   S260 12, 280 25
                                                   S295 20, 300 16"
                                                fill="none"
                                                stroke="currentColor"
                                                class="text-blue-600"
                                                stroke-width="3"
                                                stroke-linecap="round"/>

                                        </svg>

                                    </div>



                                    <div class="rounded-lg border border-slate-100
                                                bg-white p-3 sm:col-span-2">

                                        <p class="text-[9px] font-semibold text-slate-700">
                                            Stock Status
                                        </p>

                                        <div class="mt-3 flex justify-center">

                                            <div class="relative flex h-20 w-20 items-center justify-center
                                                        rounded-full bg-[conic-gradient(#2563eb_0_68%,#10b981_68%_82%,#f59e0b_82%_92%,#ef4444_92%_100%)]">

                                                <div class="flex h-12 w-12 items-center justify-center
                                                            rounded-full bg-white">

                                                    <span class="text-xs font-bold text-slate-800">
                                                        2,450
                                                    </span>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div> --}}

                {{-- </div>

                </div>  --}}
                <div class="group mt-12">
                    <div
                        class="overflow-hidden rounded-2xl border border-slate-200 bg-white
                    shadow-[0_25px_80px_-25px_rgba(15,23,42,0.25)]
                    transition duration-500
                    group-hover:-translate-y-1
                    group-hover:shadow-[0_35px_90px_-25px_rgba(15,23,42,0.3)]">

                        <img src="{{ asset('images/company_assets/stockcore_dashboard.webp') }}"
                            alt="StockCore inventory management dashboard" class="block w-full">

                    </div>
                </div>

            </div>


            <div class="relative lg:col-span-7">


                <div class="relative">

                    <div
                        class="absolute left-[30px] top-8 bottom-8 hidden
                                w-px bg-blue-100 sm:block">
                    </div>


                    @php
                        $steps = [
                            [
                                'number' => '01',
                                'title' => 'Import your stock',
                                'description' =>
                                    'Quickly import your products, inventory, invoices, and other stock documents into StockCore.',
                                'icon' => 'upload',
                            ],
                            [
                                'number' => '02',
                                'title' => 'Track in real time',
                                'description' =>
                                    'Keep track of stock movements, quantities, serial numbers, expiry dates, and product changes as they happen.',
                                'icon' => 'chart',
                            ],
                            [
                                'number' => '03',
                                'title' => 'Sync with Xero & Cin7',
                                'description' =>
                                    'Keep your accounting and inventory systems synchronized with the tools your business already uses.',
                                'icon' => 'link',
                            ],
                            [
                                'number' => '04',
                                'title' => 'Report & analyze',
                                'description' =>
                                    'Turn your inventory data into clear reports and actionable insights for better decisions.',
                                'icon' => 'bars',
                            ],
                        ];
                    @endphp


                    @foreach ($steps as $step)
                        <div
                            class="group relative grid grid-cols-[48px_1fr]
                                    gap-6 border-b border-slate-200 py-7 first:pt-0
                                    last:border-0 sm:grid-cols-[60px_1fr] sm:gap-7 ">


                            <div class="relative z-10">

                                <span
                                    class="absolute -left-1 top-1 text-xs
                                             font-semibold text-primary-500 sm:-left-2">

                                    {{ $step['number'] }}

                                </span>


                                <div
                                    class="ml-0 mt-7 flex h-14 w-14 items-center justify-center
                                            rounded-full border border-blue-100 bg-white
                                            text-primary-600 shadow-[0_10px_30px_-15px_rgba(37,99,235,0.5)]
                                            transition duration-300
                                            group-hover:border-blue-300
                                            group-hover:bg-blue-50
                                            sm:h-16 sm:w-16 cursor-pointer">

                                    @if ($step['icon'] === 'upload')
                                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 16V4m0 0L7 9m5-5 5 5" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 14v4a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-4" />
                                        </svg>
                                    @elseif($step['icon'] === 'chart')
                                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 17l5-5 4 3 7-8" />
                                            <path stroke-linecap="round" d="M17 7h3v3" />
                                        </svg>
                                    @elseif($step['icon'] === 'link')
                                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10 13a5 5 0 0 0 7.07.07l2-2a5 5 0 0 0-7.07-7.07l-1.15 1.15" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14 11a5 5 0 0 0-7.07-.07l-2 2A5 5 0 0 0 7 20l1.15-1.15" />
                                        </svg>
                                    @else
                                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 19V9m7 10V5m7 14v-7" />
                                        </svg>
                                    @endif

                                </div>

                            </div>


                            <div class="pt-8">

                                <h3
                                    class="text-xl font-bold tracking-tight text-slate-950
                                           transition-colors group-hover:text-primary-600 sm:text-2xl cursor-pointer">

                                    {{ $step['title'] }}

                                </h3>

                                <p class="mt-3 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">

                                    {{ $step['description'] }}

                                </p>

                            </div>

                        </div>
                    @endforeach

                </div>



                <div
                    class="mt-8 rounded-2xl border border-blue-100 bg-gradient-to-br
                            from-blue-50 to-white p-6 shadow-sm sm:p-7">

                    <div class="flex items-start gap-5">

                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center
                                    rounded-xl bg-primary-600 text-white shadow-lg
                                    shadow-primary-600/20">

                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">

                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3l2.2 5.8L20 11l-5.8 2.2L12 19l-2.2-5.8L4 11l5.8-2.2L12 3Z" />

                            </svg>

                        </div>


                        <div>

                            <h3 class="text-lg font-bold text-slate-950">
                                Everything in one place
                            </h3>

                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                No more spreadsheets. No more manual updates.
                                Just accurate data and real insights.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
