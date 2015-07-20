@extends('layouts.default')

@section('content')
	{!! Form::open(array('action' => 'Auth\AuthController@postLogin')) !!}
	<div class="row">
		<div class="col-sm-6">
	   		{!! Form::label('email') !!}
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
		   	{!! Form::label('password') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="padding: 20px 15px;">
			{!! Form::submit('Login', ['class' => 'btn btn-success']) !!}
		</div>
	</div>
	{!! Form::close() !!}	
@endsection

