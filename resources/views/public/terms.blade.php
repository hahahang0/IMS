@extends('layouts.public')
@section('title','StockCore')
@section('content')
<main>
{{-- <h1>Hello this is industries page. </h1>
 --}}
    @include('public.terms.hero')
    @include('public.terms.content')
    @include('public.terms.legal-cta')



</main>
@endsection