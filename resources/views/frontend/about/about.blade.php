@extends('layouts.frontend.master')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">giới thiệu</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                {{--<div class="column col-xs-12 col-sm-3" id="left_column">--}}
                    {{--<!-- block category -->--}}
                    {{--<div class="block left-module">--}}
                        {{--<p class="title_block">Infomations</p>--}}
                        {{--<div class="block_content">--}}
                            {{--<!-- layered -->--}}
                            {{--<div class="layered layered-category">--}}
                                {{--<div class="layered-content">--}}
                                    {{--<ul class="tree-menu">--}}
                                        {{--<li class="active"><span></span><a href="#">About Us</a></li>--}}
                                        {{--<li><span></span><a href="#">Delivery Information</a></li>--}}
                                        {{--<li><span></span><a href="#">Privacy Policy</a></li>--}}
                                        {{--<li><span></span><a href="#">Terms &amp; Conditions</a></li>--}}
                                        {{--<li><span></span><a href="#">Contact Us</a></li>--}}
                                        {{--<li><span></span><a href="#">FAQ</a></li>--}}
                                        {{--<li><span></span><a href="#">Site Map</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- ./layered -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="block left-module">--}}
                        {{--<div class="banner-opacity">--}}
                            {{--<a href="#"><img src="{{ url('/') }}/public/front-end/assets/data/slide-left.jpg" alt="ads-banner"></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ./block category  -->--}}
                    {{--<!-- Banner silebar -->--}}
                    {{--<div class="block left-module">--}}
                        {{--<div class="banner-opacity">--}}
                            {{--<a href="#"><img src="{{ url('/') }}/public/front-end/assets/data/slide-left.jpg" alt="ads-banner"></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ./Banner silebar -->--}}
                {{--</div>--}}
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-12" id="center_column">
                    <!-- page heading-->
                    <h2 class="page-heading">
                        <span class="page-heading-title2" style="text-align: center;color:#ff000d;">Cửa hàng N2K xin kính chào quý khách</span>
                    </h2>
                    <!-- Content page -->
                    <div class="content-text clearfix">

                        <img src="{{ url('/') }}/public/front-end/assets/data/sub-cat1.jpg" class="alignleft" width="310" alt="">
                        <h3 style="font-weight:600;font-size: 21px;padding-bottom: 10px; ">Giới thiệu cửa hàng</h3>
                        <p>Ngày đầu thành lập chỉ với 5 nhân viên và nhiều khó khăn. Với tiêu chí vương lên là nhà cung cấp hàng đầu các dòng máy tính cao cấp và doanh nhân công ty Số Việt không ngừng học hỏi và hoàn thiện bản thân. Nhờ vào uy tín Laptop4pro càng lúc càng khẳng định được thị phần máy tính cao cấp tại Hồ Chí Minh. Ngày 15/10/2014 khai trương Showroom đầu tiên với diện tích 150m2 trưng bày các dòng laptop cao cấp.</p>

                        <p>không ngừng tiến bộ và học hỏi nâng cao trình độ và kỹ năng. Công ty công nghệ Số Việt một lần nữa dành được quyền đại lý ủy quyền chuyên phân phối dự án ,cung cấp sản phẩm của hãng máy tính đứng đầu thế giới là Dell.Để có chứng nhận này chúng tôi phải nỗ lực hoàn thành các bài test khắc khe của Dell ( 2 chứng chỉ sale và 2 chứng chỉ kỹ thuật ) với doanh số cam kết với hãng là vô cừng lớn. Đến năm 2017 Laptop4pro là một trong hai đại lý được quyền phần phối dòng Laptop Alienware. Alienware là dòng Laptop Gaming nổi tiếng và cao cấp nhất của Dell </p>

                        <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </p>

                        <p>Nam elit agna,endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. </p>
                        <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>

                        <p>Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, <a href="#">malesuada at</a>, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </p>

                    </div>
                    <!-- ./Content page -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@stop