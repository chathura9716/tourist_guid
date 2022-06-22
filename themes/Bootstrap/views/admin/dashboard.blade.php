@extends('layouts.admin')
@section('content')
admindash>>
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>{{auth()->user()->name}}</h5>
              <p>Web Designer</p>
              <div class="">
		    		    <p class="mb-2 ">
              
              <a href="{{Route('admin.addhotel')}}" class="btn btn-sm btn-primary">Add hotel Agency</a>

              </P>
              <p class="mb-2 ">
              
              <a href="{{Route('admin.addtravel')}}" class="btn btn-sm btn-primary">Add travel Agency</a>
              
              </P>
              <p class="mb-2 ">
              
              <a href="{{Route('admin.addplaces')}}" class="btn btn-sm btn-primary">Add Places</a>
              
              </P>
                </div>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">{{auth()->user()->email}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">123 456 789</p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Recent</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Most Viewed</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
                <div class="social-media">
		    		    <p class="mb-0 d-flex">
                  <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                  <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                  <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                </P>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<h1>Places Table</h1>
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
                @foreach ($places as $place)
                <tr>
                    <th scope="row">{{$place->id}}</th>
                    <td>{{$place->place_name}}</td>
                    <td>{{$place->description}}</td>
                    <td>
                        
                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <br><br>
<h1>Admin's Blogs</h1>
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
        <br><br>
<h1>User Table</h1>

   

    <div class="col-sm-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date of birth</th>
            <th>Nic</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        <tr>
        @foreach ($users as $user)
          <th scope="row">{{$user->fname}}</th>
                    <td>{{$user->email}}</td>
                    <td>{{$user->dob}}</td>
                    <td>{{$user->nic}}</td>
                    <td>{{$user->contact}}</td>
                    <td>
                        
                        <a href="{{Route('user.edit',$user->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
        </tr>
  
        @endforeach

    </table>
    <br>
@endsection