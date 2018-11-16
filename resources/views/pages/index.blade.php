@extends('layout.index')
@section('content')
<!-- ---- -->
            <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"> <img src="images/3.jpg" style="width:100%;" alt="First slide">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item"> <img src="images/3.jpg" style="width:100%;" alt="Second slide">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                    <div class="item"> <img src="images/3.jpg" style="width:100%;" alt="Third slide">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                    <div class="item"> <img src="images/1.jpg" style="width:100%;" alt="Third slide">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

            </div>
            <div class="clearfix"></div>

            <!--service block--->
            <section class="service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <a href="cauhoi.html"><img alt="image" class="img-responsive" src="images/icons/user.png"></a>
                                </div>
                                <h4><a href="cauhoi.html">tư vấn mỹ phẩm</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <a href="cauhoi.html"><img alt="image" class="img-responsive" src="images/icons/user.png"></a>
                                </div>
                                <h4><a href="cauhoi.html">tư vấn thời trang</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/wifi.png">
                                </div>
                                <h4><a>đánh giá</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/car.png">
                                </div>
                                <h4><a>liên hệ</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!----resort-overview--->
                <section class="resort-overview-block">
                    <div class="container">
                        <div class="row">
                            @foreach($article as $ar)
                                @if($ar->article_parent_id == 1)
                                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                                        <div class="side-A">
                                            <div class="product-thumb">
                                                <div class="image">
                                                    <a><img src="upload/article/{{$ar->article_image}}" class="img-responsive" alt="image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="side-B">
                                            <div class="product-desc-side">
                                                <h3><a>{{$ar->article_title}}</a></h3>
                                                <p>{{$ar->article_description}}</p>
                                                <div class="links"><a href="single.html">Đọc thêm</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                @endif
                            @endforeach
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </section>

            <!-----blog slider----->

            <!--offer block-->
            <section class="vacation-offer-block">
                <div class="vacation-offer-bgbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="vacation-offer-details">
                                    <h1>Tư vấn thời trang</h1>
                                    <h4>Một số xu hướng thời trang hiện nay.</h4>
                                    <button type="button" class="btn btn-default">Choose a package</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End-->

            <!----resort-overview--->
            <section class="resort-overview-block">
                <div class="container">
                    <div class="row">
                        @foreach($article as $ar)
                            @if($ar->article_parent_id == 2)
                                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                                    <div class="side-A">
                                        <div class="product-thumb">
                                            <div class="image">
                                                <a><img src="upload/article/{{$ar->article_image}}" class="img-responsive" alt="image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="side-B">
                                        <div class="product-desc-side">
                                            <h3><a>{{$ar->article_title}}</a></h3>
                                            <p>{{$ar->article_description}}</p>
                                            <div class="links"><a href="single.html">Đọc thêm</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            @endif
                        @endforeach
                        <div class="clearfix"></div>

                    </div>
                </div>
            </section>
            <!--gallery block--->
            <section class="gallery-block gallery-front">
                <div class="container">
                    <div class="row">
                        @foreach($product as $pr)
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="upload/product/{{$pr->product_image}}">
                                <div class="overlay">
                                    <a class="info pop example-image-link img-responsive" href="images/room1.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <p><a>delux room</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>


            <!-----blog slider----->
            <!--blog trainer block-->
            <section class="blog-block-slider">
                <div class="blog-block-slider-fix-image">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <div class="container">
                            <!-- Wrapper for slides -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                                <li data-target="#myCarousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="blog-box">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client1.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Walter Hucko</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client2.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Jules Boutin</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client3.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Attilio Marzi</h3>
                                                <h5 class="blog-rev">Satisfied Customer</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>

            <!---blog block--->
            <section class="blog-block">
                <div class="container">
                    <div class="row offspace-45">
                        <div class="view-set-block">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="event-blog-image">
                                    <img alt="image" class="img-responsive" src="images/t1.jpg">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                                <div class="event-blog-details">
                                    <h4><a href="single.html">Lorem ipsum dolor sit amet</a></h4>
                                    <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                                    <a class="btn btn-default" href="single.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row offspace-45">
                        <div class="view-set-block">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="event-blog-image">
                                    <img alt="image" class="img-responsive" src="images/t2.jpg  ">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                                <div class="event-blog-details">
                                    <h4><a href="single.html">Lorem ipsum dolor sit amet</a></h4>
                                    <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                                    <a class="btn btn-default" href="single.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ------ -->

@endsection