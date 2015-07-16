@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<h1>Locations</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<ul>
				@foreach ($locations as $location)
				    <li>{{$location->name}}</li>
				@endforeach		
			</ul>
		</div>
	</div>
@stop