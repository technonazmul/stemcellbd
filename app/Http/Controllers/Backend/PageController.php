<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Appointment;
use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Product;
use App\Models\Order;
use App\Models\Pathology;
use App\Models\Pharmacy;

class PageController extends Controller
{
    function dashboard() {
        $todayAppointments = Appointment::Count();
        $totalDoctors = Doctor::Count();
        $earlybirdformdata = Form::Count();
        $totalProducts = Product::Count();
        $totalOrders = Order::Count();
        $pharmacyOrders = Pharmacy::Count();
        $pathologyRequests = Pathology::Count();

        $appointments = Appointment::orderBy('id', 'desc')
            ->limit(5)
            ->get();
        return view('backend.main', compact('todayAppointments', 'totalDoctors', 'earlybirdformdata', 'totalProducts', 'totalOrders','pharmacyOrders','pathologyRequests','appointments'));
    }
    function doctor(){
        return view('backend.doctor.doctor');
    }
    function add_doctor(){
        return view('backend.doctor.add_doctor');
     }
     function blog(){
        $blog=Blog::all();
        return view('backend.blog.blog',compact('blog'));
    }
    function add_blog(){
        return view('backend.blog.add_blog');
     }
 
     function categories(){
        return view('backend.category.index');
   }
    function add_category(){
         return view('backend.category.add');
    }
    function product(){
         return view('backend.product.product');
    }
     function add_product(){
         return view('backend.product.add_product');
    }
    function eb_form_data(){
        $eb_data= Form::all();
        return view('backend.eb_form_data',compact('eb_data'));
    }
    function contact_data(){
        $contact_data= Contact::orderBy('id','desc')->where('message_type','0')->get();
        return view('backend.contact.contact_form_data',compact('contact_data',));
    }
    function free_consultancy(){
        $free_consultancy= Contact::orderBy('id','desc')->where('message_type','1')->get();
        return view('backend.contact.free_consultancy',compact('free_consultancy'));
    }
    function appointment_data(){
        $appointmet_data= Appointment::orderBy('id','desc')->get();
        return view('backend.appointment.appointmet_data',compact('appointmet_data'));
    }
}