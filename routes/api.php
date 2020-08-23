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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('Labor_profile', 'Labor_profileController');
// Route::resource('Work_experience', 'Work_experienceController');
// Route::resource('Worker', 'WorkerController');

Route::get('Labor_profile','Labor_profileController@index')->name('laborp.index');
Route::post('Labor_profile','Labor_profileController@store')->name('laborp.store');
Route::get('Labor_profile','Labor_profileController@show')->name('laborp.show');
Route::put('Labor_profile','Labor_profileController@update')->name('laborp.update');
Route::delete('Labor_profile','Labor_profileController@destroy')->name('laborp.destroy');

Route::get('Work_experience','Work_experienceController@index')->name('workxp.index');
Route::post('Work_experience','Work_experienceController@store')->name('workxp.store');
Route::get('Work_experience','Work_experienceController@show')->name('workxp.show');
Route::put('Work_experience','Work_experienceController@update')->name('workxp.update');
Route::delete('Work_experience','Work_experienceController@destroy')->name('workxp.destroy');

Route::get('Worker','WorkerController@index')->name('worker.index');
Route::post('Worker','WorkerController@store')->name('worker.store');
Route::get('Worker','WorkerController@show')->name('worker.show');
Route::put('Worker','WorkerController@update')->name('worker.update');
Route::delete('Worker','WorkerController@destroy')->name('worker.destroy');