@extends('layouts.sidebarLayout')

@section('title', 'Validation Comptable')

@section('css')
   <link rel="stylesheet" href="{{ asset('css/cliSaisir.css') }}">
@endsection

@section('content')
   <div class="content">
      <h1> Saisie </h1>
      <form name="formConsultFrais" method="post" action="chercheFrais.php">
         <h2>Période d'engagement</h2>
         <label>Mois (2 chiffres) : </label>
         <input type="text" name="moisPeriode" size="4" />
         <label>Année (4 chiffres) : </label>
         <input type="text" name="anneePeriode" size="4" />

         <h2>Frais au forfait</h2>
         <table>
            <tr>
               <th>Repas midi</th>
               <th>Nuitée</th>
               <th>Étape</th>
               <th>Km</th>
            </tr>
            <tr>
               <td><input type="text" name="repasmidi"></td>
               <td><input type="text" name="nuitee"></td>
               <td><input type="text" name="etape"></td>
               <td><input type="text" name="km"></td>
            </tr>
         </table>

         <h2>Hors forfait</h2>
         <div style="clear:left;" id="lignes">
            <label class="labelDate">Date</label>
            <label class="labelLib">Libellé</label>
            <label class="labelMt">Montant</label><br />
            <label class="titre"> 01 : </label>
            <input type="text" size="12" name="FRA_AUT_DAT1" class="zone" /><input type="text" size="30"
               name="FRA_AUT_LIB1" class="zone" /><input class="zone" size="5" name="FRA_AUT_MONT1"
               type="text" />
            <input type="button" id="but1" value="+" onclick="ajoutLigne(1);" class="zone" />
         </div>

         <div class="buttons">
            <button type="reset" class="btn-clear">Effacer</button>
            <button type="submit" class="btn-submit">Envoyer</button>
         </div>

      </form>
   </div>

@endsection
