<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin user routing
Route::view('/admin/home', 'admin/home')->middleware('auth:admin');
Route::view('/admin/login', 'admin/login');
Route::view('/admin/register', 'admin/register');
Route::post('/admin/login', [App\Http\Controllers\admin\LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [App\Http\Controllers\admin\LoginController::class, 'logout'])->name('admin.logout');
Route::post('/admin/register', [App\Http\Controllers\admin\RegisterController::class, 'register'])->name('admin.register');
