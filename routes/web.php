<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('orphelin.index');
});
Route::get('/don', function () {
    return view('orphelin.don');
});
Route::get('/activities', function () {
    return view('orphelin.activities');
});

Route::get('/actualites', function () {
    return view('orphelin.actualites');
});