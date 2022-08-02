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
    return view('index');
});

Route::get('/my-wedding-invitation', 'App\Http\Controllers\WeddingController@index');
Route::post('/my-wedding-invitation/ucapan/post', 'App\Http\Controllers\WeddingController@postUcapan');
Route::get('/my-wedding-invitation/ucapan/get', 'App\Http\Controllers\WeddingController@getUcapan');
