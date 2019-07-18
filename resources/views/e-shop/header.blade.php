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
    
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
                               <h5 class="text-capitalize"><a href="login.html" target="_blank"><i class="ti-location-pin" aria-hidden="true"></i> {{Session::get('area_name'),Session::reflash('area_name')}}</a></h5>
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
                                       <a href="index-3.html">VENDEOR</a>
                                   </div>
                               </div>
                               <div class="header_meta_info_area">
                                   
                                   <div class="hero_meta_area d-flex align-items-center align-to-right">
                                       <!-- Wishlist Area -->
                                       <div class="wishlist">
                                           <a href='{!! url('/register');!!}'><i class="ti-user"></i></a>
                                       </div>
                                       <!-- Cart Area -->
                                       
                                   </div>
                               </div>

                               <!-- Main Menus Wrapper -->
                               <div class="nav-menus-wrapper">
                                   <ul class="nav-menu nav-menu-centered">
                                       <li><a href="#">Today's deal</a></li>
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
   

  