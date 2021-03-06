<nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">Your Logo</a>
		</div>
		
		<div class="collapse navbar-collapse navbar-right">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="blog-item.html">Blog Single</a></li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="404.html">404</a></li>
						<li><a href="shortcodes.html">Shortcodes</a></li>
					</ul>
				</li>
				@if(Sentry::check())
					
                    <li><a href="/logout">Logout</a></li>
                @else
					<li><a href="{{ route('login') }}">Login</a></li>
					
                @endif
			       
			</ul>
		</div>
	</div><!--/.container-->
</nav>