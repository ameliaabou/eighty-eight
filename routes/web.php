<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConstellationController;
use App\Http\Controllers\StarChartController;
use App\Http\Controllers\FavoriteController;

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
})->middleware(['auth']);

Route::resource('constellation', ConstellationController::class)->middleware(['auth']);
Route::get('/constellations', [ConstellationController::class, 'show_all'])->middleware(['auth']);

Route::get('/constellation-game', [ConstellationController::class, 'show_random'])->middleware(['auth']);
Route::post('/constellation-game/check', [ConstellationController::class, 'show_correct'])->middleware(['auth']);

Route::get('/constellation-game/check', function () {
    return redirect('/constellation-game');
})->middleware(['auth']);

Route::get('/star-charts', [StarChartController::class, 'show_all'])->middleware(['auth']);

Route::get('/favorites', [FavoriteController::class, 'show_all'])->middleware(['auth']);
Route::post('/add-to-favorites', [FavoriteController::class, 'store'])->middleware(['auth']);
Route::post('/remove-from-favorites', [FavoriteController::class, 'remove'])->middleware(['auth']);

Route::get('/add-to-favorites', function () {
    return redirect('/');
})->middleware(['auth']);
Route::get('/remove-from-favorites', function () {
    return redirect('/');
})->middleware(['auth']);

require __DIR__.'/auth.php';
