@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<section class="vk-content">
    <div class="vk-page shop shopcart checkout">
        <div class="container">

            <div class="vk-ads-wide left">
                <div class="vk-ads-wide__frame">
                    <a href="#" title="">
                        <img src="images/ads/ads-1.jpg" class="img-fluid" alt="">
                    </a>

                </div>
            </div>

            <div class="vk-ads-wide right">
                <div class="vk-ads-wide__frame">
                    <a href="#" title="">
                        <img src="images/ads/ads-1.jpg" class="img-fluid" alt="">
                    </a>

                </div>
            </div>

            <nav class="vk-breadcrumb">
                <ul class="vk-list vk-list-inline vk-list-breadcrumb">
                    <li><a href="index.html">Trang chủ</a></li>

                    <li class="active">Thanh toán</li>
                </ul>
            </nav>
            <!--./vk-breadcrumb-->
            <h1 class="vk-heading style-1 text-uppercase">Thanh toán</h1>
			<form class="form-group cart-info-frm" method="post" action="{{route('postOrder')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
	            <div class="vk-shop-checkout pt-3">

	                <div class="row" data-layout="">
	                    <div class="col-lg-4">
	                        <div class="vk-shop-checkout-box pb-4">
	                            <h3 class="vk-heading-box">Thông tin người nhận</h3>

	                            <form novalidate="">
	                                <div class="vk-form vk-form-book-info" id="needs-validation">
	                                    <div class="form-group">
	                                        <div class="input-group">
	                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
	                                            <input type="text" class="form-control unvalidated" placeholder="Họ tên khách hàng *" name="full_name" required="required">
	                                        </div>
	                                    </div> <!--./form-group-->

	                                    <div class="form-group">
	                                        <div class="input-group">
	                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
	                                            <input type="text" class="form-control unvalidated" placeholder="Địa chỉ nhận hàng *" name="address" required="required">
	                                        </div>
	                                    </div> <!--./form-group-->

	                                    <div class="form-group">
	                                        <div class="input-group">
	                                            <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
	                                            <select name="province" id="" class="form-control unvalidated" required="">
	                                                <option value="" hidden="hidden">Tỉnh/Thành phố *</option>
	                                                <?php $provinces = DB::table('province')->get() ?>
	                                                @foreach($provinces as $province)
	                                                	<option value="{{$province->id}}">{{$province->province_name}}</option>
	                                               	@endforeach
	                                            </select>
	                                        </div>


	                                    </div> <!--./form-group-->


	                                    <div class="form-group">
	                                        <div class="input-group">
	                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
	                                            <input type="tel" class="form-control unvalidated"
	                                                   placeholder="Số điện thoại liên lạc *" name="phone" required="required">
	                                        </div>
	                                    </div> <!--./form-group-->

	                                    <div class="form-group">
	                                        <div class="input-group">
	                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
	                                            <input type="email" class="form-control unvalidated" placeholder="Email liên hệ *" name="email" required="required">
	                                        </div>
	                                    </div> <!--./form-group-->


	                                    <div class="form-group">
	                                    <textarea name="note" id="" class="form-control" placeholder="Nội dung đặt hàng"></textarea>
	                                    </div>

	                                    <div class="vk-note">(*) Thông tin bắt buộc</div>
	                                    <div class="vk-button-box">
	                                        <button class="vk-btn vk-btn-book text-uppercase" type="submit">Thanh toán
	                                        </button>
	                                    </div>


	                                </div> <!--./vk-form-book-info-->
	                            </form>
	                        </div> <!--./vk-shop-checkout-box-->

	                    </div> <!--./col-lg-4-->

	                    <div class="col-lg-4">
	                        <div class="vk-box">
	                            <div class="vk-shop-checkout-box pt-3 pt-lg-0 unavailable" id="step2">
	                                <h3 class="vk-heading-box">Phương thức thanh toán</h3>

	                                <div class="vk-payment-method" id="paymentMethod">

	                                    <div class="vk-method">
	                                        <label class="custom-control custom-radio">
	                                            <input id="radio1" name="payment_method" value="0" type="radio" checked="checked"
	                                                   class="custom-control-input" data-toggle="collapse"
	                                                   data-target="#method1">
	                                            <span class="custom-control-indicator"></span>
	                                            <span class="custom-control-description">Thanh toán trực tiếp</span>
	                                        </label>
	                                        <div class="collapse show" id="method1" data-parent="#paymentMethod">
	                                            <p class="vk-text">
	                                                Nhân viên của chúng tôi giao hàng đến quý khách, quý khách sẽ thanh toán
	                                                đầy đủ
	                                                100% số tiền trực tiếp cho nhân viên của chúng tôi
	                                            </p>
	                                        </div>

	                                    </div> <!--./vk-method-->

	                                    <div class="vk-method">
	                                        <label class="custom-control custom-radio">
	                                            <input id="radio2" name="payment_method" type="radio" value="1" class="custom-control-input"
	                                                   data-toggle="collapse" data-target="#method2">
	                                            <span class="custom-control-indicator"></span>
	                                            <span class="custom-control-description">Chuyển khoản ngân hàng</span>
	                                        </label>

	                                        <div class="collapse" id="method2" data-parent="#paymentMethod">
	                                            <p class="vk-text">
	                                                Hiện nay chúng tôi hỗ trợ các ngân hàng sau:
	                                            </p>
	                                            <div class="vk-bank-list">
	                                            	@foreach($bank as $b)
	                                                <div class="vk-bank-item">
	                                                    <div class="vk-img-frame">
	                                                        <img src="{{asset('upload/banner/'.$b->img)}}" alt="">
	                                                    </div>
	                                                    <div class="vk-bank-brief">
	                                                        {!! $b->info !!}
	                                                    </div>
	                                                </div> <!--./vk-bank-item-->
													@endforeach	
	                                            </div> <!--./vk-bank-list-->
	                                        </div>

	                                    </div> <!--./vk-method-->

	                                </div>  <!--./vk-payment-method-->

	                            </div> <!--./vk-shop-checkout-box-->
	                        </div> <!--./vk-box-->

	                    </div> <!--./col-lg-4-->

	                    <div class="col-md-4 ">
	                        <div class="vk-shop-checkout-box pt-3 pt-lg-0">

	                            <h3 class="vk-heading-box">Địa chỉ liên hệ</h3>

	                            <div class="vk-shop-checkout-contact">

	                                <ul class="vk-list vk-list-icon-2">
	                                    <li>
	                                        <i class="vk-icon fa fa-map-marker"></i>
	                                        {{$setting->address}}
	                                    </li>
	                                    <li>
	                                        <i class="vk-icon fa fa-phone"></i>
	                                        Điện thoại: <a href="callto:{{$setting->phone}}">{{$setting->phone}}</a>
	                                    </li>
	                                    <li>
	                                        <i class="vk-icon fa fa-envelope"></i>
	                                        Email: <a href="mailto:tamnguyen089@gmail.com">{{$setting->email}}</a>
	                                    </li>
	                                    <li>
	                                        <i class="vk-icon fa fa-globe"></i>
	                                        Website: <a href="mailto:{{$setting->email}}">{{$setting->website}}</a>
	                                    </li>
	                                </ul>
	                            </div> <!--./vk-shop-checkout-contact-->

	                            <div class="vk-map pt-4">
	                               <div class="map_container">
	                               		 {!! $setting->iframemap !!}
	                               </div>
	                            </div>

	                        </div> <!--./vk-shop-checkout-box-->
	                    </div> <!--./col-lg-4-->

	                </div>

	            </div>
	        </form>
        </div>
        <!-- /.container -->
    </div><!--./vk-page-->
</section>
@endsection