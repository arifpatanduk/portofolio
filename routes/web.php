<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'portofolio'])->name('portofolio');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');
Route::get('/social-profiles', [PagesController::class, 'social'])->name('social');
Route::get('/skills', [PagesController::class, 'skills'])->name('skills');
Route::get('/educations', [PagesController::class, 'educations'])->name('educations');
Route::get('/experiences', [PagesController::class, 'experiences'])->name('experiences');
