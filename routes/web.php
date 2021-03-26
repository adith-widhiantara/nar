<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnagramController;
use App\Http\Controllers\OmdbapiController;

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

// omdb
Route::get('omdb', [OmdbapiController::class, 'index'])->name('omdb.index');
Route::post('omdb', [OmdbapiController::class, 'store'])->name('omdb.store');
Route::get('omdb/{search}/{page}', [OmdbapiController::class, 'search'])->name('omdb.search');
// end omdb

// anagram
Route::get('anagram', [AnagramController::class, 'index'])->name('anagram.index');
// end anagram
