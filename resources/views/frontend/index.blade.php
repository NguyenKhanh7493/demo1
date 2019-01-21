@extends('layouts.frontend.index')
@section('content')
@include('frontend.sub_index.banner')
@include('frontend.sub_index.best_sale')
<!---->
<div class="content-page">
    <div class="container">

        @include('frontend.sub_index.bestseller')

        @include('frontend.sub_index.hot_product')

        @include('frontend.sub_index.new_product')

        @include('frontend.sub_index.banner_bottom')

    </div>
</div>

@stop