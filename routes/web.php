<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerUser'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginUser'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    //shows the admin dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    //shows the properties section on the admin side
    Route::get('/viewProperties', [PropertyController::class, 'manage'])->name('viewProperties');

    //shows the form for creating properties on the admin side
    Route::get('/create-property', [PropertyController::class, 'create'])->name('create-property');

    //creates the properties on the admin side
    Route::post('/create-property', [PropertyController::class, 'store'])->name('store');

    //shows the edit form for the properties on the admin side
    Route::get('/admin/{property}/edit-property', [PropertyController::class, 'edit'])->name('edit-property');

    //updates the property record on admin side
    Route::put('/admin/{property}', [PropertyController::class, 'update'])->name('update');

    //deletes listed properties
    Route::delete('/admin/{property}', [PropertyController::class, 'destroy'])->name('destroy');

    //this logs out the authicated user
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
