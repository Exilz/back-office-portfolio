@extends('public.layout')
@section('content')
      <div id="top-section">
        <h1>{{trans('texts.title_error')}}</h1>
      </div>

      <div class="row error-404">

        <p>{{trans('texts.error_msg')}}</p>
        <p><a href="/">{{trans('texts.error_back')}}</a></p>

        <img src="img/404.jpg" alt="404 error Grumpy cat">
       
      </div>
@stop