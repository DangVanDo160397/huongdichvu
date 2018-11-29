@extends('layout.index')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Góp ý
                            <small></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-6 " style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                @endforeach
                            </div>
                        @endif
                        <form action="{{route('pages.postgopy')}}" enctype="multipart/form-data" method="POST">
                             @if(session('thongbao'))
                                <div class="alert alert-danger">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input class="form-control" name="gopy_hoten" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Gmail</label>
                                <input class="form-control" name="gopy_email" placeholder="Vui lòng nhập thông tin" />
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea id="demo" name="gopy_noidung" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <span style="color: #ff4157;">Xin cảm ơn bạn đã góp ý!</span>
                            </div>
                            <button type="submit" class="btn btn-default">Gửi</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
    </div>
    <!-- end Page Content -->
@endsection
