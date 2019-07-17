@include('layouts.app')

<!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
@foreach($detail_product as $product)
    <section class="single_product_details_area section_padding_100">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-5">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}});">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}});">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url({{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}});">
                                </li>
                                <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url({{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}});">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img" href="{{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}}">
                                        <img class="d-block w-100" src="{{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}}" alt="First slide">
                                    </a>
                                    <!-- Product Badge -->
                                    <div class="product_badge">
                                        <span class="badge-new">New</span>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a class="gallery_img" href="{{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}}">
                                        <img class="d-block w-100" src="{{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}}" alt="Second slide">
                                    </a>
                                    <!-- Product Badge -->
                                    <div class="product_badge">
                                        <span class="badge-new">New</span>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a class="gallery_img" href="{{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}}">
                                        <img class="d-block w-100" src="{{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}}" alt="Third slide">
                                    </a>
                                    <!-- Product Badge -->
                                    <div class="product_badge">
                                        <span class="badge-new">New</span>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a class="gallery_img" href="{{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}}">
                                        <img class="d-block w-100" src="{{asset('shop_filter/./images/'.'/'. $product-> product_pic_name)}}" alt="Fourth slide">
                                    </a>
                                    <!-- Product Badge -->
                                    <div class="product_badge">
                                        <span class="badge-new">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-7">
                    <div class="single_product_desc">
                        <h4 class="title"><a>{{$product->product_name}}</a></h4>
                        <div class="single_product_ratings mb-15">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
<!--                            <span class="text-muted">(8 Reviews)</span>-->
                        </div>
                        <h4 class="price">&#8360; {{$product->price}}</h4>
                        
                        <!-- Add to Cart Form -->
					
                        <div class="cart clearfix mb-15">
                          
							 
                            <a href="{{ url('add-to-cart/'.$product->id) }}"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
						
                        </div>

                    
<!--
                        <div class="sizeguide">
                            <h4>Size Guide</h4>
                            <div class="size_guide_thumb d-flex">
                                <a class="size_guide_img" href="img/bg-img/size-1.png" style="background-image: url(img/bg-img/size-1.png);">
                                </a>
                                <a class="size_guide_img" href="img/bg-img/size-2.png" style="background-image: url(img/bg-img/size-2.png);">
                                </a>
                                <a class="size_guide_img" href="img/bg-img/size-3.png" style="background-image: url(img/bg-img/size-3.png);">
                                </a>
                            </div>
                        </div>
-->
						<br>
						
						 <div class="short_overview">
                            <h6>Overview</h6>
                            <p class="text-justify">{{$product->product_discription}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_details_tab clearfix">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="product-details-tab">
                            <li class="nav-item">
                                <a href="#description" class="nav-link active" data-toggle="tab" role="tab">Description</a>
                            </li>
                           
                            <li class="nav-item">
                                <a href="#refund" class="nav-link" data-toggle="tab" role="tab">Return &amp; Cancellation</a>
                            </li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade show active" id="description">
                                <div class="description_area">
                                    <h6>Description</h6>
                                    <p class="text-justify">{{$product->product_discription}}</p>                                
                                </div>
                            </div>


                            
                            <div role="tabpanel" class="tab-pane fade" id="refund">
                                <div class="refund_area">
                                    <h6>Return &amp; Cancellation</h6>
                                    <p>Return Policy
                                        <br><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quidem, eos eius laboriosam voluptates totam mollitia repellat rem voluptate obcaecati quas fuga similique impedit cupiditate vitae repudiandae. Rem, tenetur placeat!</span></p>
                                    <p>Return Criteria</p>
                                    <ul class="mb-30 ml-30">
                                        <li><i class="fa fa-circle" aria-hidden="true"></i> Package broken</li>
                                        <li><i class="fa fa-circle" aria-hidden="true"></i> Physical damage in the product</li>
                                        <li><i class="fa fa-circle" aria-hidden="true"></i> Software/hardware problem</li>
                                        <li><i class="fa fa-circle" aria-hidden="true"></i> Accessories missing or damaged etc.</li>
                                    </ul>
                                    <p><i class="fa fa-question-circle-o" aria-hidden="true"></i> What should I do if I receive a damaged parcel?
                                        <br> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit impedit similique qui, itaque delectus labore.</span></p>

                                    <p><i class="fa fa-question-circle-o" aria-hidden="true"></i> I have received my order but the wrong item was delivered to me.
                                        <br> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quam voluptatum beatae harum tempore, ab?</span></p>

                                    <p><i class="fa fa-question-circle-o" aria-hidden="true"></i> Product Receipt and Acceptance Confirmation Process
                                        <br> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus, temporibus soluta impedit minus rerum?</span></p>
                                    <p><i class="fa fa-question-circle-o" aria-hidden="true"></i> How do I cancel my order?
                                        <br> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eius eum, minima!</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
    <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->


















	@include('e-shop.footer_shop')	
