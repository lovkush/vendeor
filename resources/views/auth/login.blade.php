@extends('layouts.app')

@section('content')



 <!-- ***** Login Area Start ***** -->
    <div class="bigshop_reg_log_area bg-img section_padding_50">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="login_form" style="padding-top:40px">
                        <!-- sign in with social site -->
						<div class="logo_area text-center" style="padding-bottom:10px">
                                <a href="">Login</a>
                        </div>
                        <!-- sign in manual form -->
                        <div class="login_manual_form">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
								<input type="hidden" value="{{Session::get('area_name'),Session::reflash('area_name')}}" name="id"/>
								
								
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
								
								
																
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-check">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customChe">
                                        <label class="custom-control-label" for="customChe">Remember Me</label>
                                    </div>
                                </div>
								
                                <button type="submit" class="btn bigshop-btn w-100">Submit</button>
                            </form>
                        </div>
                        <!-- forget password -->
                        <div class="forget_pass mt-15">
                            <a href="#">Forget Password?</a>
                        </div>
						
						 <!-- new account -->
                        <div class="forget_pass mt-15">
                            <a href='{!! url('/register');!!}'>Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
</div>
    <!-- ***** Login Area End ***** -->
@include('e-shop.footer_shop')

@endsection


