@extends('index')
@section('content')

<section class="vk-content">
    <div class="vk-page news news-detail">
        <div class="vk-news-detail">
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
                        <li><a href="{{url('')}}">Trang chủ</a></li>

                        <li><a href="{{url('tin-tuc')}}">Tin công nghệ</a></li>

                        <li class="active">{{$news_detail->name}}</li>
                    </ul>
                </nav>
                <!--./vk-breadcrumb-->
                <div class="row">
                    <div class="col-lg-8 vk-left-content">
                        <div class="vk-news-detail-content">
                            <h1 class="vk-title text-uppercase">{{$news_detail->name}}</h1>
                            {!!$news_detail->content!!}
                             <div class="vk-comment">
                                <div class="fb-comments" data-href="{{url('tin-tuc/'.$news_detail->alias.'.html')}}" data-numposts="2"></div>
                            </div>
                            <div class="vk-news-related">
                                <h3 class="vk-heading style-1 text-uppercase">Tin tức liên quan</h3>
                                <ul class="vk-list vk-list-icon vk-list-link-related">
                                    @foreach($tinkhac as $item)
                                    <li><a href="{{url('tin-tuc/'.$item->alias.'.html')}}"> {{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> <!--./vk-news-detail-content-->
                    </div> <!--./vk-left-content-->

                    <div class="col-lg-4 vk-right-content">
                        <div class="vk-inner-content">
                            <div class="vk-news-hot">
                                <h3 class="vk-heading style-2 inverse text-uppercase">Tin tức nổi bật</h3>
                                <div class="vk-news-list">
                                    @foreach($hot_news as $hotNews)
                                    <div class="vk-news-item-3">
                                        <div class="vk-img-frame">
                                            <a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}" class="vk-img">
                                                <img src="{{asset('upload/news/'.$hotNews->photo)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="vk-news-item-brief">
                                            <h3 class="vk-title"><a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}">{{$hotNews->name}}</a></h3>
                                            <div class="vk-published">{{date('d/m/Y', strtotime($hotNews->created_at))}}</div>
                                        </div>
                                    </div> <!--./vk-news-item-3-->
                                    @endforeach
                                </div>
                            </div> <!--./vk-news-hot-->

                            <div class="vk-ads pt-2">
                                <div class="vk-img-frame">
                                    <img src="{{asset('public/images/ads/2.jpg')}}" alt="">
                                </div>
                            </div> <!--./vk-ads-->

                        </div><!-- /.vk-inner-content -->

                    </div> <!--./vk-right-content-->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div> <!--./vk-news-detail-->
    </div><!--./vk-page-->
</section>
@endsection
