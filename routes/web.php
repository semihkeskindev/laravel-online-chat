<?php

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

use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        // this doesn't do anything other than to
        // tell you to go to /fire
        return view('test');
    });

    Route::post('/chat', 'ChatController@send');

});
Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
