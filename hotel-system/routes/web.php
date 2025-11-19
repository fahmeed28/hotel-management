<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\roomsController;

// For public Routes 

Route::get('/', [pagesController::class, 'home'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('about', [pagesController::class,'about'])->name('about');

Route::get('contact', [pagesController::class,'contact'])->name('contact');

Route::get('room',[pagesController::class,'room'])->name('room');

Route::get('rooms', [pagesController::class,'rooms'])->name('rooms');

Route::get('checkout', [pagesController::class,'checkout'])->name('checkout');

// ForAuth Functionlity

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes only, with the help of Prefix
Route::prefix('admin')->group(function(){

Route::get('dashboard',[adminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('analytics',[adminController::class, 'analytics'])->name('admin.analytics');

Route::resource('rooms',roomsController::class);

Route::get('settings',[adminController::class, 'settings'])->name('admin.settings');

Route::get('users',[adminController::class, 'users'])->name('admin.users');

});



