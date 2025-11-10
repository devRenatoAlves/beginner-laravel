<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

     public function getProfileMe(){
        $username = 'Renato';
         return view('user', compact( 'username'));
    }

    public function getProfile(string $username){
         return view('user', compact('username'));
    }

}
