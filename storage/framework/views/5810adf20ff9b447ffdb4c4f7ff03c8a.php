<?php
$general_info = App\Models\GeneralInfo::findOrFail(1);
?>

<?php $__env->startSection("content"); ?>
            <!-- ==========Page Header Section Start Here========== -->
            <div
            class="pageheader bg-img"
            style="background-image: url(<?php echo e(asset('storage/public/visual_edits/' . $visualEditContactContent['header_background_image'] ?? '')); ?>)"
        >
            <div class="container">
                <div class="pageheader__content">
                    <h2><?php echo e($visualEditContactContent['title'] ?? 'Contact Us'); ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e($visualEditContactContent['breadcrumb_first_item_link'] ?? ''); ?>"><?php echo e($visualEditContactContent['breadcrumb_first_item_text'] ?? ''); ?></a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                <?php echo e($visualEditContactContent['breadcrumb_second_item_text'] ?? 'Contact'); ?>

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
            <h2><?php echo e($visualEditContactContent['contact_card_title'] ?? ''); ?></h2>
            <p>
                <?php echo e($visualEditContactContent['contact_card_description'] ?? ''); ?>

            </p>
        </div>

        <?php if(!empty($general_info)): ?>
        <div class="row g-4 justify-content-center">
            
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="contact__item">
                    <div class="contact__thumb">
                        <img src="<?php echo e(asset('frontend/assets/images/info/01.jpg')); ?>" alt="webcodeltd" />
                    </div>
                    <div class="contact__content">
                        <p>
                            <a href="https://www.google.com/maps/search/?api=1&query=<?php echo e(urlencode($general_info->address)); ?>" target="_blank">
                                <?php echo e($general_info->address); ?>

                            </a>
                        </p>
                    </div>

                </div>
            </div>

            
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="contact__item">
                    <div class="contact__thumb">
                        <img src="<?php echo e(asset('frontend/assets/images/info/02.jpg')); ?>" alt="webcodeltd" />
                    </div>
                    <div class="contact__content">
                        <p><?php echo e($general_info->title); ?></p>
                        <p>
                        Enquiry: 
                            <a href="tel:<?php echo e($general_info->enquiry_number); ?>">
                                <?php echo e($general_info->enquiry_number); ?>

                            </a>
                        </p>
                        <p>
                            Appointment: 
                            <a href="tel:<?php echo e($general_info->appointment_number); ?>">
                                <?php echo e($general_info->appointment_number); ?>

                            </a>
                        </p>

                    </div>
                </div>
            </div>

            
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="contact__item">
                    <div class="contact__thumb">
                        <img src="<?php echo e(asset('frontend/assets/images/info/03.jpg')); ?>" alt="webcodeltd" />
                    </div>
                    <div class="contact__content">
                        <p>
                            <a href="mailto:<?php echo e($general_info->help_email); ?>"><?php echo e($general_info->help_email); ?></a>
                        </p>
                        <p>
                            <a href="mailto:<?php echo e($general_info->support_email); ?>"><?php echo e($general_info->support_email); ?></a>
                        </p>
                        <p>
                            <a href="<?php echo e($general_info->website); ?>" target="_blank"><?php echo e($general_info->website); ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>


        <div class="contactform padding-tb">
            <div class="container">
                <div class="section__header text-center">
                    <h2><?php echo e($visualEditContactContent['contact_form_title'] ?? ''); ?></h2>
                    <p>
                        <?php echo e($visualEditContactContent['contact_form_description'] ?? ''); ?>

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