@extends('public.layout')

@section('content')
<div class="content">
    <div id="main-content">
      <div class="row">

       <div id="main-presentation">
        <p><strong class="main-name"><span class="console-sup">: > </span>Maxime Bertonnier</strong><span class="console-underscore">_</span></p>
        <p><strong class="main-job"></strong></p>
        <a href="portfolio" class="button button-works">{{trans('texts.btn_discover')}}</a>
        @if(Session::get('locale') == 'fr' || !Session::has('locale'))
          <a href="english" class="button button-english">English version</a>
        @else
          <a href="french" class="button button-english">Version française</a>
        @endif
       </div>

		<ul id="main-slider" data-orbit>
			@foreach($images as $image)
				<li>
          <img src="img/slider/{{$image->src}}" alt="Image Slider {{$image->id}}" />
          <div class="orbit-caption">
            {{$image->alt}}
          </div>
        </li>
			@endforeach
		</ul>
      </div>

     </div>
</div>
@stop