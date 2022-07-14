
<style>

/*
Blog post entries
*/

.entry-card {
    -webkit-box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
}

.entry-content {
    background-color: #fff;
    padding: 36px 36px 36px 36px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

.entry-content .entry-title a {
    color: #333;
}

.entry-content .entry-title a:hover {
    color: #4782d3;
}

.entry-content .entry-meta span {
    font-size: 12px;
}

.entry-title {
    font-size: .95rem;
    font-weight: 500;
    margin-bottom: 15px;
}

.entry-thumb {
    display: block;
    position: relative;
    overflow: hidden;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.entry-thumb img {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.entry-thumb .thumb-hover {
    position: absolute;
    width: 100px;
    height: 100px;
    background: rgba(71, 130, 211, 0.85);
    display: block;
    top: 50%;
    left: 50%;
    color: #fff;
    font-size: 40px;
    line-height: 100px;
    border-radius: 50%;
    margin-top: -50px;
    margin-left: -50px;
    text-align: center;
    transform: scale(0);
    -webkit-transform: scale(0);
    opacity: 0;
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
}

.entry-thumb:hover .thumb-hover {
    opacity: 1;
    transform: scale(1);
    -webkit-transform: scale(1);
}

.article-post {
    border-bottom: 1px solid #eee;
    padding-bottom: 70px;
}

.article-post .post-thumb {
    display: block;
    position: relative;
    overflow: hidden;
}

.article-post .post-thumb .post-overlay {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    transition: all .3s;
    -webkit-transition: all .3s;
    opacity: 0;
}

.article-post .post-thumb .post-overlay span {
    width: 100%;
    display: block;
    vertical-align: middle;
    text-align: center;
    transform: translateY(70%);
    -webkit-transform: translateY(70%);
    transition: all .3s;
    -webkit-transition: all .3s;
    height: 100%;
    color: #fff;
}

.article-post .post-thumb:hover .post-overlay {
    opacity: 1;
}

.article-post .post-thumb:hover .post-overlay span {
    transform: translateY(50%);
    -webkit-transform: translateY(50%);
}

.post-content .post-title {
    font-weight: 500;
}

.post-meta {
    padding-top: 15px;
    margin-bottom: 20px;
}

.post-meta li:not(:last-child) {
    margin-right: 10px;
}

.post-meta li a {
    color: #999;
    font-size: 13px;
}

.post-meta li a:hover {
    color: #4782d3;
}

.post-meta li i {
    margin-right: 5px;
}

.post-meta li:after {
    margin-top: -5px;
    content: "/";
    margin-left: 10px;
}

.post-meta li:last-child:after {
    display: none;
}

.post-masonry .masonry-title {
    font-weight: 500;
}

.share-buttons li {
    vertical-align: middle;
}

.share-buttons li a {
    margin-right: 0px;
}

.post-content .fa {
    color: #ddd;
}

.post-content a h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 0px;
}

.article-post .owl-carousel {
    margin-bottom: 20px !important;
}

.post-masonry h4 {
    text-transform: capitalize;
    font-size: 1rem;
    font-weight: 700;
}
.mb40 {
    margin-bottom: 40px !important;
}
.mb30 {
    margin-bottom: 30px !important;
}
.media-body h5 a {
    color: #555;
}
.categories li a:before {
    content: "\f0da";
    font-family: 'FontAwesome';
    margin-right: 5px;
}
/*
Template sidebar
*/

.sidebar-title {
    margin-bottom: 1rem;
    font-size: 1.1rem;
}

.categories li {
    vertical-align: middle;
}

.categories li > ul {
    padding-left: 15px;
}

.categories li > ul > li > a {
    font-weight: 300;
}

.categories li a {
    color: #999;
    position: relative;
    display: block;
    padding: 5px 10px;
    border-bottom: 1px solid #eee;
}

.categories li a:before {
    content: "\f0da";
    font-family: 'FontAwesome';
    margin-right: 5px;
}

.categories li a:hover {
    color: #444;
    background-color: #f5f5f5;
}

.categories > li.active > a {
    font-weight: 600;
    color: #444;
}

.media-body h5 {
    font-size: 15px;
    letter-spacing: 0px;
    line-height: 20px;
    font-weight: 400;
}

.media-body h5 a {
    color: #555;
}

.media-body h5 a:hover {
    color: #4782d3;
}
</style>
<br>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div >
		<h3>{{$hotel->hotel_name}}</h3>
            <article>
                <img src="{{asset('thumbnails/'.$hotel->thumbnail)}}" alt="" class="img-fluid mb30">
                <div class="post-content">
                    
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">{{$hotel->user->name}}</a>
                        </li>
                      
                      
                    </ul>
                  
                    <p>{{$hotel->description}} </p>
                    <lable>City:</lable>
                    <p>{{$hotel->city}} </p>
                    <lable>Address:</lable>
                    <p>{{$hotel->address}} </p>
                    
                    <ul class="list-inline share-buttons">
                       
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-facebook si-gray-round">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-twitter si-gray-round">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-linkedin si-gray-round">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
            
                  
                </div>
            </article>
            <!-- post article-->

      
</div>
<div class="col-md-12 mb40">
  
           
		
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <style>

				.section {
					position: relative;
					height: 100vh;
				}

				.section .section-center {
					position: absolute;
					top: 50%;
					left: 0;
					right: 0;
					-webkit-transform: translateY(-50%);
					transform: translateY(-50%);
				}

				#booking {
					font-family: 'Raleway', sans-serif;
				}

				.booking-form {
					position: relative;
					max-width: 642px;
					width: 100%;
					margin: auto;
					padding: 40px;
					overflow: hidden;
					background-image: url('{{asset('thumbnails/'.$hotel->thumbnail)}}');
					background-size: cover;
					border-radius: 5px;
					z-index: 20;
				}

				.booking-form::before {
					content: '';
					position: absolute;
					left: 0;
					right: 0;
					bottom: 0;
					top: 0;
					background: rgba(0, 0, 0, 0.7);
					z-index: -1;
				}

				.booking-form .form-header {
					text-align: center;
					position: relative;
					margin-bottom: 30px;
				}

				.booking-form .form-header h1 {
					font-weight: 700;
					text-transform: capitalize;
					font-size: 42px;
					margin: 0px;
					color: #fff;
				}

				.booking-form .form-group {
					position: relative;
					margin-bottom: 30px;
				}

				.booking-form .form-control {
					background-color: rgba(255, 255, 255, 0.2);
					height: 60px;
					padding: 0px 25px;
					border: none;
					border-radius: 40px;
					color: #fff;
					-webkit-box-shadow: 0px 0px 0px 2px transparent;
					box-shadow: 0px 0px 0px 2px transparent;
					-webkit-transition: 0.2s;
					transition: 0.2s;
				}

				.booking-form .form-control::-webkit-input-placeholder {
					color: rgba(255, 255, 255, 0.5);
				}

				.booking-form .form-control:-ms-input-placeholder {
					color: rgba(255, 255, 255, 0.5);
				}

				.booking-form .form-control::placeholder {
					color: rgba(255, 255, 255, 0.5);
				}

				.booking-form .form-control:focus {
					-webkit-box-shadow: 0px 0px 0px 2px #ff8846;
					box-shadow: 0px 0px 0px 2px #ff8846;
				}

				.booking-form input[type="date"].form-control {
					padding-top: 16px;
				}

				.booking-form input[type="date"].form-control:invalid {
					color: rgba(255, 255, 255, 0.5);
				}

				.booking-form input[type="date"].form-control+.form-label {
					opacity: 1;
					top: 10px;
				}

				.booking-form select.form-control {
					-webkit-appearance: none;
					-moz-appearance: none;
					appearance: none;
				}

				.booking-form select.form-control:invalid {
					color: rgba(255, 255, 255, 0.5);
				}

				.booking-form select.form-control+.select-arrow {
					position: absolute;
					right: 15px;
					top: 50%;
					-webkit-transform: translateY(-50%);
					transform: translateY(-50%);
					width: 32px;
					line-height: 32px;
					height: 32px;
					text-align: center;
					pointer-events: none;
					color: rgba(255, 255, 255, 0.5);
					font-size: 14px;
				}

				.booking-form select.form-control+.select-arrow:after {
					content: '\279C';
					display: block;
					-webkit-transform: rotate(90deg);
					transform: rotate(90deg);
				}

				.booking-form select.form-control option {
					color: #000;
				}

				.booking-form .form-label {
					position: absolute;
					top: -10px;
					left: 25px;
					opacity: 0;
					color: #ff8846;
					font-size: 11px;
					font-weight: 700;
					text-transform: uppercase;
					letter-spacing: 1.3px;
					height: 15px;
					line-height: 15px;
					-webkit-transition: 0.2s all;
					transition: 0.2s all;
				}

				.booking-form .form-group.input-not-empty .form-control {
					padding-top: 16px;
				}

				.booking-form .form-group.input-not-empty .form-label {
					opacity: 1;
					top: 10px;
				}

				.booking-form .submit-btn {
					color: #fff;
					background-color: #e35e0a;
					font-weight: 700;
					height: 60px;
					padding: 10px 30px;
					width: 100%;
					border-radius: 40px;
					border: none;
					text-transform: uppercase;
					font-size: 16px;
					letter-spacing: 1.3px;
					-webkit-transition: 0.2s all;
					transition: 0.2s all;
				}

				.booking-form .submit-btn:hover,
				.booking-form .submit-btn:focus {
					opacity: 0.9;
				}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
                                <script type='text/javascript'></script> 
    <div id="booking" class="section">
		
			<div class="container">
				<div class="">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
						<form method="POST" action="{{ route('bookhotel') }}"id="bookingForm">
						@if(Session::get('success'))
							<div class="alert alert-success">
								{{Session::get('success')}}
								</div>
							@endif
						
							@if(Session::get('fail'))
							<div class="alert alert-danger">
								{{Session::get('fail')}}
								</div>
							@endif
						@csrf
						
							<div class="form-group">
								<input name="tourist_name" class="form-control" type="text" placeholder="Enter your name...">
								<span class="form-label">Name</span>
							</div>
							<div class="form-group">
								<input name="country"  class="form-control" type="text" placeholder="Country...">
								<span class="form-label">Country</span>
							</div>
							
								
									<div class="form-group">
										<input  name="email" class="form-control" type="email" placeholder="Enter your Email">
										<span class="form-label">Email</span>
									</div>
							
								<input  name="hotel_id" class="form-control" type="hidden" value="{{$hotel->id}}">
								
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input name="checkin" class="form-control" type="date" required>
										<span class="form-label">Check In</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input name="checkout" class="form-control" type="date" required>
										<span class="form-label">Check out</span>
									</div>
								</div>
							</div>
							<div class="tmRadio">
								<p>Comfort</p>
								<input name="comfort" value="Cheap" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' checked/>
								<span>Cheap</span>
								<input name="comfort" value="Standart"type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' />
								<span>Standart</span>
								<input name="comfort" value="Lux" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="comfort", groups=[RadioGroup])' />
								<span>Lux</span>
							</div>
							<div class="row">
							<div class="col-md-4">
									<div class="form-group">
										<select name="adults" class="form-control" required>
											<option value="" selected hidden>no of adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
							</div>

								<div class="col-md-4">
									<div class="form-group">
										<select name="childrens" class="form-control" required>
											<option value="" selected hidden>no of children</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select name="rooms" class="form-control" required>
											<option value="" selected hidden>no of rooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
								</div>
							</div>
							
							
							<div class="form-group">
								<textarea  name="message"  class="form-control"placeholder="send us message..."></textarea>
								<span class="form-label">Message</span>
							</div>
							
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>    
   
