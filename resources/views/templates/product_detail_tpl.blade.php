@extends('index')
@section('content')
<section class="vk-content">
    <div class="vk-page product product-detail">
        <div class="vk-product-detail">
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
                        <li><a href="index.html">Trang chủ</a></li>

                        <li><a href="product-list-level-2.html">Iphone 7</a></li>

                        <li><a href="product-list.html">Sản phẩm</a></li>

                        <li class="active">{{$product_detail->name}}</li>
                    </ul>
                </nav>
                <!--./vk-breadcrumb-->
                <div class="vk-product-detail-top">

                    <div class="vk-shop-detail ">
                        <h1 class="vk-shop-detail__title">{{$product_detail->name}}</h1>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="vk-image-product-main vk-slider slider-for">
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-1.jpg')}}" alt="">
                                    </div>
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-1.jpg')}}" alt="">
                                    </div>
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-1.jpg')}}" alt="">
                                    </div>
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-1.jpg')}}" alt="">
                                    </div>
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-1.jpg')}}" alt="">
                                    </div>
                                </div>

                                <div class="vk-image-product-thumbnails vk-slider slider-nav vk-slider-arrow-style-2">
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-sub-1.jpg')}}" alt="">
                                    </div>
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-sub-1.jpg')}}" alt="">
                                    </div>
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-sub-1.jpg')}}" alt="">
                                    </div>
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-sub-1.jpg')}}" alt="">
                                    </div>
                                    <div class="vk-img-frame">
                                        <img src="{{asset('public/images/shop/shop-thumbnail-sub-1.jpg')}}" alt="">
                                    </div>
                                </div>

                            </div> <!--./col-4-->

                            <div class="col-lg-5">
                                <div class="vk-shop-detail-brief">
                                    <p class="vk-product__id">Mã sản phẩm: <span>{{$product_detail->code}}</span></p>
                                    <p class="mb-2"><strong>THÔNG TIN SẢN PHẨM</strong></p>

                                    <ul class="vk-list vk-list-icon">
                                        <?php $properties = explode('###', $product_detail->properties); ?>
                                        @for($i=0; $i< count($properties); $i++)
                                        <li>{{$properties[$i]}}</li>
                                        @endfor
                                        
                                    </ul>
                                    <p class="vk-shop-detail__price">{{number_format($product_detail->price)}} VNĐ</p>
                                    <div class="vk-shop__sale">
                                        <p class="_sale">Giảm thêm 800.000đ khi thanh toán trực tuyến bằng
                                            MasterCard</p>
                                        <p class="_highlight">* Không áp dụng khi mua trả góp 0% bằng thẻ tín
                                            dụng HSBC</p>
                                        <p class="_highlight">* 1 đổi 1 trong 1 tháng với sản phẩm lỗi</p>
                                    </div>
                                </div>
                            </div> <!--./col-8-->
                            <div class="col-lg-3 vk-right-content">
                                <div class="vk-shop-detail-part">
                                    <div class="vk-shop-detail-part__hotline">
                                        <label for="">Hỗ trợ mua sản phẩm</label>
                                        <a href="callto:+1-800-234-5677" class="vk-text">+1-800-234-5677</a>
                                    </div>
                                     <form action="{{ route('addProductToCart') }}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
                                        <div class="vk-quantity">
                                            <label for="">Số lượng sản phẩm</label>
                                            <div class="vk-calculator d-inline-flex fix-1" data-calculator="true">
                                                <input type="number" class="form-control order-2 quantity" min="1"
                                                       name="product_numb"
                                                       id="6" rel="6" value="1">
                                                <button class="vk-btn vk-btn-minus cal-item order-1" data-index="minus">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <button class="vk-btn vk-btn-plus cal-item order-3" data-index="plus"><i
                                                        class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="vk-button">
                                            <!-- <a href="#" class="vk-btn vk-btn-addtocart text-uppercase"> Add to cart</a> -->
                                            <button type="submit" class="vk-btn vk-btn-addtocart text-uppercase">Thêm vào giỏ hàng</button>
                                        </div>
                                    </form>
                                    <div class="vk-policy">
                                        <label class="mb-0 mt-3" for="">Chính sách khuyến mại</label>
                                        <ul class="vk-list vk-list-icon">
                                            <li> Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Jack chuyển tai nghe 3.5mm,
                                                Cáp, Cây lấy sim</li>
                                            <li> Bảo hành chính hãng: thân máy 12 tháng, sạc 12 tháng, tai nghe 12 tháng</li>
                                            <li> Giao hàng tận nơi miễn phí trong 30 phút.</li>
                                        </ul>
                                    </div>

                                </div>  <!--./vk-shop-detail-part-->
                            </div> <!--./vk-right-content-->

                        </div> <!--./row-->

                    </div> <!--./vk-shop-detail-->


                </div> <!-- ./vk-product-detail-top-->


                <div class="row">
                    <div class="col-lg-10 vk-left-content order-1 order-lg-1">
                        <div class="vk-product-detail-bottom">
                            <!-- <h3 class="vk-heading">Đặc điểm nổi bật của iPhone 7 Plus 128GB</h3> -->
                            <div class="vk-shop-detail-content">
                                {!!$product_detail->content!!}
                            </div> 

                            <div class="vk-comment">
                                 <div class="fb-comments" data-href="{{url('san-pham/'.$product_detail->alias.'.html')}}" data-numposts="2"></div>
                            </div> <!--./vk-comment-->

                        </div> <!--./vk-product-detail-bottom-->

                        <div class="vk-product-related ">
                            <div class="vk-product-list-box">
                                <h3 class="vk-heading">Các sản phẩm liên quan</h3>
                                <div class="vk-product-list row vk-slider" data-slider="shop-related">
                                    @foreach($productSameCate as $product)
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
                                        </div> <!--./vk-shop-item-->
                                    </div> <!--./item-->
                                    @endforeach

                                </div> <!--./vk-product-list-->
                            </div> <!--./vk-product-list-box-->
                        </div> <!--./vk-product-related-->
                    </div> <!--./vk-left-content-->

                    <div class="col-lg-2 vk-right-content order-3 order-lg-2">
                        <div class="vk-inner-content">
                            <div class="vk-product__thumbail-cate pb-3 d-none d-lg-block">
                                <a href="product-list-level-2.html" title=""><img src="{{asset('public/images/shop/thumbnail-1.jpg')}}" alt="" class="img-fluid"></a>
                            </div>

                            <div class="vk-product__thumbail-cate pb-3 d-none d-lg-block">
                                <a href="product-list-level-2.html" title=""><img src="{{asset('public/images/shop/thumbnail-2.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="vk-product-sale-off">
                                <h3 class="vk-heading style-2 inverse text-uppercase">Tin công nghệ</h3>
                                <div class="vk-product-list">
                                    @foreach($tintucs as $news)
                                    <div class="vk-news-item-4">
                                        <div class="vk-img-frame">
                                            <a href="{{url('tin-tuc/'.$news->alias.'.html')}}" class="vk-img">
                                                <img src="{{asset('upload/news/'.$news->photo)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="vk-news-item-brief">
                                            <h3 class="vk-title"><a href="{{url('tin-tuc/'.$news->alias.'.html')}}">{{$news->name}}</a></h3>
                                            <div class="vk-published">{{date('d/m/Y', strtotime($news->created_at))}}</div>
                                        </div>
                                    </div> 
                                    @endforeach
                                </div> <!--./vk-product-list-->
                            </div> <!--./vk-product-sale-off-->
                        </div> <!--./vk-inner-content-->

                    </div> <!--./vk-right-content-->


                </div><!--./row-->

            </div> <!-- /.container -->

        </div> <!--./vk-product-detail-->
    </div><!--./vk-home-->
</section>
@endsection
