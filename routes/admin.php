<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'role:admin']], function () {
    //
    Route::get('/admin', function () {
        return 'admin';
    });
});

Route::namespace('Master')->group(function(){

    Route::resource('/produk', 'ProdukController');
    Route::name('produk.')->prefix('produk')->group(function(){
        Route::post('/delete-selected', 'ProdukController@deleteSelected')->name('delete_selected');

        Route::resource('/kategori', 'KategoriProdukController');
        Route::post('/kategori/delete-selected', 'KategoriProdukController@deleteSelected')->name('kategori.delete_selected');

        Route::resource('/uom', 'UomProdukController');
        Route::post('/uom/delete-selected', 'UomProdukController@deleteSelected')->name('uom.delete_selected');
    });

    Route::resource('/kontak', 'KontakController');
    Route::name('kontak.')->prefix('kontak')->group(function(){
        Route::resource('/detail', 'KontakDetailController');
        Route::post('/delete-selected', 'KontakController@deleteSelected')->name('delete_selected');

        Route::resource('/member', 'MemberController');
        Route::resource('/tipe-member', 'TipeMemberController');

        Route::resource('/supplier', 'SupplierController');
        Route::resource('/kurir', 'KurirController');
    });

});

Route::name('admin.')->prefix('admin')->group(function(){
    Route::resource('/users', 'UserController');
    Route::post('/users/delete-selected', 'UserController@deleteSelected')->name('users.delete_selected');

    Route::resource('/role', 'RoleController');
    Route::resource('/kategori-user', 'KategoriUserController');
});