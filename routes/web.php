<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('login');
});

// Authentication
Route::get('/register', function () {
    return view('signup');
});

// Dashboard Routes
Route::prefix('/dashboard')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks', [TaskController::class, 'tasks'])->name('task.tasks');
    
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    
    // Task resource routes
    Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});


// Catch-all for undefined dashboard routes
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
})->where('any', '.*');