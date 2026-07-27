@extends('frontend.layouts.app')

@section('title','USA Trademark Expert')

@section('description', 'Protect your brand with USA Trademark Expert. We provide professional trademark search, filing, registration, monitoring, and legal support to help secure your intellectual property in the United States.')

@section('content')

@include('frontend.sections.service-hero')

@include('frontend.sections.process')

@include('frontend.sections.extension')

@include('frontend.sections.pricing',[
    'pricingTitle' => 'Clear Packages, Complete Protection',

    'pricingDescription' => 'Choose the level of legal support and filing expertise that matches your business goals.',

    'pricingPackages' => [

        [
            'title' => 'Basic Package',
            'price' => 49,
            'description' => 'Straightforward filing tools to get your application officially submitted.',
            'features' => [
                'Federal Database Direct-Hit Search:
                 We scan the USPTO registry to check your mark’s availability and flag immediate conflicts.',
                'Custom Legal Classification:
                 Our team reviews the USPTO ID manual to precisely categorize your goods and services for maximum protection.',
            ],
            'active' => false,
            'button' => 'Choose Basic'
        ],

        [
            'title' => 'Standard Package',
            'price' => 299,
            'description' => 'Step up to dedicated legal guidance and brand enforcement tools.',
            'features' => [
                '1-on-1 Attorney Consultation:
                 Speak directly with a trademark lawyer during a focused 15-minute session to address your specific brand questions.',
                'Cease & Desist Safeguards:
                 Receive formal documentation to take immediate action if another business attempts to infringe on your name.',
            ],
            'active' => true,
            'badge' => 'ENHANCED PROTECTION',
            'button' => 'Choose Standard'
        ],

        [
            'title' => 'Premium Package',
            'price' => 539,
            'description' => 'The gold standard for rapid filing and long-term brand monitoring.',
            'features' => [
                'Comprehensive Strategy Session:
                 An extended 1-hour consultation with a trademark attorney for deep-dive legal planning.',
                '48-Hour Priority Rush Processing:
                 Fast-track your application structure to lock in your official filing date as quickly as possible.',
                'Continuous Infringement Monitoring:
                 alerts to safeguard your registered mark from copycats (free trial included).',
            ],
            'active' => false,
            'button' => 'Choose Premium'
        ],

    ]
])

@include('frontend.sections.authority')

@include('frontend.sections.testimonial')

@include('frontend.sections.contact-faq-section')
 
@endsection