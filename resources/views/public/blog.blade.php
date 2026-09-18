@extends('layouts.public')
@section('title','StockCore')
@section('content')
<main>
{{-- <h1>Hello this is industries page. </h1>
 --}}
    @include('public.blog.hero')
    @include('public.blog.articles')
    @include('public.blog.blog-newsletter')


</main>
@endsection