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
<!----resort-overview--->
                <section class="resort-overview-block">
                    <div class="container">
                        <div class="row">
                            @foreach($article_mypham as $ar)
                                @if($ar->article_parent_id == 1)
                                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right padd-right">
                                        <div class="side-A">
                                            <div class="product-thumb">
                                                <div class="image">
                                                    <a href="tintuc/{{$ar->article_id}}/{{$ar->article_slug_name}}.html"><img src="{{$ar->article_image}}" class="img-responsive" alt="image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="side-B">
                                            <div class="product-desc-side">
                                                <h3><a href="tintuc/{{$ar->article_id}}/{{$ar->article_slug_name}}.html">{{$ar->article_title}}</a></h3>
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
                        @foreach($article_thoitrang as $ar)
                            @if($ar->article_parent_id == 2)
                                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                                    <div class="side-A">
                                        <div class="product-thumb">
                                            <div class="image">
                                                <a href="tintuc/{{$ar->article_id}}/{{$ar->article_slug_name}}.html"><img src="{{$ar->article_image}}" class="img-responsive" alt="image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="side-B">
                                        <div class="product-desc-side">
                                            <h3><a href="tintuc/{{$ar->article_id}}/{{$ar->article_slug_name}}.html">{{$ar->article_title}}</a></h3>
                                            <p>{!! $ar->article_description !!}</p>
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
                                <a href="#"><img class="img-responsive" style="width: 150px;" src="{{$pr->product_image}}"></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
@endsection