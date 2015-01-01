<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="développement, developpement, web, internet, programmation, réalisation, site, internet, carpentras, avignon, vaucluse, étudiant, services, réseaux de communication, référencement, mobile, android, smartphone, responsive, design" />
    <meta name="description" content="Maxime Bertonnier étudiant en développement et design web. Réalisation de sites internet et applications mobiles et tablettes." />
    <title>Portfolio - Maxime Bertonnier</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <?php include('public/analyticstracking.php'); ?>
    <div class="contain-to-grid sticky container-top-bar">
      <nav class="top-bar" data-topbar>
       <ul class="title-area">
         <li class="name">
           <a href="index" title="Accueil"><img src="img/logo.png" class="logo-top" alt="Maxime Bertonnier" /></a>
         </li>
         <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
       </ul>
       <section class="top-bar-section">

         <ul class="left lang-menu">
           <li {{ (Session::get('locale') == 'fr' ? 'class="active active-lang"' : '') }}><a href="french">Français</a></li>
           <li {{ (Session::get('locale') == 'en' ? 'class="active active-lang"' : '') }}><a href="english">English</a></li>
         </ul>

         <ul class="right">
           <li {{ (Request::is('*index') || Request::is('/') ? 'class="active"' : '') }}><a href="/">{{trans('menu.home')}}</a></li>
           <li {{ (Request::is('*about') ? 'class="active"' : '') }}><a href="about">{{trans('menu.about')}}</a></li>
           <li {{ (Request::is('*portfolio') ? 'class="active"' : '') }}><a href="portfolio">{{trans('menu.portfolio')}}</a></li>
           <li><a href="http://blogwebdev.fr/" target="_blank">{{trans('menu.blog')}}</a></li>
           <li {{ (Request::is('*contact') ? 'class="active"' : '') }}><a href="contact">{{trans('menu.contact')}}</a></li>
         </ul>

       </section>
    </nav>
    </div>

@yield('content')

     <footer>
      <div class="socials">
        <a href="https://github.com/exilz" title="Github" target="_blank"><i class="fa fa-github logo-footer"></i></a>
        <a href="http://twitter.com/eXiilz" title="Twitter" target="_blank"><i class="fa fa-twitter-square logo-footer"></i></a>
        <a href="https://plus.google.com/113320617130370521187?rel=author" target="_blank"><i class="fa fa-google-plus-square logo-footer"></i></a>
      </div>
      <div class="footer-links">MaximeBertonnier.fr / 2014 / <a href="mentions-legales">{{trans('menu.mentions')}}</a></div>

     </footer>


    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/lib.js"></script>
    
    @if(Session::has('locale') && Session::get('locale') == 'fr')
      <script src="js/app.js"></script>
    @endif

    @if(Session::has('locale') && Session::get('locale') == 'en')
      <script src="js/appEN.js"></script>
    @endif

    @if(!Session::has('locale'))
      <script src="js/appEN.js"></script>
    @endif

    <script src="js/folio.js"></script>
    <script>
      $(document).foundation({
        orbit: {
          bullets : false,
          slide_number : false,
          timer_speed : 6000
        }
      });
    </script>
  </body>
</html>