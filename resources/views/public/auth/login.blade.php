@extends('layouts.guest')

@section('title', 'Login | StockCore')

@section('content')

    <div
        class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50/60 to-slate-50
           px-4 py-6 sm:px-6 sm:py-8 lg:px-8 lg:py-10">



        <div class="mx-auto w-full max-w-[920px]">



            <div class="mb-7 flex min-h-[56px] items-center justify-between">

                {{-- Logo --}}
                <a href="/" class="flex items-center">

                    <img src="{{ asset('images/company_assets/cropped_logo.webp') }}" alt="StockCore"
                        class="h-12 w-auto object-contain object-left">

                </a>


                {{-- Sign Up --}}
                <div class="flex items-center gap-3">

                    <span class="hidden text-sm text-slate-500 sm:block">
                        Don't have an account?
                    </span>


                    <a href="{{ url('/signup') }}"
                        class="inline-flex items-center gap-2
                           rounded-xl border border-blue-200
                           bg-white px-4 py-2.5
                           text-sm font-semibold text-blue-600
                           shadow-sm transition duration-200
                           hover:border-blue-300
                           hover:bg-blue-50">

                        Start 14-Day Free Trial

                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>

                    </a>

                </div>

            </div>




            <div
                class="w-full
                   rounded-[26px]
                   border border-slate-200/80
                   bg-white
                   px-6 py-8
                   shadow-[0_25px_70px_rgba(15,23,42,0.10)]
                   sm:px-9 sm:py-10
                   lg:px-12 lg:py-12">




                <div>

                    <h1 class="text-2xl font-bold tracking-tight
                           text-slate-900 sm:text-3xl">
                        Welcome back to StockCore
                    </h1>


                    <p class="mt-2 text-sm text-slate-500">
                        Enter your credentials to access your inventory workspace.
                    </p>

                </div>




                <div
                    class="mt-7 flex flex-col gap-3
                       rounded-xl border border-blue-200
                       bg-blue-50/40
                       px-4 py-3.5
                       sm:flex-row
                       sm:items-center
                       sm:justify-between">

                    <div class="flex items-center gap-3">

                        <span
                            class="h-2.5 w-2.5 shrink-0
                               rounded-full bg-emerald-400"></span>


                        <p class="text-xs text-slate-600">

                            Demo Account:

                            <span class="font-semibold text-blue-600">
                                alex.morgan@acmeinventory.com
                            </span>

                        </p>

                    </div>


                    <button type="button" id="autofill-demo"
                        class="rounded-lg border border-blue-300
                           bg-white px-3 py-1.5
                           text-[11px] font-bold uppercase
                           tracking-wide text-blue-600
                           transition hover:bg-blue-50">
                        Auto-fill
                    </button>

                </div>




                <div class="mt-6 grid gap-3 sm:grid-cols-2">


                    {{-- Google --}}
                    <a href="#"
                        class="flex h-12 items-center justify-center
                           gap-3 rounded-xl
                           border border-slate-200
                           bg-white
                           text-sm font-semibold text-slate-700
                           shadow-sm transition
                           hover:border-blue-200
                           hover:bg-blue-50/50">

                        <svg class="h-5 w-5" viewBox="0 0 24 24">

                            <path fill="#4285F4"
                                d="M21.35 12.18c0-.7-.06-1.2-.2-1.73H12v3.31h5.37c-.11.82-.7 2.06-2.02 2.89l-.02.11 2.93 2.27.2.02c1.84-1.7 2.89-4.2 2.89-6.87Z" />

                            <path fill="#34A853"
                                d="M12 21.7c2.63 0 4.84-.87 6.45-2.36l-3.11-2.4c-.83.56-1.94.95-3.34.95-2.53 0-4.68-1.7-5.45-4.07l-.1.01-3.05 2.36-.04.1A9.74 9.74 0 0 0 12 21.7Z" />

                            <path fill="#FBBC05"
                                d="M6.55 13.82A5.86 5.86 0 0 1 6.23 12c0-.63.11-1.24.3-1.82l-.01-.12-3.09-2.4-.1.05A9.7 9.7 0 0 0 2.3 12c0 1.55.37 3.01 1.03 4.29l3.22-2.47Z" />

                            <path fill="#EA4335"
                                d="M12 6.11c1.83 0 3.06.79 3.76 1.45l2.76-2.69C16.83 3.3 14.63 2.3 12 2.3a9.74 9.74 0 0 0-8.67 5.41l3.2 2.47C7.32 7.81 9.47 6.11 12 6.11Z" />

                        </svg>

                        Google Login

                    </a>



                    {{-- Microsoft --}}
                    <a href="#"
                        class="flex h-12 items-center justify-center
                           gap-3 rounded-xl
                           border border-slate-200
                           bg-white
                           text-sm font-semibold text-slate-700
                           shadow-sm transition
                           hover:border-blue-200
                           hover:bg-blue-50/50">

                        <div class="grid h-4 w-4 grid-cols-2 gap-[1px]">

                            <span class="bg-[#f35325]"></span>
                            <span class="bg-[#81bc06]"></span>
                            <span class="bg-[#05a6f0]"></span>
                            <span class="bg-[#ffba08]"></span>

                        </div>

                        Microsoft SSO

                    </a>

                </div>




                <div class="my-6 flex items-center gap-4">

                    <div class="h-px flex-1 bg-slate-200"></div>

                    <span
                        class="shrink-0
                           text-[10px] font-semibold uppercase
                           tracking-[0.08em] text-slate-400">
                        Or continue with email
                    </span>

                    <div class="h-px flex-1 bg-slate-200"></div>

                </div>




                @if ($errors->any())

                    <div
                        class="mb-6 rounded-xl
                           border border-red-200
                           bg-red-50 p-4">

                        <ul class="space-y-1 text-sm text-red-600">

                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach

                        </ul>

                    </div>

                @endif




                <form method="POST" action="#login.store">

                    @csrf





                    <div>

                        <label for="email"
                            class="mb-2 block
                               text-xs font-semibold
                               text-slate-700">
                            Work Email
                        </label>


                        <div class="relative">

                            {{-- Email Icon --}}
                            <div
                                class="pointer-events-none
                                   absolute left-4 top-1/2
                                   -translate-y-1/2
                                   text-slate-400">

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.8">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75 12 13.5 2.25 6.75M3.75 5.25h16.5A1.5 1.5 0 0 1 21.75 6.75v10.5a1.5 1.5 0 0 1-1.5 1.5H3.75a1.5 1.5 0 0 1-1.5-1.5V6.75a1.5 1.5 0 0 1 1.5-1.5Z" />

                                </svg>

                            </div>


                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                autofocus autocomplete="email" placeholder="alex.morgan@acmeinventory.com"
                                class="w-full rounded-xl
                                   border border-slate-200
                                   bg-slate-50
                                   py-3.5 pl-11 pr-4
                                   text-sm text-slate-800
                                   outline-none transition
                                   placeholder:text-slate-400
                                   focus:border-blue-500
                                   focus:bg-white
                                   focus:ring-4
                                   focus:ring-blue-500/10">

                        </div>

                    </div>




                    <div class="mt-5">

                        <div class="mb-2 flex items-center justify-between">

                            <label for="password" class="text-xs font-semibold text-slate-700">
                                Password
                            </label>


                            <a href="{{ url('#') }}"
                                class="text-xs font-semibold
                                   text-blue-600 transition
                                   hover:text-blue-700
                                   hover:underline">
                                Forgot password?
                            </a>

                        </div>


                        <div class="relative">

                            {{-- Lock Icon --}}
                            <div
                                class="pointer-events-none
                                   absolute left-4 top-1/2
                                   -translate-y-1/2
                                   text-slate-400">

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.8">

                                    <rect x="5" y="10" width="14" height="10" rx="2" />

                                    <path stroke-linecap="round" d="M8 10V7a4 4 0 0 1 8 0v3" />

                                </svg>

                            </div>


                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                placeholder="Enter your password"
                                class="w-full rounded-xl
                                   border border-slate-200
                                   bg-slate-50
                                   py-3.5 pl-11 pr-12
                                   text-sm text-slate-800
                                   outline-none transition
                                   placeholder:text-slate-400
                                   focus:border-blue-500
                                   focus:bg-white
                                   focus:ring-4
                                   focus:ring-blue-500/10">


                            {{-- Password Toggle --}}
                            <button type="button" id="toggle-password"
                                class="absolute right-4 top-1/2
                                   -translate-y-1/2
                                   text-slate-400 transition
                                   hover:text-slate-600">

                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.8">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12s3.75-6 9.75-6 9.75 6 9.75 6-3.75 6-9.75 6S2.25 12 2.25 12Z" />

                                    <circle cx="12" cy="12" r="2.5" />

                                </svg>

                            </button>

                        </div>

                    </div>





                    <div class="mt-5 flex items-center justify-between">

                        <label for="remember" class="flex cursor-pointer items-center gap-2">

                            <input id="remember" type="checkbox" name="remember" value="1"
                                {{ old('remember') ? 'checked' : '' }}
                                class="h-4 w-4 rounded
                                   border-slate-300
                                   text-blue-600
                                   focus:ring-blue-500">

                            <span class="text-xs text-slate-500">
                                Keep me logged in
                            </span>

                        </label>



                        {{-- Information --}}
                        <div class="group relative">

                            <svg class="h-4 w-4 cursor-help text-slate-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">

                                <circle cx="12" cy="12" r="9" />

                                <path stroke-linecap="round" d="M12 11v5" />

                                <circle cx="12" cy="8" r=".5" fill="currentColor" />

                            </svg>


                            <div
                                class="pointer-events-none
                                   absolute bottom-6 right-0
                                   hidden w-48
                                   rounded-lg bg-slate-900
                                   px-3 py-2
                                   text-[10px] leading-4
                                   text-white
                                   shadow-lg
                                   group-hover:block">
                                Stay signed in on this device until you manually log out.
                            </div>

                        </div>

                    </div>



                    <button type="submit"
                        class="mt-6 flex w-full
                           items-center justify-center
                           gap-2 rounded-xl
                           bg-blue-600
                           px-5 py-3.5
                           text-sm font-bold text-white
                           shadow-lg shadow-blue-600/20
                           transition duration-200
                           hover:-translate-y-0.5
                           hover:bg-blue-700
                           hover:shadow-xl
                           hover:shadow-blue-600/25">

                        Log In to Workspace

                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2.2">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />

                        </svg>

                    </button>

                </form>




                <div
                    class="mt-7 flex flex-col gap-3
                       border-t border-slate-100
                       pt-5
                       text-[11px] text-slate-400
                       sm:flex-row
                       sm:items-center
                       sm:justify-between">

                    {{-- Security --}}
                    <div class="flex items-center gap-2">

                        <svg class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="1.8">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3 4.5 6v5.25c0 4.55 3.08 8.78 7.5 9.75 4.42-.97 7.5-5.2 7.5-9.75V6L12 3Z" />

                        </svg>

                        Encrypted Session

                    </div>


                    {{-- Help --}}
                    <a href="#" class="transition hover:text-blue-600">
                        Need login assistance?
                    </a>

                </div>

            </div>




            <div class="py-6 text-center">

                <p class="text-[11px] text-slate-400">
                    © {{ now()->year }} StockCore Pty Ltd.
                    All rights reserved.
                </p>

                <p class="mt-1 text-[10px] text-slate-400">
                    Smarter inventory for a stronger business.
                </p>

            </div>

        </div>

    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {




            const passwordInput =
                document.getElementById('password');

            const togglePassword =
                document.getElementById('toggle-password');


            if (passwordInput && togglePassword) {

                togglePassword.addEventListener('click', function() {

                    passwordInput.type =
                        passwordInput.type === 'password' ?
                        'text' :
                        'password';

                });

            }





            const demoButton =
                document.getElementById('autofill-demo');

            const emailInput =
                document.getElementById('email');


            if (demoButton && emailInput && passwordInput) {

                demoButton.addEventListener('click', function() {

                    emailInput.value =
                        'alex.morgan@acmeinventory.com';

                    passwordInput.value =
                        'Demo12345!';


                    const originalText =
                        demoButton.textContent;


                    demoButton.textContent =
                        'Filled';


                    demoButton.classList.add(
                        'bg-blue-600',
                        'text-white'
                    );


                    setTimeout(function() {

                        demoButton.textContent =
                            originalText;

                        demoButton.classList.remove(
                            'bg-blue-600',
                            'text-white'
                        );

                    }, 1200);

                });

            }

        });
    </script>

@endsection
