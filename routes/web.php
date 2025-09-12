<?php

use App\Livewire\Calendar;
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
//Route::get('/calendar', function () {
//    return view('pages.calendar');
//})->name('calendar');
Route::get('/calendar', Calendar::class);
