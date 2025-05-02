<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthLogger;
use App\Http\Middleware\UserLogger;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->middleware(['auth:web',UserLogger::class])->group(function () {
    Route::view('/', 'admin.index');
    Route::get('/logout',[AuthController::class,'logout'])->name('user.logout');
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::view('create', 'admin.user.create')->name('admin.user.create-form');
        Route::post('create', [UserController::class, 'create'])->name('admin.user.create');
        Route::get('update/{id}', [UserController::class, 'updateForm'])->name('admin.user.update-form');
        Route::put('update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
        Route::get('info/{id}', [UserController::class, 'info'])->name('admin.user.info');
    });

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('logs', LogController::class);

});


Route::prefix('')->middleware('guest')->group(function () {
    Route::view('login','login')->name('login');
    Route::post('login', [AuthController::class,'login'])->middleware([AuthLogger::class])->name('user.login');
});
