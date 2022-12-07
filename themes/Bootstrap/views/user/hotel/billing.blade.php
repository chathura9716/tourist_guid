@extends('layouts.user_type.hotelsidebar')

@section('content')


    <div class="row">
      <div class="col-md-7 mt-4">
        <div class="card">
          <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Booking requests</h6>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
            @foreach ($bookinghotel as $book)
              <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm">Tourist Name</h6><span class="text-dark font-weight-bold ms-sm-2">{{$book->tourist_name}}</span></span>
                  <span class="mb-2 text-xs">Hotel Name: <span class="text-dark font-weight-bold ms-sm-2">{{$book->hotel_name}}</span></span>
                  <span class="mb-2 text-xs">Hotel check In: <span class="text-dark font-weight-bold ms-sm-2">{{$book->checkin}}</span></span>
                  <span class="mb-2 text-xs">Hotel check Out: <span class="text-dark font-weight-bold ms-sm-2">{{$book->checkout}}</span></span>
                  <span class="mb-2 text-xs">Comfort:<span class="text-dark font-weight-bold ms-sm-2">{{$book->comfort}}</span></span>
                  <span class="mb-2 text-xs">Rooms: <span class="text-dark font-weight-bold ms-sm-2">{{$book->rooms}}</span></span>
                  <span class="mb-2 text-xs">message: <span class="text-dark font-weight-bold ms-sm-2">{{$book->message}}</span></span>
                  <span class="mb-2 text-xs">Status: <span class="text-dark font-weight-bold ms-sm-2">{{$book->action}}</span></span>
                  
                </div>
                <div class="ms-auto text-end">
                  <a href="{{url('accepthotel',$book->id)}}" class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;"><i class="fas fa-check-alt text-dark me-2"></i>accept</a>
                  <a href="{{url('cancelhotel',$book->id)}}" class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>cancel</a>
                  
                </div>
              </li>
              @endforeach 
            </ul>
          </div>
        </div>
      </div>
</div>

 
@endsection

