<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});


Route::get('/about', function () {
    return view('about',['nama' => 'Sayang','title'=>'About']);
});
Route::get('/blog', function () {
    return view('blog',['nama' => 'Sayang','title'=>'Blog']);
});
Route::get('/contact', function () {
    return view('contact',['nama' => 'Sayang','title'=>'Contact']);
});