@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Ảnh</th>
                                <th>Quyền</th>
                                <th>Giới tính</th>
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
                        	@foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$us->user_id}}</td>
                                <td>{{$us->user_name}}</td>
                                <td>{{$us->user_email}}</td>
                                <td><p><img width="100px" src="upload/user/{{$us->user_image}}"></p></td>
                                <td>{{$us->user_level}}</td>
                                <td>{{$us->user_gender}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('user.show',$us)}}">Chi tiết</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw" ></i><form action="{{route('user.destroy',$us)}}" onsubmit="return confirm('Bạn có muốn xóa không?');" style="display: inline-table;" method="POST">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <button type="submit"
                                            @if(Auth::user()->user_level > 2)
                                                    {{"disabled"}}
                                            @endif
                                            style="background: none;border: none;">Xóa</button>
                                </form></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a  href="{{route('user.edit',$us)}}">Edit</a></td>
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