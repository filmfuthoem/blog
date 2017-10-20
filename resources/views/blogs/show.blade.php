@extends('layouts.main')

@section('page_title', 'DETAILS')

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>{{ $blog->title }}</h3>	
	</div>
	<div class="panel-body">
		{{ $blog->body }}
	</div>
</div>