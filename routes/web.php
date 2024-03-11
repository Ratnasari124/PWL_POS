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

//PWL 4 P 2.6
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
