<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/work-experiences', [PageController::class, 'workExperiences'])->name('work-experiences');

Route::resource('projects', ProjectController::class);
