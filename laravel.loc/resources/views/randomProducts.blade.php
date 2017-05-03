@section('content')
	<nav id="menu">
		<div class="container">
			<div class="trigger"></div>
			<ul>
				<li><a href="products.html">New collection</a></li>
				<li><a href="products.html">necklaces</a></li>
				<li><a href="products.html">earrings</a></li>
				<li><a href="products.html">Rings</a></li>
				<li><a href="products.html">Gift cards</a></li>
				<li><a href="products.html">Promotions</a></li>
			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Product page</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div id="content" class="full">
				<div class="product">
					<div class="image">
						<img src="images/copper sword.jpg" alt="">
					</div>
					<div class="details">
						<h1>Lorem ipsum dolor</h1>
						<h4>$990.00</h4>
						<div class="entry">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<div class="tabs">
								<div class="nav">
									<ul>
										<li class="active"><a href="#desc">Description</a></li>
										<li><a href="#spec">Specification</a></li>
										<li><a href="#ret">Returns</a></li>
									</ul>
								</div>
								<div class="tab-content active" id="desc">
									
								</div>
							</div>
						</div>
						<div class="actions">
							<label>Quantity:</label>
							<select><option>1</option></select>
							<a href="#" class="btn-grey">Add to cart</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection