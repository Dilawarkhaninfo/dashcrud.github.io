<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', [UsersController::class,'dashboard'])->name('dashboard');
    Route::get('/category', [CategoryController::class,'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class,'delete'])->name('category.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
