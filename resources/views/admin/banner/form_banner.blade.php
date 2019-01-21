<div class="col-md-6">
    <div class="white-box">
        <h3 class="box-title m-b-0">Thêm banner</h3>
        <p class="text-muted m-b-30 font-13"></p>
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
                    {!! Form::label('title','Tiêu đề banner')!!}
                    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Nhập tiêu đề ảnh']) !!}
                    @if($errors->first('title'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('sort','Thứ tự hiện thị banner')!!}
                    {!! Form::text('sort',null,['class'=>'form-control','placeholder'=>'Nhập thứ tự ảnh']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('labStatus','Hiển thị') !!}
                    <div class="checkbox">
                        {!! Form::checkbox('status','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Status
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('labView','Chọn khu vực hiển thị') !!}
                    <div class="checkbox">
                        {!! Form::checkbox('banner_center','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Ở giữa
                    </div>
                    <div class="checkbox">
                        {!! Form::checkbox('banner_right','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Ở giữa bên phải
                    </div>
                    <div class="checkbox">
                        {!! Form::checkbox('banner_bottom','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Ở cuối trang
                    </div>
                </div>
                <div class="form-group">
                    <div class="white-box">
                        <h3 class="box-title">Ảnh đại diện </h3>
                        <p>(banner ở giữa = 666x450) (banner phải = 234x450) (banner cuối = 570x120)</p>
                        <input type="file" id="input-file-disable-remove" name="name" class="dropify" data-show-remove="true" multiple value="" />
                        @if($errors->first('name'))
                            <span style="color: red;font-style: italic">(*) {{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                @if(isset($banner) && $banner->name != '')
                    <div id="showImg" style="text-align: center">
                        <div class="form-group" name="parentImg">
                            <img src="{!! url('/public/images/banner') !!}/{{ $banner->name }}" alt="" width="300" height="200">
                        </div>
                    </div>
                @endif
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
            </div>
        </div>
    </div>
</div>