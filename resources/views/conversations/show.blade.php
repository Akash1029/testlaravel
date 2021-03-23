@extends ('layouts.app')

@section('content')
	<p><a href="/conversaitons">Back</a></p>

	<h1>{{ $conversation->title }}</h1>
	<p>Posted by {{ $conversation->user->name }}</p>
	<p>{{ $conversation->body }}</p>


	@include('conversations.replies')
@endsection('content')