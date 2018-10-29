@extends('admin.layouts.index')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
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
                        <form action="{{route('user.update',$user)}}" enctype="multipart/form-data" method="POST">
                        	{{csrf_field()}} {{method_field('PUT')}}
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="user_name" value="{{$user->user_name}}" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="user_email" value="{{$user->user_email}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="changePassword" id="changePassword" />

                                <label>Đổi mật khẩu</label>
                                <input type="password" class="form-control password" name="user_password" placeholder="Please Enter Category Name" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control password " name="user_passwordAgain" placeholder="Please Enter Category Name" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="user_image"  class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="user_address" value="{{$user->user_address}}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <input type="text" name="user_gender" value="{{$user->user_gender}}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Điện thoại</label>
                                <input type="text" name="user_phone" value="{{$user->user_phone}}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Tuổi</label>
                                <input type="text" name="user_age" value="{{$user->user_age}}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Chú ý</label>
                                <input type="text" name="user_note" value="{{$user->user_note}}" class="form-control" />
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
            $("#changePassword").change(function() {
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection