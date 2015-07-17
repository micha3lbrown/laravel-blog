@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h3>Create New Location</h3>		
			@include('errors.form-errors')
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			{!! Form::open(array('action' => 'LocationsController@store')) !!}
		    	@include('forms.locations-form', ['submit' => 'Add Location'])
			{!! Form::close() !!}	
		</div>
	</div>
@stop