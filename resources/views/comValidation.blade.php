@extends('layouts.sidebarLayout')

@section('title', 'Validation Comptable')
  
<!-- à tester si il faut fermer -->

@section(('css'))
  <link rel="stylesheet" href="{{ asset('css/comptable.css') }}">
@endsection

@section('content')

        <h1>Validation des frais</h1>
      

        <h2>Validation des frais par visiteur</h2>
        <form action="" method="post">
        <p>Choisir le visiteur : <select name="lstVisiteur" class="zone"><option value="a131">Villechalane</option></select>
             Mois : <input class="zone" type="text" name="dateValid" size="12" />
        </p>
        
        <h3>Frais au forfait</h3>
        <table>
            <tr>
                <th>Repas midi</th>
                <th>Nuitée</th>
                <th>Étape</th>
                <th>Km</th>
                <th>Situation</th>
            </tr>
            <tr>
                <td><input type="text" name="repasmidi"></td>
                <td><input type="text" name="nuitee"></td>
                <td><input type="text" name="etape"></td>
                <td><input type="text" name="km"></td>
                <td><select name="situation">
                    <option value="E">Enregistré</option>
                    <option value="V">Validé</option>
                    <option value="R">Remboursé</option>
                </select></td>
            </tr>
        </table>

        <h3>Hors forfait</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Libellé</th>
                <th>Montant</th>
                <th>Situation</th>
            </tr>
            <tr>
                <td><input type="text" name="date"></td>
                <td><input type="text" name="libelle"></td>
                <td><input type="text" name="montant"></td>
                <td><input type="text" name="situation"></td>
            </tr>
        </table>

        <p>Nb justificatifs : <input type="text"></p>

        <div class="buttons">
            <button type="reset" class="btn-clear">Effacer</button>
            <button type="submit" class="btn-submit">Envoyer</button>
        </form>
        </div>

@endsection

