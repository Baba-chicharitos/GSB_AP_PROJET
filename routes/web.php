<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comptable_validation', function () {
    return view('comptable_validation');
});

