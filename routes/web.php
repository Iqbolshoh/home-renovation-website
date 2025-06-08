<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/projects', 'projects')->name('projects');

Route::view('/project-details', 'project-details')->name('project-details');
