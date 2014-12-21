@extends('private.layout')

@section('content')

<h1 class="center">Ajouter un projet</h1>

<div class="row">
	
	{{Form::open(["class", "large-8 columns"])}}

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

</div>

@stop