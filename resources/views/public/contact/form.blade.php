{{-- form section --}}
<section id="contact-form-section" class="relative overflow-hidden bg-background-muted py-20 sm:py-24 lg:py-28">
    {{-- background decoration --}}

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">

        {{-- Left large soft circle --}}
        <div
            class="absolute -left-[260px] top-[40px]
                   h-[520px] w-[520px]
                   rounded-full
                   bg-primary-50">
        </div>

        {{-- Bottom-left circle --}}
        <div
            class="absolute -bottom-[260px] -left-[180px]
                   h-[430px] w-[430px]
                   rounded-full
                   bg-primary-50">
        </div>

        {{-- Bottom-right soft shape --}}
        <div
            class="absolute -bottom-[330px] -right-[260px]
                   h-[650px] w-[650px]
                   rounded-full
                   bg-primary-50">
        </div>

        {{-- Right outline ring --}}
        <div
            class="absolute -bottom-[280px] -right-[180px]
                   h-[560px] w-[560px]
                   rounded-full
                   border-2 border-primary-100">
        </div>

        {{-- Dot pattern --}}
        <div
            class="absolute left-[7%] top-[35px]
                   hidden grid-cols-5 gap-3
                   lg:grid">
            @for ($i = 0; $i < 20; $i++)
                <span class="h-1.5 w-1.5 rounded-full bg-primary-200"></span>
            @endfor
        </div>

    </div>



    {{-- main container --}}

    <div class="relative z-10 mx-auto max-w-7xl px-6 sm:px-8 lg:px-8">

        <div
            class="grid grid-cols-1 gap-14
                   lg:grid-cols-12
                   lg:items-center
                   lg:gap-16">

            {{-- left side --}}

            <div class="lg:col-span-5">

                <div class="max-w-[470px]">

                    {{-- Eyebrow --}}
                    <div class="flex items-center gap-4">

                        <span
                            class="text-[11px] font-bold uppercase
                                   tracking-[0.28em]
                                   text-primary-600">
                            Get in touch
                        </span>

                        <span class="h-px w-12 bg-primary-500"></span>

                    </div>



                    {{-- Heading --}}
                    <h2
                        class="mt-7
                               text-4xl font-extrabold
                               leading-[1.02]
                               tracking-[-0.05em]
                               text-secondary-950
                               sm:text-5xl
                               lg:text-[4rem]">
                        Send us a

                        <span class="block text-primary-600">
                            message<span class="text-secondary-950">.</span>
                        </span>
                    </h2>



                    {{-- Description --}}
                    <p
                        class="mt-6 max-w-[430px]
                               text-base leading-8
                               text-secondary-600
                               sm:text-lg">
                        Fill out the form and our team will get back to you
                        as soon as possible. We’re here to help.
                    </p>


                    {{-- contact benefits --}}

                    <div class="mt-10 space-y-7">

                        {{-- Quick response --}}
                        <div class="flex items-center gap-5">

                            <div
                                class="flex h-16 w-16 shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-50
                                       text-primary-600">
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="14" rx="2" />

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7l9 6 9-6" />
                                </svg>
                            </div>


                            <div>

                                <h3 class="text-base font-bold text-secondary-950">
                                    Quick response
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-secondary-500">
                                    We aim to reply within 1 business day.
                                </p>

                            </div>

                        </div>



                        {{-- Speak to our team --}}
                        <div class="flex items-center gap-5">

                            <div
                                class="flex h-16 w-16 shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-50
                                       text-primary-600">
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 4h4l2 5-3 2a15 15 0 006 6l2-3 5 2v4c0 1-1 2-2 2C10 22 2 14 2 5c0-1 1-1 3-1z" />
                                </svg>
                            </div>


                            <div>

                                <h3 class="text-base font-bold text-secondary-950">
                                    Speak to our team
                                </h3>

                                <p
                                    class="mt-1 max-w-[300px]
                                           text-sm leading-6 text-secondary-500">
                                    Prefer to talk? Give us a call during
                                    business hours.
                                </p>

                            </div>

                        </div>



                        {{-- Real support --}}
                        <div class="flex items-center gap-5">

                            <div
                                class="flex h-16 w-16 shrink-0
                                       items-center justify-center
                                       rounded-full
                                       bg-primary-50
                                       text-primary-600">
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 5h14a3 3 0 013 3v7a3 3 0 01-3 3H10l-5 3v-3a3 3 0 01-3-3V8a3 3 0 013-3z" />
                                </svg>
                            </div>


                            <div>

                                <h3 class="text-base font-bold text-secondary-950">
                                    Real people, real support
                                </h3>

                                <p
                                    class="mt-1 max-w-[300px]
                                           text-sm leading-6 text-secondary-500">
                                    Our Australian-based team is here to help.
                                </p>

                            </div>

                        </div>

                    </div>



                    {{-- Bottom label --}}
                    <div class="mt-12 flex items-center gap-5">

                        <span class="h-14 w-px bg-primary-500"></span>

                        <span
                            class="text-[11px] font-semibold uppercase
                                   tracking-[0.3em]
                                   text-secondary-500">
                            We’re here for you
                        </span>

                    </div>

                </div>

            </div>



            {{-- right section --}}

            <div class="lg:col-span-7">

                <div
                    class="rounded-[28px]
                           border border-secondary-200
                           bg-white
                           p-6
                           shadow-[0_25px_70px_rgba(15,23,42,0.07)]
                           sm:p-8
                           lg:p-10">

                    {{-- form header --}}

                    <div>

                        <h3
                            class="text-2xl font-extrabold
                                   tracking-[-0.035em]
                                   text-secondary-950
                                   sm:text-3xl">
                            Contact form
                        </h3>

                        <p
                            class="mt-2
                                   text-sm leading-6
                                   text-secondary-500
                                   sm:text-base">
                            Tell us a bit about what you need and we’ll get
                            back to you shortly.
                        </p>

                    </div>



                    {{-- form --}}

                    <form id="contact-form" action="{{ url('/contact') }}" method="POST" class="mt-8">

                        @csrf



                        {{-- first/last name --}}
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                            {{-- First name --}}
                            <div>

                                <label for="first_name"
                                    class="mb-2 block
                                           text-sm font-semibold
                                           text-secondary-950">
                                    First name
                                    <span class="text-primary-600">*</span>
                                </label>

                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                    placeholder="John" autocomplete="given-name" required
                                    class="h-[54px] w-full
                                           rounded-xl
                                           border border-secondary-300
                                           bg-white
                                           px-4
                                           text-sm text-secondary-900
                                           outline-none
                                           transition duration-200
                                           placeholder:text-secondary-400
                                           focus:border-primary-500
                                           focus:ring-4
                                           focus:ring-primary-100">

                                @error('first_name')
                                    <p class="mt-1.5 text-xs text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>



                            {{-- Last name --}}
                            <div>

                                <label for="last_name"
                                    class="mb-2 block
                                           text-sm font-semibold
                                           text-secondary-950">
                                    Last name
                                    <span class="text-primary-600">*</span>
                                </label>

                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                    placeholder="Doe" autocomplete="family-name" required
                                    class="h-[54px] w-full
                                           rounded-xl
                                           border border-secondary-300
                                           bg-white
                                           px-4
                                           text-sm text-secondary-900
                                           outline-none
                                           transition duration-200
                                           placeholder:text-secondary-400
                                           focus:border-primary-500
                                           focus:ring-4
                                           focus:ring-primary-100">

                                @error('last_name')
                                    <p class="mt-1.5 text-xs text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                        </div>



                        {{-- email --}}

                        <div class="mt-5">

                            <label for="email"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                Email address
                                <span class="text-primary-600">*</span>
                            </label>

                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                placeholder="you@company.com" autocomplete="email" required
                                class="h-[54px] w-full
                                       rounded-xl
                                       border border-secondary-300
                                       bg-white
                                       px-4
                                       text-sm text-secondary-900
                                       outline-none
                                       transition duration-200
                                       placeholder:text-secondary-400
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">

                            @error('email')
                                <p class="mt-1.5 text-xs text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- company --}}

                        <div class="mt-5">

                            <label for="company"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                Company name

                                <span class="font-normal text-secondary-500">
                                    (optional)
                                </span>
                            </label>

                            <input type="text" id="company" name="company" value="{{ old('company') }}"
                                placeholder="Your company name" autocomplete="organization"
                                class="h-[54px] w-full
                                       rounded-xl
                                       border border-secondary-300
                                       bg-white
                                       px-4
                                       text-sm text-secondary-900
                                       outline-none
                                       transition duration-200
                                       placeholder:text-secondary-400
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">

                        </div>



                        {{-- topic --}}

                        <div class="mt-5">

                            <label for="subject"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                What can we help you with?
                                <span class="text-primary-600">*</span>
                            </label>

                            <div class="relative">

                                <select id="subject" name="subject" required
                                    class="h-[54px] w-full
                                           appearance-none
                                           rounded-xl
                                           border border-secondary-300
                                           bg-white
                                           px-4 pr-12
                                           text-sm
                                           text-secondary-700
                                           outline-none
                                           transition duration-200
                                           focus:border-primary-500
                                           focus:ring-4
                                           focus:ring-primary-100">

                                    <option value="" disabled {{ old('subject') ? '' : 'selected' }}>
                                        Select an option
                                    </option>

                                    <option value="general" {{ old('subject') === 'general' ? 'selected' : '' }}>
                                        General enquiry
                                    </option>

                                    <option value="sales" {{ old('subject') === 'sales' ? 'selected' : '' }}>
                                        Sales enquiry
                                    </option>

                                    <option value="support" {{ old('subject') === 'support' ? 'selected' : '' }}>
                                        Product support
                                    </option>

                                    <option value="billing" {{ old('subject') === 'billing' ? 'selected' : '' }}>
                                        Billing question
                                    </option>

                                    <option value="partnership"
                                        {{ old('subject') === 'partnership' ? 'selected' : '' }}>
                                        Partnership enquiry
                                    </option>

                                    <option value="other" {{ old('subject') === 'other' ? 'selected' : '' }}>
                                        Something else
                                    </option>

                                </select>


                                <svg class="pointer-events-none
                                           absolute right-4 top-1/2
                                           h-5 w-5
                                           -translate-y-1/2
                                           text-secondary-600"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                                </svg>

                            </div>

                        </div>



                        {{-- message --}}

                        <div class="mt-5">

                            <label for="message"
                                class="mb-2 block
                                       text-sm font-semibold
                                       text-secondary-950">
                                Your message
                                <span class="text-primary-600">*</span>
                            </label>

                            <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required
                                class="min-h-[135px] w-full
                                       resize-y
                                       rounded-xl
                                       border border-secondary-300
                                       bg-white
                                       px-4 py-3.5
                                       text-sm leading-6
                                       text-secondary-900
                                       outline-none
                                       transition duration-200
                                       placeholder:text-secondary-400
                                       focus:border-primary-500
                                       focus:ring-4
                                       focus:ring-primary-100">{{ old('message') }}</textarea>

                            @error('message')
                                <p class="mt-1.5 text-xs text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>



                        {{-- privacy --}}

                        <div class="mt-5 flex items-start gap-3">

                            <input type="checkbox" id="privacy_consent" name="privacy_consent" value="1"
                                required
                                class="mt-1 h-[18px] w-[18px]
                                       shrink-0
                                       rounded
                                       border-secondary-300
                                       accent-primary-600">

                            <label for="privacy_consent" class="text-sm leading-6 text-secondary-600">
                                I agree to the

                                <a href="/privacy"
                                    class="font-medium text-primary-600
                                           transition hover:text-primary-700">
                                    privacy policy
                                </a>

                                and consent to being contacted by StockCore.
                            </label>

                        </div>



                        {{-- actions --}}

                        <div
                            class="mt-7 flex flex-col gap-3
                                   sm:flex-row sm:items-center">

                            {{-- Send --}}
                            <button type="submit"
                                class="group inline-flex
                                       h-[56px]
                                       min-w-[200px]
                                       items-center justify-center
                                       gap-4
                                       whitespace-nowrap
                                       rounded-full
                                       bg-primary-600
                                       px-8
                                       text-sm font-semibold
                                       text-white
                                       shadow-[0_10px_25px_rgba(37,99,235,0.18)]
                                       transition duration-300
                                       hover:-translate-y-0.5
                                       hover:bg-primary-700
                                       hover:shadow-[0_14px_30px_rgba(37,99,235,0.22)]
                                       hover:cursor-pointer">
                                <span>
                                    Send message
                                </span>

                                <svg class="h-4 w-4 shrink-0
                                           transition-transform duration-300
                                           group-hover:translate-x-1"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                                </svg>
                            </button>



                            {{-- Clear --}}
                            <button type="reset"
                                class="inline-flex
                                       h-[56px]
                                       min-w-[145px]
                                       items-center justify-center
                                       whitespace-nowrap
                                       rounded-full
                                       border border-secondary-300
                                       bg-white
                                       px-8
                                       text-sm font-semibold
                                       text-secondary-900
                                       transition duration-300
                                       hover:-translate-y-0.5
                                       hover:border-primary-300
                                       hover:text-primary-600
                                       hover:cursor-pointer">
                                Clear form
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
