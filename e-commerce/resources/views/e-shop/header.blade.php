<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Vendeor</title>


<style>
	.nav-tabs {
    margin-bottom: 15px;
}
.sign-with {
    margin-top: 25px;
    padding: 20px;
}
div#OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    
    background: #DFDFDF;
}
	
	
	
	
	
</style>

</head>

<body>
	
	<!-- ***** Header Area Start ***** -->
    <header class="header_area home-3">
		 <!-- Top Header Area Start -->
        <div class="top_header_area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-6 h-100">
                        <div class="top_single_area h-100 d-flex align-items-center">
							<div class="login_area">
                                <p><a href="login.html" target="_blank"><i class="ti-location-pin" aria-hidden="true"></i> {{Session::get('area_name'),Session::reflash('area_name')}}</a></p>
                            </div>
                            <div class="top_menu">
                                <ul>
									
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->
        <div class="main_header_area" id="stickyHeader">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="mainmenu_area">
                            <nav id="bigshop-nav" class="navigation">
                                <!-- Logo Area Start -->
                                <div class="nav-header">
                                    <div class="nav-toggle"></div>
                                    <div class="logo_area">
                                        <a href="index-3.html">BIGSHOP</a>
                                    </div>
                                </div>
                                <div class="header_meta_info_area">
                                    <div class="nav-search align-to-right">
                                        <div class="nav-search-button">
                                            <i class="nav-search-icon"></i>
                                        </div>
                                        <form>
                                            <div class="nav-search-inner">
                                                <input type="search" name="search" placeholder="Search for Products, Brands or Catagory">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="hero_meta_area d-flex align-items-center align-to-right">
                                        <!-- Wishlist Area -->
                                        <div class="wishlist">
                                            <a href="wishlist.html"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Cart Area -->
                                        <div class="cart">
                                            <a href="#" id="header-cart-btn" target="_blank"><i class="ti-bag"></i><span class="cart_quantity">3</span></a>
                                            <!-- Cart List Area Start -->
                                            <ul class="cart-list">
                                                <li>
                                                    <a href="#" class="image"><img src="img/product-img/top-1.png" class="cart-thumb" alt=""></a>
                                                    <div class="cart-item-desc">
                                                        <h6><a href="#">Kid's Fashion</a></h6>
                                                        <p>1x - <span class="price">$32.99</span></p>
                                                    </div>
                                                    <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                                </li>
                                                <li>
                                                    <a href="#" class="image"><img src="img/product-img/best-4.png" class="cart-thumb" alt=""></a>
                                                    <div class="cart-item-desc">
                                                        <h6><a href="#">Trendy Headphone</a></h6>
                                                        <p>2x - <span class="price">$49.99</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="image"><img src="img/product-img/onsale-4.png" class="cart-thumb" alt=""></a>
                                                    <div class="cart-item-desc">
                                                        <h6><a href="#">Water Bottle</a></h6>
                                                        <p>1x - <span class="price">$69.99</span></p>
                                                    </div>
                                                </li>
                                                <li class="total">
                                                    <span>Total: $202.96</span>
                                                    <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                                    <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- User Area -->
                                        <div class="user_thumb">
                                            <a href="#" id="header-user-btn"><img class="img-fluid" src="img/bg-img/user.jpg" alt=""></a>
                                            <!-- User Meta Dropdown Area Start -->
                                            <ul class="user-meta-dropdown">
                                                <li class="user-title"><span>Hello,</span> Lim Sarah</li>
                                                <li><a href="profile.html">My Profile</a></li>
                                                <li><a href="order-list.html">Orders List</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="logout.html"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Main Menus Wrapper -->
                                <div class="nav-menus-wrapper">
                                    <ul class="nav-menu nav-menu-centered">
                                        @include('e-shop/categories')
										<li><a href="#">Tody's deal</a></li>
                                        <li><a href="#">Customer Service</a></li>
										
                                        
                                       
                                       
                                      
                                    </ul>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	