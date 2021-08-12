<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PaytmController;
use App\Http\Controllers\StripeController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('paymentcheck');
Route::post('/home', [TagController::class, 'store']);
Route::post('/store', [PostController::class, 'store']);
Route::get('/delete/{id}',[TagController::class,'destroy'])->middleware('tagcheck');
Route::get('/edit/{id}',[PostController::class,'edit']);

Route::get('/tag/{id}',[TagController::class,'edit']);

Route::post('/comment/{id}',[CommentController::class,'store']);

Route::get('/notification', [PostController::class, 'notification']);

Route::get('/markasread', [CommentController::class, 'markasread']);

Route::get('/stripe', function () {
    return view('stripe');
});

Route::get('/paypal', function () {
    return view('paypal');
});
Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::get('/cancelpayment', [StripeController::class, 'cancel']);
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');


// Route::get('payment', [PayPalController::class,'payment'])->name('payment');
// Route::get('cancel', [PayPalController::class,'cancel'])->name('cancel');
// Route::get('payment/success', [PayPalController::class,'success'])->name('success');


// Route::get('/initiate',[PaytmController::class,'initiate'])->name('initiate.payment');
// Route::post('/payment',[PaytmController::class,'pay'])->name('make.payment');

// Route::post('/payment/status', [PaytmController::class,'paymentCallback'])->name('status');

// Route::get('/paytm', function () {
//     return view('paytm');
// });


// Route::post('paytm-payment',[PaytmController::class, 'paytmPayment'])->name('paytm.payment');
// Route::post('paytm-callback',[PaytmController::class, 'paytmCallback'])->name('paytm.callback');
// Route::get('paytm-purchase',[PaytmController::class, 'paytmPurchase'])->name('paytm.purchase');


