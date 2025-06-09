<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectDetailsController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/consultation', [ConsultationController::class, 'send'])->name('consultation.send');
Route::post('/message-send', [MessageController::class, 'send'])->name('message.send');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');

Route::get('/project/{id}', [ProjectDetailsController::class, 'show'])->name('project.details');