@extends('frontend.layouts.app')

@section('title','USA Trademark Expert')

@section('description', 'Protect your brand with USA Trademark Expert. We provide professional trademark search, filing, registration, monitoring, and legal support to help secure your intellectual property in the United States.')

@section('content')

@include('frontend.sections.blog-hero',[
    'title' => 'Intellectual Property FAQs',
    'description' => 'Expert guidance on safeguarding your business assets—from brand names and logos to original creative content.'
])

@include('frontend.sections.faq-section')

@include('frontend.sections.cta-banner')
 
@endsection