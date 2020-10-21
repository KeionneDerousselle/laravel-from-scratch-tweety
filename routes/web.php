<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ProfilesController;

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
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetsController::class, 'index'])->name('tweets.index');
    Route::post('/tweets', [TweetsController::class, 'store'])->name('tweets.store');
});

Route::get('/profiles/{user}', [ProfilesController::class, 'show'])->name('profiles.show');
