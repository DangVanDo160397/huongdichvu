@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý Slide</h1>
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
            	<p>Tiêu đề : {{$slide->slide_name}}</p>
                <p>Image :<img width="300px" src="{{$slide->slide_image}}"></p>
                <p>Link ảnh : {{$slide->slide_link}}</p>
            </div>
            <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection