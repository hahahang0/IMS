 {{-- hero of faq page --}}

<section
    id="faq-hero"
    class="relative overflow-hidden border-b border-secondary-100 bg-background"
>

    {{-- background decoration --}}
    <div
        class="pointer-events-none absolute inset-0 overflow-hidden"
        aria-hidden="true"
    >

        {{-- Large top-left soft circle --}}
        <div
            class="absolute
                   -left-[180px] -top-[230px]
                   h-[560px] w-[560px]
                   rounded-full
                   bg-primary-50"
        ></div>

        {{-- Large right soft circle --}}
        <div
            class="absolute
                   -right-[230px] -top-[120px]
                   h-[640px] w-[640px]
                   rounded-full
                   bg-primary-50"
        ></div>

        {{-- Subtle centre glow --}}
        <div
            class="absolute
                   left-1/2 top-1/2
                   h-[300px] w-[720px]
                   -translate-x-1/2 -translate-y-1/2
                   rounded-full
                   bg-white/50
                   blur-[90px]"
        ></div>

    </div>


{{-- hero content --}}
    <div
        class="relative z-10 mx-auto
               flex min-h-[480px] max-w-7xl
               items-start justify-center
               px-6 pb-14 pt-[78px]
               sm:px-8
               lg:px-8"
    >

        <div class="w-full max-w-[800px] text-center">


        {{-- heading --}}
            <h1
                class="mx-auto
                       font-extrabold
                       tracking-[-0.05em]
                       text-secondary-950"
            >

                <span
                    class="block
                           text-[42px] leading-[1.02]
                           sm:text-[50px]
                           lg:text-[60px]"
                >
                    Built in Australia.
                </span>

                <span
                    class="mt-1 block
                           text-[42px] leading-[1.02]
                           sm:text-[50px]
                           lg:text-[60px]"
                >

                    <span class="text-primary-600">
                        Here when you
                    </span>

                    <span class="text-secondary-950">
                        need us.
                    </span>

                </span>

            </h1>


           {{-- description --}}
            <p
                class="mx-auto mt-6
                       max-w-[640px]
                       text-[15px] leading-7
                       text-secondary-600
                       sm:text-base
                       lg:text-[17px]"
            >
                StockCore is an Australian-based inventory platform,
                helping growing businesses with practical, reliable
                software and local support.
            </p>


     {{-- search area --}}
            <div
                class="mx-auto mt-10
                       w-full max-w-[575px]"
            >

          
                <div
                    class="group
                           flex h-[58px] w-full
                           items-center
                           rounded-2xl
                           border border-secondary-200
                           bg-white
                           px-5
                           shadow-[0_8px_24px_rgba(15,23,42,0.06)]
                           transition-all duration-300
                           focus-within:border-primary-300
                           focus-within:shadow-[0_10px_30px_rgba(37,99,235,0.10)]
                           focus-within:ring-4
                           focus-within:ring-primary-50"
                >

                 
                    <span
                        class="flex h-5 w-5 shrink-0
                               items-center justify-center
                               text-secondary-600"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-5 w-5"
                            aria-hidden="true"
                        >
                            <circle cx="11" cy="11" r="7"></circle>
                            <path d="m20 20-3.5-3.5"></path>
                        </svg>

                    </span>


                 
                    <input
                        id="faq-search"
                        type="search"
                        autocomplete="off"
                        placeholder="Search questions (e.g., 'free trial', 'Xero', 'security', 'cancel')..."
                        class="ml-3
                               h-full min-w-0 flex-1
                               border-0
                               bg-transparent
                               p-0
                               text-sm
                               font-normal
                               text-secondary-800
                               outline-none
                               placeholder:text-secondary-500
                               focus:border-0
                               focus:outline-none
                               focus:ring-0"
                    >

                </div>


     
                <div
                    class="mt-3
                           flex flex-col gap-3
                           px-2
                           sm:flex-row
                           sm:items-center
                           sm:justify-between"
                >

               
                    <p
                        class="text-left
                               text-[12px] font-medium
                               text-secondary-800"
                    >
                        Showing
                        <span id="visible-question-count">6</span>
                        of
                        <span id="total-question-count">6</span>
                        questions
                    </p>


                 
                    <div
                        class="flex flex-wrap
                               items-center gap-2"
                    >

                        <button
                            type="button"
                            data-search="Xero"
                            class="faq-search-tag
                                   rounded-md
                                   border border-secondary-200
                                   bg-white
                                   px-2.5 py-1
                                   text-[11px] font-medium
                                   leading-none
                                   text-secondary-700
                                   shadow-sm
                                   transition
                                   hover:border-primary-300
                                   hover:bg-primary-50
                                   hover:text-primary-600"
                        >
                            #Xero
                        </button>


                        <button
                            type="button"
                            data-search="Cin7"
                            class="faq-search-tag
                                   rounded-md
                                   border border-secondary-200
                                   bg-white
                                   px-2.5 py-1
                                   text-[11px] font-medium
                                   leading-none
                                   text-secondary-700
                                   shadow-sm
                                   transition
                                   hover:border-primary-300
                                   hover:bg-primary-50
                                   hover:text-primary-600"
                        >
                            #Cin7
                        </button>


                        <button
                            type="button"
                            data-search="trial"
                            class="faq-search-tag
                                   rounded-md
                                   border border-secondary-200
                                   bg-white
                                   px-2.5 py-1
                                   text-[11px] font-medium
                                   leading-none
                                   text-secondary-700
                                   shadow-sm
                                   transition
                                   hover:border-primary-300
                                   hover:bg-primary-50
                                   hover:text-primary-600"
                        >
                            #Trial
                        </button>

                    </div>

                </div>

            </div> 

        </div>

    </div>

</section>

{{-- hero search interaction --}}

<script>
    $(document).ready(function () {

        const $searchInput = $('#faq-search');

     /* quick search tags */

        $('.faq-search-tag').on('click', function () {

            const searchTerm = $(this).data('search');

            $searchInput
                .val(searchTerm)
                .trigger('input')
                .focus();

        });

    });
</script>

