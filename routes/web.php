<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
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

// foreach(File::allFiles(_DIR_ . '/modules') as $route_file) {
//     require $route_file->getPathname();
// }

// Route::fallback(function(){
//     return view('404');
// });

Route::get('/', [HomeController::class, 'index']);

Route::view('/about', 'about');

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('contact_mail', [HomeController::class, 'sendMail']);

//shows all the articles on the client
Route::get('/blogs', [BlogController::class, 'list'])->name('list');

//shows all the properties  on the client
Route::get('/properties', [PropertyController::class, 'list'])->name('list');

//shows and display selected article
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('show');

//shows and display selected property on the section on the client side
Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('show');

Route::group(['middleware' => 'guest'], function () {

    Route::get('/register', [AuthController::class, 'register'])->name('register');

    Route::post('/register', [AuthController::class, 'registerUser'])->name('register');

    Route::get('/login', [AuthController::class, 'login'])->name('login');

    Route::post('/login', [AuthController::class, 'loginUser'])->name('login');

    Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');
});

Route::group(['middleware' => ['auth']], function () {
    //shows the admin dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    //renders the view for team members on the dashboard
    Route::get('/team', [TeamController::class, 'team'])->name('team');
    Route::get('/create-team', [TeamController::class, 'create'])->name('create-team');

    Route::post('/create-team', [TeamController::class, 'storeTeam'])->name('storeTeam');

    //shows the edit form for the teams on the admin side
    Route::get('/admin/{team}/edit-team', [TeamController::class, 'editTeam'])->name('editTeam');

    //updates the property record on admin side
    Route::put('/admin/{team}', [TeamController::class, 'updateTeam'])->name('updateTeam');

    //shows the properties section on the admin side
    Route::get('/viewProperties', [PropertyController::class, 'manage'])->name('viewProperties');

    //shows the form for creating properties on the admin side
    Route::get('/create-property', [PropertyController::class, 'create'])->name('create-property');

    //creates the properties on the admin side
    Route::post('/create-property', [PropertyController::class, 'storeProperty'])->name('storeProperty');

    //shows the edit form for the properties on the admin side
    Route::get('/admin/{property}/edit-property', [PropertyController::class, 'edit'])->name('edit-property');

    //updates the property record on admin side
    Route::put('/admin/{property}', [PropertyController::class, 'update'])->name('update');

    //shows the properties section on the admin side
    Route::get('/viewArticles', [BlogController::class, 'manage'])->name('viewProperties');

    //shows the form for creating properties on the admin side
    Route::get('/create-articles', [BlogController::class, 'create'])->name('create-articles');

    //creates the properties on the admin side
    Route::post('/create-articles', [BlogController::class, 'store'])->name('store');

    //shows the edit form for the properties on the admin side
    Route::get('/admin/{blog}/edit-article', [BlogController::class, 'edit'])->name('edit-article');

    //updates the property record on admin side
    Route::put('/articles/{blog}', [BlogController::class, 'update'])->name('update');

    //deletes listed properties
    Route::delete('/admin/{property}', [PropertyController::class, 'destroy'])->name('destroy');

    //deletes listed properties
    Route::delete('/admin/{blog}', [BlogController::class, 'destroy'])->name('destroy');

    //this logs out the authicated user
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route::group(['namespace' => ''], function () {Auth::routes();});
