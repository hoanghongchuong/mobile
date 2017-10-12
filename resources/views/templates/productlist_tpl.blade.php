@extends('index')
@section('content')
<section class="vk-content">
    <div class="vk-page product product-list">
        <div class="vk-product">
            <div class="container">

                <div class="vk-ads-wide left">
                    <div class="vk-ads-wide__frame">
                        <a href="#" title="">
                            <img src="{{asset('pubic/images/ads/ads-1.jpg')}}" class="img-fluid" alt="">
                        </a>

                    </div>
                </div>

                <div class="vk-ads-wide right">
                    <div class="vk-ads-wide__frame">
                        <a href="#" title="">
                            <img src="{{asset('pubic/images/ads/ads-2.jpg')}}" class="img-fluid" alt="">
                        </a>

                    </div>
                </div>

                <nav class="vk-breadcrumb">
                    <ul class="vk-list vk-list-inline vk-list-breadcrumb">
                        <li><a href="{{url('')}}">Trang chủ</a></li>

                        <li><a href="{{url('san-pham')}}">Sản phẩm</a></li>

                        <li class="active">{{$product_cate->name}}</li>
                    </ul>
                </nav>
                <!--./vk-breadcrumb-->

                <div class="vk-product-about">
                    <h1 class="vk-heading text-uppercase style-1">Iphone</h1>
                    <div class="vk-product-about-detail">
                        <p>
                            Với mục đích nâng cao chất lượng phục vụ ngày càng tốt hơn, Siêu thị điện máy Pico mong muốn
                            nhận được những ý kiến đóng góp phản ánh của quý khách về chất lượng sản phẩm, dịch vụ khi
                            mua hàng tại Pico. Sau khi nhận được ý kiến đóng góp chúng tôi sẽ chuyển thông tin đến các
                            bộ phận có liên quan để giải quyết và trả lời lời Quý khách trong thời gian sớm nhất.
                        </p>
                    </div> <!--./vk-product-about-detail-->

                </div> <!--./vk-product-about-->

                <div class="vk-product__mid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="vk-product__newest">
                                <div class="vk-img-frame">
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
                        </div>

                        <div class="col-lg-8">
                            <div class="vk-product__slider vk-slider-arrow-style-1" data-slider="product-banner">
                                <div class="vk-img-frame">
                                    <img src="images/slider/slide-1.jpg" alt="">
                                </div>
                                <div class="vk-img-frame">
                                    <img src="images/slider/slide-1.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>

                </div> <!--./vk-product__newest-->

                <div class="vk-product-show">

                    <div class="vk-product-list-box">
                        <h3 class="vk-heading style-3 text-uppercase"><a href="product-list-level-2.html">Iphone 5</a></h3>
                        <div class="vk-product-list row">
                            <div class="col-lg-2">
                                <div class="vk-img-frame">
                                    <a href="product-list-level-2.html" class="vk-img">
                                        <img src="images/shop/thumbnail-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-4 col-lg-2 item">
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

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
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

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
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

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
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

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-5.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                        </div> <!--./vk-product-list-->
                    </div> <!--./vk-product-list-box-->

                    <div class="vk-product-list-box">
                        <h3 class="vk-heading style-3 text-uppercase"><a href="product-list-level-2.html">Iphone 6</a></h3>
                        <div class="vk-product-list row">
                            <div class="col-lg-2">
                                <div class="vk-img-frame">
                                    <a href="product-list-level-2.html" class="vk-img">
                                        <img src="images/shop/thumbnail-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-6.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-7.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-8.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-9.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-10.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                        </div> <!--./vk-product-list-->
                    </div> <!--./vk-product-list-box-->

                    <div class="vk-product-list-box">
                        <h3 class="vk-heading style-3 text-uppercase"><a href="product-list-level-2.html">Iphone 7</a></h3>
                        <div class="vk-product-list row">
                            <div class="col-lg-2">
                                <div class="vk-img-frame">
                                    <a href="product-list-level-2.html" class="vk-img">
                                        <img src="images/shop/thumbnail-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-11.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-12.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-13.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-14.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-15.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                        </div> <!--./vk-product-list-->
                    </div> <!--./vk-product-list-box-->

                    <div class="vk-product-list-box">
                        <h3 class="vk-heading style-3 text-uppercase"><a href="product-list-level-2.html">Iphone 4</a></h3>
                        <div class="vk-product-list row">
                            <div class="col-lg-2">
                                <div class="vk-img-frame">
                                    <a href="product-list-level-2.html" class="vk-img">
                                        <img src="images/shop/thumbnail-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-16.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-17.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-18.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-19.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-20.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                        </div> <!--./vk-product-list-->
                    </div> <!--./vk-product-list-box-->

                    <div class="vk-product-list-box">
                        <h3 class="vk-heading style-3 text-uppercase"><a href="product-list-level-2.html">Loại khác</a></h3>
                        <div class="vk-product-list row">
                            <div class="col-lg-2">
                                <div class="vk-img-frame">
                                    <a href="product-list-level-2.html" class="vk-img">
                                        <img src="images/shop/thumbnail-5.jpg" alt="">
                                    </a>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-21.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-22.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-23.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-24.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="product-detail.html">
                                            <img src="images/shop/shop-item-25.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="product-detail.html">iPhone 8 Plus 64Gb</a></h3>
                                        <p class="vk-price">Giá: 23.199.000 VNĐ</p>
                                    </div>
                                </div> <!--./vk-shop-item-->
                            </div> <!--./item-->

                        </div> <!--./vk-product-list-->
                    </div> <!--./vk-product-list-box-->

                </div> <!--./vk-product-show-->

            </div> <!-- /.container -->
        </div> <!--./vk-product-->
    </div><!--./vk-page-->
</section>
   
@endsection
