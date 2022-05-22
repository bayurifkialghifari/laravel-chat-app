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
]);

Route::group(['middleware' => ['auth'], 'namespace' => 'App\\Http\\Livewire'], function () {
    Route::get('/', 'Chat');
});

// Login not required
Route::group(['namespace' => 'App\\Http\\Controllers'], function () {
    Route::get('/account/verify/{code}/{id}', 'Auth\RegisterController@verifyAccount');
});
