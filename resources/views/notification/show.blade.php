 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul>

                @foreach ($notifications as $notification)
                <li>
                    @if($notification->type === 'App\Notifications\PaymentReceived')
                        Your Payment of ${{ $notification->data['amount'] /100}} is recieved.
                    @endif
                </li>
                @endforeach
            </ul>
    </div>
</div>
@endsection
