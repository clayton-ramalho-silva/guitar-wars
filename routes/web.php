<?php

use App\Http\Controllers\ScoreController;
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

Route::get('/', [ScoreController::class, 'index'])->name('index-score');
Route::get('/add',[ScoreController::class, 'create'])->name('add-score');
Route::post('/add',[ScoreController::class, 'store']);
