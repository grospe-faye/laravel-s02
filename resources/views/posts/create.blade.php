@extends('layouts.app')

@section('content')
	<h1>Create</h1>
	<form method="POST" action="/posts">
		@csrf
		<div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" name="title">
	    </div>

		<div class="form-group">
		    <label for="body">Body</label>
		    <textarea class="form-control" rows="3" name="body"></textarea>
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
@endsection