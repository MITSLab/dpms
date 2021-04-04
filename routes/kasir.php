<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'role:kasir']], function () {
    //
    Route::get('/kasir', function () {
        return 'kasir';
    });
});