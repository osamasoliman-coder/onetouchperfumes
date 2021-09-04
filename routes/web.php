<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('website.ecommerce.index2');
})->name('website.home');


Route::get('/cart', function () {
    return view('website.ecommerce.cart');
})->name('website.cart');

Route::get('/products', function () {
    return view('website.ecommerce.products');
});

Route::get('/invoice', function () {
    return view('website.ecommerce.invoice');
});


Route::get('/product_details', function () {
    return view('website.ecommerce.product_details');
})->name('website.product.details');


Route::get('/checkout', function () {
    return view('website.ecommerce.checkout');
});

Route::get('/wishlist', function () {
    return view('website.ecommerce.wishlist');
});


Auth::routes();

//Route::get('/login',function (){
//   return view('auth.login');
//});
//
//Route::post('/login-user', [Controller::class,'login'])->name('login.users');
//
//
//Route::get('/register',function (){
//    return view('auth.register');
//});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// admin
Route::get('/admin', function () {
    return view('admin.index');
})->name('website.home');
