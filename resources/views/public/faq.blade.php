@extends('layouts.public')
@section('title','StockCore')
@section('content')
<main>
{{-- <h1>Hello this is faq page. </h1>
 --}}
    @include('public.faq.hero')
    @include('public.faq.faq')
    @include('public.faq.support-section')
 

</main>
@endsection