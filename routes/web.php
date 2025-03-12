<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*
 * The routes about tasks
 */
Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');

