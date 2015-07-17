@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h1>Locations</h1>
			<hr>
			@include('errors.form-errors')
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<ul class="nav nav-pills">
				@foreach ($locations as $location)
				    <li>
				    	<a href="locations/{{$location->id}}">{{$location->name}}</a>	
			    	</li>
				@endforeach		
			</ul>
		</div>
	</div>
@stop