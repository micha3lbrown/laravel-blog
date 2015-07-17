<div class="form-group">
	{!! Form::label('name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tag_list', 'Tags:') !!}
	{!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control',  'multiple']) !!}
</div>
<div class="form-group">
	{!! Form::label('active') !!}
	{!! Form::checkbox('active', 0,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submit, ['class' => 'btn btn-success']) !!}
</div>