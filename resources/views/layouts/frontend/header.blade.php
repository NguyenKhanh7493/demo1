<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{url('/')}}/public/front-end/assets/images/phone.png" />0964245027</a>
                <a href="#"><img alt="email" src="{{url('/')}}/public/front-end/assets/images/email.png" />Gửi mail phải hồi cho chúng tôi</a>
            </div>
            {{--<div class="currency ">--}}
                {{--<div class="dropdown">--}}
                    {{--<a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="#">Dollar</a></li>--}}
                        {{--<li><a href="#">Euro</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="language ">--}}
                {{--<div class="dropdown">--}}
                    {{--<a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">--}}
                        {{--<img alt="email" src="{{url('/')}}/public/front-end/assets/images/fr.jpg" />French--}}

                    {{--</a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="#"><img alt="email" src="{{url('/')}}/public/front-end/assets/images/en.jpg" />English</a></li>--}}
                        {{--<li><a href="#"><img alt="email" src="{{url('/')}}/public/front-end/assets/images/fr.jpg" />French</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="support-link">--}}
                {{--<a href="#">Services</a>--}}
                {{--<a href="#">Support</a>--}}
            {{--</div>--}}

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Wishlists</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="index.html"><img alt="Kute Shop" src="{{url('/')}}/public/front-end/assets/images/logo2.png" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline" action="{{ url('tim-kiem') }}" method="get">
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                    <div class="form-group form-category">
                        <select class="select-category" name="value_search">
                            <option value="1">Sản Phẩm</option>
                            <option value="2">Bài viết</option>
                        </select>
                    </div>
                    <div class="form-group input-serach">
                        <input type="text" name="search"  placeholder="Nhập tìm kiếm...">
                    </div>
                    <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div class="col-xs-5 col-sm-2 group-button-header">
                <a title="Compare" href="#" class="btn-compare">compare</a>
                <a title="My wishlist" href="#" class="btn-heart">wishlist</a>
                <div class="btn-cart" id="cart-block">
                    <a title="My cart" href="{{ url('/gio-hang') }}">Cart</a>
                    <span class="notify notify-right">2</span>
                    <div class="cart-block">
                        <div class="cart-block-content">
                            <h5 class="cart-title">2 Items in my cart</h5>
                            <div class="cart-block-list">
                                <ul>
                                    <li class="product-info">
                                        <div class="p-left">
                                            <a href="#" class="remove_link"></a>
                                            <a href="#">
                                                <img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/product-100x122.jpg" alt="p10">
                                            </a>
                                        </div>
                                        <div class="p-right">
                                            <p class="p-name">Donec Ac Tempus</p>
                                            <p class="p-rice">61,19 €</p>
                                            <p>Qty: 1</p>
                                        </div>
                                    </li>
                                    <li class="product-info">
                                        <div class="p-left">
                                            <a href="#" class="remove_link"></a>
                                            <a href="#">
                                                <img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/product-s5-100x122.jpg" alt="p10">
                                            </a>
                                        </div>
                                        <div class="p-right">
                                            <p class="p-name">Donec Ac Tempus</p>
                                            <p class="p-rice">61,19 €</p>
                                            <p>Qty: 1</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="toal-cart">
                                <span>Total</span>
                                <span class="toal-price pull-right">122.38 €</span>
                            </div>
                            <div class="cart-buttons">
                                <a href="order.html" class="btn-check-out">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                                    @foreach($arr_menu as $menus)
                                        @if(!empty($menus['child']))
                                            <li class="dropdown">
                                                <a href="category.html" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menus['parent']['name']?></a>
                                                <ul class="dropdown-menu container-fluid">
                                                    <li class="block-container">
                                                        <ul class="block">
                                                            @foreach($menus['child'] as $child)
                                                            <li class="link_container"><a href="{{ url('/san-pham',$child['alias']) }}"><?php echo $child['name']?></a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                            <li><a href="{{ url('/',$menus['parent']['alias']) }}"><?php echo $menus['parent']['name']?></a></li>
                                        @endif
                                    @endforeach
                                        <style type="text/css">
                                            .link_container a:hover{
                                                color: red !important;
                                                font-weight: 700;
                                            }
                                        </style>
                                    {{--<li class="dropdown">--}}
                                        {{--<a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Pages</a>--}}
                                        {{--<ul class="mega_dropdown dropdown-menu" style="width: 830px;">--}}
                                            {{--<li class="block-container col-sm-4">--}}
                                                {{--<ul class="block">--}}
                                                    {{--<li class="link_container group_header">--}}
                                                        {{--<a href="#">Page</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="category.html">Category Left Sidebar</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="category2.html">Category Right Sidebar</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="detail.html">Product Left Sidebar</a>--}}
                                                    {{--</li>--}}

                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="detail2.html">Product Full width</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="detail3.html">Product Right Sidebar</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</li>--}}
                                            {{--<li class="block-container col-sm-4">--}}
                                                {{--<ul class="block">--}}
                                                    {{--<li class="link_container group_header">--}}
                                                        {{--<a href="#">Page</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="wishlist.html">Wishlist</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="compare.html">Compare</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="order.html">Order</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="checkout.html">Checkout</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="login.html">Login</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</li>--}}
                                            {{--<li class="block-container col-sm-4">--}}
                                                {{--<ul class="block">--}}
                                                    {{--<li class="link_container group_header">--}}
                                                        {{--<a href="#">Page</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="blog.html">Blog</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="blog-detail.html">Blog Post</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="about.html">About Us</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="link_container">--}}
                                                        {{--<a href="contact.html">Contact Us</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="category.html">Jewelry</a></li>--}}
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
