@extends('layouts.sidebarlayout')

@section('title', 'Suivi Remboursement')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/comptable.css') }}">
@endsection

@section('content')
<h1>Suivi de remboursement des Frais</h1>
        <form name="formConsultFrais" method="post" action="chercheFrais.php">
            <h2>Période</h2>
            <label>Mois/Année :</label>
            <input type="date" name="dateConsult" size="12" />
            
            <h2>Frais au forfait</h2>
            <table>
                <tr>
                    <th>Repas midi</th><th>Nuitée</th><th>Étape</th><th>Km</th><th>Situation</th><th>Date opération</th><th>Remboursement</th>
                </tr>
                <tr>
                    <td><label name="repas"></label></td>
                    <td><label name="nuitee"></label></td>
                    <td><label name="etape"></label></td>
                    <td><label name="km"></label></td>
                    <td><label name="situation"></label></td>
                    <td><label name="dateOper"></label></td>
                    <td><label name="remboursement"></label></td>
                </tr>
            </table>
            
            <h2>Hors forfait</h2>
            <table>
                <tr>
                    <th>Date</th><th>Libellé</th><th>Montant</th><th>Situation</th><th>Date opération</th>
                </tr>
                <tr>
                    <td><label name="hfDate1"></label></td>
                    <td><label name="hfLib1"></label></td>
                    <td><label name="hfMont1"></label></td>
                    <td><label name="hfSitu1"></label></td>
                    <td><label name="hfDateOper1"></label></td>
                </tr>
            </table>
            
            <h3>Nb Justificatifs</h3>
            <input type="text" name="hcMontant" size="4" />
        </form>
@endsection