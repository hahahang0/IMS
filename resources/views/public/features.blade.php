@extends('layouts.public')
@section('title', 'StockCore')
@section('content')
    <main>
        {{-- <h1>Hello this is industries page. </h1>
 --}}
        @include('public.features.hero')
        @include('public.features.all-features')
        @include('public.features.final-cta')
        {{-- @include('public.features.landing-cost')
        @include('public.features.scan-import')
        @include('public.features.serial-expiry-tracking')
        @include('public.features.fifo')
        @include('public.features.packeting') --}}




    </main>
@endsection
