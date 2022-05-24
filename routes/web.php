<?php

use App\Http\Controllers\LoginController;
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
Route::get('/add', [ScoreController::class, 'create'])->name('add-score');
Route::post('/add', [ScoreController::class, 'store']);
Route::get('/admin', [ScoreController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/destroy/{id}', [ScoreController::class, 'destroyShow'])->name('delete-confirmation')->middleware('auth');
Route::delete('/destroy{id}', [ScoreController::class, 'destroy'])->name('delete')->middleware('auth');
Route::get('/approved/{id}', [ScoreController::class, 'approvedShow'])->name('approved-confirmation')->middleware('auth');
Route::put('/approved/{id}', [ScoreController::class, 'approved'])->name('approved')->middleware('auth');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
