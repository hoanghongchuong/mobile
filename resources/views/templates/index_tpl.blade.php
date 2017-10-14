@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
?>
<section class="vk-content">
    <div class="vk-home">
        <div class="container">

            <div class="vk-ads-wide left">
                <div class="vk-ads-wide__frame">
                    <?php $banner = DB::table('banner_content')->where('position', 3)->get() ?>
                    <a href="{{$banner[0]->link}}" title="">
                        <img src="{{asset('upload/banner/'.$banner[0    ]->image)}}" class="img-fluid" alt="">
                    </a>

                </div>
            </div>

            <div class="vk-ads-wide right">
                <div class="vk-ads-wide__frame">
                    <a href="{{$banner[1]->link}}" title="">
                        <img src="{{asset('upload/banner/'.$banner[1]->image)}}" class="img-fluid" alt="">
                    </a>

                </div>
            </div>

            <div class="vk-home__slider vk-slider-dot-style-1" data-slider="home-slider">
                <?php $sliders = DB::table('slider')->where('com','gioi-thieu')->get(); ?>
                @foreach($sliders as $slider)
                <div class="vk-img-frame">
                    <img src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="">
                </div>
                @endforeach

            </div> <!--./vk-home__slider-->

            <div class="vk-home__cate">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="vk-home-cate__item">
                            <div class="vk-img-frame">
                                <a href="product-list-level-2.html" title="">
                                    <img src="{{asset('public/images/home/home-cate-1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="vk-home-cate__brief">
                                <div class="vk-home-cate__wrapper">
                                    <h3 class="vk-home-cate__title"><a href="product-list-level-2.html" title="">apple</a> </h3>
                                    <a class="vk-home-cate__more" href="product-list-level-2.html" title="">xem thêm >> </a>
                                </div>

                            </div>
                        </div> <!--./vk-home-cate__item-->
                    </div> <!--./col-->
                    <div class="col-lg-4">
                        <div class="vk-home-cate__item">
                            <div class="vk-img-frame">
                                <a href="product-list-level-2.html" title="">
                                    <img src="{{asset('public/images/home/home-cate-2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="vk-home-cate__brief">
                                <div class="vk-home-cate__wrapper">
                                    <h3 class="vk-home-cate__title"><a href="product-list-level-2.html" title="">nokia</a> </h3>
                                    <a class="vk-home-cate__more" href="product-list-level-2.html" title="">xem thêm >> </a>
                                </div>

                            </div>
                        </div> <!--./vk-home-cate__item-->
                    </div> <!--./col-->
                    <div class="col-lg-4">
                        <div class="vk-home-cate__item">
                            <div class="vk-img-frame">
                                <a href="product-list-level-2.html" title="">
                                    <img src="{{asset('public/images/home/home-cate-1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="vk-home-cate__brief">
                                <div class="vk-home-cate__wrapper">
                                    <h3 class="vk-home-cate__title"><a href="product-list-level-2.html" title="">samsung</a> </h3>
                                    <a class="vk-home-cate__more" href="product-list-level-2.html" title="">xem thêm >> </a>
                                </div>

                            </div>
                        </div> <!--./vk-home-cate__item-->
                    </div> <!--./col-->



                </div> <!--./row-->
            </div> <!--./vk-home__cate-->



            <div class="vk-home-product-show">
                <div class="vk-product-list vk-product-list--home-box">

                    <div class="vk-heading-box">
                        <div class="vk-heading style-3 ">
                            <h3 class="mb-0 text-uppercase"><a href="product-list.html">Iphone</a></h3>
                            <ul class="vk-list vk-heading__menu">
                                <li><a href="product-list-level-2.html" title="">Iphone 7</a></li>
                                <li><a href="product-list-level-2.html" title="">Iphone 6</a></li>
                                <li><a href="product-list-level-2.html" title="">Iphone 5</a></li>
                                <li><a href="product-list-level-2.html" title="">Iphone 4</a></li>
                            </ul>
                        </div>
                    </div><!-- ./vk-heading-box-->

                    <div class="row">

                        <div class="col-lg-3">
                            <div class="vk-product__newest">
                                <div class="vk-img">
                                    <a href="product-detail.html" title="">
                                        <img src="{{asset('public/images/shop/image-1.jpg')}}" alt="">
                                    </a>
                                </div>

                                <div class="vk-product__newest-brief">
                                    <h3 class="vk-product__title"><a href="product-detail.html" title="">Apple iPhone 7 Plus 128Gb - New 100% đã Active</a></h3>
                                    <p class="vk-product__id"><span>MS-IP7S128</span></p>
                                    <p class="vk-product__price">16.799.000 VNĐ</p>
                                </div>

                            </div>
                            <div class="vk-product__thumbnail ">
                                <div class="vk-img-frame">
                                    <a href="product-list-level-2.html" title="">
                                        <img src="{{asset('public/images/home/home-item-1.jpg')}} alt="">
                                    </a>
                                </div>
                            </div>
                        </div> <!--./col-->

                        <div class="col-lg-9">
                            <div class="vk-product-list vk-product-list--home row">

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="{{asset('public/images/shop/shop-item-1.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="{{asset('public/images/shop/shop-item-2.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="{{asset('public/images/shop/shop-item-3.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="{{asset('public/images/shop/shop-item-4.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="{{asset('public/images/shop/shop-item-5.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="{{asset('public/images/shop/shop-item-6.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="{{asset('public/images/shop/shop-item-7.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="{{asset('public/images/shop/shop-item-8.jpg')}}" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->
                            </div>
                            <!-- /.vk-product-list vk-product-list--home -->
                        </div> <!--./col-->



                    </div> <!--./row-->
                </div> <!--./vk-product-list vk-product-list--home-box-->
            </div> <!--./vk-home-product-show-->

            <div class="vk-home-product-show">
                <div class="vk-product-list vk-product-list--home-box">

                    <div class="vk-heading-box">
                        <div class="vk-heading style-3 ">
                            <h3 class="mb-0 text-uppercase"><a href="product-list.html">Nokia</a></h3>
                            <ul class="vk-list vk-heading__menu">
                                <li><a href="product-list-level-2.html" title="">Nokia X1</a></li>
                                <li><a href="product-list-level-2.html" title="">Nokia X2</a></li>
                                <li><a href="product-list-level-2.html" title="">Nokia X3</a></li>
                                <li><a href="product-list-level-2.html" title="">Nokia X4</a></li>
                            </ul>
                        </div>
                    </div><!-- ./vk-heading-box-->

                    <div class="row">

                        <div class="col-lg-3">
                            <div class="vk-product__newest">
                                <div class="vk-img">
                                    <a href="product-detail.html" title="">
                                        <img src="images/shop/image-1.jpg" alt="">
                                    </a>
                                </div>

                                <div class="vk-product__newest-brief">
                                    <h3 class="vk-product__title"><a href="product-detail.html" title="">Apple iPhone 7 Plus 128Gb - New 100% đã Active</a></h3>
                                    <p class="vk-product__id"><span>MS-IP7S128</span></p>
                                    <p class="vk-product__price">16.799.000 VNĐ</p>
                                </div>

                            </div>
                        </div> <!--./col-->

                        <div class="col-lg-9">
                            <div class="vk-product-list vk-product-list--home row">

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-1.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->
                            </div>
                            <!-- /.vk-product-list vk-product-list--home -->
                        </div> <!--./col-->



                    </div> <!--./row-->
                </div> <!--./vk-product-list vk-product-list--home-box-->
            </div> <!--./vk-home-product-show-->

            <div class="vk-home-product-show">
                <div class="vk-product-list vk-product-list--home-box">

                    <div class="vk-heading-box">
                        <div class="vk-heading style-3 ">
                            <h3 class="mb-0 text-uppercase"><a href="product-list.html">HTC</a></h3>
                            <ul class="vk-list vk-heading__menu">
                                <li><a href="product-list-level-2.html" title="">HTC X1</a></li>
                                <li><a href="product-list-level-2.html" title="">HTC X2</a></li>
                                <li><a href="product-list-level-2.html" title="">HTC X3</a></li>
                                <li><a href="product-list-level-2.html" title="">HTC X4</a></li>
                            </ul>
                        </div>
                    </div><!-- ./vk-heading-box-->

                    <div class="row">

                        <div class="col-lg-3">
                            <div class="vk-product__newest">
                                <div class="vk-img">
                                    <a href="product-detail.html" title="">
                                        <img src="images/shop/image-1.jpg" alt="">
                                    </a>
                                </div>

                                <div class="vk-product__newest-brief">
                                    <h3 class="vk-product__title"><a href="product-detail.html" title="">Apple iPhone 7 Plus 128Gb - New 100% đã Active</a></h3>
                                    <p class="vk-product__id"><span>MS-IP7S128</span></p>
                                    <p class="vk-product__price">16.799.000 VNĐ</p>
                                </div>

                            </div>
                        </div> <!--./col-->

                        <div class="col-lg-9">
                            <div class="vk-product-list vk-product-list--home row">

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-1.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->
                            </div>
                            <!-- /.vk-product-list vk-product-list--home -->
                        </div> <!--./col-->



                    </div> <!--./row-->
                </div> <!--./vk-product-list vk-product-list--home-box-->
            </div> <!--./vk-home-product-show-->

            <div class="vk-home-product-show">
                <div class="vk-product-list vk-product-list--home-box">

                    <div class="vk-heading-box">
                        <div class="vk-heading style-3 ">
                            <h3 class="mb-0 text-uppercase"><a href="product-list.html">SAMSUNG</a></h3>
                            <ul class="vk-list vk-heading__menu">
                                <li><a href="product-list-level-2.html" title="">SAMSUNG X1</a></li>
                                <li><a href="product-list-level-2.html" title="">SAMSUNG X2</a></li>
                                <li><a href="product-list-level-2.html" title="">SAMSUNG X3</a></li>
                                <li><a href="product-list-level-2.html" title="">SAMSUNG X4</a></li>
                            </ul>
                        </div>
                    </div><!-- ./vk-heading-box-->

                    <div class="row">

                        <div class="col-lg-3">
                            <div class="vk-product__newest">
                                <div class="vk-img">
                                    <a href="product-detail.html" title="">
                                        <img src="images/shop/image-1.jpg" alt="">
                                    </a>
                                </div>

                                <div class="vk-product__newest-brief">
                                    <h3 class="vk-product__title"><a href="product-detail.html" title="">Apple iPhone 7 Plus 128Gb - New 100% đã Active</a></h3>
                                    <p class="vk-product__id"><span>MS-IP7S128</span></p>
                                    <p class="vk-product__price">16.799.000 VNĐ</p>
                                </div>

                            </div>
                        </div> <!--./col-->

                        <div class="col-lg-9">
                            <div class="vk-product-list vk-product-list--home row">

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-1.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-2.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-3.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->

                                <div class="col-sm-6 col-md-3 item">
                                    <div class="vk-shop-item">
                                        <div class="vk-img-frame">
                                            <a class="vk-img" href="product-detail.html">
                                                <img src="images/shop/shop-item-4.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="vk-shop-item-brief">
                                            <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                            <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                        </div>
                                    </div> <!--./vk-shop-item-->
                                </div> <!--./item-->
                            </div>
                            <!-- /.vk-product-list vk-product-list--home -->
                        </div> <!--./col-->



                    </div> <!--./row-->
                </div> <!--./vk-product-list vk-product-list--home-box-->
            </div> <!--./vk-home-product-show-->


            <div class="vk-home-bottom">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="vk-news-hot">
                            <h3 class="vk-heading text-uppercase style-2 inverse">Tin tức </h3>
                            <div class="vk-news-list">
								@foreach($tintuc_moinhat as $news)
                                <div class="vk-news-item-3">
                                    <div class="vk-img-frame">
                                        <a href="news-detail.html" class="vk-img">
                                            <img src="{{asset('upload/news/'.$news->photo)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="vk-news-item-brief">
                                        <h3 class="vk-title"><a href="news-detail.html">{{$news->name}}</a></h3>
                                        <div class="vk-published">{{date('d/m/Y', strtotime($news->created_at))}}</div>
                                    </div>
                                </div> <!--./vk-news-item-3-->
								@endforeach
                                
                            </div>
                        </div> <!--./vk-news-hot-->
                    </div> <!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="vk-product-sale-off">
                            <h3 class="vk-heading style3 text-uppercase style-2 inverse">Sale off trong tháng</h3>
                            <div class="vk-product-list vk-product-list--home">


                                <div class="vk-shop-item-2">
                                    <div class="vk-img-frame">
                                        <a href="product-detail.html" class="vk-img">
                                            <img src="images/shop/shop-list-1.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">Máy tập cơ lưng, bụng DL 2624</a></h3>
                                        <p>Bảo hành: 1 năm</p>
                                        <p>Mã sản phẩm: DL 2624</p>
                                        <p class="vk-label-sale text-uppercase">sale off 20%</p>
                                    </div>
                                </div> <!--./vk-shop-item-2-->

                                <div class="vk-shop-item-2">
                                    <div class="vk-img-frame">
                                        <a href="product-detail.html" class="vk-img">
                                            <img src="images/shop/shop-list-2.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">Máy tập cơ lưng, bụng DL 2624</a></h3>
                                        <p>Bảo hành: 1 năm</p>
                                        <p>Mã sản phẩm: DL 2624</p>
                                        <p class="vk-label-sale text-uppercase">sale off 20%</p>
                                    </div>
                                </div> <!--./vk-shop-item-2-->

                                <div class="vk-shop-item-2">
                                    <div class="vk-img-frame">
                                        <a href="product-detail.html" class="vk-img">
                                            <img src="images/shop/shop-list-3.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">Máy tập cơ lưng, bụng DL 2624</a></h3>
                                        <p>Bảo hành: 1 năm</p>
                                        <p>Mã sản phẩm: DL 2624</p>
                                        <p class="vk-label-sale text-uppercase">sale off 20%</p>
                                    </div>
                                </div> <!--./vk-shop-item-2-->

                            </div> <!--./vk-product-list vk-product-list--home-->
                        </div> <!--./vk-product-sale-off-->
                    </div> <!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="vk-home-video">
                            <h3 class="vk-heading style-2 inverse text-uppercase">Video</h3>
                            <div class="vk-img-frame">
                                <a href="#" title="">
                                    <img src="images/ads/1.jpg" alt="">
                                </a>
                            </div>
                        </div> <!--./vk-home-video-->
                    </div> <!-- /.col-lg-4 -->
                </div> <!-- /.row -->
            </div> <!--./vk-home-bottom-->

        </div><!-- /.container -->
    </div><!--./vk-home-->

</section>
@endsection
