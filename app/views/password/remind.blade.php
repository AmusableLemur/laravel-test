@extends("layout")

@section("content")
	{{ Form::open(array("method" => "ReminderController@getReminder", "method" => "POST")) }}
        <div class="form-group">
            {{ Form::label("email", "E-postadress") }}
            {{ Form::text("email", null, array("class" => "form-control", "placeholder" => "E-postadress")) }}
        </div>
        {{ Form::submit("Återställ lösenord", array("class" => "btn btn-large btn-default form-control")) }}
    {{ Form::close() }}
@stop
