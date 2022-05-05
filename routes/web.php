<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// to enable email verification, add 'verified' to array on line 22

Route::resource('constellation', ConstellationController::class)->middleware(['auth']);
Route::get('/constellations', [ConstellationController::class, 'show_all'])->middleware(['auth']);

Route::get('/star-charts', [StarChartController::class, 'show_all'])->middleware(['auth']);

Route::view('/constellation-game', 'constellation-game')->middleware(['auth']);

Route::get('/favorites', [FavoriteController::class, 'show_all'])->middleware(['auth']);
Route::post('/add-to-favorites', [FavoriteController::class, 'store'])->middleware(['auth']);
Route::post('/remove-from-favorites', [FavoriteController::class, 'remove'])->middleware(['auth']);
// Route::view('/favorites', 'favorites')->middleware(['auth']);


require __DIR__.'/auth.php';
