@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-sm-10">
			<h1>{{$location->name}} &nbsp 
				<small> 
					<a href="/locations/{{$location->id}}/edit">edit</a>
				</small>
			</h1>
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Active:</strong> {{$location->active}}</li>
                        <li class="list-group-item"><strong>Distance:</strong> {{$location->distance}}</li>
                        <li class="list-group-item">
                            <strong>Last Visited:</strong>
                            {{$location->visited_at}}
                        </li>
                        <li class="list-group-item"><strong>Rating:</strong> {{$location->stars}}</li>
                        <li class="list-group-item">
                            <strong>Tags:</strong>
                            @unless ($location->tags->isEmpty())
                                <ul class="nav nav-pills">
                                    @foreach($location->tags as $tag)
                                        <li>
                                            <a href="/tags/{{$tag->id}}">
                                                {{$tag->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endunless
                        </li>
                    </ul>
                </div>
            </div>
		</div>
		<div class="col-sm-2">
			@include('forms.locations-delete')
		</div>
	</div>
@stop