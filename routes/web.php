<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about',['nama' => 'Sayang']);
});
Route::get('/blog', function () {
    return view('blog',['nama' => 'Sayang']);
});
Route::get('/contact', function () {
    return view('contact',['nama' => 'Sayang']);
});