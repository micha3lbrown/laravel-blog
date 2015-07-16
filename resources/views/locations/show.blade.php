@extends('layouts.default')

@section('content')

<div class="row">
	<div class="col-sm-12">
		<h1>{{$location->name}} &nbsp <small><a href="/location/{{$location->id}}/edit">edit</a></small></h1>
		<p class="lead">{{$location->active}}</p>
	</div>
</div>

@stop