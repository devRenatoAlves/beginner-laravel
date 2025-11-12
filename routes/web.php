<?php

use \App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersController;







Route::get('/', [LandingController :: class, 'getLandingPage']);

Route::get('/about', [LandingController :: class, 'getAboutPage']);







// Route::get('/test', [UsersController :: class, 'test']);

// Route::get('/user/me', [UsersController :: class, 'getProfileMe']);

// Route::get ('/user/{username}', [UsersController :: class, 'getProfile']);
