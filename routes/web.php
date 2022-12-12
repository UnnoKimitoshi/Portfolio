<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ScoreController;
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

// ログイン前
Route::group(['middleware' => ['guest']], function () {
    // ログインフォー表示
    Route::get('/', [AuthController::class, 'loginForm'])->name('loginForm');
    // ログイン処理
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// ログイン後
Route::group(['middleware' => ['auth']], function () {
    // ホーム画面表示
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    // ランキング表示
    Route::resource("scores",ScoreController::class);
    Route::get("/Unity_Damacy", function () {
        return view('Unity_Damacy');
    })->name('Unity_Damacy');
});
