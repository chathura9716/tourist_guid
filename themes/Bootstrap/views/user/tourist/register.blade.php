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
		<link rel="stylesheet" href="booking/css/booking.css">
		<!-- <link rel="stylesheet" href="css/style1.css"> -->

        <script src="{{asset('js/jquery-3.3.2.min.js')}}"></script>
		<script src="{{asset('js/jquery.form-validator.min.js')}}"></script>
		<script src="{{asset('js/main2.js')}}"></script>
		<script src="js/jquery.mobile.customized.min.js"></script>
		<script src="{{asset('booking/js/booking.js')}}"></script>
		<script src="booking/js/booking.js"></script>
    
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="images/travel.jpg" alt="">
			</div>
			<div class="form-inner">
            <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
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
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">First Name:</label>
						<input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="user_name" autofocusdata-validation-length="3-12">
						<span class="text-danger">@error('first_name'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
						<label for="">Last Name:</label>
						<input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="user_name" autofocusdata-validation-length="3-12">
						<span class="text-danger">@error('last_name'){{$message}} @enderror</span>
					</div>
					<div class="form-group">
					<label for="">Profile photo :</label>
                            <input  name="thumbnail" type="file">
                    </div>
					
                    <div class="form-group">
						<label for="">Age :</label>
						<input input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus data-validation-length="3-12">
						<span class="text-danger">@error('age'){{$message}} @enderror</span>

					</div>
                    <div class="form-group">
						<label for="">Gender :</label>
						<select name="gender"  data-class="tmSelect tmSelect2" data-constraints="">
								<option>Male</option>
								<option>Female</option>
								<option>Other</option>
								
							</select>
						<span class="text-danger">@error('gender'){{$message}} @enderror</span>

					</div>
				<br>
                    <div class="form-group">
						<label for="">Origin:</label>
						<input id="origin" type="text" class="form-control @error('origin') is-invalid @enderror" name="origin" value="{{ old('origin') }}" required autocomplete="origin" autofocus data-validation-length="3-12">
						<span class="text-danger">@error('origin'){{$message}} @enderror</span>

					</div>
                    <div class="form-group">
						<label for="">Passport No:</label>
						<input  id="passport_no" type="text" class="form-control @error('passport_no') is-invalid @enderror" name="passport_no" value="{{ old('passport_no') }}" required autocomplete="passport_no" autofocus data-validation-length="3-12">
						<span class="text-danger">@error('passport_no'){{$message}} @enderror</span>

					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" data-validation="email">
						<span class="text-danger">@error('email'){{$message}} @enderror</span>

					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-validation-length="min8">
						<span class="text-danger">@error('password'){{$message}} @enderror</span>

					</div>
					<div class="form-group" >
						<label for="">Confirm Password:</label>
						<input  input id="cpassword" type="password" class="form-control" name="cpassword"  data-validation-length="min8">
						<span class="text-danger">@error('cpassword'){{$message}} @enderror</span>

					</div>
					<button>create my account</button>
					

					<div class="socials">
				
				
						<p>Already Have An Account? Login Here</p>
						<a href="{{ route('login') }}" class="socials-icon">
						Login
						</a>
						
					</div>
				</form>
			</div>
			
		</div>
		
		
	
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

@endsection
