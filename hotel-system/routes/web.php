<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('contact', function(){
    return view('contact');
})->name('contact');

Route::get('room',function(){
    return view('room');
})->name('room');

Route::get('rooms', function(){
    return view(('rooms'));
})->name('rooms');

Route::get('checkout', function(){
    return view('checkout');
})->name('checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
