<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\ContactMessageController;
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

Route::get('/', [IndexController::class, 'index'])->name('site.index');

Route::get('/about', [AboutController::class, 'index'])->name('site.about');

Route::get('/blogs', [BlogController::class, 'index'])->name('site.blogs');

Route::get('/blog-details/{slug}', [BlogController::class, 'show'])->name('site.blog.show');

Route::get('/services', [ServiceController::class, 'index'])->name('site.services');

Route::get('/service-details/{slug}', [ServiceController::class, 'show'])->name('site.service.show');

Route::get('/contact', [ContactController::class, 'index'])->name('site.contact');

Route::post('/contact', [ContactMessageController::class, 'store'])->name('site.contact.store');

require __DIR__.'/admin.php';
