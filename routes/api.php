<?php

use App\Http\Controllers\RateController;
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

Route::get('/rates', [RateController::class, 'index']);
Route::post('/rates', [RateController::class, 'store']);
/*
Route::post('/rates', function(){
    return Rate::create([
        'energy'        => '0.30',
        'time'          => '2',
        'transaction'   => '1',
        'meterStart'    => '1204307',
        'meterStop'     => '1215230'
    ]); 
});
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
