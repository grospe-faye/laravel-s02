@extends('layouts.app')

@section('content')
        <h1>{{ $title }}</h1>
        <p>this is the services section</p>
        @if(count($services) > 0)
        @foreach($services as $service)
                <li>{{ $service }}</li>
        @endforeach
        @endif
@endsection
