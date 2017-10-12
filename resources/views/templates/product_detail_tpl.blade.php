@extends('index')
@section('content')

   <section class="vk-content">

        <div class="vk-breadcrumb">
            <nav class="container">
                <ul class="vk-list vk-list--inline vk-list__breadcrumb">
                    <li class="vk-list__item"><a href="index.html">Trang chủ</a></li>
                    <li class="vk-list__item"> <a href="{{url('san-pham/'.$cateProduct->alias)}}">{{$cateProduct->name}}</a></li>
                    <li class="vk-list__item">{{$product_detail->name}}</li>
                </ul>
            </nav>
        </div>
        <!--./vk-breadcrumb-->

        <div class="vk-banner">
            <div class="container">
                <div class="vk-banner__content">
                    <div class="vk-img vk-img--cover">
                        <img src= "{{asset('public/images/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div> <!--./vk-banner__content-->
            </div> <!--./container-->
        </div><!--./vk-banner-->

        <div class="vk-page vk-page--shop">
            <div class="container">
                <div class="vk-shop-detail">
                    <div class="vk-shop-detail__top row">
                        <div class="vk-shop-detail__left col-lg-6">
                            <div class="vk-shop-detail__thumbnail-wrapper">
                                <div class="vk-shop-detail__thumbnail">
                                    <div class="vk-slider__for" data-slider="slider-for">
                                        @foreach($album_hinh as $album)
                                            <div class="vk-img vk-img--mw100">
                                                <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                            </div>
                                        @endforeach 
                                    </div>
                                </div> <!--./slider-for-->
                                <div class="vk-shop-detail__thumbnail-list vk-slider" >
                                    <div class="vk-slider__nav" data-slider="slider-nav">
                                         @foreach($album_hinh as $album)
                                            <div class="vk-img vk-img--mw100">
                                                <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                            </div>
                                        @endforeach 
                                    </div>
                                </div> <!--./slider-for-->
                            </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                        </div> <!--./vk-shop-detail__left-->

                        <div class="vk-shop-detail__right col-lg-6">

                            <div class="vk-shop-detail__brief">
                                <h1 class="vk-shop-detail__title">{{$product_detail->name}} </h1>

                                <div class="vk-shop-detail__box">

                                    <p class="vk-shop-detail__price vk-text--yellow-1">{{number_format($product_detail->price)}} ₫ </p>

                                    <div class="vk-shop-detail__brief-short">
                                        <p>Thương hiệu: Chanel</p>
                                        <p>Mã sản phẩm: {{$product_detail->code}}</p>
                                        <p>Tình trạng: Còn hàng</p>
                                    </div>

                                    <div class="vk-shop-detail__des">
                                        <p><strong>Mô tả:</strong></p>
                                        <p>{!!$product_detail->mota!!}</p>
                                    </div>
                                    <form action="{{ route('addProductToCart') }}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
                                        <div class="vk-button">
                                            <div class="vk-calculator" data-calculator="true">
                                                <input type="number" name="product_numb" id="soluong" value="1" min="1" class="form-control order-2">
                                                <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                        data-index="minus">
                                                    <i class="_icon fa fa-minus"></i>
                                                </button>
                                                <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                    <i class="_icon fa fa-plus"></i>
                                                </button>
                                            </div> <!--./calculator-->

                                            <!-- <a href="#"  title="" class="vk-btn vk-btn--now text-uppercase">Mua ngay</a> -->
                                            <button type="submit">Mua ngay</button>
                                        </div>
                                    </form>
                                </div> <!--./vk-shop-detail__box-->

                            </div> <!--./vk-shop-detail__brief-->


                        </div><!-- /.vk-shop-detail__right -->
                    </div> <!--./vk-shop-detail__top-->

                    <div class="vk-shop-detail__bottom">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-expanded="true">Thông tin sản phẩm </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile">Đánh giá</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                {!!$product_detail->content!!}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="fb-comments" data-href="{{url('san-pham/'.$product_detail->alias.'.html')}}" data-numposts="3"></div>
                            </div>
                        </div>

                    </div> <!--./vk-shop-detail__bottom-->


                </div> <!--./vk-shop-detail-->
                <!-- /.row -->
            </div>
            <!-- /.container -->

            <div class="vk-shop-related">

                <div class="container">
                    <h3 class="vk-shop-related__heading vk-heading vk-heading--line text-uppercase"><span>Sản phẩm cùng loại</span></h3>
                    <div class="row vk-slider vk-slider--arrow-1 vk-shop-item__list" data-slider="related">
                    @foreach($productSameCate as $key=>$item)

                        <div class="col-sm-6 col-md-4 col-lg-3 _item">
                            <div class="vk-shop-item__wrapper">
                                <div class="vk-shop-item">
                                    <div class="vk-img vk-img--mw100">
                                        <a href="#item{{$key}}" title="{{$item->name}}" class="vk-img__link" data-toggle="modal" data-target="#item{{$key}}">
                                            <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}" class="vk-img__img">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item__brief">
                                        <h3 class="vk-shop-item__title"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></h3>
                                        <p class="vk-shop-item__price vk-text--red-1">{{number_format($item->price)}} ₫</p>
                                    </div>

                                </div> <!--./vk-shop-item-->
                            </div>
                            <!-- /.vk-shop-item__wrapper -->

                        </div>
                    @endforeach

                    </div>

                    <div class="vk-shop-modal__list">
                    @foreach($productSameCate as $k=>$productDetail)
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="item{{$k}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close vk-btn vk-btn--close" data-dismiss="modal" aria-label="Close">X</button>

                                    <div class="vk-shop-detail vk-shop-detail--quickview">
                                        <div class="container">
                                            <div class="row">
                                                <div class="vk-shop-detail__left col-lg-6">
                                                    <div class="vk-shop-detail__thumbnail-wrapper">
                                                        <div class="vk-shop-detail__thumbnail">

                                                            <div class="vk-slider__for" data-slider="slider-for">
                                                                <?php $albumImg = DB::table('images')->select()->where('product_id',$productDetail->id)->orderby('id','asc')->get(); ?>
                                                               @foreach($albumImg as $album)         
                                                                <div class="vk-img vk-img--mw100">
                                                                    <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                                                </div>
                                                                @endforeach
                                                            </div>

                                                        </div> <!--./slider-for-->

                                                        <div class="vk-shop-detail__thumbnail-list vk-slider" >

                                                            <div class="vk-slider__nav" data-slider="slider-nav">
                                                                @foreach($albumImg as $album)         
                                                                <div class="vk-img vk-img--mw100">
                                                                    <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="">
                                                                </div>
                                                                @endforeach
                                                                
                                                            </div>


                                                        </div> <!--./slider-for-->
                                                    </div> <!--./vk-shop-detail__thumbnail-wrapper-->

                                                </div> <!--./vk-shop-detail__left-->

                                                <div class="vk-shop-detail__right col-lg-6">

                                                    <div class="vk-shop-detail__brief">
                                                        <h1 class="vk-shop-detail__title">{{$productDetail->name}} </h1>

                                                        <div class="vk-shop-detail__box">

                                                            <p class="vk-shop-detail__price vk-text--red-1">{{number_format($productDetail->price)}} ₫ </p>

                                                            <div class="vk-shop-detail__brief-short">
                                                                <?php $thuonghieu = DB::table('thuonghieu')->select('name')->where('id',$productDetail->thuonghieu_id)->first(); ?>
                                                                        <p>Thương hiệu: {{$thuonghieu->name}}</p>
                                                                <p>Mã sản phẩm: {{$productDetail->code}}</p>
                                                                <p>Tình trạng: Còn hàng</p>
                                                            </div>

                                                            <div class="vk-shop-detail__des">
                                                                <p><strong>Mô tả:</strong></p>
                                                                {!! $productDetail->mota !!}
                                                            </div>

                                                            <div class="vk-button">
                                                               <form action="{{ route('addProductToCart') }}" method="post">
                                                                    {!! csrf_field() !!}
                                                                    <input type="hidden" name="product_id" value="{{ $productDetail->id }}">
                                                                    <div class="vk-calculator" data-calculator="true">
                                                                        <input type="number" name="product_numb" id="soluong" value="1" min="1" class="form-control order-2">
                                                                        <button class="vk-calculator__button vk-btn vk-btn--minus order-1"
                                                                                data-index="minus">
                                                                            <i class="_icon fa fa-minus"></i>
                                                                        </button>
                                                                        <button class="vk-calculator__button vk-btn vk-btn--plus order-3" data-index="plus">
                                                                            <i class="_icon fa fa-plus"></i>
                                                                        </button>
                                                                    </div> <!--./calculator-->

                                                                   <!--  <a href="shopcart.html" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</a> -->
                                                                    <button type="submit" style="margin-top: 4px;" class="vk-btn vk-btn--now text-uppercase _inverse">Mua ngay</button>
                                                                </form>
                                                                <a href="{{url('san-pham/'.$productDetail->alias.'.html')}}" title="" class="vk-btn vk-btn--now text-uppercase _inverse">Chi tiết</a>
                                                            </div>

                                                        </div> <!--./vk-shop-detail__box-->

                                                    </div> <!--./vk-shop-detail__brief-->


                                                </div><!-- /.vk-shop-detail__right -->

                                            </div>
                                        </div>
                                        <!-- /.container -->
                                    </div> <!--./vk-shop-detail-->

                                </div>
                            </div>
                        </div>
                    @endforeach    
                    </div> <!--./vk-shop-modal__list-->
                </div>
                <!-- /.container -->

            </div>
        </div> <!--./vk-page-->

    </section>
@endsection
