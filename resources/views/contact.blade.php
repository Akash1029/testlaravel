@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <form method="post" action="/contact">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email</label>
                            <input type="email" name="email" class="w-100">
                            @error('email')
                            <div class="text-danger text-sm-center">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group row mb-0">
                            <div class="offset-5" >
                                <button type="submit" class="btn btn-primary">
                                    Email me
                                </button>
                            </div>
                        </div>
                        @if(session('message'))
                        <p class="text-success text-center">{{session('message')}}</p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
