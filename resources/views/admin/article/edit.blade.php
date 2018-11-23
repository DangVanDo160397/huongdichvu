@extends('admin.layouts.index')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
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
                        <form action="{{route('article.update',$article)}}" enctype="multipart/form-data" method="POST">
                        	{{csrf_field()}} {{method_field('PUT')}}
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control" name="article_parent_id">
                                    @foreach($parent as $pr)
                                        <option
                                                @if($pr->parent_id == $article->article_parent_id)
                                                {{"selected"}}
                                                @endif
                                                value="{{$pr->parent_id}}">{{$pr->parent_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sản phẩm</label>
                                <select class="form-control" name="article_product_id">
                                    @foreach($product as $pr)
                                        <option
                                                @if($article->article_product_id == $pr->product_id)
                                                {{"selected"}}
                                                @endif
                                                value="{{$pr->product_id}}">{{$pr->product_name}}</option>
                                        <option value=""></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="article_title" value="{{$article->article_title}}" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="demo" name="article_description" class="form-control ckeditor" rows="5">{{$article->article_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea id="demo" name="article_content"  class="form-control ckeditor" rows="5">{{$article->article_content}}</textarea>
                            </div>
                            <div class="form-group">
                                 <input type="checkbox" name="changeImage" id="changeImage" />
                                <label>Ảnh</label>
                                 <p>
                                    <img height="300px"  src="upload/article/{{$article->article_image}}">
                                </p>
                                <input type="file" name="article_image" disabled value="{{$article->article_image}}" class="form-control image" />
                            </div>
                            <div class="form-group">
                                <label>Hiển thị</label>
                                <input type="text" name="article_enable" value="{{$article->article_enable}}" class="form-control" />
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
            $("#changeImage").change(function() {
                if($(this).is(":checked"))
                {
                    $(".image").removeAttr('disabled');
                }
                else
                {
                    $(".image").attr('disabled','');
                }
            });
        });
    </script>
@endsection