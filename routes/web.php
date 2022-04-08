<?php

// use App\Http\Controllers\IndexController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

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
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('welcome');
// });
// Route::get('/', [IndexController::class, 'index']);
// Route::get('/', IndexController::class);

// Route::get('/', [IndexController::class, 'index']);

Route::get('/', IndexController::class);
Route::get('/category/{slug}', CategoryController::class);
Route::get('/tag/{slug}', TagController::class);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/search', [PostController::class, 'search']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
