@extends('layouts.admin')

@section('title', 'Edit Trust & Integrations')

@section('page-heading', 'Edit Trust & Integrations')

@section(
    'page-description',
    'Manage the trust statement and integration logos displayed on your homepage'
)

@section('admin-content')

<div class="trust-editor">

    {{-- =====================================================
         HEADER
    ====================================================== --}}

    <div class="trust-editor-header">

        <div class="trust-header-glow"></div>

        <div class="relative z-10">

            <div class="flex items-start justify-between gap-6">

                <div class="flex items-start gap-4">

                    <div class="trust-page-icon">

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
                                d="M12 3l7 4v5c0 4.5-3 7.7-7 9-4-1.3-7-4.5-7-9V7l7-4z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12l2 2 4-4"
                            />
                        </svg>

                    </div>

                    <div>

                        <div class="flex items-center gap-2 mb-2">

                            <span class="trust-status-badge">
                                Active
                            </span>

                            <span class="text-xs font-medium text-slate-400">
                                Homepage
                            </span>

                        </div>

                        <h1 class="text-2xl md:text-3xl font-bold text-white tracking-tight">
                            Trust & Integrations
                        </h1>

                        <p class="mt-2 max-w-xl text-sm leading-6 text-slate-300">
                            Manage the trust message and integration partners
                            displayed between your homepage sections.
                        </p>

                    </div>

                </div>


                <a
                    href="{{ route('admin.home') }}"
                    class="trust-back-button"
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

        <div class="trust-alert trust-alert-success">

            <div class="trust-alert-icon">

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

        <div class="trust-alert trust-alert-error">

            <div class="trust-alert-icon">

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
        action="{{ route('admin.home.section.update', 'trust') }}"
    >

        @csrf
        @method('PUT')


        {{-- =================================================
             01 — TRUST CONTENT
        ================================================== --}}

        <div class="trust-card">

            <div class="trust-card-header">

                <div class="trust-section-number">
                    01
                </div>

                <div>

                    <h2 class="trust-card-title">
                        Trust Content
                    </h2>

                    <p class="trust-card-description">
                        Configure the trust statement displayed above
                        the integration logos.
                    </p>

                </div>

            </div>


            <div class="trust-card-body">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Main Text --}}

                    <div>

                        <label class="trust-label">
                            Main Text
                        </label>

                        <input
                            type="text"
                            name="content[heading][before]"
                            value="{{ old(
                                'content.heading.before',
                                data_get($content, 'heading.before')
                            ) }}"
                            class="trust-input"
                            placeholder="Trusted by modern Australian Businesses."
                        >

                        <p class="trust-help">
                            The main trust statement shown before the highlighted text.
                        </p>

                    </div>


                    {{-- Highlight --}}

                    <div>

                        <label class="trust-label">
                            Highlight Text
                        </label>

                        <div class="relative">

                            <input
                                type="text"
                                name="content[heading][highlight]"
                                value="{{ old(
                                    'content.heading.highlight',
                                    data_get($content, 'heading.highlight')
                                ) }}"
                                class="trust-input trust-highlight-input"
                                placeholder="Seamlessly Integrated"
                            >

                            <span class="trust-highlight-tag">
                                Highlight
                            </span>

                        </div>

                        <p class="trust-help">
                            This text receives the primary blue styling.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             02 — INTEGRATION LOGOS
        ================================================== --}}

        <div class="trust-card">

            <div class="trust-card-header">

                <div class="trust-section-number">
                    02
                </div>

                <div>

                    <h2 class="trust-card-title">
                        Integration Logos
                    </h2>

                    <p class="trust-card-description">
                        Manage the companies and integrations displayed
                        in the trust section.
                    </p>

                </div>

            </div>


            <div class="trust-card-body">

                @php
                    $items = data_get($content, 'items', []);
                @endphp


                <div class="integration-admin-grid">

                    @foreach($items as $index => $item)

                        <div class="integration-admin-card">

                            {{-- Card Header --}}

                            <div class="integration-admin-header">

                                <div class="integration-admin-number">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </div>

                                <div class="min-w-0">

                                    <p class="integration-admin-label">
                                        Integration {{ $index + 1 }}
                                    </p>

                                    <p class="integration-admin-subtitle">
                                        Partner logo
                                    </p>

                                </div>

                                <div class="ml-auto">

                                    <label class="relative inline-flex items-center cursor-pointer">

                                        <input
                                            type="hidden"
                                            name="content[items][{{ $index }}][is_active]"
                                            value="0"
                                        >

                                        <input
                                            type="checkbox"
                                            name="content[items][{{ $index }}][is_active]"
                                            value="1"
                                            class="sr-only peer"
                                            @checked(
                                                old(
                                                    "content.items.$index.is_active",
                                                    data_get($item, 'is_active')
                                                )
                                            )
                                        >

                                        <div class="integration-toggle"></div>

                                    </label>

                                </div>

                            </div>


                            {{-- Card Body --}}

                            <div class="integration-admin-body">

                                {{-- Logo Preview --}}

                                <div class="integration-logo-preview">

                                    @if(data_get($item, 'logo'))

                                        <img
                                            src="{{ asset(data_get($item, 'logo')) }}"
                                            alt="{{ data_get($item, 'alt') }}"
                                            class="max-w-full max-h-full object-contain"
                                        >

                                    @else

                                        <div class="integration-preview-placeholder">

                                            <svg
                                                class="w-6 h-6"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="1.6"
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
                                                    d="M8 14l2.5-3 2 2.5L15 10l3 4"
                                                />

                                            </svg>

                                        </div>

                                    @endif

                                </div>


                                {{-- Name --}}

                                <div>

                                    <label class="trust-mini-label">
                                        Integration Name
                                    </label>

                                    <input
                                        type="text"
                                        name="content[items][{{ $index }}][name]"
                                        value="{{ old(
                                            "content.items.$index.name",
                                            data_get($item, 'name')
                                        ) }}"
                                        class="trust-input"
                                        placeholder="Integration name"
                                    >

                                </div>


                                {{-- Logo Path --}}

                                <div>

                                    <label class="trust-mini-label">
                                        Current Logo
                                    </label>

                                    <input
                                        type="text"
                                        name="content[items][{{ $index }}][logo]"
                                        value="{{ old(
                                            "content.items.$index.logo",
                                            data_get($item, 'logo')
                                        ) }}"
                                        class="trust-input"
                                        placeholder="images/integrations/logo.svg"
                                    >

                                    <p class="trust-help">
                                        Current logo path. Media Library selection will be connected later.
                                    </p>

                                </div>


                                {{-- Alt Text --}}

                                <div>

                                    <label class="trust-mini-label">
                                        Alternative Text
                                    </label>

                                    <input
                                        type="text"
                                        name="content[items][{{ $index }}][alt]"
                                        value="{{ old(
                                            "content.items.$index.alt",
                                            data_get($item, 'alt')
                                        ) }}"
                                        class="trust-input"
                                        placeholder="Integration logo"
                                    >

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>


        {{-- =================================================
             03 — LOGO MEDIA
        ================================================== --}}

        <div class="trust-card">

            <div class="trust-card-header">

                <div class="trust-section-number">
                    03
                </div>

                <div>

                    <h2 class="trust-card-title">
                        Logo Media
                    </h2>

                    <p class="trust-card-description">
                        Media Library integration for company logos.
                    </p>

                </div>

            </div>


            <div class="trust-card-body">

                <div class="media-coming-section">

                    <div class="media-coming-icon">

                        <svg
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.7"
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

                    <div class="flex-1">

                        <p class="text-sm font-semibold text-slate-700">
                            Media Library Integration
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Logo selection will eventually be handled through
                            the Media Library instead of manually entering file paths.
                        </p>

                    </div>

                    <span class="media-coming-badge">
                        Coming Soon
                    </span>

                </div>


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
                            d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000-18z"
                        />
                    </svg>

                    <p>
                        The existing logo paths continue to work for now.
                        Later, this section can be connected to the Media Library
                        so logos can be replaced from the dashboard.
                    </p>

                </div>

            </div>

        </div>


        {{-- =================================================
             04 — ANIMATION
        ================================================== --}}

        <div class="trust-card">

            <div class="trust-card-header">

                <div class="trust-section-number">
                    04
                </div>

                <div>

                    <h2 class="trust-card-title">
                        Logo Animation
                    </h2>

                    <p class="trust-card-description">
                        Configure the staggered reveal animation used when
                        the integration logos enter the viewport.
                    </p>

                </div>

            </div>


            <div class="trust-card-body">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                    {{-- Enabled --}}

                    <div class="animation-setting">

                        <div>

                            <p class="text-xs font-semibold text-slate-700">
                                Enable Animation
                            </p>

                            <p class="mt-1 text-[11px] text-slate-400">
                                Reveal logos when visible.
                            </p>

                        </div>

                        <label class="relative inline-flex items-center cursor-pointer">

                            <input
                                type="hidden"
                                name="content[animation][enabled]"
                                value="0"
                            >

                            <input
                                type="checkbox"
                                name="content[animation][enabled]"
                                value="1"
                                class="sr-only peer"
                                @checked(
                                    old(
                                        'content.animation.enabled',
                                        data_get($content, 'animation.enabled', true)
                                    )
                                )
                            >

                            <div class="integration-toggle"></div>

                        </label>

                    </div>


                    {{-- Delay --}}

                    <div>

                        <label class="trust-label">
                            Logo Delay
                        </label>

                        <div class="relative">

                            <input
                                type="number"
                                name="content[animation][delay]"
                                value="{{ old(
                                    'content.animation.delay',
                                    data_get($content, 'animation.delay', 150)
                                ) }}"
                                min="0"
                                step="50"
                                class="trust-input trust-number-input"
                            >

                            <span class="trust-input-unit">
                                ms
                            </span>

                        </div>

                        <p class="trust-help">
                            Delay between each logo.
                        </p>

                    </div>


                    {{-- Duration --}}

                    <div>

                        <label class="trust-label">
                            Animation Duration
                        </label>

                        <div class="relative">

                            <input
                                type="number"
                                name="content[animation][duration]"
                                value="{{ old(
                                    'content.animation.duration',
                                    data_get($content, 'animation.duration', 700)
                                ) }}"
                                min="0"
                                step="50"
                                class="trust-input trust-number-input"
                            >

                            <span class="trust-input-unit">
                                ms
                            </span>

                        </div>

                        <p class="trust-help">
                            Duration of each logo animation.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             SAVE BAR
        ================================================== --}}

        <div class="trust-save-bar">

            <div class="hidden sm:block">

                <p class="text-xs font-semibold text-slate-700">
                    Trust & integrations configuration
                </p>

                <p class="mt-1 text-[11px] text-slate-400">
                    Save your changes to update this homepage section.
                </p>

            </div>


            <div class="flex items-center gap-3 ml-auto">

                <a
                    href="{{ route('admin.home') }}"
                    class="trust-cancel-button"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="trust-save-button"
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
   TRUST EDITOR
========================================================= */

.trust-editor {
    max-width: 1180px;
    margin: 0 auto;
    padding: 8px 0 60px;
}


/* =========================================================
   HEADER
========================================================= */

.trust-editor-header {
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

.trust-header-glow {
    position: absolute;

    width: 320px;
    height: 320px;

    right: -120px;
    top: -160px;

    border-radius: 999px;

    background: rgba(59,130,246,.12);

    filter: blur(40px);
}

.trust-page-icon {
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

.trust-status-badge {
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

.trust-status-badge::before {
    content: "";

    width: 6px;
    height: 6px;

    border-radius: 999px;

    background: #4ade80;

    box-shadow:
        0 0 8px rgba(74,222,128,.7);
}

.trust-back-button {
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

.trust-back-button:hover {
    color: white;

    background: rgba(255,255,255,.1);

    border-color: rgba(255,255,255,.18);

    transform: translateY(-1px);
}


/* =========================================================
   ALERTS
========================================================= */

.trust-alert {
    display: flex;
    align-items: flex-start;
    gap: 10px;

    margin-bottom: 22px;

    padding: 13px 15px;

    border-radius: 12px;

    font-size: 12px;

    line-height: 1.6;
}

.trust-alert-success {
    color: #166534;

    border: 1px solid #bbf7d0;

    background: #f0fdf4;
}

.trust-alert-error {
    color: #991b1b;

    border: 1px solid #fecaca;

    background: #fef2f2;
}

.trust-alert-icon {
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

.trust-card {
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

.trust-card:hover {
    box-shadow:
        0 3px 7px rgba(15,23,42,.03),
        0 18px 38px rgba(15,23,42,.06);
}

.trust-card-header {
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

.trust-section-number {
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

.trust-card-title {
    color: #0f172a;

    font-size: 16px;
    font-weight: 700;
}

.trust-card-description {
    margin-top: 3px;

    color: #64748b;

    font-size: 12px;

    line-height: 1.6;
}

.trust-card-body {
    padding: 26px 24px;
}


/* =========================================================
   FORM
========================================================= */

.trust-label {
    display: block;

    margin-bottom: 8px;

    color: #334155;

    font-size: 12px;
    font-weight: 700;
}

.trust-mini-label {
    display: block;

    margin-bottom: 7px;

    color: #64748b;

    font-size: 10px;
    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .05em;
}

.trust-help {
    margin-top: 7px;

    color: #94a3b8;

    font-size: 11px;

    line-height: 1.5;
}

.trust-input {
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

.trust-input:hover {
    border-color: #cbd5e1;
}

.trust-input:focus {
    border-color: #60a5fa;

    background: #fff;

    box-shadow:
        0 0 0 4px rgba(59,130,246,.09);
}

.trust-input::placeholder {
    color: #b0bac7;
}

.trust-highlight-input {
    padding-right: 86px;

    border-color: #bfdbfe;

    background: #f8fbff;
}

.trust-highlight-tag {
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

.trust-number-input {
    padding-right: 45px;
}

.trust-input-unit {
    position: absolute;

    right: 13px;
    top: 50%;

    transform: translateY(-50%);

    color: #94a3b8;

    font-size: 11px;
    font-weight: 700;
}


/* =========================================================
   INTEGRATION GRID
========================================================= */

.integration-admin-grid {
    display: grid;

    grid-template-columns: 1fr;

    gap: 18px;
}

.integration-admin-card {
    overflow: hidden;

    border: 1px solid #e5eaf1;

    border-radius: 16px;

    background: #fff;

    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        transform .2s ease;
}

.integration-admin-card:hover {
    border-color: #dbeafe;

    box-shadow:
        0 12px 30px rgba(15,23,42,.05);

    transform: translateY(-2px);
}

.integration-admin-header {
    display: flex;
    align-items: center;

    gap: 12px;

    padding: 14px 16px;

    border-bottom: 1px solid #eef2f7;

    background:
        linear-gradient(
            to right,
            #fbfdff,
            #fff
        );
}

.integration-admin-number {
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

.integration-admin-label {
    color: #334155;

    font-size: 12px;
    font-weight: 700;
}

.integration-admin-subtitle {
    margin-top: 2px;

    color: #94a3b8;

    font-size: 10px;
}

.integration-admin-body {
    display: flex;

    flex-direction: column;

    gap: 17px;

    padding: 17px;
}

.integration-logo-preview {
    width: 100%;
    height: 90px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 15px;

    border: 1px solid #eef2f7;

    border-radius: 12px;

    background:
        linear-gradient(
            135deg,
            #fafcff,
            #f8fafc
        );
}

.integration-logo-preview img {
    max-width: 150px;
    max-height: 58px;
}

.integration-preview-placeholder {
    width: 45px;
    height: 45px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 11px;

    color: #94a3b8;

    background: #f1f5f9;
}


/* =========================================================
   TOGGLE
========================================================= */

.integration-toggle {
    position: relative;

    width: 40px;
    height: 22px;

    border-radius: 999px;

    background: #cbd5e1;

    transition: background .2s ease;
}

.integration-toggle::after {
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

.peer:checked + .integration-toggle {
    background: #2563eb;
}

.peer:checked + .integration-toggle::after {
    transform: translateX(18px);
}


/* =========================================================
   MEDIA
========================================================= */

.media-coming-section {
    display: flex;

    align-items: center;

    gap: 14px;

    padding: 17px;

    border: 1px dashed #cbd5e1;

    border-radius: 13px;

    background: #f8fafc;
}

.media-coming-icon {
    width: 44px;
    height: 44px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    border-radius: 11px;

    color: #64748b;

    background: #e2e8f0;
}

.media-coming-badge {
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

.media-tip {
    display: flex;

    align-items: flex-start;

    gap: 10px;

    margin-top: 15px;

    padding: 12px 14px;

    border-radius: 11px;

    border: 1px solid #dbeafe;

    background: #eff6ff;

    color: #475569;

    font-size: 11px;

    line-height: 1.6;
}


/* =========================================================
   ANIMATION SETTINGS
========================================================= */

.animation-setting {
    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 16px;

    min-height: 44px;

    padding: 12px 13px;

    border: 1px solid #eef2f7;

    border-radius: 10px;

    background: #f8fafc;
}


/* =========================================================
   SAVE BAR
========================================================= */

.trust-save-bar {
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

.trust-cancel-button {
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

.trust-cancel-button:hover {
    color: #334155;

    background: #f1f5f9;

    border-color: #cbd5e1;
}

.trust-save-button {
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

.trust-save-button:hover {
    transform: translateY(-1px);

    box-shadow:
        0 10px 24px rgba(37,99,235,.28);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (min-width: 768px) {

    .integration-admin-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}

@media (max-width: 767px) {

    .trust-editor-header {
        padding: 24px;
    }

    .trust-editor-header > div > div {
        flex-direction: column;
    }

    .trust-back-button {
        display: none;
    }

    .trust-card-header {
        padding: 18px;
    }

    .trust-card-body {
        padding: 20px 18px;
    }

    .trust-save-bar {
        bottom: 10px;

        padding: 12px;

        border-radius: 14px;
    }

    .trust-save-bar > div:first-child {
        display: none;
    }

    .trust-save-bar > div:last-child {
        width: 100%;
    }

    .trust-cancel-button,
    .trust-save-button {
        flex: 1;
    }

    .media-coming-section {
        align-items: flex-start;
    }

    .media-coming-badge {
        display: none;
    }

}

</style>

@endsection