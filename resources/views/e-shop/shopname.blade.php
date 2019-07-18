
@include('e-shop.header')

<link rel="stylesheet" href="{{asset('shop/css/index.css')}}">

	<!-- HEADER -->
	<header>
		
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
                                <p><a href="{{URL::to('/product',['projects1' => $row->shop_id])}}">{{$row->shop_name}}</a></p>
                                
                                <div class="product_rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
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