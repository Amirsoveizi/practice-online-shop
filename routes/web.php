<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->middleware(['auth:web'])->group(function () {
    Route::view('/', 'admin.index');
    Route::get('/logout',[AuthController::class,'logout'])->name('user.logout');
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::view('create', 'admin.user.create')->name('admin.user.create-form');
        Route::post('create', [UserController::class, 'create'])->name('admin.user.create');
        Route::get('update/{id}', [UserController::class, 'updateForm'])->name('admin.user.update-form');
        Route::put('update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    });
});


Route::prefix('')->middleware('guest')->group(function () {
    Route::view('login','login')->name('login');
    Route::post('login', [AuthController::class,'login'])->name('user.login');
});
