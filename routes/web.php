<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/VideoMateri', function () {
    return view('VideoMateri');
});
Route::get('/LiveTeaching', function () {
    return view('LiveTeaching');
});
Route::get('/profil', function () {
    return view('profil');
});


