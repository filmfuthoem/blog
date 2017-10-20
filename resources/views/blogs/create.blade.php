@extends('layouts.main')

@section('page_title','CREATE')

@section('content')

<div class="container">
	<h3>Create Blog</h3>
	{!! Form::open (['url' => 'blogs']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title: ') !!}
			{!! Form::text('title',null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('body', 'Body: ') !!}
			{!! Form::textarea('body',null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('published_at', 'Publish_on: ') !!}
			{!! Form::input('date','published_at', 
			Carbon\Carbon::now()->format('Y-m-d'), 
			['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
</div>
@stop