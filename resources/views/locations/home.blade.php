
@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Fine Me Food</h1>
            <form method="POST" action="./home" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="random_location" value="1">
                <div class="form-group" style="padding-top: 50px; padding-bottom: 10px">
                    <button class="btn btn-success" type="submit">Now!</button>
                </div>
            </form>
            <hr>
            @include('errors.form-errors')
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2>All Tags</h2>
        </div>
    </div>
    <ul>
        @foreach ($tags as $key => $value)
            <li>{{$key }}{{ $value }}</li>
        @endforeach
    </ul>

    <hr>

    <div class="row">
        <div class="col-sm-12">
            <h3>{{$location->name}}</h3>
        </div>
    </div>
    <ul>
        @foreach ($location->tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
@stop