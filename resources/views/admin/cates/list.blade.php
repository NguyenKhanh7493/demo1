@extends('layouts.backend.index')
{{--<link href="{!! url('public/admin/') !!}/plugins/bower_components/nestable/nestable.css" rel="stylesheet" type="text/css" />--}}
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Data Table</h3>
                <p class="text-muted m-b-30">Data table example</p>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>menu cha</th>
                            <th>Hiển thị</th>
                            <th>tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cate as $item)
                        <tr id="{{ $item->id }}">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                @if($item['parent_id'] == 0)
                                    {{ $item->name }}
                                @else
                                    <?php
                                    $parent = DB::table('cates')->where('id',$item["parent_id"])->first();
                                    echo $parent->name;
                                    ?>
                                @endif
                            </td>
                            <td>
                                @if($item->menu_top == 1)
                                    {{ 'menu_top' }} .</br>
                                @endif
                                @if($item->menu_right == 1)
                                    {{ 'menu_right' }} .</br>
                                @endif
                                    @if($item->footer == 1)
                                        {{ 'footer' }}
                                    @endif
                            </td>
                            <td>
                                <a href="{{ route('editCate',$item->id) }}" id="editItem"><i class="ti-pencil text-success"></i></a> |
                                <a href="javascript:void(0)" class="delCate" data-msg="Bạn muốn xóa?" data-id="{{ $item->id }}" data-token="{{ csrf_token() }}"><i class="ti-trash text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop