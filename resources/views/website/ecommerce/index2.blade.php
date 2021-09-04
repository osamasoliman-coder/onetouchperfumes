@extends('website.ecommerce.layouts.ecommerce')
@section('content')
    <div id="app">

        <!-- slider area start -->
        <div class="container clearfix">
            <div class="row">
                <div class="col-lg-9 ml-auto">
                    <div class="slider-area mt-35">
                        <div id="slider-active">
                            <img src="{{ asset('contents/website') }}/img/slider/5.jpg" alt="" title="#active1"/>
                            <img src="{{ asset('contents/website') }}/img/slider/6.jpg" alt="" title="#active2"/>
                        </div>
                        <div id="active1" class="nivo-html-caption">
                            <div class="slider-progress"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-11 col-md-12 ml-auto">
                                        <div class="slide1-text home3-slide1-text text-left">
                                            <div class="middle-text">
                                                <div class="cap-dec animated text-uppercase">
                                                    <h3>up to 20% off on TV</h3>
                                                </div>
                                                <div class="cap-title animated text-uppercase">
                                                    <h1>
                                                        Smart TVs <br/>
                                                        from to Tnm
                                                    </h1>
                                                </div>
                                                <div class="cap-dec animated">
                                                    <p>
                                                        Claritas est etiam processus dynamicus, qui sequitur
                                                        mutationem<br/>
                                                        consuetudium lectorum.
                                                    </p>
                                                </div>
                                                <div class="cap-readmore animated">
                                                    <a href="#">View Collection</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="active2" class="nivo-html-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-11 col-md-12 ml-auto">
                                        <div class="slide1-text text-left">
                                            <div class="middle-text">
                                                <div class="cap-dec animated">
                                                    <h3>up to 40% off on headphone</h3>
                                                </div>
                                                <div class="cap-title animated text-uppercase">
                                                    <h1>Feel your music</h1>
                                                </div>
                                                <div class="cap-dec animated">
                                                    <p>
                                                        Claritas est etiam processus dynamicus, qui sequitur
                                                        mutationem<br/>
                                                        consuetudium lectorum.
                                                    </p>
                                                </div>
                                                <div class="cap-readmore animated">
                                                    <a href="#">View Collection</a>
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
        </div>
        <!-- slider area end -->

        <div class="all-product-area mtb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-12">

                    @include('website.ecommerce.home_include.latest_deal')

                    <!-- featured-area start -->
                    @include('website.ecommerce.home_include.featured')
                    <!-- featured-area end -->
                    </div>

                    {{-- vue product --}}


                    <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                        <!-- product new start -->
                        <div class="product box-shadow bg-fff">
                            <div class="product-title home3-bg text-uppercase">
                                <i class="fa fa-paper-plane-o icon home3-bg2"></i>
                                <h3>New Products</h3>
                            </div>
                            <div class="left left-right-angle">
                                <div class="row">
                                    @for ($i = 0; $i < 8; $i++)
                                        <div class="col-md-3">
                                            @include('website.ecommerce.product.home_product_body')
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <!-- product new end -->

                        <!-- banner-area start -->
                        <div class="banner-area mtb-35">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-banner">
                                        <a href="#">
                                            <img src="{{ asset('contents/website') }}/img/banner/1.jpg" alt=""/>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-banner">
                                        <a href="#">
                                            <img src="{{ asset('contents/website') }}/img/banner/2.jpg" alt=""/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner-area end -->

                        <!-- product best seller -->
                        <div class="tab-area box-shadow bg-fff">
                            <div class="product-title home3-bg text-uppercase">
                                <i class="fa fa-check-square-o icon home3-bg2"></i>
                                <h3>Best Seller</h3>
                            </div>
                            <div class="tab-content">
                                <div class="row">
                                    @for ($i = 0; $i < 8; $i++)
                                        <div class="col-md-3">
                                            @include('website.ecommerce.product.home_product_body')
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <!-- tab-area end -->

                        <!-- banner-area start -->
                        <div class="banner-area mtb-35">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-banner">
                                        <a href="#">
                                            <img src="{{ asset('contents/website') }}/img/banner/4.jpg" alt=""/>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-banner">
                                        <a href="#">
                                            <img src="{{ asset('contents/website') }}/img/banner/5.jpg" alt=""/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner-area end -->

                        <!-- product random start -->
                        <div class="mostviewed-area mt-35 box-shadow bg-fff">
                            <div class="product-title home3-bg text-uppercase">
                                <i class="fa fa-check-square-o icon home3-bg2"></i>
                                <h3>Suggested Products</h3>
                            </div>
                            <div class="row">
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="col-md-3">
                                        @include('website.ecommerce.product.home_product_body')
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <!-- mostviewed-area end -->
                    </div>
                    <!-- product-area end -->
                </div>
            </div>
        </div>


        <!-- brand-area start -->
        <div class="brand-area mb-35">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="brand-active box-shadow p-15 bg-fff">
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/1.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/2.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/3.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/1.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/4.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/5.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/6.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/7.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="single-brand">
                                <a href="#">
                                    <img src="{{ asset('contents/website') }}/img/brand/8.jpg" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area end -->
    </div>
@endsection
