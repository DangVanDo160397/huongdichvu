@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">NCC
                            <small>Sửa</small>
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
                        <form action="{{route('provider.update',$provider)}}" method="POST">
                        	{{ csrf_field()}} {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Tên NCC</label>
                                <input class="form-control" name="provider_name" value="{{$provider->provider_name}}" placeholder="Mời nhập tên thể loại" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="provider_address" value="{{$provider->provider_address}}" placeholder="Mời nhập tên thể loại" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="provider_phone" value="{{$provider->provider_phone}}" placeholder="Mời nhập tên thể loại" />
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
@endsection