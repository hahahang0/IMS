<nav class='border-b border-slate-200 bg-white'>

    <div class=" mx-auto flex h-16 max-w-7xl items-center justify-between px-6 lg:px-8">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2">
            <div
                class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-600"
            >
                {{-- <svg
                    class="h-5 w-5 text-white"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 7l4 2.25v4.5L12 16l-4-2.25v-4.5L12 7z"
                    />
                </svg> --}}
            </div>

            <span class="text-lg font-bold tracking-tight text-slate-900">
                StockCore
            </span>

        </a>


        {{-- Navigation --}}    
        <div class="hidden items-center gap-8 md:flex">

            <div class="group relative">

                <a href="#features" class='flex items-center gap-1 text-sm font-medium text-slate-600 transition  hover:text-blue-600'>
                    Features
                    <svg class="h-4 w-4 transition-transform duration-150 group-hover:rotate-180" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="currentColor"></path>
                    </svg>
                    {{-- <x-icons.chevron-down class="h-4 w-4 transition-transform duration-150 group-hover:rotate-180" /> --}}
                </a>
                <div class="invisible absolute left-0 top-full z-20 w-56 translate-y-1 rounded-lg border border-secondary-100 bg-white opacity-0 shadow-lg transition-all duration-150 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                <div class="p-2">
                    <a href="#" class="block rounded-md px-3 py-2 text-sm text-secondary-600 hover:bg-secondary-50 hover:text-primary-600">Feature 1</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-sm text-secondary-600 hover:bg-secondary-50 hover:text-primary-600">Feature 2</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-sm text-secondary-600 hover:bg-secondary-50 hover:text-primary-600">Feature 3</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-sm text-secondary-600 hover:bg-secondary-50 hover:text-primary-600">Feature 4</a>
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

            <a href="#" class='hidden text-sm font-medium text-slate-700 transition hover:text-blue-600 sm:block'>
                Login
            </a>

            <a href="#" class="rounded-lg bg-primary-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition duration-200 hover:bg-blue-700 hover:shadow-md">
                Start Free Trial
            </a>

        </div>

    </div>

</nav>