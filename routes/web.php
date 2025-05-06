<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Controllers
use App\Http\Controllers\GeneralController;


Route::get('/', [GeneralController::class, 'home'])->name('home');
Route::get('/aboutus', [GeneralController::class, 'aboutus'])->name('aboutus');
Route::get('/courses', [GeneralController::class, 'courses'])->name('courses');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');
// Route::get('/aboutus')
