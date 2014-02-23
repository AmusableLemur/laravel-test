@extends("layout")

@section("content")
	@foreach($users as $user)
        {{ $user->name }}<br>
    @endforeach
@stop
