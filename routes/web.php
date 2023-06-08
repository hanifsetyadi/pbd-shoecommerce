<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;


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

// Auth::routes();

Route::get('/', [ProductController::class, 'index']);

Route::get('/edit', [ProductController::class, 'routeEdit'])->middleware(['auth', 'verified']);
Route::get('/edit/{slug}', [ProductController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});  
require __DIR__.'/auth.php';

Route::get('/home', [ProductController::class, 'index']);  
Route::get('/add',[ProductController::class,'create'])->name('add');
Route::post('/save', [ProductController::class, 'store'])->name('save');
Route::get('/editprod/{id}',[ProductController::class,'edit'])->name('editprod');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
