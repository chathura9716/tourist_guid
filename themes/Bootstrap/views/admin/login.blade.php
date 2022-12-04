
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login form</title>
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
				<img src="images/registration-form-8" alt="">
			</div>
			<div class="form-inner">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
					<div class="form-header">
						<h3>Log in</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
			
                  
                
					<div class="form-group">
						<label for="">E-mail:</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" data-validation="email">
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-validation-length="min8">
					</div>
                    <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                    </div>

                
					<button>Login</button>
                    
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
					<div class="socials">
						<p>Don't You have An Account? Register here</p>
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


