<div class="col-md-8">
    <div class="white-box">
        @if(isset($post))
            <h3 class="box-title m-b-0">Sửa bài viết</h3>
            <p class="text-muted m-b-30 font-13"></p>
        @else
            <h3 class="box-title m-b-0">Thêm mới bài viết</h3>
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
                    {!! Form::label('labName','Tên bài viết') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nhập tên bài viết']) !!}
                    @if($errors->first('name'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group hidden">
                    {!! Form::label('labName','alias') !!}
                    {!! Form::text('alias',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('labIntro','Giới thiệu') !!}
                    {!! Form::textarea('introduction',null,['class'=>'form-control','placeholder'=>'Nhập giới thiệu bài viết']) !!}
                    @if($errors->first('introduction'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('introduction') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('labContent','Nội dung bài viết') !!}
                    {!! Form::textarea('content',null,['class'=>'form-control','id'=>'editor1','placeholder'=>'Nhập nội dung bài viết']) !!}
                    @if($errors->first('content'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('content') }}</span>
                    @endif
                </div>
                <script> CKEDITOR.replace('editor1')  </script>
                <div class="form-group">
                    {!! Form::label('labKeyword','Nhập keyword (SEO)') !!}
                    {!! Form::textarea('keywords',null,['class'=>'form-control','placeholder'=>'Nhập keyword SEO bài viết']) !!}
                    @if($errors->first('keywords'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('keywords') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('labDes','Nhập nội dung (SEO)') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Nhập nội dung SEO bài viết']) !!}
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
        {{--<h3 class="box-title m-b-0">Sample Basic Forms</h3>--}}
        {{--<p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>--}}
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    {!! Form::label('labUser','Người đăng') !!}
                    {!! Form::select('user_id',$user,null,['class'=>'form-control']) !!}
                </div>
                @if(isset($post))
                    <div class="form-group">
                        {!! Form::label('labCate','Chọn menu') !!}
                        <select class="form-control" data-placeholder="Choose a Category" name="cate_id" tabindex="1">
                            <?php cate_parent($parent,0,'--',$post->cate_id)?>
                        </select>
                    </div>
                @else
                    <div class="form-group">
                        {!! Form::label('labCate','Chọn menu') !!}
                        <select class="form-control" data-placeholder="Choose a Category" name="cate_id" tabindex="1">
                            <?php cate_parent($parent)?>
                        </select>
                    </div>
                @endif
                <div class="form-group">
                    {!! Form::label('labStatus','Hiển thị') !!}
                    <div class="checkbox">
                        {!! Form::checkbox('status','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Status
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('labView','Chọn danh mục hiển thị') !!}
                    <div class="checkbox">
                        {!! Form::checkbox('home','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Hiển thị trong list
                    </div>
                    <div class="checkbox">
                        {!! Form::checkbox('new','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Bài viết mới
                    </div>
                    {{--<div class="form-group">--}}
                    {{--{!! Form::label('labDes','tag') !!}--}}
                    {{--{!! Form::text('tag',null,['class'=>'form-control','placeholder'=>'tag']) !!}--}}
                    {{--</div>--}}
                    <div class="form-group">
                        {!! Form::label('labDes','Tag') !!}
                        <div class="tags-default">
                            {{--<input type="text" value="" data-role="tagsinput" placeholder="add tags"/>--}}
                            {!! Form::text('tag',null,['class'=>'form-control','data-role'=>'tagsinput','placeholder'=>'Thêm tag']) !!}
                        </div>
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
                @if(isset($post) && $post->avatar != '')
                <div id="showImg" style="text-align: center">
                    <div class="form-group" name="parentImg">
                        <img src="{!! url('/public/images/post/avatar') !!}/{{ $post->avatar }}" alt="" width="150">
                    </div>
                </div>
                @endif
                <div id="showInputPost"></div>
                @if($errors->first('imagesPost'))
                    <span style="color: red;font-style: italic">(*) {{ $errors->first('imagesPost') }}</span>
                @endif
                <div class="form-group">
                    <div class="form-actions" style="text-align: center">
                        <button type="button" class="btn btn-success" id="addImgPost"> <i class="ti-plus"></i> Thêm ảnh sản phẩm</button>
                    </div>
                </div>
                @if(isset($pImg))
                <div style="text-align: center">
                <label for="">Ảnh sản phẩm</label>
                @foreach($pImg as $item)
                <div id="{{ $item['id_img'] }}">
                <div class="form-group" id="parentImg">
                <img src="{!! url('/public/images/post/image_detail') !!}/{!! $item['image_name'] !!}" alt="" width="150" id="pro_img">
                <a href="javascript:void(0)" class="clearImg text-danger delItemPost" type="button" data-id="{{ $item['id_img'] }}" data-link="" data-msg="Bạn có muốn xóa ảnh này? " data-token="{{ csrf_token() }}"><i class="fa fa-times"></i></a>
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