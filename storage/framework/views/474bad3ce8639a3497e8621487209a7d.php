<?php
$general_info=App\Models\GeneralInfo::findOrFail(1);
$banner=App\Models\Banner::findOrFail(1);
$hospitalInfos = App\Models\HospitalInfo::latest()->take(3)->get();
$about = App\Models\About::first();
$steps = \App\Models\Step::all();
$stepsection = \App\Models\StepSection::first();
$video = \App\Models\VideoSection::latest()->first();
$secondvideo = \App\Models\VideoSection::findOrFail(2);
?>


<?php $__env->startSection("content"); ?>
    <!-- ==========Banner Section Start Here========== -->
    <div class="banner bg-img" id="banner" style="background: url(<?php echo e(asset('storage/public/' . $banner->background_image)); ?>) rgba(0,0,0,.5);">
        
        <div class="container">
            <div class="banner__content">
                <h2><?php echo e($banner->title); ?></h2>
                <p><?php echo e($banner->subtitle); ?></p>
                <ul>
                    <li><a href="<?php echo e(old('button1_url', $banner->button1_url ?? '')); ?>" class="lab-btn"><?php echo e(old('button1_text', $banner->button1_text ?? '')); ?></a></li>
                    <li><a href="<?php echo e(old('button2_url', $banner->button2_url ?? '')); ?>" class="lab-btn bg-white"><?php echo e(old('button2_text', $banner->button2_text ?? '')); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->



    <!-- ==========Feture Section Start Here========== -->
    <div class="feature bg-img" id="feature" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/05.jpg')); ?>);">
        
        <div class="feature__bottom">
            <div class="container">
                <div class="row g-4">

                    <?php $__currentLoopData = $hospitalInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="feature__item">
                                <div class="feature__thumb">
                                    <img src="<?php echo e(asset('storage/public/hospitalinfos/' . $info->image)); ?>" alt="<?php echo e($info->title); ?>">
                                </div>
                                <div class="feature__content">
                                    <h5><?php echo e($info->title); ?></h5>
                                    <p><?php echo e($info->description); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Feture Section Ends Here========== -->



    <!-- ==========About Section Start Here========== -->
    <div class="about padding-tb" id="about">
        <div class="container">
            <div class="row g-lg-0 g-5 align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about__thumb">
                        <img src="<?php echo e(asset('storage/public/about/' . $about->image)); ?>" alt="about image">
                        <div class="about__thumb--content">
                            <div class="icon">
                                <img src="<?php echo e(asset('storage/public/about/' . $about->icon)); ?>" alt="about icon">
                            </div>
                            <div class="text">
                                <h2><span class="odometer" data-odometer-final="<?php echo e($about->experience_years); ?>">0</span><sup>+</sup></h2>
                                <p><?php echo e($about->experience_text); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__content">
                        <h2><?php echo e($about->headline); ?></h2>
                        <h6><?php echo e($about->sub_headline); ?></h6>
                        <p><?php echo e($about->description); ?></p>
                        <a href="<?php echo e(route('index')); ?><?php echo e($about->button_link ?? '#appointment'); ?>" class="lab-btn">
                            <?php echo e($about->button_text ?? 'take an appointment'); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========About Section Ends Here========== -->


    <!-- ==========Service Section Start Here========== -->
    <div class="service padding-tb" id="service">
        <div class="container">
            <div class="section__header text-center">
                <h2>Our treatment options</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <?php
                    $services=App\Models\Service::take(6)->get();
                    ?>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__thumb">
                                <a href="<?php echo e(route('single_service',$service->id)); ?>">
                                    <img src="<?php echo e(asset('storage/public/service/'.$service->thumbnail)); ?>" alt="webcodeltd" style="width:auto;height:300px;">
                                </a>
                            </div>
                            <div class="service__content">
                                <h5><a href="<?php echo e(route('single_service',$service->id)); ?>"><?php echo e($service->title); ?></a></h5>
                                <p><?php echo Illuminate\Support\Str::limit(strip_tags($service->description), 100); ?></p>
                                <a href="<?php echo e(route('single_service',$service->id)); ?>" class="text-btn">Details<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->


    <!-- ==========Step Section Start Here========== -->
    <div class="step padding-tb bg-img" id="step" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/02.jpg')); ?>);">
    <div class="container">
        <?php if($stepsection): ?>
        <div class="section__header text-center">
            <h2><?php echo e($stepsection->title); ?></h2>
            <p><?php echo e($stepsection->subtitle); ?></p>
        </div>
        <?php endif; ?>
        <div class="section__wrapper">
            <div class="row g-4 justify-content-center">
                <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="step__item">
                            <div class="step__thumb">
                                <img src="<?php echo e(asset('storage/public/step/' . $step->image)); ?>" alt="step">
                            </div>
                            <div class="step__content">
                                <span><?php echo e($step->step_number); ?></span>
                                <h5><?php echo e($step->title); ?></h5>
                                <p><?php echo e($step->description); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
    <!-- ==========Step Section Ends Here========== -->


    <!-- ==========Video Section Start Here========== -->
    <?php if($video): ?>
    <div class="video padding-tb" id="video">
        <div class="container">
            <div class="row g-lg-0 g-5 justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="video__thumb">
                        <img src="<?php echo e(asset('storage/public/' . $video->thumb_image)); ?>" alt="video thumb">
                        <div class="video__thumb--icon">
                            <a href="<?php echo e(asset('storage/public/' . $video->video_url)); ?>" data-rel="lightcase">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="video__content">
                        <h2><?php echo e($video->title); ?></h2>
                        <p><?php echo e($video->description); ?></p>
                        <ul>
                            <li>
                                <div class="thumb">
                                    <img src="<?php echo e(asset('storage/public/' . $video->stat1_icon)); ?>" alt="icon1">
                                </div>
                                <div class="content">
                                    <span><?php echo e($video->stat1_number); ?></span>
                                    <p><?php echo e($video->stat1_text); ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="<?php echo e(asset('storage/public/' . $video->stat2_icon)); ?>" alt="icon2">
                                </div>
                                <div class="content">
                                    <span><?php echo e($video->stat2_number); ?></span>
                                    <p><?php echo e($video->stat2_text); ?></p>
                                </div>
                            </li>
                        </ul>
                        <a href="<?php echo e($video->button_url); ?>" class="lab-btn"><?php echo e($video->button_text); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- ==========Video Section Ends Here========== -->


    <!-- ==========Team Section Start Here========== -->
    <div class="team padding-tb" id="team">
        <div class="container">
            <div class="section__header text-center">
                <h2>Our expert Doctor team</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <?php
                    $doctors=App\Models\Doctor::paginate(1);
                    ?>
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($doctor)): ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="team__item">
                            <div class="team__thumb">
                                <img src="<?php echo e(asset('storage/public/doctors/'.$doctor->image)); ?>" alt="webcodeltd">
                            </div>
                            <div class="team__content">
                                <h6><a href="<?php echo e(route('single_doctor',$doctor->id)); ?>"><?php echo e($doctor->name); ?></a></h6>
                                <span><?php echo e($doctor->speciali); ?></span>
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5">
                           <?php echo e($doctors->links('pagination::bootstrap-4')); ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Team Section Ends Here========== -->



    <!-- ==========Testmonial Section Start Here========== -->
    <div class="testimonial padding-tb bg-img" id="testimonial" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/01.jpg')); ?>);">
        <div class="container">
            <div class="section__header text-center">
                <h2>our Client Testimonials</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="testimonial__slider overflow-hidden">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = App\Models\Testimonial::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__thumb">
                                    <img src="<?php echo e(asset('storage/public/testimonial/'.$testimonial->image)); ?>" alt="webcodeltd">
                                    <div class="testimonial__thumb--quote">
                                        <i class="fa-solid fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p><?php echo e($testimonial->text); ?></p>
                                    <div class="testimonial__content--bottom">
                                        <div class="left">
                                            <h6><?php echo e($testimonial->name); ?></h6>
                                            <span><?php echo e($testimonial->author); ?></span>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <?php if($i <= $testimonial->rating): ?>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    <?php else: ?>
                                                        <li><i class="fa-regular fa-star"></i></li>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <div class="number__pagination testimonial__pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Testmonial Section Ends Here========== -->



    <!-- ==========Result Section Start Here========== -->
    <div class="result padding-tb" id="result">
        <div class="container">
            <div class="row g-lg-0 g-5 align-items-center">
                <div class="col-xl-6 col-12">
                    <div class="result__content">
                        <h2><?php echo e($secondvideo->title); ?></h2>
                        <p><?php echo e($secondvideo->description); ?></p>
                        <a href="<?php echo e(asset('storage/public/' . $secondvideo->video_url)); ?>" class="lab-btn" data-rel="lightcase"><?php echo e($secondvideo->button_text); ?> <i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="result__thumb">
                        <img src="<?php echo e(asset('storage/public/' . $secondvideo->thumb_image)); ?>" alt="webcodeltd">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Result Section Ends Here========== -->



    <!-- ==========Blog Section Start Here========== -->
    <div class="blog padding-tb" id="blog">
        <div class="container">
            <div class="section__header text-center">
                <h2>Our blogs</h2>
                <p>The art of medicine consists in amusing the patient-while nature cures the disease. Treatment without prevention is simply unsustainable.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <?php
                    $blogs=App\Models\Blog::take(3)->get();
                    ?>
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="blog__item">
                                <div class="blog__thumb">
                                    <a href="<?php echo e(route('single_blog',$blog->id)); ?>"><img src="<?php echo e(asset('storage/public/blog/'.$blog->thumbnail)); ?>"></a>
                                </div>
                                <div class="blog__content">
                                    <h4><a href="<?php echo e(route('single_blog',$blog->id)); ?>"><?php echo e($blog->title); ?> </a></h4>
                                    <ul>
                                        <?php
                                            $date = date('F j,Y', strtotime($blog->created_at));
                                        ?>
                                        <li><i class="fa-solid fa-calendar"></i><?php echo $date ?></li>
                                        <li><i class="fa-regular fa-folder"></i><?php echo e($blog->blog_category->name); ?></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="text-center mt-5">
                    <a href="<?php echo e(route('blog')); ?>" class="lab-btn">view all blog</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->


    <!-- ==========Appointment Section Start Here========== -->
    <div class="appointment padding-tb">
        <div class="container">
            <div class="row g-lg-0 g-5 align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="appointment__thumb">
                        <img src="<?php echo e(asset('storage/public/banners/' . $general_info->appointment_banner)); ?>" alt="webcodeltd">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="appointment__content" id="appointment">
                        <div class="title">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(session('success')); ?>

                                    </div>
                            <?php endif; ?>
                            <h2>Take an Appointment</h2>
                            <p>Please fill in the details below to schedule an appointment.</p>
                        </div>
                        <form action="<?php echo e(route('admin.take_appointment')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row g-4">
                                <div class="col-md-6 col-12">
                                    <input name="name" type="text" placeholder="full name*" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <input name="phone" type="text" placeholder="Phone Number" required>
                                </div>
                                <div class="col-12">
                                    <input name="email" type="email" placeholder="email address" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <select name="gender" required>
                                        <option value="">Sex</option>
                                        <option name="gender" value="male">Male</option>
                                        <option name="gender" value="female">Female</option>
                                        <option name="gender" value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12">
                                    <input id="datepicker" name="date" type="date" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="col-12">
                                    <select name="treatment_types" required> <!-- Added the name attribute here -->
                                        <option value="">Need Appointment for</option>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->title); ?>"><?php echo e($data->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" rows="4" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="lab-btn">take an appointment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Appointment Section Ends Here========== -->



    <!-- ==========contact Section start Here========== -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact__item">
                        <div class="contact__thumb">
                            <img src="<?php echo e(asset('frontend/assets/images/info/01.jpg')); ?>" alt="webcodeltd">
                        </div>
                        <?php if(!@empty($general_info)): ?>
                        <div class="contact__content">
                            <p><?php echo e($general_info->address); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact__item">
                        <div class="contact__thumb">
                            <img src="<?php echo e(asset('frontend/assets/images/info/02.jpg')); ?>" alt="webcodeltd">
                        </div>
                        <div class="contact__content">
                            <p><?php echo e($general_info->title); ?></p>
                            <p>Enquiry: <?php echo e($general_info->enquiry_number); ?></p>
                            <p>Appointment: <?php echo e($general_info->appointment_number); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact__item">
                        <div class="contact__thumb">
                            <img src="<?php echo e(asset('frontend/assets/images/info/03.jpg')); ?>" alt="webcodeltd">
                        </div>
                        <div class="contact__content">
                            <p><a href="#"><?php echo e($general_info->help_email); ?></a></p>
                            <p><a href="#"></a><?php echo e($general_info->support_email); ?></p>
                            <p><a href="#">www.stemcellcentre</a></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========contact Section Ends Here========== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/index.blade.php ENDPATH**/ ?>