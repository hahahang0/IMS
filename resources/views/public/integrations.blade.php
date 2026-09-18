@extends('layouts.public')
@section('title','StockCore')
@section('content')
<main>
{{-- <h1>Hello this is faq page. </h1>
 --}}
    @include('public.integrations.hero')
    @include('public.integrations.grid')
    @include('public.integrations.how-help')
    @include('public.integrations.customer-success')
    @include('public.integrations.support-cta')

 

</main>
@endsection