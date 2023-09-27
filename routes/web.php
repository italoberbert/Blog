<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/user/create',[UserController::class, 'create'])->name('user.create');
Route::post('/user',[UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{user}',[UserController::class, 'edit'])->name('user.edit');
Route::put('/user/edit/{user}',[UserController::class, 'update'])->name('user.update');
Route::put('/password/{user}',[PasswordController::class, 'update'])->name('password.user.update');
Route::delete('/user/{user}',[UserController::class, 'destroy'])->name('user.destroy');
Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/posts',[PostController::class, 'index'])->name('posts');
Route::get('/post/{post:slug}',[PostController::class, 'show'])->name('post');

Route::get('/user/{user}',[UserController::class, 'show'])->name('user.show');

Route::get('/tag/{tag}',[TagController::class, 'show'])->name('tag.show');

Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::post('/contact',[ContactController::class, 'store'])->name('contact');

Route::get('/login/user',[LoginController::class, 'index'])->name('login.user');
Route::post('/login/user',[LoginController::class, 'store'])->name('login.user.store')->middleware('throttle:3');
Route::get('/logout.user',[LoginController::class, 'destroy'])->name('login.user.destroy');

Route::get('/admin', [AdminController::class,'index'])->middleware('auth');

Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('index');
    Route::get('/profile', [ProfileController::class,'index'])->name('profile');
});

require __DIR__.'/auth.php';
