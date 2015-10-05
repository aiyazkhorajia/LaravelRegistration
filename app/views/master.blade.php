<!DOCTYPE html>
<html lang="en">

    <head>
		 @include('includes.head')
	</head>
	<body>
	    <div class="top-content">
			@include('includes.menu')
            <div class="inner-bg">
				<div class="container">
									
					<section id="content">
						@if($errors->has())
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">
								×
							</button>
							@foreach ($errors->all() as $error)
							<li>
								{{ $error }}
							</li>
							@endforeach
						</div>
						@endif
						
						@if(Session::has('error_msg'))
						<div class="alert alert-danger">{{Session::get('error_msg')}}</div>
						@endif
						
						@if(Session::has('success_msg'))
						<div class="alert alert-success">{{Session::get('success_msg')}}</div>
						@endif
						
						@yield('content')
					</section>
				</div>
			</div>
		</div>
		<footer id="footer" class="midnight-blue">
			@include('includes.footer')
		</footer>
		
	</body>
</html>