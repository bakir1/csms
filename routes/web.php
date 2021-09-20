<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RateController;

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

Route::get('/rate', function () {
    return view('welcome');
});

Route::prefix('api')->group(function(){
    Route::get('/rates', [RateController::class, 'index']);
});