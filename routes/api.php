<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\PenjualanController;
use App\Http\Controllers\Api\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Controllers\Api\RegisterController;
use Illuminate\Controllers\Api\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
//pwl 10
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');


Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

//Route m_user
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);

//Route kategori
Route::get('kategoris', [KategoriController::class, 'index']);
Route::post('kategoris', [KategoriController::class, 'store']);
Route::get('kategoris/{kategori}', [KategoriController::class, 'show']);
Route::put('kategoris/{kategori}', [KategoriController::class, 'update']);
Route::delete('kategoris/{kategori}', [KategoriController::class, 'destroy']);

//Route barang
Route::get('barangs', [BarangController::class, 'index']);
Route::post('barangs', [BarangController::class, 'store']);
Route::get('barangs/{barang}', [BarangController::class, 'show']);
Route::put('barangs/{barang}', [BarangController::class, 'update']);
Route::delete('barangs/{barang}', [BarangController::class, 'destroy']);

//pwl 11
Route::post('/register1', App\Http\Controllers\Api\RegisterController::class)->name('register1');

Route::post('/barang1', App\Http\Controllers\Api\BarangController::class)->name('barang1');
Route::get('/barang1', [App\Http\Controllers\Api\BarangController::class, 'index'])->name('barang1');
// CRUD transaksi
//Route::get('transaksi', [PenjualanController::class, 'index']);
Route::post('transaksi', PenjualanController::class)->name('transaksi');
Route::get('transaksi', function () {
    $transaksi = PenjualanModel::all();

    return response()->json([
        'success' => true,
        'data' => $transaksi,
    ]);
});
Route::get('transaksi/{transaksi}', function () {
    $transaksi = PenjualanModel::all();

    return response()->json([
        'success' => true,
        'data' => $transaksi,
    ]);
});
Route::get('transaksi/{transaksi}', [PenjualanController::class, 'show']);
Route::put('transaksi/{transaksi}', [PenjualanController::class, 'update']);
Route::delete('transaksi/{transaksi}', [PenjualanController::class, 'destroy']);
