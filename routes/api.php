<?php

use App\Http\Controllers\Api\AppointmentApiController;
use App\Http\Controllers\Api\ContactApiController;
use App\Http\Controllers\Api\FeedbackApiController;
use App\Http\Controllers\Api\GalleryApiController;
use App\Http\Controllers\Api\GeneralSettingApiController;
use App\Http\Controllers\Api\HomePageProgramApiController;
use App\Http\Controllers\Api\NewsLetterApiController;
use App\Http\Controllers\Api\ProgramApiController;
use App\Http\Controllers\Api\ReasonForServiceApiController;
use App\Http\Controllers\Api\ServiceApiController;
use App\Http\Controllers\Api\SinglePageProgramApiController;
use App\Http\Controllers\Api\SliderApiController;
use App\Http\Controllers\Api\SocialSettingApiController;
use App\Http\Controllers\Api\TeamApiController;
use App\Http\Controllers\Api\TestimonialApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('teams', [TeamApiController::class, 'index']);
Route::get('testimonials', [TestimonialApiController::class, 'index']);
Route::get('services', [ServiceApiController::class, 'index']);
Route::get('reason-to-choose', [ReasonForServiceApiController::class, 'index']);
Route::get('general-settings', [GeneralSettingApiController::class, 'index']);
Route::get('home-page-programs', [HomePageProgramApiController::class, 'index']);
Route::get('single-page-programs', [SinglePageProgramApiController::class, 'index']);
Route::get('sliders', [SliderApiController::class, 'index']);
Route::get('galleries', [GalleryApiController::class, 'index']);
Route::get('social-settings', [SocialSettingApiController::class, 'index']);
Route::post('appointments', [AppointmentApiController::class, 'store']);
Route::post('feedbacks', [FeedbackApiController::class, 'store']);
Route::post('newsletters', [NewsLetterApiController::class, 'store']);
Route::post('contacts', [ContactApiController::class, 'store']);
