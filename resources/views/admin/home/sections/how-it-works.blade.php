@extends('layouts.admin')

@section('title', 'Edit How It Works')

@section('page-heading', 'Edit How It Works')

@section(
    'page-description',
    'Manage the How It Works section displayed on your homepage'
)

@section('admin-content')

<div class="hiw-editor">

    {{-- =====================================================
         HEADER
    ====================================================== --}}

    <div class="hiw-editor-header">

        <div class="hiw-header-glow"></div>

        <div class="relative z-10">

            <div class="flex items-start justify-between gap-6">

                <div class="flex items-start gap-4">

                    <div class="hiw-page-icon">

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
                                d="M5 6h14M5 12h14M5 18h14"
                            />

                            <circle cx="7" cy="6" r="2" fill="currentColor" stroke="none"/>
                            <circle cx="12" cy="12" r="2" fill="currentColor" stroke="none"/>
                            <circle cx="17" cy="18" r="2" fill="currentColor" stroke="none"/>
                        </svg>

                    </div>

                    <div>

                        <div class="flex items-center gap-2 mb-2">

                            <span class="hiw-status-badge">
                                Active
                            </span>

                            <span class="text-xs font-medium text-slate-400">
                                Homepage
                            </span>

                        </div>

                        <h1 class="text-2xl md:text-3xl font-bold text-white tracking-tight">
                            How It Works
                        </h1>

                        <p class="mt-2 max-w-xl text-sm leading-6 text-slate-300">
                            Manage the workflow introduction, dashboard preview,
                            process steps, and final callout displayed on the homepage.
                        </p>

                    </div>

                </div>


                <a
                    href="{{ route('admin.home') }}"
                    class="hiw-back-button"
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

        <div class="hiw-alert hiw-alert-success">

            <div class="hiw-alert-icon">

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

        <div class="hiw-alert hiw-alert-error">

            <div class="hiw-alert-icon">

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
        action="{{ route('admin.home.section.update', 'how-it-works') }}"
    >

        @csrf
        @method('PUT')


        {{-- =================================================
             01 — SECTION CONTENT
        ================================================== --}}

        <div class="hiw-card">

            <div class="hiw-card-header">

                <div class="hiw-section-number">
                    01
                </div>

                <div>

                    <h2 class="hiw-card-title">
                        Section Content
                    </h2>

                    <p class="hiw-card-description">
                        Configure the introductory content displayed
                        on the left side of the section.
                    </p>

                </div>

            </div>


            <div class="hiw-card-body">

                {{-- Badge --}}

                <div>

                    <label class="hiw-label">
                        Section Badge
                    </label>

                    <input
                        type="text"
                        name="content[badge]"
                        value="{{ old(
                            'content.badge',
                            data_get($content, 'badge')
                        ) }}"
                        class="hiw-input"
                        placeholder="HOW IT WORKS"
                    >

                    <p class="hiw-help">
                        The small badge displayed above the heading.
                    </p>

                </div>


                {{-- Heading --}}

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

                    <div>

                        <label class="hiw-label">
                            Heading — Main Text
                        </label>

                        <input
                            type="text"
                            name="content[heading][before]"
                            value="{{ old(
                                'content.heading.before',
                                data_get($content, 'heading.before')
                            ) }}"
                            class="hiw-input"
                            placeholder="From stock to insights,"
                        >

                        <p class="hiw-help">
                            Main portion of the section heading.
                        </p>

                    </div>


                    <div>

                        <label class="hiw-label">
                            Heading — Highlight
                        </label>

                        <div class="relative">

                            <input
                                type="text"
                                name="content[heading][highlight]"
                                value="{{ old(
                                    'content.heading.highlight',
                                    data_get($content, 'heading.highlight')
                                ) }}"
                                class="hiw-input hiw-highlight-input"
                                placeholder="without the busywork."
                            >

                            <span class="hiw-highlight-tag">
                                Highlight
                            </span>

                        </div>

                        <p class="hiw-help">
                            This text receives the primary blue styling.
                        </p>

                    </div>

                </div>


                {{-- Description --}}

                <div class="mt-6">

                    <label class="hiw-label">
                        Description
                    </label>

                    <textarea
                        name="content[description]"
                        class="hiw-input hiw-textarea"
                        placeholder="Import your inventory, track every movement..."
                    >{{ old(
                        'content.description',
                        data_get($content, 'description')
                    ) }}</textarea>

                    <p class="hiw-help">
                        Supporting text displayed underneath the heading.
                    </p>

                </div>


                {{-- Benefit Text --}}

                <div class="mt-6">

                    <label class="hiw-label">
                        Benefit Line
                    </label>

                    <div class="hiw-benefit-field">

                        <div class="hiw-benefit-check">

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
                                    d="M5 12l4 4L19 6"
                                />
                            </svg>

                        </div>

                        <input
                            type="text"
                            name="content[benefit_text]"
                            value="{{ old(
                                'content.benefit_text',
                                data_get($content, 'benefit_text')
                            ) }}"
                            class="hiw-input"
                            placeholder="Simple workflow. Powerful results."
                        >

                    </div>

                    <p class="hiw-help">
                        Short reassurance line displayed above the dashboard image.
                    </p>

                </div>

            </div>

        </div>


        {{-- =================================================
             02 — WORKFLOW STEPS
        ================================================== --}}

        <div class="hiw-card">

            <div class="hiw-card-header">

                <div class="hiw-section-number">
                    02
                </div>

                <div>

                    <h2 class="hiw-card-title">
                        Workflow Steps
                    </h2>

                    <p class="hiw-card-description">
                        Manage the four steps shown in the StockCore workflow.
                    </p>

                </div>

            </div>


            <div class="hiw-card-body">

                @php
                    $steps = data_get($content, 'steps', []);
                @endphp


                <div class="hiw-step-grid">

                    @foreach($steps as $index => $step)

                        <div class="hiw-step-card">

                            {{-- Step Header --}}

                            <div class="hiw-step-header">

                                <div class="hiw-step-number">
                                    {{ data_get(
                                        $step,
                                        'number',
                                        str_pad($index + 1, 2, '0', STR_PAD_LEFT)
                                    ) }}
                                </div>

                                <div>

                                    <p class="hiw-step-label">
                                        Workflow Step {{ $index + 1 }}
                                    </p>

                                    <p class="hiw-step-subtitle">
                                        Homepage process item
                                    </p>

                                </div>

                            </div>


                            <div class="hiw-step-body">

                                {{-- Number --}}

                                <div>

                                    <label class="hiw-mini-label">
                                        Step Number
                                    </label>

                                    <input
                                        type="text"
                                        name="content[steps][{{ $index }}][number]"
                                        value="{{ old(
                                            "content.steps.$index.number",
                                            data_get($step, 'number')
                                        ) }}"
                                        class="hiw-input"
                                        placeholder="01"
                                    >

                                </div>


                                {{-- Title --}}

                                <div>

                                    <label class="hiw-mini-label">
                                        Title
                                    </label>

                                    <input
                                        type="text"
                                        name="content[steps][{{ $index }}][title]"
                                        value="{{ old(
                                            "content.steps.$index.title",
                                            data_get($step, 'title')
                                        ) }}"
                                        class="hiw-input"
                                        placeholder="Import your stock"
                                    >

                                </div>


                                {{-- Description --}}

                                <div>

                                    <label class="hiw-mini-label">
                                        Description
                                    </label>

                                    <textarea
                                        name="content[steps][{{ $index }}][description]"
                                        class="hiw-input hiw-step-textarea"
                                        placeholder="Describe this workflow step..."
                                    >{{ old(
                                        "content.steps.$index.description",
                                        data_get($step, 'description')
                                    ) }}</textarea>

                                </div>


                                {{-- Icon --}}

                                <div>

                                    <label class="hiw-mini-label">
                                        Icon
                                    </label>

                                    <select
                                        name="content[steps][{{ $index }}][icon]"
                                        class="hiw-input hiw-select"
                                    >

                                        @php
                                            $currentIcon = old(
                                                "content.steps.$index.icon",
                                                data_get($step, 'icon')
                                            );
                                        @endphp

                                        <option
                                            value="upload"
                                            @selected($currentIcon === 'upload')
                                        >
                                            Upload / Import
                                        </option>

                                        <option
                                            value="chart"
                                            @selected($currentIcon === 'chart')
                                        >
                                            Real-Time Tracking
                                        </option>

                                        <option
                                            value="link"
                                            @selected($currentIcon === 'link')
                                        >
                                            Integration / Link
                                        </option>

                                        <option
                                            value="bars"
                                            @selected($currentIcon === 'bars')
                                        >
                                            Reports / Analytics
                                        </option>

                                    </select>

                                    <p class="hiw-help">
                                        Controls which predefined SVG icon appears beside this step.
                                    </p>

                                </div>


                                {{-- Icon Preview --}}

                                <div class="hiw-icon-preview">

                                    <div class="hiw-preview-icon">

                                        @if($currentIcon === 'upload')

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
                                                    d="M12 16V4m0 0L7 9m5-5 5 5"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M5 14v4a2 2 0 002 2h10a2 2 0 002-2v-4"
                                                />
                                            </svg>

                                        @elseif($currentIcon === 'chart')

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
                                                    d="M4 17l5-5 4 3 7-8"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    d="M17 7h3v3"
                                                />
                                            </svg>

                                        @elseif($currentIcon === 'link')

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
                                                    d="M10 13a5 5 0 007.07.07l2-2A5 5 0 0012 4l-1.15 1.15"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M14 11a5 5 0 00-7.07-.07l-2 2A5 5 0 007 20l1.15-1.15"
                                                />
                                            </svg>

                                        @else

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
                                                    d="M5 19V9m7 10V5m7 14v-7"
                                                />
                                            </svg>

                                        @endif

                                    </div>

                                    <div>

                                        <p class="text-xs font-semibold text-slate-700">
                                            Current Icon
                                        </p>

                                        <p class="mt-1 text-[11px] text-slate-400">
                                            {{ ucfirst($currentIcon) }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>


                @if(count($steps) === 0)

                    <div class="hiw-empty-state">

                        <p class="text-sm font-semibold text-slate-600">
                            No workflow steps configured
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Add the default workflow steps in home_sections.php.
                        </p>

                    </div>

                @endif

            </div>

        </div>


        {{-- =================================================
             03 — DASHBOARD PREVIEW
        ================================================== --}}

        <div class="hiw-card">

            <div class="hiw-card-header">

                <div class="hiw-section-number">
                    03
                </div>

                <div>

                    <h2 class="hiw-card-title">
                        Dashboard Preview
                    </h2>

                    <p class="hiw-card-description">
                        Configure the dashboard image displayed beneath
                        the section introduction.
                    </p>

                </div>

            </div>


            <div class="hiw-card-body">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    {{-- Image Preview --}}

                    <div>

                        <label class="hiw-label">
                            Current Preview
                        </label>

                        <div class="hiw-dashboard-preview">

                            @if(data_get($content, 'dashboard.image'))

                                <img
                                    src="{{ asset(
                                        data_get($content, 'dashboard.image')
                                    ) }}"
                                    alt="{{ data_get(
                                        $content,
                                        'dashboard.alt',
                                        'Dashboard preview'
                                    ) }}"
                                >

                            @else

                                <div class="hiw-dashboard-empty">

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

                                    <p class="mt-3">
                                        Dashboard image preview
                                    </p>

                                </div>

                            @endif

                        </div>

                    </div>


                    {{-- Media Settings --}}

                    <div class="space-y-5">

                        <div>

                            <label class="hiw-label">
                                Media Library
                            </label>

                            <div class="hiw-media-placeholder">

                                <div class="hiw-media-icon">

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
                                        Select Dashboard Image
                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">
                                        Media selection will be enabled later.
                                    </p>

                                </div>

                                <span class="hiw-coming-badge">
                                    Coming Soon
                                </span>

                            </div>

                        </div>


                        {{-- Current Image Path --}}

                        <div>

                            <label class="hiw-label">
                                Current Image Path
                            </label>

                            <input
                                type="text"
                                name="content[dashboard][image]"
                                value="{{ old(
                                    'content.dashboard.image',
                                    data_get($content, 'dashboard.image')
                                ) }}"
                                class="hiw-input"
                                placeholder="images/company_assets/stockcore_dashboard.webp"
                            >

                            <p class="hiw-help">
                                Existing image path used by the public homepage.
                            </p>

                        </div>


                        {{-- Alt Text --}}

                        <div>

                            <label class="hiw-label">
                                Alternative Text
                            </label>

                            <input
                                type="text"
                                name="content[dashboard][alt]"
                                value="{{ old(
                                    'content.dashboard.alt',
                                    data_get($content, 'dashboard.alt')
                                ) }}"
                                class="hiw-input"
                                placeholder="StockCore inventory management dashboard"
                            >

                        </div>


                        {{-- Media ID Placeholder --}}

                        <div>

                            <label class="hiw-label">
                                Media ID
                            </label>

                            <input
                                type="text"
                                disabled
                                class="hiw-input"
                                placeholder="Media ID will be connected later"
                            >

                        </div>


                        <div class="hiw-media-tip">

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
                                The dashboard image section is ready in the CMS,
                                but Media Library integration is intentionally
                                postponed. We will connect it later without
                                redesigning this page.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             04 — FINAL CALLOUT
        ================================================== --}}

        <div class="hiw-card">

            <div class="hiw-card-header">

                <div class="hiw-section-number">
                    04
                </div>

                <div>

                    <h2 class="hiw-card-title">
                        Final Callout
                    </h2>

                    <p class="hiw-card-description">
                        Edit the highlighted message displayed beneath
                        the workflow steps.
                    </p>

                </div>

            </div>


            <div class="hiw-card-body">

                <div class="hiw-callout-preview">

                    <div class="hiw-callout-preview-icon">

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
                                d="M12 3l2.2 5.8L20 11l-5.8 2.2L12 19l-2.2-5.8L4 11l5.8-2.2L12 3Z"
                            />
                        </svg>

                    </div>

                    <div>

                        <p class="text-sm font-bold text-slate-800">
                            {{ data_get(
                                $content,
                                'callout.title',
                                'Everything in one place'
                            ) }}
                        </p>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            {{ data_get(
                                $content,
                                'callout.description'
                            ) }}
                        </p>

                    </div>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

                    <div>

                        <label class="hiw-label">
                            Callout Title
                        </label>

                        <input
                            type="text"
                            name="content[callout][title]"
                            value="{{ old(
                                'content.callout.title',
                                data_get($content, 'callout.title')
                            ) }}"
                            class="hiw-input"
                            placeholder="Everything in one place"
                        >

                    </div>


                    <div>

                        <label class="hiw-label">
                            Callout Description
                        </label>

                        <textarea
                            name="content[callout][description]"
                            class="hiw-input hiw-callout-textarea"
                            placeholder="No more spreadsheets..."
                        >{{ old(
                            'content.callout.description',
                            data_get($content, 'callout.description')
                        ) }}</textarea>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             SAVE BAR
        ================================================== --}}

        <div class="hiw-save-bar">

            <div class="hidden sm:block">

                <p class="text-xs font-semibold text-slate-700">
                    How It Works configuration
                </p>

                <p class="mt-1 text-[11px] text-slate-400">
                    Save your changes to update this homepage section.
                </p>

            </div>


            <div class="flex items-center gap-3 ml-auto">

                <a
                    href="{{ route('admin.home') }}"
                    class="hiw-cancel-button"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="hiw-save-button"
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
   EDITOR
========================================================= */

.hiw-editor {
    max-width: 1180px;
    margin: 0 auto;
    padding: 8px 0 60px;
}


/* =========================================================
   HEADER
========================================================= */

.hiw-editor-header {
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

.hiw-header-glow {
    position: absolute;
    width: 320px;
    height: 320px;
    right: -120px;
    top: -160px;
    border-radius: 999px;
    background: rgba(59,130,246,.12);
    filter: blur(40px);
}

.hiw-page-icon {
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

.hiw-status-badge {
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

.hiw-status-badge::before {
    content: "";

    width: 6px;
    height: 6px;

    border-radius: 999px;

    background: #4ade80;

    box-shadow:
        0 0 8px rgba(74,222,128,.7);
}

.hiw-back-button {
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

.hiw-back-button:hover {
    color: white;
    background: rgba(255,255,255,.1);
    transform: translateY(-1px);
}


/* =========================================================
   ALERTS
========================================================= */

.hiw-alert {
    display: flex;
    align-items: flex-start;
    gap: 10px;

    margin-bottom: 22px;

    padding: 13px 15px;

    border-radius: 12px;

    font-size: 12px;
    line-height: 1.6;
}

.hiw-alert-success {
    color: #166534;
    border: 1px solid #bbf7d0;
    background: #f0fdf4;
}

.hiw-alert-error {
    color: #991b1b;
    border: 1px solid #fecaca;
    background: #fef2f2;
}

.hiw-alert-icon {
    width: 26px;
    height: 26px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 8px;

    background: rgba(255,255,255,.7);
}


/* =========================================================
   MAIN CARDS
========================================================= */

.hiw-card {
    overflow: hidden;

    margin-bottom: 24px;

    border: 1px solid #e5eaf1;

    border-radius: 20px;

    background: white;

    box-shadow:
        0 2px 4px rgba(15,23,42,.02),
        0 12px 30px rgba(15,23,42,.04);

    transition:
        box-shadow .2s ease,
        transform .2s ease;
}

.hiw-card:hover {
    box-shadow:
        0 3px 7px rgba(15,23,42,.03),
        0 18px 38px rgba(15,23,42,.06);
}

.hiw-card-header {
    display: flex;
    align-items: flex-start;
    gap: 15px;

    padding: 22px 24px;

    border-bottom: 1px solid #eef2f7;

    background:
        linear-gradient(to right, #fff, #fbfdff);
}

.hiw-section-number {
    width: 40px;
    height: 40px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 11px;

    color: #2563eb;

    background: #eff6ff;

    border: 1px solid #dbeafe;

    font-size: 11px;
    font-weight: 800;

    letter-spacing: .04em;
}

.hiw-card-title {
    color: #0f172a;

    font-size: 16px;
    font-weight: 700;
}

.hiw-card-description {
    margin-top: 3px;

    color: #64748b;

    font-size: 12px;
    line-height: 1.6;
}

.hiw-card-body {
    padding: 26px 24px;
}


/* =========================================================
   INPUTS
========================================================= */

.hiw-label {
    display: block;

    margin-bottom: 8px;

    color: #334155;

    font-size: 12px;
    font-weight: 700;
}

.hiw-mini-label {
    display: block;

    margin-bottom: 7px;

    color: #64748b;

    font-size: 10px;
    font-weight: 700;

    text-transform: uppercase;
    letter-spacing: .05em;
}

.hiw-help {
    margin-top: 7px;

    color: #94a3b8;

    font-size: 11px;
    line-height: 1.5;
}

.hiw-input {
    width: 100%;
    min-height: 44px;

    padding: 10px 13px;

    outline: none;

    border: 1px solid #dbe2ea;
    border-radius: 10px;

    color: #0f172a;

    background: white;

    font-size: 13px;

    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        background .2s ease;
}

.hiw-input:hover {
    border-color: #cbd5e1;
}

.hiw-input:focus {
    border-color: #60a5fa;

    box-shadow:
        0 0 0 4px rgba(59,130,246,.09);
}

.hiw-input::placeholder {
    color: #b0bac7;
}

.hiw-textarea {
    resize: vertical;
    min-height: 110px;
    line-height: 1.6;
}

.hiw-step-textarea {
    resize: vertical;
    min-height: 105px;
    line-height: 1.6;
}

.hiw-callout-textarea {
    resize: vertical;
    min-height: 90px;
    line-height: 1.6;
}

.hiw-highlight-input {
    padding-right: 86px;
    border-color: #bfdbfe;
    background: #f8fbff;
}

.hiw-highlight-tag {
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

.hiw-select {
    appearance: auto;
}


/* =========================================================
   BENEFIT FIELD
========================================================= */

.hiw-benefit-field {
    display: flex;
    align-items: center;
    gap: 10px;
}

.hiw-benefit-check {
    width: 42px;
    height: 42px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 999px;

    color: #2563eb;

    border: 2px solid #3b82f6;

    background: #eff6ff;
}


/* =========================================================
   WORKFLOW STEPS
========================================================= */

.hiw-step-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 18px;
}

.hiw-step-card {
    overflow: hidden;

    border: 1px solid #e5eaf1;

    border-radius: 16px;

    background: white;

    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        transform .2s ease;
}

.hiw-step-card:hover {
    border-color: #dbeafe;

    box-shadow:
        0 12px 30px rgba(15,23,42,.05);

    transform: translateY(-2px);
}

.hiw-step-header {
    display: flex;
    align-items: center;
    gap: 12px;

    padding: 15px 17px;

    border-bottom: 1px solid #eef2f7;

    background:
        linear-gradient(to right, #fbfdff, #fff);
}

.hiw-step-number {
    width: 38px;
    height: 38px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    color: #2563eb;

    background: #eff6ff;

    border: 1px solid #dbeafe;

    font-size: 11px;
    font-weight: 800;
}

.hiw-step-label {
    color: #334155;

    font-size: 12px;
    font-weight: 700;
}

.hiw-step-subtitle {
    margin-top: 2px;

    color: #94a3b8;

    font-size: 10px;
}

.hiw-step-body {
    display: flex;
    flex-direction: column;
    gap: 18px;

    padding: 19px 17px;
}

.hiw-icon-preview {
    display: flex;
    align-items: center;
    gap: 12px;

    padding: 12px;

    border-radius: 11px;

    border: 1px solid #eef2f7;

    background: #f8fafc;
}

.hiw-preview-icon {
    width: 44px;
    height: 44px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 999px;

    color: #2563eb;

    background: #eff6ff;

    border: 1px solid #dbeafe;
}


/* =========================================================
   DASHBOARD MEDIA
========================================================= */

.hiw-dashboard-preview {
    min-height: 300px;

    overflow: hidden;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 14px;

    border: 1px solid #dbe2ea;

    border-radius: 16px;

    background:
        linear-gradient(
            135deg,
            #f8fafc,
            #eef4ff
        );
}

.hiw-dashboard-preview img {
    display: block;

    width: 100%;
    max-height: 350px;

    object-fit: contain;

    border-radius: 12px;

    box-shadow:
        0 15px 35px rgba(15,23,42,.09);
}

.hiw-dashboard-empty {
    color: #94a3b8;

    text-align: center;

    font-size: 12px;
}

.hiw-media-placeholder {
    display: flex;
    align-items: center;
    gap: 12px;

    padding: 13px;

    border: 1px dashed #cbd5e1;

    border-radius: 12px;

    background: #f8fafc;
}

.hiw-media-icon {
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

.hiw-coming-badge {
    flex-shrink: 0;

    padding: 6px 9px;

    border-radius: 7px;

    color: #94a3b8;

    background: #f1f5f9;

    border: 1px solid #e2e8f0;

    font-size: 9px;
    font-weight: 800;

    text-transform: uppercase;
    letter-spacing: .04em;
}

.hiw-media-tip {
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
   CALLOUT
========================================================= */

.hiw-callout-preview {
    display: flex;
    align-items: flex-start;
    gap: 14px;

    padding: 18px;

    border-radius: 14px;

    border: 1px solid #dbeafe;

    background:
        linear-gradient(
            135deg,
            #eff6ff,
            #ffffff
        );
}

.hiw-callout-preview-icon {
    width: 46px;
    height: 46px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    color: white;

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8
        );

    box-shadow:
        0 8px 20px rgba(37,99,235,.2);
}


/* =========================================================
   EMPTY
========================================================= */

.hiw-empty-state {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    min-height: 200px;

    text-align: center;

    border: 1px dashed #dbe2ea;
    border-radius: 14px;

    background: #fafcff;
}


/* =========================================================
   SAVE BAR
========================================================= */

.hiw-save-bar {
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

.hiw-cancel-button {
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

.hiw-cancel-button:hover {
    color: #334155;
    background: #f1f5f9;
    border-color: #cbd5e1;
}

.hiw-save-button {
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

.hiw-save-button:hover {
    transform: translateY(-1px);

    box-shadow:
        0 10px 24px rgba(37,99,235,.28);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (min-width: 768px) {

    .hiw-step-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}

@media (max-width: 767px) {

    .hiw-editor-header {
        padding: 24px;
    }

    .hiw-editor-header > div > div {
        flex-direction: column;
    }

    .hiw-back-button {
        display: none;
    }

    .hiw-card-header {
        padding: 18px;
    }

    .hiw-card-body {
        padding: 20px 18px;
    }

    .hiw-save-bar {
        bottom: 10px;

        padding: 12px;

        border-radius: 14px;
    }

    .hiw-save-bar > div:first-child {
        display: none;
    }

    .hiw-save-bar > div:last-child {
        width: 100%;
    }

    .hiw-cancel-button,
    .hiw-save-button {
        flex: 1;
    }

    .hiw-dashboard-preview {
        min-height: 220px;
    }

    .hiw-coming-badge {
        display: none;
    }

}

</style>

@endsection