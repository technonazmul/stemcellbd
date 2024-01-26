<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[HomeController::class,'index'])->name('index');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/stemcell',[HomeController::class,'stemcell'])->name('stemcell');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/doctors',[HomeController::class,'doctors'])->name('doctors');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');