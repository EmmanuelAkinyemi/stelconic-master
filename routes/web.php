<?php

use App\Http\Controllers\PropertyController;
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


Route::get('/', [PropertyController::class, 'index'])->name('index');
Route::post('/create', [PropertyController::class, 'store'])->name('store');

Route::view('/property', 'property');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');
Route::view('/signin', 'signin');
Route::view('/create', 'create');
