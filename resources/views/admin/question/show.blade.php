@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Câu hỏi</h1>
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
                <p>Mã người hỏi : {{$question->question_user_id}}</p>
                <p>Mã chuyên gia : {{$question->question_expert_id}}</p>
                <p>Parent : {{$question->question_parent_id}}</p>
            	<p>Câu hỏi : {{$question->question_name}}</p>
                <p>Trả lời : {{$question->question_content}}</p>
            </div>
            <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection