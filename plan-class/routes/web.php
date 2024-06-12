<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

#Rotas de Cadastro

Route::get('index',[HomeController::class, 'index'])->name('index');
Route::get('user/register' , [UserController::class, 'register']) -> name('user.register');
Route::post('user',[UserController::class, 'store'])->name('user.store');

#Rotas de Login

Route::get('user/login', [LoginController::class, 'login'])->name('user.login')->middleware('guest');
Route::post('user/auth', [LoginController::class, 'auth'])->name('user.auth')->middleware('guest');



Route::get('biblioteca', function(){ return view('biblioteca');})->middleware('auth');