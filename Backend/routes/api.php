<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/banner', 'App\Http\Controllers\ApiController@bannerindex')->name('banner');
Route::get('/basic-chemicals', 'App\Http\Controllers\ApiController@basicchemicals')->name('basicchemicals');
Route::get('/basic-chemical/details/{id}', 'App\Http\Controllers\ApiController@basicchemicals_show');

Route::get('/auxiliarychemicals', 'App\Http\Controllers\ApiController@auxiliarychemical');
Route::get('/dyestuffs', 'App\Http\Controllers\ApiController@dyestuff');

Route::post('/messages/add', 'App\Http\Controllers\ApiController@messagestore')->name('messagesstotre');
