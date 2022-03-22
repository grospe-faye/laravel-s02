<h1>Hello World from page controller</h1>
<p>{{ $front_end }}</p>

@if(count($topics) > 0)
	@foreach($topics as $topic)
		<li>{{ $topic }}</li>
	@endforeach
@else
<p>nothing to display</p>
@endif