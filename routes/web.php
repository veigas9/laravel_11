<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckIfIsAdmin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::delete('/user/{user}/destroy', [UserController::class, 'destroy'])->name('user.destroy')->middleware(CheckIfIsAdmin::class);
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');    
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');    
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
