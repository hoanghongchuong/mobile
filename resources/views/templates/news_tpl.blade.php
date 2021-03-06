@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<section class="vk-content">
    <div class="vk-page news news-list">
        <div class="vk-news">
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

                        <li class="active">Tin công nghệ</li>
                    </ul>
                </nav>
                <!--./vk-breadcrumb-->
                <h1 class="vk-heading style-1 text-uppercase">Tin công nghệ</h1>

                <div class="vk-news-newest">

                    <div class="vk-news-item-list row">
                        <div class="col-lg-12 item">
                            <div class="vk-news-item highlight">
                                <div class="vk-img-frame">
                                    <a href="{{url('tin-tuc/'.$tintuc[0]->alias.'.html')}}" class="vk-img">
                                        <img src="{{asset('upload/news/'.$tintuc[0]->photo)}}" alt="">
                                    </a>
                                </div>

                                <div class="vk-news-item-brief">
                                    <h3 class="vk-title"><a href="{{url('tin-tuc/'.$tintuc[0]->alias.'.html')}}">{{$tintuc[0]->name}}</a></h3>
                                    <div class="vk-published">Upload: {{date('d/m/Y', strtotime($tintuc[0]->created_at))}}</div>
                                    <p class="vk-text">{{$tintuc[0]->mota}}</p>
                                </div>
                            </div> <!--./vk-news-item-->
                        </div> <!--./item-->
                        @for($i=1; $i < count($tintuc); $i++)
                        <div class="col-lg-4 item">
                            <div class="vk-news-item ">
                                <div class="vk-img-frame">
                                    <a href="{{url('tin-tuc/'.$tintuc[$i]->alias.'.html')}}" class="vk-img">
                                        <img src="{{asset('upload/news/'.$tintuc[$i]->photo)}}" alt="">
                                    </a>
                                </div>

                                <div class="vk-news-item-brief">
                                    <h3 class="vk-title"><a href="{{url('tin-tuc/'.$tintuc[$i]->alias.'.html')}}">{{$tintuc[$i]->name}}</a></h3>
                                    <div class="vk-published">Upload: {{date('d/m/Y', strtotime($tintuc[$i]->created_at))}}</div>
                                    <p class="vk-text">{{$tintuc[$i]->mota}}</p>
                                </div>
                            </div> <!--./vk-news-item-->
                        </div> <!--./item-->
                        @if($i==3) @break; @endif
                        @endfor
                        
                    </div> <!--./vk-news-item-list-->

                </div> <!--./vk-news-newest-->

                <div class="vk-news-bottom">
                    <div class="row">

                        <div class="col-lg-8 vk-left-content">
                            <div class="vk-news-daily">
                                <div class="vk-news-list">
                                   @for($i = 4; $i < count($tintuc); $i++)
                                    <div class="vk-news-item-2">
                                        <div class="vk-img-frame">
                                            <a href="{{url('tin-tuc/'.$tintuc[$i]->alias.'.html')}}" class="vk-img">
                                                <img src="{{asset('upload/news/'.$tintuc[$i]->photo)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="vk-news-item-brief">
                                            <h3 class="vk-title"><a href="{{url('tin-tuc/'.$tintuc[$i]->alias.'.html')}}">{{$tintuc[$i]->name}}</a></h3>
                                            <div class="vk-published">Upload: {{date('d/m/Y', strtotime($tintuc[$i]->created_at))}}</div>
                                            <p class="vk-text">{{$tintuc[$i]->mota}}</p>
                                        </div>
                                    </div> <!--./vk-news-item-2-->
                                    @endfor
                                </div>
                                <div class="paginations">
                                    {!! $tintuc->links() !!}
                                </div>
                                
                            </div> <!--./vk-news-daily-->

                        </div> <!--./vk-left-content-->

                        <div class="col-lg-4 vk-right-content">
                            <div class="vk-inner-content">
                                <div class="vk-news-hot">
                                    <h3 class="vk-heading style-2 inverse text-uppercase">Tin tức nổi bật</h3>
                                    <div class="vk-news-list">
                                    @foreach($tintuc_noibat as $hotNews)
                                        <div class="vk-news-item-3">
                                            <div class="vk-img-frame">
                                                <a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}" class="vk-img">
                                                    <img src="{{asset('upload/news/'.$hotNews->photo)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="vk-news-item-brief">
                                                <h3 class="vk-title"><a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}">{{$hotNews->name}}</a></h3>
                                                <div class="vk-published">{{ date('d/m/Y', strtotime($hotNews->created_at)) }}</div>
                                            </div>
                                        </div> <!--./vk-news-item-3-->
                                    @endforeach
                                        
                                    </div>
                                </div> <!--./vk-news-hot-->
                            </div> <!-- /.vk-inner-content -->
                        </div> <!--./vk-right-content-->

                    </div>  <!--./row-->
                </div> <!--./vk-news-bottom-->

            </div> <!--./container-->

        </div> <!--./vk-news-->

    </div><!--./vk-page-->
</section>
@endsection
