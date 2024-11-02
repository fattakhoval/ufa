<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\HolidayController;


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

Route::get('/', [HolidayController::class, 'index'])->name('index');
Route::get('/signup', [UserController::class, 'show_signup'])->name('show_signup');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');

Route::get('/signin', [UserController::class, 'show_signin'])->name('show_signin');

Route::get('/admin', [UserController::class, 'show_admin'])->name('show_admin');
Route::get('/news', [UserController::class, 'show_news'])->name('show_news');


Route::get('/signup', [UserController::class, 'show_signup'])->name('show_signup');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');

Route::get('/logout', [UserController::class,'logout'])->name('logout');

Route::get('/show_event', [ApplicationController::class, 'show_event'])->name('show_event');
Route::prefix('applications')->group(function () {
    Route::get('/', [ApplicationController::class, 'index'])->name('applications.index'); // Вывод всех заявок
    Route::post('/', [ApplicationController::class, 'store'])->name('applications.store'); // Создание заявки
    Route::get('/{id}', [ApplicationController::class, 'show'])->name('applications.show'); // Обработка заявки
    Route::post('/{id}/accept', [ApplicationController::class, 'accept'])->name('applications.accept'); // Принять заявку
    Route::post('/{id}/reject', [ApplicationController::class, 'reject'])->name('applications.reject'); // Отклонить заявку
});


// Группа маршрутов для праздников
Route::prefix('holidays')->group(function () {
    Route::get('/', [HolidayController::class, 'index'])->name('holidays.index'); // Вывод всех постов
    Route::get('/create', [HolidayController::class, 'create'])->name('holidays.create'); // Форма создания поста
    Route::post('/', [HolidayController::class, 'store'])->name('holidays.store'); // Создание нового поста
    Route::get('/{id}/edit', [HolidayController::class, 'edit'])->name('holidays.edit'); // Форма редактирования поста
    Route::put('/{id}', [HolidayController::class, 'update'])->name('holidays.update'); // Обновление поста
    Route::delete('/{id}', [HolidayController::class, 'destroy'])->name('holidays.destroy'); // Удаление поста
});