@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý quyền
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="col-lg-7" style="padding-bottom:120px">
                    	@if(count($errors) > 0)
                    		<div class="alert alert-danger">
                    			@foreach($errors->all() as $err)
                    				{{$err}} <br>
                    			@endforeach
                    		</div>
                    	@endif
                        <form action="{{route('slide.store')}}" method="POST" enctype="multipart/form-data">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}" >
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="slide_name" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="slide_image" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Link ảnh</label>
                                <input class="form-control" name="slide_link" placeholder="Vui lòng nhập thông tin" />
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
@endsection