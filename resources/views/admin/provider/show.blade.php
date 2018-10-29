@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">NCC</h1>
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
            	<p>Tên NCC : {{$provider->provider_name}}</p>
                <p>Địa chỉ : {{$provider->provider_address}}</p>
                <p>Số điện thoại : {{$provider->provider_phone}}</p>
            </div>
            <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection