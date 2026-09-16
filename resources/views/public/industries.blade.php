@extends('layouts.public')
@section('title','StockCore')
@section('content')
<main>
{{-- <h1>Hello this is industries page. </h1>
 --}}
    @include('public.industries.hero')
    @include('public.industries.industry-card-section')
    @include('public.industries.capabilities')
    @include('public.industries.customer_proof')
    @include('public.industries.cta')
    {{-- @include('public.industries.clarification') --}}
</main>
@endsection