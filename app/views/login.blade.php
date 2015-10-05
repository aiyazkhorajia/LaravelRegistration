@extends('master')

@section('content')
<div class="row">
    <div class="col-sm-6 col-sm-offset-3 form-box">
		
		<div class="form-top">
			<div class="form-top-left">
				<h3>Login to our site</h3>
				<p>Enter your username and password to log on:</p>
			</div>
			<div class="form-top-right">
				<i class="fa fa-key"></i>
			</div>
		</div>
		
		<div class="form-bottom">
			{{Form::open(array('url'=>'/login','method'=>'post'))}}
			<div class="form-group">
				<label class="sr-only" for="form-username">Username</label>
				<input type="text"  value="{{Input::old('identity')}}" placeholder="Username/Email" class="form-username form-control" required="" id="username" name="identity">
			</div>
			<div class="form-group">
				<label class="sr-only" for="form-password">Password</label>
				<input type="password" id="password" name="password" placeholder="Password" class="form-password form-control">
			</div>
			
			

				<input type="submit" class="lg-btn _w50_" value="Log in" />
				<a href="/forgotpassword">forgot password?</a>
				<a href="/register">Register</a>

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

@stop