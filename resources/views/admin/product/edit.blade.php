@extends('admin.layouts.index')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-11" style="padding-bottom:120px">
                    	@if(count($errors) > 0)
                    		<div class="alert alert-danger">
                    			@foreach($errors->all() as $err)
                    				{{$err}} <br>
                    			@endforeach
                    		</div>
                    	@endif
                            @if(session('loi'))
                                <div class="alert alert-danger">
                                    {{session('loi')}}
                                </div>
                            @endif
                        <form action="{{route('product.update',$product)}}" enctype="multipart/form-data" method="POST">
                        	{{csrf_field()}} {{method_field('PUT')}}
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="product_category_id">
                                    @foreach($category as $ca)
                                        <option
                                                @if($product->product_category_id == $ca->category_id)
                                                {{"selected"}}
                                                @endif
                                                value="{{$ca->category_id}}">{{$ca->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="product_name" value="{{$product->product_name}}" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="product_price" value="{{$product->product_price}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="product_quantity" value="{{$product->product_quantity}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <input class="form-control" name="product_note" value="{{$product->product_note}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Hiển thị</label>
                                <input class="form-control" name="product_enable" value="{{$product->product_enable}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="demo" name="product_description" class="form-control ckeditor" rows="5">{{$product->product_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>NCC</label>
                                <select class="form-control" name="product_provider_id">
                                    @foreach($provider as $prd)
                                        <option
                                                @if($product->product_provider_id == $prd->provider_id)
                                                {{"selected"}}
                                                @endif
                                                value="{{$prd->provider_id}}">{{$prd->provider_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea id="demo" name="product_content" class="form-control ckeditor" rows="5">{{$product->product_content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Ngày sản xuất</label>
                                <input class="form-control" name="product_manufacturing_date" value="{{$product->product_manufacturing_date}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Hạn sử dụng</label>
                                <input class="form-control" name="product_expiry_date" value="{{$product->product_expiry_date}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="changeImage" id="changeImage" />
                                <label>Sửa ảnh</label>
                                <p>
                                    <img height="300px"  src="upload/product/{{$product->product_image}}">
                                </p>
                                <input type="file" name="product_image" disabled  class="form-control image" />
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#changeImage").change(function() {
                if($(this).is(":checked"))
                {
                    $(".image").removeAttr('disabled');
                }
                else
                {
                    $(".image").attr('disabled','');
                }
            });
        });
    </script>
@endsection