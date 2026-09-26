<?php

use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('frontend.index');
});

// Dashboard Admin
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.dashboard');


// Produk Admin
Route::resource('/admin/produk', ProdukController::class)
    ->names('admin.produk');

Route::get('/login', function () {
    return view('login.index');
});
