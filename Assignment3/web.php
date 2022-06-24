<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/contact', ContactController::class);
Route::resource('/progress', ProgressController::class);
Route::resource('/progress_user', ProgressUserController::class);
Route::get('/changePassword', [App\Http\Controllers\ProgressUserController::class, 'change_password'])->name('change_password');
Route::post('/changePassword', [App\Http\Controllers\ProgressUserController::class, 'update_password'])->name('update_password');


Auth::routes();
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//Route::get('/home', 'HomeController@index')->name('home');
