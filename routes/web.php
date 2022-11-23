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

// exam routing
Route::prefix('admin')->group(function () {
    Route::get('/exams', [App\Http\Controllers\admin\ExamController::class, 'index'])->name('exams.index');
    Route::get('/exams/create', [App\Http\Controllers\admin\ExamController::class, 'create'])->name('exams.create');
    Route::post('/exams/post', [App\Http\Controllers\admin\ExamController::class, 'postValue'])->name('exams.post');
    Route::get('/exams/confirm', [App\Http\Controllers\admin\ExamController::class, 'confirm'])->name('exams.confirm');
    Route::post('/exams/official-post', [App\Http\Controllers\admin\ExamController::class, 'officialPost'])->name('exams.officialPost');
    Route::delete('/exams/{exam}/destroy', [App\Http\Controllers\admin\ExamController::class, 'destroy'])->name('exams.destroy');
});
