@extends('layouts.user_type.auth')

@section('content')


    <div class="row">
      <div class="col-md-7 mt-4">
        <div class="card">
          <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Booking requests</h6>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
            @foreach ($bookingvehicals as $book)
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">Tourist Name</h6><span class="text-dark font-weight-bold ms-sm-2">{{$book->tourist_name}}</span></span>
                  <span class="mb-2 text-xs">Country: <span class="text-dark font-weight-bold ms-sm-2">{{$book->country}}</span></span>
                  <span class="mb-2 text-xs">Pick up date: <span class="text-dark font-weight-bold ms-sm-2">{{$book->pickup}}</span></span>
                  <span class="mb-2 text-xs">Drop off date: <span class="text-dark font-weight-bold ms-sm-2">{{$book->dropoff}}</span></span>
                  <span class="mb-2 text-xs">Email:<span class="text-dark font-weight-bold ms-sm-2">{{$book->email}}</span></span>
                  <span class="mb-2 text-xs">Pick-up time: <span class="text-dark font-weight-bold ms-sm-2">{{$book->pickuptime}}</span></span>
                  <span class="mb-2 text-xs">Status: <span class="text-dark font-weight-bold ms-sm-2">{{$book->action}}</span></span>
                  
                </div>
                <div class="ms-auto text-end">
                  <a href="{{url('acceptvehical',$book->id)}}" class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;"><i class="fas fa-check-alt text-dark me-2"></i>accept</a>
                  <a href="{{url('cancelvehical',$book->id)}}" class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>cancel</a>
                  
                </div>
              </li>
              @endforeach 
            </ul>
          </div>
        </div>
      </div>
</div>

 
@endsection

