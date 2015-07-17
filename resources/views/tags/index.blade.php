@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-10">
			<h1>Tags</h1>
		</div>
		<div class="col-sm-2 text-right">
			<a href="/tags/create" class="btn btn-success">Add Tag</a>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-12">
			<ul class="nav nav-pills">
				@foreach ($tags as $tag)
				    <li>
				    	<a href="tags/{{$tag->id}}">{{$tag->name}}</a>	
			    	</li>
				@endforeach		
			</ul>
		</div>
	</div>
@stop