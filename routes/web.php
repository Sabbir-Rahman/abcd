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

Route::get('/hellolu',[index::class,'index'])->name('home-page');
Route::get('/hellolu/blog',[blogs::class,'index'])->name('blog-page');
Route::get('/hellolu/hall_of_fame',[hall_of_fame::class,'index'])->name('hall-of-fame');
