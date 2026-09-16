```blade
@extends('layouts.admin')

@section('title', 'Dashboard')

@section('page-heading', 'Dashboard')

@section('page-description', 'Manage your StockCore website')

@section('admin-content')

    {{-- =========================================================
         WELCOME
    ========================================================== --}}
    <div class="mb-8">

        <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

            <div>

                <p class="mb-2 text-sm font-medium text-primary-600">
                    Overview
                </p>

                <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                    Welcome back, {{ auth()->user()->name ?? 'Admin' }}.
                </h2>

                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                    Manage your StockCore website, content and media from one place.
                </p>

            </div>


            {{-- Quick Edit --}}
            <a href="#"
                class="inline-flex shrink-0 items-center justify-center gap-2 rounded-lg bg-primary-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-primary-700">

                <svg class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 20h9M16.5 3.5a2.1 2.1 0 013 3L8 18l-4 1 1-4L16.5 3.5z" />
                </svg>

                Edit Homepage

            </a>

        </div>

    </div>


    {{-- =========================================================
         STATISTICS
    ========================================================== --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">


        {{-- Pages --}}
        <div class="group rounded-xl border border-admin-border bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">

            <div class="flex items-start justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-500">
                        Website Pages
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        1
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary-50 text-primary-600">

                    <svg class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 5a2 2 0 012-2h9l5 5v13a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" />
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14 3v6h6M8 13h8M8 17h6" />
                    </svg>

                </div>

            </div>

            <div class="mt-4 flex items-center gap-1.5 text-xs text-slate-400">

                <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                Currently available

            </div>

        </div>


        {{-- Content --}}
        <div class="group rounded-xl border border-admin-border bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">

            <div class="flex items-start justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-500">
                        Content Items
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        8
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary-50 text-primary-600">

                    <svg class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h10M4 18h16" />
                    </svg>

                </div>

            </div>

            <div class="mt-4 flex items-center gap-1.5 text-xs text-slate-400">

                <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>

                Sections available for editing

            </div>

        </div>


        {{-- Media --}}
        <div class="group rounded-xl border border-admin-border bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">

            <div class="flex items-start justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-500">
                        Media Library
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        0
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary-50 text-primary-600">

                    <svg class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <rect x="3"
                            y="4"
                            width="18"
                            height="16"
                            rx="2" />
                        <circle cx="8.5"
                            cy="9"
                            r="1.5" />
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 15l-5-5L6 20" />
                    </svg>

                </div>

            </div>

            <div class="mt-4 flex items-center gap-1.5 text-xs text-slate-400">

                <span class="h-1.5 w-1.5 rounded-full bg-slate-300"></span>

                Uploaded website assets

            </div>

        </div>


        {{-- Website Status --}}
        <div class="group rounded-xl border border-admin-border bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">

            <div class="flex items-start justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-500">
                        Website Status
                    </p>

                    <p class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                        Live
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-50 text-green-600">

                    <svg class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 13l4 4L19 7" />
                    </svg>

                </div>

            </div>

            <div class="mt-4 flex items-center gap-1.5 text-xs text-green-600">

                <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                Public website is active

            </div>

        </div>

    </div>


    {{-- =========================================================
         MAIN DASHBOARD GRID
    ========================================================== --}}
    <div class="mt-8 grid grid-cols-1 gap-6 xl:grid-cols-3">


        {{-- =====================================================
             WEBSITE PAGES
        ====================================================== --}}
        <div class="xl:col-span-2 rounded-xl border border-admin-border bg-white shadow-sm">

            <div class="flex items-center justify-between border-b border-admin-border px-5 py-5 sm:px-6">

                <div>

                    <h3 class="text-base font-semibold text-slate-900">
                        Website
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Manage your website pages and content.
                    </p>

                </div>

                <a href="#"
                    class="text-sm font-semibold text-primary-600 transition hover:text-primary-700">
                    View all
                </a>

            </div>


            <div class="divide-y divide-admin-border">


                {{-- Home --}}
                <div class="flex flex-col gap-4 px-5 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-6">

                    <div class="flex items-center gap-4">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">

                            <svg class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 11.5L12 4l9 7.5M5 10v9a1 1 0 001 1h12a1 1 0 001-1v-9" />
                            </svg>

                        </div>

                        <div>

                            <div class="flex items-center gap-2">

                                <h4 class="text-sm font-semibold text-slate-900">
                                    Home
                                </h4>

                                <span class="rounded-full bg-green-50 px-2 py-0.5 text-[10px] font-semibold text-green-600">
                                    Published
                                </span>

                            </div>

                            <p class="mt-1 text-xs text-slate-500">
                                / · 8 sections
                            </p>

                        </div>

                    </div>


                    <a href="#"
                        class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-admin-border px-3.5 py-2 text-xs font-semibold text-slate-600 transition hover:border-primary-200 hover:bg-primary-50 hover:text-primary-700">

                        Edit

                        <svg class="h-3.5 w-3.5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 5l7 7-7 7" />
                        </svg>

                    </a>

                </div>


                {{-- Future Page --}}
                <div class="flex flex-col gap-4 px-5 py-5 opacity-60 sm:flex-row sm:items-center sm:justify-between sm:px-6">

                    <div class="flex items-center gap-4">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-500">

                            <svg class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 5a2 2 0 012-2h9l5 5v13a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" />
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M8 13h8M8 17h6" />
                            </svg>

                        </div>

                        <div>

                            <div class="flex items-center gap-2">

                                <h4 class="text-sm font-semibold text-slate-900">
                                    Features
                                </h4>

                                <span class="rounded-full bg-slate-100 px-2 py-0.5 text-[10px] font-semibold text-slate-500">
                                    Coming soon
                                </span>

                            </div>

                            <p class="mt-1 text-xs text-slate-500">
                                /features
                            </p>

                        </div>

                    </div>


                    <span class="text-xs font-medium text-slate-400">
                        Not created yet
                    </span>

                </div>


                {{-- Future Page --}}
                <div class="flex flex-col gap-4 px-5 py-5 opacity-60 sm:flex-row sm:items-center sm:justify-between sm:px-6">

                    <div class="flex items-center gap-4">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-500">

                            <svg class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>

                        </div>

                        <div>

                            <div class="flex items-center gap-2">

                                <h4 class="text-sm font-semibold text-slate-900">
                                    Contact
                                </h4>

                                <span class="rounded-full bg-slate-100 px-2 py-0.5 text-[10px] font-semibold text-slate-500">
                                    Coming soon
                                </span>

                            </div>

                            <p class="mt-1 text-xs text-slate-500">
                                /contact
                            </p>

                        </div>

                    </div>


                    <span class="text-xs font-medium text-slate-400">
                        Not created yet
                    </span>

                </div>

            </div>

        </div>


        {{-- =====================================================
             QUICK ACTIONS
        ====================================================== --}}
        <div class="rounded-xl border border-admin-border bg-white shadow-sm">

            <div class="border-b border-admin-border px-5 py-5">

                <h3 class="text-base font-semibold text-slate-900">
                    Quick Actions
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Common website tasks.
                </p>

            </div>


            <div class="space-y-2 p-4">


                {{-- Edit Homepage --}}
                <a href="#"
                    class="group flex items-center gap-3 rounded-lg p-3 transition hover:bg-primary-50">

                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition group-hover:bg-primary-100">

                        <svg class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 20h9M16.5 3.5a2.1 2.1 0 013 3L8 18l-4 1 1-4L16.5 3.5z" />
                        </svg>

                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm font-semibold text-slate-900">
                            Edit Homepage
                        </p>

                        <p class="mt-0.5 text-xs text-slate-500">
                            Update your homepage content
                        </p>

                    </div>

                    <svg class="h-4 w-4 text-slate-300 transition group-hover:translate-x-0.5 group-hover:text-primary-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 5l7 7-7 7" />
                    </svg>

                </a>


                {{-- Media --}}
                <a href="#"
                    class="group flex items-center gap-3 rounded-lg p-3 transition hover:bg-primary-50">

                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-slate-100 text-slate-600 transition group-hover:bg-primary-100 group-hover:text-primary-600">

                        <svg class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="3"
                                y="4"
                                width="18"
                                height="16"
                                rx="2" />
                            <circle cx="8.5"
                                cy="9"
                                r="1.5" />
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 15l-5-5L6 20" />
                        </svg>

                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm font-semibold text-slate-900">
                            Media Library
                        </p>

                        <p class="mt-0.5 text-xs text-slate-500">
                            Upload images and assets
                        </p>

                    </div>

                    <svg class="h-4 w-4 text-slate-300 transition group-hover:translate-x-0.5 group-hover:text-primary-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 5l7 7-7 7" />
                    </svg>

                </a>


                {{-- Add Page --}}
                <a href="#"
                    class="group flex items-center gap-3 rounded-lg p-3 transition hover:bg-primary-50">

                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-slate-100 text-slate-600 transition group-hover:bg-primary-100 group-hover:text-primary-600">

                        <svg class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 5v14M5 12h14" />
                        </svg>

                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm font-semibold text-slate-900">
                            Create Page
                        </p>

                        <p class="mt-0.5 text-xs text-slate-500">
                            Add a new website page
                        </p>

                    </div>

                    <svg class="h-4 w-4 text-slate-300 transition group-hover:translate-x-0.5 group-hover:text-primary-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 5l7 7-7 7" />
                    </svg>

                </a>

            </div>

        </div>

    </div>


    {{-- =========================================================
         LOWER DASHBOARD
    ========================================================== --}}
    <div class="mt-6 grid grid-cols-1 gap-6 lg:grid-cols-2">


        {{-- Recent Activity --}}
        <div class="rounded-xl border border-admin-border bg-white shadow-sm">

            <div class="border-b border-admin-border px-5 py-5 sm:px-6">

                <div class="flex items-center justify-between">

                    <div>

                        <h3 class="text-base font-semibold text-slate-900">
                            Recent Activity
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Recent changes to your website.
                        </p>

                    </div>

                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-slate-50 text-slate-500">

                        <svg class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 8v4l3 2M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                    </div>

                </div>

            </div>


            <div class="divide-y divide-admin-border">


                {{-- Activity 1 --}}
                <div class="flex gap-4 px-5 py-4 sm:px-6">

                    <div class="relative mt-1 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary-50 text-primary-600">

                        <svg class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 20h9M16.5 3.5a2.1 2.1 0 013 3L8 18l-4 1 1-4L16.5 3.5z" />
                        </svg>

                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm text-slate-700">
                            Homepage content was updated.
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Just now
                        </p>

                    </div>

                </div>


                {{-- Activity 2 --}}
                <div class="flex gap-4 px-5 py-4 sm:px-6">

                    <div class="mt-1 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-500">

                        <svg class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <rect x="3"
                                y="4"
                                width="18"
                                height="16"
                                rx="2" />
                            <circle cx="8.5"
                                cy="9"
                                r="1.5" />
                        </svg>

                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm text-slate-700">
                            Media library is ready for uploads.
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Today
                        </p>

                    </div>

                </div>


                {{-- Activity 3 --}}
                <div class="flex gap-4 px-5 py-4 sm:px-6">

                    <div class="mt-1 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-green-50 text-green-600">

                        <svg class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 13l4 4L19 7" />
                        </svg>

                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm text-slate-700">
                            Website is currently live.
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Today
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- Website Health --}}
        <div class="rounded-xl border border-admin-border bg-white shadow-sm">

            <div class="border-b border-admin-border px-5 py-5 sm:px-6">

                <h3 class="text-base font-semibold text-slate-900">
                    Website Health
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Quick overview of your website.
                </p>

            </div>


            <div class="p-5 sm:p-6">


                {{-- Status --}}
                <div class="flex items-center justify-between border-b border-admin-border pb-5">

                    <div class="flex items-center gap-3">

                        <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-green-50 text-green-600">

                            <svg class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg>

                        </div>

                        <div>

                            <p class="text-sm font-semibold text-slate-900">
                                Website
                            </p>

                            <p class="text-xs text-slate-500">
                                Public website status
                            </p>

                        </div>

                    </div>

                    <span class="flex items-center gap-1.5 rounded-full bg-green-50 px-2.5 py-1 text-xs font-semibold text-green-600">

                        <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>

                        Live

                    </span>

                </div>


                {{-- SSL --}}
                <div class="flex items-center justify-between border-b border-admin-border py-5">

                    <div class="flex items-center gap-3">

                        <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-green-50 text-green-600">

                            <svg class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="5"
                                    y="10"
                                    width="14"
                                    height="10"
                                    rx="2" />
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M8 10V7a4 4 0 018 0v3" />
                            </svg>

                        </div>

                        <div>

                            <p class="text-sm font-semibold text-slate-900">
                                SSL Certificate
                            </p>

                            <p class="text-xs text-slate-500">
                                Secure HTTPS connection
                            </p>

                        </div>

                    </div>

                    <span class="text-xs font-semibold text-green-600">
                        Active
                    </span>

                </div>


                {{-- Content --}}
                <div class="flex items-center justify-between pt-5">

                    <div class="flex items-center gap-3">

                        <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-primary-50 text-primary-600">

                            <svg class="h-4 w-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6h16M4 12h10M4 18h16" />
                            </svg>

                        </div>

                        <div>

                            <p class="text-sm font-semibold text-slate-900">
                                Content
                            </p>

                            <p class="text-xs text-slate-500">
                                Website content status
                            </p>

                        </div>

                    </div>

                    <span class="text-xs font-semibold text-primary-600">
                        Up to date
                    </span>

                </div>

            </div>

        </div>

    </div>

@endsection
```
