@extends('layouts.app')

@section('content')
	<h1>{{ $post->title }}</h1>
	<small>Written on {{ $post->created_at }}</small>
	<hr>
	<p>
		{{ $post->body }}
	</p>
	<hr>
	<a href="/posts/{{ $post->id }}/edit" class="btn btn-danger">Edit</a>
@endsection