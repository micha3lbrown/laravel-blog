@extends('layouts.default')

@section('content')

<div class="row">
	<div class="col-sm-10">
		<h1>{{$tag->name}} &nbsp 
			<small> 
				<a href="/tags/{{$tag->id}}/edit">edit</a>
			</small>
		</h1>
		<p class="lead">{{$tag->active}}</p>
	</div>
	<div class="col-sm-2">
		@include('forms.tags-delete')
	</div>
</div>

@stop