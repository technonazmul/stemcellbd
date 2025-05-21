<?php $__env->startSection("content"); ?>
            <!-- ==========Page Header Section Start Here========== -->
            <div
            class="pageheader bg-img"
            style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/04.jpg')); ?>)"
        >
            <div class="container">
                <div class="pageheader__content">
                    <h2>Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ==========Page Header Section Ends Here========== -->    
   
        <!-- ==========Contact Section Start Here========== -->
        <div class="contact contact--two" id="contact">
            <div class="container">
                <div class="section__header text-center">
                    <h2>Find Us On Google Map</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Illo saepe fugiat, quisquam est sint tempore.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__thumb">
                                <img
                                    src="<?php echo e(asset('frontend/assets/images/info/01.jpg')); ?>"
                                    alt="webcodeltd"
                                />
                            </div>
                            <div class="contact__content">
                                <p>
                                    69/M/1, GH Tower (5th Floor), Panthapath,
                                    Opposite to Bashundhara City Shopping
                                    Complex, Dhaka-1205
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__thumb">
                                <img
                                    src="<?php echo e(asset('frontend/assets/images/info/02.jpg')); ?>"
                                    alt="webcodeltd"
                                />
                            </div>
                            <div class="contact__content">
                                <p>Platinum Hospital Stem Cell Centre</p>
                                <p>Enquiry: 01234-567890</p>
                                <p>Appointment: 01234-567890</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__thumb">
                                <img
                                    src="<?php echo e(asset('frontend/assets/images/info/03.jpg')); ?>"
                                    alt="webcodeltd"
                                />
                            </div>
                            <div class="contact__content">
                                <p><a href="#">help@adminstemcellcentre</a></p>
                                <p>
                                    <a href="#">support@adminstemcellcentre</a>
                                </p>
                                <p><a href="#">www.stemcellcentre</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contactform padding-tb">
            <div class="container">
                <div class="section__header text-center">
                    <h2>Feel Free To Ask Something We Are Here</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Unde veritatis magnam porro, temporibus perferendis eum.
                    </p>
                </div>
                
                <div class="col-md-7 my-2 mx-auto">
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
                </div>
                <div class="section__wrapper">
                    <div class="contactform__area">
                        <form action="<?php echo e(route('contact_form')); ?>" id="contact-form" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row g-3">
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Name*" name="name" id="name" required />
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Your Company" name="company" id="company" />
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="email" placeholder="Email*" name="email" id="email" required />
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Subject" name="subject" id="subject" />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="message" rows="5" placeholder="Message*" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="lab-btn">Send Your Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==========Contact Section Ends Here========== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/contact.blade.php ENDPATH**/ ?>