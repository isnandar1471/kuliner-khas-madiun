<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KulinerController;

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

Route::get('pengguna', [PenggunaController::class, 'index']);
Route::get('pengguna/{pengguna}', [PenggunaController::class, 'show']);
Route::post('pengguna', [PenggunaController::class, 'store']);
Route::patch('pengguna/{pengguna}', [PenggunaController::class, 'update']);
Route::delete('pengguna/{pengguna}', [PenggunaController::class, 'destroy']);

Route::get('kuliner', [KulinerController::class, 'index']);
Route::get('kuliner/{kuliner}', [KulinerController::class, 'show']);
Route::post('kuliner', [KulinerController::class, 'store']);
Route::patch('kuliner/{kuliner}', [KulinerController::class, 'update']);
Route::delete('kuliner/{kuliner}', [KulinerController::class, 'destroy']);
