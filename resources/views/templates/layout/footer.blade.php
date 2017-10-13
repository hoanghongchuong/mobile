<?php
    $setting = Cache::get('setting');
    $chinhanh = Cache::get('chinhanh');
?>

 <footer class="vk-footer">
    <div class="container">
        <div class="vk-footer__top">
            <nav class="vk-footer__nav">

                <ul class="vk-menu__footer vk-list vk-list--inline-responsive">
                    <li class="vk-list__item"><a href="index.html" title="Trang chủ">Trang chủ</a></li>
                    <li class="vk-list__item"><a href="about.html" title="Giới thiệu">Giới thiệu</a></li>
                    <li class="vk-list__item"><a href="product-list.html" title="Sản phẩm">Sản phẩm</a></li>
                    <li class="vk-list__item"><a href="news-list.html" title="Tin tức">Tin tức</a></li>
                    <!-- <li class="vk-list__item"><a href="news-list.html" title="Tư vấn thiết kế">Tư vấn thiết kế</a></li> -->
                    <li class="vk-list__item"><a href="contact.html" title="Liên hệ">Liên hệ</a></li>
                </ul> <!--./vk-menu__footer-->

            </nav> <!--./vk-footer__nav-->

            <div class="vk-footer__social">
                <ul class="vk-list  vk-list-inline vk-list__social">
                    <li class="vk-list__item"><a href="#" title=""><i class="_icon fa fa-vimeo"></i></a></li>
                    <li class="vk-list__item"><a href="#" title=""><i class="_icon fa fa-twitter"></i></a></li>
                    <li class="vk-list__item"><a href="#" title=""><i class="_icon fa fa-skype"></i></a></li>
                    <li class="vk-list__item"><a href="#" title=""><i class="_icon fa fa-facebook"></i></a></li>
                </ul>
            </div>

        </div> <!--./vk-footer__top-->

        <div class="vk-footer__mid">

            <div class="vk-footer__mid-left">

                <div class="row">

                    <div class="col-lg-3">
                        <div class="vk-footer__logo">
                            <a href="index.html" title=""><img src="{{asset('public/images/logo/logo-2.png')}}" alt=""></a>

                        </div><!--./vk-footer__logo-->
                    </div>

                    <div class="col-lg-5">
                        <div class="vk-footer-item">
                            <h3 class="vk-heading  text-uppercase">Dịch vụ của chúng tôi</h3>
                            <ul class="vk-list vk-list-icon">
                                <li><a href="#">Arable & Postoral Farmers</a></li>
                                <li><a href="#">Become a Member</a></li>
                                <li><a href="#">Shop Our Prodcuts</a></li>
                                <li><a href="#">Casino</a></li>
                            </ul>
                            <div class="vk-tag">
                                <a href="product-list-2.html" title="">Iphone</a>
                                <a href="product-list-2.html" title="">SAMSUNG</a>
                                <a href="product-list-2.html" title="">Sky</a>
                                <a href="product-list-2.html" title="">HTC</a>
                                <a href="product-list-2.html" title="">Nokia</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="vk-footer-item">
                            <h3 class="vk-heading  text-uppercase">THÔNG TIN LIÊN HỆ</h3>
                            <div class="vk-address">

                                <div class="vk-address-item">
                                    <p><i class="vk-icon fa fa-home"></i> {{$setting->address}}</p>
                                    <p><i class="vk-icon fa fa-phone"></i> Hotline<a href="callto:{{$setting->phone}}">{{$setting->phone}}</a>/p>
                                    <p><i class="vk-icon fa fa-envelope-o"></i>Email<a
                                            href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                                    </p>
                                    <p><i class="vk-icon fa fa-globe"></i>Website:<a href="{{$setting->website}}">{{$setting->website}}</a> </p>

                                </div> <!--./vk-address-item-->

                            </div> <!--./vk-address-->
                        </div> <!--./vk-footer-item-->
                    </div>


                </div> <!--./row-->


            </div> <!--./vk-footer__mid-left-->


        </div> <!--./vk-footer__mid-->
    </div><!-- /.container -->
    <div class="vk-footer__bot">
        <div class="container">
            <div class="vk-footer__bot-content d-flex flex-column flex-lg-row justify-content-between align-items-center">
                <p class="mb-0">© GCO GROUP 2017. All rights reserved</p>
                <div class="vk-visa">
                    <img src="{{asset('public/images/other/visa-list.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
</footer><!--./vk-footer-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=124844007858325";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>