<!doctype html>
<html lang="en">
<head>

register layout
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <!-- Bootstrap core CSS -->
        <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="{{asset('css/blog.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <title>Tourist Guide</title>


 

 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery.min.js')}}" defer></script>
        <script src="{{ asset('js/popper.js')}}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js')}}" defer></script>
        <script src="{{ asset('js/bootstrap1.min.js')}}" defer></script>
        <script src="{{ asset('js/main.js')}}" defer></script>
        <script src="{{asset('js/jquery-3.3.1.min.js')}}" defer></script>
        <script src="{{asset('js/popper.min.js')}}" defer></script>

        
   

</head>


  <div id="app">
    <div class="container">
			<div class="row justify-content-between">
          <div class="col">
            <a class="navbar-brand" href="{{ url('welcome') }}">Tourist <span>Guid</span></a>
          </div>
              
                   
                   
                   
				  

			</div>
	  </div>
    
    
    <!-- END nav -->







	
  </div>

<br>
  <body>
      <div >
              @yield('content')
      </div>
      


      



  </body>
</html>
