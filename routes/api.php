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

Route::apiResource('dqcmodel', 'DQCMODELController');

Route::apiResource('dqc84', 'DQC84Controller');

Route::apiResource('dqc841', 'DQC841Controller');

Route::get('general-report', 'GeneralReportController@index');
