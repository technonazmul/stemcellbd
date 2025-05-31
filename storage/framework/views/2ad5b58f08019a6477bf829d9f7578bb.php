<?php $__env->startSection("content"); ?>
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url(<?php echo e(asset('frontend/assets/images/bg/04.jpg')); ?>);">
        <div class="container">
            <div class="pageheader__content">
                <h2><?php echo e($single_blog->title); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($single_blog->title); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->



    <!-- ==========Blog Section Start Here========== -->
    <div class="blog blog--single padding-tb" id="blog">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-lg-8 col-12">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="blog__item">
                                    <div class="blog__thumb">
                                        <img src="<?php echo e(asset('storage/public/blog/'.$single_blog->thumbnail)); ?>">
                                    </div>
                                    <div class="blog__content">
                                        <h4><?php echo e($single_blog->title); ?></h4>
                                        <ul>
                                            <?php
                                            $date = date('Y-m-d', strtotime($single_blog->created_at));
                                            ?>
                                            <li><i class="fa-solid fa-calendar"></i><?php echo $date ?></li>
                                            <li><i class="fa-regular fa-folder"></i><?php echo e($single_blog->blog_category->name); ?> </li>
                                        </ul>
                                       <p><?php echo $single_blog->description; ?> </p>
                                        
                                        
                                    </div>
                                </div>

                                <div class="tags-section">
                                    <ul class="tags">
                                        <li><span><i class="fa-solid fa-share-nodes"></i></span></li>
                                        <?php
                                            if(!is_null($single_blog->tags)):
                                                $arrayoftags = explode(',',$single_blog->tags);
                                                foreach($arrayoftags as $tag):
                                                ?>
                                                <li><a href="<?php echo e(route('blog.tag.search', $tag)); ?>"><?php echo e($tag); ?></a></li>
                                                <?php
                                                endforeach;
                                               
                                            endif;
                                        ?>
                                        
                                        
                                    </ul>
                                    <?php
                                        $postUrl = url()->current(); // Full URL of current post
                                        $postTitle = urlencode($single_blog->title); // Title for social media
                                    ?>

                                    <ul class="social-link-list d-flex flex-wrap">
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($postUrl); ?>" target="_blank" class="facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/intent/tweet?url=<?php echo e($postUrl); ?>&text=<?php echo e($postTitle); ?>" target="_blank" class="twitter">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo e($postUrl); ?>&title=<?php echo e($postTitle); ?>" target="_blank" class="linkedin">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank" class="instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                            <!-- Instagram does not support direct post sharing via URL, only profile or manual share -->
                                        </li>
                                    </ul>

                                </div>

                                

                                <div class="blog__comment">
                                    <?php
                                    $total_comment=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id','0')->count();
                                    ?>
                                    <div class="head">
                                        <h6><?php echo $total_comment; ?> Comments</h6>
                                    </div>

                                    <div class="body">
                                        <ul>
                                                <?php
                                                $show_comment=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id','0')->get();
                                                $show_reply=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id', '!=', '0')->get();
                                                $total_comment=App\Models\Comment::where('status','1')->count();
                                                ?>
                                                <?php $__currentLoopData = $show_comment->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php 
                                                $total_reply=App\Models\Comment::where('status','1')->where('parent_id', '!=', '0')->where('parent_id',$comment->id)->count();
                                                ?>
                                            <li>
                                                <div class="thumb">
                                                    
                                                    <i class="icofont-ui-user" style="font-size: 60px;"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="content__top">
                                                        <div class="name">
                                                            <h6><a href="team-single.html"><?php echo e($comment->name); ?></a></h6>
                                                            <?php
                                                                $comment_date = date('j F Y, \a\t h:i a',strtotime($comment->created_at));
                                                            ?>
                                                            <span><?php echo $comment_date; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="content__bottom">
                                                        <p><?php echo e($comment->comment); ?></p>
                                                    </div>
                                                    
                                                    <a class="border border-warning reply p-1 rounded-1 mx-1" data-bs-toggle="collapse" href="#collapseExample<?php echo e($comment->id); ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        Reply
                                                    </a>
                                                    <a class="border border-info reply p-1 rounded-1" data-bs-toggle="collapse" href="#collapseExample1<?php echo e($comment->id); ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <?php echo $total_reply; ?> Reply
                                                    </a>
                                                    
                                                    <div class="collapse mt-2" id="collapseExample<?php echo e($comment->id); ?>">
                                                        <div class="card card-body blog__commentForm">
                                                            <form method="post" action="<?php echo e(route('admin.reply_comment')); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="hidden" name="parent_id" value="<?php echo e($comment->id); ?>" id="" >
                                                                <input type="hidden" name="blog_post_id" value="<?php echo e($single_blog->id); ?>" id="" >
                                                                <input name="name" type="text" placeholder="Your Name" required>
                                                                <input name="email" type="email" placeholder="Your Email" required>
                                                                <input name="phone" type="text" placeholder="Phone Number"required>
                                                                <input name="subject" type="text" placeholder="Subject"required>
                                                                <textarea name="comment" cols="30" rows="5" placeholder="Enter Your Message" required></textarea>
                                                                <button type="submit" class="lab-btn">Reply comments</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="collapse mt-2" id="collapseExample1<?php echo e($comment->id); ?>">

                                                        <div class="card card-body">
                                                            <?php 
                                                            $reply=App\Models\Comment::where('parent_id',$comment->id)->where('status','1')->where('parent_id', '!=', '0')->get();
                                                            ?>
                                                            <?php $__currentLoopData = $reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="thumb">
                                                                
                                                                <i class="icofont-ui-user" style="font-size: 60px;"></i>
                                                            </div>
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="name">
                                                                        <h6><a href="team-single.html"><?php echo e($reply->name); ?></a></h6>
                                                                        <?php
                                                                            $reply_date = date('j F Y, \a\t h:i a',strtotime($reply->created_at));
                                                                        ?>
                                                                        <span><?php echo $reply_date; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="content__bottom">
                                                                    <p><?php echo e($reply->comment); ?></p>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </li><br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php if($show_comment->count() >= 1): ?>
                                                <button class="btn btn-outline-info" id="showMoreComments">Show more comments</button>
                                                <div id="hiddenComments" style="display: none;">
                                                    <?php
                                                    $show_comment=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id','0')->get();
                                                    $show_reply=App\Models\Comment::where('status','1')->where('blog_post_id',$single_blog->id)->where('parent_id', '!=', '0')->get();
                                                    $total_comment=App\Models\Comment::where('status','1')->count();
                                                    ?>
                                                    <?php $__currentLoopData = $show_comment->skip(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php 
                                                    $total_reply=App\Models\Comment::where('status','1')->where('parent_id', '!=', '0')->where('parent_id',$comment->id)->count();
                                                    ?>
                                                    <li>
                                                        <div class="thumb">
                                                            
                                                            <i class="icofont-ui-user" style="font-size: 60px;"></i>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content__top">
                                                                <div class="name">
                                                                    <h6><a href="team-single.html"><?php echo e($comment->name); ?></a></h6>
                                                                    <?php
                                                                        $comment_date = date('j F Y, \a\t h:i a',strtotime($comment->created_at));
                                                                    ?>
                                                                    <span><?php echo $comment_date; ?></span>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="content__bottom">
                                                                <p><?php echo e($comment->comment); ?></p>
                                                            </div>
                                                            
                                                            <a class="border border-warning reply reply p-1 mx-1 rounded-1" data-bs-toggle="collapse" href="#collapseExample<?php echo e($comment->id); ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                Reply
                                                            </a>
                                                            
                                                            <a class="border border-info reply reply p-1 rounded-1" data-bs-toggle="collapse" href="#collapseExample1<?php echo e($comment->id); ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                               <?php echo $total_reply ?> Reply
                                                            </a>
                                                            
                                                            <div class="collapse mt-2" id="collapseExample<?php echo e($comment->id); ?>">
                                                                <div class="card card-body blog__commentForm">
                                                                 <form method="post" action="<?php echo e(route('admin.reply_comment')); ?>">
                                                                    <?php echo csrf_field(); ?>
                                                                    <input type="hidden" name="parent_id" value="<?php echo e($comment->id); ?>" id="" >
                                                                    <input type="hidden" name="blog_post_id" value="<?php echo e($single_blog->id); ?>" id="" >
                                                                    <input name="name" type="text" placeholder="Your Name" required>
                                                                    <input name="email" type="email" placeholder="Your Email" required>
                                                                    <input name="phone" type="text" placeholder="Phone Number"required>
                                                                    <input name="subject" type="text" placeholder="Subject"required>
                                                                    <textarea name="comment" cols="30" rows="5" placeholder="Enter Your Message" required></textarea>
                                                                    <button type="submit" class="lab-btn">Reply comments</button>
                                                                </form>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="collapse mt-2" id="collapseExample1<?php echo e($comment->id); ?>">
                                                                <div class="card card-body blog__commentForm">
                                                                    <?php 
                                                                    $reply=App\Models\Comment::where('parent_id',$comment->id)->where('status','1')->where('parent_id', '!=', '0')->get();
                                                                    ?>
                                                                    <?php $__currentLoopData = $reply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="thumb">
                                                                        
                                                                        <i class="icofont-ui-user" style="font-size: 60px;"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <div class="content__top">
                                                                            <div class="name">
                                                                                <h6><a href="team-single.html"><?php echo e($reply->name); ?></a></h6>
                                                                                <?php
                                                                                    $reply_date = date('j F Y, \a\t h:i a',strtotime($reply->created_at));
                                                                                ?>
                                                                                <span><?php echo $reply_date; ?></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="content__bottom">
                                                                            <p><?php echo e($reply->comment); ?></p>
                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li><br>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                             <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
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
                                <div class="blog__commentForm">
                                    <div class="head">
                                        <h6>Leave A Comment</h6>
                                    </div>
                                    <div class="body">
                                        <form method="post" action="<?php echo e(route('admin.add_comment')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="blog_post_id" value="<?php echo e($single_blog->id); ?>" id="" >
                                            <input name="name" type="text" placeholder="Your Name" required>
                                            <input name="email" type="email" placeholder="Your Email" required>
                                            <input name="phone" type="text" placeholder="Phone Number"required>
                                            <input name="subject" type="text" placeholder="Subject"required>
                                            <textarea name="comment" cols="30" rows="5" placeholder="Enter Your Message" required></textarea>
                                            <button type="submit" class="lab-btn">post comments</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            <div class="sidebar__search">
                                <div class="head">
                                    <h6>Search Your Keywords</h6>
                                </div>
                                <div class="body">
                                    <form action="<?php echo e(route('blog.search')); ?>">
                                        <input type="text" placeholder="Search Here" name="search">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="sidebar__appointment">
                                <div class="appointment">
                                    <div class="appointment__content">
                                        <div class="head">
                                            <h6>Take an Appointment</h6>
                                        </div>
                                        <form method="post" action="<?php echo e(route('admin.take_appointment')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <input name="name" type="text" placeholder="full name*" required>
                                                </div>
                                                <div class="col-12">
                                                    <input name="phone" type="text" placeholder="Phone Number">
                                                </div>
                                                <div class="col-12">
                                                    <input name="email" type="email" placeholder="email address">
                                                </div>
                                                <div class="col-12">
                                                    <select required>
                                                        <option name="gender" value="">Sex</option>
                                                        <option name="gender" value="Male">Male</option>
                                                        <option name="gender" value="Female">Female</option>
                                                        <option name="gender" value="Others">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input  name="date" type="date" min="<?php echo date('Y-m-d'); ?>" required>
                                                </div>
                                                <div class="col-12">
                                                    <select required>
                                                        <option name="" value="">Need Appointment for</option>
                                                        <?php
                                                        $data=App\Models\Treatment_type::get();
                                                        ?>
                                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option name="treatment_type" value="<?php echo e($data->title); ?>"><?php echo e($data->title); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <textarea name="message" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="lab-btn">take an appointment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Blog Section Ends Here========== -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#showMoreComments').click(function(){
                $('#hiddenComments').toggle();
                $(this).text(function(i, text){
                    return text === "Show more comments" ? "Hide comments" : "Show more comments";
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Advancellhealth/resources/views/frontend/pages/single_blog.blade.php ENDPATH**/ ?>