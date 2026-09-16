@extends('layouts.admin')

@section('title', 'Testimonials CMS')

@section('page-heading', 'Testimonials')

@section('page-description', 'Manage the testimonials displayed on your homepage')

@section('admin-content')

@php
    $items = $content['items'] ?? [];
@endphp

<div class="testimonial-editor">

    {{-- ================================================================
        HEADER
    ================================================================= --}}

    <div class="testimonial-editor-header">

        <div class="testimonial-header-glow"></div>

        <div class="relative z-10 flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">

            <div class="flex items-start gap-4">

                <div class="testimonial-page-icon">

                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M21 11.5a8.38 8.38 0 0 1-9 8.3
                               8.5 8.5 0 0 1-4-.9L3 20l1.2-4.5
                               a8.3 8.3 0 0 1-.9-4
                               C3.3 6.8 7 3.2 12 3.2
                               a8.4 8.4 0 0 1 9 8.3Z"
                        />
                    </svg>

                </div>

                <div>

                    <div class="mb-2 flex flex-wrap items-center gap-2">

                        <h1 class="text-xl font-bold tracking-tight text-white">
                            Testimonials CMS
                        </h1>

                        <span class="testimonial-status-badge">
                            Active
                        </span>

                    </div>

                    <p class="max-w-2xl text-sm leading-6 text-slate-300">
                        Manage customer testimonials, quotes, roles,
                        and testimonial images displayed on the homepage.
                    </p>

                </div>

            </div>

            <a
                href="{{ url('/') }}"
                target="_blank"
                class="testimonial-back-button"
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

        <div class="testimonial-alert testimonial-alert-success">

            <div class="testimonial-alert-icon">

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

        <div class="testimonial-alert testimonial-alert-error">

            <div class="testimonial-alert-icon">

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


    <form
        method="POST"
        action="{{ route('admin.home.section.update', 'testimonials') }}"
    >

        @csrf

        @method('PUT')


        {{-- ============================================================
            SECTION CONTENT
        ============================================================= --}}

        <div class="testimonial-card">

            <div class="testimonial-card-header">

                <div class="testimonial-section-number">
                    01
                </div>

                <div>

                    <h2 class="testimonial-card-title">
                        Section Content
                    </h2>

                    <p class="testimonial-card-description">
                        Manage the badge, heading, and introductory
                        text displayed above the testimonials.
                    </p>

                </div>

            </div>


            <div class="testimonial-card-body">

                {{-- Badge --}}

                <div>

                    <label class="testimonial-label">
                        Badge
                    </label>

                    <input
                        type="text"
                        name="content[badge]"
                        value="{{ old('content.badge', $content['badge'] ?? '') }}"
                        class="testimonial-input"
                        placeholder="Testimonials"
                    >

                </div>


                {{-- Heading --}}

                <div class="mt-6 grid gap-5 lg:grid-cols-2">

                    <div>

                        <label class="testimonial-label">
                            Heading — Before Highlight
                        </label>

                        <input
                            type="text"
                            name="content[heading][before]"
                            value="{{ old('content.heading.before', $content['heading']['before'] ?? '') }}"
                            class="testimonial-input"
                            placeholder="Real stories,"
                        >

                    </div>


                    <div>

                        <label class="testimonial-label">
                            Heading — Highlight
                        </label>

                        <input
                            type="text"
                            name="content[heading][highlight]"
                            value="{{ old('content.heading.highlight', $content['heading']['highlight'] ?? '') }}"
                            class="testimonial-input testimonial-highlight-input"
                            placeholder="Real results."
                        >

                    </div>

                </div>


                {{-- Description --}}

                <div class="mt-6">

                    <label class="testimonial-label">
                        Section Description
                    </label>

                    <textarea
                        name="content[description]"
                        class="testimonial-input testimonial-textarea"
                        placeholder="Enter the testimonial section description..."
                    >{{ old('content.description', $content['description'] ?? '') }}</textarea>

                </div>

            </div>

        </div>


        {{-- ============================================================
            TESTIMONIAL ITEMS
        ============================================================= --}}

        <div class="testimonial-card">

            <div class="testimonial-card-header">

                <div class="testimonial-section-number">
                    02
                </div>

                <div>

                    <h2 class="testimonial-card-title">
                        Customer Testimonials
                    </h2>

                    <p class="testimonial-card-description">
                        Edit each customer story, their role,
                        quote, and image.
                    </p>

                </div>

            </div>


            <div class="testimonial-card-body">

                <div class="space-y-8">

                    @foreach($items as $index => $testimonial)

                        @php
                            $number = str_pad(
                                $index + 1,
                                2,
                                '0',
                                STR_PAD_LEFT
                            );
                        @endphp


                        <div class="testimonial-item">

                            {{-- Item Header --}}

                            <div class="testimonial-item-header">

                                <div class="flex items-center gap-3">

                                    <div class="testimonial-item-number">
                                        {{ $number }}
                                    </div>

                                    <div>

                                        <h3 class="text-sm font-bold text-slate-900">
                                            {{ $testimonial['name'] ?? 'Testimonial' }}
                                        </h3>

                                        <p class="mt-0.5 text-xs text-slate-500">
                                            Customer testimonial {{ $index + 1 }}
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="testimonial-item-body">


                                {{-- Customer Information --}}

                                <div class="testimonial-subheading">

                                    <span></span>

                                    Customer Information

                                </div>


                                <div class="mt-5 grid gap-5 lg:grid-cols-2">

                                    <div>

                                        <label class="testimonial-mini-label">
                                            Customer Name
                                        </label>

                                        <input
                                            type="text"
                                            name="content[items][{{ $index }}][name]"
                                            value="{{ old("content.items.$index.name", $testimonial['name'] ?? '') }}"
                                            class="testimonial-input"
                                            placeholder="Customer name"
                                        >

                                    </div>


                                    <div>

                                        <label class="testimonial-mini-label">
                                            Role / Position
                                        </label>

                                        <input
                                            type="text"
                                            name="content[items][{{ $index }}][role]"
                                            value="{{ old("content.items.$index.role", $testimonial['role'] ?? '') }}"
                                            class="testimonial-input"
                                            placeholder="Business Owner"
                                        >

                                    </div>

                                </div>


                                {{-- Quote --}}

                                <div class="mt-5">

                                    <label class="testimonial-mini-label">
                                        Testimonial Quote
                                    </label>

                                    <textarea
                                        name="content[items][{{ $index }}][quote]"
                                        class="testimonial-input testimonial-quote-input"
                                        placeholder="Enter the customer's testimonial..."
                                    >{{ old("content.items.$index.quote", $testimonial['quote'] ?? '') }}</textarea>

                                    <p class="testimonial-help">
                                        This text appears inside the expanded
                                        testimonial card.
                                    </p>

                                </div>


                                {{-- Media --}}

                                <div class="testimonial-subheading mt-8">

                                    <span></span>

                                    Testimonial Image

                                </div>


                                <div class="mt-5">

                                    <div class="testimonial-media-placeholder">

                                        <div class="testimonial-media-icon">

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

                                                <path
                                                    d="m21 15-5-5L5 21"
                                                />
                                            </svg>

                                        </div>


                                        <div class="flex-1">

                                            <div class="flex flex-wrap items-center gap-2">

                                                <p class="text-sm font-semibold text-slate-800">
                                                    Image / Media Library
                                                </p>

                                                <span class="testimonial-coming-soon">
                                                    Coming Soon
                                                </span>

                                            </div>

                                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                                Image selection from the Media
                                                Library will be connected later.
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Current Image Path --}}

                                    <div class="mt-5">

                                        <label class="testimonial-mini-label">
                                            Current Image Path
                                        </label>

                                        <input
                                            type="text"
                                            name="content[items][{{ $index }}][image]"
                                            value="{{ old("content.items.$index.image", $testimonial['image'] ?? '') }}"
                                            class="testimonial-input"
                                            placeholder="images/testimonials/image1.webp"
                                        >

                                        <p class="testimonial-help">
                                            For now, enter the existing image
                                            path manually. Media Library
                                            integration will be added later.
                                        </p>

                                    </div>


                                    {{-- Media ID placeholder --}}

                                    <div class="mt-5">

                                        <label class="testimonial-mini-label">
                                            Media ID
                                        </label>

                                        <input
                                            type="text"
                                            name="content[items][{{ $index }}][media_id]"
                                            value="{{ old("content.items.$index.media_id", $testimonial['media_id'] ?? '') }}"
                                            class="testimonial-input testimonial-disabled-input"
                                            placeholder="Connected later"
                                            disabled
                                        >

                                        <p class="testimonial-help">
                                            Media selection is intentionally
                                            postponed for now.
                                        </p>

                                    </div>

                                </div>


                                {{-- Tip --}}

                                <div class="testimonial-info-tip">

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
                                        Image management is currently kept
                                        separate from the CMS. We will connect
                                        this to the Media Library after the
                                        remaining homepage sections are finished.
                                    </span>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>


        {{-- ============================================================
            SAVE BAR
        ============================================================= --}}

        <div class="testimonial-save-bar">

            <div>

                <p class="text-sm font-semibold text-slate-800">
                    Testimonial changes
                </p>

                <p class="mt-0.5 text-xs text-slate-500">
                    Save your changes when you are finished editing.
                </p>

            </div>


            <div class="flex items-center gap-3">

                <a
                    href="{{ route('admin.home') }}"
                    class="testimonial-cancel-button"
                >
                    Cancel
                </a>


                <button
                    type="submit"
                    class="testimonial-save-button"
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

                    Save Testimonials

                </button>

            </div>

        </div>

    </form>

</div>


<style>

/* ================================================================
   EDITOR
================================================================ */

.testimonial-editor {
    max-width: 1180px;
    margin: 0 auto;
    padding: 8px 0 60px;
}


/* ================================================================
   HEADER
================================================================ */

.testimonial-editor-header {
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


.testimonial-header-glow {
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

.testimonial-page-icon {
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

.testimonial-status-badge {
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


.testimonial-status-badge::before {
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

.testimonial-back-button {
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


.testimonial-back-button:hover {
    background: rgba(255,255,255,.1);

    color: white;
}


/* ================================================================
   ALERTS
================================================================ */

.testimonial-alert {
    display: flex;
    align-items: flex-start;
    gap: 12px;

    padding: 15px 17px;

    margin-bottom: 22px;

    border-radius: 14px;

    font-size: 13px;
}


.testimonial-alert-success {
    color: #166534;

    background: #f0fdf4;

    border: 1px solid #bbf7d0;
}


.testimonial-alert-error {
    color: #991b1b;

    background: #fef2f2;

    border: 1px solid #fecaca;
}


.testimonial-alert-icon {
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

.testimonial-card {
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


.testimonial-card:hover {
    box-shadow:
        0 3px 7px rgba(15,23,42,.03),
        0 18px 38px rgba(15,23,42,.06);
}


/* ================================================================
   CARD HEADER
================================================================ */

.testimonial-card-header {
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


.testimonial-section-number {
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


.testimonial-card-title {
    color: #0f172a;

    font-size: 16px;

    font-weight: 700;
}


.testimonial-card-description {
    margin-top: 3px;

    color: #64748b;

    font-size: 12px;

    line-height: 1.6;
}


.testimonial-card-body {
    padding: 26px 24px;
}


/* ================================================================
   LABELS
================================================================ */

.testimonial-label {
    display: block;

    margin-bottom: 8px;

    color: #334155;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: .01em;
}


.testimonial-mini-label {
    display: block;

    margin-bottom: 7px;

    color: #64748b;

    font-size: 11px;

    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .05em;
}


.testimonial-help {
    margin-top: 7px;

    color: #94a3b8;

    font-size: 11px;

    line-height: 1.5;
}


/* ================================================================
   INPUTS
================================================================ */

.testimonial-input {
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


.testimonial-input:hover {
    border-color: #cbd5e1;
}


.testimonial-input:focus {
    border-color: #60a5fa;

    background: #fff;

    box-shadow:
        0 0 0 4px rgba(59,130,246,.09);
}


.testimonial-input::placeholder {
    color: #b0bac7;
}


.testimonial-textarea {
    resize: vertical;

    min-height: 110px;

    line-height: 1.6;
}


.testimonial-quote-input {
    min-height: 150px;

    resize: vertical;

    line-height: 1.65;
}


.testimonial-highlight-input {
    border-color: #bfdbfe;

    background: #f8fbff;
}


.testimonial-disabled-input {
    cursor: not-allowed;

    color: #94a3b8;

    background: #f8fafc;
}


/* ================================================================
   SUBHEADING
================================================================ */

.testimonial-subheading {
    display: flex;
    align-items: center;
    gap: 9px;

    color: #334155;

    font-size: 12px;

    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: .05em;
}


.testimonial-subheading > span {
    width: 4px;
    height: 17px;

    border-radius: 999px;

    background: #2563eb;
}


/* ================================================================
   TESTIMONIAL ITEM
================================================================ */

.testimonial-item {
    overflow: hidden;

    border: 1px solid #e5eaf1;

    border-radius: 17px;

    background: #fff;
}


.testimonial-item-header {
    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 17px 19px;

    border-bottom: 1px solid #eef2f7;

    background:
        linear-gradient(
            to right,
            #f8fbff,
            #fff
        );
}


.testimonial-item-number {
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


.testimonial-item-body {
    padding: 22px 20px;
}


/* ================================================================
   MEDIA PLACEHOLDER
================================================================ */

.testimonial-media-placeholder {
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


.testimonial-media-icon {
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


.testimonial-coming-soon {
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

.testimonial-info-tip {
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

.testimonial-save-bar {
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


.testimonial-cancel-button {
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


.testimonial-cancel-button:hover {
    background: #f1f5f9;

    color: #0f172a;
}


.testimonial-save-button {
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


.testimonial-save-button:hover {
    transform: translateY(-1px);

    box-shadow:
        0 12px 25px rgba(37,99,235,.27);
}


/* ================================================================
   RESPONSIVE
================================================================ */

@media (max-width: 767px) {

    .testimonial-editor {
        padding: 4px 0 45px;
    }

    .testimonial-editor-header {
        padding: 24px 20px;

        border-radius: 18px;
    }

    .testimonial-card-header {
        padding: 18px;
    }

    .testimonial-card-body {
        padding: 20px 18px;
    }

    .testimonial-item-body {
        padding: 18px;
    }

    .testimonial-save-bar {
        align-items: stretch;

        flex-direction: column;

        gap: 12px;

        bottom: 10px;
    }a

    .testimonial-save-bar > div:last-child {
        width: 100%;
    }

    .testimonial-cancel-button,
    .testimonial-save-button {
        flex: 1;
    }

}

</style>

@endsection