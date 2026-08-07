@extends('frontend.layouts.app')

@section('title','USA Trademark Expert')

@section('description', 'Protect your brand with USA Trademark Expert. We provide professional trademark search, filing, registration, monitoring, and legal support to help secure your intellectual property in the United States.')

@section('content')

@include('frontend.sections.about-hero')

@include('frontend.sections.company-history')

@include('frontend.sections.services-section')

@include('frontend.sections.extension')

@include('frontend.sections.cta-banner',[
    'icon' => 'fa-solid fa-link',
    'badge' => 'BEST AND FAIR PRICING',
    'title' => 'Simple, Transparent Legal Pricing',
    'description' => 'Clear, upfront costs with no hidden fees. Choose the level of protection that fits your business needs.',
    'primaryButtonText' => 'Get Started',
    'primaryButtonUrl' => route('contact'),
    'secondaryButtonText' => 'Learn More',
    'secondaryButtonUrl' => route('home')
])

@include('frontend.sections.services')
 
@endsection