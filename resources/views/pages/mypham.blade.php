@extends('layout.index')
@section('content')
	<section class="resort-overview-block">
		<div class="container">
			<div class="row">
				@foreach($product as $pr)
					@if($pr->category->category_parent_id == 1)
						<div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
							<div class="side-A">
								<div class="product-thumb">
									<div class="image">
										<a href="mypham/{{$pr->product_id}}/{{$pr->product_slug_name}}.html"><img src="{{$pr->product_image}}" class="img-responsive" alt="image"></a>
									</div>
								</div>
							</div>
							<div class="side-B">
								<div class="product-desc-side">
									<h3><a href="mypham/{{$pr->product_id}}/{{$pr->product_slug_name}}.html">{{$pr->product_name}}</a></h3>
									<p>{!!  $pr->product_description!!}</p>
									<div class="links"><a href="mypham/{{$pr->product_id}}/{{$pr->product_slug_name}}.html">Đọc thêm</a></div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					@endif
				@endforeach
			</div>
			<div class="text-center">
                {{$product->links()}}
            </div>
		</div>
	</section>
@endsection