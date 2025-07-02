<?php

use App\Http\Controllers\AuthController;
use App\Models\Task;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('/Register', [AuthController::class, 'showRegister'])->name('Show.Register');
Route::get('/Login', [AuthController::class,'showLogin'])->name('Show.Login');

Route::post('/Register', [AuthController::class, 'Register'])->name('Register');
Route::post('/Login', [AuthController::class,'Login'])->name('Login');

Route::get('/Tasks', [TaskController::class, 'index'])->name('Tasks.index');
Route::post('/Tasks', [TaskController::class, 'store'])->name('Tasks.store');
Route::get('/Tasks/{id}/edit', [TaskController::class, 'edit'])->name('Tasks.edit');
Route::put('/Tasks/{id}', [TaskController::class, 'update'])->name('Tasks.update');

// Route::('/ninjas/create', [NinjaController::class, 'create'])->name('Ninjas.create');
