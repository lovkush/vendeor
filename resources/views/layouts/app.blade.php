<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bigshop |</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
	<link rel="stylesheet" href="{{asset('shop/css/core-style.css')}}">
	<link rel="stylesheet" href="{{asset('shop/css/style.css')}}">

    <!-- Responsive CSS -->
	<link rel="stylesheet" href="{{asset('shop/css/responsive.css')}}">
	
	

</head>
<body>
	 @if (Auth::guest())
    <!-- ***** Header Area Start ***** -->
    <header class="header_area">
        
        <!-- Bottom Header Area Start -->
        <div class="bottom-header-area" id="stickyHeader">
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Logo Area Start -->
                        <div class="col-6 col-md-3">
                            <div class="logo_area">
                                <a href="">BIGSHOP</a>
                            </div>
                        </div>
                        <!-- Search Area Start -->
                        <div class="col-12 col-md-6">
                            <div class="hero_search_area">
                                <form action="#" method="get">
                                    <input type="search" class="form-control" id="search" aria-describedby="search" placeholder="Search for products, brands or catagory">
                                    <button type="submit" class="btn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Hero Meta Area Start -->
                        <div class="col-6 col-md-3">
                            <div class="hero_meta_area d-flex text-right align-items-center justify-content-end">
                               			
								 <!-- User Area -->
                                <div class="wishlist">
                                    <a href='{!! url('/login');!!}'><i class="ti-user"></i></a>
                                </div>
								<!-- Cart Area -->
								@if(session('cart'))
                                <div class="cart">
                                    <a href="#" id="header-cart-btn" target="_blank"><i class="ti-bag"></i><span class="cart_quantity">{{ count(session('cart')) }}</span></a>
                                    <!-- Cart List Area Start -->
									
                                    <ul class="cart-list">
										<?php $total = 0 ?>
										@foreach(session('cart') as $id => $details)
										<?php $total += $details['price'] * $details['quantity'] ?>
										@endforeach
										@if(session('cart'))
										@foreach(session('cart') as $id => $details)
                                        <li>
                                            <a class="image"><img src="{{asset('shop_filter/./images/'.'/'. $details['photo'])}}" class="cart-thumb" alt=""></a>
                                            <div class="cart-item-desc">
                                                <h6><a>{{ $details['name'] }}</a></h6>
                                                <p>{{ $details['quantity'] }} x - <span class="price">&#8377; {{ $details['price'] }}</span></p>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                        </li>
										@endforeach
										@endif
                                            
                                        <li class="total">
                                            <span>Total: &#8377; {{ $total }}</span>
                                            <a href="{{ url('cart') }}" class="btn btn-sm btn-cart">Cart</a>
                                            <a href="{{ url('/checkout') }}" class="btn btn-sm btn-checkout">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
								@endif							  
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mainmenu_area">
                <div class="container">
                    <nav id="bigshop-nav" class="navigation">
                        <!-- Logo Area Start -->
                        <div class="nav-header">
                            <div class="nav-toggle"></div>
                        </div>
                        <!-- Nav Text Area Start -->
                        <span class="nav-text align-to-right"><i class="ti-headphone-alt"></i> +008 111 22472 44</span>
                        <!-- Main Menus Wrapper -->
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li><a href="#">Home</a>                       
                                </li>
                                <li><a href="#">About Us</a>                                    
                                </li>
                                <li><a href="#">Contact</a>                                   
                                </li>
                                
                                
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Bottom Header Area End -->
    </header>
    <!-- ***** Header Area End ***** -->

	             @else
	<!-- ***** Header Area Start ***** -->
    <header class="header_area">
        

        <!-- Bottom Header Area Start -->
        <div class="bottom-header-area" id="stickyHeader">
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Logo Area Start -->
                        <div class="col-6 col-md-3">
                            <div class="logo_area">
                                <a href="">BIGSHOP</a>
                            </div>
                        </div>
                        <!-- Search Area Start -->
                        <div class="col-12 col-md-6">
                            <div class="hero_search_area">
                                <form action="#" method="get">
                                    <input type="search" class="form-control" id="search" aria-describedby="search" placeholder="Search for products, brands or catagory">
                                    <button type="submit" class="btn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Hero Meta Area Start -->
                        <div class="col-6 col-md-3">
                            <div class="hero_meta_area d-flex text-right align-items-center justify-content-end">
                                
								<!-- Cart Area -->
								@if(session('cart'))
                                <div class="cart">
                                    <a href="#" id="header-cart-btn" target="_blank"><i class="ti-bag"></i><span class="cart_quantity">{{ count(session('cart')) }}</span></a>
                                    <!-- Cart List Area Start -->
									
                                    <ul class="cart-list">
										<?php $total = 0 ?>
										@foreach(session('cart') as $id => $details)
										<?php $total += $details['price'] * $details['quantity'] ?>
										@endforeach
										@if(session('cart'))
										@foreach(session('cart') as $id => $details)
                                        <li>
                                            <a href="#" class="image"><img src="{{asset('shop_filter/./images/'.'/'. $details['photo'])}}" class="cart-thumb" alt=""></a>
                                            <div class="cart-item-desc">
                                                <h6><a href="">{{ $details['name'] }}</a></h6>
                                                <p>{{ $details['quantity'] }} x - <span class="price">&#8377; {{ $details['price'] }}</span></p>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                        </li>
										@endforeach
										@endif
                                            
                                        <li class="total">
                                            <span>Total: &#8377; {{ $total }}</span>
                                            <a href="{{ url('cart') }}" class="btn btn-sm btn-cart">Cart</a>
                                            <a href="{{ url('/checkout') }}" class="btn btn-sm btn-checkout">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
								@endif
										                               
                                <!-- User Area -->
                                <div class="user_thumb">
                                    <a href="#" id="header-user-btn"><img class="img-fluid" src="{{asset('shop/./img/bg-img/user.jpg')}}">
									</a>
                                    <!-- User Meta Dropdown Area Start -->
                                    <ul class="user-meta-dropdown">
                                        <li class="user-title"> {{ Auth::user()->name }}</li>
                                        <li><a href="{{URL::to('/userprofile',['id' =>  Auth::user()->id ])}}">Profile</a></li>
                                        <li><a href="order-list.html">Orders List</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
										
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();              document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
										<form id="logout-form" action="{{ route('logout') }}" method="post">
											<input type="hidden" name ="_token" value="{{ csrf_token() }}"/>
										</form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mainmenu_area">
                <div class="container">
                    <nav id="bigshop-nav" class="navigation">
                        <!-- Logo Area Start -->
                        <div class="nav-header">
                            <div class="nav-toggle"></div>
                        </div>
                        <!-- Nav Text Area Start -->
                        <span class="nav-text align-to-right"><i class="ti-headphone-alt"></i> +008 111 22472 44</span>
                        <!-- Main Menus Wrapper -->
                        <div class="nav-menus-wrapper">
                             <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li><a href="#">Home</a>                       
                                </li>
                                <li><a href="#">About Us</a>                                    
                                </li>
                                <li><a href="#">Contact</a>                                   
                                </li>
                                
                                
                                
                            </ul>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Bottom Header Area End -->
    </header>
    <!-- ***** Header Area End ***** -->
		@endif
	
	
 @yield('content')
	
	
	</body>
	
	
</html>