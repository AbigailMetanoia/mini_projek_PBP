<?php

use Illuminate\Http\Request;
use App\Http\Livewire\Riwayat;
use App\Http\Livewire\ViewBook;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ViewBooks;
use App\Http\Livewire\Auth\Login;
// use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;


use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Controllers\ViewBooksController;
use App\Http\Livewire\LaravelExamples\Keranjang;

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

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/riwayat_transaksi', Riwayat::class)->name('riwayat_transaksi');

    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');

    Route::get('/laravel-keranjang', Keranjang::class)->name('keranjang');
    Route::get('/keranjang/delete/{id}', 'KeranjangController@delete')->name('keranjang.delete');

    Route::get('/search', 'ViewBooksController@search')->name('search');
    // Route::get('/details-book/{id}', 'ViewBooksController@detailsBook')->name('detailsBook')
    // Route::get('/add-to-cart/{id}', 'ViewController@addToCart')->name('addtocart');;
    Route::post('/rating-buku/{id}/store', 'RatingBukuController@store')->name('store');
    Route::get('/details-book/{id}', ViewBook::class)->name('detailsBook');

});

