@extends('public.layout')
@section('content')
<div class="content-clearfix">
      <div id="top-section">
        <h1>{{trans('texts.title_portfolio')}}<span class="console-underscore">_</span></h1>
          <p><strong class="works-typed"></strong></p>
      </div>

      <div class="row">

        <div id="showcase">
        </div>

        <div class="large-12 columns">

        @if(Session::has('locale') && Session::get('locale') == 'en')
          <div class="panel callout">
            <p class="info">Projects descriptions aren't translated yet, sorry for the inconveniance.</p>
          </div>
        @endif

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