<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\ProgramsController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\Admin\SocialSettingController;
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

    Route::resource('general-settings', GeneralSettingController::class);

    Route::resource('social-settings', SocialSettingController::class);

    Route::resource('seo-settings', SeoSettingController::class);

    Route::get('status-change-feedback', [FeedbackController::class, 'changeStatus'])->name('status-change-feedback');
    Route::resource('feedback', FeedbackController::class);
    Route::get('status-change-appointment', [AppointmentController::class, 'changeStatus'])->name('status-change-appointment');
    Route::resource('appointments', AppointmentController::class);

    Route::get('status-change-news_letter', [NewsLetterController::class, 'changeStatus'])->name('status-change-news_letter');
    Route::resource('news-letters', NewsLetterController::class);

    Route::get('status-change-programs', [ProgramsController::class, 'changeStatus'])->name('status-change-programs');
    Route::resource('programs', ProgramsController::class);

    Route::resource('galleries', GalleryController::class);

    Route::resource('contacts',ContactController::class);
   
    Route::delete('/image/delete/{id}', [GalleryController::class, 'deleteImage'])->name('admin.image.delete');

});


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('status-change-team', [TeamController::class, 'changeStatus'])->name('status-change-team');
    Route::resource('teams', TeamController::class);
});
