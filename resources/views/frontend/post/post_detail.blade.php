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
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- Blog category -->
                    <div class="block left-module">
                        <p class="title_block">Danh mục</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        <li><span></span><a href="#">Hoa lan</a></li>
                                        <li><span></span><a href="#">Hoa hồng</a></li>
                                        <li><span></span><a href="#">Hoa giấy</a></li>
                                        <li><span></span><a href="#">Hạt giống</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./blog category  -->
                    <!-- Popular Posts -->
                    <div class="block left-module">
                        <p class="title_block">Popular Posts</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="blog-list-sidebar clearfix">
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="{{ url('/') }}/public/front-end/assets/data/blog-thumb1.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="{{ url('/') }}/public/front-end/assets/data/blog-thumb2.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="{{ url('/') }}/public/front-end/assets/data/blog-thumb3.jpg" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                    <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Popular Posts -->
                    <!-- Banner -->
                    <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="{{ url('/') }}/public/front-end/assets/data/slide-left.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- ./Banner -->
                    <!-- Recent Comments -->
                    <div class="block left-module">
                        <p class="title_block">Recent Comments</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="recent-comment-list">
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                        <li>
                                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="comment">
                                                "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                            </div>
                                            <div class="author">Posted by <a href="#">Admin</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Recent Comments -->
                    <!-- tags -->
                    <div class="block left-module">
                        <p class="title_block">TAGS</p>
                        <div class="block_content">
                            <div class="tags">
                                <a href="#"><span class="level1">actual</span></a>
                                <a href="#"><span class="level2">adorable</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level4">consider</span></a>
                                <a href="#"><span class="level3">phenomenon</span></a>
                                <a href="#"><span class="level4">span</span></a>
                                <a href="#"><span class="level1">spanegs</span></a>
                                <a href="#"><span class="level5">spanegs</span></a>
                                <a href="#"><span class="level1">actual</span></a>
                                <a href="#"><span class="level2">adorable</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level4">consider</span></a>
                                <a href="#"><span class="level2">gives</span></a>
                                <a href="#"><span class="level3">change</span></a>
                                <a href="#"><span class="level2">gives</span></a>
                                <a href="#"><span class="level1">good</span></a>
                                <a href="#"><span class="level3">phenomenon</span></a>
                                <a href="#"><span class="level4">span</span></a>
                                <a href="#"><span class="level1">spanegs</span></a>
                                <a href="#"><span class="level5">spanegs</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- ./tags -->
                    <!-- Banner -->
                    <div class="block left-module">
                        <div class="banner-opacity">
                            <a href="#"><img src="{{ url('/') }}/public/front-end/assets/data/slide-left2.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- ./Banner -->
                </div>
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
                        <div class="entry-tags">
                            <span>Tags:</span>
                            <a href="#">{{ $post_detail[0]->tag }}</a>
                        </div>
                    </article>
                    <!-- Related Posts -->
                    <div class="single-box">
                        <h2>Có thể bạn quan tâm</h2>
                        <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-thumb image-hover2">
                                        <a href="#">
                                            <img src="{{ url('/') }}/public/front-end/assets/data/blog-1.jpg" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                        <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                            <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                        </div>
                                        <div class="entry-more">
                                            <a href="#">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()