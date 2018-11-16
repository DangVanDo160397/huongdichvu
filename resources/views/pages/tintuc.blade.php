@extends('layout.index')
@section('content')
    <section class="resort-overview-block">
        <div class="container">
            <div class="row">
                @foreach($article as $ar)
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
                @endforeach
            </div>
        </div>
    </section>
@endsection