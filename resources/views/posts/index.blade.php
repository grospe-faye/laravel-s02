@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
		<h1>Posts</h1>
	@if(count($posts) > 0)
	@foreach($posts as $post)
	
		<div class="card bg-light mb-3" style="max-width: 18rem;">
			<div class="card-header" style="background-color: #dcc9bb;">
			</div>
				<div class="card-body">
						<h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
						<p class="card-text">{{$post->body}}</p>
						<p class="card-text"><small class="text-muted">Written on {{$post->created_at}}</small></p>
					{{ $posts->links() }}
				</div>
			</div>
			@endforeach
			</div>
		</div>
	</div>
</div>

	@else
		<p>No posts found</p>
	@endif
@endsection