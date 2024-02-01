<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Backend\PageController as BackendPageController;
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

Auth::routes();

Route::get('/home', [AuthController::class, 'index'])->name('home');
Route::get('/index',[HomeController::class,'index'])->name('index');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/stemcell',[HomeController::class,'stemcell'])->name('stemcell');
Route::get('/cosmetic',[HomeController::class,'cosmetic'])->name('cosmetic');
Route::get('/training',[HomeController::class,'training'])->name('training');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/doctors',[HomeController::class,'doctors'])->name('doctors');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/eb_registration',[HomeController::class,'eb_registration'])->name('eb_registration');


Route::post('/eb_form_submit',[FormController::class,'eb_form_submit'])->name('eb_form_submit');

// Admin route start, will make group and middleware later
Route::get('/dashboard',[BackendPageController::class,'dashboard'])->name('admin.dashboard');
// Admin route end