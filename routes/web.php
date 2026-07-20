<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');

Route::view('/', 'frontend.home')->name('home');

Route::view('/about', 'frontend.about')->name('about');

Route::view('/services', 'frontend.services')->name('services');

Route::view('/services/trademark-registration', 'frontend.services.trademark-registration')->name('trademark-registration');

Route::view('/services/trademark-monitoring', 'frontend.services.trademark-monitoring')->name('trademark-monitoring');

Route::view('/services/trademark-renewal', 'frontend.services.trademark-renewal')->name('trademark-renewal');

Route::view('/services/office-action-response', 'frontend.services.office-action-response')->name('office-action-response');

Route::view('/services/filing-an-extension', 'frontend.services.filing-an-extension')->name('filing-an-extension');

Route::view('/services/comprehensive-trademark-search', 'frontend.services.comprehensive-trademark-search')->name('comprehensive-trademark-search');

Route::view('/services/copyright-registration', 'frontend.services.copyright-registration')->name('copyright-registration');

Route::view('/services/trademark-search', 'frontend.services.trademark-search')->name('trademark-search');

Route::view('/services/statement-of-use', 'frontend.services.statement-of-use')->name('statement-of-use');

Route::view('/services/dmca-takedown', 'frontend.services.dmca-takedown')->name('dmca-takedown');

Route::view('/faqs', 'frontend.faqs')->name('faqs');

Route::view('/resources', 'frontend.resources')->name('resources');

Route::view('/blog', 'frontend.blog')->name('blog');

Route::view('/single-blog', 'frontend.single-blog')->name('single-blog');

Route::view('/contact', 'frontend.contact')->name('contact');

Route::view('/privacy-policy', 'frontend.privacy-policy')->name('privacy-policy');

Route::view('/our-team', 'frontend.our-team')->name('our-team');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
