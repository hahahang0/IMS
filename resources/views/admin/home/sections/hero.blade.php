@extends('layouts.admin')

@section('title', 'Edit Hero')

@section('admin-content')

<div class="hero-editor">

```
{{-- =========================================================
     PAGE HEADER
========================================================== --}}

<div class="hero-editor-header">

    <div class="hero-header-glow"></div>

    <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

        <div class="flex items-start gap-4">

            <div class="hero-page-icon">
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h10M4 18h16"/>
                </svg>
            </div>

            <div>
                <div class="flex items-center gap-3 mb-1">
                    <h1 class="text-2xl sm:text-3xl font-bold text-white">
                        Edit Hero Section
                    </h1>

                    <span class="hero-status-badge">
                        Active
                    </span>
                </div>

                <p class="text-sm text-slate-300 max-w-xl">
                    Customize the first thing visitors see on your StockCore homepage.
                </p>
            </div>

        </div>

        <a
            href="{{ route('admin.home') }}"
            class="hero-back-button"
        >
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>

            Back to Sections
        </a>

    </div>

</div>


{{-- =========================================================
     ALERTS
========================================================== --}}

@if(session('success'))

    <div class="hero-alert hero-alert-success">

        <div class="hero-alert-icon">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M5 13l4 4L19 7"/>
            </svg>
        </div>

        <div>
            <p class="font-semibold">Changes saved</p>
            <p class="text-xs mt-0.5 opacity-80">
                Your Hero section has been updated successfully.
            </p>
        </div>

    </div>

@endif


@if($errors->any())

    <div class="hero-alert hero-alert-error">

        <div class="hero-alert-icon">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </div>

        <div>
            <p class="font-semibold">
                Please check the form
            </p>

            <ul class="mt-1 text-xs space-y-1 opacity-80">
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>

    </div>

@endif


<form
    method="POST"
    action="{{ route('admin.home.section.update', $section) }}"
>

    @csrf
    @method('PUT')


    {{-- =========================================================
         MAIN CONTENT
    ========================================================== --}}

    <div class="hero-card">

        <div class="hero-card-header">

            <div class="hero-section-number">
                01
            </div>

            <div>
                <h2 class="hero-card-title">
                    Main Content
                </h2>

                <p class="hero-card-description">
                    Define the main message visitors see when they land on your website.
                </p>
            </div>

        </div>


        <div class="hero-card-body">

            {{-- Eyebrow --}}

            <div class="hero-field">

                <label for="eyebrow" class="hero-label">
                    Eyebrow Text
                </label>

                <div class="hero-input-wrapper">

                    <span class="hero-input-icon">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4 6h16M4 12h10M4 18h7"/>
                        </svg>
                    </span>

                    <input
                        type="text"
                        id="eyebrow"
                        name="content[eyebrow]"
                        value="{{ old('content.eyebrow', $content['eyebrow'] ?? '') }}"
                        class="hero-input hero-input-with-icon"
                        placeholder="Inventory Management Made Simple"
                    >

                </div>

                <p class="hero-help">
                    A short statement displayed above your main headline.
                </p>

            </div>


            {{-- Heading --}}

            <div class="hero-field">

                <label class="hero-label">
                    Main Heading
                </label>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

                    <div>

                        <span class="hero-mini-label">
                            Regular text
                        </span>

                        <input
                            type="text"
                            name="content[heading][before]"
                            value="{{ old('content.heading.before', $content['heading']['before'] ?? '') }}"
                            class="hero-input"
                            placeholder="Take Control of your"
                        >

                    </div>


                    <div>

                        <span class="hero-mini-label">
                            Highlighted text
                        </span>

                        <div class="relative">

                            <input
                                type="text"
                                name="content[heading][highlight]"
                                value="{{ old('content.heading.highlight', $content['heading']['highlight'] ?? '') }}"
                                class="hero-input hero-highlight-input"
                                placeholder="Inventory"
                            >

                            <span class="hero-highlight-tag">
                                Highlight
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Description --}}

            <div class="hero-field">

                <div class="flex items-center justify-between mb-2">

                    <label for="description" class="hero-label mb-0">
                        Description
                    </label>

                    <span class="text-xs text-slate-400">
                        Supporting copy
                    </span>

                </div>

                <textarea
                    id="description"
                    name="content[description]"
                    rows="4"
                    class="hero-input hero-textarea"
                    placeholder="Describe your product..."
                >{{ old('content.description', $content['description'] ?? '') }}</textarea>

            </div>

        </div>

    </div>


    {{-- =========================================================
         CTA BUTTONS
    ========================================================== --}}

    <div class="hero-card">

        <div class="hero-card-header">

            <div class="hero-section-number">
                02
            </div>

            <div>
                <h2 class="hero-card-title">
                    Call-to-Action Buttons
                </h2>

                <p class="hero-card-description">
                    Configure the actions you want visitors to take.
                </p>
            </div>

        </div>


        <div class="hero-card-body">

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-5">

                {{-- Primary --}}

                <div class="cta-card cta-primary">

                    <div class="cta-card-top">

                        <div class="cta-icon">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-slate-900">
                                Primary Button
                            </p>

                            <p class="text-xs text-slate-500">
                                Your main conversion action
                            </p>
                        </div>

                    </div>


                    <div class="space-y-4">

                        <div>
                            <label class="hero-mini-label">
                                Button text
                            </label>

                            <input
                                type="text"
                                name="content[buttons][primary][text]"
                                value="{{ old('content.buttons.primary.text', $content['buttons']['primary']['text'] ?? '') }}"
                                class="hero-input"
                                placeholder="Start Free Trial"
                            >
                        </div>

                        <div>
                            <label class="hero-mini-label">
                                Button URL
                            </label>

                            <input
                                type="text"
                                name="content[buttons][primary][url]"
                                value="{{ old('content.buttons.primary.url', $content['buttons']['primary']['url'] ?? '') }}"
                                class="hero-input"
                                placeholder="/register"
                            >
                        </div>

                    </div>

                </div>


                {{-- Secondary --}}

                <div class="cta-card">

                    <div class="cta-card-top">

                        <div class="cta-icon secondary">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-slate-900">
                                Secondary Button
                            </p>

                            <p class="text-xs text-slate-500">
                                Alternative visitor action
                            </p>
                        </div>

                    </div>


                    <div class="space-y-4">

                        <div>
                            <label class="hero-mini-label">
                                Button text
                            </label>

                            <input
                                type="text"
                                name="content[buttons][secondary][text]"
                                value="{{ old('content.buttons.secondary.text', $content['buttons']['secondary']['text'] ?? '') }}"
                                class="hero-input"
                                placeholder="Book a Demo"
                            >
                        </div>

                        <div>
                            <label class="hero-mini-label">
                                Button URL
                            </label>

                            <input
                                type="text"
                                name="content[buttons][secondary][url]"
                                value="{{ old('content.buttons.secondary.url', $content['buttons']['secondary']['url'] ?? '') }}"
                                class="hero-input"
                                placeholder="/demo"
                            >
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         TRUST ITEMS
    ========================================================== --}}

    @php
        $trustItems = old(
            'content.trust_items',
            $content['trust_items'] ?? []
        );
    @endphp


    <div class="hero-card">

        <div class="hero-card-header">

            <div class="hero-section-number">
                03
            </div>

            <div>
                <h2 class="hero-card-title">
                    Trust Items
                </h2>

                <p class="hero-card-description">
                    Small reassurance messages displayed below your CTA buttons.
                </p>
            </div>

        </div>


        <div class="hero-card-body">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                @foreach($trustItems as $index => $item)

                    <div class="trust-item">

                        <div class="trust-check">

                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5 13l4 4L19 7"/>
                            </svg>

                        </div>

                        <input
                            type="text"
                            name="content[trust_items][{{ $index }}][text]"
                            value="{{ old("content.trust_items.$index.text", $item['text'] ?? '') }}"
                            class="trust-input"
                            placeholder="14-day free trial"
                        >

                    </div>

                @endforeach


                @if(count($trustItems) === 0)

                    <div class="trust-item">

                        <div class="trust-check">
                            ✓
                        </div>

                        <input
                            type="text"
                            name="content[trust_items][0][text]"
                            value=""
                            class="trust-input"
                            placeholder="14-day free trial"
                        >

                    </div>

                @endif

            </div>

        </div>

    </div>


    {{-- =========================================================
         HERO IMAGE
    ========================================================== --}}

    <div class="hero-card">

        <div class="hero-card-header">

            <div class="hero-section-number">
                04
            </div>

            <div>
                <h2 class="hero-card-title">
                    Hero Image
                </h2>

                <p class="hero-card-description">
                    Choose and configure the visual displayed beside your hero content.
                </p>
            </div>

        </div>


        <div class="hero-card-body">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                {{-- Image Preview --}}

                <div class="media-preview">

                    <div class="media-preview-grid"></div>

                    <div class="media-preview-content">

                        <div class="media-preview-icon">

                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <circle cx="8.5" cy="8.5" r="1.5"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M21 15l-5-5L5 21"/>
                            </svg>

                        </div>

                        <p class="font-semibold text-slate-700">
                            Hero Media
                        </p>

                        <p class="text-xs text-slate-400 mt-1">
                            Image preview will appear here
                        </p>

                    </div>

                </div>


                {{-- Image Settings --}}

                <div class="space-y-5">

                    <div>

                        <label class="hero-label">
                            Media ID
                        </label>

                        <input
                            type="text"
                            name="content[image][media_id]"
                            value="{{ old('content.image.media_id', $content['image']['media_id'] ?? '') }}"
                            class="hero-input"
                            placeholder="Media ID"
                        >

                        <p class="hero-help">
                            This will later connect to your media library.
                        </p>

                    </div>


                    <div>

                        <label class="hero-label">
                            Alt Text
                        </label>

                        <input
                            type="text"
                            name="content[image][alt]"
                            value="{{ old('content.image.alt', $content['image']['alt'] ?? '') }}"
                            class="hero-input"
                            placeholder="StockCore inventory dashboard"
                        >

                        <p class="hero-help">
                            Describe the image for accessibility and SEO.
                        </p>

                    </div>


                    <div class="media-tip">

                        <svg class="w-5 h-5 text-indigo-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13 16h-1v-4h-1m1-4h.01M12 21a9 9 0 100-18 9 9 0 000 18z"/>
                        </svg>

                        <p>
                            Media management can be connected to this section later,
                            allowing you to change images without touching your Blade files.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         FLOATING CARDS
    ========================================================== --}}

    @php
        $floatingCards = old(
            'content.floating_cards',
            $content['floating_cards'] ?? []
        );
    @endphp


    <div class="hero-card">

        <div class="hero-card-header">

            <div class="hero-section-number">
                05
            </div>

            <div>
                <h2 class="hero-card-title">
                    Floating Cards
                </h2>

                <p class="hero-card-description">
                    Customize the statistics and information cards surrounding the hero image.
                </p>
            </div>

        </div>


        <div class="hero-card-body">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

                @foreach($floatingCards as $index => $card)

                    @php
                        $selectedIcon = old(
                            "content.floating_cards.$index.icon",
                            $card['icon'] ?? ''
                        );
                    @endphp


                    <div class="floating-card-editor">

                        <div class="floating-card-header">

                            <div class="floating-number">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-slate-800">
                                    Card {{ $index + 1 }}
                                </p>

                                <p class="text-xs text-slate-400">
                                    Floating statistic
                                </p>
                            </div>

                        </div>


                        <div class="space-y-4">

                            {{-- Icon --}}

                            <div>

                                <label class="hero-mini-label">
                                    Icon
                                </label>

                                <select
                                    name="content[floating_cards][{{ $index }}][icon]"
                                    class="hero-input"
                                >

                                    <option value="package" @selected($selectedIcon === 'package')>
                                        Package
                                    </option>

                                    <option value="check" @selected($selectedIcon === 'check')>
                                        Check
                                    </option>

                                    <option value="warning" @selected($selectedIcon === 'warning')>
                                        Warning
                                    </option>

                                    <option value="currency" @selected($selectedIcon === 'currency')>
                                        Currency
                                    </option>

                                </select>

                            </div>


                            {{-- Title --}}

                            <div>

                                <label class="hero-mini-label">
                                    Title
                                </label>

                                <input
                                    type="text"
                                    name="content[floating_cards][{{ $index }}][title]"
                                    value="{{ old("content.floating_cards.$index.title", $card['title'] ?? '') }}"
                                    class="hero-input"
                                    placeholder="Total Products"
                                >

                            </div>


                            {{-- Description --}}

                            <div>

                                <label class="hero-mini-label">
                                    Description
                                </label>

                                <input
                                    type="text"
                                    name="content[floating_cards][{{ $index }}][description]"
                                    value="{{ old("content.floating_cards.$index.description", $card['description'] ?? '') }}"
                                    class="hero-input"
                                    placeholder="New quantity:"
                                >

                            </div>


                            {{-- Value --}}

                            <div>

                                <label class="hero-mini-label">
                                    Value
                                </label>

                                <input
                                    type="text"
                                    name="content[floating_cards][{{ $index }}][value]"
                                    value="{{ old("content.floating_cards.$index.value", $card['value'] ?? '') }}"
                                    class="hero-input"
                                    placeholder="1,284"
                                >

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>


    {{-- =========================================================
         SAVE BAR
    ========================================================== --}}

    <div class="hero-save-bar">

        <div>

            <p class="text-sm font-semibold text-slate-800">
                Ready to publish your changes?
            </p>

            <p class="text-xs text-slate-500 mt-0.5">
                Your changes will immediately update the saved Hero content.
            </p>

        </div>


        <div class="flex items-center gap-3">

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

                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M5 13l4 4L19 7"/>
                </svg>

                Save Hero Section

            </button>

        </div>

    </div>

</form>
```

</div>

{{-- =============================================================
HERO EDITOR STYLES
============================================================== --}}

<style>

    .hero-editor {
        max-width: 1180px;
        margin: 0 auto;
        padding: 8px 0 60px;
    }

    /* Header */

    .hero-editor-header {
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

    .hero-header-glow {
        position: absolute;
        width: 280px;
        height: 280px;
        right: -100px;
        top: -160px;
        border-radius: 999px;
        background: rgba(59,130,246,.16);
        filter: blur(20px);
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
        box-shadow: inset 0 1px 0 rgba(255,255,255,.08);
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
        box-shadow: 0 0 8px rgba(74,222,128,.7);
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
        background: rgba(255,255,255,.12);
        border-color: rgba(255,255,255,.2);
        transform: translateY(-1px);
    }


    /* Alerts */

    .hero-alert {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 14px 16px;
        margin-bottom: 20px;
        border-radius: 14px;
        font-size: 13px;
    }

    .hero-alert-success {
        color: #166534;
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
    }

    .hero-alert-error {
        color: #991b1b;
        background: #fef2f2;
        border: 1px solid #fecaca;
    }

    .hero-alert-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 1px;
    }


    /* Cards */

    .hero-card {
        overflow: hidden;
        margin-bottom: 24px;
        border: 1px solid #e5eaf1;
        border-radius: 20px;
        background: #fff;
        box-shadow:
            0 2px 4px rgba(15,23,42,.02),
            0 12px 30px rgba(15,23,42,.04);
        transition: box-shadow .2s ease, transform .2s ease;
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
        background: linear-gradient(to right, #fff, #fbfdff);
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


    /* Fields */

    .hero-field {
        margin-bottom: 25px;
    }

    .hero-field:last-child {
        margin-bottom: 0;
    }

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

    .hero-input-wrapper {
        position: relative;
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
        box-shadow: 0 0 0 4px rgba(59,130,246,.09);
    }

    .hero-input::placeholder {
        color: #b0bac7;
    }

    .hero-input-with-icon {
        padding-left: 43px;
    }

    .hero-input-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        pointer-events: none;
    }

    .hero-textarea {
        resize: vertical;
        min-height: 110px;
        line-height: 1.6;
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


    /* CTA */

    .cta-card {
        padding: 20px;
        border: 1px solid #e5eaf1;
        border-radius: 15px;
        background: #fbfcfe;
    }

    .cta-primary {
        border-color: #dbeafe;
        background: linear-gradient(145deg, #f8fbff, #ffffff);
    }

    .cta-card-top {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
    }

    .cta-icon {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        color: #2563eb;
        background: #dbeafe;
    }

    .cta-icon.secondary {
        color: #475569;
        background: #e2e8f0;
    }


    /* Trust */

    .trust-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 11px;
        border: 1px solid #e5eaf1;
        border-radius: 11px;
        background: #fbfcfe;
        transition: all .2s ease;
    }

    .trust-item:focus-within {
        border-color: #93c5fd;
        box-shadow: 0 0 0 3px rgba(59,130,246,.07);
        background: white;
    }

    .trust-check {
        width: 27px;
        height: 27px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        color: #2563eb;
        background: #dbeafe;
    }

    .trust-input {
        width: 100%;
        min-width: 0;
        border: 0;
        outline: none;
        background: transparent;
        color: #334155;
        font-size: 12px;
    }

    .trust-input::placeholder {
        color: #a8b2bf;
    }


    /* Media */

    .media-preview {
        position: relative;
        min-height: 280px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #dbe2ea;
        border-radius: 16px;
        background:
            linear-gradient(135deg, #f8fafc, #eef4fb);
    }

    .media-preview-grid {
        position: absolute;
        inset: 0;
        opacity: .45;
        background-image:
            linear-gradient(#dbe4ef 1px, transparent 1px),
            linear-gradient(90deg, #dbe4ef 1px, transparent 1px);
        background-size: 26px 26px;
    }

    .media-preview-content {
        position: relative;
        z-index: 1;
        text-align: center;
    }

    .media-preview-icon {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 14px;
        border-radius: 18px;
        color: #64748b;
        background: rgba(255,255,255,.75);
        border: 1px solid rgba(255,255,255,.9);
        box-shadow: 0 10px 30px rgba(15,23,42,.07);
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


    /* Floating Cards */

    .floating-card-editor {
        padding: 20px;
        border: 1px solid #e5eaf1;
        border-radius: 16px;
        background: #fbfcfe;
        transition: all .2s ease;
    }

    .floating-card-editor:hover {
        border-color: #d5deea;
        background: #fff;
        box-shadow: 0 8px 22px rgba(15,23,42,.04);
    }

    .floating-card-header {
        display: flex;
        align-items: center;
        gap: 11px;
        padding-bottom: 17px;
        margin-bottom: 18px;
        border-bottom: 1px dashed #dbe2ea;
    }

    .floating-number {
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        color: #475569;
        background: #e2e8f0;
        font-size: 10px;
        font-weight: 800;
    }


    /* Save */

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
        box-shadow: 0 15px 45px rgba(15,23,42,.12);
    }

    .hero-cancel-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 16px;
        border-radius: 9px;
        color: #475569;
        border: 1px solid #dbe2ea;
        background: white;
        font-size: 12px;
        font-weight: 600;
        transition: all .2s ease;
    }

    .hero-cancel-button:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
    }

    .hero-save-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 10px 18px;
        border: 0;
        border-radius: 9px;
        color: white;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        box-shadow: 0 7px 18px rgba(37,99,235,.22);
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all .2s ease;
    }

    .hero-save-button:hover {
        transform: translateY(-1px);
        box-shadow: 0 10px 24px rgba(37,99,235,.3);
    }

    .hero-save-button:active {
        transform: translateY(0);
    }


    /* Responsive */

    @media (max-width: 640px) {

        .hero-editor {
            padding: 0 0 40px;
        }

        .hero-editor-header {
            border-radius: 18px;
            padding: 22px;
        }

        .hero-page-icon {
            width: 45px;
            height: 45px;
        }

        .hero-card {
            border-radius: 16px;
        }

        .hero-card-header {
            padding: 18px;
        }

        .hero-card-body {
            padding: 18px;
        }

        .hero-save-bar {
            align-items: stretch;
            flex-direction: column;
        }

        .hero-save-bar > div:last-child {
            width: 100%;
        }

        .hero-cancel-button,
        .hero-save-button {
            flex: 1;
        }

    }

</style>

@endsection
