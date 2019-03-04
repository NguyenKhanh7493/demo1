<div class="row-blog">
    <div class="container">
        <!-- blog list -->
        <div class="blog-list">
            <h2 class="page-heading">
                <span class="page-heading-title">BÀI VIẾT</span>
            </h2>
            <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                    @foreach($news_post as $item)
                    <li>
                        <div class="post-thumb">
                            <a href="{{ route('post_detail',$item->alias) }}"><img src="{{ url('/') }}/public/images/post/avatar/{{ $item->avatar }}" alt="Blog"></a>
                        </div>
                        <div class="post-desc" style="line-height: 18px;font-size: 13px;">
                            <h5 class="post-title" style="font-weight: 600;">
                                <a href="{{ route('post_detail',$item->alias) }}">{{ $item->name }}</a>
                            </h5>
                            <div class="post-meta" style="font-style: italic;margin-top: 10px;">
                                {{--<span class="date">February 27, 2015</span>--}}
                            </div>
                            <div class="desc">{{ $item->introduction }}</div>
                            <div class="meta-tags" style="margin-top: 10px;font-size: 13px;color: #999;">
                                <i class="fa fa-tag"></i>
                                <a href="#">{{ $item->tag }} </a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- ./blog list -->
    </div>
</div>