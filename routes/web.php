<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/statistics', [FrontendController::class, 'statistik'])->name('statistik');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');


Route::get('/descriptive-statistics', function () {
    return view('descriptive');
})->name('descriptive');

Route::get('/presentations', function () {
    return view('presentasi');
})->name('presentasi');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::prefix('insights')->group(function () {
    Route::get('/digital-literacy', function () {
        return view('insights.dl');
    })->name('dl');

    Route::get('/importance-literacy', function () {
        return view('insights.importance');
    })->name('importance');

    Route::get('/problem', function () {
        return view('insights.problem');
    })->name('problem');
});

Route::get('/home', function () { return view('home'); });
