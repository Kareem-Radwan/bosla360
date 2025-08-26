<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PersonalityTestController;
use App\Http\Controllers\AboutController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'brief'])->name('about');
Route::get('/who', [PageController::class, 'who'])->name('who');
Route::get('/programs', [PageController::class, 'programs'])->name('programs');
Route::get('/personality', [PageController::class, 'personality'])->name('personality');
Route::post('/personality/result', [PageController::class, 'personalityResult'])->name('personality.result');
Route::get('/success-stories', [PageController::class, 'success'])->name('success');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/personality', [PersonalityTestController::class, 'submit'])->name('personality.submit');
Route::get('/personality/results', [PersonalityTestController::class, 'results'])->name('personality.results');

Route::get('/about/story', [AboutController::class, 'story'])->name('about.story');
Route::get('/about/brief', [AboutController::class, 'brief'])->name('about.brief');

// Language switcher
Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        $locale = config('app.locale');
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');
