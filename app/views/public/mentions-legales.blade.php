@extends('public.layout')
@section('content')
      <div id="top-section">
        <h1>{{trans('texts.title_mentions')}}</h1>
      </div>

      <div class="row mentions">

      	<h3>{{trans('texts.mentions1')}}</h3>
		<p>Maxime Bertonnier</p>

		<h3>{{trans('texts.mentions2')}}</h3>
		<p>Société 1&1 Internet SARL </p>
		<p>7, place de la Gare</p>
		<p>BP 70109</p>
		<p>57201 Sarreguemines Cedex</p>
 
		<h3>{{trans('texts.mentions3')}}</h3>
		<p>{{trans('texts.mentions4')}}</p>
	</div>
@stop