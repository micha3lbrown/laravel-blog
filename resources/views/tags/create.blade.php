@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h3>Create New Tag</h3>		
			@include('errors.form-errors')
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			{!! Form::open(array('action' => 'TagsController@store')) !!}
		    	@include('forms.tags-form', ['submit' => 'Add Tag'])
			{!! Form::close() !!}	
		</div>
	</div>
@stop