@include('layouts.app')



	<link rel="stylesheet" href="{{asset('shop/css/reset-filter.css')}}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{asset('shop/css/style-filter.css')}}"> <!-- Resource style -->
	<script src="{{asset('shop/js/modernizr-filter.js')}}"></script> <!-- Modernizr -->
 <!-- ***** Welcome Slides Area Start ***** -->
 <section class="welcome_area home-2" style="height:50%">
	<div class="welcome_slides" >

		<!-- Single Slide Start -->
		<div class="single_slide home-3 height-500 bg-img background-overlay" style="background-image: url({{asset('shop/img/bg-img/slide-5.jpg')}}">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						
					</div>
				</div>
			</div> 
		</div>

		<!-- Single Slide Start -->
		<div class="single_slide home-3 height-500 bg-img background-overlay" style="background-image: url({{asset('shop/img/bg-img/slide-7.jpg')}}">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						
					</div>
				</div>
			</div>
		</div>

		<!-- Single Slide Start -->
		<div class="single_slide home-3 height-500 bg-img background-overlay-white" style="background-image: url({{asset('shop/img/bg-img/slide-6.jpg')}}">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- ***** Welcome Slides Area End ***** -->


<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#">All</a> <!-- selected option on mobile -->
					</li> 
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul>
                
    <section class="shop_grid_area">
        <div class="container">
			@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
            <div class="row">             
                <div class="col-12 col-md-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                                @foreach($data as $prod)
                                <div class="single_product_area mb-30">
                                    <div class="single_arrivals_slide">
                                        <div class="product_image">
                                            <!-- Product Image -->
                                            <img class="normal_img" src="{{asset('shop_filter/./images/'.'/'. $prod-> product_pic_name)}}" alt="">
                                            <img class="hover_img" src="{{asset('shop_filter/./images/'.'/'. $prod-> product_pic_name)}}" alt="">

                                            <!-- Product Badge -->
                                            <div class="product_badge">
                                                <span class="badge-new">New</span>
                                            </div>
                                          
                                          
                                            <!-- Add to cart -->
                                            <div class="product_add_to_cart">
                                                <a href="{{ url('add-to-cart/'.$prod->product_id) }}"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                                            </div>
											<!-- Quick View -->
											 <div class="product_quick_view">
                                                <a href="#myModal{{ $prod->product_id }}" data-toggle="modal"><i class="ti-eye" aria-hidden="true"></i> Quick View</a>
                                            </div> 
                                           
                                        </div>
                                        <!-- Product Description -->
                                        <div class="product_description">
                                            <p class="brand_name"></p>
                                            <h4><a href="#">{{ $prod-> product_name}}</a></h4>
                                            <h4>{{ $prod-> price}} <span></span></h4>
                                        </div>
									</div>
									<!-- Button trigger modal -->

  
  <!-- Modal -->

















								</div>
								

                                 @endforeach
                            </div>
                    </div>
                </div>
            </div>
		</div>
		

		<div id="myModal{{ $prod->product_id }}" class="modal hide">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="modal-body">
						<div class="quickview_body">
							<div class="container">
								<div class="row">
									<div class="col-12 col-lg-5">
										<div class="quickview_pro_img">
											<img class="first_img" src="{{asset('shop_filter/./images/'.'/'. $prod-> product_pic_name)}}" alt="">
											<img class="hover_img" src="{{asset('shop_filter/./images/'.'/'. $prod-> product_pic_name)}}" alt="">
											<!-- Product Badge -->
											<div class="product_badge">
												<span class="badge-new">New</span>
											</div>
	
										</div>
									</div>
									<div class="col-12 col-lg-7">
										<div class="quickview_pro_des">
											<h3 class="title"><strong>{{ $prod-> product_name}}</strong></h3>
											<div class="top_seller_product_rating mb-15">
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
												<i class="fa fa-star" aria-hidden="true"></i>
											</div>
											<h4 class="price"><strong>{{ $prod-> price}}</strong><span></span></h4>
<p>{{ $prod-> product_discription}}</p>											
										</div>
										<!-- Add to Cart Form -->
										<form class="cart" method="post">
											
											<div class="cart-submit" style="padding-top:10px; padding-left:20px">
                                                <a href="{{ url('add-to-cart/'.$prod->product_id) }}" style="color:white"> Add to Cart</a>
											</div> 
											
											

											
										</form>
										<br>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		

    </section>
            </ul>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				

				<div class="cd-filter-block">
					<h4>Check boxes</h4>
                    
					<ul class="cd-filter-content cd-filters list">
						<li>



						

<?php



$categories=DB::table('shopname')->select('*')->where('shop_id',Session::get('shop_id'))->get();



?>

@if(count($categories)>0)
@foreach( $categories as $cat  )
<?php



$SubCategories=DB::table('sub_categories')->select('*')->where('cat_id',$cat->cat_id)->get();
                            
                            



?>
                            @if(count($SubCategories)>0)
                            @foreach($SubCategories as $sub)
                            
                            <a href="{{route('cats','shop',$sub->sub_cat_id,Session::get('shop_id'))}}">{{$sub->sub_cat_name}}</a></br>
                            
                            @endforeach
                            @endif
                            
                            
@endforeach

@endif
					
					</li>
                    </ul> <!-- cd-filter-content -->
                   
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Select</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose an option</option>
								<option value=".option1">Option 1</option>
								<option value=".option2">Option 2</option>
								<option value=".option3">Option 3</option>
								<option value=".option4">Option 4</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Radio buttons</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">All</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">Choice 2</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Choice 3</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
	</main> <!-- cd-main-content -->

<script src="{{asset('shop/js/jquery-filter.js') }}"></script>
<script src="{{asset('shop/js/jquery.mixitup.min-filter.js') }}"></script>
<script src="{{asset('shop/js/main-filter.js')}}"></script> <!-- Resource jQuery -->
	
@include('e-shop.footer_shop')
