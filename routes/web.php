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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'PagesController@home');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/payment/create', 'PaymentsController@create')->middleware('auth');
Route::post('/payment', 'PaymentsController@store')->middleware('auth');
Route::get('/notifications', 'UserNotificationController@show')->middleware('auth');
