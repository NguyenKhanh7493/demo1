<footer id="footer">
    <div class="container">
        <!-- introduce-box -->
        <div id="introduce-box" class="row">
            <div class="col-md-3">
                <div id="address-box">
                    <a href="{{ url('/') }}"><img src="{{url('/')}}/public/front-end/assets/images/logo/logofooter.png" alt="" /></a>
                    <div id="address-list">
                        <div class="tit-name">Địa chỉ:</div>
                        <div class="tit-contain">Bình Đáng - Bình Hòa - Thuận An - Bình Dương</div>
                        <div class="tit-name">Sđt:</div>
                        <div class="tit-contain" style="color: #ff0000;font-weight: 600;">0964245027 - 0918081493</div>
                        <div class="tit-name">Email:</div>
                        <div class="tit-contain">nguyenkhanh7493@gmail.com</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="introduce-title">VỀ CHÚNG TÔI</div>
                        <ul id="introduce-company"  class="introduce-list">
                            <li><a href="{{ url('/gioi-thieu') }}">Giới thiệu</a></li>
                            <li><a href="{{ url('/gioi-thieu') }}">Bản quyền & Sở hữu</a></li>
                            <li><a href="{{ url('/gioi-thieu') }}">Hoạt động</a></li>
                            <li><a href="{{ url('/tin-tuc') }}">Tin tức</a></li>
                            <li><a href="{{ url('/lien-he') }}">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=310&height=150&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="310" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="contact-box">
                    <div class="introduce-title">ĐĂNG KÝ NHẬN BẢN TIN MỚI</div>
                    <form action="{{ route('post_email') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-group" id="mail-box">
                            <input type="text" placeholder="Xin mời nhập email" name="email"/>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">OK</button>
                              </span>
                        </div>
                    </form><!-- /input-group -->
                    <div class="introduce-title">Số người truy cập</div>
                    <div class="social-link">
                        <span>Tổng :</span>
                        <span style="color: #e83a13;">{{ number_format(100000000) }}</span>
                    </div>
                </div>

            </div>
        </div><!-- /#introduce-box -->

        <div id="footer-menu-box">
            <p class="text-center" style="color: #0d831d;">Copyrights &#169; 2019 Bản quyền thuộc Nguyễn Khánh</p>
        </div><!-- /#footer-menu-box -->
    </div>
</footer>