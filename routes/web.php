<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomePageController;

Route::get('/', HomePageController::class);

Route::view('work-experiences', 'pages.work-experience');

Route::resource('projects', ProjectController::class);
