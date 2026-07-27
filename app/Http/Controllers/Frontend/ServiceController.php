<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function trademarkRegistration()
    {
        return view('frontend.services.trademark-registration', [

            'heroTitle' => 'Federal Trademark Registration',

            'heroDescription' => 'Protect your brand...',

            'heroFeatures' => [
                '...',
                '...',
                '...',
            ],

            'pricingPackages' => [
                // ...
            ],

            'testimonials' => [
                // ...
            ],

            'faqs' => [
                // ...
            ],

        ]);
    }

    public function trademarkMonitoring()
    {
        return view('frontend.services.trademark-monitoring', [
            // data
        ]);
    }

    // baaki methods
}
