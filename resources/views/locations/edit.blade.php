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
			{!! Form::model($location, ['method'=> 'PATCH', 'action' => ['LocationController@update', $location->id]]) !!}
		    	@include('forms.locations-form', ['submit' => 'Edit Location'])
			{!! Form::close() !!}	
		</div>
	</div>
@stop