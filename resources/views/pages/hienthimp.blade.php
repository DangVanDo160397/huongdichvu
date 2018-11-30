@extends('layout.index')
@section('content')
    <section class="blog">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-sm-8 col-xs-12 blog">
                    <h2 class="blog-title-head">{{$product->product_name}}</h2>
                    <hr>
                    <div class="blog-image-single margin-top-small">
                        <img src="{{$product->product_image}}" class="img-responsive">
                    </div>

                    <p class="blog-desc">{!!$product->product_content!!}</p>
                    <hr>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection