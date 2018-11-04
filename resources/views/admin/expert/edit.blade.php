@extends('admin.layouts.index')
@section('content')
	<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chuyên gia
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
                        <form action="{{route('expert.update',$expert)}}" enctype="multipart/form-data" method="POST">
                        	{{csrf_field()}} {{method_field('PUT')}}
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="expert_name" value="{{$expert->expert_name}}" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="expert_address" value="{{$expert->expert_address}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input class="form-control" name="expert_birth" value="{{$expert->expert_birth}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="expert_email" value="{{$expert->expert_email}}" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Bằng cấp</label>
                                <textarea id="demo" name="expert_degree" class="form-control ckeditor" rows="5">{{$expert->expert_degree}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="expert_image" value="{{$expert->expert_image}}"  class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control" name="expert_parent_id">
                                    @foreach($parent as $pr)
                                        <option
                                                @if($pr->parent_id == $expert->expert_parent_id)
                                                {{"selected"}}
                                                @endif
                                                value="{{$pr->parent_id}}">{{$pr->parent_name}}</option>
                                    @endforeach
                                </select>
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