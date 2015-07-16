@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			{!! Form::open(array('action' => 'LocationController@store')) !!}
		    	<div class="form-group">
		    		{!! Form::label('name') !!}
		    		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	    		</div>
	    		<div class="form-group">
	    			{!! Form::label('active') !!}
		    	{!! Form::checkbox('active', null, ['class' => 'form-control']) !!}
	    		</div>
	    		<div class="form-group">
	    			{!! Form::submit('Add Location', ['class' => 'btn btn-success']) !!}
	    		</div>
			{!! Form::close() !!}	
		</div>
	</div>
@stop