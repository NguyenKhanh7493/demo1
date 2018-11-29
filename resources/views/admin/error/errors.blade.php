@extends('layouts.backend.index')
@section('content')
            <div class="error-content" style="margin-top: 100px;">
                <h1 style="text-align: center; color: red">Rất tiếc đã xảy ra lỗi</h1>
                <h2 style="text-align: center;">@if(isset($error_message['name'])) {{ $error_message['name'] }} @endif</h2>
                <h3 class="red" style="text-align: center;">@if(isset($error_message['title'])){{ $error_message['title'] }} @endif</h3>
                <h4 style="text-align: center;">@if(isset($error_message['description'])) {{ $error_message['description'] }} @endif</h4>
                <p style="text-align: center;">@if(isset($error_message['content'])) {{ $error_message['content'] }} @endif</p>
                <div class="btns-center" style="text-align: center;"><a href="{{ route('admin') }}"><button class="btn-h5" style="color: red"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Back home</button></a></div>
            </div>
@stop