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
                <form class="form-inline">
                    {{--<div class="form-group form-category">--}}
                        {{--<select class="select-category">--}}
                            {{--<option value="2">All Categories</option>--}}
                            {{--<option value="1">Men</option>--}}
                            {{--<option value="2">Women</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                    <div class="form-group input-serach">
                        <input type="text"  placeholder="Keyword here...">
                    </div>
                    <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div class="col-xs-5 col-sm-2 group-button-header">
                <a title="Compare" href="#" class="btn-compare">compare</a>
                <a title="My wishlist" href="#" class="btn-heart">wishlist</a>
                <div class="btn-cart" id="cart-block">
                    <a title="My cart" href="cart.html">Cart</a>
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
                {{--<div class="col-sm-3" id="box-vertical-megamenus">--}}
                    {{--<div class="box-vertical-megamenus">--}}
                        {{--<h4 class="title">--}}
                            {{--<span class="title-menu">DANH MỤC SẢN PHÂM</span>--}}
                            {{--<span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>--}}
                        {{--</h4>--}}
                        {{--<div class="vertical-menu-content is-home">--}}
                            {{--<ul class="vertical-menu-list">--}}
                                {{--<li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/12.png">Electronics</a></li>--}}
                                {{--<li>--}}
                                    {{--<a class="parent" href="category2.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/13.png">Sports &amp; Outdoors</a>--}}
                                    {{--<div class="vertical-dropdown-menu">--}}
                                        {{--<div class="vertical-groups col-sm-12">--}}
                                            {{--<div class="mega-group col-sm-4">--}}
                                                {{--<h4 class="mega-group-header"><span>Tennis</span></h4>--}}
                                                {{--<ul class="group-link-default">--}}
                                                    {{--<li><a href="#">Tennis</a></li>--}}
                                                    {{--<li><a href="#">Coats &amp; Jackets</a></li>--}}
                                                    {{--<li><a href="#">Blouses &amp; Shirts</a></li>--}}
                                                    {{--<li><a href="#">Tops &amp; Tees</a></li>--}}
                                                    {{--<li><a href="#">Hoodies &amp; Sweatshirts</a></li>--}}
                                                    {{--<li><a href="#">Intimates</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<div class="mega-group col-sm-4">--}}
                                                {{--<h4 class="mega-group-header"><span>Swimming</span></h4>--}}
                                                {{--<ul class="group-link-default">--}}
                                                    {{--<li><a href="#">Dresses</a></li>--}}
                                                    {{--<li><a href="#">Coats &amp; Jackets</a></li>--}}
                                                    {{--<li><a href="#">Blouses &amp; Shirts</a></li>--}}
                                                    {{--<li><a href="#">Tops &amp; Tees</a></li>--}}
                                                    {{--<li><a href="#">Hoodies &amp; Sweatshirts</a></li>--}}
                                                    {{--<li><a href="#">Intimates</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<div class="mega-group col-sm-4">--}}
                                                {{--<h4 class="mega-group-header"><span>Shoes</span></h4>--}}
                                                {{--<ul class="group-link-default">--}}
                                                    {{--<li><a href="#">Dresses</a></li>--}}
                                                    {{--<li><a href="#">Coats &amp; Jackets</a></li>--}}
                                                    {{--<li><a href="#">Blouses &amp; Shirts</a></li>--}}
                                                    {{--<li><a href="#">Tops &amp; Tees</a></li>--}}
                                                    {{--<li><a href="#">Hoodies &amp; Sweatshirts</a></li>--}}
                                                    {{--<li><a href="#">Intimates</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<div class="mega-custom-html col-sm-12">--}}
                                                {{--<a href="#"><img src="assets/data/banner-megamenu.jpg" alt="Banner"></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/14.png">Smartphone &amp; Tablets</a></li>--}}
                                {{--<li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/15.png">Health &amp; Beauty Bags</a></li>--}}
                                {{--<li>--}}
                                    {{--<a class="parent" href="category.html">--}}
                                        {{--<img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/16.png">Shoes &amp; Accessories</a>--}}
                                    {{--<div class="vertical-dropdown-menu">--}}
                                        {{--<div class="vertical-groups col-sm-12">--}}
                                            {{--<div class="mega-group col-sm-12">--}}
                                                {{--<h4 class="mega-group-header"><span>Special products</span></h4>--}}
                                                {{--<div class="row mega-products">--}}
                                                    {{--<div class="col-sm-3 mega-product">--}}
                                                        {{--<div class="product-avatar">--}}
                                                            {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/p10.jpg" alt="product1"></a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-name">--}}
                                                            {{--<a href="#">Fashion hand bag</a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-price">--}}
                                                            {{--<div class="new-price">$38</div>--}}
                                                            {{--<div class="old-price">$45</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-star">--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-sm-3 mega-product">--}}
                                                        {{--<div class="product-avatar">--}}
                                                            {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/p11.jpg" alt="product1"></a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-name">--}}
                                                            {{--<a href="#">Fashion hand bag</a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-price">--}}
                                                            {{--<div class="new-price">$38</div>--}}
                                                            {{--<div class="old-price">$45</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-star">--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-sm-3 mega-product">--}}
                                                        {{--<div class="product-avatar">--}}
                                                            {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/p12.jpg" alt="product1"></a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-name">--}}
                                                            {{--<a href="#">Fashion hand bag</a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-price">--}}
                                                            {{--<div class="new-price">$38</div>--}}
                                                            {{--<div class="old-price">$45</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-star">--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-sm-3 mega-product">--}}
                                                        {{--<div class="product-avatar">--}}
                                                            {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/p13.jpg" alt="product1"></a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-name">--}}
                                                            {{--<a href="#">Fashion hand bag</a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-price">--}}
                                                            {{--<div class="new-price">$38</div>--}}
                                                            {{--<div class="old-price">$45</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-star">--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star"></i>--}}
                                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/17.png">Toys &amp; Hobbies</a></li>--}}
                                {{--<li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/18.png">Computers &amp; Networking</a></li>--}}
                                {{--<li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/19.png">Laptops &amp; Accessories</a></li>--}}
                                {{--<li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/20.png">Jewelry &amp; Watches</a></li>--}}
                                {{--<li><a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/21.png">Flashlights &amp; Lamps</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="category.html">--}}
                                        {{--<img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/21.png">--}}
                                        {{--Cameras &amp; Photo--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="cat-link-orther">--}}
                                    {{--<a href="category.html">--}}
                                        {{--<img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/22.png">--}}
                                        {{--Television--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="cat-link-orther">--}}
                                    {{--<a href="category.html">--}}
                                        {{--<img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/12.png">Computers &amp; Networking--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="cat-link-orther">--}}
                                    {{--<a href="category.html">--}}
                                        {{--<img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/14.png">--}}
                                        {{--Toys &amp; Hobbies--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="cat-link-orther">--}}
                                    {{--<a href="category.html"><img class="icon-menu" alt="Funky roots" src="{{url('/')}}/public/front-end/assets/data/17.png">Jewelry &amp; Watches</a></li>--}}
                            {{--</ul>--}}
                            {{--<div class="all-category"><span class="open-cate">All Categories</span></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
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
                                    @foreach($arr_menu as $menus)
                                        @if(!empty($menus['child']))
                                            <li class="dropdown">
                                                <a href="category.html" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menus['parent']['name']?></a>
                                                <ul class="dropdown-menu container-fluid">
                                                    <li class="block-container">
                                                        <ul class="block">
                                                            <li class="link_container"><a href="#"><?php echo $menus['child'][0]['name']?></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                            <li><a href="category.html"><?php echo $menus['parent']['name']?></a></li>
                                        @endif
                                    @endforeach

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
