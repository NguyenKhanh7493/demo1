@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">TRANG QUẢN TRỊ</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li class="active">User</li>
                <li class="active">Create</li>
            </ol>
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