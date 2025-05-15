@extends('layouts.loginLayout')

@section('css')
   <link rel="stylesheet" href="{{ asset('css/cliChoix.css') }}">
@endsection

@section('content')
   <form class="container">
      <div class="avatar">
         <img src="avatar.jpg" alt="avatar">
      </div>
      <p style="font-size: 90%;">Bienvenue, [utilisateur]</p>
      <button name="saisie" class="choix">Saisie</button>
      <button name="consultation" class="choix">Consultation</button>
      <a href="index.html" class="changerCompte"> Changer de compte </a>
      <div class="footer">© 2025 www.gsb.com - All Rights Reserved.</div>
   </form>
@endsection
