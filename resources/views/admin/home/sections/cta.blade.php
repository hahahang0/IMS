@extends('layouts.admin')

@section('title', 'Final CTA CMS')

@section('page-heading', 'Final CTA')

@section('page-description', 'Manage the final call-to-action section displayed on your homepage')

@section('admin-content')

@php
    $heading = $content['heading'] ?? [];
    $buttons = $content['buttons'] ?? [];
    $image = $content['image'] ?? [];
@endphp

@endphp

<div class="cta-editor">

{{-- ================================================================
    HEADER
================================================================= --}}

<div class="cta-editor-header">

    <div class="cta-header-glow"></div>

    <div class="relative z-10 flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">

        <div class="flex items-start gap-4">

            <div class="cta-page-icon">

                <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24"
                >
                    <path
                        d="M13 2 3 14h7l-1 8 10-12h-7l1-8Z"
                    />
                </svg>

            </div>

            <div>

                <div class="mb-2 flex flex-wrap items-center gap-2">

                    <h1 class="text-xl font-bold tracking-tight text-white">
                        Final CTA CMS
                    </h1>

                    <span class="cta-status-badge">
                        Active
                    </span>

                </div>

                <p class="max-w-2xl text-sm leading-6 text-slate-300">
                    Manage the final call-to-action content, buttons,
                    and dashboard image displayed at the bottom of
                    the homepage.
                </p>

            </div>

        </div>


        <a
            href="{{ url('/') }}"
            target="_blank"
            class="cta-back-button"
        >

            <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
            >
                <path d="M14 5h5v5"/>
                <path d="M19 5 10 14"/>
                <path d="M18 13v5a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h5"/>
            </svg>

            Preview Homepage

        </a>

    </div>

</div>


{{-- ================================================================
    SUCCESS MESSAGE
================================================================= --}}

@if(session('success'))

    <div class="cta-alert cta-alert-success">

        <div class="cta-alert-icon">

            <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                stroke-width="2.5"
                viewBox="0 0 24 24"
            >
                <path d="m5 12 4 4L19 6"/>
            </svg>

        </div>

        <div>

            <p class="font-semibold">
                Changes saved
            </p>

            <p class="mt-0.5 text-xs">
                {{ session('success') }}
            </p>

        </div>

    </div>

@endif


{{-- ================================================================
    VALIDATION ERRORS
================================================================= --}}

@if($errors->any())

    <div class="cta-alert cta-alert-error">

        <div class="cta-alert-icon">

            <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
            >
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

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    </div>

@endif


{{-- ================================================================
    FORM
================================================================= --}}

<form
    method="POST"
    action="{{ route('admin.home.section.update', 'cta') }}"
>

    @csrf

    @method('PUT')


    {{-- ============================================================
        SECTION CONTENT
    ============================================================= --}}

    <div class="cta-card">

        <div class="cta-card-header">

            <div class="cta-section-number">
                01
            </div>

            <div>

                <h2 class="cta-card-title">
                    Section Content
                </h2>

                <p class="cta-card-description">
                    Manage the label, heading, and introductory
                    text displayed inside the final CTA.
                </p>

            </div>

        </div>


        <div class="cta-card-body">


            {{-- EYEBROW --}}

            <div>

                <label class="cta-label">
                    Eyebrow / Label
                </label>

                <input
                    type="text"
                    name="content[eyebrow]"
                    value="{{ old('content.eyebrow', $content['eyebrow'] ?? '') }}"
                    class="cta-input"
                    placeholder="READY TO GET STARTED?"
                >

            </div>


            {{-- HEADING --}}

            <div class="mt-6 grid gap-5 lg:grid-cols-2">

                <div>

                    <label class="cta-label">
                        Heading — Before Highlight
                    </label>

                    <input
                        type="text"
                        name="content[heading][before]"
                        value="{{ old('content.heading.before', $heading['before'] ?? '') }}"
                        class="cta-input"
                        placeholder="Take control of your inventory operations"
                    >

                </div>


                <div>

                    <label class="cta-label">
                        Heading — Highlight
                    </label>

                    <input
                        type="text"
                        name="content[heading][highlight]"
                        value="{{ old('content.heading.highlight', $heading['highlight'] ?? '') }}"
                        class="cta-input cta-highlight-input"
                        placeholder="today."
                    >

                </div>

            </div>


            {{-- DESCRIPTION --}}

            <div class="mt-6">

                <label class="cta-label">
                    Section Description
                </label>

                <textarea
                    name="content[description]"
                    class="cta-input cta-textarea"
                    placeholder="Enter the CTA description..."
                >{{ old('content.description', $content['description'] ?? '') }}</textarea>

            </div>

        </div>

    </div>


    {{-- ============================================================
        BUTTONS
    ============================================================= --}}

    <div class="cta-card">

        <div class="cta-card-header">

            <div class="cta-section-number">
                02
            </div>

            <div>

                <h2 class="cta-card-title">
                    CTA Buttons
                </h2>

                <p class="cta-card-description">
                    Manage the text and destination URL for
                    both CTA buttons.
                </p>

            </div>

        </div>


        <div class="cta-card-body">

            <div class="grid gap-6 lg:grid-cols-2">


                {{-- PRIMARY BUTTON --}}

                <div class="cta-button-editor">

                    <div class="cta-subheading">

                        <span></span>

                        Primary Button

                    </div>


                    <div class="mt-5">

                        <label class="cta-mini-label">
                            Button Text
                        </label>

                        <input
                            type="text"
                            name="content[buttons][primary][text]"
                            value="{{ old('content.buttons.primary.text', $buttons['primary']['text'] ?? '') }}"
                            class="cta-input"
                            placeholder="Start your free trial"
                        >

                    </div>


                    <div class="mt-5">

                        <label class="cta-mini-label">
                            Button URL
                        </label>

                        <input
                            type="text"
                            name="content[buttons][primary][url]"
                            value="{{ old('content.buttons.primary.url', $buttons['primary']['url'] ?? '') }}"
                            class="cta-input"
                            placeholder="#"
                        >

                    </div>

                </div>


                {{-- SECONDARY BUTTON --}}

                <div class="cta-button-editor">

                    <div class="cta-subheading">

                        <span></span>

                        Secondary Button

                    </div>


                    <div class="mt-5">

                        <label class="cta-mini-label">
                            Button Text
                        </label>

                        <input
                            type="text"
                            name="content[buttons][secondary][text]"
                            value="{{ old('content.buttons.secondary.text', $buttons['secondary']['text'] ?? '') }}"
                            class="cta-input"
                            placeholder="Watch demo"
                        >

                    </div>


                    <div class="mt-5">

                        <label class="cta-mini-label">
                            Button URL
                        </label>

                        <input
                            type="text"
                            name="content[buttons][secondary][url]"
                            value="{{ old('content.buttons.secondary.url', $buttons['secondary']['url'] ?? '') }}"
                            class="cta-input"
                            placeholder="#"
                        >

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ============================================================
        CTA IMAGE
    ============================================================= --}}

    <div class="cta-card">

        <div class="cta-card-header">

            <div class="cta-section-number">
                03
            </div>

            <div>

                <h2 class="cta-card-title">
                    CTA Visual
                </h2>

                <p class="cta-card-description">
                    Manage the laptop/dashboard image displayed
                    on the right side of the CTA.
                </p>

            </div>

        </div>


        <div class="cta-card-body">


            <div class="cta-media-placeholder">

                <div class="cta-media-icon">

                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        viewBox="0 0 24 24"
                    >
                        <rect
                            x="3"
                            y="3"
                            width="18"
                            height="18"
                            rx="2"
                        />

                        <circle
                            cx="8.5"
                            cy="8.5"
                            r="1.5"
                        />

                        <path d="m21 15-5-5L5 21"/>

                    </svg>

                </div>


                <div class="flex-1">

                    <div class="flex flex-wrap items-center gap-2">

                        <p class="text-sm font-semibold text-slate-800">
                            Image / Media Library
                        </p>

                        <span class="cta-coming-soon">
                            Coming Soon
                        </span>

                    </div>

                    <p class="mt-1 text-xs leading-5 text-slate-500">
                        Image selection from the Media Library
                        will be connected later.
                    </p>

                </div>

            </div>


            {{-- CURRENT IMAGE PATH --}}

            <div class="mt-5">

                <label class="cta-mini-label">
                    Current Image Path
                </label>

                <input
                    type="text"
                    name="content[image][path]"
                    value="{{ old('content.image.path', $image['path'] ?? '') }}"
                    class="cta-input"
                    placeholder="images/company_assets/laptop.png"
                >

                <p class="cta-help">
                    For now, enter the existing image path manually.
                    Media Library integration will be added later.
                </p>

            </div>


            {{-- ALT TEXT --}}

            <div class="mt-5">

                <label class="cta-mini-label">
                    Image Alt Text
                </label>

                <input
                    type="text"
                    name="content[image][alt]"
                    value="{{ old('content.image.alt', $image['alt'] ?? '') }}"
                    class="cta-input"
                    placeholder="StockCore inventory dashboard"
                >

                <p class="cta-help">
                    Descriptive text used for accessibility and SEO.
                </p>

            </div>


            {{-- MEDIA ID --}}

            <div class="mt-5">

                <label class="cta-mini-label">
                    Media ID
                </label>

                <input
                    type="text"
                    value="{{ old('content.image.media_id', $image['media_id'] ?? '') }}"
                    class="cta-input cta-disabled-input"
                    placeholder="Connected later"
                    disabled
                >

                <p class="cta-help">
                    Media selection will be connected to the
                    Media Library later.
                </p>

            </div>


            <div class="cta-info-tip">

                <svg
                    class="h-4 w-4 shrink-0"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24"
                >
                    <circle
                        cx="12"
                        cy="12"
                        r="9"
                    />

                    <path d="M12 11v5"/>

                    <path d="M12 8h.01"/>

                </svg>

                <span>
                    Image management is currently kept separate
                    from the CMS. We will connect this field to
                    the Media Library later.
                </span>

            </div>

        </div>

    </div>


    {{-- ============================================================
        SAVE BAR
    ============================================================= --}}

    <div class="cta-save-bar">

        <div>

            <p class="text-sm font-semibold text-slate-800">
                CTA changes
            </p>

            <p class="mt-0.5 text-xs text-slate-500">
                Save your changes when you are finished editing.
            </p>

        </div>


        <div class="flex items-center gap-3">

            <a
                href="{{ route('admin.home') }}"
                class="cta-cancel-button"
            >
                Cancel
            </a>


            <button
                type="submit"
                class="cta-save-button"
            >

                <svg
                    class="h-4 w-4"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z"/>

                    <path d="M17 21v-8H7v8M7 3v5h8"/>

                </svg>

                Save CTA

            </button>

        </div>

    </div>

</form>


</div>

<style>

/* ================================================================
   EDITOR
================================================================ */

.cta-editor {
    max-width: 1180px;
    margin: 0 auto;
    padding: 8px 0 60px;
}


/* ================================================================
   HEADER
================================================================ */

.cta-editor-header {
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


.cta-header-glow {
    position: absolute;
    width: 280px;
    height: 280px;
    right: -90px;
    top: -130px;
    border-radius: 999px;

    background:
        radial-gradient(
            circle,
            rgba(59,130,246,.22),
            transparent 70%
        );

    filter: blur(10px);
}


/* ================================================================
   ICON
================================================================ */

.cta-page-icon {
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


/* ================================================================
   STATUS
================================================================ */

.cta-status-badge {
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


.cta-status-badge::before {
    content: "";

    width: 6px;
    height: 6px;

    border-radius: 999px;

    background: #4ade80;

    box-shadow:
        0 0 8px rgba(74,222,128,.7);
}


/* ================================================================
   PREVIEW BUTTON
================================================================ */

.cta-back-button {
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


.cta-back-button:hover {
    background: rgba(255,255,255,.1);
    color: white;
}


/* ================================================================
   ALERTS
================================================================ */

.cta-alert {
    display: flex;
    align-items: flex-start;
    gap: 12px;

    padding: 15px 17px;

    margin-bottom: 22px;

    border-radius: 14px;

    font-size: 13px;
}


.cta-alert-success {
    color: #166534;

    background: #f0fdf4;

    border: 1px solid #bbf7d0;
}


.cta-alert-error {
    color: #991b1b;

    background: #fef2f2;

    border: 1px solid #fecaca;
}


.cta-alert-icon {
    width: 30px;
    height: 30px;
    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 9px;

    background: rgba(255,255,255,.7);
}


/* ================================================================
   CARDS
================================================================ */

.cta-card {
    overflow: hidden;

    margin-bottom: 24px;

    border: 1px solid #e5eaf1;

    border-radius: 20px;

    background: #fff;

    box-shadow:
        0 2px 4px rgba(15,23,42,.02),
        0 12px 30px rgba(15,23,42,.04);
}


.cta-card-header {
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


.cta-section-number {
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


.cta-card-title {
    color: #0f172a;

    font-size: 16px;
    font-weight: 700;
}


.cta-card-description {
    margin-top: 3px;

    color: #64748b;

    font-size: 12px;
    line-height: 1.6;
}


.cta-card-body {
    padding: 26px 24px;
}


/* ================================================================
   LABELS
================================================================ */

.cta-label {
    display: block;

    margin-bottom: 8px;

    color: #334155;

    font-size: 12px;
    font-weight: 700;
}


.cta-mini-label {
    display: block;

    margin-bottom: 7px;

    color: #64748b;

    font-size: 11px;
    font-weight: 700;

    text-transform: uppercase;
    letter-spacing: .05em;
}


.cta-help {
    margin-top: 7px;

    color: #94a3b8;

    font-size: 11px;
    line-height: 1.5;
}


/* ================================================================
   INPUTS
================================================================ */

.cta-input {
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


.cta-input:hover {
    border-color: #cbd5e1;
}


.cta-input:focus {
    border-color: #60a5fa;

    background: #fff;

    box-shadow:
        0 0 0 4px rgba(59,130,246,.09);
}


.cta-input::placeholder {
    color: #b0bac7;
}


.cta-textarea {
    resize: vertical;

    min-height: 110px;

    line-height: 1.6;
}


.cta-highlight-input {
    border-color: #bfdbfe;

    background: #f8fbff;
}


.cta-disabled-input {
    cursor: not-allowed;

    color: #94a3b8;

    background: #f8fafc;
}


/* ================================================================
   BUTTON EDITOR
================================================================ */

.cta-button-editor {
    padding: 20px;

    border: 1px solid #e5eaf1;

    border-radius: 15px;

    background:
        linear-gradient(
            135deg,
            #fbfdff,
            #f8fafc
        );
}


/* ================================================================
   SUBHEADING
================================================================ */

.cta-subheading {
    display: flex;
    align-items: center;
    gap: 9px;

    color: #334155;

    font-size: 12px;
    font-weight: 800;

    text-transform: uppercase;
    letter-spacing: .05em;
}


.cta-subheading > span {
    width: 4px;
    height: 17px;

    border-radius: 999px;

    background: #2563eb;
}


/* ================================================================
   MEDIA
================================================================ */

.cta-media-placeholder {
    display: flex;
    align-items: flex-start;
    gap: 14px;

    padding: 17px;

    border: 1px dashed #cbd5e1;

    border-radius: 13px;

    background:
        linear-gradient(
            135deg,
            #f8fbff,
            #f8fafc
        );
}


.cta-media-icon {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 42px;
    height: 42px;
    flex-shrink: 0;

    border-radius: 10px;

    color: #2563eb;

    background: #eff6ff;

    border: 1px solid #dbeafe;
}


.cta-coming-soon {
    display: inline-flex;
    align-items: center;

    padding: 3px 7px;

    border-radius: 999px;

    color: #64748b;

    background: #f1f5f9;

    border: 1px solid #e2e8f0;

    font-size: 9px;
    font-weight: 800;

    text-transform: uppercase;
    letter-spacing: .05em;
}


/* ================================================================
   INFO TIP
================================================================ */

.cta-info-tip {
    display: flex;
    align-items: flex-start;
    gap: 9px;

    margin-top: 20px;

    padding: 13px 14px;

    border-radius: 11px;

    color: #475569;

    background: #f8fafc;

    border: 1px solid #e2e8f0;

    font-size: 11px;

    line-height: 1.6;
}


/* ================================================================
   SAVE BAR
================================================================ */

.cta-save-bar {
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


.cta-cancel-button {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-height: 42px;

    padding: 0 16px;

    border-radius: 10px;

    color: #475569;

    background: #f8fafc;

    border: 1px solid #e2e8f0;

    font-size: 13px;
    font-weight: 700;

    transition: all .2s ease;
}


.cta-cancel-button:hover {
    background: #f1f5f9;
    color: #0f172a;
}


.cta-save-button {
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
        0 8px 18px rgba(37,99,235,.2);

    font-size: 13px;
    font-weight: 700;

    cursor: pointer;

    transition:
        transform .2s ease,
        box-shadow .2s ease;
}


.cta-save-button:hover {
    transform: translateY(-1px);

    box-shadow:
        0 12px 25px rgba(37,99,235,.27);
}


/* ================================================================
   RESPONSIVE
================================================================ */

@media (max-width: 767px) {

    .cta-editor {
        padding: 4px 0 45px;
    }

    .cta-editor-header {
        padding: 24px 20px;

        border-radius: 18px;
    }

    .cta-card-header {
        padding: 18px;
    }

    .cta-card-body {
        padding: 20px 18px;
    }

    .cta-save-bar {
        align-items: stretch;

        flex-direction: column;

        gap: 12px;

        bottom: 10px;
    }

    .cta-save-bar > div:last-child {
        width: 100%;
    }

    .cta-cancel-button,
    .cta-save-button {
        flex: 1;
    }

}
</style>

@endsection
