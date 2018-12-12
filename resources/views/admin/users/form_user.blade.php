<div class="col-sm-7">
    <div class="white-box">
        <h3 class="box-title m-b-0">Thêm admin quản trị</h3>
        <p class="text-muted m-b-30 font-13"></p>
        @if(Session::has('danger'))
            <div class="my-alert">
                <div class="alert alert-danger">{{ Session::get('danger') }}</div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="name" class="control-label">Tên</label>
                    {!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Xin mời nhập tên']) !!}
                    @if ($errors->first('name'))
                        <span style="color:red; font-style:italic;">(*) {{ $errors->first('name') }}</span>
                    @endif()
                </div>
                <div class="form-group">
                    <label for="fullname" class="control-label">Tên đầy đủ</label>
                    {{--<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nhập họ tên đầy đủ">--}}
                    {!! Form::text('fullname',null,['class'=>'form-control','id'=>'fullname','placeholder'=>'Xin mời nhập tên đầy đủ']) !!}
                    @if ($errors->first('fullname'))
                        <span style="color:red; font-style:italic;">(*) {{ $errors->first('fullname') }}</span>
                    @endif()
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    {{--<input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">--}}
                    {!! Form::email('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Xin mời nhập email']) !!}
                    @if ($errors->first('email'))
                        <span style="color:red; font-style:italic;">(*) {{ $errors->first('email') }}</span>
                    @endif()
                </div>
                @if(!isset($user))
                <div class="form-group">
                    <label for="password" class="control-label">Mật khẩu</label>
                    {{--<input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">--}}
                    {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'Xin mời nhập mật khẩu']) !!}
                    @if ($errors->first('password'))
                        <span style="color:red; font-style:italic;">(*) {{ $errors->first('password') }}</span>
                    @endif()
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Nhập lại mật khẩu</label>
                    {{--<input type="password" class="form-control" name="repassword" id="repassword" placeholder="Nhập lại mật khẩu">--}}
                    {!! Form::password('repassword',['class'=>'form-control','id'=>'repassword','placeholder'=>'Xin mời nhập email']) !!}
                    @if ($errors->first('repassword'))
                        <span style="color:red; font-style:italic;">(*) {{ $errors->first('repassword') }}</span>
                    @endif()
                </div>
                @endif
                <div class="form-group">
                    <label for="address" class="control-label">Địa chỉ</label>
                    {{--<textarea name="address" id="address" class="form-control" placeholder="Nhập địa chỉ"></textarea>--}}
                    {!! Form::textarea('address',null,['class'=>'form-control','id'=>'address','placeholder'=>'Xin mời nhập địa chỉ']) !!}
                    @if ($errors->first('address'))
                        <span style="color:red; font-style:italic;">(*) {{ $errors->first('address') }}</span>
                    @endif()
                </div>
                <div class="form-group">
                    <label for="phone" class="control-label">Điện thoại</label>
                    {{--<input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">--}}
                    {!! Form::text('phone',null,['class'=>'form-control','id'=>'phone','placeholder'=>'Xin mời nhập số điện thoại']) !!}
                    @if ($errors->first('phone'))
                        <span style="color:red; font-style:italic;">(*) {{ $errors->first('phone') }}</span>
                    @endif()
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="white-box">
        <h3 class="box-title m-b-0"></h3>
        <div class="form-group">
            <label class="control-label">Giới tính</label>
            {{--<select class="form-control" name="gender">--}}
            {{--<option>Chọn giới tính</option>--}}
            {{--<option value="0">Nam</option>--}}
            {{--<option value="1">Nữ</option>--}}
            {{--<option value="2">Khác</option>--}}
            {{--</select>--}}
            {!! Form::select('gender',['0'=>'nam','1'=>'nữ','2'=>'khác'],null,['class'=>'form-control','id'=>'gender','placeholder'=>'Giới tính']) !!}
            @if ($errors->first('gender'))
                <span style="color:red; font-style:italic;">(*) {{ $errors->first('gender') }}</span>
            @endif()
        </div>
        <div class="form-group">
            <label for="status" class="control-label">status</label>
            {{--<input type="text" class="form-control" id="status" name="status" placeholder="Nhập status">--}}
            {!! Form::text('status',null,['class'=>'form-control','id'=>'status','placeholder'=>'Xin mời nhập status']) !!}
            @if ($errors->first('status'))
                <span style="color:red; font-style:italic;">(*) {{ $errors->first('status') }}</span>
            @endif()
        </div>
        <div class="form-group">
            <label class="control-label">Rose</label>
            {{--<select class="form-control" name="level_user">--}}
            {{--<option>Chọn level</option>--}}
            {{--<option value="0">admin</option>--}}
            {{--<option value="1">Biên tập viên</option>--}}
            {{--</select>--}}
            @if(!isset($role_user))
                {!! Form::select('role',$role,null,['class'=>'form-control','id'=>'role','placeholder'=>'role']) !!}
                @if ($errors->first('role'))
                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('role') }}</span>
                @endif()
            @else
                {!! Form::select('role',$role,$role_user[0]->role_id,['class'=>'form-control','id'=>'role','placeholder'=>'role']) !!}
                @if ($errors->first('role'))
                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('role') }}</span>
                @endif()
            @endif
        </div>
        {{--<div class="form-group">--}}
            {{--<label>Quyền hạn của user mới</label>--}}
            {{--<div class="input-group">--}}
                {{--<div class="col-sm-12">--}}
                    {{--@foreach($permission as $target)--}}
                        {{--<ul class="icheck-list">--}}
                            {{--<li>--}}
                                {{--<input type="checkbox" class="check" id="minimal-checkbox-1">--}}
                                {{--<label for="minimal-checkbox-1">{{ $target->display_name }}</label>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        @if(isset($per_role))
        <div class="form-group">
                <div class="collapse m-t-15 well" id="pgr2" aria-expanded="true">
                </div>
                <div class="list-group" style="text-align: center">
                    <p class="list-group-item active">Các quyền thành viên được thực hiện</p>
                    @foreach($per_role as $per)
                    <p class="list-group-item" style="font-weight: 400">{{ $per->name }}</p>
                    @endforeach
                </div>
        </div>
        @endif
        <div class="form-group">
            <div class="white-box">
                <h3 class="box-title">Ảnh đại diện </h3>
                <input type="file" id="input-file-disable-remove" name="avatar" class="dropify" data-show-remove="true" multiple value="" />
                {{--{!! Form::file('avatar',null,['class'=>'dropify','id'=>'input-file-disable-remove','data-show-remove'=>true,'multiple']) !!}--}}
                @if ($errors->first('avatar'))
                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('avatar') }}</span>
                @endif()
            </div>
        </div>
        {{--@if(isset($detail) && $detail->avatar != '')--}}
        @if(isset($user))
        <div id="showImg" style="text-align: center">
            <div class="form-group" name="parentImg">
                <img src="{{ url('/') }}/public/images/user/{{ $user->avatar }}" alt="" width="150">
            </div>
        </div>
        @endif
        {{--@endif--}}
        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
    </div>
</div>