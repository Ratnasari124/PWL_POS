<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\UserController;

//JS 3 PRAKTIKUM 4
use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/level', [LevelController::class, 'index']);

//JS 3 PRAKTIKUM 5
use App\Http\Controllers\KategoriController;

Route::get('/kategori', [KategoriController::class, 'index']);

//JS 3 PRAKTIKUM 6
Route::get('/', function () {
    return view('welcome');
});
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
