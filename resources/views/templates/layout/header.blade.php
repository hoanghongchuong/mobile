<?php
    $setting = Cache::get('setting');
    $menu_top = Cache::get('menu_top');
    $cateProducts = Cache::get('cateProducts');
?>
<header class="vk-header ">
    <div class="vk-header__top-plus">
        <div class="container">
            <div class="vk-header-top-plus-content d-flex justify-content-between">
                <ul class="vk-list vk-list-inline vk-header__social-list">
                    <li><a href="#" title="Pinterest" data-toggle="tooltip"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="{{$setting->facebook}}" title="Facebook" data-toggle="tooltip"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$setting->twitter}}" title="Twitter" data-toggle="tooltip"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{$setting->google}}" title="Google Plus" data-toggle="tooltip"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <ul class="vk-list vk-list-inline vk-menu__main">
                    <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                    <li><a href="{{url('tin-tuc')}}" title="">Tin tức</a></li>
                    <li><a href="{{url('tuyen-dung')}}" title="">Tuyển dụng</a></li>
                    <li><a href="#" title="">Giới thiệu</a></li>
                    <li><a href="#" title="">Trung tâm bảo hành</a></li>
                    <li><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <!-- /.container -->
    </div> <!--./vk-header-top-plus-->
    <div class="vk-header-top">
        <div class="container">
            <div class="vk-inner-content ">
                <div class="vk-logo">
                    <a href="{{url('')}}">
                        <img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="">
                    </a>
                </div>
                <form class="text-uppercase title search-frm" method="get" action="{{route('search')}}">
                    <div class="vk-form vk-form-search">
                       
                            <input type="text" class="form-control" required="required" name="txtSearch" placeholder="Từ khóa tìm kiếm">
                            <button class="vk-btn vk-btn-submit"><i class="fa fa-search"></i></button>
                       
                    </div>
                 </form>
                <div class="vk-header__hotline">
                    <div class="vk-hotline">
                        <i class="vk-hotline__icon fa fa-phone"></i>
                        <div class="vk-hotline__number">
                            <label for="phoneNumber" class="vk-hotline__label text-uppercase">Tư vấn trực tiếp</label>
                            <a href="callto:{{$setting->hotline}}" title="{{$setting->hotline}}" id="phoneNumber" class="vk-hotline__phone">{{$setting->hotline}}</a>
                        </div> <!--./vk-hotline__number-->
                    </div> <!--./vk-hotline-->
                </div>
                <div class="vk-header__access">
                    @if(Auth::check())
                        <div class="vk-access">
                            <a href="#" title="" class="vk-access__username">{{Auth::user()->name}}</a>
                            <a href="{{url('logout')}}" title="" class="vk-access__action">--Thoát--</a>
                        </div>
                    @else
                        <ul>
                            <li><a href="{{url('signup')}}" title="">Đăng ký</a></li>
                            <li><a href="{{url('login')}}" title="">Đăng nhập</a></li>
                        </ul>
                    @endif
                    <div class="vk-access vk-access--shopcart">
                        <a href="{{url('gio-hang')}}" title="">Giỏ hàng <span class="vk-text--puce-1">({{Cart::count()}} SP)</span></a>
                        <a href="{{url('gio-hang')}}" title="">Click để xem giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--./vk-header-top-->
</header> <!--./vk-header-->
<header class="vk-header-bottom">
    <div class="container">
        <nav class="vk-menu vk-main-menu">
            <ul class="vk-list vk-list-inline vk-list-menu">
                <li class="home @if(!empty($com) && $com=='index') active @endif"><a href="{{url('')}}"><i class="_icon fa fa-home"></i></a></li>
                @foreach($cateProducts as $cateProduct)
                <li class="@if(isset($product_cate) && $product_cate->id == $cateProduct->id) active @endif"><a href="{{url('san-pham/'.$cateProduct->alias)}}">{{$cateProduct->name}}</a></li>
                @endforeach
            </ul>
        </nav>
        <nav class="vk-menu menu-mobile " id="menu">
            <ul class="">
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li>
                    <a href="{{url('san-pham')}}">Sản phẩm</a>
                    <ul class="child">
                        <li class="home @if(!empty($com) && $com=='index') active @endif "><a href="{{url('')}}"><i class="_icon fa fa-home"></i></a></li>
                        @foreach($cateProducts as $cateProduct)
                        <li class="@if(isset($product_cate) && $product_cate->id == $cateProduct->id) active @endif "><a href="{{url('san-pham/'.$cateProduct->alias)}}">{{$cateProduct->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{url('tin-tuc')}}" title="Tin tức">Tin tức</a></li>
                <li><a href="{{url('tuyen-dung')}}" title="">Tuyển dụng</a></li>
                <li><a href="#" title="">Giới thiệu</a></li>
                <li><a href="#" title="">Trung tâm bảo hành</a></li>
                <li><a href="{{url('lien-he')}}" title="Liên hệ">Liên hệ</a></li>
            </ul>
        </nav>
    </div>
    <!-- /.container -->
</header> <!--./vk-header-bottom-->