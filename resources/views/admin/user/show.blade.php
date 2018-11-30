@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Người dùng</h1>
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
                <p>Tên người dùng : {{$user->user_name}}</p>
                <p>Email : {{$user->user_email}}</p>
                <p>Địa chỉ : {{$user->user_address}}</p>
                <p>Image :<img width="300px" src="{{$user->user_image}}"></p>
                <p>Quyền : {{$user->user_level}}</p>
                <p>Giới tính : {{$user->user_gender}}</p>
                <p>Số điện thoại : {{$user->user_phone}}</p>
                <p>Tuổi : {{$user->user_age}}</p>
                <p>Note : {{$user->user_note}}</p>
            </div>
            <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection