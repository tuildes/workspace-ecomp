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

/*
    Rotas de login.
*/
Route::post('login', 'API\AuthController@login');
Route::post('signup', 'API\AuthController@signup');

// Rotas de música
// Route::post('musics', 'API\MusicController@store');
// Route::get('musics', 'API\MusicController@index');
// Route::get('musics/{music}', 'API\MusicController@show');
// Route::put('musics/{music}', 'API\MusicController@update');
// Route::delete('musics/{music}', 'API\MusicController@destroy');

// /* Rotas de música de INDEX e SHOW */
// Route::apiResource('musics', 'API\MusicController')->only(['show', 'index']);
// /* Rotas de música menos as de INDEX e SHOW */
// Route::apiResource('musics', 'API\MusicController')->except(['show', 'index']);

/*
    Rotas de música
*/
Route::apiResource('musics', 'API\MusicController');

/*
    Rotas de contato
*/
Route::apiResource('contacts', 'API\ContactController');

/*
    Rotas de filme
*/
Route::apiResource('movies', 'API\MovieController');

/* 
    Rotas de autenticação.
*/
Route::middleware(['auth:api'])->group(function () {

    Route::get('logout', 'API\AuthController@logout');
    Route::get('user', 'API\AuthController@user');

});