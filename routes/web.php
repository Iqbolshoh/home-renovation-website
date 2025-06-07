<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');

Route::get('/projects', fn() => view('projects'))->name('projects');

Route::get('/project-details', fn() => view('project-details'))->name('project-details');
