@extends('public.layout')
@section('content')
      <div id="top-section">
        <h1>Contact<span class="console-underscore">_</span></h1>
           <p><strong class="contact-typed"></strong></p>
      </div>

      <div class="row">

        <div class="large-5 columns medium-4 columns coords">
          <h3>Mes coordonnées</h3>
            <ul>
              <li><i class="fa fa-mobile li-phone"></i>+33 6 51 15 61 48</li>
              <li><i class="fa fa-envelope li-mail"></i><a href="mailto:m.bertonnier@gmail.com">m.bertonnier@gmail.com</a></li>
            </ul>
          </div>

        <div class="large-6 columns medium-7 columns form">
          <h3>Formulaire de contact</h3>
            <form method="POST">
              <input type="text" placeholder="Votre nom" name="name" required/>
              <input type="email" placeholder="Votre e-mail" name="mail" required />
              <input type="text" placeholder="Sujet du message" name="object" required />
              <textarea name="message" placeholder="Votre message" class="areacontact" required></textarea>
              <p class="center"><button type="submit" name="submit" class="button">Envoyer</button></p>
            </form>
        </div>
       
      </div>
@stop