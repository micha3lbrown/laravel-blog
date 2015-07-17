{!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'action' => ['TagsController@destroy', $tag->id]]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}