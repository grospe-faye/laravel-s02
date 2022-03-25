@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a href="/posts/create" class="btn btn-primary">Create Post</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>My Posts</h2>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                         <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                         @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                               <td><!-- Spoofing -->
                                    <form method ="POST" action="/posts/{{$post->id}}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger">Delete</button>
                                    </form></td>
                         @endforeach
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
