@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h1>Register</h1>
			<hr>
			@include('errors.form-errors')
		</div>
	</div>
	{!! Form::open(array('action' => 'Auth\AuthController@postRegister')) !!}
	<div class="row">
		<div class="col-sm-6 form-group">
			{!! Form::label('name') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
		   	{!! Form::label('email') !!}
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
		   	{!! Form::label('password') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
		   	{!! Form::label('password_confirmation') !!}
			{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="padding: 20px 15px;">
			{!! Form::submit('Login', ['class' => 'btn btn-success']) !!}
		</div>
	</div>
	{!! Form::close() !!}
@endsection

