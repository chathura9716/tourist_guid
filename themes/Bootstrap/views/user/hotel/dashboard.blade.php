@extends('layouts.hotel')
@section('content')
hotel dash>>
<style>
  body{
    background:#eee;    
}
.main-box.no-header {
    padding-top: 20px;
}
.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    -webikt-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.table a.table-link.danger {
    color: #e74c3c;
}
.label {
    border-radius: 3px;
    font-size: 0.875em;
    font-weight: 600;
}
.user-list tbody td .user-subhead {
    font-size: 0.875em;
    font-style: italic;
}
.user-list tbody td .user-link {
    display: block;
    font-size: 1.25em;
    padding-top: 3px;
    margin-left: 60px;
}
a {
    color: #3498db;
    outline: none!important;
}
.user-list tbody td>img {
    position: relative;
    max-width: 50px;
    float: left;
    margin-right: 15px;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
}
.table thead tr th {
    border-bottom: 2px solid #e7ebee;
}
.table tbody tr td:first-child {
    font-size: 1.125em;
    font-weight: 300;
}
.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    padding: 12px 8px;
}
a:hover{
text-decoration:none;
}
</style>
<div>
  <style>
    body{
    margin-top:20px;
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

    <div class="row">
        <div class="col-md-4 col-xl-3">
        <a href="{{Route('addpost')}}" >
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Add Blogs</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>486</span></h2>
                    <p class="m-b-0">Add new Blogs<span class="f-right">351</span></p>
                </div>
            </div>
            </a>
        </div>
        
        <div class="col-md-4 col-xl-3">
        <a href="{{Route('addhotel')}}" >
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20"> ADD HOTEL </h6>
                    <h2 class="text-right"><i class="fa fa-h-square f-left"></i><span>486</span></h2>
                    <p class="m-b-0">add new hotels<span class="f-right">351</span>
                   </p>
                </div>
            </div>
            </a>
        </div>
        
       
        
       
	</div>
</div>
</div>


              

<br><br>


<div class="container py-5 h-100">
  <h1>Hotel Table</h1>
   <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Hotel Name</th>
                <th scope="col">Type</th>
                <th scope="col">City</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                <tr>
                    <th scope="row">{{$hotel->id}}</th>
                    <td>{{$hotel->hotel_name}}</td>
                    <td>{{$hotel->type}}</td>

                    <td>{{$hotel->city}}</td>
                    <td>{{$hotel->description}}</td>
                    <td>
                        <a href="{{Route('hotel.show',$hotel->id)}}" class="btn btn-sm btn-secondary">View</a>
                        <a href="{{Route('hotel.edit',$hotel->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{Route('hotel.delete',$hotel->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>

        
        <br><br>
        <h1>Booking Requests</h1>
<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Hotel Name</th>
                <th scope="col">Hotel check In</th>
                <th scope="col">Hotel check Out</th>
                <th scope="col">Comfort</th>

                <th scope="col">Rooms</th>
                <th scope="col">message</th>

                <th scope="col">Status</th>
                <th scope="col">action</th>
                
              
                </tr>
            </thead>
            <tbody>
            @foreach ($bookinghotel as $book)
            <tr>
                
                <td scope="col">{{$book->tourist_name}}</td>
                <td scope="col">{{$book->hotel->hotel_name}}</td>
                <td scope="col">{{$book->checkin}}</td>
                <td scope="col">{{$book->checkout}}</td>
                <td scope="col">{{$book->comfort}}</td>
                <td scope="col">{{$book->rooms}}</td>
                <td scope="col">{{$book->message}}</td>
                <td scope="col">{{$book->action}}
                   
                </td>


                <td scope="col">
                <a href="{{url('accepthotel',$book->id)}}" name="action"  class="btn btn-primary" type="button" value="">accept</a>
                    <a href="{{url('cancelhotel',$book->id)}}" name="action"  class="btn btn-danger" type="button" value="">cancel</a>

                </td>
            </tr>
            @endforeach 
            </tbody>
        </table>
        </div>


        
 <div>
<h1>hotels's Blogs</h1>
<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>
                        
                        <a href="{{Route('posts.edit',$post->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{Route('posts.delete',$post->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
  </table>
</div>
     
        

    

        
    <br>
@endsection