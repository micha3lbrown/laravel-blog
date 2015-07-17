@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h3>Edit Tag</h3>		
			@include('errors.form-errors')
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			{!! Form::model($tag, ['method'=> 'PATCH', 'action' => ['TagsController@update', $tag->id]]) !!}
		    	@include('forms.tags-form', ['submit' => 'Edit Tag'])
			{!! Form::close() !!}	
		</div>
	</div>
@stop