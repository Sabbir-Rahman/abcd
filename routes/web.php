<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\blogs;
use App\Http\Controllers\hall_of_fame;
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

Route::get('/hello',[index::class,'index'])->name('home-page');
Route::get('/hello/blog',[index::class,'index'])->name('blog-page');
Route::get('/hello/hall_of_fame',[index::class,'index'])->name('hall-of-fame');
