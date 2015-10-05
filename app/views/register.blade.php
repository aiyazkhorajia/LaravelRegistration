@extends('master')

@section('content')

<div class="container">
	<section id="content">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3 form-box">
		<div class="form-top">
			<div class="form-top-left">
				<h3>Register</h3>
				<p>Enter your details to register with our website:</p>
			</div>
			<div class="form-top-right">
				<i class="fa fa-user"></i>
			</div>
		</div>
		
		<div class="form-bottom">
		{{Form::open(array('url'=>'/register','method'=>'post'))}}
		
			<div class="form-group">
				
				<input type="text" value="{{Input::old('email')}}" placeholder="Enter Email" required="" id="username" class="form-username form-control" name="email"/>
			</div>
			<div class="form-group">
				<input type="text" value="{{Input::old('username')}}" placeholder="Enter Username" required="" id="username"  class="form-username form-control" name="username"/>
			</div>
			<div class="form-group">
				<input type="password"  placeholder="Enter Password" required="" id="password" name="password" class="form-username form-control"/>
			</div>
			<div class="form-group">
				<input type="password"  placeholder="Confirm Password" required="" id="password" name="password_confirmation" class="form-username form-control"/>
			</div>
			<div class="form-group">
				<input type="submit" value="Register" class="lg-btn _w50_"/>
				<a href="/forgotpassword">Forgot password?</a>
				<a href="/login">Login</a>
			</div>
			
			{{Form::close()}}
		</div>
		
		<div class="form-social-block">
			<p class="_MTB10_">Or Signup with</p>
			<div class="social-login-buttons">
				<a href="/social/facebook" class="zocial btn btn-link-1 btn-link-1-facebook"><i class="fa fa-facebook"></i>Facebook</a>
				<a href="/social/google" class="zocial btn btn-link-1 btn-link-1-google-plus"><i class="fa fa-google-plus"></i>Google+</a>
				<a href="/social/twitter" class="zocial btn btn-link-1 btn-link-1-twitter"><i class="fa fa-twitter"></i> Twitter</a>
			</div>
		</div>
		
		</div>
		</div>
	</section>
</div>
@stop