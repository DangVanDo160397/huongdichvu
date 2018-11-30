@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chuyên gia
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Đại chỉ</th>
                                <th>Bằng Cấp</th>
                                <th>Mã Quyền</th>
                                <th>Parent</th>
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
                        	@foreach($expert as $ct)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ct->expert_id}}</td>
                                <td>{{$ct->expert_name}}
                                    <p><img width="100px" src="{{$ct->expert_image}}"></p>
                                </td>
                                <td>{{$ct->expert_address}}</td>
                                <td>{{$ct->expert_degree}}</td>
                                <td>{{$ct->expert_level}}</td>
                                <td>{{$ct->expert_parent_id}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{route('expert.show',$ct)}}">Chi tiết</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw" ></i><form action="{{route('expert.destroy',$ct)}}" onsubmit="return confirm('Bạn có muốn xóa không?');" style="display: inline-table;" method="POST">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <button type="submit" style="background: none;border: none;">Xóa</button>
                                </form></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('expert.edit',$ct)}}">Edit</a></td>
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