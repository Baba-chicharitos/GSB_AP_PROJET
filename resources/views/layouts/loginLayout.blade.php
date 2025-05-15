<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title', 'Mon site Laravel')</title>
   <link rel="stylesheet" href="{{ asset('css/loginLayout.css') }}">
   @yield('css')

</head>

<body>
   <div class="logoGSB">
      <img src="{{ asset('images/gsbLogo.png') }}" alt="logoGSB" />
   </div>
   <form class="container">
      @yield('content')

   </form>

   @yield('js')
</body>

</html>
