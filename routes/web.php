<?php

use App\Http\Controllers\LoginController;

Route::get('/', fn () => redirect('/login'));

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/emp', function () {
        return view('emp.emp'); // ✅ Looks for resources/views/emp/emp.blade.php
    })->name('emp');
});
