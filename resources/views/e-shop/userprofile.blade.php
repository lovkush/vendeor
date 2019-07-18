@include('layouts/app')

<!-- <<<<<<<<<<<<<<<<<<<< My Profile Area Start >>>>>>>>>>>>>>>>>>>>>>>> -->
    <div class="my_profile_area section_padding_100">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-3">
                    <div class="profile-thumb" style="background-image: url(img/bg-img/user.jpg);"></div>
                    <form class="profile-thumb-upload mt-15">
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="upload-new-thumb">
                        </div>
                    </form>
                </div>
                
                @foreach($users1 as $profile)
                <div class="col-12 col-md-6">
                    <div class="profile_form">
                        <form enctype="multipart/form-data" class="text-left" method="post" action="{{ url('/') }}" name="edit_product" id="edit_product" novalidate="novalidate">
                            {{ csrf_field() }}
              
                            <div class="row">
                                <div class="col-12 col-md">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" name="add_work" id="add_work" value="">                                 
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="email" class="form-control" id="last_name" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" value="" disabled>
                            </div>
                            <div class="form-group">
                                <label for="p_number">Phone Number</label>
                                <input type="email" class="form-control" id="p_number" value="+99256358410">
                            </div>
                            <div class="form-group">
                                <label for="create_password">Create Password</label>
                                <input type="password" id="create_password" class="form-control" aria-describedby="passwordHelpBlock">
                                <small id="passwordHelpBlock" class="form-text text-muted">If you don't want to change password, please leave blank.</small>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" id="confirm_password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Update Information</button>
                        </form>
                    </div>
                </div>
                @endforeach

                <div class="col-12 col-md-3">
                    <div class="sidebar_widget_menu">
                        <nav id="sidebar_wid_menu">
                            <ul>
                                <li><a href="#"><i class="ti-unlock"></i> Login</a></li>
                                <li><a href="#"><i class="ti-user"></i> Register</a></li>
                                <li><a href="#"><i class="ti-menu"></i> Order List</a></li>
                                <li><a href="#"><i class="ti-heart"></i> Wishlist</a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i> Compare</a></li>
                                <li><a href="#"><i class="ti-menu"></i> Order List</a></li>
                                <li><a href="#"><i class="ti-heart"></i> Wishlist</a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i> Compare</a></li>
                                <li><a href="#"><i class="ti-headphone-alt"></i> Support</a></li>
                                <li><a href="#"><i class="ti-lock"></i> Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <<<<<<<<<<<<<<<<<<<< My Profile Area End >>>>>>>>>>>>>>>>>>>>>>>> -->
@include('e-shop/footer_shop')