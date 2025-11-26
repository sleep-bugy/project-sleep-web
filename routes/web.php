<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/features', [FeaturesController::class, 'index'])->name('features');
Route::get('/download', [DownloadController::class, 'index'])->name('download');
Route::get('/download/{device}', [DeviceController::class, 'show'])->name('device.show');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::post('/team/apply', [TeamController::class, 'apply'])->name('team.apply');
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Language switch route
Route::get('/language/{lang}', [LanguageController::class, 'switchLanguage'])->name('language.switch');

// Auth routes
require __DIR__ . '/auth.php';

// Admin routes (requires authentication)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');  // Main admin dashboard
    Route::prefix('admin')->group(function () {
        Route::get('/devices', [AdminController::class, 'devices'])->name('admin.devices');
        Route::get('/roms', [AdminController::class, 'roms'])->name('admin.roms');
        Route::get('/content', [AdminController::class, 'content'])->name('admin.content');
        Route::get('/applications', [AdminController::class, 'applications'])->name('admin.applications');
        Route::get('/languages', [AdminController::class, 'languages'])->name('admin.languages');
    });
});
