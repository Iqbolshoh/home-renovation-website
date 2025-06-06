<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Pages\Auth\Register;

Route::get('/register', Register::class)->name('register');

Route::get('/', fn() => view('home'))->name('home');
Route::get('/projects', fn() => view('projects'))->name('home');
Route::get('/project-details', fn() => view('project-details'))->name('home');
