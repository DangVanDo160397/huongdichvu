@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chuyên gia</h1>
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
                <p>Tên Chuyên gia : {{$expert->expert_name}}</p>
                <p>Địa chỉ : {{$expert->expert_address}}</p>
                <p>Email :{{$expert->expert_email}}</p>
                <p><img width="300px" src="{{$expert->expert_image}}"></p>
            	<p>Ngày sinh : {{$expert->expert_birth}}</p>
                <p>Thông tin bằng cấp : {{$expert->expert_degree}}</p>
                <p>Parent : {{$expert->expert_parent_id}}</p>
            </div>
            <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection