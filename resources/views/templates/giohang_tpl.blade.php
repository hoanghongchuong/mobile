@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<section class="vk-content">

    <div class="vk-page shop shopcart">
        <div class="container">

            <div class="vk-ads-wide left">
                <div class="vk-ads-wide__frame">
                    <a href="#" title="">
                        <img src="{{asset('images/ads/ads-1.jpg')}}" class="img-fluid" alt="">
                    </a>

                </div>
            </div>

            <div class="vk-ads-wide right">
                <div class="vk-ads-wide__frame">
                    <a href="#" title="">
                        <img src="{{asset('images/ads/ads-1.jpg')}}" class="img-fluid" alt="">
                    </a>

                </div>
            </div>

            <nav class="vk-breadcrumb">
                <ul class="vk-list vk-list-inline vk-list-breadcrumb">
                    <li><a href="index.html">Trang chủ</a></li>

                    <li class="active">Giỏ hàng</li>
                </ul>
            </nav>
            <!--./vk-breadcrumb-->
            <h1 class="vk-heading style-1 text-uppercase">Giỏ hàng</h1>
            <form action="{{route('updateCart')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="vk-shopcart">
                    <table class="vk-table vk-shopcart-table">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Thao tác</th>
                        </tr>
                        
                        @foreach($product_cart as $key=>$product)
                        <tr>
                            <td>
                                <div class="vk-shopcart-item">
                                    <div class="vk-img-frame">
                                        <a href="#" class="vk-img">
                                            <img src="{{asset('upload/product/'.$product->options->photo)}}" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shopcart-item-brief">
                                        <h3 class="vk-title">{{$product->name}}</h3>
                                        <p class="vk-shopcart-price">Giá: {{number_format($product->price)}}</p>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <div class="vk-calculator d-inline-flex fix" data-calculator="true" >
                                    <input type="number" class="form-control order-2 quantity" min="0" value="{{$product->qty}}" id="{{ $product->rowId }}"  name="numb[{{$key}}]">

                                    <button class="vk-btn vk-btn-minus cal-item order-1" data-index="minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button class="vk-btn vk-btn-plus cal-item order-3" data-index="plus"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <span class="vk-shopcart-price total">{{number_format($product->price * $product->qty)}}</span>
                            </td>
                            <td>
                                <a id="{{$product->rowId}}" href="{{url('xoa-gio-hang/'.$product->rowId)}}" class="vk-btn vk-btn-del text-uppercase">Xóa sản phẩm</a>
                            </td>
                        </tr>
                        @endforeach
                       
                    </table>
                    <div class="vk-shopcart-pay all">
                        <p>Tổng thanh toán: <span class="vk-shopcart-price">{{number_format($total)}} VNĐ</span></p>
                    </div>

                    <div class="vk-button f-right">
                        <button type="submit" class="vk-btn">Cập nhật</button>
                        <a href="{{url('thanh-toan')}}" class=" vk-btn vk-btn-checkout text-uppercase">Thanh toán</a>
                        <a href="{{url('san-pham')}}" class=" vk-btn vk-btn-continue text-uppercase inverse-1">Tiếp tục mua sản phẩm</a>
                    </div>
                </div>
             </form>
             <!--./vk-shopcart-->

        </div>
        <!-- /.container -->

    </div><!--./vk-page-->
</section>
<script>
    window.token = '{{ csrf_token() }}';
</script>

@endsection
