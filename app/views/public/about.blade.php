@extends('public.layout')
@section('content')
      <div id="top-section">
        <h1>à propos<span class="console-underscore">_</span></h1>
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
          <h2>Je m'appelle <br> <strong>Maxime Bertonnier</strong>, je suis<br> <strong>étudiant en développement web</strong>.</h2>
                        <p>J'ai 20 ans, j'habite aujourd'hui à Gap. Actuellement en licence professionnelle <strong>ATC MIW</strong> (Activités et Techniques de Communication
                        Mention Multimédia Internet Webmaster), je n'envisage pas mon avenir professionnel loin du domaine du multimédia et du web.</p>

                        <p>Vous retrouverez ici la plupart de mes réalisations (sites web, applications ou graphisme).
                        Je me suis jusqu'à présent formé principalement de façon autodidacte aux dernières normes et technologies de la programmation web. </p>

                        <p>La licence que je poursuis me permet de renforcer mes compétences principalement en <strong>PHP</strong> et Javascript de façon poussée tout en me formant au milieu professionnel et à ses enjeux.
                        Je suis très attiré par le développement mobile : <strong>Responsive web Design</strong> et développement d'applications pour <strong>smartphone</strong> en utilisant les langages du web.</p>

                        <p>Ma veille technologique est constante et je suis toujours enclin à essayer les nouvelles solutions mises à disposition pour nous, les développeurs. En ce moment, je développe un jeu par navigateur multijoueur grâce à <strong>Node.js</strong> et je tiens à jour un blog traitant de l'actualité du développement web : <a href="http://blogwebdev.fr" target="_blank">Blogwebdev.fr</a></p>

                        <p>N'hésitez pas à prendre contact avec moi pour quoi que ce soit !</p>

        </div>

      </div>

<div class="row">
      <div id="block-pres">
        <article class="block-skills">
          <div class="block-icon"><i class="fa fa-code"></i></div>
          <h3 class="center">Compétences</h3>
            <ul>
              <li><i class="fa fa-check"></i>Javascript / jQuery</li>
              <li><i class="fa fa-check"></i>jQuery Mobile / Apache Cordova</li>
              <li><i class="fa fa-check"></i>Responsive Design</li>
              <li><i class="fa fa-check"></i>PHP / MySQL</li>
              <li><i class="fa fa-check"></i>POO PHP / Pattern MVC</li>
              <li><i class="fa fa-check"></i>WP / Joomla / Prestashop</li>
              <li><i class="fa fa-check"></i>Maîtrise de Photoshop</li>
            </ul>
          </article>
        <article class="block-studies">
          <div class="block-icon"><i class="fa fa-book"></i></div>
          <h3 class="center">Etudes</h3>
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
              <li><i class="fa fa-check"></i>Cinéma & séries</li>
              <li><i class="fa fa-check"></i>Infographie</li>
              <li><i class="fa fa-check"></i>Lecture SF & Fantastique</li>
            </ul>
          </article>
      </div>
</div>
    <p class="center buttonworks"><a href="portfolio" class="button button-works">Découvrez mes travaux</a></p>
    </div>
@stop