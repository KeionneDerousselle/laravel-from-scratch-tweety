<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FollowsController;

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
    Route::post('/follow/{user:username}', [FollowsController::class, 'store'])->name('follows.store');
    Route::delete('/follow/{user:username}', [FollowsController::class, 'destroy'])->name('follows.destroy');
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->name('profiles.edit');
});

Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profiles.show');
