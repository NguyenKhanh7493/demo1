<div class="column col-xs-12 col-sm-3" id="left_column">
    <!-- block category -->
    <div class="block left-module">
        <p class="title_block">DANH MỤC SẢN PHẨM</p>
        <div class="block_content">
            <!-- layered -->
            <div class="layered layered-category">
                <div class="layered-content">
                    <ul class="tree-menu">
                        @foreach($arr_menu as $item)
                            @foreach($item['child'] as $menu_child)
                                <li><span></span><a href="{{ url('/san-pham',$menu_child['alias']) }}"><?php echo $menu_child['name']?></a></li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- ./layered -->
        </div>
    </div>
    <!-- ./block category  -->
    <!-- block filter -->
    <div class="block left-module">
        <p class="title_block">Sản phẩm được xem nhiều</p>
        <div class="block_content">
            <!-- layered -->
            <div class="layered">
                <div class="layered-content">
                    <ul class="blog-list-sidebar clearfix">
                        @foreach($product_view as $val)
                        <li>
                            <div class="post-thumb">
                                <a href="#"><img src="{{ url('/') }}/public/images/product/avatar/{{ $val->avatar }}" alt="Blog"></a>
                            </div>
                            <div class="post-info">
                                <h5 class="entry_title"><a href="#">{{ $val->name }}</a></h5>
                                {{--<div class="post-meta">--}}
                                    {{--<span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>--}}
                                    {{--<span class="comment-count">--}}
                                                    {{--<i class="fa fa-comment-o"></i> 3--}}
                                                {{--</span>--}}
                                {{--</div>--}}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- ./layered -->
        </div>
    </div>
    <!-- ./block filter  -->
    <div class="block left-module">
        <div class="banner-opacity">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=271&height=170&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="271" height="170" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
    <!-- left silide -->
    <div class="block left-module">
        <div class="banner-opacity">
            <a href="#"><img src="{{ url('/') }}/public/images/banner/{{ $post_banner[0]->name }}" alt="ads-banner"></a>
        </div>
    </div>
    <!--./left silde-->
</div>