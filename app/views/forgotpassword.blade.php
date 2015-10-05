@extends('master')

@section('content')
<div class="container">
	<section id="content">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3 form-box">
		
		<div class="form-top">
			<div class="form-top-left">
				<h3>Forgot Password</h3>
				<p>Email will be sent to your registered email.</p>
			</div>
			<div class="form-top-right">
				<i class="fa fa-search"></i>
			</div>
		</div>
		
		<div class="form-bottom">
			{{Form::open(array('url'=>'/forgotpassword','method'=>'post'))}}
			<div class="form-group">
				<input value="{{Input::old('email')}}" type="text" placeholder="Enter email" required="" id="username" name="email" class="form-username form-control" />
			</div>
			<div class="form-group">
				<input type="submit" value="Reset Password" class="lg-btn _w50_" />
				<a href="/register">Register</a>
				<a href="/login">Login</a>
			</div>
			{{Form::close()}}
		</div>
		<div class="form-social-block">
		</div>
		</div>
		</div>
	</section>
</div>
@stop