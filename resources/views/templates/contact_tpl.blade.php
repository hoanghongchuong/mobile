@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    // $chinhanh = Cache::get('chinhanh');
?>
<section class="vk-content">
    <div class="vk-page contact">
        <div class="container">

            <div class="vk-ads-wide left">
                <div class="vk-ads-wide__frame">
                    <a href="#" title="">
                        <img src="{{asset('public/images/ads/ads-1.jpg')}}" class="img-fluid" alt="">
                    </a>

                </div>
            </div>

            <div class="vk-ads-wide right">
                <div class="vk-ads-wide__frame">
                    <a href="#" title="">
                        <img src="{{asset('public/images/ads/ads-2.jpg')}}" class="img-fluid" alt="">
                    </a>

                </div>
            </div>

            <nav class="vk-breadcrumb">
                <ul class="vk-list vk-list-inline vk-list-breadcrumb">
                    <li><a href="index.html">Trang chủ</a></li>

                    <li class="active">Liên hệ</li>
                </ul>
            </nav>
            <!--./vk-breadcrumb-->

            <h1 class="vk-heading style-1 text-uppercase">Liên hệ</h1>
            <div class="vk-contact-box">
                <h3 class="vk-title">{{$setting->company}}</h3>
                <div class="row ">
                    @foreach($chinhanhx as $chinhanh)
                    <div class="col-lg-6">
                        <div class="vk-contact-item">
                            <h4 class="vk-contact-title">{{$chinhanh->name}}:</h4>
                            <ul class="vk-list vk-list-icon">
                                <li>{{$chinhanh->address}}</li>
                                <li>Tel : <a href="#">{{$chinhanh->phone}}</a> -
                                </li>
                                <li> Website: <a href="{{$chinhanh->website}}" target="_blank">{{$chinhanh->website}}</a></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> <!--./vk-contact-box-->
            <div class="vk-contact-form">
                <h4 class="vk-contact-title ">Thông tin liên hệ</h4>
                <form action="{{route('postContact')}}" method="post" accept-charset="utf-8">
                    {{ csrf_field() }}   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" name="name" placeholder="Họ tên*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" required="required" name="email" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" required="required" name="phone" placeholder="Điện thoại*">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="content" id="" required="required" class="form-control" placeholder="Nội dung"></textarea>
                            </div>
                            <div class="vk-button">
                                <button type="submit" class="vk-btn vk-btn-submit text-uppercase">Gửi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!--./vk-contact-form-->
            <div class="vk-contact-map">
                <h4 class=" vk-contact-title">Trụ sở công ty</h4>
                <div class="vk-map">
                    <div class="map_container">
                        {!!$setting->iframemap!!}
                    </div>
                </div>
            </div>

        </div>

    </div><!--./vk-page-->
</section>
<!--./content-->
@endsection
