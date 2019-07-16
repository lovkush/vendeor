
@include('e-shop.header')

@include('e-shop.nav')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@if(Session()->get('area_name'))

<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('hide');
	});
</script>

@else{


<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>


}
@endif
	<script>


	$('#myModal2').modal('hide');
	</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.citycategory',function(){
			// console.log("hmm its change");

			var city_id=$(this).val();
			// console.log(city_id);
			var div=$(this).parent();

		

			$.ajax({

				type:'get',
				url:'{!!URL::to('findArea')!!}',
				data:{'id':city_id},
				success:function(data){

					//console.log(data);
$('select[name="area_name"]').empty();
					//console.log(data.length);
							for(var i=0;i<data.length;i++){
					$('select[name="area_name"]').append('<option value="'+data[i].area_name+'">'+data[i].area_name+'</option>');
				   }

				   
				},
				error:function(){

				}
			});
		});

		$(document).on('change','.area_name',function () {
			var area_id=$(this).val();

			var a=$(this).parent();
			//console.log(area_id);
			var op="";
			$.ajax({
				type:'get',
				data:{'id':area_id},
				dataType:'json',//return data will be json
				success:function(data){

					// here price is coloumn name in products table data.coln name
				},
				error:function(){

				}
			});
		});

	});
</script>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Choose Location</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <form method="post" action="{{ url::to('about')}}">
  <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="city_id" class="citycategory form-control">
        <option value="0" disabled="true" selected="true">-Select-</option>
		@foreach($prod as $cat)
			<option value="{{$cat->id}}">{{$cat->city_name}}</option>
		@endforeach

      </select>
    </div>
			  
			  <div class="form-group col-md-4">
				  <input type="hidden" name ="_token" value="{{ csrf_token() }}"/>

      <label for="inputState">State</label>
      <select id="inputState" name="area_name" class="area_name form-control">
		<option value="0" disabled="true" selected="true">Area Name</option>
	</select>
	
    </div>
 <br>
 
  <button type="submit" class="primary-btn">Submit</button>
</form>
		  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



		

<!--
	<div id="home">		
				<div id="home-slick">
					<div class="banner banner-1">
						<img src="{{asset('theme/./img/banner01.jpg')}}" alt="">
					</div>

					<div class="banner banner-1">
						<img src="{{asset('theme/./img/banner02.jpg')}}" alt="">
					</div>
					
					<div class="banner banner-1">
						<img src="{{asset('theme/./img/banner03.jpg')}}" alt="">
					</div>
				
				</div>
				
	</div>
-->

<!-- ***** Catagories Area Start ***** -->
    <section class="catagories_area home-3" style="padding-top:20px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_catagory mb-30">
                        <a href="#">
							
                            <img src="{{asset('shop/img/product-img/cata-1.jpg')}}" alt="">
                            <div class="single_cata_desc d-flex align-items-center justify-content-center">
                                <div class="single_cata_desc_text">
                                    <h5>Craft Collection</h5>
                                    <p>Shop Now <i class="fa fa-angle-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_catagory mb-30">
                        <a href="#">
                            <img src="{{asset('shop/img/product-img/cata-2.jpg')}}" alt="">
                            <div class="single_cata_desc d-flex align-items-center justify-content-center">
                                <div class="single_cata_desc_text">
                                    <h5>Women Collection</h5>
                                    <p>Shop Now <i class="fa fa-angle-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_catagory mb-30">
                        <a href="#">
                            <img src="{{asset('shop/img/product-img/cata-3.jpg')}}" alt="">
                            <div class="single_cata_desc d-flex align-items-center justify-content-center">
                                <div class="single_cata_desc_text">
                                    <h5>Kids Collection</h5>
                                    <p>Shop Now <i class="fa fa-angle-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagories Area End ***** -->



<!-- ***** New Arrivals Area Start ***** -->
    <section class="new_arrivals_area section_padding clearfix" style="padding-bottom:20px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading new_arrivals">
                        <h5>Deals of the Day</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="new_arrivals_slides">

                        <!-- Singel Arrivals Slide Start -->
                        <div class="single_arrivals_slide">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{asset('shop/img/product-img/onsale-4.png')}}" alt="">
                                <img class="hover_img" src="{{asset('shop/img/product-img/onsale-4.png')}}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span class="badge-new">New</span>
                                </div>
                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                </div>
                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                </div>
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product_description">
                                <p class="brand_name">Top</p>
                                <h5><a href="#">Boutique Silk Dress</a></h5>
                                <h6>$69.99 <span>$78.99</span></h6>
                            </div>
                        </div>

                        <!-- Singel Arrivals Slide Start -->
                        <div class="single_arrivals_slide">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{asset('shop/img/product-img/onsale-1.png')}}" alt="">
                                <img class="hover_img" src="{{asset('shop/img/product-img/onsale-1.png')}}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span class="badge-sale">Sale</span>
                                </div>
                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                </div>
                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                </div>
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product_description">
                                <p class="brand_name">Sarah</p>
                                <h5><a href="#">Flower Textured Dress</a></h5>
                                <h6>$39.99 <span>$49.99</span></h6>
                            </div>
                        </div>

                        <!-- Singel Arrivals Slide Start -->
                        <div class="single_arrivals_slide">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{asset('shop/img/product-img/onsale-2.png')}}" alt="">
                                <img class="hover_img" src="{{asset('shop/img/product-img/onsale-2.png')}}" alt="">
                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span class="badge-featured">Featured</span>
                                </div>
                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                </div>
                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                </div>
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product_description">
                                <p class="brand_name">Jara</p>
                                <h5><a href="#">Ballerina Dress</a></h5>
                                <h6>$89.99 <span>$107.99</span></h6>
                            </div>
                        </div>

                        <!-- Singel Arrivals Slide Start -->
                        <div class="single_arrivals_slide">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{asset('shop/img/product-img/onsale-1.png')}}" alt="">
                                <img class="hover_img" src="{{asset('shop/img/product-img/onsale-1.png')}}" alt="">
                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span class="badge-offer">-30%</span>
                                </div>
                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                </div>
                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                </div>
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product_description">
                                <p class="brand_name">Lim</p>
                                <h5><a href="#">Gracia Plaid Dress</a></h5>
                                <h6>$139.99 <span>$145.87</span></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** New Arrivals Area End ***** -->

     <!-- ***** Catagories Area Start ***** -->
    <section class="catagories_area home-3" style="padding-top:20px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_catagory mb-30">
                        <a href="#">
							
                            <img src="{{asset('shop/img/product-img/cata-1.jpg')}}" alt="">
                            <div class="single_cata_desc d-flex align-items-center justify-content-center">
                                <div class="single_cata_desc_text">
                                    <h5>Craft Collection</h5>
                                    <p>Shop Now <i class="fa fa-angle-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_catagory mb-30">
                        <a href="#">
                            <img src="{{asset('shop/img/product-img/cata-2.jpg')}}" alt="">
                            <div class="single_cata_desc d-flex align-items-center justify-content-center">
                                <div class="single_cata_desc_text">
                                    <h5>Women Collection</h5>
                                    <p>Shop Now <i class="fa fa-angle-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_catagory mb-30">
                        <a href="#">
                            <img src="{{asset('shop/img/product-img/cata-3.jpg')}}" alt="">
                            <div class="single_cata_desc d-flex align-items-center justify-content-center">
                                <div class="single_cata_desc_text">
                                    <h5>Kids Collection</h5>
                                    <p>Shop Now <i class="fa fa-angle-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagories Area End ***** -->


<!-- ***** New Arrivals Area Start ***** -->
    <section class="new_arrivals_area section_padding clearfix" style="padding-bottom:20px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading new_arrivals">
                        <h5>Hot Deals</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="new_arrivals_slides">

                        <!-- Singel Arrivals Slide Start -->
                        <div class="single_arrivals_slide">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{asset('shop/img/product-img/onsale-4.png')}}" alt="">
                                <img class="hover_img" src="{{asset('shop/img/product-img/onsale-4.png')}}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span class="badge-new">New</span>
                                </div>
                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                </div>
                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                </div>
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product_description">
                                <p class="brand_name">Top</p>
                                <h5><a href="#">Boutique Silk Dress</a></h5>
                                <h6>$69.99 <span>$78.99</span></h6>
                            </div>
                        </div>

                        <!-- Singel Arrivals Slide Start -->
                        <div class="single_arrivals_slide">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{asset('shop/img/product-img/onsale-1.png')}}" alt="">
                                <img class="hover_img" src="{{asset('shop/img/product-img/onsale-1.png')}}" alt="">

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span class="badge-sale">Sale</span>
                                </div>
                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                </div>
                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                </div>
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product_description">
                                <p class="brand_name">Sarah</p>
                                <h5><a href="#">Flower Textured Dress</a></h5>
                                <h6>$39.99 <span>$49.99</span></h6>
                            </div>
                        </div>

                        <!-- Singel Arrivals Slide Start -->
                        <div class="single_arrivals_slide">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{asset('shop/img/product-img/onsale-2.png')}}" alt="">
                                <img class="hover_img" src="{{asset('shop/img/product-img/onsale-2.png')}}" alt="">
                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span class="badge-featured">Featured</span>
                                </div>
                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                </div>
                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                </div>
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product_description">
                                <p class="brand_name">Jara</p>
                                <h5><a href="#">Ballerina Dress</a></h5>
                                <h6>$89.99 <span>$107.99</span></h6>
                            </div>
                        </div>

                        <!-- Singel Arrivals Slide Start -->
                        <div class="single_arrivals_slide">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{asset('shop/img/product-img/onsale-1.png')}}" alt="">
                                <img class="hover_img" src="{{asset('shop/img/product-img/onsale-1.png')}}" alt="">
                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span class="badge-offer">-30%</span>
                                </div>
                                <!-- Wishlist -->
                                <div class="product_wishlist">
                                    <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                </div>
                                <!-- Compare -->
                                <div class="product_compare">
                                    <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                </div>
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product_description">
                                <p class="brand_name">Lim</p>
                                <h5><a href="#">Gracia Plaid Dress</a></h5>
                                <h6>$139.99 <span>$145.87</span></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** New Arrivals Area End ***** -->


   <!-- ***** Shop Catagory Area Start ***** -->
    <section class="shop_by_catagory_area section_padding_100_0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <div class="single_catagory">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('shop/img/bg-img/cat-1.jpg')}}" alt="">
                            <div class="single_cata_desc">
                                <div class="bigshop-table">
                                    <div class="bigshop-table-cell">
                                        <h5><span>Women</span>Hot Collection</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="single_catagory">
                        <a href="#">
                            <img src="{{asset('shop/img/bg-img/cat-2.jpg')}}" alt="">
                            <div class="single_cata_desc">
                                <div class="bigshop-table">
                                    <div class="bigshop-table-cell">
                                        <h5><span>Men</span>Summer Collection</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="single_catagory">
                        <a href="#">
							
                            <img src="{{asset('shop/img/bg-img/cat-3.jpg')}}" alt="">
                            <div class="single_cata_desc">
                                <div class="bigshop-table">
                                    <div class="bigshop-table-cell">
                                        <h5><span>Kids</span>Up to 75% off</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Shop Catagory Area End ***** -->

<link rel="stylesheet" href="{{asset('shop/css/core-style.css')}}">


<link rel="stylesheet" href="{{asset('shop/css/style.css')}}">

    <!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('shop/css/responsive.css')}}">



<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{ asset('shop/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <!-- Bootstrap js -->
<script src="{{ asset('shop/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
<script src="{{ asset('shop/js/plugins.js') }}"></script>
    <!-- Active js -->
<script src="{{ asset('shop/js/active.js') }}"></script>
   

	

	@include('e-shop.footer')