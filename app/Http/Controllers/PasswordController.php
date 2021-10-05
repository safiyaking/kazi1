<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //
}
oute::resources([
    'password' => 'PasswordController',
    'picture' => 'DpController'
]
);
