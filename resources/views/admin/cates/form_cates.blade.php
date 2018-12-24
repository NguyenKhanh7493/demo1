<div class="col-md-8">
    <div class="white-box">
        @if(isset($cate))
            <h3 class="box-title m-b-0">Sửa menu</h3>
        @else
            <h3 class="box-title m-b-0">Thêm mới menu</h3>
        @endif
        <p class="text-muted m-b-30 font-13"></p>
        @if(Session::has('danger'))
            <div class="my-alert">
                <div class="alert alert-danger">{{ Session::get('danger') }}</div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    {!! Form::label('labName','Tên menu') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nhập tên menu']) !!}
                    @if($errors->first('name'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('labAlias','Alias') !!}
                    {!! Form::text('alias',null,['class'=>'form-control','readonly']) !!}
                </div>
                {{--<div class="form-group">--}}
                {{--{!! Form::label('labParent','Chọn danh mục') !!}--}}
                {{--{!! Form::select('parent_id',['1'=>'thư mục cha'],null,['class'=>'form-control']) !!}--}}
                {{--</div>--}}
                @if(isset($cate))
                    <div class="form-group">
                        {!! Form::label('labParent','Chọn danh mục') !!}
                        <select class="form-control" data-placeholder="Choose a Category" name="parent_id" tabindex="1">
                            <option value="0">Thư mục cha</option>
                            <?php cate_parent($parent,0,"--",$cate->parent_id)?>
                        </select>
                    </div>
                @else
                    <div class="form-group">
                        {!! Form::label('labParent','Chọn danh mục') !!}
                        <select class="form-control" data-placeholder="Choose a Category" name="parent_id" tabindex="1">
                            <option value="0">Thư mục cha</option>
                            <?php cate_parent($parent)?>
                        </select>
                    </div>
                @endif
                <div class="form-group">
                    {!! Form::label('labIcon','Nhập icon (nếu có)') !!}
                    {!! Form::text('icon',null,['class'=>'form-control','placeholder'=>'Nhập Icon']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('labIcon','Nhập keyword') !!}
                    {!! Form::text('keywords',null,['class'=>'form-control','placeholder'=>'Nhập keyword']) !!}
                    @if($errors->first('keywords'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('keywords') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('labIcon','Nhập description') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Nhập tiêu đề']) !!}
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
                <div class="form-group">
                    <div class="checkbox">
                        {{--<input type="checkbox" id="status" value="1" name="status"  class="js-switch" data-color="#99d683"/> status--}}
                        {!! Form::checkbox('status','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Status
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chọn danh mục hiển thị</label>
                    {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">--}}
                    <div class="checkbox">
                        {{--<input type="checkbox" id="menu_top" value="1" name="menu_top"  class="js-switch" data-color="#99d683"/> Hiển thị menu trang chủ--}}
                        {{--{!! Form::label('labCheckbox','Hiển thị menu trang chủ') !!}--}}
                        {!! Form::checkbox('menu_top','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Hiển thị menu trang chủ
                    </div>
                    <div class="checkbox">
                        {{--<input type="checkbox" id="menu_right" value="1" name="menu_right"  class="js-switch" data-color="#99d683"/> Hiển thị danh mục--}}
                        {!! Form::checkbox('menu_right','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Hiển thị danh mục
                    </div>
                    <div class="checkbox">
                        {{--<input type="checkbox" id="footer" value="1" name="footer"  class="js-switch" data-color="#99d683"/> Hiển thị cuối trang--}}
                        {!! Form::checkbox('footer','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Hiển thị cuối trang
                    </div>
                </div>
                {{----}}
                <div class="form-checkbox">
                    <label for="" class="control-label">Loại danh mục</label>
                    <div class="radio">
                        {{--<input type="radio" value="1" name="type"  class="check" data-radio="iradio_flat-green" id="type"/> Bài viết--}}
                        {!! Form::radio('type','1',null,['class'=>'check','data-radio'=>'iradio_flat-green']) !!} Bài viết
                    </div>
                    <div class="radio">
                        {{--<input type="radio" value="2" name="type"  class="check" data-radio="iradio_flat-green" id="type"/> Danh mục tin--}}
                        {!! Form::radio('type','2',null,['class'=>'check','data-radio'=>'iradio_flat-green']) !!} Danh mục tin
                    </div>
                    <div class="radio">
                        {{--<input type="radio" value="3" name="type"  class="check" data-radio="iradio_flat-green" id="type"/> Danh mục sản phẩm--}}
                        {!! Form::radio('type','3',null,['class'=>'check','data-radio'=>'iradio_flat-green']) !!} Danh mục sản phẩm
                    </div>
                </div>
                {{----}}
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                {{--{!! Form::button('Submit',['class'=>'btn btn-success waves-effect waves-light m-r-10']) !!}--}}
            </div>
        </div>
    </div>
</div>