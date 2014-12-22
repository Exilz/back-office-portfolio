@extends('private.layout')

@section('content')

<h1 class="center">Administration du portfolio</h1>
<p class="right"><a href="/admin/add" class="button">Ajouter</a></p>

<div class="row">
	<ul id="bo-project-list">
	@foreach($projects as $project)
		<li><img src="../img/{{$project->logo}}" class="bo-project-logo"><a href="/admin/{{$project->id}}">{{$project->title}}</a></li>
	@endforeach
	</ul>	
</div>


@stop