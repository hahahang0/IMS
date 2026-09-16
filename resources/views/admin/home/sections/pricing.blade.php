@extends('layouts.admin')

@section('title', 'Pricing CMS')
@section('page-heading', 'Pricing')
@section('page-description', 'Manage the pricing plans and billing options displayed on your homepage')

@section('admin-content')

@php
$plans = $content['plans'] ?? [];
@endphp

<div class="pricing-editor">

```
{{-- =========================================================
     HEADER
========================================================== --}}

<div class="pricing-editor-header">

    <div class="pricing-header-glow"></div>

    <div class="relative z-10 flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">

        <div class="flex items-start gap-4">

            <div class="pricing-page-icon">

                <svg class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24">

                    <path d="M12 1v22"/>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7H14.5a3.5 3.5 0 0 1 0 7H6"/>

                </svg>

            </div>

            <div>

                <div class="mb-2 flex flex-wrap items-center gap-2">

                    <h1 class="text-xl font-bold tracking-tight text-white">
                        Pricing CMS
                    </h1>

                    <span class="pricing-status-badge">
                        Active
                    </span>

                </div>

                <p class="max-w-2xl text-sm leading-6 text-slate-300">
                    Manage your pricing plans, monthly and yearly billing,
                    statistics, feature lists, and calls-to-action.
                </p>

            </div>

        </div>


        <a href="{{ url('/') }}"
            target="_blank"
            class="pricing-back-button">

            <svg class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">

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

    <div class="pricing-alert pricing-alert-success">

        <div class="pricing-alert-icon">

            <svg class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                stroke-width="2.5"
                viewBox="0 0 24 24">

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


@if($errors->any())

    <div class="pricing-alert pricing-alert-error">

        <div class="pricing-alert-icon">

            <svg class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">

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


<form method="POST"
    action="{{ route('admin.home.section.update', 'pricing') }}">

    @csrf
    @method('PUT')


    {{-- =====================================================
         SECTION CONTENT
    ====================================================== --}}

    <div class="pricing-card">

        <div class="pricing-card-header">

            <div class="pricing-section-number">
                01
            </div>

            <div>

                <h2 class="pricing-card-title">
                    Section Content
                </h2>

                <p class="pricing-card-description">
                    Manage the badge, heading, and introductory text
                    displayed above the pricing plans.
                </p>

            </div>

        </div>


        <div class="pricing-card-body">

            <div>

                <label class="pricing-label">
                    Badge
                </label>

                <input
                    type="text"
                    name="content[badge]"
                    value="{{ old('content.badge', $content['badge'] ?? '') }}"
                    class="pricing-input"
                    placeholder="Simple & transparent pricing"
                >

            </div>


            <div class="mt-6 grid gap-5 lg:grid-cols-2">

                <div>

                    <label class="pricing-label">
                        Heading — Before Highlight
                    </label>

                    <input
                        type="text"
                        name="content[heading][before]"
                        value="{{ old('content.heading.before', $content['heading']['before'] ?? '') }}"
                        class="pricing-input"
                        placeholder="Everything you need to"
                    >

                </div>


                <div>

                    <label class="pricing-label">
                        Heading — Highlight
                    </label>

                    <input
                        type="text"
                        name="content[heading][highlight]"
                        value="{{ old('content.heading.highlight', $content['heading']['highlight'] ?? '') }}"
                        class="pricing-input pricing-highlight-input"
                        placeholder="manage inventory smarter"
                    >

                </div>

            </div>


            <div class="mt-6">

                <label class="pricing-label">
                    Section Description
                </label>

                <textarea
                    name="content[description]"
                    class="pricing-input pricing-textarea"
                >{{ old('content.description', $content['description'] ?? '') }}</textarea>

            </div>

        </div>

    </div>


    {{-- =====================================================
         BILLING SETTINGS
    ====================================================== --}}

    <div class="pricing-card">

        <div class="pricing-card-header">

            <div class="pricing-section-number">
                02
            </div>

            <div>

                <h2 class="pricing-card-title">
                    Billing Toggle
                </h2>

                <p class="pricing-card-description">
                    Control the text displayed around the monthly and
                    yearly billing selector.
                </p>

            </div>

        </div>


        <div class="pricing-card-body">

            <div class="grid gap-5 md:grid-cols-2">

                <div>

                    <label class="pricing-label">
                        Monthly Label
                    </label>

                    <input
                        type="text"
                        name="content[billing][monthly_label]"
                        value="{{ old('content.billing.monthly_label', $content['billing']['monthly_label'] ?? '') }}"
                        class="pricing-input"
                    >

                </div>


                <div>

                    <label class="pricing-label">
                        Yearly Label
                    </label>

                    <input
                        type="text"
                        name="content[billing][yearly_label]"
                        value="{{ old('content.billing.yearly_label', $content['billing']['yearly_label'] ?? '') }}"
                        class="pricing-input"
                    >

                </div>


                <div>

                    <label class="pricing-label">
                        Save Badge
                    </label>

                    <input
                        type="text"
                        name="content[billing][save_badge]"
                        value="{{ old('content.billing.save_badge', $content['billing']['save_badge'] ?? '') }}"
                        class="pricing-input"
                    >

                </div>


                <div>

                    <label class="pricing-label">
                        Billing Information Text
                    </label>

                    <input
                        type="text"
                        name="content[billing][save_text]"
                        value="{{ old('content.billing.save_text', $content['billing']['save_text'] ?? '') }}"
                        class="pricing-input"
                    >

                </div>

            </div>


            <div class="pricing-info-tip mt-5">

                <svg class="h-4 w-4 shrink-0"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24">

                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 11v5"/>
                    <path d="M12 8h.01"/>

                </svg>

                The billing toggle itself remains controlled by the
                existing homepage JavaScript. This CMS controls its
                displayed labels and savings text.

            </div>

        </div>

    </div>


    {{-- =====================================================
         PRICING PLANS
    ====================================================== --}}

    <div class="pricing-card">

        <div class="pricing-card-header">

            <div class="pricing-section-number">
                03
            </div>

            <div>

                <h2 class="pricing-card-title">
                    Pricing Plans
                </h2>

                <p class="pricing-card-description">
                    Edit each pricing plan, its prices, statistics,
                    features, and call-to-action.
                </p>

            </div>

        </div>


        <div class="pricing-card-body">

            <div class="space-y-8">

                @foreach($plans as $index => $plan)

                    @php
                        $planNumber = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                        $isCustom = $plan['custom_price'] ?? false;
                    @endphp


                    <div class="pricing-plan">

                        {{-- PLAN HEADER --}}

                        <div class="pricing-plan-header">

                            <div class="flex items-center gap-3">

                                <div class="pricing-plan-number">
                                    {{ $planNumber }}
                                </div>

                                <div>

                                    <h3 class="text-sm font-bold text-slate-900">

                                        {{ $plan['name'] ?? 'Pricing Plan' }}

                                    </h3>

                                    <p class="mt-0.5 text-xs text-slate-500">

                                        Plan {{ $index + 1 }}

                                    </p>

                                </div>

                            </div>


                            <label class="pricing-popular-toggle">

                                <input
                                    type="hidden"
                                    name="content[plans][{{ $index }}][popular]"
                                    value="0"
                                >

                                <input
                                    type="checkbox"
                                    name="content[plans][{{ $index }}][popular]"
                                    value="1"
                                    class="pricing-checkbox"
                                    @checked($plan['popular'] ?? false)
                                >

                                <span>
                                    Most Popular
                                </span>

                            </label>

                        </div>


                        <div class="pricing-plan-body">


                            {{-- BASIC PLAN INFORMATION --}}

                            <div class="pricing-subheading">
                                <span></span>
                                Plan Information
                            </div>


                            <div class="mt-5 grid gap-5 lg:grid-cols-2">

                                <div>

                                    <label class="pricing-mini-label">
                                        Plan Name
                                    </label>

                                    <input
                                        type="text"
                                        name="content[plans][{{ $index }}][name]"
                                        value="{{ old("content.plans.$index.name", $plan['name'] ?? '') }}"
                                        class="pricing-input"
                                    >

                                </div>


                                <div>

                                    <label class="pricing-mini-label">
                                        Button Text
                                    </label>

                                    <input
                                        type="text"
                                        name="content[plans][{{ $index }}][button]"
                                        value="{{ old("content.plans.$index.button", $plan['button'] ?? '') }}"
                                        class="pricing-input"
                                    >

                                </div>

                            </div>


                            <div class="mt-5">

                                <label class="pricing-mini-label">
                                    Description
                                </label>

                                <textarea
                                    name="content[plans][{{ $index }}][description]"
                                    class="pricing-input pricing-small-textarea"
                                >{{ old("content.plans.$index.description", $plan['description'] ?? '') }}</textarea>

                            </div>


                            {{-- PRICING --}}

                            <div class="pricing-subheading mt-8">
                                <span></span>
                                Pricing
                            </div>


                            <div class="mt-5 grid gap-5 lg:grid-cols-3">

                                <div>

                                    <label class="pricing-mini-label">
                                        Monthly Price
                                    </label>

                                    <div class="pricing-input-prefix">

                                        <span>$</span>

                                        <input
                                            type="text"
                                            name="content[plans][{{ $index }}][prices][monthly]"
                                            value="{{ old("content.plans.$index.prices.monthly", $plan['prices']['monthly'] ?? '') }}"
                                            class="pricing-input pricing-no-border"
                                        >

                                    </div>

                                </div>


                                <div>

                                    <label class="pricing-mini-label">
                                        Yearly Price
                                    </label>

                                    <div class="pricing-input-prefix">

                                        <span>$</span>

                                        <input
                                            type="text"
                                            name="content[plans][{{ $index }}][prices][yearly]"
                                            value="{{ old("content.plans.$index.prices.yearly", $plan['prices']['yearly'] ?? '') }}"
                                            class="pricing-input pricing-no-border"
                                        >

                                    </div>

                                </div>


                                <div>

                                    <label class="pricing-mini-label">
                                        Custom Pricing
                                    </label>

                                    <label class="pricing-custom-toggle">

                                        <input
                                            type="hidden"
                                            name="content[plans][{{ $index }}][custom_price]"
                                            value="0"
                                        >

                                        <input
                                            type="checkbox"
                                            name="content[plans][{{ $index }}][custom_price]"
                                            value="1"
                                            class="pricing-checkbox"
                                            @checked($isCustom)
                                        >

                                        <span>
                                            Show "Custom"
                                        </span>

                                    </label>

                                </div>

                            </div>


                            {{-- FEATURE HEADING --}}

                            <div class="pricing-subheading mt-8">
                                <span></span>
                                Features
                            </div>


                            <div class="mt-5">

                                <label class="pricing-mini-label">
                                    Feature Heading
                                </label>

                                <input
                                    type="text"
                                    name="content[plans][{{ $index }}][feature_heading]"
                                    value="{{ old("content.plans.$index.feature_heading", $plan['feature_heading'] ?? '') }}"
                                    class="pricing-input"
                                >

                            </div>


                            <div class="mt-5">

                                <label class="pricing-mini-label">
                                    Feature List
                                </label>

                                <div class="space-y-3">

                                    @foreach(($plan['features'] ?? []) as $featureIndex => $feature)

                                        <div class="pricing-feature-row">

                                            <div class="pricing-feature-check">

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
                                                name="content[plans][{{ $index }}][features][{{ $featureIndex }}]"
                                                value="{{ old("content.plans.$index.features.$featureIndex", $feature) }}"
                                                class="pricing-input"
                                            >

                                        </div>

                                    @endforeach

                                </div>

                            </div>


                            {{-- STATISTICS --}}

                            <div class="pricing-subheading mt-8">
                                <span></span>
                                Plan Statistics
                            </div>


                            <div class="mt-5 space-y-4">

                                @foreach(($plan['stats'] ?? []) as $statIndex => $stat)

                                    <div class="pricing-stat">

                                        <div class="pricing-stat-number">

                                            {{ str_pad($statIndex + 1, 2, '0', STR_PAD_LEFT) }}

                                        </div>


                                        <div class="grid flex-1 gap-4 md:grid-cols-3">

                                            <div>

                                                <label class="pricing-mini-label">
                                                    Value
                                                </label>

                                                <input
                                                    type="text"
                                                    name="content[plans][{{ $index }}][stats][{{ $statIndex }}][value]"
                                                    value="{{ old("content.plans.$index.stats.$statIndex.value", $stat['value'] ?? '') }}"
                                                    class="pricing-input"
                                                >

                                            </div>


                                            <div>

                                                <label class="pricing-mini-label">
                                                    Label
                                                </label>

                                                <input
                                                    type="text"
                                                    name="content[plans][{{ $index }}][stats][{{ $statIndex }}][label]"
                                                    value="{{ old("content.plans.$index.stats.$statIndex.label", $stat['label'] ?? '') }}"
                                                    class="pricing-input"
                                                >

                                            </div>


                                            <div>

                                                <label class="pricing-mini-label">
                                                    Icon
                                                </label>

                                                <select
                                                    name="content[plans][{{ $index }}][stats][{{ $statIndex }}][icon]"
                                                    class="pricing-input"
                                                >

                                                    <option value="users"
                                                        @selected(($stat['icon'] ?? '') === 'users')>
                                                        Users
                                                    </option>

                                                    <option value="database"
                                                        @selected(($stat['icon'] ?? '') === 'database')>
                                                        Database
                                                    </option>

                                                    <option value="warehouse"
                                                        @selected(($stat['icon'] ?? '') === 'warehouse')>
                                                        Warehouse
                                                    </option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

                            </div>


                            {{-- PLAN PREVIEW SUMMARY --}}

                            <div class="pricing-plan-tip">

                                <svg class="h-4 w-4 shrink-0"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    viewBox="0 0 24 24">

                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 11v5"/>
                                    <path d="M12 8h.01"/>

                                </svg>

                                This plan currently contains
                                {{ count($plan['features'] ?? []) }}
                                feature{{ count($plan['features'] ?? []) === 1 ? '' : 's' }}
                                and
                                {{ count($plan['stats'] ?? []) }}
                                statistic{{ count($plan['stats'] ?? []) === 1 ? '' : 's' }}.

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>


    {{-- =====================================================
         SAVE BAR
    ====================================================== --}}

    <div class="pricing-save-bar">

        <div>

            <p class="text-sm font-semibold text-slate-800">
                Pricing changes
            </p>

            <p class="mt-0.5 text-xs text-slate-500">
                Save your changes when you are finished editing.
            </p>

        </div>


        <div class="flex items-center gap-3">

            <a href="{{ route('admin.home') }}"
                class="pricing-cancel-button">

                Cancel

            </a>


            <button type="submit"
                class="pricing-save-button">

                <svg class="h-4 w-4"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">

                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z"/>
                    <path d="M17 21v-8H7v8M7 3v5h8"/>

                </svg>

                Save Pricing

            </button>

        </div>

    </div>

</form>
```

</div>

<style>

.pricing-editor {
    max-width: 1180px;
    margin: 0 auto;
    padding: 8px 0 60px;
}

.pricing-editor-header {
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
    box-shadow: 0 20px 45px rgba(15,23,42,.14);
}

.pricing-header-glow {
    position: absolute;
    width: 320px;
    height: 320px;
    right: -140px;
    top: -180px;
    border-radius: 999px;
    background: rgba(59,130,246,.14);
    filter: blur(10px);
}

.pricing-page-icon {
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

.pricing-status-badge {
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

.pricing-status-badge::before {
    content: "";
    width: 6px;
    height: 6px;
    border-radius: 999px;
    background: #4ade80;
    box-shadow: 0 0 8px rgba(74,222,128,.7);
}

.pricing-back-button {
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

.pricing-back-button:hover {
    background: rgba(255,255,255,.1);
    color: white;
}

.pricing-alert {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 15px 17px;
    margin-bottom: 20px;
    border-radius: 14px;
    font-size: 12px;
}

.pricing-alert-success {
    color: #166534;
    background: #f0fdf4;
    border: 1px solid #bbf7d0;
}

.pricing-alert-error {
    color: #991b1b;
    background: #fef2f2;
    border: 1px solid #fecaca;
}

.pricing-alert-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    flex-shrink: 0;
    border-radius: 9px;
    background: rgba(255,255,255,.65);
}

.pricing-card {
    overflow: hidden;
    margin-bottom: 24px;
    border: 1px solid #e5eaf1;
    border-radius: 20px;
    background: #fff;
    box-shadow:
        0 2px 4px rgba(15,23,42,.02),
        0 12px 30px rgba(15,23,42,.04);
}

.pricing-card-header {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 22px 24px;
    border-bottom: 1px solid #eef2f7;
    background: linear-gradient(to right, #fff, #fbfdff);
}

.pricing-section-number {
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

.pricing-card-title {
    color: #0f172a;
    font-size: 16px;
    font-weight: 700;
}

.pricing-card-description {
    margin-top: 3px;
    color: #64748b;
    font-size: 12px;
    line-height: 1.6;
}

.pricing-card-body {
    padding: 26px 24px;
}

.pricing-label {
    display: block;
    margin-bottom: 8px;
    color: #334155;
    font-size: 12px;
    font-weight: 700;
}

.pricing-mini-label {
    display: block;
    margin-bottom: 7px;
    color: #64748b;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .05em;
}

.pricing-input {
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

.pricing-input:hover {
    border-color: #cbd5e1;
}

.pricing-input:focus {
    border-color: #60a5fa;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(59,130,246,.09);
}

.pricing-input::placeholder {
    color: #b0bac7;
}

.pricing-textarea {
    resize: vertical;
    min-height: 105px;
    line-height: 1.6;
}

.pricing-small-textarea {
    resize: vertical;
    min-height: 80px;
    line-height: 1.55;
}

.pricing-highlight-input {
    border-color: #bfdbfe;
    background: #f8fbff;
}

.pricing-subheading {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #334155;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .06em;
}

.pricing-subheading span {
    width: 6px;
    height: 6px;
    border-radius: 999px;
    background: #3b82f6;
}

.pricing-info-tip,
.pricing-plan-tip {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    padding: 12px 14px;
    border-radius: 10px;
    color: #64748b;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    font-size: 11px;
    line-height: 1.55;
}

.pricing-plan {
    overflow: hidden;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    background: #fff;
}

.pricing-plan-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 17px 18px;
    border-bottom: 1px solid #eef2f7;
    background: #f8fafc;
}

.pricing-plan-number {
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

.pricing-plan-body {
    padding: 24px;
}

.pricing-popular-toggle,
.pricing-custom-toggle {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #475569;
    font-size: 11px;
    font-weight: 700;
    cursor: pointer;
}

.pricing-checkbox {
    width: 16px;
    height: 16px;
    accent-color: #2563eb;
}

.pricing-input-prefix {
    display: flex;
    align-items: center;
    min-height: 44px;
    overflow: hidden;
    border: 1px solid #dbe2ea;
    border-radius: 10px;
    background: #fff;
}

.pricing-input-prefix:focus-within {
    border-color: #60a5fa;
    box-shadow: 0 0 0 4px rgba(59,130,246,.09);
}

.pricing-input-prefix > span {
    padding-left: 13px;
    color: #64748b;
    font-size: 13px;
    font-weight: 700;
}

.pricing-no-border {
    min-height: 42px;
    border: 0;
    box-shadow: none !important;
}

.pricing-feature-row {
    display: flex;
    align-items: center;
    gap: 10px;
}

.pricing-feature-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 24px;
    height: 24px;
    flex-shrink: 0;
    border-radius: 999px;
    color: #10b981;
    background: #ecfdf5;
    border: 1px solid #d1fae5;
}

.pricing-stat {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 15px;
    border: 1px solid #e2e8f0;
    border-radius: 13px;
    background: #f8fafc;
}

.pricing-stat-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    flex-shrink: 0;
    border-radius: 9px;
    color: #2563eb;
    background: #eff6ff;
    border: 1px solid #dbeafe;
    font-size: 9px;
    font-weight: 800;
}

.pricing-save-bar {
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

.pricing-cancel-button {
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

.pricing-cancel-button:hover {
    background: #f8fafc;
}

.pricing-save-button {
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

.pricing-save-button:hover {
    background: #1d4ed8;
    transform: translateY(-1px);
    box-shadow: 0 10px 25px rgba(37,99,235,.25);
}

@media (max-width: 640px) {

    .pricing-editor-header {
        padding: 24px;
        border-radius: 20px;
    }

    .pricing-card-header {
        padding: 18px;
    }

    .pricing-card-body {
        padding: 20px 18px;
    }

    .pricing-plan-body {
        padding: 18px;
    }

    .pricing-plan-header {
        align-items: flex-start;
    }

    .pricing-save-bar {
        align-items: stretch;
        flex-direction: column;
    }

    .pricing-save-bar > div:last-child {
        width: 100%;
    }

    .pricing-cancel-button,
    .pricing-save-button {
        flex: 1;
    }

}

</style>

@endsection
