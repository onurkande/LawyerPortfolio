<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceSettingController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutFeatureController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogSettingController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\UsefulLinkController;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin panel routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group.
|
*/

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    // Service Settings Route
    Route::put('/service-settings', [ServiceSettingController::class, 'update'])->name('service-settings.update');

    // Service Routes
    Route::resource('services', ServiceController::class);

    // About routes
    Route::get('/abouts', [AboutController::class, 'index'])->name('abouts.index');
    Route::put('/abouts', [AboutController::class, 'update'])->name('abouts.update');
    Route::resource('about-features', AboutFeatureController::class);

    // Blog routes
    Route::put('/blog-settings', [BlogSettingController::class, 'update'])->name('blog-settings.update');
    Route::resource('blogs', BlogController::class);
    Route::resource('blog-categories', BlogCategoryController::class);

    // Site Settings routes
    Route::get('/site-settings', [SiteSettingController::class, 'index'])->name('site-settings.index');
    Route::put('/site-settings', [SiteSettingController::class, 'update'])->name('site-settings.update');

    // Contact routes
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::put('/contacts', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contact-messages', [ContactMessageController::class, 'index'])->name('contact-messages.index');
    Route::put('/contact-messages/{message}/mark-as-read', [ContactMessageController::class, 'markAsRead'])->name('contact-messages.mark-as-read');
    Route::delete('/contact-messages/{message}', [ContactMessageController::class, 'destroy'])->name('contact-messages.destroy');

    // Useful Links routes
    Route::resource('useful-links', UsefulLinkController::class);
});

