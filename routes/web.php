<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BackendFormController;
use App\Http\Controllers\Backend\PageController as BackendPageController;
use App\Http\Controllers\Frontend\PagesController as FrontendPagesController;
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

Auth::routes();

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/home', [AuthController::class, 'index'])->name('home');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/stemcell',[HomeController::class,'stemcell'])->name('stemcell');
Route::get('/cosmetic',[HomeController::class,'cosmetic'])->name('cosmetic');
Route::get('/training',[HomeController::class,'training'])->name('training');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/doctors',[FrontendPagesController::class,'doctors'])->name('doctors');
Route::get('/single_doctor/{id}',[FrontendPagesController::class,'single_doctor'])->name('single_doctor');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/eb_registration',[HomeController::class,'eb_registration'])->name('eb_registration');


Route::post('/eb_form_submit',[FormController::class,'eb_form_submit'])->name('eb_form_submit');
Route::post('/contact_form',[FormController::class,'contact_form'])->name('contact_form');
// Admin route start, will make group and middleware later

// Admin route end
Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[BackendPageController::class,'dashboard'])->name('admin.dashboard');
    // Doctors
    Route::get('/add_doctor',[BackendPageController::class,'add_doctor'])->name('add_doctor');
    Route::post('/save_doctor',[DoctorController::class,'save_doctor'])->name('save_doctor');
    Route::get('/doctor',[DoctorController::class,'doctor'])->name('admin.doctor');
    Route::get('/edit_doctor/{id}',[DoctorController::class,'edit_doctor'])->name('admin.edit_doctor');
    Route::post('/update_doctor/{id}',[DoctorController::class,'update_doctor'])->name('admin.update_doctor');
    Route::get('/delete_doctor/{id}',[DoctorController::class,'delete_doctor'])->name('admin.delete_doctor');
//Blogs
Route::get('/blog',[BackendPageController::class,'blog'])->name('admin.blog');
Route::get('/add_blog',[BackendPageController::class,'add_blog'])->name('add_blog');
//Category CRUD
Route::get('/categories',[CategoryController::class,'categories'])->name('admin.categories');
Route::get('/categoryadd',[CategoryController::class,'add_category'])->name('add_category');
Route::post('/categorysave',[CategoryController::class,'save_category'])->name('save_category');

//Products
Route::get('/product',[BackendPageController::class,'product'])->name('admin.product');
Route::get('/add_product',[BackendPageController::class,'add_product'])->name('add_product');

//eb_form_data
Route::get('/eb_form_data',[BackendPageController::class,'eb_form_data'])->name('admin.eb_form_data');
//contact us form data
Route::get('/contact_data',[BackendPageController::class,'contact_data'])->name('admin.contact_data');
//appoitment data
Route::get('/appointment_data',[BackendPageController::class,'appointment_data'])->name('admin.appointment');

// treatment categorty
Route::get('/treatment_types',[BackendFormController::class,'treatment_types'])->name('admin.treatment_types');
Route::post('/add_treatmen_types',[BackendFormController::class,'add_treatmen_types'])->name('admin.add_treatmen_types');
Route::get('/edit_treatment_types/{id}',[BackendFormController::class,'edit_treatment_types'])->name('admin.edit_treatment_types');
Route::post('/update_treatmen_types/{id}',[BackendFormController::class,'update_treatmen_types'])->name('admin.update_treatmen_types');
//Appoinment
Route::post('/take_appointment',[BackendFormController::class,'take_appointment'])->name('admin.take_appointment');
Route::get('/edit_appointment/{id}',[BackendFormController::class,'edit_appointment'])->name('admin.edit_appointment');
Route::post('/update_appointment/{id}',[BackendFormController::class,'update_appointment'])->name('admin.update_appointment');
Route::post('/delete_appointment/{id}',[BackendFormController::class,'delete_appointment'])->name('admin.delete_appointment');

});
