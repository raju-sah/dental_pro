<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('status-change-service', [\App\Http\Controllers\Admin\ServiceController::class, 'changeStatus'])->name('status-change-service');
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);

    Route::get('status-change-testimonial', [\App\Http\Controllers\Admin\TestimonialController::class, 'changeStatus'])->name('status-change-testimonial');
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);

    Route::get('status-change-slider', [\App\Http\Controllers\Admin\SliderController::class, 'changeStatus'])->name('status-change-slider');
    Route::resource('sliders', \App\Http\Controllers\Admin\SliderController::class);
});
