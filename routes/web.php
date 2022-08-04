<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\HomePageController::class, 'about_us']);
Route::get('/service/uk_study_program/under_graduate', [App\Http\Controllers\HomePageController::class, 'under_graduate']);
Route::get('/service/uk_study_program/post_graduate', [App\Http\Controllers\HomePageController::class, 'post_graduate']);
Route::get('/service/uk_global_talent_program', [App\Http\Controllers\HomePageController::class, 'uk_global_talent_program']);
Route::get('/faq', [App\Http\Controllers\HomePageController::class, 'faq']);
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact']);
Route::post('/contact-us', [App\Http\Controllers\HomePageController::class, 'contactConfirm']);
Route::get('/book_consultation', [App\Http\Controllers\HomePageController::class, 'book_consultation']);

Route::post('/uk_study_program', [App\Http\Controllers\HomePageController::class, 'uk_study_program']);
Route::post('/uk_global_talent_program', [App\Http\Controllers\HomePageController::class, 'post_uk_global_talent_program']);
Route::get('/payment/callback', [App\Http\Controllers\HomePageController::class, 'handleGatewayCallback'])->name('user.handleGatewayCallback');
Route::get('/consultation/successfully', [App\Http\Controllers\HomePageController::class, 'consultation_successfully'])->name('consultation.successful');


Auth::routes();

// Admin
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login']);
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'admin_login']);
});