@extends('layouts.layout')

@section('content')
    
    @include('includes.carousel')

    @include('includes.category')

    @include('includes.popular')

    @include('includes.trending')
 
    @include('includes.testimonials')

    @include('includes.blogs')

    @include('includes.newsletter')

@endsection