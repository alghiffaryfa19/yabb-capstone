<?php

use App\Http\Controllers\FrontendController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/statistik', [FrontendController::class, 'data'])->name('api_data');
Route::get('/asean-rate', [FrontendController::class, 'asean'])->name('api_asean');

Route::get('/tes123/{id}', [FrontendController::class, 'tes123'])->name('tes123');
Route::get('/tes456/{id}', [FrontendController::class, 'tes456'])->name('tes456');

Route::get('/tes789', [FrontendController::class, 'tes789'])->name('tes789');

Route::get('/wkwk', [FrontendController::class, 'wkwk'])->name('wkwk');
