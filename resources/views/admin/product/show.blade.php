@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản phẩm</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <div class="row">
                <p>Tên sản phẩm : {{$product->product_name}}</p>
                <p>Tên không dấu : {{$product->product_slug_name}}</p>
                <p>Giá sản phẩm : {{$product->product_price}}</p>
                <p>Số lượng sản phẩm :{{$product->product_quantity}}</p>
                <p><img width="300px" src="upload/product/{{$product->product_image}}"></p>
            	<p>Id Thể loại : {{$product->product_category_id}}</p>
                <p>Note : {{$product->product_note}}</p>
                <p>Hiển thị : {{$product->product_enable}}</p>
                <p>Mô tả : {{$product->product_description}}</p>
                <p>Mã nhà cung cấp : {{$product->product_provider_id}}</p>
                <p>Thông tin sản phẩm : {{$product->product_content}}</p>
                <p>Ngày sản xuất : {{$product->product_manufacturing_date}}</p>
                <p>Hạn sử dụng : {{$product->product_expiry_date}}</p>
            </div>
            <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection