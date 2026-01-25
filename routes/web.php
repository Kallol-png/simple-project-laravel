<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [FrontendController::class, 'index'])->name('front.home');
Route::get('/contact-contact', [FrontendController::class, 'contact'])->name('front.contact');
Route::get('/about-about-web', [FrontendController::class, 'about'])->name('front.about');