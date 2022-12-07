@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Vehicals') }}</div>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('vehical.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model Of Vehical') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="name" autofocus>

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="driver_name" class="col-md-4 col-form-label text-md-end">{{ __('Driver Name') }}</label>

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
                            <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Driver Contact no') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}"  autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="licence_no" class="col-md-4 col-form-label text-md-end">{{ __('Driver Licence No') }}</label>

                            <div class="col-md-6">
                                <input id="licence_no" type="text" class="form-control @error('licence_no') is-invalid @enderror" name="licence_no" value="{{ old('licence_no') }}"  autofocus>

                                @error('licence_no')
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
                                    {{ __('Add Vehical') }}
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
