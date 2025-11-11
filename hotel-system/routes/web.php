<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

Route::get('/', [pagesController::class, 'home'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('about', [pagesController::class,'about'])->name('about');

Route::get('contact', [pagesController::class,'contact'])->name('contact');

Route::get('room',[pagesController::class,'room'])->name('room');

Route::get('rooms', [pagesController::class,'rooms'])->name('rooms');

Route::get('checkout', [pagesController::class,'checkout'])->name('checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
