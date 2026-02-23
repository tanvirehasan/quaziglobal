<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\Homecontroller;
use App\Http\Controllers\BlocksController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;

Route::controller(Homecontroller::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('about','about')->name('about');
    Route::get('contact','contact')->name('contact');
    Route::get('elements','elements')->name('elements');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/upcoming', [ProjectController::class, 'upcoming'])->name('projects.upcoming');
Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.show');
});