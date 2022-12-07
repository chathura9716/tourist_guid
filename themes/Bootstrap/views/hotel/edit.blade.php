@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Hotel details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('hotel.update',$hotel->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" >Hotel Name</label>
                            <input  value="{{ $hotel->hotel_name }}" name="hotel_name" type="text" class="form-control"  placeholder="Enter hotel Name" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Type of Hotel </label>
                            <input value="{{ $hotel->type }}"  name="type" type="text" class="form-control"  placeholder="Enter hotel type" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Address</label>
                            <input  value="{{ $hotel->address }}"  name="address" type="text" class="form-control"  placeholder="Enter address " required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >City </label>
                            <input value="{{ $hotel->city }}"  name="city" type="text" class="form-control"  placeholder="Enter City" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea  value="{{ $hotel->description }}" name="description"  class="form-control"   placeholder="Enter Hotel description" rows="10" required ></textarea >
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="thumbnail" type="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
