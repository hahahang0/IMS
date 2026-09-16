@extends('layouts.public')
@section('title','StockCore')
@section('content')
<main>
{{-- <h1>Hello this is industries page. </h1>
 --}}
    @include('public.about_us.hero')
    @include('public.about_us.story')
    @include('public.about_us.stats')
    @include('public.about_us.philosophy')
    @include('public.about_us.team')
    @include('public.about_us.values')
    @include('public.about_us.footer')
    @include('public.about_us.cta')


</main>
@endsection