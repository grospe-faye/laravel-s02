@extends('layouts.app')

@section('content')
<div class="col-md-8">
	<h1>Edit</h1>
	<form method="POST" action="/posts/{{ $post->id }}">
		@csrf
		<!-- spoofing -->
		<input type="hidden" name="_method" value="PUT">
	
		<div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
	    </div>

		<div class="form-group">
		    <label for="body">Body</label>
		    <textarea class="form-control" rows="3" name="body">{{ $post->body }}</textarea>
		</div>
		<button class="btn btn-primary" type="submit">Update</button>
	</form>
</div>
@endsection