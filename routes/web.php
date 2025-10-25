<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');
Route::get('/{page}', function (string $page) {
    // Map /blog/my-post -> view('blog.my-post')
    $view = 'pages.' . $page;
    if (View::exists($view)) {
        return view($view, ['page' => $page]);
    }
    abort(404);
})->where('page', '[A-Za-z0-9\-_]+');
Route::get('/blog/{slug}', function (string $slug) {
    // Map /blog/my-post -> view('blog.my-post')
    $view = 'blog.' . $slug;
 //   ray(View::exists($view));
    if (View::exists($view)) {
        return view($view, ['page' => $slug]);
    }
    abort(404);
})->where('slug', '[A-Za-z0-9\-_]+')->name('slug');
Route::get('/alt', function () {
    return view('pages.alt');
})->name('alt');

