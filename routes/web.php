<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;



Route::get('',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);
Route::get('/muro',[PostController::class,'index'])->name('posts.index');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::post('/Logout',[LogoutController::class,'store'])->name('logout');

