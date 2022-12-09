@extends('layouts.user_type.hotelsidebar')

@section('content')
<style>
  p {
  overflow: hidden;
  max-width: 75ch;
}
  </style>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Hotel Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hotel Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">City</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created Date</th>
                      <th class="text-secondary opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($hotels as $hotel)
                    <tr>
                    <th scope="row">{{$hotel->id}}</th>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{asset('thumbnails/'.$hotel->thumbnail)}}"  class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$hotel->hotel_name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$hotel->type}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$hotel->description}}</p>
                        
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$hotel->city}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$hotel->created_at}}</span>
                      </td>
                      <td class="text-center">
                                        <a href="{{Route('hotel.edit',$hotel->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit place">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                        <a href="{{Route('hotel.delete',$hotel->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                             <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </a>
                                            
                                        </span>
                                    </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  
  @endsection
