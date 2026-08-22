@extends('public.layouts.app')
@section('title','StockCore')
@section('content')
<main>
   @include('public.home.hero')
   @include('public.home.trust')
   @include('public.home.feature')
   {{-- @include('public.home.how-it-works') --}}
   @include('public.home.how-it-works2')
   @include('public.home.use-cases')
   @include('public.home.pricing')
   @include('public.home.testinomials')
   @include('public.home.cta')
</main>
@endsection