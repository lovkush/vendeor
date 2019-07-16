@extends('layouts.app')

@section('content')



 <!-- ***** Login Area Start ***** -->
    <div class="bigshop_reg_log_area bg-img section_padding_50">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="login_form" style="padding-top:40px">
                        <!-- sign in with social site -->

						<div class="logo_area text-center" style="padding-bottom:10px">
                                <a href="">Registration</a>
                        </div>

                        <!-- sign in manual form -->
                        <div class="login_manual_form">
                           <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
							   
							   
							   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Name</label>

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
							   
							   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
							   
							   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
							   
							    <div class="form-group">
                            <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                            </form>
                       
						
						 <!-- new account -->
                        <div class="forget_pass mt-15">
                            <a href='{!! url('/login');!!}'>Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
</div>
    <!-- ***** Login Area End ***** -->
@include('e-shop.footer_shop')

@endsection


