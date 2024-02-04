@extends('frontend.layouts.template')
@section("content")
    <!-- ==========Page Header Section Start Here========== -->
    <div class="pageheader bg-img" style="background-image: url({{asset('frontend/assets/images/bg/04.jpg')}});">
        <div class="container">
            <div class="pageheader__content">
                <h2>All Products</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->



    <!-- ==========Shop Section Start Here========== -->
    <div class="shop padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <article>
                            <div class="shop__title d-flex flex-wrap justify-content-between bg-ash">
                                <p>Showing 01 - 12 of 139 Results</p>
                                <div class="shop__mode">
                                    <a class="active" data-target="grids"><i class="fa-solid fa-table-cells-large"></i></a>
                                    <a data-target="lists" class=""><i class="fa-solid fa-list"></i></a>
                                </div>
                            </div>

                            <div class="shop__product row justify-content-center grids g-4">
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/01.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/01.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/01.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/01.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/02.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/02.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/02.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/02.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/03.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/03.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/03.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/03.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/04.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/04.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/04.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/04.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/05.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/05.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/05.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/05.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/06.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/06.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/06.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/06.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/07.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/07.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/07.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/07.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/08.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/08.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/08.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/08.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/09.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/09.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/09.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/09.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/10.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/10.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/10.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/10.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/01.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/01.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/01.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/01.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="{{asset('frontend/assets/images/shop/01.jpg')}}" alt="webcode">
                                            <div class="shop__link">
                                                <a href="{{asset('frontend/assets/images/shop/01.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                    <div class="shop__item shop__item--list">
                                        <div class="shop__inner">
                                            <div class="shop__thumb">
                                                <img src="{{asset('frontend/assets/images/shop/01.jpg')}}" alt="webcode">
                                                <div class="shop__link">
                                                    <a href="{{asset('frontend/assets/images/shop/01.jpg')}}" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mt-5">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Shop Section Ends Here========== -->
@endsection