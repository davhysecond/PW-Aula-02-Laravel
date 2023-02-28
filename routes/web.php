<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/produtos', function () {
    return view('produtos');
});
