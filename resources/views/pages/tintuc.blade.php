@extends('layout.index')
@section('content')
    <section class="blog">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-sm-8 col-xs-12">
                    <h2 class="blog-title-head">{{$article->article_title}}</h2>
                    <p class="blog-desc">{!!$article->article_description!!}</p>
                    <hr>
                    <div class="blog-image-single margin-top-small">
                        <img src="{{$article->article_image}}" class="img-responsive">
                    </div>

                    <p class="blog-desc">{!!$article->article_content!!}</p>
                    <hr>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
@endsection