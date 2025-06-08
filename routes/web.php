<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::post('/message-send', [MessageController::class, 'send'])->name('message.send');

Route::view('/projects', 'projects')->name('projects');

Route::view('/project-details', 'project-details')->name('project-details');
