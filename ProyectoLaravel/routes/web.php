<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact_process', function () {
    return view('contact_process');
})->name('contact_process');

Route::get('/elements', function () {
    return view('elements');
})->name('elements');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/services', function () {
    return view('services');
})->name('services');

