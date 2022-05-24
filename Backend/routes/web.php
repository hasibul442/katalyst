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

// Route::get('/', function () {
//     return view('dashboard.dashboard');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


// Profile Information
Route::get('/profile', "App\Http\Controllers\ProfileController@index")->name('profile');
Route::post('/profile/create', "App\Http\Controllers\ProfileController@index")->name('profile.add');
Route::get('/profile/edit/{id}/', "App\Http\Controllers\ProfileController@edit")->name('profile.edit');
Route::put('/profile/update/{id}/', "App\Http\Controllers\ProfileController@update")->name('profile.update');

// Banner Information
Route::get('/banner', "App\Http\Controllers\BannerController@index")->name('banner');
Route::post('/banner/add', "App\Http\Controllers\BannerController@store")->name('banner.add');
Route::get('/banner/edit/{id}', "App\Http\Controllers\BannerController@edit")->name('banner.edit');
Route::post('/banner/update/{id}', "App\Http\Controllers\BannerController@update")->name('banner.update');
Route::get('/banner/status/{id}/{status}', "App\Http\Controllers\BannerController@statuschange");
Route::delete('/banner/{id}', "App\Http\Controllers\BannerController@destroy");


// Basic Chemicals Information
Route::get('/basic-chemicals', "App\Http\Controllers\BasicChemicalsController@index")->name('basicchemicals');
Route::post('/basicchemical/add', "App\Http\Controllers\BasicChemicalsController@store")->name('basicchemicals.add');
Route::get('/basicchemicals/status/{id}/{status}', "App\Http\Controllers\BasicChemicalsController@statuschange");
Route::get('/basicchemicals/edit/{id}', "App\Http\Controllers\BasicChemicalsController@edit")->name('basicchemicals.edit');
Route::put('/basicchemicals/update/{id}', "App\Http\Controllers\BasicChemicalsController@update")->name('basicchemicals.update');
Route::delete('/basicchemicals/{id}', "App\Http\Controllers\BasicChemicalsController@destroy");


// Auxiliary Chemicals Information
Route::get('/auxiliary-chemicals', "App\Http\Controllers\AuxiliaryChemicalsController@index")->name('auxiliarychemicals');
Route::post('/auxiliarychemicals/add', "App\Http\Controllers\AuxiliaryChemicalsController@store")->name('auxiliarychemicals.add');
Route::get('/auxiliarychemicals/status/{id}/{status}', "App\Http\Controllers\AuxiliaryChemicalsController@statuschange");
Route::get('/auxiliarychemicals/edit/{id}', "App\Http\Controllers\AuxiliaryChemicalsController@edit");
Route::put('/auxiliarychemicals/update', "App\Http\Controllers\AuxiliaryChemicalsController@update");
Route::delete('/auxiliarychemicals/{id}', "App\Http\Controllers\AuxiliaryChemicalsController@destroy");

// Dyestuff Information
Route::get('/dyestuffs', "App\Http\Controllers\DyestuffsController@index")->name('dyestuffs');
Route::post('/dyestuffs/add', "App\Http\Controllers\DyestuffsController@store")->name('dyestuffs.add');
Route::get('/dyestuffs/status/{id}/{status}', "App\Http\Controllers\DyestuffsController@statuschange");
Route::get('/dyestuffs/edit/{id}', "App\Http\Controllers\DyestuffsController@edit");
Route::put('/dyestuffs/update', "App\Http\Controllers\DyestuffsController@update");
Route::delete('/dyestuffs/{id}', "App\Http\Controllers\DyestuffsController@destroy");


// Job Post Information
Route::get('/jobportal', "App\Http\Controllers\JobpostsController@index")->name('jobportal');
Route::post('/job/add', "App\Http\Controllers\JobpostsController@store")->name('job.add');
Route::get('/job/status/{id}/{status}', "App\Http\Controllers\JobpostsController@statuschange");
Route::get('/job/applicant-list/{id}', "App\Http\Controllers\JobpostsController@show")->name('applicant_list');
Route::get('/job/post/edit/{id}', "App\Http\Controllers\JobpostsController@edit")->name('jobpost.edit');
Route::put('/job/post/update/{id}', "App\Http\Controllers\JobpostsController@update")->name('jobpost.update');
Route::delete('/job/{id}', "App\Http\Controllers\JobpostsController@destroy");

// Messages
Route::get('/messages', "App\Http\Controllers\MessageController@index")->name('messages');


Route::get('/users', "App\Http\Controllers\UsersController@index")->name('users');
Route::post('/users/add', "App\Http\Controllers\UsersController@store")->name('users.add');
Route::get('/users/edit/{id}', "App\Http\Controllers\UsersController@edit");
Route::put('/users/update', "App\Http\Controllers\UsersController@update");
// Route::get('/users/pass/edit/{id}', "App\Http\Controllers\UsersController@edit");
Route::put('/users/password/update', "App\Http\Controllers\UsersController@passupdate");
Route::delete('/users/{id}', "App\Http\Controllers\UsersController@destroy");
