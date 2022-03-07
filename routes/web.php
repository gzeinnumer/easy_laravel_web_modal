<?php

use App\Http\Controllers\AuthV2\LoginControllerV2;
use App\Http\Controllers\AuthV2\LogoutControllerV2;
use App\Http\Controllers\AuthV2\RegisterControllerV2;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::group(['middleware' => ['guest']], function() {

    Route::get('/register', [RegisterControllerV2::class,'show'])->name('register.show');
    Route::post('/register', [RegisterControllerV2::class,'register'])->name('register.perform');

    Route::get('/login', [LoginControllerV2::class,'show'])->name('login');
    Route::post('/login', [LoginControllerV2::class,'login'])->name('login.perform');
});

Route::group(['middleware' => ['auth']], function() {
    
    Route::post('/register_from_dash', [RegisterControllerV2::class, 'registerFromdash'])->name('register_from_dash.perform');

    Route::get('/logout', [LogoutControllerV2::class,'perform'])->name('logout.perform');

    Route::get('/user', [UserController::class,'index'])->name('user.index');
});