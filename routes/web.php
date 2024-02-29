<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('company-profile', [PagesController::class, 'companyProfile'])->name('company-profile');
Route::get('why-us', [PagesController::class, 'whyUs'])->name('why-us');
Route::get('services', [PagesController::class, 'services'])->name('services');
Route::get('client', [PagesController::class, 'client'])->name('client');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
