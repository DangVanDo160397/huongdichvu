@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
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
                <p><img width="300px" src="upload/article/{{$article->article_image}}"></p>
                <p>Tiêu đề : {{$article->article_title}}</p>
                <p>Tên không dấu : {{$article->article_slug_name}}</p>
                <p>Mô tả : {{$article->article_description}}</p>
                <p>Nội Dung :{{$article->article_content}}</p>
            	<p> Mã sản phẩm : {{$article->article_product_id}}</p>
                <p>Hiển thị : {{$article->article_enable}}</p>
            </div>
            <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection