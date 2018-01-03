@extends('layouts.user')
@section('link')
@endsection
@section('content')
	<section  class="homepage-slider" id="home-slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="{{ url('/img/carousel/banner-1.jpg') }}" alt="" />
					</li>
					<li>
						<img src="{{ url('/img/carousel/banner-2.jpg') }}" alt="" />
						<div class="intro">
							<h1>Mid season sale</h1>
							<p><span>Up to 50% Off</span></p>
							<p><span>On selected items online and in stores</span></p>
						</div>
					</li>
				</ul>
			</div>			
	</section>

		<section class="header_text">
			We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
			<br/>Don't miss to use our cheap abd best bootstrap templates.
		</section>
	
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="{{ route('productdetail') }}"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="{{ route('productdetail') }}" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$17.25</p>
													</div>												
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="{{ route('productdetail') }}"><img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
														<a href="{{ route('productdetail') }}" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>
													</div>
												</li>					
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
@endsection

@section('jquery')
	<script src="{{ url('/themes/js/common.js') }}"></script>
		<script src="{{ url('/themes/js/jquery.flexslider-min.js') }}"></script>
			<script type="text/javascript">
				$(function() {
					$(document).ready(function() {
						$('.flexslider').flexslider({
							animation: "fade",
							slideshowSpeed: 4000,
							animationSpeed: 600,
							controlNav: false,
							directionNav: true,
							controlsContainer: ".flex-container" // the container that holds the flexslider
						});
					});
				});
			</script>
@endsection