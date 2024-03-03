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

//PRAKTIKUM 1
/*Route::get('/hello', function () {
    return 'Hello World';
});

//d
Route::get('/world', function () {
    return 'World';
});*/

//g
Route::get('/about', function () {
    return 'NIM : 2241720007 NAMA : RATNASARI';
});

//PRAKTIKUM 2

//a
Route::get('/user/{ratna}', function ($name) {
    return 'Nama saya ' . $name;
});
//d
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});
//f
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel ' . $id;
});

//PRAKTIKUM 3
//a
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});
//d
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

//PRAKTIKUM 4
//a
Route::get('/user/profile', function () {
    //
})->name('profile');

//Controller
Route::get('/hello', [WelcomeController::class, 'hello']);
// resource (/)
Route::get('/', [PageController::class, 'index']);
// resource (/about)
Route::get('/about', [PageController::class, 'about']);
// resource (/articles/{id})
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel ke- ' . $id;
});

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

//view
/*Route::get('/greeting', function () {
    return view('hello', ['name' => 'Ratnasari']);
});*/

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Ratnasari']);
});

Route::get('/greeting', [
    WelcomeController::class,
    'greeting'
]);


use App\Http\Controllers\POSController;

Route::get('/home', [POSController::class, 'home']);



use App\Http\Controllers\ProductController;

// Route prefix for products
Route::prefix('/products')->group(function () {
    Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/category/home-care', [ProductController::class, 'homeCare']);
    Route::get('/category/baby-kid', [ProductController::class, 'babyKid']);
});

use App\Http\Controllers\UserController;

Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile']);

use App\Http\Controllers\SalesController;

Route::get('localhost:8081/POS/public/sales', [SalesController::class, 'index']);

//JS 3 PRAKTIKUM 4
use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/level', [LevelController::class, 'index']);

//JS 3 PRAKTIKUM 5
use App\Http\Controllers\KategoriController;

Route::get('/kategori', [KategoriController::class, 'index']);
