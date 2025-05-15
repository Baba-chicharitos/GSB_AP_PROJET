@extends('layouts.loginLayout')

@section('css')
@endsection

@section('js')
   <script>
      const nameInput = document.getElementById('name');
      const avatar = document.getElementById('imgAvatar');

      nameInput.addEventListener('input', function() {
         const name = nameInput.value;
         avatar.src = `https://api.dicebear.com/9.x/croodles-neutral/svg?seed=${name}`;
      });
   </script>
@endsection

@section('content')
   <div class="avatar">
      <img id="imgAvatar" src="https://api.dicebear.com/9.x/croodles-neutral/svg" alt="avatar" />
   </div>
   <input type="text" id="name" name="userid" class="input-box" placeholder="Nom d’utilisateur" />
   <input type="password" name="userpassword" class="input-box" placeholder="Mot de passe" />
   <button class="login-button">→</button>
   <div class="footer">© 2025 www.gsb.com - All Rights Reserved.</div>
@endsection
