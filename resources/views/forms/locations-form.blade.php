<div class="form-group">
	{!! Form::label('name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('distance') !!}
	{!! Form::text('distance', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group dropdown">
    {!! Form::label('stars', 'Star Rating') !!}
    {!! Form::select('stars', [0, 1, 2, 3, 4, 5], null, ['id' => 'star_rating', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Last Visited') !!}
    {!! Form::text('visited_at', ($location->getVisitedAtAttribute())? $location->getVisitedAtAttribute() : 'yyyy-mm-dd', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tag_list', 'Tags:') !!}
	{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag-list', 'class' => 'form-control',  'multiple']) !!}
</div>
<div class="form-group">
	{!! Form::label('active') !!}
    {!! Form::hidden('active',  0) !!}
	{!! Form::checkbox('active',  1, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submit, ['class' => 'btn btn-success']) !!}
</div>

@section('footer')
	<script>
		$('#tag-list').select2({
			tags: true
		});
	</script>
@endsection