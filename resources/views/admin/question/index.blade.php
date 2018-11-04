@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý câu hỏi
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Mã người hỏi</th>
                                <th>Mã chuyên gia</th>
                                <th>Parent</th>
                                <th>Câu hỏi</th>
                                <th>Trả lời</th>
                                <th>Chi tiết</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                         @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <tbody>
                        	@foreach($question as $qu)
                            <tr class="odd gradeX" align="center">
                                <td>{{$qu->question_id}}</td>
                                <td>{{$qu->question_user_id}}</td>
                                <td>{{$qu->	question_expert_id}}</td>
                                <td>{{$qu->question_parent_id}}</td>
                                <td>{{$qu->question_name}}</td>
                                <td>{{$qu->question_content}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('question.show',$qu)}}">Chi tiết</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw" ></i><form action="{{route('question.destroy',$qu)}}" onsubmit="return confirm('Bạn có muốn xóa không?');" style="display: inline-table;" method="POST">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <button type="submit" style="background: none;border: none;">Xóa</button>
                                </form></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('question.edit',$qu)}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection