@extends('layouts.frontend.index')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Trang chủ</a>
                <span class="navigation-pipe">&nbsp;</span>
                <a class="home" href="#" title="Blog">Tin tức</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span> {{ $post_detail[0]->tag }}</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                @include('frontend.post.post_slidebar_left')
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2" style="color: #ec0992;">{{ $post_detail[0]->name }}</span>
                    </h1>
                    <article class="entry-detail">
                        <div class="entry-meta-data">
                        {{--<span class="author">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--by: <a href="#">Admin</a></span>--}}
                            {{--<span class="cat">--}}
                            {{--<i class="fa fa-folder-o"></i>--}}
                            {{--<a href="#">News, </a>--}}
                            {{--<a href="#">Promotions</a>--}}
                        {{--</span>--}}
                            {{--<span class="comment-count">--}}
                            {{--<i class="fa fa-comment-o"></i> 3--}}
                        {{--</span>--}}
                            {{--<span class="date"><i class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>--}}
                            {{--<span class="post-star">--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star"></i>--}}
                            {{--<i class="fa fa-star-half-o"></i>--}}
                            {{--<span>(7 votes)</span>--}}
                        {{--</span>--}}
                        </div>
                        <div class="entry-photo">
                            <img src="{{ url('/') }}/public/front-end/assets/data/blog-full.jpg" alt="Blog">
                        </div>
                        <div class="content-text clearfix">
                            <p style="font-weight: 600;font-style: italic;">{{ $post_detail[0]->introduction }}</p>

                            <p>{{ $post_detail[0]->content }}</p>
                        </div>
                        @if(!empty($post_detail[0]->tag))
                        <div class="entry-tags">
                            <span>Xem thêm:</span>
                            <a href="#">{{ $post_detail[0]->tag }}</a>
                        </div>
                         @endif
                    </article>
                    <!-- Related Posts -->
                    <div class="single-box">
                        <h2>Có thể bạn quan tâm</h2>
                        <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                            @foreach($post_list as $item)
                                @if($item->id != $post_detail[0]->id)
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="{{ url('/') }}/public/images/post/avatar/{{ $item->avatar }}" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#" style="color: #ec09ae;">{{ $item->name }}</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            {{--<i class="fa fa-comment-o"></i> 3--}}
                                        </span>
                                            <span class="date">
                                            {{--<i class="fa fa-calendar"></i> 2014-08-05--}}
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#" style="color: #4271a9;">Xem thêm <i class="fa fa-long-arrow-right" aria-hidden="true" ></i></a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()