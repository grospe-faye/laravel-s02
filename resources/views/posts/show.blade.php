@extends('layouts.app')

@section('content')
	<h1>{{ $post->title }}</h1>
	<small>Written on {{ $post->created_at }}</small>
	<hr>
	<p>
		{{ $post->body }}
	</p>
	<hr>
	
    <form method ="POST" action="/posts/{{$post->id}}">
	    @csrf
	    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
	    <input type="hidden" name="_method" value="DELETE">
	    <button class="btn btn-danger">Delete</button>
    </form>

@endsection