<?php

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

Route::apiResource('/shares', 'App\Http\Controllers\SharesController');
Route::post('/register', 'App\Http\Controllers\RegisterController@post');
Route::post('/login', 'App\Http\Controllers\LoginController@post');
Route::post('/logout','App\Http\Controllers\LogoutController@post');
Route::get('/user','App\Http\Controllers\UsersController@get');
Route::put('/user','App\Http\Controllers\UsersCOntroller@put');
Route::post('/like','App\Http\Controllers\LikesController@post');
Route::delete('/like','App\Http\Controllers\LikesController@delete');
Route::post('/comment','App\Http\Controllers\CommentsController@post');

