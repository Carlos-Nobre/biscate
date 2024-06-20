<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

#Rotas de Cadastro

Route::get('user/register' , [UserController::class, 'register']) -> name('user.register');
Route::post('user',[UserController::class, 'store'])->name('user.store');

#Rotas de Login

Route::get('/', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('user/auth', [LoginController::class, 'auth'])->name('user.auth')->middleware('guest');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route::get('home', function(){ return view('biblioteca');})->name('home')->middleware('auth');