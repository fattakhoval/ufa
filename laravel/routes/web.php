<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;

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

Route::get('/logout', [UserController::class,'logout'])->name('logout');


Route::prefix('applications')->group(function () {
    Route::get('/', [ApplicationController::class, 'index'])->name('applications.index'); // Вывод всех заявок
    Route::post('/', [ApplicationController::class, 'store'])->name('applications.store'); // Создание заявки
    Route::get('/{id}', [ApplicationController::class, 'show'])->name('applications.show'); // Обработка заявки
    Route::post('/{id}/accept', [ApplicationController::class, 'accept'])->name('applications.accept'); // Принять заявку
    Route::post('/{id}/reject', [ApplicationController::class, 'reject'])->name('applications.reject'); // Отклонить заявку
});