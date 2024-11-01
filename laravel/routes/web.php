<?php

use App\Http\Controllers\UserController;
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

Route::get('/signup', [UserController::class, 'show_signup'])->name('show_signup');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');

Route::get('/signup', [UserController::class, 'show_signup'])->name('show_signup');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');
