<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Signup;
use App\Http\Controllers\Login;
use App\Http\Controllers\Main;
use App\Http\Controllers\Delete;
use App\Http\Controllers\Update;
use App\Http\Controllers\Edit;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\Verfiy;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/Signin',[Signup::class,'addUser']);

Route::post('/Login',[Login::class,'login']);

Route::get('/login', function () {
    return view('login');
});

Route::delete('/delete/{id}', [Delete::class, 'delete']);

Route::post('/edit/{id}', [Update::class, 'update']);

Route::put('/update/{id}', [Edit::class,'save']);

// Route::get('/Update', function(){
//     return view('update');
// });

Route::get('/main', [Main::class,'display']);

Route::view('/Verify', 'verify');

Route::post('/forget', [Verfiy::class,'verify']);

Route::view('/change', 'change');

Route::post('/reset', [ChangePasswordController::class,'change']);