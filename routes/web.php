<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::name('users.')->group(function (){
    Route::prefix('/users')->group(function (){
        Route::get('/{id}/show', [UserController::class, 'show'])->name('show');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/auth', [UserController::class, 'auth'])->name('auth');
        Route::delete('/delete', [UserController::class, 'delete'])->name('delete');
    });
});

Route::resource('tasks', TaskController::class);


