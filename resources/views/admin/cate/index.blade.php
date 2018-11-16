@extends('admin.layouts.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Tên không dấu</th>
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
                        	@foreach($cate as $tl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tl->category_id}}</td>
                                <td>{{$tl->category_name}}</td>
                                <td>{{$tl->category_slug_name}}</td>
                                <td>{{$tl->category_parent_id}}</td>
                               <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{route('category.show',$tl)}}">Chi tiết</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw" ></i><form action="{{route('category.destroy',$tl)}}"  style="display: inline-table;" method="POST" onsubmit="return confirm('Bạn có muốn xóa không?');">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <button  type="submit" style="background: none;border: none;">Xóa</button>
                                </form></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('category.edit',$tl)}}">Edit</a></td>
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
@section('script')
    function alert() {
        if(confirm("Bạn có muốn xóa không?"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
@endsection