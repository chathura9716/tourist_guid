@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Vehicals') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('vehical.update',$vehical->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end" >{{ __('Model Of Vehical') }}</label>

                            <div class="col-md-6">
                                <input id="vehical_model" type="text" class="form-control @error('vehical_model') is-invalid @enderror" name="vehical_model" value="{{ old('vehical_model') }}" required autocomplete="name" autofocus>

                                @error('vehical_model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Driver Name') }}</label>

                            <div class="col-md-6">
                                <input id="driver_name" type="text" class="form-control @error('driver_name') is-invalid @enderror" name="driver_name" value="{{ old('driver_name') }}"  autofocus>

                                @error('driver_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="driver_lno" class="col-md-4 col-form-label text-md-end">{{ __('Driver Licence No') }}</label>

                            <div class="col-md-6">
                                <input id="driver_lno" type="text" class="form-control @error('driver_lno') is-invalid @enderror" name="driver_lno" value="{{ old('driver_lno') }}"  autofocus>

                                @error('driver_lno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
              

                        <div class="row mb-3">
                            <label for="vehical_no" class="col-md-4 col-form-label text-md-end">{{ __('Vehical No') }}</label>

                            <div class="col-md-6">
                                <input id="vehical_no" type="text" class="form-control @error('vehical_no') is-invalid @enderror" name="vehical_no" value="{{ old('vehical_no') }}" >

                                @error('vehical_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('city') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Type of vehical') }}</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" >
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="thumbnail" type="file">
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Vehical') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
