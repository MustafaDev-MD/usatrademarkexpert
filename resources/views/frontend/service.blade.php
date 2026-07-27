@extends('frontend.layouts.app')

@section('title', $metaTitle ?? 'USA Trademark Expert')

@section('description', $metaDescription ?? 'Protect your brand with USA Trademark Expert.')

@section('content')

@include('frontend.sections.service-hero')

@include('frontend.sections.process')

@include('frontend.sections.extension')

@include('frontend.sections.pricing')

@include('frontend.sections.authority')

@include('frontend.sections.testimonial')

@include('frontend.sections.contact-faq-section')
 
@endsection