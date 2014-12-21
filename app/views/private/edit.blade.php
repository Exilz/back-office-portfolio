@extends('private.layout')

@section('content')

<h1 class="center">{{$project->title}}</h1>

<div class="row">
	
	{{Form::model($project, ["class", "large-8 columns"])}}

		{{Form::label('Titre')}}
		{{Form::text('title')}}

		{{Form::label('Sous-titre')}}
		{{Form::text('subtitle')}}

		{{Form::label('Description')}}
		{{Form::textarea('desc')}}

		{{Form::label('Logo')}}
		{{Form::text('logo')}}

		{{Form::label('Lien')}}
		{{Form::text('link')}}

		{{Form::submit('Envoyer', ['class' => 'button'])}}

	{{Form::close()}}

	<a href="/admin/{{$project->id}}/delete" class="button alert" onclick="javascript:confirm('Voulez vous vraiment supprimer le projet {{$project->title}} !?');">Supprimer le projet</a>

</div>

@stop