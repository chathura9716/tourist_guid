@extends('layouts.frontend')
@section('content')
<style>
    body {
        margin-top: 20px;
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

    .categories li>ul {
        padding-left: 15px;
    }

    .categories li>ul>li>a {
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

    .categories>li.active>a {
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

    :root {
        --main-radius: 10px;
        --main-padding: 5px;
    }

    .container {
        display: grid;
        width: 200vh;
        height: 100vh;
        grid-template-columns: 1fr 1fr 1fr 1fr ;
        grid-template-rows: 0.2fr 1.5fr 1.2fr 1.2fr 1.2fr 1.2fr ;

        grid-template-areas:
            "nav nav nav nav"
            "main main main main"
            "siderbar siderbar siderbar siderbar"
            "container1 container2 container3 container3"
            "footer1 footer1 footer1 footer1"
            "footer2 footer2 footer2 footer2";
        grid-gap: 0.2rem;
        font-family: "inter", sans-serif;
        font-size: 12px;
        text-align: center;

    }
    nav {
        grid-area: nav;
        
    }
    main {
        grid-area: main;
       
    }

    #siderbar {

        grid-area: siderbar;
        
    }

    #container1 {
        grid-area: container1;
        
    }

    #container2 {
        grid-area: container2;
       
    }

    #container3 {
        grid-area: container3;
        
    }

    #footer1 {
        grid-area: footer1;
        border-radius: var(--main-radius);
        padding-top: var(--main-padding);

    }

    #footer2 {
        grid-area: footer2;
        border-radius: var(--main-radius);
        padding-top: var(--main-padding);

    }

    @media screen and(max-width:550px) {
        .container {
            grid-template-columns: 1fr;
            grid-template-rows: 0.4fr 0.4fr 2.2fr 1.2fr 1.2fr 1.2fr 1fr;
            grid-template-areas:
                "nav"
                "siderbar"
                "main"
                "container1"
                "container2"
                "container3"
                "footer1"
                "footer2";

        }
    }
</style>
<br>
<link rel="stylesheet" href="css/style1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/9054737d4b.js" crossorigin="anonymous"></script>


<div class="container">
    <nav>
        <h3 style="color: #f3aa29 ; font-size:50px; text-align:center;">{{$place->place_name}}</h3>
    </nav>

    <main><img src="{{asset('thumbnails/'.$place->thumbnail)}}" alt="" class="img-fluid mb30"></main>

    <div id="siderbar">
        <p style="font-size:20px ; text-align:justify">{{$place->description}} </p>
    </div>

    <div id="container1">
        <ul class="post-meta list-inline">
            <li class="list-inline-item">
                <i class="fa fa-user-circle-o"></i> <a href="#">{{$place->user->name}}</a>
            </li>
            <li class="list-inline-item">
                <i class="fa fa-calendar-o"></i> <a href="#"> {{ date('Y-m-d',strtotime($place->created_at))}}</a>
            </li>
        </ul>
    </div>
    <div id="container2">
        <strong style="color:#09052f ; font-size:35px; ">City</strong>
        <p style="font-size:25px ;">{{$place->city}} </p>
    </div>
    <div id="container3">
        <strong style="color:#09052f ; font-size:35px; ">Province</strong>
        <p style="font-size:25px ;">{{$place->province}} </p>
        <ul class="list-inline share-buttons">

            <li class="list-inline-item">
                <a href="#" class="social-icon-sm si-dark si-colored-facebook si-gray-round">
                    <i class="fa fa-facebook"></i>

                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="social-icon-sm si-dark si-colored-twitter si-gray-round">
                    <i class="fa fa-twitter"></i>

                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="social-icon-sm si-dark si-colored-linkedin si-gray-round">
                    <i class="fa fa-linkedin"></i>

                </a>
            </li>
        </ul>
    </div>
    <div id="footer1">
        <strong style="color:#09052f ; font-size:35px; ">Nearest Hotels</strong>
        
       
        @foreach ($hotel as $hotel)
        <div class="card" id="box"><img src="{{asset('thumbnails/'.$hotel->thumbnail)}}" />
            <div class="info">
                <p>{{$hotel->hotel_name}}</p>
                <p>{{$hotel->city}}</p>
                <?php $type= $hotel->type ?>
				<div class="rating" style="margin: 10px 0; color: #f3aa29;">
					@for ($i =0; $i < $type ; $i++)
						<span><i class="fas fa-star"></i></span>
     				@endfor  
                </div> 

                <button><a href="{{Route('hotel.show',$hotel->id)}}">See more</a></button>
            </div>
        </div>
        @endforeach
        

    </div>



    <div id="footer2">

        <strong style="color:#09052f ; font-size:35px; ">Nearest Vehicals for rent</strong>

        <div class="wrapper">

            @foreach ($vehical as $vehical)
            <div class="grid_12">
                <div class="wrapper">

                    <div class="card"><img src="{{asset('thumbnails/'.$vehical->thumbnail)}}" />
                        <div class="info">
                            <p><i class="fa fa-mobile-phone"> </i> {{$vehical->contact}}</p>
                            <p><i class="fa fa-maxcdn"> </i> {{$vehical->model}}</p>
                            <p><i class="fa fa-car"> </i> {{$vehical->type}}</p>

                            <button><a href="{{Route('vehical.show',$vehical->id)}}">Book now</a></button>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach


        </div>
</br>

        <section >
      <a class="u-link" href="/touristPlaces" >
        <button type="submit" class="link1" style="color: #f3aa29; width:150px; height:50px;" >Back</button>
      </a>
      <p class="u-text">
        <span></span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span></span>
      </a>
    </section>
  
        <!-- post article-->

    </div>


</div>

<style>
    * {
        box-sizing: border-box;
    }

    .img-fluid {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
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
        padding: 10px;
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
        padding-left: 20px;
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



@endsection