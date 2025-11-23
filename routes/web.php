<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('orphelin.index');
});
Route::get('/don', function () {
    return view('orphelin.don');
});
Route::get('/activites', function () {
    return view('orphelin.activites');
});

Route::get('/actualites', function () {
    return view('orphelin.actualites');
});
Route::get('/contact', function () {
    return view('orphelin.contact');
});

Route::get('/apropos', function () {
    return view('orphelin.apropos');
});

Route::get('/admin', function () {
    return view('orphelin.admin.dashboard');
});

Route::get('/news-add', function () {
    return view('orphelin.news-add');
});