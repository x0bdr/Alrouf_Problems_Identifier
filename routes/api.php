<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/initialize-sensor', 'SensorController@initialize')->name('initialize-sensor');
Route::post('/registration-data', 'DataController@register')->name('registration-data');
Route::post('/calibration', 'CalibrationController@calibrate')->name('calibration');
Route::post('/identification', 'IdentificationController@identify')->name('identification');
Route::post('/update-status', 'StatusController@update')->name('update-status');
