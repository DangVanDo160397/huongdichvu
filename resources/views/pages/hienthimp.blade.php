@extends('layout.index')
@section('content')
    <section class="blog">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-sm-8 col-xs-12">
                    <h2 class="blog-title-head">{{$product->product_name}}</h2>
                    <hr>
                    <p class="user-info">Posted by <a>Admin</a> in <a>General</a> | <a>10 Comments</a></p>
                    <div class="blog-image-single margin-top-small">
                        <img src="upload/product/{{$product->product_image}}" class="img-responsive">
                    </div>

                    <p class="blog-desc">{!!$product->product_content!!}</p>
                    <hr>
                    <div class="clearfix"></div>
                    <div class="single-bottom comment-form">
                        <h3>Leave your Comment</h3>
                        <form action="#" method="post">
                            <input type="text" class="form-control" name="Name" placeholder="Name" required="">
                            <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                            <textarea class="form-control" name="Message" placeholder="Message Here...." required=""></textarea>
                            <input type="submit" class="submit-btn" value="Send">
                        </form>
                    </div>
                </div>
                <aside class="col-md-3 col-sm-4 col-xs-12">
                    <div class="blog-list">
                        <h4>Categories</h4>
                        <ul>
                            <li><a><i class="fa fa-caret-right"> </i>Lorem Ipsum is simply</a></li>
                            <li><a><i class="fa fa-caret-right"> </i>Contrary to popular belief</a></li>
                            <li><a><i class="fa fa-caret-right"> </i>It is a long established</a></li>
                            <li><a><i class="fa fa-caret-right"> </i>There are many variations</a></li>
                            <li><a><i class="fa fa-caret-right"> </i>But I must explain to you</a></li>
                            <li><a><i class="fa fa-caret-right"> </i>At vero eos et accusamus</a></li>
                            <li><a><i class="fa fa-caret-right"> </i>On the other hand</a></li>
                        </ul>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="blog-list1">
                        <h4>Popular Posts</h4>
                        <div class="blog-list-top">
                            <div class="blog-img">
                                <a><img class="img-responsive" src="images/Home/img1.jpg" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                                <span class="link">
                                            Sep 14, 2016
                                        </span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="blog-list-top">
                            <div class="blog-img">
                                <a><img class="img-responsive" src="images/Home/img3.jpg" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                                <span class="link">
                                            Sep 14, 2016
                                        </span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="blog-list-top">
                            <div class="blog-img">
                                <a><img class="img-responsive" src="images/Home/img4.jpg" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                                <span class="link">
                                            Sep 14, 2016
                                        </span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="blog-list-top">
                            <div class="blog-img">
                                <a><img class="img-responsive" src="images/Home/img5.jpg" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                                <span class="link">
                                            Sep 14, 2016
                                        </span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection