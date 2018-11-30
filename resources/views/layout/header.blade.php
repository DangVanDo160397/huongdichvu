            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!--                            <a href="#"> </a>
                                                        <div class="info-block"><i class="fa fa-map"></i>701 Old York Drive Richmond USA.</div>-->
                        </div>
                        <div class="col-md-6">
                            <div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a href = "https://www.facebook.com/Adivosry123-431492724053679/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header--->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="home.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="{{route('pages.trangchu')}}"><span>advisory</span></a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="trang chủ" href="{{route('pages.trangchu')}}" class="active"><span>trang chủ</span></a></li>
                                            <li><a data-hover="bản tin tư vấn"  href="{{route('pages.tintuc')}}"><span>Bản tin tư vấn</span></a></li>
                                            <li><a data-hover="mỹ phẩm"  href="{{route('pages.mypham')}}"><span>Mỹ phẩm</span></a></li>
                                            <li><a data-hover="thời trang"  href="{{route('pages.thoitrang')}}"><span>Thời trang</span></a></li>
                                            <li><a data-hover="góp ý" href="{{route('pages.getgopy')}}"><span>Góp ý</span></a></li>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                @if(!Auth::check())
                                <div class="text-right"><a href="{{route('pages.dangnhap')}}"><button type="button" class="book-now-btn">Đăng nhập</button></a></div>
                                @else
                                    <ul>
                                        <li><strong>Hi </strong><a href="{{route('pages.thongtin')}}">{{Auth::user()->user_name}}</a><i class="fa fa-chevron-down" style="margin-left: 5px;" aria-hidden="true"></i></i>
                                            <ul class="menu-2">
                                                <li><a href="{{route('pages.matkhau')}}">Đổi mật khẩu</a></li>
                                                <li><a href="{{route('pages.getdangbai')}}">Đăng bài</a></li>
                                                <li><a href="{{route('pages.dangxuat')}}">Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </header>
            <!--end-->