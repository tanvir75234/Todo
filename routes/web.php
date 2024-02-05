<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('dashboard/todo', [TodoController::class, 'index'])->name('todo.home');
Route::get('dashboard/todo/add', [TodoController::class, 'add'])->name('todo.add');
Route::get('dashboard/todo/update', [TodoController::class, 'add'])->name('todo.update');
Route::get('/', [HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
