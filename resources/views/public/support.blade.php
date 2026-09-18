@extends('layouts.public')
@section('title', 'StockCore')
@section('content')
    <main>
        {{-- <h1>Hello this is industries page. </h1>
 --}}
        @include('public.support.hero')
        @include('public.support.feature-modules')
        @include('public.support.popular-help')
        @include('public.support.leave-message')
        @include('public.support.helpful-resources')
      




    </main>
@endsection
