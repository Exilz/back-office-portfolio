@extends('private.layout')

@section('content')

<div class="bo-edit-title">
	<h1 class="center">Slider accueil</h1>
</div>

<div class="row">
	
<!-- 	{{Form::model($images, ["class" => "large-12 columns", "files" => true])}}
		{{Form::text('alt')}}
	{{Form::close()}} -->

	<div class="large-12 columns">
		<form class="dropzone" id="project-images" action="uploadSlider">
			<input type="file" name="image" style="display:none;">
		</form>
	</div>


	<ul>
		@foreach($images as $image)
			<li class="bo-projectImages">
				<img src="../img/slider/{{$image->src}}" alt="{{$image->alt}}" class="bo-project-logo">
				{{Form::open(['url' => 'admin/updateSliderImage/' . $image->id, 'method' => "POST"])}}
					{{Form::text('alt', $image->alt)}}
					{{Form::submit('Màj alt', ["class" => "button bo-maj-button"])}}
					<a href="deleteSliderImage/{{$image->id}}" class="button alert bo-del-button">Supprimer l'image</a>
				{{Form::close()}}
				
			</li>
		@endforeach
	</ul>


</div>

@stop