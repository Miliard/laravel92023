<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contacto')->name('contact');