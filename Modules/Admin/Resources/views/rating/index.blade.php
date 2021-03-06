@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Đánh giá</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h3>Quản lí đánh giá</h3>
        <table class="table table-striped ">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên TV</th>
                <th>Sản phẩm</th>
                <th>Nội dung</th>
                <th>Đánh giá</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>

            @if(isset($ratings))
                @foreach($ratings as $rating)
                    <tr>
                        <td>{{ $rating->id }}</td>
                        <td>{{ isset($rating->user->name) ? $rating->user->name : '[N\A]' }}</td>
                        <td><a href="">{{ isset($rating->product->pro_name) ? $rating->product->pro_name : '[N\A]' }}</a></td>
                        <td>{{ $rating->ra_content }}</td>
                        <td>{{ $rating->ra_number }}</td>
                        <td>
                            <a href="" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>
@stop
