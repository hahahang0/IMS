{{-- faq and support for contact page --}}
@php

    $faqs = [
        [
            'question' => 'How do I get started with StockCore?',
            'answer' =>
                'You can start with our 14-day free trial. Simply create your account, follow the setup process, and you’ll be ready to begin managing your inventory.',
        ],

        [
            'question' => 'Can I integrate StockCore with Xero or Cin7?',
            'answer' =>
                'StockCore is designed to work with popular business platforms and integrations. Available integrations depend on your plan and current StockCore integration support.',
        ],

        [
            'question' => 'Do you offer customer support?',
            'answer' =>
                'Yes. Our support team can help with account questions, product guidance, troubleshooting and general StockCore enquiries.',
        ],

        [
            'question' => 'Is my data secure?',
            'answer' =>
                'StockCore is built with security and responsible data handling in mind. Access controls and other security measures are designed to help protect your business information.',
        ],

        [
            'question' => 'Can I upgrade or change my plan later?',
            'answer' =>
                'Yes. You can move to a different StockCore plan as your business requirements change, including when you need more users, products, locations or functionality.',
        ],

        [
            'question' => 'Do you provide training?',
            'answer' =>
                'We provide onboarding guidance and learning resources to help your team understand StockCore and get comfortable with the platform.',
        ],
    ];

@endphp


<section id="contact-support-faq"
    class="relative overflow-hidden
           bg-background
           py-20 sm:py-24 lg:py-28">

    {{-- background decoration --}}

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Top-left circles --}}
        <div
            class="absolute -left-[240px] -top-[260px]
                   h-[520px] w-[520px]
                   rounded-full
                   bg-primary-50">
        </div>

        <div
            class="absolute -left-[280px] -top-[170px]
                   h-[480px] w-[480px]
                   rounded-full
                   bg-primary-100/70">
        </div>


        {{-- Bottom-right circles --}}
        <div
            class="absolute -bottom-[360px] -right-[250px]
                   h-[650px] w-[650px]
                   rounded-full
                   bg-primary-50">
        </div>

        <div
            class="absolute -bottom-[300px] -right-[170px]
                   h-[560px] w-[560px]
                   rounded-full
                   border border-primary-200">
        </div>


        {{-- Top-right dots --}}
        <div class="absolute right-[6%] top-[8%]
                   hidden grid-cols-5 gap-3
                   md:grid">
            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-200"></span>
            @endfor
        </div>


        {{-- Bottom-left dots --}}
        <div
            class="absolute bottom-[8%] left-[3%]
                   hidden grid-cols-5 gap-3
                   md:grid">
            @for ($i = 0; $i < 20; $i++)
                <span
                    class="h-1.5 w-1.5
                           rounded-full
                           bg-primary-200"></span>
            @endfor
        </div>

    </div>



    {{-- main content --}}

    <div class="relative z-10
               mx-auto max-w-7xl
               px-6 sm:px-8 lg:px-8">

        <div
            class="grid grid-cols-1
                   gap-14
                   lg:grid-cols-12
                   lg:items-start
                   lg:gap-16">

            {{-- left side --}}

            <div class="lg:col-span-5">

                <div class="max-w-[470px]">
                    {{-- eyebrow --}}

                    <div class="flex items-center gap-4">




                        <span
                            class="text-[11px] font-bold
                                   uppercase
                                   tracking-[0.26em]
                                   text-primary-600">
                            FAQ & Support
                        </span>


                        <span class="h-px w-12 bg-primary-400" aria-hidden="true"></span>

                    </div>


                    {{-- heading --}}

                    <h2
                        class="mt-8
                               text-4xl font-extrabold
                               leading-[1.02]
                               tracking-[-0.05em]
                               text-secondary-950
                               sm:text-5xl
                               lg:text-[3.9rem]">
                        Got questions?

                        <span class="block text-primary-600">
                            We’ve got answers<span class="text-secondary-950">.</span>
                        </span>
                    </h2>


                    {{-- description --}}

                    <p
                        class="mt-6
                               max-w-[440px]
                               text-base leading-8
                               text-secondary-600
                               sm:text-lg">
                        Find quick answers to common questions.
                        If you can’t find what you’re looking for,
                        visit our Support Centre for more help.
                    </p>


                    {{-- support cards --}}

                    <div class="mt-9 space-y-4">

                        {{-- support centre --}}

                        <a href="/support"
                            class="group flex
                                   items-center gap-5
                                   rounded-2xl
                                   border border-primary-100
                                   bg-primary-50
                                   px-5 py-5
                                   transition duration-300
                                   hover:-translate-y-0.5
                                   hover:border-primary-300
                                   hover:shadow-[0_14px_35px_rgba(37,99,235,0.10)]">

                            {{-- Icon --}}
                            <div
                                class="flex h-16 w-16
                                       shrink-0
                                       items-center justify-center
                                       rounded-2xl
                                       border border-primary-100
                                       bg-white
                                       text-primary-600">

                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 13v-1a8 8 0 0116 0v1" />

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 13a2 2 0 012-2h1v6H6a2 2 0 01-2-2v-2z" />

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20 13a2 2 0 00-2-2h-1v6h1a2 2 0 002-2v-2z" />

                                    <path stroke-linecap="round" d="M17 18c-.8 1.3-2.6 2-5 2" />
                                </svg>

                            </div>



                            {{-- Text --}}
                            <div class="min-w-0 flex-1">

                                <h3
                                    class="text-base font-bold
                                           text-secondary-950">
                                    Visit Support Centre
                                </h3>

                                <p
                                    class="mt-1
                                           text-sm leading-6
                                           text-secondary-600">
                                    Get help from our support team,
                                    submit a request, and track your tickets.
                                </p>

                            </div>



                            {{-- Arrow --}}
                            <svg class="h-5 w-5 shrink-0
                                       text-primary-600
                                       transition duration-300
                                       group-hover:translate-x-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>



                        {{-- help articles --}}

                        <a href="/faq"
                            class="group flex
                                   items-center gap-5
                                   rounded-2xl
                                   border border-primary-100
                                   bg-primary-50/60
                                   px-5 py-5
                                   transition duration-300
                                   hover:-translate-y-0.5
                                   hover:border-primary-300
                                   hover:shadow-[0_14px_35px_rgba(37,99,235,0.08)]">

                            {{-- Icon --}}
                            <div
                                class="flex h-16 w-16
                                       shrink-0
                                       items-center justify-center
                                       rounded-2xl
                                       border border-primary-100
                                       bg-white
                                       text-primary-600">

                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h9l3 3v15H6V3z" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 3v5h5" />

                                    <path stroke-linecap="round" d="M9 12h6M9 16h6" />
                                </svg>

                            </div>



                            <div class="min-w-0 flex-1">

                                <h3
                                    class="text-base font-bold
                                           text-secondary-950">
                                    Browse Help Articles
                                </h3>

                                <p
                                    class="mt-1
                                           text-sm leading-6
                                           text-secondary-600">
                                    Step-by-step guides, setup instructions
                                    and troubleshooting tips.
                                </p>

                            </div>



                            <svg class="h-5 w-5 shrink-0
                                       text-primary-600
                                       transition duration-300
                                       group-hover:translate-x-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </a>

                    </div>

                </div>

            </div>


            {{-- right side --> faq accordion --}}

            <div class="lg:col-span-7">

                <div
                    class="rounded-[2rem]
                           border border-secondary-200
                           bg-white/90
                           p-4
                           shadow-[0_22px_60px_rgba(15,23,42,0.06)]
                           backdrop-blur-sm
                           sm:p-5">

                    {{-- questions --}}

                    <div class="space-y-2.5">

                        @foreach ($faqs as $index => $faq)
                            @php
                                $number = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                                $isOpen = $index === 0;
                            @endphp


                            <article
                                class="faq-item
                                       overflow-hidden
                                       rounded-2xl
                                       border border-secondary-200
                                       bg-white">

                                {{-- questions --}}

                                <button type="button"
                                    class="faq-toggle
                                           flex w-full
                                           items-center
                                           gap-4
                                           px-4 py-4
                                           text-left
                                           transition
                                           hover:bg-secondary-50
                                           sm:px-5"
                                    aria-expanded="{{ $isOpen ? 'true' : 'false' }}">

                                    {{-- Number --}}
                                    <span
                                        class="flex h-11 w-11
                                               shrink-0
                                               items-center justify-center
                                               rounded-xl
                                               bg-primary-50
                                               text-sm font-bold
                                               text-primary-600">
                                        {{ $number }}
                                    </span>



                                    {{-- Question --}}
                                    <span
                                        class="min-w-0 flex-1
                                               text-sm font-bold
                                               leading-6
                                               text-secondary-950
                                               sm:text-base">
                                        {{ $faq['question'] }}
                                    </span>



                                    {{-- Chevron --}}
                                    <span
                                        class="faq-chevron
                                               flex h-9 w-9
                                               shrink-0
                                               items-center justify-center
                                               rounded-full
                                               text-secondary-500
                                               transition-transform
                                               duration-300
                                               {{ $isOpen ? 'rotate-180 text-primary-600' : '' }}">

                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                                        </svg>

                                    </span>

                                </button>



                                {{-- answer --}}

                                <div
                                    class="faq-answer
                                           {{ !$isOpen ? 'hidden' : '' }}">

                                    <div
                                        class="px-4 pb-5
                                               pl-[76px]
                                               pr-6
                                               text-sm
                                               leading-7
                                               text-secondary-600
                                               sm:pl-[84px]
                                               sm:text-base">
                                        {{ $faq['answer'] }}
                                    </div>

                                </div>

                            </article>
                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- faq according jquery --}}

<script>
    $(document).ready(function() {

        $('#contact-support-faq .faq-toggle').on('click', function() {

            const $button = $(this);
            const $currentItem = $button.closest('.faq-item');
            const $currentAnswer = $currentItem.find('.faq-answer');
            const $currentChevron = $button.find('.faq-chevron');

            const currentlyOpen =
                $button.attr('aria-expanded') === 'true';

            /*   close all the questions.   */

            $('#contact-support-faq .faq-toggle')
                .not($button)
                .attr('aria-expanded', 'false');


            $('#contact-support-faq .faq-answer')
                .not($currentAnswer)
                .stop(true, true)
                .slideUp(220);


            $('#contact-support-faq .faq-chevron')
                .not($currentChevron)
                .removeClass('rotate-180 text-primary-600')
                .addClass('text-secondary-500');


            /*   toggle selected questions  */

            if (currentlyOpen) {

                $button.attr('aria-expanded', 'false');

                $currentAnswer
                    .stop(true, true)
                    .slideUp(220);

                $currentChevron
                    .removeClass('rotate-180 text-primary-600')
                    .addClass('text-secondary-500');

            } else {

                $button.attr('aria-expanded', 'true');

                $currentAnswer
                    .removeClass('hidden')
                    .stop(true, true)
                    .slideDown(240);

                $currentChevron
                    .removeClass('text-secondary-500')
                    .addClass('rotate-180 text-primary-600');

            }

        });

    });
</script>
