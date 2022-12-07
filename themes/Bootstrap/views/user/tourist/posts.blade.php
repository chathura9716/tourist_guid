
@extends('layouts.user_type.touristsidebar')

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
              <h6>Blogs </h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created Date</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($posts as $post)
                    <tr>
                    <th scope="row">{{$post->id}}</th>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{asset('thumbnails/'.$place->thumbnail)}}"  class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$post->title}}</h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$post->description}}</p>
                        
                      </td>
                    
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$post->created_at}}</span>
                      </td>
                      <td class="text-center">
                                        <a href="{{Route('posts.edit',$post->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit place">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                        <a href="{{Route('posts.delete',$post->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete">
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
