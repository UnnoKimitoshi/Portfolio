<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function () {
    // ランキングの表示
    Route::get('/get', [RecordController::class, 'get']);
    // ランクインの判定
    Route::get('/check_rankin', [RecordController::class, 'checkRankin']);
    // ランキングに登録
    Route::post('/regist', [RecordController::class, 'regist']);
});
