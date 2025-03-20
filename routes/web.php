<?php

use Illuminate\Support\Facades\Route;

/////////////////////////////////////////////
//                                         //
//                                         //
//       Route vers la page de garde       //
//                                         //
//                                         //
/////////////////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});


/////////////////////////////////////////////
//                                         //
//                                         //
//    Route vers les pages des clients     //
//                                         //
//                                         //
/////////////////////////////////////////////
Route::get('/cliChoix', function () {
    return view('cliChoix');
});


Route::get('/cliConsulter', function () {
    return view('cliConsulter');
});

Route::get('/cliSaisir', function () {
    return view('cliSaisir');
});

/////////////////////////////////////////////
//                                         //
//                                         //
//   Route vers les pages des comptables   //
//                                         //
//                                         //
/////////////////////////////////////////////

Route::get('/comValidation', function () {
    return view('comValidation');
});