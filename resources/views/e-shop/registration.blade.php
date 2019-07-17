@include('e-shop/header_shop')
				<!-- Modal content-->
					<div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign up</h1><br>
			
			<input type="text" id="inputUser" class="form-control" placeholder="User name" required="" autofocus="">
			
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <input type="password" id="inputPasswordConf" class="form-control" placeholder="Confirm Password" required="">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
			<button class="btn btn-primary btn-block" type="button" id="btn-signup"><a href="login"><i class="fas fa-sign-in-alt"></i>Already have an account?Login!</a></button>
            </form>

            
            <br>
            
    </div>
  

@include('e-shop/footer_shop')