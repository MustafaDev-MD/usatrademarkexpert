<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');

Route::view('/', 'frontend.home')->name('home');

Route::view('/about', 'frontend.about')->name('about');

Route::view('/services', 'frontend.services')->name('services');

Route::view('/faqs', 'frontend.faqs')->name('faqs');

Route::view('/resources', 'frontend.resources')->name('resources');

Route::view('/blog', 'frontend.blog')->name('blog');

Route::view('/single-blog', 'frontend.single-blog')->name('single-blog');

Route::view('/contact', 'frontend.contact')->name('contact');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
