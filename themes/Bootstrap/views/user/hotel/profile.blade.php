@extends('layouts.hotel')
@section('content')
hotel profile>>
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 180px;" />
                <h5>{{auth()->user()->fname}} {{auth()->user()->lname}} </h5>
              <p>Web Designer</p>
              <div class="social-media">
		    		    <p class="mb-0 d-flex">
              
              <a href="{{Route('user.edit',auth()->user()->id)}}" class="btn btn-sm btn-primary">Edit</a>
              </P>
                </div>
            </div>
            <div class="col-md-5">
              <div class="card-body p-5">
                <h6>Information</h6>
                <hr class="mt-2 mb-4">
                <div class="row pt-1">
                  <div class="col-10 mb-7">
                    <h6>Email</h6>
                    <p class="text-muted">{{auth()->user()->email}}</p>
                  </div>
                  <div class="col-10 mb-7">
                    <h6>Phone</h6>
                    <p class="text-muted">{{auth()->user()->contact}}</p>
                  </div>
                  <div class="col-8 mb-3">
                    <h6>Date Of Birth</h6>
                    <p class="text-muted">{{auth()->user()->dob}}</p>
                  </div>
                  <div class="col-8 mb-3">
                    <h6>NIC</h6>
                    <p class="text-muted">{{auth()->user()->nic}}</p>
                 
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
@endsection