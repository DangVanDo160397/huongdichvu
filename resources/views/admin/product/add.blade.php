@extends('admin.layouts.index')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Thêm</small>
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
                        <form action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control" name="category_parent_id" id="parent">
                                    @foreach($parent as $pr)
                                        <option value="{{$pr->parent_id}}">{{$pr->parent_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        	<div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="product_category_id" id="category">
                                    @foreach($category as $ca)
                                        <option value="{{$ca->category_id}}">{{$ca->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="product_name" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="product_price" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="product_quantity" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <input class="form-control" name="product_note" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Hiển thị</label>
                                <input class="form-control" name="product_enable" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="demo" name="product_description" class="form-control ckeditor" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>NCC</label>
                                <select class="form-control" name="product_provider_id">
                                    @foreach($provider as $prd)
                                        <option value="{{$prd->provider_id}}">{{$prd->provider_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea id="demo" name="product_content" class="form-control ckeditor" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ngày sản xuất</label>
                                <input class="form-control" name="product_manufacturing_date" placeholder="Vui lòng nhập ngày sản xuất" />
                            </div>
                            <div class="form-group">
                                <label>Hạn sử dụng</label>
                                <input class="form-control" name="product_expiry_date" placeholder="Vui lòng nhập hạn sử dụng" />
                            </div>
                            <div class="form-group">
                                <label>Link Ảnh</label>
                                <input type="tẽ" name="product_image" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
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
            $("#parent").change(function() {
                var category_parent_id = $(this).val();
                $.get('admin/ajax/category/'+category_parent_id,function(data) {
                    $("#category").html(data);
                });
            });
        });
    </script>
@endsection