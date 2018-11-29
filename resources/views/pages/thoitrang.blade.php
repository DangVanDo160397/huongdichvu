@extends('layout.index')
@section('content')
    <section class="resort-overview-block">
        <div class="container">
            <div class="row">
                @foreach($product as $pr)
                    @if($pr->category->category_parent_id == 2)
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a><img src="upload/product/{{$pr->product_image}}" class="img-responsive" alt="image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a>{{$pr->product_name}}</a></h3>
                                    <p>{!! $pr->product_description !!}</p>
                                    <div class="links"><a href="thoitrang/{{$pr->product_id}}/{{$pr->product_slug_name}}.html">Đọc thêm</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection