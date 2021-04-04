<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master\KategoriController;

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
Route::get('/home', function () {
    return view('home');
});


Route::name('pemesanan.')->namespace('Transaksi')->prefix('pemesanan')->group(function(){
    Route::get('/', 'PemesananController@index')->name('index');
    Route::get('/baru', 'PemesananController@create')->name('create');
});

Route::namespace('Master')->group(function(){

    Route::name('produk.')->prefix('produk')->group(function(){
        Route::resource('/', 'ProdukController');
        Route::post('/delete-selected', 'ProdukController@deleteSelected')->name('delete_selected');

        Route::resource('/kategori', 'KategoriProdukController');
        Route::post('/kategori/delete-selected', 'KategoriProdukController@deleteSelected')->name('kategori.delete_selected');

        Route::resource('/uom', 'UomProdukController');
        Route::post('/uom/delete-selected', 'UomProdukController@deleteSelected')->name('uom.delete_selected');

    });


});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/route', function() {
    Artisan::call('route:cache');
    return "Cache is cleared";
});