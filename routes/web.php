<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', function () {
    return view('index');
})->name('index');

Route::get('/disclaimer', function () {
    return view('disclaimer');
})->name('disclaimer');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/product-license-agreement', function () {
    return view('product-license-agreement');
})->name('license-agreement');

Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');

Route::get('/taxonomy-diagram', function () {
    return view('taxonomy-diagram');
})->name('taxonomy-diagram');

Route::get('/terms-conditions', function () {
    return view('terms');
})->name('terms');
