@extends('public.layout')
@section('content')
      <div id="top-section">
        <h1>{{trans('texts.title_about')}}<span class="console-underscore">_</span></h1>
                  <p><strong class="about-typed"></strong></p>
      </div>
<div class="content-clearfix">
      <div class="row">

        <div id="photo-mobile" class="hide-for-small-up center">
          <img src="img/photo.jpg" alt="Maxime Bertonnier développement web" />
        </div>

        <div  class="large-3 columns medium-3 columns columns show-for-medium-up center">
          <img src="img/photo.jpg" alt="Maxime Bertonnier développement web" />
        </div>

        <div class="large-9 columns medium-9 columns small-12 columns pres">
          <h2>{{trans('texts.my_name')}} <br> <strong>Maxime Bertonnier</strong>{{trans('texts.i_am')}}<br> <strong>{{trans('texts.student')}}</strong>.</h2>
                        <p>{{trans('texts.pres1')}}<strong> ATC MIW</strong> {{trans('texts.pres2')}}</p>

                        <p>{{trans('texts.pres3')}} </p>

                        <p>{{trans('texts.pres4')}} <strong>PHP</strong> {{trans('texts.pres5')}}<strong>Responsive web Design</strong> {{trans('texts.pres6')}} <strong>smartphone</strong> {{trans('texts.pres7')}}</p>

                        <p>{{trans('texts.pres8')}} <strong>Node.js</strong> {{trans('texts.pres9')}} <a href="http://blogwebdev.fr" target="_blank">Blogwebdev.fr</a></p>

                        <p>{{trans('texts.pres10')}}</p>

        </div>

      </div>

<div class="row">
      <div id="block-pres">
        <article class="block-skills">
          <div class="block-icon"><i class="fa fa-code"></i></div>
          <h3 class="center">{{trans('texts.skills')}}</h3>
            <ul>
              <li><i class="fa fa-check"></i>Javascript / jQuery</li>
              <li><i class="fa fa-check"></i>jQuery Mobile / Apache Cordova</li>
              <li><i class="fa fa-check"></i>Responsive Design</li>
              <li><i class="fa fa-check"></i>PHP / MySQL</li>
              <li><i class="fa fa-check"></i>POO PHP / Pattern MVC</li>
              <li><i class="fa fa-check"></i>WP / Joomla / Prestashop</li>
              <li><i class="fa fa-check"></i>{{trans('texts.photoshop')}}</li>
            </ul>
          </article>
        <article class="block-studies">
          <div class="block-icon"><i class="fa fa-book"></i></div>
          <h3 class="center">{{trans('texts.studies')}}</h3>
            <ul>
              <li><i class="fa fa-check"></i>2014 - 2015 Licence ATC MIW - Gap</li>
              <li><i class="fa fa-check"></i>2012 - 2014 DUT SRC - Arles</li>
              <li><i class="fa fa-check"></i>2012 - BAC ES - Bien - Carpentras</li>
            </ul>
          </article>
        <article class="block-hobbys">
          <div class="block-icon"><i class="fa fa-headphones"></i></div>
          <h3 class="center">Hobbys</h3>
            <ul>
              <li><i class="fa fa-check"></i>{{trans('texts.cinema_series')}}</li>
              <li><i class="fa fa-check"></i>{{trans('texts.infography')}}</li>
              <li><i class="fa fa-check"></i>{{trans('texts.reading')}}</li>
            </ul>
          </article>
      </div>
</div>
    <p class="center buttonworks"><a href="portfolio" class="button button-works">{{trans('texts.btn_discover')}}</a></p>
    </div>
@stop