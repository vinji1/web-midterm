<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BoholWeatherControllerAPI;

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
Route::post('login',[BoholWeatherControllerAPI::class,'login']);
Route::post('register',[BoholWeatherControllerAPI::class,'register']);
Route::post('reset-password',[BoholWeatherControllerAPI::class,'resetPassword']);

