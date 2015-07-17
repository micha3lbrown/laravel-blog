@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h3>Edit Location</h3>		
			@include('errors.form-errors')
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			{!! Form::model($location, ['method'=> 'PATCH', 'action' => ['LocationsController@update', $location->id]]) !!}
		    	@include('forms.locations-form', ['submit' => 'Save Location'])
			{!! Form::close() !!}	
		</div>
	</div>
@stop