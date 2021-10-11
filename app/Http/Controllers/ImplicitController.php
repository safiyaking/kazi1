<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ImplicitController extends Controller {
   public function getIndex(){
      echo 'starting method';
   }
   public function getVal($id){
      echo 'show value';
   }
   public function getAdminData(){
      echo 'admin data method';
   }   
   public function adminPassword(){
      echo 'password method';
   }
}
Route::controller('','<class-name-of-the-controller>');