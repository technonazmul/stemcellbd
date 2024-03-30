@extends('frontend.layouts.template')
@section("extra_css")
<style>
    .star {
    font-size: 30px;
    cursor: pointer;
    color: gray;
}

.star.active {
    color: gold;
}
</style>
@endsection
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url(assets/images/bg/04.jpg);">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{$item->name}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$item->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->



    <!-- ==========Shop Details Section Start Here========== -->
    <div class="shop shop--single padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4 g-lg-0 bg-lg-white">
                    <div class="col-lg-6 col-12">
                        <div class="singlethumb">
                            <div class="d-flex flex-wrap flex-sm-nowrap align-items-start flex-row-reverse">
                                <div class="singlethumb__left nav flex-sm-column nav-pills ms-md-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    
                                    @php
                                        $images = explode(',',$item->images);
                                        $count =1;
                                        
                                    @endphp
                                    @if(!is_null($images))
                                    @foreach($images as $image)
                                    <div class="nav-link @if($count == 1) active @endif" id="thumbTwo-tab" data-bs-toggle="pill" data-bs-target="#thumb{{$count}}" role="tab" aria-controls="thumbTwo" aria-selected="false">
                                        <div class="thumb">
                                            <img src="{{asset('storage/products/'.$image)}}" alt="rajibraj">
                                        </div>
                                    </div>
                                    @php
                                        $count++;
                                    @endphp
                                    @endforeach
                                    @endif
                                    
                                </div>
                                <div class="singlethumb__right tab-content" id="v-pills-tabContent">
                                    @php
                                        $count =1; 
                                    @endphp
                                    @if(!is_null($images))
                                    @foreach($images as $image)
                                    <div class="tab-pane fade @if($count == 1) show active @endif" id="thumb{{$count}}" role="tabpanel" aria-labelledby="thumbOne-tab">
                                        <div class="thumb">
                                            <img src="{{asset('storage/products/'.$image)}}" alt="rajibraj">
                                        </div>
                                    </div>
                                    @php
                                        $count++;
                                    @endphp
                                    @endforeach
                                    @endif
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="singlecontent">
                            <h5>{{$item->name}}</h5>
                            <h6>
                                <span>Price:</span> {{$item->offer_price}} <del>{{$item->price}}</del> 
                            </h6>
                            <div class="rating">
                                <p>raing:</p>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <a href="#review">(3 customer reviews)</a>
                            </div>
                            {!! $item->description !!}
                            
                            <div class="countadd">
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="3">
                                    <div class="inc qtybutton">+</div>
                                </div>
                                <a href="cart.html" class="lab-btn2">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Shop Details Section Ends Here========== -->

    <!-- ==========Review Section Start Here========== -->
    <div class="review padding-tb" id="review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="review__area">
                        <ul class="review__nav">
                            <li class="desc" data-target="description-show">Description</li>
                            <li class="rev active" data-target="review-content-show">Reviews 3</li>
                        </ul>
                        <div class="review__content review-content-show">
                            <div class="review__showing" id="reviews">
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <img src="assets/images/team/01.jpg" alt="rajibraj">
                                        </div>
                                        <div class="content">
                                            <div class="review__meta">
                                                <div class="review__poston">
                                                    <a href="#">Dr. william Watson</a>
                                                    <p>Posted on Jun 20, 2023 at 6:57 am</p>
                                                </div>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact awesome theme seo psd porta monetize covalent leadership after without resource.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="assets/images/team/02.jpg" alt="rajibraj">
                                        </div>
                                        <div class="content">
                                            <div class="review__meta">
                                                <div class="review__poston">
                                                    <a href="#">Dr. Tome Alex</a>
                                                    <p>Posted on Jun 20, 2023 at 6:57 am</p>
                                                </div>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact awesome theme seo psd porta monetize covalent leadership after without resource.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="assets/images/team/03.jpg" alt="rajibraj">
                                        </div>
                                        <div class="content">
                                            <div class="review__meta">
                                                <div class="review__poston">
                                                    <a href="#">Dr. Maria Watson</a>
                                                    <p>Posted on Jun 20, 2023 at 6:57 am</p>
                                                </div>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact awesome theme seo psd porta monetize covalent leadership after without resource.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review__form">
                                    @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    <div class="review__title">
                                        <h6>Add a Review</h6>
                                    </div>
                                    <form action="{{route('product.review.save')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$item->id}}">
                                        <div class="row g-4">
                                            <div class="col-lg-4 col-12">
                                                <input type="text" name="name" placeholder="Full Name" required>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <input type="text" name="email" placeholder="Email Adress" required>
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div id="rating-stars">
                                                    <span class="star">&#9733;</span>
                                                    <span class="star">&#9733;</span>
                                                    <span class="star">&#9733;</span>
                                                    <span class="star">&#9733;</span>
                                                    <span class="star">&#9733;</span>
                                                </div>
                                                <input type="hidden" name="rating" id="rating-value" value="0">
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <textarea rows="8" placeholder="Type Here Message" name="message" required></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="lab-btn" type="submit">Submit Review <i class="icofont-hand-drawn-right"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="description">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Review Section Ends Here========== -->

    
    <!-- ==========Shop Section Start Here========== -->
    <div class="shop padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h2>Related Products</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis non saepe ipsum. Deleniti, aperiam commodi delectus voluptate labore.</p>
            </div>
            <div class="section__wrapper">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <article>
                            <div class="shop__product row justify-content-center grids g-4">
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="assets/images/shop/01.jpg" alt="shope">
                                            <div class="shop__link">
                                                <a href="assets/images/shop/01.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="shop-single.html">product title text here</a></h6>
                                            <p class="price"><span>Price:</span> $100.99</p>
                                            <div class="rating">
                                                <p>raing:</p>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="assets/images/shop/02.jpg" alt="shope">
                                            <div class="shop__link">
                                                <a href="assets/images/shop/02.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="shop-single.html">product title text here</a></h6>
                                            <p class="price"><span>Price:</span> $100.99</p>
                                            <div class="rating">
                                                <p>raing:</p>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="assets/images/shop/03.jpg" alt="shope">
                                            <div class="shop__link">
                                                <a href="assets/images/shop/03.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="shop-single.html">product title text here</a></h6>
                                            <p class="price"><span>Price:</span> $100.99</p>
                                            <div class="rating">
                                                <p>raing:</p>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="assets/images/shop/04.jpg" alt="shope">
                                            <div class="shop__link">
                                                <a href="assets/images/shop/04.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="shop-single.html">product title text here</a></h6>
                                            <p class="price"><span>Price:</span> $100.99</p>
                                            <div class="rating">
                                                <p>raing:</p>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Shop Section Ends Here========== -->
    <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Review Added Successfully.</p>
            </div>
           
          </div>
        </div>
      </div>

@endsection
@section('extra_script')
@if(Session::has('success'))
<script>
    $(document).ready(function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'));
        myModal.toggle();
    });
</script>
@endif
<script>
    $(document).ready(function() {
       
    $('.star').click(function() {
        var index = $(this).index() + 1;
        $('.star').removeClass('active');
        $(this).prevAll().addBack().addClass('active');
        $('#rating-value').val(index);
    });
});
</script>
@endsection