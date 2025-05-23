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
use App\Http\Controllers\Backend\GeneralInfoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\HospitalInfoController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\StepController;
use App\Http\Controllers\Backend\StepSectionController;
use App\Http\Controllers\Backend\VideoSectionController;
use App\Http\Controllers\Backend\GalleryController;
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
Route::get('/storage/{file}', function ($file) {
    return response()->file(Storage::path($file));
})->where('file', '.*');

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/home', [AuthController::class, 'index'])->name('home');
// Show Service
Route::get('/service/{id}',[HomeController::class,'service'])->name('service');
//Show Services under Parent Service 
Route::get('/show_services/{id}',[HomeController::class,'show_services'])->name('show_services');
//Show single service details
Route::get('/single_service/{id}',[HomeController::class,'single_service'])->name('single_service');

Route::get('/training',[HomeController::class,'training'])->name('training');
Route::get('/doctors',[FrontendPagesController::class,'doctors'])->name('doctors');
Route::get('/single_doctor/{id}',[FrontendPagesController::class,'single_doctor'])->name('single_doctor');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/single_blog/{id}',[FrontendPagesController::class,'single_blog'])->name('single_blog');
Route::get('/blog/search',[FrontendPagesController::class,'blogSearch'])->name('blog.search');
Route::get('/blog/search/tags/{search}',[FrontendPagesController::class,'blogSearchByTags'])->name('blog.tag.search');

//frontend shop start
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/shop_single/{slug}',[HomeController::class,'shop_single'])->name('shop_single');
Route::post('/product_review',[HomeController::class,'product_review'])->name('product.review.save');

//frontend shop end
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/eb_registration',[HomeController::class,'eb_registration'])->name('eb_registration');

Route::post('/eb_form_submit',[FormController::class,'eb_form_submit'])->name('eb_form_submit');
Route::post('/contact_form',[FormController::class,'contact_form'])->name('contact_form');
Route::post('/free_consultancy',[FormController::class,'free_consultancy'])->name('free_consultancy');

// Admin route start, will make group and middleware later
// Admin route end   middleware(['auth'])->
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard',[BackendPageController::class,'dashboard'])->name('admin.dashboard');
    //general info
    Route::get('/geleral_info',[GeneralInfoController::class,'geleral_info'])->name('admin.general_info');
    Route::post('/update_general_info/{id}',[GeneralInfoController::class,'update_general_info'])->name('admin.update_general_info');
    //banner section

    Route::get('/banner',[GeneralInfoController::class,'banner'])->name('admin.banner');
    Route::post('/update_banner/{id}',[GeneralInfoController::class,'update_banner'])->name('admin.update_banner');

    //hospital info
    Route::prefix('hospitalinfo')->group(function () {
    Route::get('/', [HospitalInfoController::class, 'index'])->name('hospitalinfo.index');
    Route::get('/create', [HospitalInfoController::class, 'create'])->name('hospitalinfo.create');
    Route::post('/', [HospitalInfoController::class, 'store'])->name('hospitalinfo.store');
    Route::get('/{id}/edit', [HospitalInfoController::class, 'edit'])->name('hospitalinfo.edit');
    Route::put('/{id}', [HospitalInfoController::class, 'update'])->name('hospitalinfo.update');
    Route::delete('/{id}', [HospitalInfoController::class, 'destroy'])->name('hospitalinfo.destroy');
    });

    Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about.index');
    Route::get('/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/{id}', [AboutController::class, 'update'])->name('about.update');
    });
    Route::resource('steps', StepController::class);
     Route::get('step-section', [StepSectionController::class, 'edit'])->name('step-section.edit');
    Route::post('step-section', [StepSectionController::class, 'update'])->name('step-section.update');
     Route::resource('video', VideoSectionController::class);
    Route::get('appointment-banner', [GeneralInfoController::class, 'appointmentBanner'])->name('appointment-banner');
    Route::post('appointment-banner-update', [GeneralInfoController::class, 'updateAppointmentBanner'])->name('update-appointment-banner');
    
    //gallery
    Route::resource('gallery', GalleryController::class)->except(['edit', 'update', 'show']);

    //testimonial
    Route::get('/testimonial',[GeneralInfoController::class,'testimonial'])->name('admin.testimonial');
    Route::post('/add_testimonial',[GeneralInfoController::class,'add_testimonial'])->name('admin.add_testimonial');
    Route::get('/show_testimonial',[GeneralInfoController::class,'show_testimonial'])->name('admin.show_testimonial');
    Route::get('/edit_testimonial/{id}',[GeneralInfoController::class,'edit_testimonial'])->name('admin.edit_testimonial');
    Route::post('/update_testimonial/{id}',[GeneralInfoController::class,'update_testimonial'])->name('admin.update_testimonial');
    Route::post('/delete_testimonial/{id}',[GeneralInfoController::class,'delete_testimonial'])->name('admin.delete_testimonial');
    //service category
    Route::get('/show_service_category',[ServiceController::class,'service_category'])->name('admin.service_category');
    Route::post('/add_service_category',[ServiceController::class,'add_service_category'])->name('admin.add_service_category');
    Route::get('/edit_service_category/{id}',[ServiceController::class,'edit_service_category'])->name('admin.edit_service_category');
    Route::post('/update_service_category/{id}',[ServiceController::class,'update_service_category'])->name('admin.update_service_category');
    //delete service category
    Route::get('/delete_service_category/{id}',[ServiceController::class,'delete_service_category'])->name('admin.delete_service_category');


    Route::get('/add_service',[ServiceController::class,'add_service'])->name('admin.add_service');
    Route::post('/create_service',[ServiceController::class,'create_service'])->name('admin.create_service');
    //show service to backend
    Route::get('/all_service',[ServiceController::class,'all_service'])->name('admin.all_service');
    Route::get('/show_service/{id}',[ServiceController::class,'show_service'])->name('admin.show_service');
    Route::get('/edit_service/{id}',[ServiceController::class,'edit_service'])->name('admin.edit_service');
    Route::post('/update_service/{id}',[ServiceController::class,'update_service'])->name('admin.update_service');
    Route::get('/delete_service/{id}',[ServiceController::class,'delete_service'])->name('admin.delete_service');
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
Route::get('/products',[ProductController::class,'show_products'])->name('admin.product');
Route::get('/add_product',[BackendPageController::class,'add_product'])->name('add_product');
Route::post('/save_product',[ProductController::class,'save_product'])->name('save_product');
Route::get('/product_edit/{id}',[ProductController::class,'product_edit'])->name('product_edit');
Route::post('/product_update/{id}',[ProductController::class,'product_update'])->name('product_update');
Route::get('/product_make_feature/{id}',[ProductController::class,'product_make_feature'])->name('product_make_feature');
Route::get('/product_add_footer/{id}',[ProductController::class,'product_add_footer'])->name('product_add_footer');
Route::get('/product_delete/{id}',[ProductController::class,'product_delete'])->name('product_delete');
// Products Category CRUD
Route::get('/categories',[CategoryController::class,'categories'])->name('admin.categories');
Route::get('/categoryadd',[CategoryController::class,'add_category'])->name('add_category');
Route::get('/categoryedit/{id}',[CategoryController::class,'edit_category'])->name('edit_category');
Route::post('/categorysave',[CategoryController::class,'save_category'])->name('save_category');
Route::post('/categoryedit/{id}',[CategoryController::class,'update_product_category'])->name('update_product_category');
// Product Reviews
Route::get('/product_reviews',[ProductController::class,'product_reviews'])->name('admin.product_reviews');
Route::get('/product_reviews_approve/{id}',[ProductController::class,'product_reviews_approve'])->name('admin.product_reviews_approve');
Route::get('/product_reviews_delete/{id}',[ProductController::class,'product_reviews_delete'])->name('admin.product_reviews_delete');
//End Products

//eb_form_data
Route::get('/eb_form_data',[BackendPageController::class,'eb_form_data'])->name('admin.eb_form_data');
//contact us form data
Route::get('/contact_data',[BackendPageController::class,'contact_data'])->name('admin.contact_data');

Route::get('/free_consultancy',[BackendPageController::class,'free_consultancy'])->name('admin.free_consultancy');
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