@extends('layouts.app')

@section('content')
<div class="card-columns">
	<h1>Posts</h1>


	<div class="card">
	@if(count($posts) > 0)
		@foreach($posts as $post)
    	<div class="card-body">
     	 <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
     	 <p class="card-text">{{$post->body}}</p>
      	 <p class="card-text"><small class="text-muted">Written on {{$post->created_at}}</small></p>
		</div>
		@endforeach
		{{ $posts->links() }}
    </div>
</div>

	@else
		<p>No posts found</p>
	@endif
@endsection