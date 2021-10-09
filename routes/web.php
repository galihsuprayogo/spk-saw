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
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('dss', function () {
		return view('pages.dss');
	})->name('dss');
	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('profile/share', ['as' => 'profile.share', 'uses' => 'App\Http\Controllers\ProfileController@share']);
	Route::post('profile/maintenance/{id}', ['as' => 'profile.maintenance', 'uses' => 'App\Http\Controllers\ProfileController@getById']);
	Route::put('profile/uupdate', ['as' => 'profile.uupdate', 'uses' => 'App\Http\Controllers\ProfileController@userUpdate']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

