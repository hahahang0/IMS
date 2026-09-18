@extends('layouts.public')
@section('title', 'StockCore')
@section('content')
    <main>
        {{-- <h1>Hello this is industries page. </h1>
 --}}
        @include('public.demo.hero')
        @include('public.demo.booking')
        @include('public.demo.process')
        @include('public.demo.why-demo')
        @include('public.demo.final-cta')




    </main>
@endsection
