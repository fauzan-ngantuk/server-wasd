<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="{{ url('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">      
		<link href="{{ url('/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
		<link href="{{ url('/themes/css/bootstrappage.css') }}" rel="stylesheet">
		
		<!-- global styles -->
		<link href="{{ url('/themes/css/flexslider.css') }}" rel="stylesheet">
		<link href="{{ url('/themes/css/main.css') }}" rel="stylesheet">

		@yield('link')
</head>
<body>
	<div id="top-bar" class="container">
		<div class="row">
			<div class="span4">
				<a href="{{ route('home') }}" class="logo pull-left"><img src="{{ url('/img/wasd.png') }}" class="site_logo" alt=""></a>
			</div>
			<div class="span8">
				<div class="account pull-right">
					<ul class="user-menu">				
						<li><a href="{{ route('product') }}">Products</a></li>
						<li><a href="{{ route('cart') }}">Your Cart</a></li>
						<li><a href="{{ route('checkout') }}">Checkout</a></li>					
						<li><a href="{{ route('register') }}">Login</a></li>		
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper" class="container">
		<section class="navbar main-menu"></section>
		
			@yield('content')

		<section id="footer-bar">
			<div class="row">
				<div class="span3">
					<h4>Navigation</h4>
					<ul class="nav">
						<li><a href="{{ route('home') }}">Homepage</a></li>  
						<li><a href="{{ route('contact') }}">Contac Us</a></li>
						<li><a href="{{ route('cart') }}">Your Cart</a></li>
						<li><a href="{{ route('register') }}">Login</a></li>							
					</ul>					
				</div>
				<div class="span4">
					
				</div>
				<div class="span5">
					<p class="logo"><img src="{{ url('/img/wasd.png') }}" class="site_logo" alt=""></p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
					<br/>
					<span class="social_icons">
						<a class="facebook" href="#">Facebook</a>
						<a class="twitter" href="#">Twitter</a>
						<a class="skype" href="#">Skype</a>
						<a class="vimeo" href="#">Vimeo</a>
					</span>
				</div>					
			</div>	
		</section>
		<section id="copyright">
			<span>Copyright 2013 bootstrappage template  All right reserved.</span>
		</section>
	</div>
	<!-- scripts -->
		<script src="{{ url('/themes/js/jquery-1.7.2.min.js') }}"></script>
		<script src="{{ url('/bootstrap/js/bootstrap.min.js') }}"></script>			
		<script src="{{ url('/themes/js/superfish.js') }}"></script>	
		<script src="{{ url('/themes/js/jquery.scrolltotop.js') }}"></script>
		@yield('jquery')
			
</body>
</html>