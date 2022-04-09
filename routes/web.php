<?php

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


Route::post('post-store',[\App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::get('/',[\App\Http\Controllers\PostController::class,'view'])->name('home');

