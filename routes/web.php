<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\HomeController;
use App\Http\Controllers\BlocksController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('about','about')->name('about');
    Route::get('contact','contact')->name('contact');
    Route::get('elements','elements')->name('elements');
});


