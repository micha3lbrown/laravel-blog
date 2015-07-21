
@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-sm-6 text-center">
            <h1 class="padv50">Fine Me Food</h1>
            <a href="/home" class="btn btn-lg btn-success mv50">Now!</a>
        </div>
        <div class="col-sm-6">
            <h1>Completely Random</h1>
            <hr>
            @include('elements.selectedLocation', ['location' => $randomLocation])
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::open(array('action' => 'PagesController@home')) !!}
                <div class="form-group">
                    {!! Form::label('tags', 'Tags:') !!}
                    {!! Form::select('tags_list[]', $tags->lists('name','id'), null,  ['id' => 'tag-input', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Find', ['class' => 'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}   
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h2>All Tags</h2>
            <hr>
            @unless ($tags->isEmpty())
                @include('elements.tagList', ['tags' => $tags])
            @endunless
        </div>
        <div class="col-sm-6">
            <h2>Selected Tags</h2>
            <hr>
            @unless ($tags->isEmpty())
                @include('elements.tagList', ['tags' => $tags])
            @endunless
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h2>Locations:</h2>
            <hr>
            @unless ($locations->isEmpty())
                @include('elements.tagList', ['tags' => $locations])
            @endunless
        </div>
    </div>
@stop

@section('footer')
    <script>
        $('#tag-input').select2({
            tags: true
        });
    </script>
@endsection