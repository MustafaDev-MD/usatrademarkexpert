@extends('frontend.layouts.app')

@section('title','USA Trademark Expert')

@section('description', 'Protect your brand with USA Trademark Expert. We provide professional trademark search, filing, registration, monitoring, and legal support to help secure your intellectual property in the United States.')

@section('content')

@include('frontend.sections.hero')

@include('frontend.sections.features')

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
                '1-on-1 Attorney Consultation: Speak directly with a licensed trademark lawyer in a focused 15-minute session to resolve specific questions and outline your filing strategy.',
                'Cease & Desist Safeguards: Enforceable legal documents to act quickly against brand infringement.',
            ],
            'active' => true,
            'badge' => 'ENHANCED PROTECTION',
            'button' => 'Choose Standard'
        ],

        [
            'title' => 'Premium Package',
            'price' => 539,
            'description' => 'Priority rush filing paired with continuous brand monitoring.',
            'features' => [
                '1-Hour Attorney Session: In-depth legal planning with a trademark lawyer.',
                '48-Hour Priority Processing: Fast-track filing to secure your official USPTO date immediately.',
                'Infringement Alerts: Ongoing monitoring to protect your registered mark from copycats.',
            ],
            'active' => false,
            'button' => 'Choose Premium'
        ],

    ]
])

@include('frontend.sections.trustpilot')

@include('frontend.sections.services')

@include('frontend.sections.contact')

@include('frontend.sections.popup-form')
 
@endsection