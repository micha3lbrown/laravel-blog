
@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-sm-10 text-center" style="margin-bottom: 200px">
            <h1 class="padv50">Find Me Food</h1>
            <a href="/" id="findFood" class="btn btn-lg btn-success mv50">
                Now!
            </a>
        </div>
    </div>

    <hr>

    <div class="row" style="margin-top: 50px">
        <div id="foodResult" class="col-sm-6 col-sm-offset-2">
            @include('elements.selectedLocation', ['location' => $randomLocation])
        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-sm-6">--}}
            {{--{!! Form::open(array('action' => 'PagesController@home')) !!}--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('tags', 'Tags:') !!}--}}
                    {{--{!! Form::select('tags_list[]', $tags->lists('name','id'), null,  ['id' => 'tag-input', 'class' => 'form-control']) !!}--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::submit('Find', ['class' => 'btn btn-success']) !!}--}}
                {{--</div>--}}
            {{--{!! Form::close() !!}   --}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-6">--}}
            {{--<h2>All Tags</h2>--}}
            {{--<hr>--}}
            {{--@unless ($tags->isEmpty())--}}
                {{--@include('elements.tagList', ['tags' => $tags])--}}
            {{--@endunless--}}
        {{--</div>--}}
        {{--<div class="col-sm-6">--}}
            {{--<h2>Selected Tags</h2>--}}
            {{--<hr>--}}
            {{--@unless ($tags->isEmpty())--}}
                {{--@include('elements.tagList', ['tags' => $tags])--}}
            {{--@endunless--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-12">--}}
            {{--<h2>Locations:</h2>--}}
            {{--<hr>--}}
            {{--@unless ($locations->isEmpty())--}}
                {{--@include('elements.tagList', ['tags' => $locations])--}}
            {{--@endunless--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@stop--}}
@endsection
@section('footer')
    <script>
//        // Now Button
//        $('#findfood').click(function() {
//            $('#foodResult').show( "slow", function() {
//                // AJAX call
//            });
//        });

        $('#tag-input').select2({
            tags: true
        });
    </script>
@endsection