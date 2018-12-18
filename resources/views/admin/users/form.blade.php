@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">TRANG QUẢN TRỊ</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#">Admin</a></li>--}}
                {{--<li class="active">User</li>--}}
                {{--<li class="active">Create</li>--}}
            {{--</ol>--}}
            <p class="text-right">
                {{--@if(isset($user))--}}
                {{--<a style="font-size: 15px; margin-right: 25px;" href="{{ route('create_user') }}" class="text-success"> <i  class="fa fa-plus-circle text-success" aria-hidden="true"></i> Thêm mới</a>--}}
                {{--@endif--}}
                {{--<a style="font-size: 15px" href="{{ route('listUser') }}" class="text-success"><i class="fa fa-list-ul text-success" aria-hidden="true"></i> Danh sách</a>--}}
                @if(isset($user))
                    <a href="{{ route('changerPass',$user->id) }}">
                        <span class="btn btn-success" style="text-align: center">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            Đổi mật khẩu</span>
                    </a>
                    <a href="{{ route('create_user') }}">
                        <span class="btn btn-success btn-md" style="text-align: center">
                            <i  class="fa fa-plus-circle text-white" aria-hidden="true"></i>
                            Thêm mới</span>
                    </a>
                @endif
                    <a href="{{ route('listUser') }}">
                        <span class="btn btn-success" style="text-align: center">
                            <i class="fa fa-list-ul text-white" aria-hidden="true"></i>
                            Danh sách</span>
                    </a>
            </p>
        </div>
    </div>
    <div class="row">
        {{--<form action="{{ route('post_create') }}" method="post">--}}
        @if(isset($user))
        {!! Form::model($user,[
                'method' => 'PATCH',
                'url' => ['/admin/user/edit',$user->id],
                'files' => true,
                'name' => 'formID'
            ]) !!}
        @include('admin.users.form_user')

        {!! Form::close() !!}
        @else
            {!! Form::open(array('url'=>'/admin/user/create','method'=>'POST','files'=>'true')) !!}
            @include('admin.users.form_user')
            {{--</form>--}}
            {!! Form::close() !!}
        @endif
    </div>
@stop