<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return redirect()->route('todos.index');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('todos', TodoController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
