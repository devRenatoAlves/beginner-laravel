<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersController;

Route::get('/user/me', [UsersController :: class, 'getProfileMe']);
Route::get ('/user/{username}', [UsersController :: class, 'getProfile']);
;



