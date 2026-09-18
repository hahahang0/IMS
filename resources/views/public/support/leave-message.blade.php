{{-- support - leave us a message section --}}

<section id="leave-message"
    class="relative overflow-hidden
           bg-background-muted
           py-20
           sm:py-24
           lg:py-28">

    {{-- background decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- left curve --}}
        <div
            class="absolute
                   -left-[420px] top-[100px]
                   h-[760px] w-[760px]
                   rounded-full
                   border-[110px]
                   border-primary-50/60">
        </div>


        {{-- bottom right curve --}}
        <div
            class="absolute
                   -right-[380px] -bottom-[420px]
                   h-[800px] w-[800px]
                   rounded-full
                   border-[115px]
                   border-primary-50/60">
        </div>


        {{-- soft central glow --}}
        <div
            class="absolute
                   left-1/2 top-[45%]
                   h-[500px] w-[1000px]
                   -translate-x-1/2
                   rounded-full
                   bg-white/70
                   blur-[110px]">
        </div>

    </div>



    {{-- section content --}}
    <div
        class="relative z-10
               mx-auto max-w-7xl
               px-6
               sm:px-8
               lg:px-8">

        <div class="grid gap-12
                   lg:grid-cols-[0.82fr_1.18fr]
                   lg:items-start">

            {{-- left side --}}
            <div>

                {{-- Eyebrow --}}
                <div
                    class="inline-flex
                           items-center
                           rounded-full
                           bg-primary-50
                           px-4 py-2">
                    <span
                        class="text-[11px]
                               font-bold uppercase
                               tracking-[0.09em]
                               text-primary-600">
                        Support
                    </span>
                </div>



                {{-- Heading --}}
                <h2
                    class="mt-6
                           max-w-[560px]
                           text-[42px]
                           font-extrabold
                           leading-[1.05]
                           tracking-[-0.045em]
                           text-secondary-950
                           sm:text-[50px]
                           lg:text-[58px]">
                    Leave us a message
                </h2>



                {{-- Description --}}
                <p
                    class="mt-5
                           max-w-[580px]
                           text-[16px]
                           leading-8
                           text-secondary-600
                           sm:text-[17px]">
                    Have a question, need help, or want to share feedback?
                    Our team will get back to you within 1 business day.
                </p>



                {{-- resaurrance  --}}
                <div class="mt-9 space-y-6">

                    {{-- Fast reply --}}
                    <div class="flex items-start gap-4">

                        <span
                            class="flex h-12 w-12
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m13 2-7 11h6l-1 9 7-11h-6l1-9Z" />
                            </svg>
                        </span>


                        <div>

                            <p
                                class="text-[15px]
                                       font-bold
                                       text-secondary-950">
                                We typically reply within 1 business day
                            </p>

                            <p
                                class="mt-1
                                       text-[13px]
                                       text-secondary-500">
                                Our team is here to help, Monday – Friday.
                            </p>

                        </div>

                    </div>



                    {{-- Real people --}}
                    <div class="flex items-start gap-4">

                        <span
                            class="flex h-12 w-12
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <circle cx="9" cy="8" r="3" />
                                <circle cx="17" cy="9" r="2.5" />

                                <path stroke-linecap="round" d="M3 19a6 6 0 0 1 12 0" />

                                <path stroke-linecap="round" d="M14 14.5a5 5 0 0 1 7 4.5" />
                            </svg>
                        </span>


                        <div>

                            <p
                                class="text-[15px]
                                       font-bold
                                       text-secondary-950">
                                Real people, real support
                            </p>

                            <p
                                class="mt-1
                                       text-[13px]
                                       text-secondary-500">
                                Get helpful, human responses from our team.
                            </p>

                        </div>

                    </div>



                    {{-- Secure --}}
                    <div class="flex items-start gap-4">

                        <span
                            class="flex h-12 w-12
                                   shrink-0
                                   items-center justify-center
                                   rounded-full
                                   bg-primary-50
                                   text-primary-600">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="5" y="10" width="14" height="10" rx="2" />

                                <path stroke-linecap="round" d="M8 10V7a4 4 0 0 1 8 0v3" />
                            </svg>
                        </span>


                        <div>

                            <p
                                class="text-[15px]
                                       font-bold
                                       text-secondary-950">
                                Your information is secure
                            </p>

                            <p
                                class="mt-1
                                       text-[13px]
                                       text-secondary-500">
                                We never share your data with third parties.
                            </p>

                        </div>

                    </div>

                </div>



                {{-- what happens next --}}
                <div
                    class="mt-10
                           rounded-[20px]
                           border border-primary-100
                           bg-primary-50/60
                           p-6">

                    <div class="flex items-start justify-between gap-5">

                        <div>

                            <h3
                                class="text-[18px]
                                       font-bold
                                       tracking-[-0.02em]
                                       text-secondary-950">
                                What happens next?
                            </h3>


                            <div class="mt-5 space-y-4">

                                @foreach (['We’ll review your message', 'A team member will get back to you within 1 business day', 'We’ll help you find the best solution'] as $index => $step)
                                    <div class="flex items-start gap-3">

                                        <span
                                            class="flex h-7 w-7
                                                   shrink-0
                                                   items-center justify-center
                                                   rounded-full
                                                   bg-white
                                                   text-[11px]
                                                   font-bold
                                                   text-primary-600
                                                   shadow-sm">
                                            {{ $index + 1 }}
                                        </span>


                                        <p
                                            class="pt-1
                                                   text-[13px]
                                                   leading-5
                                                   text-secondary-600">
                                            {{ $step }}
                                        </p>

                                    </div>
                                @endforeach

                            </div>

                        </div>



                        {{-- Decorative arrow --}}
                        <svg class="hidden h-16 w-16
                                   shrink-0
                                   text-primary-400
                                   sm:block"
                            viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" d="M8 48C20 41 24 28 41 24" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="m36 17 12 6-10 8" />

                            <path stroke-linecap="round" stroke-dasharray="4 5" d="M12 48c7 5 14 5 19 1" />
                        </svg>

                    </div>

                </div>



                {{-- Small note --}}
                <p
                    class="mt-8
                           text-[14px]
                           italic
                           text-secondary-400">
                    Thanks for being part of StockCore.
                </p>

            </div>



            {{-- right form --}}
            <div
                class="rounded-[26px]
                       border border-secondary-200
                       bg-white
                       p-6
                       shadow-[0_18px_55px_rgba(15,23,42,0.06)]
                       sm:p-8
                       lg:p-10">

                <form id="support-message-form" action="#" method="POST">

                    @csrf


                    {{-- name + email --}}
                    <div class="grid gap-5
                               md:grid-cols-2">

                        {{-- Name --}}
                        <div>

                            <label for="support-name"
                                class="mb-2
                                       block
                                       text-[13px]
                                       font-semibold
                                       text-secondary-900">
                                Your name
                            </label>


                            <input id="support-name" name="name" type="text" required autocomplete="name"
                                placeholder="John Doe"
                                class="h-[52px]
                                       w-full
                                       rounded-xl
                                       border border-secondary-200
                                       bg-white
                                       px-4
                                       text-[14px]
                                       text-secondary-900

                                       outline-none

                                       placeholder:text-secondary-400

                                       transition-all duration-200

                                       focus:border-primary-300
                                       focus:ring-4
                                       focus:ring-primary-50">

                        </div>



                        {{-- Email --}}
                        <div>

                            <label for="support-email"
                                class="mb-2
                                       block
                                       text-[13px]
                                       font-semibold
                                       text-secondary-900">
                                Email address
                            </label>


                            <input id="support-email" name="email" type="email" required autocomplete="email"
                                placeholder="you@company.com"
                                class="h-[52px]
                                       w-full
                                       rounded-xl
                                       border border-secondary-200
                                       bg-white
                                       px-4
                                       text-[14px]
                                       text-secondary-900

                                       outline-none

                                       placeholder:text-secondary-400

                                       transition-all duration-200

                                       focus:border-primary-300
                                       focus:ring-4
                                       focus:ring-primary-50">

                        </div>

                    </div>



                    {{-- subject --}}
                    <div class="mt-6">

                        <label for="support-subject"
                            class="mb-2
                                   block
                                   text-[13px]
                                   font-semibold
                                   text-secondary-900">
                            Subject
                        </label>


                        <input id="support-subject" name="subject" type="text" required
                            placeholder="How can we help?"
                            class="h-[52px]
                                   w-full
                                   rounded-xl
                                   border border-secondary-200
                                   bg-white
                                   px-4
                                   text-[14px]
                                   text-secondary-900

                                   outline-none

                                   placeholder:text-secondary-400

                                   transition-all duration-200

                                   focus:border-primary-300
                                   focus:ring-4
                                   focus:ring-primary-50">

                    </div>



                    {{-- messagse --}}
                    <div class="mt-6">

                        <label for="support-message"
                            class="mb-2
                                   block
                                   text-[13px]
                                   font-semibold
                                   text-secondary-900">
                            Message
                        </label>


                        <div class="relative">

                            <textarea id="support-message" name="message" rows="8" maxlength="1000" required
                                placeholder="Tell us more about your question or request..."
                                class="min-h-[190px]
                                       w-full
                                       resize-none
                                       rounded-[14px]
                                       border border-secondary-200
                                       bg-white
                                       px-4
                                       pb-10
                                       pt-4
                                       text-[14px]
                                       leading-6
                                       text-secondary-900

                                       outline-none

                                       placeholder:text-secondary-400

                                       transition-all duration-200

                                       focus:border-primary-300
                                       focus:ring-4
                                       focus:ring-primary-50"></textarea>


                            {{-- Character count --}}
                            <span
                                class="absolute
                                       bottom-3 right-4
                                       text-[11px]
                                       text-secondary-400">
                                <span id="support-message-count">0</span>/1000
                            </span>

                        </div>

                    </div>



                    {{-- send button --}}
                    <button type="submit"
                        class="group
                               mt-7
                               flex h-[54px]
                               w-full
                               items-center justify-center
                               gap-3
                               rounded-xl
                               bg-primary-600
                               text-[15px]
                               font-semibold
                               text-white

                               shadow-[0_12px_28px_rgba(37,99,235,0.22)]

                               transition-all duration-300

                               hover:bg-primary-700
                               hover:shadow-[0_16px_34px_rgba(37,99,235,0.30)]
                               hover:cursor-pointer">

                        {{-- Send icon --}}
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m22 2-7 20-4-9-9-4 20-7Z" />
                        </svg>


                        Send message


                        <svg class="h-4 w-4
                                   transition-transform
                                   duration-300
                                   group-hover:translate-x-1"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>

                    </button>


                    {{-- privacy note --}}
                    <div
                        class="mt-5
                               flex items-center justify-center
                               gap-2
                               text-center">

                        <svg class="h-4 w-4
                                   shrink-0
                                   text-secondary-400"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="5" y="10" width="14" height="10" rx="2" />

                            <path stroke-linecap="round" d="M8 10V7a4 4 0 0 1 8 0v3" />
                        </svg>


                        <p
                            class="text-[11px]
                                   leading-5
                                   text-secondary-400">
                            Your information is encrypted and kept private.
                            We never share your data.
                        </p>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

{{-- character coutner --}}


<script>
    $(document).ready(function() {

        $('#support-message').on('input', function() {

            const length =
                $(this).val().length;


            $('#support-message-count')
                .text(length);

        });

    });
</script>
