<?php

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/login', function () {
    return view('login.index');
});