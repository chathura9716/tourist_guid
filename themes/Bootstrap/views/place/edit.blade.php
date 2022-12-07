@extends('layouts.admin')

@section('content')
Add places
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Places') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('place.update',$place->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" >Place Name</label>
                            <input  name="place_name" type="text" class="form-control"  placeholder="Enter Place Name" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Type of place </label>
                            <!-- <input  name="type" type="text" class="form-control"  placeholder="Enter Place type" required >  -->
                            <select name="type"> 
                                <option value="tropical">Tropical</option>
                                <option value="upcountry">Up Country</option>
                                <option value="Historical">Historical</option>
                                <option value="Religious">Religious</option>
                                <option value="Adventure">Adventure</option>
                                <option value="National Park">National Park</option>
                            </select>
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Province</label>
                            <!-- <input  name="province" type="text" class="form-control"  placeholder="Enter province " required > -->
                            <select name="province"> 
                                <option value="Eastern">Eastern Province</option>
                                <option value="Northern">Northern Province</option>
                                <option value="North-Western">North-Western Province</option>
                                <option value="Southern">Southern Province</option>
                                <option value="Western">Western Province</option>
                                <option value="Central">Central Province</option>
                                <option value="North-Central">North-Central Province</option>
                                <option value="Uva">Uva Province</option>
                                <option value="Sabragamuwa">Sabragamuwa Province</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >City </label>
                            <input  name="city" type="text" class="form-control"  placeholder="Enter City" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description"  class="form-control"   placeholder="Enter post description" rows="10" required ></textarea >
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
