<?php

use Illuminate\Http\Request;

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

Route::resource('champion', 'ChampionController')->only('index', 'show','store','edit','update','destroy');

Route::get('lines', function(){
	return response()->json(\App\Line::all());
});

Route::get('types', function(){
	return response()->json(\App\Type::all());
});