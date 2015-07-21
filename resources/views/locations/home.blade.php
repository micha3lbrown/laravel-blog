
@extends('layouts.default')

@section('content')


    <div class="row">
        <div class="col-sm-12">
            <h1>Location</h1>
            <hr>
            @include('errors.form-errors')
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>{{$location->name}}</h2>
        </div>
    </div>

    <ul>
        @foreach ($location->tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
@stop