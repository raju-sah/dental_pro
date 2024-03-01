<?php

use App\Http\Controllers\Admin\TeamsController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('status-change-teams',[TeamsController::class,'changeStatus'])->name('status-change-teams');
    Route::resource('teams',TeamsController::class);
    });