{!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'action' => ['LocationsController@destroy', $location->id]]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}