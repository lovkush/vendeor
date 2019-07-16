
@include('e-shop.header')

<link rel="stylesheet" href="{{asset('shop/css/index.css')}}">

	<!-- HEADER -->
	<header>
		

		
	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				
				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">Shop</a></li>
						
						<li><a href="#">Sales</a></li>
						
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->


<section class="shop_grid_area section_padding_50">
        <div class="container">          
            <div class="row">
                <div class="col-12">
                    <div class="shop_grid_product_area">
                        <div class="row">
							@foreach( $data as $row)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="single_product_area mb-30">
                                    <div class="single_arrivals_slide">
                                        <div class="product_image">
                                            <!-- Product Image -->
											<a href="{{URL::to('/product',['projects1' => $row->shop_id])}}" >
                                            <img class="normal_img" src="{{asset('theme/./img/shop.png')}}" alt="">
                                            <img class="hover_img" src="{{asset('theme/./img/shop.png')}}" alt="">
											</a>
                                        </div>
                                        <!-- Product Description -->
										<div class="featured_pro_desc">
                                <h5><a href="{{URL::to('/product',['projects1' => $row->shop_id])}}"><strong>{{$row->shop_name}}</strong></a></h5>
                                
                                <div class="product_rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
											<p>4</p>
                            </div>
                                        <div class="product_description">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
							@endforeach                          
                            </div>
					    </div>                   
                     </div>
                 </div>
             </div>
      </section>

		
		
		


@include('e-shop.footer')