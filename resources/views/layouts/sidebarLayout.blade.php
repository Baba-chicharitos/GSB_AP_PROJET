<!DOCTYPE html>
<html lang="en">
<li>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Mon site Laravel')</title>
  <link rel="stylesheet" href="{{asset('css/base.css')}}">
  @yield('css')
</li>
<body>
  <div name="menu" class="sidebar">
    <img src="logo.png" width="100%">
    <h2><a>Outils</a></h2>
    <ul>
        <li><a href="#">Frais</a></li>
        <ul>
            <li><a href="formValidFrais.htm" >Enregistrer opération</a></li>
        </ul>
    
    </ul>
  </div>
</body>
</html>