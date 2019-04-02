@extends('layouts.frontend.index')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Contact</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">Liên hệ với chúng tôi</span>
            </h2>
            <!-- ../page heading-->
            <div id="contact" class="page-content page-contact">
                <div id="message-box-conact"></div>
                <div class="row">
                    <div class="col-sm-6">
                        {{--<h3 class="page-subheading">QÚY KHÁCH HÃY ĐIỀN NHỮNG THÔNG TIN VÀO DƯỚI ĐÂY</h3>--}}
                        <form action="{{ route('PostContact') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="contact-form-box">
                            <div class="form-selector">
                                {!! Form::label('labName','Tên khách hàng (*)') !!}
                                {!! Form::text('name',null,['class'=>'form-control input-sm','placeholder'=>'Nhập họ tên']) !!}
                            </div>
                            <div class="form-selector">
                                {!! Form::label('labEmail','Nhập email (*)') !!}
                                {!! Form::email('email',null,['class'=>'form-control input-sm','placeholder'=>'Nhập email']) !!}
                            </div>
                            <div class="form-selector">
                                {!! Form::label('labDescription','Tiêu đề (*)') !!}
                                {!! Form::text('description',null,['class'=>'form-control input-sm','placeholder'=>'Nhập tiêu đề']) !!}
                            </div>
                            <div class="form-selector">
                                {!! Form::label('labContent','Nội dung (*)') !!}
                                {!! Form::textarea('content',null,['class'=>'form-control input-sm','placeholder'=>'Nhập nội dung']) !!}
                            </div>
                            <div class="form-selector">
                                <button id="btn-send-contact" class="btn">Gửi</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6" id="contact_form_map">
                        <h3 class="page-subheading">Hoặc bạn có thể liên lạc trực tiếp với chúng tôi</h3>
                        {{--<p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>--}}
                        {{--<br/>--}}
                        {{--<ul>--}}
                            {{--<li>Praesent nec tincidunt turpis.</li>--}}
                            {{--<li>Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>--}}
                            {{--<li>Ut congue gravida dolor, vitae viverra dolor.</li>--}}
                        {{--</ul>--}}
                        {{--<br/>--}}
                        <ul class="store_info">
                            <li><i class="fa fa-home"></i>Bình Hòa - Thuận An - Bình Dương</li>
                            <li><i class="fa fa-phone"></i><span>0964245027</span></li>
                            <li><i class="fa fa-phone"></i><span>0918081493</span></li>
                            <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:%73%75%70%70%6f%72%74@%6b%75%74%65%74%68%65%6d%65.%63%6f%6d">nguyenkhanh7493@gmai.com</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop