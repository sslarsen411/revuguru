<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

