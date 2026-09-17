@extends('layouts.public')
@section('title','StockCore')
@section('content')
<main>
{{-- <h1>Hello this is industries page. </h1>
 --}}
    @include('public.pricing.hero')
    @include('public.pricing.pricing_plan')
    @include('public.pricing.feature_comparison')
    @include('public.pricing.faq')
    @include('public.pricing.cta')
  

</main>
@endsection