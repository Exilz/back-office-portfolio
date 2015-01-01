<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MaximeBertonnier.fr - Administration</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/dropzone_basic.css">
    <link rel="stylesheet" href="../css/dropzone.css">
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="contain-to-grid sticky container-top-bar">
      <nav class="top-bar" data-topbar>
       <ul class="title-area">
         <li class="name">
           <a href="index" title="Accueil"><img src="../img/logo.png" class="logo-top" alt="Maxime Bertonnier" /></a>
         </li>
         <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
       </ul>
       <section class="top-bar-section">
         <ul class="right">

           <li {{ (Request::is('/admin') ? 'class="active"' : '') }}><a href="/admin">Accueil</a></li>
           <li {{ (Request::is('/slider') ? 'class="active"' : '') }}><a href="/admin/slider">Slider</a></li>
           <li><a href="/">Retour site</a></li>
           @if(Auth::check())
              <li><a href="/admin/logout">Déconnexion</a></li>
           @else
              <li><a href="/admin/login">Connexion</a></li>
           @endif
         </ul>
       </section>
    </nav>
    </div>

@if(Session::has('flash_msg')))
  <div class="row">
      <div data-alert class="alert-box {{Session::get('flash_type')}}">
      {{Session::get('flash_msg')}}
      <a href="#" class="close">&times;</a>
    </div>
  </div>
@endif

@yield('content')

     <footer>
      <div class="socials">
        <a href="https://github.com/exilz" title="Github" target="_blank"><i class="fa fa-github logo-footer"></i></a>
        <a href="http://twitter.com/eXiilz" title="Twitter" target="_blank"><i class="fa fa-twitter-square logo-footer"></i></a>
        <a href="https://plus.google.com/113320617130370521187?rel=author" target="_blank"><i class="fa fa-google-plus-square logo-footer"></i></a>
      </div>
      <div class="footer-links">MaximeBertonnier.fr / 2014 / <a href="mentions-legales">Mentions légales</a></div>

     </footer>


    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/ckeditor/ckeditor.js"></script>
    <script src="../js/dropzone.js"></script>
    <script src="../js/backend.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>