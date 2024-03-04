<?php

use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\NewsLetterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::delete('delete-gallery-image', [ImageController::class, 'destroy'])->name('delete-gallery-image');

    Route::get('status-change-team', [TeamController::class, 'changeStatus'])->name('status-change-team');
    Route::resource('teams', TeamController::class);

    Route::get('status-change-testimonial', [TestimonialController::class, 'changeStatus'])->name('status-change-testimonial');
    Route::resource('testimonials', TestimonialController::class);

    Route::get('status-change-service', [ServiceController::class, 'changeStatus'])->name('status-change-service');
    Route::resource('services', ServiceController::class);


    Route::get('status-change-slider', [SliderController::class, 'changeStatus'])->name('status-change-slider');
    Route::resource('sliders', SliderController::class);

    Route::get('status-change-feedback', [FeedbackController::class, 'changeStatus'])->name('status-change-feedback');
    Route::resource('feedback', FeedbackController::class);

    Route::get('status-change-news_letter', [NewsLetterController::class, 'changeStatus'])->name('status-change-news_letter');
    Route::resource('news-letters', NewsLetterController::class);
});


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('status-change-team', [TeamController::class, 'changeStatus'])->name('status-change-team');
    Route::resource('teams', TeamController::class);
});
