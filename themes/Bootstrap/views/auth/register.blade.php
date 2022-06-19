@extends('layouts.register')

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('css/styleReg.css') }}">

        <script src="{{asset('js/jquery-3.3.2.min.js')}}"></script>
		<script src="{{asset('js/jquery.form-validator.min.js')}}"></script>
		<script src="{{asset('js/main2.js')}}"></script>
    
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="images/travel.jpg" alt="">
			</div>
			<div class="form-inner">
            <form method="POST" action="{{ route('register') }}">
                        @csrf
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">First Name:</label>
						<input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocusdata-validation-length="3-12">
					</div>
                    <div class="form-group">
						<label for="">Last Name:</label>
						<input input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus data-validation-length="3-12">
					</div>
                  
                    <div class="form-group">
						<label for="">Date of birth:</label>
						<input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus data-validation-length="3-12">
					</div>
                    <div class="form-group">
						<label for="">Nic:</label>
						<input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" required autocomplete="nic" autofocus data-validation-length="3-12">
					</div>
                    <div class="form-group">
						<label for="">Contact:</label>
						<input  id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" data-validation="email">
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-validation-length="min8">
					</div>
                    <div class="form-group" >
						<label for="">Confirm Password:</label>
						<input  input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" data-validation-length="min8">
					</div>
					<button>create my account</button>
					<div class="socials">
						<p>Sign up with social platforms</p>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-facebook"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-instagram"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-twitter"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-tumblr"></i>
						</a>
					</div>
				</form>
			</div>
			
		</div>
		
	
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

@endsection
