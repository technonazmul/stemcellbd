<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdvanCellHealth</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            
            
          </li>
          {{-- general info --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.general_info')}}" class="nav-link">
                  <i class=""></i>
                  <p>General Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.banner')}}" class="nav-link">
                  <i class=""></i>
                  <p>Main Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('hospitalinfo.index')}}" class="nav-link">
                  <i class=""></i>
                  <p>Hospital infos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('about.index')}}" class="nav-link">
                  <i class=""></i>
                  <p>About Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('step-section.edit')}}" class="nav-link">
                  <i class=""></i>
                  <p>Step Setting Heading</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('steps.index')}}" class="nav-link">
                  <i class=""></i>
                  <p>Step Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('video.index')}}" class="nav-link">
                  <i class=""></i>
                  <p>Video Banner</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('appointment-banner')}}" class="nav-link">
                  <i class=""></i>
                  <p>Appointment Banner</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('gallery.index')}}" class="nav-link">
                  <i class=""></i>
                  <p>Image Gallery</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('admin.testimonial')}}" class="nav-link">
                  <i class=""></i>
                  <p>Add Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.show_testimonial')}}" class="nav-link">
                  <i class=""></i>
                  <p>Testimonial</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- service --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.all_service')}}" class="nav-link">
                  <i class=""></i>
                  <p>All Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.service_category')}}" class="nav-link">
                  <i class=""></i>
                  <p>service Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.add_service')}}" class="nav-link">
                  <i class=""></i>
                  <p>Create Service post</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- doctor --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Doctors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.doctor')}}" class="nav-link">
                  <i class=""></i>
                  <p>Doctors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add_doctor')}}" class="nav-link">
                  <i class=""></i>
                  <p>Add Doctor</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- blog --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.blog')}}" class="nav-link">
                  <i class=""></i>
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add_blog')}}" class="nav-link">
                  <i class=""></i>
                  <p>Add Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('blog_category')}}" class="nav-link">
                  <i class=""></i>
                  <p>Blog Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.blog_comment')}}" class="nav-link">
                  <i class=""></i>
                  <p>Blog Comment</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.product')}}" class="nav-link">
                  <i class=""></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add_product')}}" class="nav-link">
                  <i class=""></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class=""></i>
                  <p>
                    Products Categories
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('admin.categories')}}" class="nav-link">
                      <i class=""></i>
                      <p>All Categories</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('add_category')}}" class="nav-link">
                      <i class=""></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.product_reviews')}}" class="nav-link">
                  <i class=""></i>
                  <p>Product Reviews</p>
                </a>
              </li>
            </ul>
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Appointment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.appointment')}}" class="nav-link">
                  <i class=""></i>
                  <p>Appointment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.treatment_types')}}" class="nav-link">
                  <i class=""></i>
                  <p>Treatment type</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Contact us
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.contact_data')}}" class="nav-link">
                  <i class=""></i>
                  <p>Contact Form Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.free_consultancy')}}" class="nav-link">
                  <i class=""></i>
                  <p>Free Consultancy</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Early Bird Registration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.eb_form_data')}}" class="nav-link">
                  <i class=""></i>
                  <p>E.B Form Data</p>
                </a>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>