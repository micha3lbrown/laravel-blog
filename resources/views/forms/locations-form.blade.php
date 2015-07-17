<div class="form-group">
	{!! Form::label('name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tags', 'Tags:') !!}
	{!! Form::select('tags[]', $tags, null, ['class' => 'form-control',  'multiple']) !!}
</div>
<div class="form-group">
	{!! Form::label('active') !!}
	{!! Form::checkbox('active', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submit, ['class' => 'btn btn-success']) !!}
</div>