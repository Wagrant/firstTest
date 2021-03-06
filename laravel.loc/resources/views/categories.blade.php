@extends('layouts.app')

@section('content')

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="main">Home</a></li>
				<li>All stuff</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

<div class="products-wrap">
	<aside id="sidebar">
		<div class="widget">
			<h2>Matherials</h2>
			<fieldset>
			@foreach($showMatherials as $product)
			<article>
				<h3 style='cursor:pointer;'> {{$product->matherial_name}} </h3>;
			</article>
			@endforeach
			</fieldset>
		</div>
	</aside>

	<section class="products">
	@foreach($showProducts as $product)
		<article>
			<img width="154" height="226" style='cursor:pointer;' class="testApp" id="{{"$product->product_id"}}" src="images/{{$product->image_name}}.jpg"></img>
			<h3>{{$product->product_name}}</h3>
			<h4><img width="40" height="25" src="images/coin.jpg"></img>{{$product->price}}</h4>
			<a style='cursor:pointer;' idp="{{$product->product_id}}" id="addToBasket" class="btn-add">Add to cart</a>
		</article>
	@endforeach
	</section>
</div>

	<div  class="text-center">{{$showProducts->links()}}</div>

@endsection