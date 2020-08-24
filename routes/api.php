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

// Route::resource('Labor_profile','Labor_profileController');
// Route::resource('Work_experience','Work_experienceController');
// Route::resource('Worker','WorkerController');

// ONLY - EXCEPT
// Route::resource('Labor_profile','Labor_profileController',['only'=>['index','show']]);

Route::resource('labor_profile','Labor_profileController',['only'=>['index','show']]);
Route::resource('work_experience','Work_experienceController',['only'=>['index','show']]);
Route::resource('worker','WorkerController',['only'=>['index','show']]);

/* Route::get('Labor_profile','Labor_profileController@index')->name('laborp.index');
Route::post('Labor_profile','Labor_profileController@store')->name('laborp.store');
Route::get('Labor_profile/{id}','Labor_profileController@show')->name('laborp.show');
Route::put('Labor_profile/{id}','Labor_profileController@update')->name('laborp.update');
Route::delete('Labor_profile/{id}','Labor_profileController@destroy')->name('laborp.destroy');

Route::get('Work_experience','Work_experienceController@index')->name('workxp.index');
Route::post('Work_experience','Work_experienceController@store')->name('workxp.store');
Route::get('Work_experience/{id}','Work_experienceController@show')->name('workxp.show');
Route::put('Work_experience/{id}','Work_experienceController@update')->name('workxp.update');
Route::delete('Work_experience/{id}','Work_experienceController@destroy')->name('workxp.destroy');

Route::get('Worker','WorkerController@index')->name('worker.index');
Route::post('Worker','WorkerController@store')->name('worker.store');
Route::get('Worker/{id}','WorkerController@show')->name('worker.show');
Route::put('Worker/{id}','WorkerController@update')->name('worker.update');
Route::delete('Worker/{id}','WorkerController@destroy')->name('worker.destroy'); */