<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Authen;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['connectedUsers'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->middleware('connectedUsers');
    
    Route::get('/signup',function(){
        return view('signup');
    });
    
    Route::post('/signup', [UsersController::class, 'Create']);
    
    Route::get('/login',function(Request $request){
        return view('login');
    })->name('login');
    
    Route::post('/login', [UsersController::class, 'Auth']);
});

Route::middleware(['notConnectedUsers'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    
    
    Route::get('/profile',[ProfileController::class, 'getProfile']);
    Route::get('/profile/{username}',[ProfileController::class, 'index']);
    Route::get('/profile/{username}/parameter',[ProfileController::class, 'profileParameter']);
    
    Route::get('/disconnect',[UsersController::class, 'UserDisconnect']);
});
