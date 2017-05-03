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
						<img src="images/{{$product->image_name}}.jpg"></img>
						<h3>{{$product->product_name}}</h3>
						<h4>{{$product->price}}</h4>
						<a href="#" class="btn-add">Add to cart</a>
					</article>
				@endforeach
				</section>
			</div>

	<div id="body">
		<div class="container">
			<div class="pagination">
				<ul>

				<div class="container">
				<ul class="pagination">
					@foreach ($showProducts as $product):
    				{{$product->product_name}}
    				@endforeach
    				$showProducts->render(); ?>
				</ul>
					<li><a href="#"><span class="ico-prev"></span></a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><span class="ico-next"></span></a></li>
				</div>
				</ul>
			</div>
		</div>
	</div>

@endsection