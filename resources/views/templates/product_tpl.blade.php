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

                <nav class="vk-breadcrumb">
                    <ul class="vk-list vk-list-inline vk-list-breadcrumb">
                        <li><a href="{{url('')}}">Trang chủ</a></li>

                        <li class="active">Sản phẩm</li>
                    </ul>
                </nav>
                <!--./vk-breadcrumb-->                
                 <div class="vk-product-show">

                        <div class="row">
                            <div class="col-lg-2 vk-right-content order-2 order-lg-1">
                                <div class="vk-inner-content">
                                    <div class="vk-product__thumbail-cate pb-3 d-none d-lg-block">
                                        <a href="product-list-level-2.html" title=""><img src="{{asset('public/images/shop/thumbnail-1.jpg')}}"
                                                                                         alt="" class="img-fluid"></a>
                                    </div>

                                    <div class="vk-product__thumbail-cate pb-3 d-none d-lg-block">
                                        <a href="product-list-level-2.html" title=""><img src="{{asset('public/images/shop/thumbnail-2.jpg')}}"
                                                                                         alt="" class="img-fluid"></a>
                                    </div>

                                    <div class="vk-product-sale-off">
                                        <h3 class="vk-heading style-2 inverse text-uppercase">Tin công nghệ</h3>
                                        <div class="vk-product-list">
                                            @foreach($tintucs as $tintuc)
                                            <div class="vk-news-item-4">
                                                <div class="vk-img-frame">
                                                    <a href="{{url('tin-tuc/'.$tintuc->alias.'.html')}}" class="vk-img">
                                                        <img src="{{asset('upload/news/'.$tintuc->photo)}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="vk-news-item-brief">
                                                    <h3 class="vk-title"><a href="{{url('tin-tuc/'.$tintuc->alias.'.html')}}">{{$tintuc->name}}</a></h3>
                                                    <div class="vk-published">{{date('d/m/Y', strtotime($tintuc->created_at))}}</div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div> <!--./vk-product-list-->
                                    </div> <!--./vk-product-sale-off-->
                                </div> <!--./vk-inner-content-->

                            </div> <!--./vk-right-content-->

                            <div class="col-lg-10 order-1 order-lg-2">
                                <div class="vk-product-list-box">
                                    <div class="vk-product-list vk-product-list--mod-1  row no-gutters">
                                      @foreach($product as $item)
                                        <div class="col-sm-2 col-md-4 vk-col-lg item">
                                            <div class="vk-shop-item">
                                                <div class="vk-img-frame">
                                                    <a class="vk-img" href="{{url('san-pham/'.$item->alias.'.html')}}">
                                                        <img src="{{asset('upload/product/'.$item->photo)}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="vk-shop-item-brief">
                                                    <h3 class="vk-title"><a href="{{url('san-pham/'.$item->alias.'.html')}}">{{$item->name}}</a></h3>
                                                    <p class="vk-price">Giá: {{number_format($item->price)}} VNĐ</p>
                                                </div>
                                            </div> <!--./vk-shop-item-->
                                        </div> <!--./item-->
                                      @endforeach
                                    </div> <!--./vk-product-list-->
                                </div> <!--./vk-product-list-box-->


                                <!-- <nav class="vk-pagination">
                                    <ul class="vk-list vk-list-inline vk-list-pagination">

                                        <li class="active"><a href="#">1</a></li>

                                        <li class=""><a href="#">2</a></li>

                                        <li class=""><a href="#">3</a></li>

                                        <li class=""><a href="#">4</a></li>

                                    </ul>
                                </nav> -->
                            </div>
                        </div>

                    </div> 
            </div> <!-- /.container -->
        </div> <!--./vk-product-->
    </div><!--./vk-page-->
</section>
@endsection
