@extends('layouts.admin')

@section('title', 'Use Cases CMS')
@section('page-heading', 'Use Cases')
@section('page-description', 'Manage the Use Cases section displayed on your homepage')

@section('admin-content')

@php
$items = $content['items'] ?? [];
$benefits = $content['benefits'] ?? [];
@endphp

<div class="uc-editor">

```
{{-- =========================================================
     HEADER
========================================================== --}}

<div class="uc-editor-header">

    <div class="uc-header-glow"></div>

    <div class="relative z-10 flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">

        <div class="flex items-start gap-4">

            <div class="uc-page-icon">
                <svg class="h-6 w-6" fill="none" stroke="currentColor"
                    stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M4 4h16v16H4z"/>
                    <path d="M8 8h8M8 12h5M8 16h7"/>
                </svg>
            </div>

            <div>
                <div class="mb-2 flex flex-wrap items-center gap-2">

                    <h1 class="text-xl font-bold tracking-tight text-white">
                        Use Cases CMS
                    </h1>

                    <span class="uc-status-badge">
                        Active
                    </span>

                </div>

                <p class="max-w-2xl text-sm leading-6 text-slate-300">
                    Edit the industries, content, statistics, benefits,
                    and presentation used in the homepage Use Cases section.
                </p>
            </div>

        </div>

        <a href="{{ url('/') }}"
            target="_blank"
            class="uc-back-button">

            <svg class="h-4 w-4" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path d="M14 5h5v5"/>
                <path d="M19 5 10 14"/>
                <path d="M18 13v5a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h5"/>
            </svg>

            Preview Homepage

        </a>

    </div>

</div>


{{-- =========================================================
     ALERTS
========================================================== --}}

@if(session('success'))

    <div class="uc-alert uc-alert-success">

        <div class="uc-alert-icon">
            <svg class="h-4 w-4" fill="none" stroke="currentColor"
                stroke-width="2.5" viewBox="0 0 24 24">
                <path d="m5 12 4 4L19 6"/>
            </svg>
        </div>

        <div>
            <p class="font-semibold">Changes saved</p>
            <p class="mt-0.5 text-xs">
                {{ session('success') }}
            </p>
        </div>

    </div>

@endif


@if($errors->any())

    <div class="uc-alert uc-alert-error">

        <div class="uc-alert-icon">
            <svg class="h-4 w-4" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 9v4"/>
                <path d="M12 17h.01"/>
                <circle cx="12" cy="12" r="9"/>
            </svg>
        </div>

        <div>
            <p class="font-semibold">
                Please check the form
            </p>

            <ul class="mt-1 list-disc pl-4 text-xs">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    </div>

@endif


<form method="POST"
    action="{{ route('admin.home.section.update', 'use-cases') }}">

    @csrf
    @method('PUT')


    {{-- =====================================================
         SECTION CONTENT
    ====================================================== --}}

    <div class="uc-card">

        <div class="uc-card-header">

            <div class="uc-section-number">
                01
            </div>

            <div>
                <h2 class="uc-card-title">
                    Section Content
                </h2>

                <p class="uc-card-description">
                    Edit the heading and introductory text displayed above
                    the Use Cases tabs.
                </p>
            </div>

        </div>


        <div class="uc-card-body">

            <div class="grid gap-6 lg:grid-cols-2">

                <div>

                    <label class="uc-label">
                        Badge
                    </label>

                    <input
                        type="text"
                        name="content[badge]"
                        value="{{ old('content.badge', $content['badge'] ?? '') }}"
                        class="uc-input"
                        placeholder="USE CASES"
                    >

                </div>


                <div>

                    <label class="uc-label">
                        Highlighted Heading
                    </label>

                    <input
                        type="text"
                        name="content[heading][highlight]"
                        value="{{ old('content.heading.highlight', $content['heading']['highlight'] ?? '') }}"
                        class="uc-input uc-highlight-input"
                        placeholder="to the way you work"
                    >

                </div>

            </div>


            <div class="mt-6">

                <label class="uc-label">
                    Main Heading
                </label>

                <input
                    type="text"
                    name="content[heading][before]"
                    value="{{ old('content.heading.before', $content['heading']['before'] ?? '') }}"
                    class="uc-input"
                    placeholder="StockCore adapts"
                >

                <p class="uc-help">
                    This appears above the highlighted part of the heading.
                </p>

            </div>


            <div class="mt-6">

                <label class="uc-label">
                    Section Description
                </label>

                <textarea
                    name="content[description]"
                    class="uc-input uc-textarea"
                    placeholder="Powerful inventory control..."
                >{{ old('content.description', $content['description'] ?? '') }}</textarea>

            </div>

        </div>

    </div>


    {{-- =====================================================
         USE CASES
    ====================================================== --}}

    <div class="uc-card">

        <div class="uc-card-header">

            <div class="uc-section-number">
                02
            </div>

            <div>
                <h2 class="uc-card-title">
                    Use Case Tabs
                </h2>

                <p class="uc-card-description">
                    Manage each industry shown in the Use Cases selector.
                </p>
            </div>

        </div>


        <div class="uc-card-body">

            <div class="space-y-8">

                @foreach($items as $index => $item)

                    @php
                        $number = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                    @endphp

                    <div class="uc-item">

                        {{-- Item Header --}}

                        <div class="uc-item-header">

                            <div class="flex items-center gap-3">

                                <div class="uc-item-number">
                                    {{ $number }}
                                </div>

                                <div>
                                    <h3 class="text-sm font-bold text-slate-900">
                                        {{ $item['tab_title'] ?? 'Use Case' }}
                                    </h3>

                                    <p class="mt-0.5 text-xs text-slate-500">
                                        {{ $item['key'] ?? '' }}
                                    </p>
                                </div>

                            </div>

                            <span class="uc-item-badge">
                                Use Case
                            </span>

                        </div>


                        <div class="uc-item-body">

                            {{-- TAB CONTENT --}}

                            <div>

                                <div class="mb-5 uc-subheading">
                                    <span></span>
                                    Tab Content
                                </div>


                                <div class="grid gap-5 lg:grid-cols-2">

                                    <div>

                                        <label class="uc-mini-label">
                                            Tab Title
                                        </label>

                                        <input
                                            type="text"
                                            name="content[items][{{ $index }}][tab_title]"
                                            value="{{ old("content.items.$index.tab_title", $item['tab_title'] ?? '') }}"
                                            class="uc-input"
                                        >

                                    </div>


                                    <div>

                                        <label class="uc-mini-label">
                                            Icon
                                        </label>

                                        <select
                                            name="content[items][{{ $index }}][icon]"
                                            class="uc-input"
                                        >

                                            <option value="store"
                                                @selected(($item['icon'] ?? '') === 'store')>
                                                Store
                                            </option>

                                            <option value="factory"
                                                @selected(($item['icon'] ?? '') === 'factory')>
                                                Factory
                                            </option>

                                            <option value="layers"
                                                @selected(($item['icon'] ?? '') === 'layers')>
                                                Layers
                                            </option>

                                            <option value="shield"
                                                @selected(($item['icon'] ?? '') === 'shield')>
                                                Shield
                                            </option>

                                        </select>

                                        <p class="uc-help">
                                            The icon used on the corresponding tab.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- MAIN CONTENT --}}

                            <div class="mt-8">

                                <div class="mb-5 uc-subheading">
                                    <span></span>
                                    Main Content
                                </div>


                                <div>

                                    <label class="uc-mini-label">
                                        Title — Before Highlight
                                    </label>

                                    <input
                                        type="text"
                                        name="content[items][{{ $index }}][title][before]"
                                        value="{{ old("content.items.$index.title.before", $item['title']['before'] ?? '') }}"
                                        class="uc-input"
                                    >

                                </div>


                                <div class="mt-5">

                                    <label class="uc-mini-label">
                                        Title — Highlight
                                    </label>

                                    <input
                                        type="text"
                                        name="content[items][{{ $index }}][title][highlight]"
                                        value="{{ old("content.items.$index.title.highlight", $item['title']['highlight'] ?? '') }}"
                                        class="uc-input uc-highlight-input"
                                    >

                                </div>


                                <div class="mt-5">

                                    <label class="uc-mini-label">
                                        Description
                                    </label>

                                    <textarea
                                        name="content[items][{{ $index }}][description]"
                                        class="uc-input uc-textarea"
                                    >{{ old("content.items.$index.description", $item['description'] ?? '') }}</textarea>

                                </div>

                            </div>


                            {{-- BULLETS --}}

                            <div class="mt-8">

                                <div class="mb-5 uc-subheading">
                                    <span></span>
                                    Key Benefits
                                </div>


                                <div class="space-y-4">

                                    @foreach(($item['bullets'] ?? []) as $bulletIndex => $bullet)

                                        <div class="uc-bullet-row">

                                            <div class="uc-check">
                                                <svg class="h-3 w-3"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="3"
                                                    viewBox="0 0 24 24">
                                                    <path d="m5 12 4 4L19 6"/>
                                                </svg>
                                            </div>

                                            <input
                                                type="text"
                                                name="content[items][{{ $index }}][bullets][{{ $bulletIndex }}]"
                                                value="{{ old("content.items.$index.bullets.$bulletIndex", $bullet) }}"
                                                class="uc-input"
                                            >

                                        </div>

                                    @endforeach

                                </div>

                            </div>


                            {{-- STATISTICS --}}

                            <div class="mt-8">

                                <div class="mb-5 uc-subheading">
                                    <span></span>
                                    Performance Statistics
                                </div>


                                <div class="grid gap-5 lg:grid-cols-2">

                                    <div class="uc-stat-editor">

                                        <div class="uc-stat-heading">
                                            Statistic 01
                                        </div>

                                        <div class="grid gap-4 sm:grid-cols-2">

                                            <div>

                                                <label class="uc-mini-label">
                                                    Value
                                                </label>

                                                <input
                                                    type="text"
                                                    name="content[items][{{ $index }}][stat_one][value]"
                                                    value="{{ old("content.items.$index.stat_one.value", $item['stat_one']['value'] ?? '') }}"
                                                    class="uc-input"
                                                >

                                            </div>

                                            <div>

                                                <label class="uc-mini-label">
                                                    Text
                                                </label>

                                                <input
                                                    type="text"
                                                    name="content[items][{{ $index }}][stat_one][text]"
                                                    value="{{ old("content.items.$index.stat_one.text", $item['stat_one']['text'] ?? '') }}"
                                                    class="uc-input"
                                                >

                                            </div>

                                        </div>

                                    </div>


                                    <div class="uc-stat-editor">

                                        <div class="uc-stat-heading">
                                            Statistic 02
                                        </div>

                                        <div class="grid gap-4 sm:grid-cols-2">

                                            <div>

                                                <label class="uc-mini-label">
                                                    Value
                                                </label>

                                                <input
                                                    type="text"
                                                    name="content[items][{{ $index }}][stat_two][value]"
                                                    value="{{ old("content.items.$index.stat_two.value", $item['stat_two']['value'] ?? '') }}"
                                                    class="uc-input"
                                                >

                                            </div>

                                            <div>

                                                <label class="uc-mini-label">
                                                    Text
                                                </label>

                                                <input
                                                    type="text"
                                                    name="content[items][{{ $index }}][stat_two][text]"
                                                    value="{{ old("content.items.$index.stat_two.text", $item['stat_two']['text'] ?? '') }}"
                                                    class="uc-input"
                                                >

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            {{-- MEDIA --}}

                            <div class="mt-8">

                                <div class="mb-5 uc-subheading">
                                    <span></span>
                                    Use Case Media
                                </div>


                                <div class="uc-media-box">

                                    <div class="uc-media-preview">

                                        <svg class="h-9 w-9"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            viewBox="0 0 24 24">
                                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                                            <circle cx="8.5" cy="8.5" r="1.5"/>
                                            <path d="m21 15-5-5L5 21"/>
                                        </svg>

                                        <span>
                                            Media preview
                                        </span>

                                    </div>


                                    <div class="flex-1">

                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-end">

                                            <div class="flex-1">

                                                <label class="uc-mini-label">
                                                    Current Image Path
                                                </label>

                                                <input
                                                    type="text"
                                                    name="content[items][{{ $index }}][image]"
                                                    value="{{ old("content.items.$index.image", $item['image'] ?? '') }}"
                                                    class="uc-input"
                                                >

                                            </div>

                                            <button
                                                type="button"
                                                disabled
                                                class="uc-disabled-button"
                                            >
                                                Select Media
                                            </button>

                                        </div>


                                        <div class="mt-4">

                                            <label class="uc-mini-label">
                                                Alt Text
                                            </label>

                                            <input
                                                type="text"
                                                name="content[items][{{ $index }}][image_alt]"
                                                value="{{ old("content.items.$index.image_alt", $item['image_alt'] ?? '') }}"
                                                class="uc-input"
                                            >

                                        </div>


                                        <div class="mt-4">

                                            <label class="uc-mini-label">
                                                Media ID
                                            </label>

                                            <input
                                                type="text"
                                                value="Media Library integration coming soon"
                                                class="uc-input uc-disabled-input"
                                                disabled
                                            >

                                        </div>


                                        <p class="uc-media-tip">

                                            <svg class="h-4 w-4 shrink-0"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                viewBox="0 0 24 24">
                                                <circle cx="12" cy="12" r="9"/>
                                                <path d="M12 11v5"/>
                                                <path d="M12 8h.01"/>
                                            </svg>

                                            Media Library selection will be connected
                                            later. For now, the existing image path can
                                            be edited manually.

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>


    {{-- =====================================================
         BOTTOM BENEFITS
    ====================================================== --}}

    <div class="uc-card">

        <div class="uc-card-header">

            <div class="uc-section-number">
                03
            </div>

            <div>
                <h2 class="uc-card-title">
                    Bottom Benefits
                </h2>

                <p class="uc-card-description">
                    Manage the four benefit cards displayed below the main
                    Use Cases panel.
                </p>
            </div>

        </div>


        <div class="uc-card-body">

            <div class="grid gap-5 lg:grid-cols-2">

                @foreach($benefits as $index => $benefit)

                    <div class="uc-benefit-editor">

                        <div class="flex items-center gap-3">

                            <div class="uc-benefit-icon">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <div class="flex-1">

                                <label class="uc-mini-label">
                                    Benefit {{ $index + 1 }} Icon
                                </label>

                                <select
                                    name="content[benefits][{{ $index }}][icon]"
                                    class="uc-input"
                                >

                                    @foreach([
                                        'refresh' => 'Refresh',
                                        'bolt' => 'Bolt',
                                        'chart' => 'Chart',
                                        'check' => 'Check',
                                    ] as $iconValue => $iconLabel)

                                        <option value="{{ $iconValue }}"
                                            @selected(($benefit['icon'] ?? '') === $iconValue)>
                                            {{ $iconLabel }}
                                        </option>

                                    @endforeach

                                </select>

                            </div>

                        </div>


                        <div class="mt-5">

                            <label class="uc-mini-label">
                                Title
                            </label>

                            <input
                                type="text"
                                name="content[benefits][{{ $index }}][title]"
                                value="{{ old("content.benefits.$index.title", $benefit['title'] ?? '') }}"
                                class="uc-input"
                            >

                        </div>


                        <div class="mt-4">

                            <label class="uc-mini-label">
                                Description
                            </label>

                            <textarea
                                name="content[benefits][{{ $index }}][description]"
                                class="uc-input uc-textarea uc-small-textarea"
                            >{{ old("content.benefits.$index.description", $benefit['description'] ?? '') }}</textarea>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>


    {{-- =====================================================
         BUTTONS
    ====================================================== --}}

    <div class="uc-card">

        <div class="uc-card-header">

            <div class="uc-section-number">
                04
            </div>

            <div>
                <h2 class="uc-card-title">
                    Section Buttons
                </h2>

                <p class="uc-card-description">
                    Manage the calls-to-action displayed inside the
                    selected Use Case.
                </p>
            </div>

        </div>


        <div class="uc-card-body">

            <div class="grid gap-6 lg:grid-cols-2">

                <div>

                    <label class="uc-label">
                        Primary Button Text
                    </label>

                    <input
                        type="text"
                        name="content[primary_button][text]"
                        value="{{ old('content.primary_button.text', $content['primary_button']['text'] ?? '') }}"
                        class="uc-input"
                    >

                </div>


                <div>

                    <label class="uc-label">
                        Primary Button URL
                    </label>

                    <input
                        type="text"
                        name="content[primary_button][url]"
                        value="{{ old('content.primary_button.url', $content['primary_button']['url'] ?? '') }}"
                        class="uc-input"
                        placeholder="#"
                    >

                </div>


                <div>

                    <label class="uc-label">
                        Secondary Button Text
                    </label>

                    <input
                        type="text"
                        name="content[secondary_button][text]"
                        value="{{ old('content.secondary_button.text', $content['secondary_button']['text'] ?? '') }}"
                        class="uc-input"
                    >

                </div>


                <div>

                    <label class="uc-label">
                        Secondary Button URL
                    </label>

                    <input
                        type="text"
                        name="content[secondary_button][url]"
                        value="{{ old('content.secondary_button.url', $content['secondary_button']['url'] ?? '') }}"
                        class="uc-input"
                        placeholder="#"
                    >

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         SAVE BAR
    ====================================================== --}}

    <div class="uc-save-bar">

        <div>

            <p class="text-sm font-semibold text-slate-800">
                Use Cases changes
            </p>

            <p class="mt-0.5 text-xs text-slate-500">
                Save your changes when you are finished editing.
            </p>

        </div>


        <div class="flex items-center gap-3">

            <a href="{{ route('admin.home') }}"
                class="uc-cancel-button">
                Cancel
            </a>

            <button type="submit"
                class="uc-save-button">

                <svg class="h-4 w-4"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z"/>
                    <path d="M17 21v-8H7v8M7 3v5h8"/>
                </svg>

                Save Use Cases

            </button>

        </div>

    </div>

</form>
```

</div>

<style>

.uc-editor {
    max-width: 1180px;
    margin: 0 auto;
    padding: 8px 0 60px;
}

.uc-editor-header {
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    padding: 32px;
    margin-bottom: 28px;
    background:
        radial-gradient(circle at 90% 10%, rgba(59,130,246,.22), transparent 35%),
        linear-gradient(135deg, #0f172a 0%, #172554 100%);
    box-shadow: 0 20px 45px rgba(15,23,42,.14);
}

.uc-header-glow {
    position: absolute;
    width: 320px;
    height: 320px;
    right: -140px;
    top: -180px;
    border-radius: 999px;
    background: rgba(59,130,246,.14);
    filter: blur(10px);
}

.uc-page-icon {
    width: 54px;
    height: 54px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    color: white;
    background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.12);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.08);
}

.uc-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 9px;
    border-radius: 999px;
    color: #bbf7d0;
    background: rgba(34,197,94,.12);
    border: 1px solid rgba(34,197,94,.2);
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .06em;
}

.uc-status-badge::before {
    content: "";
    width: 6px;
    height: 6px;
    border-radius: 999px;
    background: #4ade80;
    box-shadow: 0 0 8px rgba(74,222,128,.7);
}

.uc-back-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 15px;
    border-radius: 10px;
    color: #e2e8f0;
    font-size: 13px;
    font-weight: 600;
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(255,255,255,.06);
    transition: all .2s ease;
}

.uc-back-button:hover {
    background: rgba(255,255,255,.1);
    color: white;
}

.uc-alert {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 15px 17px;
    margin-bottom: 20px;
    border-radius: 14px;
    font-size: 12px;
}

.uc-alert-success {
    color: #166534;
    background: #f0fdf4;
    border: 1px solid #bbf7d0;
}

.uc-alert-error {
    color: #991b1b;
    background: #fef2f2;
    border: 1px solid #fecaca;
}

.uc-alert-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    flex-shrink: 0;
    border-radius: 9px;
    background: rgba(255,255,255,.65);
}

.uc-card {
    overflow: hidden;
    margin-bottom: 24px;
    border: 1px solid #e5eaf1;
    border-radius: 20px;
    background: #fff;
    box-shadow:
        0 2px 4px rgba(15,23,42,.02),
        0 12px 30px rgba(15,23,42,.04);
}

.uc-card-header {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 22px 24px;
    border-bottom: 1px solid #eef2f7;
    background: linear-gradient(to right, #fff, #fbfdff);
}

.uc-section-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    border-radius: 11px;
    color: #2563eb;
    background: #eff6ff;
    border: 1px solid #dbeafe;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: .04em;
}

.uc-card-title {
    color: #0f172a;
    font-size: 16px;
    font-weight: 700;
}

.uc-card-description {
    margin-top: 3px;
    color: #64748b;
    font-size: 12px;
    line-height: 1.6;
}

.uc-card-body {
    padding: 26px 24px;
}

.uc-label {
    display: block;
    margin-bottom: 8px;
    color: #334155;
    font-size: 12px;
    font-weight: 700;
}

.uc-mini-label {
    display: block;
    margin-bottom: 7px;
    color: #64748b;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .05em;
}

.uc-help {
    margin-top: 7px;
    color: #94a3b8;
    font-size: 11px;
    line-height: 1.5;
}

.uc-input {
    width: 100%;
    min-height: 44px;
    padding: 10px 13px;
    outline: none;
    border: 1px solid #dbe2ea;
    border-radius: 10px;
    color: #0f172a;
    background: #fff;
    font-size: 13px;
    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        background .2s ease;
}

.uc-input:hover {
    border-color: #cbd5e1;
}

.uc-input:focus {
    border-color: #60a5fa;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(59,130,246,.09);
}

.uc-input::placeholder {
    color: #b0bac7;
}

.uc-textarea {
    resize: vertical;
    min-height: 105px;
    line-height: 1.6;
}

.uc-small-textarea {
    min-height: 80px;
}

.uc-highlight-input {
    border-color: #bfdbfe;
    background: #f8fbff;
}

.uc-item {
    overflow: hidden;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    background: #fff;
}

.uc-item-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 17px 18px;
    border-bottom: 1px solid #eef2f7;
    background: #f8fafc;
}

.uc-item-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 10px;
    color: #2563eb;
    background: #eff6ff;
    border: 1px solid #dbeafe;
    font-size: 10px;
    font-weight: 800;
}

.uc-item-badge {
    padding: 5px 9px;
    border-radius: 999px;
    color: #475569;
    background: #fff;
    border: 1px solid #e2e8f0;
    font-size: 9px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .05em;
}

.uc-item-body {
    padding: 24px;
}

.uc-subheading {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #334155;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .06em;
}

.uc-subheading span {
    width: 6px;
    height: 6px;
    border-radius: 999px;
    background: #3b82f6;
}

.uc-bullet-row {
    display: flex;
    align-items: center;
    gap: 10px;
}

.uc-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 24px;
    height: 24px;
    flex-shrink: 0;
    border-radius: 999px;
    color: white;
    background: #2563eb;
}

.uc-stat-editor {
    padding: 17px;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    background: #f8fafc;
}

.uc-stat-heading {
    margin-bottom: 14px;
    color: #334155;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .05em;
}

.uc-media-box {
    display: flex;
    flex-direction: column;
    gap: 18px;
    padding: 18px;
    border: 1px solid #dbe2ea;
    border-radius: 15px;
    background: #f8fafc;
}

.uc-media-preview {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    min-height: 120px;
    border: 1px dashed #cbd5e1;
    border-radius: 12px;
    color: #94a3b8;
    background: white;
    font-size: 11px;
    font-weight: 600;
}

.uc-disabled-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 44px;
    padding: 10px 15px;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    color: #94a3b8;
    background: #f1f5f9;
    font-size: 12px;
    font-weight: 700;
    cursor: not-allowed;
}

.uc-disabled-input {
    color: #94a3b8;
    background: #f1f5f9;
    cursor: not-allowed;
}

.uc-media-tip {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin-top: 12px;
    color: #64748b;
    font-size: 11px;
    line-height: 1.55;
}

.uc-benefit-editor {
    padding: 20px;
    border: 1px solid #e2e8f0;
    border-radius: 15px;
    background: #f8fafc;
}

.uc-benefit-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    flex-shrink: 0;
    border-radius: 10px;
    color: #2563eb;
    background: #eff6ff;
    border: 1px solid #dbeafe;
    font-size: 10px;
    font-weight: 800;
}

.uc-save-bar {
    position: sticky;
    bottom: 18px;
    z-index: 20;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 16px 18px;
    margin-top: 8px;
    border: 1px solid #dbe2ea;
    border-radius: 16px;
    background: rgba(255,255,255,.94);
    backdrop-filter: blur(16px);
    box-shadow: 0 15px 45px rgba(15,23,42,.12);
}

.uc-cancel-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 42px;
    padding: 10px 15px;
    border-radius: 10px;
    color: #475569;
    border: 1px solid #dbe2ea;
    background: #fff;
    font-size: 12px;
    font-weight: 700;
}

.uc-cancel-button:hover {
    background: #f8fafc;
}

.uc-save-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 42px;
    padding: 10px 17px;
    border: 0;
    border-radius: 10px;
    color: white;
    background: #2563eb;
    box-shadow: 0 8px 20px rgba(37,99,235,.2);
    font-size: 12px;
    font-weight: 700;
    cursor: pointer;
    transition: all .2s ease;
}

.uc-save-button:hover {
    background: #1d4ed8;
    transform: translateY(-1px);
    box-shadow: 0 10px 25px rgba(37,99,235,.25);
}

@media (max-width: 640px) {

    .uc-editor-header {
        padding: 24px;
        border-radius: 20px;
    }

    .uc-card-header {
        padding: 18px;
    }

    .uc-card-body {
        padding: 20px 18px;
    }

    .uc-item-body {
        padding: 18px;
    }

    .uc-item-header {
        align-items: flex-start;
    }

    .uc-save-bar {
        align-items: stretch;
        flex-direction: column;
    }

    .uc-save-bar > div:last-child {
        width: 100%;
    }

    .uc-cancel-button,
    .uc-save-button {
        flex: 1;
    }

}

</style>

@endsection
