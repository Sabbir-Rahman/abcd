<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\blogs;
use App\Http\Controllers\hall_of_fame;
use App\Http\Controllers\our_alumni;
use App\Http\Controllers\present_committee;
use App\Http\Controllers\about_us;
use App\Http\Controllers\highlights;
use App\Http\Controllers\events;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[index::class,'index'])->name('home-page');
Route::get('/blog',[blogs::class,'index'])->name('blog-page');
Route::get('/hall_of_fame',[hall_of_fame::class,'index'])->name('hall-of-fame');
Route::get('/our_alumni',[our_alumni::class,'index'])->name('our-alumni');
Route::get('/our_alumni/second_page',[our_alumni::class,'goSecondPage'])->name('our-alumni-second');
Route::get('/present_commitee',[present_committee::class,'index'])->name('present-committee');
Route::get('/highlights',[highlights::class,'index'])->name('highlights');
Route::get('/events',[events::class,'index'])->name('events');
Route::get('/about_us',[about_us::class,'index'])->name('about');
