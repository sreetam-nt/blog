<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [TagController::class, 'store']);
Route::post('/store', [PostController::class, 'store']);
Route::get('/delete/{id}',[TagController::class,'destroy']);
Route::get('/edit/{id}',[PostController::class,'edit']);
Route::post('/comment',[CommentController::class,'store']);

// Route::get('/', function () {
//     return view('post');
// });