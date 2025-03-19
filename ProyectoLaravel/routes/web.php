<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerfilController; // Asegúrate de importar esto

Route::get('/', function () {
    return redirect()->route('login');
});

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

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');



Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard'); // Asegúrate de tener la vista dashboard.blade.php en resources/views/
})->name('dashboard')->middleware('auth');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::put('/perfil', [PerfilController::class, 'update'])->name('perfil.update');
