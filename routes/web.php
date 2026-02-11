<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [FrontendController::class, 'index'])->name('front.home');
Route::get('/contact-contact', [FrontendController::class, 'contact'])->name('front.contact');
Route::get('/about-about-web', [FrontendController::class, 'about'])->name('front.about');
Route::get('task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('task', [TaskController::class, 'store'])->name('task.store');
Route::get('task', [TaskController::class, 'index'])->name('task.index');