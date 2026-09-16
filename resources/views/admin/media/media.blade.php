@extends('layouts.admin')

@section('title', 'Media Library')

@section('page-heading', 'Media Library')

@section('page-description', 'Manage your images, animations, and other website media.')

@section('admin-content')

<div class="space-y-8">

    {{-- HEADER --}}
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

        <div>
            <div class="flex items-center gap-3">
                <h2 class="text-2xl font-bold tracking-tight text-slate-900">
                    Media Library
                </h2>

                <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                    {{ $media->count() }} files
                </span>
            </div>

            <p class="mt-1 text-sm text-slate-500">
                Upload and manage media used throughout your website.
            </p>
        </div>

        <button
            type="button"
            onclick="document.getElementById('upload-modal').classList.remove('hidden')"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">

            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 16V4m0 0-4 4m4-4 4 4M5 20h14" />
            </svg>

            Upload Lottie
        </button>

    </div>


    {{-- INFO --}}
    <div class="rounded-2xl border border-blue-100 bg-blue-50/60 p-5">

        <div class="flex gap-4">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-100 text-blue-600">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13 16h-1v-4h-1m1-4h.01M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20Z" />
                </svg>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-blue-900">
                    Lottie Animations
                </h3>

                <p class="mt-1 text-sm leading-6 text-blue-700">
                    Upload your Lottie JSON animations here. Once uploaded,
                    they can be assigned to homepage features and reused
                    throughout StockCore.
                </p>
            </div>

        </div>

    </div>


    {{-- MEDIA GRID --}}
    @if($media->isEmpty())

        <div class="rounded-2xl border border-dashed border-slate-300 bg-white px-6 py-20 text-center">

            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-100">

                <svg class="h-8 w-8 text-slate-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.7">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M7 3h10a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z" />

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 8h8M8 12h8M8 16h5" />

                </svg>

            </div>

            <h3 class="mt-5 text-base font-semibold text-slate-900">
                No media uploaded yet
            </h3>

            <p class="mx-auto mt-2 max-w-md text-sm text-slate-500">
                Upload your first Lottie animation to start building your
                reusable media library.
            </p>

            <button
                type="button"
                onclick="document.getElementById('upload-modal').classList.remove('hidden')"
                class="mt-6 inline-flex items-center gap-2 rounded-xl bg-primary-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-primary-700">

                Upload Animation

            </button>

        </div>

    @else

        <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-3">

            @foreach($media as $item)

                <div class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-lg">

                    {{-- PREVIEW --}}
                    <div class="relative flex h-56 items-center justify-center overflow-hidden bg-slate-50">

                        <div class="absolute inset-0 opacity-40"
                            style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 18px 18px;">
                        </div>

                        <dotlottie-wc
                            src="{{ asset('storage/' . $item->file_path) }}"
                            autoplay
                            loop
                            class="relative z-10 h-32 w-32">
                        </dotlottie-wc>

                        <div class="absolute left-4 top-4 z-20 rounded-full bg-white/90 px-2.5 py-1 text-[11px] font-bold uppercase tracking-wider text-slate-500 shadow-sm backdrop-blur">
                            Lottie
                        </div>

                    </div>


                    {{-- DETAILS --}}
                    <div class="p-5">

                        <div class="flex items-start justify-between gap-3">

                            <div class="min-w-0">

                                <h3 class="truncate text-sm font-bold text-slate-900">
                                    {{ $item->name }}
                                </h3>

                                <p class="mt-1 truncate text-xs text-slate-500">
                                    {{ $item->file_name }}
                                </p>

                            </div>

                            <span class="shrink-0 rounded-lg bg-emerald-50 px-2 py-1 text-[10px] font-bold uppercase tracking-wide text-emerald-600">
                                Active
                            </span>

                        </div>


                        <div class="mt-4 flex items-center justify-between border-t border-slate-100 pt-4">

                            <div class="text-xs text-slate-400">
                                @if($item->file_size)
                                    {{ number_format($item->file_size / 1024, 1) }} KB
                                @else
                                    —
                                @endif
                            </div>


                            <form
                                action="{{ route('admin.media.destroy', $item) }}"
                                method="POST"
                                onsubmit="return confirm('Delete this animation? Any feature using it may lose its animation.')">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="inline-flex items-center gap-1.5 rounded-lg px-2.5 py-1.5 text-xs font-semibold text-red-500 transition hover:bg-red-50 hover:text-red-600">

                                    <svg class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M6 7h12M10 11v6M14 11v6M9 7V4h6v3m-8 0 1 13h8l1-13" />

                                    </svg>

                                    Delete

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</div>


{{-- UPLOAD MODAL --}}
<div
    id="upload-modal"
    class="fixed inset-0 z-50 hidden">

    {{-- BACKDROP --}}
    <div
        class="absolute inset-0 bg-slate-950/50 backdrop-blur-sm"
        onclick="document.getElementById('upload-modal').classList.add('hidden')">
    </div>


    {{-- MODAL --}}
    <div class="relative flex min-h-full items-center justify-center p-4">

        <div class="w-full max-w-lg overflow-hidden rounded-2xl bg-white shadow-2xl">

            {{-- MODAL HEADER --}}
            <div class="flex items-center justify-between border-b border-slate-200 px-6 py-5">

                <div>
                    <h2 class="text-lg font-bold text-slate-900">
                        Upload Lottie Animation
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Add a JSON animation to your media library.
                    </p>
                </div>

                <button
                    type="button"
                    onclick="document.getElementById('upload-modal').classList.add('hidden')"
                    class="flex h-9 w-9 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">

                    <svg class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>


            {{-- FORM --}}
            <form
                action="{{ route('admin.media.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="space-y-6 p-6">

                @csrf


                {{-- NAME --}}
                <div>

                    <label class="mb-2 block text-sm font-semibold text-slate-700">
                        Animation Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="e.g. Calculator Animation"
                        class="block w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-2 focus:ring-primary-100">

                    <p class="mt-1.5 text-xs text-slate-400">
                        Leave blank to use the filename.
                    </p>

                </div>


                {{-- FILE --}}
                <div>

                    <label class="mb-2 block text-sm font-semibold text-slate-700">
                        Lottie JSON File
                    </label>

                    <label class="flex cursor-pointer flex-col items-center justify-center rounded-xl border-2 border-dashed border-slate-300 bg-slate-50 px-6 py-10 text-center transition hover:border-primary-400 hover:bg-primary-50">

                        <svg class="h-10 w-10 text-slate-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 16V4m0 0-4 4m4-4 4 4M5 20h14" />

                        </svg>

                        <span class="mt-3 text-sm font-semibold text-slate-700">
                            Choose Lottie JSON
                        </span>

                        <span id="file-name"
                            class="mt-1 text-xs text-slate-400">
                            Maximum file size: 10 MB
                        </span>

                        <input
                            type="file"
                            name="file"
                            accept=".json,application/json"
                            required
                            class="hidden"
                            onchange="showSelectedFile(this)">

                    </label>

                </div>


                {{-- ACTIONS --}}
                <div class="flex justify-end gap-3 border-t border-slate-100 pt-5">

                    <button
                        type="button"
                        onclick="document.getElementById('upload-modal').classList.add('hidden')"
                        class="rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50">

                        Cancel

                    </button>

                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 rounded-xl bg-primary-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-700">

                        <svg class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 16V4m0 0-4 4m4-4 4 4" />

                        </svg>

                        Upload

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


{{-- LOTTIE WEB COMPONENT --}}
<script
    src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js"
    type="module">
</script>


<script>
    function showSelectedFile(input) {

        const fileName = document.getElementById('file-name');

        if (input.files && input.files.length > 0) {
            fileName.textContent = input.files[0].name;
        } else {
            fileName.textContent = 'Maximum file size: 10 MB';
        }
    }
</script>

@endsection