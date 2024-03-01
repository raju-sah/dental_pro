<?php

use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TeamsController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('status-change-team',[TeamController::class,'changeStatus'])->name('status-change-team');
    Route::resource('teams',TeamController::class);
    });