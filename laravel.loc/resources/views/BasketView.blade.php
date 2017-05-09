@extends('layouts.app')

@section('content')

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="main">Home</a></li>
				<li>Basket</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="container">
			<div id="content" class="full">
				<div class="cart-table">
					<table>
						<tr>
							<th class="items">Items</th>
							<th class="price">Price</th>
							<th class="qnt">Quantity</th>
							<th class="total">Total</th>
							<th class="delete"></th>
						</tr>
							@foreach($showOrder as $order)
						<tr class="test" id="{{"$order->product_id"}}"> 
								<td class="items">
									<div class="image">
										<img src="images/{{$order->image_name}}.jpg">
									</div>
									<h3><a href="#">{{$order->product_name}}</a></h3>
									<p>{{$order->description}}</p>
								</td>
								<td class="price"></img>{{$order->price}}</td>
								<td class="qnt"><select><option>1</option><option>2</option></select></td>
								<td class="total"></img>{{$order->price}}</td>
								<td class="delete"><a style='cursor:pointer;' class="ico-del" id="{{"$order->product_id"}}"></a></td>
							</tr>
							@endforeach
					</table>
				</div>

				<div class="total-count">
					<h4> Congratulations</h4>
					<h3>Total to pay: <strong><img width="40" height="25" src="images/coin.jpg"></img> {{round($showPrice, 2)}}</strong></h3>
					<a style='cursor:pointer;' class="btn-grey">Finalize and pay</a>
				</div>
		
			</div>
		</div>
	</div>

@endsection