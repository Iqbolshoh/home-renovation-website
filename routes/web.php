<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');

Route::view('/projects', 'projects')->name('projects');

Route::view('/project-details', 'project-details')->name('project-details');
