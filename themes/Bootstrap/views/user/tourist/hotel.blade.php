<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hotels</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/style2.css">
		<script src="https://kit.fontawesome.com/9054737d4b.js" crossorigin="anonymous"></script>

		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body>
<!--==============================header=================================-->

		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
                    	<ul class="sf-menu">
                                <li ><a href="{{route('touristWelcome')}}">Home</a></li>
								<li><a href="{{route('dashboard')}}">Dashboard</a></li>

								<li class="current"><a  href="{{route('touristHotel')}}">Hotels</a></li>
								<li><a href="{{route('touristPlace')}}">Places</a></li>
								<li><a href="{{route('touristBlog')}}">BLOG</a></li>
							</ul>
                           
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
 
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website </div>
			<div class="container_12">
				<div class="heading">
					<h2>confortable place to stay</h2>
				
					@foreach ($hotel as $hotel)
					<div class="block2">
						<img src="{{asset('thumbnails/'.$hotel->thumbnail)}}" alt="" class="card-img-top img-fluid">
						<div class="extra_wrapper">
							<article class="service">
								<div class="service-icon">
								
									<span>	Service <i class="fas fa-utensils"></i>   &nbsp;&nbsp;&nbsp;|&nbsp;</span>
									<span>  Swimming pool <i class="fas fa-swimming-pool"></i> &nbsp;&nbsp;  &nbsp;|&nbsp;&nbsp;&nbsp;</span>
									<span>  Cleaning <i class="fas fa-broom"></i>   </span>
								</div> 
							</article>
						
								
							<strong class="text1 col2">Hotel Name: </strong>
							<label class="text1 col1">{{$hotel->hotel_name}}</label>	</br></br>
							<strong class="text1 col2">Hotel Type:</strong>
                            <label class="text1 col1">{{$hotel->type}} Star</label></br></br>
							<strong class="text1 col2">Hotel City:</strong>
                            <label class="text1 col1">{{$hotel->city}} {{$hotel->province}}</label></br></br>
							<strong class="text1 col2">Hotel Description:</strong>
							<p>{{$hotel->description}}</p>
							<p class="rate">
								<span>${{$hotel->price}} /</span>per Night
							</p>
							<?php $type= $hotel->type ?>
							<div class="rating">
							@for ($i =0; $i < $type ; $i++)
							<span><i class="fas fa-star"></i></span>

     						@endfor       
								<!-- <span><i class="fas fa-star"></i></span>
								<span><i class="fas fa-star"></i></span>
								<span><i class="fas fa-star"></i></span>
								<span><i class="fas fa-star"></i></span>
								<span><i class="far fa-star"></i></span> -->
							</div>

							<a href="{{Route('hotel.show',$hotel->id)}}" class="link1">LEARN MORE</a>
		</br></br>
						</div>
					</div>
					@endforeach
					
					
				</div>
				<!-- <div class="grid_3 prefix_1">
					
					<h5>CHOOse the country</h5>
					
					<br>

					<ul class="list">
						<li><a href="#">Albania</a></li>
						<li><a href="#">American Samoa</a></li>
						<li><a href="#">Antarctica</a></li>
						<li><a href="#">Argentina</a></li>
						<li><a href="#">Armenia</a></li>
						<li><a href="#">Australia</a></li>
						<li><a href="#">Austria</a></li>
						<li><a href="#">Bahrain</a></li>
						<li><a href="#">Barbados</a></li>
						<li><a href="#">Belgium</a></li>
						<li><a href="#">Belize</a></li>
						<li><a href="#">Bermudas</a></li>
					</ul>
					<a href="#" class="link1">VIEW A<span class="low">ll</span></a>
				</div> -->
			</div>
		</div>
<!--==============================footer=================================-->
<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
					<a href="{{route('touristContact')}}" class="fa fa-phone"></a>
						<a href="https://www.facebook.com/profile.php?id=100066857520486" class="fa fa-facebook"></a>
						<a href="https://twitter.com/Tuoristss" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Tourist guid (c) 2022 | <a href="#">Privacy Policy</a> | 
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
	</body>
</html>