<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
 {
 //
 }
 Route::get('profile', 'AdminController@show')->middleware('auth');
 class AdminController extends Controller
{
    public function __construct()
    {
        // function body
    }
}
$this->middleware(function ($request, $next) {
    // middleware statements;
    return $next($request);
}
);