@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
?>
<section class="vk-content">
    <div class="vk-home">
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

            <div class="vk-home__slider vk-slider-dot-style-1" data-slider="home-slider">
                <?php $sliders = DB::table('slider')->where('com','gioi-thieu')->get(); ?>
                @foreach($sliders as $slider)
                <div class="vk-img-frame">
                    <img src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="">
                </div>
                @endforeach

            </div> <!--./vk-home__slider-->

            <div class="vk-home__cate">
                <div class="row">
                    <?php $cateHomes = DB::table('product_categories')->where('status',1)->orderBy('id','asc')->take(3)->get() ?>
                    @foreach($cateHomes as $cateHome)
                    <div class="col-lg-4">
                        <div class="vk-home-cate__item">
                            <div class="vk-img-frame">
                                <a href="{{url('san-pham/'.$cateHome->alias)}}" title="">
                                    <img src="{{asset('upload/product/'.$cateHome->photo)}}" alt="">
                                </a>
                            </div>
                            <div class="vk-home-cate__brief">
                                <div class="vk-home-cate__wrapper">
                                    <h3 class="vk-home-cate__title"><a href="{{url('san-pham/'.$cateHome->alias)}}" title="">{{$cateHome->name}}</a> </h3>
                                    <a class="vk-home-cate__more" href="{{url('san-pham/'.$cateHome->alias)}}" title="">xem thêm >> </a>
                                </div>

                            </div>
                        </div> <!--./vk-home-cate__item-->
                    </div> <!--./col-->
                    @endforeach
                </div> <!--./row-->
            </div> <!--./vk-home__cate-->

            @foreach($cateHots as $cateHot)
            <div class="vk-home-product-show">
                <div class="vk-product-list vk-product-list--home-box">

                    <div class="vk-heading-box">
                        <div class="vk-heading style-3 ">
                            <h3 class="mb-0 text-uppercase"><a href="{{url('san-pham/'.$cateHot->alias)}}">{{$cateHot->name}}</a></h3>
                            <?php $cateChilds = DB::table('product_categories')->where('parent_id', $cateHot->id)->get(); ?>
                            <ul class="vk-list vk-heading__menu">
                                @foreach($cateChilds as $cateChild)
                                <li><a href="{{url('danh-muc/'.$cateChild->alias)}}" title="">{{$cateChild->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- ./vk-heading-box-->
                    <div class="row">
                        <?php 
                            $ids = array();
                            $ids[] =  $cateHot->id;
                            $cateChilds2 = DB::table('product_categories')->where('parent_id', $cateHot->id)->where('status',1)->get();
                            if(!empty($cateChilds2)){
                                foreach ($cateChilds2 as $cateChild) {
                                   $ids[] = $cateChild->id;
                                }
                            }
                            $products = DB::table('products')->where('status',1)->whereIn('cate_id', $ids)->orderBy('id','desc')->take(4)->get();
                            @$productHoth = DB::table('products')->where('status',1)->whereIn('cate_id', $ids)->where('noibat',1)->first();
                        ?>
                        <div class="col-lg-3">
                            <div class="vk-product__newest">
                                <div class="vk-img">
                                    <a href="{{url('san-pham/'.@$productHoth->alias.'.html')}}" title="">
                                        <img src="{{asset('upload/product/'.@$productHoth->photo)}}" alt="">
                                    </a>
                                </div>
                                <div class="vk-product__newest-brief">
                                    <h3 class="vk-product__title"><a href="{{url('san-pham/'.@$productHoth->alias.'.html')}}" title="">{{ @$productHoth->name }}</a></h3>
                                    <p class="vk-product__id"><span>{{ @$productHoth->code }}</span></p>
                                    <p class="vk-product__price">{{number_format(@$productHoth->price)}} VNĐ</p>
                                </div>
                            </div>
                            <div class="vk-product__thumbnail ">
                                <!-- <div class="vk-img-frame">
                                    <a href="product-list-level-2.html" title="">
                                        <img src="{{asset('public/images/home/home-item-1.jpg')}} alt="">
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="vk-product-list vk-product-list--home row">

                            @foreach($products as $product)
                                <div class="col-sm-6 col-md-3 item">
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
                               
                            </div>
                            <!-- /.vk-product-list vk-product-list--home -->
                        </div> <!--./col-->



                    </div> <!--./row-->
                </div> <!--./vk-product-list vk-product-list--home-box-->
            </div> <!--./vk-home-product-show-->
            @endforeach               
                

            <div class="vk-home-bottom">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="vk-news-hot">
                            <h3 class="vk-heading text-uppercase style-2 inverse">Tin tức </h3>
                            <div class="vk-news-list">
								@foreach($tintuc_moinhat as $news)
                                <div class="vk-news-item-3">
                                    <div class="vk-img-frame">
                                        <a href="news-detail.html" class="vk-img">
                                            <img src="{{asset('upload/news/'.$news->photo)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="vk-news-item-brief">
                                        <h3 class="vk-title"><a href="news-detail.html">{{$news->name}}</a></h3>
                                        <div class="vk-published">{{date('d/m/Y', strtotime($news->created_at))}}</div>
                                    </div>
                                </div> <!--./vk-news-item-3-->
								@endforeach
                                
                            </div>
                        </div> <!--./vk-news-hot-->
                    </div> <!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="vk-product-sale-off">
                            <h3 class="vk-heading style3 text-uppercase style-2 inverse">Sale off trong tháng</h3>
                            <div class="vk-product-list vk-product-list--home">
                                <?php $productsSale = DB::table('products')->where('status',1)->where('spbc',1)->take(3)->get(); ?>
                                @foreach($productsSale as $productSale)
                                <div class="vk-shop-item-2">
                                    <div class="vk-img-frame">
                                        <a href="{{url('san-pham/'.$productSale->alias.'.html')}}" class="vk-img">
                                            <img src="{{asset('upload/product/'.$productSale->photo)}}" alt="">
                                        </a>
                                    </div>

                                    <div class="vk-shop-item-brief">
                                        <h3 class="vk-title"><a href="{{url('san-pham/'.$productSale->alias.'.html')}}">{{$productSale->name}}</a></h3>
                                        <p>Bảo hành: {{$productSale->baohanh}}</p>
                                        <p>Mã sản phẩm: {{$productSale->code}}</p>
                                        <!-- <p class="vk-label-sale text-uppercase">sale off 20%</p> -->
                                    </div>
                                </div> <!--./vk-shop-item-2-->
                                @endforeach

                            </div> <!--./vk-product-list vk-product-list--home-->
                        </div> <!--./vk-product-sale-off-->
                    </div> <!-- /.col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="vk-home-video">
                            <h3 class="vk-heading style-2 inverse text-uppercase">Video</h3>
                            <div class="vk-img-frame">
                                <div class="video">{!! $video->link !!}</div>
                            </div>
                        </div> <!--./vk-home-video-->
                    </div> <!-- /.col-lg-4 -->
                </div> <!-- /.row -->
            </div> <!--./vk-home-bottom-->

        </div><!-- /.container -->
    </div><!--./vk-home-->

</section>
@endsection
