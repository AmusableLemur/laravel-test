@extends("layout")

@section("content")
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach

	{{ Form::open(array("route" => "register", "method" => "POST")) }}
        <div class="form-group">
            {{ Form::label("name", "Användarnamn") }}
            {{ Form::text("name", Input::old("name"), array("class" => "form-control", "placeholder" => "Användarnamn")) }}
        </div>
        <div class="form-group">
            {{ Form::label("password", "Lösenord") }}
            {{ Form::password("password", array("class" => "form-control", "placeholder" => "Lösenord")) }}
        </div>
        <div class="form-group">
            {{ Form::label("password_confirmation", "Bekräfta lösenord") }}
            {{ Form::password("password_confirmation", array("class" => "form-control", "placeholder" => "Bekräfta lösenord")) }}
        </div>
        <label class="checkbox">
            {{ Form::checkbox("rules") }}
            Jag har läst och accepterar reglerna
        </label>
        {{ Form::submit("Registrera", array("class" => "btn btn-large btn-default form-control")) }}
    {{ Form::close() }}
@stop
