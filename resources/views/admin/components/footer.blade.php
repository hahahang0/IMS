@extends('layouts.admin')

@section('title', 'Footer CMS')

@section('page-heading', 'Footer')

@section('page-description', 'Manage the footer content displayed on your website')

@section('admin-content')

@php
    $brand = $content['brand'] ?? [];
    $navigation = $content['navigation'] ?? [];
    $cta = $content['cta'] ?? [];
    $legal = $content['legal'] ?? [];
    $social = $content['social'] ?? [];
    $copyright = $content['copyright'] ?? '';
@endphp

<form method="POST" action="{{ route('admin.footer.update') }}">

    @csrf
    @method('PUT')

    {{-- BRAND --}}
    <div class="mb-8 rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Brand
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Manage the logo and description displayed in the footer.
            </p>
        </div>

        <div class="space-y-5">

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">
                    Logo
                </label>

                <input
                    type="text"
                    name="content[brand][logo]"
                    value="{{ $brand['logo'] ?? '' }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-primary-500"
                >

                <p class="mt-1 text-xs text-slate-500">
                    Path to the footer logo.
                </p>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">
                    Description
                </label>

                <textarea
                    name="content[brand][description]"
                    rows="3"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-primary-500"
                >{{ $brand['description'] ?? '' }}</textarea>
            </div>

        </div>
    </div>


    {{-- NAVIGATION --}}
    <div class="mb-8 rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Navigation
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Manage the navigation columns and links shown in the footer.
            </p>
        </div>

        <div class="space-y-6">

            @foreach ($navigation as $columnIndex => $column)

                <div class="rounded-lg border border-slate-200 p-5">

                    <div class="mb-4">
                        <label class="mb-2 block text-sm font-medium text-slate-700">
                            Column Title
                        </label>

                        <input
                            type="text"
                            name="content[navigation][{{ $columnIndex }}][title]"
                            value="{{ $column['title'] ?? '' }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                        >
                    </div>

                    <div class="space-y-3">

                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">
                            Links
                        </p>

                        @foreach ($column['links'] ?? [] as $linkIndex => $link)

                            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">

                                <input
                                    type="text"
                                    name="content[navigation][{{ $columnIndex }}][links][{{ $linkIndex }}][label]"
                                    value="{{ $link['label'] ?? '' }}"
                                    placeholder="Link label"
                                    class="rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                                >

                                <input
                                    type="text"
                                    name="content[navigation][{{ $columnIndex }}][links][{{ $linkIndex }}][url]"
                                    value="{{ $link['url'] ?? '' }}"
                                    placeholder="Link URL"
                                    class="rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                                >

                            </div>

                        @endforeach

                    </div>

                </div>

            @endforeach

        </div>

    </div>


    {{-- CTA --}}
    <div class="mb-8 rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Footer CTA
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Manage the call-to-action displayed inside the footer.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-5">

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">
                    Heading
                </label>

                <input
                    type="text"
                    name="content[cta][heading]"
                    value="{{ $cta['heading'] ?? '' }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">
                    Description
                </label>

                <textarea
                    name="content[cta][description]"
                    rows="2"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                >{{ $cta['description'] ?? '' }}</textarea>
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        Button Text
                    </label>

                    <input
                        type="text"
                        name="content[cta][button_text]"
                        value="{{ $cta['button_text'] ?? '' }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                    >
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">
                        Button URL
                    </label>

                    <input
                        type="text"
                        name="content[cta][button_url]"
                        value="{{ $cta['button_url'] ?? '' }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                    >
                </div>

            </div>

        </div>
    </div>


    {{-- LEGAL --}}
    <div class="mb-8 rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Legal Links
            </h2>
        </div>

        <div class="space-y-3">

            @foreach ($legal as $index => $link)

                <div class="grid grid-cols-1 gap-3 md:grid-cols-2">

                    <input
                        type="text"
                        name="content[legal][{{ $index }}][label]"
                        value="{{ $link['label'] ?? '' }}"
                        placeholder="Link label"
                        class="rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                    >

                    <input
                        type="text"
                        name="content[legal][{{ $index }}][url]"
                        value="{{ $link['url'] ?? '' }}"
                        placeholder="Link URL"
                        class="rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                    >

                </div>

            @endforeach

        </div>

    </div>


    {{-- SOCIAL --}}
    <div class="mb-8 rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Social Media
            </h2>
        </div>

        <div class="space-y-4">

            @foreach (['x', 'youtube', 'facebook', 'linkedin'] as $platform)

                <div class="grid grid-cols-1 gap-3 md:grid-cols-[150px_1fr]">

                    <div class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            name="content[social][{{ $platform }}][enabled]"
                            value="1"
                            @checked($social[$platform]['enabled'] ?? false)
                            class="rounded border-slate-300 text-primary-600 focus:ring-primary-500"
                        >

                        <span class="text-sm font-medium capitalize text-slate-700">
                            {{ $platform }}
                        </span>

                    </div>

                    <input
                        type="text"
                        name="content[social][{{ $platform }}][url]"
                        value="{{ $social[$platform]['url'] ?? '' }}"
                        placeholder="Social media URL"
                        class="rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
                    >

                </div>

            @endforeach

        </div>

    </div>


    {{-- COPYRIGHT --}}
    <div class="mb-8 rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-slate-900">
                Copyright
            </h2>
        </div>

        <input
            type="text"
            name="content[copyright]"
            value="{{ $copyright }}"
            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm"
        >

    </div>


    {{-- SAVE --}}
    <div class="flex items-center justify-end">

        <button
            type="submit"
            class="inline-flex items-center rounded-lg bg-primary-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-primary-500"
        >
            Save Footer
        </button>

    </div>

</form>

@endsection