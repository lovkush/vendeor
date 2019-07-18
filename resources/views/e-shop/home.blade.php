<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Vendeor</title>
    
    <link rel="stylesheet" href="{{asset('shop/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('shop/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('shop/css/responsive.css')}}">

    
    

</head>

<body>


<!-- ***** Header Area Start ***** -->
    <header class="header_area">
        <!-- Top Header Area Start -->
        <!-- <div class="top_header_area">
            <div class="container h-100">
                <div class="row d-md-flex h-100 align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="top_single_area d-sm-flex align-items-center">
                                <div class="top_mail mr-5">
                                <a class="align-middle" href="mailto:support@bigshop.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> support@bigshop.com</a>
                            </div>
                        
                            <div class="top_social">
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="top_single_area d-sm-flex align-items-center justify-content-end">
                           
                            <div class="login_area">
                                <p><a href="login.html" target="_blank"><i class="fa fa-lock" aria-hidden="true"></i> Login</a> or
                                    <a href="register.html" target="_blank"><i class="fa fa-user" aria-hidden="true"></i> Create an account</a></p>
                            </div>
                           
                            <div class="get_help">
                                <a href="faq.html" target="_blank"><i class="fa fa-life-ring" aria-hidden="true"></i> Get Help</a>
                            </div>
                            
                            <div class="language_area">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">$USD</button>
                                    <div class="dropdown-menu" aria-labelledby="lang">
                                        <a class="dropdown-item" href="#">$AUD</a>
                                        <a class="dropdown-item" href="#">€EUR</a>
                                        <a class="dropdown-item" href="#">$CSD</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Top Header Area End -->

        <!-- Bottom Header Area Start -->
        <div class="bottom-header-area" id="stickyHeader">
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Logo Area Start -->
                        <div class="col-6 col-md-3">
                            <div class="logo_area">
                                <a href="index.html">BIGSHOP</a>
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
                        <span class="nav-text align-to-right"><i class="ti-headphone-alt"></i>  {{Session::get('area_name'),Session::reflash('area_name')}}</span>
                        <!-- Main Menus Wrapper -->
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li><a href="#">Home</a>
                                    <ul class="nav-dropdown">
                                        <li><a href="index.html" target="_blank">Home - 1</a></li>
                                        <li><a href="index-3.html" target="_blank">Home - 2</a></li>
                                        <li><a href="index-2.html" target="_blank">Home - 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Shop</a>
                                    <ul class="nav-dropdown">
                                        <li><a href="#">Shop Grid</a>
                                            <ul class="nav-dropdown">
                                                <li><a href="shop-grid-left-sidebar.html" target="_blank">Grid Left Sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.html" target="_blank">Grid Right Sidebar</a></li>
                                                <li><a href="shop-grid-top-sidebar.html" target="_blank">Grid Top Sidebar</a></li>
                                                <li><a href="shop-grid-no-sidebar.html" target="_blank">Grid No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop List</a>
                                            <ul class="nav-dropdown">
                                                <li><a href="shop-list-left-sidebar.html" target="_blank">List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html" target="_blank">List Right Sidebar</a></li>
                                                <li><a href="shop-list-top-sidebar.html" target="_blank">List Top Sidebar</a></li>
                                                <li><a href="shop-list-no-sidebar.html" target="_blank">List No Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product-details.html" target="_blank">Single Product</a></li>
                                        <li><a href="cart.html" target="_blank">Cart</a></li>
                                        <li><a href="#">Checkout</a>
                                            <ul class="nav-dropdown">
                                                <li><a href="checkout-1.html" target="_blank">Checkout Login</a></li>
                                                <li><a href="checkout-2.html" target="_blank">Checkout Billing</a></li>
                                                <li><a href="checkout-3.html" target="_blank">Checkout Shipping</a></li>
                                                <li><a href="checkout-4.html" target="_blank">Checkout Payment</a></li>
                                                <li><a href="checkout-5.html" target="_blank">Checkout Review</a></li>
                                                <li><a href="checkout-complate.html" target="_blank">Checkout Complate</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="wishlist.html" target="_blank">Wishlist</a></li>
                                        <li><a href="compare.html" target="_blank">Compare</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Megamenu</a>
                                    <div class="megamenu-panel">
                                        <div class="megamenu-tabs">
                                            <ul class="megamenu-tabs-nav">
                                                <li class="active"><a href="#">Women’s Clothing</a></li>
                                                <li><a href="#">Men’s Clothing</a></li>
                                                <li><a href="#">Mobile Phones</a></li>
                                                <li><a href="#">Acessories</a></li>
                                            </ul>
                                            <div class="megamenu-tabs-pane active">
                                                <div class="megamenu-lists">
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">HOT CATEGORIES <span class="badge badge-pill badge-danger">Hot</span></a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Blouses &amp; Shirts</a></li>
                                                        <li><a href="#">T-shirts</a></li>
                                                        <li><a href="#">Rompers</a></li>
                                                    </ul>
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">INTIMATES</a></li>
                                                        <li><a href="#">Bras</a></li>
                                                        <li><a href="#">Brief Sets</a></li>
                                                        <li><a href="#">Bostiers &amp; Corsets</a></li>
                                                        <li><a href="#">Panties</a></li>
                                                    </ul>
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">WEDDINGS &amp; EVENTS</a></li>
                                                        <li><a href="#">Wedding Dresses</a></li>
                                                        <li><a href="#">Evening Dresses</a></li>
                                                        <li><a href="#">Prom Dresses</a></li>
                                                        <li><a href="#">Flower Dresses</a></li>
                                                    </ul>
                                                </div>

                                                <div class="megamenu-lists">
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">BOTTOMS</a></li>
                                                        <li><a href="#">Skirts</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                        <li><a href="#">Leggings <span class="badge badge-pill badge-success">New</span></a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                    </ul>
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">OUTWEAR &amp; JACKETS</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">Basics Jackets</a></li>
                                                        <li><a href="#">Trench</a></li>
                                                        <li><a href="#">Leather &amp; Suede</a></li>
                                                    </ul>
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">ACESSORIES</a></li>
                                                        <li><a href="#">Sunglasses</a></li>
                                                        <li><a href="#">Headwear</a></li>
                                                        <li><a href="#">Baseball Caps</a></li>
                                                        <li><a href="#">Belts</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="megamenu-tabs-pane">
                                                <div class="megamenu-lists">
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">HOT SALE</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                        <li><a href="#">Tank Tops</a></li>
                                                        <li><a href="#">Polo</a></li>
                                                        <li><a href="#">Shirts</a></li>
                                                    </ul>
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">OUTERWEAR</a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Trench</a></li>
                                                        <li><a href="#">Parkas</a></li>
                                                        <li><a href="#">Sweaters</a></li>
                                                    </ul>
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">ACESSORIES</a></li>
                                                        <li><a href="#">Eyewear Frames</a></li>
                                                        <li><a href="#">Baseball Caps</a></li>
                                                        <li><a href="#">Scarves</a></li>
                                                        <li><a href="#">Belts</a></li>
                                                    </ul>
                                                </div>

                                                <div class="megamenu-lists">
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">BOTTOMS</a></li>
                                                        <li><a href="#">Casual Pants</a></li>
                                                        <li><a href="#">Cargo Pants</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                    </ul>
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">UNDERWEAR</a></li>
                                                        <li><a href="#">Boxers</a></li>
                                                        <li><a href="#">Briefs</a></li>
                                                        <li><a href="#">Robes</a></li>
                                                        <li><a href="#">Socks</a></li>
                                                    </ul>
                                                    <ul class="megamenu-list list-col-3">
                                                        <li class="megamenu-list-title"><a href="#">SUNGLASSES</a></li>
                                                        <li><a href="#">Pilot</a></li>
                                                        <li><a href="#">Wayfarer</a></li>
                                                        <li><a href="#">Square</a></li>
                                                        <li><a href="#">Round</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="megamenu-tabs-pane">
                                                <div class="megamenu-panel-row phones">
                                                    <div class="col-3">
                                                        <img class="w-100" src="img/bg-img/apple.jpg" alt="image">
                                                        <h4 class="mb-0 text-center">Apple</h4>
                                                    </div>
                                                    <div class="col-3">
                                                        <img class="w-100" src="img/bg-img/asus.jpg" alt="image">
                                                        <h4 class="mb-0 text-center">Asus</h4>
                                                    </div>
                                                    <div class="col-3">
                                                        <img class="w-100" src="img/bg-img/htc.jpg" alt="image">
                                                        <h4 class="mb-0 text-center">HTC</h4>
                                                    </div>
                                                    <div class="col-3">
                                                        <img class="w-100" src="img/bg-img/huawei.jpg" alt="image">
                                                        <h4 class="mb-0 text-center">Huawei</h4>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="megamenu-panel-row phones">
                                                    <div class="col-3">
                                                        <img class="w-100" src="img/bg-img/lenovo.jpg" alt="image">
                                                        <h4 class="mb-0 text-center">Lenovo</h4>
                                                    </div>
                                                    <div class="col-3">
                                                        <img class="w-100" src="img/bg-img/meizu.jpg" alt="image">
                                                        <h4 class="mb-0 text-center">Meizu</h4>
                                                    </div>
                                                    <div class="col-3">
                                                        <img class="w-100" src="img/bg-img/nokia.jpg" alt="image">
                                                        <h4 class="mb-0 text-center">Nokia</h4>
                                                    </div>
                                                    <div class="col-3">
                                                        <img class="w-100" src="img/bg-img/samsung.jpg" alt="image">
                                                        <h4 class="mb-0 text-center">Samsung</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="megamenu-tabs-pane">
                                                <div class="megamenu-panel-row">
                                                    <div class="col-6">
                                                        <img class="w-100" src="img/bg-img/cam-01.png" alt="image">
                                                    </div>
                                                    <div class="col-6">
                                                        <img class="w-100" src="img/bg-img/cam-02.png" alt="image">
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="megamenu-panel-row">
                                                    <div class="col-6">
                                                        <img class="w-100" src="img/bg-img/cam-03.png" alt="image">
                                                    </div>
                                                    <div class="col-6">
                                                        <img class="w-100" src="img/bg-img/cam-04.png" alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="nav-dropdown">
                                        <li><a href="about-us.html" target="_blank">About Us</a></li>
                                        <li><a href="faq.html" target="_blank">FAQ</a></li>
                                        <li><a href="contact.html" target="_blank">Contact</a></li>
                                        <li><a href="404.html" target="_blank">404</a></li>
                                        <li><a href="500.html" target="_blank">500</a></li>
                                        <li><a href="coming-soon.html" target="_blank">Coming Soon</a></li>
                                        <li><a href="maintenance-mood.html" target="_blank">Maintenance Mood</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul class="nav-dropdown">
                                        <li><a href="blog-with-left-sidebar.html" target="_blank">Blog Left Sidebar</a></li>
                                        <li><a href="blog-with-right-sidebar.html" target="_blank">Blog Right Sidebar</a></li>
                                        <li><a href="blog-with-no-sidebar.html" target="_blank">Blog No Sidebar</a></li>
                                        <li><a href="single-blog.html" target="_blank">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Account</a>
                                    <ul class="nav-dropdown">
                                        <li><a href="login.html" target="_blank">Login</a></li>
                                        <li><a href="register.html" target="_blank">Register</a></li>
                                        <li><a href="order-list.html" target="_blank">Order List</a></li>
                                        <li><a href="profile.html" target="_blank">Profile</a></li>
                                        <li><a href="faq.html" target="_blank">Support</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Elements</a>
                                    <div class="megamenu-panel">
                                        <div class="megamenu-lists">
                                            <ul class="megamenu-list list-col-4">
                                                <li><a href="accordians.html" target="_blank">Accordions</a></li>
                                                <li><a href="alerts.html" target="_blank">Alerts</a></li>
                                                <li><a href="badges.html" target="_blank">Badges</a></li>
                                                <li><a href="blockquotes.html" target="_blank">Blockquotes</a></li>
                                            </ul>
                                            <ul class="megamenu-list list-col-4">
                                                <li><a href="breadcumbs.html" target="_blank">Breadcrumbs</a></li>
                                                <li><a href="buttons.html" target="_blank">Buttons</a></li>
                                                <li><a href="forms.html" target="_blank">Forms</a></li>
                                                <li><a href="gallery.html" target="_blank">Gallery</a></li>
                                            </ul>
                                            <ul class="megamenu-list list-col-4">
                                                <li><a href="headings.html" target="_blank">Headings</a></li>
                                                <li><a href="icon-fontawesome.html" target="_blank">Icon Fontawesome</a></li>
                                                <li><a href="icon-7-stroke.html" target="_blank">Icon 7 Stroke</a></li>
                                                <li><a href="labels.html" target="_blank">Labels</a></li>
                                            </ul>
                                            <ul class="megamenu-list list-col-4">
                                                <li><a href="modals.html" target="_blank">Modals</a></li>
                                                <li><a href="paginations.html" target="_blank">Paginations</a></li>
                                                <li><a href="progress-bars.html" target="_blank">Progress Bars</a></li>
                                                <li><a href="tables.html" target="_blank">Tables</a></li>
                                            </ul>
                                        </div>
                                    </div>
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




<!-- NAVIGATION -->
<nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
      <!-- category nav -->
      <div class="category-nav">
            <span class="category-header">Categories <i class="fa fa-list"></i></span>
            <ul class="category-list">
                <li class="dropdown side-dropdown">
                    @foreach($cat as $cats)
                    <li><a href="{{URL::to('/shopname',['projects' => $cats->cat_id])}}">{{ $cats->cat_name}}</a></li>
                    @endforeach 
             
            </ul>
        </div>
        <!-- /category nav -->
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
                    
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->
</nav>
<!-- Slick -->

<link type="text/css" rel="stylesheet" href="{{asset('theme/css/slick.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('theme/css/slick-theme.css')}}" />

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="{{asset('theme/css/nouislider.min.css')}}" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">

<!-- Custom stlylesheet -->

<link type="text/css" rel="stylesheet" href="{{asset('theme/css/style.css')}}" />

<!-- jQuery Plugins -->
	<script src="{{asset('theme/js/jquery.min.js') }}"></script>
	<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('theme/js/slick.min.js')}}"></script>
	<script src="{{asset('theme/js/nouislider.min.js')}}"></script>
	<script src="{{asset('theme/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('theme/js/main.js')}}"></script>
               

@if(Session()->get('area_name'))

<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('hide');
	});
</script>

@else


<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>



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
    
    
    
    
    
    
    <!-- ***** Welcome Slides Area Start ***** -->
    <section class="welcome_area home-2" style="width:50%">
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
	

	@include('e-shop.footer')