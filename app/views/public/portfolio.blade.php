@extends('public.layout')
@section('content')
<div class="content-clearfix">
      <div id="top-section">
        <h1>Réalisations<span class="console-underscore">_</span></h1>
          <p><strong class="works-typed"></strong></p>
      </div>

      <div class="row">

        <div id="showcase">
        </div>

        <div class="large-12 columns">

          <ul id="projects">
            @foreach($projects as $project)
              <li>
                <a class="pentry" href="#" title="{{$project->title}}" id="{{$project->id}}"></a>
                <img src="img/{{$project->logo}}" alt="{{$project->id}}">
              </li>
            @endforeach
          </ul>
        </div>       
      </div>
</div>
@stop