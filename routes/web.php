<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ConstellationController;
use App\Http\Controllers\StarChartController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// loads view as well

// reroutes greeting to /
// Route::redirect('/greeting', '/');

// Route::get('/greeting', function() {
//     return 'Hello, World!';
// });
Route::view('/', 'welcome');
Route::view('/welcome', 'welcome');

Route::get('/movies', function() {
    return view('movies', ['name' => 'Amelia', 'movie_title' => 'The Matrix']);
});

// Route::view('/register', 'register');
Route::get('/login', [LoginController::class, 'login']);
Route::post('/auth', [LoginController::class, 'authenticate']);
Route::view('/register', 'register');

Route::resource('user', UserController::class);//->middleware('auth');
Route::get('/users', [UserController::class, 'show_all']);//->middleware('auth');

Route::resource('movie', MovieController::class);//->middleware('auth');
Route::get('/movies', [MovieController::class, 'show_all']);//->middleware('auth');

Route::resource('constellation', ConstellationController::class);//->middleware('auth');
Route::get('/constellations', [ConstellationController::class, 'show_all']);//->middleware('auth');

Route::get('/star-charts', [StarChartController::class, 'show_all']);//->middleware('auth');

Route::view('/constellation-game', 'constellation-game');//->middleware('auth');

