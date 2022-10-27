<?php

use App\Http\Controllers\BusinessController;
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

Route::get('/', [HomeController::class, 'show'])->name('home.show');


//Estudos

//Route::get('posts', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
//Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
//
//Route::get('businesses', [BusinessController::class,'index'])->name('businesses.index');
//Route::post('businesses', [BusinessController::class,'store'])->name('businesses.store');
//
//Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
//
//Route::get('/', function () {
//    return view('welcome');
//});
