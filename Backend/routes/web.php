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
Route::delete('/basicchemicals/{id}', "App\Http\Controllers\BasicChemicalsController@destroy");


// Auxiliary Chemicals Information
Route::get('/auxiliary-chemicals', "App\Http\Controllers\AuxiliaryChemicalsController@index")->name('auxiliarychemicals');
Route::post('/auxiliarychemicals/add', "App\Http\Controllers\AuxiliaryChemicalsController@store")->name('auxiliarychemicals.add');
Route::get('/auxiliarychemicals/status/{id}/{status}', "App\Http\Controllers\AuxiliaryChemicalsController@statuschange");
Route::delete('/auxiliarychemicals/{id}', "App\Http\Controllers\AuxiliaryChemicalsController@destroy");

// Dyestuff Information
Route::get('/dyestuffs', "App\Http\Controllers\DyestuffsController@index")->name('dyestuffs');
Route::post('/dyestuffs/add', "App\Http\Controllers\DyestuffsController@store")->name('dyestuffs.add');
Route::get('/dyestuffs/status/{id}/{status}', "App\Http\Controllers\DyestuffsController@statuschange");
Route::delete('/dyestuffs/{id}', "App\Http\Controllers\DyestuffsController@destroy");

// Dyestuff Information
Route::get('/machines', "App\Http\Controllers\MachinesController@index")->name('machines');
Route::post('/machines/add', "App\Http\Controllers\MachinesController@store")->name('machines.add');
Route::get('/machines/status/{id}/{status}', "App\Http\Controllers\MachinesController@statuschange");
Route::delete('/machines/{id}', "App\Http\Controllers\MachinesController@destroy");

// Partners Information
Route::get('/partners', "App\Http\Controllers\PartnersController@index")->name('partners');
Route::post('/partners/add', "App\Http\Controllers\PartnersController@store")->name('partners.add');
Route::delete('/partners/{id}', "App\Http\Controllers\PartnersController@destroy");

// Partners Information
Route::get('/jobportal', "App\Http\Controllers\JobpostsController@index")->name('jobportal');
Route::post('/job/add', "App\Http\Controllers\JobpostsController@store")->name('job.add');
Route::get('/job/status/{id}/{status}', "App\Http\Controllers\JobpostsController@statuschange");
Route::delete('/job/{id}', "App\Http\Controllers\JobpostsController@destroy");
