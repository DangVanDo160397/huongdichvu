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
                                                <p>{!!$ar->article_description!!}</p>
                                                <div class="links"><a href="tintuc/{{$ar->article_id}}/{{$ar->article_slug_name}}.html">Đọc thêm</a></div>
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
                                            <div class="links"><a href="tintuc/{{$ar->article_id}}/{{$ar->article_slug_name}}.html">Đọc thêm</a></div>
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
@endsection