@extends('index')
@section('content')
<section class="vk-content">
    <div class="vk-page product product-list">
        <div class="vk-product">
            <div class="container">
                <div class="vk-ads-wide left">
                    <div class="vk-ads-wide__frame">
                        <?php $banner = DB::table('banner_content')->where('position', 3)->get() ?>
                        <a href="{{$banner[0]->link}}" title="">
                            <img src="{{asset('upload/banner/'.$banner[0]->image)}}" class="img-fluid" alt="">
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
                <nav class="vk-breadcrumb">
                    <ul class="vk-list vk-list-inline vk-list-breadcrumb">
                        <li><a href="{{url('')}}">Trang chủ</a></li>
                        <li><a href="{{url('san-pham')}}">Sản phẩm</a></li>
                        <li class="active">{{$product_cate->name}}</li>
                    </ul>
                </nav>
                <!--./vk-breadcrumb-->
                <div class="vk-product-about">
                    <h1 class="vk-heading text-uppercase style-1">{{$product_cate->name}}</h1>
                    <div class="vk-product-about-detail">
                        <p>
                            {!!$product_cate->description!!}
                        </p>
                    </div> 
                </div> 
                <div class="vk-product__mid">
                    <div class="row">
                        <?php $productNew = DB::table('products')->orderBy('id','desc')->first();?>
                        <div class="col-lg-4">
                            <div class="vk-product__newest">
                                <div class="vk-img-frame">
                                    <a href="{{url('san-pham/'.$productNew->alias.'.html')}}" title="">
                                        <img src="{{asset('upload/product/'.$productNew->photo)}}" alt="">
                                    </a>
                                </div>
                                <div class="vk-product__newest-brief">
                                    <h3 class="vk-product__title"><a href="{{url('san-pham/'.$productNew->alias.'.html')}}" title="">{{$productNew->name}}</a></h3>
                                    <p class="vk-product__id"><span>{{$productNew->code}}</span></p>
                                    <p class="vk-product__price">{{number_format($productNew->price)}} VNĐ</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="vk-product__slider vk-slider-arrow-style-1" data-slider="product-banner">
                                <?php $sliders = DB::table('slider')->where('com','gioi-thieu')->get(); ?>
                                @foreach($sliders as $slider)
                                <div class="vk-img-frame">
                                    <img src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="vk-product-show">
                    @foreach($cateChilds as $cateChild)
                    <div class="vk-product-list-box">
                        <h3 class="vk-heading style-3 text-uppercase"><a href="{{url('san-pham/'.$product_cate->alias.'/'.$cateChild->alias)}}">{{$cateChild->name}}</a></h3>
                        <div class="vk-product-list row">
                            <div class="col-lg-2">
                                <div class="vk-img-frame">
                                    <a href="product-list-level-2.html" class="vk-img">
                                        <img src="{{url('upload/product/'.$cateChild->photo)}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <?php $products = DB::table('products')->where('cate_id',$cateChild->id)->get(); ?>
                            @foreach($products as $product)
                            <div class="col-sm-6 col-md-4 col-lg-2 item">
                                <div class="vk-shop-item">
                                    <div class="vk-img-frame">
                                        <a class="vk-img" href="{{url('san-pham/'.$product->alias.'.html')}}">
                                            <img src="{{asset('upload/product/'.$product->photo)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="{{url('san-pham/'.$product->alias.'.html')}}">{{$product->name}}</a></h3>
                                        <p class="vk-price">Giá: {{number_format($product->price)}} VNĐ</p>
                                    </div>
                                </div>
                            </div> 
                            @endforeach
                        </div> 
                    </div>
                    @endforeach    
                </div> 
            </div> <!-- /.container -->
        </div> <!--./vk-product-->
    </div><!--./vk-page-->
</section>
   
@endsection
