@extends('layouts.user_type.auth')

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
              <h6>Places Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">City</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created Date</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($places as $place)
                    <tr>
                    <th scope="row">{{$place->id}}</th>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{asset('thumbnails/'.$place->thumbnail)}}"  class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$place->place_name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$place->type}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$place->description}}</p>
                        
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$place->city}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$place->created_at}}</span>
                      </td>
                      <td class="text-center">
                                        <a href="{{Route('place.edit',$place->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit place">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                        <a href="{{Route('place.delete',$place->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete">
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
