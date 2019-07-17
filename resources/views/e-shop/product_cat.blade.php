@include('layouts.app')

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
				
				<div class="col-md-8 products-right">
			
			@foreach($data as $prod)
			<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										
										<img src="{{asset('shop_filter/./images/'.'/'. $prod-> product_pic_name)}}" alt="" class="pro-image-front">
										<img src="{{asset('shop_filter/./images/'.'/'. $prod-> product_pic_name)}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{url('/product-detail',$prod->product_id)}}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="{{url('/product-detail',$prod->product_id)}}">{{ $prod-> product_name}}</a></h4>
										<div class="info-product-price">
											<span class="item_price">{{ $prod-> price}}</span>
<!--											<del>$199.71</del>-->
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="{{ $prod-> product_name}}">
																	<input type="hidden" name="amount" value="{{ $prod-> price}}">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
					@endforeach
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
				
            </ul>
			<!-- <div class="cd-fail-message">No results found</div> -->
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				

				<div class="cd-filter-block">
					<h4>Check boxes</h4>
                    
					<ul class="cd-filter-content cd-filters list">
						<li>



                        @foreach($products as $product)

                        <?php



                $sub_categories=DB::table('sub_categories')->select('*')->where('cat_id',$product->cat_id)->get();



            ?>

@if(count($sub_categories)>0)
@foreach( $sub_categories as $sub  )


<a href="{{route('cats',$sub->sub_cat_id)}}">{{$sub->sub_cat_name}}</a></br>
                @endforeach

@endif

						@endforeach
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
	
	
	@include('e-shop.footer_shop')	
