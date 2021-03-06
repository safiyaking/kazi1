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
use App\Http\Controllers\PostController;
Route::resource('posts', PostController::class);
Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('/posts','PostsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
Route::get('/', function () {
    return view('index');
});
Route::prefix('app')->group(function () {
    // Registration routes
    Route::get('registration/create', 'RegistrationController@create')->name('app-registration-form');
});
// Templates
Route::get('templates/ubold/{any}', 'UboldController@index');
 // Using PHP callable syntax...
 Route::get('/users', [UserController::class, 'index']);
 Route::get('/user/{id}', [UserController::class, 'show']);

 // Using string syntax...
 Route::get('/users', 'App\Http\Controllers\UserController@index');
 Route::resource('users', UserController::class, ['except' => ['create', 'edit']]);
 Route::get('/', 'App\Http\Controllers\PagesController@index');
 Route::resource('/', 'PagesController');
 Route::get('/', [PagesController::class,'index']);