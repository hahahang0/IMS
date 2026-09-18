{{-- blog newsletter section --}}

<section id="blog-newsletter"
    class="relative overflow-hidden
           bg-background
           py-20
           sm:py-24
           lg:py-28">

    {{-- background decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Left soft curve --}}
        <div
            class="absolute
                   -left-[320px] -top-[350px]
                   h-[680px] w-[680px]
                   rounded-full
                   border-[100px]
                   border-primary-50/60">
        </div>


        {{-- Right soft circle --}}
        <div
            class="absolute
                   -right-[270px] -bottom-[320px]
                   h-[620px] w-[620px]
                   rounded-full
                   bg-primary-50/60">
        </div>


        {{-- Soft center glow --}}
        <div
            class="absolute
                   left-1/2 top-1/2
                   h-[420px] w-[900px]
                   -translate-x-1/2
                   -translate-y-1/2
                   rounded-full
                   bg-white/80
                   blur-[120px]">
        </div>

    </div>



    {{-- newsletter container --}}
    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               sm:px-8
               lg:px-8">

        <div
            class="group
                   relative
                   overflow-hidden
                   rounded-[30px]
                   border border-primary-100
                   bg-white
                   shadow-[0_24px_70px_rgba(15,23,42,0.07)]">

            <div
                class="grid
                       lg:min-h-[520px]
                       lg:grid-cols-[1.05fr_0.95fr]">

                {{-- left content --}}
                <div
                    class="relative z-20
                           flex flex-col
                           justify-center
                           px-7 py-12
                           sm:px-10
                           lg:px-14
                           lg:py-14">

                    {{-- Eyebrow --}}
                    <div class="flex items-center gap-3">

                        <span
                            class="h-[2px] w-10
                                   rounded-full
                                   bg-primary-600"></span>


                        <span
                            class="text-[11px]
                                   font-bold uppercase
                                   tracking-[0.08em]
                                   text-secondary-500">
                            Stay up to date
                        </span>

                    </div>



                    {{-- Heading --}}
                    <h2
                        class="mt-6
                               max-w-[700px]
                               text-[38px]
                               font-extrabold
                               leading-[1.05]
                               tracking-[-0.045em]
                               text-secondary-950
                               sm:text-[46px]
                               lg:text-[52px]">

                        Get the latest inventory

                        <span class="block">

                            insights,

                            <span class="text-primary-600">
                                straight to your inbox.
                            </span>

                        </span>

                    </h2>



                    {{-- Description --}}
                    <p
                        class="mt-6
                               max-w-[650px]
                               text-[16px]
                               leading-8
                               text-secondary-600
                               sm:text-[17px]">
                        Join our newsletter for new guides, product updates and expert
                        tips — so you can run a smarter, more efficient business.
                    </p>



                    {{-- subscribe form --}}
                    <form action="#" method="POST" class="mt-8
                               max-w-[720px]">

                        <div
                            class="flex
                                   min-h-[64px]
                                   items-center
                                   rounded-[16px]
                                   border border-secondary-200
                                   bg-white
                                   p-1.5
                                   shadow-[0_10px_30px_rgba(15,23,42,0.05)]

                                   transition-all duration-300

                                   focus-within:border-primary-300
                                   focus-within:ring-4
                                   focus-within:ring-primary-50">

                            {{-- Mail icon --}}
                            <span
                                class="ml-3
                                       flex h-10 w-10
                                       shrink-0
                                       items-center justify-center
                                       text-secondary-400">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="14" rx="2" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6" />
                                </svg>
                            </span>



                            {{-- Email --}}
                            <input type="email" name="email" required autocomplete="email"
                                placeholder="Enter your email address..."
                                class="h-12
                                       min-w-0 flex-1
                                       border-0
                                       bg-transparent
                                       px-2
                                       text-[14px]
                                       text-secondary-900
                                       outline-none

                                       placeholder:text-secondary-400

                                       focus:border-0
                                       focus:outline-none
                                       focus:ring-0

                                       sm:px-3
                                       sm:text-[15px]">



                            {{-- Subscribe --}}
                            <button type="submit"
                                class="group/button
                                       inline-flex
                                       h-[52px]
                                       shrink-0
                                       items-center justify-center
                                       gap-3
                                       rounded-[13px]
                                       bg-primary-600
                                       px-5
                                       text-[14px]
                                       font-semibold
                                       text-white

                                       shadow-[0_10px_24px_rgba(37,99,235,0.24)]

                                       transition-all duration-300

                                       hover:bg-primary-700
                                       hover:shadow-[0_14px_30px_rgba(37,99,235,0.30)]

                                       sm:px-8
                                       sm:text-[15px]
                                       hover:cursor-pointer">

                                Subscribe


                                <svg class="h-4 w-4
                                           transition-transform
                                           duration-300
                                           group-hover/button:translate-x-1"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                                </svg>

                            </button>

                        </div>



                        {{-- Privacy --}}
                        <p
                            class="mt-3
                                   text-[12px]
                                   text-secondary-500">
                            No spam. Unsubscribe anytime.
                        </p>

                    </form>






                </div>



                {{-- right image --}}
                <div
                    class="relative
                           min-h-[370px]
                           overflow-hidden
                           sm:min-h-[430px]
                           lg:min-h-[520px]">

                    {{-- Image --}}
                    <img src="{{ asset('images/blog/newsletter-person.webp') }}"
                        alt="Business professional reading StockCore inventory insights"
                        class="absolute inset-0
                               h-full w-full
                               object-cover
                               object-center

                               transition-transform
                               duration-700
                               ease-out

                               group-hover:scale-[1.025]
                               hover:cursor-pointer">



                    {{-- diagonal left cut --}}
                    <div class="pointer-events-none
                               absolute
                               inset-y-0
                               -left-px
                               hidden
                               w-[130px]
                               bg-white
                               lg:block"
                        style="
                            clip-path:
                            polygon(
                                0 0,
                                100% 0,
                                35% 100%,
                                0 100%
                            );
                        ">
                    </div>



                    {{-- soft blue overlay --}}
                    <div
                        class="pointer-events-none
                               absolute inset-0
                               bg-gradient-to-r
                               from-primary-50/10
                               via-transparent
                               to-primary-50/5">
                    </div>



                    {{-- floating message --}}
                    <div
                        class="absolute
                               left-[10%] top-[18%]
                               z-20
                               hidden
                               items-center gap-3
                               rounded-[18px]
                               border border-white/80
                               bg-white/95
                               px-4 py-3
                               shadow-[0_16px_40px_rgba(15,23,42,0.12)]
                               backdrop-blur-md
                               sm:flex">

                        <span
                            class="flex h-10 w-10
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="3" y="5" width="18" height="14" rx="2" />

                                <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6" />
                            </svg>
                        </span>


                        <p
                            class="text-[12px]
                                   font-semibold
                                   leading-5
                                   text-secondary-700">
                            New insights<br>
                            delivered to you
                        </p>

                    </div>



                    {{-- decorative lines --}}
                    <div
                        class="pointer-events-none
                               absolute
                               left-[5%] top-[18%]
                               hidden
                               text-primary-600
                               sm:block">
                        <svg class="h-24 w-24" viewBox="0 0 96 96" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" d="M16 74C20 47 34 33 62 31" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="m55 23 10 8-11 7" />
                        </svg>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
