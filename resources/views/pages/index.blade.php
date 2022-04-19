@extends('layouts.app')

@section('content')
        <div class="container">
                <div class="row">
                        
                        <div class="col">
                                <img src="https://images.squarespace-cdn.com/content/5e7e6ab5b449574311fd2187/1603745398485-NJ1PPM6K7UNOLETY02DG/White%2BMini%2BA6%2BNotebook%2BMinimal%2BGrid%2BJournal%2BNotepad%2BPU%2Bleather%2B_%2BEtsy.jpg?content-type=image%2Fjpeg" class="img-fluid" fill="none" alt="notebook">
                        </div>
                        <div class="col text-center">
                                 <h1>{{ $title }}</h1>
                                 <p>An online journal where you can document your day-to-day experiences and express yourself through writing.</p>
                        </div>
                </div>
        </div>
@endsection