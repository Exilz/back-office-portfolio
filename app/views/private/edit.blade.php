@extends('private.layout')

@section('content')

<div class="bo-edit-title">
	<h1 class="center">{{$project->title}}</h1>
	<img class="bo-project-logo" src="../img/{{$project->logo}}">
</div>

<div class="row">
	
	{{Form::model($project, ["class" => "large-12 columns", "files" => true])}}

		{{Form::label('Titre')}}
		{{Form::text('title')}}

		{{Form::label('Sous-titre')}}
		{{Form::text('subtitle')}}

		{{Form::label('Description')}}
		{{Form::textarea('desc')}}

		{{Form::label('logo')}}
		{{Form::file('logo', '', ['id' => 'logo'])}}

		{{Form::label('Lien')}}
		{{Form::text('link')}}

		{{Form::label('Position du projet')}}
		{{Form::number('position')}}

		{{Form::submit('Envoyer', ['class' => 'button'])}}
		<a href="{{$project->id}}/delete" class="button alert button-del">Supprimer le projet</a>

	{{Form::close()}}
</div>

<div class="row">
	
	<div class="large-12 columns">
		<form class="dropzone" id="project-images" action="uploadImages">
			<input type="hidden" name="id" value="{{$project->id}}" style="display:hidden;"/>
			<input type="file" name="image" style="display:none;">
		</form>
	</div>

</div>

<h2 class="center">Images du carousel</h2>
<div class="row">

@if(count($projectImages) === 0)
	<h3 class="center">Pas encore d'images pour ce projet.</h3>
@else 
<ul>
	@foreach($projectImages as $image)
		<li class="bo-projectImages">
			<img src="../img/projectsImages/{{$image->src}}" class="bo-project-logo">
			{{Form::open(['url' => 'admin/updateImage/' . $image->id, 'method' => "POST"])}}
				{{Form::text('caption', $image->caption)}}
				{{Form::text('alt', $image->alt)}}
				{{Form::submit('Màj', ['class' => 'button bo-maj-button'])}}
			{{Form::close()}}
			<a href="removeImage/{{$image->id}}" class="button alert bo-del-button">Supprimer</a>
		</li>
	@endforeach
</ul>
@endif

</div>

@stop