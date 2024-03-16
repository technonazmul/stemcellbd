<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FormController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BackendFormController;
use App\Http\Controllers\Backend\PageController as BackendPageController;
use App\Http\Controllers\Frontend\PagesController as FrontendPagesController;
use App\Http\Controllers\Backend\ProductController;
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
Route::get('/service/{id}',[HomeController::class,'service'])->name('service');
Route::get('/show_services/{id}',[HomeController::class,'show_services'])->name('show_services');
Route::get('/cosmetic',[HomeController::class,'cosmetic'])->name('cosmetic');
Route::get('/training',[HomeController::class,'training'])->name('training');
Route::get('/doctors',[FrontendPagesController::class,'doctors'])->name('doctors');
Route::get('/single_doctor/{id}',[FrontendPagesController::class,'single_doctor'])->name('single_doctor');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/single_blog/{id}',[FrontendPagesController::class,'single_blog'])->name('single_blog');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/eb_registration',[HomeController::class,'eb_registration'])->name('eb_registration');

Route::post('/eb_form_submit',[FormController::class,'eb_form_submit'])->name('eb_form_submit');
Route::post('/contact_form',[FormController::class,'contact_form'])->name('contact_form');

// Admin route start, will make group and middleware later
// Admin route end   middleware(['auth'])->
Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[BackendPageController::class,'dashboard'])->name('admin.dashboard');
    //service category
    Route::get('/service_category',[ServiceController::class,'service_category'])->name('admin.service_category');
    Route::post('/add_service_category',[ServiceController::class,'add_service_category'])->name('admin.add_service_category');
    Route::get('/edit_service_category/{id}',[ServiceController::class,'edit_service_category'])->name('admin.edit_service_category');
    Route::post('/update_service_category/{id}',[ServiceController::class,'update_service_category'])->name('admin.update_service_category');
    Route::get('/show_service/{id}',[ServiceController::class,'show_service'])->name('admin.show_service');
    // Doctors
    Route::get('/add_doctor',[BackendPageController::class,'add_doctor'])->name('add_doctor');
    Route::post('/save_doctor',[DoctorController::class,'save_doctor'])->name('save_doctor');
    Route::get('/doctor',[DoctorController::class,'doctor'])->name('admin.doctor');
    Route::get('/edit_doctor/{id}',[DoctorController::class,'edit_doctor'])->name('admin.edit_doctor');
    Route::post('/update_doctor/{id}',[DoctorController::class,'update_doctor'])->name('admin.update_doctor');
    Route::get('/delete_doctor/{id}',[DoctorController::class,'delete_doctor'])->name('admin.delete_doctor');

//Blogs start
Route::get('/blog',[BackendPageController::class,'blog'])->name('admin.blog');
Route::get('/add_blog',[BackendPageController::class,'add_blog'])->name('add_blog');
Route::post('/create_blog',[BlogController::class,'create_blog'])->name('admin.create_blog');
Route::get('/edit_blog/{id}',[BlogController::class,'edit_blog'])->name('admin.edit_blog');
Route::post('/update_blog/{id}',[BlogController::class,'update_blog'])->name('admin.update_blog');
Route::get('/delete_blog/{id}',[BlogController::class,'delete_blog'])->name('admin.delete_blog');
//blog category
Route::get('/blog_category',[BlogController::class,'blog_category'])->name('blog_category');
Route::post('/add_blog_category',[BlogController::class,'add_blog_category'])->name('admin.add_blog_category');
Route::get('/edit_blog_category/{id}',[BlogController::class,'edit_blog_category'])->name('admin.edit_blog_category');
Route::post('/update_blog_category/{id}',[BlogController::class,'update_blog_category'])->name('admin.update_blog_category');
//blog comments
Route::post('/add_comment',[CommentController::class,'add_comment'])->name('admin.add_comment');
Route::get('/blog_comment',[CommentController::class,'blog_comment'])->name('admin.blog_comment');
Route::get('/approve_comment/{id}',[CommentController::class,'approve_comment'])->name('admin.approve_comment');
Route::get('/delete_comment/{id}',[CommentController::class,'delete_comment'])->name('admin.delete_comment');
Route::post('/reply_comment',[CommentController::class,'reply_comment'])->name('admin.reply_comment');
Route::get('/show_reply/{id}',[CommentController::class,'show_reply'])->name('admin.show_reply');
//blog end

//Products
Route::get('/product',[BackendPageController::class,'product'])->name('admin.product');
Route::get('/add_product',[BackendPageController::class,'add_product'])->name('add_product');
Route::post('/save_product',[ProductController::class,'save_product'])->name('save_product');
// Products Category CRUD
Route::get('/categories',[CategoryController::class,'categories'])->name('admin.categories');
Route::get('/categoryadd',[CategoryController::class,'add_category'])->name('add_category');
Route::get('/categoryedit/{id}',[CategoryController::class,'edit_category'])->name('edit_category');
Route::post('/categorysave',[CategoryController::class,'save_category'])->name('save_category');
Route::post('/categoryedit/{id}',[CategoryController::class,'update_product_category'])->name('update_product_category');
//End Products

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
Route::get('/delete_appointment/{id}',[BackendFormController::class,'delete_appointment'])->name('admin.delete_appointment');

});
