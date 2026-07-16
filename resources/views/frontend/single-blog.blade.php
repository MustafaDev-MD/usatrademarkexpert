@extends('frontend.layouts.app')

@section('title','USA Trademark Expert')

@section('description', 'Protect your brand with USA Trademark Expert. We provide professional trademark search, filing, registration, monitoring, and legal support to help secure your intellectual property in the United States.')

@section('content')

@include('frontend.sections.single-blog-header')

@include('frontend.sections.single-blog-body')

@include('frontend.sections.single-blog-highlight')

@include('frontend.sections.single-blog-text')

@include('frontend.sections.blog-posts', [
    'showFilter' => false,
    'title' => 'Explore More Topics'
])
 
@endsection