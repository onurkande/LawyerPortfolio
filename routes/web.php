<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.index');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/blogs', function () {
    return view('site.blogs');
});

Route::get('/blog-details', function () {
    return view('site.blog-details');
});

Route::get('/services', function () {
    return view('site.services');
});

Route::get('/service-details', function () {
    return view('site.service-details');
});

Route::get('/contact', function () {
    return view('site.contact');
});