<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    });
    Route::prefix('user')->group(function () {
        Route::get('/',[UserController::class,'index'])->name('admin.user.index');
        Route::get('create', function ()  {
            return view('admin.user.create');
        })->name('admin.user.create-form');
        Route::post('create', [UserController::class, 'create'])->name('admin.user.create');
        Route::get('update/{id}', [UserController::class, 'updateForm'])->name('admin.user.update-form');
        Route::put('update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    });
});

