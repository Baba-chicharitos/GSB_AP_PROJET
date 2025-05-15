<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title', 'Mon site Laravel')</title>
   <link rel="stylesheet" href="{{ asset('css/sidebarLayout.css') }}">
   @yield('css')
</head>

<body>
   <div name="menu" class="sidebar">
      <img src="{{ asset('images/gsbLogo.png') }}" width="100%">
      <h2>Outils</h2>
      <div class="titreUL">
         <label class="arrow">
            <input checked="checked" type="checkbox">
            <svg viewBox="0 0 320 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="chevron-right">
               <path
                  d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
               </path>
            </svg>
         </label>
         @yield('titreUL', '/')
      </div>

      <li><a href="#">Frais</a></li>
      <ul>
         @yield('ulSideBar')
      </ul>
   </div>
   <div class="content">
      @yield('content')
   </div>

</body>

</html>
