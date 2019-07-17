
@include('e-shop.header')

@include('e-shop.nav')




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.citycategory',function(){
			// console.log("hmm its change");

			var city_id=$(this).val();
			// console.log(city_id);
			var div=$(this).parent();

			var op=" ";

			$.ajax({

				type:'get',
				url:'{!!URL::to('findArea')!!}',
				data:{'id':city_id},
				success:function(data){

					//console.log(data);

					//console.log(data.length);
					op+='<option value="0" selected disabled>chose area</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].area_name+'">'+data[i].area_name+'</option>';
				   }

				   div.find('.area_name').html(" ");
				   div.find('.area_name').append(op);
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

	

		<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Deliver to</h4>
            </div>
            <div class="modal-body">
 <!-- location -->
		<form method="post" action="{{ url::to('about')}}">
	  <span>City: </span>
	<select style="width: 200px" class="citycategory" id="city_id">

		<option value="0" disabled="true" selected="true">-Select-</option>
		@foreach($prod as $cat)
			<option value="{{$cat->id}}">{{$cat->city_name}}</option>
		@endforeach

	</select>
	<input type="hidden" name ="_token" value="{{ csrf_token() }}"/>
	<span>Area: </span>
	<select style="width: 200px" name="area_name" class="area_name">

		<option value="0" disabled="true" selected="true">Area Name</option>
	</select>
	<!-- <input type='text' name="name" palceholder="enter the name"/> -->

	<button type="submit" class="primary-btn">Submit</button>

	  </form>

            </div>
        </div>
    </div>
</div>



	<!-- HOME -->
	<div id="home">		
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{asset('theme/./img/banner01.jpg')}}" alt="">
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{asset('theme/./img/banner02.jpg')}}" alt="">
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{asset('theme/./img/banner03.jpg')}}" alt="">
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
	</div>
	<!-- /HOME -->

<!-- section -->
	<div class="section">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 1</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 2</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->
				
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 3</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->	
			</div>
			<!-- /row -->
	</div>
	<!-- /section -->

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

 <!-- section -->
	<div class="section">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 1</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 2</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->
				
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 3</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->	
			</div>
			<!-- /row -->
	</div>
	<!-- /section -->


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
<!-- section -->
	<div class="section">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 1</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 2</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->
				
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{asset('theme/./img/banner10.jpg')}}" alt="">
<!--
						<div class="banner-caption text-center">
							<h2 class="white-color">Add 3</h2>
						</div>
-->
					</a>
				</div>
				<!-- /banner -->	
			</div>
			<!-- /row -->
	</div>
	<!-- /section -->


	<link rel="stylesheet" href="{{asset('shop/css/index.css')}}">
<!-- jQuery (Necessary for All JavaScript Plugins) -->
	<script src="{{ asset('shop/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <!-- Bootstrap js -->
    <!-- Plugins js -->
	<script src="{{ asset('shop/js/plugins.js') }}"></script>
    <!-- Active js -->
	<script src="{{ asset('shop/js/active.js') }}"></script>
   

	

	@include('e-shop.footer')