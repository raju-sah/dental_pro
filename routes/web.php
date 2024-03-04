<?php

use App\Http\Controllers\Admin\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {

});
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {

});
