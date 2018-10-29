@extends('admin.layouts.index')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
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
                        <form action="{{route('user.store')}}" enctype="multipart/form-data" method="POST">
                        	{{csrf_field()}}
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="user_name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="user_email" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="user_password" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="user_image" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="user_address" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <input type="text" name="user_gender" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Điện thoại</label>
                                <input type="text" name="user_phone" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Tuổi</label>
                                <input type="text" name="user_age" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Chú ý</label>
                                <input type="text" name="user_note" class="form-control" />
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