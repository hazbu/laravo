<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Socialite auth
Route::middleware('guest')->group(function () {
    Route::get('auth/google/redirect', [App\Http\Controllers\Auth\SocialiteController::class, 'redirect'])->name('google.login');
    Route::get('auth/google/callback', [App\Http\Controllers\Auth\SocialiteController::class, 'callback']);
});