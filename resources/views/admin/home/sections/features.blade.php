@extends('layouts.admin')

@section('title', 'Edit Features')

@section('page-heading', 'Edit Features')

@section('page-description', 'Manage the Features section displayed on your homepage')

@section('admin-content')

<div class="hero-editor">

    {{-- =====================================================
         HEADER
    ====================================================== --}}

    <div class="hero-editor-header">

        <div class="hero-header-glow"></div>

        <div class="relative z-10">

            <div class="flex items-start justify-between gap-6">

                <div class="flex items-start gap-4">

                    <div class="hero-page-icon">

                        <svg
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 6.5A2.5 2.5 0 016.5 4h3A2.5 2.5 0 0112 6.5v3A2.5 2.5 0 019.5 12h-3A2.5 2.5 0 014 9.5v-3zM12 14.5a2.5 2.5 0 012.5-2.5h3a2.5 2.5 0 012.5 2.5v3a2.5 2.5 0 01-2.5 2.5h-3a2.5 2.5 0 01-2.5-2.5v-3zM12 6.5A2.5 2.5 0 0114.5 4h3A2.5 2.5 0 0120 6.5v3a2.5 2.5 0 01-2.5 2.5h-3A2.5 2.5 0 0112 9.5v-3zM4 14.5A2.5 2.5 0 016.5 12h3a2.5 2.5 0 012.5 2.5v3A2.5 2.5 0 019.5 20h-3A2.5 2.5 0 014 17.5v-3z"
                            />
                        </svg>

                    </div>

                    <div>

                        <div class="flex items-center gap-2 mb-2">

                            <span class="hero-status-badge">
                                Active
                            </span>

                            <span class="text-xs font-medium text-slate-400">
                                Homepage
                            </span>

                        </div>

                        <h1 class="text-2xl md:text-3xl font-bold text-white tracking-tight">
                            Features
                        </h1>

                        <p class="mt-2 max-w-xl text-sm leading-6 text-slate-300">
                            Manage the heading, description, feature cards,
                            and media configuration for the homepage Features section.
                        </p>

                    </div>

                </div>


                <a
                    href="{{ route('admin.home') }}"
                    class="hero-back-button"
                >

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 19l-7-7 7-7"
                        />
                    </svg>

                    Back to Home

                </a>

            </div>

        </div>

    </div>


    {{-- =====================================================
         ALERTS
    ====================================================== --}}

    @if(session('success'))

        <div class="hero-alert hero-alert-success">

            <div class="hero-alert-icon">

                <svg
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 13l4 4L19 7"
                    />
                </svg>

            </div>

            <span>
                {{ session('success') }}
            </span>

        </div>

    @endif


    @if($errors->any())

        <div class="hero-alert hero-alert-error">

            <div class="hero-alert-icon">

                <svg
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 9v3m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z"
                    />
                </svg>

            </div>

            <div>

                <p class="font-semibold">
                    Please check the following:
                </p>

                <ul class="mt-1 list-disc list-inside">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        </div>

    @endif


    {{-- =====================================================
         FORM
    ====================================================== --}}

    <form
        method="POST"
        action="{{ route('admin.home.section.update', 'features') }}"
    >

        @csrf
        @method('PUT')


        {{-- =================================================
             01 — SECTION CONTENT
        ================================================== --}}

        <div class="hero-card">

            <div class="hero-card-header">

                <div class="hero-section-number">
                    01
                </div>

                <div>

                    <h2 class="hero-card-title">
                        Section Content
                    </h2>

                    <p class="hero-card-description">
                        Configure the main heading and description shown above
                        the feature cards.
                    </p>

                </div>

            </div>


            <div class="hero-card-body">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Heading Before --}}

                    <div>

                        <label class="hero-label">
                            Heading — Before Highlight
                        </label>

                        <input
                            type="text"
                            name="content[heading][before]"
                            value="{{ old('content.heading.before', data_get($content, 'heading.before')) }}"
                            class="hero-input"
                            placeholder="Everything you need to"
                        >

                        <p class="hero-help">
                            Text displayed before the highlighted part of the heading.
                        </p>

                    </div>


                    {{-- Heading Highlight --}}

                    <div>

                        <label class="hero-label">
                            Heading — Highlight
                        </label>

                        <div class="relative">

                            <input
                                type="text"
                                name="content[heading][highlight]"
                                value="{{ old('content.heading.highlight', data_get($content, 'heading.highlight')) }}"
                                class="hero-input hero-highlight-input"
                                placeholder="stay in control."
                            >

                            <span class="hero-highlight-tag">
                                Highlight
                            </span>

                        </div>

                        <p class="hero-help">
                            This portion receives the highlighted styling on the homepage.
                        </p>

                    </div>

                </div>


                {{-- Description --}}

                <div class="mt-6">

                    <label class="hero-label">
                        Section Description
                    </label>

                    <textarea
                        name="content[description]"
                        class="hero-input hero-textarea"
                        placeholder="Powerful tools to help you track, manage, and optimize your inventory..."
                    >{{ old('content.description', data_get($content, 'description')) }}</textarea>

                    <p class="hero-help">
                        The supporting text displayed underneath the main heading.
                    </p>

                </div>

            </div>

        </div>


        {{-- =================================================
             02 — FEATURE CARDS
        ================================================== --}}

        <div class="hero-card">

            <div class="hero-card-header">

                <div class="hero-section-number">
                    02
                </div>

                <div>

                    <h2 class="hero-card-title">
                        Feature Cards
                    </h2>

                    <p class="hero-card-description">
                        Edit the individual feature cards displayed in the Features section.
                    </p>

                </div>

            </div>


            <div class="hero-card-body">

                @php
                    $items = data_get($content, 'items', []);
                @endphp


                <div class="feature-admin-grid">

                    @foreach($items as $index => $item)

                        <div class="feature-admin-card">

                            {{-- Card Header --}}

                            <div class="feature-admin-card-header">

                                <div class="feature-admin-number">

                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                </div>

                                <div class="min-w-0">

                                    <p class="feature-admin-card-label">
                                        Feature {{ $index + 1 }}
                                    </p>

                                    <p class="feature-admin-card-subtitle">
                                        Homepage feature card
                                    </p>

                                </div>

                                @if(data_get($item, 'primary'))

                                    <span class="feature-primary-badge">
                                        Primary
                                    </span>

                                @endif

                            </div>


                            {{-- Card Body --}}

                            <div class="feature-admin-card-body">

                                {{-- Title --}}

                                <div>

                                    <label class="hero-mini-label">
                                        Title
                                    </label>

                                    <input
                                        type="text"
                                        name="content[items][{{ $index }}][title]"
                                        value="{{ old("content.items.$index.title", data_get($item, 'title')) }}"
                                        class="hero-input"
                                        placeholder="Feature title"
                                    >

                                </div>


                                {{-- Description --}}

                                <div>

                                    <label class="hero-mini-label">
                                        Description
                                    </label>

                                    <textarea
                                        name="content[items][{{ $index }}][description]"
                                        class="hero-input hero-feature-textarea"
                                        placeholder="Describe this feature..."
                                    >{{ old("content.items.$index.description", data_get($item, 'description')) }}</textarea>

                                </div>


                                {{-- Link --}}

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                                    <div>

                                        <label class="hero-mini-label">
                                            Link Text
                                        </label>

                                        <input
                                            type="text"
                                            name="content[items][{{ $index }}][link_text]"
                                            value="{{ old("content.items.$index.link_text", data_get($item, 'link_text')) }}"
                                            class="hero-input"
                                            placeholder="Explore feature"
                                        >

                                    </div>


                                    <div>

                                        <label class="hero-mini-label">
                                            Link URL
                                        </label>

                                        <input
                                            type="text"
                                            name="content[items][{{ $index }}][link_url]"
                                            value="{{ old("content.items.$index.link_url", data_get($item, 'link_url')) }}"
                                            class="hero-input"
                                            placeholder="#"
                                        >

                                    </div>

                                </div>


                                {{-- Primary Card --}}

                                <div class="feature-primary-toggle">

                                    <div>

                                        <p class="text-xs font-semibold text-slate-700">
                                            Primary Card
                                        </p>

                                        <p class="mt-1 text-[11px] text-slate-400">
                                            Applies the highlighted card styling.
                                        </p>

                                    </div>

                                    <label class="relative inline-flex items-center cursor-pointer">

                                        <input
                                            type="hidden"
                                            name="content[items][{{ $index }}][primary]"
                                            value="0"
                                        >

                                        <input
                                            type="checkbox"
                                            name="content[items][{{ $index }}][primary]"
                                            value="1"
                                            class="sr-only peer"
                                            @checked(data_get($item, 'primary'))
                                        >

                                        <div class="feature-toggle"></div>

                                    </label>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>


                @if(count($items) === 0)

                    <div class="empty-feature-state">

                        <svg
                            class="w-8 h-8 text-slate-300"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5"
                        >
                            <rect
                                x="3"
                                y="3"
                                width="18"
                                height="18"
                                rx="2"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 14l2.5-3 2 2.5L15 10l3 4"
                            />

                        </svg>

                        <p class="mt-3 text-sm font-semibold text-slate-600">
                            No feature cards configured
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Add feature cards to the default configuration first.
                        </p>

                    </div>

                @endif

            </div>

        </div>


        {{-- =================================================
             03 — FEATURE MEDIA
        ================================================== --}}

        <div class="hero-card">

            <div class="hero-card-header">

                <div class="hero-section-number">
                    03
                </div>

                <div>

                    <h2 class="hero-card-title">
                        Feature Media
                    </h2>

                    <p class="hero-card-description">
                        Configure the visual animation or image displayed
                        with each feature card.
                    </p>

                </div>

            </div>


            <div class="hero-card-body">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">


                    {{-- =====================================
                         MEDIA PREVIEW
                    ====================================== --}}

                    <div>

                        <label class="hero-label">
                            Media Preview
                        </label>

                        <div class="media-preview">

                            <div class="media-preview-grid"></div>

                            <div class="media-preview-content">

                                <div class="media-preview-icon">

                                    <svg
                                        class="w-8 h-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    >
                                        <rect
                                            x="3"
                                            y="3"
                                            width="18"
                                            height="18"
                                            rx="2"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M8 14l2.5-3 2 2.5L15 10l3 4"
                                        />

                                    </svg>

                                </div>

                                <p class="font-semibold text-slate-700">
                                    Feature Media
                                </p>

                                <p class="text-xs text-slate-400 mt-1">
                                    Media preview will appear here
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- =====================================
                         MEDIA SETTINGS
                    ====================================== --}}

                    <div class="space-y-5">

                        {{-- Media Library Placeholder --}}

                        <div>

                            <label class="hero-label">
                                Media Library
                            </label>

                            <div class="media-placeholder">

                                <div class="media-placeholder-icon">

                                    <svg
                                        class="w-5 h-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 12"
                                        />

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 19h16"
                                        />

                                    </svg>

                                </div>

                                <div class="flex-1 min-w-0">

                                    <p class="text-sm font-semibold text-slate-700">
                                        Select Feature Media
                                    </p>

                                    <p class="text-xs text-slate-400 mt-1">
                                        Choose an image or animation from your media library.
                                    </p>

                                </div>

                                <button
                                    type="button"
                                    disabled
                                    class="media-coming-soon-button"
                                >
                                    Coming Soon
                                </button>

                            </div>

                        </div>


                        {{-- Media ID --}}

                        <div>

                            <label class="hero-label">
                                Media ID
                            </label>

                            <input
                                type="text"
                                disabled
                                class="hero-input"
                                placeholder="Media ID will be connected later"
                            >

                            <p class="hero-help">
                                Media selection will be connected to the Media Library later.
                            </p>

                        </div>


                        {{-- Alt Text --}}

                        <div>

                            <label class="hero-label">
                                Alternative Text
                            </label>

                            <input
                                type="text"
                                disabled
                                class="hero-input"
                                placeholder="Feature illustration"
                            >

                            <p class="hero-help">
                                Accessibility text will become configurable when media management is enabled.
                            </p>

                        </div>


                        {{-- Information Tip --}}

                        <div class="media-tip">

                            <svg
                                class="w-5 h-5 text-indigo-500 shrink-0"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000 18z"
                                />
                            </svg>

                            <p>
                                Media management is intentionally disabled for now.
                                This section is kept ready for the future Media Library
                                integration so you will be able to change images and
                                animations without editing your Blade files.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             04 — LAYOUT INFORMATION
        ================================================== --}}

        <div class="hero-card">

            <div class="hero-card-header">

                <div class="hero-section-number">
                    04
                </div>

                <div>

                    <h2 class="hero-card-title">
                        Feature Layout
                    </h2>

                    <p class="hero-card-description">
                        Information about how the feature cards are arranged
                        on the public homepage.
                    </p>

                </div>

            </div>


            <div class="hero-card-body">

                <div class="layout-info-grid">

                    {{-- Desktop --}}

                    <div class="layout-info-item">

                        <div class="layout-info-icon">

                            <svg
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.7"
                            >
                                <rect
                                    x="3"
                                    y="4"
                                    width="18"
                                    height="16"
                                    rx="2"
                                />

                                <path
                                    stroke-linecap="round"
                                    d="M3 10h18M9 10v10"
                                />

                            </svg>

                        </div>

                        <div>

                            <p class="text-xs font-bold text-slate-700">
                                Desktop
                            </p>

                            <p class="mt-1 text-[11px] text-slate-400">
                                3-column feature grid
                            </p>

                        </div>

                    </div>


                    {{-- Tablet --}}

                    <div class="layout-info-item">

                        <div class="layout-info-icon">

                            <svg
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.7"
                            >
                                <rect
                                    x="5"
                                    y="3"
                                    width="14"
                                    height="18"
                                    rx="2"
                                />

                                <path
                                    stroke-linecap="round"
                                    d="M9 17h6"
                                />

                            </svg>

                        </div>

                        <div>

                            <p class="text-xs font-bold text-slate-700">
                                Tablet
                            </p>

                            <p class="mt-1 text-[11px] text-slate-400">
                                2-column feature grid
                            </p>

                        </div>

                    </div>


                    {{-- Mobile --}}

                    <div class="layout-info-item">

                        <div class="layout-info-icon">

                            <svg
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.7"
                            >
                                <rect
                                    x="7"
                                    y="2.5"
                                    width="10"
                                    height="19"
                                    rx="2"
                                />

                                <path
                                    stroke-linecap="round"
                                    d="M10 18.5h4"
                                />

                            </svg>

                        </div>

                        <div>

                            <p class="text-xs font-bold text-slate-700">
                                Mobile
                            </p>

                            <p class="mt-1 text-[11px] text-slate-400">
                                Single-column layout
                            </p>

                        </div>

                    </div>

                </div>


                <div class="layout-note">

                    <svg
                        class="w-4 h-4 text-slate-400 shrink-0"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000 18z"
                        />
                    </svg>

                    <p>
                        The visual layout is controlled by the public homepage
                        stylesheet. This panel is informational and does not
                        modify the responsive grid.
                    </p>

                </div>

            </div>

        </div>


        {{-- =================================================
             SAVE BAR
        ================================================== --}}

        <div class="hero-save-bar">

            <div class="hidden sm:block">

                <p class="text-xs font-semibold text-slate-700">
                    Features configuration
                </p>

                <p class="mt-1 text-[11px] text-slate-400">
                    Save your changes to update the section configuration.
                </p>

            </div>


            <div class="flex items-center gap-3 ml-auto">

                <a
                    href="{{ route('admin.home') }}"
                    class="hero-cancel-button"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="hero-save-button"
                >

                    <svg
                        class="w-4 h-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12l4 4L19 6"
                        />
                    </svg>

                    Save Changes

                </button>

            </div>

        </div>

    </form>

</div>


<style>

/* =========================================================
   FEATURE EDITOR
========================================================= */

.hero-editor {
    max-width: 1180px;
    margin: 0 auto;
    padding: 8px 0 60px;
}


/* =========================================================
   HEADER
========================================================= */

.hero-editor-header {
    position: relative;
    overflow: hidden;

    border-radius: 24px;

    padding: 32px;

    margin-bottom: 28px;

    background:
        radial-gradient(
            circle at 90% 10%,
            rgba(59,130,246,.22),
            transparent 35%
        ),
        linear-gradient(
            135deg,
            #0f172a 0%,
            #172554 100%
        );

    box-shadow:
        0 20px 45px rgba(15,23,42,.14);
}

.hero-header-glow {
    position: absolute;

    width: 320px;
    height: 320px;

    right: -120px;
    top: -160px;

    border-radius: 999px;

    background: rgba(59,130,246,.12);

    filter: blur(40px);
}

.hero-page-icon {
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

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.08);
}

.hero-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;

    padding: 4px 9px;

    border-radius: 999px;

    font-size: 10px;
    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .06em;

    color: #bbf7d0;

    background: rgba(34,197,94,.12);

    border: 1px solid rgba(34,197,94,.2);
}

.hero-status-badge::before {
    content: "";

    width: 6px;
    height: 6px;

    border-radius: 999px;

    background: #4ade80;

    box-shadow:
        0 0 8px rgba(74,222,128,.7);
}

.hero-back-button {
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

.hero-back-button:hover {
    color: white;

    background: rgba(255,255,255,.1);

    border-color: rgba(255,255,255,.18);

    transform: translateY(-1px);
}


/* =========================================================
   ALERTS
========================================================= */

.hero-alert {
    display: flex;
    align-items: flex-start;
    gap: 10px;

    margin-bottom: 22px;

    padding: 13px 15px;

    border-radius: 12px;

    font-size: 12px;
    line-height: 1.6;
}

.hero-alert-success {
    color: #166534;

    border: 1px solid #bbf7d0;

    background: #f0fdf4;
}

.hero-alert-error {
    color: #991b1b;

    border: 1px solid #fecaca;

    background: #fef2f2;
}

.hero-alert-icon {
    display: flex;

    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    width: 26px;
    height: 26px;

    border-radius: 8px;

    background: rgba(255,255,255,.7);
}


/* =========================================================
   CARDS
========================================================= */

.hero-card {
    overflow: hidden;

    margin-bottom: 24px;

    border: 1px solid #e5eaf1;

    border-radius: 20px;

    background: #fff;

    box-shadow:
        0 2px 4px rgba(15,23,42,.02),
        0 12px 30px rgba(15,23,42,.04);

    transition:
        box-shadow .2s ease,
        transform .2s ease;
}

.hero-card:hover {
    box-shadow:
        0 3px 7px rgba(15,23,42,.03),
        0 18px 38px rgba(15,23,42,.06);
}

.hero-card-header {
    display: flex;
    align-items: flex-start;
    gap: 15px;

    padding: 22px 24px;

    border-bottom: 1px solid #eef2f7;

    background:
        linear-gradient(
            to right,
            #fff,
            #fbfdff
        );
}

.hero-section-number {
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

.hero-card-title {
    color: #0f172a;

    font-size: 16px;
    font-weight: 700;
}

.hero-card-description {
    margin-top: 3px;

    color: #64748b;

    font-size: 12px;

    line-height: 1.6;
}

.hero-card-body {
    padding: 26px 24px;
}


/* =========================================================
   FORM
========================================================= */

.hero-label {
    display: block;

    margin-bottom: 8px;

    color: #334155;

    font-size: 12px;
    font-weight: 700;

    letter-spacing: .01em;
}

.hero-mini-label {
    display: block;

    margin-bottom: 7px;

    color: #64748b;

    font-size: 11px;
    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .05em;
}

.hero-help {
    margin-top: 7px;

    color: #94a3b8;

    font-size: 11px;

    line-height: 1.5;
}

.hero-input {
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

.hero-input:hover {
    border-color: #cbd5e1;
}

.hero-input:focus {
    border-color: #60a5fa;

    background: #fff;

    box-shadow:
        0 0 0 4px rgba(59,130,246,.09);
}

.hero-input::placeholder {
    color: #b0bac7;
}

.hero-textarea {
    resize: vertical;

    min-height: 110px;

    line-height: 1.6;
}

.hero-feature-textarea {
    min-height: 105px;
}

.hero-highlight-input {
    padding-right: 86px;

    border-color: #bfdbfe;

    background: #f8fbff;
}

.hero-highlight-tag {
    position: absolute;

    right: 10px;
    top: 50%;

    transform: translateY(-50%);

    padding: 4px 7px;

    border-radius: 6px;

    color: #2563eb;

    background: #dbeafe;

    font-size: 9px;
    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: .04em;
}


/* =========================================================
   FEATURE CARDS
========================================================= */

.feature-admin-grid {
    display: grid;

    grid-template-columns: 1fr;

    gap: 18px;
}

.feature-admin-card {
    overflow: hidden;

    border: 1px solid #e5eaf1;

    border-radius: 16px;

    background: #fff;

    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        transform .2s ease;
}

.feature-admin-card:hover {
    border-color: #dbeafe;

    box-shadow:
        0 12px 30px rgba(15,23,42,.05);

    transform: translateY(-2px);
}

.feature-admin-card-header {
    display: flex;
    align-items: center;
    gap: 12px;

    padding: 15px 17px;

    border-bottom: 1px solid #eef2f7;

    background:
        linear-gradient(
            to right,
            #fbfdff,
            #fff
        );
}

.feature-admin-number {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 34px;
    height: 34px;

    flex-shrink: 0;

    border-radius: 9px;

    color: #2563eb;

    background: #eff6ff;

    border: 1px solid #dbeafe;

    font-size: 10px;
    font-weight: 800;
}

.feature-admin-card-label {
    color: #334155;

    font-size: 12px;
    font-weight: 700;
}

.feature-admin-card-subtitle {
    margin-top: 2px;

    color: #94a3b8;

    font-size: 10px;
}

.feature-primary-badge {
    margin-left: auto;

    padding: 4px 8px;

    border-radius: 999px;

    color: #2563eb;

    background: #eff6ff;

    border: 1px solid #dbeafe;

    font-size: 9px;
    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: .04em;
}

.feature-admin-card-body {
    display: flex;

    flex-direction: column;

    gap: 18px;

    padding: 19px 17px;
}

.feature-primary-toggle {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;

    padding: 12px 13px;

    border: 1px solid #eef2f7;

    border-radius: 10px;

    background: #f8fafc;
}


/* =========================================================
   TOGGLE
========================================================= */

.feature-toggle {
    position: relative;

    width: 40px;
    height: 22px;

    border-radius: 999px;

    background: #cbd5e1;

    transition: background .2s ease;
}

.feature-toggle::after {
    content: "";

    position: absolute;

    top: 3px;
    left: 3px;

    width: 16px;
    height: 16px;

    border-radius: 999px;

    background: white;

    box-shadow:
        0 1px 3px rgba(15,23,42,.2);

    transition:
        transform .2s ease;
}

.peer:checked + .feature-toggle {
    background: #2563eb;
}

.peer:checked + .feature-toggle::after {
    transform: translateX(18px);
}


/* =========================================================
   FEATURE MEDIA
========================================================= */

.media-preview {
    position: relative;

    min-height: 300px;

    overflow: hidden;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid #dbe2ea;

    border-radius: 16px;

    background:
        linear-gradient(
            135deg,
            #f8fafc,
            #eef4ff
        );
}

.media-preview-grid {
    position: absolute;

    inset: 0;

    opacity: .5;

    background-image:
        linear-gradient(
            rgba(148,163,184,.08) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(148,163,184,.08) 1px,
            transparent 1px
        );

    background-size: 24px 24px;
}

.media-preview-content {
    position: relative;

    z-index: 1;

    text-align: center;
}

.media-preview-icon {
    width: 68px;
    height: 68px;

    margin: 0 auto 14px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 17px;

    color: #64748b;

    background: rgba(255,255,255,.9);

    border: 1px solid #e2e8f0;

    box-shadow:
        0 8px 25px rgba(15,23,42,.06);
}

.media-placeholder {
    display: flex;
    align-items: center;
    gap: 12px;

    padding: 13px;

    border: 1px dashed #cbd5e1;

    border-radius: 12px;

    background: #f8fafc;
}

.media-placeholder-icon {
    width: 38px;
    height: 38px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    color: #64748b;

    background: #e2e8f0;
}

.media-coming-soon-button {
    flex-shrink: 0;

    padding: 6px 9px;

    border: 1px solid #e2e8f0;

    border-radius: 7px;

    color: #94a3b8;

    background: #f1f5f9;

    font-size: 9px;
    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: .04em;

    cursor: not-allowed;
}

.media-tip {
    display: flex;
    align-items: flex-start;
    gap: 10px;

    padding: 12px 14px;

    border-radius: 11px;

    border: 1px solid #dbeafe;

    background: #eff6ff;

    color: #475569;

    font-size: 11px;

    line-height: 1.6;
}


/* =========================================================
   LAYOUT INFORMATION
========================================================= */

.layout-info-grid {
    display: grid;

    grid-template-columns: 1fr;

    gap: 12px;
}

.layout-info-item {
    display: flex;
    align-items: center;
    gap: 12px;

    padding: 13px;

    border: 1px solid #eef2f7;

    border-radius: 12px;

    background: #fafcff;
}

.layout-info-icon {
    width: 38px;
    height: 38px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    color: #64748b;

    border-radius: 10px;

    background: #f1f5f9;

    border: 1px solid #e2e8f0;
}

.layout-note {
    display: flex;
    align-items: flex-start;
    gap: 9px;

    margin-top: 16px;

    padding: 12px 14px;

    border-radius: 10px;

    background: #f8fafc;

    border: 1px solid #eef2f7;

    color: #64748b;

    font-size: 11px;

    line-height: 1.6;
}


/* =========================================================
   EMPTY STATE
========================================================= */

.empty-feature-state {
    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    min-height: 220px;

    text-align: center;

    border: 1px dashed #dbe2ea;

    border-radius: 14px;

    background: #fafcff;
}


/* =========================================================
   SAVE BAR
========================================================= */

.hero-save-bar {
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

    box-shadow:
        0 15px 45px rgba(15,23,42,.12);
}

.hero-cancel-button {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-height: 42px;

    padding: 0 16px;

    border-radius: 10px;

    color: #64748b;

    background: #f8fafc;

    border: 1px solid #e2e8f0;

    font-size: 12px;
    font-weight: 700;

    transition: all .2s ease;
}

.hero-cancel-button:hover {
    color: #334155;

    background: #f1f5f9;

    border-color: #cbd5e1;
}

.hero-save-button {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 8px;

    min-height: 42px;

    padding: 0 18px;

    border: 0;

    border-radius: 10px;

    color: white;

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8
        );

    box-shadow:
        0 7px 18px rgba(37,99,235,.22);

    font-size: 12px;
    font-weight: 700;

    cursor: pointer;

    transition:
        transform .2s ease,
        box-shadow .2s ease;
}

.hero-save-button:hover {
    transform: translateY(-1px);

    box-shadow:
        0 10px 24px rgba(37,99,235,.28);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (min-width: 768px) {

    .feature-admin-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

    .layout-info-grid {
        grid-template-columns:
            repeat(3, minmax(0, 1fr));
    }

}

@media (min-width: 1100px) {

    .feature-admin-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}

@media (max-width: 767px) {

    .hero-editor-header {
        padding: 24px;
    }

    .hero-editor-header > div > div {
        flex-direction: column;
    }

    .hero-back-button {
        display: none;
    }

    .hero-card-header {
        padding: 18px;
    }

    .hero-card-body {
        padding: 20px 18px;
    }

    .hero-save-bar {
        bottom: 10px;

        padding: 12px;

        border-radius: 14px;
    }

    .hero-save-bar > div:first-child {
        display: none;
    }

    .hero-save-bar > div:last-child {
        width: 100%;
    }

    .hero-cancel-button,
    .hero-save-button {
        flex: 1;
    }

    .media-preview {
        min-height: 240px;
    }

}

</style>

@endsection