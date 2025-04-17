<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
// Homepage
Route::get('/register', [RegisterController::class, 'show'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/', [LoginController::class, 'show'])->name('login.form');
Route::post('/', [LoginController::class, 'login'])->name('login');

// Dashboard Routes
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    // Task-related routes
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks', [TaskController::class, 'tasks'])->name('task.tasks');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    
    // Task resource routes
    Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::put('/tasks/{task}/markAsDone', [TaskController::class, 'markAsDone'])->name('tasks.markAsDone');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

    // Logout route
    Route::post('/logout', [TaskController::class, 'logout'])->name('logout');
});


// Catch-all for undefined dashboard routes
