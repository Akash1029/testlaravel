 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="post" action="/payment">
                        @csrf
                        <div class="form-group row mb-0">
                            <div class="offset-5" >
                                <button type="submit" class="btn btn-primary">
                                    Payment Recieved
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
@endsection
