<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contact_process', function () {
    return view('contact_process');
})->name('contact_process');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/suegra', function () {
    return view('suegra');
})->name('suegra');

Route::get('/corona', function () {
    return view('corona');
})->name('corona');

Route::get('/palo', function () {
    return view('palo');
})->name('palo');

Route::get('/aloe', function () {
    return view('aloe');
})->name('aloe');

Route::get('/coleo', function () {
    return view('coleo');
})->name('coleo');

Route::get('/croton', function () {
    return view('croton');
})->name('croton');