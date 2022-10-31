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
                  <span class="mb-2 text-xs">action: <span class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                  
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
<!-- <h1>Booking Requests</h1>
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
                <td scope="col">{{$book->hotel_name}}</td>
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
        </table> -->
 
 
@endsection

