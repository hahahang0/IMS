@extends('layouts.auth')

@section('title', 'Admin Login')

@section('heading', 'Admin Login')

@section('description', 'Sign in to access the StockCore administration panel')


@section('auth-content')

<form
    method="POST"
    action="{{ route('admin.login') }}"
    class="space-y-6"
>

    @csrf


    {{-- Email --}}
    <div>

        <label
            for="email"
            class="block text-sm font-medium text-gray-700 mb-2"
        >
            Email Address
        </label>

        <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            autofocus
            autocomplete="email"
            class="w-full rounded-lg border border-gray-300 px-4 py-3
                   focus:border-gray-500 focus:ring-2 focus:ring-gray-200
                   outline-none transition"
        >

    </div>


    {{-- Password --}}
    <div>

        <label
            for="password"
            class="block text-sm font-medium text-gray-700 mb-2"
        >
            Password
        </label>

        <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            class="w-full rounded-lg border border-gray-300 px-4 py-3
                   focus:border-gray-500 focus:ring-2 focus:ring-gray-200
                   outline-none transition"
        >

    </div>


    {{-- Remember Me --}}
    <div class="flex items-center">

        <input
            id="remember"
            type="checkbox"
            name="remember"
            class="h-4 w-4 rounded border-gray-300"
        >

        <label
            for="remember"
            class="ml-2 text-sm text-gray-600"
        >
            Remember me
        </label>

    </div>


    {{-- Submit --}}
    <button
        type="submit"
        class="w-full rounded-lg bg-gray-900 px-4 py-3
               text-sm font-semibold text-white
               hover:bg-gray-800 transition"
    >
        Sign In
    </button>

</form>

@endsection