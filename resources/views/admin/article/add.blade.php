@extends('admin.layouts.index')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài Viết
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
                        <form action="{{route('article.store')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        	<div class="form-group">
                                <label>Sản phẩm</label>
                                <select class="form-control" name="article_product_id">
                                    @foreach($product as $pr)
                                        <option value=""></option>
                                        <option value="{{$pr->product_id}}">{{$pr->product_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="article_title" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="demo" name="article_description" class="form-control ckeditor" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea id="demo" name="article_content" class="form-control ckeditor" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="article_image" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Hiển thị</label>
                                <input type="text" name="article_enable" class="form-control" />
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