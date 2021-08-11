<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PaytmController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [TagController::class, 'store']);
Route::post('/store', [PostController::class, 'store']);
Route::get('/delete/{id}',[TagController::class,'destroy'])->middleware('tagcheck');
Route::get('/edit/{id}',[PostController::class,'edit']);

Route::get('/tag/{id}',[TagController::class,'edit']);

Route::post('/comment/{id}',[CommentController::class,'store']);

Route::get('/notification', [PostController::class, 'notification']);

Route::get('/markasread', [CommentController::class, 'markasread']);

Route::get('/', function () {
    return view('paypal');
});


Route::get('payment', [PayPalController::class,'payment'])->name('payment');
Route::get('cancel', [PayPalController::class,'cancel'])->name('cancel');
Route::get('payment/success', [PayPalController::class,'success'])->name('success');


Route::get('/initiate',[PaytmController::class,'initiate'])->name('initiate.payment');
Route::post('/payment',[PaytmController::class,'pay'])->name('make.payment');
Route::post('/payment/status', [PaytmController::class,'paymentCallback'])->name('status');
Route::get('/paytm', function () {
    return view('paytm');
});