<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('employee', [\App\Http\Controllers\employeecontroller::class, 'index'])->name('employee.index');
Route::post('employee', [\App\Http\Controllers\employeecontroller::class, 'store']) ;
Route::get('employee/show', [\App\Http\Controllers\employeecontroller::class, 'show'])->name('employee.show');





Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
