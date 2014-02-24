@extends("layout")

@section("content")
	<legend>
		{{ $profile->name }}
	</legend>
	@if ($profile->id == Auth::user()->id)
		<a href="#">Redigera</a>
	@endif
	<h6>Medlem sedan {{ $profile->created_at }}</h6>
@stop
