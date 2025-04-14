<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Controllers
use App\Http\Controllers\GeneralController;


Route::get('/', [GeneralController::class, 'home'])->name('home');
