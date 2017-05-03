@extends('layouts.app')

@section('content')

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="main">Home</a></li>
				<li>Helms</li>
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

			<div class="products-wrap">
				<section class="products">
				@foreach($showHelms as $product)
					<article>
						<img src="images/{{$product->image_name}}.jpg"></img>
						<h3>{{$product->product_name}}</h3>
						<h4>{{$product->price}}</h4>
						<a href="#" class="btn-add">Add to cart</a>
					</article>
				@endforeach
				</section>
			</div>
			</div>

	<div id="body">
		<div class="container">
			<div class="pagination">
				<ul>
					<li><a href="#"><span class="ico-prev"></span></a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><span class="ico-next"></span></a></li>
				</ul>
			</div>
		</div>
	</div>

@endsection