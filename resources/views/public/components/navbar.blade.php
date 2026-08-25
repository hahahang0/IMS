   <nav class="sticky top-0 z-50 border-b border-slate-200 bg-background">

       <div class=" mx-auto flex h-16 max-w-7xl items-center justify-between px-6 lg:px-8">

           <a href="/" class="flex h-full items-center">
               <img src="{{ asset('images/company_assets/cropped_logo.webp') }}" alt="Company Logo"
                   class="h-10 w-auto object-contain">
           </a>
           {{-- Navigation --}}
           <div class="hidden items-center gap-8 md:flex">

               <div class="group relative">

                   {{-- Features trigger --}}
                   <a href="{{ url('#') }}"
                       class="flex items-center gap-1
               text-sm font-medium
               text-slate-600
               transition
               hover:text-blue-600">

                       Features

                       <svg class="h-4 w-4 transition-transform duration-200
                   group-hover:rotate-180"
                           viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                               d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 9.29289L12.7071 14.7071Z"
                               fill="currentColor" />
                       </svg>

                   </a>


                   {{-- MENU --}}
                   <div
                       class="invisible absolute left-1/2 top-full z-50
               w-[760px] -translate-x-1/2 translate-y-2
               rounded-b-xl
               border border-slate-200
               bg-white
               opacity-0
               shadow-[0_20px_50px_rgba(15,23,42,0.12)]
               transition-all duration-200
               group-hover:visible
               group-hover:translate-y-0
               group-hover:opacity-100">

                       {{-- Small top accent --}}
                       <div class="h-[2px] w-24 mx-auto bg-primary-600"></div>


                       <div class="grid grid-cols-2">


                           {{-- LEFT COLUMN --}}

                           <div class="px-8 py-7 border-r border-slate-200">

                               {{-- Section heading --}}
                               <h3
                                   class="mb-6
                           text-sm
                           font-semibold
                           tracking-wide
                           text-slate-900
                           uppercase">
                                   Core Features
                               </h3>


                               {{-- Landing Cost --}}
                               <a href="{{ url('#') }}"
                                   class="group/item flex gap-4
                           rounded-lg
                           py-3
                           transition
                           hover:bg-slate-50">

                                   <div
                                       class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-blue-50
                               text-primary-600">

                                       {{-- Calculator --}}
                                       <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                           stroke-width="1.7">
                                           <rect x="5" y="2" width="14" height="20" rx="2" />

                                           <path d="M8 6h8" />
                                           <path d="M8 11h2" />
                                           <path d="M14 11h2" />
                                           <path d="M8 15h2" />
                                           <path d="M14 15h2" />
                                           <path d="M8 19h2" />
                                           <path d="M14 19h2" />
                                       </svg>

                                   </div>


                                   <div>

                                       <h4
                                           class="text-sm
                                   font-semibold
                                   text-slate-800
                                   group-hover/item:text-primary-600">
                                           Landing Cost Calculator
                                       </h4>

                                       <p class="mt-0.5 text-xs leading-5 text-slate-500">
                                           Calculate the true landed cost of your products
                                       </p>

                                   </div>

                               </a>



                               {{-- Scan & Import --}}
                               <a href="{{ url('#') }}"
                                   class="group/item flex gap-4
                           rounded-lg
                           py-3
                           transition
                           hover:bg-slate-50">

                                   <div
                                       class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-violet-50
                               text-violet-600">

                                       <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                           stroke-width="1.7">
                                           <path d="M14 2H6a2 2 0 0 0-2 2v16
                                   a2 2 0 0 0 2 2h12
                                   a2 2 0 0 0 2-2V8z" />

                                           <polyline points="14 2 14 8 20 8" />

                                           <path d="M8 13h8" />
                                           <path d="M8 17h5" />
                                       </svg>

                                   </div>


                                   <div>

                                       <h4
                                           class="text-sm
                                   font-semibold
                                   text-slate-800
                                   group-hover/item:text-primary-600">
                                           Scan & Import Documents
                                       </h4>

                                       <p class="mt-0.5 text-xs leading-5 text-slate-500">
                                           Quickly scan and import your inventory documents
                                       </p>

                                   </div>

                               </a>



                               {{-- Stock Tracking --}}
                               <a href="{{ url('#') }}"
                                   class="group/item flex gap-4
                           rounded-lg
                           py-3
                           transition
                           hover:bg-slate-50">

                                   <div
                                       class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-emerald-50
                               text-emerald-600">

                                       <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                           stroke-width="1.7">
                                           <path d="M21 16V8
                                   a2 2 0 0 0-1-1.73l-7-4
                                   a2 2 0 0 0-2 0l-7 4
                                   A2 2 0 0 0 3 8v8
                                   a2 2 0 0 0 1 1.73l7 4
                                   a2 2 0 0 0 2 0l7-4
                                   A2 2 0 0 0 21 16Z" />

                                           <polyline points="3.27 6.96 12 12.01 20.73 6.96" />

                                           <line x1="12" y1="22.08" x2="12" y2="12" />
                                       </svg>

                                   </div>


                                   <div>

                                       <h4
                                           class="text-sm
                                   font-semibold
                                   text-slate-800
                                   group-hover/item:text-primary-600">
                                           Stock Tracking
                                       </h4>

                                       <p class="mt-0.5 text-xs leading-5 text-slate-500">
                                           Track product movements and stock decreases in real time
                                       </p>

                                   </div>

                               </a>



                               {{-- Divider --}}
                               <div class="my-3 border-t border-slate-200"></div>



                               {{-- Features overview --}}
                               <a href="{{ url('#') }}"
                                   class="group/item flex gap-4
                           rounded-lg
                           py-3
                           transition
                           hover:bg-slate-50">

                                   <div
                                       class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-primary-50
                               text-primary-600">

                                       <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                           stroke-width="1.7">
                                           <rect x="3" y="3" width="7" height="7" rx="1" />
                                           <rect x="14" y="3" width="7" height="7" rx="1" />
                                           <rect x="3" y="14" width="7" height="7" rx="1" />
                                           <rect x="14" y="14" width="7" height="7" rx="1" />
                                       </svg>

                                   </div>


                                   <div>

                                       <h4
                                           class="text-sm
                                   font-semibold
                                   text-slate-800
                                   group-hover/item:text-primary-600">
                                           All Features
                                       </h4>

                                       <p class="mt-0.5 text-xs leading-5 text-slate-500">
                                           Explore everything StockCore has to offer
                                       </p>

                                   </div>

                               </a>

                           </div>



                           {{-- RIGHT COLUMN --}}

                           <div class="bg-slate-50/70 px-8 py-7">

                               <h3
                                   class="mb-6
                           text-sm
                           font-semibold
                           tracking-wide
                           text-slate-900
                           uppercase">
                                   Inventory & Operations
                               </h3>


                               {{-- Serial / Expiry --}}
                               <a href="{{ url('#') }}"
                                   class="group/item flex gap-4
                           rounded-lg
                           py-3
                           transition
                           hover:bg-white">

                                   <div
                                       class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-amber-50
                               text-amber-600">

                                       {{-- Clock --}}
                                       <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                           stroke-width="1.7">
                                           <circle cx="12" cy="12" r="9" />
                                           <polyline points="12 7 12 12 15 14" />
                                       </svg>

                                   </div>


                                   <div>

                                       <h4
                                           class="text-sm
                                   font-semibold
                                   text-slate-800
                                   group-hover/item:text-primary-600">
                                           Serial No. / Expiry / Real-Time Stock
                                       </h4>

                                       <p class="mt-0.5 text-xs leading-5 text-slate-500">
                                           Manage serial numbers, expiry dates and live stock
                                       </p>

                                   </div>

                               </a>



                               {{-- FIFO --}}
                               <a href="{{ url('#') }}"
                                   class="group/item flex gap-4
                           rounded-lg
                           py-3
                           transition
                           hover:bg-white">

                                   <div
                                       class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-rose-50
                               text-rose-600">

                                       <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                           stroke-width="1.7">
                                           <path d="m12 2 9 5-9 5-9-5 9-5Z" />
                                           <path d="m3 12 9 5 9-5" />
                                           <path d="m3 17 9 5 9-5" />
                                       </svg>

                                   </div>


                                   <div>

                                       <h4
                                           class="text-sm
                                   font-semibold
                                   text-slate-800
                                   group-hover/item:text-primary-600">
                                           FIFO Costing System
                                       </h4>

                                       <p class="mt-0.5 text-xs leading-5 text-slate-500">
                                           Keep inventory costs accurate with FIFO costing
                                       </p>

                                   </div>

                               </a>



                               {{-- Packeting --}}
                               <a href="{{ url('#') }}"
                                   class="group/item flex gap-4
                           rounded-lg
                           py-3
                           transition
                           hover:bg-white">

                                   <div
                                       class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-cyan-50
                               text-cyan-600">

                                       <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                           stroke-width="1.7">
                                           <path d="M21 16V8
                                   a2 2 0 0 0-1-1.73l-7-4
                                   a2 2 0 0 0-2 0l-7 4
                                   A2 2 0 0 0 3 8v8
                                   a2 2 0 0 0 1 1.73l7 4
                                   a2 2 0 0 0 2 0l7-4
                                   A2 2 0 0 0 21 16Z" />

                                           <path d="m3.3 7 8.7 5 8.7-5" />
                                           <path d="M12 22V12" />
                                       </svg>

                                   </div>


                                   <div>

                                       <h4
                                           class="text-sm
                                   font-semibold
                                   text-slate-800
                                   group-hover/item:text-primary-600">
                                           Packeting
                                       </h4>

                                       <p class="mt-0.5 text-xs leading-5 text-slate-500">
                                           Manage products by carton, box and piece
                                       </p>

                                   </div>

                               </a>



                               {{-- Integrations --}}
                               <a href="{{ url('/') }}"
                                   class="group/item flex gap-4
                           rounded-lg
                           py-3
                           transition
                           hover:bg-white">

                                   <div
                                       class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg
                               bg-indigo-50
                               text-indigo-600">

                                       <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                           stroke-width="1.7">
                                           <path d="M10 13a5 5 0 0 0 7.54.54l3-3
                                   a5 5 0 0 0-7.07-7.07l-1.72 1.71" />

                                           <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3
                                   a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                       </svg>

                                   </div>


                                   <div>

                                       <h4
                                           class="text-sm
                                   font-semibold
                                   text-slate-800
                                   group-hover/item:text-primary-600">
                                           Integrations
                                       </h4>

                                       <p class="mt-0.5 text-xs leading-5 text-slate-500">
                                           Connect Xero, Cin7 and your other business tools
                                       </p>

                                   </div>

                               </a>

                           </div>

                       </div>

                   </div>

               </div>


               <a href="#industries" class='text-sm font-medium text-slate-600 transition hover:text-blue-600'>
                   Industries
               </a>

               <a href="#integrations" class='text-sm font-medium text-slate-600 transition hover:text-blue-600'>
                   Integrations
               </a>

               <a href="#pricing" class='text-sm font-medium text-slate-600 transition hover:text-blue-600'>
                   Pricing
               </a>

               <a href="#resources" class='text-sm font-medium text-slate-600 transition hover:text-blue-600'>
                   Resources
               </a>

           </div>


           {{-- login and start-trail buttons --}}
           <div class="flex items-center gap-5">

               <a href="#"
                   class='hidden text-sm font-medium text-slate-700 transition hover:text-blue-600 sm:block'>
                   Login
               </a>

               <a href="#"
                   class="group inline-flex items-center gap-0 rounded-lg bg-primary-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition duration-200 hover:bg-blue-700 hover:shadow-md">
                   Start Free Trial

               </a>

           </div>

       </div>

   </nav>
