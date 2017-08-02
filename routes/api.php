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


Route::get('/members/{type}', 'ApiController@member_populate');

Route::get('/members/depositing/execute', 'ApiController@save_deposit');
Route::get('/members/savings/transaction/{mid}', 'ApiController@get_transaction');

Route::get('/random/code/{length?}', 'ApiController@get_random_number');