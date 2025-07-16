<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache-now', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return '✔ All Laravel caches cleared!';
});

// Redirect '/' to default locale
Route::get('/', function () {
    // return 'Laravel is running!';
    return redirect('/' . app()->getLocale());
});

// Redirect things like '/about' → '/en/about' if no locale present
Route::get('{any}', function ($any) {
    return redirect('/' . app()->getLocale() . '/' . $any);
})->where('any', '^(?!en|fr).*$');

// ✅ Route group for /en/... and /fr/... with both middleware sets
Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => 'en|fr'],
    'middleware' => ['web', \App\Http\Middleware\SetLocale::class], // ✅ attach both
], function () {
    Route::get('/', fn() => view('home'))->name('home');
    Route::get('/about', fn() => view('about'))->name('about');
    Route::get('/skills', fn() => view('skills'))->name('skills');
    Route::get('/projects', fn() => view('projects'))->name('projects');
    // Route::get('/publications', fn() => view('publications'))->name('publications');
    Route::get('/certifications', fn() => view('certifications'))->name('certifications');
    Route::get('/contact', fn() => view('contact'))->name('contact');
});