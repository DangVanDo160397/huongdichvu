@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý câu hỏi
                            <small>Thêm</small>
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
                        <form action="{{route('question.store')}}" method="POST">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Người hỏi</label>
                                <select class="form-control" name="question_user_id">
                                    @foreach($user as $ur)
                                        <option value="{{$ur->user_id}}">{{$ur->user_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Người trả lời</label>
                                <select class="form-control" name="question_expert_id">
                                    @foreach($expert as $ex)
                                        <option value="{{$ex->expert_id}}">{{$ex->expert_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Câu hỏi</label>
                                <textarea id="demo" name="question_name" class="form-control ckeditor" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Trả lời</label>
                                <textarea id="demo" name="question_content" class="form-control ckeditor" rows="5"></textarea>
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
@endsection