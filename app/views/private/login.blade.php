@extends('private.layout')

@section('content')

<h1 class="center">Connexion</h1>

<div class="row">
	{{Form::open(['class' => 'large-4 columns'])}}

		{{Form::label("Nom d'utilisateur")}}
		{{Form::text('username')}}

		{{Form::label("Mot de passe")}}
		{{Form::password('password')}}
		{{Form::submit('Connexion', ['class' => "button"])}}

	{{Form::close()}}
</div>

@stop