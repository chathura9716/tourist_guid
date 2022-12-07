@extends('layouts.frontend')
@section('content')
<style>
  body{
    margin-top:20px;
}
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
<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mb40">
            <article>
                <img src="{{asset('thumbnails/'.$vehical->thumbnail)}}" alt="" class="img-fluid mb30">
                <div class="post-content">
                    <h3>{{$vehical->model}}</h3>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">{{$vehical->driver_name}}</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#"> {{ $vehical->licence_no}}</a>
                        </li>
                      
                    </ul>
                
                 
                    <p>{{$vehical->type}} </p>
                    <fa-ul>
                    <h3>City</h3>
                    <p>{{$vehical->city}} </p>
                    <h3>Vehical number</h3>
                    <p>{{$vehical->vehical_no}} </p>
</ul>
                    <h3>Vehical type</h3>
                    <p>{{$vehical->type}} </p>
                    <h3>Driver Contact Number</h3>
                    <p>{{$vehical->contact}} </p>
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
        </div>
  
    </div>
            <!-- post article-->

     
    
</div>

<style>


* {
  box-sizing: border-box;
}



.wrapper {
  display: flex;
  width: 90%;
  justify-content: space-around;
}

.card {
  width: 280px;
  height: 360px;
  border-radius: 15px;
  padding: 1.5rem;
  background: white;
  position: relative;
  display: flex;
  align-items: flex-end;
  transition: 0.4s ease-out;
  box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
}
.card:hover {
  transform: translateY(20px);
}
.card:hover:before {
  opacity: 1;
}
.card:hover .info {
  opacity: 1;
  transform: translateY(0px);
}
.card:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  border-radius: 15px;
  background: rgba(0, 0, 0, 0.6);
  z-index: 2;
  transition: 0.5s;
  opacity: 0;
}
.card img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 15px;
}
.card .info {
  position: relative;
  z-index: 3;
  color: white;
  opacity: 0;
  transform: translateY(30px);
  transition: 0.5s;
}
.card .info h1 {
  margin: 0px;
}
.card .info p {
  letter-spacing: 1px;
  font-size: 15px;
  margin-top: 8px;
}
.card .info button {
  padding: 0.6rem;
  outline: none;
  border: none;
  border-radius: 3px;
  background: white;
  color: black;
  font-weight: bold;
  cursor: pointer;
  transition: 0.4s ease;
}
.card .info button:hover {
  background: dodgerblue;
  color: white;
}

    </style>
<section class="u-clearfix u-section-5" id="carousel_d79b">
      <div class="u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-size-28">
              <div class="u-layout-col">
                <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-60 u-image-1" data-image-width="150" data-image-height="102">
                  <div class="u-container-layout u-container-layout-1"></div>
                </div>
              </div>
            </div>
            <div class="u-size-32">
              	<div class="u-layout-row">
                	<div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-2">
                  		<div class="u-container-layout u-valign-top u-container-layout-2">
                    		<h2 class="u-text u-text-default u-text-1">Make your Trip</h2>
								<div class="u-expanded-width u-form u-form-1">
								<div class="container">
				<div class="">
					<div class="booking-form">
						<div class="form-header">
							
						</div>
						<form method="POST" action="{{ route('bookvehical') }}"id="bookingForm">
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
							<span class="form-label">Name</span>
								<input name="tourist_name" class="form-control" type="text" placeholder="Enter your name...">
								
							</div>
							<div class="form-group">
							<span class="form-label">Country</span>
								<input name="country"  class="form-control" type="text" placeholder="Country...">
							
							</div>
							
								
									<div class="form-group">
									<span class="form-label">Email</span>
										<input  name="email" class="form-control" type="email" placeholder="Enter your Email">
									
									</div>
							
								<input  name="vehical_id" class="form-control" type="hidden" value="{{$vehical->id}}">
								
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<span class="form-label">Pick-Up date</span>
										<input name="pickup" class="form-control" type="date" required>
									
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<span class="form-label">Drop Off</span>
										<input name="dropoff" class="form-control" type="date" required>
								
									</div>
								</div>
							</div>

							<div class="row">
						

								
                        <div class="form-group">
							<span class="form-label">Pick-up Time</span>
								<input name="pickuptime"  class="form-control" type="text" placeholder="pickup time...">
							
							</div>
							</div>
							
							
							
							
							<div class="form-btn">
								<button class="submit-btn">Rent A Car Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>    		
								</div>
						</div>
					</div>
				</div>
			</div>
			</div>
					</div>
				</div>
			</div>
			
			
    </section>

@endsection
