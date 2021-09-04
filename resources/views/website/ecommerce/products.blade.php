@extends('website.ecommerce.layouts.ecommerce')
@section('content')
    <div class="main-container shop-bg">
        <div class="container" id="category_product">
            <div>
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-breadcrumb mtb-15">
                            <div class="menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active"><a href="shop.html">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                        <!-- categories-area start -->
                        <div class="categories-area box-shadow bg-fff">
                            <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                                <i class="fa fa-bookmark icon bg-4"></i>
                                <h3>categories</h3>
                            </div>
                            <div class="shop-categories-menu p-20">
                                <ul>
                                    <li><a href="#">Accessories</a><span> (7)</span></li>
                                    <li>
                                        <a href="#">Clothing</a><span> (21)</span><span
                                            class="opener-1 fa fa-plus pull-right"></span>
                                        <ul class="toggle-1" style="display: none;">
                                            <li><a href="#">Hoodies</a><span> (20)</span></li>
                                            <li><a href="#">T-shirts</a><span> (3)</span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Men's</a><span> (16)</span><span
                                            class="opener-2 fa fa-plus pull-right"></span>
                                        <ul class="toggle-2" style="display: none;">
                                            <li><a href="#">Hats</a><span> (9)</span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Music</a><span> (11)</span><span
                                            class="opener-3 fa fa-plus pull-right"></span>
                                        <ul class="toggle-3" style="display: none;">
                                            <li><a href="#">Albums</a><span> (1)</span></li>
                                            <li><a href="#">Singles</a><span> (3)</span></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Posters</a><span> (7)</span></li>
                                    <li>
                                        <a href="#">Women's</a><span> (14)</span><span
                                            class="opener-4 fa fa-plus pull-right"></span>
                                        <ul class="toggle-4">
                                            <li><a href="#">Hats</a><span> (10)</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- filter-by-price-area start -->
                        <div class="filter-by-price-area mtb-30 bg-fff box-shadow">
                            <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                                <i class="fa fa-bookmark icon bg-4"></i>
                                <h3>Filter by price</h3>
                            </div>
                            <div class="filter-by-price p-20-15">
                                <p>price: <input type="text" id="amount"/></p>
                                <div id="slider-range"
                                     class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"
                                         style="left: 0.4%; width: 99.6%;"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                          style="left: 0.4%;"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                          style="left: 100%;"></span>
                                </div>
                                <div class="filter">
                                    <button>filter</button>
                                </div>
                            </div>
                        </div>
                        <!-- size-area start -->
                        <div class="size-area bg-fff box-shadow">
                            <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                                <i class="fa fa-bookmark icon bg-4"></i>
                                <h3>Size</h3>
                            </div>
                            <div class="size-menu shop-categories-menu p-20">
                                <ul>
                                    <li><a href="#">L</a><span> (1)</span></li>
                                    <li><a href="#">M</a><span> (1)</span></li>
                                    <li><a href="#">S</a><span> (1)</span></li>
                                    <li><a href="#">XS</a><span> (1)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- product-vew area start -->
                    <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                        <div class="tab-area">
                            <div class="row">
                              @for($i=0;$i<12;$i++)
                                    <div class="col-md-3">
                                        <a href="{{ route('website.product.details') }}">
                                            <div class="product-wrapper m-1" style="border-radius: 20px;border: 1px solid #e6f1fa;  box-shadow: 1px 1px 1px 1px #e6f1fa;background-color: white">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="{{asset('/contents/website/img/product/5.jpg')}}" alt="" class="primary">
                                                        <img src="{{asset('/contents/website/img/product/6.jpg')}}" alt="" class="secondary">
                                                    </a>
                                                    <div class="product-icon c-fff home3-hover-bg">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title=""
                                                                   data-original-title="Add to cart"><i
                                                                        class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title=""
                                                                   data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content home3-hover">
                                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span>&amp;300.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                              @endfor
                            </div>
                            <!-- woocommerce-pagination-area -->
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="woocommerce-pagination-area bg-fff box-shadow ptb-10 mb-30">
                                        <div class="woocommerce-pagination text-center hover-bg">
                                            <ul>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li>
                                                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
