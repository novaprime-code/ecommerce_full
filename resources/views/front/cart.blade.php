@extends('front.layout.layout')


@section('content')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
				  <th>Select</th>
                  <th>QuantityUpdate</th>
				  <th>Price</th>
                  {{-- <th>Discount</th>
                  <th>Tax</th> --}}
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
				@php
					$sum =0;
					@endphp
				@foreach($carts as $cart)
				@php
					
					$sum = $sum + $cart->product->price*$cart->qty;
				@endphp
                <tr>
                  <td>
					 <img width="60" src="{{asset('uploads/products/'.$cart->product->image)}}" alt=""/>
				</td>
                  <td>{{$cart->product->name}}</td>
                  <td>
					<input class="span1" style="" type="checkbox" name="select_product[]">

				  </td>
				  <td>
					<div class="input-append">
						<input class="span1" style="max-width:34px" placeholder="1"  size="16" type="number" value="{{$cart->qty}}" >
						<button class="btn" type="button"><i class="icon-minus"></i></button>
						<button class="btn" type="button"><i class="icon-plus"></i></button>
						<button class="btn_close btn btn-danger " type="button" data-id="{{$cart->id}}"><i class="icon-remove icon-white"></i></button>			
					</div>
				  </td>
                  <td>NPR. {{$cart->product->price}}</td>
                  {{-- <td>$25.00</td>
                  <td>$15.00</td> --}}
                  <td>NPR. {{$cart->product->price*$cart->qty}}</td>
                </tr>
				@endforeach()
				
                <tr>
                  <td colspan="4" style="text-align:right">Total Price (A) :	</td>
                  <td> NPR. {{$sum}}</td>
                </tr>
				 <tr>
                  <td colspan="4" style="text-align:right">Total Discount (B) :	</td>
                  <td> 0.00</td>
                </tr>
                 <tr>
                  <td colspan="4" style="text-align:right">Total Tax (C) :	</td>
                  <td> {{$sum*0.13}}</td>
                </tr>
				 <tr>
                  <td colspan="4" style="text-align:right"><strong>TOTAL (A - B + C) = </strong></td>
                  <td class="label label-important" style="display:block"> <strong> {{$sum*1.13}} </strong></td>
                </tr>
				</tbody>
            </table>
		
		
          
			
				
	<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	
</div>

@endsection
@push('footer-script')
	<script>
			$('.btn_close').on('click',function(){
				if(confirm('Are you sure you want to Remove this item?')){
					var id = $(this).data('id');
					$.ajax({
						url: '{{route("cart.delete")}}',
						data :{
							'id' : id
						},
						success: function(data){
							alert('delete')
						}
					});
				}
			});
	</script>
@endpush