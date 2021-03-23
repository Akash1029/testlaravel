
	@foreach($conversation->replies as $reply)
		<div class="reply-inner">
			<p>{{ $reply->user->name }} said.....</p>

			{{ $reply->body}}
		</div>

		@continue($loop->last)

		<hr>
	@endforeach
