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
						<tr class="test">
							@foreach($showOrder as $order)
								<td class="items">
									<div class="image">
										<img src="images/{{$order->image_name}}.jpg">
									</div>
									<h3><a href="#">{{$order->product_name}}</a></h3>
									<p>{{$order->description}}</p>
								</td>
								<td class="price">{{$order->price}}</td>
								<td class="qnt"><select><option>1</option><option>2</option></select></td>
								<td class="total">{{$order->price}}</td>
								<td class="delete"><a style='cursor:pointer;' class="ico-del" id="{{"$order->product_id"}}"></a></td>
							</tr>
							@endforeach
					</table>
				</div>

				<div class="total-count">
					<h4>Subtotal: 100.00</h4>
					<p>Just because we are awsome: 77.77</p>
					<h3>Total to pay: <strong> 177.77</strong></h3>
					<a href="#" class="btn-grey">Finalize and pay</a>
				</div>
		
			</div>
		</div>
	</div>

@endsection