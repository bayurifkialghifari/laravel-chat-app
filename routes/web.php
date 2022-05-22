<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'verify' => false,
    'reset' => false,
]);

Route::group(['middleware' => ['auth'], 'namespace' => 'App\\Http\\Livewire'], function () {
    Route::get('/', 'Chat');
});

// Login not required
Route::group(['namespace' => 'App\\Http\\Controllers'], function () {
    Route::post('/resend/email_confirmation', 'Auth\RegisterController@resendEmailConfirmation')->name('auth.resend_email_confirmation');
    Route::get('/account/verify/{code}/{id}', 'Auth\RegisterController@verifyAccount')->name('auth.account_verify');
});
