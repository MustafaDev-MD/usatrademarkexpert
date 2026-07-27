<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

// Route::view('/', 'welcome')->name('home');

Route::controller(FrontendController::class)->group(function () {

    // Main Pages
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    // Route::get('/services', 'services')->name('services');
    Route::get('/faqs', 'faqs')->name('faqs');
    Route::get('/resources', 'resources')->name('resources');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/single-blog', 'singleBlog')->name('single-blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
    Route::get('/our-team', 'ourTeam')->name('our-team');

    // All Service Pages
    Route::get('/services/{slug}', 'service')->name('service');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
