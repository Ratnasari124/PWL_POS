<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

//Soal No 3 PWL 5
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('/kategori/edit');
Route::put('/kategori/{id}', [KategoriController::class, 'store2'])->name('/kategori/store2');

//Soal No 4 PWL 5
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('/kategori/delete');
