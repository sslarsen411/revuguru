<?php

use App\Livewire\Calendar;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('pages.index');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/lp', function () {
    return view('pages.lp');
})->name('lp');
Route::get('/solutions', function () {
    return view('pages.solutions');
})->name('solutions');
Route::get('/platform', function () {
    return view('/blog.platform-prison');
})->name('platform');
Route::get('/reviews-are-a-pain', function () {
    return view('/blog.reviews-are-a-pain');
})->name('pain');
//Route::get('/calendar', function () {
//    return view('pages.calendar');
//})->name('calendar');
Route::get('/calendar', Calendar::class);
