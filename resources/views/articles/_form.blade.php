<div class="form-group">
	{!! Form::label('title', 'Name: ') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('body', 'Body: ') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('published_at', 'Publush On: ') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitText, ['class' => 'btn btn-default']) !!}
</div>