<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;




Route::view('/', 'welcome')->name('home');
Route::get('/blog', [PostController::class, 'index'])->name('blog');


Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contacto')->name('contact');
