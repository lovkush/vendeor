@include('layouts.app')

    <!-- ***** Cart Area Start ***** -->
    <div class="cart_area section_padding_50 clearfix">
        <div class="container">
            <div class="row">
				@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-trash-o" aria-hidden="true"></i></th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
								 <?php $total = 0 ?>
								@if(session('cart'))
								@foreach(session('cart') as $id => $details)
								<?php $total += $details['price'] * $details['quantity'] ?>
                                <tr>
									<td class="action btn-sm remove-from-cart" data-id="{{ $id }}"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
									
                             
                                    <td class="cart_product_img">
                                        <a href="#"><img src="{{asset('shop_filter/./images/'.'/'.$details['photo'])}}" alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>{{ $details['name'] }}</h5>
                                    </td>
                                    <td class="price"><span>&#8377 {{ $details['price'] }}</span></td>
                                    <td>                  
										<input type="number" value="{{ $details['quantity'] }}" data-id="{{ $id }}" id="update-cart" class="form-control quantity"/>                     
                                    </td>
                                    <td class="total_price"><span>&#8377 {{ $details['price'] * $details['quantity'] }}</span></td>
                                </tr>
								  @endforeach
								@endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total (tax incl.)</td>
                                    <td>&#8377 {{ $total }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td><strong>&#8377 {{ $total }}</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="cart-footer d-flex mt-30">
                        <div class="back-to-shop w-50">
                            <a href="{{ url('/') }}" class="btn bigshop-btn"><i class="fa fa-undo" aria-hidden="true"></i> Back to Shopping</a>
                        </div>
                        <div class="update-checkout w-50 text-right">
                            <a href="#" class="btn bigshop-btn">Update Cart</a>
                            <a href="{{ url('/checkout') }}" class="btn bigshop-btn">Checkout</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ***** Cart Area End ***** -->

  
	
	<!-- cart js -->
	
@section('scripts')
    <script type="text/javascript">

        $("#update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection

   

@include('e-shop/footer_shop')