<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/adminLogin', function () {
    return view('adminLogin');
});
Route::get('/sssss', function () {
    return view('test');
});

// Route::get('/admin', "AdminController@index");
Route::post("/admin/store", "AdminController@store");
Route::delete("/admin/delete/{id}", "AdminController@destroy");
Route::get("/admin/edit/{id}", "AdminController@edit");
Route::put("/admin/update/{id}", "AdminController@update");
//companies
Route::get('/company', "CompanyController@index");
Route::post("/company/store", "CompanyController@store");
Route::delete("/company/delete/{id}", "CompanyController@destroy");
Route::get("/company/edit/{id}", "CompanyController@edit");
Route::put("/company/update/{id}", "CompanyController@update");
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//employees
Route::get('/user', 'UserController@index');
Route::delete('/user/delete/{id}', 'UserController@destroy');

//admins
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/loginaaa', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get("/", "AdminController@index")->name('admin.dashboard');
});

//user
Route::get("/user/{id}", "UserController@single");
Route::get("/user/edit/{id}", "UserController@edit");
Route::put("/user/update/{id}", "UserController@update");

Route::get('/profile', function () {
    return view('profile');
});
