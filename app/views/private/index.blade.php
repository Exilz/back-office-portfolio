@extends('private.layout')

@section('content')

<h1 class="center">Administration du portfolio</h1>
<p class="right"><a href="/admin/add" class="button">Ajouter</a></p>

<div class="row">
	<ul>
	@foreach($projects as $project)
		<li><a href="/admin/{{$project->id}}">{{$project->title}}</a></li>
	@endforeach
	</ul>	
</div>


@stop