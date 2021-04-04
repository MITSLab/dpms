<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'role:admin']], function () {
    //
    Route::get('/admin', function () {
        return 'admin';
    });
});