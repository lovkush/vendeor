@include('layouts.app')

 

    <!-- ***** Checkout Area Start ***** -->
    <div class="checkout_area section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout_details_area checkout-1 mt-50 clearfix">
                        <div class="row">
							<div class="col-md-8 mb-3">
                        <h5>Billing Details</h5>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" placeholder="First Name" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" placeholder="Last Name" value="" required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="email_address">Email Address</label>
                                    <input type="email" class="form-control" id="email_address" placeholder="Email Address" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="number" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="street_address">Street address</label>
                                    <textarea class="form-control" id="street_address" cols="20" rows="5" placeholder="Address"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="apartment_suite">Apartment/Suite/Unit</label>
                                    <input type="text" class="form-control" id="apartment_suite" placeholder="Apartment, suite, unit etc" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="city">Town/City</label>
                                    <input type="text" class="form-control" id="city" placeholder="Town/City" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" placeholder="State" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="postcode">Postcode/Zip</label>
                                    <input type="text" class="form-control" id="postcode" placeholder="Postcode / Zip" value="">
                                </div>
                            </div>

                            <!-- Different Shipping Address -->
                            
                        </form>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h5>Payment Methods</h5>
                               <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1"> Cash on Delivery</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">payumoney</label>
                                </div>

                                <br>                           

                                <a href="register.html" class="btn bigshop-btn">Continue</a>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="checkout_pagination mt-50">
                        <a href="cart.html" class="btn bigshop-btn">Go to Cart</a>
                        <a href="checkout-2.html" class="btn bigshop-btn">Continue</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ***** Checkout Area End ***** -->

    <!-- ***** Special Featured Area Start ***** -->
    <section class="special_feature_area d-md-flex align-items-center">
        <!-- Single Feature Area -->
        <div class="single_feature_area d-flex align-items-center justify-content-center">
            <div class="feature_icon">
                <i class="ti-truck"></i>
                <span><i class="ti-check" aria-hidden="true"></i></span>
            </div>
            <div class="feature_content">
                <h6>FREE SHIPPING</h6>
                <p>For orders above $100</p>
            </div>
        </div>
        <!-- Single Feature Area -->
        <div class="single_feature_area d-flex align-items-center justify-content-center">
            <div class="feature_icon">
                <i class="ti-headphone-alt"></i>
                <span><i class="ti-check" aria-hidden="true"></i></span>
            </div>
            <div class="feature_content">
                <h6>Customer Care</h6>
                <p>24/7 Friendly Support</p>
            </div>
        </div>
        <!-- Single Feature Area -->
        <div class="single_feature_area d-flex align-items-center justify-content-center">
            <div class="feature_icon">
                <i class="ti-back-left"></i>
                <span><i class="ti-check" aria-hidden="true"></i></span>
            </div>
            <div class="feature_content">
                <h6>Happy Returns</h6>
                <p>7 Days free Returns</p>
            </div>
        </div>
        <!-- Single Feature Area -->
        <div class="single_feature_area d-flex align-items-center justify-content-center">
            <div class="feature_icon">
                <i class="ti-credit-card"></i>
                <span><i class="ti-check" aria-hidden="true"></i></span>
            </div>
            <div class="feature_content">
                <h6>100% Money Back</h6>
                <p>If product is damaged</p>
            </div>
        </div>
    </section>
    <!-- ***** Special Featured Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer_area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area Start -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_footer_area">
                        <div class="footer_heading mb-30">
                            <h6>About us</h6>
                        </div>
                        <div class="footer_content">
                            <p>Bigshop is international fashion &amp; accessories online shop. We provide 100% quality products for your needs.</p>
                            <p>Phone: +880 123 777 444</p>
                            <p>Email: support@bigshop.com</p>
                        </div>
                        <div class="footer_social_area mt-15">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_footer_area">
                        <div class="footer_heading mb-30">
                            <h6>Account Information</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Your Account</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Free Shipping Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Your Cart</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Return Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Free Coupon</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Delivary Info</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_footer_area">
                        <div class="footer_heading mb-30">
                            <h6>Support</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Help</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Product Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms &amp; Conditions</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Payment Method</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Affiliate Proggram</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class="col-12 col-md-6 col-lg">
                    <div class="single_footer_area">
                        <div class="footer_heading mb-30">
                            <h6>Join our mailing list</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your E-mail Addrees">
                                <button type="submit" class="submit"><i class="ti-check" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="single_footer_area mt-30">
                        <div class="footer_heading mb-15">
                            <h6>Download our Mobile Apps</h6>
                        </div>
                        <div class="apps_download">
                            <a href="#"><img src="img/core-img/play-store.png" alt="Play Store"></a>
                            <a href="#"><img src="img/core-img/app-store.png" alt="Apple Store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area Start -->
        <div class="footer_bottom_area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Content -->
                    <div class="col-12 col-md">
                        <div class="copywrite_text text-left d-flex align-items-center">
                            <p>Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#">Designing World</a></p>
                        </div>
                    </div>
                    <!-- Payment Method -->
                    <div class="col-12 col-md">
                        <div class="payment_method text-right">
                            <img src="img/payment-method/paypal.png" alt="">
                            <img src="img/payment-method/maestro.png" alt="">
                            <img src="img/payment-method/western-union.png" alt="">
                            <img src="img/payment-method/discover.png" alt="">
                            <img src="img/payment-method/american-express.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->
<!-- jQuery (Necessary for All JavaScript Plugins) -->
	<script src="{{ asset('shop/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
	<script src="{{ asset('shop/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
	<script src="{{ asset('shop/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
	<script src="{{ asset('shop/js/plugins.js') }}"></script>
    <!-- Active js -->
	<script src="{{ asset('shop/js/active.js') }}"></script>

</body>
</html>