<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;






Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get("/contacts", [App\Http\Controllers\PageController::class, 'contacts'])->name('contacts');
Route::get("/courses", [App\Http\Controllers\PageController::class, 'courses'])->name('courses');