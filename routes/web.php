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
Route::get('users', function () {
    return view('users');
}); 
Route::get('user/login', function () {
    return view('user');
}); 
Route::get('change_password', function () {
    return view('change_password');
}); 
Route::get('admin_dashboard', function () {
    return view('admin_dashboard');
});
Route::get('admin_user_list', function () {
    return view('admin_user_list');
});  
Route::get('admin_support_cat', function () {
    return view('admin_support_cat');
});  
Route::get('user_dashboard', function () {
    return view('user_dashboard');
}); 
Route::get('admin/login', function () {
    return view('admin');
}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
