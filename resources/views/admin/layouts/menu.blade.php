<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('category.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Thể loại<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('category.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('category.create')}}">Thêm thể loại</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('provider.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i> NCC<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('provider.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('provider.create')}}">Thêm nhà cung cấp</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('role.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý quyền<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('role.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('role.create')}}">Thêm quyền</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('product.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('product.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('product.create')}}">Thêm sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('user.index')}}"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('user.index')}}">Danh sách User</a>
                                </li>
                                <li>
                                    <a href="{{route('user.create')}}">Thêm User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('article.index')}}"><i class="fa fa-users fa-fw"></i>Bài viết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('article.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('article.create')}}">Thêm bài viết</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('expert.index')}}"><i class="fa fa-users fa-fw"></i>Chuyên gia<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('expert.index')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('expert.create')}}">Thêm chuyên gia</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('question.index')}}"><i class="fa fa-users fa-fw"></i>Câu hỏi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('question.index')}}">Danh sách câu hỏi</a>
                                </li>
                                <li>
                                    <a href="{{route('question.create')}}">Thêm câu hỏi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('slide.index')}}"><i class="fa fa-users fa-fw"></i>Slide<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('slide.index')}}">Danh sách Slide</a>
                                </li>
                                <li>
                                    <a href="{{route('slide.create')}}">Thêm Slide</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('parent.index')}}"><i class="fa fa-users fa-fw"></i>Thể loại gốc<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('parent.index')}}">Danh sách </a>
                                </li>
                                <li>
                                    <a href="{{route('parent.create')}}">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>