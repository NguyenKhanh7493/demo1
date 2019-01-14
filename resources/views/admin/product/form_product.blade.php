<div class="col-md-8">
    <div class="white-box">
        @if(isset($product))
            <h3 class="box-title m-b-0">Sửa sản phẩm</h3>
            <p class="text-muted m-b-30 font-13"></p>
        @else
            <h3 class="box-title m-b-0">Thêm mới sản phẩm</h3>
            <p class="text-muted m-b-30 font-13"></p>
        @endif
        @if(Session::has('danger'))
            <div class="my-alert">
                <div class="alert alert-danger">{{ Session::get('danger') }}</div>
            </div>
        @endif
        @if(Session::has('success'))
            <div class="my-alert">
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    {!! Form::label('labName','Tên sản phẩm') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nhập tên sản phẩm']) !!}
                    @if($errors->first('name'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group hidden">
                    {!! Form::label('labAlias','alias') !!}
                    {!! Form::text('alias',null,['class'=>'form-control','readonly']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('labTitle','Tiêu đề') !!}
                    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Nhập tiêu đề']) !!}
                    @if($errors->first('title'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('labIntro','Giới thiệu') !!}
                    {!! Form::textarea('introduction',null,['class'=>'form-control','placeholder'=>'Nhập nội dung giới thiệu']) !!}
                    @if($errors->first('introduction'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('introduction') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('labContent','Nội dung') !!}
                    {!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Nhập nội dung']) !!}
                    @if($errors->first('content'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('content') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('labKey','Từ khóa (SEO)') !!}
                    {!! Form::textarea('keywords',null,['class'=>'form-control','placeholder'=>'Nhập nội dung từ khóa']) !!}
                    @if($errors->first('keywords'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('keywords') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('labDes','Mô tả (SEO)') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Nhập nội dung mô tả']) !!}
                    @if($errors->first('description'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="white-box">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                @if(isset($product))
                    <div class="form-group">
                        {!! Form::label('labNum','Số lượng') !!}
                        {!! Form::number('num',$product->num,['class'=>'form-control']) !!}
                        @if($errors->first('num'))
                            <span style="color: red;font-style: italic">(*) {{ $errors->first('num') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('labPrice_old','Giá bán hiện tại') !!}
                        {!! Form::number('price_old',$product->price_old,['class'=>'form-control']) !!}
                        @if($errors->first('price_old'))
                            <span style="color: red;font-style: italic">(*) {{ $errors->first('price_old') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('labPrice_new','Giá bán mới (Nếu có)') !!}
                        {!! Form::number('price_new',$product->price_new,['class'=>'form-control']) !!}
                    </div>
                @else
                    <div class="form-group">
                        {!! Form::label('labNum','Số lượng') !!}
                        {!! Form::number('num','0',['class'=>'form-control']) !!}
                        @if($errors->first('num'))
                            <span style="color: red;font-style: italic">(*) {{ $errors->first('num') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('labPrice_old','Giá bán hiện tại') !!}
                        {!! Form::number('price_old','0',['class'=>'form-control']) !!}
                        @if($errors->first('price_old'))
                            <span style="color: red;font-style: italic">(*) {{ $errors->first('price_old') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('labPrice_new','Giá bán mới (Nếu có)') !!}
                        {!! Form::number('price_new','0',['class'=>'form-control']) !!}
                    </div>
                @endif
                @if(isset($product))
                    <div class="form-group">
                        {!! Form::label('labCate','Chọn cate') !!}
                        <select class="form-control" data-placeholder="Choose a Category" name="cate_id" tabindex="1">
                            <?php cate_parent($parent,0,"--",$product->cate_id)?>
                        </select>
                    </div>
                @else
                    <div class="form-group">
                        {!! Form::label('labCate','Chọn cate') !!}
                        <select class="form-control" data-placeholder="Choose a Category" name="cate_id" tabindex="1">
                            <?php cate_parent($parent)?>
                        </select>
                    </div>
                @endif
                <div class="form-group">
                    {!! Form::label('labUser','Người đăng sản phẩm') !!}
                    {!! Form::select('user_id',$user,null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('labStatus','Hiển thị') !!}
                    <div class="checkbox">
                        {{--<input type="checkbox" id="status" value="1" name="status"  class="js-switch" data-color="#99d683"/> status--}}
                        {!! Form::checkbox('status','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Status
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('labView','Chọn danh mục hiển thị') !!}
                    <div class="checkbox">
                        {{--<input type="checkbox" id="menu_top" value="1" name="menu_top"  class="js-switch" data-color="#99d683"/> Hiển thị menu trang chủ--}}
                        {{--{!! Form::label('labCheckbox','Hiển thị menu trang chủ') !!}--}}
                        {!! Form::checkbox('home','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Hiển thị ở đầu trang
                    </div>
                    <div class="checkbox">
                        {{--<input type="checkbox" id="menu_right" value="1" name="menu_right"  class="js-switch" data-color="#99d683"/> Hiển thị danh mục--}}
                        {!! Form::checkbox('new','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Sản phẩm mới
                    </div>
                    <div class="checkbox">
                        {{--<input type="checkbox" id="footer" value="1" name="footer"  class="js-switch" data-color="#99d683"/> Hiển thị cuối trang--}}
                        {!! Form::checkbox('hot','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Sản phẩm hot
                    </div>
                    <div class="checkbox">
                        {{--<input type="checkbox" id="footer" value="1" name="footer"  class="js-switch" data-color="#99d683"/> Hiển thị cuối trang--}}
                        {!! Form::checkbox('best_sale','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Sản phẩm giảm giá
                    </div>
                </div>
                <div class="form-group">
                    <div class="white-box">
                        <h3 class="box-title">Ảnh đại diện </h3>
                        <input type="file" id="input-file-disable-remove" name="avatar" class="dropify" data-show-remove="true" multiple value="" />
                        @if($errors->first('avatar'))
                            <span style="color: red;font-style: italic">(*) {{ $errors->first('avatar') }}</span>
                        @endif
                    </div>
                </div>
                @if(isset($product) && $product->avatar != '')
                     <div id="showImg" style="text-align: center">
                        <div class="form-group" name="parentImg">
                            <img src="{!! url('/public/images/product/avatar') !!}/{{ $product->avatar }}" alt="" width="150">
                        </div>
                     </div>
                @endif
                    {{--@if(isset($pImg))--}}
                        {{--@foreach($pImg as $item)--}}
                            {{--<div id="{!! $item->id !!}">--}}
                                {{--<div class="form-group" id="parentImg">--}}
                                    {{--<img src="{!! url('/public/images/product/image_product') !!}/{!! $item->image_name !!}" alt="" width="150">--}}
                                    {{--<a href="javascript:void(0)" class="clearImg text-danger delItem" type="button" data-id="{!! $item->id !!}" data-link="{!! URL::route('admin.pdt.getDelImg') !!}" data-msg="Bạn có muốn xóa ảnh này?" ><i class="fa fa-times"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--@endif--}}
                <div id="showInput"></div>
                @if($errors->first('images'))
                    <span style="color: red;font-style: italic">(*) {{ $errors->first('images') }}</span>
                @endif
                <div class="form-actions" style="text-align: center">
                    <button type="button" class="btn btn-success" id="addImg"> <i class="ti-plus"></i> Thêm ảnh sản phẩm</button>
                </div>
                {{--@if(isset($detail) && $detail->avatar != '')--}}
                <div id="showImg" style="text-align: center">
                    <div class="form-group" name="parentImg">
                        <img src="" alt="" width="150">
                    </div>
                </div>
                    @if(isset($pImg))
                        <div style="text-align: center">
                        <label for="">Ảnh sản phẩm</label>
                        @foreach($pImg as $item)
                            <div id="{{ $item['id_img'] }}">
                                <div class="form-group" id="parentImg">
                                    <img src="{!! url('/public/images/product/image_product') !!}/{!! $item['image_name'] !!}" alt="" width="150" id="pro_img">
                                    <a href="javascript:void(0)" class="clearImg text-danger delItemPro" type="button" data-id="{!! $item['id_img'] !!}" data-link="{{ URL::route('deleteImg') }}" data-msg="Bạn có muốn xóa ảnh này? {{$item['item_id']}}" data-token="{{ csrf_token() }}"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    @endif
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
            </div>
        </div>
    </div>
</div>