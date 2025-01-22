<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/master2', function () {
    return view('master2');
});

Route::get('/master3', function () {
    return view('master3');
});