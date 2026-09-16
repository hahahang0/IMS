@extends('layouts.admin')


@section('title', 'Home Management')

@section('page-heading', 'Home Page Management')


@section('admin-content')


    <div class="mb-8">

        <h2 class="text-2xl font-bold text-secondary-900">
            Homepage Content
        </h2>

        <p class="mt-1 text-sm text-secondary-500">
            Manage every section displayed on your public homepage.
        </p>

    </div>



    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">


        @php

            $sections = [
                [
                    'name' => 'Hero',
                    'description' => 'Manage headline, description, CTA buttons and hero image.',
                    'icon' => 'H',
                    'slug' => 'hero',
                ],

                [
                    'name' => 'Features',
                    'description' => 'Manage product features and descriptions.',
                    'icon' => 'F',
                    'slug' => 'features',
                ],

                [
                    'name' => 'How It Works',
                    'description' => 'Manage workflow steps and illustrations.',
                    'icon' => 'W',
                    'slug' => 'how-it-works',
                ],

                [
                    'name' => 'Use Cases',
                    'description' => 'Manage industries, images and descriptions.',
                    'icon' => 'U',
                    'slug' => 'use-cases',
                ],

                [
                    'name' => 'Trust',
                    'description' => 'Manage Trust and partner logos.',
                    'icon' => 'T',
                    'slug' => 'trust',
                ],

                [
                    'name' => 'Testimonials',
                    'description' => 'Manage customer reviews and profiles.',
                    'icon' => 'T',
                    'slug' => 'testimonials',
                ],

                [
                    'name' => 'Pricing',
                    'description' => 'Manage pricing plans and features.',
                    'icon' => 'P',
                    'slug' => 'pricing',
                ],

                [
                    'name' => 'Problems & Solutions',
                    'description' => 'Manage Problems & Solutions section.',
                    'icon' => 'P & S',
                    'slug' => 'problems-and-solutions',
                ],
                [
                    'name' => 'CTA',
                    'description' => 'Manage click through action section.',
                    'icon' => 'CTA',
                    'slug' => 'cta',
                ],
            ];

        @endphp



        @foreach ($sections as $section)
            <div
                class="group rounded-xl border border-secondary-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-primary-300 hover:shadow-md">

                <div class="flex items-start justify-between">

                    <div>

                        <h3 class="text-lg font-semibold text-secondary-900">
                            {{ $section['name'] }}
                        </h3>

                        <p class="mt-2 text-sm text-secondary-500">
                            {{ $section['description'] }}
                        </p>

                    </div>

                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-lg font-bold text-primary-600">
                        {{ $section['icon'] }}
                    </div>

                </div>

                <div class="mt-6">

                    <a href="{{ route('admin.home.section.edit', $section['slug']) }}"
                        class="inline-flex items-center text-sm font-semibold text-primary-600 hover:text-primary-700">

                        Manage Section →

                    </a>

                </div>

            </div>
        @endforeach



    </div>



@endsection
