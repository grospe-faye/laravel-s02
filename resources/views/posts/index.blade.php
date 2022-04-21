@extends('layouts.app')

@section('content')
<h1>Posts</h1>
	@if(count($posts) > 0)
	@foreach($posts as $post)
		<div class="card border-light mb-3" style="max-width: 18rem;">
			<div class="card-header">
				<h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
			</div>
				<div class="card-body">
						
						<p class="card-text">{{$post->body}}</p>
						<p class="card-text"><small class="text-muted">Written on {{$post->created_at}}</small></p>
					{{ $posts->links() }}
				</div>
			</div>
		</div>
@endforeach
	@else
		<p>No posts found</p>
	@endif
@endsection