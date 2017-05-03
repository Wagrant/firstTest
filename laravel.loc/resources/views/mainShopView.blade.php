@extends('layouts.app')

@section('content')

		@foreach ($showFullArmor as $full)
		<div id="slider">
			<ul>
				<li style="background-image: url(images/{{$full->image_name}}.jpg)">
					<h3 style="text-shadow: 2px 1px 2px #f70e0e, 0 0 1em #f5f90d;">{{$full->first_reply}}</h3>
					<h2 style="text-shadow: 2px 1px 2px #3ee015, 0 0 1em #e81f1f;">{{$full->second_reply}}</h2>
				</li>
			</ul>
		</div>
		@endforeach

<div class="modal" id="modal-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"></h4>
      </div>

      <div class="modal-body">
        <div class="form-group" style="margin: 20px;">
        <image class="popUpImage" src=""></image>
        <p class="desc" style="float:right;""></p>
        <h4>Price:</h4>
        <h4 class="price"> </h4>
          
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-success" type="button" data-dismiss="modal" test="" id="add"> Add to cart</button>
        <button class="btn btn-danger" type="button" data-dismiss="modal"> Close</button>
   	  </div>

	</div>
  </div>
</div>

	<div id="body">
	<div class="container">
		<div class="last-products">
			<h2>Last stuff from Forge</h2>

			<section class="products">
			@foreach($showProducts as $product)
					<article class="productMain">
					<h5 style="text-shadow: 2px 1px 2px #32f70e, 0 0 1em #f9230d;">{{"$product[product_name]"}}</h5>
					<img style='cursor:pointer;' class="test1" id="{{"$product[product_id]"}}" src="images/{{"$product[image_name]"}}.jpg" data-toggle="modal" data-target="#modal-1"> </img>
					<h3 class="prName" id="{{"$product[product_name]"}}"></h3>
					<h4 style="text-shadow: 2px 1px 2px #32f70e, 0 0 1em #f9230d; class="prPrice" id="{{"$product[price]"}}"> {{"$product[price]"}}</h4>
					<a style='cursor:pointer;' class="btn-add" idp="{{"$product[product_id]"}}" id="addToBasket">Add to cart</a>
				</article>
			@endforeach
			</section>

		</div>
	</div>
</div>
@endsection