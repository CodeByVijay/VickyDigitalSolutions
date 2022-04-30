<?php

use App\Http\Controllers\Front\HomeController;
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

Route::get('/',[HomeController::class,'home'])->name('front.home');
Route::get('/about',[HomeController::class,'about'])->name('front.about');
Route::get('/services',[HomeController::class,'services'])->name('front.services');
Route::get('/contact-us',[HomeController::class,'contact_us'])->name('front.contact');
