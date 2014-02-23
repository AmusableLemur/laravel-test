@extends("layout")

@section("content")
	{{ Form::open(array("route" => "login", "method" => "POST")) }}
        <div class="form-group">
            {{ Form::label("name", "Användarnamn") }}
            {{ Form::text("name", null, array("class" => "form-control", "placeholder" => "Användarnamn")) }}
        </div>
        <div class="form-group">
            {{ Form::label("password", "Lösenord") }}
            {{ Form::password("password", array("class" => "form-control", "placeholder" => "Lösenord")) }}
        </div>
        {{ Form::submit("Logga in", array("class" => "btn btn-large btn-default form-control")) }}
    {{ Form::close() }}
@stop
